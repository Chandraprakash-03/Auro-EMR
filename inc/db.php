<?php
$servername = "autorack.proxy.rlwy.net";
$username = "root";
$password = "elqRhQlrDyACdBPbFxcTRoIZfjOSffbL";
$database = "railway";
$port = 53612;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
