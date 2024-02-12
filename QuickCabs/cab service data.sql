-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 01:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab service data`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `email` varchar(50) NOT NULL,
  `username1` varchar(50) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `number` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`firstName`, `lastName`, `gender`, `email`, `username1`, `password1`, `number`, `nic`, `userid`) VALUES
('Justin', 'Beiber', 'm', 'jb@gmail.com', 'JB', 'jb', 718831133, '123456789V', 3),
('Nimal', 'Kumara', 'm', 'abc@gmail.com', 'nimaldgh', '123', 764852644, '23567896543', 4),
('Nimal', 'Kumara', 'm', 'abc@gmail.com', 'nimal', '123', 764852644, '23567896543', 5),
('shadhini', 'bandara', 'f', 'sha@gmail.com', 'st', 'sss', 2147483647, '999994848', 6),
('iron', 'man', 'm', 'iron@gmail.com', 'iron man', 'ddd', 6666, '44577', 7),
('qwer', 'qwerhgfxcv', 'm', 'dfgh', '1234', 'owowow', 919191, '727272', 8);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `email` varchar(50) NOT NULL,
  `username2` varchar(50) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `number` int(10) NOT NULL,
  `nic` int(12) NOT NULL,
  `vehicleType` enum('car','three wheeler','bike') NOT NULL,
  `lisensePlate` varchar(20) NOT NULL,
  `Area` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`firstName`, `lastName`, `gender`, `email`, `username2`, `password2`, `number`, `nic`, `vehicleType`, `lisensePlate`, `Area`, `userid`) VALUES
('b', 'n', 'm', 'b@b', 'c', 'b', 11, 111, 'car', '1111', 'qw', 9),
('gfx', 'vbn bmn', 'f', 'dd2@cgc.com', 'nn', 'nn', 123456789, 984652654, '', 'bbb2211', 'col', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
