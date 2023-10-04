<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include_once('./connect.php');
    //Lấy dữ liệu nhập vào
    $tendn = addslashes($_POST['user']);
    $matkhau = addslashes($_POST['password']);

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$tendn || !$matkhau) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
    // mã hóa pasword
    // $matkhaunv = md5($matkhaunv);

    $sql_dn = "SELECT `ten_dangnhap`, `password` FROM `nhanvien` WHERE `ten_dangnhap`='$tendn'";
    
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($connect, $sql_dn);
    
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($matkhau!= $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Lưu tên đăng nhập
    $_SESSION['tendn'] = $tendn;
    // echo "Xin chào " . $tendnnv . ". Bạn đã đăng nhập thành công. <a href='./quanly/'>Quản Lý</a>";
    header("Location:6trangchu.php");
    die();
}
?>      