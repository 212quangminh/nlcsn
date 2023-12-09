<!DOCTYPE html>
<html>

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
            <h1>Thêm quảng cáo</h1>
        </div>

    <div class="shadow">
        <form action="" name="frmCreate" id="frmCreate" method="POST" enctype="multipart/form-data">
            <table class="box3">
                <tr>
                    <td>
                        Thêm ảnh
                    </td>
                    <td><input type="file" name="anh" id="anh"  ></td>
                </tr>
                <tr></tr>
                    <td>
                        Nơi đi
                    </td>
                    <td><input type="text" name="noidii" required></td>
                </tr>
                <tr>
                    <td>
                        Nơi đến
                    </td>
                    <td><input type="text" name="noidenn" required></td>
                </tr>
                <tr>
                    <td>
                       Ngày đi
                    </td>
                    <td><input type="date" name="ngaydii" required></td>
                </tr>
                <tr>
                    <td>
                        <button class="show" name="btnAd">Lưu quảng cáo</button>
                        <a class="show" href="6quanliquangcaodiadiem.php">Trở về</a>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        include_once(__DIR__ . '/connect.php');

        if (isset($_POST['btnAd'])) {
            $anh = $_FILES['anh']['name'];
            $anh_tmp = $_FILES['anh']['tmp_name'];
            $noidii = $_POST['noidii'];
            $noidenn = $_POST['noidenn'];
            $ngaydii = $_POST['ngaydii'];
            $errors = [];
            if (isset($_FILES['anh']))
            {
                // Nếu file upload không bị lỗi,
                // Tức là thuộc tính error > 0
                if ($_FILES['anh']['error'] > 0)
                {
                    echo 'File Upload Bị Lỗi';
                }
                else{
                    // Upload file
                    move_uploaded_file($_FILES['anh']['tmp_name'], './image1/'.$_FILES['anh']['name']);
                    echo '<script language="javascript">alert("Thêm thành công");</script>';
                }
            }
            else{
                echo 'Bạn chưa chọn file upload';
            }
            $sqlInsert = "INSERT INTO `quangcao`(`anh`,`noi_dii`, `noi_denn`,`ngay_dii`)
                        VALUES ('$anh','$noidii', '$noidenn', '$ngaydii')";


            mysqli_query($connect, $sqlInsert);
        }
        ?>
    </div>
</body>
<?php

?>

</html>