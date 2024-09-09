<?php
$host = 'localhost';  
$db = 'phonephp';
$user = 'root';       
$pass = 'root';         


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
