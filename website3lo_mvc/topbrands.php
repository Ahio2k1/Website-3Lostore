
<?php

include 'inc/header.php';
include 'inc/slider.php';

?>
<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Mr Vui 

			<p><h5><a href="ProductMrvui.php">Xem Tất Cã</h5></p>
			</h3>
    		</div>
			
    		<div class="clear"></div>
    	</div>
		<div class="section group">
		  <?php
			$product_Vui = $product->getproduct_Vui();
			if($product_Vui){
					while($result = $product_Vui->fetch_assoc()){
			
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
		<div class="content_bottom">
    		<div class="heading">
    		<h3>Eastpak

			<p><h5><a href="ProductEas.php">Xem Tất Cã</h5></p>
			</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="section group">
		  <?php
			$product_eas = $product->getproduct_eas();
			if($product_eas){
					while($result = $product_eas->fetch_assoc()){
			
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
		<div class="content_bottom">
    		<div class="heading">
    		<h3>Jansport

			<p><h5><a href="ProductJan.php">Xem Tất Cã</h5></p>
			</h3>
			
    		</div>
			
    		<div class="clear"></div>
    	</div>
		<div class="section group">
		  <?php
			$product_Jan = $product->getproduct_Jan();
			if($product_Jan){
					while($result = $product_Jan->fetch_assoc()){
			
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
 <?php
	include 'inc/footer.php';
	

	?>