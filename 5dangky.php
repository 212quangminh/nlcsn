<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Đăng nhập idol3</title>
    <link rel="stylesheet" href="maybay5.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <li class="item"> <a class="a" href="1timchuyen.php">Trang Chủ</a> </li>
            <li class="item"><a class="a" href="12timhoadon.php">Tìm Hóa Đơn</a></li>
            <li class="item"> <a class="a" href="3gioithieu.php">Giới Thiệu</a> </li>
            <li class="item"> <a class="a" href="4lienhe.php">Liên Hệ</a> </li>
            <li class="item"><a class="a" href="5dangnhap.php">Đăng Nhập</a></li>
        </ul>
    </div>
    <div class="canchinh2">
        <div class="register-box">
            <h2 class="p1">Register</h2>
            <form action="xulydk.php" method="POST">
                <div class="user-box">
                    <label class="la" for="">
                        <h3 class="p2">CCCD</h3>
                    </label>
                    <input class="in" type="text" name="Id_nv" placeholder="nhập CCCD" required>
                </div>
                <div class="user-box">
                    <label class="la" for="">
                        <h3 class="p2">Tên nhân viên</h3>
                    </label>
                    <input class="in" type="text" name="ten_nhanvien" placeholder="nhập tài khoản" required>
                </div>

                <div class="user-box">
                    <label class="la" for="">
                        <h3 class="p2">Tên tài khoản</h3>
                    </label>
                    <input class="in" type="text" name="ten_dangnhap" placeholder="nhập mật khẩu" required>
                </div>

                <div class="user-box">
                    <label class="la" for="">
                        <h3 class="p2">Mật khẩu</h3>
                    </label>
                    <input class="in" type="password" name="password" placeholder="nhập lại mật khẩu" required>
                </div>

                <div class="user-box">
                    <label class="la" for="">
                        <h3 class="p2">SDT</h3>
                    </label>
                    <input class="in" type="text" name="sdt" placeholder="nhập SDT" required>
                </div>

                <div class="user-box">
                    <label class="la" for="">
                        <h3 class="p2">Email</h3>
                    </label>
                    <input class="in" type="email" name="email" placeholder="nhập email" required>
                </div>

                <div class="box3">
                    <input class="box1" type="submit" name="dangky" value="đăng ký"></input>
                </div>
            </form>
        </div>
    </div>
</body>

</html>