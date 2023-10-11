
<?php

	include 'inc/header.php';
	//include 'inc/slider.php';

	?>
	<?php
	 
	 $login_check = Session::get('customer_login');
	 if($login_check){
		 header('Location:order.php');
	 }
	
	 
	?>
	
	<?php 
	
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
		
		
		$insertCustomers = $cs->insert_customers($_POST);
   }
	?>
	<?php 
	
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
		
		
		$login_Customers = $cs->login_customers($_POST);
   }
	?>

 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
			<?php
				if(isset($login_Customers)){
					echo $login_Customers;
				}

			?>
        	<form action="" method="POST" >
                	<input type="text" name="email" class="field" placeholder="Enter Email.....">
                    <input  type="password" name="password" class="field" placeholder="Enter Password.....">
                 
                 <p class="note">If you doesn't has account & can click here <a href="resgistration.php">Resgistration</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Sign In"></div></div>
					</form>
                    </div>
		
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 <?php
	include 'inc/footer.php';
	

	?>

