<?php
$act = "thongke";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'thongke':
        include_once "./View/thongke.php";
        break;
    case 'thongke_thang_nam_quy':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset ($_POST['chon-nam']) && isset ($_POST['chon-thang'])) {
                $year = intval($_POST['chon-nam']);
                $month = intval($_POST['chon-thang']);
                // $hh = new Thongke();
                // $check = $hh->getSpbanitnhat($year, $month);
                $hh1 = new Thongke();

                $check1 = $hh1->getSpbannhieunhat($year, $month);

            }
            if (isset ($_POST['chon-nam1']) && isset ($_POST['chon-quy'])) {
                $year = intval($_POST['chon-nam1']);
                $quy = intval($_POST['chon-quy']);
                $start_month = ($quy - 1) * 3 + 1;
                $end_month = $start_month + 2;
                // $hh = new Thongke();
                // $check = $hh->getSpbanitnhat_theo_quy($year, $start_month, $end_month);
                $hh1 = new Thongke();

                $check1 = $hh1->getSpbannhieunhat_theo_quy($year, $start_month, $end_month);

            } else {
                // $hh = new Thongke();
                // $check = $hh->getSpbanitnhat1();
                $hh1 = new Thongke();

                $check1 = $hh1->getSpbannhieunhat1();

            }


            include_once "./View/thongke.php";
        }

        break;
}
?>