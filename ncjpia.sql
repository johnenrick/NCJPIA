-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 10:36 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_event_participation`
--

CREATE TABLE IF NOT EXISTS `account_event_participation` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `event_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `local_chapter_group_ID` int(11) NOT NULL,
  `local_chapter_position_ID` int(11) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `identification_file_uploaded_ID` int(11) NOT NULL,
  `tshirt_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_payment`
--

CREATE TABLE IF NOT EXISTS `account_payment` (
`ID` int(11) NOT NULL,
  `account_ID` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`ID` int(11) NOT NULL,
  `event_type_ID` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
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
(9, 2, 'Cup 1 – Basic Accounting'),
(10, 2, 'Cup 2 – Financial Accounting and Reporting'),
(11, 2, 'Cup 3 – Advanced Financial Accounting and Reportin'),
(12, 2, 'Cup 4 – Management Accounting and Control'),
(13, 2, 'Cup 5 – Auditing'),
(14, 2, 'Cup 6 – Regulatory Framework for Business Transact'),
(15, 2, 'Cup 7 – Taxation Case Study');

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
  `leader_account_ID` int(11) NOT NULL,
  `local_chapter_ID` int(11) NOT NULL,
  `registration_datetime` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `account_event_participation`
--
ALTER TABLE `account_event_participation`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `account_information`
--
ALTER TABLE `account_information`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `api_controller`
--
ALTER TABLE `api_controller`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
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
