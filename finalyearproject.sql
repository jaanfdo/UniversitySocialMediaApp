-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 04:59 PM
-- Server version: 5.7.11-log
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalyearproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text NOT NULL,
  `batchno` varchar(45) DEFAULT NULL,
  `subjects` text,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `lecturer` text NOT NULL,
  `reason` text NOT NULL,
  `response` varchar(45) DEFAULT NULL,
  `owner` text NOT NULL,
  `createdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `course`, `batchno`, `subjects`, `date`, `time`, `lecturer`, `reason`, `response`, `owner`, `createdate`) VALUES
(1, 'HND in Computing', '23', 'Web Application Development', '2017-01-01', '10:50:00', 'Malsha', 'to see the web application', 'Accept', 'Janith', '2017-01-01 10:50:00'),
(2, 'Beng (hons) in Software Engineering', '4', 'Advance Development', '2017-02-02', '20:40:00', 'Mahesha', 'to see the assignment', 'Reject', 'Janith', '2017-02-02 20:40:00'),
(3, 'HND in Computing', '23', 'Web Application Development', '2017-10-02', '10:50:00', 'Malsha', 'to see the web application', 'New', 'Janith', '2017-09-05 10:50:00'),
(4, 'Beng (hons) in Software Engineering', '3', 'Advance Software Engineering', '2017-10-01', '10:50:00', 'Mahesha', 'to see the web application', 'New', 'Janith', '2017-09-06 10:50:00'),
(6, 'HND in Computing', '22', 'Web Application Development', '2017-09-22', '10:50:00', 'Malsha', 'to see the web application', 'accept', 'Janith', '2017-09-10 10:50:00'),
(7, 'juu', 'junun', 'nunu', '2015-12-30', '23:58:00', 'nun', 'svrgfht', 'New', 'huhscd', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentresponse`
--

CREATE TABLE IF NOT EXISTS `appointmentresponse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointmentid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `time` time NOT NULL,
  `response` text NOT NULL,
  `responsedate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `appointmentresponse`
--

INSERT INTO `appointmentresponse` (`id`, `appointmentid`, `studentid`, `date`, `time`, `response`, `responsedate`) VALUES
(1, 2, 100, '2017-10-15 00:00:00', '13:30:00', 'success', '2017-09-10 00:00:00'),
(2, 3, 120, '2017-10-23 00:00:00', '13:30:00', 'reject', '2017-09-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniid` int(11) NOT NULL,
  `courseid` varchar(25) NOT NULL,
  `batchno` varchar(20) NOT NULL,
  `startsemester` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniid` (`uniid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `uniid`, `courseid`, `batchno`, `startsemester`) VALUES
(1, 1, '1', '005', 'September'),
(2, 1, '2', '006', 'September'),
(3, 2, '1', '00010', 'February'),
(4, 3, '1', 'i005', 'January'),
(5, 4, '2', '123', 'March'),
(6, 1, '1', '02', '2017-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `uniid` varchar(45) DEFAULT NULL,
  `coursecode` varchar(45) DEFAULT NULL,
  `course` varchar(200) DEFAULT NULL,
  `courseprx` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `uniid`, `coursecode`, `course`, `courseprx`) VALUES
