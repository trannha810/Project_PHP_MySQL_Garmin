<?php
$ac = 1;
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'sanpham') {
         if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
            $ac = 2;  
        }else if (isset($_GET['act']) && $_GET['act'] == 'caycanh') {
            $ac = 3;
        }else if (isset($_GET['act']) && $_GET['act'] == 'senda') {
            $ac = 4;
        } else if (isset($_GET['act']) && $_GET['act'] == 'xuongrong') {
            $ac = 5;
        } else if (isset($_GET['act']) && $_GET['act'] == 'thuysinh') {
            $ac = 7;
        } else if (isset($_GET['act']) && $_GET['act'] == 'khac') {
            $ac = 8;
    }
    else if (isset($_GET['act']) && $_GET['act'] == 'timkiem') {
        $ac = 6;
}
}
}
?>
  <?php
//xác định có bao nhiêu sản phẩm, select count(*)
$hh = new hanghoa();
if ($ac == 1) {
    $count = $hh->getHangHoaAll()->rowCount(); //14
} else
        if ($ac == 2) {
            $count = $hh->getHangHoaSale()->rowCount(); //14
        } else
        if ($ac == 3) {
            $count = $hh->getCaycanh()->rowCount(); //14
        } else
            if ($ac == 4) {
                $count = $hh->getSenda()->rowCount(); //14
            } else
                if ($ac == 5) {
                    $count = $hh->getXuongrong()->rowCount(); //14
                }
                else
                if ($ac == 7) {
                    $count = $hh->getThuysinh()->rowCount(); //14
                }
                else
                if ($ac == 8) {
                    $count = $hh->getKhac()->rowCount(); //14
                }
                else
                if ($ac == 6) {
                    if (isset($_POST['txtsearch'])) {
                        $tk = $_POST['txtsearch'];
                        $count = $hh->timkiemSanPham($tk)->rowCount();
                    }
                }

//b2 xác định limit
$limit = 8;
//b3 tính ra là có bao nhiêu trang
$trang = new page();
$page = $trang->findPage($count, $limit); //2trang
//b4: tính ra start
$start = $trang->findStart($limit); //8
//b5 tạo biến chứa trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

