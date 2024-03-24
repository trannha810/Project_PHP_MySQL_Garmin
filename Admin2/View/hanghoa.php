
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH HÀNG HÓA</b></h3></div>
<div class="row col-12">
<a href="index.php?action=hanghoa&act=insert_hanghoa"><h4>Thêm sản phẩm</h4></a>
</div>
<div class="row">
<table class="table" style="width: 1140px; ">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Mã loại</th>
        
        <!-- <th>Số lượt xem</th> -->
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>

      <?php
        $hh=new hanghoa();
        $result=$hh->getHangHoa();
        $count = $hh->getHangHoa()->rowCount();
        //b2 xác định limit
        $limit = 4;
        //b3 tính ra là có bao nhiêu trang
        $trang = new page();
        $page = $trang->findPage($count, $limit); //2trang
        //b4: tính ra start
        $start = $trang->findStart($limit); //8
        //b5 tạo biến chứa trang hiện tại
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $result = $hh->getHangHoaPage($start, $limit);
        while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['tenhh'];?></td>
        <td><?php echo $set['maloai'];?></td>
        
        <!-- <td><?php echo $set['soluotxem'];?></td> -->
        <td><?php echo $set['ngaylap'];?></td>
        <td><?php echo $set['mota'];?></td>
        <td><a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mahh'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['mahh'];?>">Xóa</a></td>
      </tr>
     <?php
     endwhile;
     ?>
     <tr >
      <td colspan="7">
     <ul class="pagination">
      <?php
     
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=hanghoa&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
          <li>
              <a href="index.php?action=hanghoa&page=<?php echo "$i"; ?>">
                  <button type="button" class="btn btn-lg" <?php if ($i == $current_page) {
                                echo 'style="background-color:#498374; color: #ffffff; border: 1px solid #498374;"';
                            } else {
                                echo 'style="background-color: #ffffff; color: #000000; border: 1px solid #498374;"';
                            } ?>>
                      <?php echo $i; ?>
                  </button>
              </a>
          </li>
          <?php
                }
                if ($current_page < $page && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=hanghoa&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
                }
            

        
        
        ?>
        </td>
        </tr>
     </ul>
    </tbody>
  </table>
</div>