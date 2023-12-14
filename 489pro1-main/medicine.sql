-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 09:06 PM
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
-- Database: `pharmacyq1`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_ID` int(20) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `dateOfCreate` date NOT NULL,
  `dateOfEnd` date NOT NULL,
  `theProducer` text NOT NULL,
  `key` int(3) NOT NULL,
  `Supplierphonenumber` int(8) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_ID`, `medicine_name`, `price`, `quantity`, `dateOfCreate`, `dateOfEnd`, `theProducer`, `key`, `Supplierphonenumber`, `description`) VALUES
(2020067, 'asd', 12, 12, '2023-12-08', '2023-12-24', 'asd', 333, 131231, 'adada'),
(2020312, 'asdad', 13, 13, '2023-12-13', '2023-12-25', 'asdac', 222, 1231311, 'hdhhdhf'),
(2020313, '', 22, 30, '2023-12-09', '2023-12-26', 'fadel', 123, 33302807, 'fadel is the best ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020314;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
