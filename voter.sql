-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 02:38 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `voter` (
  `person_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `municipality` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `voter` (`person_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `date_of_birth`, `sex`, `address`, `citizenship`, `municipality`, `city`, `province`, `mobile_number`, `email`, `password`) VALUES
(5, 'Simpao', 'Eman', 'Abaya', 'n/a', '0000-00-00', 'M', 'lakejrkl st.', 'Filipino', 'Manila', 'Metro Manila', 'NCR', '098751751', 'emansimps@gmail.com', '$2y$10$C9bAWxiGf8ex5sK7MSySrO5zoabfPz7NNtRVUqbwtghPX8TUo/cfG'),
(6, 'Simpao', 'Eman', 'Abaya', 'n/a', '0000-00-00', 'M', 'lakejrkl st.', 'Filipino', 'Manila', 'Metro Manila', 'NCR', '098751751', 'emansimps@gmail.com', '$2y$10$b4oNw9uE.Zr/DANDmv.P1.S2QcIFlWBGBbqNx687tD36JKl0RK5WW'),
(10, 'test', 'test', 'test', 'n/a', '0000-00-00', 'm', 'lawkej st.', 'flilipino', 'manila', 'metro manila', 'NCR', '0913481', 'simpseman@gmail.com', '$2y$10$Lkog0s9cAltqetvgewU4b.SPZCrLezwAZHOI66q7ToHa5Vaox4v3u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `voter`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
