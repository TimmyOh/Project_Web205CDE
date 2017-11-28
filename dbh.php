<?php

$conn = mysqli_connect("localhost", "root", "", "twicedb");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>