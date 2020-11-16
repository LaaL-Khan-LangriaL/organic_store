-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 09:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organic_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_order`
--

CREATE TABLE `e_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `province` varchar(255) NOT NULL,
  `order_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_order`
--

INSERT INTO `e_order` (`id`, `user_id`, `company`, `zip`, `address`, `address_2`, `country`, `date`, `province`, `order_notes`) VALUES
(49, 85, 'floria', '4440000', 'airport society', 'flat no 6', 'pakistan', '2020-11-11 17:41:11', 'qubac', ''),
(50, 85, 'floria', '4440000', 'airport society', 'flat no 6', 'pakistan', '2020-11-11 17:41:11', 'qubac', '');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `name`, `keywords`, `price`, `shipping`, `description`, `image`, `slug`, `created_at`) VALUES
(11, 'Apple', '', '3.00', 'Free Shipping', '', '1.png', 'Apple', '2020-10-26 20:18:57'),
(12, 'Grapes', '', '2.00', 'Free Shipping', '', '2.png', 'Grapes', '2020-10-28 11:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `order_id`, `name`, `quantity`, `price`, `image`) VALUES
(10, 49, 'Grapes', '1', '2.00', '2.png'),
(11, 49, 'Apple', '1', '3.00', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `juices`
--

CREATE TABLE `juices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juices`
--

INSERT INTO `juices` (`id`, `name`, `keywords`, `price`, `shipping`, `description`, `image`, `slug`, `created_at`) VALUES
(3, 'Juice 1', '', '2.00', 'Free Shipping', '', 'juice (1).png', 'Juice 1', '2020-10-26 20:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `title`, `keywords`, `position`, `description`, `slug`) VALUES
(17, 'Home', 'organic store home page', 'home,page,organic,store,medicine,organic,medicine,hakeem,onlineorganic,', 'Navbar', 'we are offering online organic store. you can buy online now these organic fruits and foods juices salads etc.', 'Home'),
(18, 'Fruits', 'organic store offering fruits', 'buy online,free shipping,pure organic, cheap fresh fruits, free delivery of fruits,at your door step', 'Navbar', 'we are offering online fruits.those are pure organic products we care about your health if we provide healthy and organic foods fruits to you only then Pakistan can grow up.', 'Fruits'),
(19, 'Juices', 'we are offering online juices.those are pure organic', 'buy online,free shipping,pure organic, cheap fresh juices, free delivery,', 'Navbar', '', 'Juices');

-- --------------------------------------------------------

--
-- Table structure for table `salads`
--

CREATE TABLE `salads` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salads`
--

INSERT INTO `salads` (`id`, `name`, `keywords`, `price`, `shipping`, `description`, `image`, `slug`, `created_at`) VALUES
(4, 'Salad 1', '', '2.00', 'Free Shipping', '', 'salad (2).png', 'Salad 1', '2020-10-26 20:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `first_name`, `last_name`, `email`, `phone`, `date`) VALUES
(85, 'sohaib aslam', 'aslam', 'sohaib8686@gmail.com', '923444276747', '2020-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_order`
--
ALTER TABLE `e_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `juices`
--
ALTER TABLE `juices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salads`
--
ALTER TABLE `salads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_order`
--
ALTER TABLE `e_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6001;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `juices`
--
ALTER TABLE `juices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `salads`
--
ALTER TABLE `salads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12000;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
