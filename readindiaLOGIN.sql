-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2016 at 08:33 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `readindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(4) NOT NULL,
  `State` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `Password` varchar(65) NOT NULL,
  `Type_of_account` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `State`, `username`, `Password`, `Type_of_account`, `Status`) VALUES
(1, 'Andhra Pradesh', 'pratham.andhrapradesh@gmail.com', 'pratham1', 'State', 'On'),
(2, 'Assam', 'pratham.assamstate@gmail.com', 'pratham1', 'State', 'On'),
(3, 'Bihar', 'pratham.biharstate@gmail.com', 'pratham1', 'State', 'On'),
(4, 'Chhattisgarh', 'pratham.chhattisgarhstate@gmail.com', 'pratham1', 'State', 'On'),
(5, 'Gujarat', 'pratham.gujaratstate@gmail.com', 'pratham1', 'State', 'On'),
(6, 'Jharkhand', 'pratham.jharkhand@gmail.com', 'pratham1', 'State', 'On'),
(7, 'Maharashtra', 'pratham.maharashtra@gmail.com', 'pratham1', 'State', 'On'),
(8, 'Madhya Oradesh', 'pratham.mpstate@gmail.com', 'pratham1', 'State', 'On'),
(9, 'Odisha', 'pratham.odishastate@gmail.com', 'pratham1', 'State', 'On'),
(10, 'Rajasthan', 'pratham.rajasthanstate@gmail.com', 'pratham1', 'State', 'On'),
(11, 'Uttar Pradesh', 'pratham.upstate@gmail.com', 'pratham1', 'State', 'On'),
(12, 'West Bengal', 'pratham.wbstate@gmail.com', 'pratham1', 'State', 'On'),
(13, 'Karnataka', 'mail@prathammysore.org', 'pratham1', 'State', 'On'),
(14, 'Punjab', 'pratham.punjabstate@gmail.com', 'readindia', 'State', 'New'),
(15, 'Haryana', 'pratham.haryanastate@gmail.com', 'readindia', 'State', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `schoollist`
--

CREATE TABLE `schoollist` (
  `Index` int(40) NOT NULL,
  `State_ID` varchar(40) NOT NULL,
  `State_Name` varchar(40) NOT NULL,
  `Dist_ID` varchar(40) NOT NULL,
  `District_Name` varchar(40) NOT NULL,
  `Block_ID` varchar(40) NOT NULL,
  `Block_Name` varchar(40) NOT NULL,
  `School_ID` varchar(40) NOT NULL,
  `School_Name` varchar(40) NOT NULL,
  `Village_ID` varchar(40) NOT NULL,
  `Village_Name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoollist`
--

INSERT INTO `schoollist` (`Index`, `State_ID`, `State_Name`, `Dist_ID`, `District_Name`, `Block_ID`, `Block_Name`, `School_ID`, `School_Name`, `Village_ID`, `Village_Name`) VALUES
(1, '1', 'bhjh', '1', 'vngvh', '1', 'bhvjgj', '123', 'hvgjjygj', '1213', 'bhjbi');

-- --------------------------------------------------------

--
-- Table structure for table `summarysheet`
--

CREATE TABLE `summarysheet` (
  `schoolCode` int(8) NOT NULL,
  `campModel` text,
  `campPhase` int(3) DEFAULT NULL,
  `commonChildren` int(3) DEFAULT NULL,
  `diseCode` text,
  `villageName` text,
  `std3TragetChildren` text,
  `std4TragetChildren` text,
  `std5TragetChildren` int(3) DEFAULT NULL,
  `totalTeacher` int(3) DEFAULT NULL,
  `classX` text,
  `classY` text,
  `childrenMale` int(3) DEFAULT NULL,
  `childrenFemale` int(3) DEFAULT NULL,
  `campType` int(3) DEFAULT NULL,
  `teachingDaysCamp1` int(3) DEFAULT NULL,
  `teachingDaysCamp2` int(3) DEFAULT NULL,
  `teachingDaysCamp3` int(3) DEFAULT NULL,
  `teachingDaysCamp4` int(3) DEFAULT NULL,
  `startDateCamp1` int(3) DEFAULT NULL,
  `startDateCamp2` int(3) DEFAULT NULL,
  `startDateCamp3` int(3) DEFAULT NULL,
  `startDateCamp4` int(3) DEFAULT NULL,
  `endDateCamp1` int(3) DEFAULT NULL,
  `endDateCamp2` int(3) DEFAULT NULL,
  `endDateCamp3` int(3) DEFAULT NULL,
  `endDateCamp4` int(3) DEFAULT NULL,
  `nameBRGCamp1` text,
  `nameBRGCamp2` text,
  `nameBRGCamp3` text,
  `nameBRGCamp4` text,
  `attendance0to20` int(3) DEFAULT NULL,
  `attendance21to50` int(3) DEFAULT NULL,
  `attendance51to70` int(3) DEFAULT NULL,
  `attendance71to100` int(3) DEFAULT NULL,
  `communityMeetings` int(3) DEFAULT NULL,
  `visitNumberCamp1` int(3) DEFAULT NULL,
  `visitNumberCamp2` int(3) DEFAULT NULL,
  `visitNumberCamp3` int(3) DEFAULT NULL,
  `visitNumberCamp4` int(3) DEFAULT NULL,
  `familyAwarenessCamp1` int(3) DEFAULT NULL,
  `familyAwarenessCamp2` int(3) DEFAULT NULL,
  `familyAwarenessCamp3` int(3) DEFAULT NULL,
  `familyAwarenessCamp4` int(3) DEFAULT NULL,
  `volunteer1Type` int(3) DEFAULT NULL,
  `volunteer1Education` int(3) DEFAULT NULL,
  `volunteer1AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer1AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer1AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer1AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer2Type` text,
  `volunteer2Education` int(30) DEFAULT NULL,
  `volunteer2AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer2AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer2AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer2AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer3Type` text,
  `volunteer3Education` text,
  `volunteer3AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer3AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer3AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer3AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer4Type` text,
  `volunteer4Education` text,
  `volunteer4AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer4AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer4AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer4AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer5Type` text,
  `volunteer5Education` text,
  `volunteer5AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer5AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer5AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer5AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer6Type` text,
  `volunteer6Education` text,
  `volunteer6AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer6AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer6AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer6AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer7Type` text,
  `volunteer7Education` text,
  `volunteer7AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer7AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer7AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer7AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer8Type` text,
  `volunteer8Education` text,
  `volunteer8AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer8AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer8AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer8AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer9Type` text,
  `volunteer9Education` text,
  `volunteer9AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer9AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer9AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer9AttendanceCamp4` int(3) DEFAULT NULL,
  `volunteer10Type` text,
  `volunteer10Education` text,
  `volunteer10AttendanceCamp1` int(3) DEFAULT NULL,
  `volunteer10AttendanceCamp2` int(3) DEFAULT NULL,
  `volunteer10AttendanceCamp3` int(3) DEFAULT NULL,
  `volunteer10AttendanceCamp4` int(3) DEFAULT NULL,
  `std3Enrolled` int(3) DEFAULT NULL,
  `std3Tested` int(3) DEFAULT NULL,
  `std3ReadingBG` int(3) DEFAULT NULL,
  `std3ReadingLT` int(3) DEFAULT NULL,
  `std3ReadingWD` int(3) DEFAULT NULL,
  `std3ReadingPR` int(3) DEFAULT NULL,
  `std3ReadingSY` int(3) DEFAULT NULL,
  `std3NumberBG` int(3) DEFAULT NULL,
  `std3Number1Digit` int(3) DEFAULT NULL,
  `std3Number2Digits` int(3) DEFAULT NULL,
  `std3Number3Digits` int(3) DEFAULT NULL,
  `std4Enrolled` int(3) DEFAULT NULL,
  `std4Tested` int(3) DEFAULT NULL,
  `std4ReadingBG` int(3) DEFAULT NULL,
  `std4ReadingLT` int(3) DEFAULT NULL,
  `std4ReadingWD` int(3) DEFAULT NULL,
  `std4ReadingPR` int(3) DEFAULT NULL,
  `std4ReadingSY` int(3) DEFAULT NULL,
  `std4NumberBG` int(3) DEFAULT NULL,
  `std4Number1Digit` int(3) DEFAULT NULL,
  `std4Number2Digits` int(3) DEFAULT NULL,
  `std4Number3Digits` int(3) DEFAULT NULL,
  `std5Enrolled` int(3) DEFAULT NULL,
  `std5Tested` int(3) DEFAULT NULL,
  `std5ReadingBG` int(3) DEFAULT NULL,
  `std5ReadingLT` int(3) DEFAULT NULL,
  `std5ReadingWD` int(3) DEFAULT NULL,
  `std5ReadingPR` int(3) DEFAULT NULL,
  `std5ReadingSY` int(3) DEFAULT NULL,
  `std5NumberBG` int(3) DEFAULT NULL,
  `std5Number1Digit` int(3) DEFAULT NULL,
  `std5Number2Digits` int(3) DEFAULT NULL,
  `std5Number3Digits` int(3) DEFAULT NULL,
  `firstBLBeforeEL1ReadingBG` int(3) DEFAULT NULL,
  `firstBLBeforeEL1ReadingLT` int(3) DEFAULT NULL,
  `firstBLBeforeEL1ReadingWD` int(3) DEFAULT NULL,
  `firstBLBeforeEL1ReadingPR` int(3) DEFAULT NULL,
  `firstBLBeforeEL1ReadingSY` int(3) DEFAULT NULL,
  `firstBLBeforeEL1NumberBG` int(3) DEFAULT NULL,
  `firstBLBeforeEL1Number1Digit` int(3) DEFAULT NULL,
  `firstBLBeforeEL1Number2Digits` int(3) DEFAULT NULL,
  `firstBLBeforeEL1Number3Digits` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2Tested` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingBG` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingLT` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingWD` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingPR` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingSY` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2NumberBG` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2Number1Digit` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2Number2Digits` int(3) DEFAULT NULL,
  `additionalChildBeforeEL2Number3Digits` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3Tested` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingBG` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingLT` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingWD` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingPR` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingSY` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3NumberBG` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3Number1Digit` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3Number2Digits` int(3) DEFAULT NULL,
  `additionalChildBeforeEL3Number3Digits` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4Tested` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingBG` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingLT` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingWD` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingPR` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingSY` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4NumberBG` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4Number1Digit` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4Number2Digits` int(3) DEFAULT NULL,
  `additionalChildBeforeEL4Number3Digits` int(3) DEFAULT NULL,
  `consolidateBLEnrolled` int(3) DEFAULT NULL,
  `consolidateBLTested` int(3) DEFAULT NULL,
  `consolidateBLReadingBG` int(3) DEFAULT NULL,
  `consolidateBLReadingLT` int(3) DEFAULT NULL,
  `consolidateBLReadingWD` int(3) DEFAULT NULL,
  `consolidateBLReadingPR` int(3) DEFAULT NULL,
  `consolidateBLReadingSY` int(3) DEFAULT NULL,
  `consolidateBLNumberBG` int(3) DEFAULT NULL,
  `consolidateBLNumber1Digit` int(3) DEFAULT NULL,
  `consolidateBLNumber2Digits` int(3) DEFAULT NULL,
  `consolidateBLNumber3Digits` int(3) DEFAULT NULL,
  `ELAssTested` int(3) DEFAULT NULL,
  `ELAssReadingBG` int(3) DEFAULT NULL,
  `ELAssReadingLT` int(3) DEFAULT NULL,
  `ELAssReadingWD` int(3) DEFAULT NULL,
  `ELAssReadingPR` int(3) DEFAULT NULL,
  `ELAssReadingSY` int(3) DEFAULT NULL,
  `ELAssNumberBG` int(3) DEFAULT NULL,
  `ELAssNumber1Digit` int(3) DEFAULT NULL,
  `ELAssNumber2Digits` int(3) DEFAULT NULL,
  `ELAssNumber3Digits` int(3) DEFAULT NULL,
  `ELAssLC1Tested` int(3) DEFAULT NULL,
  `ELAssLC1ReadingBG` int(3) DEFAULT NULL,
  `ELAssLC1ReadingLT` int(3) DEFAULT NULL,
  `ELAssLC1ReadingWD` int(3) DEFAULT NULL,
  `ELAssLC1ReadingPR` int(3) DEFAULT NULL,
  `ELAssLC1ReadingSY` int(3) DEFAULT NULL,
  `ELAssLC1NumberBG` int(3) DEFAULT NULL,
  `ELAssLC1Number1Digit` int(3) DEFAULT NULL,
  `ELAssLC1Number2Digits` int(3) DEFAULT NULL,
  `ELAssLC1Number3Digits` int(3) DEFAULT NULL,
  `ELAssLC1OperationAC` int(3) DEFAULT NULL,
  `ELAssLC1OperationACN` int(3) DEFAULT NULL,
  `ELAssLC1OperationSC` int(3) DEFAULT NULL,
  `ELAssLC1OperationSCN` int(3) DEFAULT NULL,
  `ELAssLC1OperationMC` int(3) DEFAULT NULL,
  `ELAssLC1OperationMCN` int(3) DEFAULT NULL,
  `ELAssLC1OperationDC` int(3) DEFAULT NULL,
  `ELAssLC1OperationDCN` int(3) DEFAULT NULL,
  `ELAssLC2Tested` int(3) DEFAULT NULL,
  `ELAssLC2ReadingBG` int(3) DEFAULT NULL,
  `ELAssLC2ReadingLT` int(3) DEFAULT NULL,
  `ELAssLC2ReadingWD` int(3) DEFAULT NULL,
  `ELAssLC2ReadingPR` int(3) DEFAULT NULL,
  `ELAssLC2ReadingSY` int(3) DEFAULT NULL,
  `ELAssLC2NumberBG` int(3) DEFAULT NULL,
  `ELAssLC2Number1Digit` int(3) DEFAULT NULL,
  `ELAssLC2Number2Digits` int(3) DEFAULT NULL,
  `ELAssLC2Number3Digits` int(3) DEFAULT NULL,
  `ELAssLC2OperationAC` int(3) DEFAULT NULL,
  `ELAssLC2OperationACN` int(3) DEFAULT NULL,
  `ELAssLC2OperationSC` int(3) DEFAULT NULL,
  `ELAssLC2OperationSCN` int(3) DEFAULT NULL,
  `ELAssLC2OperationMC` int(3) DEFAULT NULL,
  `ELAssLC2OperationMCN` int(3) DEFAULT NULL,
  `ELAssLC2OperationDC` int(3) DEFAULT NULL,
  `ELAssLC2OperationDCN` int(3) DEFAULT NULL,
  `ELAssLC3Tested` int(3) DEFAULT NULL,
  `ELAssLC3ReadingBG` int(3) DEFAULT NULL,
  `ELAssLC3ReadingLT` int(3) DEFAULT NULL,
  `ELAssLC3ReadingWD` int(3) DEFAULT NULL,
  `ELAssLC3ReadingPR` int(3) DEFAULT NULL,
  `ELAssLC3ReadingSY` int(3) DEFAULT NULL,
  `ELAssLC3NumberBG` int(3) DEFAULT NULL,
  `ELAssLC3Number1Digit` int(3) DEFAULT NULL,
  `ELAssLC3Number2Digits` int(3) DEFAULT NULL,
  `ELAssLC3Number3Digits` int(3) DEFAULT NULL,
  `ELAssLC3OperationAC` int(3) DEFAULT NULL,
  `ELAssLC3OperationACN` int(3) DEFAULT NULL,
  `ELAssLC3OperationSC` int(3) DEFAULT NULL,
  `ELAssLC3OperationSCN` int(3) DEFAULT NULL,
  `ELAssLC3OperationMC` int(3) DEFAULT NULL,
  `ELAssLC3OperationMCN` int(3) DEFAULT NULL,
  `ELAssLC3OperationDC` int(3) DEFAULT NULL,
  `ELAssLC3OperationDCN` int(3) DEFAULT NULL,
  `ELAssLC4Tested` int(3) DEFAULT NULL,
  `ELAssLC4ReadingBG` int(3) DEFAULT NULL,
  `ELAssLC4ReadingLT` int(3) DEFAULT NULL,
  `ELAssLC4ReadingWD` int(3) DEFAULT NULL,
  `ELAssLC4ReadingPR` int(3) DEFAULT NULL,
  `ELAssLC4ReadingSY` int(3) DEFAULT NULL,
  `ELAssLC4NumberBG` int(3) DEFAULT NULL,
  `ELAssLC4Number1Digit` int(3) DEFAULT NULL,
  `ELAssLC4Number2Digits` int(3) DEFAULT NULL,
  `ELAssLC4Number3Digits` int(3) DEFAULT NULL,
  `ELAssLC4OperationAC` int(3) DEFAULT NULL,
  `ELAssLC4OperationACN` int(3) DEFAULT NULL,
  `ELAssLC4OperationSC` int(3) DEFAULT NULL,
  `ELAssLC4OperationSCN` int(3) DEFAULT NULL,
  `ELAssLC4OperationMC` int(3) DEFAULT NULL,
  `ELAssLC4OperationMCN` int(3) DEFAULT NULL,
  `ELAssLC4OperationDC` int(3) DEFAULT NULL,
  `ELAssLC4OperationDCN` int(3) DEFAULT NULL,
  `ELAssConsELTested` int(3) DEFAULT NULL,
  `ELAssConsELReadingBG` int(3) DEFAULT NULL,
  `ELAssConsELReadingLT` int(3) DEFAULT NULL,
  `ELAssConsELReadingWD` int(3) DEFAULT NULL,
  `ELAssConsELReadingPR` int(3) DEFAULT NULL,
  `ELAssConsELReadingSY` int(3) DEFAULT NULL,
  `ELAssConsELNumberBG` int(3) DEFAULT NULL,
  `ELAssConsELNumber1Digit` int(3) DEFAULT NULL,
  `ELAssConsELNumber2Digits` int(3) DEFAULT NULL,
  `ELAssConsELNumber3Digits` int(3) DEFAULT NULL,
  `ELAssConsELOperationAC` int(3) DEFAULT NULL,
  `ELAssConsELOperationACN` int(3) DEFAULT NULL,
  `ELAssConsELOperationSC` int(3) DEFAULT NULL,
  `ELAssConsELOperationSCN` int(3) DEFAULT NULL,
  `ELAssConsELOperationMC` int(3) DEFAULT NULL,
  `ELAssConsELOperationMCN` int(3) DEFAULT NULL,
  `ELAssConsELOperationDC` int(3) DEFAULT NULL,
  `ELAssConsELOperationDCN` int(3) DEFAULT NULL,
  `progressAcrossReadingBGBG` int(3) DEFAULT NULL,
  `progressAcrossReadingBGLT` int(3) DEFAULT NULL,
  `progressAcrossReadingBGWD` int(3) DEFAULT NULL,
  `progressAcrossReadingBGPR` int(3) DEFAULT NULL,
  `progressAcrossReadingBGSY` int(3) DEFAULT NULL,
  `progressAcrossReadingBGTotal` int(3) DEFAULT NULL,
  `progressAcrossReadingLTBG` int(3) DEFAULT NULL,
  `progressAcrossReadingLTLT` int(3) DEFAULT NULL,
  `progressAcrossReadingLTWD` int(3) DEFAULT NULL,
  `progressAcrossReadingLTPR` int(3) DEFAULT NULL,
  `progressAcrossReadingLTSY` int(3) DEFAULT NULL,
  `progressAcrossReadingLTTotal` int(3) DEFAULT NULL,
  `progressAcrossReadingWDBG` int(3) DEFAULT NULL,
  `progressAcrossReadingWDLT` int(3) DEFAULT NULL,
  `progressAcrossReadingWDWD` int(3) DEFAULT NULL,
  `progressAcrossReadingWDPR` int(3) DEFAULT NULL,
  `progressAcrossReadingWDSY` int(3) DEFAULT NULL,
  `progressAcrossReadingWDTotal` int(3) DEFAULT NULL,
  `progressAcrossReadingPRBG` int(3) DEFAULT NULL,
  `progressAcrossReadingPRWD` int(3) DEFAULT NULL,
  `progressAcrossReadingPRLT` int(3) DEFAULT NULL,
  `progressAcrossReadingPRPR` int(3) DEFAULT NULL,
  `progressAcrossReadingPRSY` int(3) DEFAULT NULL,
  `progressAcrossReadingPRTotal` int(3) DEFAULT NULL,
  `progressAcrossReadingSYBG` int(3) DEFAULT NULL,
  `proogressAcrossReadingSYLT` int(3) DEFAULT NULL,
  `proogressAcrossReadingSYWD` int(3) DEFAULT NULL,
  `progressAcrossReadingSYPR` int(3) DEFAULT NULL,
  `progressAcrossReadingSYSY` int(3) DEFAULT NULL,
  `progressAcrossReadingSYTotal` int(3) DEFAULT NULL,
  `progressAcrossReadingTotalBG` int(3) DEFAULT NULL,
  `progressAcrossReadingTotalLT` int(3) DEFAULT NULL,
  `progressAcrossReadingTotalWD` int(3) DEFAULT NULL,
  `progressAcrossReadingTotalPR` int(3) DEFAULT NULL,
  `progressAcrossReadingTotalSY` int(3) DEFAULT NULL,
  `progressAcrossReadingTotalTotal` int(3) DEFAULT NULL,
  `std1_2BLChildren` int(3) DEFAULT NULL,
  `std1_2BLReadingBG` int(3) DEFAULT NULL,
  `std1_2BLReadingLT` int(3) DEFAULT NULL,
  `std1_2BLReadingWD` int(3) DEFAULT NULL,
  `std1_2BLReadingPR` int(3) DEFAULT NULL,
  `std1_2BLReadingSY` int(3) DEFAULT NULL,
  `std1_2BLNumberBG` int(3) DEFAULT NULL,
  `std1_2BLNumber1Digit` int(3) DEFAULT NULL,
  `std1_2BLNumber2Digits` int(3) DEFAULT NULL,
  `std1_2BLOperationAC` int(3) DEFAULT NULL,
  `std1_2BLOperationACN` int(3) DEFAULT NULL,
  `std1_2BLOperationSC` int(3) DEFAULT NULL,
  `std1_2BLOperationSCN` int(3) DEFAULT NULL,
  `std1_2ELChildren` int(3) DEFAULT NULL,
  `std1_2ELReadingBG` int(3) DEFAULT NULL,
  `std1_2ELReadingLT` int(3) DEFAULT NULL,
  `std1_2ELReadingWD` int(3) DEFAULT NULL,
  `std1_2ELReadingPR` int(3) DEFAULT NULL,
  `std1_2ELReadingSY` int(3) DEFAULT NULL,
  `std1_2ELNumberBG` int(3) DEFAULT NULL,
  `std1_2ELNumber1Digit` int(3) DEFAULT NULL,
  `std1_2ELNumber2Digits` int(3) DEFAULT NULL,
  `std1_2ELOperationAC` int(3) DEFAULT NULL,
  `std1_2ELOperationACN` int(3) DEFAULT NULL,
  `std1_2ELOperationSC` int(3) DEFAULT NULL,
  `std1_2ELOperationSCN` int(3) DEFAULT NULL,
  `camp1GovtOfficials` int(3) DEFAULT NULL,
  `camp1StateHead` int(3) DEFAULT NULL,
  `camp1ContentSRG` int(3) DEFAULT NULL,
  `Camp1BCDRL` int(3) DEFAULT NULL,
  `camp1MMETeam` int(3) DEFAULT NULL,
  `camp1Community` int(3) DEFAULT NULL,
  `camp1Others` int(3) DEFAULT NULL,
  `camp2GovtOfficials` int(3) DEFAULT NULL,
  `camp2StateHead` int(3) DEFAULT NULL,
  `camp2ContentSRG` int(3) DEFAULT NULL,
  `camp2BCDRL` int(3) DEFAULT NULL,
  `camp2MMETeam` int(3) DEFAULT NULL,
  `camp2Community` int(3) DEFAULT NULL,
  `camp2Others` int(3) DEFAULT NULL,
  `camp3GovtOfficials` int(3) DEFAULT NULL,
  `camp3StateHead` int(3) DEFAULT NULL,
  `camp3ContentSRG` int(3) DEFAULT NULL,
  `camp3BCDRL` int(3) DEFAULT NULL,
  `camp3MMETeam` int(3) DEFAULT NULL,
  `camp3Community` int(3) DEFAULT NULL,
  `camp3Others` int(3) DEFAULT NULL,
  `camp4GovtOfficials` int(3) DEFAULT NULL,
  `camp4StateHead` int(3) DEFAULT NULL,
  `camp4ContentSRG` int(3) DEFAULT NULL,
  `camp4BCDRL` int(3) DEFAULT NULL,
  `camp4MMETeam` int(3) DEFAULT NULL,
  `camp4Community` int(3) DEFAULT NULL,
  `camp4Others` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `schoolCode` varchar(10) NOT NULL,
  `campno` varchar(10) NOT NULL,
  `campModel` text,
  `campPhase` varchar(10) DEFAULT NULL,
  `commonChildren` varchar(10) DEFAULT NULL,
  `diseCode` varchar(10) DEFAULT NULL,
  `villageName` varchar(10) DEFAULT NULL,
  `std3TragetChildren` varchar(10) DEFAULT NULL,
  `std4TragetChildren` varchar(10) DEFAULT NULL,
  `std5TragetChildren` varchar(10) DEFAULT NULL,
  `totalTeacher` varchar(10) DEFAULT NULL,
  `classX` varchar(10) DEFAULT NULL,
  `classY` varchar(10) DEFAULT NULL,
  `childrenMale` varchar(10) DEFAULT NULL,
  `childrenFemale` varchar(10) DEFAULT NULL,
  `campType` varchar(10) DEFAULT NULL,
  `teachingDaysCamp1` varchar(10) DEFAULT NULL,
  `teachingDaysCamp2` varchar(10) DEFAULT NULL,
  `teachingDaysCamp3` varchar(10) DEFAULT NULL,
  `teachingDaysCamp4` varchar(10) DEFAULT NULL,
  `startDateCamp1` varchar(10) DEFAULT NULL,
  `startDateCamp2` varchar(10) DEFAULT NULL,
  `startDateCamp3` varchar(10) DEFAULT NULL,
  `startDateCamp4` varchar(10) DEFAULT NULL,
  `endDateCamp1` varchar(10) DEFAULT NULL,
  `endDateCamp2` varchar(10) DEFAULT NULL,
  `endDateCamp3` varchar(10) DEFAULT NULL,
  `endDateCamp4` varchar(10) DEFAULT NULL,
  `nameBRGCamp1` varchar(10) DEFAULT NULL,
  `nameBRGCamp2` varchar(10) DEFAULT NULL,
  `nameBRGCamp3` varchar(10) DEFAULT NULL,
  `nameBRGCamp4` varchar(10) DEFAULT NULL,
  `attendance0to20` varchar(10) DEFAULT NULL,
  `attendance21to50` varchar(10) DEFAULT NULL,
  `attendance51to70` varchar(10) DEFAULT NULL,
  `attendance71to100` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`schoolCode`, `campno`, `campModel`, `campPhase`, `commonChildren`, `diseCode`, `villageName`, `std3TragetChildren`, `std4TragetChildren`, `std5TragetChildren`, `totalTeacher`, `classX`, `classY`, `childrenMale`, `childrenFemale`, `campType`, `teachingDaysCamp1`, `teachingDaysCamp2`, `teachingDaysCamp3`, `teachingDaysCamp4`, `startDateCamp1`, `startDateCamp2`, `startDateCamp3`, `startDateCamp4`, `endDateCamp1`, `endDateCamp2`, `endDateCamp3`, `endDateCamp4`, `nameBRGCamp1`, `nameBRGCamp2`, `nameBRGCamp3`, `nameBRGCamp4`, `attendance0to20`, `attendance21to50`, `attendance51to70`, `attendance71to100`) VALUES
