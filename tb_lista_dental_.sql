-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2019 at 11:59 AM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hdsa1219_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lista_dental_`
--

CREATE TABLE `tb_lista_dental_` (
  `pk_id` int(11) NOT NULL,
  `fk_klijent` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_lista_dental_`
--

INSERT INTO `tb_lista_dental_` (`pk_id`, `fk_klijent`) VALUES
(1, 122509),
(2, 153495),
(3, 22589),
(4, 15310),
(5, 165260),
(6, 35353),
(7, 25275),
(8, 18964),
(9, 9661),
(10, 15581),
(11, 24587),
(12, 116561),
(13, 167214),
(14, 39713),
(15, 121229),
(16, 46149),
(17, 115852),
(18, 22084),
(19, 20835),
(20, 120912),
(21, 20106),
(22, 113066),
(23, 27099),
(24, 37857),
(25, 21962),
(26, 14633),
(27, 6516),
(28, 41297),
(29, 130054),
(30, 145015),
(31, 117544),
(32, 148621),
(33, 10709),
(34, 120517),
(35, 27777),
(36, 167605),
(37, 24907),
(38, 20632),
(39, 25550),
(40, 150363),
(41, 169413),
(42, 15681),
(43, 11879),
(44, 154557),
(45, 30064),
(46, 129880),
(47, 121902),
(48, 121424),
(49, 167943),
(50, 153991);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_lista_dental_`
--
ALTER TABLE `tb_lista_dental_`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_lista_dental_`
--
ALTER TABLE `tb_lista_dental_`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
