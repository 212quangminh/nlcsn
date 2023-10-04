<!DOCTYPE html>
<html>

                               
    <head>

        <meta charset="utf-8">
        <title>Chọn vé idol</title>
        <link rel="stylesheet" href="maybay2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
                     
        </style>
    </head>
    <body>
     
        <div class="box1">
            <ul>
                <li class="item1">
                    <img src="https://vietwave.com.vn/dulichviethoan/upload/files/chung/398_3985633_vietnam_airlines_png_logo_vietnam_airline_vector_1_.png" alt="logo" width="140" height="80">
                </li>
            </ul>
            <ul>
                <li class="item1"> 
                    <h1>tổng đài hỗ trợ: </h1> 
                    <h1 class="mau">19001000</h1>               
                </li>
            </ul>
        </div>
        <!-- trang chủ -->
        <div class="box2">
            <ul class="list">
                <li class="item"> <a href="1timchuyen.php">Trang Chủ</a> </li>
                <li class="item"> <a href="3gioithieu.php">Giới Thiệu</a> </li>
                <li class="item"> <a href="4lienhe.php">Liên Hệ</a> </li>
            </ul>
            <ul class="list">
                <li class="item"><a href="5dangnhap.php">Đăng Nhập</a></li>
            </ul>
        </div> 
        <?php 
        include( "connect.php");
            if( isset($_POST['savebtn'])){
                                $noidungtimkiem = $_POST['noidung'];
                            }
                            else {
                                echo $noidungtimkiem = false;
                            }
                            

                            
                            
                            $sql = "SELECT * FROM chuyenbay WHERE noi_di LIKE '%$noidungtimkiem%'";
                            $result = mysqli_query($connect,$sql);
                           

                            while( $row = mysqli_fetch_assoc($result))
                            {        
                              echo $row["ma_chuyenbay"];  
                                
                           ?>
<div class="white"> 
        <div class="box5">
                <h1 class=" p1">    <?php echo $row['noi_di'];?>
                    <i class="fa-solid fa-plane"> </i>
                                    <?php echo $row['noi_den'];?>
                </h1>
        </div>



      
        <!-----------------hộp đen---------------------->
        
        <table class="box3">
                <tr>
                    <th >Mã chuyến bay</th>
                    <th >Ngày khởi hành</th>
                    <th >Thời gian cất cánh</th>
                    <th >Giá vé</th>
                    <th >Đặt</th>
                </tr>
                <tr>
                
               


                            
                                
                    <td><?php echo $row['ma_chuyenbay'];?></td>
                    <td><?php echo $row['ngay_di'];?></td>
                    <td><?php echo $row['thoi_gian_di'];?></td>
                    <td><?php echo $row['gia_Ve'];?></td>
                    <td>
                        <input class="tick" name="gender" type="button" value="Đặt Vé">
                    </td>
                </tr> 
                <?php
            }
                    ?>
                
              
            
                     
        </table>
</div>     
    </body>
</html>








