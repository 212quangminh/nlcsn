<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>all chuyenbay idol4</title>
  <link rel="stylesheet" href="maybay66.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <div class="box1">
    <ul>
      <li class="logo">
        <img
          src="https://vietwave.com.vn/dulichviethoan/upload/files/chung/398_3985633_vietnam_airlines_png_logo_vietnam_airline_vector_1_.png"
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
  <h1>Thống kế chuyến bay</h1>
  <?php
  $count = 0;
  $totalPrice = 0;
  include_once(__DIR__ . '/connect.php');
  $khachhang = mysqli_query($connect, "SELECT * FROM `hoadon`");
  while ($row = mysqli_fetch_array($khachhang)) {
    $count++;
    $totalPrice += $row['giave'];
  }
  ?>
  <div class="box4">

    <div>
      <h3>Thống kê hóa đơn</h3>
      <div class="box5">
        <div><?php echo "Số hóa đơn: $count"; ?></div>
        <br>
        <div>
        <?php echo "Tổng số khách hàng: $count"; ?>
        </div>
      </div>
    </div>
    &nbsp; &nbsp;
    <div>
      <h3>Thống kê giá vé</h3>
      <div class="box2">
        <div>
          <?php echo "Số vé: $count"; ?>
        </div>
        <br>
        <div>
        <?php echo "Tổng giá vé: " . number_format($totalPrice) . " VND"; ?>
        </div>
      </div>
    </div>
  </div>





  <table>

    <div>
      <h4>Các chuyến bay hôm nay</h4>
      <tr>
        <th>Mã chuyến</th>
        <th>Giờ khởi hành</th>
        <th>Điểm đi</th>
        <th>Điểm đến</th>
      </tr>
    </div>

    <?php
    $today = date('Y-m-d');
    $khachhang = mysqli_query($connect, " SELECT *  FROM `chuyenbay` WHERE DATE(ngay_di) = '$today' ");
    while ($row = mysqli_fetch_array($khachhang)) {
      ?>
      <div>
        <tr>
          <td>
            <?php echo $row['ma_chuyenbay']; ?>
          </td>
          <td>
            <?php echo $row['thoi_gian_di']; ?>
          </td>
          <td>
            <?php echo $row['noi_di']; ?>
          </td>
          <td>
            <?php echo $row['noi_den']; ?>
          </td>
        </tr>
      </div>
      <?php
    }
    ?>
  </table>
  



  <div class="note0">
    <h2>Online Flight Booking</h2>
    <p>&copy;
      <?php echo date('Y'); ?> - Developed By Le Quang Minh
    </p>

  </div>
</body>

</html>