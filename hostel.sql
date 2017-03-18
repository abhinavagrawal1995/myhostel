-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2017 at 01:59 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `mastertbl`
--

CREATE TABLE IF NOT EXISTS `mastertbl` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(20) NOT NULL,
  `Occupancy` int(11) NOT NULL,
  `Bathroom` int(11) NOT NULL,
  `AC` int(11) NOT NULL,
  `Gender` int(11) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `mastertbl`
--

INSERT INTO `mastertbl` (`h_id`, `h_name`, `Occupancy`, `Bathroom`, `AC`, `Gender`) VALUES
(2, 'Block I', 3, 0, 0, 1),
(3, 'Block II', 3, 0, 0, 1),
(4, 'Block III', 3, 0, 0, 1),
(5, 'Block IV', 3, 0, 0, 1),
(6, 'Block V', 2, 0, 0, 0),
(7, 'Block V', 3, 0, 0, 0),
(8, 'Block VI', 2, 0, 0, 0),
(9, 'Block VI', 3, 0, 0, 0),
(10, 'Block VII', 2, 1, 0, 1),
(11, 'Block VIII', 2, 1, 0, 1),
(12, 'Block IX', 2, 1, 0, 0),
(13, 'Block X', 2, 1, 0, 0),
(14, 'Block X', 2, 1, 0, 0),
(15, 'Block X', 1, 0, 0, 0),
(16, 'Block X', 1, 0, 0, 0),
(17, 'Block XI', 2, 1, 0, 1),
(18, 'Block XI', 1, 1, 0, 1),
(19, 'Block XII', 2, 1, 1, 1),
(20, 'Block XII', 1, 1, 1, 1),
(25, 'Block XIII', 2, 1, 1, 1),
(26, 'Block XIII', 2, 1, 0, 1),
(27, 'Block XIII', 1, 1, 1, 1),
(28, 'Block XIII', 1, 1, 0, 1),
(29, 'Block XV', 2, 1, 1, 0),
(30, 'Block XV', 2, 1, 0, 0),
(31, 'Block XV', 1, 1, 1, 0),
(32, 'Block XV', 1, 1, 0, 0),
(33, 'Block XIV', 2, 1, 1, 0),
(34, 'Block XIV', 1, 1, 1, 0),
(35, 'Block XVI', 2, 1, 1, 0),
(36, 'Block XVI', 2, 1, 0, 0),
(37, 'Block XVII', 1, 1, 0, 0),
(38, 'Block XVII', 2, 1, 0, 0),
(41, 'Block XVII', 1, 1, 0, 0),
(42, 'Block XIX  (Delux)', 1, 1, 0, 0),
(43, 'Block XX (Delux)', 1, 1, 0, 0),
(44, 'OJAS II', 2, 1, 1, 0),
(45, 'REGENCY', 2, 1, 1, 0),
(46, 'REGENCY', 1, 1, 1, 0),
(47, 'D BLOCK', 2, 0, 0, 0),
(48, 'K BLOCK', 1, 0, 0, 0),
(49, 'NLB (Delux)', 1, 1, 0, 1),
(50, 'Block XVIII (Delux)', 1, 1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
