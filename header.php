<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">TWICE Fan Page</a>
		<img src="twice_lg.png" alt="Twice logo" width="100" height="100">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		  <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="team.php">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="songs.php">Songs</a>
            </li>
            <li class="nav-item">
			<div class="dropdown">
              <a class="nav-link js-scroll-trigger" href="gallaries.php">Gallaries &#11167;</a>
				<div class="dropdown-content">
					<a href="gallaries.php">Group Photo</a>
						<a href="twice_member.php">Twice Member</a>
					</div>
				</div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="anm.php">Album & Merchandise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger">
				<?php
					if (isset($_SESSION['id'])){
						echo "<form action='logout.php' >
						<button type=submit class='btn btn-primary'> Log Out </button>
							</form>";
						echo 'Welcome, ' . $_SESSION['uid'];
						}
					else {
						echo "<form action='signin.php' >
						<button type=submit class='btn btn-primary'> Log In </button>
							</form>";
						echo "Welcome, guest";
						}
				?>
			</a>
			</li>
          </ul>
        </div>
      </div>
    </nav>