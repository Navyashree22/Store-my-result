-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 03:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginandregistrationform`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `Name` varchar(30) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Subject 1` varchar(50) NOT NULL,
  `Marks 1` varchar(30) NOT NULL,
  `Subject 2` varchar(50) NOT NULL,
  `Marks 2` varchar(30) NOT NULL,
  `Subject 3` varchar(50) NOT NULL,
  `Marks 3` varchar(30) NOT NULL,
  `Subject 4` varchar(50) NOT NULL,
  `Marks 4` varchar(30) NOT NULL,
  `Subject 5` varchar(50) NOT NULL,
  `Marks 5` varchar(30) NOT NULL,
  `Subject 6` varchar(50) NOT NULL,
  `Marks 6` varchar(30) NOT NULL,
  `Subject 7` varchar(50) NOT NULL,
  `Marks 7` varchar(30) NOT NULL,
  `Subject 8` varchar(50) NOT NULL,
  `Marks 8` varchar(30) NOT NULL,
  `Subject 9` varchar(50) NOT NULL,
  `Marks 9` varchar(30) NOT NULL,
  `Subject 10` varchar(50) NOT NULL,
  `Marks 10` varchar(30) NOT NULL,
  `Total Marks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`Email_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
