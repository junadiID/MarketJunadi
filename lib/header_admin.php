<?php require 'database.php'; ?>
<!--
//************************************************
//* Pembuat : Ahmad Andika (Kang HL)
//* Release Date : 25 Januari 2019
//* © Dilarang Keras Mengedit/Menghapus Semuanya ©
//* © Hargai Orang Jika Anda Ingin Dihargai ©
//* UU Nomor 28 Tahun 2014
//************************************************
-->
<!DOCTYPE html>
<html lang="en">

    
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="google-site-verification" content="2frLBzHi9IILEo5lws3e5DV7s1do12vpBzCdYBAVQV8" />
    
<meta name="keywords" content="gracepanel , grace-panel , grace panel ,smm panel reseller, smm panel indonesia, panel all sosmed, daftar panel all pulsa, smm reseller, smm reseller panel, smm panel, agen pulsa murah, grace panel, panel terbaik di Indonesia, gracepanel, pusat smm, followers instagram, panel termurah di Indonesia, termurah, terbaik, paling baik, layanan lengkap ,Distributor & H2H Pulsa Termurah, Server Pulsa dan Token PLN Terlengkap, termurah dan cepat,panel instant,best panel,smm resseler panel,instagram like,cara memperbanyak likes, kebutuhan sosial media ,sosmedpedia, Medanpedia, regram, irvankede, followers gratus, followers murah, otomatis, digital, se Indonesia, CV pulsa, auto, Recomended" />

