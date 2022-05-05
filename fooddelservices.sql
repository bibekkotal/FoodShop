-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 02:59 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddelservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_uname` varchar(200) NOT NULL,
  `a_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_uname`, `a_pass`) VALUES
(1, 'bibekkotal', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fcategory`
--

CREATE TABLE `fcategory` (
  `id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fcategory`
--

INSERT INTO `fcategory` (`id`, `c_name`, `c_image`) VALUES
(3, 'Foods', '1617429764poultry.png'),
(4, 'Drinks', '1617522079cocktail.png'),
(5, 'Snakes', '1617522145pizza.png'),
(6, 'Desserts', '1617522169ice_cream.png');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `f_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_price` decimal(10,2) NOT NULL,
  `f_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`f_id`, `c_id`, `f_name`, `f_price`, `f_image`) VALUES
(1, 3, 'Tandoori Chicken', '250.00', '1617534182grilled-tandoori-chicken.jpg'),
(2, 3, 'Non Veg Biryani', '150.00', '1617534229non-veg-biryani.jpg'),
(3, 3, 'Garlic Noodles', '150.00', '1617534273Sesame-Garlic-Noodles-12.jpg'),
(4, 3, 'Chicken Momo', '130.00', '1617534311chicken momo.jpg'),
(5, 4, 'Tea With Pakodas', '80.00', '1617534362tea_with_paneer_pakoras.jpg'),
(6, 4, 'Lemon Juice', '80.00', '1617534452fresh_lemon_juice.jpg'),
(7, 4, 'Dark Coffie', '100.00', '1617534482dark-coffie.jpg'),
(8, 4, 'Chilled Beer', '150.00', '1617534506Chilled_beer.jpg'),
(9, 5, 'Corn Bhajiya', '80.00', '1617534615Methi corn bhajiya.jpg'),
(10, 5, 'Onion Pakoda', '50.00', '1617534647Onion Pakoda.jpg'),
(11, 5, 'Samosa', '50.00', '1617534687Samosa.jpg'),
(12, 5, 'French Fries', '50.00', '1617534719French Fries.jpg'),
(13, 6, 'Rice Kheer', '100.00', '1617534785rice kheer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `morder`
--

CREATE TABLE `morder` (
  `id` int(100) NOT NULL,
  `cid` int(100) NOT NULL,
  `odate` varchar(500) NOT NULL,
  `bn` varchar(100) NOT NULL,
  `be` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL,
  `ba` varchar(300) NOT NULL,
  `sn` varchar(200) NOT NULL,
  `se` varchar(200) NOT NULL,
  `sp` varchar(300) NOT NULL,
  `sa` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `id` int(10) NOT NULL,
  `f_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratting`
--

CREATE TABLE `ratting` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ratting` int(11) NOT NULL,
  `review` varchar(4000) NOT NULL,
  `pid` int(11) NOT NULL,
  `isapproved` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sorder`
--

CREATE TABLE `sorder` (
  `id` int(11) NOT NULL,
  `moid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcategory`
--
ALTER TABLE `fcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `morder`
--
ALTER TABLE `morder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratting`
--
ALTER TABLE `ratting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sorder`
--
ALTER TABLE `sorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fcategory`
--
ALTER TABLE `fcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `morder`
--
ALTER TABLE `morder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `ratting`
--
ALTER TABLE `ratting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sorder`
--
ALTER TABLE `sorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
