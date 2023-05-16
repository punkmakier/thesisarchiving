-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 05:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thesisarchiving`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `Description` text NOT NULL,
  `DateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thesisfile`
--

CREATE TABLE `thesisfile` (
  `id` int(11) NOT NULL,
  `Thesis_ID` varchar(50) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `DateUpload` date NOT NULL,
  `FileName` text NOT NULL,
  `Participants` varchar(255) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending',
  `Remarks` text NOT NULL,
  `SubmittedBy` varchar(50) NOT NULL,
  `DateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `LastUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `School_ID` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `UserRole` varchar(10) NOT NULL DEFAULT 'Student',
  `isRegistered` int(5) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DateAdded` datetime NOT NULL DEFAULT current_timestamp(),
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `School_ID`, `Email`, `Password`, `Firstname`, `Lastname`, `UserRole`, `isRegistered`, `Phone`, `Address`, `DateAdded`, `LastUpdate`) VALUES
(1, '534', 'admin@gmail.com', '123123', 'Admin', 'Test', 'Admin', 1, '', '', '2023-04-22 18:01:34', '2023-05-16 21:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesisfile`
--
ALTER TABLE `thesisfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `thesisfile`
--
ALTER TABLE `thesisfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
