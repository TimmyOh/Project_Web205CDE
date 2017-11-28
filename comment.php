<?php
session_start();
?>
<?php 
	date_default_timezone_set('Asia/Kuala_Lumpur');
	include 'dbh.php';
	include 'sendform.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
	include('header.php');
?>


    <section class="content-section">
    <p>Please complete this form to submit your comment:</p>
	<?php
	echo '<form action="'.setComments($conn).'" method="post">
			<p>Name:  <input type="text" name="name" size="20"> </p>
			<p>Email Address: <input type="text" name="email" size="20" > </p>
			<input type="hidden" name="date"  value="'.date("Y-m-d H:i:s").'" >
			<p>Rating: <input type="text" name="rate" size="5" /> <br /> (Rate this website between 1 - 10)</p> 
			<p>Comments: </p> <textarea class="textarea_com" name="message" ></textarea><br>
				
			<button class="button_com" type="submit" name="commentSubmit">Send Comment</button>

		</form>';
	
	echo '<h2>Comments Section</h2>';
	getComments($conn);
	?>
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
