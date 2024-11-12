<?php
function viewcart()
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';
        echo '
    <tr>
        <td class="img" ><img src="' . $hinh . '" alt=""></td>
        <td>' . $cart[1] . '</td>
        <td>' . $cart[3] . '</td>
        <td>' . $cart[4] . '</td>
        <td>' . $thanhtien . 'K</td>
        <td>' . $xoasp . '</td>
    </tr>';
        $i += 1;
    }
    echo '<tr>
        <td colsan="4">Tổng Đơn Hàng</td>
        <td></td>
        <td></td>
        <td></td>
        <td>' . $tong . 'K</td>
        <td></td>
    </tr> ';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
    }
    return $tong;
}

