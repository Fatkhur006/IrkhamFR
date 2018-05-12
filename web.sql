-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 10:28 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `isi`) VALUES
(17, 'contoh8', 'Situs biasa'),
(18, 'Advantureees', 'Hanya sebuah situs yang mau menjadi ...........'),
(20, 'Advantureees 2', 'SEBUAH SITUS YANG INGIN MENJADI SITUS BESAR DAN ...............................................');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE IF NOT EXISTS `users1` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first` varchar(25) NOT NULL,
  `last` varchar(25) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` varchar(10) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `recovery` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `first`, `last`, `dd`, `mm`, `yyyy`, `email`, `recovery`, `password`, `confirm`, `phone`) VALUES
(0, 'Saya ', 'Beliau', 1, 'january', 1, 'admin@admin', '', 'admin', 'admin', 8321654987);

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL,
  `photo` char(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `photo`, `name`, `email`, `password`, `address`, `phone`) VALUES
(4, 'icon-instagram-bawah.png', 'hanyacontoh', 'hanyacontoh@contoh.co.id', 'contoh', 'hanya contoh address', 123),
(5, 'icon-facebook-bawah.png', 'hanyacontoh2', 'hanyacontoh2@contoh.co.id', 'contoh2', 'hanya contoh address 2', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
