<div class="col-md-4 col-md-offset-4">
    <h3><b>SỐ LƯỢNG TỒN</b></h3>
    
</div>

<div>
<table class="table">
        <thead>
            <tr class="table-primary">
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Ngày lập hàng</th>
                <th>Số lượng tồn</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
        $hh=new Tonkho();
        $result=$hh->getslton();
        while($set=$result->fetch()):
      ?>
            <tr>
                <td><?php echo $set['mahh'];?></td>
                <td><?php echo $set['tenhh'];?></td>
                <td><?php echo $set['ngaylap'];?></td>

                <td><?php echo $set['soluongton'];?></td>
                
               
            </tr>
            <?php
     endwhile;
     ?>
        </tbody>
    </table>
</div>
