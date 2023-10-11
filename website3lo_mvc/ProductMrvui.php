
<?php

include 'inc/header.php';
include 'inc/slider.php';

?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3 style="text-align: center;">____________Balo Mr.Vui____________</h3>
    		</div>
    		<div class="clear"></div>
			</div>
	      <div class="section group">
		  <?php
			$product_allvui = $product->getproduct_allvui();
			if($product_allvui){
					while($result = $product_allvui->fetch_assoc()){
			
		  ?>
				<div class="grid_1_of_4 images_1_of_4" style="width: 180px; height: 350px;">
					 <a href="Details.php"><img src="admin/uploads/<?php echo $result['image']  ?>" alt=""  /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 20) ?></p>
					 <p><span class="price"><?php echo $result['price']." "."VND" ?></span></p>
				     <div class="button"><span><a href="Details.php?proid=<?php echo $result['productId'] ?>" class="details">Details</a></span></div>
				</div>
				<?php
					}
					}
				?>
				
			</div>
			
				
			
				
			</div>
    </div>
 </div>
 <?php
	include 'inc/footer.php';
	

	?>

