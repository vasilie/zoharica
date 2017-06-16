-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 11:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zoharica`
--

-- --------------------------------------------------------

--
-- Table structure for table `glasao`
--

CREATE TABLE IF NOT EXISTS `glasao` (
  `id` int(11) NOT NULL,
  `ime` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glasao`
--

INSERT INTO `glasao` (`id`, `ime`) VALUES
(0, ''),
(0, ''),
(1, 'Gospodja Bo'),
(1, 'Gospodja Bo');

-- --------------------------------------------------------

--
-- Table structure for table `vreme`
--

CREATE TABLE IF NOT EXISTS `vreme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vreme` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vreme`
--

INSERT INTO `vreme` (`id`, `vreme`) VALUES
(1, '0000-00-00 00:00:00'),
(2, '0000-00-00 00:00:00'),
(3, '0000-00-00 00:00:00'),
(4, '2017-06-16 19:14:56'),
(5, '2017-06-16 19:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `vremeg`
--

CREATE TABLE IF NOT EXISTS `vremeg` (
  `id` int(11) NOT NULL,
  `vreme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vremeg`
--

INSERT INTO `vremeg` (`id`, `vreme`) VALUES
(1, 1497648937);

-- --------------------------------------------------------

--
-- Table structure for table `zohari`
--

CREATE TABLE IF NOT EXISTS `zohari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(32) NOT NULL,
  `poeni` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `zohari`
--

INSERT INTO `zohari` (`id`, `ime`, `poeni`) VALUES
(1, 'Nesica', 1),
(2, 'Dzoni', 2),
(3, 'Vasilie', 2),
(4, 'Manu', 1),
(5, 'Adam', 2),
(6, 'Joca', 4),
(7, 'Esteban', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
