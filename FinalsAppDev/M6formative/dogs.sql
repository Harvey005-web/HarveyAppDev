-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2026 at 09:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_breed` varchar(100) NOT NULL,
  `d_age` varchar(50) NOT NULL,
  `d_add` varchar(150) NOT NULL,
  `d_color` varchar(50) NOT NULL,
  `d_height` varchar(50) NOT NULL,
  `d_weight` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `d_name`, `d_breed`, `d_age`, `d_add`, `d_color`, `d_height`, `d_weight`) VALUES
(1, 'Pepper', 'Corgi', '1 year old', 'Sampaloc Manila', 'Black', '2 ft', '2.5 kg'),
(2, 'Salt', 'Beagle', '2 years old', 'Pandi Bulacan', 'Brown', '2 ft', '2.5 kg'),
(3, 'Coffie', 'Dachshund', '3 years old', 'Quezon City', 'Brown', '1 ft', '2 kg'),
(4, 'Sugar', 'Shiba Inu', '2 years old', 'Imus Cavite', 'Brown', '1.5 ft', '7 kg'),
(5, 'Milk', 'Saint Bernard', '5 years old', 'Taytay Rizal', 'White', '5 ft', '55 kg'),
(6, 'Vanilla', 'Aspin', '4 years old', 'Paco Manila', 'White', '2 ft', '10 kg'),
(7, 'Mocha', 'Labrador', '5 years old', 'Pasig City', 'Brown', '3 ft', '15 kg'),
(8, 'Choco', 'Chow Chow', '3 years old', 'Makati City', 'Brown', '2 ft', '5 kg'),
(9, 'Maki', 'Siberian Husky', '3 yrs', 'Valenzuela City', 'White', '3 ft', '5.5 kg'),
(10, 'Sachi', 'Shih Tzu', '1 year old', 'Angeles City Pampanga', 'White', '1.5 ft', '3 kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
