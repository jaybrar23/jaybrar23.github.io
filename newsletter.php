<?php
$servername = "localhost";
$username = "jay";
$password = "pass";
$dbname = "assignment1";
$email=filter_input(INPUT_POST, 'email');
if(!empty($email)){
//start connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 	
	
//insert values

$sql = "INSERT INTO newsletter(email)
VALUES ('$email')";
if ($conn->query($sql)){
	echo "yes";
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