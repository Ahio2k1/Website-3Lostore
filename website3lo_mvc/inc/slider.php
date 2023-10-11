
<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
			<?php
			$getLastestVui =$product->getLastestVui();
			if($getLastestVui){
				while($reultVui = $getLastestVui->fetch_assoc()){

				
			
			?>
				<div class="listview_1_of_2 images_1_of_2" >
					<div class="listimg listimg_2_of_1">
						 <a href="Details.php"> <img src="admin/uploads/<?php echo $reultVui['image']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Mr Vui</h2>
						<p><?php echo $reultVui['productName'] ?></p>
						<div class="button"><span><a href="Details.php?proid=<?php echo $reultVui['productId'] ?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php
			   }
				}
			   ?>		
			   <?php
			$getLastestEastpak =$product->getLastestEastpak();
			if($getLastestEastpak){
				while($reultEastpak = $getLastestEastpak->fetch_assoc()){

				
			
			?>
				<div class="listview_1_of_2 images_1_of_2" >
					<div class="listimg listimg_2_of_1">
						  <a href="Details.php"><img src="admin/uploads/<?php echo $reultEastpak['image']?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Eastpak</h2>
						  <p><?php echo $reultEastpak['productName'] ?></p>
						  <div class="button"><span><a href="Details.php?proid=<?php echo $reultEastpak['productId'] ?>">Add to cart</a></span></div>
					</div>
				</div>
				<?php
			   }
				}
			   ?>


			   <?php
			$getLastestJansport =$product->getLastestJansport();
			if($getLastestJansport){
				while($reultJansport = $getLastestJansport->fetch_assoc()){
			?>
			</div>
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2" >
					<div class="listimg listimg_2_of_1">
						 <a href="Details.php"> <img src="admin/uploads/<?php echo $reultJansport['image']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Jansport</h2>
						<p><?php echo $reultJansport['productName'] ?></p>
						<div class="button"><span><a href="Details.php?proid=<?php echo $reultJansport['productId'] ?>">Add to cart</a></span></div>
				   </div>
			   </div>
			   <?php
			   }
				}
			   ?>	
			   			
			   <?php
			$getLastestCrumpler =$product->getLastestCrumpler();
			if($getLastestCrumpler){
				while($reultCrumpler = $getLastestCrumpler->fetch_assoc()){

				
			
			?>
				<div class="listview_1_of_2 images_1_of_2" >
					<div class="listimg listimg_2_of_1">
						  <a href="Details.php"><img src="admin/uploads/<?php echo $reultCrumpler['image']?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Crumpler</h2>
						  <p><?php echo $reultCrumpler['productName'] ?></p>
						  <div class="button"><span><a href="Details.php?proid=<?php echo $reultCrumpler['productId'] ?>">Add to cart</a></span></div>
					</div>
				</div>
				<?php
			   }
				}
			   ?>	
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><a href="products.php"><img src="images/banner.jpg" alt=""/></li></a>
						<li><a href="ProductMrvui.php"><img src="images/bannerMrvui.jpg" alt=""/></li></a>
						<li><a href="ProductMrvui.php"><img src="images/about.jpeg" alt=""/></li></a>
						<li><a href="products.php"><img src="images/14.jpg" alt=""/></li></a>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>