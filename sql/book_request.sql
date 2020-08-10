-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2020 at 05:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_request`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(33) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(33) NOT NULL,
  `admin_pass` longtext NOT NULL,
  `adress` longtext NOT NULL,
  `acc_validity` int(33) NOT NULL DEFAULT '1',
  `status` varchar(33) NOT NULL DEFAULT 'offline',
  `job_section` varchar(33) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_username`, `admin_pass`, `adress`, `acc_validity`, `status`, `job_section`, `mobile_number`) VALUES
(1, 'mohammed anas', 'c4ca4238a0b923820dcc509a6f75849b', 'mes college Marapally', 1, 'offline', 'manager', 0),
(2, 'Rohan', '3a714e83fb94eb56bcec1a92742b9113', 'Mes Marampally', 1, 'offline', 'Sales', 565675),
(3, 'Rohan', 'c4ca4238a0b923820dcc509a6f75849b', 'kanndakarnna velli, northparavur, ernakulam, ghgfhfgh', 0, 'offline', 'Sales', 9188681043);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(33) NOT NULL AUTO_INCREMENT,
  `banner_img` longtext NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_img`) VALUES
(4, 'world-book-day-banners-realistic-style_23-2147790188.jpg'),
(5, '01_preview3.jpg'),
(7, 'android competition csi 2.png');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(33) NOT NULL AUTO_INCREMENT,
  `cat_id` int(33) NOT NULL,
  `book_name` longtext NOT NULL,
  `user_id` int(33) NOT NULL,
  `book_img` longtext NOT NULL,
  `stock` int(33) NOT NULL,
  `price` mediumint(9) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `cat_id`, `book_name`, `user_id`, `book_img`, `stock`, `price`) VALUES
(5, 15, 'Classmate Note Books', 1, 'classmate-college-note-book-soft-cover-180-pages-ruled-2000330-pack-of-6.jpg', 10, 30),
(6, 15, 'CPA Notebooks', 1, 'College-school-classmate-note-book.jpg_350x350.jpg', 10, 20),
(7, 15, 'Spiral Notebooks', 1, '61ALUHbjy0L._AC_UL320_ML3_.jpg', 10, 40),
(8, 15, 'CheerUp Books', 1, '61FxydUmEJL._SX466_.jpg', 5, 40);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(33) NOT NULL AUTO_INCREMENT,
  `category_name` longtext NOT NULL,
  `user_id` varchar(33) NOT NULL,
  `cat_img` longtext NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`, `user_id`, `cat_img`) VALUES
