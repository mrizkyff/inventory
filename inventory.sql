-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 02:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_barang`
--

CREATE TABLE IF NOT EXISTS `daftar_barang` (
`id` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `seri` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `spec` text NOT NULL,
  `tgl_perencanaan` varchar(50) NOT NULL,
  `tgl_baru` varchar(50) NOT NULL,
  `tgl_register` varchar(50) NOT NULL,
  `tgl_rusak` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `bagian` varbinary(50) NOT NULL,
  `subBagian` varchar(50) NOT NULL,
  `kodeRegister` varbinary(20) NOT NULL,
  `barCode` varchar(255) NOT NULL,
  `qrCode` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `perbaikan` text NOT NULL,
  `kerusakan` text NOT NULL,
  `upgrade` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_barang`
--

INSERT INTO `daftar_barang` (`id`, `jenis`, `nama`, `merek`, `seri`, `harga`, `jumlah`, `keterangan`, `spec`, `tgl_perencanaan`, `tgl_baru`, `tgl_register`, `tgl_rusak`, `foto`, `bagian`, `subBagian`, `kodeRegister`, `barCode`, `qrCode`, `status`, `perbaikan`, `kerusakan`, `upgrade`) VALUES
(1, 'Komputer', 'Komputer Gaming', 'Asus PC ROG', 'GL553VSK', 45000000, 0, 'komputer untuk desain 3d', 'intel core i9', '2020-02-19 18:27:43', '2020-02-19 18:48:04', '', '', '2230818_d2be3369-9bd6-4676-a92c-6661e51b13333.jpg', '', '', '', '', '', 'Baru', '', '', ''),
(3, 'Laptop', 'MacBook Pro ', 'Apple', 'BSN1877', 25000000, 0, 'laptop untuk PTI', 'macintosh mojave', '2020-02-19 18:54:48', '2020-02-19 18:57:43', '2020-02-20 01:36:54', '2020-02-20 01:21:32', '27671774872.png', 0x54656e676168, 'Direktur Utama', 0x30332e33352e30302e4c33, '03.35.00.L3.png', '03.35.00.L3.png', 'Terdaftar', '; update: ganti pasta; update: ', 'update: keyboard patah', '; update: ram 8gb'),
(4, 'Lain-Lain', 'Meja Belajar Bulat', 'Olympics', '123123', 2500000, 0, 'Meja kerja kantor', 'kayu jati', '2020-02-19 18:56:00', '', '', '', '', '', '', '', '', '', 'Perencanaan', '', '', ''),
(6, 'Komputer', 'iMac 23', 'Apple', '123BSN1KH', 45000000, 0, 'untuk menunjang pekerjaan admin', 'macintosh mjv', '2020-02-19 19:11:28', '2020-02-19 20:01:56', '2020-02-19 20:02:21', '2020-02-20 08:09:28', '07LLQWrr7cxOWl7ebgWvNe7-178.jpg', 0x54696d7572, 'Kamtib', 0x30332e33332e32302e4b36, '03.33.20.K6.png', '03.33.20.K6.png', 'Rusak', '', '; update: mati total', ''),
(10, 'Lain-Lain', 'dinding kaca', 'katja', '12389BNS', 450000, 0, 'kaca pembatas ruangan', 'tebal 30mm', '2020-02-19 19:16:51', '', '', '', '', '', '', '', '', '', 'Perencanaan', '', '', ''),
(11, 'Lain-Lain', 'Keyboard mehcanical', 'Corsair', 'BLSC1899', 1200000, 0, 'untuk pengetikan notulen', 'mechanical blue switch', '2020-02-19 19:17:51', '2020-02-20 08:08:15', '2020-02-23 23:00:51', '2020-02-23 22:47:18', 'keyboard1.jpg', 0x53656c6174616e, 'Perencanaan', 0x30332e33312e30392e4c4c3131, '03.31.09.LL11.png', '03.31.09.LL11.png', 'Terdaftar', '; update:  (2020-02-23 22:47:40->ganti kabel )<br>', ' (2020-02-23 22:41:44->switch tidak bisa )<br> (2020-02-23 22:47:18->kabel putus )<br>', ' (2020-02-23 22:59:36->upgrade switch )<br> (2020-02-23 23:00:51->ganti plate usb )<br>'),
(12, 'Komputer', 'Komputer Buildup Dell', 'Dell', '123123123', 7500000, 0, 'Komputer buildup untuk kospin', 'intel celeron gold', '2020-02-20 11:16:33', '2020-02-20 11:16:39', '2020-02-20 11:46:42', '2020-02-23 22:34:14', 'komputer_built_up2.jpg', 0x54696d7572, 'Direktur Utama', 0x33302e39322e31312e4b4d3132, '30.92.11.KM12.png', '30.92.11.KM12.png', 'Rusak', '; update: ', '; update:  (2020-02-23 22:34:14->tidak ada suara ) <br>', ''),
(13, 'Lain-Lain', 'Jangkrik Elektronik', 'AnyZoo', 'JSK199KRK', 120000, 0, 'jangkrik mainan untuk anak dan orang tua', 'baterai 2x aaa', '2020-02-21 09:10:04', '2020-02-21 09:10:50', '2020-02-23 22:37:37', '2020-02-23 22:37:14', 'jangkrik-5d690a46097f360b4d571444.jpg', 0x4261726174, 'Keuangan', 0x33302e37332e3533302e4c41583133, '30.73.530.LAX13.png', '30.73.530.LAX13.png', 'Terdaftar', '; update: ; update: ', ' (2020-02-23 22:34:14->tidak ada suara ) <br> (2020-02-23 22:37:14->mati )', ''),
(14, 'Laptop', 'Laptop Asus s15', 'Asus', '172820BNSJ', 25000000, 0, 'laptop kerja', 'intel core i7', '2020-02-21 10:17:09', '', '', '', '', '', '', '', '', '', 'Perencanaan', '', '', ''),
(15, 'Laptop', 'Laptop Asus Zenbook', 'Asus', 'ZNB18919', 18500000, 0, 'laptop ultrabook untuk karyawan', 'intel core i9', '2020-02-21 10:18:53', '2020-02-21 10:19:10', '2020-02-21 10:21:59', '2020-02-21 10:21:40', 'laptop2.jpeg', 0x4261726174, 'Admin & Umum', 0x34352e37332e3531362e4c50583135, '45.73.516.LPX15.png', '45.73.516.LPX15.png', 'Terdaftar', '; update: ; update: pembersihan', '; update: mati; update: hang', '; update: tambah ram');

