-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Nov 2021 pada 18.08
-- Versi server: 5.7.35-cll-lve
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketju_smm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balance_history`
--

CREATE TABLE `balance_history` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `action` enum('Add Balance','Cut Balance') COLLATE utf8_swedish_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `msg` text COLLATE utf8_swedish_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` enum('INFO','WARNING','UPDATE') NOT NULL,
  `warna` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposits_history`
--

CREATE TABLE `deposits_history` (
  `id` int(10) NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `quantity` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `pengirim` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `get_balance` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `link_confirm` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `method` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Pending','Processing','Error','Success') COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `deposits_history`
--

INSERT INTO `deposits_history` (`id`, `user`, `code`, `quantity`, `pengirim`, `get_balance`, `link_confirm`, `method`, `date`, `time`, `status`) VALUES
(651, 'spetr', 'RP-DEPOSIT-0RBgfq', '1000000', '080101010101', '1000000', 'http://spetrmedia.me', 'Telkomsel', '2018-06-21', '22:15:08', 'Success');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `content` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `poid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `service` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `link` text COLLATE utf8_swedish_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `remains` int(10) NOT NULL,
  `start_count` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `status` enum('Checking','Pending','Processing','Error','Partial','Success') COLLATE utf8_swedish_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `provider` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `place_from` enum('WEB','API') COLLATE utf8_swedish_ci NOT NULL,
  `notes` text COLLATE utf8_swedish_ci NOT NULL,
  `refund` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `oid`, `poid`, `user`, `service`, `link`, `quantity`, `remains`, `start_count`, `price`, `status`, `datetime`, `date`, `time`, `provider`, `place_from`, `notes`, `refund`) VALUES
