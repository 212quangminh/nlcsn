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
                    <li><a class="menu" href="">Hóa đơn</a></li>
                    <li><a class="menu" href="7allchuyenbay.php">Quản lý chuyến bay</a></li>
                    <li><a class="menu" href="">Đăng suất</a></li>
                </ul>
        </div>
        <?php
        include_once(__DIR__.'/connect.php');
        // dIR timf kieur
        ?>
        <table>
        
                <tr>
                    <th >Mã chuyến bay</th>
                    <th >Nơi đi</th>
                    <th >Nơi đến</th>
                    <th >Ngày đi </th>
                    <th >Thời gian</th>
                    <th >Giá vé </th>
                    <th >Số ghế</th>
                    <th >Sữa</th>
                    <th>xóa</th>
                </tr>
        
            <?php
                $chuyenbay= mysqli_query($connect,"SELECT *FROM `chuyenbay` ORDER BY `ma_chuyenbay` ASC" );
                while ($row_chuyenbay =mysqli_fetch_array($chuyenbay)){
            ?>
                <tr>
                    <td> <?php echo $row_chuyenbay['ma_chuyenbay'];?></td>
                    <td> <?php echo $row_chuyenbay['noi_di'];?></td>
                    <td> <?php echo $row_chuyenbay['noi_den'];?></td>
                    <td> <?php echo $row_chuyenbay['ngay_di'];?></td>
                    <td> <?php echo $row_chuyenbay['thoi_gian_di'];?></td>
                    <td> <?php echo number_format($row_chuyenbay['gia_Ve'],0,".",".");?></td>
                    <td> <?php echo $row_chuyenbay['cho_ngoi'];?></td>
                    <td>  <a href="6formthaydoi.php?id=<?php echo $row_chuyenbay['ma_chuyenbay'];?>" id="btnUpdate" title="sua"> sua</a></td>
                    <td>  <a href="6formthaydoi.php?id=<?php echo $row_chuyenbay['ma_chuyenbay'];?>" id="btnDelete" title="xoa"> xoa</a> </td>
                </tr>
             
          
        <?php 
                }
        ?>
            
                   
        </table>
    </body>
</html>