(16, 'Test Book', '1', 'jason-coudriet-dc80wb2nRHk-unsplash.jpg'),
(18, 'hghhjghj', '1', 'evolvingkid.png'),
(14, 'Record Book', '1', 'records.jpg'),
(15, 'College Note Books', '1', 'aaron-burden-AXqMy8MSSdk-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client_cart`
--

DROP TABLE IF EXISTS `client_cart`;
CREATE TABLE IF NOT EXISTS `client_cart` (
  `st_id` int(33) NOT NULL,
  `book_id` int(33) NOT NULL,
  `cart_date` date NOT NULL,
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_cart`
--

INSERT INTO `client_cart` (`st_id`, `book_id`, `cart_date`, `cart_id`) VALUES
(31, 7, '2020-02-08', 13),
(30, 7, '2020-02-08', 12),
(30, 8, '2019-12-27', 11),
(30, 5, '2019-12-24', 9);

-- --------------------------------------------------------

--
-- Table structure for table `dept_details`
--

DROP TABLE IF EXISTS `dept_details`;
CREATE TABLE IF NOT EXISTS `dept_details` (
  `dept_id` int(33) NOT NULL AUTO_INCREMENT,
  `dept_name` longtext NOT NULL,
  `dept_pass` longtext NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_details`
--

INSERT INTO `dept_details` (`dept_id`, `dept_name`, `dept_pass`) VALUES
(1, 'maths', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dept_orders`
--

DROP TABLE IF EXISTS `dept_orders`;
CREATE TABLE IF NOT EXISTS `dept_orders` (
  `dpt_order_id` int(33) NOT NULL AUTO_INCREMENT,
  `dpt_order_product` int(33) NOT NULL,
  `dpt_order_pay_type` varchar(33) NOT NULL,
  `order_qty` int(44) NOT NULL,
  `order_dpt_id` int(22) NOT NULL,
  `oder_approve` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`dpt_order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_orders`
--

INSERT INTO `dept_orders` (`dpt_order_id`, `dpt_order_product`, `dpt_order_pay_type`, `order_qty`, `order_dpt_id`, `oder_approve`) VALUES
(1, 5, 'cash on front', 2, 1, 0),
(2, 6, 'Net Banking', 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `request_books`
--

DROP TABLE IF EXISTS `request_books`;
CREATE TABLE IF NOT EXISTS `request_books` (
  `req_id` int(33) NOT NULL AUTO_INCREMENT,
  `req_book_id` int(33) NOT NULL,
  `req_student_id` int(33) NOT NULL,
  `req_Date` date NOT NULL,
  `req_status` varchar(33) NOT NULL DEFAULT 'Request Pending',
  `req_validity` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_books`
--

INSERT INTO `request_books` (`req_id`, `req_book_id`, `req_student_id`, `req_Date`, `req_status`, `req_validity`) VALUES
(22, 8, 30, '2020-02-07', 'Approve', 1),
(21, 5, 30, '2020-02-07', 'Approve', 1),
(20, 8, 30, '2020-02-07', 'Approve', 1),
(19, 5, 30, '2020-02-07', 'Request Pending', 1),
(18, 6, 30, '2020-02-07', 'Request Pending', 1),
(17, 5, 30, '2019-12-27', 'Request Pending', 1),
(16, 8, 30, '2019-12-27', 'Request Pending', 1),
(15, 5, 30, '2019-12-27', 'Request Pending', 1),
(14, 8, 30, '2019-12-27', 'Request Pending', 1),
(13, 7, 30, '2019-12-24', 'Approve', 1),
(12, 6, 30, '2019-12-24', 'Request Pending', 1),
(23, 8, 30, '2020-02-07', 'Request Pending', 1),
(24, 7, 30, '2020-02-08', 'Request Pending', 1),
(25, 7, 30, '2020-02-08', 'Approve', 1),
(26, 8, 30, '2020-02-08', 'Request Pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `st_id` int(33) NOT NULL AUTO_INCREMENT,
  `st_name` mediumtext NOT NULL,
  `st_username` mediumtext NOT NULL,
  `st_pass` longtext NOT NULL,
  `st_rollnumber` int(11) NOT NULL,
  `st_program` mediumtext NOT NULL,
  `st_address` longtext NOT NULL,
  `st_sem` int(11) NOT NULL,
  `st_mail` varchar(100) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`st_id`, `st_name`, `st_username`, `st_pass`, `st_rollnumber`, `st_program`, `st_address`, `st_sem`, `st_mail`) VALUES
(31, 'mohammed fayez', 'Mohammed Anas', 'c4ca4238a0b923820dcc509a6f75849b', 6556, 'hgh', 'kanndakarnna velli, northparavur, ernakulam, ghgfhfgh', 4, 'fayezmohammed23@gmail.com'),
(30, 'Mohammed Anas', 'Mohammed Anas', 'c4ca4238a0b923820dcc509a6f75849b', 23, 'maths', 'mes marampally', 4, 'anas@bookrequest.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_requesting`
--

DROP TABLE IF EXISTS `student_requesting`;
CREATE TABLE IF NOT EXISTS `student_requesting` (
  `rq_id` int(33) NOT NULL AUTO_INCREMENT,
  `rq_book` varchar(33) NOT NULL,
  `rq_st_id` int(33) NOT NULL,
  `rq_date` date NOT NULL,
  PRIMARY KEY (`rq_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_requesting`
--

INSERT INTO `student_requesting` (`rq_id`, `rq_book`, `rq_st_id`, `rq_date`) VALUES
(2, 'Larva', 30, '2019-12-24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
