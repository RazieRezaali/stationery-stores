-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 09:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stationery-stores`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `action` int(11) NOT NULL DEFAULT 0,
  `admin_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_code`, `number`, `action`, `admin_message`) VALUES
(68, 15, 3, 4, 0, ''),
(69, 15, 8, 1, 0, ''),
(70, 15, 13, 1, 0, ''),
(71, 15, 20, 1, 0, ''),
(72, 16, 5, 1, 2, 'our stock for this product is low, so the number of this order reduced to 1.'),
(73, 16, 7, 1, 0, ''),
(74, 16, 9, 2, 3, 'this product is not appropriate for you!'),
(75, 16, 13, 1, 1, 'this order will send you ASAP!'),
(76, 17, 2, 1, 0, ''),
(77, 17, 15, 2, 0, ''),
(78, 17, 19, 1, 0, ''),
(79, 15, 2, 1, 2, 'our stock for this product is low, so the number of this order reduced to 1.'),
(80, 15, 12, 1, 1, 'this order will send you ASAP!'),
(81, 16, 3, 1, 0, ''),
(82, 15, 1, 1, 0, ''),
(83, 15, 2, 1, 3, 'this product is not appropriate for you!'),
(84, 15, 3, 1, 0, ''),
(85, 15, 4, 1, 0, ''),
(86, 15, 13, 1, 0, ''),
(87, 15, 1, 10, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `code` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `color_code` tinyint(4) NOT NULL,
  `image` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='color: 1->blue , 2->red , 3->black , 4->green';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code`, `name`, `type`, `color_code`, `image`, `stock`, `price`) VALUES
(1, 'pencil', 5, 2, 'pencil_red.jpg', 10, 2.50),
(2, 'pencil', 5, 3, 'pencil_black.jpg', 25, 2.80),
(3, 'pen', 4, 1, 'pen_blue.jpg', 20, 4.50),
(4, 'pen', 4, 2, 'pen_red.jpg', 20, 4.70),
(5, 'pen', 4, 3, 'pen_black.jpg', 20, 4.50),
(6, 'pen', 4, 4, 'pen_green.jpg', 20, 4.70),
(7, 'pencilcase', 3, 3, 'pencilcase_black.jpg', 20, 20.00),
(8, 'pencilcase', 3, 1, 'pencilcase_blue.jpg', 20, 20.00),
(9, 'ruler', 2, 3, 'ruler_black.jpg', 20, 10.60),
(10, 'ruler', 2, 1, 'ruler_blue.jpg', 20, 10.60),
(11, 'ruler', 2, 2, 'ruler_red.jpg', 20, 10.60),
(12, 'ruler', 2, 5, 'ruler_white.jpg', 20, 11.00),
(13, 'corrector', 1, 0, 'corrector.jpg', 20, 18.50),
(14, 'notebook', 6, 2, 'notebook_red.jpg', 20, 25.00),
(15, 'notebook', 6, 6, 'notebook_orange.jpg', 20, 25.00),
(16, 'notebook', 6, 4, 'notebook_green.jpg', 20, 25.00),
(17, 'notebook', 6, 3, 'notebook_black.jpg', 20, 25.00),
(18, 'eraser', 7, 1, 'eraser_blue.jpg', 20, 8.50),
(19, 'eraser', 7, 3, 'eraser_black.jpg', 20, 9.50),
(20, 'color pencil set', 8, 0, 'colorpencilset.jpg', 5, 28.99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `address`, `email`, `username`, `password`) VALUES
(13, 'Razie', 'RezaAli', '09123456789', 'tehran', 'razierezaali@gmail.com', 'Admin', 'e3afed0047b08059d0fada10f400c1e5'),
(15, 'Razie1', 'RazaAli1', '09123456789', 'tehran1', 'razierezaali@gmail.com1', 'rezaali1', '3189dd3162b59b077ff0406b886efbc1'),
(16, 'Razie2', 'RezaAli2', '09123456789', 'tehran2', 'razierezaali@gmail.com2', 'rezaali2', '03427aaed6c14c88f83d136a9391243f'),
(17, 'rezaali3', 'rezaali3', '09123456789', 'tehran3', 'razierezaali@gmail.com3', 'rezaali3', '09edf52ad82dbae923ba8532b23322df');

-- --------------------------------------------------------

--
-- Table structure for table `users_cart`
--

CREATE TABLE `users_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `added_to_orders` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_cart`
--

INSERT INTO `users_cart` (`id`, `user_id`, `product_code`, `number`, `added_to_orders`) VALUES
(99, 15, 3, 4, 1),
(100, 15, 8, 1, 1),
(102, 15, 13, 1, 1),
(104, 15, 20, 1, 1),
(105, 15, 2, 3, 1),
(106, 15, 12, 1, 1),
(107, 16, 5, 2, 1),
(108, 16, 7, 1, 1),
(109, 16, 9, 2, 1),
(110, 16, 13, 1, 1),
(111, 17, 2, 1, 1),
(112, 17, 15, 2, 1),
(113, 17, 19, 1, 1),
(114, 16, 3, 1, 1),
(115, 15, 1, 1, 1),
(116, 15, 2, 1, 1),
(117, 15, 3, 1, 1),
(118, 15, 4, 1, 1),
(119, 15, 13, 1, 1),
(120, 15, 1, 10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_cart`
--
ALTER TABLE `users_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_cart`
--
ALTER TABLE `users_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
