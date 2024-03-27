<?php
class Quanlynhanvien{
    function getnv()
    {
        $db=new connect();
        $select="select * from nhanvien";
        $result=$db->getList($select);
        return $result;
    }
    function insertnhanvien($hoten,$dia,$username,$matkhau, $role)
    {
        $db=new connect();
        $query="insert into nhanvien(idnv,hoten,dia,username,matkhau, role) 
        values (Null,'$hoten','$dia','$username',$matkhau, $role)";
       
        $result=$db->exec($query);
        return $result;
    }
    // phường thức lấy thông tin dựa vào id
    function getnvID($id)
    {
        $db=new connect();
        $select="select * from nhanvien where idnv=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function updatenv($idnv,$hoten,$dia,$username,$matkhau,$role)
    {
        $db=new connect();
        $query="update nhanvien 
        set hoten='$hoten',dia='$dia',username='$username',matkhau='$matkhau' , role=$role
        where idnv=$idnv";
        
        $result=$db->exec($query);
        return $result;
    }

    function deletetnv($idnv)
    {
        $db=new connect();
        $query="DELETE FROM nhanvien WHERE idnv = $idnv";
       
        $result=$db->exec($query);
        return $result;
    }

}
?>