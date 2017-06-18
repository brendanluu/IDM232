-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2017 at 03:04 AM
-- Server version: 5.6.33-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imbluu5_idm232-courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `siteTitle` varchar(100) NOT NULL,
  `siteLink` varchar(200) NOT NULL,
  `siteImage` varchar(100) NOT NULL,
  `siteDetails` text NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`siteTitle`, `siteLink`, `siteImage`, `siteDetails`, `ID`) VALUES
('THE CAGE CAGE', 'http://www.thecagecage.com/', 'imgs\\thecagecage.jpg', '', 3),
('Eyexpo', 'http://eyexpo.com/vr/shoppingdemo1/index.html', 'imgs\\eyexpo.jpg', '', 4),
('Zuumo', 'https://moyashipan.github.io/zuumo/', 'imgs\\zuumo.jpg', '', 2),
('Sense of Promise', 'http://senseofpromise.com/', 'imgs\\senseofpromise.jpg', '', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
