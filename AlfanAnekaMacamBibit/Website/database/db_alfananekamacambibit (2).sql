-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 03:02 AM
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
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Ahmad Alfanur Rohman', '0822228905619', '', 'Manggisan, Jember'),
('bagus', '827ccb0eea8a706c4c34a16891f84e7b', 'pengguna', 'bagus T', '0822228905619', '', ''),
('dimas', '202cb962ac59075b964b07152d234b70', 'pengguna', '', '08222222222', '', ''),
('fahrel', '202cb962ac59075b964b07152d234b70', 'pengguna', 'Al Fahrelia', '0822222222', '', 'Jember'),
('febript', '202cb962ac59075b964b07152d234b70', 'pengguna', '', '082131916101', '', '');

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
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
