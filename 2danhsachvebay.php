<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Chọn vé idol</title>
    <link rel="stylesheet" href="maybay2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

    </style>
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
            <li class="item"><a href="5dangnhap.php">Đăng Nhập</a></li>
        </ul>
    </div>

    <div class="canchinh2">
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
        <div class="canchinh4">
            <div class="box6">
                <form action="2danhsachvebay.php" method="post" autocomplete="off">
                    <div class="note">
                        <span class="label"><i>Điểm đi</i></span> <br>
                        <select class="control" name="noi_di" required>
                            <option value="">Chọn nơi đi</option>
                            <option value="cần thơ">cần thơ</option>
                            <option value="sài gòn">sài gòn</option>
                            <option value="đà nẵng">đà nẵng</option>
                            <option value="hà nội">hà nội</option>
                        </select>
                    </div>
                    <div class="note">
                        <span class="label"><i>Điểm đến</i></span> <br>
                        <select class="control" name="noi_den" required>
                            <option value="">Chọn nơi đến</option>
                            <option value="cần thơ">cần thơ</option>
                            <option value="sài gòn">sài gòn</option>
                            <option value="đà nẵng">đà nẵng</option>
                            <option value="hà nội">hà nội</option>
                        </select>
                    </div>
                    <div class="note">
                        <span class="label"> <i>Ngày khởi hành</i></span> <br>
                        <input class="control" min="<?php echo date('Y-m-d'); ?>" type="date" name="ngay_di" required>
                    </div>
                    <div class="note">
                        <button class="show" name="savebtn">Tìm Chuyến</button>
                    </div>
                </form>

            </div> <!-- box6 -->
            <div class="box5">
                <?php
                include("connect.php");

                if (isset($_POST['savebtn'])) {

                    $noi_di = $_POST['noi_di'];
                    $noi_den = $_POST['noi_den'];
                    $ngay_di = $_POST['ngay_di'];

                    $noi_di = mysqli_real_escape_string($connect, $noi_di);
                    $noi_den = mysqli_real_escape_string($connect, $noi_den);                                                                                                                                               
                    $ngay_di = mysqli_real_escape_string($connect, $ngay_di);

                    $sql = "SELECT * FROM chuyenbay WHERE noi_di LIKE '%$noi_di%' AND noi_den LIKE '%$noi_den%' AND ngay_di LIKE '%$ngay_di%' AND cho_ngoi > 0 AND (ngay_di <> CURDATE()   OR  ( ngay_di = CURDATE()  AND thoi_gian_di >= NOW()  AND thoi_gian_den > NOW() ))";
                    $result = mysqli_query($connect, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // AND thoi_gian_di >= NOW() AND ngay_di >= NOW()
                            //   AND thoi_gian_di >= NOW() AND thoi_gian_den > NOW() 
                            ?>

                            <h3 class="chuyenbay">
                                <div>
                                    Từ:
                                    <?php echo $row['noi_di']; ?><i>(
                                        <?php echo date('H:i', strtotime($row['thoi_gian_di'])); ?>)
                                    </i>
                                    <i class="fa-solid fa-plane"></i>
                                    Đến:
                                    <?php echo $row['noi_den']; ?><i>(
                                        <?php echo date('H:i', strtotime($row['thoi_gian_den'])); ?>)
                                    </i>
                                    <br>
                                    <br>
                                    Ngày bay:
                                    <i>
                                        <?php echo $row['ngay_di']; ?>
                                    </i>
                                </div>
                                <div>
                                    </i>
                                    Số hiệu:<i>
                                        <?php echo $row['ma_chuyenbay']; ?>
                                    </i>
                                </div>

                                <div>
                                    <form action="8datve.php" method="POST">
                                        <input type="hidden" name="ma_chuyenbay" value="<?php echo $row['ma_chuyenbay']; ?>">
                                        <input type="hidden" name="noi_di" value="<?php echo $row['noi_di']; ?>">
                                        <input type="hidden" name="noi_den" value="<?php echo $row['noi_den']; ?>">
                                        <input type="hidden" name="thoi_gian_di" value="<?php echo $row['thoi_gian_di']; ?>">
                                        <input type="hidden" name="thoi_gian_den" value="<?php echo $row['thoi_gian_den']; ?>">
                                        <input type="hidden" name="gia_ve"
                                            value="<?php echo number_format($row['gia_Ve'], 0, ',', '.'); ?>">
                                        <input type="hidden" name="ngay_di" value="<?php echo $ngay_di; ?>">
                                        &nbsp; &nbsp; &nbsp; &nbsp;
                                        <?php echo number_format($row['gia_Ve'], 0, ',', '.'); ?> VND <br>
                                        <hr>
                                        <button class="fomnut" type="submit" name="book"> Chọn chuyến </button>

                                    </form>
                                </div>
                            </h3>

                            <?php
                        }
                    } else {
                        echo "<div class='alert'>Không có chuyến bay phù hợp hoặc hết chỗ vào ngày " . $ngay_di . " với mã chuyến bay " . $noi_di . ". Vui lòng thử lại.</div>";
                        echo "<button onclick=\"location.href='1timchuyen.php';\">Thử lại</button>";
                    }
                }
                
                ?>
            </div> <!-- box5 -->

            
        </div> <!-- canchinh4 -->
        <div class="box7">
        <h2>Online Flight Booking</h2>	
	<p class="text-light text-center">&copy; <?php echo date('Y');?> - Developed By Le Quang Minh </p>
            </div>
    </div> <!-- canchinh2 -->

    
</body>

</html>