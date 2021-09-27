-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 06:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thejobclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyvacancy`
--

CREATE TABLE `applyvacancy` (
  `dateApply` datetime NOT NULL,
  `vacancyId` int(4) NOT NULL,
  `CandidateId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `approvetable`
--

CREATE TABLE `approvetable` (
  `vacancyId` int(4) NOT NULL,
  `memberId` int(3) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvetable`
--

INSERT INTO `approvetable` (`vacancyId`, `memberId`, `dateCreated`) VALUES
(1, 1, '2021-02-04 00:00:00'),
(2, 1, '2021-02-04 00:00:00'),
(3, 1, '2021-02-04 00:00:00'),
(10, 1, '2021-02-13 00:00:00'),
(11, 1, '2021-02-15 00:00:00'),
(12, 1, '2021-02-15 00:00:00'),
(14, 1, '2021-02-15 00:00:00'),
(15, 1, '2021-02-15 00:00:00'),
(17, 1, '2021-02-15 00:00:00'),
(18, 1, '2021-02-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `consumerId` int(3) NOT NULL,
  `candidateName` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `candidateState` char(1) NOT NULL,
  `authcode` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`consumerId`, `candidateName`, `email`, `pass`, `candidateState`, `authcode`, `username`) VALUES
(1, 'Naween Pasindu Lakshan', 'htnaweenpasindu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', '50f871b111f774506e1891e36b5af4f5'),
(2, 'Wusitha Madeewa', 'wusitha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', '827d0c4b033a9db5264a39d91e5d9c6b'),
(3, 'Shakya', 'shakya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', '5b36eadf7755ea380d6c20ef9e03bf93'),
(4, 'candidate', 'candidate@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', '65afdfb40872c44eb6118b669b0d751e'),
(5, 'abc', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', '900150983cd24fb0d6963f7d28e17f72'),
(6, 'abc', 'asdf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', '900150983cd24fb0d6963f7d28e17f72'),
(7, 'pasindu', 'usfght@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', 'b1b9b6bbb3a176dde42602fa155c1b7c'),
(8, 'Naween Pasindu Lakshan', 'ucsc.is.group.project@gmail.com', '5975c85e8d2756810491f99edfa1cfed', 'C', 'ABCD', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `candidatequli`
--

CREATE TABLE `candidatequli` (
  `consumerId` int(3) NOT NULL,
  `qualificationId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidatequli`
--

INSERT INTO `candidatequli` (`consumerId`, `qualificationId`) VALUES
(1, 2),
(1, 5),
(2, 1),
(3, 1),
(4, 3),
(4, 5),
(4, 6),
(4, 7),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `consumerId` int(3) NOT NULL,
  `caompanyName` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(40) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `companyState` char(1) NOT NULL,
  `authcode` char(20) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`consumerId`, `caompanyName`, `email`, `web`, `pass`, `companyState`, `authcode`, `username`) VALUES
(1, 'company', 'company@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'C', '123456', '93c731f1c3a84ef05cd54d044c379eaa'),
(2, 'TVS King', 'tvs@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', 'f3d320408efc5ab66630b9ffc6c6cf2b'),
(13, 'TVS King', 'tvs1@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'C', 'ABCD', 'd00ebd8a3af938267ef11c9ca5383897');

-- --------------------------------------------------------

--
-- Table structure for table `consumercontact`
--

CREATE TABLE `consumercontact` (
  `consumerId` int(3) NOT NULL,
  `phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumercontact`
--

INSERT INTO `consumercontact` (`consumerId`, `phone`) VALUES
(2, '118'),
(2, '119');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualificationId` int(2) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `qweight` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualificationId`, `qualification`, `qweight`) VALUES
(1, 'Degree', 1),
(2, 'A/L', 2),
(3, 'O/L', 3),
(4, 'NVQ 4', 2),
(5, 'NVQ 3', 3),
(6, 'NVQ 1', 5),
(7, 'NVQ 2', 4),
(8, 'Diploma', 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `stafftype` char(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `staffName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `email`, `pass`, `stafftype`, `username`, `staffName`) VALUES
(1, 'Admin@localhost', 'd32934b31349d77e70957e057b1bcd28', 'a', 'd32934b31349d77e70957e057b1bcd28', 'Ucsc'),
(3, 'User@localhost', 'b59c67bf196a4758191e42f76670ceba', 's', '098f6bcd4621d373cade4e832627b4f6', 'Test'),
(6, 'check@gmail.com', '181dc9bdb52d04dc20036dbd8313ed055234', 's', '0ba4439ee9a46d9d9f14c60f88f45f87', 'check'),
(7, 'check2@gmail.com', '181dc9bdb52d04dc20036dbd8313ed055234', 's', '36ee3333b39d17154e698daca4295edd', 'check 2'),
(8, 'htnawefdenpasindu@gmail.com', '181dc9bdb52d04dc20036dbd8313ed055234', 's', 'ad0234829205b9033196ba818f7a872b', 'test 2 '),
(9, 'htnaweenpdfasindu@gmail.com', '181dc9bdb52d04dc20036dbd8313ed055234', 's', '8ad8757baa8564dc136c1e07507f4a98', 'test  3');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancyId` int(4) NOT NULL,
  `title` varchar(20) NOT NULL,
  `info` text NOT NULL,
  `vacancyState` char(1) NOT NULL,
  `vDate` datetime NOT NULL,
  `expDate` datetime NOT NULL,
  `vImage` varchar(50) DEFAULT NULL,
  `categoryId` int(2) NOT NULL,
  `companyId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancyId`, `title`, `info`, `vacancyState`, `vDate`, `expDate`, `vImage`, `categoryId`, `companyId`) VALUES
(1, 'Test test test', 'Test test test', 'E', '2021-02-04 00:00:00', '2021-02-17 00:00:00', NULL, 1, 1),
(2, 'Test test test  2 ', 'test test test est', 'E', '2021-02-04 00:00:00', '2021-04-21 00:00:00', NULL, 2, 1),
(3, 'Test test test  3', 'Test test test test test', 'E', '2021-02-04 00:00:00', '2021-04-20 00:00:00', NULL, 1, 1),
(4, 'Test test test  4', 'naween', 'E', '2021-02-13 00:00:00', '2021-02-23 00:00:00', NULL, 2, 2),
(5, 'Test test test  5', 'Test test test  5', 'E', '0000-00-00 00:00:00', '2021-02-26 00:00:00', NULL, 3, 2),
(6, 'Test test test  6', 'Test test test  6', 'E', '0000-00-00 00:00:00', '2021-02-28 00:00:00', NULL, 1, 2),
(7, 'Test test test  7', 'Test test test  7', 'E', '2021-02-13 00:00:00', '2021-02-24 00:00:00', NULL, 2, 2),
(8, 'Test test test 8', 'Y-m-d H:i:s', 'E', '2021-02-13 09:01:45', '2021-02-25 00:00:00', NULL, 1, 2),
(9, 'Test test test  8', 'Test test test  8', 'E', '2021-02-13 09:21:13', '2021-02-18 13:50:00', NULL, 2, 2),
(10, 'Test test test', 'asdfghjkl/', 'H', '2021-02-13 18:19:43', '2021-02-28 22:49:00', NULL, 1, 2),
(11, 'Test test test  2 ', 'qweryl.,m', 'b', '2021-02-15 09:57:56', '2021-02-24 14:27:00', NULL, 1, 2),
(12, 'Test test test  3', 'aertyjk.', 'H', '2021-02-15 10:15:11', '2021-02-26 14:45:00', NULL, 1, 2),
(13, 'Test test test  4', 'jfds', 'H', '2021-02-15 10:15:32', '2021-02-24 14:45:00', NULL, 1, 2),
(14, 'Test test test  5', 'dghjkl.m nbvcsdfrtyuhijlk/', 'H', '2021-02-15 12:07:40', '2021-02-27 16:37:00', NULL, 1, 2),
(15, 'Test test test  8', 'fghjk', 'b', '2021-02-15 13:21:41', '2021-02-19 17:51:00', NULL, 1, 2),
(16, 'Test test test  9', 'sdetyui;', 'H', '2021-02-15 13:22:38', '2021-02-24 17:52:00', NULL, 1, 2),
(17, 'Test test test  6', ',n,mn', 'U', '2021-02-15 14:18:12', '2021-02-19 18:48:00', NULL, 1, 2),
(18, 'Test test test  10', 'dfghj.', 'b', '2021-02-15 15:49:06', '2021-02-27 20:18:00', NULL, 3, 2),
(19, 'Test test test 11', 'fghjkl', 'H', '2021-02-15 15:54:03', '2021-02-28 20:23:00', NULL, 2, 2),
(20, 'test', 'fghjk', 'E', '2021-02-15 16:32:25', '2021-02-09 21:02:00', NULL, 2, 2),
(21, 'test 14', 'dfghjkhgf', 'E', '2021-02-15 17:52:03', '2021-02-04 22:22:00', NULL, 1, 2),
(22, 'new test ', 'test', 'H', '2021-02-16 00:14:46', '2021-02-26 04:44:00', NULL, 2, 2),
(23, 'test 1', 'dfgh', 'P', '2021-02-16 00:57:49', '2021-02-18 05:27:00', NULL, 1, 2),
(24, 'test  3', 'sdfghj', 'E', '2021-02-16 00:58:27', '2021-02-10 05:28:00', NULL, 1, 2),
(25, 'test 2', 'test test test', 'P', '2021-02-16 06:21:48', '2021-02-26 10:51:00', NULL, 1, 2),
(26, 'test 3', 'test test', 'U', '2021-02-16 06:32:43', '2021-02-22 11:02:00', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vacancycategory`
--

