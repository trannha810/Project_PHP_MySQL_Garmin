<div class="col-md-4 col-md-offset-4">
    <h3><b>DANH SÁCH NHÂN VIÊN</b></h3>
</div>
<div class="row col-12">
    <a href="index.php?action=quanlynhanvien&act=add_nv">
        <h4>Thêm nhân viên</h4>
    </a>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th>Mã nhân viên</th>
                <th>Tên nhân viên</th>
                <th>Đại chỉ</th>

                <th>Username</th>
                <th>Chức vụ</th>

                <?php
                    if ($_SESSION['role']==1) {
                       
                    ?>
                <th>Cập Nhật</th>
                <th>Xóa</th>
                <?php
                
                    }?>
            </tr>
        </thead>
        <tbody>
            <?php
            $hh = new Quanlynhanvien();
            $result = $hh->getnv();
            while ($set = $result->fetch()):
                ?>
            <tr>
                <td>
                    <?php echo $set['idnv']; ?>
                </td>
                <td>
                    <?php echo $set['hoten']; ?>
                </td>
                <td>
                    <?php echo $set['dia']; ?>
                </td>

                <td>
                    <?php echo $set['username']; ?>
                </td>
                <td>
                <?php
                if ($set['role'] == 1) {
                  echo "Admin";
                }
                if ($set['role'] == 2) {
                  echo "Manager";
                }
                if ($set['role'] == 3) {
                  echo "Nhân viên";
                }?>
                </td>
                <?php
                    if ($_SESSION['role']==1) {
                       
                    ?>
                <td><a href="index.php?action=quanlynhanvien&act=update_nv&id=<?php echo $set['idnv']; ?>"
                        class="btn btn-warning">Cập
                        nhật</a>
                </td>
                <td> <a href="index.php?action=quanlynhanvien&act=delete_nv&id=<?php echo $set['idnv']; ?>"
                        class="btn btn-danger">Xóa</a></td>
                <?php
                }


                
                ; ?>
            </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>
</div>