<?php
    class nhanvien{
        function getUserAdmin($user,$pass)
        {
            $db=new connect();
            $select="select idnv, username, matkhau, role from nhanvien where username='$user' and matkhau='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
        function gettenUserAdmin($idnv)
        {
            $db=new connect();
            $select="select idnv, username, matkhau, role from nhanvien where idnv=$idnv";
            $result=$db->getInstance($select);
            return $result;
        }

    }
?>