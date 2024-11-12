<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user']) || !isset($_SESSION['mycart']) || !is_array($_SESSION['mycart']) || count($_SESSION['mycart']) == 0) {
    header('Location: index.php');
    exit();
}

$name = $_POST['user'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['diachi'] ?? '';
$sdt = $_POST['sdt'] ?? '';
$pt_thanhtoan = $_POST['pt_thanhtoan'] ?? '';
$tongdonhang = tongdonhang();

$idbill = insert_bill($_SESSION['user']['id'], $name, $address, $sdt, $pt_thanhtoan, 0, $tongdonhang);

foreach ($_SESSION['mycart'] as $cart) {
    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[3] * $cart[4], $idbill);
}

unset($_SESSION['mycart']);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Nhận Đặt Hàng</title>
    <link rel="stylesheet" href="styles.css"> <!-- Điều chỉnh đường dẫn nếu cần -->
</head>

<body>
    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">
                    <h2>GIỎ HÀNG</h2>
                </div>
                <div class="row boxcontent formtaikhoan frmdsloai">
                    <div class="boxtitle">Chi Tiết Đơn Hàng</div>
                    <table class="info-table">
                        <tr>
                            <td>Người Đặt Hàng</td>
                            <td><?= htmlspecialchars($name) ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= htmlspecialchars($email) ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= htmlspecialchars($address) ?></td>
                        </tr>
                        <tr>
                            <td>Số Điện Thoại</td>
                            <td><?= htmlspecialchars($sdt) ?></td>
                        </tr>
                        <tr>
                            <td>Phương Thức Thanh Toán</td>
                            <td><?= htmlspecialchars($pt_thanhtoan) ?></td>
                        </tr>
                    </table>
                    <h2 style="color: red;">Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn đã được xác nhận.</h2>

                </div>
            </div>
        </div>

        <div class="row boxphai">
            <?php include 'view/boxphai.php'; ?>
        </div>
    </div>
</body>

</html>