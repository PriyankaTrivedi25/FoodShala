-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 11:19 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `preference` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `mobile_no`, `email_id`, `pwd`, `preference`) VALUES
(4, 'Rekha Trivedi', 'Rajkot', '2147483647', 'rekha@gmail.com', '0', 1),
(5, 'Kiran', 'Surat', '9999999999', 'kk@g.om', 'kkt', 1),
(12, 'Rekha', '123', '1234567891', 'rekha@gmail.com', '123', 1),
(14, 'Harshit', 'jvhj', '1234567891', 'Trivedi@g.co', '123', 0),
(15, 'harshit', 'Rajkot', '1234567891', 'harshittrivedi8691@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_mapping`
--

CREATE TABLE IF NOT EXISTS `food_mapping` (
`F_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `is_veg` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_mapping`
--

INSERT INTO `food_mapping` (`F_id`, `r_id`, `food_name`, `price`, `available`, `is_veg`, `path`) VALUES
(17, 13, 'Chocolate Shake', 250, 1, 1, '../user/upload/23066.jpeg'),
(18, 13, 'Vanilla Shake', 100, 1, 1, '../user/upload/31616.jpeg'),
(19, 13, 'Choco Ball', 359, 1, 0, '../user/upload/22419.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `cust_id`, `r_id`, `total_bill`) VALUES
(19, 5, 1, 400),
(20, 5, 1, 400),
(21, 5, 1, 400),
(22, 5, 1, 400),
(23, 5, 1, 400),
(24, 5, 1, 400),
(25, 5, 1, 400),
(26, 5, 1, 400),
(27, 5, 1, 400),
(28, 5, 1, 400),
(29, 5, 1, 400),
(30, 5, 1, 400),
(31, 5, 1, 400),
(32, 5, 1, 400),
(33, 5, 1, 400),
(34, 5, 1, 400),
(35, 5, 1, 400),
(36, 5, 1, 400),
(37, 5, 1, 400),
(38, 5, 1, 400),
(39, 5, 1, 400),
(40, 5, 1, 400),
(41, 5, 1, 400),
(42, 5, 1, 400),
(43, 5, 1, 400),
(44, 5, 1, 400),
(45, 5, 1, 400),
(46, 5, 1, 350),
(47, 5, 1, 350),
(48, 5, 1, 350),
(49, 5, 1, 350),
(50, 5, 1, 350),
(51, 5, 1, 350),
(52, 5, 1, 350),
(53, 5, 1, 350),
(54, 5, 1, 350),
(55, 5, 1, 350),
(56, 5, 1, 350),
(57, 5, 1, 350),
(58, 5, 1, 350),
(59, 5, 1, 350),
(60, 5, 1, 1000),
(61, 5, 1, 1000),
(62, 5, 1, 1000),
(63, 5, 1, 1000),
(64, 5, 1, 1000),
(65, 5, 1, 1000),
(66, 5, 1, 1000),
(67, 5, 1, 1000),
(68, 5, 1, 1000),
(69, 5, 1, 1000),
(70, 5, 1, 950),
(71, 7, 1, 600),
(72, 7, 1, 500),
(73, 7, 1, 500),
(74, 7, 1, 500),
(75, 7, 1, 500),
(76, 7, 1, 150),
(77, 7, 1, 150),
(78, 7, 1, 150),
(79, 7, 1, 150),
(80, 7, 1, 150),
(81, 7, 1, 150),
(82, 7, 1, 150),
(83, 7, 1, 150),
(84, 7, 1, 150),
(85, 7, 1, 150),
(86, 7, 1, 450),
(87, 7, 1, 450),
(88, 7, 1, 450),
(89, 7, 1, 450),
(90, 7, 1, 450),
(91, 7, 1, 450),
(92, 7, 1, 450),
(93, 7, 1, 450),
(94, 7, 1, 450),
(95, 7, 1, 450),
(96, 7, 1, 450),
(97, 7, 1, 450),
(98, 7, 1, 450),
(99, 7, 1, 450),
(100, 7, 1, 450),
(101, 7, 1, 450),
(102, 7, 1, 450),
(103, 7, 1, 450),
(104, 7, 1, 450),
(105, 7, 1, 450),
(106, 7, 1, 450),
(107, 7, 1, 450),
(108, 7, 1, 450),
(109, 7, 1, 250),
(110, 7, 1, 250),
(111, 7, 1, 250),
(112, 7, 1, 250),
(113, 7, 1, 250),
(114, 7, 1, 750),
(115, 7, 1, 750),
(116, 7, 1, 750),
(117, 12, 1, 1050),
(118, 12, 1, 1050),
(119, 12, 1, 1050),
(120, 13, 1, 800),
(121, 7, 1, 250),
(122, 7, 1, 250),
(123, 7, 1, 250),
(124, 7, 1, 250),
(125, 13, 1, 450),
(126, 13, 1, 650),
(127, 7, 2, 100),
(128, 7, 2, 1400),
(129, 15, 13, 1059);

-- --------------------------------------------------------

--
-- Table structure for table `order_item_mapping`
--

CREATE TABLE IF NOT EXISTS `order_item_mapping` (
`o_i_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item_mapping`
--

INSERT INTO `order_item_mapping` (`o_i_id`, `order_id`, `food_name`, `quantity`, `value`) VALUES
(1, 1, 'xyz', 1, 20),
(2, 1, 'xyz', 1, 20),
(3, 1, 'xyz', 1, 20),
(4, 101, 'Masala Dosa', 1, 150),
(5, 104, 'Masala Dosa', 1, 150),
(6, 108, 'Masala Dosa', 1, 150),
(7, 108, 'Pizzza', 1, 250),
(8, 108, 'Sandwich', 1, 50),
(9, 109, 'Pizzza', 1, 250),
(10, 110, 'Pizzza', 1, 250),
(11, 111, 'Pizzza', 1, 250),
(12, 112, 'Pizzza', 1, 250),
(13, 113, 'Pizzza', 1, 250),
(14, 114, 'Masala Dosa', 1, 150),
(15, 114, 'Pizzza', 2, 250),
(16, 114, 'Jalebi', 1, 100),
(17, 115, 'Masala Dosa', 1, 150),
(18, 115, 'Pizzza', 2, 250),
(19, 115, 'Jalebi', 1, 100),
(20, 116, 'Masala Dosa', 1, 150),
(21, 116, 'Pizzza', 2, 250),
(22, 116, 'Jalebi', 1, 100),
(23, 117, 'Pizzza', 4, 250),
(24, 117, 'Sandwich', 1, 50),
(25, 118, 'Masala Dosa', 2, 150),
(26, 118, 'Pizzza', 2, 250),
(27, 118, 'Sandwich', 1, 50),
(28, 118, 'Jalebi', 2, 100),
(29, 119, 'Masala Dosa', 2, 150),
(30, 119, 'Pizzza', 2, 250),
(31, 119, 'Sandwich', 1, 50),
(32, 119, 'Jalebi', 2, 100),
(33, 120, 'Pizzza', 2, 250),
(34, 120, 'Jalebi', 3, 100),
(35, 121, 'Pizzza', 1, 250),
(36, 122, 'Pizzza', 1, 250),
(37, 123, 'Pizzza', 1, 250),
(38, 124, 'Pizzza', 1, 250),
(39, 125, 'Masala Dosa', 1, 150),
(40, 125, 'Pizzza', 1, 250),
(41, 125, 'Sandwich', 1, 50),
(42, 126, 'Pizzza', 1, 250),
(43, 126, 'Jalebi', 4, 100),
(44, 127, 'Idli Sambhar', 2, 50),
(45, 128, 'Idli Sambhar', 28, 50),
(46, 129, 'Chocolate Shake', 2, 250),
(47, 129, 'Vanilla Shake', 2, 100),
(48, 129, 'Choco Ball', 1, 359);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
`R_ID` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `veg` int(11) NOT NULL,
  `non_veg` int(11) NOT NULL,
  `is_available` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`R_ID`, `r_name`, `veg`, `non_veg`, `is_available`, `path`, `address`) VALUES
(13, 'Chcolate Room', 1, 1, 1, '../user/upload/4293.jpeg', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_owner`
--

CREATE TABLE IF NOT EXISTS `restaurant_owner` (
`r_owner_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `res_id` int(11) NOT NULL,
  `mobile_no` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant_owner`
--

INSERT INTO `restaurant_owner` (`r_owner_id`, `owner_name`, `email_id`, `pwd`, `res_id`, `mobile_no`) VALUES
(4, 'Chcolate Room', 'choco@gmail.com', '123', 13, '1234567891');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `food_mapping`
--
ALTER TABLE `food_mapping`
 ADD PRIMARY KEY (`F_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item_mapping`
--
ALTER TABLE `order_item_mapping`
 ADD PRIMARY KEY (`o_i_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
 ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `restaurant_owner`
--
ALTER TABLE `restaurant_owner`
 ADD PRIMARY KEY (`r_owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `food_mapping`
--
ALTER TABLE `food_mapping`
MODIFY `F_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `order_item_mapping`
--
ALTER TABLE `order_item_mapping`
MODIFY `o_i_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `restaurant_owner`
--
ALTER TABLE `restaurant_owner`
MODIFY `r_owner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
