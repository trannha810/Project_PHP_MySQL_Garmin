<?php
class hanghoa{
        function getHangHoaMoi(){
        $db=new connect();
        $select="select a.mahh, a.tenhh,a.hinh,a.soluotxem,a.mota,b.dongia, b.soluongton from hanghoa a, cthanghoa b where a.mahh=b.idmahh AND a.mahh>1 ORDER by a.mahh desc LIMIT 12 ";
        $result=$db->getList($select);
        return $result;
    }
    function getHangHoaSale()
    {
        //B1: kết nối đc với dữ liệu
        $db=new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $select="SELECT a.mahh,a.tenhh,a.soluotxem,a.hinh,a.mota,b.dongia,b.giamgia ,b.soluongton from hanghoa a,cthanghoa b WHERE a.mahh=b.idmahh and b.giamgia!=0 ORDER by a.mahh limit 4";
        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result=$db->getList($select);
        return $result;// lấy được dữ liệu về
    }
    function getHangHoaAll()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.soluotxem,a.hinh,a.mota,b.dongia, b.soluongton from hanghoa a, cthanghoa b 
             WHERE a.mahh=b.idmahh  ORDER by a.mahh DESC";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
        function getHangHoaAllSALE()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="SELECT a.mahh,a.tenhh,a.soluotxem,a.hinh,a.mota,b.dongia,b.giamgia ,b.soluongton from hanghoa a,cthanghoa b WHERE a.mahh=b.idmahh and b.giamgia!=0 ORDER by a.mahh asc";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }

     function getCaycanh()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.mota,a.soluotxem,a.hinh,b.dongia, b.soluongton,b.giamgia from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=1  ORDER by a.mahh DESC ";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
        function getCaycanh3()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia,b.giamgia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=1  ORDER by a.mahh DESC limit 3 ";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
     function getSenda()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.soluotxem,a.hinh,a.mota,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=2  ORDER by a.mahh DESC ";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
        function getSenda3()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.mota,a.soluotxem,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=2  ORDER by a.mahh DESC limit 3 ";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
          function getXuongrong()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=3  ORDER by a.mahh DESC ";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
        function getXuongrong3()
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=3  ORDER by a.mahh DESC limit 3 ";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
     function getThuysinh()
     {
          //B1: kết nối đc với dữ liệu
          $db = new connect();
          // b2: cần lấy cái gì thì truy vấn cái đó
          $select = "select a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=4  ORDER by a.mahh DESC ";
          //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
          $result = $db->getList($select);
          return $result;// lấy được dữ liệu về
     }
     function getKhac()
     {
          //B1: kết nối đc với dữ liệu
          $db = new connect();
          // b2: cần lấy cái gì thì truy vấn cái đó
          $select = "select a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=5  ORDER by a.mahh DESC ";
          //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
          $result = $db->getList($select);
          return $result;// lấy được dữ liệu về
     }
     
          function getHangHoaAllPage($start,$limit)
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.mota,a.mota,a.soluotxem,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  ORDER by a.mahh DESC limit ".$start.",".$limit;
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
        function getHangHoaAllSalePage($start,$limit)
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia,b.giamgia,b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh and b.giamgia!=0 ORDER by a.mahh DESC limit ".$start.",".$limit;
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
         function getCaycanhPage($start, $limit)
        {
            //B1: kết nối đc với dữ liệu
            $db=new connect();
            // b2: cần lấy cái gì thì truy vấn cái đó
            $select="SELECT a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
            WHERE a.mahh=b.idmahh and a.maloai=1 ORDER by a.mahh DESC limit " . $start . "," . $limit;
            //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
            $result=$db->getList($select);
            return $result;// lấy được dữ liệu về
        }
        function getSendaPage($start, $limit)
        {
            //B1: kết nối đc với dữ liệu
            $db=new connect();
            // b2: cần lấy cái gì thì truy vấn cái đó
            $select="SELECT a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
            WHERE a.mahh=b.idmahh and a.maloai=2 ORDER by a.mahh DESC limit " . $start . "," . $limit;
            //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
            $result=$db->getList($select);
            return $result;// lấy được dữ liệu về
        }
        function getXuongrongPage($start, $limit)
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="SELECT a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=3  ORDER by a.mahh DESC limit " . $start . "," . $limit;
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result = $db->getList($select);
             return $result;
        }
        function getThuysinhPage($start, $limit)
        {
             //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="SELECT a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=4  ORDER by a.mahh DESC limit " . $start . "," . $limit;
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result = $db->getList($select);
             return $result;
        }
        function getKhacPage($start,$limit)
     {
          //B1: kết nối đc với dữ liệu
          $db = new connect();
          // b2: cần lấy cái gì thì truy vấn cái đó
          $select = "SELECT a.mahh,a.tenhh,a.soluotxem,a.mota,a.hinh,b.dongia, b.soluongton from hanghoa a,cthanghoa b 
             WHERE a.mahh=b.idmahh  and a.maloai=5  ORDER by a.mahh DESC limit " . $start. "," . $limit;
          //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
          $result = $db->getList($select);
          return $result;// lấy được dữ liệu về
     }
        function getHangHoaId($id) {
           //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select distinct a.mahh,a.tenhh,a.mota,b.dongia, b.soluongton, a.hinh from hanghoa a,cthanghoa b
             WHERE a.mahh=b.idmahh and a.mahh=$id";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getInstance($select);
             return $result;// lấy được dữ liệu về
        }


          function getHangHoaHinh($id) {
           //B1: kết nối đc với dữ liệu
             $db=new connect();
             // b2: cần lấy cái gì thì truy vấn cái đó
             $select="select  a.hinh from hanghoa a
             WHERE  a.mahh=$id";
             //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
             $result=$db->getList($select);
             return $result;// lấy được dữ liệu về
        }
        function timkiemSanPham($tk)
        {
            // b1: kết nối CSDL
            $db = new connect();
            // b2: cần lấy gì thì truy vấn gì
            $select = "SELECT a.mahh, a.tenhh, a.soluotxem, b.dongia, a.hinh,a.hinh,b.dongia, b.soluongton
            FROM hanghoa a, cthanghoa b WHERE a.mahh = b.idmahh and a.tenhh like '%$tk%' 
            order by a.mahh";
           
            $result = $db->getList($select);
            return $result;
        }
}
?>