('789545', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', '1', '2', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78954', '1', '2', '2', '23', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '12/12/2016', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1230', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78540', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `schoolcode` varchar(10) DEFAULT NULL,
  `campno` varchar(10) DEFAULT NULL,
  `communityMeetings` varchar(10) DEFAULT NULL,
  `visitNumberCamp1` varchar(10) DEFAULT NULL,
  `visitNumberCamp2` varchar(10) DEFAULT NULL,
  `visitNumberCamp3` varchar(10) DEFAULT NULL,
  `visitNumberCamp4` varchar(10) DEFAULT NULL,
  `familyAwarenessCamp1` varchar(10) DEFAULT NULL,
  `familyAwarenessCamp2` varchar(10) DEFAULT NULL,
  `familyAwarenessCamp3` varchar(10) DEFAULT NULL,
  `familyAwarenessCamp4` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`schoolcode`, `campno`, `communityMeetings`, `visitNumberCamp1`, `visitNumberCamp2`, `visitNumberCamp3`, `visitNumberCamp4`, `familyAwarenessCamp1`, `familyAwarenessCamp2`, `familyAwarenessCamp3`, `familyAwarenessCamp4`) VALUES
('789654', NULL, '', '', '', '', '', '', '', '', ''),
('21345', NULL, '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', ''),
('5645', NULL, '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', ''),
('74444155', NULL, '', '', '', '', '', '', '', '', ''),
('0000', '1', '', '', '', '', '', '', '', '', ''),
('00009', '1', '87', '', '0245', '74', '87', '', '', '', ''),
('00009', '1', '87', '', '0245', '74', '87', '', '', '', ''),
('879', '1', '', '', '', '', '', '', '', '', ''),
('324', '', '', '', '', '', '', '', '', '', ''),
('78958', '1', '', '', '', '', '', '', '', '', ''),
('78958', '1', '', '', '', '', '', '', '', '', ''),
('78958', '1', '', '', '', '', '', '', '', '', ''),
('78958', '1', '', '', '', '', '', '', '', '', ''),
('78958', '1', '', '', '', '', '', '', '', '', ''),
('78958', '1', '87', '54', '64', '45', '21', '54', '12', '20', '54'),
('78958', '1', '87', '54', '64', '45', '21', '54', '12', '20', '54'),
('78958', '1', '87', '54', '64', '45', '21', '54', '12', '20', '54'),
('7845', '1', '', '', '', '', '', '', '', '', ''),
('', '1', '', '', '', '', '', '', '', '', ''),
('789545', '1', '', '', '', '', '', '', '', '', ''),
('789545', '1', '', '', '', '', '', '', '', '', ''),
('7895452', '1', '', '', '', '', '', '', '', '', ''),
('7845', '1', '', '', '', '', '', '', '', '', ''),
('78457', '1', '', '', '', '', '', '', '', '', ''),
('12345', '1', '', '', '', '', '', '', '', '', ''),
('12345', '1', '', '', '', '', '', '', '', '', ''),
('12345', '1', '', '', '', '', '', '', '', '', ''),
('78954', '1', '', '', '', '', '', '', '', '', ''),
('1230', '1', '', '', '', '', '', '', '', '', ''),
('78540', '1', '', '', '', '', '', '', '', '', ''),
('78540', '1', '', '', '', '', '', '', '', '', ''),
('784', '1', '', '', '', '', '', '', '', '', ''),
('784', '1', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `schoolcode` varchar(10) DEFAULT NULL,
  `campno` varchar(10) DEFAULT NULL,
  `volunteer1Type` varchar(50) DEFAULT NULL,
  `volunteer1Education` varchar(60) DEFAULT NULL,
  `volunteer1AttendanceCamp1` varchar(50) DEFAULT NULL,
  `volunteer1AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer1AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer1AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer2Type` varchar(10) DEFAULT NULL,
  `volunteer2Education` varchar(10) DEFAULT NULL,
  `volunteer2AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer2AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer2AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer2AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer3Type` varchar(10) DEFAULT NULL,
  `volunteer3Education` varchar(10) DEFAULT NULL,
  `volunteer3AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer3AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer3AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer3AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer4Type` varchar(10) DEFAULT NULL,
  `volunteer4Education` varchar(10) DEFAULT NULL,
  `volunteer4AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer4AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer4AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer4AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer5Type` varchar(10) DEFAULT NULL,
  `volunteer5Education` varchar(10) DEFAULT NULL,
  `volunteer5AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer5AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer5AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer5AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer6Type` varchar(10) DEFAULT NULL,
  `volunteer6Education` varchar(10) DEFAULT NULL,
  `volunteer6AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer6AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer6AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer6AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer7Type` varchar(10) DEFAULT NULL,
  `volunteer7Education` varchar(10) DEFAULT NULL,
  `volunteer7AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer7AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer7AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer7AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer8Type` varchar(10) DEFAULT NULL,
  `volunteer8Education` varchar(10) DEFAULT NULL,
  `volunteer8AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer8AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer8AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer8AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer9Type` varchar(10) DEFAULT NULL,
  `volunteer9Education` varchar(10) DEFAULT NULL,
  `volunteer9AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer9AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer9AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer9AttendanceCamp4` varchar(10) DEFAULT NULL,
  `volunteer10Type` varchar(10) DEFAULT NULL,
  `volunteer10Education` varchar(10) DEFAULT NULL,
  `volunteer10AttendanceCamp1` varchar(10) DEFAULT NULL,
  `volunteer10AttendanceCamp2` varchar(10) DEFAULT NULL,
  `volunteer10AttendanceCamp3` varchar(10) DEFAULT NULL,
  `volunteer10AttendanceCamp4` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`schoolcode`, `campno`, `volunteer1Type`, `volunteer1Education`, `volunteer1AttendanceCamp1`, `volunteer1AttendanceCamp2`, `volunteer1AttendanceCamp3`, `volunteer1AttendanceCamp4`, `volunteer2Type`, `volunteer2Education`, `volunteer2AttendanceCamp1`, `volunteer2AttendanceCamp2`, `volunteer2AttendanceCamp3`, `volunteer2AttendanceCamp4`, `volunteer3Type`, `volunteer3Education`, `volunteer3AttendanceCamp1`, `volunteer3AttendanceCamp2`, `volunteer3AttendanceCamp3`, `volunteer3AttendanceCamp4`, `volunteer4Type`, `volunteer4Education`, `volunteer4AttendanceCamp1`, `volunteer4AttendanceCamp2`, `volunteer4AttendanceCamp3`, `volunteer4AttendanceCamp4`, `volunteer5Type`, `volunteer5Education`, `volunteer5AttendanceCamp1`, `volunteer5AttendanceCamp2`, `volunteer5AttendanceCamp3`, `volunteer5AttendanceCamp4`, `volunteer6Type`, `volunteer6Education`, `volunteer6AttendanceCamp1`, `volunteer6AttendanceCamp2`, `volunteer6AttendanceCamp3`, `volunteer6AttendanceCamp4`, `volunteer7Type`, `volunteer7Education`, `volunteer7AttendanceCamp1`, `volunteer7AttendanceCamp2`, `volunteer7AttendanceCamp3`, `volunteer7AttendanceCamp4`, `volunteer8Type`, `volunteer8Education`, `volunteer8AttendanceCamp1`, `volunteer8AttendanceCamp2`, `volunteer8AttendanceCamp3`, `volunteer8AttendanceCamp4`, `volunteer9Type`, `volunteer9Education`, `volunteer9AttendanceCamp1`, `volunteer9AttendanceCamp2`, `volunteer9AttendanceCamp3`, `volunteer9AttendanceCamp4`, `volunteer10Type`, `volunteer10Education`, `volunteer10AttendanceCamp1`, `volunteer10AttendanceCamp2`, `volunteer10AttendanceCamp3`, `volunteer10AttendanceCamp4`) VALUES
