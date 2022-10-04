-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Ad_Email` varchar(255) NOT NULL,
  `Ad_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Ad_Email`, `Ad_Password`) VALUES
('admin01@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `categories`) VALUES
(15, 'Laptop'),
(16, 'Machine'),
(9, 'Mobile'),
(11, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `Customer` varchar(100) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Method` varchar(255) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Products` varchar(255) NOT NULL,
  `Supplier` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_id`, `Name`, `Email`, `Address`, `Customer`, `Total`, `Method`, `Phone`, `Quantity`, `Date`, `Products`, `Supplier`, `Status`) VALUES
(81, 'Usman Ali', 'usmanali01@gmail.com', 'Baghbanpura Lahore', 'usmanali01@gamil.com', '500.00', 'Cash On Delivery', '', '3', '29,Jun 2022 14:54:20', 'Bluetooth Hand free', 'ali01@gmail.com', 'Transporting'),
(82, 'Muhammad Ans Nizami', 'mans6450@gmail.com', 'Baghbanpura Lahore', 'usmanali01@gamil.com', '130,000.00', 'Cash On Delivery', '', '4', '03,Jul 2022 11:49:59', 'Realme', 'paperbook01@gmail.com', 'Transporting'),
(83, 'Muhammad Ans Nizami', 'mans6450@gmail.com', 'Baghbanpura Lahore', 'usmanali01@gamil.com', '500.00', 'Cash On Delivery', '', '4', '28,Aug 2022 22:40:37', 'Bluetooth Hand free', 'ali01@gmail.com', 'Complete'),
(84, 'Muhammad Ans Nizami', 'mans6450@gmail.com', 'Baghbanpura Lahore', 'usama01@gmail.com', '120,000.00', 'Cash On Delivery', '', '4', '29,Aug 2022 06:28:34', 'Qmobile E40', 'paperbook01@gmail.com', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `ProName` varchar(255) NOT NULL,
  `ProPrice` varchar(100) NOT NULL,
  `ProInfo` varchar(255) NOT NULL,
  `ProImg` varchar(255) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `sup_email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `ProName`, `ProPrice`, `ProInfo`, `ProImg`, `Category`, `sup_email`, `status`) VALUES
(23, 'Realme', '130000', 'Latest Model', 'images/.Realme-9-Stargaze-White-1.png', 'mobile', 'paperbook01@gmail.com', 'Approved'),
(26, 'Bluetooth Handfree', '500', 'Brand New', 'images/.689ef11449ab3d1501507e2240800ea1.jpg', 'mobile', 'ali01@gmail.com', 'Approved'),
(27, 'Qmobile E40', '120000', 'Latest Version ', 'images/.Realme-9-Stargaze-White-1.png', 'Mobile', 'paperbook01@gmail.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Birthday` date NOT NULL,
  `Image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `F_name`, `L_name`, `U_name`, `Email`, `Password`, `Address`, `City`, `Mobile`, `Birthday`, `Image`, `status`) VALUES
(17, 'Hamza', 'Zulfiqar', 'hamza01', 'hamza01@gmail.com', '111', 'Baghbanpura Lahore', 'lahore', '0000006656', '2022-05-04', '1053573407', 'Approved'),
(18, 'Muhammad Ans', 'Mubashir', '@ans12', 'ansmub12@gmail.com', '111', 'Baghbapura', 'Lahore', '03030000010', '2000-03-08', '1099527033', 'Approved'),
(19, 'Usman ', 'Ali Khan', '@usam01', 'usmanali01@gamil.com', '111', 'Baghbanpura, Lahore', 'Lahore', '03000008010', '2004-03-16', '1539262040', 'Approved'),
(20, 'usama ', 'Khan', 'usama01', 'usama01@gmail.com', '111', 'Baghbanpura Lahore', 'Lahore', '035555555', '2022-08-09', '', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `suplier_register`
--

CREATE TABLE `suplier_register` (
  `Id` int(11) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Birthday` date NOT NULL,
  `Image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier_register`
--

INSERT INTO `suplier_register` (`Id`, `F_name`, `L_name`, `U_name`, `Email`, `Password`, `Address`, `City`, `Mobile`, `Birthday`, `Image`, `status`) VALUES
(16, 'john', 'wick', 'Paper Book', 'paperbook01@gmail.com', '111', 'baghbanpura, Lahore, Pakistan', 'Lahore', '03555555', '2007-02-02', '', 'Approved'),
(20, 'Jamal', 'Jamal', '@jamal01', 'jamal01@gmail.com', '111', 'Shalamar', 'Lahore', '02323', '2022-05-10', '670968819', 'Approved'),
(21, 'Ali ', 'Hamza', 'Ali Mobile', 'ali01@gmail.com', '111', 'shope 56 , Hallroad, Lahore', 'Lahore', '03004005000', '2022-06-10', '285257808', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `categories` (`categories`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `suplier_register`
--
ALTER TABLE `suplier_register`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `suplier_register`
--
ALTER TABLE `suplier_register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
