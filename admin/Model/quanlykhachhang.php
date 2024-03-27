<?php
class Quanlykhachhang
{
    function getkh()
    {
        // Replace with your connection details
        $db = new connect();


        // Edit the query to match your table and column names
        $select = "SELECT *
            FROM khachhang
            ";
        $result = $db->getList($select);
        return $result;
    }
    function deletetkh($makh)
    {
        $db = new connect();
        $query = "DELETE FROM khachhang WHERE makh = $makh";
       
        $result = $db->exec($query);
        return $result;
    }
}
?>