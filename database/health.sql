-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 09:48 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `typ` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`, `typ`) VALUES
(1, 'admin', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `dcoid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `hname` text NOT NULL,
  `sex` text NOT NULL,
  `dob` text NOT NULL,
  `email` text NOT NULL,
  `addr` text NOT NULL,
  `cntno` text NOT NULL,
  `qual` text NOT NULL,
  `special` text NOT NULL,
  `file` text NOT NULL,
  `exp` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `typ` text NOT NULL,
  `stat` text NOT NULL,
  `dat` text NOT NULL,
  PRIMARY KEY (`dcoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dcoid`, `name`, `hname`, `sex`, `dob`, `email`, `addr`, `cntno`, `qual`, `special`, `file`, `exp`, `username`, `password`, `typ`, `stat`, `dat`) VALUES
(2, 'SHAMEER', 'PALANA', 'MALE', '2019/2/20', 'sham@gmail.com', 'PALAKKAD', '9847169014', 'PG', 'HEART', '../upload/25568_1516266200.pdf', '1', 'b', 'b', 'doctor', 'approve', '14/04/2019');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `accredat` text NOT NULL,
  `addr` text NOT NULL,
  `hregno` text NOT NULL,
  `file` text NOT NULL,
  `npersoname` text NOT NULL,
  `tnonper` text NOT NULL,
  `npersonem` text NOT NULL,
  `emno` text NOT NULL,
  `ambno` text NOT NULL,
  `blbnkno` text NOT NULL,
  `helpno` text NOT NULL,
  `website` text NOT NULL,
  `eyear` text NOT NULL,
  `speciali` text NOT NULL,
  `facili` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `stat` text NOT NULL,
  `dat` text NOT NULL,
  `typ` text NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `name`, `type`, `accredat`, `addr`, `hregno`, `file`, `npersoname`, `tnonper`, `npersonem`, `emno`, `ambno`, `blbnkno`, `helpno`, `website`, `eyear`, `speciali`, `facili`, `username`, `password`, `stat`, `dat`, `typ`) VALUES
(1, 'PALANA', 'Government', 'NABH', 'PALAKKAD KERALA', '989898989', '../upload/25568_1516266200.pdf', 'HHH', '09847169014', 'sham@gmail.com', '9847169014', '9847169014', '9847169014', '9847169014', 'https://www.google.com/', '2019', 'no', 'hi', 'a', 'a', 'approve', '15/04/2019', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `labid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `addr` text NOT NULL,
  `cntno` text NOT NULL,
  `licenam` text NOT NULL,
  `file` text NOT NULL,
  `file1` text NOT NULL,
  `dateofe` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `stat` text NOT NULL,
  `dat` text NOT NULL,
  `typ` text NOT NULL,
  PRIMARY KEY (`labid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`labid`, `name`, `type`, `addr`, `cntno`, `licenam`, `file`, `file1`, `dateofe`, `username`, `password`, `stat`, `dat`, `typ`) VALUES
(3, 'KRV', 'PRIVATE', 'PALAKKAD', '09847169014', 'SHAMEER', '../upload/25072017_1500979852_859439.jpg', '../upload/44592_1517063744.pdf', '2019', 'l', 'l', 'approve', '14/04/2019', 'lab');

-- --------------------------------------------------------

--
-- Table structure for table `laboratoryamount`
--

