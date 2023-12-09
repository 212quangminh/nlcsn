<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>all chuyenbay idol4</title>
    <link rel="stylesheet" href="maybay6.css">
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
            <h1>Thêm chuyến bay</h1>
        </div>


    <div class="shadow">
        <form action="" name="frmCreate" id="frmCreate" method="POST">
            <table class="box3">
                <tr>
                    <td>
                       Số hiệu chuyến bay
                    </td>
                    <td><input type="text" name="machuyenbay" required></td>
                </tr>
                <tr>
                    <td>
                        Nơi đi
                    </td>
                    <td>
                        <select class="control" name="noidi" required>
                            <option value="">Nơi đến</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Sài Gòn">Sài Gòn</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                       Nơi đến
                    </td>
                    <td><select class="control" name="noiden" required>
                        <option value="">Nơi đến</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Sài Gòn">Sài Gòn</option>
                        </select></td>
                </tr>
                <tr>
                    <td>
                        Ngày đi
                    </td>
                    <td><input min="<?php echo date('Y-m-d'); ?>" type="date" name="ngaydi" required></td>
                </tr>
                <tr>
                    <td>
                        Ngày đến
                    </td>
                    <td><input min="<?php echo date('Y-m-d'); ?>" type="date" name="ngayden" required></td>
                </tr>
                <tr>
                    <td>
                        Thời gian đi
                    </td>
                    <td><input type="time" name="thoigiandi" required></td>
                </tr>
                <tr>
                    <td>
                        Thời gian đến
                    </td>
                    <td><input type="time" name="thoigianden" required></td>
                </tr>
                <tr>
                    <td>
                        Giá vé
                    </td>
                    <td><input type="text" name="giave"
                            value="<?php echo isset($giave) ? number_format($giave, 0, ',', '.') : ''; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Số ghế
                    </td>
                    <td><input type="text" name="chongoi" required></td>
                </tr>
                <tr>
                    <td>
                        <button class="show" name="btnAdd">Lưu chuyến bay</button>
                        <a class="show"  href="7allchuyenbay.php"> Trở về</a>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        // Truy vấn database để lấy danh sách
        include_once(__DIR__ . '/connect.php');

        if (isset($_POST['btnAdd'])) {
            $current_date = date('Y-m-d');
            $machuyenbay = $_POST['machuyenbay'];
            $noidi = $_POST['noidi'];
            $noiden = $_POST['noiden'];
            $ngaydi = $_POST['ngaydi'];
            $ngayden = $_POST['ngayden'];
            $thoigiandi = $_POST['thoigiandi'];
            $thoigianden = $_POST['thoigianden'];
            $giave = $_POST['giave'];
            $chongoi = $_POST['chongoi'];
            $errors = [];
             // Chuyển sang kiểu thời gian
            
            $ngaydi_timestamp = strtotime($ngaydi);
            $ngayden_timestamp = strtotime($ngayden);
            $current_timestamp = strtotime($current_date);
            if(strtotime($thoigiandi) >= strtotime($thoigianden)) {
                echo '<script>alert("Giờ đi phải nhỏ hơn giờ đến")</script>';
                return; 
              }
            if($ngaydi_timestamp > $ngayden_timestamp) {
                echo '<script>alert("Ngày đi phải trước ngày đến")</script>';
                return;
            }
            
            //ghi chú
        

            $sqlInsert = "INSERT INTO `chuyenbay`(`ma_chuyenbay`,`cho_ngoi`, `gia_Ve`,`noi_di`, `noi_den`,`thoi_gian_di`,`thoi_gian_den`,`ngay_di`,`ngay_den`)
                        VALUES ('$machuyenbay', '$chongoi', '$giave','$noidi', '$noiden', '$thoigiandi','$thoigianden', '$ngaydi', '$ngayden')";

            // Code dùng cho DEBUG
            // var_dump($sqlInsert); die;
            // Thực thi INSERT
            mysqli_query($connect, $sqlInsert);
            echo '<script language="javascript">alert("Thêm thành công");</script>';
            // Đóng kết nối
            // mysqli_close($connect);
            // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
            // header('location:7allchuyenbay.php');   
        }
        ?>
    </div>
</body>
</html>
<?php
// --- Kiểm tra Mã nhà cung cấp (validate)
// required (bắt buộc nhập <=> không được rỗng)
// if (empty($machuyenbay)) {
// $errors['machuyenbay'][] = [
//         'rule' => 'required',
//         'rule_value' => true,
//         'value' => $machuyenbay,
//         'msg' => 'Vui lòng nhập vào Mã Loại'
// ];
// }
// minlength 1 (tối thiểu 1 ký tự)
// if (!empty($machuyenbay) && strlen($machuyenbay) < 1) {
// $errors['machuyenbay'][] = [
//         'rule' => 'minlength',
//         'rule_value' => 3,
//         'value' => $machuyenbay,
//         'msg' => 'Mã Nhà cung cấp phải có ít nhất 3 ký tự'
// ];
// }
// maxlength 6 (tối đa 6 ký tự)
// if (!empty($maloai) && strlen($maloai) > 6) {
// $errors['maloai'][] = [
//         'rule' => 'maxlength',
//         'rule_value' => 50,
//         'value' => $maloai,
//         'msg' => 'Mã Loại không được vượt quá 6 ký tự'
// ];
// }

// --- Kiểm tra Tên nhà cung cấp (validate)
// required (bắt buộc nhập <=> không được rỗng)
// if (empty($tenloai)) {
// $errors['TEN_LOAI'][] = [
//         'rule' => 'required',
//         'rule_value' => true,
//         'value' => $tenloai,
//         'msg' => 'Vui lòng nhập vào Tên Loại'
// ];
// }
// minlength 3 (tối thiểu 3 ký tự)
// //if (!empty($description) && strlen($description) < 3) {
//     $errors['description'][] = [
//         'rule' => 'minlength',
//         'rule_value' => 3,
//         'value' => $description,
//         'msg' => 'Mô tả loại sản phẩm phải có ít nhất 3 ký tự'
//     ];
// }
// maxlength 50 (tối đa 50 ký tự)
// if (!empty($tenloai) && strlen($tenloai) > 50) {
// $errors['TEN_LOAI'][] = [
//         'rule' => 'maxlength',
//         'rule_value' => 50,
//         'value' => $tenloai,
//         'msg' => 'Tên Loại Sản Phẩm không được vượt quá 50 ký tự'
// ];
// }

// 5. Thông báo lỗi cụ thể người dùng mắc phải (nếu vi phạm bất kỳ quy luật kiểm tra ràng buộc)
// dd($errors);
// if (!empty($errors)) {
//     // In ra thông báo lỗi
//     // kèm theo dữ liệu thông báo lỗi
//     foreach($errors as $errorField) {
//         foreach($errorField as $error) {
//             echo $error['msg'] . '<br />';
//         }

// }          
//     return;
// }

// 6. Nếu không có lỗi dữ liệu sẽ thực thi câu lệnh SQL
// Câu lệnh INSERT
?>

