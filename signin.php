<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
	include('header.php');
?>

    <section id="login" class="content-section text-center">
             <div class="container">
               <br><h1 align="center"><b> Login </b> 
			  </h1><br> <h3> <?php 
				$url = "htttp://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				
				if (strpos($url, 'error=uidpass') !== false) {
					echo "Your username or password is incorrect!";
				}
				
			   else if(!isset($_SESSION['uid'])  || empty($_SESSION['uid'])) {
					echo 'Welcome Guest.';
						} else {
					echo 'Welcome ' . $_SESSION['uid'];
								}; 
			 ?></h3>
       
<br><br><br><br>
      
<form class="form-horizontal" action="login.php" method="POST">
    <div class="form-group">
    <label class="col-xs-2 control-label" for="inputSuccess" >Username</label>
                <div class="col-xs-10">
                    <input type="text"  class="form-control" name="uid" placeholder="Username" />
                    
                    
                </div>
</div>
    
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Password</label>
         <div class="col-xs-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pwd" >
       
         </div>
    </div>
	
    </div>
     <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <button type="submit" class="btn btn-primary">Login</button>
			
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
