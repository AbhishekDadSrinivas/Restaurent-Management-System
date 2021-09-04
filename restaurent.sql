-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

DROP TABLE IF EXISTS `addtocart`;
CREATE TABLE IF NOT EXISTS `addtocart` (
  `uid` varchar(30) NOT NULL,
  `product_no` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tot_price` int(11) NOT NULL,
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`uid`, `product_no`, `qty`, `tot_price`, `slno`) VALUES
('nb60e1753a50a77', 2, 2, 100, 26),
('nb60e1753a50a77', 1, 2, 100, 25),
('nb60e13294a9503', 2, 2, 100, 24),
('nb60e13294a9503', 1, 1, 50, 23),
('nb60e13211d1919', 2, 2, 100, 22),
('nb60e13211d1919', 1, 1, 50, 21),
('nb60e1209db5e09', 2, 2, 100, 20),
('nb60e1209db5e09', 1, 1, 50, 19),
('nb60e19c8b7f892', 1, 1, 50, 27),
('nb60e19c8b7f892', 2, 2, 100, 28),
('nb60e1a35deb91b', 1, 1, 50, 29),
('nb60e1a35deb91b', 2, 1, 50, 30),
('nb60e1a69228061', 1, 2, 100, 31),
('nb60e1a69228061', 2, 1, 50, 32),
('nb60e1a69228061', 3, 1, 30, 33),
('nb60e1a69228061', 4, 3, 90, 34),
('nb60e1a69228061', 5, 1, 30, 35),
('nb60e1aa490a630', 1, 2, 100, 36),
('nb60e1aa490a630', 5, 1, 30, 37),
('nb60e1ab2a3728c', 1, 3, 150, 38),
('nb60e1b14394b6b', 1, 1, 50, 39),
('nb60e1b14394b6b', 3, 2, 60, 40),
('nb60e1b3d7b3f6f', 1, 1, 50, 41),
('nb60e1b3d7b3f6f', 4, 1, 30, 42),
('nb60e1b4fa4d7e0', 1, 1, 50, 43),
('nb60e1b4fa4d7e0', 3, 2, 60, 44),
('nb60e1bbee1a043', 1, 1, 50, 45),
('nb60e1bf4ccdbc4', 1, 1, 50, 46),
('nb60e1bf4ccdbc4', 3, 2, 60, 47),
('nb60e1cdac0a14e', 1, 1, 50, 48),
('nb60e1ceafc7b39', 1, 1, 50, 49),
('nb60e1cf1d206a9', 1, 2, 100, 50),
('nb60e1cf1d206a9', 3, 1, 30, 51),
('nb60e1cf1d206a9', 2, 1, 50, 52),
('', 4, 3, 90, 53),
('', 2, 2, 100, 54),
('nb6128ed1336f6f', 3, 1, 30, 55);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminno` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `admin_emailid` varchar(30) NOT NULL,
  `admin_pswd` varchar(50) NOT NULL,
  PRIMARY KEY (`adminno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminno`, `admin_name`, `admin_emailid`, `admin_pswd`) VALUES
(2, 'abhishek.s', 'akabhishek368@gmail.com', 'abhishek');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderno` int(11) NOT NULL AUTO_INCREMENT,
  `product_no` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `tot_price` bigint(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `ordereddate` date NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`orderno`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderno`, `product_no`, `product_name`, `qty`, `tot_price`, `fname`, `lname`, `address`, `email`, `pno`, `ordereddate`, `status`) VALUES
(64, 1, 'IDLI VADA', 1, 50, 'abc', 'efgh', 'xyz', 'abc@gmail.com', 123456789, '2021-07-04', NULL),
(65, 3, 'PAROTTA', 2, 60, 'abc', 'efgh', 'xyz', 'abc@gmail.com', 123456789, '2021-07-04', NULL),
(66, 1, 'IDLI VADA', 1, 50, 'abc', 'efg', 'xyz', 'abc@gmail.com', 123456, '2021-07-04', NULL),
(67, 3, 'PAROTTA', 2, 60, 'abc', 'efg', 'xyz', 'abc@gmail.com', 123456, '2021-07-04', NULL),
(68, 1, 'IDLI VADA', 1, 50, 'abc', 'cd', 'asdf', 'xyz@gmail.com', 123456, '2021-07-04', NULL),
(69, 1, 'IDLI VADA', 1, 50, 'abc', 'asd', 'asd', 'ab@gmail.com', 123456, '2021-07-04', NULL),
(70, 1, 'IDLI VADA', 2, 100, 'qwe', 'rty', 'bangalore', 'asd@gmail.com', 123456789, '2021-07-04', NULL),
(71, 3, 'PAROTTA', 1, 30, 'qwe', 'rty', 'bangalore', 'asd@gmail.com', 123456789, '2021-07-04', NULL),
(72, 2, 'MASALA DOSA', 1, 50, 'qwe', 'rty', 'bangalore', 'asd@gmail.com', 123456789, '2021-07-04', NULL),
(73, 4, 'VEG PULAV', 3, 90, 'abc', 'def', 'sarakki', 'abc1@gmail.com', 123456789, '2021-08-27', NULL),
(74, 2, 'MASALA DOSA', 2, 100, 'abc', 'def', 'sarakki', 'abc1@gmail.com', 123456789, '2021-08-27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`product_no`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_no`, `product_name`, `price`, `stock`) VALUES
(1, 'IDLI VADA', 50, 922),
(2, 'MASALA DOSA', 50, 783),
(3, 'PAROTTA', 30, 91),
(4, 'VEG PULAV', 30, 93),
(5, 'POORI', 30, 98),
(12, 'RICE BATH', 30, 100),
(13, 'FRIED RICE', 30, 150),
(14, 'rice', 20, 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
