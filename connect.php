<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbanhang";  // Tên cơ sở dữ liệu

// Cập nhật cổng MySQL là 3366
$port = 3306;

// Kết nối đến MySQL với cổng 3366
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
} else {
    echo "Kết nối thành công!";
}
?>
