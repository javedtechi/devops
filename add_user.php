<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "myfirst";

$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "SELECT * from `users`";
$result = $conn->query($sql);




// if ($conn->query($sql) === TRUE) {
//     echo "Ndata collected successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }

$conn->close();

// var_dump($_POST);


