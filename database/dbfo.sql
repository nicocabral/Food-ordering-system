-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2016 at 03:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbfo`
--
CREATE DATABASE IF NOT EXISTS `dbfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbfo`;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `prize` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `size`, `status`, `image`, `prize`) VALUES
(2, 'Black Spicey King Burger', 'Single', 'Available', 'upload/image8.jpg', 155),
(3, 'Pizza Deluxe', '12 inches', 'Available', 'upload/image5.jpg', 160),
(4, 'Peperoni Pizza Deluxe', 'Barkada size', 'Available', 'upload/image6.jpg', 250),
(5, 'Fresh Lumpia W/ Love', 'Single', 'Available', 'upload/image9.jpg', 30),
(6, 'Hamburger w/ fries and ketchu loveknots with tomat', 'double', 'Available', 'upload/image10.jpg', 200),
(7, 'Pancit yugyog w/ love and kises', 'Double', 'Available', 'upload/image13.jpg', 130),
(8, 'Pancit yuyog w. love and kisses', 'Single', 'Available', 'upload/image13.jpg', 90),
(9, 'Sesame seeds w/ brocolli and spicy tambok flavor', 'One Plate', 'Available', 'upload/imag12.jpg', 85),
(11, 'Bulky Burger', 'Small', 'Available', 'upload/1475839978_hamburger.png', 30);

-- --------------------------------------------------------

--
-- Table structure for table `foodsorder`
--

CREATE TABLE IF NOT EXISTS `foodsorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordername` varchar(50) DEFAULT NULL,
  `foodid` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `foodsorder`
--

INSERT INTO `foodsorder` (`id`, `ordername`, `foodid`, `address`, `contact`, `photo`, `timestamp`, `status`, `qty`) VALUES
(8, 'Juan Dela Cruz', 11, 'Tacloban City', '09369420867', 'upload/chet_faker_2.jpg', '2016-10-15 13:02:56', 'new', 10),
(10, 'Kim Jove', 11, 'Tacloban City', '09123456789', 'upload/FB_IMG_1424470923376.jpg', '2016-10-17 02:58:04', 'new', 10),
(11, 'Kim Jove', 8, 'TAcloban City', '09369420867', 'upload/FB_IMG_1424470923376.jpg', '2016-10-17 02:59:31', 'new', 10);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `utype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `address`, `contact`, `dob`, `username`, `password`, `utype`) VALUES
(1, 'Kim Jove', 'Tacloban City', '0932423487', '1994-01-11', 'kim', 'kim', 'Admin'),
(2, 'Juan Dela Cruz', 'Tacloban City', '09369420867', '1994-06-01', 'juan', 'juan', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
