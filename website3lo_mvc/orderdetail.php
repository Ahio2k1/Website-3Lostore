<?php

    include 'inc/header.php'

    
?>
x`

<div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Details Ordered</h2>
					
					
						<table class="tblone">
							<tr>
								
								<th width="20%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="25%">Quantity</th>
								<th width="20%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
							<?php
                            $customer_id = session::get('customer_id');
                            $get_cart_ordered = $ct->$get_cart_ordered($customer_id);
							
							if($get_cart_ordered){

								$qty = 0;
							
								while($result = $get_cart_ordered->fetch_assoc()){
									
							?>
							<tr>
								<td><?php echo $result['productName']?></td>
								<td><img src="admin/uploads/<?php echo $result['image']?>" alt=""/></td>
								<td><?php echo $result['price']?></td>
								<td>
									<form action="" method="post">
										<input type="hidden" name="cartId" value="<?php echo $result['cartId']?>"/>
										<input type="number" name="quantity" min="0" value="<?php echo $result['quantity']?>"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								
								<td><a href="?cartid=<?php echo $result['cartId']?>">Xóa</a></td>
							</tr>
							<?php
							
							}
							}
							?>
                        </table>
							
				
						
						
			
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
<?php
	include 'inc/footer.php';
	

	?>