(1, '8768117', '', 'demo', 'Views aa', 'Capesaya', 100, 0, 0, 10, 'Pending', '0000-00-00 00:00:00', '2018-08-21', '00:00:00', 'SP', 'WEB', '', 0),
(2, '8205131', '', 'demo', '766', 'rfli.m__', 100, 0, 0, 20, 'Pending', '0000-00-00 00:00:00', '2018-08-21', '00:00:00', 'SP', 'WEB', '', 0),
(3, 'S1-729092', '', 'demo', '766', 'Test2', 100, 0, 0, 20, 'Pending', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 0),
(4, 'S10087', 'UVTUNtN', 'demo', '766', '4930', 100, 100, 150, 20, 'Success', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 0),
(5, 'S1-697370', '4ec4CdO', 'demo', 'Error', 'Test', 100, 0, 0, 40, 'Pending', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 0),
(6, 'S1-840241', '', 'demo', '766', 'Untuk Indonesia', 100, 0, 0, 20, 'Pending', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 0),
(7, 'S1-920357', '', 'demo', '766', 'Menger', 100, 0, 0, 20, 'Pending', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 0),
(8, 'S1-307990', '', 'demo', '766', 'Terbayanag', 180, 0, 0, 36, 'Pending', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 0),
(9, 'S1-412378', 'oTXYKKD', 'demo', '766', 'Indonesia bisa', 100, 100, 0, 20, 'Processing', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 0),
(10, 'S1-805956', 'O9eDoqW', 'demo', '766', 'Sukses', 100, 200, 100, 20, 'Error', '0000-00-00 00:00:00', '2018-08-23', '00:00:00', 'SP', 'WEB', '', 1),
(11, 'S1-708314', 'API-9046268', 'demo', 'Instagram Views [400K] [SLOW]', 'Test', 100, 0, 0, 165, 'Pending', '0000-00-00 00:00:00', '2018-08-28', '00:00:00', 'SP', 'WEB', '', 0),
(12, 'S1-524828', 'API-8366853', 'demo', 'Instagram Views [400K] [SLOW]', 'Aktif', 100, 0, 0, 165, 'Pending', '0000-00-00 00:00:00', '2018-08-28', '00:00:00', 'SP', 'WEB', '', 0),
(13, 'S1-910660', 'API-6753354', 'demo', 'Instagram Views [400K] [SLOW]', 'Zzzz', 100, 0, 0, 165, 'Success', '0000-00-00 00:00:00', '2018-09-02', '00:00:00', 'SP', 'WEB', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderss`
--

CREATE TABLE `orderss` (
  `id` int(10) NOT NULL,
  `oid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `poid` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `service` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `link` text COLLATE utf8_swedish_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `remains` int(10) NOT NULL,
  `start_count` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `status` enum('Checking','Pending','Processing','Error','Partial','Success') COLLATE utf8_swedish_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `date` date NOT NULL,
  `provider` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `place_from` enum('WEB','API') COLLATE utf8_swedish_ci NOT NULL,
  `notes` text COLLATE utf8_swedish_ci NOT NULL,
  `refund` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `orderss`
--

INSERT INTO `orderss` (`id`, `oid`, `poid`, `user`, `service`, `link`, `quantity`, `remains`, `start_count`, `price`, `status`, `datetime`, `date`, `provider`, `place_from`, `notes`, `refund`) VALUES
(1, '', '', 'demo', '442', '442', 100, 0, 0, 10, 'Pending', '0000-00-00 00:00:00', '2018-08-24', 'SP2', 'WEB', '', 0),
(2, '', '', 'demo', '441', 'Why', 100, 0, 0, 10, 'Pending', '0000-00-00 00:00:00', '2018-08-24', 'SP2', 'WEB', '', 0),
(3, '', '', 'demo', '441', 'Harga_', 100, 0, 0, 10, 'Pending', '0000-00-00 00:00:00', '2018-08-24', 'SP2', 'WEB', '', 0),
(4, '', '', 'demo', '441', 'Tua', 100, 0, 0, 10, 'Pending', '0000-00-00 00:00:00', '2018-08-24', 'SP2', 'WEB', '', 0),
(5, 'ge3W42r', 'ge3W42r', 'demo', '441', 'Modar', 100, 0, 120, 10, 'Success', '0000-00-00 00:00:00', '2018-08-24', 'SP2', 'WEB', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provider`
--

CREATE TABLE `provider` (
  `id` int(10) NOT NULL,
  `code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `api_key` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `provider`
--

INSERT INTO `provider` (`id`, `code`, `link`, `api_key`) VALUES
(1, 'SPETRMEDIA', 'https://spetr-media.com/api/sosmed/order', 'DSwOESlJpxJq8lR9zcdp'),
(2, 'SPETRMEDIA-S2', 'https://spetr-media.com/api/sosmed2/order', 'DSwOESlJpxJq8lR9zcdp'),
(3, 'SPETRMEDIA-PULSA', 'https://spetr-media.com/api/pulsa/order', 'DSwOESlJpxJq8lR9zcdp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `category` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `service` text COLLATE utf8_swedish_ci NOT NULL,
  `note` text COLLATE utf8_swedish_ci NOT NULL,
  `min` int(10) NOT NULL,
  `max` int(10) NOT NULL,
  `price` double NOT NULL,
  `status` enum('Active','Not active') COLLATE utf8_swedish_ci NOT NULL,
  `pid` int(10) NOT NULL,
  `provider` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `sid`, `category`, `service`, `note`, `min`, `max`, `price`, `status`, `pid`, `provider`) VALUES
(1, 1, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia SM Aktip [BONUS++] [INSTAN]', 'REAL INDO , INPUT USERNAME ONLY JANGAN PAKE LINK , PROSES 0-10 JAM', 100, 2000, 43000, 'Active', 1, 'SPETRMEDIA'),
(2, 2, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM  1', 'SM 1 new', 100, 5000, 10499, 'Active', 2, 'SPETRMEDIA'),
(3, 3, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 2', '- 0 - 30 mins Start- Speed 5K- No refill - No refund', 300, 15000, 11000, 'Active', 3, 'SPETRMEDIA'),
(4, 4, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 3 [REAL]', '⚡️ SUPER INSTANT ⚡️ Instagram Followers[45K] [REAL] [NO REFUND - NO REFILL]', 200, 10000, 12500, 'Active', 4, 'SPETRMEDIA'),
(5, 5, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 4', 'Username OnlyNo Refill / No Refund0-1 Hour Start!Super Instant DeliveryMinimum 100', 200, 5000, 13100, 'Active', 5, 'SPETRMEDIA'),
(6, 8, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers SM 7 HQ (30Days Refill)', '[MAKS.25K] - [HQ] - [30 Days Refill]', 100, 5000, 20700, 'Active', 8, 'SPETRMEDIA'),
(7, 9, 'Instagram Likes', 'Instagram Likes SM 1', 'New & INSTANT', 100, 5000, 2550, 'Active', 9, 'SPETRMEDIA'),
(8, 10, 'Instagram Likes', 'Instagram Likes SM 2 [5K] [INSTANT]', '[5K] [INSTANT]', 100, 5000, 3000, 'Active', 10, 'SPETRMEDIA'),
(9, 11, 'Instagram Likes', 'Instagram Likes SM 3 ⚡️ SUPER INSTANT', '⚡️ SUPER INSTANT ⚡️ Instagram Likes [9K] [INSTANT] [MIN 100]', 100, 9000, 3200, 'Active', 11, 'SPETRMEDIA'),
(10, 12, 'Instagram Views', 'Instagram Views SM 1 [999K] [REAL - INSTANT]', '[*Link Only], REAL Online, Super FAST', 100, 999000, 1899, 'Active', 12, 'SPETRMEDIA'),
(11, 17, ' Instagram Auto Comments / Impressions / Saves', 'Instagram Auto View', 'USERNAME ONLY (Normal Speed)', 20, 1000000, 4500, 'Active', 17, 'SPETRMEDIA'),
(12, 27, ' Youtube Likes / Comments / Favs...', ' Youtube Shares', '(INSTANT - 1500 / Day Speed)', 500, 150000, 37700, 'Active', 27, 'SPETRMEDIA'),
(13, 31, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers SM 8 HQ  (30Days Refill)', '[MAKS.50K] - [HQ] - [30 Days Refill]', 100, 7000, 23000, 'Active', 31, 'SPETRMEDIA'),
(14, 38, 'SoundCloud', 'SoundCloud Followers R1', '[FAST]', 20, 1000000, 36800, 'Active', 38, 'SPETRMEDIA'),
(15, 40, 'SoundCloud', ' SoundCloud Plays', '(SUPER FAST) (S1) [MULTIPLE OF 100] 	Quantity = MULTIPLE OF 100 ONLY !', 20, 10000000, 4500, 'Active', 40, 'SPETRMEDIA'),
(16, 42, 'Pinterest', 'Pinterest Followers', '(UNLIMITED) [INSTANT]', 20, 1000000000, 44500, 'Active', 42, 'SPETRMEDIA'),
(17, 44, 'Pinterest', 'Pinterest RePins', '(UNLIMITED) [INSTANT]', 20, 1000000, 44800, 'Active', 44, 'SPETRMEDIA'),
(18, 48, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers SM 10 [NON DROP] - [60 DAYS REFILL]', '[20K] - [INSTANT] - [NON DROP] - [60 DAYS REFILL]', 50, 20000, 36500, 'Active', 48, 'SPETRMEDIA'),
(19, 49, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 11 HOT [INSTANT] (NO REFILL NO REFUND)', '(USERNAME ONLY) [10K] (NO REFILL NO REFUND)', 100, 6000, 9500, 'Active', 49, 'SPETRMEDIA'),
(20, 54, 'Instagram Likes', 'Instagram Likes SM 4 [.50K] [REAL - INSTANT]', '[50K] [REAL - INSTANT]', 20, 50000, 4500, 'Active', 54, 'SPETRMEDIA'),
(21, 63, 'Instagram Likes', 'Instagram Likes SPETRMEDIA 1 [ New & Best Server ]', '[*Link Only], REAL HQ, Super FAST', 100, 15000, 3000, 'Active', 63, 'SPETRMEDIA'),
(22, 107, ' Telegram', ' Telegram Channel Members', 'MAX 25K', 100, 25000, 108500, 'Active', 107, 'SPETRMEDIA'),
(23, 108, ' Telegram', 'Telegram Post Views', '[ Last 5 post ]', 100, 5000, 108500, 'Active', 108, 'SPETRMEDIA'),
(24, 116, 'Google', 'Google Followers', 'USERNAME OR LINK', 100, 7000, 115500, 'Active', 116, 'SPETRMEDIA'),
(25, 117, 'Google', 'Google Website +1', 'LINK', 50, 5000, 263500, 'Active', 117, 'SPETRMEDIA'),
(26, 118, 'Google', 'Google Post +1', 'LINK', 20, 2000, 128500, 'Active', 118, 'SPETRMEDIA'),
(27, 119, 'Google', 'Google Reshares', 'Google Reshares', 20, 2000, 138500, 'Active', 119, 'SPETRMEDIA'),
(28, 128, 'Instagram Views', 'Instagram Views  [300k Per Day]', '[300k Per Day] - [INSTANT] - [Super FAST]', 100, 999000, 3000, 'Active', 128, 'SPETRMEDIA'),
(29, 170, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers ARAB - IRAN - INSTANT NON DROP', '[20K] [ARAB - IRAN - INSTANT] [NON DROP - 30 DAYS REFILL]', 50, 20000, 37800, 'Active', 170, 'SPETRMEDIA'),
(30, 176, ' Instagram Story / Impressions / Saves', 'Instagram Story Views UNLIMITED (USERNAME ONLY) (S1)', 'Instagram Story Views UNLIMITED (USERNAME ONLY) (S1)', 50, 10000000, 16500, 'Active', 176, 'SPETRMEDIA'),
(31, 177, ' Instagram Story / Impressions / Saves', 'Instagram Story Views [20k] (USERNAME ONLY) (S2)', 'Instagram Story Views [20k] (USERNAME ONLY) (S2)', 100, 20000, 23200, 'Active', 177, 'SPETRMEDIA'),
(32, 178, ' Instagram Story / Impressions / Saves', 'Instagram Impressions [20k] [INSTANT] (S1)', 'Instagram Impressions [20k] [INSTANT] (S1)', 500, 20000, 29750, 'Active', 178, 'SPETRMEDIA'),
(33, 179, ' Instagram Story / Impressions / Saves', 'Instagram Saves [UNLIMITED] [20k/Day - INSTANT]', 'Instagram Saves [UNLIMITED] [20k/Day - INSTANT]', 20, 30000, 19250, 'Active', 179, 'SPETRMEDIA'),
(34, 183, 'Instagram Likes', 'Instagram Likes [70K] [BRAZIL - INSTANT]', 'Instagram Likes [70K] [BRAZIL - INSTANT]', 20, 70000, 7000, 'Active', 183, 'SPETRMEDIA'),
(35, 186, 'Instagram Likes', 'Instagram Likes [35K] [RUSSIA - INSTANT - HQ]', 'Instagram Likes [35K] [RUSSIA - INSTANT - HQ]', 20, 35000, 7000, 'Active', 186, 'SPETRMEDIA'),
(36, 187, 'Instagram Likes', 'Instagram Likes [3k] [JAPAN - HQ - INSTANT]', 'Instagram Likes [3k] [JAPAN - HQ - INSTANT]', 20, 3000, 7000, 'Active', 187, 'SPETRMEDIA'),
(37, 197, ' Instagram Auto Comments / Impressions / Saves', 'Instagram Auto Likes (USA - MAX 30K)', '	Instagram Auto Likes (USA - MAX 30K)', 20, 30000, 8000, 'Active', 197, 'SPETRMEDIA'),
(38, 201, ' Instagram Auto Comments / Impressions / Saves', 'Instagram Auto Likes (CHINA - MAX 30K)', 'Instagram Auto Likes (CHINA - MAX 30K)', 10, 30000, 9000, 'Active', 201, 'SPETRMEDIA'),
(39, 202, ' Instagram Auto Comments / Impressions / Saves', 'Instagram Auto Likes + Impressions (30k Max)', 'Instagram Auto Likes + Impressions (30k Max)', 50, 30000, 8000, 'Active', 202, 'SPETRMEDIA'),
(40, 204, ' Instagram Auto Comments / Impressions / Saves', '	Instagram Auto Views (Fast Speed)', '	Instagram Auto Views (Fast Speed)', 100, 60000, 5200, 'Active', 204, 'SPETRMEDIA'),
(41, 207, ' Instagram Auto Comments / Impressions / Saves', '	Instagram Auto Impressions (MAX UNLIMITED)', '	Instagram Auto Impressions (MAX UNLIMITED)', 20, 1000000, 49200, 'Active', 207, 'SPETRMEDIA'),
(42, 236, ' Facebook Video Views / Live Stream', 'Facebook Live Stream Views [30 Mins Watch]', 'Facebook Live Stream Views [30 Mins Watch]', 100, 1000, 323500, 'Active', 236, 'SPETRMEDIA'),
(43, 266, 'Twitter Views / Impressions / Live / Comments', 'Twitter Views (INSTANT)', 'Twitter Views (INSTANT)', 100, 1000000, 27500, 'Active', 266, 'SPETRMEDIA'),
(44, 267, 'Twitter Views / Impressions / Live / Comments', 'Twitter Impressions (INSTANT)', 'Twitter Impressions (INSTANT)', 100, 1000000, 27500, 'Active', 267, 'SPETRMEDIA'),
(45, 279, 'Instagram Likes', 'Instagram Likes + Impressions [30K] [REAL - INSTANT]', 'Instagram Likes + Impressions [30K] [REAL - INSTANT]', 100, 30000, 7400, 'Active', 279, 'SPETRMEDIA'),
(46, 301, 'Instagram Followers No Refill/Not Guaranteed', 'MURAH HOT FAST INTAGRAM SERVER VIP 2  [10k]', '- 0 - 2h start- No Refill - No refund', 100, 10000, 9800, 'Active', 301, 'SPETRMEDIA'),
(47, 304, 'Instagram Likes', 'Instagram Likes VIP .', '- Instant - Non drop - High Quality - Real', 50, 4000, 1800, 'Active', 304, 'SPETRMEDIA'),
(48, 307, 'Instagram Likes', 'Instagram Likes VIP 2', '[ MAX 5K ] - INSTANT', 100, 7000, 1900, 'Active', 307, 'SPETRMEDIA'),
(49, 321, 'Instagram Likes', 'Instagram Likes VIP 3 [7K] [REAL]', 'TERMURAH DI INDONESIA-RealSuper Instant Delivery!', 50, 7000, 1540, 'Active', 321, 'SPETRMEDIA'),
(50, 346, 'Instagram Views', 'NEW CHEAP Instagram Views [800K] [REAL]', 'NEW CHEAP Instagram Views [800K] [REAL]', 50, 800000, 1550, 'Active', 346, 'SPETRMEDIA'),
(51, 349, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes [15K] ⚡', 'Put Link Of Facebook Profile/Page Post0-1 Hour Start!15K/DayMinimum 100', 100, 15000, 10050, 'Active', 349, 'SPETRMEDIA'),
(52, 350, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes [15K] S2', 'Put Link Of Facebook Profile/Page Post0-1 Hour Start!15K/DayMinimum 100', 100, 15000, 10050, 'Active', 350, 'SPETRMEDIA'),
(53, 355, 'Instagram Views', 'Instagram Views [30K] [REAL] CHEAP', 'Real Views!Min 10Max 30KInstant Start !Speed 30K / Day !', 10, 30000, 1370, 'Active', 355, 'SPETRMEDIA'),
(54, 361, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 2 MAX 5K - INSTANT 5 MIN START', '( Very Less Drop )', 100, 5000, 12750, 'Active', 361, 'SPETRMEDIA'),
(55, 362, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM MAX 7K - 1 MİN START', '(Minimum Drop)', 100, 7000, 15700, 'Active', 362, 'SPETRMEDIA'),
(56, 372, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 3 - [ Min 200 - Max 30K ] INSTNT', '1-24 jam', 100, 30000, 11990, 'Active', 372, 'SPETRMEDIA'),
(57, 373, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 4 [Max 7K - 1 MİN START Minimum Drop]', '[Max 7K - 1 MİN START Minimum Drop]', 100, 7000, 19400, 'Active', 373, 'SPETRMEDIA'),
(58, 374, 'Instagram Followers No Refill/Not Guaranteed', 'İnstagram Followers SM 5 - ( Max 25k - UltraFast ) ( Working Less Drop )', '( Max 25k - UltraFast ) ( Working Less Drop )', 100, 25000, 19600, 'Active', 374, 'SPETRMEDIA'),
(59, 375, 'Instagram Followers No Refill/Not Guaranteed', 'İnstagram Followers SM 6 [ 30 Days Refill ] [ 10k/day ] [ Max - 55k ] INSTANT', '10K PERHARI MAX 55K INSTANT', 100, 10000, 23700, 'Active', 375, 'SPETRMEDIA'),
(60, 376, 'Instagram Followers No Refill/Not Guaranteed', 'İnstagram Followers SM 7 (Fast) (15 Days Refill ) | (MIN 1000 - Max - 10k)', '(Fast) (15 Days Refill ) | (MIN 300 - Max - 10k)', 1000, 10000, 25000, 'Active', 376, 'SPETRMEDIA'),
(61, 377, 'Instagram Followers No Refill/Not Guaranteed', 'İnstagram Followers SM 8 Real & Active (Fast) (Max - 25k) (30 days refill)', 'Real & Active (Fast) (Max - 25k) (30 days refill)', 100, 25000, 28700, 'Active', 377, 'SPETRMEDIA'),
(62, 378, 'Instagram Followers No Refill/Not Guaranteed', 'İnstagram Followers SM 9 MINIMAL ORDER 1000  NONDROP FAST', 'Real Refill (30 Days Maximum) 0-1 start Followers', 1000, 10000, 25500, 'Active', 378, 'SPETRMEDIA'),
(63, 379, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 10 MAX 10K||5 MENIT START', 'Waktu Mulai 5 menit sampai 6 jam Drop Followers  tidak terlalu banyak kita Privat DB', 100, 10000, 10550, 'Active', 379, 'SPETRMEDIA'),
(64, 387, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia SM 1 FAST', '1X24 JAM REAL indonesia PERSUBMIT 2K jangan lebih setelah 2k submit lagi', 100, 5000, 47500, 'Active', 387, 'SPETRMEDIA'),
(65, 388, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Semarang', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 100, 1000, 37400, 'Active', 388, 'SPETRMEDIA'),
(66, 389, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Magelang', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 38200, 'Active', 389, 'SPETRMEDIA'),
(67, 390, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Sukabumi', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 38500, 'Active', 390, 'SPETRMEDIA'),
(68, 391, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Bandung', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 2000, 43000, 'Active', 391, 'SPETRMEDIA'),
(69, 392, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Bekasi', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 40000, 'Active', 392, 'SPETRMEDIA'),
(70, 393, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Bali', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 45500, 'Active', 393, 'SPETRMEDIA'),
(71, 394, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Jakarta', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 2000, 43700, 'Active', 394, 'SPETRMEDIA'),
(72, 395, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Cirebon', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 39700, 'Active', 395, 'SPETRMEDIA'),
(73, 396, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Lampung', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 41500, 'Active', 396, 'SPETRMEDIA'),
(74, 397, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Palembang', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 100, 1000, 43500, 'Active', 397, 'SPETRMEDIA'),
(75, 398, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Aceh', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 43500, 'Active', 398, 'SPETRMEDIA'),
(76, 399, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Surabaya', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 42500, 'Active', 399, 'SPETRMEDIA'),
(77, 400, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Bogor', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 43000, 'Active', 400, 'SPETRMEDIA'),
(78, 401, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Cimahi', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 999, 42500, 'Active', 401, 'SPETRMEDIA'),
(79, 402, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Tangerang', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 100, 1000, 43500, 'Active', 402, 'SPETRMEDIA'),
(80, 403, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Purbalingga', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 100, 1000, 41500, 'Active', 403, 'SPETRMEDIA'),
(81, 404, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Sulawesi', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 50, 1000, 43500, 'Active', 404, 'SPETRMEDIA'),
(82, 405, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Kalimantan', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 100, 1000, 42500, 'Active', 405, 'SPETRMEDIA'),
(83, 406, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Makasar', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 100, 1000, 44500, 'Active', 406, 'SPETRMEDIA'),
(84, 407, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Solo', '50% target 50% random ,20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM', 150, 1000, 40500, 'Active', 407, 'SPETRMEDIA'),
(85, 410, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia AKTIP SPECIAL MAX 15K FOLLOWERS INDONESIA', '20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM,PERSUBMIT 2K FOLLOWERS', 50, 5000, 50500, 'Active', 410, 'SPETRMEDIA'),
(86, 411, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 11 FASTSERVICE', 'FAST ERVICE', 500, 50000, 16000, 'Active', 411, 'SPETRMEDIA'),
(87, 412, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 12  ( Min 200 | MAX 5K ) ( 0-6 hours start )', '( Min 200 | MAX 5K ) ( 0-6 hours start )', 200, 50000, 12700, 'Active', 412, 'SPETRMEDIA'),
(88, 413, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 13  ( 0-6 hours Start ) Min 500 -MAX 5K', '( 0-6 hours Start ) Min 500 -MAX 5K', 500, 5000, 11400, 'Active', 413, 'SPETRMEDIA'),
(89, 414, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM 14 5 Mint Delivery Max 2K - No refill, No refund', '5 Mint Delivery Max 2K - No refill, No refund', 200, 2000, 16500, 'Active', 414, 'SPETRMEDIA'),
(90, 416, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers VIP 2  MAX 10K NONDROP', 'Real Refill (30 Days Maximum) 0-12 Hours Start! Minimum 100', 100, 10000, 25200, 'Active', 416, 'SPETRMEDIA'),
(91, 426, 'Youtube Subscribers ', 'Youtube Subscribers S2 1-5 DAYS [ Real | 250-500/day 40% Drop | Max 30k ] ( NO Refill )', '[ Real | 250-500/day | 10-40% Drop | Max 30k ] ( NO Refill )', 500, 30000, 108500, 'Active', 426, 'SPETRMEDIA'),
(92, 438, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers VIP 4 MAX 4k', 'no refund no refill', 200, 4000, 9800, 'Active', 438, 'SPETRMEDIA'),
(93, 444, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Dani Aktip FAST [MAX 2K CHEAP IN THE MARKET]', '20% Masuk Hitungan Detik Sisa Folowers masuk paling lama 1X24 JAM, PER USERNAME MAX 2K FOLLOWERS INDONESIA', 100, 2000, 38500, 'Active', 444, 'SPETRMEDIA'),
(94, 445, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers VVIIPP 1 - [ Min 100 - Max 6K ]', '- SUPER FAST DELIVERY ( 5 - 10 Mins ) - Min 100 - Max 10K - NO REFILL - NO REFUND', 100, 5000, 10750, 'Active', 445, 'SPETRMEDIA'),
(95, 448, 'Instagram Views', 'Instagram Views Cheapest In Market Murahnya Gila [MAX10K]', '( Cheapest in the Market )', 50, 10000, 1100, 'Active', 448, 'SPETRMEDIA'),
(96, 459, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Privat S2 instant Work Norefund No refill CUMA DI SPETRMEDIA', 'Instagram Followers Privat S1 instant Work Norefund No refill CUMA DI IRVANKEDE', 200, 4500, 10390, 'Active', 459, 'SPETRMEDIA'),
(97, 460, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Privat S3 instant Work Norefund No refill CUMA DI SPETRMEDIA', 'Instagram Followers Privat S1 instant Work Norefund No refill CUMA DI IRVANKEDE', 100, 4500, 9100, 'Active', 460, 'SPETRMEDIA'),
(98, 461, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers VVIIPP 2 [6K]', 'Cheapest In Market', 100, 6000, 6900, 'Active', 461, 'SPETRMEDIA'),
(99, 462, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers VVIIPP 3 [3K]', 'Complete In 6-12 Hour, Partial / Cancel issues', 100, 3000, 7800, 'Active', 462, 'SPETRMEDIA'),
(100, 464, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers VVIIPP 5 [5K] [NO REFILL NO REFUND] [1MENIT START]', 'MAX 5K NO REFILL NO REFUND', 200, 5000, 9750, 'Active', 464, 'SPETRMEDIA'),
(101, 475, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers VVIIPP 7 INSTAN', 'FAST DELIVERY NO REFILL NO REFUND', 100, 4000, 8800, 'Active', 475, 'SPETRMEDIA'),
(102, 481, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers VVIIPP 9 30 DAYS REFILL SUPER FAST [10K]', '- Instant - Speed 5k/Day - 30 days refill', 100, 10000, 17700, 'Active', 481, 'SPETRMEDIA'),
(103, 486, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers VVIIPP 10 30 DAYS REFILL FAST [10K]', '30 DAYS REFILL FAST', 100, 10000, 24300, 'Active', 486, 'SPETRMEDIA'),
(104, 487, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Khusus SPETRMEDIA S2 NO REFILL NO REFUND [2,5K] CHEAP', 'Norefund No refill start 1 jam Harga Berbanding Lurus Dengan Kualitas', 100, 2500, 6000, 'Active', 487, 'SPETRMEDIA'),
(105, 492, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers VVIIPP 13 [NoRefund No Refill - Max 5k ] [ 0 - 1Hrs Complete ]', '[NO REFUND NO REFILL- Max 5k ] [ 0 - 1Hrs Complete ]', 300, 5000, 13500, 'Active', 492, 'SPETRMEDIA'),
(106, 508, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook - Post Likes Real S1 ( Instant, Real, Superfast, Fanpage & Profile post, Max 5k )', '- 100% Real users - Min = 25 likes - max = 50k likes - Instant start - Mixed likes - Accept All Post - Life time Guarantee of likes', 25, 1000, 8200, 'Active', 508, 'SPETRMEDIA'),
(107, 509, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook - Post Likes S2 ( Instant, Real, Ultra fast, Fanpage & Profile post, Max 3k )', '- 100% Real users - Min = 25 likes - max = 50k likes - Instant start - Mixed likes - Accept All Post - Life time Guarantee of likes', 100, 5000, 9000, 'Active', 509, 'SPETRMEDIA'),
(108, 520, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Khusus SPETRAMEDIA S4 SUPER FAST [10K] [MIN 300]', 'NO REFILL NO REFUND', 300, 10000, 8100, 'Active', 520, 'SPETRMEDIA'),
(109, 526, ' Instagram Auto Comments / Impressions / Saves', 'Instagram Impressions [1M]', 'Real Instant Delivery! Minimum 100', 100, 1000000, 3200, 'Active', 526, 'SPETRMEDIA'),
(110, 527, ' Instagram Story / Impressions / Saves', 'Instagram Story Views [30K]', 'No Refill / No Refund 0-1 Hour Start! 10K/Day Minimum 50', 100, 30000, 15650, 'Active', 527, 'SPETRMEDIA'),
(111, 530, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes [1K] [EMOTICONS] [HAHA]', 'INSTANT', 10, 1000, 11000, 'Active', 530, 'SPETRMEDIA'),
(112, 531, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes [1K] [EMOTICONS] [WOW]', 'INSTANT', 10, 1000, 11000, 'Active', 531, 'SPETRMEDIA'),
(113, 532, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes [1K] [EMOTICONS] [SAD]', 'INSTANT', 10, 1000, 11000, 'Active', 532, 'SPETRMEDIA'),
(114, 533, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes [1K] [EMOTICONS] [ANGRY]', 'INSTANT', 100, 1000, 11000, 'Active', 533, 'SPETRMEDIA'),
(115, 541, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Media 5 SUPER FAST 5-10 MENIT 10K', 'NO REFILL NO REFUND', 100, 10000, 11900, 'Active', 541, 'SPETRMEDIA'),
(116, 544, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Real Aktip Murah S1', 'CHEAP START 5 JAM - 24 JAM - 48 JAM - HARGA BERBANDING LURUS DENGAN KECEPATN DAN KUALITAS - MAX PERAKUN/PERUSERNAME CUMA 1K UNTUK LAYANAN INI - TERMURAH DI INDONESIA', 50, 1000, 27800, 'Active', 544, 'SPETRMEDIA'),
(117, 546, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers Refill 2 [4k] [30 Days Refill]', '1,5-2K/ DAYS', 100, 4000, 18200, 'Active', 546, 'SPETRMEDIA'),
(118, 554, ' Instagram Story / Impressions / Saves', 'Instagram Last Story S1 - Only Username - No Refund', 'Instagram Last Story - Only Username - No Refund', 500, 10000, 3750, 'Active', 554, 'SPETRMEDIA'),
(119, 560, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [10K] [INSTANT DELIVERY', 'No Refill / No Refund 0-1 Hour Start! Super Instant Delivery Minimum 100 Maximum = 10k Daily !', 100, 10000, 8800, 'Active', 560, 'SPETRMEDIA'),
(120, 561, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [4K] [NO REFUND NO REFILL]', '0-1 JAM START NO REFUND NO REFILL', 100, 4000, 6300, 'Active', 561, 'SPETRMEDIA'),
(121, 562, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [1.5K] [START 1AM] [NOREFILL NO REFUND]', 'Instagram Followers [1.5K] [START 1AM] [NOREFILL NO REFUND]', 100, 1500, 6700, 'Active', 562, 'SPETRMEDIA'),
(122, 573, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [5K] - INSTANT 5 MIN START ( Very Less Drop )', 'no refund no refill', 100, 5000, 11900, 'Active', 573, 'SPETRMEDIA'),
(123, 574, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [10K] NO REFUND NO REFILL', 'START 0-12 JAM', 200, 10000, 8500, 'Active', 574, 'SPETRMEDIA'),
(124, 578, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Hitungan Detik [6K]', 'INSTANT', 50, 6000, 38500, 'Active', 578, 'SPETRMEDIA'),
(125, 581, 'Instagram Likes', 'Instagram Likes [15K] [INSTANT]', 'Real Super Instant Delivery! Minimum 100', 100, 15000, 3200, 'Active', 581, 'SPETRMEDIA'),
(126, 587, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers REFILL ISNTANT {30 Days Refill- 2 hour Start] MAX 10k', '{30 Days Refill- 2 hour Start] MAX 10k', 100, 10000, 26000, 'Active', 587, 'SPETRMEDIA'),
(127, 589, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Instant Cheap[2K]', 'JIKA LAMBAT LAYAAN INI MENGALAMI OVERLOAD', 50, 2000, 34500, 'Active', 589, 'SPETRMEDIA'),
(128, 592, 'Instagram Likes', 'Instagram Likes INDONESIA INSTAN S6 (Hitungan Detik) MAX 7K BACA NOTE', 'Submit jangan pake link seperti ini https://www.instagram.com/p/BkNSDjMAqi0/ Pake link  https://www.instagram.com/p/BkNSDjMAqi0/?utm_source=ig_share_sheet&igshid=1wodc812v31tk Cara mandapatkan link seprti ini perbarui dulu aplikasi instagram !!!!', 25, 7000, 5400, 'Active', 592, 'SPETRMEDIA'),
(129, 595, 'Instagram Likes', 'Instagram Likes Min 50 MAX 15K [ Recommended ] FAST INSTANT', 'Instagram Fast Instant Likes Min 50 MAX 15K [ Recommended ]', 50, 15000, 1650, 'Active', 595, 'SPETRMEDIA'),
(130, 596, 'Instagram Likes', 'Instagram Likes [15K] [INSTANT START 1 MENIT]', 'INSTANT', 20, 15000, 1700, 'Active', 596, 'SPETRMEDIA'),
(131, 598, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers 2K SUPER FAST', 'LOW QUALTY KADANG MASUK GK SESUAI SAMA SUBMIT KADANG DROP CEPET AKUN BOT SEMUA NO REFUND NO REFILL YA GUYS', 100, 4000, 5000, 'Active', 598, 'SPETRMEDIA'),
(132, 601, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers MAX 30K Instant Porses', 'NO REFILL NO REFUND', 100, 10000, 11500, 'Active', 601, 'SPETRMEDIA'),
(133, 604, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ 6K ] Super Fast Cheap', 'NO REFILL NO REFUND', 200, 6000, 5500, 'Active', 604, 'SPETRMEDIA'),
(134, 613, 'Instagram Views', 'Instagram Views Cheapest In Market ( Min 50 Max 10M )', 'START 0-6 JAM', 50, 100000000, 1070, 'Active', 613, 'SPETRMEDIA'),
(135, 621, ' Instagram TV', 'Instagram TV Likes - Instant Start', 'INSTANT', 500, 3000, 2950, 'Active', 621, 'SPETRMEDIA'),
(136, 622, 'Facebook Followers / Friends / Group Members', 'Facebook Followers [50K] [REFILL30 DAYS]', 'For Facebook Profiles And Not Pages Real Refill (30 Days Maximum) 0-6 Hour Start! 500 - 2K/Day Minimum 100', 100, 50000, 23400, 'Active', 622, 'SPETRMEDIA'),
(137, 623, 'Facebook Followers / Friends / Group Members', 'Facebook Group Members [500K]', 'Group Must Be Public ! You Need to Accept the First 5 Members First ! No Refill / No Refund ! Min = 500 Max = 500k 0 to 12 Hours Start ! 500 to 2k / Day Speed !', 500, 500000, 25200, 'Active', 623, 'SPETRMEDIA'),
(138, 625, ' Instagram TV', 'Instagram TV Views [ULTRA FAST] ( Min 100 | Max 1 Million )', 'IGTV Random Comments ! Full TV Video Link Needed ! INSTANT Start ! Min = 100! Example URL- https://www.instagram.com/tv/BkSp-6VF5fg/', 100, 100000000, 1280, 'Active', 625, 'SPETRMEDIA'),
(139, 626, ' Facebook Post Likes / Comments / Shares / Events', 'Facebook Emoticons Love Instant Start', 'INSTANT', 50, 4000, 8000, 'Active', 626, 'SPETRMEDIA'),
(140, 631, ' Instagram TV', 'IGTV Random Comments [1M]', 'IGTV Random Comments ! Full TV Video Link Needed ! INSTANT Start ! Min = 10!', 10, 10000000, 34200, 'Active', 631, 'SPETRMEDIA'),
(141, 632, ' Instagram TV', 'IGTV Random Emoji Comments [1M]', 'IGTV Random Emoji Comments ! Full TV Video Link Needed ! INSTANT Start ! Min = 10! ♛ Instagram Auto Likes', 10, 10000000, 34200, 'Active', 632, 'SPETRMEDIA'),
(142, 634, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers Max 5K - Refill 15 days', 'INSTANT', 100, 5000, 20500, 'Active', 634, 'SPETRMEDIA'),
(143, 635, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [ 30 Days Refill ] [ 10k/day ] [ Max - 55k ] INSTANT', 'INSTANT', 100, 10000, 22500, 'Active', 635, 'SPETRMEDIA'),
(144, 636, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers (Super Fast) (15 Days Refill ) | (MIN 1000 - Max - 10k)', 'INSTANT', 1000, 100000, 23800, 'Active', 636, 'SPETRMEDIA'),
(145, 650, 'Instagram Views', 'Instagram Views [300K] [SUPER FAST]', 'INSTANT START ! VERY FAST ! 300K / Hour !', 100, 300000, 1095, 'Active', 650, 'SPETRMEDIA'),
(146, 651, 'Instagram Views', 'Instagram Views [3M] [SUPER FAST]', '300k to 500k Per Hour ! Very Fast ! Instant !', 100, 30000000, 1095, 'Active', 651, 'SPETRMEDIA'),
(147, 652, 'Instagram Views', 'Instagram Views + Impressions [FAST] [1M]', 'INSTANT 300K to 500K / Hour Speed ! FAST !', 100, 100000000, 1200, 'Active', 652, 'SPETRMEDIA'),
(148, 653, 'Instagram Views', 'Instagram Views + Impressions [TRENDING HITS] [1M]', 'INSTANT', 100, 10000000, 1250, 'Active', 653, 'SPETRMEDIA'),
(149, 659, 'Facebook Page Likes', 'Real Facebook Page Likes - [ Non drop ] [ 5k-10k/day ] [ Max - 100k ] INSTANT', 'REAL LIKES INSTANT START LIFE TIME GUARANTEED NON DROP MIN 100 MAX 100K', 100, 100000, 82500, 'Active', 659, 'SPETRMEDIA'),
(150, 663, 'Youtube Views', 'Youtube - Views SM 4 [ 100k-300k/day ] ( AUTO REFILL ) [ Life Time Guaranteed ] INSTANT', 'Best Service! - Life Time Guaranteed - 100k-300k/day - 3-5mins Retention - Auto refill ( System Check in every 12hrs ) -> Usually refill will be done within 24hrs, but we need maximum time of 96hrs. - 60-80% Retention', 1000, 10000000, 5500, 'Active', 663, 'SPETRMEDIA'),
(151, 664, 'Youtube Views', 'Youtube - Views SM 5 [ 1M-1.5M/DAY ] ( AUTO REFILL ) [ Life Time Guaranteed ] INSTANT', '- Life Time Guaranteed - 1Million to 1.5Million Per day - Auto refill ( System Check in every 12hrs ) -> Usually refill will be done within 24hrs, but we need maximum time of 96hrs. - 60-80% Retention', 5000, 1000000000, 9000, 'Active', 664, 'SPETRMEDIA'),
(152, 666, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM-1 [ Superfast ] [ Real ] [ Max 5k ] INSTANT-4hrs', 'INSTANT-4HRS Real Followers 10,000 Per day Min 100 Max 10,000', 300, 5000, 8300, 'Active', 666, 'SPETRMEDIA'),
(153, 667, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers SM-2  ( Max - 10k ) ( SUPERFAST, NO REFILL ) INSTANT', 'Super fast real followers. Data is renewed everyday. You can send followers even you used the max 10K for your profile.', 100, 10000, 8500, 'Active', 667, 'SPETRMEDIA'),
(154, 674, 'Instagram Likes', 'Instagram Likes Fast Instant Min 50 MAX 15K', 'INSTANT', 50, 15000, 1530, 'Active', 674, 'SPETRMEDIA'),
(155, 675, 'Instagram Likes', 'Instagram Likes ( Min 20 - Max 15k )( Super Fast ) Complete in less then 1 min', 'INSTANT', 20, 15000, 1650, 'Active', 675, 'SPETRMEDIA'),
(156, 680, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Super Fast [Max 15k]', 'Ultra Fast and Less Drop No Refill / No Refund 0-1 Hour Start! Super Instant Delivery Minimum 150', 100, 6000, 7500, 'Active', 680, 'SPETRMEDIA'),
(157, 684, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ 6K ] 0-3Hours', 'No Refill / No Refund', 100, 6000, 6000, 'Active', 684, 'SPETRMEDIA'),
(158, 686, ' Instagram Story / Impressions / Saves', 'Instagram Story Views [5K] - All Story', 'Instagram Story Views [5K] - All Story', 100, 5000, 2700, 'Active', 686, 'SPETRMEDIA'),
(159, 687, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ Superfast ] [ Real ] [ Max 5k ] INSTANT', 'NO REFIL NO REFINDD', 100, 5000, 7750, 'Active', 687, 'SPETRMEDIA'),
(160, 688, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers (BEST IN MARKET) {MAX 80K) 30 Days Refil', '30 days refill', 100, 80000, 20400, 'Active', 688, 'SPETRMEDIA'),
(161, 689, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia Aktip Langsung Masuk[4K],', 'INSTANT', 100, 4000, 35500, 'Active', 689, 'SPETRMEDIA'),
(162, 690, 'Instagram Views', 'Instagram Views [1M] FAST MURAH', 'Instant Start 200k / hour speed Lifetime non drop guarantee 50 Minimum order 100,00,000 Maximum ord', 50, 100000000, 1053, 'Active', 690, 'SPETRMEDIA'),
(163, 695, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers 5K SuperFast Hanya di SM', 'NO REFIL NO REFUND', 100, 5000, 6050, 'Active', 695, 'SPETRMEDIA'),
(164, 696, ' Instagram Live Video', 'İnstagram Live Video Max 1', 'İnstagram Live Video Max 1', 100, 1000, 19200, 'Active', 696, 'SPETRMEDIA'),
(165, 697, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers (30 Days Refill ) MAX 30K TOMBOL REFILL', 'daily speed 7-10K Refill - Within 24-48 hours Drop - 5% Drop', 100, 30000, 19800, 'Active', 697, 'SPETRMEDIA'),
(166, 698, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers - 30 Days Refill [ Min 100 - Max 10k ] [ SUPER FAST]', '- Instant - Speed 5k/Day - 30 days refill', 100, 10000, 18000, 'Active', 698, 'SPETRMEDIA'),
(167, 699, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Max 10K - 1 Mint START [Less Drop]', 'NO REFIL NO REFINDD', 100, 10000, 9400, 'Active', 699, 'SPETRMEDIA'),
(168, 709, ' Instagram TV', 'Instagram TV Views- Cheapest In Market [1M] 10K/DAY', 'Instagram TV Views- Cheapest In Market [1M] 10K/DAY', 100, 100000000, 1170, 'Active', 709, 'SPETRMEDIA'),
(169, 711, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers KDRT 1  ( Max - 5k ) ( NO REFILL ) INSTANT-6hrs', 'Instagram Followers ( Max - 5k ) ( NO REFILL ) INSTANT-6hrs', 100, 5000, 6050, 'Active', 711, 'SPETRMEDIA'),
(170, 712, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers KDRT 2 ( Max - 5k ) ( NO REFILL ) INSTANT-6hrs', ' 	No Refill / No Refund0-6 Hour StartSuperfast SpeedMinimum 100Maximum 20,000 ', 100, 5000, 6800, 'Active', 712, 'SPETRMEDIA'),
(171, 713, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers KDRT 3 ( Max - 6k ) ( NO REFILL ) INSTANT', ' 	INSTANT-6HRSReal Followers6,000 Per dayMin 100Max 6,000', 100, 6000, 7200, 'Active', 713, 'SPETRMEDIA'),
(172, 714, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers KDRT 4 [ Superfast ] [ Real ] [ Max 10k ] INSTANT-4hrs', ' 	INSTANT-4HRSReal Followers10,000 Per dayMin 100Max 10,000', 100, 10000, 8900, 'Active', 714, 'SPETRMEDIA'),
(173, 715, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers KDRT 5 ( Max - 10k ) ( SUPERFAST, NO REFILL ) INSTANT', ' 	Super fast real followers. Data is renewed everyday. You can send followers even you used the max 10K for your profile.', 100, 10000, 9500, 'Active', 715, 'SPETRMEDIA'),
(174, 716, 'Instagram Followers Indonesia', 'Instagram Followers Manado', 'ISNTANT HITUNGAN DETIK', 50, 2000, 40000, 'Active', 716, 'SPETRMEDIA'),
(175, 718, 'Instagram Likes Indonesia', 'Instagram Likes Indonesia Instant NEW DB MAX 10K', 'INSTNT INPUT 5K 2KALI', 100, 5000, 5200, 'Active', 718, 'SPETRMEDIA'),
(176, 720, 'Youtube Subscribers ', 'Youtube Subribers Instant- 20k/Day-Lifetime Guarantee [MAX60K]', 'instant.\r\nnondrop', 100, 60000, 88500, 'Active', 720, 'SPETRMEDIA'),
(177, 721, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers ( Max - 5k ) ( NO REFILL ) INSTANT-6hrs', 'INSTANT ', 100, 5000, 6000, 'Active', 721, 'SPETRMEDIA'),
(178, 723, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia [NEW][MAX 12K] INSTANT S2', 'INPUT 5K 2 KALI  !!! INSTANT', 100, 5000, 41500, 'Active', 723, 'SPETRMEDIA'),
(179, 724, 'Instagram Followers Indonesia', 'Instagram Followers Aktip Maluku', 'Instagram Followers Aktip Maluku', 50, 1300, 41500, 'Active', 724, 'SPETRMEDIA'),
(180, 725, 'Instagram Followers Indonesia', 'Instagram Followers Aktip Nusa Tenggara Barat', 'Instagram Followers Aktip  Nusa Tenggara Barat', 100, 1500, 43000, 'Active', 725, 'SPETRMEDIA'),
(181, 726, 'Instagram Followers Indonesia', 'Instagram Followers Aktip Cilegon', 'fast', 100, 2000, 43000, 'Active', 726, 'SPETRMEDIA'),
(182, 727, 'Instagram Followers Indonesia', ' 	Instagram Followers Aktip  Serang ', 'intant', 100, 3500, 42500, 'Active', 727, 'SPETRMEDIA'),
(183, 728, 'Instagram Followers Indonesia', 'Instagram Followers Aktip Jambi', 'instant', 100, 1200, 43500, 'Active', 728, 'SPETRMEDIA'),
(184, 729, 'Instagram Followers Indonesia', 'Instagram Followers Banjar Indonesia', 'Instagram Followers Banjar Indonesia', 100, 2000, 42500, 'Active', 729, 'SPETRMEDIA'),
(185, 730, 'Instagram Followers Indonesia', 'Instagram Followers Pekalongan Indonesia', 'Instagram Followers Pekalongan Indonesia', 100, 1600, 43000, 'Active', 730, 'SPETRMEDIA'),
(186, 731, 'Instagram Followers Indonesia', ' 	Instagram Followers Purwokerto Indonesia', ' 	Instagram Followers Purwokerto Indonesia', 100, 1800, 40500, 'Active', 731, 'SPETRMEDIA'),
(187, 740, 'Instagram Followers Indonesia', 'Followers Aktif Indo Perempuan/Wanita DB2 username only', 'INStant', 50, 1500, 45000, 'Active', 740, 'SPETRMEDIA'),
(188, 743, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers - [NoRefill Norefund - Max 10k ] INSTANT', 'START 0-12 JAM ', 100, 10000, 6900, 'Active', 743, 'SPETRMEDIA'),
(189, 747, 'Instagram Likes', 'Instagram Likes [ Max 30k ] INSTANT (Recommended )', 'Instagram Likes [ Max 30k ] INSTANT (Recommended )', 100, 30000, 1690, 'Active', 747, 'SPETRMEDIA'),
(190, 749, 'Instagram Comments', 'Instagram Komen Indonesia', 'PERBARIS INSTANT', 2, 1000, 10500, 'Active', 749, 'SPETRMEDIA'),
(191, 750, ' Instagram Story / Impressions / Saves', 'VIew Story Indonesia', 'INPUT USERNAME FAST ', 100, 2001, 8500, 'Active', 750, 'SPETRMEDIA'),
(192, 755, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [CHEAP] MAX 2K ', 'NO REFILL NO REFUNDD', 100, 2000, 5400, 'Active', 755, 'SPETRMEDIA'),
(193, 760, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers - [ Norefill Norefund- Max 3K ] INSTANT', 'Instagram Followers ', 100, 3000, 9000, 'Active', 760, 'SPETRMEDIA'),
(194, 761, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers - [ 30days refill - Max 10k ] [ SUPER FAST ] INSTANT', ' 	- Instant- Speed 5k/Day- 30 days refill', 100, 10000, 19200, 'Active', 761, 'SPETRMEDIA'),
(195, 762, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [30K] [REFILL 30 DAYS]  1-5% DROP ', 'REFILL BUTTON !1 - 6 Hours Start !5 to 10K per Day!R30 = Refill For 30 Days !24 to 48 Hours For Refill !Min = 300 !5 - 10% Drop Ratio ! ', 100, 30000, 22100, 'Active', 762, 'SPETRMEDIA'),
(196, 763, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers KW 1 MAX 15K INSTANT', 'NO REFILL NO REFUND ', 100, 15000, 7700, 'Active', 763, 'SPETRMEDIA'),
(197, 764, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [45K] [INSTANT] PERDAY 500-2K', 'NO REFILL NO REFUND ', 100, 45000, 9150, 'Active', 764, 'SPETRMEDIA'),
(198, 765, 'Instagram Likes', 'Instagram Likes - [ ULTRAFAST ] [ Max - 10k ] [ 10 Seconds Start ]', 'BEST- Instagram Likes - [ ULTRAFAST ] [ Max - 10k ] [ 10 Seconds Start ]', 100, 10000, 1750, 'Active', 765, 'SPETRMEDIA'),
(199, 766, 'Instagram Views', 'Instagram Views [400K] [SLOW]', 'SLOW !!!', 100, 400000, 1050, 'Active', 766, 'SPETRMEDIA'),
(200, 767, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ 6K ] INSTANT', '0-3 JAM START ', 100, 6000, 6000, 'Active', 767, 'SPETRMEDIA'),
(201, 768, 'Instagram Followers No Refill/Not Guaranteed', 'INSTAGRAM FOLLOWERS MAX 6K - INSTANT START [Recommended]', 'INSTAGRAM FOLLOWERS MAX 6K - INSTANT START [Recommended]', 100, 6000, 8200, 'Active', 768, 'SPETRMEDIA'),
(202, 769, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Indonesia INSTANT MAX 15K ', 'input 5K 3 KALI SETELAH ORDERAN PERTAAMA SUKSESHITUNGAN DETIK CEPAT MASUK ', 100, 5000, 42000, 'Active', 769, 'SPETRMEDIA'),
(203, 771, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ Max - 15k ] [ No refill ] INSTANT- FASTEST', ' 	Instant-6hrsFastestMin 100No refill Guaranted', 100, 15000, 6250, 'Active', 771, 'SPETRMEDIA'),
(204, 772, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers - [ Norefill Norefund- Max 3K ]FASTEST', ' 	Instant-6hrsFastestMin 100No refill Guaranted', 100, 3000, 5900, 'Active', 772, 'SPETRMEDIA'),
(205, 774, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram FOLLOWERS baby S1 TERMURAH  FASTEST', ' 	Usually works instant -1 HourDrop 10-20%', 100, 2000, 4999, 'Active', 774, 'SPETRMEDIA'),
(206, 776, 'Website Traffic', 'Website Traffic [1M] ', ' 	No Adfly / Linkshrink / Etc...\r\nYou Can Use Goo.gl To See The Traffic\r\n12 Hours Start!\r\n10K/Day\r\nMinimum 1000 ', 1000, 100000000, 5900, 'Active', 776, 'SPETRMEDIA'),
(207, 777, 'Website Traffic', 'Website Traffic [10M] [WW]', ' 	Instant Start !\r\n0 to 1 Hour !\r\nDaily Speed = 5k-10k\r\n100% Real People !!\r\nGoogle Analytics Supported\r\nAdSense Safe\r\nMin = 100', 100, 100000000, 12700, 'Active', 777, 'SPETRMEDIA'),
(208, 778, 'Website Traffic', 'Website Traffic From Facebook [10M] [WW]', ' 	Traffic From Facebook !\r\nInstant Start !\r\n0 to 1 Hour !\r\nDaily Speed = 5k-10k\r\n100% Real People !!\r\nGoogle Analytics Supported\r\nAdSense Safe\r\nMin = 100', 100, 1000000000, 12700, 'Active', 778, 'SPETRMEDIA'),
(209, 779, 'Website Traffic', 'Website Traffic From Instagram [10M] [WW] ', ' 	Traffic From Instagram !\r\nInstant Start !\r\n0 to 1 Hour !\r\nDaily Speed = 5k-10k\r\n100% Real People !!\r\nGoogle Analytics Supported\r\nAdSense Safe\r\nMin = 100', 100, 1000000000, 12700, 'Active', 779, 'SPETRMEDIA'),
(210, 781, 'Youtube Subscribers ', 'Youtube Subscribers 0-12 Hour Start-Fastest and Cheapest-4k/day', 'no refill no refund \r\ninstnt ', 25, 7000, 153500, 'Active', 781, 'SPETRMEDIA'),
(211, 786, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers MAX 30K 10-15K/DAY ', 'Daily Speed 10-15kStart 0-1 Hour', 100, 30000, 7700, 'Active', 786, 'SPETRMEDIA'),
(212, 792, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [15K] [BEST IN THE MARKET] [REAL] [AUTO RREFILL30 DAYS]', ' 	BEST IN THE MARKET !SUPER INSTANT !AUTO REFILL 30 DAYS !15K Per Day Speed !Min = 20Max = 15k', 20, 15000, 26805, 'Active', 792, 'SPETRMEDIA'),
(213, 793, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Baby 2 CHEAP', 'NO REFILL NO REFUND DROP 20%', 200, 2000, 5000, 'Active', 793, 'SPETRMEDIA'),
(214, 797, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Baby 6 { No Refill} [MAX5K]', ' 	NO REFILL - NO REFUND IN ANY CASEORDER Start 0-6 Hour.No Refund for even if less followers delivered then quantity.', 100, 5000, 4600, 'Active', 797, 'SPETRMEDIA'),
(215, 800, 'Instagram Likes Indonesia', 'Like Indonesia Server Sementara [MAX1K]', 'FAST INTANT', 100, 700, 5200, 'Active', 800, 'SPETRMEDIA'),
(216, 801, 'Instagram Live Video', 'Comment Live Indonesia', 'input username \r\nsaat live baru input', 5, 700, 12400, 'Active', 801, 'SPETRMEDIA'),
(217, 802, 'Instagram Live Video', 'Like Live Indonesia', 'SUBMIT SSAAT LIVE , INPUT USERNAMEE', 5, 700, 12500, 'Active', 802, 'SPETRMEDIA'),
(218, 811, 'Youtube Subscribers ', 'YouTube Subscriber 100k(8-10K/Day)-Lifetime Guarantee Inatant', '0-3H finish', 100, 100000000, 61500, 'Active', 811, 'SPETRMEDIA'),
(219, 828, 'Instagram Likes', 'Instagram Likes [25K] [REAL] [INDIA / INDONESIA MIX] ', '- Quality = Real Active Indian / Asian Likes !- Start Time = Super Instant !- Speed = Up to 50k Per Day !- Refill =- Min = 50 !- Max = 25K !- Specs =', 50, 25000, 3500, 'Active', 828, 'SPETRMEDIA'),
(220, 833, 'Instagram Story / Impressions / Saves', 'Instagram Cheapest Story Views - All story', 'new ', 100, 10000, 3660, 'Active', 833, 'SPETRMEDIA'),
(221, 839, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers MAX 5 {Promo - No Refill} NO KOMPLEN ', 'NO REFILL NO REFUND APAPUN MASLAHNYA \r\nORDER Start 0-6h (Sometimes Starts Instant)\r\n\r\nNo Refund for even if less followers delivered then quantity.\r\n\r\nCheap Service can partial \r\nHARGA BERBANDING DENGAN KUALITAS ', 100, 5000, 5600, 'Active', 839, 'SPETRMEDIA'),
(222, 840, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers[NoRefill NoRefund] [Max8K]', 'NO REFILL NO REFUND ', 300, 8000, 6800, 'Active', 840, 'SPETRMEDIA'),
(223, 841, 'Facebook Page Likes', 'Facebook Page Likes [HQ] [Non Drop, 30 Days Auto Refill, Super Fast] - INSTANT', 'Facebook Page Likes [HQ] [Non Drop, 30 Days Auto Refill, Super Fast] - INSTANT', 100, 100000, 86500, 'Active', 841, 'SPETRMEDIA'),
(224, 848, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Promo S2 ', 'no refill no refund no komplen ', 1000, 1000, 2600, 'Active', 848, 'SPETRMEDIA'),
(225, 856, 'Youtube Views', 'Youtube Views [ 50K-500k/day ] [ 30 days REFILL ] INSTANT', 'Youtube - Views [ 50K-500k/day ] [ 30 days REFILL ] INSTANT', 100, 2147483647, 5050, 'Active', 856, 'SPETRMEDIA'),
(226, 857, 'Youtube Subscribers ', 'YouTube Subscriber 80k(8-10K/Day)-Lifetime Guarantee', 'YouTube Subscriber 80k(8-10K/Day)-Lifetime Guarantee', 25, 80000, 53000, 'Active', 857, 'SPETRMEDIA'),
(227, 858, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ Max - 10K ] [ No refill ] INSTANT Special Service', 'START 0-1JAM NO REFILL NO REFUND ', 500, 10000, 6000, 'Active', 858, 'SPETRMEDIA'),
(228, 859, 'Instagram Views', 'Instagram Views {Speed 100K - Instant Start}', 'instant', 1000, 100000000, 1050, 'Active', 859, 'SPETRMEDIA'),
(229, 860, 'Instagram Live Video', 'Instagram - Live Video Likes ( INSTANT )', ' 	Instagram - Live Video Likes ( INSTANT )', 200, 100000, 11400, 'Active', 860, 'SPETRMEDIA'),
(230, 861, 'Instagram Live Video', ' 	Instagram - Live Video Custom Comments ( INSTANT )', ' 	Instagram - Live Video Custom Comments ( INSTANT )', 5, 400, 183500, 'Active', 861, 'SPETRMEDIA'),
(231, 862, 'Instagram Likes / Likes + Impressions', 'Instagram Likes + Impressions [50K] REAL ', ' Instagram Likes + Impressions ', 50, 50000, 4000, 'Active', 862, 'SPETRMEDIA'),
(232, 863, 'Instagram Likes / Likes + Impressions', 'Instagram Impressions [1M] REAL', 'Instagram Impressions [1M] ', 100, 10000000, 2500, 'Active', 863, 'SPETRMEDIA'),
(233, 864, 'Instagram Likes / Likes + Impressions', 'Instagram Impressions [100K] ', ' 	Instagram Impressions [100K] ', 10, 1000000, 5550, 'Active', 864, 'SPETRMEDIA'),
(234, 865, 'Facebook Video Views / Live Stream', 'Facebook Video Views (10K-20K) Instant Start', 'Facebook Video Views (10K-20K) Instant Start', 1000, 100000000, 5850, 'Active', 865, 'SPETRMEDIA'),
(235, 867, 'Twitter Likes', 'Twitter Likes / Favorite ( Worldwide )', ' 	Twitter Likes / Favorite ( Worldwide )', 50, 1000000000, 66500, 'Active', 867, 'SPETRMEDIA'),
(236, 871, 'Instagram TV', ' 	Instagram - TV Random Comments [ Instant ]', ' 	INSTANT SUPERFASTReal UsersMinimum 5Example URL- https://www.instagram.com/tv/testtttt/', 10, 1000000, 38150, 'Active', 871, 'SPETRMEDIA'),
(237, 872, 'Instagram TV', 'Instagram - TV Random Emoji [ Instant ]', ' 	INSTANT SUPERFASTReal UsersMinimum 5Example URL- https://www.instagram.com/tv/BkSp-6VF5AB/', 10, 1000000000, 38150, 'Active', 872, 'SPETRMEDIA'),
(238, 873, 'Instagram TV', 'Instagram TV Custom MALE Comments [ Instant-1HRS ]', ' 	Instagram TV Custom MALE Comments [ Instant-1HRS ]', 20, 100, 321000, 'Active', 873, 'SPETRMEDIA'),
(239, 874, 'Instagram TV', 'Instagram TV Random MALE Comments [ Instant-1HRS ]', 'Instagram TV Random MALE Comments [ Instant-1HRS ]', 10, 100, 259000, 'Active', 874, 'SPETRMEDIA'),
(240, 875, 'Instagram TV', 'Instagram TV Random FEMALE Comments [ Instant-1HRS ]', 'Instagram TV Random FEMALE Comments [ Instant-1HRS ]', 10, 150, 259000, 'Active', 875, 'SPETRMEDIA'),
(241, 876, 'Instagram TV', ' 	Instagram TV Custom FEMALE Comments [ Instant-1HRS ]', ' 	Instagram TV Custom FEMALE Comments [ Instant-1HRS ]', 20, 150, 321000, 'Active', 876, 'SPETRMEDIA'),
(242, 877, 'Instagram TV', 'Instagram - TV Likes S2 [ Instant ]', '  	Instagram - TV Likes S2 [ Instant ]', 400, 2500, 6550, 'Active', 877, 'SPETRMEDIA'),
(243, 878, 'Instagram Story / Impressions / Saves', 'Instagram Story Views [15K] [ALL POSTS]', 'Instant Start30k / Day Speed !Min 100', 100, 15000, 1250, 'Active', 878, 'SPETRMEDIA'),
(244, 879, 'Instagram Story / Impressions / Saves', 'Instagram Story Views ALL story', 'ALL STORIES !USERNAME ONLY !INSTANT START !FAST DELIVERY !Min = 100Max = 15k', 100, 15000, 4500, 'Active', 879, 'SPETRMEDIA'),
(245, 880, 'Instagram Story / Impressions / Saves', 'Instagram Impressions [10M] [EXPLORE - HOME - LOCATION - PROFILE] ', ' 	Impressions showing from ALL in the statistics (Explore, Home, Location ,Etc..)!Instant Start!Fast Delivery!Minimum 100Maximum 10M', 100, 2147483647, 2850, 'Active', 880, 'SPETRMEDIA'),
(246, 881, 'Instagram Story / Impressions / Saves', 'Instagram Story Views [MALE] [30K] ', ' 	Username OnlyViews from MALE users0-1 Hour Start!50K/DayMinimum 20', 20, 30000, 8800, 'Active', 881, 'SPETRMEDIA'),
(247, 882, 'Instagram Story / Impressions / Saves', 'Instagram Story Views [FEMALE] [30K] ', ' 	Username OnlyViews from FEMALE users0-1 Hour Start!50K/DayMinimum 20', 20, 30000, 8800, 'Active', 882, 'SPETRMEDIA'),
(248, 885, 'Instagram Live Video', 'İnstagram Live Video Max 3K', ' 	İnstagram Live Video Max 3K', 250, 3000, 16650, 'Active', 885, 'SPETRMEDIA'),
(249, 886, 'Instagram Story / Impressions / Saves', 'İnstagram Saves 15K', 'Put Photo Link', 100, 15000, 1200, 'Active', 886, 'SPETRMEDIA'),
(250, 889, 'Youtube Likes / Comments / Favs...', 'YouTube Custom Comments ( Worldwide ) 0-10 Mints Start', ' 	YouTube Custom Comments ( Worldwide ) 0-10 Mints Start', 25, 50000, 88400, 'Active', 889, 'SPETRMEDIA');
INSERT INTO `services` (`id`, `sid`, `category`, `service`, `note`, `min`, `max`, `price`, `status`, `pid`, `provider`) VALUES
(251, 890, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers ( Min 20 : Max 50K ) ( 30 Days Refill )', 'Instagram Followers ( Min 20 : Max 50K ) ( 30 Days Refill )', 25, 50000, 27900, 'Active', 890, 'SPETRMEDIA'),
(252, 891, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [5K] [TERMURAH]', '- Quality = Low / Medium !- Start Time = 0 to 6 Hours Start !- Speed = 3K-5K Per Day !- Refill = No Refill / Refund / No Komplain!- Min = 100 !- Max = 1K !- Specs = Orders May Partial Refund', 100, 5000, 3800, 'Active', 891, 'SPETRMEDIA'),
(253, 892, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers RANDOM ASIA+INDONESIA SUPER FAST MAX 60K', 'supr fast', 50, 60000, 11200, 'Active', 892, 'SPETRMEDIA'),
(254, 893, 'Instagram TV', 'Instagram TV Views {6M} ', 'Instagram TV Views {6M} ', 1000, 600000000, 2000, 'Active', 893, 'SPETRMEDIA'),
(255, 894, 'Instagram TV', ' 	Instagram TV Views {2M}', ' 	Instagram TV Views {2M}', 2000, 2147483647, 1900, 'Active', 894, 'SPETRMEDIA'),
(256, 895, 'Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes S2 [5K]', 'Facebook Post Likes 5k', 100, 5000, 3000, 'Active', 895, 'SPETRMEDIA'),
(257, 896, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers - [ 15 Days Refill ] [ 5k/day ]', 'Instagram Followers - [ 15 Days Refill ] [ 5k/day ]', 300, 5000, 8800, 'Active', 896, 'SPETRMEDIA'),
(258, 897, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Max [100K] - INSTANT ALWAYS', 'FASTNO REFILL NO REFUND ', 100, 100000, 14200, 'Active', 897, 'SPETRMEDIA'),
(259, 898, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ULTRAFAST - 1H START] ', 'NO REFILL NO REFUND ', 100, 2000, 4599, 'Active', 898, 'SPETRMEDIA'),
(260, 899, 'Instagram Followers No Refill/Not Guaranteed', 'Inatagram Followers Max 80K- Instant Start', 'NO REFILL NO REFUND', 200, 80000, 10200, 'Active', 899, 'SPETRMEDIA'),
(261, 900, 'Instagram Likes', 'Instagram Likes [INSTANT] [ Max -5k ] INSTANT', 'SUPER FAST', 50, 5000, 1650, 'Active', 900, 'SPETRMEDIA'),
(262, 901, 'Youtube Subscribers ', 'Youtube Subscribers  [ Max - 500k ] [ Life Time Guaranteed ] INSTANT 2 ', ' 	INSTANT STARTLife Time Guaranteed10,000-50,000 Per dayMin 100Max 500k ', 100, 500000, 112000, 'Active', 901, 'SPETRMEDIA'),
(263, 902, 'Youtube Likes / Comments / Favs...', 'Youtube - Likes [ Ultrafast ] [ Max 400k ] SUPER INSTANT', 'Likes can be Overdelivered!RealLife Time Refill Guarantee25,000-100,000 Per dayMinimum 10', 100, 400000, 148000, 'Active', 902, 'SPETRMEDIA'),
(264, 903, 'Twitter Views / Impressions / Live / Comments', 'Twitter Video Views [ 100k/day ] INSTANT', 'INPUT LINK', 100, 2147483647, 25100, 'Active', 903, 'SPETRMEDIA'),
(265, 904, 'Twitter Views / Impressions / Live / Comments', 'Twitter Live Views [ 500 Max ] [ 15 Mins Time View ] INSTANT 2 ', 'Twitter Live Views [ 500 Max ] [ 15 Mins Time View ] INSTANT', 20, 500, 112500, 'Active', 904, 'SPETRMEDIA'),
(266, 905, 'Twitter Views / Impressions / Live / Comments', 'Twitter Impression [ 100k/day ] INTANT FAST', 'Twitter Impression [ 100k/day ] INTANT FAST', 100, 2147483647, 25100, 'Active', 905, 'SPETRMEDIA'),
(267, 906, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers - [ Max - 60k ] [ NO PARTIAL ] SUPER INSTANT', ' 	SUPER INSTANTHIGH QUALITYNO REFILLSPEED - UPTO 40K/DAYMIN - 50MAX - 50K', 50, 60000, 13000, 'Active', 906, 'SPETRMEDIA'),
(268, 907, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers - [ Max - 5k ] [ 15 Days Refill ] INSTANT FAST', ' 	Refill (15 Days Maximum)0-6 Hours Start!1k - 5K/DayMinimum 100', 100, 5000, 11200, 'Active', 907, 'SPETRMEDIA'),
(269, 908, 'Instagram Likes', 'Instagram Likes [ Superfast ] [ Real ] [ Max -5k ] INSTANT !', ' 	Best & Cheapest Service!RealSuper Instant Delivery!Minimum 50', 50, 5000, 1490, 'Active', 908, 'SPETRMEDIA'),
(270, 909, 'Facebook Page Likes', 'Facebook Page Likes - [ Max - 500k ] [ 10k-20k/day ] INSTANT ', 'REFILL,CANCEL BUTTON ENABLED!\r\nINSTANT-1HRS\r\n30 Days Refill\r\nReal Likes\r\n10,000-20,000 Per day\r\nMinimum 100\r\nMaximum 500k', 100, 2147483647, 91500, 'Active', 909, 'SPETRMEDIA'),
(271, 910, 'Twitter Retweets', 'Twitter Retweets [ HQ ] [ Worldwide ] [ No Refill ] INSTANT', 'Twitter Retweets -[ HQ ] [ Worldwide ] [ No Refill ] INSTANT', 10, 200000, 148500, 'Active', 910, 'SPETRMEDIA'),
(272, 911, 'Twitter Poll Votes', 'Twitter Poll Votes [100M] !', 'Link Example: www....com?vote=ButtonNumber\r\n0-1 Hour Start!\r\n1K - 5K/Day\r\nMinimum 100', 100, 1000000000, 57800, 'Active', 911, 'SPETRMEDIA'),
(273, 912, 'Twitter Poll Votes', 'Twitter Poll Votes [10M] !', 'Link Example: www....com?vote=ButtonNumber\r\n0-1 Hour Start!\r\n100K/Day\r\nMinimum 100', 100, 2147483647, 18100, 'Active', 912, 'SPETRMEDIA'),
(274, 915, 'Youtube Subscribers ', 'Youtube Subscribers [20K] [REAL - 250-500/DAY ] 0-48HR', 'START 24-48 JAM \r\nHARGA BERBANDING DENGAN KUAITAS \r\nDROP \r\nNO REFILL NO REFUND JIKASEWAKTU KWAKTU DROP \r\nDAN JIKA PENDING LAMA HARAP SABAR \r\nKARENA 250-500 PERHARI ', 500, 20000, 40058.823529412, 'Active', 915, 'SPETRMEDIA'),
(275, 916, 'Youtube Views', ' Youtube Views [ 10k-50k/day ] [ HR ] [ No Refill Guarantee ] INSTANT', ' Youtube - Views [ 10k-50k/day ] [ HR ] [ No Refill Guarantee ] INSTANT', 500, 3000000, 17882.352941176, 'Active', 916, 'SPETRMEDIA'),
(276, 917, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [ Max - 12k ] [ No refill ] INSTANT', ' 	Instant-6hrs\r\nFastest\r\nMin 100\r\nNo refill Guaranted', 100, 12000, 5882.3529411765, 'Active', 917, 'SPETRMEDIA'),
(277, 918, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [30K] [REFILL 20DAYS]', ' 	- Quality = Normal !\r\n- Start Time = Up to 12 Hours !\r\n- Speed = Up to 4k Per Day !\r\n- Refill = 20 Days !\r\n- Min = 200 !\r\n- Max = 30K !\r\n- Specs = Refill Starts after 24 to 48 Hours from request !', 100, 30000, 10470.588235294, 'Active', 918, 'SPETRMEDIA'),
(278, 920, 'Facebook Page Likes', 'Facebook Page Likes [1K] [NO REFILL] ', 'No refill / no refund\r\nMin: 100\r\nstart time: 1-36 hours\r\n10-20% drop\r\nspeed / day: 1k once started', 100, 1000, 26470.588235294, 'Active', 920, 'SPETRMEDIA'),
(279, 921, 'Facebook Page Likes', 'Facebook Page Likes [20K] ', ' 	- Quality = REAL !\r\n- Start Time = Up to 48 Hours !\r\n- Speed = Up to 20k Per Day !\r\n- Refill = No Refill / Refund !\r\n- Min = 500 !\r\n- Max = 20K !\r\n- Specs =', 500, 20000, 31647.058823529, 'Active', 921, 'SPETRMEDIA'),
(280, 924, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Max 10K INSTAN  NO REFILL ', 'NO REFILL NO REFUNDD', 100, 10000, 4823.5294117647, 'Active', 924, 'SPETRMEDIA'),
(281, 925, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Max 7K - Very Less Drop', 'NO REFILL NO REFUND ', 100, 7000, 6235.2941176471, 'Active', 925, 'SPETRMEDIA'),
(282, 926, 'Facebook Page Likes', 'Facebook Page Like Min 100 Max 5000{0-3H Start}{15 days refill}', ' 	- Min 500 - Max 5000 - Refill 30 days - Any order takes less 24 ( if overload will complete 72 h max ) - Real and Active People 100% Most Of Them Arab !\r\n\r\nNo Cancellation In between 72 Hours!', 200, 5000, 49647.058823529, 'Active', 926, 'SPETRMEDIA'),
(283, 927, 'Instagram Likes', 'Instagram Likes [1 Million ] [Real] [ 100k/Day - Instant]', 'Instagram Likes [1 Million ] [Real] [ 100k/Day - Instant]', 100, 10000000, 3470.5882352941, 'Active', 927, 'SPETRMEDIA'),
(284, 928, 'Instagram Likes', 'Instagram Female Likes - 5K', 'Instagram Female Likes - 5k', 10, 5000, 4470.5882352941, 'Active', 928, 'SPETRMEDIA'),
(285, 929, 'Instagram Likes', 'Instagram Male Likes - 2K', 'Instagram Male Likes - 2k', 100, 2000, 4470.5882352941, 'Active', 929, 'SPETRMEDIA'),
(286, 930, 'Twitter Followers', 'Twitter Followers [5K] [MIX] [7 DAYS REFILL]', 'Username Only\r\nMixed Quality\r\n7 Days AUTO Refill !\r\n0-1 Hour Start!\r\n1K -5K/Day\r\nMinimum 20', 20, 5000, 86705.882352941, 'Active', 930, 'SPETRMEDIA'),
(287, 932, 'Youtube Likes / Comments / Favs...', 'Youtube Likes [ Max 5K ] [ Speed 50 - 100/DAYS ] - NON DROP ', 'SLOW PROSES KARENA SEHARI HANYA BISA 50-100 LIKE YA \r\nSTART 12-24 JAM \r\nNON DROP ', 10, 5000, 66117.647058824, 'Active', 932, 'SPETRMEDIA'),
(288, 933, 'Facebook Post Likes / Comments / Shares / Events', 'Facebook Photo Likes 5K Instant Start ', 'Facebook Photo Likes 5K Instant Start', 100, 5000, 4352.9411764706, 'Active', 933, 'SPETRMEDIA'),
(289, 934, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers - [ Max 5K ] [ Super FAST ] - No Partial!', ' 	- No Refill / No Refund\r\n- 6 Hour Start\r\n- Superfast Speed\r\n- Minimum 100', 100, 5000, 16000, 'Active', 934, 'SPETRMEDIA'),
(290, 935, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers [No refill Norefund] - Max 10K Min 500', 'START 0-6JM ', 500, 10000, 5294.1176470588, 'Active', 935, 'SPETRMEDIA'),
(291, 936, 'Instagram Views', 'Instagram Views MAX 2K Rp 15', 'Instagram Views Rp 10', 500, 2000, 1015.8823529, 'Active', 936, 'SPETRMEDIA'),
(292, 937, 'Youtube Views', 'Youtube Views Lifetime Guarantee ( Recommended Service ) ( CEK NOTE )', ' 	Best Service!\r\n- Life Time Guaranteed\r\n- 100k-300k/day\r\n- 4-6 Mins Retention\r\n- Worldwide Views\r\nOperating system : Android Views\r\n\r\nNote: If you see order mark as completed, But views not appear, Just click on the LIKE button, Views will be appear within 30 SECONDS.', 100, 10000000, 17941.176470588, 'Active', 937, 'SPETRMEDIA'),
(293, 939, 'Facebook Post Likes / Comments / Shares / Events', 'Facebook Post Likes [1K] REAL', ' 	0-1 Hour Start !\r\nMix Quality Accs !\r\nFast Speed !\r\nMin = 100 !', 100, 1000, 5176.4705882353, 'Active', 939, 'SPETRMEDIA'),
(294, 941, 'Youtube Views', 'Youtube - Views [HR ] [ Life Time Guaranteed ] [ 100k-200k/day ] INSTANT', ' 	Instant Start\r\n100k-200k/day speed\r\nLifetime refill guarantee\r\n70-90% Watch Time\r\nWindows desktop watch page & embedded views\r\n100 Minimum order', 100, 2147483647, 16882.352941176, 'Active', 941, 'SPETRMEDIA'),
(295, 942, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Wanita [5K] 80-90% FOLLOWERS WANITA', ' 	80-90% FEMALE\r\nNO REFILL NO REFUND\r\n0-2 HOUR START', 350, 5000, 10529.411764706, 'Active', 942, 'SPETRMEDIA'),
(296, 943, 'Youtube Subscribers ', 'Youtube Subscribers [60K] [REFILL7 DAYS !] [WW]', ' 	- Quality = HIGH !\r\n- Start Time = INSTANT !\r\n- Speed = Up to 20k Per Day !\r\n- Refill = 7 Days Refill !\r\n- Min = 100 !\r\n- Max = 50K !\r\n- Specs =', 100, 60000, 105529.41176471, 'Active', 943, 'SPETRMEDIA'),
(297, 944, 'Youtube Subscribers ', 'Youtube Subscribers [50K] [[REFILL30 DAYS ]]', ' 	- Quality = Medium / High Quality !\r\n- Start Time = Up to 2 Hours !\r\n- Speed = Up to 10k Per Day !\r\n- Refill = 30 Days Refill !\r\n- Min = 25 !\r\n- Max = 50K !\r\n- Specs =', 100, 50000, 64941.176470588, 'Active', 944, 'SPETRMEDIA'),
(298, 945, 'SoundCloud', 'SoundCloud Likes [1M] ', ' 	Real\r\n0-1 Hour Start!\r\n1K - 10K/Day\r\nMinimum 20', 20, 10000000, 36705.882352941, 'Active', 945, 'SPETRMEDIA'),
(299, 946, 'Pinterest', 'Pinterest RePins [10M] ,', ' 	Real\r\n0-1 Hour Start!\r\n1K - 10K/Day\r\nMinimum 20', 20, 2147483647, 55176.470588235, 'Active', 946, 'SPETRMEDIA'),
(300, 947, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [25K]] [[Refill 20days]]', 'Refill (20 Days Maximum)\r\n0-24 Hours Start!\r\n2k - 3K/Day\r\nMinimum 100', 100, 25000, 17411.764705882, 'Active', 947, 'SPETRMEDIA'),
(301, 948, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [10K] [REFILL 30 DAYS ] [NON DROP] [EXCLUSIVE] ', 'Exclusive Service!\r\nRefill (30 Days Maximum)\r\n0 to 8 Hours Start !\r\nHigh Speed Delivery!\r\nMax = 10K\r\nSuper High Quality!\r\nRefill Button !\r\nMinimum 200', 200, 10000, 27294.117647059, 'Active', 948, 'SPETRMEDIA'),
(302, 949, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [10K] [RREFILL30 DAYS ] AKTIP', ' 	Real\r\nRefill (30 Days Maximum)\r\n0-3 Hours Start!\r\nMinimum 100', 100, 10000, 26588.235294118, 'Active', 949, 'SPETRMEDIA'),
(303, 950, 'Youtube Likes / Comments / Favs...', 'Youtube - Comments [RANDOM] [100] [FEMALE] [USA] INSTANT', ' 	- Instant-1hrs Start time\r\n- Only FEMALE Profile from USA\r\n- High Quality Niche Related Random Comments\r\n- 100/day\r\n- No refill\r\n- Minimum 10 and Maximum 100', 10, 100, 649058.82352941, 'Active', 950, 'SPETRMEDIA'),
(304, 951, 'Youtube Likes / Comments / Favs...', 'Youtube - Comments [CUSTOM] [100] [FEMALE] [USA] NSTANT-1hrs', ' 	- Instant-1hrs Start Time\r\n- Only FEMALE Profile From USA\r\n- High Quality Custom Comments\r\n- 100/day\r\n- No refill\r\n- Minimum 10 and Maximum 100', 10, 100, 960823.52941176, 'Active', 951, 'SPETRMEDIA'),
(305, 953, 'Instagram Story / Impressions / Saves', 'Instagram - Story Views [MALE] [ Max - 30k ] INSTANT', ' 	Username Only\r\nViews from MALE users\r\n0-1 Hour Start!\r\n50K/Day\r\nMinimum 20', 20, 30000, 7352.9411764706, 'Active', 953, 'SPETRMEDIA'),
(306, 954, 'Instagram Story / Impressions / Saves', 'Instagram - Story Views [FEMALE] [ Max - 30k ] INSTANT', ' 	Username Only\r\nViews from FEMALE users\r\n0-1 Hour Start!\r\n50K/Day\r\nMinimum 20', 20, 30000, 7352.9411764706, 'Active', 954, 'SPETRMEDIA'),
(307, 955, 'Instagram Story / Impressions / Saves', 'Instagram - Story Views [LAST STORY ONLY] [ Max - 30k ] INSTANT', ' 	Views On The Last Story Posted Only!\r\nUsername Only\r\n0-1 Hour Start!\r\nUltra Fast!\r\nMinimum 20', 20, 30000, 4588.2352941176, 'Active', 955, 'SPETRMEDIA'),
(308, 956, 'Instagram Story / Impressions / Saves', 'Instagram - Highlights Views [ Max - 20k ] INSTANT', ' 	Get Instagram Highlights Views on ALL your HIGHLIGHTS!\r\nAdd Username Only!\r\nMin 20, Max 20k ', 20, 20000, 42470.588235294, 'Active', 956, 'SPETRMEDIA'),
(309, 957, 'Instagram Story / Impressions / Saves', 'Instagram Photo ( Impression + Location + Explore + Home+ Profile ) INSTANT', 'Its good for ranking!\r\nMin 100\r\nMaximum 1 million!', 100, 1000000, 6294.1176470588, 'Active', 957, 'SPETRMEDIA'),
(310, 958, 'Instagram Story / Impressions / Saves', 'Instagram - Story Views [ Superfast ] INSTANT', 'INSTANT START\r\nRELIABLE SERVICE\r\nFOR ALL STORY\r\n50K/DAY\r\nMIN 100, MAX 100K', 100, 100000, 3058.8235294118, 'Active', 958, 'SPETRMEDIA'),
(311, 961, 'Youtube Views', 'Youtube Views [ HR ] [ 100k-200k/day ] INSTANT', 'Instant Start\r\n100k-200k/day speed\r\nLifetime refill guarantee\r\n70-90% Watch Time\r\nWindows desktop watch page & embedded views\r\n100 Minimum order', 100, 2147483647, 16764.705882353, 'Active', 961, 'SPETRMEDIA'),
(312, 962, ' Instagram Likes [Targeted Negara]', 'Instagram MALAYSIA Real Likes ', ' 	100% Real MALAYSIA HQ Likes\r\nInstant Start !\r\nSuper Instant Delivery !\r\nWill Increase Your Chance to Reach Explore Page !\r\n\r\n❤ Min order : 50\r\n❤ Max order : 1500', 100, 1500, 28588.235294118, 'Active', 962, 'SPETRMEDIA'),
(313, 963, ' Instagram Likes [Targeted Negara]', 'Instagram INDIA Real Likes', '100% Real INDIA HQ Likes\r\nInstant Start !\r\nSuper Instant Delivery !\r\nWill Increase Your Chance to Reach Explore Page !\r\n\r\n❤ Min order : 50\r\n❤ Max order : 15000', 50, 15000, 28588.235294118, 'Active', 963, 'SPETRMEDIA'),
(314, 964, ' Instagram Likes [Targeted Negara]', 'Instagram Likes [2K] [CHINA] ', 'Real\r\nInstant Start!\r\nMinimum 20', 20, 2000, 5294.1176470588, 'Active', 964, 'SPETRMEDIA'),
(315, 965, ' Instagram Likes [Targeted Negara]', 'Instagram Likes [10K] [USA] ', 'Real USA Likes\r\nInstant Start!\r\n10K/Day\r\nMinimum 20', 20, 10000, 4000, 'Active', 965, 'SPETRMEDIA'),
(316, 966, ' Instagram Likes [Targeted Negara]', 'Instagram Likes [50K] [RUSSIA] ', 'Real\r\nInstant Start!\r\n15K - 30K/Day\r\nMinimum 50', 50, 50000, 3294.1176470588, 'Active', 966, 'SPETRMEDIA'),
(317, 967, 'Twitter Followers', 'Twitter Followers [ Max - 5k ] [ Mixed Quality ] [ 7 days AUTO REFILL ] INSTANT', ' 	Mixed Quality\r\n7 Days AUTO Refill\r\n0-1 Hour Start!\r\n1K -5K/Day\r\nMinimum 20', 20, 5000, 78470.588235294, 'Active', 967, 'SPETRMEDIA'),
(318, 968, 'Youtube Views', 'Youtube - Views [ 20k-30k/day ] [ No Refill ] INSTANT !', '- No refill Guarantee ( If order today drop after Next few hours still no refill )\r\n- Views can drop in any ratio ( if drop )\r\n- 2-4 mins Retention', 1000, 10000, 14411.764705882, 'Active', 968, 'SPETRMEDIA'),
(319, 969, 'Youtube Views', 'Youtube Views Lifetime Guarantee ( Recommended Service ) ( Min 100 and Max 1 Million )', ' 	Best Service!\r\n- Life Time Guaranteed\r\n- 100k-300k/day\r\n- 4-6 Mins Retention\r\n- Worldwide Views\r\nOperating system : Android Views\r\n\r\nNote: If you see order mark as completed, But views not appear, Just click on the LIKE button, Views will be appear within 30 SECONDS.', 100, 500000000, 15882.352941176, 'Active', 969, 'SPETRMEDIA'),
(320, 970, 'Instagram Story / Impressions / Saves', 'Instagram Cheapest Story Views - All story Username only', 'username inly ', 500, 15000, 2176.4705882353, 'Active', 970, 'SPETRMEDIA'),
(321, 971, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers Max 15K - Very Less Drop', 'no refill no refund \r\n0-2 H start { Service has 2-5% Drop as of now }\r\n', 250, 15000, 6058.8235294118, 'Active', 971, 'SPETRMEDIA'),
(322, 972, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [20K] [REFILL 60 DAYS] [BEST IN THE MARKET]', ' 	FASTEST 60 DAYS REFILL SERVICE !\r\nSUPER INSTANT !\r\n60 Days Refill !\r\nREFILL BUTTON !\r\n20K Per Day Speed !\r\nMin = 10\r\nMax = 20k', 100, 20000, 34941.176470588, 'Active', 972, 'SPETRMEDIA'),
(323, 973, 'Instagram Followers [Refill] [Guaranteed] [NonDrop]', 'Instagram Followers [10K] [REFILL 30 DAYS] [SUPER FAST]', ' 	Exclusive Service!\r\nRefill (30 Days Maximum)\r\nSUPER INSTANT START !\r\nHigh Speed Delivery!\r\nMax = 10K\r\nSuper High Quality!\r\nRefill Button !\r\nMinimum 100', 100, 10000, 26941.176470588, 'Active', 973, 'SPETRMEDIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `servicess`
--

CREATE TABLE `servicess` (
  `id` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `category` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `service` text COLLATE utf8_swedish_ci NOT NULL,
  `note` text COLLATE utf8_swedish_ci NOT NULL,
  `min` int(10) NOT NULL,
  `max` int(10) NOT NULL,
  `price` double NOT NULL,
  `status` enum('Active','Not active') COLLATE utf8_swedish_ci NOT NULL,
  `pid` int(10) NOT NULL,
  `provider` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `servicess`
--

INSERT INTO `servicess` (`id`, `sid`, `category`, `service`, `note`, `min`, `max`, `price`, `status`, `pid`, `provider`) VALUES
(1, 1, 'IGS', 'Instagram Followers Indonesia Aktif SM 1 [INSTANT] [SUPER FAST] [MAX 10K]', '-', 100, 5000, 47666.666666667, 'Active', 1, 'SPETRMEDIA-S2'),
(2, 2, 'IGS', 'Instagram Followers Indonesia Aktif SM 2 [MAX 5K] [FAST] [INSTANT]', '-', 100, 5000, 51000, 'Active', 2, 'SPETRMEDIA-S2'),
(3, 3, 'IGF', 'Instagram Followers SM 1 [MAX 5K] [INSTANT - SUPER FAST]', '-', 100, 5000, 4888.8888888889, 'Active', 3, 'SPETRMEDIA-S2'),
(4, 4, 'IGF', 'Instagram Followers SM 2 [MAX 10K] [Speed 5K-10K/Day] [SUPER FAST]', '-', 500, 20000, 5444.4444444444, 'Active', 4, 'SPETRMEDIA-S2'),
(5, 5, 'IGF', 'Instagram Followers SM 3 [MAX 5K] [1 Minutes Start] [20 DAYS REFILL]', '-', 100, 5000, 11555.555555556, 'Active', 5, 'SPETRMEDIA-S2'),
(6, 6, 'IGF', 'Instagram Followers SM 4 [MAX 50K] [SPEED UP TO 40K/DAY] [SUPER INSTANT] [NO PARTIAL]', '-', 50, 50000, 12111.111111111, 'Active', 6, 'SPETRMEDIA-S2'),
(7, 7, 'IGF', 'Instagram Followers SM 5 [MAX 30K] [FASTEST] [30 DAYS REFILL] [INSTANT]', '-', 100, 30000, 16555.555555556, 'Active', 7, 'SPETRMEDIA-S2'),
(8, 8, 'IGF', 'Instagram Followers SM 6 [MAX 55K] [Speed 10K/Day] [30 Days Refill]', '-', 100, 10000, 28777.777777778, 'Active', 8, 'SPETRMEDIA-S2'),
(9, 9, 'IGF', 'Instagram Followers SM 7 [MAX 24K] [Real & Active] [30 Days Refill]', '-', 200, 7000, 36555.555555556, 'Active', 9, 'SPETRMEDIA-S2'),
(10, 10, 'IGF', 'Instagram Followers SM 8 [MAX 500K] [Speed 15K-20K+/Day] [30 Days Refill Guaranteed]', '-', 100, 5000000, 56555.555555556, 'Active', 10, 'SPETRMEDIA-S2'),
(11, 11, 'IGF', 'Instagram Followers SM 9 [MAX 175K] [REAL] [Speed 10K-20K/Day] [30 Days Refill] [BEST SERVICE]', '-', 100, 175000, 67666.666666667, 'Active', 11, 'SPETRMEDIA-S2'),
(12, 12, 'IGF', 'Instagram Followers SM 10 [REAL] [Speed 5K/Day] [INSTANT]', '-', 100, 6000, 6555.5555555556, 'Active', 12, 'SPETRMEDIA-S2'),
(13, 13, 'IGF', 'Instagram Followers SM 11 [MAX 20K] [1 Hour Start]', '-', 200, 10000, 9888.8888888889, 'Active', 13, 'SPETRMEDIA-S2'),
(14, 14, 'IGW', 'Instagram Likes Indonesia Aktif SM 1 [MAX 5K] [HITUNGAN DETIK] [INSTANT]', '-', 100, 5000, 7666.6666666667, 'Active', 14, 'SPETRMEDIA-S2'),
(15, 15, 'IGW', 'Instagram Likes Indonesia Aktif SM 2 [MAX 3K] [HITUNGAN DETIK] [INSTANT]', '-', 100, 3000, 7666.6666666667, 'Active', 15, 'SPETRMEDIA-S2'),
(16, 16, 'IGL', 'Instagram Likes SM 1 [REAL - INSTANT]', '-', 50, 5000, 1666.6666666667, 'Active', 16, 'SPETRMEDIA-S2'),
(17, 17, 'IGL', 'Instagram Likes SM 2 [MAX 5K] [SUPER FAST] [RECOMMENDED]', '-', 50, 5000, 1555.5555555556, 'Active', 17, 'SPETRMEDIA-S2'),
(18, 18, 'IGL', 'Instagram Likes SM 3 [MAX 50K] [SUPER FAST]', '-', 100, 30000, 3222.2222222222, 'Active', 18, 'SPETRMEDIA-S2'),
(19, 19, 'IGL', 'Instagram Likes SM 4 [MAX 100K] [REAL ACTIVE] [SUPER FAST]', '-', 20, 100000, 5444.4444444444, 'Active', 19, 'SPETRMEDIA-S2'),
(20, 20, 'IGV', 'Instagram Views SM 1 [REAL - INSTANT] [SUPER FAST]', '-', 50, 10000000, 1666.6666666667, 'Active', 20, 'SPETRMEDIA-S2'),
(21, 21, 'IGV', 'Instagram Views SM 2 [REAL - SUPERFAST]', '-', 100, 50000, 1555.5555555556, 'Active', 21, 'SPETRMEDIA-S2'),
(22, 22, 'IGV', 'Instagram Views Super SM 3 [INSTANT - SUPER FAST] (BEST IN THE MARKET)', '-', 100, 60000, 3222.2222222222, 'Active', 22, 'SPETRMEDIA-S2'),
(23, 23, 'IGV', 'Instagram Story Views [Username Only] [ULTRAFAST] [INSTANT]', '-', 100, 1000000, 5444.4444444444, 'Active', 23, 'SPETRMEDIA-S2'),
(24, 24, 'IGE', 'Instagram Live Video Likes SM 1 [INSTANT]', '-', 200, 10000, 11000, 'Active', 24, 'SPETRMEDIA-S2'),
(25, 26, 'IGE', 'Instagram Live Video Views [USERNAME ONLY] [INSTANT]', '-', 25, 100000, 84333.333333333, 'Active', 26, 'SPETRMEDIA-S2'),
(26, 27, 'FB', 'Real Facebook Fanspage Likes SM 1 [SUPER FAST] [60 Days Auto Refill] [INSTANT]', '-', 100, 400000, 95444.444444444, 'Active', 27, 'SPETRMEDIA-S2'),
(27, 28, 'FB', 'Real Facebook Fanspage Likes SM 2 [SUPER FAST] [30 Days Refill] [INSTANT-1Hour]', '-', 100, 500000, 106555.55555556, 'Active', 28, 'SPETRMEDIA-S2'),
(28, 29, 'FB', 'Real Facebook Fanspage Likes SM 3 [ASIAN LIKES] [60 Days Refill] [INSTANT-3Hours]', '-', 100, 300000, 95444.444444444, 'Active', 29, 'SPETRMEDIA-S2'),
(29, 30, 'FB', 'Real Facebook Fanspage Likes SM 4 [0-6 Hours Start] [Drop Usually 5-15%] [NO REFILL] ', '-', 100, 6000, 27666.666666667, 'Active', 30, 'SPETRMEDIA-S2'),
(30, 31, 'FB', 'Facebook 5 Stars Page Rating [REAL - INSTANT]', '-', 10, 3000, 262111.11111111, 'Active', 31, 'SPETRMEDIA-S2'),
(31, 32, 'FB', 'Facebook 4 Stars Page Rating [REAL - INSTANT]', '-', 10, 3000, 262111.11111111, 'Active', 32, 'SPETRMEDIA-S2'),
(32, 33, 'FB', 'Facebook 3 Stars Page Rating [REAL - INSTANT]', '-', 10, 3000, 262111.11111111, 'Active', 33, 'SPETRMEDIA-S2'),
(33, 34, 'FB', 'Facebook 2 Stars Page Rating [REAL - INSTANT]', '-', 10, 3000, 262111.11111111, 'Active', 34, 'SPETRMEDIA-S2'),
(34, 35, 'FB', 'Facebook 1 Stars Page Rating [REAL - INSTANT]', '-', 10, 3000, 262111.11111111, 'Active', 35, 'SPETRMEDIA-S2'),
(35, 36, 'FB', 'Facebook Website Likes SM 1 [Speed 100K/Day] [Start 0-24 Hours]', '-', 100, 100000, 16555.555555556, 'Active', 36, 'SPETRMEDIA-S2'),
(36, 37, 'FB', 'Facebook Website Likes SM 2 [REAL] [Speed 50K+/Day] [Start 1-6 Hours]', '-', 100, 50000, 78777.777777778, 'Active', 37, 'SPETRMEDIA-S2'),
(37, 38, 'FB', 'Facebook Photo/Post Likes SM 1 [REAL HQ] [INSTANT ULTRAFAST] [Lifetime Guaranteed]', '-', 20, 15000, 6555.5555555556, 'Active', 38, 'SPETRMEDIA-S2'),
(38, 39, 'FB', 'Facebook Photo/Post Likes SM 2 [SUPERFAST] [Speed 3K+/Day] [INSTANT]', '-', 25, 1000, 7666.6666666667, 'Active', 39, 'SPETRMEDIA-S2'),
(39, 40, 'FB', 'Facebook Photo/Post Likes SM 3 [REAL] [Speed 15K+/Day] [ULTRAFAST]', '-', 20, 15000, 9888.8888888889, 'Active', 40, 'SPETRMEDIA-S2'),
(40, 41, 'FB', 'Facebook EMOTICONS Post Likes [LOVE]', '-', 50, 5000, 9888.8888888889, 'Active', 41, 'SPETRMEDIA-S2'),
(41, 42, 'FB', 'Facebook EMOTICONS Post Likes [WOW]', '-', 50, 5000, 9888.8888888889, 'Active', 42, 'SPETRMEDIA-S2'),
(42, 43, 'FB', 'Facebook EMOTICONS Post Likes [SAD]', '-', 50, 5000, 9888.8888888889, 'Active', 43, 'SPETRMEDIA-S2'),
(43, 44, 'FB', 'Facebook EMOTICONS Post Likes [HAHA]', '-', 50, 5000, 9888.8888888889, 'Active', 44, 'SPETRMEDIA-S2'),
(44, 45, 'FB', 'Facebook EMOTICONS Post Likes SM 2 [LOVE]', '-', 50, 5000, 7666.6666666667, 'Active', 45, 'SPETRMEDIA-S2'),
(45, 46, 'FB', 'Facebook EMOTICONS Post Likes SM 2 [HAHA]', '-', 50, 5000, 7666.6666666667, 'Active', 46, 'SPETRMEDIA-S2'),
(46, 47, 'FB', 'Facebook EMOTICONS Post Likes SM 2 [WOW]', '-', 50, 5000, 7666.6666666667, 'Active', 47, 'SPETRMEDIA-S2'),
(47, 48, 'FB', 'Facebook EMOTICONS Post Likes SM 2 [SAD]', '-', 50, 5000, 7666.6666666667, 'Active', 48, 'SPETRMEDIA-S2'),
(48, 49, 'FB', 'Facebook Live Stream Views [Watch Time 30 Minutes] [INSTANT]', '-', 100, 1000, 389888.88888889, 'Active', 49, 'SPETRMEDIA-S2'),
(49, 50, 'FB', 'Facebook Live Stream Views [Watch Time 60 Minutes] [INSTANT]', '-', 100, 10000, 723222.22222222, 'Active', 50, 'SPETRMEDIA-S2'),
(50, 51, 'FB', 'Facebook REAL Random Comments [World Wide] [Speed 200/Day]', '-', 20, 10000, 612111.11111111, 'Active', 51, 'SPETRMEDIA-S2'),
(51, 52, 'FB', 'Facebook Video Views [Instant 1 Hours] [Speed 20k-100k/Day]', '-', 1000, 100000000, 9888.8888888889, 'Active', 52, 'SPETRMEDIA-S2'),
(52, 55, 'FB', 'Facebook Followers SM 1 [REAL] [Speed 3K/Day] [1-6 Hours Start] [NON DROP]', '-', 100, 50000, 21555.555555556, 'Active', 55, 'SPETRMEDIA-S2'),
(53, 59, 'FB', 'Facebook Friends On Personal Profile [Start 1-12 Hours]', '-', 300, 5000, 467666.66666667, 'Active', 59, 'SPETRMEDIA-S2'),
(54, 60, 'FB', 'Facebook Comment Likes [Speed 15K/Day] [Start 0-12 Hours]', '-', 100, 100000, 23222.222222222, 'Active', 60, 'SPETRMEDIA-S2'),
(55, 61, 'TW', 'Twitter Followers SM 1 [MIXED QUALITY] [Speed 1K-5K/Day] [7 Days Auto Refill]', '-', 20, 5000, 78777.777777778, 'Active', 61, 'SPETRMEDIA-S2'),
(56, 64, 'TW', 'Twitter Likes/Favorites [HQ] [WORLWIDE] [INSTANT]', '-', 10, 20000, 89888.888888889, 'Active', 64, 'SPETRMEDIA-S2'),
(57, 65, 'TW', 'Twitter Retweets [HQ] [WORLDWIDE] [INSTANT]', '-', 10, 20000, 89888.888888889, 'Active', 65, 'SPETRMEDIA-S2'),
(58, 66, 'TW', 'Twitter Auto Likes/Favorites [Username Only]', '-', 20, 20000, 101000, 'Active', 66, 'SPETRMEDIA-S2'),
(59, 67, 'TW', 'Twitter Auto Retweets [Username Only]', '-', 20, 20000, 101000, 'Active', 67, 'SPETRMEDIA-S2'),
(60, 70, 'TW', 'Twitter Poll Votes (\"www....com?vote=ButtonNumber\") [Speed 2K-5k/dlDay] [INSTANT]', '-', 20, 1000000, 42111.111111111, 'Active', 70, 'SPETRMEDIA-S2'),
(61, 77, 'YT', 'Youtube Likes SM 1 [REAL] [ULTRAFAST] [LIFETIME NON DROP GUARANTEED] [SUPER INSTANT]', '-', 10, 400000, 167666.66666667, 'Active', 77, 'SPETRMEDIA-S2'),
(62, 78, 'YT', 'Youtube DisLikes SM 1 [REAL] [ULTRAFAST] [LIFETIME NON DROP GUARANTEED] [SUPER INSTANT]', '-', 10, 400000, 167666.66666667, 'Active', 78, 'SPETRMEDIA-S2'),
(63, 79, 'YT', 'Youtube Likes SM 2 [REAL] [SUPER FAST] [SPEED 100K/DAY] [LIFETIME NON DROP GUARANTEED]', '-', 100, 250000, 312111.11111111, 'Active', 79, 'SPETRMEDIA-S2'),
(64, 80, 'YT', 'Youtube DisLikes SM 2 [REAL] [SUPER FAST] [SPEED 100K/DAY] [LIFETIME NON DROP GUARANTEED]', '-', 100, 150000, 312111.11111111, 'Active', 80, 'SPETRMEDIA-S2'),
(65, 82, 'YT', 'Youtube Shares SM 1 [SUPER FAST] [INSTANT]', '-', 50, 100000, 29888.888888889, 'Active', 82, 'SPETRMEDIA-S2'),
(66, 83, 'YT', 'Youtube Shares SM 2 [REAL] [0-1 Hour Start] [Lifetime Guaranteed]', '-', 50, 1000000, 43222.222222222, 'Active', 83, 'SPETRMEDIA-S2'),
(67, 121, 'IGA', '80 Fast Auto Like With View - 30 Days [INPUT USERNAME]', '-', 1000, 1000, 167666.66666667, 'Active', 121, 'SPETRMEDIA-S2'),
(68, 122, 'IGA', '150 Fast Auto Like With View - 30 Days [INPUT USERNAME]', '-', 1000, 1000, 278777.77777778, 'Active', 122, 'SPETRMEDIA-S2'),
(69, 123, 'IGA', '300 Fast Auto Like With View - 30 Days [INPUT USERNAME]', '-', 1000, 1000, 378777.77777778, 'Active', 123, 'SPETRMEDIA-S2'),
(70, 124, 'IGA', '600 Fast Auto Like With View - 30 Days [INPUT USERNAME]', '-', 1000, 1000, 578777.77777778, 'Active', 124, 'SPETRMEDIA-S2'),
(71, 125, 'IGA', '1000 Fast Auto Like With View - 30 Days [INPUT USERNAME]', '-', 1000, 1000, 834333.33333333, 'Active', 125, 'SPETRMEDIA-S2'),
(72, 126, 'MLY', 'Musically Followers SM 1 [HQ] [Speed 20K/Day] [Username Only] [INSTANT]', '-', 100, 20000, 189888.88888889, 'Active', 126, 'SPETRMEDIA-S2'),
(73, 127, 'MLY', 'Musically Followers SM 2 [Speed 5K-10K/Day ] [Username Only] [INSTANT]', '-', 20, 20000, 223222.22222222, 'Active', 127, 'SPETRMEDIA-S2'),
(74, 128, 'MLY', 'Musically Hearts SM 1 [Speed 10K/Day] [Username Only] [INSTANT]', '-', 20, 20000, 223222.22222222, 'Active', 128, 'SPETRMEDIA-S2'),
(75, 129, 'MLY', 'Musically Hearts SM 2 [HQ] [Speed 10K/Day]  [Username Only] [INSTANT]', '-', 20, 20000, 301000, 'Active', 129, 'SPETRMEDIA-S2'),
(76, 130, 'MLY', 'Musically Likes SM 1 [Speed 100K/Day] [Link Only] [INSTANT]', '-', 100, 200000, 189888.88888889, 'Active', 130, 'SPETRMEDIA-S2'),
(77, 131, 'MLY', 'Musically Likes SM 2 [Speed 10K-20K/Day] [Link Only] [INSTANT]', '-', 20, 20000, 223222.22222222, 'Active', 131, 'SPETRMEDIA-S2'),
(78, 134, 'IGV', 'Instagram Story Views Indonesia (Full Story - All Story)', '-', 100, 9000, 14333.333333333, 'Active', 134, 'SPETRMEDIA-S2'),
(79, 135, 'IGE', 'Instagram Live Video Random Comments [INSTANT]', '-', 50, 2000, 534333.33333333, 'Active', 135, 'SPETRMEDIA-S2'),
(80, 136, 'YT', 'Youtube Comment Likes [UPVOTES] [Speed 5K-10K/Day] [0-1 Hour Start]', '-', 10, 100000, 73222.222222222, 'Active', 136, 'SPETRMEDIA-S2'),
(81, 138, 'IGF', 'Instagram Followers SM 12 [MAX 25K] [REAL - SUPERFAST] [INSTANT]', '-', 100, 25000, 21000, 'Active', 138, 'SPETRMEDIA-S2'),
(82, 140, 'IGS', 'Instagram Followers Indonesia Pasif SM 1 [MAX 1K] [INSTANT]', '-', 100, 1000, 43222.222222222, 'Active', 140, 'SPETRMEDIA-S2'),
(83, 142, 'IGL', 'Instagram Likes + Impressions [REAL - INSTANT]', '-', 50, 20000, 7666.6666666667, 'Active', 142, 'SPETRMEDIA-S2'),
(84, 151, 'YTS', 'Youtube Subscribers SM 1 [MAX 250K] [Start 1-12 Hours] [Life Time Refill Guaranteed]', '-', 100, 250000, 512111.11111111, 'Active', 151, 'SPETRMEDIA-S2'),
(85, 152, 'YTS', 'Youtube Subscribers SM 2 [MAX 40K] [INSTANT START] [Speed 4K/Day] [Lifetime NON DROP]', '-', 5, 40000, 162111.11111111, 'Active', 152, 'SPETRMEDIA-S2'),
(86, 155, 'IGA', 'Instagram Auto Likes Indonesia [100LIKES] [30HARI] [INPUT USERNAME]', '-', 1000, 1000, 123222.22222222, 'Active', 155, 'SPETRMEDIA-S2'),
(87, 156, 'IGA', 'Instagram Auto Likes Indonesia [300LIKES] [30HARI] [INPUT USERNAME]', '-', 1000, 1000, 178777.77777778, 'Active', 156, 'SPETRMEDIA-S2'),
(88, 157, 'IGA', 'Instagram Auto Likes Indonesia [500LIKES] [30HARI] [INPUT USERNAME]', '-', 1000, 1000, 206555.55555556, 'Active', 157, 'SPETRMEDIA-S2'),
(89, 158, 'IGA', 'Instagram Auto Likes Indonesia [1000LIKES] [30HARI] [INPUT USERNAME]', '-', 1000, 1000, 262111.11111111, 'Active', 158, 'SPETRMEDIA-S2'),
(90, 180, 'YTS', 'Youtube Subscribers SM 3 (NEW) [MAX 500K] [INSTANT START] [Speed 10K-50K/Day] [Lifetime NON DROP]', '-', 10, 500000, 123222.22222222, 'Active', 180, 'SPETRMEDIA-S2'),
(91, 181, 'IGC', 'Instagram Comments [10K] [RANDOM] [SUPERFAST]', '-', 5, 10000, 41000, 'Active', 181, 'SPETRMEDIA-S2'),
(92, 182, 'IGC', 'Instagram Comments [500] [HQ] [RANDOM] [SUPERFAST]', '-', 5, 500, 72111.111111111, 'Active', 182, 'SPETRMEDIA-S2'),
(93, 183, 'IGC', 'Instagram Comments [1K] [EMOJI RANDOM]', '-', 10, 1000, 178777.77777778, 'Active', 183, 'SPETRMEDIA-S2'),
(94, 188, 'IGC', 'Instagram Live Video Comments [2K] [RANDOM]', '-', 50, 2000, 534333.33333333, 'Active', 188, 'SPETRMEDIA-S2'),
(95, 214, 'YTS', 'Youtube Subscribers TERMURAH 1 [REAL] [Speed 10K/Day] [Life Time Guaranteed NON DROP] [SUPER FAST]', '-', 25, 80000, 62111.111111111, 'Active', 214, 'SPETRMEDIA-S2'),
(96, 215, 'YT', 'Youtube Likes SM 3 [MAX 5K] [Speed 50-100/Day] [NON DROP]', '-', 10, 5000, 61000, 'Active', 215, 'SPETRMEDIA-S2'),
(97, 223, 'IGF', 'Instagram Followers FastCheap 1 [MAX 10K] [SUPER FAST] [INSTANT]', '-', 300, 10000, 6555.5555555556, 'Active', 223, 'SPETRMEDIA-S2'),
(98, 224, 'IGF', 'Instagram Followers FastCheap 2 [INSTANT START] [NEW RECOMMENDED]', '-', 200, 6000, 7666.6666666667, 'Active', 224, 'SPETRMEDIA-S2'),
(99, 225, 'IGF', 'Instagram Followers FastCheap 3 [MAX 10K] [SUPER FAST] [Drop Hanya Sedikit Sekitar 2-5%]', '-', 250, 10000, 5222.2222222222, 'Active', 225, 'SPETRMEDIA-S2'),
(100, 226, 'IGF', 'Instagram Followers FastCheap 4 [MAX 10K] [SUPER FAST] [INSTANT]', '-', 100, 10000, 12111.111111111, 'Active', 226, 'SPETRMEDIA-S2'),
(101, 227, 'IGF', 'Instagram Followers FastCheap 5 [MAX 50K] [BIGGEST BASE] [INSTANT]', '-', 100, 50000, 6555.5555555556, 'Active', 227, 'SPETRMEDIA-S2'),
(102, 229, 'IGF', 'Instagram Followers FastCheap 6 [SUPER FAST] [MAX 1.5K PERSUBMIT] [INSTANT]', '-', 100, 4000, 6000, 'Active', 229, 'SPETRMEDIA-S2'),
(103, 230, 'IGF', 'Instagram Followers FastCheap 7 [MAX 4K/DAY] [SUPER FAST] [INSTANT]', '-', 100, 4000, 6555.5555555556, 'Active', 230, 'SPETRMEDIA-S2'),
(104, 231, 'IGF', 'Instagram Followers FastCheap 8 [MAX 8K] [SUPER FAST] [INSTANT]', '-', 300, 8000, 4888.8888888889, 'Active', 231, 'SPETRMEDIA-S2'),
(105, 232, 'IGF', 'Instagram Followers FastCheap 9 [MAX 30K] [INSTANT START] [Speed 15K-30K/Day]', '-', 100, 30000, 12111.111111111, 'Active', 232, 'SPETRMEDIA-S2'),
(106, 270, 'IGV', 'Instagram Story Views Indonesia (Last Story)', '-', 100, 6000, 8777.7777777778, 'Active', 270, 'SPETRMEDIA-S2'),
(107, 324, 'PRG', 'Instagram Followers PROMO 1 [MAX 10K]', '-', 100, 10000, 4333.3333333333, 'Active', 324, 'SPETRMEDIA-S2'),
(108, 325, 'PRO', 'Instagram Views [SUPER FAST] [MAX 1M]', '-', 50, 100000000, 1066.6666666667, 'Active', 325, 'SPETRMEDIA-S2'),
(109, 326, 'PRO', 'Instagram Views + Impressions', '-', 100, 400000, 1022.2222222222, 'Active', 326, 'SPETRMEDIA-S2'),
(110, 327, 'PRO', 'Instagram Last Story [Masukan Username]', '-', 100, 5000, 3666.6666666667, 'Active', 327, 'SPETRMEDIA-S2'),
(111, 328, 'PRO', 'Instagram Live Video [MAX 1K]', '-', 100, 1000, 21000, 'Active', 328, 'SPETRMEDIA-S2'),
(112, 332, 'PRG', 'Instagram Followers PROMO 2 [MAX 6K] [SUPER FAST]', '-', 200, 6000, 4888.8888888889, 'Active', 332, 'SPETRMEDIA-S2'),
(113, 333, 'PRO', 'Instagram Likes PROMO 1 [MAX 15K] [SUPER FAST]', '-', 50, 30000, 1666.6666666667, 'Active', 333, 'SPETRMEDIA-S2'),
(114, 334, 'YTS', 'Youtube Subscribers TERMURAH 2 [REAL] [Speed 10K/Day] [Life Time Guaranteed NON DROP] [SUPER FAST]', '-', 100, 1000000, 73222.222222222, 'Active', 334, 'SPETRMEDIA-S2'),
(115, 336, 'PRG', 'Instagram Followers PROMO 3 [MAX 3K] [10 Days Refill] [0-1 Hour Start]', '-', 100, 3000, 12111.111111111, 'Active', 336, 'SPETRMEDIA-S2'),
(116, 337, 'PRO', 'Facebook 5 Stars Page Rating [REAL - INSTANT]', '-', 10, 3000, 262111.11111111, 'Active', 337, 'SPETRMEDIA-S2'),
(117, 338, 'PRO', 'Instagram Random Comments [MAX 10K] [ULTRAFAST]', '-', 250, 10000, 12111.111111111, 'Active', 338, 'SPETRMEDIA-S2'),
(118, 339, 'IGTV', 'Instagram TV Views SM 1 [SUPER FAST]', '-', 100, 1000000, 1288.8888888889, 'Active', 339, 'SPETRMEDIA-S2'),
(119, 340, 'IGTV', 'Instagram TV Views SM 2 [SUPER FAST]', '-', 50, 10000000, 1444.4444444444, 'Active', 340, 'SPETRMEDIA-S2'),
(120, 341, 'IGTV', 'Instagram TV Views SM 3 [SUPER FAST]', '-', 5000, 10000000, 1666.6666666667, 'Active', 341, 'SPETRMEDIA-S2'),
(121, 342, 'IGTV', 'Instagram TV Likes [INSTANT]', '-', 500, 3000, 3222.2222222222, 'Active', 342, 'SPETRMEDIA-S2'),
(122, 343, 'IGTV', 'Instagram TV Random Comments [REAL USERS] [INSTANT]', '-', 10, 10000, 32111.111111111, 'Active', 343, 'SPETRMEDIA-S2'),
(123, 344, 'IGTV', 'Instagram TV Random Emoji [REAL USERS] [INSTANT]', '-', 10, 1000000, 32111.111111111, 'Active', 344, 'SPETRMEDIA-S2'),
(124, 351, 'PRG', 'Instagram Followers PROMO 4 [MAX 15K] [ULTRA FAST] [0-1 Hour Start] [Less Drop]', '-', 150, 15000, 7666.6666666667, 'Active', 351, 'SPETRMEDIA-S2'),
(125, 382, 'IGW', 'Instagram Likes Indonesia MURAH 1 [SUPER FAST] [HITUNGAN DETIK]', '-', 100, 600, 3222.2222222222, 'Active', 382, 'SPETRMEDIA-S2'),
(126, 385, 'IGS', '[TERMURAH] Instagram Followers Indonesia Aktif SM 1', '-', 50, 1000, 29888.888888889, 'Active', 385, 'SPETRMEDIA-S2'),
(127, 386, 'IGS', 'Instagram Followers Indonesia Aktif SM 2 [MAX 5K] [SUPER FAST]', '-', 100, 4000, 38777.777777778, 'Active', 386, 'SPETRMEDIA-S2'),
(128, 387, 'IGS', 'Instagram Followers Indonesia Aktif SM 3 [MAX 10K] [SUPER FAST]', '-', 50, 5000, 42111.111111111, 'Active', 387, 'SPETRMEDIA-S2'),
(129, 388, 'IGS', 'Instagram Followers Indonesia Aktif SM 4 [MAX 4K] [SUPER FAST]', '-', 100, 2000, 42111.111111111, 'Active', 388, 'SPETRMEDIA-S2'),
(130, 394, 'IGM', 'Instagram Followers Jakarta Aktif', '-', 50, 2500, 47666.666666667, 'Active', 394, 'SPETRMEDIA-S2'),
(131, 395, 'IGM', 'Instagram Followers Bandung Aktif', '-', 50, 2000, 47666.666666667, 'Active', 395, 'SPETRMEDIA-S2'),
(132, 396, 'IGM', 'Instagram Followers Bogor Aktif', '-', 50, 1000, 47666.666666667, 'Active', 396, 'SPETRMEDIA-S2'),
(133, 397, 'IGM', 'Instagram Followers Bekasi Aktif', '-', 50, 1000, 44333.333333333, 'Active', 397, 'SPETRMEDIA-S2'),
(134, 398, 'IGM', 'Instagram Followers Cimahi Aktif', '-', 50, 800, 45444.444444444, 'Active', 398, 'SPETRMEDIA-S2'),
(135, 399, 'IGM', 'Instagram Followers Cirebon Aktif', '-', 50, 1000, 44333.333333333, 'Active', 399, 'SPETRMEDIA-S2'),
(136, 400, 'IGM', 'Instagram Followers Aceh Aktif', '-', 50, 1000, 47666.666666667, 'Active', 400, 'SPETRMEDIA-S2'),
(137, 401, 'IGM', 'Instagram Followers Palembang Aktif', '-', 100, 1000, 47666.666666667, 'Active', 401, 'SPETRMEDIA-S2'),
(138, 402, 'IGM', 'Instagram Followers Lampung Aktif', '-', 50, 1000, 45444.444444444, 'Active', 402, 'SPETRMEDIA-S2'),
(139, 403, 'IGM', 'Instagram Followers Bali Aktif', '-', 50, 1000, 51000, 'Active', 403, 'SPETRMEDIA-S2'),
(140, 404, 'IGM', 'Instagram Followers Kalimantan Aktif', '-', 100, 1000, 45444.444444444, 'Active', 404, 'SPETRMEDIA-S2'),
(141, 405, 'IGM', 'Instagram Followers Magelang Aktif', '-', 50, 1000, 42111.111111111, 'Active', 405, 'SPETRMEDIA-S2'),
(142, 406, 'IGM', 'Instagram Followers Bekasi Aktif', '-', 100, 1000, 47666.666666667, 'Active', 406, 'SPETRMEDIA-S2'),
(143, 407, 'IGM', 'Instagram Followers Purbalingga Aktif', '-', 100, 1000, 45444.444444444, 'Active', 407, 'SPETRMEDIA-S2'),
(144, 408, 'IGM', 'Instagram Followers Semarang Aktif', '-', 100, 1000, 42111.111111111, 'Active', 408, 'SPETRMEDIA-S2'),
(145, 409, 'IGM', 'Instagram Followers Solo Aktif', '-', 150, 1000, 43222.222222222, 'Active', 409, 'SPETRMEDIA-S2'),
(146, 410, 'IGM', 'Instagram Followers Sukabumi Aktif', '-', 50, 1000, 42111.111111111, 'Active', 410, 'SPETRMEDIA-S2'),
(147, 411, 'IGM', 'Instagram Followers Sulawesi Aktif', '-', 50, 1000, 47666.666666667, 'Active', 411, 'SPETRMEDIA-S2'),
(148, 413, 'IGM', 'Instagram Followers Tangerang Aktif', '-', 100, 1000, 47666.666666667, 'Active', 413, 'SPETRMEDIA-S2'),
(149, 414, 'IGM', 'Instagram Followers Surabaya Aktif', '-', 50, 1000, 45444.444444444, 'Active', 414, 'SPETRMEDIA-S2'),
(150, 419, 'IGS', 'Instagram Followers Indonesia Aktif SM 5 [MAX 15K] [SUPER FAST] [INSTANT]', '-', 100, 5000, 45444.444444444, 'Active', 419, 'SPETRMEDIA-S2'),
(151, 422, 'IGW', 'Instagram Likes Indonesia MURAH 4 [MAX 8K] [HITUNGAN DETIK] [INSTANT]', '-', 100, 5000, 6555.5555555556, 'Active', 422, 'SPETRMEDIA-S2'),
(152, 423, 'YTS', 'Youtube Subscribers TERMURAH 3 [MAX 30K] [Speed 100-500/Day] [INSTANT-1Hour]', '-', 100, 30000, 34333.333333333, 'Active', 423, 'SPETRMEDIA-S2'),
(153, 424, 'YTS', 'Youtube Subscribers TERMURAH 4 [MAX 50K] [Speed 300-500/Day] [INSTANT-1Hour] [LIFETIME GUARANTEED]', '-', 10, 50000, 56555.555555556, 'Active', 424, 'SPETRMEDIA-S2'),
(154, 426, 'IGTV', 'Instagram TV Views TERMURAH [MAX 100M] [Speed 10K/Day] ', '-', 10, 100000000, 1166.6666666667, 'Active', 426, 'SPETRMEDIA-S2'),
(155, 430, 'YT', 'Youtube Comment Likes [DOWNVOTES] [Speed 5K-10K/Day] [0-1 Hour Start]', '-', 10, 100000, 73222.222222222, 'Active', 430, 'SPETRMEDIA-S2'),
(156, 431, 'YT', 'Youtube Favorites [REAL] [0-1 Hour Start] [Lifetime Guaranteed]', '-', 100, 50000, 145444.44444444, 'Active', 431, 'SPETRMEDIA-S2'),
(157, 432, 'YT', 'Youtube Favorites SUPER FAST [REAL] [Speed 20K-30K/Day] [Lifetime Guaranteed]', '-', 100, 150000, 312111.11111111, 'Active', 432, 'SPETRMEDIA-S2'),
(158, 433, 'YT', 'Youtube Comments [RANDOM] [USA] [SUPER QUALITY] [INSTANT-1Hour]', '-', 10, 200, 501000, 'Active', 433, 'SPETRMEDIA-S2'),
(159, 434, 'IGS', 'Instagram Followers Indonesia PRIA Aktif SM 2 [INSTANT] [HITUNGAN DETIK]', '-', 100, 2500, 47666.666666667, 'Active', 434, 'SPETRMEDIA-S2'),
(160, 435, 'IGS', 'Instagram Followers Indonesia WANITA Aktif SM 2 [INSTANT] [HITUNGAN DETIK]', '-', 100, 1500, 47666.666666667, 'Active', 435, 'SPETRMEDIA-S2'),
(161, 437, 'IGF', 'Instagram Followers CHEAP 1 [MAX 5K] [FASTEST] [INSTANT]', '-', 100, 2000, 4333.3333333333, 'Active', 437, 'SPETRMEDIA-S2'),
(162, 438, 'IGF', 'Instagram Followers CHEAP 2 [MAX 15K] [FASTEST] [INSTANT]', '-', 250, 10000, 6555.5555555556, 'Active', 438, 'SPETRMEDIA-S2'),
(163, 439, 'IGV', 'Instagram Views SM 1 [MAX 500K] [SLOW] [INSTANT]', '-', 100, 500000, 1044.4444444444, 'Active', 439, 'SPETRMEDIA-S2'),
(164, 440, 'IGV', 'Instagram Views + Impression SM 1 [MAX 500K] [SLOW] [INSTANT]', '-', 100, 500000, 1083.3333333333, 'Active', 440, 'SPETRMEDIA-S2'),
(165, 441, 'IGV', 'Instagram Views + Impression SMART 2 [MAX 1M] [ULTRAFAST] [INSTANT]', '-', 100, 1000000, 1105.5555555556, 'Active', 441, 'SPETRMEDIA-S2'),
(166, 442, 'IGV', 'Instagram Views + Impression SMART 3 [MAX 1M] [NATURAL INCREASE] [INSTANT]', '-', 100, 1000000, 1122.2222222222, 'Active', 442, 'SPETRMEDIA-S2'),
(167, 445, 'YT', 'Youtube Live Stream Views [MONETIZABLE] [REAL HUMAN] [INSTANT]', '-', 5000, 5000, 62111.111111111, 'Active', 445, 'SPETRMEDIA-S2'),
(168, 446, 'IGF', 'Instagram Followers CHEAP 3 [MAX 5K] [INSTANT START]', '-', 100, 5000, 3777.7777777778, 'Active', 446, 'SPETRMEDIA-S2'),
(169, 447, 'IGL', 'Instagram Likes SM 5 [MAX 5K] [ULTRA FAST] [0-5 Minutes Start]', '-', 20, 5000, 1888.8888888889, 'Active', 447, 'SPETRMEDIA-S2'),
(170, 453, 'YTVH', 'Youtube Views HR 2 [Speed 200K/Day] [70-90% WATCH TIME] [Life Time Guaranteed] [INSTANT]', '-', 100, 100000000, 15333.333333333, 'Active', 453, 'SPETRMEDIA-S2'),
(171, 454, 'YTVH', 'Youtube Views HR 3 [Speed 50K/Day] [85% RETENTION] [Up To 50 Minutes Watch Time]', '-', 500, 500000, 17666.666666667, 'Active', 454, 'SPETRMEDIA-S2'),
(172, 455, 'YTVH', 'Youtube Views HR 4 [SLOW] [60%-70%+ WATCH TIME For Up To 15 Minutes] [NON DROP]', '-', 1000, 25000, 38777.777777778, 'Active', 455, 'SPETRMEDIA-S2'),
(173, 456, 'YTVH', 'Youtube Views HR 5 [100% REAL] [95%+ RETENTION Up To 60 Minutes] [Lifetime Guaranteed]', '-', 1000, 100000, 39888.888888889, 'Active', 456, 'SPETRMEDIA-S2'),
(174, 461, 'YTVT', 'Youtube - USA Views [Speed 10K-30K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 1000000, 21000, 'Active', 461, 'SPETRMEDIA-S2'),
(175, 462, 'YTVT', 'Youtube - INDIA Views [Speed 10K-30K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 1000000, 21000, 'Active', 462, 'SPETRMEDIA-S2'),
(176, 463, 'YTVT', 'Youtube - BRAZIL Views [Speed 20K-35K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 1000000, 21000, 'Active', 463, 'SPETRMEDIA-S2'),
(177, 464, 'YTVT', 'Youtube - SAUDI ARABIA Views [Speed 20K-30K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 10000000, 21000, 'Active', 464, 'SPETRMEDIA-S2'),
(178, 465, 'YTVT', 'Youtube - AUSTRALIA Views [Speed 20K-35K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 100000000, 21000, 'Active', 465, 'SPETRMEDIA-S2'),
(179, 466, 'YTVT', 'Youtube - UK Views [Speed 5K-20K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 10000000, 21000, 'Active', 466, 'SPETRMEDIA-S2'),
(180, 467, 'YTVT', 'Youtube - TURKEY Views [Speed 20K-30K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 1000000, 21000, 'Active', 467, 'SPETRMEDIA-S2'),
(181, 468, 'YTVT', 'Youtube - FRANCE Views [Speed 50K-70K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 10000000, 21000, 'Active', 468, 'SPETRMEDIA-S2'),
(182, 469, 'YTVT', 'Youtube - GERMANY Views [Speed 20K-50K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 10000000, 21000, 'Active', 469, 'SPETRMEDIA-S2'),
(183, 473, 'YTVT', 'Youtube - EGYPT Views [Speed 10K-20K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 10000000, 21000, 'Active', 473, 'SPETRMEDIA-S2'),
(184, 476, 'IGL', 'Instagram Likes SM 6 [MAX 50K] [REAL ASIA & INDIAN USER ACTIVE] [SUPER INSTANT]', '-', 50, 50000, 3666.6666666667, 'Active', 476, 'SPETRMEDIA-S2'),
(185, 477, 'IGL', 'Instagram Likes SM 7 [MAX 25K] [COMPLETE IN 1 MINUTES] [SUPER INSTANT]', '-', 20, 25000, 4333.3333333333, 'Active', 477, 'SPETRMEDIA-S2'),
(186, 478, 'IGL', 'Instagram Likes SM 8 [MAX 70K] [70K LIKES COMPLETE IN FEW MINUTES] [SUPER INSTANT]', '-', 250, 70000, 3222.2222222222, 'Active', 478, 'SPETRMEDIA-S2'),
(187, 479, 'IGL', 'Instagram Likes SM 9 [MAX 100K] [REAL] [ALWAYS INSTANT START]', '-', 20, 100000, 5666.6666666667, 'Active', 479, 'SPETRMEDIA-S2'),
(188, 480, 'YT', 'Youtube Likes SM 4 [REAL NON DROP LIKES] [Speed 100K/Day] [Start 1-6Hours]', '-', 100, 100000, 445444.44444444, 'Active', 480, 'SPETRMEDIA-S2'),
(189, 481, 'YT', 'Youtube DisLikes SM 4 [Speed 50K/Day] [SUPER INSTANT]', '-', 20, 200000, 49888.888888889, 'Active', 481, 'SPETRMEDIA-S2'),
(190, 482, 'YTS', 'Youtube Subscribers TERMURAH 5 [MAX 30K] [REAL] [SPEED 200-500/DAY] [START 0-48 HOURS]', '-', 500, 30000, 41000, 'Active', 482, 'SPETRMEDIA-S2'),
(191, 487, 'YTVT', 'Youtube - RUSSIA Views [Speed 20K-100K/Day] [60-80% RETENTION] [Lifetime Guaranteed] [INSTANT]', '-', 1000, 10000000, 11222.222222222, 'Active', 487, 'SPETRMEDIA-S2'),
(192, 488, 'FB', 'Real Facebook Fanspage Likes SM 5 [0-3 Hours Start] [30 Days Refill] [INSTANT]', '-', 200, 5000, 45444.444444444, 'Active', 488, 'SPETRMEDIA-S2'),
(193, 489, 'YTV', 'Youtube Views LIFETIME GUARANTEED [WorldWide] [Speed 100K-300K/Day]', '-', 100, 5000000, 15666.666666667, 'Active', 489, 'SPETRMEDIA-S2'),
(194, 490, 'IGL', 'Instagram Likes SM 10 [TERMURAH] [REAL & ACTIVE] [INSTANT]', '-', 200, 3000, 1220, 'Active', 490, 'SPETRMEDIA-S2'),
(195, 491, 'IGV', 'Instagram Views SMART 2 [TERMURAH] [SLOW] [INSTANT]', '-', 500, 1000, 1005.5555555556, 'Active', 491, 'SPETRMEDIA-S2'),
(196, 492, 'IGF', 'Instagram Followers PEREMPUAN Luar Negeri [MAX 5K] [0-2 Hours Start]', '-', 350, 5000, 8777.7777777778, 'Active', 492, 'SPETRMEDIA-S2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_cat`
--

CREATE TABLE `service_cat` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `service_cat`
--

INSERT INTO `service_cat` (`id`, `name`, `code`) VALUES
(2, 'Twitter Poll Votes', 'Twitter Poll Votes'),
(7, ' Telegram', ' Telegram'),
(14, 'Youtube Views [HR] [JAM TAYANG]', 'Youtube Views [HR] [JAM TAYANG]'),
(16, 'SoundCloud', 'SoundCloud'),
(17, 'Instagram Likes Indonesia', 'Instagram Likes Indonesia'),
(18, ' Instagram Story / Impressions / Saves', ' Instagram Story / Impressions / Saves'),
(19, ' Instagram TV', ' Instagram TV'),
(20, ' Facebook Video Views / Live Stream', ' Facebook Video Views / Live Stream'),
(23, ' Instagram Live Video', ' Instagram Live Video'),
(25, ' Instagram Auto Likes - 7 Days Subscription', ' Instagram Auto Likes - 7 Days Subscription'),
(31, 'Pinterest', 'Pinterest'),
(35, ' Instagram Followers [Refill] [Guaranteed] [NonDrop]', ' Instagram Followers [Refill] [Guaranteed] [NonDrop]'),
(39, 'Google', 'Google'),
(47, ' Youtube Likes / Comments / Favs...', ' Youtube Likes / Comments / Favs...'),
(50, 'Instagram Followers No Refill/Not Guaranteed', 'Instagram Followers No Refill/Not Guaranteed'),
(52, 'Youtube Views', 'Youtube Views'),
(56, ' Instagram Auto Likes', ' Instagram Auto Likes'),
(60, 'Youtube Subscribers ', 'Youtube Subscribers '),
(62, ' Facebook Post Likes / Comments / Shares / Events', ' Facebook Post Likes / Comments / Shares / Events'),
(64, ' Instagram Auto Comments / Impressions / Saves', ' Instagram Auto Comments / Impressions / Saves'),
(68, 'Facebook Page Likes', 'Facebook Page Likes'),
(72, 'Instagram Views', 'Instagram Views'),
(73, ' Twitter Followers', ' Twitter Followers'),
(80, ' Musical.ly', ' Musical.ly'),
(82, 'Instagram Likes', 'Instagram Likes'),
(86, 'Instagram Followers Indonesia', 'Instagram Followers Indonesia'),
(87, 'Instagram Comments', 'Instagram Comments'),
(90, 'Twitter Retweets', 'Twitter Retweets'),
(92, 'Twitter Views / Impressions / Live / Comments', 'Twitter Views / Impressions / Live / Comments'),
(98, 'Facebook Followers / Friends / Group Members', 'Facebook Followers / Friends / Group Members');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_catt`
--

CREATE TABLE `service_catt` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `code` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `service_catt`
--

INSERT INTO `service_catt` (`id`, `name`, `code`) VALUES
(1, 'Instagram Followers INDONESIA, ASIA, LONDON', 'IGS'),
(2, 'Instagram Followers', 'IGF'),
(3, 'Instagram Likes Indonesia & ASIA', 'IGW'),
(4, 'Instagram Likes', 'IGL'),
(5, 'Instagram Views', 'IGV'),
(6, 'Instagram Live Video', 'IGE'),
(7, 'PROMO INSTAGRAM FOLLOWERS (TERMURAH)', 'PRG'),
(8, 'PROMO (TERMURAH)', 'PRO'),
(9, 'Instagram Followers Wilayah Indonesia', 'IGM'),
(10, 'Instagram TV', 'IGTV'),
(11, 'Instagram Comments', 'IGC'),
(12, 'Instagram Auto Likes + Views', 'IGA'),
(13, 'YouTube Views HR [Menambah Jam Tayang]', 'YTVH'),
(14, 'YouTube Likes, Live Stream, Shares, Dll', 'YT'),
(15, 'Twitter', 'TW'),
(16, 'Facebook', 'FB'),
(17, 'Musical.ly', 'MLY'),
(18, 'SoundCloud', 'SC'),
(19, 'Pinterest', 'PT'),
(20, 'Website', 'WEB'),
(21, 'Telegram', 'TEL'),
(22, 'Google', 'GP'),
(23, 'VK.com', 'VK'),
(24, 'Spotify', 'SPF'),
(25, 'LinkedIn', 'LKN'),
(26, 'YouTube Subscribers', 'YTS'),
(27, 'YouTube Views', 'YTV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `contact` varchar(1000) COLLATE utf8_swedish_ci NOT NULL,
  `level` enum('Developers','Admin','Reseller') COLLATE utf8_swedish_ci NOT NULL,
  `pict` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `name`, `contact`, `level`, `pict`) VALUES
(4, 'Mr. Sp3_Tr', '<a href=\"https://api.whatsapp.com/send?phone=6285893490868\">WHATSAPP</a><br>\r\n<a href=\"https://m.facebook.com/ilham.nax.kindo\">FACEBOOK</a>', 'Developers', 'https://scontent.fcgk1-1.fna.fbcdn.net/v/t1.0-9/fr/cp0/e15/q65/32081325_10211048409717481_8087689530246692864_o.jpg?_nc_cat=0&efg=eyJpIjoidCJ9&oh=1897854e8878b7c7c1f5016db9caf757&oe=5BAAD823');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `status` enum('Pending','Responded','Closed','Waiting') COLLATE utf8_swedish_ci NOT NULL,
  `seen_user` int(1) NOT NULL DEFAULT '1',
  `seen_admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tickets_message`
--

CREATE TABLE `tickets_message` (
  `id` int(10) NOT NULL,
  `ticket_id` int(10) NOT NULL,
  `sender` enum('Member','Admin','Developers') COLLATE utf8_swedish_ci NOT NULL,
  `pengirim` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer_balance`
--

CREATE TABLE `transfer_balance` (
  `id` int(10) NOT NULL,
  `sender` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `receiver` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `quantity` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `transfer_balance`
--

INSERT INTO `transfer_balance` (`id`, `sender`, `receiver`, `quantity`, `date`) VALUES
(1, 'developer1', 'developer1', 10000, '2021-11-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `balance` double NOT NULL,
  `level` enum('Server','Member','Agen','Reseller','Admin','Special Limit','Admin VIP','Developers') COLLATE utf8_swedish_ci NOT NULL,
  `registered` date NOT NULL,
  `status` enum('Active','Suspended') COLLATE utf8_swedish_ci NOT NULL,
  `api_key` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `uplink` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `verif_code` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `balance`, `level`, `registered`, `status`, `api_key`, `uplink`, `verif_code`) VALUES
(123, 'developer1', 'rezkizaan@gmail.com', 'afterli1187', 99999919999, 'Developers', '2018-09-08', 'Active', '5OOsWGKEVhCVHnq3t76e', '', ''),
(1235, 'iyanid21', 'rezkizaan1189@gmail.com', 'iyanid12', 10000, 'Admin', '2018-09-09', 'Active', '2lKrD0sjhzczJiCeZ9yY', 'developer1', ''),
(1617, 'admin1', 'junadi@gmail.com', 'admin1', 100000, 'Admin VIP', '2021-11-02', 'Active', '', '', '1617');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deposits_history`
--
ALTER TABLE `deposits_history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orderss`
--
ALTER TABLE `orderss`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `servicess`
--
ALTER TABLE `servicess`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service_cat`
--
ALTER TABLE `service_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service_catt`
--
ALTER TABLE `service_catt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tickets_message`
--
ALTER TABLE `tickets_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indeks untuk tabel `transfer_balance`
--
ALTER TABLE `transfer_balance`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `deposits_history`
--
ALTER TABLE `deposits_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=657;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `orderss`
--
ALTER TABLE `orderss`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT untuk tabel `servicess`
--
ALTER TABLE `servicess`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tickets_message`
--
ALTER TABLE `tickets_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transfer_balance`
--
ALTER TABLE `transfer_balance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1618;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
