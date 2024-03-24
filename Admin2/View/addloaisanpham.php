<div class="card mt-3">
    <div class="card-header info">
        QUẢN LÝ LOẠI HÀNG
    </div>
    <div class="card-body">
        <?php
    if (isset($_GET['iddanhmuc'])) {
      $iddanhmuc = $_GET['iddanhmuc'];
      $hh = new loai();
      $kq = $hh->getDanhMucID($iddanhmuc);
      $ten= $kq['ten'];
      $hinh= $kq['hinh'];

      $iddanhmuc = $kq['iddanhmuc'];

      // $slx=$kq['soluotxem'];
      $ngaylap = $kq['ngaylap'];
      $mota = $kq['mota'];
    }
    ?>
        <?php
    $ac = 1;
    if (isset($_GET['action'])) {
      if (isset($_GET['act']) && $_GET['act'] == 'insert_action') {
        $ac = 1;
      } else {
        $ac = 2;
      }
    }
    ?>
        <?php
    if ($ac == 2) {
      echo '<form action="index.php?action=menu&act=insert_action" method="post" enctype="multipart/form-data">';
    } else {
      echo '<form action="index.php?action=menu&act=update_action" method="post" enctype="multipart/form-data">';
    }
    ?>

        <div class="form-group">
            <label for="">Mã danh mục</label>
            <input type="text" readonly name="iddanhmuc" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" name="ten" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Hình:</label>
            <input type="file" name="hinh" class="form-control">

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Lưu</button>

        </div>
        </form>
        <form action="">

            <div class="col-md-4 col-md-offset-4">
                <h3><b>DANH SÁCH MENU</b></h3>
            </div>
            <div class="row col-12">

            </div>
            <div class="row">
                <table class="table" style="width: 1140px; ">
                    <thead>
                        <tr class="table-primary">
                            <th>id danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Hình</th>
                            <th>act</th>




                            <th>Cập Nhật</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
            $hh = new loai();
            $result = $hh->getLoai();
            $count = $hh->getLoai()->rowCount();
            //b2 xác định limit
            $limit = 4;
            //b3 tính ra là có bao nhiêu trang
            $trang = new page();
            $page = $trang->findPage($count, $limit); //2trang
            //b4: tính ra start
            $start = $trang->findStart($limit); //8
            //b5 tạo biến chứa trang hiện tại
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $result = $hh->getLoaiPage($start, $limit);
            while ($set = $result->fetch()):
              ?>
                        <tr>
                            <td>
                                <?php echo $set['iddanhmuc']; ?>
                            </td>
                            <td>
                                <?php echo $set['ten']; ?>
                            </td>
                            <td>
                                <?php echo $set['hinh']; ?>
                            </td>
                            <td>
                                <?php echo $set['act']; ?>
                            </td>


                            <td><a href="index.php?action=menu&act=update_menu&id=<?php echo $set['iddanhmuc']; ?>">Cập
                                    nhật</a></td>
                            <td><a
                                    href="index.php?action=menu&act=delete_menu&id=<?php echo $set['iddanhmuc']; ?>">Xóa</a>
                            </td>
                        </tr>
                        <?php
            endwhile;
            ?>
                        <tr>
                            <td colspan="7">
                                <ul class="pagination">
                                    <?php

                  if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=menu&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                  }
                  for ($i = 1; $i <= $page; $i++) {
                    ?>
                                    <li>
                                        <a href="index.php?action=menu&page=<?php echo "$i"; ?>">
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
                    <a href="index.php?action=menu&page=' . ($current_page + 1) . '"><button type="button"
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
        </form>

    </div>
</div>