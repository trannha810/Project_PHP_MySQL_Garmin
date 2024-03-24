<div class="container">
    <header style="text-decoration: none">
        <div class="header-top">
            <div class="container">
                <ul class="header-social-container">
                    <li>
                        <a href="#" class="social-link" style="text-decoration: none">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-main">
            <div class="container " style="margin-top: -1.5%;margin-bottom:-1%">

                <a href="#" class="header-logo">
                    <img src="./Content/image/logo.png" alt="" width="200px" height="70px">
                </a>
                <div class="header-search-container">
                    <form class="form-inline " action="index.php?action=sanpham&act=timkiem" method="post">
                        <input type="text" name="txtsearch" class="search-field" placeholder="Enter your product name...">
                        <button class="search-btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>




                </div>

                <div class="header-user-actions">
                    <?php
                    if (!isset($_SESSION['makh'])) {
                    ?>
                        <ul>
                            <li class="">

                                <a href="index.php?action=dangky" class="nav-link" style="font-size: 40px;color:black;"><i class="bi bi-person-add"></i></a>
                            </li>
                        </ul>
                        <ul>
                            <li class="mt-1">
                                <a href="index.php?action=dangnhap" class="nav-link" style="font-size: 40px; color:black;margin-left: -10%;"><i class="bi bi-box-arrow-in-right"></i></a>
                            </li>
                        </ul>
                        <ul>
                            <li class="">
                                <a href="index.php?action=giohang"><i class="bi bi-bag-check-fill" style="font-size: 40px; color:black"></i></a>

                            </li>
                        </ul>
                    <?php
                    }

                    if (isset($_SESSION['makh'])) {
                        echo '
                        <li>
                        
                            <b style="color: black; margin-top: 20px; margin-left: 0px;">Xin chao ban </b>' . $_SESSION['tenkh'] . '            
                            <li class="nav-item">
                                <a href="index.php?action=dangnhap&act=dangxuat" ><i class="bi bi-sign-turn-right-fill" style="font-size: 40px; color:black"></i></a>
                            </li>
                            <?php
                        </li>';
                    } else {
                    }
                    ?>
                </div>
            </div>
        </div>
        <nav class="desktop-navigation-menu" style="background-color: #E8E8E8;">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="index.php?action=home" class="menu-title">Home</a>
                    </li>

                    <li class="menu-category">
                        <a href="index.php?action=sanpham" class="menu-title">
                            watch type</a>

                        <div class="dropdown-panel">
                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">One</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="index.php?action=sanpham&act=caycanh">Fashion</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="index.php?action=sanpham&act=msenda">Sport</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="index.php?action=sanpham&act=xuongrong">Healt</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="index.php?action=sanpham&act=thuysinh">Oudoor Activities</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="index.php?action=sanpham&act=khac">Accessory</a>
                                </li>



                                <a href="#">
                                    <img src="./Content/image/banner4.jpg" alt="men's fashion" width="250" height="119">
                                </a>
                    </li>
                </ul>
                <ul class="dropdown-panel-list">
                    <li class="menu-title">
                        <a href="#">Tow</a>
                    </li>

                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=caycanh">Fashion</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=senda">Sport</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=xuongrong">Healt</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=thuysinh">Oudoor Activities</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=khac">Accessory</a>
                    </li>
                    <a href="#">
                        <img src="./Content/image/banner1.webp" alt="women's fashion" width="250" height="119">
                    </a>
                    </li>
                </ul>
                <ul class="dropdown-panel-list">
                    <li class="menu-title">
                        <a href="#">Three</a>
                    </li>

                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=caycanh">Fashion</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=senda">Sport</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=xuongrong">Healt</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=thuysinh">Oudoor Activities</a>
                    </li>
                    <li class="panel-list-item">
                        <a href="index.php?action=sanpham&act=khac">Accessory</a>
                    </li>
                    <a href="#">
                        <img src="./Content/image/banner3.jpg" alt="mouse collection" width="250" height="119">
                    </a>
                    </li>
                </ul>
                <ul class="dropdown-panel-list">
                    <li class="menu-title">
                        <a href="index.php?action=sanpham&act=sanphamkhuyenmai">HOT!</a>
                    </li>
                    <a href="#">
                        <img src="./Content/image/sale.jpg" alt="mouse collection" width="200" height="200">
                    </a>
                    </li>
                </ul>
            </div>
            </li>

            <li class="menu-category">
                <a href="index.php?action=sanpham&act=khac" class="menu-title">
                    ACCESSORIES INCLUDED</a>
            </li>

            <li class="menu-category">
                <a href="index.php?action=user" class="menu-title">Blog</a>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">About Us</a>
            </li>

            </ul>

</div>

</header>
<!-- hinh dộng -->
<!--
                - BANNER
                -->
<div class="banner">
    <div class="container">
        <div class="slider-container has-scrollbar">

            <div class="slider-item">

                <img src="./Content/image/banner1.webp" alt="women's latest fashion sale" class="banner-img" height="250">

                <div class="banner-content">

                    <a href="#" class="banner-btn" style="text-decoration: none;color: white;">Shop now</a>

                </div>

            </div>

            <div class="slider-item">

                <img src="./Content/image/banner7.jpg" alt="modern sunglasses" class="banner-img">

                <div class="banner-content">

                    <a href="#" class="banner-btn">Shop now</a>

                </div>

            </div>

        </div>
    </div>
    <!--
        - CATEGORY
        -->

    <div class="category">

        <div class="container">

            <div class="category-item-container has-scrollbar">

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="./Content/images/icons/dress.svg" alt="dress & frock" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Fashion</h3>

                            <p class="category-item-amount">(tồn:13)</p>
                        </div>

                        <a href="index.php?action=sanpham&act=caycanh" class="category-btn" style="text-decoration: none;color:  hsl(353, 100%, 78%);">Show all</a>

                    </div>

                </div>

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="./Content/images/icons/coat.svg" alt="winter wear" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Sport</h3>

                            <p class="category-item-amount">(tồn:5)</p>
                        </div>

                        <a href="index.php?action=sanpham&act=senda" class="category-btn" style="text-decoration: none;color:  hsl(353, 100%, 78%);">Show all</a>

                    </div>

                </div>

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="./Content/images/icons/glasses.svg" alt="glasses & lens" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Healt</h3>

                            <p class="category-item-amount">(tồn:6)</p>
                        </div>

                        <a href="index.php?action=sanpham&act=xuongrong" class="category-btn" style="text-decoration: none;color:  hsl(353, 100%, 78%);">Show all</a>

                    </div>

                </div>

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="./Content/images/icons/shorts.svg" alt="shorts & jeans" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Uotdoor Activities</h3>
                            <p class="category-item-amount">(tồn:15)</p>
                        </div>

                        <a href="index.php?action=sanpham&act=thuysinh" class="category-btn" style="text-decoration: none;color:  hsl(353, 100%, 78%);">Show all</a>

                    </div>

                </div>

                <div class="category-item">

                    <div class="category-img-box">
                        <img src="./Content/images/icons/tee.svg" alt="t-shirts" width="30">
                    </div>

                    <div class="category-content-box">

                        <div class="category-content-flex">
                            <h3 class="category-item-title">Accessory</h3>

                            <p class="category-item-amount">(tồn9)</p>
                        </div>

                        <a href="index.php?action=sanpham&act=khac" class="category-btn" style="text-decoration: none;color:  hsl(353, 100%, 78%);">Show all</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
</div>