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
<style type="text/css">

</style>
<form action="" method="POST">
 <div class="main">
    <div class="content">
    	<div class="section group">
		<h2 class="success">Success Order</h2>
            
            </div>
           
 		</div>
        
 		</div>

        
 	
</form>
	 <?php
	include 'inc/footer.php';
	

	?>