<?php

include 'dbh.php';

$id=$_POST['id'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];	
$tel = $_POST['tel'];
$eml = $_POST['eml'];

  if(empty($_POST['uid'])){

	     header("Location:../startbootstrap-grayscale-gh-pages/register.php?error=username");
		
		exit();
	}
	
	//Validate the password 
	if (empty($_POST['pwd'])){
		 header("Location:../startbootstrap-grayscale-gh-pages/register.php?error=pwd");
	
		exit();
	}
	
	
	//Check the two passwords for equality:
	if ($_POST['pwd'] != $_POST['cpwd']) {
		  header("Location:../startbootstrap-grayscale-gh-pages/register.php?error=cpwd");
		
		exit();
	}
	
    if(empty($_POST['eml'])){
		  header("Location:../startbootstrap-grayscale-gh-pages/register.php?error=eml");
		
		exit();
	}
	
	 if(empty($_POST['tel'])){
		  header("Location:../startbootstrap-grayscale-gh-pages/register.php?error=tel");
		
		exit();
	}
	
	else {

    
		$sql= "SELECT uid FROM users WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			 header("Location:../startbootstrap-grayscale-gh-pages/register.php?error=id");
			print '<p class="error">Username Existed!.</p>';
			exit();
		} 
		//If there were no errors, print a success message: 
		else {
			$sql = "INSERT INTO users (uid,pwd,cpwd,eml,tel)
			VALUES ('$uid','$pwd','$cpwd','$eml','$tel')";
			$result = mysqli_query($conn, $sql);
			
			print '<p>You have been successfully registered.</p>';
			header("Location: signin.php");
		}

	}
?>