('789654', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('21345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('5645', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('74444155', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('0000', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('879', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('324', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7895452', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78457', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78954', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1230', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78540', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78540', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `schoolCode` text,
  `campno` varchar(10) DEFAULT NULL,
  `std3Enrolled` text,
  `std3Tested` varchar(10) DEFAULT NULL,
  `std3ReadingBG` varchar(10) DEFAULT NULL,
  `std3ReadingLT` varchar(10) DEFAULT NULL,
  `std3ReadingWD` varchar(10) DEFAULT NULL,
  `std3ReadingPR` varchar(10) DEFAULT NULL,
  `std3ReadingSY` varchar(10) DEFAULT NULL,
  `std3NumberBG` varchar(10) DEFAULT NULL,
  `std3Number1Digit` varchar(10) DEFAULT NULL,
  `std3Number2Digits` varchar(10) DEFAULT NULL,
  `std3Number3Digits` varchar(10) DEFAULT NULL,
  `std4Enrolled` varchar(10) DEFAULT NULL,
  `std4Tested` varchar(10) DEFAULT NULL,
  `std4ReadingBG` varchar(10) DEFAULT NULL,
  `std4ReadingLT` varchar(10) DEFAULT NULL,
  `std4ReadingWD` varchar(10) DEFAULT NULL,
  `std4ReadingPR` varchar(10) DEFAULT NULL,
  `std4ReadingSY` varchar(10) DEFAULT NULL,
  `std4NumberBG` varchar(10) DEFAULT NULL,
  `std4Number1Digit` varchar(10) DEFAULT NULL,
  `std4Number2Digits` varchar(10) DEFAULT NULL,
  `std4Number3Digits` varchar(10) DEFAULT NULL,
  `std5Enrolled` varchar(10) DEFAULT NULL,
  `std5Tested` varchar(10) DEFAULT NULL,
  `std5ReadingBG` varchar(10) DEFAULT NULL,
  `std5ReadingLT` varchar(10) DEFAULT NULL,
  `std5ReadingWD` varchar(10) DEFAULT NULL,
  `std5ReadingPR` varchar(10) DEFAULT NULL,
  `std5ReadingSY` varchar(10) DEFAULT NULL,
  `std5NumberBG` varchar(10) DEFAULT NULL,
  `std5Number1Digit` varchar(10) DEFAULT NULL,
  `std5Number2Digits` varchar(10) DEFAULT NULL,
  `std5Number3Digits` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1Enrolled` text NOT NULL,
  `firstBLBeforeEL1Tested` text NOT NULL,
  `firstBLBeforeEL1ReadingBG` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1ReadingLT` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1ReadingWD` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1ReadingPR` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1ReadingSY` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1NumberBG` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1Number1Digit` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1Number2Digits` varchar(10) DEFAULT NULL,
  `firstBLBeforeEL1Number3Digits` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2Tested` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingBG` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingLT` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingWD` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingPR` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2ReadingSY` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2NumberBG` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2Number1Digit` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2Number2Digits` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL2Number3Digits` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3Tested` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingBG` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingLT` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingWD` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingPR` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3ReadingSY` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3NumberBG` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3Number1Digit` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3Number2Digits` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL3Number3Digits` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4Tested` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingBG` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingLT` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingWD` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingPR` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4ReadingSY` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4NumberBG` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4Number1Digit` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4Number2Digits` varchar(10) DEFAULT NULL,
  `additionalChildBeforeEL4Number3Digits` varchar(10) DEFAULT NULL,
  `consolidateBLEnrolled` varchar(10) DEFAULT NULL,
  `consolidateBLTested` varchar(10) DEFAULT NULL,
  `consolidateBLReadingBG` varchar(10) DEFAULT NULL,
  `consolidateBLReadingLT` varchar(10) DEFAULT NULL,
  `consolidateBLReadingWD` varchar(10) DEFAULT NULL,
  `consolidateBLReadingPR` varchar(10) DEFAULT NULL,
  `consolidateBLReadingSY` varchar(10) DEFAULT NULL,
  `consolidateBLNumberBG` varchar(10) DEFAULT NULL,
  `consolidateBLNumber1Digit` varchar(10) DEFAULT NULL,
  `consolidateBLNumber2Digits` varchar(10) DEFAULT NULL,
  `consolidateBLNumber3Digits` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`schoolCode`, `campno`, `std3Enrolled`, `std3Tested`, `std3ReadingBG`, `std3ReadingLT`, `std3ReadingWD`, `std3ReadingPR`, `std3ReadingSY`, `std3NumberBG`, `std3Number1Digit`, `std3Number2Digits`, `std3Number3Digits`, `std4Enrolled`, `std4Tested`, `std4ReadingBG`, `std4ReadingLT`, `std4ReadingWD`, `std4ReadingPR`, `std4ReadingSY`, `std4NumberBG`, `std4Number1Digit`, `std4Number2Digits`, `std4Number3Digits`, `std5Enrolled`, `std5Tested`, `std5ReadingBG`, `std5ReadingLT`, `std5ReadingWD`, `std5ReadingPR`, `std5ReadingSY`, `std5NumberBG`, `std5Number1Digit`, `std5Number2Digits`, `std5Number3Digits`, `firstBLBeforeEL1Enrolled`, `firstBLBeforeEL1Tested`, `firstBLBeforeEL1ReadingBG`, `firstBLBeforeEL1ReadingLT`, `firstBLBeforeEL1ReadingWD`, `firstBLBeforeEL1ReadingPR`, `firstBLBeforeEL1ReadingSY`, `firstBLBeforeEL1NumberBG`, `firstBLBeforeEL1Number1Digit`, `firstBLBeforeEL1Number2Digits`, `firstBLBeforeEL1Number3Digits`, `additionalChildBeforeEL2Tested`, `additionalChildBeforeEL2ReadingBG`, `additionalChildBeforeEL2ReadingLT`, `additionalChildBeforeEL2ReadingWD`, `additionalChildBeforeEL2ReadingPR`, `additionalChildBeforeEL2ReadingSY`, `additionalChildBeforeEL2NumberBG`, `additionalChildBeforeEL2Number1Digit`, `additionalChildBeforeEL2Number2Digits`, `additionalChildBeforeEL2Number3Digits`, `additionalChildBeforeEL3Tested`, `additionalChildBeforeEL3ReadingBG`, `additionalChildBeforeEL3ReadingLT`, `additionalChildBeforeEL3ReadingWD`, `additionalChildBeforeEL3ReadingPR`, `additionalChildBeforeEL3ReadingSY`, `additionalChildBeforeEL3NumberBG`, `additionalChildBeforeEL3Number1Digit`, `additionalChildBeforeEL3Number2Digits`, `additionalChildBeforeEL3Number3Digits`, `additionalChildBeforeEL4Tested`, `additionalChildBeforeEL4ReadingBG`, `additionalChildBeforeEL4ReadingLT`, `additionalChildBeforeEL4ReadingWD`, `additionalChildBeforeEL4ReadingPR`, `additionalChildBeforeEL4ReadingSY`, `additionalChildBeforeEL4NumberBG`, `additionalChildBeforeEL4Number1Digit`, `additionalChildBeforeEL4Number2Digits`, `additionalChildBeforeEL4Number3Digits`, `consolidateBLEnrolled`, `consolidateBLTested`, `consolidateBLReadingBG`, `consolidateBLReadingLT`, `consolidateBLReadingWD`, `consolidateBLReadingPR`, `consolidateBLReadingSY`, `consolidateBLNumberBG`, `consolidateBLNumber1Digit`, `consolidateBLNumber2Digits`, `consolidateBLNumber3Digits`) VALUES
('', '1', '87', '45', '85', '45', '5', '45', '745', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '1', '87', '45', '85', '45', '5', '45', '745', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', '1', '87', '45', '85', '45', '5', '45', '745', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', '1', '87', '45', '85', '45', '5', '45', '745', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `schoolcode` varchar(10) DEFAULT NULL,
  `campno` varchar(10) DEFAULT NULL,
  `ELAssTested` varchar(10) DEFAULT NULL,
  `ELAssReadingBG` varchar(10) DEFAULT NULL,
  `ELAssReadingLT` varchar(10) DEFAULT NULL,
  `ELAssReadingWD` varchar(10) DEFAULT NULL,
  `ELAssReadingPR` varchar(10) DEFAULT NULL,
  `ELAssReadingSY` varchar(10) DEFAULT NULL,
  `ELAssNumberBG` varchar(10) DEFAULT NULL,
  `ELAssNumber1Digit` varchar(10) DEFAULT NULL,
  `ELAssNumber2Digits` varchar(10) DEFAULT NULL,
  `ELAssNumber3Digits` varchar(10) DEFAULT NULL,
  `ELAssLC1Tested` varchar(10) DEFAULT NULL,
  `ELAssLC1ReadingBG` varchar(10) DEFAULT NULL,
  `ELAssLC1ReadingLT` varchar(10) DEFAULT NULL,
  `ELAssLC1ReadingWD` varchar(10) DEFAULT NULL,
  `ELAssLC1ReadingPR` varchar(10) DEFAULT NULL,
  `ELAssLC1ReadingSY` varchar(10) DEFAULT NULL,
  `ELAssLC1NumberBG` varchar(10) DEFAULT NULL,
  `ELAssLC1Number1Digit` varchar(10) DEFAULT NULL,
  `ELAssLC1Number2Digits` varchar(10) DEFAULT NULL,
  `ELAssLC1Number3Digits` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationAC` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationACN` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationSC` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationSCN` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationMC` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationMCN` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationDC` varchar(10) DEFAULT NULL,
  `ELAssLC1OperationDCN` varchar(10) DEFAULT NULL,
  `ELAssLC2Tested` varchar(10) DEFAULT NULL,
  `ELAssLC2ReadingBG` varchar(10) DEFAULT NULL,
  `ELAssLC2ReadingLT` varchar(10) DEFAULT NULL,
  `ELAssLC2ReadingWD` varchar(10) DEFAULT NULL,
  `ELAssLC2ReadingPR` varchar(10) DEFAULT NULL,
  `ELAssLC2ReadingSY` varchar(10) DEFAULT NULL,
  `ELAssLC2NumberBG` varchar(10) DEFAULT NULL,
  `ELAssLC2Number1Digit` varchar(10) DEFAULT NULL,
  `ELAssLC2Number2Digits` varchar(10) DEFAULT NULL,
  `ELAssLC2Number3Digits` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationAC` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationACN` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationSC` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationSCN` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationMC` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationMCN` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationDC` varchar(10) DEFAULT NULL,
  `ELAssLC2OperationDCN` varchar(10) DEFAULT NULL,
  `ELAssLC3Tested` varchar(10) DEFAULT NULL,
  `ELAssLC3ReadingBG` varchar(10) DEFAULT NULL,
  `ELAssLC3ReadingLT` varchar(10) DEFAULT NULL,
  `ELAssLC3ReadingWD` varchar(10) DEFAULT NULL,
  `ELAssLC3ReadingPR` varchar(10) DEFAULT NULL,
  `ELAssLC3ReadingSY` varchar(10) DEFAULT NULL,
  `ELAssLC3NumberBG` varchar(10) DEFAULT NULL,
  `ELAssLC3Number1Digit` varchar(10) DEFAULT NULL,
  `ELAssLC3Number2Digits` varchar(10) DEFAULT NULL,
  `ELAssLC3Number3Digits` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationAC` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationACN` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationSC` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationSCN` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationMC` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationMCN` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationDC` varchar(10) DEFAULT NULL,
  `ELAssLC3OperationDCN` varchar(10) DEFAULT NULL,
  `ELAssLC4Tested` varchar(10) DEFAULT NULL,
  `ELAssLC4ReadingBG` varchar(10) DEFAULT NULL,
  `ELAssLC4ReadingLT` varchar(10) DEFAULT NULL,
  `ELAssLC4ReadingWD` varchar(10) DEFAULT NULL,
  `ELAssLC4ReadingPR` varchar(10) DEFAULT NULL,
  `ELAssLC4ReadingSY` varchar(10) DEFAULT NULL,
  `ELAssLC4NumberBG` varchar(10) DEFAULT NULL,
  `ELAssLC4Number1Digit` varchar(10) DEFAULT NULL,
  `ELAssLC4Number2Digits` varchar(10) DEFAULT NULL,
  `ELAssLC4Number3Digits` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationAC` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationACN` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationSC` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationSCN` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationMC` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationMCN` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationDC` varchar(10) DEFAULT NULL,
  `ELAssLC4OperationDCN` varchar(10) DEFAULT NULL,
  `ELAssConsELTested` varchar(10) DEFAULT NULL,
  `ELAssConsELReadingBG` varchar(10) DEFAULT NULL,
  `ELAssConsELReadingLT` varchar(10) DEFAULT NULL,
  `ELAssConsELReadingWD` varchar(10) DEFAULT NULL,
  `ELAssConsELReadingPR` varchar(10) DEFAULT NULL,
  `ELAssConsELReadingSY` varchar(10) DEFAULT NULL,
  `ELAssConsELNumberBG` varchar(10) DEFAULT NULL,
  `ELAssConsELNumber1Digit` varchar(10) DEFAULT NULL,
  `ELAssConsELNumber2Digits` varchar(10) DEFAULT NULL,
  `ELAssConsELNumber3Digits` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationAC` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationACN` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationSC` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationSCN` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationMC` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationMCN` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationDC` varchar(10) DEFAULT NULL,
  `ELAssConsELOperationDCN` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`schoolcode`, `campno`, `ELAssTested`, `ELAssReadingBG`, `ELAssReadingLT`, `ELAssReadingWD`, `ELAssReadingPR`, `ELAssReadingSY`, `ELAssNumberBG`, `ELAssNumber1Digit`, `ELAssNumber2Digits`, `ELAssNumber3Digits`, `ELAssLC1Tested`, `ELAssLC1ReadingBG`, `ELAssLC1ReadingLT`, `ELAssLC1ReadingWD`, `ELAssLC1ReadingPR`, `ELAssLC1ReadingSY`, `ELAssLC1NumberBG`, `ELAssLC1Number1Digit`, `ELAssLC1Number2Digits`, `ELAssLC1Number3Digits`, `ELAssLC1OperationAC`, `ELAssLC1OperationACN`, `ELAssLC1OperationSC`, `ELAssLC1OperationSCN`, `ELAssLC1OperationMC`, `ELAssLC1OperationMCN`, `ELAssLC1OperationDC`, `ELAssLC1OperationDCN`, `ELAssLC2Tested`, `ELAssLC2ReadingBG`, `ELAssLC2ReadingLT`, `ELAssLC2ReadingWD`, `ELAssLC2ReadingPR`, `ELAssLC2ReadingSY`, `ELAssLC2NumberBG`, `ELAssLC2Number1Digit`, `ELAssLC2Number2Digits`, `ELAssLC2Number3Digits`, `ELAssLC2OperationAC`, `ELAssLC2OperationACN`, `ELAssLC2OperationSC`, `ELAssLC2OperationSCN`, `ELAssLC2OperationMC`, `ELAssLC2OperationMCN`, `ELAssLC2OperationDC`, `ELAssLC2OperationDCN`, `ELAssLC3Tested`, `ELAssLC3ReadingBG`, `ELAssLC3ReadingLT`, `ELAssLC3ReadingWD`, `ELAssLC3ReadingPR`, `ELAssLC3ReadingSY`, `ELAssLC3NumberBG`, `ELAssLC3Number1Digit`, `ELAssLC3Number2Digits`, `ELAssLC3Number3Digits`, `ELAssLC3OperationAC`, `ELAssLC3OperationACN`, `ELAssLC3OperationSC`, `ELAssLC3OperationSCN`, `ELAssLC3OperationMC`, `ELAssLC3OperationMCN`, `ELAssLC3OperationDC`, `ELAssLC3OperationDCN`, `ELAssLC4Tested`, `ELAssLC4ReadingBG`, `ELAssLC4ReadingLT`, `ELAssLC4ReadingWD`, `ELAssLC4ReadingPR`, `ELAssLC4ReadingSY`, `ELAssLC4NumberBG`, `ELAssLC4Number1Digit`, `ELAssLC4Number2Digits`, `ELAssLC4Number3Digits`, `ELAssLC4OperationAC`, `ELAssLC4OperationACN`, `ELAssLC4OperationSC`, `ELAssLC4OperationSCN`, `ELAssLC4OperationMC`, `ELAssLC4OperationMCN`, `ELAssLC4OperationDC`, `ELAssLC4OperationDCN`, `ELAssConsELTested`, `ELAssConsELReadingBG`, `ELAssConsELReadingLT`, `ELAssConsELReadingWD`, `ELAssConsELReadingPR`, `ELAssConsELReadingSY`, `ELAssConsELNumberBG`, `ELAssConsELNumber1Digit`, `ELAssConsELNumber2Digits`, `ELAssConsELNumber3Digits`, `ELAssConsELOperationAC`, `ELAssConsELOperationACN`, `ELAssConsELOperationSC`, `ELAssConsELOperationSCN`, `ELAssConsELOperationMC`, `ELAssConsELOperationMCN`, `ELAssConsELOperationDC`, `ELAssConsELOperationDCN`) VALUES
('789654', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('21345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('5645', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('74444155', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('0000', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('879', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('324', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7895452', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78457', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78954', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1230', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table6`
--

CREATE TABLE `table6` (
  `schoolCode` varchar(10) DEFAULT NULL,
  `campno` varchar(10) DEFAULT NULL,
  `progressAcrossReadingBGBG` varchar(10) DEFAULT NULL,
  `progressAcrossReadingBGLT` varchar(10) DEFAULT NULL,
  `progressAcrossReadingBGWD` varchar(10) DEFAULT NULL,
  `progressAcrossReadingBGPR` varchar(10) DEFAULT NULL,
  `progressAcrossReadingBGSY` varchar(10) DEFAULT NULL,
  `progressAcrossReadingBGTotal` varchar(10) DEFAULT NULL,
  `progressAcrossReadingLTBG` varchar(10) DEFAULT NULL,
  `progressAcrossReadingLTLT` varchar(10) DEFAULT NULL,
  `progressAcrossReadingLTWD` varchar(10) DEFAULT NULL,
  `progressAcrossReadingLTPR` varchar(10) DEFAULT NULL,
  `progressAcrossReadingLTSY` varchar(10) DEFAULT NULL,
  `progressAcrossReadingLTTotal` varchar(10) DEFAULT NULL,
  `progressAcrossReadingWDBG` varchar(10) DEFAULT NULL,
  `progressAcrossReadingWDLT` varchar(10) DEFAULT NULL,
  `progressAcrossReadingWDWD` varchar(10) DEFAULT NULL,
  `progressAcrossReadingWDPR` varchar(10) DEFAULT NULL,
  `progressAcrossReadingWDSY` varchar(10) DEFAULT NULL,
  `progressAcrossReadingWDTotal` varchar(10) DEFAULT NULL,
  `progressAcrossReadingPRBG` varchar(10) DEFAULT NULL,
  `progressAcrossReadingPRWD` varchar(10) DEFAULT NULL,
  `progressAcrossReadingPRLT` varchar(10) DEFAULT NULL,
  `progressAcrossReadingPRPR` varchar(10) DEFAULT NULL,
  `progressAcrossReadingPRSY` varchar(10) DEFAULT NULL,
  `progressAcrossReadingPRTotal` varchar(10) DEFAULT NULL,
  `progressAcrossReadingSYBG` varchar(10) DEFAULT NULL,
  `proogressAcrossReadingSYLT` varchar(10) DEFAULT NULL,
  `proogressAcrossReadingSYWD` varchar(10) DEFAULT NULL,
  `progressAcrossReadingSYPR` varchar(10) DEFAULT NULL,
  `progressAcrossReadingSYSY` varchar(10) DEFAULT NULL,
  `progressAcrossReadingSYTotal` varchar(10) DEFAULT NULL,
  `progressAcrossReadingTotalBG` varchar(10) DEFAULT NULL,
  `progressAcrossReadingTotalLT` varchar(10) DEFAULT NULL,
  `progressAcrossReadingTotalWD` varchar(10) DEFAULT NULL,
  `progressAcrossReadingTotalPR` varchar(10) DEFAULT NULL,
  `progressAcrossReadingTotalSY` varchar(10) DEFAULT NULL,
  `progressAcrossReadingTotalTotal` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`schoolCode`, `campno`, `progressAcrossReadingBGBG`, `progressAcrossReadingBGLT`, `progressAcrossReadingBGWD`, `progressAcrossReadingBGPR`, `progressAcrossReadingBGSY`, `progressAcrossReadingBGTotal`, `progressAcrossReadingLTBG`, `progressAcrossReadingLTLT`, `progressAcrossReadingLTWD`, `progressAcrossReadingLTPR`, `progressAcrossReadingLTSY`, `progressAcrossReadingLTTotal`, `progressAcrossReadingWDBG`, `progressAcrossReadingWDLT`, `progressAcrossReadingWDWD`, `progressAcrossReadingWDPR`, `progressAcrossReadingWDSY`, `progressAcrossReadingWDTotal`, `progressAcrossReadingPRBG`, `progressAcrossReadingPRWD`, `progressAcrossReadingPRLT`, `progressAcrossReadingPRPR`, `progressAcrossReadingPRSY`, `progressAcrossReadingPRTotal`, `progressAcrossReadingSYBG`, `proogressAcrossReadingSYLT`, `proogressAcrossReadingSYWD`, `progressAcrossReadingSYPR`, `progressAcrossReadingSYSY`, `progressAcrossReadingSYTotal`, `progressAcrossReadingTotalBG`, `progressAcrossReadingTotalLT`, `progressAcrossReadingTotalWD`, `progressAcrossReadingTotalPR`, `progressAcrossReadingTotalSY`, `progressAcrossReadingTotalTotal`) VALUES
('789654', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('21345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('5645', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('74444155', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('0000', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('879', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('324', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('7895452', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78457', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('78954', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('1230', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

CREATE TABLE `table7` (
  `schoolCode` varchar(10) DEFAULT NULL,
  `campno` varchar(10) DEFAULT NULL,
  `std1_2BLChildren` varchar(10) DEFAULT NULL,
  `std1_2BLReadingBG` varchar(10) DEFAULT NULL,
  `std1_2BLReadingLT` varchar(10) DEFAULT NULL,
  `std1_2BLReadingWD` varchar(10) DEFAULT NULL,
  `std1_2BLReadingPR` varchar(10) DEFAULT NULL,
  `std1_2BLReadingSY` varchar(10) DEFAULT NULL,
  `std1_2BLNumberBG` varchar(10) DEFAULT NULL,
  `std1_2BLNumber1Digit` varchar(10) DEFAULT NULL,
  `std1_2BLNumber2Digits` varchar(10) DEFAULT NULL,
  `std1_2BLOperationAC` varchar(10) DEFAULT NULL,
  `std1_2BLOperationACN` varchar(10) DEFAULT NULL,
  `std1_2BLOperationSC` varchar(10) DEFAULT NULL,
  `std1_2BLOperationSCN` varchar(10) DEFAULT NULL,
  `std1_2ELChildren` varchar(10) DEFAULT NULL,
  `std1_2ELReadingBG` varchar(10) DEFAULT NULL,
  `std1_2ELReadingLT` varchar(10) DEFAULT NULL,
  `std1_2ELReadingWD` varchar(10) DEFAULT NULL,
  `std1_2ELReadingPR` varchar(10) DEFAULT NULL,
  `std1_2ELReadingSY` varchar(10) DEFAULT NULL,
  `std1_2ELNumberBG` varchar(10) DEFAULT NULL,
  `std1_2ELNumber1Digit` varchar(10) DEFAULT NULL,
  `std1_2ELNumber2Digits` varchar(10) DEFAULT NULL,
  `std1_2ELOperationAC` varchar(10) DEFAULT NULL,
  `std1_2ELOperationACN` varchar(10) DEFAULT NULL,
  `std1_2ELOperationSC` varchar(10) DEFAULT NULL,
  `std1_2ELOperationSCN` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table7`
--

INSERT INTO `table7` (`schoolCode`, `campno`, `std1_2BLChildren`, `std1_2BLReadingBG`, `std1_2BLReadingLT`, `std1_2BLReadingWD`, `std1_2BLReadingPR`, `std1_2BLReadingSY`, `std1_2BLNumberBG`, `std1_2BLNumber1Digit`, `std1_2BLNumber2Digits`, `std1_2BLOperationAC`, `std1_2BLOperationACN`, `std1_2BLOperationSC`, `std1_2BLOperationSCN`, `std1_2ELChildren`, `std1_2ELReadingBG`, `std1_2ELReadingLT`, `std1_2ELReadingWD`, `std1_2ELReadingPR`, `std1_2ELReadingSY`, `std1_2ELNumberBG`, `std1_2ELNumber1Digit`, `std1_2ELNumber2Digits`, `std1_2ELOperationAC`, `std1_2ELOperationACN`, `std1_2ELOperationSC`, `std1_2ELOperationSCN`) VALUES
('789654', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('21345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('5645', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('74444155', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('0000', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('879', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('324', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7895452', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78457', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78954', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1230', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table8`
--

CREATE TABLE `table8` (
  `schoolCode` varchar(10) DEFAULT NULL,
  `campno` varchar(10) DEFAULT NULL,
  `camp1GovtOfficials` varchar(10) DEFAULT NULL,
  `camp1StateHead` varchar(10) DEFAULT NULL,
  `camp1ContentSRG` varchar(10) DEFAULT NULL,
  `Camp1BCDRL` varchar(10) DEFAULT NULL,
  `camp1MMETeam` varchar(10) DEFAULT NULL,
  `camp1Community` varchar(10) DEFAULT NULL,
  `camp1Others` varchar(10) DEFAULT NULL,
  `camp2GovtOfficials` varchar(10) DEFAULT NULL,
  `camp2StateHead` varchar(10) DEFAULT NULL,
  `camp2ContentSRG` varchar(10) DEFAULT NULL,
  `camp2BCDRL` varchar(10) DEFAULT NULL,
  `camp2MMETeam` varchar(10) DEFAULT NULL,
  `camp2Community` varchar(10) DEFAULT NULL,
  `camp2Others` varchar(10) DEFAULT NULL,
  `camp3GovtOfficials` varchar(10) DEFAULT NULL,
  `camp3StateHead` varchar(10) DEFAULT NULL,
  `camp3ContentSRG` varchar(10) DEFAULT NULL,
  `camp3BCDRL` varchar(10) DEFAULT NULL,
  `camp3MMETeam` varchar(10) DEFAULT NULL,
  `camp3Community` varchar(10) DEFAULT NULL,
  `camp3Others` varchar(10) DEFAULT NULL,
  `camp4GovtOfficials` varchar(10) DEFAULT NULL,
  `camp4StateHead` varchar(10) DEFAULT NULL,
  `camp4ContentSRG` varchar(10) DEFAULT NULL,
  `camp4BCDRL` varchar(10) DEFAULT NULL,
  `camp4MMETeam` varchar(10) DEFAULT NULL,
  `camp4Community` varchar(10) DEFAULT NULL,
  `camp4Others` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table8`
--

INSERT INTO `table8` (`schoolCode`, `campno`, `camp1GovtOfficials`, `camp1StateHead`, `camp1ContentSRG`, `Camp1BCDRL`, `camp1MMETeam`, `camp1Community`, `camp1Others`, `camp2GovtOfficials`, `camp2StateHead`, `camp2ContentSRG`, `camp2BCDRL`, `camp2MMETeam`, `camp2Community`, `camp2Others`, `camp3GovtOfficials`, `camp3StateHead`, `camp3ContentSRG`, `camp3BCDRL`, `camp3MMETeam`, `camp3Community`, `camp3Others`, `camp4GovtOfficials`, `camp4StateHead`, `camp4ContentSRG`, `camp4BCDRL`, `camp4MMETeam`, `camp4Community`, `camp4Others`) VALUES
('789654', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('21345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('5645', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('74444155', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('0000', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('00009', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('879', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('324', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78958', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('789545', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7895452', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7845', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78457', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12345', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('78954', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1230', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('784', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'test', 'test@testmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Agra', 'agar@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Raju', 'Raju@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schoollist`
--
ALTER TABLE `schoollist`
  ADD PRIMARY KEY (`School_ID`),
  ADD UNIQUE KEY `Index` (`Index`);

--
-- Indexes for table `summarysheet`
--
ALTER TABLE `summarysheet`
  ADD PRIMARY KEY (`schoolCode`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`schoolCode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schoollist`
--
ALTER TABLE `schoollist`
  MODIFY `Index` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
