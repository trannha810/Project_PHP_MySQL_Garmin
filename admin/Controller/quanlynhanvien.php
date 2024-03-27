<?php
$act = "quanlynhanvien";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'quanlynhanvien':
        include_once "./View/quanlynhanvien.php";
        break;

        case 'add_nv':
          include_once "./View/editnhanvien.php";
          break;
      case 'insert_action':
          // kiểm tra và nhận thông tin
          if($_SERVER['REQUEST_METHOD']=='POST')
          {
            $hoten=$_POST['hoten'];
   
            $dia=$_POST['dia'];
            $username=$_POST['username'];
            $matkhau=$_POST['matkhau'];
            $role=$_POST['role'];


              // dem thông tin insert vao database
              $hh=new Quanlynhanvien();
              $check=$hh->insertnhanvien($hoten,$dia,$username,$matkhau, $role);
              if($check!==false)
              {
                  
                  echo '<script> alert("Thêm nhân viên thành công")</script>';
                  echo '<meta http-equiv=refresh content="0;url=./index.php?action=quanlynhanvien"/>';
              }
              else
              {
                  echo '<script> alert("Thêm nhân viên ko thành công")</script>';
              }
  
          }
          break;
      case 'update_nv':
          include_once "./View/editnhanvien.php";
          break;
      case "update_action":
          // nhận thông tin
          if($_SERVER['REQUEST_METHOD']=='POST')
          {
            $idnv=$_POST['idnv'];
            $hoten=$_POST['hoten'];
   
            $dia=$_POST['dia'];
            $username=$_POST['username'];
            $matkhau=$_POST['matkhau'];
            $role=$_POST['role'];

              // dem thông tin update vao database
              $hh=new Quanlynhanvien();
              $check=$hh->updatenv($idnv,$hoten,$dia,$username,$matkhau, $role);
              if($kt!==false)
              {
                  echo '<script> alert("Update dữ liệu thành công")</script>';
                  echo '<meta http-equiv=refresh content="0;url=./index.php?action=quanlynhanvien"/>';
              }
              else
              {
                  echo '<script> alert("Update dữ liệu ko thành công")</script>';
              }
          }
          break;
          case 'delete_nv':
                     // nhận thông tin
                     
                     if (isset($_GET['act']) && $_GET['act'] === 'delete_nv') {
                      if (isset($_GET['id'])) {
                          $idnv = $_GET['id'];
                          $hh = new Quanlynhanvien();
                          $result = $hh->deletetnv($idnv);
                          if ($result) {
                            echo '<script>alert("Xóa nhân viên thành công!")</script>';
                            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=quanlynhanvien">';
                          } else {
                            echo '<script>alert("Xóa nhân viên thất bại!")</script>';
                          }
                        }
                 
                  }
                   
                     
                    
              break;
       
}
?>