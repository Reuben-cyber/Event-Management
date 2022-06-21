-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2019 at 05:39 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events_doc`
--
CREATE DATABASE IF NOT EXISTS `events_doc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `events_doc`;

-- --------------------------------------------------------

--
-- Table structure for table `all_events`
--

DROP TABLE IF EXISTS `all_events`;
CREATE TABLE IF NOT EXISTS `all_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comments` longtext,
  `theme` varchar(100) DEFAULT NULL,
  `heads` varchar(100) DEFAULT NULL,
  `sdate` date NOT NULL,
  `edate` date DEFAULT NULL,
  `budget` int(10) DEFAULT NULL,
  `numevents` int(2) DEFAULT NULL,
  `events` text,
  `numparticipants` int(7) DEFAULT NULL,
  `footfall` int(10) DEFAULT NULL,
  `winners` text,
  `topic` varchar(100) DEFAULT NULL,
  `speaker` varchar(100) DEFAULT NULL,
  `numdelegates` int(7) DEFAULT NULL,
  `numteams` int(3) DEFAULT NULL,
  `chiefguests` text,
  `service` text,
  `teamleaders` text,
  `ser_provided_to` text,
  `commofficer` text,
  `numsold` int(7) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `numbooks` int(8) DEFAULT NULL,
  `supplier` text,
  `genres` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_names`
--

DROP TABLE IF EXISTS `event_names`;
CREATE TABLE IF NOT EXISTS `event_names` (
  `e_id` int(4) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(50) NOT NULL,
  `e_type` char(2) NOT NULL,
  `organiser` varchar(100) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_names`
--

INSERT INTO `event_names` (`e_id`, `e_name`, `e_type`, `organiser`) VALUES
(1, 'troika', 'A', ''),
(2, 'emerge', 'A', ''),
(3, 'astitva', 'A', ''),
(4, 'academic prize', 'A', ''),
(5, 'book exhibition', 'A', ''),
(6, 'conference', 'A', ''),
(7, 'cultural inaugration', 'A', ''),
(8, 'cultural prize distribution', 'A', ''),
(9, 'kiosk', 'A', ''),
(10, 'moot court', 'A', ''),
(11, 'ncc day', 'A', ''),
(12, 'nss camp', 'A', ''),
(13, 'nss day', 'A', ''),
(14, 'sports day', 'A', ''),
(15, 'convocation', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `imgid` int(5) NOT NULL,
  `imgname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`imgid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
