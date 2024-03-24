<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang thông tin người dùng</title>
  <link rel="stylesheet" href="../Content/CSS/style.css">
</head>
<body>
  <div class="container">
    <div class="header" style="align-content: center;">
      <h1> Thông tin người dùng</h1>
    </div>
    <div class="content">
      <!-- <div class="avatar">
        <img src="avatar.jpg" alt="Avatar">
      </div> -->
      <?php
            if (isset($_SESSION['makh'])) {
                $makh = $_SESSION['makh'];
                $hd = new user();
                $khhd = $hd->getuser($makh);
                $tenkh = $khhd['tenkh'];
                $dc = $khhd['diachi'];
                $sodt = $khhd['sodienthoai'];
                $email = $khhd['email'];
?>
      <div class="info">
 
        <ul style=" list-style-type: none;">
          <li>
            <span>Tên:</span>
            <span><?php echo $tenkh; ?></span>
          </li>
          <li>
            <span>Địa chỉ:</span>
            <span><?php echo $dc; ?></span>
          </li>
          <li>
            <span>Email:</span>
            <span><?php echo $email; ?></span>
          </li>
          <li>
            <span>Số điện thoại:</span>
            <span><?php echo $sodt; ?></span>
          </li>
        </ul>
      </div>
      <a href="index.php?action=dangnhap&act=dangxuat" class="nav-link" style="color: #436D4D;">Đặng xuat</a>
      <?php
    };
    ?>

    </div>
  </div>
</body>
</html>
