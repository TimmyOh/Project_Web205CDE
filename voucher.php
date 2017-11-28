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
			 
			 <p style="font-size:30px; font-weight:bold">Thank you for logging into this website. This is the free T-shirt for registered users.</p>
			 <br>
			 <p align="center"> <img src="t-shirt.jpg"  alt="" width="500px">
		  <br>
		  <input type="button" class= "btn btn-info round pull-right" value="Print This Page"  
	onclick="javascript:window.print()" />
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
