-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 12:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cellshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `comment`) VALUES
(3, 'Adam Ochieng', 'adoch@yahoo.com', 'I like the system.'),
(4, 'Adam Ochieng', 'adoch@yahoo.com', 'I like the system.'),
(5, 'George Makai', 'grd@gmail.com', 'This system is just awesome.'),
(6, 'George Makai', 'grd@gmail.com', 'This system is just awesome.'),
(8, 'Andrew Njonge', 'drew@gmail.com', 'This system is perfect'),
(9, 'Esther', 'ferd@gmail.com', 'Hii system ni mbaya'),
(11, 'Daisy Mwenda', 'eshea@gmail.com', 'the system is oka'),
(12, 'Esther', 'eshea@gmail.com', ''),
(13, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `contact`, `username`, `password`) VALUES
(1, 'Susan Sipo', 'eshea@gmail.com', 72585685, '', ''),
(2, 'Esther Njeri', 'eshea@gmail.com', 210254789, '', ''),
(8, 'Daisy Mwenda', 'daisy@gmail.com', 72585685, '', ''),
(9, 'Andrew Njonge', 'dwe@yahoo.com', 756897412, 'Andrew', '12345'),
(44, 'hiram', 'hiramwamae@gmail.com', 3243432, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `phone`, `amount`) VALUES
(71, 'Vivian Mulwa', 'Samsung Galaxy s6', 60000),
(72, 'Susan Opiyo', 'Samsung Galaxy s6', 60000),
(78, 'Susan Opiyo', 'Samsung Galaxy s6', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`id` int(11) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `phone`, `amount`) VALUES
(12, 'samsung Galaxy Note 7', 60000),
(13, 'Tecno Camon c9', 20000),
(14, 'samsung Galaxy s6 Edge', 40000),
(15, 'samsung Galaxy S6', 60000),
(16, 'Infinix zero 3', 15000),
(17, 'Huawei Ascend g7', 35000),
(18, 'iphone 7', 115000),
(19, 'Infinix Hot 2', 15000),
(20, 'Huawei Ascend p7', 28000),
(21, 'iphone 5', 100000),
(22, 'Samsung Rex 90', 7000),
(23, 'Wiko', 13000),
(24, 'Infinix Hot Note 2', 19000),
(25, 'samsung Galaxy S5', 45000),
(26, 'Huawei', 23000),
(27, 'Tecno 18', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
