<style>
    .info-table,
    .payment-table,
    .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .info-table td,
    .payment-table td,
    .cart-table td,
    .cart-table th {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .cart-table th {
        background-color: #f8f8f8;
    }

    .total-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .payment-button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }

    .btn-success {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn-success:hover {
        background-color: #45a049;
    }
</style>
<?php
$user = "";
$diachi = "";
$email = "";
$sdt = "";

// Kiểm tra xem $_SESSION['user'] có tồn tại không
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']['user'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
}
?>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="row boxcontent formtaikhoan frmdsloai">
            <form action="index.php?act=billcomfirm" method="post">
                    <table class="info-table">
                        <tr>
                            <td>Người Đặt Hàng</td>
                            <td><input type="text" name="user" value="<?= htmlspecialchars($user) ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" value="<?= htmlspecialchars($diachi) ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" value="<?= htmlspecialchars($email) ?>"></td>
                        </tr>
                        <tr>
                            <td>Số Điện Thoại</td>
                            <td><input type="text" name="sdt" value="<?= htmlspecialchars($sdt) ?>"></td>
                        </tr>
                    </table>
                    <div class="row mb">
                        <div class="boxtitle">Phương Thức Thanh Toán</div>
                        <div class="row">
                            <table class="payment-table">
                                <tr>
                                    <td><input type="radio" name="pt_thanhtoan" value="cod" checked> Trả Tiền khi nhận hàng</td>
                                    <td><input type="radio" name="pt_thanhtoan" value="bank"> Chuyển khoản ngân hàng</td>
                                    <td><input type="radio" name="pt_thanhtoan" value="momo"> Thanh toán Momo</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <?php
                    if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
                    ?>
                        <table class="cart-table">
                            <tr>
                                <th>STT</th>
                                <th>ẢNH SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ SẢN PHẨM</th>
                                <th>SỐ LƯỢNG</th>
                                <th>THÀNH TIỀN</th>
                            </tr>
                            <?php
                            $tong = 0;
                            foreach ($_SESSION['mycart'] as $key => $cart) {
                                $thanhtien = $cart[3] * $cart[4];
                                $tong += $thanhtien;
                            ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><a href="index.php?act=sanphamct&idsp=<?= $cart[0] ?>"><img style="width: 50px;" src="http://duanmau.test/image/<?= htmlspecialchars($cart[2]) ?>" alt=""></a></td>
                                    <td><?= htmlspecialchars($cart[1]) ?></td>
                                    <td><?= number_format($cart[3]); ?>K</td>
                                    <td><?= $cart[4] ?></td>
                                    <td><?= number_format($thanhtien); ?>K</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <div class="total-container">
                            <h2>Tổng Tiền Đơn Hàng:</h2>
                            <div>
                                <h2><?= number_format($tong); ?>K</h2>
                            </div>
                        </div>
                        <div class="mb payment-button-container">
                        <input type="submit" name="dongydathang" value="ĐẶT HÀNG">
                        </div>
                    <?php
                    } else {
                        echo '<p>Giỏ hàng của bạn đang trống!</p>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <div class="row boxphai">
        <?php
        include 'view/boxphai.php';
        ?>
    </div>
</div>
