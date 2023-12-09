<?php
    include_once(__DIR__ . '/connect.php');

    $quangcao = $_GET['id'];

    $sql = "DELETE FROM `quangcao` WHERE `Id_quangcao`='$quangcao'";

    echo '<script language="javascript">alert("Xóa danh mục thành công"); window.location="6quanliquangcaodiadiem.php"</script>';

    $result = mysqli_query($connect, $sql);

    mysqli_close($connect);

    // header('location:dsdanhmuc.php');
?>