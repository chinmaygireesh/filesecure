-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 07:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gec_crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `updated_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Confidentiality` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `description`, `file`, `username`, `updated_time`, `Confidentiality`) VALUES
(3, 'Background Image', 'Screenshot', 'fran.png', 'jeevgeo99', '2021-06-06 12:12:21', NULL),
(9, 'File', 'Testing', 'bb.jpg', 'jeevgeo99', '2021-06-07 20:00:46', NULL),
(10, 'kkskldal', 'samdlad', 'bb.jpg', 'jeevgeo99', '2021-06-07 21:25:03', ''),
(11, 'kkskldal', 'samdlad', 'basketball.jpg', 'jeevgeo99', '2021-06-07 21:26:43', ''),
(12, 'sadas', 'asdwas', 'basketball.jpg', 'jeevgeo99', '2021-06-07 21:28:57', ''),
(13, 'sadas', 'asdwas', 'Asymmetric-Encryption.png', 'jeevgeo99', '2021-06-07 21:32:11', 'LOW');

-- --------------------------------------------------------

--
-- Table structure for table `file_request`
--

CREATE TABLE IF NOT EXISTS `file_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `owner_id` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `file_request`
--

INSERT INTO `file_request` (`id`, `file_id`, `username`, `status`, `owner_id`, `path`) VALUES
(1, '9', 'chinmay98', '', 'jeevgeo99', ''),
(2, '13', 'chinmay98', '', 'jeevgeo99', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`, `gender`, `course`, `email`, `address`) VALUES
(36, 'JEEVAN GEORGE JOHN', 'jeevgeo99', 'jeevan', 'MALE', 'UG', 'jeevgeo99@gmail.com', 'PARAYANTHARA EDAPPURAYIL,EDAYARANMULA WEST P.O'),
(37, 'Chinmay Gireesh G.S', 'chinmay98', 'chinmay', 'MALE', 'PG', 'chinmay@gmail.com', 'SAI BHAVAN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
