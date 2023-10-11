
<?php

include 'inc/header.php';
//include 'inc/slider.php';

?>
<?php


		
		?>
    	<div class="register_account">
    		<h3>Register New Account</h3>
			<?php
			if(isset($insertCustomers)){
				echo $insertCustomers;
			}
			?>
    		<form>
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Enter Name..."  >
							</div>							
							
							<div>
								<input type="text" name="address"  placeholder="Enter Address...">
							</div>
                            <input type="text" name="city"  placeholder="Enter City...">
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="phone"  placeholder="Enter phone...">
						</div>
		    			<div>
						<input type="text" name="email"  placeholder="Enter email...">	
				 		</div>		        
	
		           
				  
				  		<div>
						<input type="text" name="password"  placeholder="Enter Password..." >
						</div>
		    			</td>
		    		</tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Create Account"></div></div>
		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
        </div>
        </div>  	
       <div class="clear"></div>
    </div>
 </div>
            <?php
	include 'inc/footer.php';
	

	?>
