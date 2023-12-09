<?php
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt

if (!isset($_POST['ten_dangnhap'])) {
    die('');
}

//Nhúng file kết nối với database
include('connect.php');
header('Content-Type: text/html; charset=UTF-8');


//Lấy dữ liệu từ file dangky.php
$Id_nv = addslashes($_POST['Id_nv']);
$ten_nhanvien = addslashes($_POST['ten_nhanvien']);
$ten_dangnhap = addslashes($_POST['ten_dangnhap']);
$password = addslashes($_POST['password']);
$sdt = addslashes($_POST['sdt']);
$email = addslashes($_POST['email']);


//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$Id_nv || !$ten_nhanvien || !$ten_dangnhap || !$password || !$sdt || !$email) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

// Mã khóa mật khẩu
// $password = md5($password);

//Kiểm tra tên đăng nhập này đã có người dùng chưa
$sql = "SELECT * FROM `nhanvien` WHERE `Id_nv` = '$Id_nv' OR `ten_nhanvien` = '$ten_nhanvien' OR `ten_dangnhap` = '$ten_dangnhap' OR `password` = '$password' OR `sdt` = '$sdt' OR `email` = '$email'";

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // Sử dụng javascript để thông báo
    echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="dangky.php";</script>';
    // Dừng chương trình
    die();
}

$sql_dk = "INSERT INTO `nhanvien`(`Id_nv`,`ten_nhanvien`,`ten_dangnhap`,`password`,`sdt`,`email`)
VALUE('{$Id_nv}','{$ten_nhanvien}','{$ten_dangnhap}','{$password}','{$sdt}','{$email}')";
$dangky = mysqli_query($connect, $sql_dk);


//Thông báo quá trình lưu
if ($dangky) {
    // echo "Bạn đã đăng ký thành công. <a href='index.php'>Về trang chủ</a>. <a href='dangnhap.php'>Đăng nhập ngay</a>.";
    echo '<script language="javascript">
		        if(confirm("Bạn đã đăng ký thành công. Bạn có muốn đăng nhập không?")){
			        document.location="5dangnhap.php";
		        }else{
			        document.location="index.php";
		        }
	        </script>';
} else {
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='5dangky.php'>Thử lại</a>";
}


?>