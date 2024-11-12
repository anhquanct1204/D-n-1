<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">Đăng Ký Thành Viên</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        Username
                    <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Password
                    <input type="password" name="pass">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                    <input type="text" name="diachi">
                    </div>
                    <div class="row mb10">
                        Số Điện Thoại
                    <input type="text" name="sdt">
                    </div>

                    <input type="submit" value="Đăng Ký" name="dangky">
                    <input type="reset" value="Nhập Lại">
                </form>
                <h2 style="color: red;">
                <?php
                   if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                   }
                ?>
                </h2>
            </div>
        </div>



    </div>

    <div class="row boxphai">
        <?php
        include "view/boxphai.php";
        ?>
    </div>
</div>

</div>