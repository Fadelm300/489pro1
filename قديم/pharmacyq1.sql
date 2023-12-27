-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 02:06 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Employee_ID` varchar(8) NOT NULL,
  `administration_level` varchar(30) NOT NULL,
  `speciality` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `key` int(4) NOT NULL,
  `PhoneNO` int(8) DEFAULT NULL,
  `numberflat_house` int(11) NOT NULL,
  `road` int(11) NOT NULL,
  `BLD` int(11) NOT NULL,
  `governorate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Employee_ID`, `administration_level`, `speciality`, `password`, `Name`, `dateOfBirth`, `gender`, `Email`, `key`, `PhoneNO`, `numberflat_house`, `road`, `BLD`, `governorate`) VALUES
('', 'asdas', '0', 'adaf', 'asdas', '2023-11-28', 'male', 'fadel.m200@gmail.com', 123, 123123, 123, 123, 123, 'asd');

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
(2020313, '', 22, 30, '2023-12-09', '2023-12-26', 'fadel', 123, 33302807, 'fadel is the best '),
(2020314, '', 12, 12, '2023-12-01', '2023-12-26', 'asdafafda', 333, 12312312, 'adafafaad');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `Order ID` varchar(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `order date` datetime NOT NULL,
  `order status` varchar(30) NOT NULL,
  `medicine ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `key` int(4) NOT NULL,
  `PhoneNO` int(15) DEFAULT NULL,
  `numberflat_house` int(11) NOT NULL,
  `road` int(11) NOT NULL,
  `BLD` int(11) NOT NULL,
  `governorate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `password`, `FName`, `LName`, `dateOfBirth`, `gender`, `Email`, `key`, `PhoneNO`, `numberflat_house`, `road`, `BLD`, `governorate`) VALUES
('fadelmoh', 'fadel.m2', 'fadel', 'mohammad', '2023-11-30', 'male', 'fadel.m200@gmail.com', 973, 33302807, 111, 111, 11, 'hidd');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `Employee_ID` varchar(8) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `speciality` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `key` int(4) NOT NULL,
  `PhoneNO` int(8) DEFAULT NULL,
  `numberflat_house` int(11) NOT NULL,
  `road` int(11) NOT NULL,
  `BLD` int(11) NOT NULL,
  `governorate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`Employee_ID`, `degree`, `speciality`, `password`, `Name`, `dateOfBirth`, `gender`, `Email`, `key`, `PhoneNO`, `numberflat_house`, `road`, `BLD`, `governorate`) VALUES
('', 'master', 'cs', 'fadel.m', 'fadel', '2023-12-02', 'male', 'fadel.m200@gmail.com', 973, 33302807, 111, 1112, 1121, '0');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `prescription ID` varchar(8) NOT NULL,
  `medicine ID` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Employee ID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report number` int(11) NOT NULL,
  `employee ID` varchar(8) NOT NULL,
  `report details` text NOT NULL,
  `report time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_id` int(8) NOT NULL,
  `password` varchar(30) NOT NULL,
  `FName` varchar(15) NOT NULL,
  `LName` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `key` int(3) NOT NULL,
  `PhoneNO` int(8) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_id`, `password`, `FName`, `LName`, `Email`, `key`, `PhoneNO`, `description`) VALUES
(2020, 'qqqqq', 'aaaa', '0', 'fadel.m200@gmail.com', 333, 333333, 'zzzzzzzzzzzzzzz'),
(123123, 'asdfdasd1', '11111111qaa', 'aaaa', 'fadel.m200@gmail.com', 123, 1213123, 'afadf'),
(2020067, 'fadel.m', 'fadel', '0', 'fadel.m200@gmail.com', 333, 33302807, 'adffdsaf'),
(202006747, 'dasdas', 'dasdas', '0', 'fadel.m200@gmail.com', 333, 123123, 'xzccsd');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `report number` int(11) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `supplier ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_ID`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`Order ID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`prescription ID`),
  ADD KEY `Employee ID` (`Employee ID`),
  ADD KEY `medicine ID` (`medicine ID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report number`),
  ADD KEY `employee ID` (`employee ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`report number`),
  ADD KEY `supplier ID` (`supplier ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020315;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `report number` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `ordertable_ibfk_1` FOREIGN KEY (`username`) REFERENCES `patient` (`username`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`Employee ID`) REFERENCES `pharmacist` (`Employee_ID`),
  ADD CONSTRAINT `prescriptions_ibfk_2` FOREIGN KEY (`medicine ID`) REFERENCES `medicine` (`medicine_ID`),
  ADD CONSTRAINT `prescriptions_ibfk_3` FOREIGN KEY (`username`) REFERENCES `patient` (`username`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`employee ID`) REFERENCES `admin` (`Employee_ID`);

--
-- Constraints for table `supplies`
--
ALTER TABLE `supplies`
  ADD CONSTRAINT `supplies_ibfk_1` FOREIGN KEY (`report number`) REFERENCES `report` (`report number`),
  ADD CONSTRAINT `supplies_ibfk_2` FOREIGN KEY (`supplier ID`) REFERENCES `supplier` (`Supplier_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
