-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2020 at 02:43 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
(1, 'admin', 'admin123', 'admin');

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
(1, 'Noufal', 'WELCARE', 'Male', '1990-07-06', 'noufal@gmail.com', 'Dr Noufal MBBS,MD\r\nodanur,Palakkad', '8891226040', 'MBBS, MD', 'cardiologist', '../upload/IMG-20190808-WA0026.jpg', '5', 'noufal', '123', 'doctor', 'approve', '12/03/2020'),
(2, 'Rahul', 'WELCARE', 'Male', '1980-05-14', 'rahul@gmail.com', ' Dr. Rahul \r\nPalakkad', '7894561230', 'MS (Surgery), DNB (Neurosurgery)', 'Neurology', '../upload/maxresdefault.jpg', '10', 'rahul', '123', 'doctor', 'approve', '12/03/2020');

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
(1, 'WELCARE', 'Private', 'ISO', 'Welcare Junction, Shornur Rd, Thondikulam, Nurani, Palakkad, Kerala 678006', '10010010', '../upload/maxresdefault.jpg', 'R MADHAVAN', '9876543210', 'madhavan@gmail.com', '1800180010', '1800180010', '1000100010', '0491254316', 'http://www.nimswelcare.com/', '2000', 'Multi-Speciality', 'Multi', 'welcare', '123', 'approve', '12/03/2020', 'hospital');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`labid`, `name`, `type`, `addr`, `cntno`, `licenam`, `file`, `file1`, `dateofe`, `username`, `password`, `stat`, `dat`, `typ`) VALUES
(1, 'Welcare Labs', 'Pvt', 'Welcare Junction, Shornur Rd, Thondikulam, Nurani, Palakkad, Kerala 678006', '4567891230', 'Suma R', '../upload/IMG-20190808-WA0026.jpg', '../upload/maxresdefault.jpg', '2000-12-17', 'wellab', '123', 'approve', '12/03/2020', 'lab');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `laboratoryamount`
--

INSERT INTO `laboratoryamount` (`laboratryid`, `uniqno`, `name`, `hname`, `doctor`, `deseases`, `prescri`, `lname`, `amount`, `file`, `des`, `dat`) VALUES
(3, 'PRAVEEN2324', 'Praveen', 'WELCARE', 'Noufal', 'Chest Pain', 'Antiplatelets', 'Welcare Labs', '550', '../upload/maxresdefault.jpg', 'Normal\r\n', '12/03/2020'),
(4, 'DIVYA622344', 'Divya', 'House Surgeon', 'Rahul', 'Feaver', 'Paracetamol', 'Welcare Labs', '150', '../upload/maxresdefault.jpg', 'Normal', '13/03/2020'),
(5, 'SHAZIA669053', 'Shazia', 'House Surgeon', 'Rahul', 'Low blood Count', 'epoetin alfa', 'Welcare Labs', '150', '../upload/maxresdefault.jpg', 'low count platelets 9.5', '13/03/2020'),
(6, 'AVINESH21622', 'Avinesh', 'House Surgeon', 'Rahul', 'Rashes', 'Atopic dermatitis', 'Welcare Labs', '200', '../upload/maxresdefault.jpg', 'Normal', '13/03/2020');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patid`, `hname`, `name`, `uniqno`, `sex`, `dob`, `addr`, `cntno`, `aadhar`, `email`, `ecntno`, `relsp`, `bgrp`, `username`, `password`, `des`, `typ`, `dat`) VALUES
(2, 'WELCARE', 'Praveen', 'PRAVEEN2324', 'Male', '1999-06-12', 'kottayi,palakkad', '9961194302', '860494174944', 'textpraveennair@gmail.com', '9074268174', 'father', 'A -ve', 'praveen', '123', 'High BP', 'patient', '12/03/2020'),
(3, 'Noufal', 'Amal', 'AMAL52167', 'Male', '1998-08-16', 'pulinelly,Palakkad', '9876543210', '457586251512', 'amal@gmail.com', '8974563210', 'father', 'B +ve', 'amal', '123', 'Low BP', 'patient', '12/03/2020'),
(4, 'WELCARE', 'Divya', 'DIVYA622344', 'Female', '2001-02-07', 'spring villa \r\nPalakkad', '9188494302', '860494174922', 'divdivya@gmail.com', '7894561234', 'Father', 'A +ve', 'divya', '123', 'Low BP', 'patient', '12/03/2020'),
(5, 'WELCARE', 'Manu', 'MANU608452', 'Male', '1999-01-15', 'chervathoor house \r\nparuthipully', '9988556644', '112233445566', 'anonymous@gmail.com', '8855664411', 'Mother', 'O +ve', 'manu', '123', 'Normal', 'patient', '13/03/2020'),
(6, 'WELCARE', 'Avinesh', 'AVINESH21622', 'Male', '1999-12-06', 'avinesh\r\nkottayi', '9944661122', '112233445566', 'aviavinesh@gmail.com', '7788994455', 'Father', 'O +ve', 'avinesh', '123', 'High BP and Sugar', 'patient', '13/03/2020'),
(7, 'WELCARE', 'Shazia', 'SHAZIA669053', 'Female', '1999-05-16', 'shazia \r\npalakkad', '7788995566', '123456789456', 'shazia@gmail.com', '8855220301', 'Father', 'B +ve', 'shazia', '123', 'low blood count', 'patient', '13/03/2020');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`phid`, `name`, `type`, `addr`, `cntno`, `liceno`, `file`, `dateofe`, `username`, `password`, `stat`, `dat`, `typ`) VALUES
(1, 'Welcare Pharmacy', 'Pvt', 'Welcare Junction, Shornur Rd, Thondikulam, Nurani, Palakkad, Kerala 678006', '8848919285', 'Suchithra', '../upload/maxresdefault.jpg', '2000-12-10', 'welpharm', '123', 'approve', '12/03/2020', 'pharmacy');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pharmacyamount`
--

