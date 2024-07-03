-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 05:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `Customer_Id` int(11) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `Percent_1` decimal(10,2) DEFAULT 0.00,
  `Percent_2` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Birthday`, `Percent_1`, `Percent_2`) VALUES
(1, '1905-05-01', '30.00', '25.00'),
(2, '1909-11-20', '50.00', '10.00'),
(3, '1915-01-20', '20.00', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_sale`
--

DROP TABLE IF EXISTS `customer_sale`;
CREATE TABLE `customer_sale` (
  `Sale_Id` int(11) NOT NULL,
  `Ref_Customer_Id` int(11) DEFAULT NULL,
  `Product_Id` varchar(10) DEFAULT '',
  `Quantity` int(3) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT 0.00,
  `Discount_1` decimal(10,2) DEFAULT 0.00,
  `Discount_2` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_sale`
--

INSERT INTO `customer_sale` (`Sale_Id`, `Ref_Customer_Id`, `Product_Id`, `Quantity`, `Price`, `Discount_1`, `Discount_2`) VALUES
(1, 1, 'X', 3, '1000.00', '900.00', '525.00'),
(2, 2, 'Y', 10, '3000.00', '15000.00', '1500.00'),
(3, 3, 'Z', 5, '2500.00', '2500.00', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `Id` int(11) NOT NULL,
  `Student` varchar(30) DEFAULT NULL,
  `Score` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`Id`, `Student`, `Score`) VALUES
(1, 'Name 01', 90),
(2, 'Name 02', 88),
(3, 'Name 03', 65),
(4, 'Name 04', 83),
(5, 'Name 05', 43),
(6, 'Name 06', 76),
(7, 'Name 07', 49),
(8, 'Name 08', 63);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `customer_sale`
--
ALTER TABLE `customer_sale`
  ADD PRIMARY KEY (`Sale_Id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_sale`
--
ALTER TABLE `customer_sale`
  MODIFY `Sale_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