CREATE TABLE IF NOT EXISTS `laboratoryamount` (
  `laboratryid` int(11) NOT NULL AUTO_INCREMENT,
  `uniqno` text NOT NULL,
  `name` text NOT NULL,
  `hname` text NOT NULL,
  `doctor` text NOT NULL,
  `deseases` text NOT NULL,
  `prescri` text NOT NULL,
  `lname` text NOT NULL,
  `amount` text NOT NULL,
  `file` text NOT NULL,
  `des` text NOT NULL,
  `dat` text NOT NULL,
  PRIMARY KEY (`laboratryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `laboratoryamount`
--

INSERT INTO `laboratoryamount` (`laboratryid`, `uniqno`, `name`, `hname`, `doctor`, `deseases`, `prescri`, `lname`, `amount`, `file`, `des`, `dat`) VALUES
(1, 'RAJ705787', 'RAJ', 'House Surgeon', 'House Surgeon', 'COLD', 'PARACETMOL', 'KVS', '1000', '../upload/21291_1516093673.pdf', 'hiiii', '14/04/2019'),
(2, 'RAJ705787', 'RAJ', 'House Surgeon', 'House Surgeon', 'COLD', 'PARACETMOL', 'KVS', '500', '../upload/10072017_1499703965_605324.jpg', 'yyy', '14/04/2019');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patid` int(11) NOT NULL AUTO_INCREMENT,
  `hname` text NOT NULL,
  `name` text NOT NULL,
  `uniqno` text NOT NULL,
  `sex` text NOT NULL,
  `dob` text NOT NULL,
  `addr` text NOT NULL,
  `cntno` text NOT NULL,
  `aadhar` text NOT NULL,
  `email` text NOT NULL,
  `ecntno` text NOT NULL,
  `relsp` text NOT NULL,
  `bgrp` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `des` text NOT NULL,
  `typ` text NOT NULL,
  `dat` text NOT NULL,
  PRIMARY KEY (`patid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patid`, `hname`, `name`, `uniqno`, `sex`, `dob`, `addr`, `cntno`, `aadhar`, `email`, `ecntno`, `relsp`, `bgrp`, `username`, `password`, `des`, `typ`, `dat`) VALUES
(2, 'Govt Palakkad', 'SHAMEER', 'SHAMEER49113', 'MALE', '2019/2/20', 'PALAKKAD', '09847169014', '79797AAA', 'sham@gmail.com', '7979565989789', 'FATHER', 'A+@gmail.com', 'A', 'A', 'AAAA', 'patient', '14/04/2019'),
(3, 'Prafeena', 'SHAMEER', 'RAJ705787', 'MALE', '2019/2/20', 'PALAKKAD', '09847169014', '79797AAA', 'sham@gmail.com', '7979565989789', 'FATHER', 'A+@gmail.com', 'pa', 'pa', 'HI', 'patient', '14/04/2019');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `phid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `addr` text NOT NULL,
  `cntno` text NOT NULL,
  `liceno` text NOT NULL,
  `file` text NOT NULL,
  `dateofe` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `stat` text NOT NULL,
  `dat` text NOT NULL,
  `typ` text NOT NULL,
  PRIMARY KEY (`phid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`phid`, `name`, `type`, `addr`, `cntno`, `liceno`, `file`, `dateofe`, `username`, `password`, `stat`, `dat`, `typ`) VALUES
(4, 'GEETHA', 'PRIVATE', 'PALAKKAD', '09847169014', 'SHAMEER', '../upload/10072017_1499703965_605324.jpg', '2019', 'p', 'p', 'approve', '14/04/2019', 'pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacyamount`
--

CREATE TABLE IF NOT EXISTS `pharmacyamount` (
  `pharmacyid` int(11) NOT NULL AUTO_INCREMENT,
  `uniqno` text NOT NULL,
  `name` text NOT NULL,
  `hname` text NOT NULL,
  `doctor` text NOT NULL,
  `deseases` text NOT NULL,
  `prescri` text NOT NULL,
  `pname` text NOT NULL,
  `amount` text NOT NULL,
  `dat` text NOT NULL,
  PRIMARY KEY (`pharmacyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pharmacyamount`
--

INSERT INTO `pharmacyamount` (`pharmacyid`, `uniqno`, `name`, `hname`, `doctor`, `deseases`, `prescri`, `pname`, `amount`, `dat`) VALUES
(1, 'RAJ705787', 'RAJ', 'House Surgeon', 'House Surgeon', 'COLD', 'PARACETMOL', 'KVS', '1000', '14/04/2019'),
(2, 'RAJ705787', 'RAJ', 'House Surgeon', 'House Surgeon', 'COLD', 'PARACETMOL', 'KVS', '1000', '14/04/2019'),
(3, 'RAJ705787', 'RAJ', 'House Surgeon', 'House Surgeon', 'COLD', 'PARACETMOL', 'KVS', '500', '14/04/2019');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `presid` int(11) NOT NULL AUTO_INCREMENT,
  `uniqno` text NOT NULL,
  `name` text NOT NULL,
  `aadhar` text NOT NULL,
  `bgrp` text NOT NULL,
  `hname` text NOT NULL,
  `doctor` text NOT NULL,
  `deseases` text NOT NULL,
  `prescri` text NOT NULL,
  `labchk` text NOT NULL,
  `dat` text NOT NULL,
  PRIMARY KEY (`presid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`presid`, `uniqno`, `name`, `aadhar`, `bgrp`, `hname`, `doctor`, `deseases`, `prescri`, `labchk`, `dat`) VALUES
(2, 'RAJ705787', 'SHAMEER', '79797AAA', 'A+@gmail.com', 'Govt Palakkad', 'SHAMEER', 'Cold And Fever', 'Dolo', 'blood group check', '14/04/2019'),
(3, 'RAJ705787', 'RAJ', '79797AAA', 'A+@gmail.com', 'House Surgeon', 'House Surgeon', 'COLD', 'PARACETMOL', 'CHECK BLOOD', '14/04/2019');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
