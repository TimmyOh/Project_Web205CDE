<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
	include('header.php');
?>
   
    <section id="register" class="content-section text-center">
        
     
           
                       <div class="container">
               <br><h1 align="center"><b> Register </b></h1><br>
			   <h3> <?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if (strpos($url, 'error=empty') !== false) {
					print "Fill out all fields";
					
				}
				
				if (strpos($url, 'error=id') !== false) {
					print "Username Existed!";
					
				}
				
				if (strpos($url, 'error=uid') !== false) {
					print "Please enter your username"; 
					
				}
				
				if (strpos($url, 'error=pwd') !== false) {
					print "Please enter your password"; 
					
				}
				
				 if (strpos($url, 'error=cpwd') !== false) {
					print "Your confirmed password does not match the original password"; 
				}
				
				 if (strpos($url, 'error=eml') !== false) {
					print "Please enter your email address"; 
				}
				
				 if (strpos($url, 'error=tel') !== false) {
					print "Please enter your Phone Number"; 
				}
				
				
				
				?></h3>
			   <br><br>
                

				
		<form class="form-horizontal" action="signup.php" method="POST">
            <div class="form-group">
                <label class="col-xs-2 control-label" for="inputSuccess" name="uid">Username</label>
                <div class="col-xs-10">
                    <input type="text"  class="form-control" id="uid" name="uid" placeholder="Username" value="<?php if (isset ($_POST['uid'])) {print htmlspecialchars($_POST['uid']); } ?>"/>
                    
                </div>
            </div>
        <div class="form-group">
            <label class="col-xs-2 control-label" for="inputWarning" name="pwd">Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" value="<?php if (isset ($_POST['pwd'])) {print htmlspecialchars($_POST['pwd']); } ?>">
                    
                </div>
        </div>
    
    <div class="form-group">
            <label class="col-xs-2 control-label" for="inputWarning" name="cpwd">Confirm Password</label>
                <div class="col-xs-10">
                    <input type="password" class="form-control" name="cpwd" placeholder="ConfirmPassword" value="<?php if (isset ($_POST['cpwd'])) {print htmlspecialchars($_POST['cpwd']); } ?>">
                    
                </div>
        </div>
    
					<div class="form-group">
						<label form="inputEmail" class="control-label col-xs-2" name="eml" >Email</label>
						<div class="col-xs-10">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="eml" value="<?php if (isset ($_POST['eml'])) {print htmlspecialchars($_POST['eml']); } ?>"/>
     
							</div>
							</div>
    
    <div class="form-group ">
                <label form="inputphonenumber" class="col-xs-2 control-label" for="inputError">Tel.Phone No.</label>
                <div class="col-xs-10">
                    <input type="number"  class="form-control" placeholder="TelPhone_Num" name="tel" value="<?php if (isset ($_POST['tel'])) {print htmlspecialchars($_POST['tel']); }?> " />
               </div>
                  </div>
                    
                    
        <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
           
        </div>
</form>
                    
            </div>
        
</section>

<?php
	include('footer.php');
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
</body>

</html>
