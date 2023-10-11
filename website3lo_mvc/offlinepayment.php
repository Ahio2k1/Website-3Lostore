<?php

include 'inc/header.php';


?>
<?php
if(isset($_GET['orderid']) && $_GET['orderid']== 'order'){
	$customer_id = session::get('customer_id');
    $insertOrder = $ct->insertOder($customer_id);
    $delCart = $ct->del_all_data_cart();
    header('Location:success.php');
}
?>
<style>
.box_left{
    width: 50%;
    border: 1px solid #666;
    float: left;
    padding: 3px;
    font-size: 13px;
}
.box_right{
    width: 48%;
    border: 1px solid #666;
    float: right;
    padding: 3px;
    font-size: 13px;
}
a.a_order{
    background: red;
    padding: 7px solid #666;
    float: #fff;
    font-size: 21px;

}
</style>
<form action="" method="POST">
 <div class="main">
    <div class="content">
    	<div class="section group">
		<div class="heading">
    		<h3>Offline Payment</h3>
    		</div>
            <div class="clear"></div>
    	    <div class="box_left"> 
            <div class="cartpage">
			    	
					<?php
					if(isset($update_quantity_cart)){
						echo $update_quantity_cart;
					}
					?>
					<?php
					if(isset($delcart)){
						echo $delcart;
					}
					?>
						<table class="tblone">
							<tr>
                                <th width="15%" style="font-size: 15x;">ID</th>
								<th width="15%" style="font-size: 15px;">Product Name</th>
						
								<th width="15%" style="font-size: 15px;">Price</th>
								<th width="25%" style="font-size: 15px;">Quantity</th>
								<th width="20%" style="font-size: 15px;">Total Price</th>
							</tr>
							<?php
							$get_product_cart = $ct->get_product_cart();
							if($get_product_cart){
								$subtotal = 0;
                                $qty = 0;
                                $i= 0;
							
								while($result = $get_product_cart->fetch_assoc()){
                                    $i++;
									
							?>
							<tr>
                                <td><?php echo $i ?></td>
								<td><?php echo $result['productName']?></td>
								
								<td><?php echo $result['price'].''.'VNĐ'?></td>
								<td>
								
								<?php echo $result['quantity']?>
									
									
								</td>
								<td><?php 
								$total = $result['price'] * $result['quantity'];
								echo $total;
								 ?></td>
								
							</tr>
							<?php
							$subtotal += $total;
							}
							}
							?>
							
							
						</table>
						<?php
						$check_cart =$ct->check_cart();
						if($check_cart){

						
						?>
						<table style="float:right;text-align:left;margin:5px " width="40%">
							<tr>
								<th>Sub Total : </th>
								<td><?php 
									echo $subtotal.' '.'VNĐ';
									Session::set('sum',$subtotal);
									
								 ?></td>
							</tr>
                           
						
							
					   </table>
					   <?php
						}else{
							echo 'Your Cart is Empty!Please Shopping Now.';
						}
					   ?>
					</div>
             </div>
            <div class="box_right">  
            <table class="tblone">
            <?php
            $id = Session::get('customer_id');
            $get_customers =$cs->show_customers($id);
            if($get_customers){
                while($result = $get_customers->fetch_assoc()){

            

            ?>
            <tr>
                <td>Name</td>
                <td></td>
                <td><?php echo $result['name'] ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td></td>
                <td><?php echo $result['address'] ?></td>
            </tr>
            
            <tr>
                <td>Phone</td>
                <td></td>
                <td><?php echo $result['phone'] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td></td>
                <td><?php echo $result['email'] ?></td>
            </tr>
            <tr>
                <td colspan="3"><a href="editprofile.php">Update Profile</a></td>
               
            </tr>
            
            <?php
                    }
                }
            ?>
            </table>
            
            
            </div>
           
 		</div>
        
 		</div>

         <center><a href="?orderid=order"class="a_order">Order Now</a></center><br>
 	</div>
</form>
	 <?php
	include 'inc/footer.php';
	

	?>