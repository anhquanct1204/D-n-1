<?php
$listhongke = loadall_thongke();
?>

<div class="row">
    <div class="row frmtitle mb">
        <h1>Trang Biểu Đồ</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

            <script>
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    const data = google.visualization.arrayToDataTable([
                        ['Danh Mục', 'Số Lượng'],
                        <?php
                        foreach ($listhongke as $thongke) {
                            echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "],";
                        }
                        ?>
                    ]);

                    const options = {
                        title: 'Thống Kê Sản Phẩm Theo Danh Mục'
                    };

                    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                }
            </script>
            <div class="row mb20">
                <a href="index.php?act=thongke">
                    <input type="button" value="Danh Sách">
                </a>
            </div>

        </div>
    </div>
</div>