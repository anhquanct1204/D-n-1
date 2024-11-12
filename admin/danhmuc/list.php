<div class="row">
    <div class="row frmtitle">
        <h2>DANH SÁCH LOẠI HÀNG </h2>
    </div>
    <div class="row frmcontent">

        <div class="row mb20 frmdsloai">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '                        <tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a>

        <a href="' . $xoadm . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')"><input type="button" value="Xóa"></a>
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
            <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
        </div>

    </div>
</div>