<?php
if (isset ($_GET['id'])) {
  $idnv = $_GET['id'];
  $hh = new Quanlynhanvien();
  $kq = $hh->getnvID($idnv);


  $hoten = $kq['hoten'];

  $dia = $kq['dia'];
  $username = $kq['username'];
  $matkhau = $kq['matkhau'];
  $role = $kq['role'];
}
?>
<?php
$ac = 1;
if (isset ($_GET['action'])) {
  if (isset ($_GET['act']) && $_GET['act'] == 'add_nv') {
    $ac = 1;
  } else {
    $ac = 2;
  }
}
?>
<div class="row col-md-4 col-md-offset-4">
  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=quanlynhanvien&act=insert_action" method="post" enctype="multipart/form-data">';
  } else {
    echo '<form action="index.php?action=quanlynhanvien&act=update_action" method="post" enctype="multipart/form-data">';
  }
  ?>

  <table class="table" style="border: 0px;">

    <tr>
      <td>Mã nhân viên</td>
      <td> <input type="text" class="form-control" name="idnv" value="<?php if (isset ($idnv))
        echo $idnv; ?>" readonly />
      </td>
    </tr>
    <tr>
      <td>Tên nhân viên</td>
      <td><input type="text" class="form-control" name="hoten" value="<?php if (isset ($hoten))
        echo $hoten; ?>" maxlength="100px"></td>
    </tr>
    <tr>
      <td>Địa chỉ</td>
      <td><input type="text" class="form-control" name="dia" value="<?php if (isset ($dia))
        echo $dia; ?>" maxlength="100px"></td>
    </tr>


    <tr>
      <td>Username:</td>
      <td><input type="text" class="form-control" value="<?php if (isset ($username))
        echo $username; ?>" name="username">
      </td>
    </tr>
    <tr>
      <td>Mật khẩu:</td>
      <td><input type="text" class="form-control" value="<?php if (isset ($matkhau))
        echo $matkhau; ?>" name="matkhau">
      </td>
    </tr>

    <?php
    if ($ac == 1) {
      ?>
      <tr>
        <td><input type="hidden" class="form-control" value="3" name="role">
        </td>
      </tr>
      <?php
    } else {
      ?>
      <tr>
        <td>Quyền:</td>

        <td>

          <div class="form-group">

            <select class="custom-select" name="role" id="">
              <option selected value="<?php if (isset ($role)) {
                echo $role;
              } ?>">
                <?php
                if ($role == 1) {
                  echo "Admin";
                }
                if ($role == 2) {
                  echo "Manager";
                }
                if ($role == 3) {
                  echo "Nhân viên";
                }
                ?>
              </option>
              <option value="1">Admin</option>
              <option value="2">Manager</option>
              <option value="3">Nhân viên</option>
            </select>
          </div>
        </td>
      </tr>
      <?php
    }
    ?>



    <tr>
      <td colspan="2">
        <input type="submit" value="submit">


      </td>
    </tr>

  </table>
  </form>
</div>