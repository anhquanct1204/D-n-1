<?php
$listdanhmuc = loadall_danhmuc(); 
$listsanpham = loadall_sanpham("", 0);
?>
<div class="row">
    <div class="row frmtitle mb">
        <h2>DANH SÁCH SẢN PHẨM </h2>
    </div>
    <div class="row frmcontent">

        <div class="row mb20 frmdsloai">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Lượt Xem</th>

                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "NO PHÔTO";
                    }
                    echo '                        <tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>
                            <td>' . $view . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>

        <a href="' . $xoasp . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>';
                };
                ?>

        </div>
        </table>
        <div class="row mb20">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
        </div>

    </div>
</div>