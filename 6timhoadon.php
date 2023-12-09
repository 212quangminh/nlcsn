<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Tìm hóa đơn</title>
    <link rel="stylesheet" href="maybay12.css">
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
    <div class="box-black">
    <form action="13danhsachhoadon.php" method="post">
    <div >Tên</div>
    <input class="in" type="text" name="ten">
    <div>Email</div>
    <input  class="in" type="text" name="email">
    <div>SDT</div>
    <input class="in" type="text" name="sdt">
    <button class="show" name="find">Tìm hóa đơn</button>
    </form>
    </div>
</body>
</html>