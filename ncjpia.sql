-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 07:34 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ncjpia`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_control_list`
--

CREATE TABLE IF NOT EXISTS `access_control_list` (
`ID` int(11) NOT NULL,
  `module_ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`ID` int(10) unsigned NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `account_type_ID` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 - active, 2 - draft, 3 - deactivated, 4 -delete'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `username`, `password`, `account_type_ID`, `status`) VALUES
(1, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 9, 1),
(8, '1', '356a192b7913b04c54574d18c28d46e6395428ab', 9, 1),
(10, '12', '7b52009b64fd0a2a49e6d8a939753077792b0554', 9, 1),
(13, '122', '05a8ea5382b9fd885261bb3eed0527d1d3b07262', 9, 1),
(15, '1221', '22a366e578fc19525be71b6b3013ef8cc5cb1a74', 9, 1),
(16, 'sa1', 'c600c917076fb4eae062f1577526a5780ad3840e', 9, 1),
(18, 's2a1', 'f1172461ebbe8eb86509642dc3260d085c9eab4b', 9, 1),
(20, 's22a1', 'abe2ab159982efc9a095e85ec64edf8bc46c2b0f', 9, 1),
(22, 's222a1', 'ec76e4e7ac713448b4488cf35f601fce3682b8ad', 9, 1),
(24, 's222sa1', '5f7f66caf3adac0c175d352f7c3197ea83b5b098', 9, 1),
(25, 's222sda1', '459e3c9c5b639447b53f247f9a9be7d055acd5ae', 9, 1),
(26, 's222sdda1', 'c5cf75faee0206f77e4936ba7c4c8f00b1a3d905', 9, 1),
(27, 'johnplenos1', 'ff11e22b5a83f244f50a01d87afa3badd6416c66', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_event_participation`
--

CREATE TABLE IF NOT EXISTS `account_event_participation` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `event_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `account_event_participation`
--

INSERT INTO `account_event_participation` (`ID`, `account_ID`, `event_ID`) VALUES
(1, 18, 0),
(2, 20, 3),
(3, 22, 3),
(4, 22, 1),
(5, 22, 2),
(6, 24, 3),
(7, 24, 1),
(8, 24, 2),
(9, 25, 3),
(10, 25, 1),
(11, 25, 2),
(12, 26, 3),
(13, 26, 1),
(14, 26, 2),
(15, 27, 3),
(16, 27, 1),
(17, 27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_information`
--

CREATE TABLE IF NOT EXISTS `account_information` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `local_chapter_position_ID` int(11) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `complete_address` text NOT NULL,
  `identification_file_uploaded_ID` int(11) NOT NULL,
  `tshirt_size` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `account_information`
--

INSERT INTO `account_information` (`ID`, `account_ID`, `first_name`, `middle_name`, `last_name`, `local_chapter_position_ID`, `contact_number`, `email_address`, `complete_address`, `identification_file_uploaded_ID`, `tshirt_size`) VALUES
(1, 13, '122', '232', '', 0, '', '', '', 0, 0),
(2, 15, '1221', '2322', '', 0, '', '', '', 0, 0),
(3, 16, 's', '2322', 'a', 2, '2', '4', '', 0, 1),
(4, 18, 's2', '2322', 'a', 2, '2', '4', '', 0, 1),
(5, 20, 's22', '2322', 'a', 2, '2', '4', '', 0, 1),
(6, 22, 's222', '2322', 'a', 2, '2', '4', '', 0, 1),
(7, 24, 's222s', '2322', 'a', 2, '2', '4', '', 0, 1),
(8, 25, 's222sd', '2322', 'a', 2, '2', '4', '', 0, 1),
(9, 26, 's222sdd', '2322', 'a', 2, '2', '4', '', 0, 1),
(10, 27, 'john', 'retubado', 'plenos', 2, '2', '4', '', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_local_chapter_group`
--

CREATE TABLE IF NOT EXISTS `account_local_chapter_group` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `local_chapter_group_ID` int(11) NOT NULL,
  `member_type` int(11) NOT NULL COMMENT '1 - leader, 2 - member'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `account_local_chapter_group`
--

INSERT INTO `account_local_chapter_group` (`ID`, `account_ID`, `local_chapter_group_ID`, `member_type`) VALUES
(1, 13, 13, 0),
(2, 15, 15, 0),
(3, 16, 16, 12),
(4, 18, 18, 12),
(5, 20, 20, 12),
(6, 22, 22, 12),
(7, 24, 24, 12),
(8, 25, 25, 12),
(9, 26, 26, 12),
(10, 27, 27, 12);

-- --------------------------------------------------------

--
-- Table structure for table `account_payment`
--

CREATE TABLE IF NOT EXISTS `account_payment` (
`ID` int(11) NOT NULL,
  `assessment_item_ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `account_payment`
--

INSERT INTO `account_payment` (`ID`, `assessment_item_ID`, `account_ID`, `amount`) VALUES
(1, 1, 27, 1000),
(2, 1, 27, 1200),
(3, 1, 27, 1300),
(4, 2, 27, 1400);

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE IF NOT EXISTS `account_type` (
`ID` int(10) unsigned NOT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`ID`, `description`) VALUES
(2, 'Vice President for Finance'),
(3, 'Registration Committee'),
(4, 'Audit Committee'),
(8, 'Hotel Accomodation'),
(9, 'Normal User');

-- --------------------------------------------------------

--
-- Table structure for table `action_log`
--

CREATE TABLE IF NOT EXISTS `action_log` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `api_controller_ID` int(11) NOT NULL,
  `access_number_ID` int(11) NOT NULL,
  `detail` text NOT NULL,
  `datetime` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `action_log`
--

INSERT INTO `action_log` (`ID`, `account_ID`, `api_controller_ID`, `access_number_ID`, `detail`, `datetime`) VALUES
(1, 0, 1, 1, '13', 1460645572),
(2, 0, 1, 1, '15', 1460653008),
(3, 0, 1, 1, '16', 1460653781),
(4, 0, 1, 1, '18', 1460654030),
(5, 0, 1, 1, '20', 1460654056),
(6, 0, 1, 1, '22', 1460654089),
(7, 0, 1, 1, '24', 1460854866),
(8, 0, 1, 1, '25', 1460856542),
(9, 0, 1, 1, '26', 1460856814),
(10, 0, 1, 1, '27', 1460974366),
(11, 0, 1, 1, '1', 1460974615),
(12, 0, 1, 1, '2', 1460974620),
(13, 0, 1, 1, '3', 1460974625),
(14, 0, 1, 1, '4', 1460974630),
(15, 0, 9, 2, '{"ID":"27"}', 1460975599),
(16, 0, 9, 2, '{"ID":"27"}', 1460975627),
(17, 0, 1, 2, '[]', 1460988028),
(18, 0, 1, 2, '[]', 1460988244),
(19, 0, 1, 2, '[]', 1460988247),
(20, 0, 1, 2, '[]', 1460988296),
(21, 0, 1, 2, '[]', 1460988298),
(22, 0, 1, 2, '[]', 1460988361),
(23, 0, 1, 2, '[]', 1460988423),
(24, 0, 1, 2, '[]', 1460988434),
(25, 0, 1, 2, '[]', 1460988470),
(26, 0, 1, 2, '[]', 1460988498),
(27, 0, 1, 2, '[]', 1460988892),
(28, 0, 1, 2, '[]', 1460988944),
(29, 0, 1, 2, '[]', 1460988992),
(30, 0, 1, 2, '[]', 1460989404),
(31, 0, 1, 2, '[]', 1460989505),
(32, 0, 1, 2, '[]', 1460989535),
(33, 0, 1, 2, '[]', 1460989743),
(34, 0, 1, 2, '[]', 1460990630),
(35, 0, 1, 2, '[]', 1460990630),
(36, 0, 1, 2, '[]', 1460990641),
(37, 0, 1, 2, '[]', 1460990641),
(38, 0, 1, 2, '[]', 1460990668),
(39, 0, 1, 2, '[]', 1460990668),
(40, 0, 1, 2, '[]', 1460990881),
(41, 0, 1, 2, '[]', 1460990881),
(42, 0, 1, 2, '[]', 1460990954),
(43, 0, 1, 2, '[]', 1460990954),
(44, 0, 1, 2, '[]', 1460990969),
(45, 0, 1, 2, '[]', 1460990969),
(46, 0, 1, 2, '[]', 1460991043),
(47, 0, 1, 2, '[]', 1460991043),
(48, 0, 1, 2, '[]', 1460991062),
(49, 0, 1, 2, '[]', 1460991062),
(50, 0, 1, 2, '[]', 1460991082),
(51, 0, 1, 2, '[]', 1460991082),
(52, 0, 1, 2, '[]', 1460991124),
(53, 0, 1, 2, '[]', 1460991124),
(54, 0, 1, 2, '[]', 1460991158),
(55, 0, 1, 2, '[]', 1460991158),
(56, 0, 1, 2, '[]', 1460991176),
(57, 0, 1, 2, '[]', 1460991177),
(58, 0, 1, 2, '[]', 1460991214),
(59, 0, 1, 2, '[]', 1460991214),
(60, 0, 1, 2, '[]', 1460991236),
(61, 0, 1, 2, '[]', 1460991236),
(62, 0, 1, 2, '[]', 1460991264),
(63, 0, 1, 2, '[]', 1460991264),
(64, 0, 1, 2, '[]', 1460991472),
(65, 0, 1, 2, '[]', 1460991472),
(66, 0, 1, 2, '[]', 1460991494),
(67, 0, 1, 2, '[]', 1460991494),
(68, 0, 1, 2, '[]', 1460991610),
(69, 0, 1, 2, '[]', 1460991610),
(70, 0, 1, 2, '[]', 1460991669),
(71, 0, 1, 2, '[]', 1460991669),
(72, 0, 1, 2, '[]', 1460991738),
(73, 0, 1, 2, '[]', 1460991738),
(74, 0, 1, 2, '[]', 1460992255),
(75, 0, 1, 2, '[]', 1460992255),
(76, 0, 1, 2, '[]', 1460992278),
(77, 0, 1, 2, '[]', 1460992278),
(78, 0, 1, 2, '[]', 1460992553),
(79, 0, 1, 2, '[]', 1460992553),
(80, 0, 1, 2, '[]', 1460992718),
(81, 0, 1, 2, '[]', 1460992718),
(82, 0, 1, 2, '[]', 1460992737),
(83, 0, 1, 2, '[]', 1460992737),
(84, 0, 1, 2, '[]', 1460992855),
(85, 0, 1, 2, '[]', 1460992855),
(86, 0, 1, 2, '[]', 1460992988),
(87, 0, 1, 2, '[]', 1460992988),
(88, 0, 1, 2, '[]', 1460993012),
(89, 0, 1, 2, '[]', 1460993012),
(90, 0, 1, 2, '[]', 1460993635),
(91, 0, 1, 2, '[]', 1460993635),
(92, 0, 1, 2, '[]', 1460994903),
(93, 0, 1, 2, '[]', 1460994903),
(94, 0, 1, 2, '[]', 1460994909),
(95, 0, 1, 2, '[]', 1460994909),
(96, 0, 1, 2, '[]', 1460995670),
(97, 0, 1, 2, '[]', 1460995670),
(98, 0, 1, 2, '[]', 1460996547),
(99, 0, 1, 2, '[]', 1460996547),
(100, 0, 1, 2, '[]', 1460996578),
(101, 0, 1, 2, '[]', 1460996578),
(102, 0, 1, 2, '[]', 1460996726),
(103, 0, 1, 2, '[]', 1460996726),
(104, 0, 1, 2, '[]', 1460997323),
(105, 0, 1, 2, '[]', 1460997323),
(106, 0, 1, 2, '[]', 1460997326),
(107, 0, 1, 2, '[]', 1460997326),
(108, 0, 1, 2, '[]', 1460997344),
(109, 0, 1, 2, '[]', 1460997344),
(110, 0, 1, 2, '[]', 1460997664),
(111, 0, 1, 2, '[]', 1460997664),
(112, 0, 1, 2, '[]', 1460997672),
(113, 0, 1, 2, '[]', 1460997672),
(114, 0, 1, 2, '[]', 1460997728),
(115, 0, 1, 2, '[]', 1460997728),
(116, 0, 1, 2, '[]', 1460997748),
(117, 0, 1, 2, '[]', 1460997748),
(118, 0, 1, 2, '[]', 1460997776),
(119, 0, 1, 2, '[]', 1460997776),
(120, 0, 1, 2, '[]', 1460997799),
(121, 0, 1, 2, '[]', 1460997799),
(122, 0, 1, 2, '[]', 1460999005),
(123, 0, 1, 2, '[]', 1460999006),
(124, 0, 1, 2, '[]', 1460999014),
(125, 0, 1, 2, '[]', 1460999014),
(126, 0, 1, 2, '[]', 1460999324),
(127, 0, 1, 2, '[]', 1460999324),
(128, 0, 1, 2, '[]', 1460999444),
(129, 0, 1, 2, '[]', 1460999444),
(130, 0, 1, 2, '[]', 1460999448),
(131, 0, 1, 2, '[]', 1460999448),
(132, 0, 1, 2, '[]', 1460999455),
(133, 0, 1, 2, '[]', 1460999455),
(134, 0, 1, 2, '[]', 1460999797),
(135, 0, 1, 2, '[]', 1460999797);

-- --------------------------------------------------------

--
-- Table structure for table `api_controller`
--

CREATE TABLE IF NOT EXISTS `api_controller` (
`ID` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `assessment_item`
--

CREATE TABLE IF NOT EXISTS `assessment_item` (
`ID` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assessment_item`
--

INSERT INTO `assessment_item` (`ID`, `description`, `amount`) VALUES
(1, 'registration_fee', 5600);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`ID` int(11) NOT NULL,
  `event_type_ID` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `event_type_ID`, `description`) VALUES
(1, 1, 'Battle of the Bands'),
(2, 1, 'Debate'),
(3, 1, 'Siniratura'),
(4, 1, 'That''s My Bae'),
(5, 1, 'REO Showoff'),
(6, 1, 'JPIAN Idol'),
(7, 1, 'Kalokalike'),
(8, 1, 'CineJPIA'),
(9, 2, 'Cup 1 – Financial Accounting and Reporting Cup'),
(10, 2, 'Cup 2 – Advanced Financial Accounting and Reporting Cup'),
(11, 2, 'Cup 3 – Management Accounting and Control Cup'),
(12, 2, 'Cup 4 – Auditing Cup'),
(13, 2, 'Cup 5 – Regulatory Framework for Business Transactions Cup'),
(14, 2, 'Cup 6 – Taxation Cup'),
(15, 2, 'Cup 7 – MAS Case Study');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
`ID` int(11) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`ID`, `description`) VALUES
(1, 'Non-Academic'),
(2, 'Academic');

-- --------------------------------------------------------

--
-- Table structure for table `file_uploaded`
--

CREATE TABLE IF NOT EXISTS `file_uploaded` (
`ID` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` text NOT NULL,
  `size` double NOT NULL,
  `datetime` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `file_uploaded`
--

INSERT INTO `file_uploaded` (`ID`, `type`, `name`, `path`, `size`, `datetime`) VALUES
(1, 'png', 'f3c72a98be04095635219e479788de56.png', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 0.54, 1460911248),
(2, 'png', '364107c72780f1dacf04e28835044f02.png', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 2.55, 1460911248),
(3, 'png', '3f0f974515f580c138ca31d2fdeff833.png', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 0.54, 1460912966),
(4, 'png', '0e594221a39ce68bc24b942817b7c014.png', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 2.55, 1460912966),
(5, 'png', '2397e71fbfc3833591946fbaf688ff4a.png', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 2.55, 1460974366),
(6, 'png', '9338df0efa86d78fab4d227688db445b.png', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 0.54, 1460981285),
(7, 'png', 'cefcb9a0ce5deebbbba2cba9f3dc77fa.png', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 0.54, 1460981600),
(8, 'jpeg', '5498f2773e8005b9652f71ad6008ea67.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 246.57, 1460983086);

-- --------------------------------------------------------

--
-- Table structure for table `group_access_control_list`
--

CREATE TABLE IF NOT EXISTS `group_access_control_list` (
`ID` int(11) NOT NULL,
  `module_ID` int(11) NOT NULL,
  `group_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `local_chapter`
--

CREATE TABLE IF NOT EXISTS `local_chapter` (
`ID` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `chapter_type` int(11) NOT NULL,
  `address` text NOT NULL,
  `region` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `local_chapter_group`
--

CREATE TABLE IF NOT EXISTS `local_chapter_group` (
`ID` int(11) NOT NULL,
  `local_chapter_ID` int(11) NOT NULL,
  `registration_datetime` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `local_chapter_group`
--

INSERT INTO `local_chapter_group` (`ID`, `local_chapter_ID`, `registration_datetime`) VALUES
(1, 1, 1460645022),
(2, 1, 1460645094),
(3, 1, 1460645193),
(4, 1, 1460645200),
(5, 1, 1460645403),
(6, 1, 1460645427),
(7, 1, 1460645488),
(8, 1, 1460645491),
(9, 1, 1460645540),
(10, 1, 1460645544),
(11, 1, 1460645563),
(12, 1, 1460645567),
(13, 1, 1460645572),
(14, 1, 1460653002),
(15, 1, 1460653007),
(16, 1, 1460653781),
(17, 1, 1460654025),
(18, 1, 1460654030),
(19, 1, 1460654050),
(20, 1, 1460654056),
(21, 1, 1460654085),
(22, 1, 1460654089),
(23, 1, 1460854861),
(24, 1, 1460854865),
(25, 1, 1460856541),
(26, 1, 1460856814),
(27, 1, 1460974366);

-- --------------------------------------------------------

--
-- Table structure for table `local_chapter_position`
--

CREATE TABLE IF NOT EXISTS `local_chapter_position` (
`ID` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `local_chapter_position`
--

INSERT INTO `local_chapter_position` (`ID`, `description`) VALUES
(1, 'Local Chapter Adviser'),
(2, 'Local Chapter Faculty (Dean)'),
(3, 'Local Chapter Faculty (Chairperson)'),
(4, 'Local Chapter Officer (President)'),
(5, 'Local Chapter Officer (Vice President)'),
(6, 'Local Chapter Representative');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
`ID` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `parent_ID` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `module_api_controller`
--

CREATE TABLE IF NOT EXISTS `module_api_controller` (
`ID` int(11) NOT NULL,
  `module_ID` int(11) NOT NULL,
  `api_controller_ID` int(11) NOT NULL,
  `privilege_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_receipt`
--

CREATE TABLE IF NOT EXISTS `payment_receipt` (
`ID` int(11) NOT NULL,
  `registration_number` int(11) NOT NULL,
  `file_uploaded_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payment_receipt`
--

INSERT INTO `payment_receipt` (`ID`, `registration_number`, `file_uploaded_ID`) VALUES
(1, 0, 1),
(2, 0, 2),
(3, 12, 3),
(4, 12, 4),
(5, 1, 6),
(6, 2, 7),
(7, 2, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_control_list`
--
ALTER TABLE `access_control_list`
 ADD PRIMARY KEY (`ID`), ADD KEY `access_control_list_account_ID` (`account_ID`), ADD KEY `access_control_list_module_ID` (`module_ID`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `username` (`username`), ADD KEY `account_account_type_ID_idx` (`account_type_ID`);

--
-- Indexes for table `account_event_participation`
--
ALTER TABLE `account_event_participation`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account_information`
--
ALTER TABLE `account_information`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account_local_chapter_group`
--
ALTER TABLE `account_local_chapter_group`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account_payment`
--
ALTER TABLE `account_payment`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `action_log`
--
ALTER TABLE `action_log`
 ADD PRIMARY KEY (`ID`), ADD KEY `api_controller_ID` (`api_controller_ID`,`access_number_ID`), ADD KEY `account_ID` (`account_ID`);

--
-- Indexes for table `api_controller`
--
ALTER TABLE `api_controller`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assessment_item`
--
ALTER TABLE `assessment_item`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `file_uploaded`
--
ALTER TABLE `file_uploaded`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `group_access_control_list`
--
ALTER TABLE `group_access_control_list`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `local_chapter`
--
ALTER TABLE `local_chapter`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `local_chapter_group`
--
ALTER TABLE `local_chapter_group`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `local_chapter_position`
--
ALTER TABLE `local_chapter_position`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `module_api_controller`
--
ALTER TABLE `module_api_controller`
 ADD PRIMARY KEY (`ID`), ADD KEY `module_api_controller_module_ID` (`module_ID`) COMMENT 'foreign for module', ADD KEY `module_api_controller_api_controller_ID` (`api_controller_ID`) COMMENT 'foreign key of api controller';

--
-- Indexes for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_control_list`
--
ALTER TABLE `access_control_list`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `account_event_participation`
--
ALTER TABLE `account_event_participation`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `account_information`
--
ALTER TABLE `account_information`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `account_local_chapter_group`
--
ALTER TABLE `account_local_chapter_group`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `account_payment`
--
ALTER TABLE `account_payment`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `action_log`
--
ALTER TABLE `action_log`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `api_controller`
--
ALTER TABLE `api_controller`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assessment_item`
--
ALTER TABLE `assessment_item`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `file_uploaded`
--
ALTER TABLE `file_uploaded`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `group_access_control_list`
--
ALTER TABLE `group_access_control_list`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `local_chapter`
--
ALTER TABLE `local_chapter`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `local_chapter_group`
--
ALTER TABLE `local_chapter_group`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `local_chapter_position`
--
ALTER TABLE `local_chapter_position`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `module_api_controller`
--
ALTER TABLE `module_api_controller`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
ADD CONSTRAINT `account_account_type_ID` FOREIGN KEY (`account_type_ID`) REFERENCES `account_type` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
