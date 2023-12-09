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

        <?php
        include_once(__DIR__ . '/connect.php');
        $machuyenbay = $_GET['id'];
        $query = mysqli_query($connect, "SELECT * FROM `chuyenbay` where `ma_chuyenbay`='$machuyenbay'");
        $row = mysqli_fetch_assoc($query);


        ?>


        <div class="shadow">
                <form action="" name="frmEdit" id="frmEdit" method="POST">
                        <table class="box3">



                                <tr>
                                        <th>Nơi đi</th>
                                        <td>
                                                <input type="text" name="noidi" id="noidi"
                                                        value="<?php echo $row['noi_di'] ?>" />
                                        </td>
                                </tr>


                                <tr>
                                        <th>Nơi đến</th>
                                        <td>
                                                <input type="text" name="noiden" id="noiden"
                                                        value="<?php echo $row['noi_den'] ?>" />
                                        </td>
                                </tr>


                                <tr>
                                        <th>Ngày đi </th>
                                        <td>
                                                <input type="date" name="ngaydi" id="ngaydi"
                                                        value="<?php echo $row['ngay_di'] ?>" />
                                        </td>
                                </tr>

                                <tr>
                                        <th>Thời gian</th>
                                        <td>
                                                <input type="time" name="thoigian" id="thoigian"
                                                        value="<?php echo $row['thoi_gian_di'] ?>" />
                                        </td>
                                </tr>

                                <tr>
                                        <th>Giá vé </th>
                                        <td>
                                                <input type="text" name="giave" id="giave"
                                                        value="<?php echo $row['gia_Ve'] ?>" />
                                        </td>
                                </tr>

                                <tr>
                                        <th>Số ghế</th>
                                        <td>
                                                <input type="text" name="soghe" id="soghe"
                                                        value="<?php echo $row['cho_ngoi'] ?>" />
                                        </td>
                                </tr>

                                <tr>
                                        <th>Hoàn tất</th>
                                        <td>
                                                <button name="btnSave">Ok</button>
                                        </td>
                                </tr>


                        </table>
                </form>
        </div>
</body>

<?php
if (isset($_POST['btnSave'])) {

        $noidi = $_POST['noidi'];

        $noiden = $_POST['noiden'];
        $ngaydi = $_POST['ngaydi'];
        $thoigian = $_POST['thoigian'];
        $giave = $_POST['giave'];
        $soghe = $_POST['soghe'];

        $connect = new mysqli($server, $username, $password, $dbname);
        if ($connect->connect_error) {
                die("Connect failed:" . $connect->connect_error);
        }
        $sql = "UPDATE `chuyenbay` SET `noi_di`='$noidi', `noi_den`='$noiden',
                                        `ngay_di`='$ngaydi', `cho_ngoi`='$soghe',
                                        `thoi_gian_di`='$thoigian', `gia_ve`='$giave' WHERE `ma_chuyenbay`='$machuyenbay'";


        if ($connect->query($sql) === TRUE) {
                // echo $thoigian;
                echo '<script language="javascript">alert("mã chuyến bay ' . $machuyenbay . ' cập nhật thành công"); window.location="7allchuyenbay.php"</script>';
        } else {
                echo "Error updating record: " . $connect->error;
        }

        $connect->close();

        // header('location:7allchuyenbay.php'); 
}





?>

</html>