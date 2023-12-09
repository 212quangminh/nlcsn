<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>Trang chủ idol0</title>
        <link rel="stylesheet" href="maybay9.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
                integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
        <div class="box2">

                <ul>
                        <li class="logo">
                                <img src="https://vietwave.com.vn/dulichviethoan/upload/files/chung/398_3985633_vietnam_airlines_png_logo_vietnam_airline_vector_1_.png"
                                        alt="logo" width="100" height="50">
                        </li>
                </ul>
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
                        <div>
                                <h1 class="p p1">1. Chọn Chuyến bay</h1>
                        </div>
                        <div>
                                <h1 class="p p2">2. Nhập thông tin</h1>
                        </div>
                        <div>
                                <h1 class="p p3">3. Đặt vé</h1>
                        </div>
                </div>
                <div class="canchinh3">
                        <?php
                        // $ma_chuyenbay = $noi_di = $noi_den = $thoi_gian_di = $giaVe = '';
                        include_once(__DIR__ . '/connect.php');
                        if (isset($_POST['book2'])) {
                                $ma_chuyenbay = $_POST['ma_chuyenbay'];
                                $noi_di = $_POST['noi_di'];
                                $noi_den = $_POST['noi_den'];
                                $thoi_gian_di = $_POST['thoi_gian_di'];
                                $giaVe = $_POST['gia_ve'];
                                $ngay_di = $_POST['ngaydi'];
                                $ngaydatve = $_POST['ngaydatve'];
                                $sql = "UPDATE chuyenbay SET cho_ngoi = cho_ngoi - 1 WHERE ma_chuyenbay = $ma_chuyenbay";
                                mysqli_query($connect, $sql);
                        }

                        if (isset($_POST['tenkhachhang'])) {
                                $ten_khachhang = $_POST['tenkhachhang'];
                                $email = $_POST['email'];
                                $sdt = $_POST['sdt'];

                        }
                        ?>

                        
        <form   method="post">
        <div class="canchinh1">
                        <div>Ngày đặt<input type="text" name="ngaydatve" value="<?php echo date("Y/m/d h:i:s") ?>"></div>
                        <div>ngày đi<input type="text" name="ngaydi" value="<?php echo $ngay_di; ?>"></div>
                        <div>giá vé<input type="text" name="giave" value="<?php echo $giaVe; ?>"></div>
                        <div>thời gian đi<input type="text" name="thoigiandi" value="<?php echo $thoi_gian_di; ?>"></div>
                        <div>nơi đến<input type="text" name="noiden" value="<?php echo $noi_den; ?>"></div>
                        <div>nơi đi<input type="text" name="noidi" value="<?php echo $noi_di; ?>"></div>
                        <div>mã số hiêu<input type="text" name="machuyenbay" value="<?php echo $ma_chuyenbay; ?>"></div>
                        <div>sdt<input type="text" name="sdt" value="<?php echo $sdt; ?>"></div>
                        <div>email<input type="text" name="email" value="<?php echo $email; ?>"></div>
                        <div>tên<input  type="text" name="tenkhachhang" value="<?php echo $ten_khachhang; ?>"></div>
                
                
                
                <button name="Addhoadon">hoàn tất đặt vé</button>
        </div>
        </form>
                        
                        <?php

                        if (isset($_POST['Addhoadon'])) {
                                $ten_khachhang = $_POST['tenkhachhang'];
                                $email = $_POST['email'];
                                $sdt = $_POST['sdt'];
                                $machuyenbay = $_POST['machuyenbay'];
                                $noidi = $_POST['noidi'];
                                $noiden = $_POST['noiden'];
                                $thoigiandi = $_POST['thoigiandi'];
                                $giave = $_POST['giave'];
                                $ngay_di = $_POST['ngaydi'];
                                $ngaydatve = $_POST['ngaydatve'];
                                // $errors = [];

                                $sqlInsert = "INSERT INTO `hoadon`(`tenkhachhang`,`email`,`sdt`,`machuyenbay`,`noidi`,`noiden`,`thoigiandi`,`giave`,`ngaydi`,`ngaydatve`) 
                                VALUES ('$ten_khachhang','$email','$sdt','$machuyenbay','$noidi','$noiden','$thoigiandi','$giave','$ngay_di','$ngaydatve')";
                                
                                mysqli_query($connect, $sqlInsert);


                                echo '<script language="javascript">alert("Thêm danh mục thành công");</script>'; // Đóng kết nối
                                mysqli_close($connect);
                                header('location:14thucamon.php');

                        }
                        ?>
                </div><!-- canchinh3 -->
        </div><!-- canchinh4 -->
</body>

</html>