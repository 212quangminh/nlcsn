<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>taolich idol5</title>
    <link rel="stylesheet" href="maybay10.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

    </style>
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
            <li><a class="menu" href="7allchuyenbay.php">Quản lý chuyến bay</a></li>
            <li><a class="menu" href="1timchuyen.php">Đăng suất</a></li>
        </ul>
    </div>
    <h1>Quản lí hóa đơn</h1>
    
    <form class="canchinh" action="10timhoadon.php" method="post">
    <div> Tên: <input class="in" type="text" name="ten"></div> &nbsp;&nbsp;
    <div> Email: <input  class="in" type="text" name="email"></div>&nbsp;&nbsp;
    <div> SDT: <input class="in" type="text" name="sdt"></div>&nbsp;&nbsp;
    <button class="show" name="find">Tìm hóa đơn</button>
    </form>
    <table>
        <tr>
            <th>Tên khách hàng </th>
            <th>Email</th>
            <th>SDT</th>
            <th>Mã</th>
            <th>Nơi đi</th>
            <th>Nơi đến</th>
            <th>Thời gian đi</th>
            <th>Giá vé</th>
            <th>Ngày đi</th>
            <th>Ngày đặt</th>
            <th>Chỗ ngồi</th>
            <th>Trạng thái</th>
            <th>Xóa</th>
        </tr>
        <?php
        include_once(__DIR__ . '/connect.php');
        $khachhang = mysqli_query($connect, "SELECT *FROM `hoadon` ORDER BY `Id_hoadon` DESC");
        while ($row_khachhang = mysqli_fetch_array($khachhang)) {
            $ngaydi = date("Y-m-d H:i:s");
            $ngayhientai = $row_khachhang['ngaydi'].''. $row_khachhang['thoigiandi'];
            if($ngaydi > $ngayhientai) {
                $hieuluc = " Hết hiệu lực";
            }else{
                $hieuluc= "Còn hiện lực";
            }
            
            ?>
            <tr>
                <td>
                    <?php echo $row_khachhang['tenkhachhang']; ?>
                </td>
                <td>
                    <?php echo $row_khachhang['email']; ?>
                </td>
                <td>
                    <?php echo $row_khachhang['sdt']; ?>
                </td>
                <td>
                    <?php echo $row_khachhang['machuyenbay']; ?>
                </td>
                <td>
                    <?php echo $row_khachhang['noidi']; ?>
                </td>
                <td>
                    <?php echo $row_khachhang['noiden']; ?>
                </td>
                <td>
                    <?php echo $row_khachhang['thoigiandi']; ?>
                </td>
                
                <td>
                <?php echo number_format($row_khachhang['giave']) . " VND"; ?>
                </td>
                <td>
                    <?php echo $row_khachhang['ngaydi'];   ?>
                   
                </td>
                <td>
                    <?php echo date('l d-m-Y', strtotime($row_khachhang['ngaydatve'])); ?>
                </td>
                <td>
                    <?php echo $row_khachhang['chongoi'];   ?>
                </td>
                <td>
                    <?php echo $hieuluc;?>
                </td>
                <td> 
                    <a href="#" id="btnDelete" title="xoa" onclick="deleteConfirmation(<?php echo $row_khachhang['Id_hoadon']; ?>)"> 
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a> 
                </td>
                
            </tr>
            <?php
        }
        ?>

    </table>
    <div class="note0">
    <h2>Online Flight Booking</h2>	
	<p class="text-light text-center">&copy; <?php echo date('Y');?> - Developed By Le Quang Minh </p>
    
</div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function deleteConfirmation(id) {
        swal({
            title: "Bạn có chắc chắn?",
            text: "Bạn có muốn xóa hóa đơn này không?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "10xoahoadon.php?id="+id;
            } 
        });
    }
</script>

</html>