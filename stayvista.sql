-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 09:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayvista`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'krisha', 'krisha0111'),
(2, 'nishita', 'nishita2308');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `room_type` enum('single','standard-double','twin','triple','quad','deluxe','executive/suite','presidential-suite') NOT NULL,
  `no_of_rooms` int(50) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `adults` int(10) NOT NULL,
  `children` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `first_name`, `last_name`, `phone_number`, `room_type`, `no_of_rooms`, `check_in_date`, `check_out_date`, `adults`, `children`) VALUES
(1, 'Riya', 'Shah', 2147483647, 'single', 2, '2024-10-22', '2024-10-24', 2, 0),
(2, 'Devanshi', 'Nanda', 2147483647, 'single', 1, '0000-00-00', '2024-10-19', 1, 0),
(3, 'Nishi', 'Savadia', 2147483647, '', 1, '2024-10-25', '2024-10-27', 2, 0),
(4, 'Diya', 'Vora', 2147483647, '', 1, '2024-10-29', '2024-10-31', 2, 0),
(5, 'Krupali', 'Kukadiya', 2147483647, '', 2, '2024-10-25', '2024-10-28', 2, 0),
(6, 'Shifa', 'Sati', 2147483647, '', 2, '2024-11-11', '2024-11-15', 4, 1),
(7, 'Priyanshi', 'Kukadiya', 2147483647, '', 1, '0000-00-00', '2024-11-17', 2, 0),
(8, 'Devanshi', 'Nanda', 1212121212, '', 1, '2024-12-20', '2024-12-23', 1, 0),
(9, 'Abc', 'Xyz', 2147483647, '', 1, '2024-10-17', '2024-10-20', 2, 1),
(10, 'yash', 'kotecha', 2147483647, '', 5, '2024-10-16', '2024-10-17', 7, 2),
(12, 'Abc', 'Xyz', 2147483647, 'single', 2, '2024-11-30', '2025-01-02', 3, 4),
(13, 'Diya', 'Vora', 2147483647, '', 2, '2024-10-29', '2026-05-26', 10, 11),
(14, 'Riya', 'Xyz', 1234567890, 'single', 2, '2025-01-31', '2026-12-31', 1, 1),
(15, 'Riya', 'Xyz', 2147483647, '', 2, '2024-12-30', '2025-01-01', 1, 1),
(16, 'Abc', 'Xyz', 2147483647, '', 2, '2024-12-31', '2025-01-02', 1, 1),
(17, 'yash', 'q', 1111111111, '', 1, '2025-11-14', '2026-09-14', 1, 2),
(18, 'k;ldampoj1`', 'kdfnewjf', 1587897894, 'single', 5, '2023-09-14', '2025-11-15', 1, 1),
(19, 'test', 'test', 2147483647, '', 1, '2025-03-27', '2025-03-30', 2, 0),
(20, 'Neha', 'Sharma', 1212343456, '', 1, '2024-10-23', '2024-10-25', 2, 1),
(21, 'Rupal', 'Shah', 2147483647, '', 2, '2024-10-30', '2024-11-01', 4, 0),
(22, 'Nidhi', 'Shah', 1212121212, '', 2, '2024-10-30', '2024-11-01', 4, 0),
(23, 'a', 'b', 2147483647, 'single', 1, '2024-10-16', '2024-10-18', 1, 0),
(24, 'Prachi', 'Faliya', 1231231234, '', 1, '2024-10-18', '2024-10-20', 2, 0),
(25, 'Pal', 'Shah', 1245124512, 'presidential-suite', 1, '2024-10-23', '2024-10-25', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`Id`, `name`, `email`, `review`) VALUES
(1, 'Param', 'param@gmail.com', 'Good'),
(2, 'Krupali', 'krupali@gmail.com', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_number` varchar(50) NOT NULL,
  `room_type` enum('single','standard-double','twin','triple','quad','deluxe','executive/suite','presidential-suite') NOT NULL,
  `description` text NOT NULL,
  `max_occupancy` int(50) NOT NULL,
  `availability_status` enum('Available','Under_Maintenance') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_number`, `room_type`, `description`, `max_occupancy`, `availability_status`) VALUES
(3, 'B1', 'standard-double', 'This is a Standard Double Room', 3, 'Available'),
(4, 'B1', 'standard-double', 'This is a Standard Double Room', 3, 'Available'),
(5, 'B1', 'standard-double', 'This is a Standard Double Room', 3, 'Available'),
(6, 'B1', 'standard-double', 'This is a Standard Double Room', 3, 'Available'),
(7, 'B1', 'standard-double', 'This is a Standard Double Room', 3, 'Available'),
(9, 'B3', 'standard-double', 'This is a Standard Double Room', 3, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `password`, `email`, `phone_number`) VALUES
(4, 'nishita', 'abc', 'nishita', 'nishi', 'nishi@gmail.com', 1212121212),
(5, 'Krupali', 'Kukadiya', 'krupali', 'krupali', 'krupali@gmail.com', 2147483647),
(6, 'devu', 'nanda', 'deavsnhi', '123456', 'devanshinanda@gamil.com', 2147483647),
(9, 'Diya', 'Vora', 'diyavora_17', 'DVV', 'abc@gmail.com', 2147483647),
(11, 'Riya', 'Trivedi', 'riya', 'riya', 'riya@gmail.com', 2147483647),
(13, 'shital', 'vora', 'sheetu', '1008', 'sheetal@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
