<?php
class cthanghoa
{
    function insertCTHangHoa($mahh, $dongia, $slt,$giamgia,$size)
    {
        $db = new connect();
        $query = "insert into cthanghoa (idmahh,dongia,soluongton,giamgia,size) values ($mahh,$dongia,$slt,$giamgia,$size)";
        $result=$db->exec($query);
        return $result;
    }
}
?>