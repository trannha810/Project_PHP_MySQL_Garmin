<div class="col-md-4 col-md-offset-4">
    <h3><b>DANH SÁCH HÀNG HÓA</b></h3>
</div>
<div class="row col-12">
    <?php
                    if ($_SESSION['role']==1||$_SESSION['role']==2) {
                       
                    ?>
    <a href="index.php?action=hanghoa&act=add_hanghoa">
        <h4>Thêm sản phẩm</h4>
    </a>
    <?php
    }?>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Mã loại</th>

                <th>Số lượt xem</th>
                <th>Ngày lập</th>
                <th>Mô tả</th>
                <?php
                    if ($_SESSION['role']==1||$_SESSION['role']==2) {
                       
                    ?>
                <th>Cập Nhật</th>
                <th>Xóa</th>
                <?php
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
        $hh=new hanghoa();
        $result=$hh->getHangHoa();
        while($set=$result->fetch()):
      ?>
            <tr>
                <td><?php echo $set['mahh'];?></td>
                <td><?php echo $set['tenhh'];?></td>
                <td><?php echo $set['maloai'];?></td>

                <td><?php echo $set['soluotxem'];?></td>
                <td><?php echo $set['ngaylap'];?></td>
                <td><?php echo $set['mota'];?></td>
                <?php
                    if ($_SESSION['role']==1||$_SESSION['role']==2) {
                       
                    ?>
                <td><a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mahh'];?>"
                        class="btn btn-warning">Cập nhật</a>
                </td>
                <td> <a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['mahh']; ?>"
                        class="btn btn-danger">Xóa</a></td>
                <?php }?>
            </tr>
            <?php
     endwhile;
     ?>
        </tbody>
    </table>
</div>