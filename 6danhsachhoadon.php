<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Chọn vé idol</title>
    <link rel="stylesheet" href="maybay13.css">
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
    
    <?php
    


    include("connect.php");

    if (isset($_POST['find'])) {

        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
     
        $ten = mysqli_real_escape_string($connect, $ten);
        $email = mysqli_real_escape_string($connect, $email);
        $sdt = mysqli_real_escape_string($connect, $sdt);
       
        $sql = "SELECT * FROM `hoadon` WHERE tenkhachhang LIKE '%$ten%' AND email LIKE '%$email%' AND sdt LIKE '%$sdt%' ";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $currentDateTime = date("Y-m-d H:i:s");

                // So sánh ngày và giờ hiện tại với ngày và giờ bay
                $flightDateTime = $row['ngaydi'] . ' ' . $row['thoigiandi'];
        
                if ($currentDateTime > $flightDateTime) {
                    $validity = " Hết hiệu lực";
                } else {
                    $validity = "Còn hiệu lực";
                }
              ?>
            
            <div class="box3">
                <div class="box4">
                    <div class="box">
                            <div class="note1">Customer Name: <br> <h1 class="h1" ><?php echo $row['tenkhachhang']?></h1></div>
                            <div>Email: <br> <h1 class="h1" ><?php echo $row['email']?></h1> </div>
                            <div>Phone: <br> <h1 class="h1" ><?php echo $row['sdt']?></h1> </div>
                            <div>Booking Date: <br> <h1 class="h1" ><?php echo $row['ngaydatve']?></h1> </div>
                    </div>
                    <div>
                        <h1 class="h32">VietNam Airline</h1> <hr>
                    <div class="box1">
                        <div >  
                            <div>From:  <h1 class="h12"><?php echo $row['noidi']?></h1>  </div>
                            <div>Boarding Time:  <h1 class="h12"><?php echo $row['thoigiandi']?></h1> </div>
                            <div>Date:  <h1 class="h12"><?php echo $row['ngaydi']?></h1> </div>
                            <div>Flight:  <h1 class="h12"><?php echo $row['machuyenbay']?></h1> </div>
                            
                        </div>
                        <div >
                            <div>To:   <h1 class="h12"> <?php echo $row['noiden']?></h1> </div>
                            <div>Arrival time:  <h1 class="h12"><?php echo $row['thoigianden']?></h1> </div>
                            <div>Ticket Money: <h1 class="h12"><?php echo $row['giave']?></h1>  </div>
                            <div>Seat: <h1 class="h12"> <?php echo $row['chongoi']?></h1></div>
                        </div>
                    </div>
                    </div>
                    <div class="box0">
                    <!-- <p><?php //echo $validity; ?></p> -->
                    </div>
                    
                </div>
            </div>
           
               <?php
            }
        } else {
            echo "<script>alert('Không tìm thấy hóa đơn phù hợp. Vui lòng thử lại.'); window.location = '12timhoadon.php';</script>";
        }
    }

    ?>
   
               

</body>

</html>