-- --------------------------------------------------------

--
-- Table structure for table `log_sistem`
--

CREATE TABLE IF NOT EXISTS `log_sistem` (
`id` int(11) NOT NULL,
  `kode_brg` int(11) DEFAULT NULL,
  `nama_brg` varchar(50) DEFAULT NULL,
  `kode_user` int(11) DEFAULT NULL,
  `edit_by` varchar(50) DEFAULT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `kerusakan` text,
  `perbaikan` text,
  `upgrade` text
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_sistem`
--

INSERT INTO `log_sistem` (`id`, `kode_brg`, `nama_brg`, `kode_user`, `edit_by`, `activity`, `date`, `kerusakan`, `perbaikan`, `upgrade`) VALUES
(1, 0, 'MacBook Pro ', NULL, '', 'menambahkan item pada perencanaan', '2020-02-12 18:37:54', NULL, NULL, NULL),
(2, 0, 'cekLog', NULL, '', 'menambahkan item pada perencanaan', '2020-02-13 21:28:13', NULL, NULL, NULL),
(3, 0, 'cekLog', NULL, '', 'menambahkan item pada perencanaan', '2020-02-13 21:28:55', NULL, NULL, NULL),
(4, 0, 'Gunting Rambut', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-14 07:51:43', NULL, NULL, NULL),
(5, 0, '', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-14 08:16:25', NULL, NULL, NULL),
(6, 0, '', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-14 08:17:36', NULL, NULL, NULL),
(7, 20, 'log', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-14 08:17:55', NULL, NULL, NULL),
(8, 15, 'MacBook Pro ', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-14 08:18:13', NULL, NULL, NULL),
(9, 20, NULL, NULL, 'user', 'menghapus item pada perencanaan', '2020-02-14 08:19:39', NULL, NULL, NULL),
(10, 18, NULL, NULL, 'user', 'menghapus item pada perencanaan', '2020-02-14 08:48:14', NULL, NULL, NULL),
(11, 0, 'log', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-14 08:51:23', NULL, NULL, NULL),
(12, 21, 'log', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-14 08:51:29', NULL, NULL, NULL),
(13, 20, 'MacBook Pro ', NULL, 'user', 'menambahkan foto pada item', '2020-02-14 09:15:05', NULL, NULL, NULL),
(14, 0, 'Asus S14-430FN', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-14 09:45:59', NULL, NULL, NULL),
(15, 22, 'Asus S14-430FN', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-14 09:46:46', NULL, NULL, NULL),
(16, 22, 'Asus S14-430FN', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-14 09:46:59', NULL, NULL, NULL),
(17, 21, 'Asus S14-430FN', NULL, 'user', 'menambahkan foto pada item', '2020-02-14 09:49:04', NULL, NULL, NULL),
(18, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:27:51', NULL, NULL, NULL),
(19, 12, 'Keyboard Mechanical', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:28:50', NULL, NULL, NULL),
(20, 15, 'MacBook Pro ', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:32:34', NULL, NULL, NULL),
(21, 15, 'MacBook Pro ', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:36:27', NULL, NULL, NULL),
(22, 11, 'Laptop Ultrabook', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:38:17', NULL, NULL, NULL),
(23, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:39:09', NULL, NULL, NULL),
(24, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:39:35', NULL, NULL, NULL),
(25, 13, 'iPhone 11', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:40:42', NULL, NULL, NULL),
(26, 13, 'iPhone 11', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:41:03', NULL, NULL, NULL),
(27, 13, 'iPhone 11', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:41:41', NULL, NULL, NULL),
(28, 13, 'iPhone 11', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:42:16', NULL, NULL, NULL),
(29, 13, 'iPhone 11', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:46:08', NULL, NULL, NULL),
(30, 0, 'checking', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-14 15:47:07', NULL, NULL, NULL),
(31, 10, 'checking', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-14 15:47:15', NULL, NULL, NULL),
(32, 22, 'checking', NULL, 'user', 'menambahkan foto pada item', '2020-02-14 15:47:41', NULL, NULL, NULL),
(33, 10, 'checking', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 15:47:52', NULL, NULL, NULL),
(34, 12, 'Keyboard Mechanical', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 16:31:13', NULL, NULL, NULL),
(35, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 16:55:58', NULL, NULL, NULL),
(36, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 16:57:41', NULL, NULL, NULL),
(37, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 16:59:18', NULL, NULL, NULL),
(38, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 17:00:18', NULL, NULL, NULL),
(39, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 17:01:06', NULL, NULL, NULL),
(40, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 17:01:06', NULL, NULL, NULL),
(41, 0, 'Proyektor 4K', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-14 17:03:52', NULL, NULL, NULL),
(42, 11, 'Proyektor 4K', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-14 17:04:02', NULL, NULL, NULL),
(43, 23, 'Proyektor 4K', NULL, 'user', 'menambahkan foto pada item', '2020-02-14 17:04:27', NULL, NULL, NULL),
(44, 11, 'Proyektor 4K', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 17:04:45', NULL, NULL, NULL),
(45, 11, 'Proyektor 4K', NULL, 'user', 'melakukan registrasi pada item', '2020-02-14 17:06:35', NULL, NULL, NULL),
(46, 0, 'MacBook Pro ', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-17 09:56:45', NULL, NULL, NULL),
(47, 10, 'MacBook Pro ', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-17 09:56:52', NULL, NULL, NULL),
(48, 24, 'MacBook Pro ', NULL, 'user', 'menambahkan foto pada item', '2020-02-17 09:58:45', NULL, NULL, NULL),
(49, 10, 'MacBook Pro ', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 09:59:01', NULL, NULL, NULL),
(50, 11, 'Proyektor 4K', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 10:01:21', NULL, NULL, NULL),
(51, 0, 'Epson L3110', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-17 10:04:31', NULL, NULL, NULL),
(52, 11, 'Epson L3110', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-17 10:04:40', NULL, NULL, NULL),
(53, 25, 'Epson L3110', NULL, 'user', 'menambahkan foto pada item', '2020-02-17 10:04:56', NULL, NULL, NULL),
(54, 11, 'Epson L3110', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 10:05:07', NULL, NULL, NULL),
(55, 0, 'Monitor 24"', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-17 10:07:47', NULL, NULL, NULL),
(56, 12, 'Monitor 24"', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-17 10:08:01', NULL, NULL, NULL),
(57, 26, 'Monitor 24', NULL, 'user', 'menambahkan foto pada item', '2020-02-17 10:08:19', NULL, NULL, NULL),
(58, 12, 'Monitor 24"', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 10:08:31', NULL, NULL, NULL),
(59, 0, 'Uninterupted Power Supply', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-17 10:23:45', NULL, NULL, NULL),
(60, 13, 'Uninterupted Power Supply', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-17 10:25:25', NULL, NULL, NULL),
(61, 27, 'Uninterupted Power Supply', NULL, 'user', 'menambahkan foto pada item', '2020-02-17 10:25:42', NULL, NULL, NULL),
(62, 0, 'ups', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-17 11:00:52', NULL, NULL, NULL),
(63, 14, 'ups', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-17 11:01:00', NULL, NULL, NULL),
(64, 28, 'ups', NULL, 'user', 'menambahkan foto pada item', '2020-02-17 11:01:16', NULL, NULL, NULL),
(65, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 11:21:39', NULL, NULL, NULL),
(66, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 11:25:41', NULL, NULL, NULL),
(67, 22, 'Asus S14-430FN', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 11:26:36', NULL, NULL, NULL),
(68, 0, 'PC Kerja', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-17 11:28:04', NULL, NULL, NULL),
(69, 15, 'PC Kerja', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-17 11:28:11', NULL, NULL, NULL),
(70, 29, 'PC Kerja', NULL, 'user', 'menambahkan foto pada item', '2020-02-17 11:28:40', NULL, NULL, NULL),
(71, 15, 'PC Kerja', NULL, 'user', 'melakukan registrasi pada item', '2020-02-17 11:28:47', NULL, NULL, NULL),
(72, 0, 'iMac 23', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-18 09:09:56', NULL, NULL, NULL),
(73, 10, 'iMac 23', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-18 09:10:04', NULL, NULL, NULL),
(74, 22, 'iMac 23', NULL, 'user', 'menambahkan foto pada item', '2020-02-18 09:10:21', NULL, NULL, NULL),
(75, 10, 'iMac 23', NULL, 'user', 'melakukan registrasi pada item', '2020-02-18 09:10:35', NULL, NULL, NULL),
(76, 10, 'iMac 23', NULL, NULL, 'melakukan pemindahan pada item', '2020-02-18 09:15:43', NULL, NULL, NULL),
(77, 0, 'MacBook Pro ', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-18 11:07:29', NULL, NULL, NULL),
(78, 11, 'MacBook Pro ', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-18 11:07:39', NULL, NULL, NULL),
(79, 23, 'MacBook Pro ', NULL, 'user', 'menambahkan foto pada item', '2020-02-18 11:08:31', NULL, NULL, NULL),
(80, 11, 'MacBook Pro ', NULL, 'user', 'melakukan registrasi pada item', '2020-02-18 11:08:41', NULL, NULL, NULL),
(81, 11, 'MacBook Pro ', NULL, NULL, 'melakukan pemindahan pada item', '2020-02-18 16:45:40', NULL, NULL, NULL),
(82, 11, 'MacBook Pro ', NULL, NULL, 'melakukan pemindahan pada item', '2020-02-18 16:47:16', NULL, NULL, NULL),
(83, 10, 'iMac 23', NULL, NULL, 'melakukan pemindahan pada item', '2020-02-18 16:59:46', NULL, NULL, NULL),
(84, 10, 'iMac 23', NULL, NULL, 'melakukan pemindahan pada item', '2020-02-18 17:00:19', NULL, NULL, NULL),
(85, 10, 'iMac 23', NULL, NULL, 'melakukan pemindahan pada item', '2020-02-18 17:00:41', NULL, NULL, NULL),
(86, 11, 'MacBook Pro ', NULL, NULL, 'melakukan pemindahan pada item', '2020-02-18 17:07:49', NULL, NULL, NULL),
(87, 10, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:11:24', NULL, NULL, NULL),
(88, 11, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:12:58', NULL, NULL, NULL),
(89, 10, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:13:40', NULL, NULL, NULL),
(90, 10, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:13:49', NULL, NULL, NULL),
(91, 10, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:14:35', NULL, NULL, NULL),
(92, 11, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:16:49', NULL, NULL, NULL),
(93, 10, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:17:20', NULL, NULL, NULL),
(94, 10, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:18:02', NULL, NULL, NULL),
(95, 10, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-18 17:18:21', NULL, NULL, NULL),
(96, 0, 'Mouse Wireless', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-18 22:59:35', NULL, NULL, NULL),
(97, 10, 'Mouse Wireless', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-18 22:59:54', NULL, NULL, NULL),
(98, 0, 'Laptop Ultrabook', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-18 23:01:30', NULL, NULL, NULL),
(99, 11, 'Laptop Ultrabook', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-18 23:01:46', NULL, NULL, NULL),
(100, 0, 'printer', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-18 23:05:17', NULL, NULL, NULL),
(101, 0, 'Ups stavol', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-18 23:10:42', NULL, NULL, NULL),
(102, 13, 'Ups stavol', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-18 23:11:13', NULL, NULL, NULL),
(103, 13, 'Ups stavol', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-18 23:11:42', NULL, NULL, NULL),
(104, 22, 'Ups stavol', NULL, 'user', 'menambahkan foto pada item', '2020-02-18 23:12:05', NULL, NULL, NULL),
(105, 13, 'Ups stavol', NULL, 'user', 'melakukan registrasi pada item', '2020-02-18 23:13:33', NULL, NULL, NULL),
(106, 0, 'PC Built Up', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 08:30:51', NULL, NULL, NULL),
(107, 0, 'PC Built Up', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 08:31:42', NULL, NULL, NULL),
(108, 0, 'PC Built UP', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 08:34:49', NULL, NULL, NULL),
(109, 10, 'Mouse Wireless', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-19 08:35:00', NULL, NULL, NULL),
(110, 11, 'Laptop Ultrabook', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-19 08:35:06', NULL, NULL, NULL),
(111, 13, 'PC Built UP', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-19 08:35:46', NULL, NULL, NULL),
(112, 22, 'PC Built UP', NULL, 'user', 'menambahkan foto pada item', '2020-02-19 08:36:05', NULL, NULL, NULL),
(113, 13, 'PC Built UP', NULL, 'user', 'melakukan registrasi pada item', '2020-02-19 08:38:00', NULL, NULL, NULL),
(114, 0, 'Laptop gaming', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 17:58:19', NULL, NULL, NULL),
(115, 1, 'Komputer Gaming', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-19 18:25:00', NULL, NULL, NULL),
(116, 1, 'Komputer Gaming', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-19 18:26:55', NULL, NULL, NULL),
(117, 1, 'Komputer Gaming', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-19 18:27:43', NULL, NULL, NULL),
(118, 0, 'Meja Belajar', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 18:31:27', NULL, NULL, NULL),
(119, 2, 'Meja Belajar', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-19 18:31:46', NULL, NULL, NULL),
(120, 2, 'Meja Belajar', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-19 18:31:52', NULL, NULL, NULL),
(121, 1, 'Komputer Gaming', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-19 18:40:22', NULL, NULL, NULL),
(122, 1, 'Komputer Gaming', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-19 18:45:24', NULL, NULL, NULL),
(123, 1, 'Komputer Gaming', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-19 18:48:04', NULL, NULL, NULL),
(124, 0, 'MacBook Pro ', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 18:54:48', NULL, NULL, NULL),
(125, 0, 'Meja Belajar ', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 18:55:24', NULL, NULL, NULL),
(126, 4, 'Meja Belajar Bulat', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-19 18:56:00', NULL, NULL, NULL),
(127, 0, 'log', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 18:57:03', NULL, NULL, NULL),
(128, 5, 'log', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-19 18:57:34', NULL, NULL, NULL),
(129, 3, 'MacBook Pro ', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-19 18:57:43', NULL, NULL, NULL),
(130, 0, 'Piring Kaca', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 19:07:58', NULL, NULL, NULL),
(131, 0, 'Piring Kaca', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 19:08:05', NULL, NULL, NULL),
(132, 7, 'Piring Kaca', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-19 19:10:49', NULL, NULL, NULL),
(133, 6, 'iMac 23', NULL, 'user', 'mengedit item pada perencanaan', '2020-02-19 19:11:28', NULL, NULL, NULL),
(134, 0, 'Dinding Kaca', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 19:12:17', NULL, NULL, NULL),
(135, 8, 'Dinding Kaca', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-19 19:12:44', NULL, NULL, NULL),
(136, 0, 'dinding kaca', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 19:13:16', NULL, NULL, NULL),
(137, 0, 'dinding kaca', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 19:16:51', NULL, NULL, NULL),
(138, 9, 'dinding kaca', NULL, 'user', 'menghapus item pada perencanaan', '2020-02-19 19:17:09', NULL, NULL, NULL),
(139, 0, 'Keyboard mehcanical', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-19 19:17:51', NULL, NULL, NULL),
(140, 3, 'MacBook Pro ', NULL, 'user', 'menambahkan foto pada item', '2020-02-19 19:30:57', NULL, NULL, NULL),
(141, 1, 'Komputer Gaming', NULL, 'user', 'menambahkan foto pada item', '2020-02-19 19:32:47', NULL, NULL, NULL),
(142, NULL, NULL, NULL, 'user', 'melakukan registrasi pada item', '2020-02-19 19:54:53', NULL, NULL, NULL),
(143, 3, NULL, NULL, 'user', 'melakukan registrasi pada item', '2020-02-19 19:56:53', NULL, NULL, NULL),
(144, 3, 'MacBook Pro ', NULL, 'user', 'melakukan registrasi pada item', '2020-02-19 20:01:13', NULL, NULL, NULL),
(145, 6, 'iMac 23', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-19 20:01:56', NULL, NULL, NULL),
(146, 6, 'iMac 23', NULL, 'user', 'menambahkan foto pada item', '2020-02-19 20:02:10', NULL, NULL, NULL),
(147, 6, 'iMac 23', NULL, 'user', 'melakukan registrasi pada item', '2020-02-19 20:02:21', NULL, NULL, NULL),
(148, 6, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-19 20:26:30', NULL, NULL, NULL),
(149, 3, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-19 20:28:07', NULL, NULL, NULL),
(150, 3, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-19 20:58:33', 'hang', NULL, NULL),
(151, 3, 'MacBook Pro ', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-20 00:50:19', NULL, 'layar flicker', NULL),
(152, 3, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 00:52:04', 'layar flicker', NULL, NULL),
(153, 3, 'MacBook Pro ', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-20 00:52:18', NULL, 'ganti ram', NULL),
(154, 3, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 00:53:06', 'mati', NULL, NULL),
(155, 3, 'MacBook Pro ', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-20 01:10:17', NULL, '', NULL),
(156, 3, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 01:13:19', 'null; update: trackpad macet', NULL, NULL),
(157, 3, 'MacBook Pro ', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-20 01:19:37', NULL, '; update: ganti pasta', NULL),
(158, 3, 'MacBook Pro ', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 01:21:32', 'update: keyboard patah', NULL, NULL),
(159, 3, 'MacBook Pro ', NULL, 'user', 'menandai barang telah diupgrade pada item', '2020-02-20 01:36:49', NULL, NULL, '; update: ram 8gb'),
(160, 3, 'MacBook Pro ', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-20 01:36:54', NULL, '; update: ganti pasta; update: ', NULL),
(161, 11, 'Keyboard mehcanical', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-20 08:08:15', NULL, NULL, NULL),
(162, 11, 'Keyboard mehcanical', NULL, 'user', 'menambahkan foto pada item', '2020-02-20 08:08:31', NULL, NULL, NULL),
(163, 11, 'Keyboard mehcanical', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 08:08:41', NULL, NULL, NULL),
(164, 6, 'iMac 23', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 08:09:28', '; update: mati total', NULL, NULL),
(165, 0, 'Komputer Buildup Dell', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-20 11:16:33', NULL, NULL, NULL),
(166, 12, 'Komputer Buildup Dell', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-20 11:16:39', NULL, NULL, NULL),
(167, 12, 'Komputer Buildup Dell', NULL, 'user', 'menambahkan foto pada item', '2020-02-20 11:16:52', NULL, NULL, NULL),
(168, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:17:04', NULL, NULL, NULL),
(169, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:17:07', NULL, NULL, NULL),
(170, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:17:08', NULL, NULL, NULL),
(171, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:20:10', NULL, NULL, NULL),
(172, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:29:30', NULL, NULL, NULL),
(173, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:36:16', NULL, NULL, NULL),
(174, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:36:25', NULL, NULL, NULL),
(175, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:36:30', NULL, NULL, NULL),
(176, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:40:17', NULL, NULL, NULL),
(177, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:42:08', NULL, NULL, NULL),
(178, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan registrasi pada item', '2020-02-20 11:43:02', NULL, NULL, NULL),
(179, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 11:45:13', NULL, NULL, NULL),
(180, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 11:45:15', NULL, NULL, NULL),
(181, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 11:46:19', NULL, NULL, NULL),
(182, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-20 11:46:33', '; update: ', NULL, NULL),
(183, 12, 'Komputer Buildup Dell', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-20 11:46:42', NULL, '; update: ', NULL),
(184, 0, 'Jangkrik Elektronik', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-21 09:10:04', NULL, NULL, NULL),
(185, 13, 'Jangkrik Elektronik', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-21 09:10:50', NULL, NULL, NULL),
(186, 13, 'Jangkrik Elektronik', NULL, 'user', 'menambahkan foto pada item', '2020-02-21 09:11:03', NULL, NULL, NULL),
(187, 13, 'Jangkrik Elektronik', NULL, 'user', 'melakukan registrasi pada item', '2020-02-21 09:11:27', NULL, NULL, NULL),
(188, 0, 'Laptop Asus s15', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-21 10:17:09', NULL, NULL, NULL),
(189, 0, 'Laptop Asus Zenbook', NULL, 'user', 'menambahkan item pada perencanaan', '2020-02-21 10:18:53', NULL, NULL, NULL),
(190, 15, 'Laptop Asus Zenbook', NULL, 'user', 'mengkonfirmasi item pada perencanaan', '2020-02-21 10:19:10', NULL, NULL, NULL),
(191, 15, 'Laptop Asus Zenbook', NULL, 'user', 'menambahkan foto pada item', '2020-02-21 10:19:29', NULL, NULL, NULL),
(192, 15, 'Laptop Asus Zenbook', NULL, 'user', 'melakukan registrasi pada item', '2020-02-21 10:19:48', NULL, NULL, NULL),
(193, 15, 'Laptop Asus Zenbook', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-21 10:20:16', '; update: mati', NULL, NULL),
(194, 15, 'Laptop Asus Zenbook', NULL, 'user', 'menandai barang telah diupgrade pada item', '2020-02-21 10:20:48', NULL, NULL, '; update: tambah ram'),
(195, 15, 'Laptop Asus Zenbook', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-21 10:20:54', NULL, '; update: ', NULL),
(196, 15, 'Laptop Asus Zenbook', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-21 10:20:54', NULL, '; update: ', NULL),
(197, 15, 'Laptop Asus Zenbook', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-21 10:21:40', '; update: mati; update: hang', NULL, NULL),
(198, 15, 'Laptop Asus Zenbook', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-21 10:21:40', '; update: mati; update: hang', NULL, NULL),
(199, 15, 'Laptop Asus Zenbook', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-21 10:21:59', NULL, '; update: ; update: pembersihan', NULL),
(200, 12, 'Komputer Buildup Dell', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-23 22:34:14', '; update:  (2020-02-23 22:34:14->tidak ada suara )', NULL, NULL),
(201, 13, 'Jangkrik Elektronik', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-23 22:34:14', ' (2020-02-23 22:34:14->tidak ada suara )', NULL, NULL),
(202, 13, 'Jangkrik Elektronik', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-23 22:36:52', NULL, '; update: ', NULL),
(203, 13, 'Jangkrik Elektronik', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-23 22:37:14', ' (2020-02-23 22:34:14->tidak ada suara ) (2020-02-23 22:37:14->mati )', NULL, NULL),
(204, 13, 'Jangkrik Elektronik', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-23 22:37:37', NULL, '; update: ; update: ', NULL),
(205, 11, 'Keyboard mehcanical', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-23 22:41:44', ' (2020-02-23 22:41:44->switch tidak bisa )<br>', NULL, NULL),
(206, 11, 'Keyboard mehcanical', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-23 22:42:04', NULL, '; update: ', NULL),
(207, 11, 'Keyboard mehcanical', NULL, 'user', 'melakukan pemindahan pada item', '2020-02-23 22:47:18', ' (2020-02-23 22:41:44->switch tidak bisa )<br> (2020-02-23 22:47:18->kabel putus )<br>', NULL, NULL),
(208, 11, 'Keyboard mehcanical', NULL, 'user', 'menandai barang telah diperbaiki pada item', '2020-02-23 22:47:40', NULL, '; update:  (2020-02-23 22:47:40->ganti kabel )<br>', NULL),
(209, 11, 'Keyboard mehcanical', NULL, 'user', 'menandai barang telah diupgrade pada item', '2020-02-23 22:56:50', NULL, NULL, ' (2020-02-23 22:56:50->; update: [object HTMLTextAreaElement] )<br>'),
(210, 11, 'Keyboard mehcanical', NULL, 'user', 'menandai barang telah diupgrade pada item', '2020-02-23 22:59:36', NULL, NULL, ' (2020-02-23 22:59:36->upgrade switch )<br>'),
(211, 11, 'Keyboard mehcanical', NULL, 'user', 'menandai barang telah diupgrade pada item', '2020-02-23 23:00:51', NULL, NULL, ' (2020-02-23 22:59:36->upgrade switch )<br> (2020-02-23 23:00:51->ganti plate usb )<br>');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
`id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `nama`, `nip`, `username`, `password`, `level`, `tanggal`) VALUES
(3, 'MUHAMAD RIZKY FAJAR FEBRIAN', 'A11.2017.10492', '', 'superadmin', 'Super Admin', '2020-02-10 12:02:33'),
(6, 'Gendut', 'A11.2017.10499', '', 'gendut123', 'Admin', '2020-02-11 07:36:52'),
(11, 'Adinda', 'A11.2017.10494', 'dinda', 'dinda123', 'Super Admin', '2020-02-11 07:47:27'),
(15, 'user', 'user', 'user', 'user123', 'Admin', '2020-02-11 11:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `setting_bagian`
--

CREATE TABLE IF NOT EXISTS `setting_bagian` (
`id` int(11) NOT NULL,
  `tengah` varchar(5) DEFAULT NULL,
  `timur` varchar(5) DEFAULT NULL,
  `barat` varchar(5) DEFAULT NULL,
  `selatan` varchar(5) DEFAULT NULL,
  `utara` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_bagian`
--

INSERT INTO `setting_bagian` (`id`, `tengah`, `timur`, `barat`, `selatan`, `utara`) VALUES
(1, '71', '72', '73', '74', '75');

-- --------------------------------------------------------

--
-- Table structure for table `setting_barcode`
--

CREATE TABLE IF NOT EXISTS `setting_barcode` (
`id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `ket1` varchar(255) DEFAULT NULL,
  `ket2` varchar(255) DEFAULT NULL,
  `ket3` varchar(255) DEFAULT NULL,
  `ket4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_barcode`
--

INSERT INTO `setting_barcode` (`id`, `judul`, `ket1`, `ket2`, `ket3`, `ket4`) VALUES
(1, 'Barcode Inventaris Barang PDAM', 'jenis', 'nama', 'kodeRegister', 'tgl_register');

-- --------------------------------------------------------

--
-- Table structure for table `setting_jenis`
--

CREATE TABLE IF NOT EXISTS `setting_jenis` (
`id` int(11) NOT NULL,
  `gps` varchar(5) DEFAULT NULL,
  `komputer` varchar(5) DEFAULT NULL,
  `laptop` varchar(5) DEFAULT NULL,
  `monitor` varchar(5) DEFAULT NULL,
  `printer` varchar(5) DEFAULT NULL,
  `proyektor` varchar(5) DEFAULT NULL,
  `scanner` varchar(5) DEFAULT NULL,
  `ups` varchar(5) DEFAULT NULL,
  `lain` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_jenis`
--

INSERT INTO `setting_jenis` (`id`, `gps`, `komputer`, `laptop`, `monitor`, `printer`, `proyektor`, `scanner`, `ups`, `lain`) VALUES
(1, 'GPX', 'KMX', 'LPX', 'MNX', 'PTX', 'PRX', 'SCX', 'UPX', 'LAX');

-- --------------------------------------------------------

--
-- Table structure for table `setting_primary`
--

CREATE TABLE IF NOT EXISTS `setting_primary` (
`id` int(11) NOT NULL,
  `primary` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_primary`
--

INSERT INTO `setting_primary` (`id`, `primary`) VALUES
(1, '45');

-- --------------------------------------------------------

--
-- Table structure for table `setting_qr`
--

CREATE TABLE IF NOT EXISTS `setting_qr` (
`id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `ket1` varchar(255) DEFAULT NULL,
  `ket2` varchar(255) DEFAULT NULL,
  `ket3` varchar(255) DEFAULT NULL,
  `ket4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_qr`
--

INSERT INTO `setting_qr` (`id`, `judul`, `ket1`, `ket2`, `ket3`, `ket4`) VALUES
(1, 'Kode Inventaris Barang', 'jenis', 'nama', 'kodeRegister', 'tgl_register');

-- --------------------------------------------------------

--
-- Table structure for table `setting_subbag`
--

CREATE TABLE IF NOT EXISTS `setting_subbag` (
`id` int(11) NOT NULL,
  `dirut` varchar(5) DEFAULT NULL,
  `dirum` varchar(5) DEFAULT NULL,
  `dirtek` varchar(5) DEFAULT NULL,
  `kacab` varchar(5) DEFAULT NULL,
  `kabag` varchar(5) DEFAULT NULL,
  `admin` varchar(5) DEFAULT NULL,
  `pti` varchar(5) DEFAULT NULL,
  `teknik` varchar(5) DEFAULT NULL,
  `hublang` varchar(5) DEFAULT NULL,
  `perencanaan` varchar(5) DEFAULT NULL,
  `asset` varchar(5) DEFAULT NULL,
  `penertiban` varchar(5) DEFAULT NULL,
  `pptka` varchar(5) DEFAULT NULL,
  `server` varchar(5) DEFAULT NULL,
  `umum` varchar(5) DEFAULT NULL,
  `qc` varchar(5) DEFAULT NULL,
  `lab` varchar(5) DEFAULT NULL,
  `poli` varchar(5) DEFAULT NULL,
  `humas` varchar(5) DEFAULT NULL,
  `keuangan` varchar(5) DEFAULT NULL,
  `kamtib` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_subbag`
--

INSERT INTO `setting_subbag` (`id`, `dirut`, `dirum`, `dirtek`, `kacab`, `kabag`, `admin`, `pti`, `teknik`, `hublang`, `perencanaan`, `asset`, `penertiban`, `pptka`, `server`, `umum`, `qc`, `lab`, `poli`, `humas`, `keuangan`, `kamtib`) VALUES
(1, '511', '512', '513', '514', '515', '516', '517', '518', '519', '520', '521', '522', '523', '524', '525', '526', '527', '528', '529', '530', '531');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_sistem`
--
ALTER TABLE `log_sistem`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_bagian`
--
ALTER TABLE `setting_bagian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_barcode`
--
ALTER TABLE `setting_barcode`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_jenis`
--
ALTER TABLE `setting_jenis`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_primary`
--
ALTER TABLE `setting_primary`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_qr`
--
ALTER TABLE `setting_qr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_subbag`
--
ALTER TABLE `setting_subbag`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `log_sistem`
--
ALTER TABLE `log_sistem`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `setting_bagian`
--
ALTER TABLE `setting_bagian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_barcode`
--
ALTER TABLE `setting_barcode`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_jenis`
--
ALTER TABLE `setting_jenis`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_primary`
--
ALTER TABLE `setting_primary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_qr`
--
ALTER TABLE `setting_qr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_subbag`
--
ALTER TABLE `setting_subbag`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
