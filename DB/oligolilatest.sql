-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2015 at 06:48 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oligolilatest`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('abusufian', '123456'),
('tajul', '123456'),
('abusufian', '123456'),
('tajul', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customerregistration`
--

CREATE TABLE IF NOT EXISTS `customerregistration` (
`UserID` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Profession` varchar(45) DEFAULT NULL,
  `NID` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Area` varchar(45) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `phonenumber` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customerregistration`
--

INSERT INTO `customerregistration` (`UserID`, `FirstName`, `LastName`, `Age`, `Profession`, `NID`, `image`, `Username`, `password`, `Area`, `review`, `phonenumber`, `email`, `date`) VALUES
(1, 'Arafat', 'Habib', 24, 'Student', '1234567890123456', 'uploads/aru.JPG', 'aru', '123', 'Mohakhali', 11, '01766898761', 'akhtab007@gmail.com', '2015-08-04'),
(2, 'Razia', 'Nishi', 23, 'Student', '1234567890123456', 'uploads/razia.JPG', 'razia', '123', 'Mohakhali', 11, '01754207483', 'rsnishi1992@gmail.com', '2015-08-04'),
(3, 'Asif', 'Ibtehaz', 24, 'Student', '1234567890123456', 'uploads/asif.JPG', 'asif', '123', 'Mohakhali', 10, '01723130852', 'ibtehaz.shawon@gmail.com', '2015-08-04'),
(4, 'rubel', 'hossain', 24, 'Student', '1234567890123456', 'uploads/ef.JPG', 'rubel', '123', 'Gulshan', 10, '01825711955', 'tajulislam.glab@gmail.com', '2015-08-06'),
(5, 'Sakib', 'Hasan', 24, 'Student', '1234567890123456', 'uploads/jk.JPG', 'sakib', '123', 'Banani', 10, '01825711955', 'tajulislam.glab@gmail.com', '2015-08-06'),
(6, 'kaled', 'Islam', 24, 'Student', '1234567890123456', 'uploads/we.JPG', 'kaled', '123', 'Mirpur', 10, '01825711955', 'tajulislam.glab@gmail.com', '2015-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`idlogin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posttask`
--

CREATE TABLE IF NOT EXISTS `posttask` (
`PosttaskId` int(11) NOT NULL,
  `tasktitle` varchar(45) DEFAULT NULL,
  `taskdescription` varchar(250) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `assign` varchar(45) DEFAULT NULL,
  `CustomerRegistration_UserName` varchar(20) NOT NULL,
  `accept` varchar(45) DEFAULT NULL,
  `taskerfeedback` varchar(100) DEFAULT NULL,
  `taskercomment` text,
  `tasker` varchar(200) NOT NULL,
  `userfeedback` varchar(200) NOT NULL,
  `usercomment` varchar(200) NOT NULL,
  `postdate` date NOT NULL,
  `submitdate` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `posttask`
--

INSERT INTO `posttask` (`PosttaskId`, `tasktitle`, `taskdescription`, `location`, `Username`, `assign`, `CustomerRegistration_UserName`, `accept`, `taskerfeedback`, `taskercomment`, `tasker`, `userfeedback`, `usercomment`, `postdate`, `submitdate`) VALUES
(3, 'make a website', 'personal blog', 'Mohakhali', 'aru', 'done', '0', 'abu', 'done', NULL, 'Web developer', 'done', 'keep up the good work', '2015-08-03', '2015-08-06'),
(4, 'A timely updated student database websystem', 'keep tracking  of all record of student and teacher', 'Mohakhali', 'razia', 'done', '0', 'syeda', 'done', NULL, 'Web developer', 'done', '', '2015-08-03', '2015-09-10'),
(5, 'Mobile Application', 'Android application', 'Gulshan', 'aru', NULL, 'aru', NULL, NULL, NULL, 'android developer', '', '', '2015-08-05', '2015-07-15'),
(6, 'Mobile Application', 'Android application', 'Mohakhali', 'aru', NULL, 'aru', NULL, NULL, NULL, 'android developer', '', '', '2015-08-05', '2015-07-15'),
(7, 'Web application', 'Websites', 'Mohakhali', 'aru', 'done', 'aru', 'tajul', NULL, NULL, 'Web developer', '', '', '2015-08-05', '2015-07-15'),
(8, 'Web application', 'anu', 'Mohakhali', 'aru', 'tajul', 'aru', NULL, NULL, NULL, 'Web developer', '', '', '2015-08-05', '2016-04-02'),
(9, 'abcd', 'abcd', 'Mohakhali', 'aru', NULL, 'aru', NULL, NULL, NULL, 'Web developer', '', '', '2015-08-05', '2015-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `taskerregistration`
--

CREATE TABLE IF NOT EXISTS `taskerregistration` (
`TaskerId` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `FathersName` varchar(45) DEFAULT NULL,
  `MothersName` varchar(45) DEFAULT NULL,
  `Age` varchar(45) DEFAULT NULL,
  `NID` varchar(45) DEFAULT NULL,
  `Skills` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Area` varchar(45) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `phonenumber` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `taskerregistration`
--

INSERT INTO `taskerregistration` (`TaskerId`, `FirstName`, `LastName`, `FathersName`, `MothersName`, `Age`, `NID`, `Skills`, `image`, `Username`, `password`, `Area`, `review`, `phonenumber`, `email`, `date`) VALUES
(1, 'Tajul', 'Islam', '...', '...', '24', '1234567890123456', 'Web developer', 'uploads/tajul.JPG', 'tajul', '123', 'Mohakhali', 15, '01825711955', 'tajulislam.glab@gmail.com', '2015-08-04'),
(2, 'Abu', 'Sufian', '...', '...', '24', '1234567890123456', 'Web developer', 'uploads/abu.JPG', 'abu', '123', 'Mohakhali', 12, '01817005326', 'ynor7005326@gmail.com', '2015-08-04'),
(3, 'Syeda', 'Azim', '...', '...', '23', '1234567890123456', 'Web developer', 'uploads/syeda.JPG', 'syeda', '123', 'Mohakhali', 14, '01960276977', 'synjaz@gmail.com', '2015-08-04'),
(4, 'Abir', 'Islam', '...', '...', '24', '1234567890123456', 'android developer', 'uploads/a.JPG', 'kamal', '123', 'Banani', 10, '01825711955', 'tajulislam.glab@gmail.com', '2015-08-05'),
(5, 'habib', 'ali', '...', '...', '24', '1234567890123456', 'Electrician', 'uploads/b.JPG', 'habib', '123', 'Gulshan', 10, '01825711955', 'tajulislam.glab@gmail.com', '2015-08-05'),
(6, 'kabil', 'ali', '...', '...', '24', '1234567890123456', 'IOS developer', 'uploads/c.JPG', 'kabil', '123', 'Uttora', 10, '01825711955', 'tajulislam.glab@gmail.com', '2015-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerregistration`
--
ALTER TABLE `customerregistration`
 ADD PRIMARY KEY (`UserID`), ADD UNIQUE KEY `UserID_UNIQUE` (`UserID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`idlogin`);

--
-- Indexes for table `posttask`
--
ALTER TABLE `posttask`
 ADD PRIMARY KEY (`PosttaskId`);

--
-- Indexes for table `taskerregistration`
--
ALTER TABLE `taskerregistration`
 ADD PRIMARY KEY (`TaskerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerregistration`
--
ALTER TABLE `customerregistration`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posttask`
--
ALTER TABLE `posttask`
MODIFY `PosttaskId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `taskerregistration`
--
ALTER TABLE `taskerregistration`
MODIFY `TaskerId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
ADD CONSTRAINT `CusID` FOREIGN KEY (`idlogin`) REFERENCES `customerregistration` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `TsID` FOREIGN KEY (`idlogin`) REFERENCES `taskerregistration` (`TaskerId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
