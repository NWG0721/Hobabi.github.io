-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2024 at 10:18 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hobabi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_tbl`
--

DROP TABLE IF EXISTS `aboutus_tbl`;
CREATE TABLE IF NOT EXISTS `aboutus_tbl` (
  `AU_ID` int NOT NULL AUTO_INCREMENT,
  `AU_TEXT` varchar(150) COLLATE utf8mb4_persian_ci NOT NULL,
  `AU_PHONE` varchar(15) COLLATE utf8mb4_persian_ci NOT NULL,
  `AU_EMAIL` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `AU_ADDRESS` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`AU_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents_tbl`
--

DROP TABLE IF EXISTS `contents_tbl`;
CREATE TABLE IF NOT EXISTS `contents_tbl` (
  `CONTENTS_ID` int NOT NULL AUTO_INCREMENT,
  `CONTENTS_FOOTER` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `CONTENTS_FEEDER1` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `CONTENTS_HEADPIC` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `CONTENTS_FEEDER2` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `CONTENTS_FEEDER3` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `CONTENTS_FOOTER1` varchar(150) COLLATE utf8mb4_persian_ci NOT NULL,
  `CONTENTS_FOOTER2` varchar(150) COLLATE utf8mb4_persian_ci NOT NULL,
  `CONTENTS_FOOTER3` varchar(150) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`CONTENTS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `contents_tbl`
--

INSERT INTO `contents_tbl` (`CONTENTS_ID`, `CONTENTS_FOOTER`, `CONTENTS_FEEDER1`, `CONTENTS_HEADPIC`, `CONTENTS_FEEDER2`, `CONTENTS_FEEDER3`, `CONTENTS_FOOTER1`, `CONTENTS_FOOTER2`, `CONTENTS_FOOTER3`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', '8');

-- --------------------------------------------------------

--
-- Table structure for table `massage_tbl`
--

DROP TABLE IF EXISTS `massage_tbl`;
CREATE TABLE IF NOT EXISTS `massage_tbl` (
  `MASSAGE_ID` int NOT NULL AUTO_INCREMENT,
  `MASSAGER_NAME` varchar(150) COLLATE utf8mb4_persian_ci NOT NULL,
  `MASSAGER_EMAIL` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `MASSAGER_TEXT` varchar(3000) COLLATE utf8mb4_persian_ci NOT NULL,
  `MASSAGE_DATE` datetime NOT NULL,
  PRIMARY KEY (`MASSAGE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `massage_tbl`
--

INSERT INTO `massage_tbl` (`MASSAGE_ID`, `MASSAGER_NAME`, `MASSAGER_EMAIL`, `MASSAGER_TEXT`, `MASSAGE_DATE`) VALUES
(1, 'NWG0721', 'nima.alizadeh1386@gmail.com', 'Hello world', '2024-05-11 07:16:06'),
(2, 'NWG0721', 'nima.alizadeh1386@gmail.com', 'Hello world', '2024-05-11 07:18:12'),
(3, 'NBG0721', 'nazanin.gholamzadeh1386@gmail.com', 'سلام نیما', '2024-05-11 07:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `type_tbl`
--

DROP TABLE IF EXISTS `type_tbl`;
CREATE TABLE IF NOT EXISTS `type_tbl` (
  `TYP_ID` int NOT NULL AUTO_INCREMENT,
  `TYP_NAME` varchar(120) COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`TYP_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `type_tbl`
--

INSERT INTO `type_tbl` (`TYP_ID`, `TYP_NAME`) VALUES
(1, 'سینما و تئاتر\r\n'),
(2, 'موسیقی و هنر'),
(3, 'علم و اکتشافات فضایی\r\n'),
(4, 'طراحی و معماری\r\n'),
(5, 'محیط زیست و حفاظت از طبیعت\r\n'),
(6, 'فرهنگ و هویت ملی\r\n'),
(7, 'مسافرت و گردشگری\r\n'),
(8, 'فناوری و تکنولوژی\r\n'),
(9, 'سلامتی و بهداشت\r\n'),
(10, 'گیم و سرگرمی');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

DROP TABLE IF EXISTS `users_tbl`;
CREATE TABLE IF NOT EXISTS `users_tbl` (
  `USER_ID` int NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(120) COLLATE utf8mb4_persian_ci NOT NULL,
  `USER_PASS` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `USER_ROLE` int NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`USER_ID`, `USER_NAME`, `USER_PASS`, `USER_ROLE`) VALUES
(1, 'NWG0721', 'nazanin0721', 1);

-- --------------------------------------------------------

--
-- Table structure for table `write_tbl`
--

DROP TABLE IF EXISTS `write_tbl`;
CREATE TABLE IF NOT EXISTS `write_tbl` (
  `WRITE_ID` int NOT NULL AUTO_INCREMENT,
  `WRITE_TITLE` varchar(120) COLLATE utf8mb4_persian_ci NOT NULL,
  `WRITE_PIC` varchar(260) COLLATE utf8mb4_persian_ci NOT NULL,
  `WRITE_TEXT` mediumtext COLLATE utf8mb4_persian_ci NOT NULL,
  `WRITE_AUTHOR` int NOT NULL,
  `WRITE_STATUS` int NOT NULL,
  `WRITE_TYPE` int NOT NULL,
  `WRITE_DATE` datetime NOT NULL,
  PRIMARY KEY (`WRITE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `write_tbl`
--

INSERT INTO `write_tbl` (`WRITE_ID`, `WRITE_TITLE`, `WRITE_PIC`, `WRITE_TEXT`, `WRITE_AUTHOR`, `WRITE_STATUS`, `WRITE_TYPE`, `WRITE_DATE`) VALUES
(8, 'جدید ترین ها ', './../../../Pictures/Source/Screenshot 2024-05-03 113310.png', 'این جدیده یا....(با لحن صارمی)', 1, 69, 8, '2024-05-11 13:58:24'),
(7, 'سلام دنیا!', './../../../Pictures/Source/Screenshot 2024-05-03 113310.png', 'چرا من همش دارم مینویسم.', 1, 69, 5, '2024-05-11 12:52:48'),
(9, 'تکنولوژی', './../../../Pictures/Source/Screenshot 2024-05-03 113310.png', 'اینا کار من نیا کارتکلونوژیه یا!....\r\nبا لحن صارمی', 1, 69, 8, '2024-05-11 18:41:22'),
(11, 'این قرار نیست بیادش', './../../../Pictures/Source/Screenshot 2024-05-03 162547.png', 'این قرار نیست بیادش', 1, 45, 2, '2024-05-11 20:23:24'),
(12, 'سیبسبسبب', './../../../Pictures/Source/Screenshot 2024-05-11 003106.png', 'سیبسیبسبسبسسیلاقلبتابلاتب', 1, 45, 6, '2024-05-11 20:25:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
