-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2013 at 12:57 WB
-- Server version: 5.5.31
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campaign`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `idcontact` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `lcampaign`
--

CREATE TABLE IF NOT EXISTS `lcampaign` (
  `idlcampaign` int(11) NOT NULL,
  `about` varchar(45) NOT NULL,
  `message` longtext NOT NULL,
  `manifesto` longtext NOT NULL,
  `paymentstate` varchar(45) NOT NULL,
  `coverphoto` varchar(100) NOT NULL,
  `photo_1` varchar(100) NOT NULL,
  `photo_2` varchar(100) NOT NULL,
  `photo_3` varchar(100) NOT NULL,
  PRIMARY KEY (`idlcampaign`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lcampaign`
--

INSERT INTO `lcampaign` (`idlcampaign`, `about`, `message`, `manifesto`, `paymentstate`, `coverphoto`, `photo_1`, `photo_2`, `photo_3`) VALUES
(1, 'I am a third year student', 'Computer Science has been neglected for long', 'New canteens,wifi', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE IF NOT EXISTS `leader` (
  `idleader` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `vyingpost` varchar(45) NOT NULL,
  `tagline` varchar(45) NOT NULL,
  `school` varchar(32) NOT NULL,
  `phone_1` int(11) NOT NULL,
  `phone_2` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`idleader`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`idleader`, `name`, `age`, `gender`, `course`, `vyingpost`, `tagline`, `school`, `phone_1`, `phone_2`, `email`) VALUES
(1, 'Griffin Muteti Ngei', '20', 'Male', 'Bsc Computer Science', 'Congress Man', 'your my leader', 'School Of Engineering', 722637857, 702990800, 'griffinmute'),
(2, 'Dennis Simiyu', '22', 'Male', 'Bsc Computer Science', 'Congeress Man', 'let me serve you', 'School Of Education', 721474836, 721474836, 'denissimiyu');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `idmessages` int(11) NOT NULL,
  `messagescol` longtext,
  `to` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmessages`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `idschool` int(11) NOT NULL,
  `university` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idschool`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`idschool`, `university`, `name`) VALUES
(1, 'Kenyatta University', 'School Of Engineering'),
(2, 'Kenyatta University', 'School Of Education');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `iduniversity` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  PRIMARY KEY (`iduniversity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`iduniversity`, `name`, `state`) VALUES
(1, 'Kenyatta University', 'upcoming');
