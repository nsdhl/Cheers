-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 03:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `user` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `order_id` int(20) NOT NULL DEFAULT current_timestamp(),
  `orderedby` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `payment_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `price`, `quantity`, `order_id`, `orderedby`, `address`, `phoneno`, `payment_mode`) VALUES
(2, 'Mustang', 300, 2, 64, 'Bimochan Bajimaya', 'Chabahil', 9860232480, 'COD'),
(3, 'Gorkha Strong', 370, 1, 89, 'Nischal Dahal', 'Chabahil', 9805940865, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `name`, `photo`, `description`, `category`, `isActive`, `price`, `stock`) VALUES
(6, 'Gorkha Strong', 'gorkhastrong.jpg', 'Save water, Drink beer.', 'Beer', 1, 370, 99),
(7, 'Arna', 'arna.jpg', 'Save water, Drink beer.', 'Beer', 1, 350, 150),
(8, 'Tuborg', 'tuborg.jpg', 'Save water, Drink beer.', 'Beer', 1, 485, 115),
(9, 'Carlsberg', 'carlsberg.jpeg', 'Save water, Drink beer.', 'Beer', 1, 410, 150),
(10, 'Robertsonwinery', 'robertsonwinery.jpeg', 'Home is where the wine is.', 'Wine', 1, 550, 100),
(11, 'Khukuri Rum', 'khukurirum.jpg', 'The golden liquid.', 'Rum', 1, 130, 130),
(12, 'Hinwa', 'hinwa.jpg', 'Home is where the wine is.', 'Wine', 1, 550, 150),
(13, 'Divine wine', 'divinewine.jpg', 'Home is where the wine is.', 'Wine', 1, 625, 110),
(14, 'Dadaghare', 'dadaghare.jpg', 'Home is where the wine is.', 'Wine', 1, 400, 200),
(15, 'Canvas', 'canvas.jpg', 'Home is where the wine is.', 'Wine', 1, 625, 125),
(16, 'Budweiser', 'budweiser.jpeg', 'Save water, Drink beer.', 'Beer', 1, 550, 165),
(17, 'Big master', 'bigmaster.jpg', 'Home is where the wine is.', 'Wine', 1, 700, 125),
(18, 'Mustang', 'mustang.jpg', 'Save water, Drink beer.', 'Beer', 1, 300, 148);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` smallint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `address`, `phone`, `email`, `username`, `password`, `age`) VALUES
(1, 'Bimochan Bajimaya', 'Chabahil', 9860232480, 'bmochanb@gmail.com', 'bimo', 'bimo', 21),
(2, 'Shushanta Dhungana', 'Ramhiti', 9865062545, 'shushantadhungana@gmail.com', 'shushanta69', 'shushanta69', 20),
(5, 'Nischal Dahal', 'Chabahil', 9805940865, 'pompousnischal@gmail.com', 'nischal10', 'nischal10', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
