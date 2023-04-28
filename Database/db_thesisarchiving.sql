-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:11 PM
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
  `DateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesisfile`
--

INSERT INTO `thesisfile` (`id`, `Thesis_ID`, `Title`, `Department`, `DateUpload`, `FileName`, `Participants`, `Status`, `DateCreated`) VALUES
(1, '6443d05e7c4cf', 'Test', 'IICT', '2023-04-14', 'thesis-6443d05e7c4d60.15539510.pdf', 'makier,mak,mark', 'Pending', '2023-04-22 20:17:34'),
(2, '644bebbd550d7', 'Test', 'IICT', '2023-04-21', 'thesis-644bebbd550f30.16397661.pdf', 'makier,mak,mark', 'Pending', '2023-04-28 23:52:29'),
(3, '644bebd9a26eb', 'hdfh', 'IICT', '2023-04-11', 'thesis-644bebd9a26fd2.32432365.pdf', 'test,test,test', 'Pending', '2023-04-28 23:52:57'),
(4, '644bee19292f6', 'Test Thesis Paper', 'IICT', '2023-04-14', 'thesis-644bee19293001.57734711.pdf', 'Renie,Denmark,Mark', 'Pending', '2023-04-29 00:02:33');

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
  `DateAdded` datetime NOT NULL DEFAULT current_timestamp(),
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `School_ID`, `Email`, `Password`, `Firstname`, `Lastname`, `UserRole`, `DateAdded`, `LastUpdate`) VALUES
(1, '534', 'carba@gmail.com', '123123', 'Makoy', 'Allan', 'Admin', '2023-04-22 18:01:34', '0000-00-00 00:00:00'),
(2, '65757', 'carbamark@gmail.com', '123123', 'Mark Allan', 'Carba', 'Student', '2023-04-22 18:04:12', '2023-04-22 19:57:06'),
(3, '415612', 'email123@gmail.com', '123123', 'TestUser 1', 'testLastname1', 'Student', '2023-04-28 23:59:37', '2023-04-29 00:00:50');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `thesisfile`
--
ALTER TABLE `thesisfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
