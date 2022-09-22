-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 12:07 AM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uugc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblCourse`
--

CREATE TABLE `tblCourse` (
  `crsID` int NOT NULL,
  `crsIDCode` varchar(6) NOT NULL,
  `crsName` varchar(20) NOT NULL,
  `crsInstructor` varchar(20) NOT NULL,
  `crsDescription` varchar(255) NOT NULL,
  `crsSemester` varchar(15) NOT NULL,
  `crsStartTime` time NOT NULL,
  `crsEndTime` time NOT NULL,
  `crsMon` tinyint DEFAULT NULL,
  `crsTues` tinyint DEFAULT NULL,
  `crsWed` tinyint DEFAULT NULL,
  `crsThurs` tinyint DEFAULT NULL,
  `crsFri` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblSchedule`
--

CREATE TABLE `tblSchedule` (
  `schID` int NOT NULL,
  `courseUser` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblUser`
--

CREATE TABLE `tblUser` (
  `usrID` int NOT NULL,
  `usrName` varchar(20) NOT NULL,
  `usrFirstName` varchar(25) DEFAULT NULL,
  `usrLastName` varchar(25) DEFAULT NULL,
  `usrEmail` varchar(255) NOT NULL,
  `usrAddress` varchar(255) DEFAULT NULL,
  `usrCity` varchar(50) DEFAULT NULL,
  `usrState` varchar(2) DEFAULT NULL,
  `usrZip` int DEFAULT NULL,
  `usrPassword` varchar(255) NOT NULL,
  `usrAdmin` tinyint DEFAULT NULL,
  `usrInstructor` tinyint DEFAULT NULL,
  `usrImage` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblCourse`
--
ALTER TABLE `tblCourse`
  ADD PRIMARY KEY (`crsID`),
  ADD UNIQUE KEY `crsIDCode` (`crsIDCode`),
  ADD KEY `crsInstructor` (`crsInstructor`);

--
-- Indexes for table `tblSchedule`
--
ALTER TABLE `tblSchedule`
  ADD PRIMARY KEY (`schID`),
  ADD KEY `courseUser` (`courseUser`,`course`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `tblUser`
--
ALTER TABLE `tblUser`
  ADD PRIMARY KEY (`usrID`),
  ADD UNIQUE KEY `usrName` (`usrName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblCourse`
--
ALTER TABLE `tblCourse`
  MODIFY `crsID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblSchedule`
--
ALTER TABLE `tblSchedule`
  MODIFY `schID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblUser`
--
ALTER TABLE `tblUser`
  MODIFY `usrID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblCourse`
--
ALTER TABLE `tblCourse`
  ADD CONSTRAINT `tblCourse_ibfk_1` FOREIGN KEY (`crsInstructor`) REFERENCES `tblUser` (`usrName`);

--
-- Constraints for table `tblSchedule`
--
ALTER TABLE `tblSchedule`
  ADD CONSTRAINT `tblSchedule_ibfk_1` FOREIGN KEY (`courseUser`) REFERENCES `tblUser` (`usrName`),
  ADD CONSTRAINT `tblSchedule_ibfk_2` FOREIGN KEY (`course`) REFERENCES `tblCourse` (`crsIDCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