(0, '1', '02', 'xvfd', 'vfbg'),
(1, '1', 'p001', 'Pearson BTEC HND in Computing', 'HND'),
(2, '1', 'e001', 'BEng (Hons ) in Software Engineering Top-up (London Met – UK)', 'Top Up SE');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` text NOT NULL,
  `course` text NOT NULL,
  `batchno` varchar(45) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` text NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `description` text,
  `organizer` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `owner` text NOT NULL,
  `createddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `eventname`, `course`, `batchno`, `date`, `time`, `place`, `address`, `description`, `organizer`, `photo`, `owner`, `createddate`) VALUES
(1, 'Challenge 24', 'HND in Computing', '6', '2017-01-05', '10:50:00', 'BMICH', '152 BMICH, Colombo', '12th BME International 24-hour Programming Contest poster ', 'HND b2 ', '12ch24_2.jpg', 'Janith', '2017-10-20 10:00:00'),
(2, 'Coding Contest 2014', 'Beng (hons) in Software Engineering', '7', '2017-05-04', '05:10:00', 'liberty plaza', '22 liberty plaza, Colombo', 'Coding Contest 2014. Programming Contest Poster', 'HND b 26', 'contest-poster.png', 'Janith', '2017-05-01 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE IF NOT EXISTS `examschedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text CHARACTER SET utf8 NOT NULL,
  `batchno` varchar(45) COLLATE utf8_icelandic_ci DEFAULT NULL,
  `subjects` text CHARACTER SET utf8 NOT NULL,
  `examtype` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `class_floor` text CHARACTER SET utf8,
  `class_no` text CHARACTER SET utf8,
  `owner` text CHARACTER SET utf8 NOT NULL,
  `createdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `course`, `batchno`, `subjects`, `examtype`, `date`, `time`, `class_floor`, `class_no`, `owner`, `createdate`) VALUES
(1, 'bsc hons in software engineering', '6', 'Artificial Intelligence', 'inclass', '2017-10-01', '10:00:00', '4', '5', '', '0000-00-00 00:00:00'),
(2, 'bsc hons in software engineering', '6', 'Advance Development', 'close book', '2017-10-07', '10:00:00', '4', '5', 'Mahesha', '2017-10-01 00:00:00'),
(4, 'adasda', 'cdsc', 'scds', 'inclass', '2017-10-20', '22:30:00', 'ac', 'cdscs', 'jaan fdo', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `date` datetime NOT NULL,
  `time` time NOT NULL,
  `owner` text NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `date`, `time`, `owner`, `file`) VALUES
(1, 'Statement', '2017-07-02 00:00:00', '10:00:00', 'janith', 'assets/images/News/65c45a823b27cf485eb82893e6158ffb.png'),
(2, 'Hacker', '2017-07-06 00:00:00', '12:30:00', 'tutu', 'assets/images/News/4867792-ethical-computer-hacking.jpg'),
(3, 'Success', '2017-07-10 00:00:00', '08:40:00', 'jaan', 'assets/images/News/dcab22f4cfd2c666ecc0352d25647132.jpg'),
(4, 'Great Programmer', '2017-07-15 00:00:00', '22:10:00', 'jaan', 'assets/images/News/great-programming-quotes.jpg'),
(5, 'Steve Jobs', '2017-07-29 00:00:00', '13:55:00', 'janith', 'assets/images/News/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `news` text NOT NULL,
  `date` datetime NOT NULL,
  `time` time NOT NULL,
  `owner` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `news`, `date`, `time`, `owner`) VALUES
(1, 'Today Programming', 'Programming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the universe trying to build bigger and better idiots. So far, the universe is winning.', '2017-07-01 00:00:00', '10:50:00', 'janith'),
(2, 'Language', 'Lisp isn''t a language, it''s a building material', '2017-07-20 00:00:00', '10:20:00', 'janith'),
(3, 'Low Level Programming Language', 'A programming language is low level when its programs require attention to the irrelevant', '2017-07-07 00:00:00', '15:30:00', 'janith'),
(4, 'Computer Science', 'Computer science education cannot make anybody an expert programmer any more than studying brushes and pigment can make somebody an expert painter.', '2017-07-20 00:00:00', '12:10:00', 'tutu'),
(5, 'Java', 'Fine, Java MIGHT be a good example of what a programming language should be like. But Java applications are good examples of what applications SHOULDN’T be like', '2017-07-26 00:00:00', '08:45:00', 'jaan'),
(6, 'Programmer', 'Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live', '2017-08-01 00:00:00', '20:10:00', 'tutu');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` text NOT NULL,
  `batchno` varchar(45) DEFAULT NULL,
  `subjects` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `class_floor` text,
  `class_no` text,
  `lecturer` text,
  `owner` text NOT NULL,
  `createdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `course`, `batchno`, `subjects`, `date`, `time`, `class_floor`, `class_no`, `lecturer`, `owner`, `createdate`) VALUES
(1, 'bsc hons in software engineering', '6', 'Artificial Intelligence', '2017-07-20', '10:30:00', '5', '1', 'Mahesha', 'Mahesha', '2017-07-14 00:00:00'),
(2, 'bsc hons in software engineering', '6', 'Advance Development', '2017-07-20', '13:30:00', '2', '2', 'Mahesha', 'Mahesha', '2017-07-14 00:00:00'),
(3, 'HND in Computing', '23', 'Web Application Development', '2017-09-20', '10:30:00', '3', '2', 'Malsha', 'Malsha', '2017-09-14 00:00:00'),
(4, 'HND in Computing', '23', 'Object Oriented Programming', '2017-09-20', '13:30:00', '3', '1', 'Malsha', 'Malsha', '2017-09-14 00:00:00'),
(5, 'bsc hons in software engineering', '6', 'Artificial Intelligence', '2017-09-23', '10:30:00', '4', '4', 'Mahesha', 'janith', '0000-00-00 00:00:00'),
(6, 'bsc hons in software engineering', '6', 'Advance Development', '2017-09-23', '13:30:00', '2', '1', 'Mahesha', 'Mahesha', '2017-09-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `university` varchar(45) DEFAULT NULL,
  `unicode` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `confirmpassword` varchar(45) DEFAULT NULL,
  `userroll` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `university`, `unicode`, `username`, `password`, `confirmpassword`, `userroll`) VALUES
(1, 'janith', 'srimal', 'jaanfdo@gmail.com', '001', '12562', 'janith', 'janith', 'janith', 'Lecturer'),
(2, 'tutu', 'fdo', 'tutufdo@gmail.com', '001', '12456', 'tutu', 'tutu', 'tutu', 'Student'),
(3, 'jaan', 'fdo', 'jaanfdo@gmail.com', '001', '25694', 'jaan', 'jaan', 'jaan', 'Student'),
(4, 'admin', 'admin', 'admin@gmail.com', '001', '12536', 'admin', 'admin', 'admin', 'Admin'),
(5, 'iuhiu', 'hhuih', 'hiuhiu', 'nkjn', 'kjnkk', 'knkjn', 'nkj', NULL, 'Student'),
(6, 'tito', 'malshan', 'tito@gmail.com', 'esoft metro campus', '12563', 'tito', 'tito', NULL, 'Student'),
(7, 'gyugu', 'hbhb', 'uih', 'iuhiuh', '85', 'jjj', 'jjj', NULL, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniid` varchar(20) DEFAULT NULL,
  `courseid` varchar(20) DEFAULT NULL,
  `subjectscode` varchar(20) NOT NULL,
  `subjects` varchar(45) NOT NULL,
  `subjectprx` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `uniid`, `courseid`, `subjectscode`, `subjects`, `subjectprx`) VALUES
