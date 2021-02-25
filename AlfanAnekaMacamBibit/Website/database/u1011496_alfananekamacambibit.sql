-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2021 at 07:41 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1011496_alfananekamacambibit`
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
  `harga_partai` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgldibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama_barang`, `jenis_barang`, `stok_barang`, `umur`, `foto_barang`, `harga`, `harga_partai`, `deskripsi`, `tgldibuat`) VALUES
(5, 'Bibit Nangka', 'Bibit', 200, '6 bulan', '600853b00a1d2.jpg', '6000', 5000, 'Buah segar', '2021-01-03 04:59:12'),
(7, 'Bibit salak', 'Bibit', 55, '3 bulan', 'salak.jpg', '7000', 6000, 'tes', '2021-01-03 04:59:12'),
(9, 'Bibit Rambutan', 'Bibit', 90, '8 bulan', 'rambutan.jpg', '8000', 6000, 'tes', '2021-01-03 04:59:12'),
(12, 'Bibit semangka', 'Bibit', 100, '10 bulan', 'semangka.jpg', '8000', 6000, 'tes', '2021-01-03 04:59:12'),
(13, 'Bibit nanas', 'Bibit', 0, '10 bulan', '6008541b478dd.jpg', '8000', 6000, 'sada', '2021-01-10 05:04:10'),
(14, 'Bibit sawo', 'Bibit', 1000, '3 bulan', 'sawo.jpg', '7000', 6000, 'sada', '2021-01-10 05:09:25'),
(15, 'bibit jambu', 'bibit', 100, '4 bulan', 'jambu.jpg', '6000', 5000, 'sas', '2021-01-10 05:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tglorder` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'Cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idcart`, `orderid`, `username`, `tglorder`, `status`) VALUES
(20, '16mjTQVqhD8Eo', 'admin', '2020-12-30 07:55:43', 'Cart'),
(21, '16ff3tWDAkotU', 'febript', '2020-12-30 12:26:34', 'Payment'),
(22, '16UpoZHn5meDw', 'dimas', '2020-12-30 12:33:06', 'Payment'),
(23, '16F6BSjJCVl2Q', 'fahrel', '2021-01-08 12:45:53', 'Payment'),
(24, '167FRCA6bXzVw', 'febript', '2021-01-11 12:41:09', 'Payment'),
(25, '16fDpvle/mdm6', 'febript', '2021-01-11 12:41:56', 'Payment'),
(26, '16jbI4c6KJScE', 'febript', '2021-01-11 12:42:55', 'Payment'),
(27, '16DYK49IFIgdM', 'febript', '2021-01-11 12:43:04', 'Payment'),
(28, '16s2Z4ddeVohs', 'febript', '2021-01-11 13:12:20', 'Payment'),
(29, '16zQmkXFGc6AA', 'febript', '2021-01-11 13:17:05', 'Payment'),
(30, '16Nj9PS13AAcM', 'febript', '2021-01-12 04:07:12', 'Payment'),
(31, '16rYGdcTSrGLA', 'febript', '2021-01-12 04:31:47', 'Payment'),
(32, '16VTfD7z9FmWw', 'febript', '2021-01-12 04:32:25', 'Payment'),
(33, '16UXFGQlRSp6g', 'febript', '2021-01-12 04:43:50', 'Payment'),
(34, '16f7leW4lLXPU', 'bagus', '2021-01-26 11:00:20', 'Cart'),
(35, '16UdcS5RlZMQU', 'prima', '2021-01-27 06:43:19', 'Payment'),
(36, '16bldTbdCcbR.', 'prima', '2021-01-27 06:45:56', 'Payment'),
(37, '16vJplsVRd2N2', 'febript', '2021-01-28 03:41:18', 'Payment'),
(38, '164.lAOvy.XDk', 'dimas', '2021-01-28 06:08:58', 'Payment'),
(39, '16GqMQbwIOjq.', 'abril', '2021-01-28 06:30:06', 'Payment'),
(41, '16MDYpe2p6J1I', 'febript', '2021-02-11 04:31:17', 'Payment'),
(42, '16uftygz5apyo', 'febript', '2021-02-14 00:11:52', 'Payment'),
(43, '16guXXPIJyJ72', 'febript', '2021-02-14 12:34:01', 'Payment');

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
(38, '16ff3tWDAkotU', 12, 5),
(39, '16ff3tWDAkotU', 5, 1),
(40, '16F6BSjJCVl2Q', 5, 2),
(43, '167FRCA6bXzVw', 7, 1),
(44, '16fDpvle/mdm6', 7, 1),
(45, '16jbI4c6KJScE', 9, 1),
(46, '16DYK49IFIgdM', 7, 1),
(47, '16s2Z4ddeVohs', 5, 1),
(48, '16zQmkXFGc6AA', 5, 1),
(49, '16Nj9PS13AAcM', 5, 1),
(50, '16rYGdcTSrGLA', 5, 1),
(51, '16VTfD7z9FmWw', 5, 1),
(52, '16UXFGQlRSp6g', 5, 5),
(55, '16UdcS5RlZMQU', 5, 5),
(56, '16UdcS5RlZMQU', 7, 1),
(57, '16bldTbdCcbR.', 5, 5),
(58, '16bldTbdCcbR.', 7, 1),
(59, '16vJplsVRd2N2', 5, 5),
(60, '16F6BSjJCVl2Q', 14, 1),
(61, '16f7leW4lLXPU', 14, 1),
(63, '16f7leW4lLXPU', 5, 1),
(64, '164.lAOvy.XDk', 13, 200),
(65, '16mjTQVqhD8Eo', 15, 1),
(66, '16GqMQbwIOjq.', 14, 1),
(67, '16GqMQbwIOjq.', 12, 10),
(68, '16MDYpe2p6J1I', 5, 1),
(69, '16MDYpe2p6J1I', 12, 1),
(70, '16uftygz5apyo', 5, 2),
(71, '16guXXPIJyJ72', 5, 1),
(72, '16guXXPIJyJ72', 12, 1),
(73, '16guXXPIJyJ72', 14, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idhistory` int(11) NOT NULL,
  `waktu` varchar(75) DEFAULT NULL,
  `jenis_barang` varchar(45) DEFAULT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `kegiatan` longtext DEFAULT NULL
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
(112, '03/01/2021 11:51:47', 'Bibit mangga', 'Bibit', 'Mengurangi stok barang Bibit mangga berjulmah 100 sebanyak 50 sehingga stok barang Bibit mangga menjadi 50'),
(113, '07/01/2021 05:24:36', 'Bibit Nangka', 'Bibit', 'Mengubah nama barang Bibit Nangka menjadi Bibit Nangka dan mengubah jenis barang Bibit menjadi Bibit'),
(114, '07/01/2021 05:25:35', 'Bibit Rambutan', 'Bibit', 'Mengubah nama barang Bibit Rambutan menjadi Bibit Rambutan dan mengubah jenis barang Bibit menjadi Bibit'),
(115, '07/01/2021 05:29:21', 'Bibit Rambutan', 'Bibit', 'Mengubah nama barang Bibit Rambutan menjadi Bibit Rambutan dan mengubah jenis barang Bibit menjadi Bibit'),
(116, '07/01/2021 05:31:30', 'Bibit mangga', 'Bibit', 'Mengubah nama barang Bibit mangga menjadi Bibit mangga dan mengubah jenis barang Bibit menjadi Bibit'),
(117, '07/01/2021 05:31:58', 'Bibit mangga', 'Bibit', 'Mengubah nama barang Bibit mangga menjadi Bibit salak dan mengubah jenis barang Bibit menjadi Bibit'),
(118, '07/01/2021 05:32:17', 'Bibit semangka', 'Bibit', 'Mengubah nama barang Bibit semangka menjadi Bibit semangka dan mengubah jenis barang Bibit menjadi Bibit'),
(119, '18/01/2021 10:29:49', 'Bibit salak', 'Bibit', 'Menambah stok barang Bibit salak berjulmah 50 sebanyak 5 sehingga stok barang Bibit salak menjadi 55'),
(120, '18/01/2021 11:31:20', '', '', 'Mengubah nama barang  menjadi Bibit Nangka dan mengubah jenis barang  menjadi Bibit'),
(121, '27/01/2021 01:50:31', 'Bibit durian', 'Bibit', 'Meghapus nama barang Bibit durian dengan jenis barang Bibit'),
(122, '27/01/2021 01:51:06', 'Bibit Nangka', 'Bibit', 'Menambah stok barang Bibit Nangka berjulmah 500 sebanyak 100 sehingga stok barang Bibit Nangka menjadi 600'),
(123, '27/01/2021 01:51:20', 'Bibit Nangka', 'Bibit', 'Mengurangi stok barang Bibit Nangka berjulmah 600 sebanyak 400 sehingga stok barang Bibit Nangka menjadi 200'),
(124, '28/01/2021 11:49:30', 'bibit jambu', 'bibit', 'Menambah stok barang bibit jambu berjulmah 0 sebanyak 100 sehingga stok barang bibit jambu menjadi 100'),
(125, '28/01/2021 11:49:37', 'Bibit nanas', 'Bibit', 'Menambah stok barang Bibit nanas berjulmah 0 sebanyak 400 sehingga stok barang Bibit nanas menjadi 400'),
(126, '28/01/2021 11:49:48', 'Bibit semangka', 'Bibit', 'Menambah stok barang Bibit semangka berjulmah 0 sebanyak 50 sehingga stok barang Bibit semangka menjadi 50'),
(127, '28/01/2021 11:49:50', 'Bibit semangka', 'Bibit', 'Menambah stok barang Bibit semangka berjulmah 50 sebanyak 50 sehingga stok barang Bibit semangka menjadi 100'),
(128, '28/01/2021 12:20:49', 'Bibit sawo', 'Bibit', 'Menambah stok barang Bibit sawo berjulmah 600 sebanyak 400 sehingga stok barang Bibit sawo menjadi 1000'),
(129, '28/01/2021 12:21:12', 'Bibit nanas', 'Bibit', 'Menambah stok barang Bibit nanas berjulmah 400 sebanyak 600 sehingga stok barang Bibit nanas menjadi 1000'),
(130, '28/01/2021 01:17:34', 'Bibit nanas', 'Bibit', 'Mengurangi stok barang Bibit nanas berjulmah 1000 sebanyak 1000 sehingga stok barang Bibit nanas menjadi 0'),
(131, '28/01/2021 01:38:50', 'bibit kelengkeng', 'bibit', 'Meghapus nama barang bibit kelengkeng dengan jenis barang bibit'),
(132, '28/01/2021 01:39:23', 'Bibit Rambutan', 'Bibit', 'Menambah stok barang Bibit Rambutan berjulmah 0 sebanyak 100 sehingga stok barang Bibit Rambutan menjadi 100'),
(133, '28/01/2021 01:39:43', 'Bibit Rambutan', 'Bibit', 'Mengurangi stok barang Bibit Rambutan berjulmah 100 sebanyak 10 sehingga stok barang Bibit Rambutan menjadi 90');

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
('abdul', 'e10adc3949ba59abbe56e057f20f883e', 'pengguna', 'abdul', '0812123123123', '', ''),
('abril', '202cb962ac59075b964b07152d234b70', 'pengguna', 'abrilian', '08213', '60125ac81369b.png', 'jember'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Ahmad Alfanur Rohman', '082228905619', '60085ac55dfb6.jpg', 'Manggisan - Jember'),
('bagus', '202cb962ac59075b964b07152d234b70', 'pengguna', 'bagus T', '081249138361', '', 'Jawa timur'),
('dimas', '202cb962ac59075b964b07152d234b70', 'pengguna', 'dimas cr', '081211686202', '', 'jember'),
('fahrel', '202cb962ac59075b964b07152d234b70', 'pengguna', 'Al Fahrelia', '081230192236', '', 'Jember'),
('febript', '202cb962ac59075b964b07152d234b70', 'pengguna', 'Febri Putra Tris Budiono', '082131916101', '600854ede60e2.jpg', 'Tanggul, Jember'),
('nanang', '202cb962ac59075b964b07152d234b70', 'pengguna', 'nanang', '0822', '', 'malang'),
('prima', '202cb962ac59075b964b07152d234b70', 'pengguna', 'prima', '081230232820', '60110c044b9f8.jpg', 'tanggul'),
('radit', '827ccb0eea8a706c4c34a16891f84e7b', 'pengguna', 'raditya', '0821', '6008582f7e547.jpg', 'malang');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `about_us` text DEFAULT NULL,
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
  `highlight7` varchar(50) NOT NULL,
  `banner1` varchar(100) NOT NULL,
  `banner2` varchar(100) NOT NULL,
  `banner3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`about_us`, `business_time`, `nama_facebook`, `whatsapp`, `logo_atas`, `logo_bawah`, `highlight1`, `highlight2`, `highlight3`, `highlight4`, `highlight5`, `highlight6`, `highlight7`, `banner1`, `banner2`, `banner3`) VALUES
('Kami adalah pengusaha bibit dengan harga petani yang tidak dinaungi oleh CV sehingga harga bibit yang kami jual jauh lebih murah dan bibit yang dihasilkan juga berkualitas.', 'Senin - Sabtu', 'AlfanAnekaMacamBibit', '082131916101', '60086d605e44a.png', '60086d605e808.png', 'Promo 20% bibit Durian', 'Promo 50% bibit Salak', 'Promo 30% bibit nangka', 'Promo 20% bibit kelengkeng', 'Promo 20% bibit jeruk', 'Promo 20% bibit mangga', 'Promo 15% bibit manggis', '60086cd1975ac.jpg', '60086cd197ced.jpg', '60086cd197f3f.jpg');

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
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `detailorder`
--
ALTER TABLE `detailorder`
  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

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
