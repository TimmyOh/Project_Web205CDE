<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
	include('header.php');
?>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="intro-text">This web page have all the information about Twice which include Profile, Songs and also Merchandise.
				Users can also register for becoming Once, which means the fans of Twice. This webpage is created on 19 September. Created by TWICE Fan Club.</p>
              
            </div>
          </div>
        </div>
      </div>
    </header>
	<br>
	<h2 align="center">TWICE Latest Song</h2>
	<h3 align="center"><u>Likey by TWICE</u></h3>
	<p align="center"><iframe width="800" height="515" src="https://www.youtube.com/embed/V2hlQkVJZhE?rel=0" frameborder="0" allowfullscreen></iframe>
	<br>
	<section id="comment" class="content-section text-center">
       <div class="container" style="border-style: dashed; border-width: 5px; border-left-width: 10px; border-right-width: 10px; border-color: violet">
			<p></p>
			<p align="center" style="font-size:30px; font-weight:bold">Click the "Comment" button to comment for this website.</p>
	
			<a href="comment.php"><button type="submit"  class="btn btn-success btn-lg"> Comment </button></a>
			<p></p>
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
