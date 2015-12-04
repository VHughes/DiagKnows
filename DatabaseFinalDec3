-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2015 at 11:05 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `illness`
--

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `DRUG` int(11) NOT NULL,
  `drug_name` varchar(20) DEFAULT NULL,
  `drug_cures` varchar(75) DEFAULT NULL,
  `drug_description` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`DRUG`, `drug_name`, `drug_cures`, `drug_description`) VALUES
(1, 'Aspirin', 'headaches, fever, pain', 'Aspirin should not be used during pregnancy'),
(2, 'Acetaminophen', 'headaches, fever, muscle aches, menstrual cramps', 'Should not be used during pregnancy'),
(3, 'Ibuprofen', 'headaches, fever, muscle aches, anti-inflammatory', 'Stronger and lasts longer');

-- --------------------------------------------------------

--
-- Table structure for table `illness`
--

CREATE TABLE `illness` (
  `ILL` int(11) NOT NULL,
  `ill_name` varchar(25) DEFAULT NULL,
  `ill_description` varchar(100) DEFAULT NULL,
  `Heartburn` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `illness`
--

INSERT INTO `illness` (`ILL`, `ill_name`, `ill_description`, `Heartburn`) VALUES
(1, 'Cold', 'head pain, muscle aches, runny nose, coughing, sore throat', ''),
(2, 'Food Poisoning', 'vomitting, fever, ahces, shaky, nausea, stomach pain', ''),
(3, 'Flu', 'head pain, fever, muscle aches, shaky, weak, nausea', ''),
(4, 'Heartburn', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `illness_symptom`
--

CREATE TABLE `illness_symptom` (
  `ILL_ID` int(11) NOT NULL,
  `SYM_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `illness_symptom`
--

INSERT INTO `illness_symptom` (`ILL_ID`, `SYM_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 7),
(1, 9),
(2, 1),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 8),
(3, 1),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(4, 10),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `MEDI` int(11) NOT NULL,
  `medi_name` varchar(25) DEFAULT NULL,
  `medi_description` varchar(75) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`MEDI`, `medi_name`, `medi_description`) VALUES
