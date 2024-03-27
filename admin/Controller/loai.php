<?php
    $act="loai";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'loai':
            include_once "./View/addloaisanpham.php";
            break;
        case 'loai_action':
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                //b1: lấy về, từ Server $_FILE
                $file=$_FILES['file']['tmp_name'];
                // b2: thay thế những ký tự đặc biệt xEF,xBB,xBF
                file_put_contents($file,str_replace("\xEF\xBB\xBF","",file_get_contents($file)));
                //b3: mở file ra
                $file_open=fopen($file,"r");
                //b4: đọc nội dung của file
                while(($csv=fgetcsv($file_open,1000,","))!==false)
                {
                    $maloai=$csv[0];//null
                    $tenloai=$csv[1];//Mắt kính trẻ em
                    $idmenu=$csv[2];//5
                    $db=new connect();
                    $query="insert into loai(maloai,tenloai,idmenu) values ($maloai,'$tenloai',$idmenu)";
                    $db->exec($query);
                }
                echo '<script> alert("Import thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../index.php?action=loai"/>';
            }
            break;
            case 'loai_action_1':
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
            $maloai=$_POST['maloai'];

                    $iddanhmuc=$_POST['iddanhmuc'];
                    $tenloai=$_POST['tenloai'];
                    
                    // dem thông tin insert vao database
                    $hh=new loai();
                    $check=$hh->insertLoai($tenloai,$iddanhmuc);
                    if($check!==false)
                    {
                        
                        echo '<script> alert("Thêm dữ liệu thành công")</script>';
                        echo '<meta http-equiv=refresh content="0;url=./index.php?action=loai"/>';
                    }
                    else
                    {
                        echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
                    }
                }
                break;
                case 'danhsach':
                    include_once "./View/loaisanpham.php";
                    break;
                    case 'delete_loai':
                        // nhận thông tin
                        
                        if (isset($_GET['act']) && $_GET['act'] === 'delete_loai') {
                          if (isset($_GET['id'])) {
                            $maloai = $_GET['id'];
                        
                            $hh = new loai();
                            $result = $hh->deletetLoai($maloai);
                        
                            if ($result) {
                              echo '<script>alert("Xóa sản phẩm thành công!")</script>';
                              echo '<meta http-equiv="refresh" content="0;url=./index.php?action=loai&act=danhsach">';
                            } else {
                              echo '<script>alert("Xóa sản phẩm thất bại!")</script>';
                            }
                          }
                        }
                      
                        
                       
                 break;
                 case 'delete_loai_all':
                    // nhận thông tin
                    
                    if (isset($_GET['act']) && $_GET['act'] === 'delete_loai_all') {
                      
                        
                        $hh = new loai();
                        $result = $hh->deletetLoaiall();
                    
                        if ($result) {
                          echo '<script>alert("Xóa sản phẩm thành công!")</script>';
                          echo '<meta http-equiv="refresh" content="0;url=./index.php?action=loai&act=danhsach">';
                        } else {
                          echo '<script>alert("Xóa sản phẩm thất bại!")</script>';
                        }
                      
                    }
                  
                    
                   
             break;
             case 'update_loai':
                include_once "./View/editloaisanpham.php";
                break;
            case "update_loai_action":
                // nhận thông tin
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $maloai=$_POST['maloai'];
                    $tenloai=$_POST['tenloai'];
                    $iddanhmuc=$_POST['iddanhmuc'];
                    $tenloai_khongdau=$_POST['act'];
                    
                    // dem thông tin update vao database
                    $hh=new loai();
                    $kt=$hh->updateLoai($maloai,$tenloai,$iddanhmuc,$tenloai_khongdau);
                    if($kt!==false)
                    {
                        echo '<script> alert("Update dữ liệu thành công")</script>';
                        echo '<meta http-equiv=refresh content="0;url=./index.php?action=loai&act=danhsach"/>';
                    }
                    else
                    {
                        echo '<script> alert("Update dữ liệu ko thành công")</script>';
                    }
                }
                break;
    
        
    }
    
 
?>