<meta name="description" content="Grace-panel Platform bisnis yang menyediakan berbagai kebutuhan sosial media seperti Instagram, Youtube, Facebook, Dll. Agen Pulsa & H2H Pulsa Termurah, Server Pulsa dan Token PLN Terlengkap">
  
        <title><?php echo $data['title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta content="<?php echo $data['deskripsi_web']; ?>" name="description" />
        <meta content="KangHL" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $config['web']['url'] ?>assets/images/favicon.ico">
        <meta name="msapplication-TileColor" content="#2c8ef8"> <meta name="theme-color" content="#2c8ef8">


        <!-- App css -->
        <link href="<?php echo $config['web']['url'] ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!--Morris Chart CSS -->
        <script src="<?php echo $config['web']['url'] ?>plugins/morris/morris.min.js"></script>
        <script src="<?php echo $config['web']['url'] ?>plugins/raphael/raphael-min.js"></script>    
        <!-- jQuery  -->
        <script src="<?php echo $config['web']['url'] ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo $config['web']['url'] ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $config['web']['url'] ?>assets/js/waves.js"></script>
        <script src="<?php echo $config['web']['url'] ?>assets/js/jquery.slimscroll.js"></script>
        <!-- Counter js  -->
        <script src="<?php echo $config['web']['url'] ?>plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo $config['web']['url'] ?>plugins/counterup/jquery.counterup.min.js"></script>
        <!-- Dashboard init -->
        <script src="<?php echo $config['web']['url'] ?>assets/pages/jquery.dashboard.js"></script>  
        <!-- Modal-Effect -->
        <link href="<?php echo $config['web']['url'] ?>plugins/custombox/css/custombox.min.css" rel="stylesheet">
        <script src="<?php echo $config['web']['url'] ?>plugins/custombox/js/custombox.min.js"></script>
        <script src="<?php echo $config['web']['url'] ?>plugins/custombox/js/legacy.min.js"></script>
        <!--Morris Chart CSS -->
        <script src="<?php echo $config['web']['url'] ?>plugins/morris/morris.min.js"></script>
        <script src="<?php echo $config['web']['url'] ?>plugins/raphael/raphael-min.js"></script> 

        <script src="<?php echo $config['web']['url'] ?>assets/js/modernizr.min.js"></script>  
        
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
</script>

    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main navbar m-b-0 b-0">
                <div class="container-fluid">

                    <!-- LOGO -->
                    <div class="logo">
                        <a href="<?php echo $config['web']['url']; ?>" class="logo">
                            <span class="logo-small"><i class="mdi mdi-cart"></i></span>
                            <span class="logo-large"><i class="mdi mdi-cart"></i> <?php echo $data['short_title']; ?></span>
                        </a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">
                        <ul class="nav navbar-right list-inline">
                            <li class="dropdown user-box list-inline-item">
                                <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="<?php echo $config['web']['url']; ?>assets/images/Admin.png" alt="user-img" class="rounded-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li><a href="<?php echo $config['web']['url']; ?>user/setting" class="dropdown-item"><i class="mdi mdi-account-settings-variant"></i> Pengaturan Akun</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>user/pemakaian-saldo" class="dropdown-item"><i class="mdi mdi-wallet"></i> Pemakaian Saldo</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>user/log" class="dropdown-item"><i class="mdi mdi-history"></i> Log</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>logout" class="dropdown-item"><i class="mdi mdi-logout"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">                            
                            <li class="has-submenu">
                                <a href="<?php echo $config['web']['url']; ?>admin-dashboard/"><i class="fi-air-play"></i> <span> Admin Dashboard</span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?php echo $config['web']['url']; ?>admin-dashboard/action-provider"><i class="mdi mdi-server-security"></i> <span>Provider Pusat</span> </a>
                            </li>    
                            <li class="has-submenu">
                                <a href="<?php echo $config['web']['url']; ?>admin-dashboard/pengguna"><i class="mdi mdi-account-multiple"></i> <span>Pengguna</span> </a>
                            </li>  
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-cart-plus"></i> <span> Pesanan </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/sosial-media">Sosial Media</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/pulsa">Pulsa</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/sms-gateway">SMS Gateway</a></li>
                                </ul>
                            </li>   
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-cart-plus"></i> <span> Layanan </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/layanan-sosmed">Sosial Media</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/layanan-pulsa">Pulsa</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/kategori-layanan">Kategori</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/provider">Provider</a></li>
                                </ul>
                            </li>         
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-wallet"></i> <span> Deposit </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/deposit">Kelola</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/metode-deposit">Metode Deposit</a></li>
                                </ul>
                            </li>     
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-book"></i> <span> Laporan </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/laporan-sosmed">Laporan Sosial Media</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/laporan-pulsa">Laporan Pulsa</a></li>                                    
                                </ul>
                            </li>                                                                                 
                            <li class="has-submenu">
                                <a href="<?php echo $config['web']['url']; ?>admin-dashboard/tiket"><i class="dripicons-ticket"></i> <span>Tiket</span> <?php if (mysqli_num_rows($AllTiketUsers) !== 0) { ?><span class="badge badge-warning"><?php echo mysqli_num_rows($AllTiketUsers); ?></span><?php } ?> </a></a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-file-multiple"></i> <span> Aktifitas </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/aktifitas-pengguna">Pengguna</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/penggunaan-saldo">Penggunaan Saldo</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/transfer-saldo">Transfer Saldo</a></li>
                                </ul>
                            </li>                      
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-list"></i> <span> Lainnya </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/berita">Berita</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/pengaturan-website">Pengaturan Website</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/harga-pendaftaran">Harga Pendaftaran</a></li>
                                    <li><a href="<?php echo $config['web']['url']; ?>admin-dashboard/halaman-lain">Halaman Lainnya</a></li>
                                </ul>
                            </li>                                                                                
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-20">
                            <a href="<?php echo $config['web']['url'] ?>" class="btn btn-primary btn-bordred"><i class="fa fa-reply"></i> Dashboard Utama</a>
                        </div>
                    </div>
                </div>

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-md-12">
                        <br />
                    </div>
                </div>
                <!-- end row -->

<?php
if (isset($_SESSION['hasil'])) {
?>
<div class="alert alert-<?php echo $_SESSION['hasil']['alert'] ?> alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Respon : </strong><?php echo $_SESSION['hasil']['judul'] ?><br /> <strong>Pesan : </strong> <?php echo $_SESSION['hasil']['pesan'] ?>
</div>
<?php
unset($_SESSION['hasil']);
}
?>

<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>
