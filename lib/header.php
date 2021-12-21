<?php
require 'session_login.php';
require 'database.php';
require 'csrf_token.php';
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="google-site-verification" content="2frLBzHi9IILEo5lws3e5DV7s1do12vpBzCdYBAVQV8" />
    
<meta name="keywords" content="gracepanel , grace-panel , grace panel ,smm panel reseller, smm panel indonesia, panel all sosmed, daftar panel all pulsa, smm reseller, smm reseller panel, smm panel, agen pulsa murah, grace panel, panel terbaik di Indonesia, gracepanel, pusat smm, followers instagram, panel termurah di Indonesia, termurah, terbaik, paling baik, layanan lengkap ,Distributor & H2H Pulsa Termurah, Server Pulsa dan Token PLN Terlengkap, termurah dan cepat,panel instant,best panel,smm resseler panel,instagram like,cara memperbanyak likes, kebutuhan sosial media ,sosmedpedia, Medanpedia, regram, irvankede, followers gratis, followers murah, otomatis, digital, se Indonesia, CV pulsa, auto, Recomended" />

<meta name="description" content="Grace-panel Platform bisnis yang menyediakan berbagai kebutuhan sosial media seperti Instagram, Youtube, Facebook, Dll. Agen Pulsa & H2H Pulsa Termurah, Server Pulsa dan Token PLN Terlengkap">
  
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KG927PB');</script>
<!-- End Google Tag Manager -->
     
        <title><?php echo $data['title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="<?php echo $data['deskripsi_web']; ?>" name="description" />
        <meta content="KangHL" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $config['web']['url'] ?>../assets/images/icon.png">
<!-- App css -->
        <link href="<?php echo $config['web']['url'] ?>assets/v1/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>assets/v1/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>assets/v1/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>assets/v1/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>assets/v1/bootstrap.min.css" rel="stylesheet" type="text/css" />        
        <link href="<?php echo $config['web']['url'] ?>assets/v1/app.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $config['web']['url'] ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://unpkg.com/@icon/themify-icons/themify-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/solid.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
        <link href="https://unpkg.com/@icon/dripicons/dripicons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.8.55/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </head>


        <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                                    
<?php
if (isset($_SESSION['user'])) {
?>
                        <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="../assets/images/user.png" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                <font color ='white'><?php echo $sess_username; ?> <i class="mdi mdi-chevron-down"></i></font>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="<?php echo $config['web']['url']; ?>user/setting" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-card-details"></i>
                                <span>Profil Saya</span>
                            </a>

                            <!-- item-->
                            <a href="<?php echo $config['web']['url']; ?>user/pemakaian-saldo" class="dropdown-item notify-item">
                                <i class="ti ti-wallet"></i>
                                <span>Mutasi Saldo</span>
                            </a> 
                                                       
                            <!-- item-->
                            <a href="<?php echo $config['web']['url']; ?>user/log" class="dropdown-item notify-item">
                                <i class="mdi mdi-tumblr-reblog"></i>
                                <span>Catatan Aktifitas</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="<?php echo $config['web']['url'] ?>logout" class="dropdown-item notify-item">
                                <i class="ri-logout-box-line"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>
<?php } ?>
                        <div class="logo-box">
                    <a href="<?php echo $config['web']['url'] ?>" class="logo text-center">
                        <span class="logo-lg">
                            <img src="../assets/images/junadi.png" alt="" height="45">
                        </span>
                        <span class="logo-sm">
                            <img src="../assets/images/logo.png" alt="" height="40">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="ti ti-menu"></i>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
<?php
if (isset($_SESSION['user'])) {
?>    
<?php
if ($data_user['level'] == "Developers") {
?>            
                            <li class="menu-title">Menu Developer</li>
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>admin-dashboard">
                                        <i class="ri-database-line"></i>
                                        <span> Menu Developer </span>
                                    </a>
                                </li>
<?php } ?>
<?php
if ($data_user['level'] != "Member") {
?> 
                            <li class="menu-title">Menu Staff</li>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="ri-menu-2-line"></i>
                                        <span> Menu </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>staff/tambah-pengguna">Tambah Pengguna</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>staff/transfer-saldo">Transfer Saldo</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>riwayat/transfer-saldo">Riwayat Transfer Saldo</a>
                                        </li>
                                    </ul>
                                </li>
<?php } ?>                            
                            <li class="menu-title">Menu Utama</li>
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>">
                                        <i class="ri-dashboard-fill"></i>
                                        <span> Dashboards </span>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="ri-shopping-cart-line"></i>
                                        <span> Riwayat Order </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        </li>                                        
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>riwayat/pemesanan-sosmed">Sosial Media</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>riwayat/pemesanan-pulsa">Pulsa & Lainya</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>riwayat/deposit-saldo">
                                        <i class="ti ti-wallet"></i>
                                        <span> Riwayat Deposit </span>                                       
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>halaman/daftar-harga">
                                        <i class="ri-list-unordered"></i>
                                        <span> Daftar Harga </span>                                       
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>tiket">                      
                                        <i class="ri-mail-send-line"></i>
                                        <span> Tiket Bantuan </span>
                                        <?php if (mysqli_num_rows($CallDBTiket) !== 0) { ?><span class="badge badge-warning badge-pill notif-tiket"><?php echo mysqli_num_rows($CallDBTiket); ?></span><?php } ?>
                                    </a>
                                </li>                                                                             
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>hof">
                                        <i class="ti ti-medall"></i>
                                        <span> Top 5 Pengguna </span>
                                    </a>
                                </li>
    
                                <li class="menu-title mt-2">Halaman & Bantuan</li>
                                                                                                
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>halaman/kontak-kami">
                                        <i class="ri-customer-service-2-line"></i>
                                        <span> Kontak Admin </span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="ri-shuffle-line"></i>
                                        <span> Dokumentasi Api </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        </li>                                        
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/api-dokumentasi-sosmed">Sosial Media</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/api-dokumentasi-pulsa">Pulsa & Lainnya</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/api-dokumentasi-deposit">Deposit Otomatis</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>user/setting">Informasi akun</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="ri-file-mark-line"></i>
                                        <span> Halaman Lainnya </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/cara-deposit">Cara Deposit</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/cara-transaksi">Cara Transaksi</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/info">Penjelasan Status</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/FAQ&TOS">FAQs & TOS</a>
                                        </li>                                        
                                    </ul>
                                </li>                                                         
<?php
} else {
?>
                            <li class="menu-title">Menu Utama</li>
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>">
                                        <i class="ri-home-2-line"></i>
                                        <span> Halaman Utama </span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>auth/login">
                                        <i class="ri-login-box-line "></i>
                                        <span> Masuk </span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>auth/register">
                                        <i class="ri-user-add-line "></i>
                                        <span> Daftar </span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>auth/lupa-password">
                                        <i class="ri-lock-unlock-line "></i>
                                        <span> Lupa Password </span>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="<?php echo $config['web']['url'] ?>halaman/daftar-harga">
                                        <i class="ri-list-unordered"></i>
                                        <span> Daftar Harga </span>                                       
                                    </a>
                                </li>                                                                
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="ri-file-mark-line"></i>
                                        <span> Halaman Lainnya </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/kontak-kami">Kontak Admin</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $config['web']['url'] ?>halaman/FAQ&TOS">FAQs & TOS</a>
                                        </li>
                                    </ul>
                                </li>                  
<?php } ?>

                        </ul>

                    </div>

                   <div class="clearfix"></div>

                </div>

              </div>

            <div class="content-page">
          <div class="content">
        <div class="container-fluid">
                    <br />
        
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
                           


