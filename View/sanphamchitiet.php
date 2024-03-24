<script type="text/javascript">
// function chonsize(a) {
//     document.getElementById("size").value = a;

// }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <div class="container-fliud">
    <div class="wrapper row">
      <form action="index.php?action=giohang&act=giohang_action" method="post">
        <div class="product-featured">
          <h2 class="title"></h2>
          <div class="showcase-wrapper has-scrollbar">

            <div class="showcase-container">

              <div class="showcase">
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $hh = new hanghoa();
                                $sp = $hh->getHangHoaId($id);
                                $tenhh = $sp['tenhh'];
                                $mota = $sp['mota'];
                                $dongia = $sp['dongia'];
                                $slt = $sp['soluongton'];

                            }
                            ?>
                            <?php
                            $hinh = $hh->getHangHoaHinh($id);
                            $set = $hinh->fetch();
                            ?>
                            <div class="showcase-banner p-0" >
                              <img src="<?php echo 'Content/image/' . $set['hinh']; ?>" alt="shampoo, conditioner & facewash packs" class="showcase-img" >
                            </div>

                            <div class="showcase-content">
                <input type="hidden" name="mahh" value="<?php echo $id;?>" />
                  <a href="#">
                    <h1 class="showcase-title" style="font-size: 35px;"><b><?php echo $tenhh;?></b></h1>
                  </a>

                  <p class="showcase-desc">
                  <b style="font-size: 20px;"><?php echo $mota;?></b>
                  </p>

                  <div class="price-box">
                    <p class="price" style="font-size: 30px;">$<?php echo number_format($dongia);?></p>
                  </div>
                  <div class="showcase-status" style="margin-top: -8%;"><br>
                    <p style="margin-left: -90%;"><b>Số Lượng:</b></p>  <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" style="width: 23%;" />  

          </div>
          <button class="add-cart-btn" type="submit" data-toggle="modal" data-target="#myModal">add to cart</button>

        </div>

      </div>

    </div>

    <div class="showcase-container">


      <div class="showcase">

        <div class="showcase-banner">
          <img src="./Content/image/user1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
        </div>
    
        <div class="showcase-content">
    
          <div class="showcase-rating">
            
          </div>

          <h3 class="showcase-title">
            <a href="#" class="showcase-title text-center" style="font-size: 35px;margin-bottom: 5%;">Bình Luận</a>
          </h3>

          <form action="index.php?action=binhluan" method="post">
            <div class="row">
            <input type="hidden" name="txtmahh" value="" />
            <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận" style="width: 100%;height: 200px;">  </textarea>
            <input type="submit" class="add-cart-btn" id="submitButton" style="float: right;width: 30%;border: none;margin-top: 5%;" value="Bình Luận" />
            </div>
            
          </form>

          
        </div>

      </div>

    </div>

  </div>

</div>
<?php if (isset($_SESSION['makh'])):
    ?>
        <div class="row">
            <p class="float-left"><b>Các bình luận</b></p>
            <hr>
            <?php
            $bl = new commen();
            $noidung = $bl->selectBinhLuan($id);
            while ($set = $noidung->fetch()):
                ?>
                <div class="col-12 mb-3">
                    <div class="row">

                        <p>
                            <img src="Content/img/avatar1.png" alt="" width="30px" height="30px">
                            <?php echo '<b>' . $set['username'] . ': </b>'; ?>
                            <br>
                            <span class="ml-5">
                                <?php echo $set['commen'] ?>
                            </span>
                        </p>

                    </div>
                </div>
                <?php endwhile ?>
        </div>
        <?php endif; ?>
</div>
</section>



