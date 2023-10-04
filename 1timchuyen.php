<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trang chủ idol0</title>
        <link rel="stylesheet" href="maybay1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style></style>
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

        <div class="box-black">
                    <form  action="2danhsachvebay.php" method="post">
                        
                            <div>
                                        <span class="label">Nơi đi</span> <br>
                                        <input class="control" type="text" name="noidung">
                            </div>
                            <div>
                                        <span class="label">Nơi đến</span> <br>
                                        <input class="control" type="text" name="noidung">
                                        <!-- placeholder="Nhập nơi bạn đến" -->
                            </div>
                            <div>
                                        <span class="label">Ngày khởi hành</span> <br>
                                        <input class="control" type="date" name="savebtn">
                            </div>
                            <button class="show"> Tìm Chuyến</button>
                           
                      
                    
                    </form>
                     
        </div>
    </body>
</html>