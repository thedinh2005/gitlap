<?php
// Thông tin kết nối MySQL
$servername = "localhost"; // Máy chủ MySQL
$username = "root";        // Tên người dùng MySQL (mặc định trong XAMPP là 'root')
$password = "";            // Mật khẩu MySQL (mặc định là trống trong XAMPP)
$port=3306;
// Tạo kết nối
$conn = new mysqli($servername, $username, $password,"",$port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error); // Nếu kết nối không thành công
}

// Tạo cơ sở dữ liệu
$dbname = "webbanhang";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

// Kiểm tra kết quả của việc tạo cơ sở dữ liệu
if ($conn->query($sql) === TRUE) {
    echo "Cơ sở dữ liệu '$dbname' đã được tạo thành công";
} else {
    echo "Lỗi khi tạo cơ sở dữ liệu: " . $conn->error;
}

// Đóng kết nối sau khi tạo cơ sở dữ liệu
$conn->close();
?>
