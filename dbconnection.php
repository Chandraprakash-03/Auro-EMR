<?php
require __DIR__ . '/vendor/autoload.php'; 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); // Load environment variables from .env

$servername = "mysql-3b7bbd86-chandraprakashcp003-9888.g.aivencloud.com";
$username = "avnadmin";
$password = "AVNS_6yhL-Ak_-vLcsMcc7fu";
$database = "defaultdb";
$port = 28600;

// SSL configuration (optional, depends on provider)
$ssl_options = [
    MYSQLI_OPT_SSL_VERIFY_SERVER_CERT => true,
    MYSQLI_CLIENT_SSL => true
];

// Create connection
$con = mysqli_init();

// Set SSL options (if required by the server)
mysqli_options($con, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

// Establish the connection
if (!mysqli_real_connect($con, $servername, $username, $password, $database, $port, null, MYSQLI_CLIENT_SSL)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
// else{
//     echo("Connected Successfully");
// }

// Check the connection
if ($con->connect_errno) {
    die("Connection failed: " . $con->connect_error);
}

// echo "Connected successfully!";
?>
