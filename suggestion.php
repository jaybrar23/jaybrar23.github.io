<?php
$servername = "localhost";
$username = "jay";
$password = "pass";
$dbname = "wt19591504";
$name=filter_input(INPUT_POST, 'name');
$year=filter_input(INPUT_POST, 'year');
$author=filter_input(INPUT_POST, 'author');
$why=filter_input(INPUT_POST, 'why');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 	
	
//insert values

$sql = "INSERT INTO suggestions(name,year,author,why)
VALUES ('$name','$year','$author,','$why')";
if ($conn->query($sql)){
	header("Location:suggest.html");
}
else{
	echo "no";
}
$conn->close();
?>