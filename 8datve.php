<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Trang chủ idol0</title>
    <link rel="stylesheet" href="maybay8.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style></style>
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
    
        <div class="box-black">
            <?php
            // include("connect.php");
            if (isset($_POST['book'])) {
                $ma_chuyenbay = $_POST['ma_chuyenbay'];
                $noi_di = $_POST['noi_di'];
                $noi_den = $_POST['noi_den'];
                $thoi_gian_di = $_POST['thoi_gian_di'];
                $giaVe = $_POST['gia_ve'];
                $ngay_di = $_POST['ngay_di'];
                $thoi_gian_den = $_POST['thoi_gian_den'];
                $date = DateTime::createFromFormat('m/d/Y', $ngay_di);
            }
            ?>

            <div class="note8">
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
                <div class="note6">
                    <h2>Thông tin chuyến bay</h1>
                </div>

                <div class="note">
                    <div>
                        <div class="note5">Địa điểm : <i>&nbsp;
                                <?php echo "" . $noi_di; ?>
                                &nbsp;<i class="fa-solid fa-plane"></i>&nbsp;
                                <?php echo "" . $noi_den; ?>
                            </i></div>
                        <div class="note5">Thời gian : <i>
                                (
                                <?php echo date('H:i', strtotime($thoi_gian_di)); ?> )
                                &nbsp;<i class="fa-solid fa-plane"></i>&nbsp;
                                (
                                <?php echo date('H:i', strtotime($thoi_gian_den)); ?> )
                            </i></div>
                        <div class="note5">Mã chuyến bay: <i>
                                <?php echo " " . $ma_chuyenbay; ?>
                            </i></div>
                    </div>
                    <div>

                        <div class="note5">Giá vé: <i>
                                <?php echo "" . $giaVe; ?> VND
                            </i></div>
                        <div class="note5">Ngày đi: <i>
                                <?php echo $ngay_di; ?>
                            </i></div>

                    </div>


                </div>
<!-- readonly -->
                <div class="note0">
                    <form action="9hoantat.php" method="post">
                        <div class="note6">
                            <h2>Thông tin khách hàng</h2>
                        </div>
                        <div class="note7">
                            <div class="note1">
                                <div class="note4">Tên khách hàng<br>
                                    <input class="note2" type="text" name="tenkhachhang" required><br><br>
                                </div>
                                <div class="note4">Email<br>
                                    <input class="note2" type="email" name="email" required><br><br>
                                </div>
                                <div class="note4">SDT<br>
                                    <input class="note2" type="text" name="sdt" required><br><br>
                                </div>
                            </div>
                           

                        </div>


                        <input type="hidden" name="ma_chuyenbay" value="<?php echo $ma_chuyenbay; ?>">
                        <input type="hidden" name="noi_di" value="<?php echo $noi_di; ?>">
                        <input type="hidden" name="noi_den" value="<?php echo $noi_den; ?>">
                        <input type="hidden" name="thoi_gian_di" value="<?php echo $thoi_gian_di; ?>">
                        <input type="hidden" name="thoi_gian_den" value="<?php echo $thoi_gian_den; ?>">
                        <input type="hidden" name="gia_ve" value="<?php echo $giaVe; ?>">
                        <input type="hidden" name="ngaydi"
                            value="<?php echo $ngay_di; //echo date('d-m-Y', strtotime($ngay_di)); ?>">

                            <input type="hidden" name="ngaydatve" value="<?php echo date("Y/m/d ") ?>">
                        <div>
                            <button class="show" type="submit" name="book2"> Xác nhận thông tin </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

</body>

</html>