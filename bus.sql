-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 02:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `FromBus` varchar(255) DEFAULT NULL,
  `ToBus` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `BusName` varchar(255) DEFAULT NULL,
  `Departure` decimal(10,2) DEFAULT NULL,
  `Duration` decimal(10,2) DEFAULT NULL,
  `Arrival` decimal(10,2) DEFAULT NULL,
  `Fare` decimal(10,2) DEFAULT NULL,
  `Seats` int(11) DEFAULT NULL,
  `BusNo` varchar(255) NOT NULL,
  `boarding1` varchar(255) DEFAULT NULL,
  `boarding2` varchar(255) DEFAULT NULL,
  `boarding3` varchar(255) DEFAULT NULL,
  `boarding4` varchar(255) DEFAULT NULL,
  `boarding5` varchar(255) DEFAULT NULL,
  `dropping1` varchar(255) DEFAULT NULL,
  `dropping2` varchar(255) DEFAULT NULL,
  `dropping3` varchar(255) DEFAULT NULL,
  `dropping4` varchar(255) DEFAULT NULL,
  `dropping5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `name` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `email`, `Password`, `role`) VALUES
('nagesh', 'omkar123@gmail.com', 'ROYELnagesh123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `oldbuses`
--

CREATE TABLE `oldbuses` (
  `id` int(11) NOT NULL,
  `FromBus` varchar(255) DEFAULT NULL,
  `ToBus` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `BusName` varchar(255) DEFAULT NULL,
  `Departure` decimal(10,2) DEFAULT NULL,
  `Duration` decimal(10,2) DEFAULT NULL,
  `Arrival` decimal(10,2) DEFAULT NULL,
  `Fare` decimal(10,2) DEFAULT NULL,
  `Seats` int(11) DEFAULT NULL,
  `BusNo` varchar(255) NOT NULL,
  `boarding1` varchar(255) DEFAULT NULL,
  `boarding2` varchar(255) DEFAULT NULL,
  `boarding3` varchar(255) DEFAULT NULL,
  `boarding4` varchar(255) DEFAULT NULL,
  `boarding5` varchar(255) DEFAULT NULL,
  `dropping1` varchar(255) DEFAULT NULL,
  `dropping2` varchar(255) DEFAULT NULL,
  `dropping3` varchar(255) DEFAULT NULL,
  `dropping4` varchar(255) DEFAULT NULL,
  `dropping5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `PhoneNum` varchar(20) DEFAULT NULL,
  `seatNo` varchar(255) DEFAULT NULL,
  `BusNO` varchar(20) DEFAULT NULL,
  `BPoint` varchar(255) DEFAULT NULL,
  `STDrop` varchar(255) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `PaymentID` varchar(255) DEFAULT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `boardingtime` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `name` varchar(22) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`BusNo`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `oldbuses`
--
ALTER TABLE `oldbuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PaymentID` (`PaymentID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oldbuses`
--
ALTER TABLE `oldbuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
