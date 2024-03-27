<div class="col-md-4 col-md-offset-4">
    <h3><b>KHÁCH HÀNG</b></h3>
    
</div>

<div>
<table class="table">
        <thead>
            <tr class="table-primary">
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Username</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>  
            </tr>
        </thead>
        <tbody>
            <?php
        $hh=new Quanlykhachhang();
        $result=$hh->getkh();
        while($set=$result->fetch()):
      ?>
            <tr>
                <td><?php echo $set['makh'];?></td>
                <td><?php echo $set['tenkh'];?></td>
                <td><?php echo $set['username'];?></td>

                <td><?php echo $set['email'];?></td>
                <td><?php echo $set['diachi'];?></td>
                <td><?php echo $set['sodienthoai'];?></td>


                <td> 
                <?php
                    if ($_SESSION['role']==1) {
                       
                    ?>
               
        <a href="index.php?action=quanlykhachhang&act=xoa_khach_hang&id=<?php echo $set['makh']; ?>" class="btn btn-danger">Xóa</a></td>
             <?php
             
                    }?>
            </tr>
            <?php
     endwhile;
     ?>
        </tbody>
    </table>
</div>
