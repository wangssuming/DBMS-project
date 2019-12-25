<?php
$servername = "localhost";
$username = "root";
$password = "abn1195";
$dbname = "account";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
