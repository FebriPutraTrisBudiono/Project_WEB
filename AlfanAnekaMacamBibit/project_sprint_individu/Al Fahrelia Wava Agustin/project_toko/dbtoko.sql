-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2020 at 05:30 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbarang`
--

CREATE TABLE `tbbarang` (
  `idbarang` int(5) NOT NULL,
  `kdkat` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `desk` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbbarang`
--

INSERT INTO `tbbarang` (`idbarang`, `kdkat`, `nama`, `harga`, `desk`, `gambar`) VALUES
(1, 7, 'bibit durian', 10000, 'Bahan tahan air, tahan angin, tapi ngga tahan harganya..hehehe', 'bibit-durian-musang-king-kaki-3.jpg'),
(4, 6, 'Ancata Equipment', 320000, 'Bahan tahan air, tahan angin, tapi ngga tahan sama harganya..hehhehe', 'nh500-protect-womens-country-walking-waterproof-parka-khaki.jpg'),
(12, 6, 'Apitek', 200000, 'Good Produk', 'c4a4dc4550a0608c5a2bdf862448373a.jpg'),
(13, 6, 'Jaket Hangat', 120000, 'Good Produk', 'be7864ec1954322df237abbf4b0d5444.jpg'),
(14, 7, 'Jakat Casual', 200000, 'Good Produk', 'jaket_anak_laki_laki_CDG_161.jpg'),
(15, 7, 'Switter', 200000, 'Good Produk', 'infikids_infikids-isk-612-hodies-kasual-jaket-anak-laki-laki_full02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE `tbkategori` (
  `kdkat` int(5) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`kdkat`, `kategori`) VALUES
(6, 'Jaket Pria'),
(7, 'Jaket Anak'),
(8, 'Celana Pria'),
(9, 'Sepatu Gunung'),
(10, 'Sendal');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `username`, `password`, `level`) VALUES
(1, 'admin', '1844156d4166d94387f1a4ad031ca5fa', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(3, 'rudi', '61a89bc95b86835f353105609f664f99', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbarang`
--
ALTER TABLE `tbbarang`
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `kdkat` (`kdkat`);

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
  ADD PRIMARY KEY (`kdkat`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbarang`
--
ALTER TABLE `tbbarang`
  MODIFY `idbarang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbkategori`
--
ALTER TABLE `tbkategori`
  MODIFY `kdkat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbbarang`
--
ALTER TABLE `tbbarang`
  ADD CONSTRAINT `tbbarang_ibfk_1` FOREIGN KEY (`kdkat`) REFERENCES `tbkategori` (`kdkat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
