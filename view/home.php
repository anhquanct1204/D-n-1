<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="image/banner1.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="image/banner2.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="image/banner3.jpg" style="width:100%">
                    </div>
                </div>
                <br>

            </div>
        </div>
        <div class="row">

            <?php
            foreach ($sanphamnew as $sp) {
                extract($sp);
            ?>
                <div class="boxsp ">
                    <div class="row img">
                            <img class="mb" src="image/<?= $img ?>" alt="">
                            <h2><a href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a></h2>
                            <form class="formtaikhoan" action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="img" value="<?= $img ?>">
                                <!-- <a class="add_cart" href="index.php?act=addTocart"></a> -->
                                <p class="price"><?= ($price); ?></p>

                                <input type="submit" name="addtocart"  value="Đặt Hàng">
                            </form>
                      
                    </div>
                    <a href="index.php?act=sanphamct&idsp=<?= $id ?>"></a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxphai.php";
        ?>
    </div>
</div>