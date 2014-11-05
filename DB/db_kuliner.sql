-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2014 at 09:11 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kuliner`
--
CREATE DATABASE IF NOT EXISTS `db_kuliner` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_kuliner`;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `resto_id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`resto_id`,`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `deskripsi` varchar(160) NOT NULL,
  `promo` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `nama`, `alamat`, `latitude`, `longitude`, `deskripsi`, `promo`, `gambar`) VALUES
(1, 'KFC cabang cisitu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 2132322, 22142124124, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', '', 'img/restoran/kfc.png'),
(2, 'Domino''s pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', NULL, 'img/restoran/domino''s pizza.png'),
(3, 'Domino''s pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', NULL, 'img/restoran/domino''s pizza.png'),
(4, 'Domino''s pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', NULL, 'img/restoran/domino''s pizza.png'),
(5, 'Domino''s pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', NULL, 'img/restoran/domino''s pizza.png'),
(6, 'Domino''s pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', NULL, 'img/restoran/domino''s pizza.png'),
(7, 'Domino''s pizza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', NULL, 'img/restoran/domino''s pizza.png'),
(8, 'KFC cabang cisitu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 2132322, 22142124124, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', '', 'img/restoran/kfc.png'),
(9, 'KFC cabang cisitu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale', 2132322, 22142124124, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodales, placerat eget nibh. Fusce volutpat, magna vel gravida por', '', 'img/restoran/kfc.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimon`
--

CREATE TABLE IF NOT EXISTS `testimon` (
  `resto_id` int(11) NOT NULL,
  `testi` varchar(140) NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`resto_id`,`testi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimon`
--

INSERT INTO `testimon` (`resto_id`, `testi`, `rate`) VALUES
(1, 'ampas lu', 4),
(1, 'ih waw', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
