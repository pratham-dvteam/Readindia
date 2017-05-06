-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 12:12 PM
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schoollist`
--
ALTER TABLE `schoollist`
  MODIFY `Index` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