(1, '1', '1', 's001', 'Programming', 'Prgramming'),
(2, '1', '1', 's001', 'Security', 'Security'),
(3, '1', '1', 's002', 'Networking', 'Networking'),
(4, '1', '1', 's003', 'Web design & development', 'WEB'),
(5, '1', '1', 'sdcs', 'cdscs', 'fdddf');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `university` varchar(100) NOT NULL,
  `unicode` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `university`, `unicode`) VALUES
(1, 'Esoft Metro Campus', '001'),
(2, 'Sri Lanka Institute of Information Technology', '002'),
(3, 'Informatics Institute of Technology', '003'),
(4, 'National Institute of Business Management', '004'),
(5, 'ad', 'vfgb');

-- --------------------------------------------------------

--
-- Table structure for table `universitybranch`
--

CREATE TABLE IF NOT EXISTS `universitybranch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniid` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `branchcode` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniid` (`uniid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `universitybranch`
--

INSERT INTO `universitybranch` (`id`, `uniid`, `branch`, `branchcode`) VALUES
(1, 1, 'Head Office', '00001'),
(2, 1, 'Nugegoda', '00002'),
(3, 1, 'Negombo', '00003'),
(4, 2, 'Head Office', '00004'),
(5, 2, 'Metro Campus', '00005'),
(6, 3, 'Head Office', '00006'),
(7, 4, 'Head Office', '00007'),
(9, 1, 'gbg', 'vfd');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`uniid`) REFERENCES `university` (`id`);

--
-- Constraints for table `universitybranch`
--
ALTER TABLE `universitybranch`
  ADD CONSTRAINT `universitybranch_ibfk_1` FOREIGN KEY (`uniid`) REFERENCES `university` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
