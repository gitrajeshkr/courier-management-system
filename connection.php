<?php
$servername = "localhost";
$username = "Root";
$password = "Rajesh@123";
$database="CMS";

$conn = new mysqli($servername, $username, $password,$database );

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
               