-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 06:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_number`) VALUES
(0, 'INV111'),
(2020, 'INV123'),
(2020067, 'INV456'),
(2020313, 'INV444'),
(2020333, 'INV333'),
(202006747, 'INV111');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` varchar(11) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `date`, `invoice_number`, `patient_name`, `quantity`, `price`) VALUES
(4, '2023-12-17', 'INV345', 'Ali', 3, '40'),
(5, '2023-12-17', 'INV356', 'Ahmed', 2, '30');

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
(2020, 'ABC', 50, 5, '2023-12-30', '2024-01-07', 'sass', 973, 3332321, 'hhhh'),
(2020067, 'asd', 12, 12, '2023-12-08', '2023-12-24', 'asd', 333, 131231, 'adada'),
(2020313, 'MMM', 60, 1, '2023-12-30', '2024-01-07', 'ddd', 973, 65236523, 'sss'),
(2020333, 'ssaa1', 45, 3, '2023-12-30', '2024-01-05', 'sss', 973, 66451234, 'gggg'),
(202006747, 'ABC', 50, 5, '2023-12-30', '2024-01-06', 'ssss', 973, 66563652, 'ffff');

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
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` varchar(11) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `invoice_number`, `medicine_name`, `price`, `quantity`) VALUES
(15, '2023-12-16', 'INV123', 'ABC', '20.00', 1),
(22, '2023-12-14', 'ABC123', 'mjj', '20.00', 3),
(23, '2023-12-05', 'A', 'mjj', '10.00', 1),
(24, '2023-12-17', 'ABC1', 'aa', '10.00', 2),
(25, '2023-12-20', 'ABC1', 'AAA', '20.00', 5),
(26, '2023-12-27', 'A', 'pan', '20.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `purchase_cost` decimal(10,2) NOT NULL,
  `quantity` int(50) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `medicine_name`, `category`, `purchase_cost`, `quantity`, `supplier`, `expire_date`) VALUES
(8, 'mjj', 'Category1', '100.00', 2, 'Omran', '2023-12-21'),
(9, 'AAA', 'Category2', '50.00', 2, 'Ali', '2023-12-22'),
(10, 'BBB', 'Category3', '70.00', 3, 'Mohammed', '2023-12-28'),
(11, 'ab', 'Category4', '50.00', 3, 'Ali', '2023-12-27');

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
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202006748;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
