<?php
$act = "quanlykhachhang";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'quanlykhachhang':
        include_once "./View/quanlykhachhang.php";
        break;
    case 'xoa_khach_hang':
        if (isset($_GET['act']) && $_GET['act'] === 'xoa_khach_hang') {
            if (isset($_GET['id'])) {
                $makh = $_GET['id'];
            
                $hh = new Quanlykhachhang();
                $result = $hh->deletetkh($makh);
            
                if ($result) {
                  echo '<script>alert("Xóa khách hàng thành công!")</script>';
                  echo '<meta http-equiv="refresh" content="0;url=./index.php?action=quanlykhachhang">';
                } else {
                  echo '<script>alert("Xóa khách hàng thất bại!")</script>';
                }
              }
       
        }
        break;
       
}
?>