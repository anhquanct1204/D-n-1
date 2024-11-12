<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG </h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã Loại <br>
                <input type="text" name="maloai" disabled value="<?=$id?>">
            </div>

            <div class="row mb10">
                Tên Loại <br>
                <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
            </div>

            <div>
                <?php
                if (isset($thongBao) && ($thongBao !== "")) echo $thongBao;
                ?>
            </div>

        </form>
    </div>
</div>
</div>