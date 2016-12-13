-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2016 at 02:01 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oqsnew_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerorders`
--

CREATE TABLE IF NOT EXISTS `customerorders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL DEFAULT 'unknown',
  `comments` varchar(20) NOT NULL,
  `comment_approved` tinyint(1) NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `isProcess` tinyint(1) NOT NULL DEFAULT '0',
  `isShip` tinyint(1) NOT NULL DEFAULT '0',
  `orderDate` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `orderids` varchar(100) NOT NULL,
  `delivered` varchar(10) NOT NULL DEFAULT 'no',
  `cust_id` int(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rh_status` tinyint(1) NOT NULL DEFAULT '0',
  `pm_status` tinyint(1) NOT NULL DEFAULT '0',
  `isDiscount` int(10) NOT NULL,
  `order_delivered` int(1) NOT NULL DEFAULT '0',
  `rh_zone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orderids` (`orderids`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customerorders`
--

INSERT INTO `customerorders` (`id`, `name`, `email`, `contact`, `address`, `message`, `location`, `comments`, `comment_approved`, `isActive`, `isProcess`, `isShip`, `orderDate`, `status`, `orderids`, `delivered`, `cust_id`, `quantity`, `user_id`, `rh_status`, `pm_status`, `isDiscount`, `order_delivered`, `rh_zone`) VALUES
(1, 'Test', 'test@teset.com', 123, 'Karnal\r\nHaryana', 'Good', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '2 , 8 , 5 , 9', 'yes', 1362879384, '', 6, 1, 0, 102, 1, 'north'),
(2, 'asdf', 'test@teset.com', 123, 'karnal', 'haryana', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '10', 'yes', 1130525623, '', 6, 1, 0, 500000, 1, ''),
(3, 'jyoti', 'test@teset.com', 123, 'neval', 'haryana', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '2 , 8 , 5', 'yes', 1172502207, '', 6, 1, 0, 303, 1, 'north'),
(4, 'Testquant', 'cc@aa.com', 123, 'gurgaon', 'messg', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '2 , 8 , 5', 'yes', 1184225726, '', 6, 1, 0, 500, 1, ''),
(5, 'aarti', 'test@teset.com', 123, 'kunjpura', 'asdfdsa', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '2 , 8 , 5 , 9', 'yes', 1335773878, '', 6, 1, 0, 301, 1, 'north'),
(8, 'Pooja', 'test@teset.com', 123, 'sadfdsaf', 'asdfdsafdsfdsafs', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '2 , 8 , 5 , 9', 'yes', 1133627566, '', 6, 1, 0, 302, 1, 'north'),
(9, 'friday', 'test@friday.com', 123, 'karnal', 'message', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '2 , 8 , 5 , 9', 'yes', 1240963909, '', 6, 1, 0, 100, 1, ''),
(10, 'testing', 'test@gmail.com', 2147483647, 'test address', 'this is new message', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '10', 'yes', 1349221712, '', 6, 1, 0, 100, 1, ''),
(11, 'monday', 'email@email.com', 1333, 'karnal', 'message', 'unknown', '', 0, 1, 0, 1, '0000-00-00', 0, '2 , 8 , 5', 'yes', 1118811227, '', 6, 1, 0, 1100, 0, ''),
(12, 'dilpreet', 'dil@test.com', 123, 'karnal', 'message', 'unknown', '', 0, 1, 1, 1, '0000-00-00', 0, '1 , 7 , 5 , 9', 'no', 1403159023, '', 6, 1, 0, 301, 0, 'north');

-- --------------------------------------------------------

--
-- Table structure for table `customer_cart_items`
--

CREATE TABLE IF NOT EXISTS `customer_cart_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `customer_cart` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `customer_cart_items`
--

INSERT INTO `customer_cart_items` (`id`, `user_id`, `cust_id`, `customer_cart`) VALUES
(5, 6, 1335773878, 'Array , Array , Array , Array'),
(7, 6, 1201067451, '1 , 1 , 1 , 1'),
(8, 6, 1199479986, '1 , 2 , 3'),
(9, 6, 1133627566, '1 , 2 , 3 , 4'),
(10, 6, 1240963909, '1 , 2 , 2 , 4'),
(11, 6, 1349221712, '11'),
(12, 6, 1336376020, '1 , 1 , 1 , 1'),
(13, 6, 1118811227, '2 , 3 , 3'),
(14, 6, 1403159023, '1 , 1 , 1 , 1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_invoices`
--

CREATE TABLE IF NOT EXISTS `customer_invoices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(100) NOT NULL,
  `orderids` varchar(100) NOT NULL,
  `cust_random` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `login_type` varchar(30) NOT NULL,
  `region` varchar(10) NOT NULL,
  `createdOn` date NOT NULL,
  `day1` varchar(10) NOT NULL DEFAULT 'false',
  `day2` varchar(10) NOT NULL DEFAULT 'false',
  `day3` varchar(10) NOT NULL DEFAULT 'false',
  `day4` varchar(10) NOT NULL DEFAULT 'false',
  `day5` varchar(10) NOT NULL DEFAULT 'false',
  `day6` varchar(10) NOT NULL DEFAULT 'false',
  `day7` varchar(10) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `login_type`, `region`, `createdOn`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`) VALUES
