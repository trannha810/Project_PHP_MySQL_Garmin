<?php
class Donhang
{
    function getdonhang()
    {
        $db = new connect();
        $query = "select a.masohd, a.soluongmua, b.ngaydat,b.tongtien, a.tinhtrang from cthoadon a, hoadon b, hanghoa c where a.masohd=b.masohd GROUP BY a.masohd, a.soluongmua, b.ngaydat, a.tinhtrang ORDER BY a.masohd asc";
        $result=$db->getList($query);
        return $result;
    }
    function getdonhangID($masohd)
    {
        $db=new connect();
        $select="select sum(thanhtien) as tong, masohd, tinhtrang  from cthoadon where masohd=$masohd GROUP BY masohd, tinhtrang";
        $result=$db->getInstance($select);
        return $result;
    }
    function getHangHoaMSHD($masohd)
    {
        $db=new connect();
        $select="select a.tenhh, b.soluongmua from hanghoa a, cthoadon b WHERE a.mahh=b.mahh and b.masohd= $masohd";
        $result=$db->getList($select);
        return $result;
    }
    function updateHangHoa($tinhtrang, $masohd)
    {
        $db=new connect();
        $query="update cthoadon
        set tinhtrang='$tinhtrang'
        where masohd=$masohd";
        
        $result=$db->exec($query);
        return $result;
    }
    
}