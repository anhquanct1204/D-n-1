<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">Giỏ Hàng</div>
            <div class="row boxcontent ">
                <div class="row mb20 frmcontent frmdsloai">
                    <table>
                        <tr>
                            <th>Hình</th>
                            <th>Sản Phẩm</th>
                            <th>Đơn Gía</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                            <th>Thao Tác</th>
                        </tr>

                        <?php
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

                        ?>
                        <!-- <tr>
                            <td><img src="image/tra1" alt=""></td>
                            <td>tRÀ cạc</td>
                            <td>1</td>
                            <td>100</td>
                            <td>1tr</td>
                            <td><input type="button" value="Xóa"></td>
                        </tr> -->

                    </table>

                </div>
                <div class="frmcontent ">
                    <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>
                </div>
            </div>

        </div>



    </div>


    <div class="row boxphai">
        <?php include "view/boxphai.php"; ?>
    </div>
</div>