INSERT INTO `pharmacyamount` (`pharmacyid`, `uniqno`, `name`, `hname`, `doctor`, `deseases`, `prescri`, `pname`, `amount`, `dat`) VALUES
(4, 'PRAVEEN2324', 'Praveen', 'WELCARE', 'Noufal', 'Chest Pain', 'Antiplatelets', 'Welcare Pharmacy', '500', '12/03/2020'),
(5, 'DIVYA622344', 'Divya', 'WELCARE', 'Rahul', 'Muscle Cramp', 'moove ,  Cramp Bandage', 'Welcare Pharmacy', '150', '12/03/2020'),
(6, 'MANU608452', 'Manu', 'House Surgeon', 'Rahul', 'Acane', 'Clear gel', 'Welcare Pharmacy', '150', '13/03/2020'),
(7, 'AVINESH21622', 'Avinesh', 'House Surgeon', 'Rahul', 'Rashes', 'Atopic dermatitis', 'Welcare Pharmacy', '1000', '13/03/2020'),
(8, 'SHAZIA669053', 'Shazia', 'House Surgeon', 'Rahul', 'Low blood Count', 'epoetin alfa', 'Welcare Pharmacy', '250', '13/03/2020');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`presid`, `uniqno`, `name`, `aadhar`, `bgrp`, `hname`, `doctor`, `deseases`, `prescri`, `labchk`, `dat`) VALUES
(2, 'PRAVEEN2324', 'Praveen', '860494174944', 'A -ve', 'WELCARE', 'Noufal', 'Chest Pain', 'Antiplatelets', 'ECG', '12/03/2020'),
(3, 'DIVYA622344', 'Divya', '860494174922', 'A +ve', 'WELCARE', 'Rahul', 'Muscle Cramp', 'moove ,  Cramp Bandage', 'Nil', '12/03/2020'),
(4, 'DIVYA622344', 'Divya', '860494174922', 'A +ve', 'House Surgeon', 'Rahul', 'Feaver', 'Paracetamol', 'feaver\r\n', '13/03/2020'),
(5, 'SHAZIA669053', 'Shazia', '123456789456', 'B +ve', 'House Surgeon', 'Rahul', 'Low blood Count', 'epoetin alfa', 'Platelets count', '13/03/2020'),
(6, 'AVINESH21622', 'Avinesh', '112233445566', 'O +ve', 'House Surgeon', 'Rahul', 'Rashes', 'Atopic dermatitis', 'Blood test', '13/03/2020'),
(7, 'MANU608452', 'Manu', '112233445566', 'O +ve', 'House Surgeon', 'Rahul', 'Acane', 'Clear gel', 'nil', '13/03/2020');
