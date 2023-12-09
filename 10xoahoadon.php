<?php
include_once(__DIR__ .'/connect.php');
    
$hoadon = $_GET['id'];

$sql = "DELETE FROM `hoadon` WHERE `Id_hoadon`='$hoadon'";

// echo '<script language="javascript">alert("Xóa danh mục thành công"); window.location="10quanlihoadon.php"</script>';

        echo '<script>
            swal({
                title: "Thành công!",
                text: "Hóa đơn đã được xóa thành công.",
                icon: "success",
                button: "OK",
            }).then(function() {
                window.location = "your_previous_page.php";
            });
        </script>';
    


$result = mysqli_query($connect, $sql);

mysqli_close($connect);

header('location:10quanlihoadon.php');
?>