<?php
class Tonkho
{
    function getslton()
    {
        // Replace with your connection details
        $db = new connect();


        // Edit the query to match your table and column names
        $select = "SELECT b.mahh, a.soluongton, b.tenhh, b.ngaylap
            FROM cthanghoa a, hanghoa b
            where a.idmahh=b.mahh";
        $result = $db->getList($select);
        return $result;
    }
}
?>