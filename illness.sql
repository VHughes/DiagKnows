-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2015 at 11:20 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `illness`
--

-- --------------------------------------------------------

--
-- Table structure for table `illness`
--

CREATE TABLE IF NOT EXISTS `illness` (
`ILL` int(11) NOT NULL,
  `ill_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `illness`
--

INSERT INTO `illness` (`ILL`, `ill_name`) VALUES
(11, 'Cold'),
(13, 'Flu'),
(14, 'Food Poisoning');

-- --------------------------------------------------------

--
-- Table structure for table `illness_symptom`
--

CREATE TABLE IF NOT EXISTS `illness_symptom` (
`ILLSYMP` int(11) NOT NULL,
  `ILL_ID` int(11) NOT NULL,
  `SYM_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `illness_symptom`
--

INSERT INTO `illness_symptom` (`ILLSYMP`, `ILL_ID`, `SYM_ID`) VALUES
(1, 11, 1),
(2, 11, 2),
(3, 11, 3),
(4, 11, 7),
(5, 11, 9),
(6, 13, 1),
(7, 13, 3),
(8, 13, 4),
(9, 13, 5),
(10, 13, 6),
(11, 13, 8),
(12, 14, 1),
(13, 14, 3),
(14, 14, 4),
(15, 14, 5),
(16, 14, 6);

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE IF NOT EXISTS `symptom` (
`SYMP` int(11) NOT NULL,
  `symp_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`SYMP`, `symp_name`) VALUES
(1, 'Head Ache'),
(2, 'Runny Nose'),
(3, 'Fever'),
(4, 'Vomiting'),
(5, 'Nausea'),
(6, 'Weakness'),
(7, 'Cough'),
(8, 'Cramps'),
(9, 'Sore Throat');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE IF NOT EXISTS `username` (
`UserNameID` int(9) NOT NULL,
  `email` text,
  `pass` varchar(40) DEFAULT NULL,
  `uName` varchar(30) DEFAULT NULL,
  `lname` text,
  `fbID` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`UserNameID`, `email`, `pass`, `uName`, `lname`, `fbID`, `img`) VALUES
(1, 'mcisla@hotmail.com', '123', 'Isla', NULL, '', ''),
(2, 'v-gini@hotmail.com', 'tequila', 'Virginia', NULL, '', ''),
(3, 'bob@gmail.com', 'hello', 'bob', NULL, '', ''),
(4, 'sally@sally.com', 'hey', 'Sally', NULL, '', ''),
(5, 'someone@something.com', 'something', 'someone', NULL, '', ''),
(6, 'someone@something.com', 'something', 'someone', NULL, '', ''),
(7, 'person@person.com', 'pickle', 'person', NULL, '', ''),
(120, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', '', ''),
(121, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', '', ''),
(122, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', '', ''),
(123, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', '', ''),
(124, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(125, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(126, 'mkfod@grg.com', '123', 'bob', 'smith', NULL, NULL),
(127, 'mkfod@grg.com', '123', 'bob', 'smith', NULL, NULL),
(128, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(129, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(130, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(131, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(132, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(133, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(134, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(135, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(136, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(137, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(138, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(139, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(140, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(141, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(142, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(143, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(144, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(145, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(146, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(147, 'elmo@123.com', 'elmo', 'elmo', 'elmo', NULL, NULL),
(148, 'elmo@123.com', 'elmo', 'elmo', 'elmo', NULL, NULL),
(149, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(150, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(151, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(152, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(153, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(154, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(155, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(156, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(157, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(158, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(159, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(160, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(161, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9'),
(162, 'jenny@jenny.com', 'jenny', 'Jenny', 'Bellows', NULL, NULL),
(163, 'jenny@jenny.com', 'jenny', 'Jenny', 'Bellows', NULL, NULL),
(164, 'default@gmail.com', NULL, 'Virginia Hughes', NULL, '10156203014210293', 'https://scontent.xx.fbcdn.net/hprofile-xpt1/v/t1.0-1/c0.4.50.50/p50x50/12042885_10156101892800293_2222576688557904564_n.jpg?oh=4a5eda5f5a570cf4fdf920ab596580fb&oe=56EF2FF9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `illness`
--
ALTER TABLE `illness`
 ADD PRIMARY KEY (`ILL`);

--
-- Indexes for table `illness_symptom`
--
ALTER TABLE `illness_symptom`
 ADD PRIMARY KEY (`ILLSYMP`), ADD KEY `ILL_ID` (`ILL_ID`), ADD KEY `SYM_ID` (`SYM_ID`);

--
-- Indexes for table `symptom`
--
ALTER TABLE `symptom`
 ADD PRIMARY KEY (`SYMP`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
 ADD PRIMARY KEY (`UserNameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `illness`
--
ALTER TABLE `illness`
MODIFY `ILL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `illness_symptom`
--
ALTER TABLE `illness_symptom`
MODIFY `ILLSYMP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `symptom`
--
ALTER TABLE `symptom`
MODIFY `SYMP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
MODIFY `UserNameID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=165;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `illness_symptom`
--
ALTER TABLE `illness_symptom`
ADD CONSTRAINT `illness_symptom_ibfk_1` FOREIGN KEY (`ILL_ID`) REFERENCES `illness` (`ILL`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `illness_symptom_ibfk_2` FOREIGN KEY (`SYM_ID`) REFERENCES `symptom` (`SYMP`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
