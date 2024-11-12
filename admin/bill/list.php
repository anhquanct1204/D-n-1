<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>Chọn</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Khách Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Phương Thức Thanh Toán</th>
                    <th>Status</th>
                    <th>Hành Động</th>
                </tr>
                <?php
                if (isset($listdonhang) && is_array($listdonhang)) {
                    foreach ($listdonhang as $donhang) {
                        extract($donhang);
                        $xoadh = "index.php?act=xoadh&id_donhang=" . $id_donhang;
                        echo '<tr>
                            <td><input type="checkbox" name="selected_ids[]" value="' . $id_donhang . '"></td>
                            <td>' . $id_donhang . '</td>
                            <td>' . $name . '</td>
                            <td>' . $address . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $pt_thanhtoan . '</td>
                            <td>' . $stt . '</td>
                            <td>
                                <a href="' . $xoadh . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>';
                    }
                }
                ?>
            </table>
            <div class="row mb20">
                <input type="button" value="Chọn tất cả" id="">
                <input type="button" value="Bỏ chọn tất cả" id="">
                <input type="submit" value="Xóa các mục đã chọn">
            </div>
        </div>
    </div>
</div>

