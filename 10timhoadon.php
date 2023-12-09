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
            <th>Hiệu lực</th>
            
        </tr>
    <?php
    include("connect.php");
    if (isset($_POST['find'])) {
        $sdt = $_POST['sdt'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $sdt = mysqli_real_escape_string($connect, $sdt);
        $ten = mysqli_real_escape_string($connect, $ten);
        $email = mysqli_real_escape_string($connect, $email);
        $sql = "SELECT * FROM `hoadon` WHERE tenkhachhang LIKE '%$ten%' AND email LIKE '%$email%' AND sdt LIKE '%$sdt%' ";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row_khachhang = mysqli_fetch_assoc($result)) {
                $currentDateTime = date("Y-m-d H:i:s");
                $flightDateTime = $row_khachhang['ngaydi'] . ' ' . $row_khachhang['thoigiandi'];
                if ($currentDateTime > $flightDateTime) {
                    $validity = " Hết hiệu lực";
                } else {
                    $validity = "Còn hiệu lực";
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
                    <?php echo $row_khachhang['giave']; ?>
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
                    <?php echo $validity; ?>
                </td>
                
                
            </tr>
                
                <?php
                
                
            }
        } else {
            echo "<script>alert('Không tìm thấy hóa đơn phù hợp. Vui lòng thử lại.'); window.location = '10quanlihoadon.php';</script>";
        }
    }

    ?>
</table>
</body>

</html>