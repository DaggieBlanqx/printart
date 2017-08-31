-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 11:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printart`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `recog` int(11) NOT NULL,
  `FirstName` varchar(126) NOT NULL,
  `LastName` varchar(126) NOT NULL,
  `CompanyName` varchar(126) NOT NULL,
  `Email` varchar(126) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `recog` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL,
  `DeliveryStatus` varchar(126) NOT NULL DEFAULT 'Pending',
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ClientEmail` varchar(126) NOT NULL,
  `ClientPhone` int(11) NOT NULL,
  `ClientName` varchar(266) NOT NULL,
  `OrderDetails` text NOT NULL,
  `OrderSummary` varchar(126) NOT NULL,
  `DeliveryDate` date NOT NULL,
  `FileLink` text NOT NULL,
  `FileType` varchar(126) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`recog`, `OrderNumber`, `DeliveryStatus`, `OrderDate`, `ClientEmail`, `ClientPhone`, `ClientName`, `OrderDetails`, `OrderSummary`, `DeliveryDate`, `FileLink`, `FileType`, `Timestamp`) VALUES
(0, 0, 'Pending', '0000-00-00 00:00:00', '', 0, '', '<br>Type of Book : Note<b>book<b><br>Quantity : 12323<br>Book Size : A5<br>Production Copies : Duplicate<br>How many sides to print : Print Both Sides<br>Other Details : KNJKNHJKBJHJH<br>Delivery Date : 2017-09-01', '', '0000-00-00', '', '', '2017-08-04 07:05:02'),
(0, 0, 'Pending', '2017-08-04 07:08:08', '', 0, '', '<br>Type of Book : Note<b>book<b><br>Quantity : 12323<br>Book Size : A5<br>Production Copies : Duplicate<br>How many sides to print : Print Both Sides<br>Other Details : KNJKNHJKBJHJH<br>Delivery Date : 2017-09-01', '', '2017-09-01', '', '', '2017-08-04 07:08:08'),
(0, 0, 'Pending', '2017-08-04 07:42:41', '', 0, '', '<br>Type of Book : Note<b>book<b><br>Quantity : 12323<br>Book Size : A5<br>Production Copies : Duplicate<br>How many sides to print : Print Both Sides<br>Other Details : KNJKNHJKBJHJH<br>Delivery Date : 2017-09-01', '', '2017-09-01', '', '', '2017-08-04 07:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `recog` int(11) NOT NULL,
  `FullName` varchar(266) NOT NULL,
  `CompanyName` varchar(266) NOT NULL,
  `Email` varchar(266) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`recog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `recog` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
