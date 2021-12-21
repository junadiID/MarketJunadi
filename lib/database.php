<?php
// ===== Halaman Admin ===== //
//Count Users
$total_pengguna = mysqli_num_rows($conn->query("SELECT * FROM users"));
//Count Pesanan
$count_pesanan_pulsa = mysqli_num_rows($conn->query("SELECT * FROM pembelian_pulsa"));
$count_pesanan_sosmed = mysqli_num_rows($conn->query("SELECT * FROM pembelian_sosmed"));
//Total Pemesanan
$total_pemesanan_pulsa = $conn->query("SELECT SUM(harga) AS total FROM pembelian_pulsa");
$data_pesanan_pulsa = $total_pemesanan_pulsa->fetch_assoc();
$total_pemesanan_sosmed = $conn->query("SELECT SUM(harga) AS total FROM pembelian_sosmed");
$data_pesanan_sosmed = $total_pemesanan_sosmed->fetch_assoc();
//Count Deposit
$count_deposit = mysqli_num_rows($conn->query("SELECT * FROM deposit"));
//Total Deposit
$total_deposit = $conn->query("SELECT SUM(jumlah_transfer) AS total FROM deposit");
$data_deposit = $total_deposit->fetch_assoc();

// Total Profit Pemebelian Pulsa Perbulan
$ThisProfitPulsa = $conn->query("SELECT SUM(profit) AS total FROM pembelian_pulsa WHERE MONTH(pembelian_pulsa.date) = '".date('m')."' AND YEAR(pembelian_pulsa.date) = '".date('Y')."'");
$ProfitPulsa = $ThisProfitPulsa->fetch_assoc();

$ThisTotalPulsa = $conn->query("SELECT SUM(harga) AS total FROM pembelian_pulsa WHERE MONTH(pembelian_pulsa.date) = '".date('m')."' AND YEAR(pembelian_pulsa.date) = '".date('Y')."'");
$AllPulsa = $ThisTotalPulsa->fetch_assoc();

$CountProfitPulsa = mysqli_num_rows($conn->query("SELECT * FROM pembelian_pulsa WHERE MONTH(pembelian_pulsa.date) = '".date('m')."' AND YEAR(pembelian_pulsa.date) = '".date('Y')."'"));

// Total Profit Pembelian Sosmed Perbulan
$ThisProfitSosmed = $conn->query("SELECT SUM(profit) AS total FROM pembelian_sosmed WHERE MONTH(pembelian_sosmed.date) = '".date('m')."' AND YEAR(pembelian_sosmed.date) = '".date('Y')."'");
$ProfitSosmed = $ThisProfitSosmed->fetch_assoc();

$ThisTotalSosmed = $conn->query("SELECT SUM(harga) AS total FROM pembelian_sosmed WHERE MONTH(pembelian_sosmed.date) = '".date('m')."' AND YEAR(pembelian_sosmed.date) = '".date('Y')."'");
$AllSosmed = $ThisTotalSosmed->fetch_assoc();

$CountProfitSosmed = mysqli_num_rows($conn->query("SELECT * FROM pembelian_sosmed WHERE MONTH(pembelian_sosmed.date) = '".date('m')."' AND YEAR(pembelian_sosmed.date) = '".date('Y')."'"));

// ===== Data Tiket ===== //
$AllTiketUsers = $conn->query("SELECT * FROM tiket WHERE status = 'Pending'");
// ======================== //

// ===== ============ ===== //

// ===== Halaman Pengguna ===== //
// Data User
    $jumlah_order_sosmed = mysqli_num_rows($conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username'"));
    $jumlah_order_pulsa = mysqli_num_rows($conn->query("SELECT * FROM pembelian_pulsa WHERE user = '$sess_username'"));
    $jumlah_deposit_user = mysqli_num_rows($conn->query("SELECT * FROM deposit WHERE username = '$sess_username' AND status = 'Success'"));
    

    $cek_order_sosmed = $conn->query("SELECT SUM(harga) AS total FROM pembelian_sosmed WHERE user = '$sess_username'");
    $data_order_sosmed = $cek_order_sosmed->fetch_assoc();
    $cek_order_pulsa = $conn->query("SELECT SUM(harga) AS total FROM pembelian_pulsa WHERE user = '$sess_username'");
    $data_order_pulsa = $cek_order_pulsa->fetch_assoc();
// ===== ============== ===== //

// ===== Data Halaman Kontak ===== //
    $CallDbHalaman = $conn->query("SELECT * FROM halaman WHERE id = '1'");
    $PageContact = $CallDbHalaman->fetch_assoc();
// ======================== //

// ===== Data Tiket ===== //
    $CallDBTiket = $conn->query("SELECT * FROM tiket WHERE status = 'Responded' AND user = '$sess_username'");
// ======================== //

// ===== Data Website ===== //
    $panggil = $conn->query("SELECT * FROM setting_web WHERE id = '1'");
    $data = $panggil->fetch_assoc();
// ======================== //
?>