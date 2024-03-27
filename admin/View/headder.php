<header class="row ">


  <section class="col-12" style="height:40px;">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: black;">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-45" href="">Trang quản lý</a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->

      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

            <li>
              <a href=""><?php
                          if (isset($_SESSION['idnv'])) {
                            $idnv = $_SESSION['idnv'];
                            $hd = new nhanvien();
                            $khhd = $hd->gettenUserAdmin($idnv);
                            $tenkh = $khhd['username'];

                          ?>
                  <?php echo $tenkh; ?>
                <?php
                          };
                ?></a>
            </li>
            <li><a class="dropdown-item" href="index.php?action=dangnhap&act=dangxuat">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">


              <div class="sb-sidenav-menu-heading">Interface</div>
              <!-- // Quản Trị Doanh Mục -->
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Quản Trị Doanh Mục
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="index.php?action=loai">Loại Sản Phẩm</a>
                  <a class="nav-link" href="index.php?action=hanghoa">Sản Phẩm</a>
                  <a class="nav-link" href="index.php?action=cthanghoa">Chi tiết Sản Phẩm</a>

                </nav>
              </div>
              <!-- // Quản Trị Doanh Mục -->

              <!-- //Thống Kê -->
              <?php
              if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {

              ?>
                <a class="nav-link collapsed" href="index.php?action=thongke">
                  <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                  Thống Kê

                </a>
              <?php } ?>
              <!-- //Thống Kê -->

              <a class="nav-link collapsed" href="index.php?action=tonkho" aria-expanded="false">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Tồn kho

              </a>
              <!-- // -->
              <?php
              if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {

              ?>
                <div class="sb-sidenav-menu-heading">Quản lý</div>
                <a class="nav-link" href="index.php?action=quanlynhanvien">
                  <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                  Quản lý nhân viên
                </a>
                <a class="nav-link" href="index.php?action=quanlykhachhang">
                  <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                  Quản lý khách hàng
                </a>
              <?php } ?>
              <a class="nav-link" href="index.php?action=donhang">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Quản lý đơn hàng
              </a>
              <!-- // -->
              <a href="index.php?action=dangnhap&act=dangxuat" class="nav-link" style="color: #436D4D;">Đặng xuất</a>
            </div>
          </div>
          <div class="sb-sidenav-footer pb-5">
            <div class="small">Logged in as:</div>
            <?php
            if (isset($_SESSION['idnv'])) {
              $idnv = $_SESSION['idnv'];
              $hd = new nhanvien();
              $khhd = $hd->gettenUserAdmin($idnv);
              $tenkh = $khhd['username'];

            ?>
              <?php echo $tenkh; ?>
            <?php
            };
            ?>


          </div>
        </nav>
        <div class="grid-container">

          <!-- Main -->
          <!-- <main class="main-container">
  <div class="main-title">
    <p class="font-weight-bold">DASHBOARD</p>
  </div>

  <div class="main-cards">

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">PRODUCTS</p>
        <span class="material-icons-outlined text-blue">inventory_2</span>
      </div>
      <span class="text-primary font-weight-bold">249</span>
    </div>

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">PURCHASE ORDERS</p>
        <span class="material-icons-outlined text-orange">add_shopping_cart</span>
      </div>
      <span class="text-primary font-weight-bold">83</span>
    </div>

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">SALES ORDERS</p>
        <span class="material-icons-outlined text-green">shopping_cart</span>
      </div>
      <span class="text-primary font-weight-bold">79</span>
    </div>

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">INVENTORY ALERTS</p>
        <span class="material-icons-outlined text-red">notification_important</span>
      </div>
      <span class="text-primary font-weight-bold">56</span>
    </div>

  </div>


</main> -->
          <!-- End Main -->

        </div>

      </div>
    </div>
  </section>
  <section>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <title>Admin Dashboard</title>

      <!-- Montserrat Font -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- Material Icons -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
      <div class="grid-container" style="margin-bottom: -25%;">


        <main class="main-container">
          <div class="main-title">
            <p class="font-weight-bold">GARMIN</p>
          </div>

          <div class="main-cards">

            <div class="card">
              <div class="card-inner">
                <p class="text-primary">PRODUCTS</p>
                <?php
                $hh = new thongke();
                $result = $hh->getslhh();
                while ($set = $result->fetch()) {
                ?>
                  <span class="material-icons-outlined text-blue"></span>
              </div>
              <span class="text-primary font-weight-bold"><?php echo $set['soluonghh'] ?></span>
            </div>
          <?php } ?>
          <div class="card">
            <div class="card-inner">
              <p class="text-primary">STOCK EXISTS QUANTITY
              </p>
              <?php
              $hh = new thongke();
              $result = $hh->getslt();
              while ($set = $result->fetch()) {
              ?>
                <span class="material-icons-outlined text-orange"></span>
            </div>
            <span class="text-primary font-weight-bold"><?php echo $set['doanhthu'] ?></span>
          </div>
        <?php } ?>
        <div class="card">
          <div class="card-inner">
            <?php
            $hh = new thongke();
            $result = $hh->getTongtiensanpham();
            while ($set = $result->fetch()) {
            ?>
              <p class="text-primary">
                TOTAL PRODUCT COST</p>
              <span class="material-icons-outlined text-green"></span>
          </div>
          <span class="text-primary font-weight-bold"><?php echo $set['tongtien'] ?>$</span>
        </div>
      <?php } ?>
      <div class="card">
        <div class="card-inner">
          <p class="text-primary">
            TOTAL CUSTOMERS</p>
          <?php
          $hh = new thongke();
          $result = $hh->getTongKH();
          while ($set = $result->fetch()) {
          ?>
            <span class="material-icons-outlined text-red"></span>
        </div>
        <span class="text-primary font-weight-bold"><?php echo $set['tong'] ?></span>
      </div>

          </div>
        <?php } ?>

        </main>


      </div>

      <!-- Scripts -->
      <!-- ApexCharts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
      <!-- Custom JS -->
      <script src="js/scripts.js"></script>
    </body>

    </html>
  </section>


