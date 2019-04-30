-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2018 at 10:39 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `p_no` int(13) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `p_no`, `address`, `message`) VALUES
(11, 'dua khan', 8978675, 'hkjhkkjk', 'fdghg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `City` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `City`) VALUES
(1, 'karachi'),
(2, 'Lahore'),
(3, 'Miami'),
(5, 'New york'),
(9, 'Washington');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duk`
--

DROP TABLE IF EXISTS `duk`;
CREATE TABLE IF NOT EXISTS `duk` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `code` int(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duk`
--

INSERT INTO `duk` (`id`, `code`, `size`, `color`, `quantity`) VALUES
(13, 7768, 'Size M', 'Blue', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'admin123'),
(2, 'abc', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`) VALUES
(13, 'lili', '77d', 'gsL', 'product-05.jpg', '', ''),
(17, 'hffhhf', '33$', '6L', 'product-08.jpg', '', ''),
(33, 'white', '33$', 'gsL', 'product-02.jpg', '', '4'),
(44, 'frok', '88$', '55l', 'product-12.jpg', '', ''),
(55, 'dark col', '77$', '6L', 'product-04.jpg', '', ''),
(66, 'lili', '66$', '32L', 'product-06.jpg', '', ''),
(77, 'hffhhf', '99', '6t', 'product-03.jpg', '', ''),
(101, 'Esprit Ruffle Kurti', '$16.64', 'large', 'product-01.jpg', 'Gull Ahmed', 'women'),
(408, 'white frok with chunri dupatta', '9000 RS', '4 L', 'product-07.jpg', '', '76'),
(506, 'brown kurti', '7700 Rs', '32L', 'product-14.jpg', '', ''),
(609, 'Traditional men Kurti', '8000 Rs', '99l', 'product-11.jpg', '', '76'),
(632, 'vifq', '77d', 'gsL', 'product-13.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `pwd`, `phone`, `address`, `city`) VALUES
(1, 'kainat', '123a', 983892, 'orangi town', 'Lahore'),
(2, 'kainat', 'fsfvs', 983892, 'orangi town', 'Lahore'),
(3, 'duak', 'duak', 8778868686, 'abcd', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `qty` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`stock_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`qty`, `product_id`, `stock_id`) VALUES
(11, 21, 1),
(11, 101, 2),
(1, 33, 3),
(3, 66, 4),
(5, 55, 5),
(6, 77, 6),
(1, 12, 7),
(7, 13, 8),
(13, 506, 9),
(4, 609, 10),
(1, 408, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

DROP TABLE IF EXISTS `tab`;
CREATE TABLE IF NOT EXISTS `tab` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `se` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Jorjat collection', '3DcAM01', 'product-images/camera.jpg', 1500.00),
(2, 'Summer Collection', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Salwar kaeez', 'wristWear03', 'product-images/watch.jpg', 300.00),
(4, 'Kurtee with sigrat pant', 'LPN45', 'product-images/laptop.jpg', 800.00),
(5, 'Summer special', 'b15', 'product-images/gallery-04.jpg', 300.00),
(6, 'Multi color kurti', 'b16', 'product-images/gallery-06.jpg', 500.00),
(7, 'Fishi frok', 'b17', 'product-images/h.jpg', 200.00),
(8, 'lighter kurti', 'b19', 'product-images/l.jpg', 700.00),
(14, 'Grey collection', 'b56', 'product-images/14.jpg', 900.00),
(15, '2018 collection', 'b23', 'product-images/20.jpg', 400.00),
(16, 'ghbj collection', 'b83', 'product-images/hh.jpg', 700.00),
(17, 'farah collection', 'b900', 'product-images/gallery-02.jpg', 900.00),
(18, 'kurti style', 'b45', 'product-images/l.jpg', 500.00),
(19, 'mayo special', 'b85', 'product-images/gallery-06.jpg', 9000.00),
(23, 'cotton with jorjet', '945', 'product-images/camera.jpg', 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

DROP TABLE IF EXISTS `transaction_detail`;
CREATE TABLE IF NOT EXISTS `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`transacton_detail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

DROP TABLE IF EXISTS `women`;
CREATE TABLE IF NOT EXISTS `women` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `price` bigint(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `quntity` int(50) NOT NULL,
  `fav` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
