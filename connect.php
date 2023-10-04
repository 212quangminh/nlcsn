<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "vemaybay";      // Khai báo database

// Kết nối database
$connect = new mysqli($server, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Không thể kết nối :" . $conn->connect_error);

}

//lấy tiếng việt
mysqli_set_charset($connect,"utf8");
?>