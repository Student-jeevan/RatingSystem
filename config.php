<?php
$server = "localhost";
$username = "root";  
$password = "";      
$dbname = "RatingSystem";
$port = "3307";    
// Create connection
$conn = new mysqli($server, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
