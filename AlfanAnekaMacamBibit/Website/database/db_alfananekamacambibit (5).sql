-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 03:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alfananekamacambibit`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `jenis_barang` varchar(45) DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `umur` varchar(10) DEFAULT NULL,
  `foto_barang` varchar(100) DEFAULT NULL,
  `harga` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgldibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama_barang`, `jenis_barang`, `stok_barang`, `umur`, `foto_barang`, `harga`, `deskripsi`, `tgldibuat`) VALUES
(5, 'Bibit Nangka', 'Bibit', 500, '>6 bulan', 'Hukum-Positif-Dakwatuna.jpg', '5000', 'tes1', '2021-01-03 04:59:12'),
(7, 'Bibit mangga', 'Bibit', 50, '<6 bulan', '34710059_76f24fd2-8723-4c9f-b734-bb4bd77b955d_684_684.jpg', '5000', 'tes', '2021-01-03 04:59:12'),
(9, 'Bibit Rambutan', 'Bibit', 0, '<6 bulan', 'rambutan.jpg', '2000', 'tes', '2021-01-03 04:59:12'),
(12, 'Bibit semangka', 'Bibit', 0, '<6 bulan', 'semangka.jpg', '3000', 'tes', '2021-01-03 04:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tglorder` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'Cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idcart`, `orderid`, `username`, `tglorder`, `status`) VALUES
(20, '16mjTQVqhD8Eo', 'admin', '2020-12-30 07:55:43', 'Cart'),
(21, '16ff3tWDAkotU', 'febript', '2020-12-30 12:26:34', 'Cart'),
(22, '16UpoZHn5meDw', 'dimas', '2020-12-30 12:33:06', 'Cart');

-- --------------------------------------------------------

--
-- Table structure for table `detailorder`
--

CREATE TABLE `detailorder` (
  `detailid` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailorder`
--

INSERT INTO `detailorder` (`detailid`, `orderid`, `idbarang`, `qty`) VALUES
(33, '16ff3tWDAkotU', 9, 10),
(34, '16UpoZHn5meDw', 5, 1),
(35, '16ff3tWDAkotU', 7, 1),
(38, '16ff3tWDAkotU', 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idhistory` int(11) NOT NULL,
  `waktu` varchar(75) DEFAULT NULL,
  `jenis_barang` varchar(45) DEFAULT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `kegiatan` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`idhistory`, `waktu`, `jenis_barang`, `nama_barang`, `kegiatan`) VALUES
(1, '21/12/2020 10:39:06', 'Bibit Durian', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit Durian'),
(2, '21/12/2020 10:39:40', 'Bibit Durian', 'Bibit', 'Menambah stok barang Bibit Durian berjulmah 0 sebanyak 500 sehingga stok barang Bibit Durian menjadi 500'),
(3, '21/12/2020 10:39:53', 'Bibit Durian', 'Bibit', 'Mengurangi stok barang Bibit Durian berjulmah 500 sebanyak 200 sehingga stok barang Bibit Durian menjadi 300'),
(4, '22/12/2020 02:25:19', 'Bibit Durian', 'Bibit', 'Menambah stok barang Bibit Durian berjulmah 300 sebanyak 200 sehingga stok barang Bibit Durian menjadi 500'),
(5, '22/12/2020 02:25:26', 'Bibit Durian', 'Bibit', 'Menambah stok barang Bibit Durian berjulmah 500 sebanyak 200 sehingga stok barang Bibit Durian menjadi 700'),
(6, '22/12/2020 05:41:22', 'Bibit salak', 'bibit', 'Memabahkan barang baru jenis bibit dengan nama Bibit salak'),
(7, '22/12/2020 05:43:42', 'Bibit semangka', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit semangka'),
(8, '22/12/2020 05:54:09', 'Bibit nangka', 'bibit', 'Memabahkan barang baru jenis bibit dengan nama Bibit nangka'),
(9, '22/12/2020 05:54:16', 'Bibit nangka', 'bibit', 'Meghapus nama barang Bibit nangka dengan jenis barang bibit'),
(10, '22/12/2020 06:34:11', 'Bibit Nangka', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit Nangka'),
(11, '22/12/2020 06:34:53', 'Pupuk Urea', 'Pupuk', 'Memabahkan barang baru jenis Pupuk dengan nama Pupuk Urea'),
(12, '22/12/2020 06:35:19', 'Pupuk Urea', 'Pupuk', 'Meghapus nama barang Pupuk Urea dengan jenis barang Pupuk'),
(13, '22/12/2020 06:42:59', 'Bibit Durian', 'Bibit', 'Menambah stok barang Bibit Durian berjulmah 700 sebanyak 5000 sehingga stok barang Bibit Durian menjadi 5700'),
(14, '22/12/2020 06:51:15', 'Bibit Durian', 'Bibit', 'Menambah stok barang Bibit Durian berjulmah 5700 sebanyak 200 sehingga stok barang Bibit Durian menjadi 5900'),
(15, '22/12/2020 06:51:22', 'Bibit salak', 'bibit', 'Menambah stok barang Bibit salak berjulmah 0 sebanyak 300 sehingga stok barang Bibit salak menjadi 300'),
(16, '22/12/2020 06:57:56', 'Bibit Durian', 'Bibit', 'Mengurangi stok barang Bibit Durian berjulmah 5900 sebanyak 900 sehingga stok barang Bibit Durian menjadi 5000'),
(17, '22/12/2020 06:58:16', 'Bibit Durian', 'Bibit', 'Menambah stok barang Bibit Durian berjulmah 5000 sebanyak 0 sehingga stok barang Bibit Durian menjadi 5000'),
(18, '22/12/2020 06:58:24', 'Bibit Durian', 'Bibit', 'Mengurangi stok barang Bibit Durian berjulmah 5000 sebanyak 0 sehingga stok barang Bibit Durian menjadi 5000'),
(19, '22/12/2020 06:58:32', 'Bibit Durian', 'Bibit', 'Mengurangi stok barang Bibit Durian berjulmah 5000 sebanyak 0 sehingga stok barang Bibit Durian menjadi 5000'),
(20, '22/12/2020 07:07:50', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian2 dan mengubah jenis barang Bibit menjadi Bibit'),
(21, '22/12/2020 07:07:56', 'Bibit Durian2', 'Bibit', 'Mengubah nama barang Bibit Durian2 menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(22, '22/12/2020 08:52:40', 'Bibit mangga', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit mangga'),
(23, '22/12/2020 09:13:53', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(24, '22/12/2020 09:15:43', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(25, '22/12/2020 09:15:53', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(26, '22/12/2020 09:16:04', 'Bibit semangka', 'Bibit', 'Mengubah nama barang Bibit semangka menjadi Bibit semangka dan mengubah jenis barang Bibit menjadi Bibit'),
(27, '22/12/2020 09:16:08', 'Bibit salak', 'bibit', 'Mengubah nama barang Bibit salak menjadi Bibit salak dan mengubah jenis barang bibit menjadi bibit'),
(28, '22/12/2020 09:16:18', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(29, '22/12/2020 10:17:54', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(30, '22/12/2020 10:18:41', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(31, '22/12/2020 10:26:39', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(32, '22/12/2020 10:41:21', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(33, '22/12/2020 10:41:40', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(34, '22/12/2020 10:43:20', 'Bibit Durian', 'Bibit', 'Mengubah nama barang Bibit Durian menjadi Bibit Durian dan mengubah jenis barang Bibit menjadi Bibit'),
(35, '23/12/2020 12:19:02', 'Bibit salak', 'bibit', 'Mengubah nama barang Bibit salak menjadi Bibit salak dan mengubah jenis barang bibit menjadi bibit'),
(36, '23/12/2020 12:19:59', 'Bibit salak', 'bibit', 'Mengubah nama barang Bibit salak menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(37, '23/12/2020 12:20:29', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(38, '23/12/2020 12:26:09', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(39, '23/12/2020 12:34:25', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(40, '23/12/2020 12:38:52', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(41, '23/12/2020 12:40:17', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(42, '23/12/2020 12:42:55', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(43, '23/12/2020 12:43:01', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(44, '23/12/2020 12:54:02', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(45, '23/12/2020 12:57:02', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(46, '23/12/2020 01:05:37', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(47, '23/12/2020 01:10:02', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(48, '23/12/2020 01:17:30', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(49, '23/12/2020 01:18:17', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(50, '23/12/2020 01:22:21', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(51, '23/12/2020 01:25:07', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(52, '23/12/2020 01:25:52', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(53, '23/12/2020 01:40:47', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(54, '23/12/2020 01:41:05', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(55, '23/12/2020 01:44:36', 'Bibit salak2', 'bibit', 'Mengubah nama barang Bibit salak2 menjadi Bibit salak2 dan mengubah jenis barang bibit menjadi bibit'),
(56, '23/12/2020 01:55:20', 'Bibit rambutan', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit rambutan'),
(57, '23/12/2020 01:55:35', 'Bibit rambutan', 'Bibit', 'Meghapus nama barang Bibit rambutan dengan jenis barang Bibit'),
(58, '23/12/2020 01:55:57', 'Bibit Rambutan', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit Rambutan'),
(59, '23/12/2020 01:56:10', 'Bibit semangka', 'Bibit', 'Mengubah nama barang Bibit semangka menjadi Bibit semangka dan mengubah jenis barang Bibit menjadi Bibit'),
(60, '23/12/2020 01:57:35', 'Bibit Jambu', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit Jambu'),
(61, '23/12/2020 09:41:05', 'Bibit Jambu', 'Bibit', 'Meghapus nama barang Bibit Jambu dengan jenis barang Bibit'),
(62, '23/12/2020 09:42:42', 'Bibit semangka', 'Bibit', 'Meghapus nama barang Bibit semangka dengan jenis barang Bibit'),
(63, '23/12/2020 09:59:33', 'Bibit salak2', 'bibit', 'Meghapus nama barang Bibit salak2 dengan jenis barang bibit'),
(64, '23/12/2020 10:00:35', 'Bibit Durian', 'Bibit', 'Meghapus nama barang Bibit Durian dengan jenis barang Bibit'),
(65, '23/12/2020 10:14:20', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(66, '23/12/2020 08:57:33', 'Bibit semangka', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit semangka'),
(67, '23/12/2020 09:12:00', 'Bibit semangka2', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit semangka2'),
(68, '23/12/2020 09:14:22', 'Bibit semangka2', 'Bibit', 'Meghapus nama barang Bibit semangka2 dengan jenis barang Bibit'),
(69, '23/12/2020 09:14:27', 'Bibit semangka', 'Bibit', 'Meghapus nama barang Bibit semangka dengan jenis barang Bibit'),
(70, '23/12/2020 09:14:55', 'Bibit semangka', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit semangka'),
(71, '23/12/2020 09:19:28', 'Bibit mangga', 'Bibit', 'Mengubah nama barang Bibit mangga menjadi Bibit mangga dan mengubah jenis barang Bibit menjadi Bibit'),
(72, '23/12/2020 09:20:18', 'Bibit Rambutan', 'Bibit', 'Mengubah nama barang Bibit Rambutan menjadi Bibit Rambutan dan mengubah jenis barang Bibit menjadi Bibit'),
(73, '23/12/2020 09:20:39', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(74, '23/12/2020 09:20:56', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(75, '23/12/2020 09:21:21', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(76, '24/12/2020 01:04:53', 'Bibit Rambutan', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit Rambutan'),
(77, '24/12/2020 02:06:13', 'Bibit Salak', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit Salak'),
(78, '24/12/2020 02:07:17', 'Bibit Jambu', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit Jambu'),
(79, '24/12/2020 10:51:43', 'Bibit semangka3', 'Bibit', 'Memabahkan barang baru jenis Bibit dengan nama Bibit semangka3'),
(80, '24/12/2020 11:30:40', 'Bibit Nangka', 'Bibit', 'Menambah stok barang Bibit Nangka berjulmah 0 sebanyak 500 sehingga stok barang Bibit Nangka menjadi 500'),
(81, '24/12/2020 11:51:15', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(82, '24/12/2020 11:51:47', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(83, '24/12/2020 11:54:34', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(84, '24/12/2020 11:54:53', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(85, '28/12/2020 06:00:17', 'Bibit semangka3', 'Bibit', 'Meghapus nama barang Bibit semangka3 dengan jenis barang Bibit'),
(86, '28/12/2020 06:01:11', 'Bibit mangga', 'Bibit', 'Mengubah nama barang Bibit mangga menjadi Bibit mangga dan mengubah jenis barang Bibit menjadi Bibit'),
(87, '28/12/2020 06:02:37', 'Bibit mangga', 'Bibit', 'Mengubah nama barang Bibit mangga menjadi Bibit mangga dan mengubah jenis barang Bibit menjadi Bibit'),
(88, '28/12/2020 06:02:50', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(89, '28/12/2020 06:03:17', 'Bibit Rambutan', 'Bibit', 'Mengubah nama barang Bibit Rambutan menjadi Bibit Rambutan dan mengubah jenis barang Bibit menjadi Bibit'),
(90, '28/12/2020 06:03:51', 'Bibit semangka', 'Bibit', 'Mengubah nama barang Bibit semangka menjadi Bibit semangka dan mengubah jenis barang Bibit menjadi Bibit'),
(91, '28/12/2020 06:03:58', 'Bibit Rambutan', 'Bibit', 'Meghapus nama barang Bibit Rambutan dengan jenis barang Bibit'),
(92, '28/12/2020 06:04:25', 'Bibit Salak', 'Bibit', 'Mengubah nama barang Bibit Salak menjadi Bibit Salak dan mengubah jenis barang Bibit menjadi Bibit'),
(93, '28/12/2020 06:05:01', 'Bibit Jambu', 'Bibit', 'Mengubah nama barang Bibit Jambu menjadi Bibit Jambu dan mengubah jenis barang Bibit menjadi Bibit'),
(94, '03/01/2021 10:08:55', 'Bibit Jambu', 'Bibit', 'Meghapus nama barang Bibit Jambu dengan jenis barang Bibit'),
(95, '03/01/2021 10:11:41', 'Bibit Salak', 'Bibit', 'Meghapus nama barang Bibit Salak dengan jenis barang Bibit'),
(96, '03/01/2021 10:35:52', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(97, '03/01/2021 10:36:15', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(98, '03/01/2021 10:36:28', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(99, '03/01/2021 10:37:23', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(100, '03/01/2021 10:46:23', 'Bibit Jambu', 'Bibit', 'Mengubah nama barang Bibit Jambu menjadi Bibit Jambu dan mengubah jenis barang Bibit menjadi Bibit'),
(101, '03/01/2021 10:46:34', 'Bibit Jambu', 'Bibit', 'Meghapus nama barang Bibit Jambu dengan jenis barang Bibit'),
(102, '03/01/2021 10:51:13', 'lknsdlfc', 'sl;dcmslc', 'Meghapus nama barang lknsdlfc dengan jenis barang sl;dcmslc'),
(103, '03/01/2021 10:56:48', 'dsm cml', 'sldmcsldk', 'Meghapus nama barang dsm cml dengan jenis barang sldmcsldk'),
(104, '03/01/2021 11:13:12', 'kjsdnfck', 'ksdnfk', 'Meghapus nama barang kjsdnfck dengan jenis barang ksdnfk'),
(105, '03/01/2021 11:13:55', 'ksandcak', 'knskdcnadk', 'Meghapus nama barang ksandcak dengan jenis barang knskdcnadk'),
(106, '03/01/2021 11:13:58', 'ksandcak', 'knskdcnadk', 'Meghapus nama barang ksandcak dengan jenis barang knskdcnadk'),
(107, '03/01/2021 11:15:41', 'saxs am', 'askndk', 'Meghapus nama barang saxs am dengan jenis barang askndk'),
(108, '03/01/2021 11:30:46', 'jsbddjds', 'jasbdj', 'Meghapus nama barang jsbddjds dengan jenis barang jasbdj'),
(109, '03/01/2021 11:32:34', 'dsjbaj', 'abskdbsj', 'Meghapus nama barang dsjbaj dengan jenis barang abskdbsj'),
(110, '03/01/2021 11:48:35', 'Bibit mangga', 'Bibit', 'Menambah stok barang Bibit mangga berjulmah 0 sebanyak 200 sehingga stok barang Bibit mangga menjadi 200'),
(111, '03/01/2021 11:51:27', 'Bibit mangga', 'Bibit', 'Mengurangi stok barang Bibit mangga berjulmah 200 sebanyak 100 sehingga stok barang Bibit mangga menjadi 100'),
(112, '03/01/2021 11:51:47', 'Bibit mangga', 'Bibit', 'Mengurangi stok barang Bibit mangga berjulmah 100 sebanyak 50 sehingga stok barang Bibit mangga menjadi 50');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `foto_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `alamat` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `level`, `nama`, `no_telepon`, `foto`, `alamat`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Ahmad Alfanur Rohman', '0822228905619', 'anime-anime-girls-picture-in-picture-karakai-jouzu-no-takagi-san-wallpaper-preview.jpg', 'Manggisan, Jember'),
('bagus', '827ccb0eea8a706c4c34a16891f84e7b', 'pengguna', 'bagus T', '0822228905619', '6736f030f36046b24de35f882ff798ba.png', ''),
('dimas', '202cb962ac59075b964b07152d234b70', 'pengguna', '', '08222222222', '6736f030f36046b24de35f882ff798ba.png', ''),
('fahrel', '202cb962ac59075b964b07152d234b70', 'pengguna', 'Al Fahrelia', '0822222222', '6736f030f36046b24de35f882ff798ba.png', 'Jember'),
('febript', '202cb962ac59075b964b07152d234b70', 'pengguna', 'Febri Putra Tris Budiono', '082131916101', 'foto.jpg', 'Tanggul - Jember'),
('radit', '202cb962ac59075b964b07152d234b70', 'pengguna', 'raditya', '086757576', '6736f030f36046b24de35f882ff798ba.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `about_us` text,
  `business_time` varchar(35) DEFAULT NULL,
  `nama_facebook` varchar(35) DEFAULT NULL,
  `whatsapp` varchar(35) DEFAULT NULL,
  `logo_atas` varchar(100) DEFAULT NULL,
  `logo_bawah` varchar(100) DEFAULT NULL,
  `highlight1` varchar(50) NOT NULL,
  `highlight2` varchar(50) NOT NULL,
  `highlight3` varchar(50) NOT NULL,
  `highlight4` varchar(50) NOT NULL,
  `highlight5` varchar(50) NOT NULL,
  `highlight6` varchar(50) NOT NULL,
  `highlight7` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`about_us`, `business_time`, `nama_facebook`, `whatsapp`, `logo_atas`, `logo_bawah`, `highlight1`, `highlight2`, `highlight3`, `highlight4`, `highlight5`, `highlight6`, `highlight7`) VALUES
('Kami adalah pengusaha bibit yang menjunjung tinggi kejujuran dalam bertransaksi dan keaslian bibit yang dijual, dan juga Kami adalah pengusaha tanpa dinaungi oleh CV sehingga harga bibit yang kami jual jauh lebih murah dan bibit yang dihasilkan juga berkualitas.', 'Senin-Sabtu', 'AlfanAnekaMacamBibit', '082131916101', 'logobaru.png', 'logobaru2.png', 'Promo 20% bibit Durian', 'Promo 50% bibit Salak', 'Promo 30% bibit nangka', 'Promo 20% bibit kelengkeng', 'Promo 20% bibit jeruk', 'Promo 20% bibit mangga', 'Promo 15% bibit manggis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`),
  ADD UNIQUE KEY `orderid` (`orderid`),
  ADD KEY `orderid_2` (`orderid`);

--
-- Indexes for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD PRIMARY KEY (`detailid`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `idproduk` (`idbarang`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`idhistory`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `idbarang` (`idbarang`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `detailorder`
--
ALTER TABLE `detailorder`
  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD CONSTRAINT `detailorder_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailorder_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `cart` (`orderid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
