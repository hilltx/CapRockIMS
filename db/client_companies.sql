-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2012 at 06:47 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_session_mgr`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_companies`
--

CREATE TABLE IF NOT EXISTS `client_companies` (
  `cc_id` int(9) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'Client Company Id',
  `cc_account_number` varchar(30) NOT NULL,
  `cc_name` varchar(30) NOT NULL COMMENT 'Name of Company',
  `cc_status` varchar(10) NOT NULL COMMENT 'Status of Company',
  PRIMARY KEY (`cc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Stores primary data for client companies' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client_companies`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
