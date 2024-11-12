<div class="row">
    <div class="row frmtitle">
        <h2>CẬP NHẬT TÀI KHOẢN</h2>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=update_tk" method="post">
            <div class="row mb10">
                Mã tài khoản<br>
                <input type="text" name="id" value="<?= $taikhoan['id'] ?>" readonly>
            </div>
            <div class="row mb10">
                Username<br>
                <input type="text" name="user" value="<?= $taikhoan['user'] ?>">
            </div>
            <div class="row mb10">
                Password<br>
                <input type="text" name="pass" value="<?= $taikhoan['pass'] ?>">
            </div>
            <div class="row mb10">
                Email<br>
                <input type="text" name="email" value="<?= $taikhoan['email'] ?>">
            </div>
            <div class="row mb10">
                Địa chỉ<br>
                <input type="text" name="diachi" value="<?= $taikhoan['diachi'] ?>">
            </div>
            <div class="row mb10">
                SĐT<br>
                <input type="text" name="sdt" value="<?= $taikhoan['sdt'] ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $taikhoan['id'] ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
            </div>
            <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
        </form>
    </div>
</div>
