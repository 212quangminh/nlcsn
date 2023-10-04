<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>all chuyenbay idol4</title>
        <link rel="stylesheet" href="maybay6.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
<body>
        <div class="box1">
                <ul>
                    <li class="logo">
                        <img src="https://vietwave.com.vn/dulichviethoan/upload/files/chung/398_3985633_vietnam_airlines_png_logo_vietnam_airline_vector_1_.png" alt="logo" width="100" height="50">
                    </li>
                </ul>
                <ul class="list">
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Hóa đơn</a></li>
                    <li><a href="">Quản lý chuyến bay</a></li>
                    <li><a href="">Đăng suất</a></li>
                </ul>
        </div>
        
        <?php
       include_once(__DIR__.'/connect.php'); 
       $machuyenbay=$_GET['id'];
       $query=mysqli_query($connect,"SELECT * FROM `chuyenbay` where `ma_chuyenbay`='$machuyenbay'");
       $row=mysqli_fetch_array($query); 
        ?>
        
        
        <div class="shadow">
            <form action="" name="frmEdit" id="frmEdit" method="POST">
            <table class="box3">
                    <tr>
                        <th >Mã chuyến bay</th>
                            <td>
                                    <input type="text" name="machuyenbay" id="machuyenbay"
                                    value="<?php echo $row['ma_chuyenbay']?>"/>
                            </td>
                    </tr>
                
                       
                    <tr>
                            <th >Nơi đi</th>
                            <td>
                    <input type="text" name="noidi" id="noidi"
                    value="<?php echo $row['noi_di']?>"/>     
                            </td>
                    </tr>
                    

                    <tr>
                            <th >Nơi đến</th>
                            <td>
                    <input type="text" name="noiden" id="noiden"
                    value="<?php echo $row['noi_den']?>"/>
                            </td>
                    </tr>
                        

                    <tr>
                            <th >Ngày đi </th>
                            <td>
                    <input type="date" name="ngaydi" id="ngaydi"
                    value="<?php echo $row['ngay_di']?>"/>
                            </td>
                    </tr>
                        
                    <tr>
                            <th >Thời gian</th>
                            <td>
                    <input type="time" name="thoigian" id="thoigian"
                    value="<?php echo $row['thoi_gian_di']?>"/>
                            </td>
                    </tr>
                        
                    <tr>
                            <th >Giá vé </th>
                            <td>
                    <input type="text" name="giave" id="giave"
                    value="<?php echo $row['gia_Ve']?>"/>
                            </td>
                    </tr>
                    
                    <tr>
                            <th >Số ghế</th>
                            <td>
                    <input type="text" name="soghe" id="soghe"
                    value="<?php echo $row['cho_ngoi']?>"/>
                            </td>
                    </tr>
                    
                    <tr>
                            <th >hoan tat</th>
                            <td>
                    <button name="btnSave">ok</button>
                            </td>
                    </tr>
                     
                  
            </table>
            </form>
        </div>  
    </body>

    <?php
    if (isset($_POST['btnSave'])){
        
        $chuyenbay = $_POST['machuyenbay'];
        $noidi = $_POST['noidi'];
        $noiden = $_POST['noiden'];
        $ngaydi = $_POST['ngaydi'];
        $thoigian = $_POST['thoigian'];
        $giave = $_POST['giave'];
        $soghe = $_POST['soghe'];


        $connect= new mysqli($server,$username ,$password, $dbname);
        if($connect->connect_error){
            die("Connect failed:" .$connect->connect_error);
        }

                                        // `ma_chuyenbay`='$chuyenbay',
        $sql = "UPDATE `chuyenbay` SET `noi_di`='$noidi', `noi_den`='$noiden',
                                        `ngay_di`='$ngaydi', `cho_ngoi`='$soghe',
                                        `thoi_gian_di`='$thoigian', `gia_ve`='$giave' WHERE `ma_chuyenbay`='$chuyenbay'";
        
            
        if ($connect->query($sql) === TRUE) {
            echo "cập nhật thành công";
        } else {
            echo "lỗi: " . $connect->error;
        }

        $connect->close();
        
        header('location:7allchuyenbay.php'); 
    }
        
    
    
    ?>

</html>





