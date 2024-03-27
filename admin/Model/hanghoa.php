<?php
class hanghoa{
    function getHangHoa()
    {
        $db=new connect();
        $select="select * from hanghoa";
        $result=$db->getList($select);
        return $result;
    }
    function insertHangHoa($tenhh,$hinh,$maloai,$ngaylap,$slx,$mota)
    {
        $db=new connect();
        $query="insert into hanghoa(mahh,tenhh,hinh,maloai,ngaylap,soluotxem,mota) 
        values (Null,'$tenhh','$hinh',$maloai,'$ngaylap',$slx,'$mota')";
       
        $result=$db->exec($query);
        return $result;
    }
    // phường thức lấy thông tin dựa vào id
    function getHangHoaID($id)
    {
        $db=new connect();
        $select="select * from hanghoa where mahh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function updateHangHoa($mahh,$tenhh,$maloai,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="update hanghoa 
        set tenhh='$tenhh',maloai=$maloai,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
    function getMau()
    {
        $db=new connect();
        $select="select * from mausac";
        $result=$db->getList($select);
        return $result;
    }
    function getSize()
    {
        $db=new connect();
        $select="select * from sizegiay";
        $result=$db->getList($select);
        return $result;
    }
    function deletetHangHoa($mahh)
    {
        $db=new connect();
        $query="DELETE FROM hanghoa WHERE mahh = $mahh";
       
        $result=$db->exec($query);
        return $result;
    }
  
}
?>