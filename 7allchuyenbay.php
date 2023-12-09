<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>taolich idol5</title>
        <link rel="stylesheet" href="maybay7.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>   
            
        </style>
    </head>
    <body>
        
    <div class="box1">
                <ul>
                    <li class="logo">
                        <img src="https://vietwave.com.vn/dulichviethoan/upload/files/chung/398_3985633_vietnam_airlines_png_logo_vietnam_airline_vector_1_.png" alt="logo" width="100" height="50">
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
        include_once(__DIR__.'/connect.php');
        
      
        ?>
        <div class="note1">
            <h1>Quản lí chuyến bay</h1>
        </div>
        
       <div>
       <div class="note2"> <a class="show" href="6formthem.php"> Thêm chuyến bay</a> </div>
        <table>
        
                <tr>
                    <th >Mã chuyến bay</th>
                    <th >Nơi đi</th>
                    <th >Nơi đến</th>
                    <th >Ngày đi </th>
                    <th >Thời gian</th>
                    <th >Giá vé </th>
                    <th >Số ghế</th>
                    <th>Trạng thái</th>
                    <th >Sửa</th>
                    <th>Xóa</th>
                </tr>
        
            <?php
                $chuyenbay= mysqli_query($connect,"SELECT *FROM `chuyenbay` ORDER BY `ma_chuyenbay`  DESC" );
                while ($row_chuyenbay =mysqli_fetch_array($chuyenbay)){
                    $currentDateTime = date("Y-m-d H:i:s");

                    // So sánh ngày và giờ hiện tại với ngày và giờ bay
                    $flightDateTime = $row_chuyenbay['ngay_di'] . ' ' . $row_chuyenbay['thoi_gian_di'];

                    if ($currentDateTime < $flightDateTime) {
                        $validity = "Còn hiệu lực";
                    } else {
                        $validity = "Hết hiệu lực";
                    }
            ?>
                <tr>
                    <td> <?php echo $row_chuyenbay['ma_chuyenbay'];?></td>
                    <td> <?php echo $row_chuyenbay['noi_di'];?></td>
                    <td> <?php echo $row_chuyenbay['noi_den'];?></td>
                    <td> <?php echo $row_chuyenbay['ngay_di'];?>  -- <?php echo $row_chuyenbay['ngay_den'];?></td>
                    <td> <?php echo $row_chuyenbay['thoi_gian_di'];?> -- <?php echo $row_chuyenbay['thoi_gian_den'];?></td>
                    <td> <?php echo number_format($row_chuyenbay['gia_Ve'],0,".",".");?></td>
                    <td> <?php echo $row_chuyenbay['cho_ngoi'];?></td>
                    <td><?php echo $validity; ?></td>
                    <td>  <a href="6formthaydoi.php?id=<?php echo $row_chuyenbay['ma_chuyenbay'];?>"  title="sua"> <i class="fa-solid fa-wrench"></i></a></td>
                    <td>  <a href="6formxoa.php?id=<?php echo $row_chuyenbay['ma_chuyenbay'];?>"onclick="return confirm('Bạn có muốn xóa nó?')" id="btnDelete" title="xoa"> <i class="fa fa-trash" aria-hidden="true"></i></a> </td>
                </tr>
                <?php 
                }
        ?>
        
        </table>
        </div>
        <div class="note0">
    <h2>Online Flight Booking</h2>	
	<p >&copy; <?php echo date('Y');?> - Developed By Le Quang Minh </p>
    
</div>
    </body> 
</html>





