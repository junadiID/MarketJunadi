-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2021 pada 11.35
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `junjun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `tipe` enum('INFORMASI','PERINGATAN','PENTING','NEW Layanan','OFF Layanan') COLLATE utf8_swedish_ci NOT NULL,
  `subjek` text COLLATE utf8_swedish_ci NOT NULL,
  `konten` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `date`, `time`, `tipe`, `subjek`, `konten`) VALUES
(8, '2021-12-21', '17:34:40', 'INFORMASI', 'Pembaharuan Fitur', 'Halo semuanya member Market Junadi\r\n\r\nKami baru saja memperbaiki beberapa Kategori dan layanan di Panel.\r\nAnda dapat melihat di fitur pemesanan dan daftar harga, kami telah menambahkan detail keterangan untuk setiap produk yang tersedia agar mempermudah saat pemesanan.\r\nDan juga menambahkan keterangan disetiap form pemesanan.\r\n\r\nYuk langsung saja check it out!!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposit`
--

CREATE TABLE `deposit` (
  `id` int(10) NOT NULL,
  `kode_deposit` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `payment` varchar(250) NOT NULL,
  `nomor_pengirim` varchar(250) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `jumlah_transfer` int(255) NOT NULL,
  `get_saldo` varchar(250) NOT NULL,
  `status` enum('Success','Pending','Error','') NOT NULL,
  `place_from` varchar(50) NOT NULL DEFAULT 'WEB',
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `deposit`
--

INSERT INTO `deposit` (`id`, `kode_deposit`, `username`, `tipe`, `provider`, `payment`, `nomor_pengirim`, `tujuan`, `jumlah_transfer`, `get_saldo`, `status`, `place_from`, `date`, `time`) VALUES
(1, '3306932911', 'cobaya', 'BANK2', 'OVO', 'Transfer OVO', 'aam', 'OVO : 089664331497 a/n AAM FAHRUR R', 10046, '10046', 'Error', 'Website', '2020-12-09', '05:26:59'),
(2, '', 'cobaya', 'BANK', 'DANA', 'Transfer DANA', '-', '', 0, '', 'Error', 'Website', '2020-12-09', '08:50:03'),
(3, '89901823', 'cobaya', 'BANK', 'DANA', 'Transfer DANA', '-', '082288808400 a.n BAGUS ADETYO N', 10943, '10943', 'Error', 'Website', '2020-12-09', '08:54:24'),
(4, '39318412', 'cobaya', 'BANK', 'DANA', 'Transfer DANA', 'Ryan', '082288808400 a.n BAGUS ADETYO N', 10138, '10138', 'Pending', 'Website', '2020-12-10', '17:00:00'),
(5, '56374377', 'cobaya', 'Pulsa Transfer', 'TSEL', 'Transfer Telkomsel', '082272726273', 'TELKOMSEL : 082283555508', 10000, '6700', 'Error', 'Website', '2020-12-09', '18:10:29'),
(6, '63000619', 'cobaya', 'Pulsa Transfer', 'TSEL', 'Transfer Telkomsel', '082136433702', 'TELKOMSEL : 082283555508', 18000, '12060', 'Success', 'Website', '2020-12-09', '19:38:26'),
(7, '95734774', 'cobaya', 'BANK', 'OVO', 'Transfer OVO', 'Coba', '082288808400 a.n BAGUS ADETYO N', 100428, '100428', 'Error', 'Website', '2020-12-09', '22:55:20'),
(8, '78758940', 'Santuy', 'BANK', 'OVO', 'Transfer OVO', 'Santuy', '082288808400 a.n BAGUS ADETYO N', 20634, '20634', 'Error', 'Website', '2020-12-09', '23:59:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(2) NOT NULL,
  `konten` text NOT NULL,
  `update_terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `konten`, `update_terakhir`) VALUES
(1, '                                <table class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">\r\n                                    <tbody>\r\n\r\n                                    <tr>\r\n                                        <td align=\"center\">\r\n                                            <a href=\"https://www.facebook.com/bacod.me\" class=\"btn btn-primary btn-bordred btn-rounded waves-effect waves-light\" target=\"BLANK\"><i class=\"mdi mdi-facebook\"></i> Facebook</a>\r\n                                        </td>\r\n                                        <td align=\"center\">\r\n                                            <a href=\"https://api.whatsapp.com/send?phone=6282232894326&text=Hallo%20Admin\" class=\"btn btn-primary btn-bordred btn-rounded waves-effect waves-light\" target=\"BLANK\"><i class=\"mdi mdi-whatsapp\"></i> Whatsapp</a>\r\n                                        </td>\r\n<table class=\"table table-bordered dt-responsive nowrap\" style=\"border-collapse: collapse; border-spacing: 0; width: 100%;\">\r\n                                    <tbody>\r\n<td align=\"center\">\r\n                                            <a href=\"https://Instagram.com/davva.wa\" class=\"btn btn-primary btn-bordred btn-rounded waves-effect waves-light\" target=\"BLANK\"><i class=\"mdi mdi-instagram\"></i> Instagram</a>\r\n</td>\r\n                                    </tr>   \r\n                                    </tbody>\r\n                                </table>\r\n                                \r\n', '2019-01-21 00:00:00'),
(2, '<p>Layanan yang disediakan oleh GRACE PANEL telah ditetapkan kesepakatan-kesepakatan berikut.</p><br />\r\n										<p><b>1. Umum</b><br />\r\n										<br />Dengan mendaftar dan menggunakan layanan GRACE PANEL, Anda secara otomatis menyetujui semua ketentuan layanan kami. Kami berhak mengubah ketentuan layanan ini tanpa pemberitahuan terlebih dahulu. Anda diharapkan membaca semua ketentuan layanan kami sebelum membuat pesanan.<br />\r\n										<br />Penolakan: GRACE PANEL tidak akan bertanggung jawab jika Anda mengalami kerugian dalam bisnis Anda.<br />\r\n										<br />Kewajiban: GRACE PANEL tidak bertanggung jawab jika Anda mengalami suspensi akun atau penghapusan kiriman yang dilakukan oleh Instagram, Twitter, Facebook, Youtube, dan lain-lain.<br />\r\n										<br /><b>2. Layanan</b><br />\r\n										<br />Kewajiban: GRACE PANEL hanya digunakan untuk media promosi sosial media dan membantu meningkatkan penampilan akun Anda saja.<br />\r\n										<br />Kewajiban: GRACE PANEL tidak menjamin pengikut baru Anda berinteraksi dengan Anda, kami hanya menjamin bahwa Anda mendapat pengikut yang Anda beli.<br />\r\n										<br />Kewajiban: GRACE PANEL tidak menerima permintaan pembatalan/pengembalian dana setelah pesanan masuk ke sistem kami. Kami memberikan pengembalian dana yang sesuai jika pesanan tida dapat diselesaikan.</p>', '2019-01-21 00:00:00'),
(3, '<h4>Apa Itu GRACE PANEL ?</h4>GRACE PANEL adalah sebuah platform bisnis yang menyediakan berbagai layanan social media marketing yang bergerak terutama di Indonesia.<br />\r\nDengan bergabung bersama kami, Anda dapat menjadi penyedia jasa social media atau reseller social media seperti jasa penambah Followers, Likes, dll.<br />\r\nSaat ini tersedia berbagai layanan untuk social media terpopuler seperti Instagram, Facebook, Twitter, Youtube, dll.<br />\r\n<br />\r\n<h4>Bagaimana cara mendaftar di GRACE PANEL?</h4> Anda dapat menghubungi Admin <a href=\"/halaman/kontak-kami\">Kontak</a><br />\r\n<br />\r\n<h4>Bagaimana cara membuat Pesanan ?</h4>Untuk membuat pesanan sangatlah mudah, Anda hanya perlu masuk terlebih dahulu ke akun Anda dan menuju halaman <b>Pemesanan</b> dengan mengklik menu yang sudah tersedia. Selain itu Anda juga dapat melakukan pemesanan melalui request API.<br />\r\n<br />\r\n<h4>Bagaimana cara melakukan Pengisian Saldo ?</h4>Untuk melakukan pengisian saldo, Anda hanya perlu masuk terlebih dahulu ke akun Anda dan menuju halaman deposit dengan mengklik menu yang sudah tersedia. Kami menyediakan deposit melalui bank dan pulsa.									', '2019-01-21 00:00:00'),
(4, '<center><h4><b> PENJELASAN STATUS DI<br>GRACE PANEL </b></h4>\r\n										<p>\r\n<br>										<br>\r\n<span class=\"badge badge-warning\">PENDING</span> :<br> Pesanan/deposit sedang dalam antian di server										\r\n<br>\r\n</br>\r\n<span class=\"badge badge-info\">PROCESSING</span> :<br> Pesanan sedang dalam proses										\r\n<br>\r\n</br>\r\n<span class=\"badge badge-success\">SUCCESS</span> :<br> Pesanan telah berhasil										\r\n<br>\r\n</br>\r\n<span class=\"badge badge-danger\">PARTIAL</span> :<br> Pesanan hanya masuk sebagian. Dan anda hanya akan membayar layanan yang masuk saja										\r\n<br>\r\n</br>\r\n<span class=\"badge badge-danger\">ERROR</span> :<br> Pesanan di batalkan/Terjadi Kesalahan Sistem, dan saldo akan otomatis kembali ke akun.										<br>										<br>\r\n</br>\r\n</center>\r\n<span class=\"badge badge-kece\">Refill/Guaranteed</span> : Refill adalah isi ulang. Jika anda membeli layanan refill dan ternyata dalam beberapa hari followers berkurang, maka akan otomatis di refill/di isi ulang. <b>Tapi harap di ketahui, Server hanya akan mengisi ulang jika followers yang berkurang adalah followers yang di beli dengan layanan refill.</b></p>                                ', '2019-01-21 00:00:00'),
(5, '<b>Ingin memiliki website seperti Grace-Panel.com?</b>\r\n<br><br>\r\n<b>Penjelasan</b><br>\r\nGrace-Panel.com adalah portal di mana member dapat melakukan pembelian layanan.\r\nDengan memiliki website seperti Grace-Panel.com, bukan berarti anda bisa melakukan pemesanan semau anda dan sepuasnya.<br>\r\nKarena setiap pemesanan yang di lakukan oleh anda atau member anda, akan memotong saldo pusat di Grace-Panel.com\r\n<br><br>\r\n<b>Pertanyaan</b><br>\r\nA. Apakah saya bisa memiliki website smm? Sedangkan saya tidak bisa coding.<br>\r\nB. Sangat bisa, semua Urusan coding dan eror di website kami yang mengurus.\r\n<br><br>\r\nA. Berapa harga pembuatan website smm?<br>\r\nB. Harga akan kami cantumkan di bagian terahir halaman ini.\r\n<br><br>\r\nA. Apakah penghasilan akan langsung masuk ke rekening saya?<br>\r\nB. tentu saja, Semua deposit akan langsung masuk ke rekening anda.\r\n<br><br>\r\nA. Berapa lama proses pembuatan website yang saya pesan?<br>\r\nB. Untuk pemrosesan layanan web SMM kami membutuhkan waktu 1-4 Hari, setelah pembayaran terkonfirmasi.\r\n<br><br>\r\nA. Apa bisa nanti nama website dan domain saya yang menentukan?<br>\r\nB. Tentu saja, Nama website dan domain anda yang menentukan sendiri\r\n<br><br>\r\nA. Apakah saya bisa mengatur harga layanan sesuai keinginan saya?<br>\r\nB. Bisa, anda bisa mengatur semua harga layanan di website anda untuk menyesuaikan keuntungan\r\n<br><br>\r\nA. Apakah saya bisa mendapatkan akses cpanel?<br>\r\nB. Tentu Bisa, dan anda juga bisa akses penuh admin panel\r\n<br><br>\r\n<b>Harga</b>\r\n<br><br>\r\n<b>12 bulan</b>\r\n<br>\r\n<b>Rp.320.000</b>\r\n<br><br>\r\n<b>6 bulan</b>\r\n<br>\r\n<b>Rp.250.000</b>\r\n<br><br>\r\n<b>Jika Anda ingin Mengakses Cpanel<b>\r\n<b>Harga+Rp.90.000<b>\r\n\r\n<br><br><br>\r\nAda pertanyaan lain? Atau Anda Butuh Jasa Oper Panel / UP Fitur Silahkan hubungi admin di  <a href=\"https://api.whatsapp.com/send?phone=6282232894326\">WHATSAPP</a></p>\r\n		</div>\r\n	</div>\r\n</div>			</div>', '2019-01-21 00:45:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_pendaftaran`
--

CREATE TABLE `harga_pendaftaran` (
  `id` int(2) NOT NULL,
  `level` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `bonus` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_saldo`
--

CREATE TABLE `history_saldo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `aksi` enum('Penambahan Saldo','Pengurangan Saldo') NOT NULL,
  `nominal` double NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history_saldo`
--

INSERT INTO `history_saldo` (`id`, `username`, `aksi`, `nominal`, `pesan`, `date`, `time`) VALUES
(1, 'cobaya', 'Pengurangan Saldo', -99999999499, 'Pemesanan Custom Saldo GOPAY -99999999999 Dengan Order ID 1800944', '2020-12-09', '01:28:06'),
(2, 'cobaya', 'Penambahan Saldo', 12060, 'Penambahan Saldo Dengan Deposit ID 63000619', '2020-12-09', '19:40:24'),
(3, 'cobaya', 'Pengurangan Saldo', 5730, 'Pemesanan Pulsa Dengan Order ID 1137223', '2020-12-09', '19:47:10'),
(4, 'cobaya', 'Pengurangan Saldo', 74, 'Pemesanan Sosial Media Dengan Order ID 7336174', '2020-12-09', '20:23:17'),
(5, 'cobaya', 'Pengurangan Saldo', 0, 'Penambahan Pengguna Dengan Username Santuy Dengan level Member ', '2020-12-09', '23:56:16'),
(6, 'cobaya', 'Pengurangan Saldo', 0, 'Penambahan Pengguna Dengan Username Santay Dengan level Agen ', '2020-12-10', '13:27:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_layanan`
--

CREATE TABLE `kategori_layanan` (
  `id` int(30) NOT NULL,
  `nama` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `kode` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `tipe` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id`, `nama`, `kode`, `tipe`) VALUES
(1, '', '', ''),
(2, ' âœ¨', ' âœ¨', 'SOSMED');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_kami`
--

CREATE TABLE `kontak_kami` (
  `id` int(1) NOT NULL,
  `facebook` text NOT NULL,
  `wa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_pulsa`
--

CREATE TABLE `layanan_pulsa` (
  `id` int(11) NOT NULL,
  `service_id` int(255) NOT NULL,
  `provider_id` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `operator` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `layanan` text COLLATE utf8_swedish_ci NOT NULL,
  `harga` double NOT NULL,
  `harga_api` double NOT NULL,
  `keterangan` text COLLATE utf8_swedish_ci NOT NULL,
  `profit` double NOT NULL,
  `status` enum('Normal','Gangguan') COLLATE utf8_swedish_ci NOT NULL,
  `provider` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `tipe` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `layanan_pulsa`
--

INSERT INTO `layanan_pulsa` (`id`, `service_id`, `provider_id`, `operator`, `layanan`, `harga`, `harga_api`, `keterangan`, `profit`, `status`, `provider`, `tipe`) VALUES
(8903, 1, '', '', '', 200, 100, '', 200, '', 'MAUPEDIA', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_sosmed`
--

CREATE TABLE `layanan_sosmed` (
  `id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `kategori` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `layanan` text COLLATE utf8_swedish_ci NOT NULL,
  `catatan` text COLLATE utf8_swedish_ci NOT NULL,
  `min` int(10) NOT NULL,
  `max` int(10) NOT NULL,
  `harga` double NOT NULL,
  `harga_api` double NOT NULL,
  `profit` double NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8_swedish_ci NOT NULL,
  `provider_id` int(10) NOT NULL,
  `provider` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `tipe` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `layanan_sosmed`
--

INSERT INTO `layanan_sosmed` (`id`, `service_id`, `kategori`, `layanan`, `catatan`, `min`, `max`, `harga`, `harga_api`, `profit`, `status`, `provider_id`, `provider`, `tipe`) VALUES
(3144, 91, '', '', '', 0, 0, 2000, 1000, 2000, 'Aktif', 0, 'MAUPEDIA', 'Sosial Media');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(4) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `aksi` enum('Login','Logout') NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `username`, `aksi`, `ip`, `date`, `time`) VALUES
(1, 'arpantex', 'Login', '66.175.210.42', '2020-03-31', '23:06:54'),
(2, 'arpantex', 'Login', '140.213.56.49', '2020-04-01', '00:54:35'),
(3, 'cobaya', 'Login', '103.105.35.124', '2020-12-09', '00:05:26'),
(4, 'cobaya', 'Login', '103.105.35.101', '2020-12-09', '00:27:55'),
(5, 'cobaya', 'Login', '103.105.35.105', '2020-12-09', '04:51:30'),
(6, 'cobaya', '', '103.105.35.105 || ', '2020-12-09', '05:26:59'),
(7, 'cobaya', 'Login', '103.105.28.165', '2020-12-09', '07:04:33'),
(8, 'cobaya', 'Login', '103.105.28.165', '2020-12-09', '07:06:02'),
(9, 'cobaya', 'Login', '103.105.35.73', '2020-12-09', '10:16:23'),
(10, 'cobaya', 'Login', '103.105.35.98', '2020-12-09', '17:41:06'),
(11, 'cobaya', 'Login', '103.105.35.105', '2020-12-09', '19:46:50'),
(12, 'cobaya', 'Logout', '103.105.35.73', '2020-12-09', '20:26:50'),
(13, 'cobaya', 'Login', '103.105.35.73', '2020-12-09', '20:28:16'),
(14, 'Cobaya', 'Login', '112.215.208.239', '2020-12-09', '20:37:23'),
(15, 'cobaya', 'Login', '103.105.35.73', '2020-12-09', '20:40:12'),
(16, 'cobaya', 'Logout', '103.105.35.73', '2020-12-09', '20:52:59'),
(17, 'cobaya', 'Logout', '103.105.35.73', '2020-12-09', '21:13:47'),
(18, 'cobaya', 'Login', '103.105.35.73', '2020-12-09', '21:19:17'),
(19, 'Cobaya', 'Login', '112.215.210.54', '2020-12-09', '22:49:32'),
(20, 'Cobaya', 'Login', '112.215.210.23', '2020-12-09', '23:54:41'),
(21, 'Santuy', 'Login', '112.215.210.23', '2020-12-09', '23:58:01'),
(22, 'cobaya', 'Login', '103.105.35.89', '2020-12-10', '00:31:42'),
(23, 'Cobaya', 'Login', '140.213.22.103', '2020-12-10', '04:28:33'),
(24, 'Cobaya', 'Login', '140.213.22.113', '2020-12-10', '06:02:53'),
(25, 'cobaya', 'Login', '115.178.194.41', '2020-12-10', '06:16:55'),
(26, 'cobaya', 'Login', '115.178.194.41', '2020-12-10', '06:18:02'),
(27, 'Cobaya', 'Login', '140.213.22.113', '2020-12-10', '06:36:51'),
(28, 'Cobaya', 'Login', '140.213.22.73', '2020-12-10', '08:05:07'),
(29, 'Cobaya', 'Login', '140.213.22.90', '2020-12-10', '09:25:04'),
(30, 'Cobaya', 'Login', '140.213.22.65', '2020-12-10', '11:26:50'),
(31, 'Santuy', 'Login', '140.213.22.65', '2020-12-10', '11:37:38'),
(32, 'Cobaya', 'Login', '140.213.22.67', '2020-12-10', '13:24:12'),
(33, 'Santay', 'Login', '140.213.22.67', '2020-12-10', '13:29:40'),
(34, 'Cobaya', 'Login', '140.213.22.111', '2020-12-10', '15:26:47'),
(35, 'Cobaya', 'Login', '140.213.22.111', '2020-12-10', '15:50:35'),
(36, 'Cobaya', 'Login', '114.122.103.107', '2020-12-10', '16:23:50'),
(37, 'Cobaya', 'Login', '140.213.24.201', '2020-12-10', '17:45:45'),
(38, 'Cobaya', 'Login', '140.213.24.201', '2020-12-10', '18:59:29'),
(39, 'cobaya', 'Login', '103.105.27.68', '2020-12-10', '22:16:25'),
(40, 'Cobaya', 'Login', '112.215.170.134', '2020-12-11', '00:57:20'),
(41, 'Cobaya', 'Login', '112.215.170.112', '2020-12-11', '04:25:27'),
(42, 'Cobaya', 'Login', '112.215.170.114', '2020-12-11', '05:33:16'),
(43, 'Cobaya', 'Login', '112.215.170.130', '2020-12-11', '08:44:23'),
(44, 'demo', 'Login', '182.0.202.209', '2021-09-05', '13:08:22'),
(45, 'demo', 'Logout', '182.0.202.209', '2021-09-05', '13:11:41'),
(46, 'demo', 'Login', '182.0.202.209', '2021-09-05', '13:12:36'),
(47, 'demo', 'Logout', '182.0.202.209', '2021-09-05', '13:12:44'),
(48, 'demo', 'Login', '182.0.202.209', '2021-09-05', '13:12:51'),
(49, 'demo', 'Logout', '182.0.202.209', '2021-09-05', '13:13:00'),
(50, 'demo', 'Login', '182.0.202.209', '2021-09-05', '13:15:05'),
(51, 'demo', 'Logout', '182.0.202.209', '2021-09-05', '13:16:06'),
(52, 'demo', 'Login', '103.126.86.48', '2021-09-05', '13:20:49'),
(53, 'demo', 'Login', '223.255.230.4', '2021-09-10', '00:22:44'),
(54, 'demo', 'Logout', '223.255.230.4', '2021-09-10', '00:22:54'),
(55, 'demo', 'Login', '182.3.103.118', '2021-09-10', '08:40:59'),
(56, 'demo', 'Login', '182.3.102.152', '2021-09-15', '21:06:09'),
(57, 'demo', 'Login', '116.206.29.9', '2021-09-25', '09:32:05'),
(58, 'demo', 'Logout', '116.206.29.9', '2021-09-25', '09:32:08'),
(59, 'akundemo', 'Login', '120.188.36.48', '2021-09-25', '09:34:11'),
(60, 'akundemo', 'Logout', '120.188.36.48', '2021-09-25', '09:37:49'),
(61, 'demo', 'Login', '120.188.36.48', '2021-09-25', '09:37:57'),
(62, 'demo', 'Login', '103.253.24.216', '2021-09-30', '23:43:38'),
(63, 'demo', 'Login', '36.81.12.215', '2021-10-27', '18:26:36'),
(64, 'demo', 'Logout', '36.81.12.215', '2021-10-27', '18:27:16'),
(65, 'demo', 'Login', '182.1.123.149', '2021-10-27', '18:28:57'),
(66, 'demo', 'Login', '120.188.95.255', '2021-10-28', '08:07:54'),
(67, 'demo', 'Login', '36.81.15.23', '2021-11-05', '16:23:04'),
(68, 'demo', 'Login', '125.160.137.2', '2021-11-05', '16:23:57'),
(69, 'demo', 'Login', '203.166.207.22', '2021-11-29', '17:21:59'),
(70, 'demo', 'Login', '36.81.10.129', '2021-11-29', '17:22:04'),
(71, 'demo', 'Logout', '203.166.207.22', '2021-11-29', '17:26:49'),
(72, 'demo', 'Login', '203.166.207.22', '2021-11-29', '17:33:40'),
(73, 'demo', 'Login', '114.5.254.29', '2021-11-29', '21:35:04'),
(74, 'demo', 'Login', '114.5.254.29', '2021-12-02', '19:44:37'),
(75, 'demo', 'Login', '114.5.252.154', '2021-12-03', '20:16:14'),
(76, 'demo', 'Login', '114.5.249.182', '2021-12-04', '11:53:29'),
(77, 'demo', 'Logout', '::1', '2021-12-18', '19:15:03'),
(78, 'member', 'Login', '::1', '2021-12-18', '19:16:18'),
(79, 'junjun', 'Login', '::1', '2021-12-19', '20:18:34'),
(80, 'demo', 'Login', '::1', '2021-12-21', '16:41:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_depo`
--

CREATE TABLE `metode_depo` (
  `id` int(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `tipe` enum('Bank','Pulsa Transfer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `metode_depo`
--

INSERT INTO `metode_depo` (`id`, `provider`, `nama`, `rate`, `tujuan`, `tipe`) VALUES
(1, 'OVO', 'Transfer OVO', '1', '089664331497', 'Bank'),
(2, 'DANA', 'Transfer DANA', '1', '082136433702', 'Bank'),
(3, 'TSEL', 'Transfer Telkomsel', '0.67', '082136433702', 'Pulsa Transfer'),
(4, 'BCA', 'Transfer BCA', '1', '00000000', 'Bank');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_pulsa`
--

CREATE TABLE `orders_pulsa` (
  `id` int(10) NOT NULL,
  `oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `provider_oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `service` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `price` double NOT NULL,
  `profit` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `target` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `no_meter` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `catatan` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Pending','Processing','Error','Partial','Success') COLLATE utf8_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place_from` varchar(50) COLLATE utf8_swedish_ci NOT NULL DEFAULT 'WEB',
  `provider` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `refund` enum('0','1') COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_game`
--

CREATE TABLE `pembelian_game` (
  `id` int(10) NOT NULL,
  `oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `poid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `service` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `price` double NOT NULL,
  `data` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `zoneid` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Pending','Processing','Error','Success') COLLATE utf8_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place_from` varchar(50) COLLATE utf8_swedish_ci NOT NULL DEFAULT 'WEB',
  `provider` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `refund` enum('0','1') COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_pulsa`
--

CREATE TABLE `pembelian_pulsa` (
  `id` int(10) NOT NULL,
  `oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `provider_oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `layanan` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `harga` double NOT NULL,
  `profit` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `target` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `no_meter` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Pending','Processing','Error','Partial','Success') COLLATE utf8_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place_from` varchar(50) COLLATE utf8_swedish_ci NOT NULL DEFAULT 'WEB',
  `provider` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `refund` enum('0','1') COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `pembelian_pulsa`
--

INSERT INTO `pembelian_pulsa` (`id`, `oid`, `provider_oid`, `user`, `layanan`, `harga`, `profit`, `target`, `no_meter`, `keterangan`, `status`, `date`, `time`, `place_from`, `provider`, `refund`) VALUES
(2, '1137223', '674581508107', 'cobaya', 'Telkomsel 5.000', 5730, '200', '082136433702', '', '02169800001604825488', 'Success', '2020-12-09', '19:47:10', 'Website', 'MAUPEDIA', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_sosmed`
--

CREATE TABLE `pembelian_sosmed` (
  `id` int(10) NOT NULL,
  `oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `provider_oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `layanan` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `target` text COLLATE utf8_swedish_ci NOT NULL,
  `jumlah` int(10) NOT NULL,
  `remains` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `start_count` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `harga` double NOT NULL,
  `profit` double NOT NULL,
  `status` enum('Pending','Processing','Error','Partial','Success') COLLATE utf8_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `provider` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `place_from` enum('Website','API') COLLATE utf8_swedish_ci NOT NULL,
  `refund` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `pembelian_sosmed`
--

INSERT INTO `pembelian_sosmed` (`id`, `oid`, `provider_oid`, `user`, `layanan`, `target`, `jumlah`, `remains`, `start_count`, `harga`, `profit`, `status`, `date`, `time`, `provider`, `place_from`, `refund`) VALUES
(1, '7336174', '9315010251', 'cobaya', 'Instagram Likes [MAX 5K] [1K PER HOURS] [BOT] CHEAPEST', 'https://www.instagram.com/p/CIZnZPTFUid/', 10, '0', '0', 74, 10, 'Success', '2020-12-09', '20:23:17', 'MAUPEDIA', 'Website', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_tiket`
--

CREATE TABLE `pesan_tiket` (
  `id` int(10) NOT NULL,
  `id_tiket` int(10) NOT NULL,
  `pengirim` enum('Member','Admin') COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `pesan` text COLLATE utf8_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `update_terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_tsel`
--

CREATE TABLE `pesan_tsel` (
  `id` int(11) NOT NULL,
  `isi` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('UNREAD','READ') NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provider`
--

CREATE TABLE `provider` (
  `id` int(10) NOT NULL,
  `code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `api_key` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `api_id` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `provider`
--

INSERT INTO `provider` (`id`, `code`, `link`, `api_key`, `api_id`) VALUES
(1, 'MAUPEDIA', 'https://maupedia.com/api/pulsa', 'Q69Dw6qMhPbvbL6dbZkq7gGQlPB0TVrFnJ8ixOtl', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provider_pulsa`
--

CREATE TABLE `provider_pulsa` (
  `id` int(10) NOT NULL,
  `code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `key` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `userid` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_transfer`
--

CREATE TABLE `riwayat_transfer` (
  `id` int(10) NOT NULL,
  `pengirim` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `penerima` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `jumlah` double NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_web`
--

CREATE TABLE `setting_web` (
  `id` int(11) NOT NULL,
  `short_title` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `deskripsi_web` text NOT NULL,
  `kontak_utama` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting_web`
--

INSERT INTO `setting_web` (`id`, `short_title`, `title`, `deskripsi_web`, `kontak_utama`, `date`, `time`) VALUES
(1, 'Market Junadi', 'Market Junadi | SMM & Agen Pulsa', 'Market Junadi | SMM & Agen Pulsa\nSebuah platform bisnis yang menyediakan berbagai layanan multy media marketing yang bergerak terutama di Indonesia.\nDengan bergabung bersama kami, Anda dapat menjadi penyedia jasa social media atau reseller social media seperti jasa penambah Followers, Likes, dll.\nSaat ini tersedia berbagai layanan untuk social media terpopuler seperti Instagram, Facebook, Twitter, Youtube, dll. Dan kamipun juga menyediakan Panel Pulsa & PPOB seperti Pulsa All Operator, Paket Data, Saldo Gojek/Grab, All Voucher Game Online, Dll.', '', '2019-01-03', '16:06:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `wa` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `level` enum('Developers','Admin','Resseler','Agen') COLLATE utf8_swedish_ci NOT NULL,
  `link_fb` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `tugas` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `id` int(10) NOT NULL,
  `oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `provider_oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `layanan` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `harga` double NOT NULL,
  `profit` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `target` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `isi_sms` text COLLATE utf8_swedish_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Pending','Processing','Error','Success') COLLATE utf8_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place_from` varchar(50) COLLATE utf8_swedish_ci NOT NULL DEFAULT 'WEB',
  `refund` enum('0','1') COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subjek` varchar(250) NOT NULL,
  `pesan` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `update_terakhir` datetime NOT NULL,
  `status` enum('Pending','Responded','Waiting','Closed') NOT NULL,
  `this_user` int(1) NOT NULL,
  `this_admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `saldo` int(10) NOT NULL,
  `pemakaian_saldo` double NOT NULL,
  `level` enum('Member','Agen','Admin','Developers','Reseller') COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8_swedish_ci NOT NULL,
  `api_key` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `uplink` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `terdaftar` datetime NOT NULL,
  `update_nama` int(1) NOT NULL,
  `random_kode` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `saldo`, `pemakaian_saldo`, `level`, `status`, `api_key`, `uplink`, `terdaftar`, `update_nama`, `random_kode`) VALUES
(2, 'cobaya', 'coba@coba.com', 'cobaya', '$2y$10$tLf7DDmHbfDaZ/.pJC80Z.evUCTMLax715FNL4.qf78Ui6CwoJ0A6', 26256, -99999993695, 'Developers', 'Aktif', 'LelT9hbZsG8npLaO0CsN3Ou09k8yiuwT', 'Pendaftaran Gratis', '0000-00-00 00:00:00', 0, ''),
(5, 'Demo', 'demo@gmail.com', 'demo', '$2y$10$XDXgQaGrVIP7Ub2x.MhtpuYABH8kBcYIDJnoFuE6bg0ftILdi1Jvm', 999999999, 0, 'Developers', 'Aktif', 'pEbk0s2HfsomnAP2jTTyU6jlqtB2yUbN', 'Pendaftaran Gratis', '0000-00-00 00:00:00', 0, ''),
(8, 'Junjun', 'member@gmail.com', 'junjun', '$2y$10$XDXgQaGrVIP7Ub2x.MhtpuYABH8kBcYIDJnoFuE6bg0ftILdi1Jvm', 10000, 0, 'Member', 'Aktif', 'tCxiQyISGtPFFH4P4LRL80EU1bUOzfjf', 'Pendaftaran Gratis', '2021-12-18 19:10:58', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga_pendaftaran`
--
ALTER TABLE `harga_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history_saldo`
--
ALTER TABLE `history_saldo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_pulsa`
--
ALTER TABLE `layanan_pulsa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_sosmed`
--
ALTER TABLE `layanan_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `metode_depo`
--
ALTER TABLE `metode_depo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders_pulsa`
--
ALTER TABLE `orders_pulsa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian_game`
--
ALTER TABLE `pembelian_game`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian_pulsa`
--
ALTER TABLE `pembelian_pulsa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian_sosmed`
--
ALTER TABLE `pembelian_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_tiket`
--
ALTER TABLE `pesan_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_tsel`
--
ALTER TABLE `pesan_tsel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provider_pulsa`
--
ALTER TABLE `provider_pulsa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_transfer`
--
ALTER TABLE `riwayat_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting_web`
--
ALTER TABLE `setting_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `harga_pendaftaran`
--
ALTER TABLE `harga_pendaftaran`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history_saldo`
--
ALTER TABLE `history_saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `layanan_pulsa`
--
ALTER TABLE `layanan_pulsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8904;

--
-- AUTO_INCREMENT untuk tabel `layanan_sosmed`
--
ALTER TABLE `layanan_sosmed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3145;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `metode_depo`
--
ALTER TABLE `metode_depo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `orders_pulsa`
--
ALTER TABLE `orders_pulsa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembelian_game`
--
ALTER TABLE `pembelian_game`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembelian_pulsa`
--
ALTER TABLE `pembelian_pulsa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembelian_sosmed`
--
ALTER TABLE `pembelian_sosmed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan_tiket`
--
ALTER TABLE `pesan_tiket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_tsel`
--
ALTER TABLE `pesan_tsel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `provider_pulsa`
--
ALTER TABLE `provider_pulsa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat_transfer`
--
ALTER TABLE `riwayat_transfer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting_web`
--
ALTER TABLE `setting_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_sms`
--
ALTER TABLE `tbl_sms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
