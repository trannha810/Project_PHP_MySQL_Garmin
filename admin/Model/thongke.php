<?php
class Thongke
{
    function getsl()
    {
        // Replace with your connection details
        $db = new connect();


        // Edit the query to match your table and column names
        $select = "SELECT mahh, SUM(soluongmua) AS tong
            FROM cthoadon
            GROUP BY mahh
            ORDER BY tong DESC";
        $result = $db->getList($select);
        return $result;
    }
    function getSpbannhieunhat1()
    {
        // Replace with your connection details
        $db = new connect();


        // Edit the query to match your table and column names
        $select = "SELECT a.mahh,b.tenhh, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien
        FROM cthoadon a, hanghoa b
        where a.mahh = b.mahh 
        GROUP BY a.mahh
        ORDER BY tong DESC
        LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }
    function getSpbannhieunhat($year,$month)
    {
        // Replace with your connection details
        $db = new connect();
        // Edit the query to match your table and column names
        $select = "SELECT a.mahh,b.tenhh, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien
        FROM cthoadon a, hanghoa b, hoadon c
        where a.mahh = b.mahh and month(c.ngaydat) = $month AND year(c.ngaydat) = $year and c.masohd=a.masohd
        GROUP BY a.mahh
        ORDER BY tong DESC
        LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }
    
    function getSpbannhieunhat_theo_quy($year, $start_month, $end_month)
    {
        // Replace with your connection details
        $db = new connect();
        // Edit the query to match your table and column names
        $select = "SELECT a.mahh,b.tenhh,c.ngaydat, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien
        FROM cthoadon a, hanghoa b, hoadon c
        where   a.mahh = b.mahh and c.masohd=a.masohd AND YEAR(c.ngaydat)=$year AND   MONTH(c.ngaydat) >= $start_month AND MONTH(c.ngaydat) <=  $end_month
        GROUP BY a.mahh, c.ngaydat
        ORDER BY tong DESC
        LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }
    function getSpbanitnhat($year,$month)
    {
        // Replace with your connection details
        $db = new connect();
        // Edit the query to match your table and column names
        $select = "SELECT a.mahh,b.tenhh, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien
        FROM cthoadon a, hanghoa b, hoadon c
        where a.mahh = b.mahh and month(c.ngaydat) = $month AND year(c.ngaydat) = $year and c.masohd=a.masohd
        GROUP BY a.mahh
        ORDER BY tong ASC
        LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }
    function getSpbanitnhat1()
    {
        // Replace with your connection details
        $db = new connect();
        // Edit the query to match your table and column names
        $select = "SELECT a.mahh,b.tenhh, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien
        FROM cthoadon a, hanghoa b, hoadon c
        where a.mahh = b.mahh  and c.masohd=a.masohd
        GROUP BY a.mahh
        ORDER BY tong ASC
        LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }
    function getSpbanitnhat_theo_quy($year, $start_month, $end_month)
    {
        // Replace with your connection details
        $db = new connect();
        // Edit the query to match your table and column names
        $select = "SELECT a.mahh,b.tenhh,c.ngaydat, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien
        FROM cthoadon a, hanghoa b, hoadon c
        where   a.mahh = b.mahh and c.masohd=a.masohd AND YEAR(c.ngaydat)=$year AND   MONTH(c.ngaydat) >= $start_month AND MONTH(c.ngaydat) <=  $end_month
        GROUP BY a.mahh, c.ngaydat
        ORDER BY tong ASC
        LIMIT 10";
        $result = $db->getList($select);
        return $result;
    }
    function dem() {
        // Replace with your actual connection details
        $db = new connect();
      
        // Edit the query to match your table and column names
        $select = "SELECT a.mahh, b.tenhh, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien
                   FROM cthoadon a
                   INNER JOIN hanghoa b ON a.mahh = b.mahh
                   GROUP BY a.mahh
                   ORDER BY tong DESC";
      
        $result = $db->getList($select); // Assuming getList() fetches data from database
      
        
      
        return $result;
      }
      function doanhthu() {
        // Replace with your actual connection details
        $db = new connect();
      
        // Edit the query to match your table and column names
        $select = "SELECT a.mahh, b.tenhh, c.ngaydat as nam, SUM(a.soluongmua) AS tong, SUM(a.thanhtien) AS tongtien

        FROM cthoadon a,hanghoa b, hoadon c
      
        WHERE a.mahh = b.mahh and a.masohd = c.masohd
        GROUP BY a.mahh, c.ngaydat
        ORDER BY tong DESC";
      
        $result = $db->getList($select); // Assuming getList() fetches data from database
      
        
      
        return $result;
      }
      function getslhh()
      {
        $db = new connect();
        $select = "SELECT COUNT(mahh) as soluonghh FROM hanghoa";
        $result = $db->getList($select);
        return $result;
    }
    function getslt()
    {
        $db = new connect();
        $select = "SELECT SUM(soluongton) as doanhthu FROM cthanghoa";
        $result = $db->getList($select);
        return $result;
    }
    function getTongtiensanpham()
    {
        $db = new connect();
        $select = "SELECT SUM(dongia) as tongtien FROM cthanghoa";
        $result = $db->getList($select);
        return $result;
    }
    function getTongKH()
    {
        $db = new connect();
        $select = "SELECT count(makh) as tong FROM khachhang";
        $result = $db->getList($select);
        return $result;
    }
}
?>