?>
<div class="product-container">
  <div class="container">
        <!-- Danh Muc  -->
      <div class="sidebar  has-scrollbar" data-mobile-menu>
          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

            <?php
                                $dm = new Danhmuc();
                                $result = $dm->getDanhmuc();
                                while ($set = $result->fetch()) {
                                    ?>
              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                  
                    <img src="./Content/images/icons/dress.svg" alt="clothes" width="20" height="20"
                      class="menu-title-img">
                    <a href="index.php?action=sanpham&act=<?php echo $set['act']; ?>"><p class="menu-title"><?php echo $set['ten']; ?></p></a>
                    
                  </div>
                  <div>
                  <i class="bi bi-node-plus-fill add-icon" ></i>
                  <i class="bi bi-node-minus-fill remove-icon"></i>
                  </div>
             
                </button>
              </li>
              <?php
                                }
                                ?>
            </ul>

          </div>
          <div class="product-showcase ">

            <h3 class="showcase-heading ">best sellers</h3>
            <?php
                  $hh=new hanghoa();
                  $result = $hh->getCaycanh3();
                  while ($set = $result->fetch()) {
            ?>
            <div class="showcase-wrapper mt-2">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="Content\image\<?php echo $set['hinh']; ?>" alt="baby fabric shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>" style="text-decoration: none;" style="text-decoration: none;">
                      <h4 class="showcase-title"><?php echo $set['tenhh']?></h4>
                    </a>
                    <div class="price-box">
                    <p class="price"><?php echo $set['giamgia']; ?><b>$</b></p>
                    <del><strike><?php echo $set['dongia'];?></strike></del>
                    </div>

                  </div>

                </div>



              </div>

            </div>

          
          <?php }?>
          </div>
      </div>
      <!-- End Danh muc -->
      <div class="product-box" >
          <div class="product-main">
          <section id="examples" class="mb-5">
          <?php
            if($ac==1){
                echo'<h3 class="mb-5 font-weight-bold" style="color:red;">TẤT CẢ SẢN PHẨM</h3>';
            if($ac==2){
                echo '<h3 class="mb-5 font-weight-bold" style="color:red;">TẤT CẢ SẢN PHẨM KHUYẾN MÃI</h3>';
                }
            }

            ?>
          <div class="product-grid">
            
          <?php
            $hh = new hanghoa();
            if ($ac == 1) {
                // $result = $hh->getHangHoaAll(); //lấy được bẳng 14 sp
                $result = $hh->getHangHoaAllPage($start, $limit); //sp được phân trang
            }
            if($ac == 2){
                $result=$hh->getHangHoaAllSalePage($start,$limit);
            }
            if ($ac == 3) {
                // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
                $result = $hh->getCaycanhPage($start, $limit); //sp được phân trang
            }
            if ($ac == 4) {
                // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
                $result = $hh->getSendaPage($start, $limit); //sp được phân trang
            }
            if ($ac == 5) {
                // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
                $result = $hh->getXuongrongPage($start, $limit); //sp được phân trang
            }
            if ($ac == 7) {
                // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
                $result = $hh->getThuysinhPage($start, $limit); //sp được phân trang
            }
            if ($ac == 8) {
                // $result = $hh->getHangHoaAllView(); //lấy được bẳng 14 sp
                $result = $hh->getKhacPage($start, $limit); //sp được phân trang
            }
            if ($ac == 6) {
                if (isset($_POST['txtsearch'])) {
                    $tk = $_POST['txtsearch'];
                    $result = $hh->timkiemSanPham($tk);
                }
            }

        //đổ từng sp lên view
        while ($set = $result->fetch()):
            ?>
            

            <div class="showcase" >
                <div class="showcase-banner">
                <img src="Content\image\<?php echo $set['hinh']; ?>" alt="Mens Winter Leathers Jackets" width="300px" class="product-img default">
                <img src="Content\image\<?php echo $set['hinh']; ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                <?php 
                    if($ac==1){
                      echo '<p class="showcase-badge angle pink">new</p>
                      ';
                    }
                    if($ac==2){
                      echo '<p class="showcase-badge">15%</p>';
                    }
                    ?> 
                <div class="showcase-actions">
                    <button class="btn-action" >
                    <i class="bi bi-eye-fill"><h7><?php echo $set['soluotxem']; ?></h7></i>
                    </button>
                    <button class="btn-action">
                    <i class="bi bi-eye-fill" ><?php echo $set['soluongton']; ?></i>
                    </button>
                    <button class="btn-action">
                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>"><i class="bi bi-cart-plus-fill" ></i></a>
                    </button>

                </div>
                </div>
                    <div class="showcase-content">
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>" style="text-decoration: none;"><p><b><?php echo $set['tenhh']?></b></p></a>
                        <h1 class="showcase-title" style="font-size: 10px;"><?php echo $set['mota']; ?> </h1>
                        
                        <div class="price-box">
                        <?php
                            if($ac==1){
                                echo'
                                <p class="price">'. $set['dongia'].'<b>$</b></p>';
                            }
                            if($ac==2){
                                echo '
                                <p class="price">'. $set['giamgia'].'<b>$</b></p>
                                <del><strike>'. $set['dongia'].'</strike></del>';
                            } ?>
                        </div>
                    </div>
              </div>

              <?php
                    endwhile;
                  ?>
                </section>
              </div> 
      </div>          
  </div>
</div>
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">


          </div>

      </div>
    <div class=" page">
      <ul class="pagination">
          <?php
            if ($ac == 1) {
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=sanpham&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
          <li>
              <a href="index.php?action=sanpham&page=<?php echo "$i"; ?>">
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
                    <a href="index.php?action=sanpham&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
                }
            }
            if ($ac == 2) {
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=sanpham&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
          <li>
              <a href="index.php?action=sanpham&act=sanphamkhuyenmai&page=<?php echo "$i"; ?>">
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
                    <a href="index.php?action=sanpham&act=sanphamkhuyenmai&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
                }
            }


            if ($ac == 3) {
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=sanpham&act=caycanh&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
          <li>
              <a href="index.php?action=sanpham&act=caycanh&page=<?php echo "$i"; ?>">
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
                    <a href="index.php?action=sanpham&act=caycanh&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
                }
            }
            if ($ac == 4) {
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=sanpham&act=senda&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
          <li>
              <a href="index.php?action=sanpham&act=senda&page=<?php echo "$i"; ?>">
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
                    <a href="index.php?action=sanpham&act=senda&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
                }
            }
            if ($ac == 5) {
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=sanpham&act=xuongrong&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
          <li>
              <a href="index.php?action=sanpham&act=xuongrong&page=<?php echo "$i"; ?>">
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
                    <a href="index.php?action=sanpham&act=xuongrong&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
                }
            }
            if ($ac == 7) {
                if ($current_page > 1 && $page > 1) {
                    echo '<li>
                    <a href="index.php?action=sanpham&act=thuysinh&page=' . ($current_page - 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success"><</button></a>
                    </li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    ?>
          <li>
              <a href="index.php?action=sanpham&act=thuysinh&page=<?php echo "$i"; ?>">
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
                    <a href="index.php?action=sanpham&act=thuysinh&page=' . ($current_page + 1) . '"><button type="button"
                            class="btn btn-lg btn-outline-success">></button></a>
                    </li>';
                }
            }

        
        
        ?>
      </ul>
  </div>