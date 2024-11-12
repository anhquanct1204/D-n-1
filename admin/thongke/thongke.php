<?php
$listhongke = loadall_thongke();
?>

<div class="row">
    <div class="row frmtitle mb">
        <h1>Trang Thống Kê</h1>
    </div>
    
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>Mã Danh Mục</th>
                    <th>Tên Danh Mục</th>
                    <th>Số Lượng</th>
                    <th>Gía cao nhất</th>
                    <th>Gía thấp nhất</th>
                    <th>Gía trung bình</th>
                </tr>
                <?php foreach ($listhongke as $thongke) : ?>
                    <tr>
                        <td><?= $thongke['madm']; ?></td>
                        <td><?= $thongke['tendm']; ?></td>
                        <td><?= $thongke['countsp']; ?></td>
                        <td><?= number_format($thongke['maxprice']); ?>K</td>
                        <td><?= number_format($thongke['minprice']); ?>K</td>
                        <td><?= number_format($thongke['avgprice']); ?>K</td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div class="row mb20">
                <a href="index.php?act=bieudo">
                    <input type="button" value="Xem Biểu Đồ">
                </a>
            </div>

        </div>
    </div>
</div>