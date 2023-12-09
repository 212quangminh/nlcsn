<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
  
    // $ma_chuyenbay = $noi_di = $noi_den = $thoi_gian_di = $giaVe = '';
    include_once(__DIR__ . '/connect.php');
    if (isset($_POST['Addhoadon'])) {
        $ten_khachhang = $_POST['tenkhachhang'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $machuyenbay = $_POST['machuyenbay'];
        $noidi = $_POST['noidi'];
        $noiden = $_POST['noiden'];
        $thoigiandi = $_POST['thoigiandi'];
        $giave = $_POST['giave'];
        $ngaydi = $_POST['ngaydi'];
        $ngaydatve = $_POST['ngaydatve'];
    }


    ?>
    <div class="canchinh4">
        <div>Tên khách hàng: <i>
                <?php echo " " . $ten_khachhang; ?>
            </i></div>
        <div>Email: <i>
                <?php echo "" . $email; ?>
            </i></div>
        <div>Số điện thoại: <i>
                <?php echo "" . $sdt; ?>
            </i></div>
        <div>Mã chuyến bay: <i>
                <?php echo " " . $machuyenbay; ?>
            </i></div>
        <div>Nơi đi: <i>
                <?php echo " " . $noidi; ?>
            </i></div>
        <div>Nơi đến: <i>
                <?php echo " " . $noiden; ?>
            </i></div>
        <div>Thời gian đi: <i>
                <?php echo " " . $thoigiandi; ?>
            </i></div>
        <div>Giá vé: <i>
                <?php echo " " . $giave; ?>
            </i></div>
        <div>Ngày đi: <i>
                <?php echo " " . $ngaydi; ?>
            </i></div>
        <div>Ngày lập hóa đơn: <i>
                <?php echo " " . $ngaydatve; ?>
            </i></div>
    </div>
</body>

</html>