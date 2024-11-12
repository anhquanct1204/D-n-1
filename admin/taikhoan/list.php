<?php
$listtaikhoan = loadall_taikhoan();
?>
<div class="row">
    <div class="row frmtitle">
        <h2>DANH SÁCH TÀI KHOẢN </h2>
    </div>
    <div class="row frmcontent">

        <div class="row mb20 frmdsloai">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã Tài Khoản</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th>Vai Trò</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '                        <tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $user . '</td>
                            <td>' . $pass . '</td>
                            <td>' . $email . '</td>
                            <td>' . $diachi . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $vaitro . '</td>
                            <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a>

        <a href="' . $xoatk . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')"><input type="button" value="Xóa"></a>
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
            <a href="index.php?act=index.php"><input type="button" value="Nhập Thêm"></a>
        </div>

    </div>
</div>