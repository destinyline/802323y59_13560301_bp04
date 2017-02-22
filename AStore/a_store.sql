-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 04:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_code`
--

CREATE TABLE `product_code` (
  `idProduct_code` int(11) NOT NULL,
  `Product_number` varchar(45) DEFAULT NULL,
  `Product_code` varchar(45) DEFAULT NULL,
  `Product_price` int(11) DEFAULT NULL,
  `Product_status` enum('OK','Waiting') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_code`
--

INSERT INTO `product_code` (`idProduct_code`, `Product_number`, `Product_code`, `Product_price`, `Product_status`) VALUES
(1, '00001', 'AS0001', 150, 'OK'),
(2, '00002', 'AS0002', 250, 'Waiting'),
(7, '00003', 'AS0003', 100, 'OK'),
(8, '00004', 'AS0004', 500, 'Waiting'),
(9, '00005', 'AS0005', 450, 'OK'),
(10, '00006', 'AS0006', 30, 'Waiting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_code`
--
ALTER TABLE `product_code`
  ADD PRIMARY KEY (`idProduct_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_code`
--
ALTER TABLE `product_code`
  MODIFY `idProduct_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
