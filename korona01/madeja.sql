-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2020 at 01:46 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madeja`
--

-- --------------------------------------------------------

--
-- Table structure for table `ceny_palet`
--

DROP TABLE IF EXISTS `ceny_palet`;
CREATE TABLE IF NOT EXISTS `ceny_palet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paleta` text COLLATE utf8mb4_polish_ci NOT NULL,
  `rozmair` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `ceny_palet`
--

INSERT INTO `ceny_palet` (`id`, `paleta`, `rozmair`, `cena`) VALUES
(1, 'paleta_euro', '800x1200x150 mm', 35),
(2, 'paleta_isover1', '1200x2000x150 mm', 50),
(3, 'paleta_isover2', '1150x1150x150 mm', 40),
(4, 'paleta_plantenergy', '1200x1600x150 mm', 35),
(5, 'paleta_teskosteel', '1650x2100x150 mm', 55),
(6, 'paleta_metalco', '1500x2500x150 mm', 55),
(7, 'paaleta_przemysłowa', '1200x1000x150 mm', 30);

-- --------------------------------------------------------

--
-- Table structure for table `ceny_pellet`
--

DROP TABLE IF EXISTS `ceny_pellet`;
CREATE TABLE IF NOT EXISTS `ceny_pellet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rozmiar` text COLLATE utf8mb4_polish_ci NOT NULL,
  `kaloryczność` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `ceny_pellet`
--

INSERT INTO `ceny_pellet` (`id`, `rozmiar`, `kaloryczność`, `cena`) VALUES
(1, '6mm', '19,5GJ/Mg', 740),
(2, '8mm', '19,5GJ/Mg', 730),
(3, '10mm', '19,5GJ/Mg', 720);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
