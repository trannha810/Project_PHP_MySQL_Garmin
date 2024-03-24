<?php
$act="hanghoa";
if(isset($_GET['act']))
{
    $act=$_GET['act'];

}
switch ($act) {
    case 'hanghoa':
        include_once "../Admin2/View/hanghoa.php";
        break;
    
    case 'add_hanghoa':
        include_once "../Admin2/View/edithanghoa.php";
        break;
    case 'insert_action':
        // kiểm tra và nhận thông tin
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $mahh=$_POST['mahh'];
            $tenhh=$_POST['tenhh'];
            $hinh = $_FILES["hinh"]["name"]; 
            $maloai=$_POST['iddanhmuc'];
            // $dacbiet=$_POST['dacbiet'];
            $slx=$_POST['slx'];
            $ngaylap=$_POST['ngaylap'];
            $mota=$_POST['mota'];
            // dem thông tin insert vao database
            $hh=new hanghoa();
            $check=$hh->insertHangHoa($tenhh,$hinh,$maloai,$ngaylap,$slx,$mota);
            if($check!==false)
            {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
            }
            else
            {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            }

        }
        break;
    case 'update_hanghoa':
        include_once "../Admin2/View/edithanghoa.php";
        break;
        case 'insert_hanghoa':
            include_once "../Admin2/View/edithanghoa.php";
            break;
    case "update_action":
        // nhận thông tin
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $mahh=$_POST['mahh'];
            $tenhh=$_POST['tenhh'];
            $hinh = $_FILES["hinh"]["name"]; 
            $maloai=$_POST['iddanhmuc'];
            // $dacbiet=$_POST['dacbiet'];
            $slx=$_POST['slx'];
            $ngaylap=$_POST['ngaylap'];
            $mota=$_POST['mota'];
            // dem thông tin update vao database
            $hh=new hanghoa();
            $kt=$hh->updateHangHoa($mahh,$tenhh,$maloai,$ngaylap,$mota);
            if($kt!==false)
            {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
            }
            else
            {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
case "delete_hanghoa":
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $hh=new hanghoa();
        $kt=$hh->deleteHangHoa($id);
        if($kt!==false)
        {
            echo '<script> alert("Delete dữ liệu thành công")</script>';
            echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
        }
        else
        {
            echo '<script> alert("Delete dữ liệu ko thành công")</script>';
        }
    }
}

?>