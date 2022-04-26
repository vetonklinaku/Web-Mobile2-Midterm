-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 04:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `CarId` int(11) NOT NULL,
  `Brand` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `YearOfProduction` date NOT NULL,
  `GearBox` varchar(20) NOT NULL,
  `FuelConumption` decimal(4,2) NOT NULL,
  `NumberOfSeats` tinyint(4) NOT NULL,
  `HorsePower` tinyint(4) NOT NULL,
  `CubicCapacity` decimal(8,4) NOT NULL,
  `fuel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`CarId`, `Brand`, `Model`, `YearOfProduction`, `GearBox`, `FuelConumption`, `NumberOfSeats`, `HorsePower`, `CubicCapacity`, `fuel`) VALUES
(1, 'BMW', '320D', '2017-04-01', 'Manual', '5.10', 5, 127, '1.9950', 'Dissel');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(11) NOT NULL,
  `carID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `pickUpDate` date DEFAULT current_timestamp(),
  `dropOfDate` date DEFAULT current_timestamp(),
  `pickUpLocation` varchar(60) DEFAULT NULL,
  `dropOfLocation` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationID`, `carID`, `userID`, `pickUpDate`, `dropOfDate`, `pickUpLocation`, `dropOfLocation`) VALUES
(2, 1, 5, NULL, NULL, 'Tirana', 'Prishtina'),
(9, 6, 1, '2022-04-28', '2022-04-30', 'Prishtina', 'Tirana');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`) VALUES
(4, 'vetonk', '$2y$10$UMRHQvAWvPVDHjZ.JKqGJux5dtaLYSD132AzsLNd6puNAdq/5Yjzm'),
(5, 'monika', '$2y$10$omIBOjPQKJtQbtOpFU2ZN.WexuSOrpM6uFrEqg6mFgh9bc8Jx6dsu'),
(6, 'alisa', '$2y$10$v8t2vEeLmkUMufCWWHkpKudg7qFvmO6oloUKF8cDoWjA8SaP4ScbO'),
(7, 'deni', '$2y$10$GVc3myLYVbbJ/nzHYsJ/teCsZzY2ENeQFy5o/ntnIYer2rPq8qd3e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`CarId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `FK_cars` (`carID`),
  ADD KEY `FK_users` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `CarId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
