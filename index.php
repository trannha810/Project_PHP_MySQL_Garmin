  <?php
//   include_once "Model/connect.php";
//   include_once "Model/hanghoa.php";\
// spl_autoload
// cách 1:
// spl_autoload_register('myModelClassLoader');
// function myModelClassLoader($className)
// {
//     $path='Model/';
//     include_once $path.$className.'.php';
// }
// cách 2:
session_start();
set_include_path(get_include_path(). PATH_SEPARATOR .'Model/');
  spl_autoload_extensions('.php');
  spl_autoload_register();
  include_once "Model/class.phpmailer.php"
  
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   
   <!-- link đăng nhập -->
    <link rel="stylesheet" href="./Content/js/script.js">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
   <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
   <!-- end link đăng nhập -->
   <link rel="stylesheet" href="https://icons.getbootstrap.com">
   <link rel="shortcut icon" href="./Content/images/logo/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="./Content/CSS/style.css">
   <link rel="stylesheet" type="text/css" href="./Content/CSS/style-prefix.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <!-- <link rel="stylesheet" href="./Content/js/script.js"> -->
   <link rel="stys" href="https://ionic.io/ionicons">
   <link rel="preconnect" href="https://fonts.google.com/specimen/Poppins?query=poppins" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
     rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- end link đăng nhập -->
    <link rel="stylesheet" type="text/css" href="Content/CSS/Tour.css" />
    <title>Nha~</title>
  </head>

  <body>
      <!-- header -->
      <?php
      include_once "View/headder.php";
      ?>
      <!-- hiên thi noi dung -->
      <div class="container">
          <div class="row">
              <!-- hien thi noi dung đây -->
              <?php
              $ctrl ="home";
              if(isset($_GET['action'])){
                $ctrl=$_GET['action']; 
              }  
              include_once "Controller/$ctrl.php";
              ?>
          </div>
      </div>
      <?php
      include_once "View/footer.php";
      ?>
      <!-- hiên thị footer -->
  </body>

  </html>