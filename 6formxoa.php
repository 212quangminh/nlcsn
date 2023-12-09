<?php
include_once(__DIR__ .'/connect.php');
    
$machuyenbay = $_GET['id'];

$sql = "DELETE FROM `chuyenbay` WHERE `ma_chuyenbay`='$machuyenbay'";

echo '<script language="javascript">alert("Xóa danh mục thành công"); window.location="7allchuyenbay.php"</script>';

$result = mysqli_query($connect, $sql);

mysqli_close($connect);

// header('location:dsdanhmuc.php');
?>