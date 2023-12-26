-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 07:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbclg`
--
CREATE DATABASE IF NOT EXISTS `dbclg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbclg`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminID`, `AdminName`, `EmailID`, `Password`) VALUES
(1, 'James Bond', 'james@gmail.com', 'bond'),
(2, 'Mohini Chodhari', 'mohi@gmail.com', 'mohini');

-- --------------------------------------------------------

--
-- Table structure for table `tblstud`
--

CREATE TABLE `tblstud` (
  `RollNo` int(11) NOT NULL,
  `StudName` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `ImageURL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstud`
--

INSERT INTO `tblstud` (`RollNo`, `StudName`, `Age`, `ImageURL`) VALUES
(1, 'James Patel', 33, NULL),
(2, 'Kallu Kaliya', 23, NULL),
(4, 'Lolita Gandhi', 23, NULL),
(5, 'Nazaha', 20, NULL),
(6, 'Ekta Tha Tiger', 20, NULL),
(7, 'Hemansi', 19, NULL),
(8, 'Ekta Tiger', 19, NULL),
(9, 'Mohini Patel', 23, NULL),
(10, 'Lali Patel', 22, NULL),
(11, 'Lalita Kaneriya', 21, NULL),
(12, 'Dhruvi', 18, NULL),
(13, 'Dhruvi Gajera', 18, NULL),
(14, 'Lolita Patel', 23, NULL),
(15, 'Harshani Kalathiya', 19, NULL),
(16, 'Shivani', 23, NULL),
(17, 'Dhruvi Pavasiya', 19, NULL),
(18, 'Dhruvi Pavasiya', 19, NULL),
(19, 'Dhruvi Pavasiya', 19, NULL),
(20, 'Jensi Goyani', 19, NULL),
(21, 'Akshita', 19, 'Screenshot (43).png'),
(22, 'Shruti', 21, '2.png'),
(23, 'Kadar Khan', 34, '4.png'),
(24, 'Amrish Puri', 55, 'Screenshot (15).png'),
(25, 'uuuu', 22, '2.png'),
(26, 'Katrina', 32, '5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `tblstud`
--
ALTER TABLE `tblstud`
  ADD PRIMARY KEY (`RollNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstud`
--
ALTER TABLE `tblstud`
  MODIFY `RollNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