(1, 'admin', 'pass', 'admin@admin.com', 'admin', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(6, 'user', 'pass', 'user@user.com', 'user', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(10, 'test', 'pass', 'aa@aa.com', 'test', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(12, 'delete', 'pass', 'delete@delete.com', 'delete', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(13, 'vendor', 'pass', 'vendor@vendor.com', 'vendor', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(14, 'sale', 'pass', 'sales@saales.com', 'sale', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'false'),
(17, 'rh', 'pass', 'head@head.com', 'regionalhead', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(18, 'pm', 'pass', 'price@price.com', 'pricemanager', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(19, 'delivery', 'pass', 'delivery@stic.com', 'delivery', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(20, 'wh', 'pass', 'warehouse@warehouse.com', 'warehouse', '', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(23, 'rhnorth', 'pass', 'north@test.com', 'regionalhead', 'north', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(24, 'rheast', 'pass', 'east@test.com', 'regionalhead', 'east', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'false'),
(25, 'rhwest', 'pass', 'west@test.com', 'regionalhead', 'west', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(26, 'rhsouth', 'pass', 'south@test.com', 'regionalhead', 'south', '0000-00-00', 'true', 'true', 'true', 'true', 'true', 'true', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE IF NOT EXISTS `parameters` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `createdOn` date NOT NULL,
  `chkvalue` text NOT NULL,
  `p_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `name`, `description`, `isActive`, `createdOn`, `chkvalue`, `p_id`) VALUES
(1, 'Motherboard', 'motherboard data', 1, '2016-10-04', '', 1),
(2, 'CPU', 'cpu data', 1, '2016-10-04', '', 1),
(3, 'Ram', 'ram data', 1, '2016-10-04', '', 1),
(4, 'Cabinet', 'cabinet data', 1, '2016-10-04', '', 1),
(5, 'Lenovo', 'lenovo data', 1, '2016-10-04', 'true', 2),
(11, 'parameter2', 'test', 1, '2016-10-12', 'true', 8),
(12, 'Door', 'sdf', 1, '2016-10-12', 'true', 9),
(13, 'Floor', 'floor data', 1, '2016-10-12', 'true', 9),
(14, 'Abc', 'asdf', 1, '2016-10-17', '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `createdOn` date NOT NULL,
  `chkvalue` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `isActive`, `createdOn`, `chkvalue`) VALUES
(1, 'System', 'system data', 1, '2016-10-03', 'true'),
(2, 'Laptop', 'laptop data', 1, '2016-10-03', 'true'),
(3, 'Door', 'door data', 1, '2016-10-03', 'true'),
(4, 'Floor', 'floor data', 1, '2016-10-03', 'true'),
(8, 'Shoes', 'Branded', 1, '2016-10-13', 'true'),
(9, 'Construction', 'constsetlkjsdf', 1, '2016-10-12', 'true'),
(10, 'Aashish', 'Netscript', 1, '2016-10-12', 'true'),
(11, 'Anusha ', ' gimt ', 1, '2016-10-17', 'true'),
(12, 'xyz', 'abc', 1, '2016-10-17', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `products_parameters_opt`
--

CREATE TABLE IF NOT EXISTS `products_parameters_opt` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `parameter_id` int(10) NOT NULL,
  `paramopt` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `createdOn` date NOT NULL,
  `chkvalue` text NOT NULL,
  `value` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parameter_id` (`parameter_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products_parameters_opt`
--

INSERT INTO `products_parameters_opt` (`id`, `product_id`, `parameter_id`, `paramopt`, `description`, `isActive`, `createdOn`, `chkvalue`, `value`) VALUES
(1, 1, 1, 'Asrock', 'dfg', 1, '0000-00-00', '', 1000),
(2, 1, 1, 'Gigabyte', 'motherboard', 1, '0000-00-00', '', 2000),
(3, 1, 1, 'Asus', '', 1, '0000-00-00', '', 2500),
(4, 1, 3, 'DDR1', '', 1, '0000-00-00', 'true', 1000),
(5, 1, 3, 'DDR2', '', 1, '0000-00-00', 'true', 700),
(6, 1, 3, 'DDR3', '', 1, '0000-00-00', '', 800),
(7, 1, 2, 'Intel', '', 1, '2016-10-14', 'true', 2500),
(8, 1, 2, 'Chipset', '', 1, '0000-00-00', '', 2300),
(9, 1, 4, 'Cabinet12', 'hello', 1, '2016-10-14', '', 1000),
(10, 2, 5, 'Lenovo', 'asd', 1, '0000-00-00', '', 30000),
(11, 2, 5, 'Lenovo2', '', 1, '0000-00-00', 'true', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `product_parameter_value`
--

CREATE TABLE IF NOT EXISTS `product_parameter_value` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parameterid` int(10) NOT NULL,
  `value_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wh_category`
--

CREATE TABLE IF NOT EXISTS `wh_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `createdOn` date NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wh_category`
--

INSERT INTO `wh_category` (`id`, `category_name`, `description`, `createdOn`, `isActive`) VALUES
(1, 'Electronics', 'shoes cateogry', '2016-10-22', 1),
(2, 'Appliances', 'appliances cateogry', '2016-10-22', 1),
(3, 'Men', 'men cateogry', '2016-10-22', 1),
(4, 'Women', 'men cateogry', '2016-10-22', 1),
(5, 'Baby & Kids', 'men cateogry', '2016-10-22', 1),
(6, 'Home Furniture', 'men cateogry', '2016-10-22', 1),
(7, 'Books', 'men cateogry', '2016-10-22', 1),
(8, 'Offer Zone', 'men cateogry', '2016-10-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wh_products`
--

CREATE TABLE IF NOT EXISTS `wh_products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL,
  `prod_description` int(100) NOT NULL,
  `createdOn` date NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `cat_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wh_products`
--

INSERT INTO `wh_products` (`id`, `prod_name`, `prod_description`, `createdOn`, `isActive`, `cat_id`) VALUES
(1, 'PHP', 0, '2016-10-22', 1, 7),
(2, 'Java', 0, '2016-10-22', 1, 7),
(3, 'Mobile', 0, '2016-10-22', 1, 1),
(4, 'Shirt', 0, '2016-10-22', 1, 2),
(5, 'BB', 0, '2016-10-22', 1, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parameters`
--
ALTER TABLE `parameters`
  ADD CONSTRAINT `parameters_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_parameters_opt`
--
ALTER TABLE `products_parameters_opt`
  ADD CONSTRAINT `products_parameters_opt_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_parameters_opt_ibfk_2` FOREIGN KEY (`parameter_id`) REFERENCES `parameters` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wh_products`
--
ALTER TABLE `wh_products`
  ADD CONSTRAINT `wh_products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `wh_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
