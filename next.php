<?php

$server = 'localhost';
$database = 'basic';
$username = 'root';
$password = '';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$finame = $_POST['finame'];
$flname= $_POST['flname'];
$faddress= $_POST['faddress'];
$fgender=$_POST['fgender'];
$femail=$_POST['femail'];
$fphn=$_POST['fphn'];
$fdob=$_POST['fdob'];
$fps=$_POST['fps'];


$sql = "INSERT INTO studentdb (finame, flname, faddress,fgender,femail,fphn,fdob,fps) VALUES ('$finame','$flname','$faddress','$fgender','$femail','$fphn','$fdob','$fps')";

if ($conn->query($sql) === TRUE) {
 echo "Data inserted successfully.Thank you registering";
}
else 
{
 echo "Error: ".sql."<br>".$conn->error;
}


$conn->close();
?>