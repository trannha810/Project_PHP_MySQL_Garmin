<!DOCTYPE html>
<html lang="en-US">

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?php
                $hh = new thongke();
                $result1 = $hh->dem();
                while ($set1 = $result1->fetch()) {
                    echo "['" . $set1["tenhh"] . "', " . $set1["tong"] . "],";
                }

                ?>

            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Tổng số sản phẩm đã bán',
                'width': 550,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
    <!-- //doanh thu -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

</head>

<body>


    <form method="post" action="index.php?action=thongke&act=thongke_thang_nam_quy">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6"> -->
                <div class="card-columns">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thống kê theo tháng năm</h4>
                            <p class="card-text">

                                <select id="chon-nam" name="chon-nam">
                                    <option value="">Chọn năm</option>
                                    <?php
                                    // Generate options for years (modify based on your data source)
                                    for ($year = 2023; $year <= date('Y'); $year++) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                                <select id="chon-thang" disabled name="chon-thang">
                                    <option value="">Chọn tháng</option>
                                    <?php
                                    // Generate options for years (modify based on your data source)
                                    for ($month = 1; $month <= 12; $month++) {
                                        echo "<option value='$month'>$month</option>";
                                    }
                                    ?>


                                </select>
                                <button type="submit">xem</button>


                            </p>

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thống kê theo quý</h4>
                            <p class="card-text">
                                <select id="chon-nam1" name="chon-nam1">
                                    <option value="">Chọn năm</option>
                                    <?php
                                    // Generate options for years (modify based on your data source)
                                    for ($year = 2024; $year <= date('Y'); $year++) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                                <select id="chon-quy" disabled name="chon-quy">
                                    <option value="">Chọn quý</option>
                                    <?php
                                    // Generate options for years (modify based on your data source)
                                    for ($quy = 1; $quy <= 4; $quy++) {
                                        echo "<option value='$quy'>Quý $quy</option>";
                                    }
                                    ?>
                                </select>
                                <button type="submit">xem</button>

                            </p>

                        </div>

                    </div>
                    <br>
                    <br>

                    <br>
                    <br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">TOP 10 SẢN PHẨM BÁN NHIỀU NHẤT
                                <?php
                                if (isset($_POST['chon-nam']) && isset($_POST['chon-thang'])) {
                                    $year = $_POST['chon-nam'];
                                    $month = $_POST['chon-thang'];
                                    echo "TRONG THÁNG " . $month . "-" . $year;
                                } else if (isset($_POST['chon-nam1']) && isset($_POST['chon-quy'])) {
                                    $year = $_POST['chon-nam1'];
                                    $quy = $_POST['chon-quy'];

                                    echo "TRONG QUÝ " . $quy . "-" . $year;
                                } else {
                                    echo "TỪ TRƯỚC TỚI NAY ";
                                }
                                ?>
                            </h4>
                            <p class="card-text">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mã hàng hóa</th>
                                        <th>Tên hàng hóa</th>
                                        <th>Tổng số lượng mua</th>
                                        <th>Thành tiền</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php




                                    $hh = new thongke();

                                    if (isset($_POST['chon-nam']) && isset($_POST['chon-thang'])) {
                                        $year = $_POST['chon-nam'];
                                        $month = $_POST['chon-thang'];

                                        $result1 = $hh->getSpbannhieunhat($year, $month);
                                    } else if (isset($_POST['chon-nam1']) && isset($_POST['chon-quy'])) {
                                        $year = $_POST['chon-nam1'];
                                        $quy = $_POST['chon-quy'];
                                        $start_month = ($quy - 1) * 3 + 1;
                                        $end_month = $start_month + 2;
                                        $result1 = $hh->getSpbannhieunhat_theo_quy($year, $start_month, $end_month);
                                    } else {
                                        $result1 = $hh->getSpbannhieunhat1();
                                    }


                                    while ($set1 = $result1->fetch()) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $set1['mahh']; ?>
                                            </td>
                                            <td>
                                                <?php echo $set1['tenhh']; ?>
                                            </td>
                                            <td>
                                                <?php echo $set1['tong']; ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($set1['tongtien']); ?><sup><u>đ</u></sup>
                                            </td>
                                        </tr>
                                    <?php
                                    endwhile;
                                    ?>


                                </tbody>
                            </table>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">TOP 10 SẢN PHẨM BÁN ÍT NHẤT
                                <?php
                                if (isset($_POST['chon-nam']) && isset($_POST['chon-thang'])) {
                                    $year = $_POST['chon-nam'];
                                    $month = $_POST['chon-thang'];
                                    echo "TRONG THÁNG " . $month . "-" . $year;
                                } else if (isset($_POST['chon-nam1']) && isset($_POST['chon-quy'])) {
                                    $year = $_POST['chon-nam1'];
                                    $quy = $_POST['chon-quy'];

                                    echo "TRONG QUÝ " . $quy . "-" . $year;
                                } else {
                                    echo "TỪ TRƯỚC TỚI NAY ";
                                }
                                ?>
                            </h4>
                            <p class="card-text">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mã hàng hóa</th>
                                        <th>Tên hàng hóa</th>
                                        <th>Tổng số lượng mua</th>
                                        <th>Thành tiền</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php



                                    $hh = new thongke();

                                    if (isset($_POST['chon-nam']) && isset($_POST['chon-thang'])) {
                                        $year = $_POST['chon-nam'];
                                        $month = $_POST['chon-thang'];

                                        $result = $hh->getSpbanitnhat($year, $month);
                                    } else if (isset($_POST['chon-nam1']) && isset($_POST['chon-quy'])) {
                                        $year = $_POST['chon-nam1'];
                                        $quy = $_POST['chon-quy'];
                                        $start_month = ($quy - 1) * 3 + 1;
                                        $end_month = $start_month + 2;
                                        $result = $hh->getSpbanitnhat_theo_quy($year, $start_month, $end_month);
                                    } else {
                                        $result = $hh->getSpbanitnhat1();
                                    }

                                    while ($set = $result->fetch()) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $set['mahh']; ?>
                                            </td>
                                            <td>
                                                <?php echo $set['tenhh']; ?>
                                            </td>
                                            <td>
                                                <?php echo $set['tong']; ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($set['tongtien']); ?><sup><u>đ</u></sup>
                                            </td>
                                        </tr>
                                    <?php
                                    endwhile;
                                    ?>

                                </tbody>
                            </table>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>

    </form>








    <div id="piechart"></div>

    <div id="myfirstchart" style="height: 250px;"></div>
    <script type="text/javascript">
        $(document).ready(function() {
            // Enable month selection only when a year is chosen
            $('#chon-nam').change(function() {
                $('#chon-thang').prop('disabled', $(this).val() === '');
            });
        })
        $(document).ready(function() {
            // Enable month selection only when a year is chosen
            $('#chon-nam1').change(function() {
                $('#chon-quy').prop('disabled', $(this).val() === '');
            });
        })
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript">
        new Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [<?php
                    $hh = new thongke();
                    $result1 = $hh->doanhthu();
                    while ($set1 = $result1->fetch()) {
                        echo "{month:'" . $set1["nam"] . "', value: " . $set1["tongtien"] . "},";
                    }

                    ?>],

            // The name of the data record attribute that contains x-values.
            xkey: 'month',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['value'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Value']
        });
    </script>

</body>

</html>