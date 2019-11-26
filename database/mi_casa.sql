-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2019 at 03:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mi_casa`
--

CREATE DATABASE IF NOT EXISTS `mi_casa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mi_casa`;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `PropertyID` int(5) NOT NULL AUTO_INCREMENT,
  `UserID` int(5) NOT NULL,
  `Address1` varchar(30) NOT NULL,
  `Address2` varchar(30),
  `City` varchar(20) NOT NULL,
  `Parish` varchar(30) NOT NULL,
  `Size` float NOT NULL,
  `ListingType` varchar(12) NOT NULL,
  `PropertyType` varchar(12) NOT NULL,
  `BuildingType` varchar(12) NOT NULL,
  `NumBedroom` int(5) NOT NULL,
  `NumBathroom` int(5) NOT NULL,
  `Price` float NOT NULL,
  `PreviewImageURL` varchar(50) NOT NULL,
  PRIMARY KEY (`PropertyID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `propertyimage`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `PropertyID` int(5) DEFAULT NULL,
  `ImageURL` varchar(200) NOT NULL,
  UNIQUE KEY `Foreign Key` (`PropertyID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `RegID` int(5) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`RegID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `register` (`RegID`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`PropertyID`) REFERENCES `property` (`PropertyID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
