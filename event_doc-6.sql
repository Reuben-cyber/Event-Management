-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2019 at 09:52 AM
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
-- Database: `event_doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_events`
--

DROP TABLE IF EXISTS `all_events`;
CREATE TABLE IF NOT EXISTS `all_events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comments` longtext,
  `Venue` varchar(100) NOT NULL,
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
  `imagename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_events`
--

INSERT INTO `all_events` (`id`, `name`, `comments`, `Venue`, `theme`, `heads`, `sdate`, `edate`, `budget`, `numevents`, `events`, `numparticipants`, `footfall`, `winners`, `topic`, `speaker`, `numdelegates`, `numteams`, `chiefguests`, `service`, `teamleaders`, `ser_provided_to`, `commofficer`, `numsold`, `category`, `numbooks`, `supplier`, `genres`, `imagename`) VALUES
(1, 'Troika', 'Annual Event', 'college campus', 'magical', 'bharati', '2019-01-10', '2019-01-12', 50000, 10, 'abc \r\nefg', 20, 200, 'padmashree', '123', 'abcd', 10, 15, 'qwerty', 'typo', 'asdf', 'ghjk', 'lkjh', 78, 'tyui', 20, 'navneet', 'fghj', ''),
(2, 'Emerge', 'bestemerge', 'library', 'emerge', 'pushp', '2019-06-30', '2019-07-03', 1000, 5, 'WHDUOHqwoihdpiQJHWD/IHqhfwdo;iQH;OIFHC;OIqh', 190, 190, 'reuben', 'idk', 'pADMA2', NULL, 2, NULL, NULL, 'sam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 'academic prize', 'wert', '', 'asdf', 'fghj', '2019-04-10', '2019-04-11', 4500, 2, 'tbhtrgtjnjytbhgtrv', 4, 20, '3', 'dfvg', 'sdfhjghjgj', 7, 6, 'tff', 'etgr', 'cfr', 'ccc', 'rrr', 89, 'cfffffffffffffffffff', 489, 'cfrffe', 'jkl', ''),
(4, 'academic prize', 'wert', 'clg', 'asdf', 'fghj', '2019-04-10', '2019-04-11', 4500, 2, 'tbhtrgtjnjytbhgtrv', 4, 20, '3', 'dfvg', 'sdfhjghjgj', 7, 6, 'tff', 'etgr', 'cfr', 'ccc', 'rrr', 89, 'cfffffffffffffffffff', 489, 'cfrffe', 'jkl', ''),
(5, 'academic prize', 'annual', 'clg', 'serious', 'pushp', '2019-06-07', '2019-06-09', 50000, 0, 'asdf', 20, 89, '8', 'ghjk', 'yuio', 89, 35, 'rty', 'yui', 'fghj', 'wetrt', 'qwerry', 9, 'qwert', 8, 'yuio', 'ghjk', ''),
(6, 'academic prize', 'annual', 'clg', 'serious', 'pushp', '2019-06-07', '2019-06-09', 50000, 0, 'asdf', 20, 89, '8', 'ghjk', 'yuio', 89, 35, 'rty', 'yui', 'fghj', 'wetrt', 'qwerry', 9, 'qwert', 8, 'yuio', 'ghjk', 'Perfect-4K-Wallpaper-Reddit-Amazing-free-HD-3D-wallpapers-collection-You-can-download-best-3D-desktop-backgrounds.-3D-windows-wallpapers-.jpg'),
(7, 'academic prize', 'annual', 'clg', 'serious', 'asdf', '2019-06-08', '2019-06-09', 679, 8, 'asdfgh', 7, 89, '7', 'ghjj', 'hjkl', 3, 4, 'rtyu', 'tyui', 'piy', 'ghjk', 'fghj', 6, 'rtyu', 8, 'hjkl', 'rty', 'Perfect-4K-Wallpaper-Reddit-Amazing-free-HD-3D-wallpapers-collection-You-can-download-best-3D-desktop-backgrounds.-3D-windows-wallpapers-.jpg'),
(8, 'academic prize', 'asdf', 'clg', 'serious', 'dfg', '2019-06-08', '2019-06-09', 789, 78, 'sdfg', 90, 789, '56', 'ghjk', 'hjkl', 5, 4, 'ghj', 'rty', 'dfgh', 'gj', 'sdfg', 78, 'ghjk', 54, 'fg', 'jhg', 'abc.JPG');

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

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
(15, 'convocation', 'A', ''),
(16, 'Group Discussion', 'T', '');

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
-- Table structure for table `master_organiser`
--

DROP TABLE IF EXISTS `master_organiser`;
CREATE TABLE IF NOT EXISTS `master_organiser` (
  `sname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `event` text NOT NULL,
  UNIQUE KEY `sname` (`sname`),
  UNIQUE KEY `date` (`date`),
  UNIQUE KEY `date_2` (`date`),
  UNIQUE KEY `date_3` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_organiser`
--

INSERT INTO `master_organiser` (`sname`, `date`, `event`) VALUES
('bHARATI', '2019-06-05', 'Emerge');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Uname`, `type`, `pass`, `Name`) VALUES
(1, 'Sapte', 'USER', 'Sapte@1234', 'Apte Sonal'),
(2, 'Slokre', 'USER', 'Slokre@1234', 'Lokre Shilpi'),
(3, 'Saditi', 'USER', 'Saditi@1234', 'Aditi Samir'),
(4, 'Mrajhans', 'USER', 'Mrajhans@1234', 'Rajhans Mrugakshi'),
(5, 'Ajog', 'USER', 'Ajog@1234', 'Jog Amruta'),
(6, 'Bdeo', 'USER', 'Bdeo@1234', 'Deo Bageshree'),
(7, 'Sgaikwad', 'USER', 'Sgaikwad@1234', 'Surekha Gaikwad'),
(8, 'Kbadhwar', 'USER', 'Kbadhwar@1234', 'Badhwar Kaveri'),
(9, 'Pbhise', 'USER', 'Pbhise@1234', 'Bhise Parija'),
(10, 'Sgoenka', 'USER', 'Sgoenka@1234', 'Goenka Sarita'),
(11, 'Ukelkar', 'USER', 'Ukelkar@1234', 'Kelkar Ulhas'),
(12, 'Sdeshpande', 'USER', 'Sdeshpande@1234', 'Deshpande  Shalaka'),
(13, 'Snaiksatam', 'USER', 'Snaiksatam@1234', 'Naiksatam Sampada'),
(14, 'Sshetty', 'USER', 'Sshetty@1234', 'Shetty Smita'),
(15, 'Mwadekar', 'USER', 'Summers@1234', 'Wadekar Manjusha'),
(16, 'Sbhattacharya', 'USER', 'Sbhattacharya@1234', 'Bhattacharya Sumedha'),
(17, 'Stamhane', 'USER', 'Stamhane@1234', 'Tamhane Sanjeev'),
(18, 'Bpathare', 'USER', 'Bpathare@1234', 'Pathare Bharati'),
(19, 'Rbhuyar', 'USER', 'Rbhuyar@1234', 'Bhuyar Rahul'),
(20, 'Ibihani', 'USER', 'Ibihani@1234', 'Ishika Bihani'),
(21, 'Dkotwal', 'USER', 'Dkotwal@1234', 'Kotwal Dhanashree'),
(22, 'Vdeshpande', 'USER', 'Vdeshpande@1234', 'Deshpande Vaibhav'),
(23, 'Vhasamnis', 'USER', 'Vhasamnis@1234', 'Hasamnis Vinaya'),
(24, 'Spatil', 'USER', 'Spatil@1234', 'Patil Sachin'),
(25, 'Vtarkunde', 'USER', 'Vtarkunde@1234', 'Tarkunde Veena'),
(26, 'Sgangakhedkar', 'USER', 'Sgangakhedkar@1234', 'Gangakhedkar Shantanu S'),
(27, 'Malok', 'USER', 'Malok@1234', 'Alok Mohogaonkar'),
(28, 'Tballal', 'USER', 'Tballal@1234', 'Tejaswini Ballal'),
(29, 'Sgosavi', 'USER', 'Sgosavi@1234', 'S.G.Gosavi'),
(30, 'Asalampure', 'USER', 'Asalampure@1234', 'A.A.Salampure'),
(31, 'Dedke', 'USER', 'Dedke@1234', 'D.N.Edke'),
(32, 'Hpawar', 'USER', 'Hpawar@1234', 'H.N.Pawar'),
(33, 'Gborhude', 'USER', 'HGborhude@1234', 'G.N.Borhude'),
(34, 'Mpawar', 'USER', 'Mpawar@1234', 'M.T.Pawar'),
(35, 'Rshinde', 'USER', 'Rshinde@1234', 'R.B.Shinde'),
(36, 'Sdange', 'USER', 'Sdange@1234', 'S.S.Dange'),
(37, 'Nowhal', 'USER', 'Nowhal@1234', 'N.A.Owhal'),
(38, 'Pkulkarni', 'USER', 'Pkulkarni@1234', 'P.P.Kulkarni'),
(39, 'Vkondhalkar', 'USER', 'Vkondhalkar@1234', 'V.M.Kondhalkar'),
(40, 'Pnaik', 'USER', 'Pnaik@1234', 'P.G.Naik'),
(41, 'Ssalve', 'USER', 'Ssalve@1234', 'S.R.Salve'),
(42, 'Okaldhonkar', 'USER', 'Okaldhonkar@1234', 'O.V.Kaldhonkar'),
(43, 'Sranade', 'USER', 'Sranade@1234', 'S.M.Ranade'),
(44, 'Sdodke', 'USER', 'Sdodke@1234', 'S.D.Dodke'),
(45, 'Skarmudi', 'USER', 'Skarmudi@1234', 'S.S.Karmudi'),
(46, 'Abhave', 'USER', 'Abhave@1234', 'Bhave.J.A'),
(47, 'Cthatte', 'USER', 'Cthatte@1234', 'Chintamani.Thatte'),
(48, 'Rbhuyar', 'USER', 'Rbhuyar@1234', 'Rahul.Bhuyar'),
(49, 'Mchandak', 'USER', 'Mchandak@1234', 'Chandak.Manasi'),
(50, 'Spatil', 'USER', 'Spatil@1234', 'Patil.Sachin'),
(51, 'Bpathare', 'USER', 'Bpathare@1234', 'Bharati.Pathare'),
(52, 'Mmarathe', 'USER', 'Mmarathe@123', 'Meenakshi.Marathe'),
(53, 'Emasurkar', 'USER', 'Emasurkar@123', 'Masurkar.Ekta'),
(54, 'Crawal', 'USER', 'Crawal@1234', 'C.N.Rawal'),
(55, 'Jlanjekar', 'USER', 'Jlanjekar@1234', 'J.R.Lanjekar'),
(56, 'Swaghmare', 'USER', 'Swaghmare@1234', 'S.V.Waghmare'),
(57, 'Apuranik', 'USER', 'Apuranik@1234', 'A.M.Puranik'),
(58, 'Gbengale', 'USER', 'Gbengale@1234', 'G.K.Bengale'),
(59, 'Sdesai', 'USER', 'Sdesai@1234', 'S.D.Desai'),
(60, 'Rkuchekar', 'USER', 'Rkuchekar@1234', 'R.P.Kuchekar'),
(61, 'Sgarje', 'USER', 'Sgarje@1234', 'S.N.Garje'),
(62, 'Vdeshpande', 'USER', 'Vdeshpande@1234', 'V.H.Deshpande'),
(63, 'Dpowdel', 'USER', 'Dpowdel@1234', 'Deepak.Powdel'),
(64, 'Rgokhle', 'USER', 'ERgokhle@1234', 'R.D.Gokhle'),
(65, 'Psathe', 'USER', 'Psathe@1234', 'P.V.Sathe'),
(66, 'Ymahajan', 'USER', 'Ymahajan@1234', 'Y.P.Mahajan'),
(67, 'Kbhosle', 'USER', 'Kbhosle@1234', 'K.S.Bhosle'),
(68, 'Prajguru', 'USER', 'Prajguru@1234', 'P.R.Rajguru'),
(69, 'Mamrule', 'USER', 'Mamrule@1234', 'M.N.Amrule'),
(70, 'Snirmale', 'USER', 'Snirmale@1234', 'S.H.Nirmale'),
(71, 'Mgokhle', 'USER', 'Mgokhle@1234', 'M.V.Gokhle'),
(72, 'Vsalunke', 'USER', 'Vsalunke@1234', 'V.A.Salunke'),
(73, 'Abagwan', 'USER', 'Abagwan@1234', 'A.S.Bagwan'),
(74, 'Bupadhye', 'USER', 'Bupadhye@1234', 'Bharati.Upadhye'),
(75, 'Mozarde', 'USER', 'Vmahajan@1234', 'V.Y.Mahajan'),
(76, 'Jgadekar', 'USER', 'Jgadekar@1234', 'J.B.Gadekar'),
(77, 'Svaze', 'USER', 'Svaze@1234', 'S.A.Vaze'),
(78, 'Vbhrahmankar', 'USER', 'Vbhrahmankar@1234', 'V.P.Bhrahmankar'),
(79, 'Mgavaskar', 'USER', 'Mgavaskar@1234', 'M.K.Gavaskar'),
(80, 'Cnaikwadi', 'USER', 'Cnaikwadi@1234', 'C.N.Naikwadi'),
(81, 'Sdumbre', 'USER', 'Sdumbre@1234', 'S.G.Dumbre'),
(82, 'Vdhiwar', 'USER', 'Vdhiwar@1234', 'V.N.Dhiwar'),
(83, 'Rtambe', 'USER', 'Rtambe@1234', 'R.A.Tambe'),
(84, 'Rdeshpande', 'USER', 'Rdeshpande@1234', 'R.M.Deshpande'),
(85, 'Akale', 'USER', 'Akale@1234', 'A.Y.Kale'),
(86, 'Snaseri', 'USER', 'Snaseri@1234', ' Samrudhi.Naseri'),
(87, 'Nghorpade', 'USER', 'Nghorpade@1234', 'N.S.Ghorpade'),
(88, 'KNkulkarni', 'USER', 'KNkulkarni@1234', 'K.N.Kulkarni'),
(89, 'Avidhate', 'USER', 'Avidhate@1234', 'A.N.Vidhate'),
(90, 'Sajmire', 'USER', 'Sajmire@1234', 'S.M.Ajmire'),
(91, 'Pbarve', 'USER', 'Pbarve@1234', 'Prasad.Barve'),
(92, 'Pjadhav', 'USER', 'Pjadhav@1234', 'P.M.Jadhav'),
(93, 'Spowar', 'USER', 'Spowar@1234', 'Sunanda.Powar'),
(94, 'Gwalimbe', 'USER', 'Gwalimbe@1234', 'Gauri.Walimbe'),
(95, 'Sphadke', 'USER', 'Sphadke@1234', 'Suruchi.Phadke'),
(96, 'Kkulkarni', 'USER', 'Kkulkarni@1234', 'Kartiki.Kulkarni'),
(97, 'Skulkarni', 'USER', 'Skulkarni@1234', 'Sheetal.Kulkarni'),
(98, 'Pagnihotri', 'USER', 'Pagnihotri@1234', 'Pratima.Agnihotri'),
(99, 'Kshintre', 'USER', 'Kshintre@1234', 'Kalyani.Shintre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
