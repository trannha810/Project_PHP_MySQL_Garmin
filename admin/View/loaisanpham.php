
<form name="frmloaihang" action="" method="post">
  <div class="card mt-3">
    <div class="card-header">
      QUẢN LÝ LOẠI HÀNG
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col">
            
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col">idMenu</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $hh = new loai();
          $result = $hh->getLoai();
          while ($set = $result->fetch()):
            ?>
            <tr>
              <th scope="row">
              <td><?php echo $set['maloai']; ?></td>
              <td><?php echo $set['tenloai']; ?></td>
              <td><?php echo $set['iddanhmuc']; ?></td>
              <td>
                <a href="index.php?action=loai&act=delete_loai&id=<?php echo $set['maloai']; ?>" class="btn btn-danger" >Xoá</a>
                <a href="index.php?action=loai&act=update_loai&id=<?php echo $set['maloai'];?>" class="btn btn-info">Sửa</a>
              </td>
            </tr>
          <?php
          endwhile;
          ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <!-- <button class="btn btn-info" disabled="disabled" id="btnXoaChon">Xóa đã chọn</button>   -->
      
      <a href="javascript:void(0)" onclick="confirmDelete()" class="btn btn-danger">Xoá hết</a>

      <a href="index.php?action=loai" class="btn btn-info">Thêm mới</a>
    </div>
  </div>
</form>




   






      <script>
  function confirmDelete() {
  // Hiển thị thông báo xác nhận
  var confirmText = "Bạn có chắc chắn muốn xóa tất cả loại hàng?";
  if (confirm(confirmText)) {
    // Chuyển hướng đến link xóa nếu người dùng chọn "OK"
    window.location.href = "index.php?action=loai&act=delete_loai_all";
  }
}

</script>
