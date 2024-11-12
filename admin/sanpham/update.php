<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $sanpham['img'];
$listdanhmuc = loadall_danhmuc(); 
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT SẢN PHẨM </h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <Select name="iddm">
                    <option value="0" selected>Tất Cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) echo ' <option value="' . $id . '" selected>' . $name . '</option>';
                        else echo ' <option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </Select>
            </div>

            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="tensp" value="<?= $sanpham['name'] ?>">
            </div>
            <div class="row mb10">
                Gía Sản Phẩm <br>
                <input type="text" name="giasp" value="<?= $sanpham['price'] ?>">
            </div>
            <div class="row mb10">
                Lượt Xem <br>
                <input type="text" name="view" value="<?= $sanpham['view'] ?>">
            </div>
            <div class="row mb10">
                Hình Ảnh <br>
                <input type="file" name="hinh">
                <img src="<?= $hinhpath ?>" width="70px" alt="">
            </div>
            <div class="row mb10">
                Mô Tả <br>
                <textarea name="mota" cols="30" rows="10"><?= $sanpham['mota'] ?></textarea>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
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