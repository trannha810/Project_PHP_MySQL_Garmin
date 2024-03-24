<?php
// session_unset();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = 'giohang';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':
        $id = 0;

        $soluong = 0;
        if (isset($_POST['mahh'])) {
            $id = $_POST['mahh'];

            $soluong = $_POST['soluong'];
            $gh = new giohang();
            $gh->addCart($id, $soluong);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;
    case 'giohang_xoa':
        //nhan
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;
    case 'update_giohang':
        //nguoi dung click vao nut submit thi truyen thong tin tu the iput di qua
        // Kiểm tra nút Submit có được nhấn hay không
        if (isset($_POST['newqty'])) {
            // Lặp qua các mục trong giỏ hàng
            foreach ($_SESSION['cart'] as $key => $item) {
                // Lấy số lượng mới từ dữ liệu POST
                $newqty = $_POST['newqty'][$key];
                // Cập nhật số lượng mới cho mục trong giỏ hàng
                $_SESSION['cart'][$key]['qty'] = $newqty;
                // Cập nhật thành tiền mới cho mục trong giỏ hàng
                $_SESSION['cart'][$key]['total'] = $_SESSION['cart'][$key]['cost'] * $newqty;
            }
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;
}
