-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 04:23 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `username`, `password`, `account_type_ID`, `status`) VALUES
(1, '1461042093', '30d1fbabab7191ae64644c66ddd67948f008e2a8', 3, 1),
(2, '1461042423', '7199962667567775670fa6c0b2ae966cfa76e529', 9, 1),
(3, '1461042466', '6b3566d8029089f23a5c41ffc83d42e120def08e', 9, 1),
(4, '1461043642', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 9, 1),
(5, '1461043893', '9a900f538965a426994e1e90600920aff0b4e8d2', 9, 1),
(6, '1461043912', 'bdb480de655aa6ec75ca058c849c4faf3c0f75b1', 9, 1),
(7, '1461043583', 'dd7b7b74ea160e049dd128478e074ce47254bde8', 9, 1),
(8, '1461044370', 'b2a801fc1f6cdddb5df949c5126817cb5c8562ce', 9, 1),
(9, '1461044327', 'd7dacae2c968388960bf8970080a980ed5c5dcb7', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_event_participation`
--

CREATE TABLE IF NOT EXISTS `account_event_participation` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `event_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `account_event_participation`
--

INSERT INTO `account_event_participation` (`ID`, `account_ID`, `event_ID`) VALUES
(1, 5, 14),
(2, 5, 15),
(3, 5, 7),
(4, 5, 8),
(5, 6, 15),
(6, 6, 1),
(7, 7, 9),
(8, 7, 15),
(9, 7, 1),
(10, 7, 8),
(11, 8, 14),
(12, 8, 15),
(13, 8, 7),
(14, 8, 8),
(15, 9, 6),
(16, 9, 7);

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
  `tshirt_size` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `account_information`
--

INSERT INTO `account_information` (`ID`, `account_ID`, `first_name`, `middle_name`, `last_name`, `local_chapter_position_ID`, `contact_number`, `email_address`, `complete_address`, `identification_file_uploaded_ID`, `tshirt_size`) VALUES
(1, 1, 'John', '', 'Plenos', 1, '09275835504', 'plenosjohn@yahoo.com', '', 9, '0'),
(2, 2, 'Kefer', '', 'Allego', 1, '09215478', 'khefe22@gmail.com', '', 10, '0'),
(3, 3, 'Patrick', '', 'Maningo', 4, '0147852369', 'patrick.sage@yahoo.com', '', 11, '0'),
(4, 4, 'a', '', 'a', 1, '1', 'a@a.a', 'a', 12, '0'),
(5, 5, 'b', '', 'b', 1, '2', 'b@b.b', 'b', 13, '0'),
(6, 6, 'c', '', 'c', 1, '3', 'c@c.c', 'c', 14, '0'),
(7, 7, 'x', '', 'x', 1, '1', 'x@x.x', 'x', 15, 'XXS'),
(8, 8, 'y', '', 'y', 1, '2', 'y@y.y', 'y', 16, 'XXS'),
(9, 9, 'z', '', 'z', 1, '3', 'z@z.z', 'z', 17, 'XXS');

-- --------------------------------------------------------

--
-- Table structure for table `account_local_chapter_group`
--

CREATE TABLE IF NOT EXISTS `account_local_chapter_group` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `local_chapter_group_ID` int(11) NOT NULL,
  `member_type` int(11) NOT NULL COMMENT '1 - leader, 2 - member'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `account_local_chapter_group`
--

INSERT INTO `account_local_chapter_group` (`ID`, `account_ID`, `local_chapter_group_ID`, `member_type`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 2),
(4, 4, 2, 1),
(5, 5, 2, 2),
(6, 6, 2, 2),
(7, 7, 3, 1),
(8, 8, 3, 2),
(9, 9, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_payment`
--

CREATE TABLE IF NOT EXISTS `account_payment` (
`ID` int(11) NOT NULL,
  `assessment_item_ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=334 ;

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
(135, 0, 1, 2, '[]', 1460999797),
(136, 27, 1, 2, '[]', 1461041373),
(137, 27, 1, 2, '[]', 1461041373),
(138, 27, 1, 2, '[]', 1461041376),
(139, 27, 1, 2, '[]', 1461041376),
(140, 27, 1, 2, '[]', 1461041525),
(141, 27, 1, 2, '[]', 1461041525),
(142, 27, 1, 1, '1', 1461041693),
(143, 27, 1, 2, '[]', 1461041748),
(144, 27, 1, 2, '[]', 1461041748),
(145, 27, 1, 2, '[]', 1461042180),
(146, 27, 1, 2, '[]', 1461042180),
(147, 27, 1, 2, '[]', 1461042465),
(148, 27, 1, 2, '[]', 1461042465),
(149, 27, 1, 2, '[]', 1461042700),
(150, 27, 1, 2, '[]', 1461042700),
(151, 27, 1, 2, '[]', 1461042873),
(152, 27, 1, 2, '[]', 1461042873),
(153, 27, 1, 1, '2', 1461042939),
(154, 27, 1, 2, '[]', 1461043246),
(155, 27, 1, 2, '[]', 1461043246),
(156, 27, 1, 1, '3', 1461043552),
(157, 27, 1, 2, '[]', 1461048669),
(158, 27, 1, 2, '[]', 1461048669),
(159, 27, 1, 2, '[]', 1461048736),
(160, 27, 1, 2, '[]', 1461048736),
(161, 27, 1, 2, '[]', 1461048782),
(162, 27, 1, 2, '[]', 1461048782),
(163, 27, 9, 2, '{"sort":{"ID":"desc"}}', 1461053089),
(164, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461055522),
(165, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461056344),
(166, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461056370),
(167, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461056421),
(168, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057781),
(169, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057788),
(170, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057836),
(171, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057837),
(172, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057838),
(173, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057838),
(174, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057838),
(175, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057838),
(176, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057858),
(177, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461057861),
(178, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058213),
(179, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058255),
(180, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058292),
(181, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058319),
(182, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058346),
(183, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058360),
(184, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058656),
(185, 27, 1, 2, '[]', 1461058760),
(186, 27, 1, 2, '[]', 1461058760),
(187, 27, 1, 2, '[]', 1461058804),
(188, 27, 1, 2, '[]', 1461058804),
(189, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461058947),
(190, 27, 1, 2, '[]', 1461059151),
(191, 27, 1, 2, '[]', 1461059151),
(192, 27, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461059164),
(193, 1, 9, 2, '{"account_type":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461060229),
(194, 1, 9, 2, '{"account_type_ID":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461060268),
(195, 1, 9, 2, '{"account_type_ID":"9","local_chapter_group_ID":"","payment_status":"Unpaid"}', 1461060295),
(196, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group_ID":"3"},"payment_status":"Unpaid"}', 1461060369),
(197, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group_ID":"3"},"payment_status":"Unpaid"}', 1461060377),
(198, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group_ID":"3"},"payment_status":"Unpaid"}', 1461060431),
(199, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group_ID":"3"},"payment_status":"Unpaid"}', 1461060432),
(200, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group_ID":"1"},"payment_status":"Unpaid"}', 1461060438),
(201, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group_ID":"2"},"payment_status":"Unpaid"}', 1461060441),
(202, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"1"},"payment_status":"Unpaid"}', 1461060512),
(203, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"2"},"payment_status":"Unpaid"}', 1461060515),
(204, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"3"},"payment_status":"Unpaid"}', 1461060517),
(205, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"2"},"payment_status":"Unpaid"}', 1461060537),
(206, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"3"},"payment_status":"Unpaid"}', 1461060543),
(207, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"3"},"payment_status":"Unpaid"}', 1461061096),
(208, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":""},"payment_status":"Unpaid"}', 1461061597),
(209, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":"2"},"payment_status":"Unpaid"}', 1461061604),
(210, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":""},"payment_status":"Pending","not_payment_receipt_file_uploaded_name":""}', 1461061632),
(211, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":""},"payment_status":"Pending","not_payment_receipt_file_uploaded_name":""}', 1461061634),
(212, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":""},"payment_status":"Paid","not_payment_receipt_file_uploaded_name":""}', 1461061636),
(213, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":""},"payment_status":"Unpaid","not_payment_receipt_file_uploaded_name":""}', 1461061639),
(214, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461061672),
(215, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Paid"}', 1461061679),
(216, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461061681),
(217, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461061681),
(218, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461061682),
(219, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"null","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461061682),
(220, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"1","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461064149),
(221, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"1","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461064157),
(222, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"1","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461064159),
(223, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"1","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461064162),
(224, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"1","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461064163),
(225, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"2","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461064165),
(226, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"2","not_payment_receipt_file_uploaded_name":""}}', 1461064568),
(227, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461064678),
(228, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"2","not_payment_receipt_file_uploaded_name":""}}', 1461064682),
(229, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461064684),
(230, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461064832),
(231, 1, 1, 2, '[]', 1461065110),
(232, 1, 1, 2, '[]', 1461065414),
(233, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter_ID":"1","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461065417),
(234, 1, 1, 2, '[]', 1461065438),
(235, 1, 1, 2, '[]', 1461065440),
(236, 1, 1, 2, '[]', 1461065624),
(237, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"1","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461065626),
(238, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461065629),
(239, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"2","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461065631),
(240, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"1","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461065633),
(241, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461065636),
(242, 1, 1, 2, '[]', 1461066414),
(243, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"1","not_payment_receipt_file_uploaded_name":""}}', 1461066426),
(244, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""}}', 1461066429),
(245, 1, 1, 2, '[]', 1461066564),
(246, 1, 1, 2, '[]', 1461066579),
(247, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461066586),
(248, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461066589),
(249, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461066591),
(250, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461066591),
(251, 1, 1, 2, '[]', 1461066666),
(252, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461066668),
(253, 1, 1, 2, '[]', 1461066682),
(254, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461066684),
(255, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"1","payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461066694),
(256, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461066696),
(257, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461066703),
(258, 1, 1, 2, '[]', 1461066762),
(259, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not__payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461066764),
(260, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not__payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461066869),
(261, 1, 1, 2, '[]', 1461066880),
(262, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not__payment_receipt_file_uploaded_name":"null"},"payment_status":"Pending"}', 1461066883),
(263, 1, 1, 2, '[]', 1461066966),
(264, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded_name":""},"payment_status":"Pending"}', 1461066969),
(265, 1, 1, 2, '[]', 1461066985),
(266, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461066987),
(267, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461066990),
(268, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461066990),
(269, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461066990),
(270, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461066990),
(271, 1, 1, 2, '[]', 1461067291),
(272, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461067395),
(273, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067399),
(274, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067428),
(275, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067429),
(276, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067429),
(277, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067437),
(278, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067437),
(279, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067437),
(280, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067438),
(281, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067470),
(282, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067471),
(283, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067471),
(284, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067472),
(285, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067472),
(286, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067472),
(287, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067472),
(288, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067473),
(289, 1, 1, 2, '[]', 1461067495),
(290, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067500),
(291, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067503),
(292, 1, 1, 2, '[]', 1461067513),
(293, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067516),
(294, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067580),
(295, 1, 1, 2, '[]', 1461067612),
(296, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067614),
(297, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067652),
(298, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067652),
(299, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067668),
(300, 1, 1, 2, '[]', 1461067979),
(301, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":""},"payment_status":"Pending"}', 1461067981),
(302, 1, 1, 2, '[]', 1461068045),
(303, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461068046),
(304, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":"null"},"payment_status":"Pending"}', 1461068047),
(305, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":"null"},"payment_status":"Pending"}', 1461068049),
(306, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","greater_equal__registration_fee_total_amount":"5600"},"payment_status":"Paid"}', 1461068051),
(307, 1, 9, 2, '[]', 1461068499),
(308, 1, 9, 2, '[]', 1461068703),
(309, 1, 1, 2, '[]', 1461068722),
(310, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":"null"},"payment_status":"Pending"}', 1461068725),
(311, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","greater_equal__registration_fee_total_amount":"5600"},"payment_status":"Paid"}', 1461068731),
(312, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","greater_equal__registration_fee_total_amount":"5600"},"payment_status":"Paid"}', 1461068732),
(313, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","greater_equal__registration_fee_total_amount":"5600"},"payment_status":"Paid"}', 1461068733),
(314, 1, 9, 2, '[]', 1461068746),
(315, 1, 9, 2, '{"greater_equal__registration_fee_total_amount":"5600"}', 1461068809),
(316, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":"null"},"payment_status":"Pending"}', 1461068854),
(317, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","greater_equal__registration_fee_total_amount":"5600"},"payment_status":"Paid"}', 1461068856),
(318, 1, 9, 2, '{"greater_equal__registration_fee_total_amount":"5600"}', 1461068926),
(319, 1, 9, 2, '{"greater_equal__registration_fee_total_amount":"5600"}', 1461069082),
(320, 1, 9, 2, '{"greater_equal__registration_fee_total_amount":"5600"}', 1461069099),
(321, 1, 9, 2, '{"greater_equal__registration_fee_total_amount":"5600"}', 1461069121),
(322, 1, 9, 2, '{"greater_equal__registration_fee_total_amount__registration_fee_total_amount":"5600"}', 1461069131),
(323, 1, 9, 2, '{"greater_equal__registration_fee_total_amount__registration_fee_total_amount":"5600"}', 1461069152),
(324, 1, 9, 2, '{"greater_equal__registration_fee_total_amount__registration_fee_total_amount":"5600"}', 1461069158),
(325, 1, 9, 2, '{"greater_equal__registration_fee_total_amount__registration_fee_total_amount":"5600"}', 1461069165),
(326, 1, 9, 2, '{"greater_equal__registration_fee_total_amount__registration_fee_total_amount":"5600"}', 1461069170),
(327, 1, 9, 2, '{"condition":{"greater_equal__registration_fee_total_amount__registration_fee_total_amount":"5600"}}', 1461069222),
(328, 1, 9, 2, '{"condition":{"greater_equal__registration_fee_total_amount__registration_fee_total_amount":"5600"}}', 1461069234),
(329, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":"null"},"payment_status":"Pending"}', 1461069265),
(330, 1, 1, 2, '[]', 1461070466),
(331, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","payment_receipt_file_uploaded_name":""},"payment_status":"Unpaid"}', 1461070468),
(332, 1, 9, 2, '{"condition":{"account_type_ID":"9","local_chapter__ID":"","local_chapter_group__ID":"","not_null__payment_receipt_file_uploaded__name":"null"},"payment_status":"Pending"}', 1461070470),
(333, 1, 1, 2, '[]', 1461070487);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
(8, 'jpeg', '5498f2773e8005b9652f71ad6008ea67.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 246.57, 1460983086),
(9, 'jpeg', '0c7068bd3325d27e596456efaa509532.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 1522.18, 1461041692),
(10, 'jpeg', '3fc1cd4541752f27745422344821a996.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 1522.18, 1461041692),
(11, 'jpeg', '54cf6dd6caea726782437b5b4c5b4fa4.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 126.67, 1461041693),
(12, 'jpeg', '980b867347c23e99fb094081e042d216.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 1522.18, 1461042939),
(13, 'jpeg', '2811f4df2426017b5435ef538b6ac449.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 126.67, 1461042939),
(14, 'jpeg', '3c6863a781439bcc535d9c8c0fdf992e.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 246.57, 1461042939),
(15, 'jpeg', '733876c1499968d0be358de39c646991.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 126.67, 1461043552),
(16, 'jpeg', '6539feeba33fae7b360dfa99317070bd.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 1522.18, 1461043552),
(17, 'jpeg', '6769dd0c1039ed4f7c88c2da3eb697c4.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/identification_card/', 246.57, 1461043552),
(18, 'jpeg', '39c3e76d8b75399f637e1f98b43fcfd7.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 1522.18, 1461058813),
(19, 'jpeg', '24a914f786f9ebe0cf03ee5d98cf68ec.jpg', 'C:/xampp/htdocs/NCJPIA/assets/images/payment_receipt/', 1522.18, 1461059161);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `local_chapter`
--

INSERT INTO `local_chapter` (`ID`, `description`, `chapter_type`, `address`, `region`) VALUES
(1, 'USC', 1, 'talamban', 'Region 7'),
(2, 'a', 1, 'a', 'Region 1 &'),
(3, 'x', 1, 'x', 'Region 5');

-- --------------------------------------------------------

--
-- Table structure for table `local_chapter_group`
--

CREATE TABLE IF NOT EXISTS `local_chapter_group` (
`ID` int(11) NOT NULL,
  `local_chapter_ID` int(11) NOT NULL,
  `registration_datetime` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `local_chapter_group`
--

INSERT INTO `local_chapter_group` (`ID`, `local_chapter_ID`, `registration_datetime`) VALUES
(1, 1, 1461041692),
(2, 2, 1461042938),
(3, 3, 1461043552);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment_receipt`
--

INSERT INTO `payment_receipt` (`ID`, `registration_number`, `file_uploaded_ID`) VALUES
(1, 2, 18),
(2, 1, 19);

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
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `account_event_participation`
--
ALTER TABLE `account_event_participation`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `account_information`
--
ALTER TABLE `account_information`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `account_local_chapter_group`
--
ALTER TABLE `account_local_chapter_group`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `account_payment`
--
ALTER TABLE `account_payment`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `action_log`
--
ALTER TABLE `action_log`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=334;
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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `group_access_control_list`
--
ALTER TABLE `group_access_control_list`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `local_chapter`
--
ALTER TABLE `local_chapter`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `local_chapter_group`
--
ALTER TABLE `local_chapter_group`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
