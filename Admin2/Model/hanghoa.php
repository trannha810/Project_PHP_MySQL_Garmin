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
        values (null,'$tenhh','$hinh',$maloai,'$ngaylap',$slx,'$mota')";
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
    function updateHangHoa($mahh,$tenhh,$maloai,$ngaylap,$mota)
    {
        $db=new connect();
        $query="update hanghoa 
        set tenhh='$tenhh',maloai=$maloai,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
    function deleteHangHoa($id) {
        $db=new connect();

        $query = "DELETE FROM hanghoa WHERE mahh = $id";
       
        $result=$db->exec($query);
        return $result;

    }
    function getHangHoaPage($start, $limit)
    {
        $db=new connect();
        $select="SELECT * from hanghoa limit " . $start . "," . $limit;
        $result=$db->getList($select);
        return $result;
    }

}
?>