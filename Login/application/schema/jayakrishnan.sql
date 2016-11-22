-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2016 at 05:36 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jayakrishnan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`) VALUES
(1, 'jrjayakrishnan6@gmail.com', '701c998aaf2f5b1ae2c36f9797c983fc');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `Post` varchar(200) NOT NULL,
  `timestamp` int(25) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Post` (`Post`),
  FULLTEXT KEY `Post_2` (`Post`),
  FULLTEXT KEY `Post_3` (`Post`),
  FULLTEXT KEY `Post_4` (`Post`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userid`, `Post`, `timestamp`, `date`, `status`) VALUES
(1, 1, '8218 Ullamcorper St.', 1, '11/13/2016', NULL),
(2, 2, 'P.O. Box 725, 5071 Non Ave', 2, '11/13/2016', NULL),
(3, 3, '812-2261 Duis St.', 3, '11/13/2016', NULL),
(4, 4, '6196 Gravida Road', 4, '11/13/2016', NULL),
(5, 5, 'P.O. Box 183, 2057 Eros Rd.', 5, '11/13/2016', NULL),
(6, 6, 'Ap #761-2888 Porttitor Avenue', 6, '11/13/2016', NULL),
(7, 7, '792-5741 Bibendum Rd.', 7, '11/13/2016', NULL),
(8, 8, '9661 Mi St.', 8, '11/13/2016', NULL),
(9, 9, 'P.O. Box 526, 3830 Rutrum Rd.', 9, '11/13/2016', NULL),
(10, 10, 'P.O. Box 996, 3812 Elementum, St.', 10, '11/13/2016', NULL),
(11, 11, '551-4107 Pretium St.', 11, '11/13/2016', NULL),
(12, 12, '212-7891 Eleifend St.', 12, '11/13/2016', NULL),
(13, 13, '578-4924 Id, St.', 13, '11/13/2016', NULL),
(14, 14, 'P.O. Box 845, 7434 Vitae Road', 14, '11/13/2016', NULL),
(15, 15, 'Ap #368-732 At, Road', 15, '11/13/2016', NULL),
(16, 16, 'Ap #703-1591 Facilisis St.', 16, '11/13/2016', NULL),
(17, 17, 'P.O. Box 712, 6080 Nec, Ave', 17, '11/13/2016', NULL),
(18, 18, 'Ap #386-7180 Fringilla. Street', 18, '11/13/2016', NULL),
(19, 19, '9972 Sem Rd.', 19, '11/13/2016', NULL),
(20, 20, 'Ap #680-4413 Metus Street', 20, '11/13/2016', NULL),
(21, 21, '979-7865 Lorem Rd.', 21, '11/13/2016', NULL),
(22, 22, 'Ap #361-5715 Dignissim St.', 22, '11/13/2016', NULL),
(23, 23, 'Ap #868-3185 Nunc St.', 23, '11/13/2016', NULL),
(24, 24, '7132 Egestas Road', 24, '11/13/2016', NULL),
(25, 25, '345-9355 Risus. St.', 25, '11/13/2016', NULL),
(26, 26, 'Ap #790-2935 Interdum. Avenue', 26, '11/13/2016', NULL),
(27, 27, '146-9672 Metus. Rd.', 27, '11/13/2016', NULL),
(28, 28, '9276 Nisl. Street', 28, '11/13/2016', NULL),
(29, 29, '457-3406 Nulla. Avenue', 29, '11/13/2016', NULL),
(30, 30, 'P.O. Box 425, 1682 Aenean Rd.', 30, '11/13/2016', NULL),
(31, 31, '8694 Ut St.', 31, '11/13/2016', NULL),
(32, 32, '868 Fringilla Street', 32, '11/13/2016', NULL),
(33, 33, '4315 Eget Ave', 33, '11/13/2016', NULL),
(34, 34, '364-4438 Non St.', 34, '11/13/2016', NULL),
(35, 35, '470-1555 Auctor. Avenue', 35, '11/13/2016', NULL),
(36, 36, '2783 Donec Road', 36, '11/13/2016', NULL),
(37, 37, '865-3555 Quisque Avenue', 37, '11/13/2016', NULL),
(38, 38, '388-9326 Eget Rd.', 38, '11/13/2016', NULL),
(39, 39, 'Ap #409-1307 Ornare. Road', 39, '11/13/2016', NULL),
(40, 40, 'P.O. Box 733, 4898 A St.', 40, '11/13/2016', NULL),
(41, 41, '4041 Nec, Rd.', 41, '11/13/2016', NULL),
(42, 42, '198-5749 Eget Street', 42, '11/13/2016', NULL),
(43, 43, 'Ap #173-7249 Proin St.', 43, '11/13/2016', NULL),
(44, 44, '539-4298 Donec Rd.', 44, '11/13/2016', NULL),
(45, 45, 'Ap #762-9500 Dignissim St.', 45, '11/13/2016', NULL),
(46, 46, '3187 Ipsum. Rd.', 46, '11/13/2016', NULL),
(47, 47, 'P.O. Box 616, 9404 Luctus. Road', 47, '11/13/2016', NULL),
(48, 48, 'Ap #877-9435 Tellus Ave', 48, '11/13/2016', NULL),
(49, 49, 'P.O. Box 504, 9824 In, Avenue', 49, '11/13/2016', NULL),
(50, 50, '7889 Diam Street', 50, '11/13/2016', NULL),
(51, 51, '340-1399 Augue St.', 51, '11/13/2016', NULL),
(52, 52, '418-4831 Integer Rd.', 52, '11/13/2016', NULL),
(53, 53, '5583 Luctus St.', 53, '11/13/2016', NULL),
(54, 54, '6573 Neque St.', 54, '11/13/2016', NULL),
(55, 55, '3649 Sagittis Road', 55, '11/13/2016', NULL),
(56, 56, 'P.O. Box 355, 9199 Tempor, Ave', 56, '11/13/2016', NULL),
(57, 57, '479-8675 Sit Avenue', 57, '11/13/2016', NULL),
(58, 58, '5046 Donec Road', 58, '11/13/2016', NULL),
(59, 59, 'Ap #572-4967 Vitae St.', 59, '11/13/2016', NULL),
(60, 60, 'Ap #937-4700 Pharetra Street', 60, '11/13/2016', NULL),
(61, 61, '9275 Feugiat Ave', 61, '11/13/2016', NULL),
(62, 62, 'Ap #920-5506 Venenatis Avenue', 62, '11/13/2016', NULL),
(63, 63, 'Ap #799-3939 Pede. St.', 63, '11/13/2016', NULL),
(64, 64, 'Ap #975-5513 Fringilla Ave', 64, '11/13/2016', NULL),
(65, 65, 'P.O. Box 897, 7020 Dolor, Avenue', 65, '11/13/2016', NULL),
(66, 66, 'Ap #612-1021 Eget St.', 66, '11/13/2016', NULL),
(67, 67, '4451 Lorem Rd.', 67, '11/13/2016', NULL),
(68, 68, '3796 Turpis. Road', 68, '11/13/2016', NULL),
(69, 69, '7580 Quis St.', 69, '11/13/2016', NULL),
(70, 70, '957-4191 Commodo Road', 70, '11/13/2016', NULL),
(71, 71, '238-2221 Magna. Avenue', 71, '11/13/2016', NULL),
(72, 72, 'Ap #953-7079 Tempus Road', 72, '11/13/2016', NULL),
(73, 73, '993-9495 Fusce Rd.', 73, '11/13/2016', NULL),
(74, 74, '988 Semper Road', 74, '11/13/2016', NULL),
(75, 75, '702-8972 Tempor St.', 75, '11/13/2016', NULL),
(76, 76, 'P.O. Box 330, 9677 Donec Av.', 76, '11/13/2016', NULL),
(77, 77, 'Ap #953-4407 Pharetra Av.', 77, '11/13/2016', NULL),
(78, 78, 'Ap #450-1584 Tortor, Road', 78, '11/13/2016', NULL),
(79, 79, 'P.O. Box 733, 9625 Vestibulum Avenue', 79, '11/13/2016', NULL),
(80, 80, 'P.O. Box 566, 8344 Accumsan Avenue', 80, '11/13/2016', NULL),
(81, 81, 'Ap #304-5223 Nullam Street', 81, '11/13/2016', NULL),
(82, 82, '3101 Arcu. Road', 82, '11/13/2016', NULL),
(83, 83, '375-1801 Pede. Road', 83, '11/13/2016', NULL),
(84, 84, 'Ap #169-5982 Magna St.', 84, '11/13/2016', NULL),
(85, 85, 'Ap #428-7663 Pede. Ave', 85, '11/13/2016', NULL),
(86, 86, 'P.O. Box 920, 5318 Porttitor Av.', 86, '11/13/2016', NULL),
(87, 87, '427-2965 Sodales St.', 87, '11/13/2016', NULL),
(88, 88, 'P.O. Box 583, 9421 Erat, St.', 88, '11/13/2016', NULL),
(89, 89, '766-3613 Risus. St.', 89, '11/13/2016', NULL),
(90, 90, '871-9710 Risus, St.', 90, '11/13/2016', NULL),
(91, 91, 'P.O. Box 474, 7248 Elit, St.', 91, '11/13/2016', NULL),
(92, 92, 'P.O. Box 346, 4463 Faucibus St.', 92, '11/13/2016', NULL),
(93, 93, '566-824 Dolor, Street', 93, '11/13/2016', NULL),
(94, 94, 'Ap #428-9662 Interdum. Ave', 94, '11/13/2016', NULL),
(95, 95, 'P.O. Box 643, 5027 Eget Street', 95, '11/13/2016', NULL),
(96, 96, 'Ap #420-3745 Scelerisque Rd.', 96, '11/13/2016', NULL),
(97, 97, '5916 Fusce Rd.', 97, '11/13/2016', NULL),
(98, 98, 'Ap #382-4765 Risus. Rd.', 98, '11/13/2016', NULL),
(99, 99, 'P.O. Box 803, 7252 Justo Av.', 99, '11/13/2016', NULL),
(100, 100, '833-8351 Litora St.', 100, '11/13/2016', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `facebookid` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Activationcode` varchar(150) DEFAULT NULL,
  `SignupTime` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `name`, `Email`, `facebookid`, `Password`, `Activationcode`, `SignupTime`, `Status`, `user_type`) VALUES
(11, 'Jayakrishnan', 'jrjayakrishnan6@gmail.com', NULL, '701c998aaf2f5b1ae2c36f9797c983fc', NULL, '2016-11-22 01:31:54pm', 2, 1),
(12, 'Jaya Krishnan', NULL, '1161133374006609', NULL, NULL, '2016-11-22 01:32:26pm', 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
