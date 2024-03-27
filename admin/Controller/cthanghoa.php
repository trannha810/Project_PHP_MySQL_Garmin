<?php
    $act="cthanghoa";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'cthanghoa':
            include_once "./View/cthanghoa.php";
            break;
        
        case 'cthanghoa_action':
            if(isset($_POST['submit']))
            {
                $mahh=$_POST['mahh'];
               
                $dongia=$_POST['dongia'];
                $slt=$_POST['slt'];
               $giamgia=$_POST['giamgia'];
               $size=$_POST['size'];
                ///
                $ct=new cthanghoa();
                $kq=$ct->insertCTHangHoa($mahh, $dongia, $slt,$giamgia,$size);
                if($kq!==false)
                {
                    
                    echo '<script> alert("Insert thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
                }
                else
                {
                    echo '<script> alert("Insert ko thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
                }

                
            }
            break;
    }
    
?>