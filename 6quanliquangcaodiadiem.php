<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>all chuyenbay idol4</title>
    <link rel="stylesheet" href="maybay65.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <li><a class="menu" href="7allchuyenbay.php">Chuyến Bay</a></li>
            <li><a class="menu" href="1timchuyen.php">Đăng Xuất</a></li>
        </ul>
    </div>
    <div class="note1">
              <h1>Quản lý quảng cáo và địa điểm</h1>
        </div>
    <div class="canchinh1">
        
      
        <div>
            <div class="note2">
                <a class="show" href="6formthemquangcao.php">Thêm quảng cáo</a>
            </div>
            <table>
                <tr>
                    <th>Mục hình ảnh</th>
                    <th>Nơi đi</th>
                    <th>Nơi đến</th>
                    <th>Ngày đi</th>
                    <th>Xóa</th>
                </tr>
                <?php
                include_once(__DIR__ . '/connect.php');
                $quangcao = mysqli_query($connect, "SELECT *FROM `quangcao` ORDER BY `Id_quangcao` ASC");
                while ($row_quangcao = mysqli_fetch_array($quangcao)) {
                    ?>
                    <form action="2danhsachvebay.php" method="post" autocomplete="off">
                        <tr>
                            <td><img src="./image1/<?php echo $row_quangcao['anh']; ?>" alt="" width="50px" height="16px">
                            </td>
                            <td>
                                <?php echo $row_quangcao['noi_dii']; ?>
                            </td>
                            <td>
                                <?php echo $row_quangcao['noi_denn']; ?>
                            </td>
                            <td>
                                <?php echo $row_quangcao['ngay_dii']; ?>
                            </td>
                            <td> <a href="6formxoaquangcao.php?id=<?php echo $row_quangcao['Id_quangcao']; ?>
                    " onclick="return confirm('Bạn có muốn xóa nó?')" title="Xóa"> <i class="fa fa-trash" aria-hidden="true"></i></a> </td>
                        </tr>

                    </form>
                    <?php
                }
                ?>
            </table>
        </div>
        <div>
        <div class="note2">
                <a class="show" href="6fromthemdiadiem.php">Thêm địa điểm</a>
            </div>
            <table>
                <tr>
                    <th>địa điểm</th>
                    <th>Xóa</th>
                </tr>
                <?php
                include_once(__DIR__ . '/connect.php');
                $diadiem = mysqli_query($connect, "SELECT * FROM `noidinoiden` ORDER BY `Id_diadiem` ASC");
                while ($row_diadiem = mysqli_fetch_array($diadiem)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row_diadiem['diadiem']; ?>
                        </td>
                        <td> <a href="6formxoadiadiem.php?id=<?php echo $row_diadiem['Id_diadiem']; ?>
                    " onclick="return confirm('Bạn có muốn xóa nó?')"  title="xoa"> <i class="fa fa-trash" aria-hidden="true"></i></a> </td>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="note0">
    <h2>Online Flight Booking</h2>	
	<p >&copy; <?php echo date('Y');?> - Developed By Le Quang Minh </p>
    
</div>
</body>

</html>