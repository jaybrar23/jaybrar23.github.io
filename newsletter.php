<?php
$servername = "localhost";
$username = "jay";
$password = "pass";
$dbname = "wt19591504";
$email=filter_input(INPUT_POST, 'email');
if(!empty($email)){
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 	
$sql = "INSERT INTO newsletter(email)
VALUES ('$email')";
if ($conn->query($sql)){
	header("Location:main.html");
}
else{
	echo "no";
}
	}
	else{
		echo "email is empty";
	}
$conn->close();
?>