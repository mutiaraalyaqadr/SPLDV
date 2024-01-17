-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2023 at 03:55 PM
-- Server version: 10.5.21-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathappe_mutia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_contoh`
--

CREATE TABLE `tb_soal_contoh` (
  `no_soal` int(3) NOT NULL,
  `soal` text NOT NULL,
  `pilihan_a` varchar(50) NOT NULL,
  `pilihan_b` varchar(50) NOT NULL,
  `pilihan_c` varchar(50) NOT NULL,
  `pilihan_d` varchar(50) NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `file_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_soal_contoh`
--

INSERT INTO `tb_soal_contoh` (`no_soal`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `kunci`, `file_gambar`) VALUES
(1, '``\r\n', '10x + 15y = Rp 173.000,00', '30x + 10y = Rp 173.000,00', 'beras + gula = Rp 173.000,00', 'Rp 173.000,00 = 30x - 10y', 'B', 'ev1.png'),
(2, '``', '5', '6', '7', '8', 'A', 'ev2.png'),
(3, '``', 'Rp 10.500', 'Rp 12.500', 'Rp 13.000', 'Rp 14.000', 'D', 'ev3.png'),
(4, '``', '8', '14', '24', '28', 'D', 'ev4.png'),
(5, '``', '4x + 5y = Rp 15.000, dan 3x + 4y = Rp 15.000', '4x + 5y = Rp 19.000, dan 3x + 4y = Rp 15.000', '4x + 5y = Rp 15.000, dan 3x + 4y = Rp 19.000', '4x + 5y = Rp 19.000, dan 3x + 4y = Rp 19.000', 'B', 'ev5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_soal_contoh`
--
ALTER TABLE `tb_soal_contoh`
  ADD PRIMARY KEY (`no_soal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
