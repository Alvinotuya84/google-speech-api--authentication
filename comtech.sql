-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2021 at 11:14 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'laptop'),
(2, 'desktop'),
(3, 'gaming laptop'),
(4, 'computer parts');

-- --------------------------------------------------------

--
-- Table structure for table `maintainance`
--

CREATE TABLE `maintainance` (
  `maintainance_id` int(11) NOT NULL,
  `maintainance_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintainance`
--

INSERT INTO `maintainance` (`maintainance_id`, `maintainance_type`) VALUES
(1, 'hinge repairs'),
(2, 'screen replacement'),
(3, 'upgrades'),
(4, 'maintainance ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `prod_descrption` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `category_id` int(50) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `prod_descrption`, `product_price`, `quantity`, `category_id`, `file_name`) VALUES
(27, 'HPGood', '8gb ram, 1tb ssd', 'ksh.30009', 1, 1, 'images/h36.jpg'),
(28, 'ProBook', '16gb ram, 1tb ssd', 'ksh.75000', 1, 1, 'images/probook.jpg'),
(29, 'Ampex', '16 gb ram, 2tb ssd pro', 'ksh.120000', 2, 3, 'images/ampex.jpg'),
(31, 'MacBook', '16 gb ram, 1tb ssd pro', 'ksh.106000', 1, 1, 'images/macbook.png'),
(32, 'HPFolio ', '4gb ram', 'ksh.30000', 1, 2, 'images/hp folio.jpg'),
(33, 'HPPavilion  ', '16gb ram, 1tb ssd', 'ksh.899', 2, 2, 'images/HP Pavilion 24 All-in-One.png'),
(35, 'HPFine', '8 gb ram', 'ksh.50000', 1, 1, 'images/hp 430.jpg'),
(36, 'HardDrive ', '4tb', 'ksh.5000', 4, 3, 'images/hdd 34.jpg'),
(37, 'Dell', '16 gb ram', 'ksh.70000', 1, 3, 'images/dell.jpeg'),
(38, 'HPGoodThree', '32 gb ram', 'ksh.150000', 1, 1, 'images/hp 4030.png'),
(39, 'I phone7', '8gb ram, 1tb ssd', '30000', 1, 2, 'images/iphone7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Maina', '$2y$10$seVagh21v5FanEv0vt0i..R1IlJ5NraPvmPJLHiJaV12k7kh4dIOO'),
(2, 'Alvin', '$2y$10$d865coYCCLPha6QZBpYome6jR5LxeF25BHDxIVkMqRuWkkJPmvon.'),
(3, 'kiriga', '$2y$10$jpLcSp1GWz9Y5B5DZNLMEOY5BPs4cbJKxnP3NvcR.iY1jzp2I4ZZe'),
(4, 'Felo', '$2y$10$5kwzmbSx5G9cSoidp6OHEuTE2RqvG7nzy/luKI1Yg1y9YcafeFfUW'),
(5, 'niquette', '$2y$10$Av0.X/ua05buuBXkq7n.EeUZqLDqsxojkJYIsPTi.e6i1Mreet.Gm'),
(6, 'sasha', '$2y$10$SJjOCiu2b3fViU7nYgjemOFVfWA.ZMw5WyeL8Q59R/I8LBcbi8YHu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `maintainance`
--
ALTER TABLE `maintainance`
  ADD PRIMARY KEY (`maintainance_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maintainance`
--
ALTER TABLE `maintainance`
  MODIFY `maintainance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
