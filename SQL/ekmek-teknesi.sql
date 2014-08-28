-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2014 at 09:34 ÖS
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ekmek`
--

-- --------------------------------------------------------

--
-- Table structure for table `musteriler`
--

CREATE TABLE IF NOT EXISTS `musteriler` (
  `musteri_id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `musteri_ekmek` int(11) NOT NULL,
  `musteri_su` int(11) NOT NULL,
  `musteri_ekmek_katsayi` int(11) NOT NULL DEFAULT '4',
  `musteri_su_katsayi` int(11) NOT NULL DEFAULT '4',
  PRIMARY KEY (`musteri_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `musteriler`
--

INSERT INTO `musteriler` (`musteri_id`, `musteri_adi`, `musteri_ekmek`, `musteri_su`, `musteri_ekmek_katsayi`, `musteri_su_katsayi`) VALUES
(1, 'Can', 11, 3, 4, 4),
(2, 'Bekir', 8, 12, 6, 4),
(3, 'Remziye', 111, 48, 4, 4),
(4, 'Mehmet', 32, 11, 4, 4),
(5, 'Restorant', 340, 20, 6, 4),
(6, 'GenÃ§ali', 30, 200, 10, 10),
(8, 'Cansu', 3, 4, 4, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
