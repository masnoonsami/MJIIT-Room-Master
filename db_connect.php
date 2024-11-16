<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'mjiitroommaster_last';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
