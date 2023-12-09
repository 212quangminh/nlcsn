<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Trang chủ idol0</title>
    <link rel="stylesheet" href="maybay1.css">
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
            <li class="item"> <a class="a" href="1timchuyen.php">Trang Chủ</a> </li>
            <li class="item"> <a class="a" href="12timhoadon.php">Tìm Hóa Đơn</a></li>
            <li class="item"> <a class="a" href="3gioithieu.php">Giới Thiệu</a> </li>
            <li class="item"> <a class="a" href="4lienhe.php">Liên Hệ</a> </li>
            <li class="item"> <a class="a" href="5dangnhap.php">Đăng Nhập</a></li>
        </ul>
    </div>
    
    <div class=back>
        <div class="box-black">
            <form action="2danhsachvebay.php" method="post" autocomplete="off">
                <div class="canchinh2">
                    <div>

                        <div class="canchinh2">
                            <div>

                                <i class="fa-solid fa-plane-departure"></i>
                                <span class="label"><i>Điểm khởi hành</i></span>
                                <br>

                                <select class="control" name="noi_di" required>
                                    <option value="">Chọn nơi đi</option>
                                    <?php
                                    include_once(__DIR__ . '/connect.php');
                                    $diadiem = mysqli_query($connect, "SELECT *FROM `noidinoiden` ORDER BY `Id_diadiem` ASC");
                                    while ($row_diadiem = mysqli_fetch_array($diadiem)) {
                                        ?>
                                        <option value=<?php echo $row_diadiem['diadiem']; ?>> <?php echo $row_diadiem['diadiem']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div>
                                <i class="fa-solid fa-plane use"> </i>
                            </div>
                            &nbsp;
                            <div>
                                <i class="fa-solid fa-plane-arrival"></i>
                                <span class="label"><i>Điểm đến</i></span>
                                <br>
                                <select class="control" name="noi_den" required>
                                    <option value="">Chọn nơi đến</option>
                                    <?php
                                    include_once(__DIR__ . '/connect.php');
                                    $diadiem = mysqli_query($connect, "SELECT *FROM `noidinoiden` ORDER BY `Id_diadiem` ASC");
                                    while ($row_diadiem = mysqli_fetch_array($diadiem)) {
                                        ?>

                                        <option value=<?php echo $row_diadiem['diadiem']; ?>> <?php echo $row_diadiem['diadiem']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="canchinh2">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                                <span class="label"> <i>Ngày khởi hành</i></span> <br>
                                <input class="control" min="<?php echo date('Y-m-d'); ?>" type="date" name="ngay_di"
                                    required>
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div>
                                <i class="fa-solid fa-ticket"></i>
                                <span class="label" for="cho_ngoi"><i>Số lượng vé</i></span> <br>
                                <input class="control" type="number" id="cho_ngoi" name="cho_ngoi" min="1" max="100"
                                    placeholder="số vé">
                            </div>
                        </div>
                        <h2> Vui lòng quý khách nhập các thông tin cần thiết </h2>
                    </div>

                    <div>
                        <br>
                        <div>
                            <img src="https://www.vemaybay.vn/api/imagefilter/crop/540/248/resize-31298732.png" alt=""
                                width="500px" height="210px">
                        </div>
                        <button class="show" name="savebtn"> <i
                                class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;&nbsp;Tìm Chuyến</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="canchinh1"></div>
    <h1 class="h1" >Khám phá điểm đến</h1>
    <div class="canchinh4">
    <?php
    include_once(__DIR__ . '/connect.php');
    $quangcao = mysqli_query($connect, "SELECT *FROM `quangcao` ORDER BY `Id_quangcao` ASC");
    while ($row_quangcao = mysqli_fetch_array($quangcao)) {
        ?>
        <form action="2danhsachvebay.php" class="chuyendong" method="post" autocomplete="off">
            <img src="./image1/<?php echo $row_quangcao['anh']; ?>" alt=""  width="450px" height="216px" >
            <div>
            <input type="text" class="note2" name="noi_den" value="<?php echo $row_quangcao['noi_dii']; ?>">
                <input type="text" class="note2" name="noi_di" value="<?php echo $row_quangcao['noi_denn']; ?>">
                
            </div>
            <hr>
            <div class="note3">
                 <div><input type="text" class="note2" name="ngay_di" value="<?php echo $row_quangcao['ngay_dii']; ?>"></div>
                 <div><button class="sho" name="savebtn"> <i
                                class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;&nbsp;Xem Ngay</button></div>
            </div>
        </form>
        <?php
    }
    ?> 
    </div>


<div class="note1">
    <h1>Vì sao bạn nên chọn chúng tôi?</h1>
</div>

<div class="note">
    <div></div>
    <div><img src="https://www.vemaybay.vn/api/imagefilter/crop/181/155/support_24-7.png" alt=""> 
    <br>
    <h1>Hỗ trợ 24/7</h1>
    
    </div>
    <div><img src="https://www.vemaybay.vn/api/imagefilter/crop/181/155/gia-ve-tot.png" alt="">
    <h1>Giá vé tốt nhất</h1>
    
    </div>
    <div><img src="https://www.vemaybay.vn/api/imagefilter/crop/181/155/dich-vu-da-nang.png" alt="">
    <h1>Dịch vụ đa dạng</h1>
    
    </div>  
    <div><img src="https://www.vemaybay.vn/api/imagefilter/crop/181/155/giao-ve-tan-noi.png" alt="">
    <h1>Giao vé tận nơi</h1>
    </div>  
    <div></div>
</div>
<div class="note">
    <h4></h4>
<h4>Luôn luôn săn sàng tư vấn <br> và giải đáp thắc mắc của Khách <br> hàng 24/7</h4>
<h4>Đảm bảo giá vé máy bay tốt nhất <br> cho nhu cầu đặt mua vé máy bay <br> theo các chặng khác nhau của <br> Khách hàng</h4>
<h4>Ngoài dịch vụ vé máy bay chung tôi <br> còn có dịch vụ thuê xe và khách sạn <br> phục vụ Khách hàng</h4>
<h4>Giao vé tận nơi nhanh chóng, uy tín, <br> nhận vé mới thanh toán</h4>
<h4></h4>
</div>


<div class="note0">
    <h1>Online Flight Booking</h1>	
	<p class="text-light text-center">&copy; <?php echo date('Y');?> - Developed By Le Quang Minh </p>
    
</div>
</body>
</html>