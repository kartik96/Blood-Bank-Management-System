-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2016 at 10:54 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`username`, `password`) VALUES
('kartik', 123),
('kartikay', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE IF NOT EXISTS `camps` (
  `name` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`name`, `venue`, `date`, `time`) VALUES
('Ludhiana', 'Sarabha Nagar', '2015-11-30', '2:40PM'),
('v vkdjvkjkfdj', 'dvdv pos', '0000-00-00', '21:28'),
('fhgdifiu', 'dhvukdsu', '1223-11-22', '12:33');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `sno` int(20) NOT NULL AUTO_INCREMENT,
  `city` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`sno`, `city`, `area`, `date`, `time`, `name`) VALUES
(1, 'ludhiana', 'model town', '2015-10-23', '09:40:00', 'kartik'),
(2, 'patiala', 'leela bhavan', '2015-10-17', '09:30:00', 'kartikayt'),
(3, 'chandigarh', 'sector 17', '2015-10-10', '07:30:00', 'kartik');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `email` varchar(1000) NOT NULL,
  `username` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `weight` int(100) NOT NULL,
  `lastdonated` varchar(100) NOT NULL,
  `dateofsubmission` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`email`, `username`, `age`, `gender`, `weight`, `lastdonated`, `dateofsubmission`) VALUES
('kartikgogia42@gmail.com', '', 12, 'male', 12, '2996-02-02', '0000-00-00 00:00:00'),
('kartikgogia42@gmail.com', '', 8, 'male', 12, '1996-02-02', '2015-11-26 11:42:26'),
('kartikgogia42@gmail.com', 'kartik', 27, 'male', 12, '2996-02-02', '2015-11-26 13:30:10'),
('kartikgogia42@gmail.com', 'kartik', 20, 'male', 34, '2996-02-02', '2015-11-26 13:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `sno` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `bg` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pn` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `bg`, `city`, `pn`) VALUES
(1, 'kartik', 123, 'o+', 'ludhiana', 943546),
(2, 'sanchey', 1234, 'b+', 'khanna', 2147483647),
(3, 'seema', 1234, 'b+', 'ludhiana', 2147483647),
(4, 'sonali', 1234, 'c-', 'patiala', 9587985),
(5, 'sonali123', 0, 'b+', 'khanaa', 2147483647),
(6, 'kartik123', 1234, 'o+', 'ludhiana', 894589358),
(7, 'kartik1234', 1234, 'o+', 'ludhiana', 2147483647),
(8, 'kartik12', 1234, 'o+', 'ludhiana', 2147483647),
(9, 'rupali', 123, 'o+', 'ludhiana', 2147483647),
(10, 'kartik1', 123, 'o+', 'ludhiana', 2147483647),
(11, 'kartik1245', 1234, 'o+', 'ludhiana', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'kartik', 123),
(2, 'tushar', 1234),
(3, 'kartik', 123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
