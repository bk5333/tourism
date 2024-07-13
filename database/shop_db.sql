-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 09:26 PM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(15, 'Camping Tent', 11000, 1, 'de955711b790d4d0775330a76a5b3f10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Camping Tent', '11000', 'de955711b790d4d0775330a76a5b3f10.jpg'),
(5, 'Sun Bum', '4600', 'Sun Bum.jpg'),
(6, 'Umbrella', '5000', 'Umbrella.jpg'),
(7, 'Travel Sewing Kit', '1500', 'Sewing Kit.jpg'),
(8, 'First Aid Kit', '3100', '61fejgMciwL._SL1200_.jpg'),
(9, 'Travel Pillow', '9100', 'Travel Pillow.jpg'),
(10, 'Water Bottle', '7600', '71onGrwKYRL._AC_SL1500_.jpg'),
(11, 'Bugs Zapper Outdoor', '12000', '71ViBBXkuEL._AC_SL1500_.jpg'),
(12, 'Neck Pillow', '3400', 'Neck Pillow.jpeg'),
(13, 'Carry on Suitcases', '7000', '81OqmhgW9bL._AC_UX522_.jpg'),
(15, 'Travelling Bag Pack', '6000', 'download.jpeg'),
(16, 'Dove Deodorant', '3500', '718VI1BmfeL._SL1500_.jpg'),
(17, 'Luggage Scale', '3000', 'p1.jpg'),
(18, 'Car Seat', '4700', 'p5.jpg'),
(19, 'Waterproof Mat', '5100', 'images (1).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
