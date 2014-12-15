-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2014 at 12:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kuliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `resto_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`resto_id`, `nama`, `gambar`, `harga`, `deskripsi`) VALUES
(1, 'Es Dawet', 'img/menu/esdawet.jpg', 12000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale'),
(1, 'Nasi Ayam', 'img/menu/nasiayam.jpg', 8000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale'),
(1, 'Nasi Goreng', 'img/menu/nasgor.jpg', 20000, 'Nasi Goreng Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale'),
(1, 'Nasi Tumpeng', 'img/menu/tumpeng.jpg', 19000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ex risus, ullamcorper nec semper sodale');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `deskripsi` varchar(160) NOT NULL,
  `promo` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimon`
--

INSERT INTO `testimon` (`resto_id`, `testi`, `rate`) VALUES
(1, 'ampas lu', 4),
(1, 'ih waw', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`resto_id`,`nama`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimon`
--
ALTER TABLE `testimon`
 ADD PRIMARY KEY (`resto_id`,`testi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
