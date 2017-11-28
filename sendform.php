<?php

function setComments($conn) {
	if(isset($_POST['commentSubmit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$rate = $_POST['rate'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments (name, email, date, rate, message) VALUES ('$name', '$email', '$date', '$rate', '$message')";
		$result = mysqli_query($conn, $sql);
	}
}
function getComments($conn) {
	$sql = "SELECT * FROM comments";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='comment-box'><p>";
			echo "Name: ".$row['name']."<br>";
			echo "Email: ".$row['email']."<br>";
			echo "Date: ".$row['date']."<br>";
			echo "Rating: ".$row['rate']." star <br>";
			echo "Commented: ".nl2br($row['message']);
		echo "</p></div>";
	}
}
?>