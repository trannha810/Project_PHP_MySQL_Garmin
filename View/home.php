<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
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
                  
                    <img src="./Content/images/icons/dress.svg" alt="" width="20" height="20"
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
                  $result = $hh->getCaycanh();
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
      <!-- Best Sellers -->

        <!-- END Best Sellers -->
      
      <!-- End Danh muc -->
      <div class="product-box" >
          <div class="product-minimal">
            <div class="row">

              <div class="col-md-4" >
                <!-- New Ariivals -->
                <section id="examples">
                <div class="product-showcase" style="width: 100%;">
                    <h2 class="title">New Arrivals</h2>
                    <?php
                      $hh=new hanghoa();
                  $result = $hh->getCaycanh3();
                  while ($set = $result->fetch()) {
                      ?>
                    <div class="showcase-wrapper has-scrollbar">
                    
                    <div class="showcase-container">

                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="Content\image\<?php echo $set['hinh']; ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>" style="text-decoration: none;" style="text-decoration: none;">
                            <h4 class="showcase-title"><?php echo $set['tenhh']?></h4>
                            </a>

                            <a href="#" class="showcase-category" style="text-decoration: none;"></a>

                            <div class="price-box">
                            <p class="price"><?php echo $set['dongia'];?><b>$</b></p>
                            </div>

                        </div>

                      </div>   
                    </div>
                    </div>
                    <?php }?>
                    <a href="index.php?action=sanpham&act=sanphamcaycanh" class="banner-btn" style="width: 40,3%;text-decoration: none;color: white;margin-left: 65%;font-size: 10px;" >Show More</a>
                </div>
                </section>
              <!-- End Ariivals -->
              </div>
              <div class="col-md-4"> 
              <!-- Trending -->
                <section id="examples">
                <div class="product-showcase" style="width: 100%;">
                    <h2 class="title">Trending</h2>
                
                    <?php
                      $hh=new hanghoa();
                  $result = $hh->getSenda3();
                  while ($set = $result->fetch()) {
                      ?>
                    <div class="showcase-wrapper has-scrollbar">
                    
                    <div class="showcase-container">

                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="Content\image\<?php echo $set['hinh']; ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>" style="text-decoration: none;" style="text-decoration: none;">
                            <h4 class="showcase-title"><?php echo $set['tenhh']?></h4>
                            </a>

                            <a href="#" class="showcase-category" style="text-decoration: none;"></a>

                            <div class="price-box">
                            <p class="price"><?php echo $set['dongia'];?><b>$</b></p>
                            </div>

                        </div>

                      </div>   
                    </div>
                    </div>
                    <?php }?>
                    <a href="index.php?action=sanpham&act=sanphamsenda" class="banner-btn" style="width: 40,3%;text-decoration: none;color: white;margin-left: 65%;font-size: 10px;" >Show More</a>
                </div>
                </section>
              <!-- End Trending -->
              </div>
              <div class="col-md-4" >
              <!-- Top Rated -->
                <section id="examples">
                <div class="product-showcase" style="width: 100%;">
                    <h2 class="title">Top Rated</h2>
                    <?php
                      $hh=new hanghoa();
                  $result = $hh->getXuongrong3();
                  while ($set = $result->fetch()) {
                      ?>
                    <div class="showcase-wrapper has-scrollbar">
                    
                    <div class="showcase-container">

                        <div class="showcase">

                        <a href="#" class="showcase-img-box">
                            <img src="Content\image\<?php echo $set['hinh']; ?>" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>" style="text-decoration: none;" style="text-decoration: none;">
                            <h4 class="showcase-title"><?php echo $set['tenhh']?></h4>
                            </a>

                            <a href="#" class="showcase-category" style="text-decoration: none;"></a>

                            <div class="price-box">
                            <p class="price"><?php echo $set['dongia'];?><b>$</b></p>
                            </div>

                        </div>

                      </div>   
                    </div>
                    </div>
                    <?php }?>
                    <a href="index.php?action=sanpham&act=sanphamxuongrong" class="banner-btn" style="width: 40,3%;text-decoration: none;color: white;margin-left: 65%;font-size: 10px;" >Show More</a>
                </div>
                </section>
              <!-- End Top Rated -->
              </div>
              
            </div>
          </div>
          <div class="product-main">
              <!-- San Pham moi nhat -->
              <section id="examples" class="mb-5">
                <h2 class="title" style="font-size: 30px;">New Products</h2>
                <div class="product-grid">
                  <?php
                      $hh=new hanghoa();
                  $result = $hh->getHangHoaMoi();
                  while ($set = $result->fetch()) {
                      ?>
                  <div class="showcase" >

              <div class="showcase-banner">

                <img src="Content\image\<?php echo $set['hinh']; ?>" alt="Mens Winter Leathers Jackets" width="300px" class="product-img default">
                <img src="Content\image\<?php echo $set['hinh']; ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                <p class="showcase-badge angle pink">new</p>

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
                <h1 class="showcase-title" style="font-size: 15px;"><?php echo $set['mota']; ?> </h1>
                
                <div class="price-box">
                  <p class="price"><?php echo $set['dongia'];?><b>$</b></p>
                </div>

              </div>

              </div>

              <?php } ?>
              </div>
              </section>
              <a href="index.php?action=sanpham" class="banner-btn" style="width: 40,3%;text-decoration: none;color: white;margin-left: 86%;" >Show More</a>
              <section id="examples" class="">
                <h2 class="title" style="font-size: 30px;">Sale</h2>
                <div class="product-grid">
                  <?php
                  $hh=new hanghoa();
                  $result = $hh->getHangHoaSale();
                  while ($set = $result->fetch()) :
                  ?>
                  
                  <div class="showcase" >

                    <div class="showcase-banner">

                      <img src="Content\image\<?php echo $set['hinh']; ?>" alt="Mens Winter Leathers Jackets" width="300px" class="product-img default">
                      <img src="Content\image\<?php echo $set['hinh']; ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                        <p class="showcase-badge">15%</p>

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

                      <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>" style="text-decoration: none;" class="showcase-category" style="text-decoration: none;"><p><b><?php echo $set['tenhh']?></b></p></a>
                        <h1 class="showcase-title"> <?php echo $set['mota'] ?></h1>

                      <div class="price-box">
                        <p class="price"><?php echo $set['giamgia']; ?><b>$</b></p>
                        <del><strike><?php echo $set['dongia'];?></strike></del>
                      </div>

                    </div>

                  </div>
                  
                  <?php endwhile; ?>
                </div>
              </section>
              <a href="index.php?action=sanpham&act=sanphamkhuyenmai" class="banner-btn mt-5" style="width: 40,3%;text-decoration: none;color: white;margin-left: 86%;" >Show More</a>
        </div>
      </div>          
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
<!-- danh mục -->