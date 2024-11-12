<div class="row mb">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
        <div class="row mb10">
            <h2>Xin chào</h2>
            <?= $user ?>
        </div>
        <div class="row mb10">
            <ul>
                <li><a href="#">Đơn Hàng Của Tôi</a></li>
                <li><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập Nhật Tài Khoản</a></li>
                <?php if ($vaitro == 1){?>
                <li><a href="admin/index.php">Đăng Nhập ADMIN</a></li>
                <?php }?>
                <li><a href="index.php?act=thoat">Thoát</a></li>
            </ul>
        </div>
        <?php
        } else {
        ?>
        <div class="row mb10">
            <form action="index.php?act=dangnhap" method="post">
                Tên Đăng Nhập <br>
                <input type="text" name="user" id="">
                Mật khẩu <br>
                <input type="password" name="pass" id=""><br>
                <input type="checkbox" name="" id="">Ghi nhớ tài khoản ? <br>
                <input type="submit" name="dangnhap" value="Đăng nhập">
            </form>
            <ul>
                <li><a href="#">Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            </ul>
        </div>
        <?php } ?>
    </div>
</div>

<div class="row mb">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="boxfooter seachbox formtaikhoan">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Tìm Kiếm Sản Phẩm">
            <input type="submit" name="timkiem" value="Tìm Kiếm">
        </form>
    </div>
</div>

<div class="row">
    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
    <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                    <img src="' . $img . '" alt="">
                    <a href="' . $linksp . '">' . $name . '</a>
                </div>';
        }
        ?>
    </div>
</div>
