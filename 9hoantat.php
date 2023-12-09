<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="maybay9.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box2">
        <ul><li class="logo"><img src="https://vietwave.com.vn/dulichviethoan/upload/files/chung/398_3985633_vietnam_airlines_png_logo_vietnam_airline_vector_1_.png"
                                        alt="logo" width="100" height="50"></li></ul>
        <ul class="list">
                        <li class="item"> <a href="1timchuyen.php">Trang Chủ</a> </li>
                        <li class="item"><a href="12timhoadon.php">Tìm Hóa Đơn</a></li>
                        <li class="item"> <a href="3gioithieu.php">Giới Thiệu</a> </li>
                        <li class="item"> <a href="4lienhe.php">Liên Hệ</a> </li>
                        <li class="item"> <a href="5dangnhap.php">Đăng Nhập</a></li>
        </ul>
    </div>
    <div class="canchinh4">
    <div class="box4">
        <div><h1 class="p p1">1. Chọn chuyến bay</h1></div>
        <div><h1 class="p p2">2. Nhập thông tin</h1></div>
        <div><h1 class="p p3">3. Đặt vé</h1></div>
    </div>
    <div class="canchinh3">
    <?php
    include_once(__DIR__ . '/connect.php');
    if(isset($_POST['book2'])){
        $ma_chuyenbay=$_POST['ma_chuyenbay'];
        $noi_di=$_POST['noi_di'];
        $noi_den=$_POST['noi_den'];
        $thoi_gian_di=$_POST['thoi_gian_di'];
        $thoi_gian_den=$_POST['thoi_gian_den'];
        $giaVe=$_POST['gia_ve'];
        $ngay_di=$_POST['ngaydi'];
        $ngaydatve=$_POST['ngaydatve'];
        $sql = "SELECT cho_ngoi FROM chuyenbay WHERE ma_chuyenbay = $ma_chuyenbay";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $cho_ngoi_truoc = $row['cho_ngoi'];
    $sql = "UPDATE chuyenbay SET cho_ngoi = cho_ngoi - 1 WHERE ma_chuyenbay = $ma_chuyenbay";
    mysqli_query($connect, $sql);
    $cho_ngoi_sau = $cho_ngoi_truoc - 1;
    //echo "Số ghế trước khi trừ: $cho_ngoi_truoc<br>";
    //echo "Số ghế sau khi trừ: $cho_ngoi_sau<br>";
}
    if(isset($_POST['tenkhachhang'])){
        $ten_khachhang = $_POST['tenkhachhang'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
    }
    ?>
    <form action="" method="POST">
        <div class="canchinh5">
        <div><h2>Thông tin khách hàng</h2>
            <div class="note3">Tên khách hàng:<input type="text" name="tenkhachhang" value="<?php echo $ten_khachhang; ?>" ></div>
            <div class="note3">Email:<input type="text" name="email" value="<?php echo $email; ?>" ></div>
            <div class="note3"> SDT:<input type="text" name="sdt" value="<?php echo $sdt; ?>" ></div>
            <div class="note3">Ngày đặt:<input type="text" name="ngaydatve" value="<?php echo date("Y/m/d h:i:s"); ?>" ></div>
        </div>
        <div><h2>Thông tin chuyến bay</h2>
            <div class="note3">Nơi đi:<input type="text" name="noidi" value="<?php echo $noi_di; ?>" ></div>
            <div class="note3">Nơi đến:<input type="text" name="noiden" value="<?php echo $noi_den; ?>" ></div>
            <div class="note3">Thời gian đi:<input type="text" name="thoigiandi" value="<?php echo $thoi_gian_di; ?>"></div>
            <div class="note3">Thời gian đến:<input type="text" name="thoigianden" value="<?php echo $thoi_gian_den; ?>" ></div>
            <div class="note3">Ngày đi:<input type="text" name="ngaydi" value="<?php echo $ngay_di; ?>" ></div>
            <div class="note3">Chỗ ngồi:<input type="text" name="chongoi" value="<?php echo $cho_ngoi_truoc;?>" ></div>
            <div class="note3">Số hiệu:<input type="text" name="machuyenbay" value="<?php echo $ma_chuyenbay; ?>" ></div>
            <div class="note3">Giá:<input type="text" name="giave" value="<?php echo $giaVe; ?>" ></div>
        </div>
        </div>
       
        
            
        <button class="show" name="Addhoadon" >Đặt vé</button>
    </form>
    <?php
    if(isset($_POST['Addhoadon'])){
        $ten_khachhang=$_POST['tenkhachhang'];
        $email=$_POST['email'];
        $sdt=$_POST['sdt'];
        $machuyenbay=$_POST['machuyenbay'];
        $noidi=$_POST['noidi'];
        $noiden=$_POST['noiden'];
        $thoigiandi=$_POST['thoigiandi'];
        $thoigianden=$_POST['thoigianden'];
        $giave=$_POST['giave'];
        $ngaydi=$_POST['ngaydi'];
        $ngaydatve=$_POST['ngaydatve'];
        $cho_ngoi_truoc=$_POST['chongoi'];
        $erros = [];
        $sqlInsert = "INSERT INTO `hoadon`(`tenkhachhang`,`email`,`sdt`,`machuyenbay`,`noidi`,`noiden`,`thoigiandi`,`thoigianden`,`giave`,`ngaydi`,`ngaydatve`,`chongoi`) 
        VALUE ('$ten_khachhang','$email','$sdt','$machuyenbay','$noidi','$noiden','$thoigiandi','$thoigianden','$giave','$ngaydi','$ngaydatve','$cho_ngoi_truoc')";
        
        
        mysqli_query($connect, $sqlInsert);
        echo '<script language="javascript">alert("thêm thành công";</Script>';
        mysqli_close($connect);
        header('location:14thucamon.php');

    }
    ?>
    </div>
    </div>
</body>
</html>