<?php
    class loai{
        function getLoai()
        {
            $db=new connect();
            $select="select * from danhmuc";
            $result=$db->getList($select);
            return $result;
        }
        function getLoaiPage($start, $limit)
        {
            $db=new connect();
            $select="select * from danhmuc limit " . $start . "," . $limit;
            $result=$db->getList($select);
            return $result;
        }
        function getDanhMucID($iddanhmuc)
        {
            $db=new connect();
            $select="select * from danhmuc where iddanhmuc=$iddanhmuc";
            $result=$db->getInstance($select);
            return $result;
        }
        function insertMenu($hinh,$ten,$act)
        {
            $db=new connect();
            $query="insert into danhmuc(iddanhmuc,hinh,ten,act) 
            values (null,'$hinh','$ten','$act')";
            $result=$db->exec($query);
            return $result;
        }
    }
?>