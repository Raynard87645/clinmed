
<?php

$dbhost = $_ENV['DB_HOST'];
$dbusername = $_ENV['DB_USERNAME'];
$dbpassword = $_ENV['DB_PASSWORD'];
$dbdatabase = $_ENV['DB_DATABASE'];

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbdatabase);


// // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
