<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myfirst";

$name=$_POST["name"];
$email=$_POST["email"];
$note=$_POST["note"];

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    
    echo "DB File";
}


// Create database
$sql = "INSERT INTO `users` (`name`, `email`, `note`) VALUES ('".$name."','". $email ."','". $note."' )";

echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?> 