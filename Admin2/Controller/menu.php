<?php
$act="menu";
if(isset($_GET['act']))
{
    $act=$_GET['act'];

}
switch ($act) {
    case 'menu':
        include_once "../Admin2/View/addloaisanpham.php";
        break;
        case 'insert_menu':
            include_once "../Admin2/View/addloaisanpham.php";
            break;
        case 'insert_action':
            // kiểm tra và nhận thông tin
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $iddanhmuc=$_POST['iddanhmuc'];
                $ten=$_POST['ten'];
                $hinh = $_FILES["hinh"]["name"]; 
                $act=$_POST['act'];
                // dem thông tin insert vao database
                $hh=new loai();
                $check=$hh->insertMenu($hinh,$ten,$act);
                if($check!==false)
                {
                    echo '<script> alert("Thêm dữ liệu thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=menu"/>';
                }
                else
                {
                    echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
                }
    
            }
            break;
        case 'update_menu':
            include_once "../Admin2/View/addloaisanpham.php";
            break;

        case "update_action":
            // nhận thông tin
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $mahh=$_POST['mahh'];
                $tenhh=$_POST['tenhh'];
                $maloai=$_POST['maloai'];
                // $dacbiet=$_POST['dacbiet'];
                // $slx=$_POST['slx'];
                $ngaylap=$_POST['ngaylap'];
                $mota=$_POST['mota'];
                // dem thông tin update vao database
                $hh=new hanghoa();
                $kt=$hh->updateHangHoa($mahh,$tenhh,$maloai,$ngaylap,$mota);
                if($kt!==false)
                {
                    echo '<script> alert("Update dữ liệu thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=menu"/>';
                }
                else
                {
                    echo '<script> alert("Update dữ liệu ko thành công")</script>';
                }
            }
            break;
    case "delete_menu":
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $hh=new hanghoa();
            $kt=$hh->deleteHangHoa($id);
            if($kt!==false)
            {
                echo '<script> alert("Delete dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=menu"/>';
            }
            else
            {
                echo '<script> alert("Delete dữ liệu ko thành công")</script>';
            }
        }
    }
?>