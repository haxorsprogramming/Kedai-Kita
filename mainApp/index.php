<?php
session_start();
if(!ISSET($_SESSION['username'])){
    header('location:../');
    die();
}else{

}
$user = $_SESSION['username'];
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>Kedai Kita - Aplikasi Manajemen Usaha Kecil & Menengah</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/datatables/datatables.min.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css">
  <script src="https://www.gstatic.com/charts/loader.js"></script>
 </head>

 <body>
   <div id="app">
     <div class="main-wrapper">
       <div class="navbar-bg"  style='background-color:#00b894;'></div>
       <nav class="navbar navbar-expand-lg main-navbar">
         <form class="form-inline mr-auto">
           <ul class="navbar-nav mr-3">
             <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
             <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
           </ul>
           <div class="search-element">


           </div>
         </form>
         <ul class="navbar-nav navbar-right">

           <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">Hi, <?=$user; ?></div></a>
             <div class="dropdown-menu dropdown-menu-right">

               <a href="log_out.php" class="dropdown-item has-icon text-danger">
                 <i class="fas fa-sign-out-alt"></i> Logout
               </a>
             </div>
           </li>
         </ul>
       </nav>
       <div class="main-sidebar">
        <?php
        include('menu-side.php');
         ?>
       </div>

       <!-- Main Content -->
       <div class="main-content">
         <section class="section">
           <div class="section-header">
             <h1 id='capUtama'>Dashboard</h1>
           </div>
         <div id="divUtama">

       </div>
     </section>
      
     </div>
   </div>
 <footer class="main-footer">
        
           Copyright &copy; 2020 - NadhaMedia
         
       </footer>
    <!-- General JS Scripts -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://demo.getstisla.com/assets/modules/popper.js"></script>
   <script src="https://demo.getstisla.com/assets/modules/bootstrap/js/bootstrap.min.js"></script>
   <script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
   <script src="https://demo.getstisla.com/assets/modules/moment.min.js"></script>
   <script src="https://demo.getstisla.com/assets/js/stisla.js"></script>

   <!-- JS Libraies -->
 
   <script src="https://demo.getstisla.com/asset/modules/jquery.simpleWeather.min.js"></script>
   <!-- <script src="https://demo.getstisla.com/asset/modules/Chart.min.js"></script> -->
   <script src="https://demo.getstisla.com/asset/modules/jquery.vmap.min.js"></script>
   <script src="https://demo.getstisla.com/asset/maps/jquery.vmap.world.js"></script>
   <script src="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.js"></script>
   <script src="https://demo.getstisla.com/asset/modules/jquery.chocolat.min.js"></script>
     <script src="https://demo.getstisla.com/assets/modules/datatables/datatables.min.js"></script>
   
     
   <!-- Template JS File -->
   <script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
   <script src="../ladun/mainApp/js/mainApp.js"></script>
 </body>
 </html>
