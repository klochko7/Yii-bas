-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2014 at 08:20 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bones`
--

-- --------------------------------------------------------

--
-- Table structure for table `experiment`
--

CREATE TABLE IF NOT EXISTS `experiment` (
  `id_exp` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bones_num` int(10) NOT NULL,
  `throws` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_exp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `experiment`
--

INSERT INTO `experiment` (`id_exp`, `date`, `time`, `name`, `bones_num`, `throws`) VALUES
(27, '2014-07-29', '12:30:20', 'John', 2, 36000),
(28, '2014-07-29', '12:35:44', 'John', 2, 36000),
(29, '2014-07-29', '14:12:12', 'John', 2, 36000);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id_result` int(10) NOT NULL AUTO_INCREMENT,
  `num` int(10) NOT NULL,
  `counts` int(10) NOT NULL,
  `id_exp` int(11) NOT NULL,
  PRIMARY KEY (`id_result`),
  KEY `id_exp` (`id_exp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id_result`, `num`, `counts`, `id_exp`) VALUES
(1, 2, 997, 28),
(2, 3, 2001, 28),
(3, 4, 3006, 28),
(4, 5, 4005, 28),
(5, 6, 4994, 28),
(6, 7, 6005, 28),
(7, 8, 4996, 28),
(8, 9, 3988, 28),
(9, 10, 3013, 28),
(10, 11, 1998, 28),
(11, 12, 997, 28);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`id_exp`) REFERENCES `experiment` (`id_exp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