CREATE TABLE `vacancycategory` (
  `categoryId` int(2) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancycategory`
--

INSERT INTO `vacancycategory` (`categoryId`, `category`) VALUES
(1, 'Full Time'),
(2, 'Full/Part Time'),
(3, 'Part Time');

-- --------------------------------------------------------

--
-- Table structure for table `vacancyqualification`
--

CREATE TABLE `vacancyqualification` (
  `vacancyId` int(4) NOT NULL,
  `qualificationId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancyqualification`
--

INSERT INTO `vacancyqualification` (`vacancyId`, `qualificationId`) VALUES
(1, 2),
(2, 5),
(3, 1),
(3, 4),
(4, 2),
(4, 4),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(8, 5),
(9, 1),
(9, 4),
(10, 4),
(11, 2),
(11, 4),
(12, 1),
(13, 4),
(14, 1),
(14, 5),
(15, 4),
(16, 3),
(16, 4),
(17, 1),
(17, 2),
(17, 4),
(18, 2),
(19, 3),
(19, 4),
(19, 5),
(19, 6),
(19, 7),
(20, 2),
(21, 8),
(22, 2),
(22, 4),
(23, 4),
(23, 8),
(24, 2),
(25, 2),
(26, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyvacancy`
--
ALTER TABLE `applyvacancy`
  ADD PRIMARY KEY (`CandidateId`,`vacancyId`),
  ADD KEY `vacancyId` (`vacancyId`);

--
-- Indexes for table `approvetable`
--
ALTER TABLE `approvetable`
  ADD PRIMARY KEY (`vacancyId`,`memberId`,`dateCreated`),
  ADD KEY `memberId` (`memberId`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`consumerId`),
  ADD UNIQUE KEY `consumerid` (`email`);

--
-- Indexes for table `candidatequli`
--
ALTER TABLE `candidatequli`
  ADD PRIMARY KEY (`consumerId`,`qualificationId`),
  ADD KEY `qualificationId` (`qualificationId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`consumerId`),
  ADD UNIQUE KEY `consumerId` (`email`);

--
-- Indexes for table `consumercontact`
--
ALTER TABLE `consumercontact`
  ADD PRIMARY KEY (`consumerId`,`phone`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualificationId`),
  ADD UNIQUE KEY `qualificationId` (`qualification`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`),
  ADD UNIQUE KEY `staffId` (`email`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vacancyId`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `companyId` (`companyId`);

--
-- Indexes for table `vacancycategory`
--
ALTER TABLE `vacancycategory`
  ADD PRIMARY KEY (`categoryId`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `vacancyqualification`
--
ALTER TABLE `vacancyqualification`
  ADD PRIMARY KEY (`vacancyId`,`qualificationId`),
  ADD KEY `qualificationId` (`qualificationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `consumerId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `consumerId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualificationId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vacancyId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vacancycategory`
--
ALTER TABLE `vacancycategory`
  MODIFY `categoryId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applyvacancy`
--
ALTER TABLE `applyvacancy`
  ADD CONSTRAINT `applyvacancy_ibfk_1` FOREIGN KEY (`vacancyId`) REFERENCES `vacancy` (`vacancyId`),
  ADD CONSTRAINT `applyvacancy_ibfk_2` FOREIGN KEY (`CandidateId`) REFERENCES `candidate` (`consumerId`);

--
-- Constraints for table `approvetable`
--
ALTER TABLE `approvetable`
  ADD CONSTRAINT `approvetable_ibfk_1` FOREIGN KEY (`vacancyId`) REFERENCES `vacancy` (`vacancyId`),
  ADD CONSTRAINT `approvetable_ibfk_2` FOREIGN KEY (`memberId`) REFERENCES `staff` (`staffId`);

--
-- Constraints for table `candidatequli`
--
ALTER TABLE `candidatequli`
  ADD CONSTRAINT `candidatequli_ibfk_1` FOREIGN KEY (`consumerId`) REFERENCES `candidate` (`consumerId`),
  ADD CONSTRAINT `candidatequli_ibfk_2` FOREIGN KEY (`qualificationId`) REFERENCES `qualification` (`qualificationId`);

--
-- Constraints for table `consumercontact`
--
ALTER TABLE `consumercontact`
  ADD CONSTRAINT `consumercontact_ibfk_1` FOREIGN KEY (`consumerId`) REFERENCES `company` (`consumerId`),
  ADD CONSTRAINT `consumercontact_ibfk_2` FOREIGN KEY (`consumerId`) REFERENCES `candidate` (`consumerId`);

--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `vacancycategory` (`categoryId`),
  ADD CONSTRAINT `vacancy_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`consumerId`);

--
-- Constraints for table `vacancyqualification`
--
ALTER TABLE `vacancyqualification`
  ADD CONSTRAINT `vacancyqualification_ibfk_1` FOREIGN KEY (`vacancyId`) REFERENCES `vacancy` (`vacancyId`),
  ADD CONSTRAINT `vacancyqualification_ibfk_2` FOREIGN KEY (`qualificationId`) REFERENCES `qualification` (`qualificationId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
