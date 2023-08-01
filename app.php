<?php

$server = 'localhost';
$database = 'basic';
$username = 'root';
$password = '';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$femail = $_POST['femail'];
$fpass = $_POST['fpass'];


$sql = "INSERT INTO student (fname, femail, fpass) VALUES ('$fname','$femail','$fpass')";

if ($conn->query($sql) === TRUE) {
 header("Location:next.html");
 
exit;
} else {
 echo "Error: ".sql."<br>".$conn->error;
}

$conn->close();
?>