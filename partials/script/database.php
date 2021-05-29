

<?php

// Database connection

// Connection info
$server = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'hotel';
$port = 3307;



// Open connection

$conn = new mysqli("$server:$port", $username, $password, $db_name);

// Check connection
if ($conn && $conn->connect_error) {
    die('Connection error');
};
