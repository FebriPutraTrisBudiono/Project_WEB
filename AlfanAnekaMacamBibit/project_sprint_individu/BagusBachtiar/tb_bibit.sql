-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 06:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `tb_bibit`
--

CREATE TABLE `tb_bibit` (
  `id_bibit` int(11) NOT NULL,
  `nama_bibit` varchar(20) NOT NULL,
  `harga_bibit` varchar(20) NOT NULL,
  `umur_bibit` tinyint(2) NOT NULL,
  `gbr_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bibit`
--

INSERT INTO `tb_bibit` (`id_bibit`, `nama_bibit`, `harga_bibit`, `umur_bibit`, `gbr_produk`) VALUES
(1, 'Bibit Durian Musang', '10.000', 2, 'unnamed.jpg'),
(2, 'Bibit Rambutan', '8000', 4, 'Rename.jpg'),
(3, 'Bibit Alpukat Menteg', '6000', 8, 'Mentega.jpg'),
(4, 'Bibit Sawo', '10.000', 6, 'sawo.jpg'),
(5, 'Bibit Jeruk', '8000', 4, 'jeruk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bibit`
--
ALTER TABLE `tb_bibit`
  ADD PRIMARY KEY (`id_bibit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
