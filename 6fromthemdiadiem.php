<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
        <title>all chuyenbay idol4</title>
        <link rel="stylesheet" href="maybay6.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
                integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="box1">
        <ul>
            <li class="logo">
                <img src="https://vietwave.com.vn/dulichviethoan/upload/files/chung/398_3985633_vietnam_airlines_png_logo_vietnam_airline_vector_1_.png"
                    alt="logo" width="100" height="50">
            </li>
        </ul>
        <ul class="list">
            <li><a class="menu" href="6trangchu.php">Trang chủ</a></li>
            
            <li><a class="menu" href="10quanlihoadon.php">Hóa đơn</a></li>
            <li><a class="menu" href="6quanliquangcaodiadiem.php">Quảng cáo và địa điểm</a></li>
            <li><a class="menu" href="7allchuyenbay.php">Chuyến Bay</a></li>
            <li><a class="menu" href="1timchuyen.php">Đăng Xuất</a></li>
        </ul>
    </div>
    <div class="note1">
            <h1>Thêm địa điểm</h1>
        </div>
    <form action="" name="frmCreate" id="frmCreate" method="POST">
        <table class="box3">

            <tr>
                <td>
                    Địa điểm
                </td>
                <td><input type="text" name="diadiem" required></td>
            </tr>
            <tr>
                <td>
                    <button class="show "name="btnAddd">Lưu địa điểm</button>
                    <a class="show " href="6quanliquangcaodiadiem.php">Trở về</a>
                </td>
            </tr>
        </table>
    </form>
    <?php
    include_once(__DIR__ . '/connect.php');
    if (isset($_POST['btnAddd'])) {
        $diadiem = $_POST['diadiem'];
        $errors = [];
        $sqlInsert = "INSERT INTO `noidinoiden`(`diadiem`) VALUES ('$diadiem')";
        mysqli_query($connect, $sqlInsert);
        echo '<script language="javascript">alert("Thêm danh mục thành công");</script>';
        mysqli_close($connect);
    }
    ?>
</body>

</html>