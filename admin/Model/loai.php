<?php
    class loai{
        function getLoai()
        {
            $db=new connect();
            $select="select * from loai";
            $result=$db->getList($select);
            return $result;
        }
        function insertLoai($tenloai,$iddanhmuc)
        {
            $db=new connect();
            $query="insert into danhmuc(iddanhmuc,hinh,ten,act) 
            values ($iddanhmuc,'$tenloai','$tenloai','act');
            insert into loai(maloai,tenloai,iddanhmuc) 
            values (Null,'$tenloai',$iddanhmuc)";
           
            $result=$db->exec($query);
            return $result;
        }
        function countLoai()
        {
            $db=new connect();
            $select="SELECT COUNT(*) as count FROM loai";
           
            $result=$db->getInstance($select);
            return $result;
        }
        function deletetLoai($maloai)
        {
            $db=new connect();
            $query="DELETE FROM loai WHERE maloai = $maloai";
           
            $result=$db->exec($query);
            return $result;
        }
        function deletetLoaiall()
        {
            $db=new connect();
            $query="DELETE FROM loai ";
           
            $result=$db->exec($query);
            return $result;
        }
        function getLoaiID($id)
        {
            $db=new connect();
            $select="select * from loai where maloai=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function updateLoai($maloai,$tenloai,$iddanhmuc,$tenloai_khongdau)
        {
            $db=new connect();
            $query="update loai INNER JOIN danhmuc on loai.iddanhmuc=danhmuc.iddanhmuc
            set loai.tenloai='$tenloai',loai.iddanhmuc=$iddanhmuc, danhmuc.ten='$tenloai',danhmuc.iddanhmuc=$iddanhmuc, danhmuc.act='$tenloai_khongdau'
            where loai.maloai=$maloai";
            $result=$db->exec($query);
            return $result;
        }
    }
?>