</header>
<script>
  let sidebarOpen = false;
  const sidebar = document.getElementById('sidebar');

  function openSidebar() {
    if (!sidebarOpen) {
      sidebar.classList.add('sidebar-responsive');
      sidebarOpen = true;
    }
  }

  function closeSidebar() {
    if (sidebarOpen) {
      sidebar.classList.remove('sidebar-responsive');
      sidebarOpen = false;
    }
  }
</script>
<style>
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #e6e8ed;
    color: #666666;
    font-family: "Montserrat", sans-serif;
  }

  .material-icons-outlined {
    vertical-align: middle;
    line-height: 1px;
  }

  .text-primary {
    color: #666666;
  }

  .text-blue {
    color: #246dec;
  }

  .text-red {
    color: #cc3c43;
  }

  .text-green {
    color: #367952;
  }

  .text-orange {
    color: #f5b74f;
  }

  .font-weight-bold {
    font-weight: 600;
  }

  .grid-container {
    display: grid;
    grid-template-columns: 260px 1fr 1fr 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
      "sidebar header header header"
      "sidebar main main main";
    height: 100vh;
  }


  /* ---------- HEADER ---------- */

  .header {
    grid-area: header;
    height: 70px;
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 30px 0 30px;
    box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
  }

  .menu-icon {
    display: none;
  }


  /* ---------- SIDEBAR ---------- */

  #sidebar {
    grid-area: sidebar;
    height: 100%;
    background-color: #21232d;
    color: #9799ab;
    overflow-y: auto;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
  }

  .sidebar-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 20px 20px 20px;
    margin-bottom: 30px;
  }

  .sidebar-title>span {
    display: none;
  }

  .sidebar-brand {
    margin-top: 15px;
    font-size: 20px;
    font-weight: 700;
  }

  .sidebar-list {
    padding: 0;
    margin-top: 15px;
    list-style-type: none;
  }

  .sidebar-list-item {
    padding: 20px 20px 20px 20px;
  }

  .sidebar-list-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
    cursor: pointer;
  }

  .sidebar-list-item>a {
    text-decoration: none;
    color: #9799ab;
  }

  .sidebar-responsive {
    display: inline !important;
    position: absolute;
    /*
    the z-index of the ApexCharts is 11
    we want the z-index of the sidebar higher so that
    the charts are not showing over the sidebar 
    on small screens
  */
    z-index: 12 !important;
  }


  /* ---------- MAIN ---------- */

  .main-container {
    grid-area: main;
    overflow-y: auto;
    padding: 20px 20px;
  }

  .main-title {
    display: flex;
    justify-content: space-between;
  }

  .main-title>p {
    font-size: 20px;
  }

  .main-cards {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 20px;
    margin: 20px 0;
  }

  .card {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 25px;
    background-color: #ffffff;
    box-sizing: border-box;
    border: 1px solid #d2d2d3;
    border-radius: 5px;
    box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
  }

  .card:first-child {
    border-left: 7px solid #246dec;
  }

  .card:nth-child(2) {
    border-left: 7px solid #f5b74f;
  }

  .card:nth-child(3) {
    border-left: 7px solid #367952;
  }

  .card:nth-child(4) {
    border-left: 7px solid #cc3c43;
  }

  .card>span {
    font-size: 20px;
    font-weight: 600;
  }

  .card-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .card-inner>p {
    font-size: 18px;
  }

  .card-inner>span {
    font-size: 35px;
  }

  .charts {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }


  /* ---------- SCROLLBARS ---------- */

  ::-webkit-scrollbar {
    width: 5px;
    height: 6px;
  }

  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px #a5aaad;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    background-color: #4f35a1;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background-color: #a5aaad;
  }


  /* ---------- MEDIA QUERIES ---------- */


  /* Medium <= 992px */
  @media screen and (max-width: 992px) {
    .grid-container {
      grid-template-columns: 1fr;
      grid-template-rows: 0.2fr 3fr;
      grid-template-areas:
        "header"
        "main";
    }

    #sidebar {
      display: none;
    }

    .menu-icon {
      display: inline;
    }

    .sidebar-title>span {
      display: inline;
    }
  }

  /* Small <= 768px */
  @media screen and (max-width: 768px) {
    .main-cards {
      grid-template-columns: 1fr;
      gap: 10px;
      margin-bottom: 0;
    }

    .charts {
      grid-template-columns: 1fr;
      margin-top: 30px;
    }
  }

  /* Extra Small <= 576px */
  @media screen and (max-width: 576px) {
    .header-left {
      display: none;
    }
  }
</style>