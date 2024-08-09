-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 04:39 PM
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
-- Database: `cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `No` int(11) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `From1` varchar(20) NOT NULL,
  `To1` varchar(20) NOT NULL,
  `Flight_Date` date NOT NULL,
  `Flight_Number` varchar(20) NOT NULL,
  `Flight_Company` varchar(20) NOT NULL,
  `Flight_Time` time NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Phone_Number` varchar(11) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Card_Holder_Name` varchar(30) NOT NULL,
  `Card_Number` varchar(20) NOT NULL,
  `Card_Cvc` int(11) NOT NULL,
  `Expiry_Date` date NOT NULL,
  `Payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `No` int(11) NOT NULL,
  `Full_Name` int(20) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`No`, `Full_Name`, `Email_id`, `Question`) VALUES
(1, 0, 'Patelmeet23032005@gmail.com', 'What is This');

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `No` int(11) NOT NULL,
  `FROM1` varchar(50) NOT NULL,
  `TO1` varchar(50) NOT NULL,
  `Date1` date NOT NULL,
  `Time1` time NOT NULL,
  `Available_Seat` int(150) NOT NULL,
  `Flight_Companie` varchar(20) NOT NULL,
  `Flight_Number` varchar(10) NOT NULL,
  `Terminal` int(11) NOT NULL,
  `Price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`No`, `FROM1`, `TO1`, `Date1`, `Time1`, `Available_Seat`, `Flight_Companie`, `Flight_Number`, `Terminal`, `Price`) VALUES
(18, 'Ahmedabad', 'Mumbai', '2023-07-21', '10:40:00', 65, 'IndiGo', '6E-214', 1, '4000'),
(19, 'Ahmedabad', 'Delhi', '2023-07-21', '21:50:00', 55, 'IndiGo', '6E-728', 2, '2500'),
(20, 'Ahmedabad', 'Kolkata', '2023-07-21', '17:25:00', 31, 'IndiGo', '6E-689', 1, '6000'),
(21, 'Ahmedabad', 'Bangalore', '2023-07-21', '11:10:00', 48, 'IndiGo', '6E-823', 2, '3800'),
(22, 'Ahmedabad', 'Jaipur', '2023-07-21', '04:30:00', 53, 'IndiGo', '6E-158', 1, '14800'),
(23, 'Ahmedabad', 'Patna', '2023-07-21', '11:00:00', 65, 'IndiGo', '6E-126', 2, '6200'),
(24, 'Ahmedabad', 'Mumbai', '2023-07-22', '17:35:00', 48, 'AIR INDIA', 'AI-632', 1, '2200'),
(25, 'Ahmedabad', 'Delhi', '2023-07-22', '07:50:00', 39, 'AIR INDIA', 'AI-818', 2, '3500'),
(26, 'Ahmedabad', 'Kolkata', '2023-07-22', '23:40:00', 62, 'AIR INDIA', 'AI-214', 1, '5300'),
(27, 'Ahmedabad', 'Bangalore', '2023-07-22', '04:10:00', 40, 'AIR INDIA', 'AI-322', 2, '3200'),
(28, 'Ahmedabad', 'Jaipur', '2023-07-22', '11:15:00', 35, 'AIR INDIA', 'AI-707', 1, '7400'),
(29, 'Ahmedabad', 'Patna', '2023-07-22', '18:30:00', 80, 'AIR INDIA', 'AI-229', 2, '5200'),
(30, 'Ahmedabad', 'Mumbai', '2023-07-23', '20:35:00', 35, 'Emirates', 'EK-101', 1, '7500'),
(31, 'Ahmedabad', 'Delhi', '2023-07-23', '23:50:00', 25, 'Emirates', 'EK-223', 2, '5700');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `no` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`no`, `First_Name`, `Last_Name`, `User_Name`, `Email_id`, `Password`) VALUES
(3, 'Meet', 'Patel', 'meet_299_299', 'Patelmeet23032005@gmail.com', 'meet299299'),
(6, 'Anand', 'Yadav', 'Anand Yadav', 'anandyad452@gmail.com', '12345678'),
(7, 'Yashpalsinh', 'Parmar', 'yashpal35', 'yashpal@gmail.com', 'yashpalb-35'),
(9, 'Meet', 'Patel', 'meet', 'meet@gmail.com', 'meet299');

-- --------------------------------------------------------

--
-- Table structure for table `login_client`
--

CREATE TABLE `login_client` (
  `No` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_client`
--

INSERT INTO `login_client` (`No`, `First_Name`, `Last_Name`, `User_Name`, `Email_id`, `Password`) VALUES
(6, 'meet', 'patel', 'meet_299', 'meet@gmail.com', '123456'),
(7, 'Anand', 'Yadav', 'anand yadav', 'anand123@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `Flight_Number` (`Flight_Number`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `User_Name` (`User_Name`),
  ADD UNIQUE KEY `Email_id` (`Email_id`);

--
-- Indexes for table `login_client`
--
ALTER TABLE `login_client`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `Email_id` (`Email_id`),
  ADD UNIQUE KEY `User_Name` (`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flight_details`
--
ALTER TABLE `flight_details`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_client`
--
ALTER TABLE `login_client`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