(1, 'Tylonol', 'Other names include Paracetamol, Panadol, Mapap'),
(2, 'Advil', 'Other names include Motrin and IBU'),
(3, 'Bayer', 'Other names include Ecotrin');

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE `symptom` (
  `SYMP` int(11) NOT NULL,
  `symptom_name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`SYMP`, `symptom_name`) VALUES
(1, 'Headache'),
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

CREATE TABLE `username` (
  `UserNameID` int(9) NOT NULL,
  `email` text,
  `pass` varchar(40) NOT NULL,
  `uName` varchar(30) DEFAULT NULL,
  `lname` text,
  `fbID` varchar(20) DEFAULT NULL,
  `img` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`UserNameID`, `email`, `pass`, `uName`, `lname`, `fbID`, `img`) VALUES
(1, 'mcisla@hotmail.com', '123', 'Isla', NULL, NULL, '6'),
(2, 'v-gini@hotmail.com', 'tequila', 'Virginia', NULL, NULL, '7'),
(3, 'bob@gmail.com', 'hello', 'bob', NULL, NULL, '3'),
(4, 'sally@sally.com', 'hey', 'Sally', NULL, NULL, '1'),
(5, 'someone@something.com', 'something', 'someone', NULL, NULL, '2'),
(6, 'someone@something.com', 'something', 'someone', NULL, NULL, '7'),
(7, 'person@person.com', 'pickle', 'person', NULL, NULL, '6'),
(120, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', NULL, '1'),
(121, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', NULL, '6'),
(122, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', NULL, '6'),
(123, 'mcisla@hotmail.com', '111', 'Isla', 'McCullough', NULL, '3'),
(124, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '2'),
(125, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '3'),
(126, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '3'),
(127, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '7'),
(128, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '2'),
(129, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '3'),
(130, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '4'),
(131, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '1'),
(132, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '7'),
(133, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '5'),
(134, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '2'),
(135, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '1'),
(136, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '7'),
(137, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '2'),
(138, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '3'),
(139, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '3'),
(140, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '5'),
(141, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '7'),
(142, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '7'),
(143, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '5'),
(144, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '2'),
(145, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '4'),
(146, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '5'),
(147, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '1'),
(148, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '1'),
(149, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '2'),
(150, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '7'),
(151, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '1'),
(152, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '6'),
(153, 'c.roscoe@hotmail.com', '1234', 'Carson', 'Roscoe', NULL, '2'),
(154, 'bob@bob.ca', 'bob', 'Bob', 'Smith', NULL, '7'),
(155, 'bob@bob.ca', 'bob', 'Bob', 'Smith', NULL, '2'),
(156, 'sally@sally.com', '1234', 'Sally', 'Smith', NULL, '1'),
(157, 'sally@sally.com', '1234', 'Sally', 'Smith', NULL, '5'),
(158, 'bob@gmail.com', '1234', 'Bobby', 'Smith', NULL, '2'),
(159, 'bob@gmail.com', '1234', 'Bobby', 'Smith', NULL, '1'),
(160, 'goog@fewfw.com', '123', 'Bob', 'fefw', NULL, '4'),
(161, 'goog@fewfw.com', '123', 'Bob', 'fefw', NULL, '5'),
(162, 'fslk@sgs.com', '123', 'Bob', 'Smith', NULL, '5'),
(163, 'fslk@sgs.com', '123', 'Bob', 'Smith', NULL, '7'),
(164, 'fslk@sgs.com', '123', 'Bob', 'Smith', NULL, '2'),
(165, 'fslk@sgs.com', '123', 'Bob', 'Smith', NULL, '7'),
(166, 'ef@fs.com', '123', 'Sally', 'Smith', NULL, '1'),
(167, 'ef@fs.com', '123', 'Sally', 'Smith', NULL, '4'),
(168, 'ef@fs.com', '123', 'Sally', 'Smith', NULL, '1'),
(169, 'ef@fs.com', '123', 'Sally', 'Smith', NULL, '3'),
(170, 'mcmc@gf.com', '123', 'Bob', 'ddqwfw', NULL, '3'),
(171, 'mcmc@gf.com', '123', 'Bob', 'ddqwfw', NULL, '5'),
(172, '123@1.com', '23', 'Paige', 'Smith', NULL, '1'),
(173, '123@1.com', '23', 'Paige', 'Smith', NULL, '2'),
(174, 'thisbetterwork@ugh.com', 'why', 'New', 'Person', NULL, NULL),
(175, 'thisbetterwork@ugh.com', 'why', 'New', 'Person', NULL, NULL),
(176, 'fkopf@f.com', '111', 'New', 'thing', NULL, NULL),
(177, 'fkopf@f.com', '111', 'New', 'thing', NULL, NULL),
(178, 'q@q.com', '111', 'q', 'q', NULL, '1'),
(179, 'q@q.com', '111', 'q', 'q', NULL, '5'),
(180, 'ji@d.com', '123', 'hi', 'ji', NULL, '3'),
(181, 'ji@d.com', '123', 'hi', 'ji', NULL, '6'),
(182, 'c@d.efg', 'hij', 'a', 'b', NULL, '1'),
(183, 'c@d.efg', 'hij', 'a', 'b', NULL, '1'),
(184, '111@1.com', '123', 'Sallyy', 'Herman', NULL, '6'),
(185, '111@1.com', '123', 'Sallyy', 'Herman', NULL, '4'),
(186, 'hi@hi.com', '123', 'Tom', 'Sawyer', NULL, '3'),
(187, 'hi@hi.com', '123', 'Tom', 'Sawyer', NULL, '3'),
(188, 'hi@hi.com', '123', 'Tom', 'Sawyer', NULL, '5'),
(189, 'hi@hi.com', '123', 'Tom', 'Sawyer', NULL, '7'),
(190, 'paul@gmail.com', '123', 'Paul', 'Wambam', NULL, '7'),
(191, 'paul@gmail.com', '123', 'Paul', 'Wambam', NULL, '2'),
(192, 'fes@gdgrd.com', '1234', 'Tielee', 'McConnery', NULL, '4'),
(193, 'fes@gdgrd.com', '1234', 'Tielee', 'McConnery', NULL, '1'),
(194, 'fjfjfjf@kfkf.com', '12345', 'something', 'someone', NULL, '6'),
(195, ':email', ':password', ':firstname', ':lastname', NULL, NULL),
(196, ':email', ':password', ':firstname', ':lastname', NULL, NULL),
(197, ':email', ':password', ':firstname', ':lastname', NULL, NULL),
(198, ':email', ':password', ':firstname', ':lastname', NULL, NULL),
(199, ':email', ':password', ':firstname', ':lastname', NULL, NULL),
(200, ':email', ':password', ':firstname', ':lastname', NULL, NULL),
(201, ':email', ':password', ':firstname', ':lastname', NULL, NULL),
(202, 'asdf@gmail.com', 'hihi5', NULL, 'walsh5', NULL, NULL),
(203, 'asd@gmail.com', 'asdf', 'siobhan6', 'walsh6', NULL, NULL),
(204, 'asdf@gmail.com', 'hihi9', 'siobhan9', 'walsh9', NULL, '5'),
(205, 'asdf@gmail.com', 'hihi10', 'siobhan10', 'walsh10', NULL, '6'),
(206, 'asdf@gmail.com', 'hihi11', 'siobhan11', 'walsh11', NULL, '1'),
(207, 'asdf@gmail.com', 'hihi16', 'siobhan16', 'walsh16', NULL, '2'),
(208, 'asdf@gmail.com', 'hihi18', 'siobhan18', 'walsh18', NULL, '1'),
(209, 'asdf@mail.com', 'hihi19', 'siobhan19', 'walsh19', NULL, '1'),
(210, 'asdf@gmail.com', 'hihi20', 'siobhan20', 'walsh20', NULL, '6'),
(211, 'asdf@gmail.com', 'hihi23', 'siobhan23', 'walsh23', NULL, '5'),
(212, 'asdf@gmail.com', 'asdf24', 'siobhan24', 'walsh24', NULL, '4'),
(213, 'asdf@gmail.com', '', 'siobhan24', 'walsh24', NULL, '4'),
(214, 'asdf@gmail.com', 'hihi25', 'siobhan25', 'walsh35', NULL, '3'),
(215, '', '', '', '', NULL, '3'),
(216, 'default@gmail.com', '', 'Isla McCullough', NULL, '10156277771025634', 'https://scontent.xx.fbcdn.net/hprofile-xtf1/v/t1.0-1/c92.0.550.550/s50x50/104629'),
(217, 'default@gmail.com', '', 'Isla McCullough', NULL, '10156277771025634', 'https://scontent.xx.fbcdn.net/hprofile-xtf1/v/t1.0-1/c92.0.550.550/s50x50/104629'),
(218, 'default@gmail.com', '', 'Isla McCullough', NULL, '10156277771025634', 'https://scontent.xx.fbcdn.net/hprofile-xtf1/v/t1.0-1/c92.0.550.550/s50x50/104629'),
(219, 'default@gmail.com', '', 'Isla McCullough', NULL, '10156277771025634', 'https://scontent.xx.fbcdn.net/hprofile-xtf1/v/t1.0-1/c92.0.550.550/s50x50/104629'),
(220, 'default@gmail.com', '', 'Isla McCullough', NULL, '10156277771025634', 'https://scontent.xx.fbcdn.net/hprofile-xtf1/v/t1.0-1/c92.0.550.550/s50x50/104629'),
(221, '', '', '', '', NULL, '7'),
(222, '', '', '', '', NULL, '6'),
(223, '', '', '', '', NULL, '1'),
(224, 'dfokg@oj.com', '123', 'Isla', 'sjgpos', NULL, '5'),
(225, '', '', '', '', NULL, '1'),
(226, '', '', '', '', NULL, '3'),
(227, '', '', '', '', NULL, '4'),
(228, '', '', '', '', NULL, '1'),
(229, '', '', '', '', NULL, '2'),
(230, '', '', '', '', NULL, '7'),
(231, '', '', '', '', NULL, '7'),
(232, '', '', 'ff', '', NULL, '4'),
(233, '', '', '', '', NULL, '5'),
(234, '', '', '', '', NULL, '5'),
(235, 'ff@dd.com', 'ff', 'fffff', 'ff', NULL, '7'),
(236, '', '', '', '', NULL, '1'),
(237, 'ff@dd.com', 'f', 'f', 'f', NULL, '2'),
(238, '', '', 'ff', '', NULL, '2'),
(239, 'ff@dd.com', 'ff', 'ff', 'ff', NULL, '4'),
(240, '', '', '', '', NULL, '5'),
(241, '', '', '', '', NULL, '7'),
(242, '', '', '', '', NULL, '7'),
(243, '', '', '', '', NULL, '7'),
(244, '', '', 'virginia', '', NULL, '7'),
(245, '', '', '', '', NULL, '4'),
(246, 'ff@dd.com', 'ff', 'ff', 'ff', NULL, '7'),
(247, 'ff@dd.com', 'ff', 'fff', 'f', NULL, '4'),
(248, 'dd@go.com', 'dd', 'dd', 'dd', NULL, '2'),
(249, '', '', '', '', NULL, '6'),
(250, 'ff@dd.com', 'ff', 'ff', 'ff', NULL, '3'),
(251, 'jj@ll.com', 'kk', 'jj', 'jj', NULL, '5'),
(252, 'ff@dd.com', 'ff', 'ff', 'ff', NULL, '7'),
(253, 'ff@dd.com', 'ff', 'fff', 'ff', NULL, '6'),
(254, '', '', '', '', NULL, '2'),
(255, 'pp@gg.vom', 'pp', 'pp', 'pp', NULL, '5'),
(256, 'ff@dd.com', 'ff', 'ffff', 'ff', NULL, '4'),
(257, 'ff@dd.com', 'ff', 'fff', 'ff', NULL, '5'),
(258, '', '', '', '', NULL, '1'),
(259, 'g', '', 'egegrg', 'egrerg', NULL, '1'),
(260, 'rgeg@rege.com', 'yy', 'egegrg', 'egrerg', NULL, '2'),
(261, 'rgeg@rege.com', 'yy', 'egegrg', 'egrerg', NULL, NULL),
(262, 'rgeg@rege.com', 'yy', 'egegrg', 'egrerg', NULL, NULL),
(263, 'rgeg@rege.com', 'q', 'rr', 'trt', NULL, '6'),
(264, 'rgeg@rege.com', 'q', 'rr', 'trt', NULL, NULL),
(265, 'rgeg@rege.com', 'q', 'rr', 'trt', NULL, NULL),
(266, '', '', '', '', NULL, '4'),
(267, 'default@gmail.com', '', 'Isla McCullough', NULL, '10156277771025634', 'https://scontent.xx.fbcdn.net/hprofile-xtf1/v/t1.0-1/c92.0.550.550/s50x50/104629'),
(268, 't5t5t@ko.com', '123', 't5t5t', 't5t5t', NULL, '6'),
(269, 't5t5t@ko.com', '123', 't5t5t', 't5t5t', NULL, NULL),
(270, 't5t5t@ko.com', '123', 't5t5t', 't5t5t', NULL, NULL),
(271, '123@123.c', '123', '123', '123', NULL, '3'),
(272, '123@123.com', '123', '123', '123', NULL, '5'),
(273, '123@123.com', '123', '123', '123', NULL, NULL),
(274, '123@123.com', '123', '123', '123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`DRUG`);

--
-- Indexes for table `illness`
--
ALTER TABLE `illness`
  ADD PRIMARY KEY (`ILL`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`MEDI`);

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
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `DRUG` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `illness`
--
ALTER TABLE `illness`
  MODIFY `ILL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `MEDI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `symptom`
--
ALTER TABLE `symptom`
  MODIFY `SYMP` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `UserNameID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=275;