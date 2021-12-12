<?php
include'koneksi.php';
include'valid.php';
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DATA PENDUDUK KECAMATAN CILAMAYA </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- CSS UNTUK LOADING -->
  <link rel="stylesheet" href="plugins/pace/pace.min.css">
  <!--  -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <!-- select -->
  
  <!-- akhir select -->

  <style type="text/css">
    
    .anic {
  -webkit-animation: fade-in 0.27s linear infinite alternate;
  -moz-animation: fade-in 0.27s linear infinite alternate;
  animation: fade-in 0.27s linear infinite alternate;
}
@-moz-keyframes fade-in {
  0% {
    opacity: 0;
  }
  65% {
    opacity: 1;
  }
}
@-webkit-keyframes fade-in {
  0% {
    opacity: 0;
  }
  65% {
    opacity: 1;
  }
}
keyframes fade-in {
  0% {
    opacity: 0;
  }
  65% {
    opacity: 1;
  }


  </style>
</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="berandawarga.php" class="logo">
      <span class="logo-mini"><b>+</b></span>
      <span class="logo-lg"><b>DATA PENDUDUK CILAMAYA</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="berandawarga.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" data-toggle="control-sidebar"><marquee><i class="fa fa-mortar-board"> </i> PENCATATAN DATA KEPENDUDUKAN KECAMATAN CILAMAYA </marquee></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="gambar/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user_name'] ?></p> <BR>
          
        </div>
      </div>
      <ul class="sidebar-menu">
        <li>
          <a href="berandawarga.php">
            <i class="fa fa-home" ></i> <span>BERANDA</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">BERANDA</small>
            </span>
          </a>
        </li>
         <li class="treeview">
          <a>
            <i class="fa fa-database"></i>
            <span>DATA UTAMA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data_agama.php"><i class="fa fa-gear"></i> Data Agama</a></li>
            <li><a href="data_pendidikan.php"><i class="fa fa-wrench"></i> Data Pendidikan</a></li>
            <li><a href="data_pekerjaan.php"><i class="fa fa-wrench"></i> Data Pekerjaan</a></li>
             <li><a href="data_lurah.php"><i class="fa fa-wrench"></i> Data Kelurahan/Desa</a></li>
             <li><a href="data_penduduk.php"><i class="fa fa-filter"></i> Tampil Data Penduduk</a></li>
          </ul>
        </li>


      
      <li class="treeview">
          <a>
            <i class="fa fa-paper-plane"></i>
            <span>DATA PENDUDUK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data_tetap.php"><i class="fa fa-tags"></i>Penduduk Tetap</a></li>
            <li><a href="data_pindah.php"><i class="fa fa-tags"></i>Penduduk Pindah</a></li>
            <li><a href="data_datang.php"><i class="fa fa-tags"></i>Penduduk Datang</a></li>
            <li><a href="data_meninggal.php"><i class="fa fa-tags"></i>Penduduk Meninggal</a></li>
            <li><a href="data_lahir.php"><i class="fa fa-tags"></i>Penduduk Lahir</a></li>
          </ul>
        </li>



        

           <li>
          <a href="keluar.php">
            <i class="fa fa-reply-all"></i> <span>Logout</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">X</small>
            </span>
          </a>
        </li>
      </ul>
 </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="anic">

        <h4>SISTEM INFORMASI DATA KEPENDUDUKAN KECAMATAN CILAMAYA</h4>

      </div>
      <ol class="breadcrumb">
        <li><a href="berandawarga.php"><i class="fa fa-refresh"></i>Refresh</a></li>
      </ol>
    </section>

