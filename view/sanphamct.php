<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent">
                <?php
                extract($onesp);
                $img = $img_path . $img;
                echo '<div class="row mb spct " > <img src="' . $img . '" alt=""> </div>';

                echo '<div style=" font-weight: bold; font-size: 30px;">Mã sản phẩm: ' . $id . '</div>' . '<br>';
                echo '<div style=" font-weight: bold; font-size: 25px;">' . $name . '</div>' . '<br>';
                echo '<div style="color: red; font-weight: bold;  font-size: 20px;">' . $price . ' vnđ</div>' . '<br>';
                echo '<div style=" font-size: 16px;">' . $mota . '</div>';

                ?>
            </div>
        </div>

        <div class="row mb">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="row boxcontent">
            </div>
        </div>

        <div class="row">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                foreach ($spcl as $spcl) {
                    extract($spcl);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '" style="font-size: 20px; color: #2E8B57; text-decoration: none;">' . $name . '</a></li>';
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

</div>