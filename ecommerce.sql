-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2016 at 06:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Laptops'),
(2, 'Drones'),
(3, 'Haha');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `productId`, `link`) VALUES
(1, 1, 'http://pisces.bbystatic.com/image2/BestBuy_US/images/products/5465/5465700_sd.jpg;maxHeight=1000;maxWidth=1000'),
(2, 1, 'http://pisces.bbystatic.com/image2/BestBuy_US/images/products/5465/5465700cv13d.jpg;maxHeight=1000;maxWidth=1000'),
(3, 1, 'http://pisces.bbystatic.com/image2/BestBuy_US/images/products/5465/5465700cv12d.jpg;maxHeight=1000;maxWidth=1000'),
(4, 2, 'https://images-na.ssl-images-amazon.com/images/I/61gwX9W7qsL._SL1062_.jpg'),
(5, 3, 'https://images-na.ssl-images-amazon.com/images/I/61yasO5d0OL._SL1492_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `categoryId`) VALUES
(1, 'Apple - MacBook ProÂ® - 13" Display - Intel Core i5 - 8 GB Memory - 256GB Flash Storage (latest model) - Space Gray', 'The new MacBook Pro is faster and more powerful than before, yet remarkably thinner and lighter.Â¹ It has the brightest, most colorful display ever on a Mac notebook. And it features up to 10 hours of battery life.Â² Itâ€™s a notebook built for the work y', 1399.99, 1),
(3, 'Syma X5C 2.4G 6 Axis Gyro HD Camera RC Quadcopter with 2.0MP Camera', 'Equipped with HD camera.\nPerform flips at the press of a button with 360 degree eversion, Wind resistant and can be flown indoors or outdoors\n6-axis Gyro stabilization system ensures maximum stability during flight\n7 Minute flight time and 100 minute char', 54.89, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
