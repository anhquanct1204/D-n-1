<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
          
            <div class="boxtitle">SẢN PHẨM <?= $tendm  ?></div>
            <div class="row boxcontent">
                <!-- <?php
                 $i = 0;
                 foreach ($dssp as $sp) {
                     extract($sp);
                     $hinh = $img_path . "$img";
                     $mr = ($i == 2 || $i == 5 || $i == 8 || $i == 11) ? "mr" : "";
                     echo '<div class="boxsp ' . $mr . '">
                             <div class="row img"> 
                                 <img src="' . $hinh . '" alt="" width="">
                             </div>
                             <a href="#">' . $name . '</a>
                             <p>' . $price . ' đ</p>
                             <button>Đặt Hàng</button>
                           </div>';
                     $i++;
                 }
                ?> -->
                 <?php
            foreach ($dssp as $sp) {
                extract($sp);
            ?>
                <div class="boxsp">
                    <div class="row img">
                        <div style="position: relative;">
                            <img style="padding: 10px;" src="image/<?= $img ?>" alt="">
                       
                            <h2><a class="a__click" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a></h2>
                            <form class="formtaikhoan" action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="img" value="<?= $img ?>">
                                <!-- <a class="add_cart" href="index.php?act=addTocart"></a> -->
                                <p class="price"><?= ($price); ?></p>

                                <input type="submit" name="addtocart" class="add_cart" value="Đặt Hàng">
                            </form>
                        </div>
                    </div>
                    <a href="index.php?act=sanphamct&idsp=<?= $id ?>"></a>
                </div>
            <?php
            }
            ?>
            </div>
        </div>

       

    </div>

    <div class="row boxphai">
        <?php
        include "boxphai.php";
        ?>
    </div>
</div>

