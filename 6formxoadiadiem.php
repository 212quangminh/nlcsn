
<?php
    include_once(__DIR__ . '/connect.php');

    $diadiem = $_GET['id'];

    $sql = "DELETE FROM `noidinoiden` WHERE `Id_diadiem`='$diadiem'";

    echo '<script language="javascript">alert("Xóa danh mục thành công"); window.location="6quanliquangcaodiadiem.php"</script>';

    $result = mysqli_query($connect, $sql);

    mysqli_close($connect);

    // header('location:dsdanhmuc.php');
?>
