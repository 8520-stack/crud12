-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 09:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud11`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `name`) VALUES
(1, 'ebeid@gmail.com', '1', 'ebeid'),
(2, 'yasmin@gmail.com', '2', 'yasmin'),
(3, 'yomna@gmail.com', '3', 'yomna');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custId`, `name`, `pass`, `address`, `email`, `phone`) VALUES
(8, 'Ahmed zaky', '123', '5st', 'ahmed4@gmail.com', '0114352673'),
(9, 'watson', '123', '56st', 'watson@gmail.com', '01582627752'),
(11, 'YASMIN KAMAL', 'YASMIN', 'عاطفه الدويداري شارع محمد عبده-منطقه الازهر-الدرب الاحمر -القاهرة4', 'yasminekamal8@gmail.com', '01141082641');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `depid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `shippingTo` varchar(255) DEFAULT NULL,
  `shippingAddress` varchar(255) DEFAULT NULL,
  `shippingStatus` varchar(255) DEFAULT 'ordered',
  `shippingphone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodId` int(11) NOT NULL,
  `prodName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(20000) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `add_infi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodId`, `prodName`, `description`, `image`, `status`, `section_id`, `price`, `add_infi`) VALUES
(66, 'Samsung Galaxy A10s ', 'Dual SIM 32GB 2GB RAM 4G LTE Tactile Blue', 's1.jpg', 'Available', 3, '1729', ''),
(67, 'Huawei Nova 7i', 'Dual SIM  32GB  2GB RAM 4G LTE Tactile Blue', 'h1.jpg', 'Available', 2, '3975', ''),
(68, 'Huawei Y8P ', 'Dual SIM 128 GB 6 GB RAM 4G LTE Midnight Black ', 'h3.jpg', 'Available', 2, '3149', ''),
(69, 'Huawei Mate 30 Pro ', 'Dual SIM 256 GB 8 GB RAM 5G Emerald Green', 'h4.jpg', 'Available', 2, '11666', ''),
(70, 'Huawei P10 Plus ', 'Dual SIM 128 GB 6 GB RAM 4G LTE Dazzling Blue', 'h5.jpg', 'Available', 2, '12399', ''),
(71, 'Samsung Galaxy Tab S7', 'SM T875 11 inch 128 GB 6 GB RAM 4G LTE Mstic Black', 's2.jpg', 'Available', 3, '13999', ''),
(72, 'Apple iPhone 12 Pro Max ', '128 GB 6 GB RAM Pacific Blue', 'a2.jpg', 'Available', 1, '20999', ''),
(73, 'Apple iPhone X5 Max', 'with FaceTime 64 GB 4 GB RAM 4G LTE Space Grey', 'a3.jpg', 'Available', 1, '15049', ''),
(74, 'Apple iPhone XR ', 'with FAceTime 64 GB 3 GB RAM 4G LTE White', 'a4.jpg', 'Available', 1, '10989', ''),
(75, 'Apple iPhone 11', 'with FaceTime 128 GB 4 GB RAM 4G LTE Purple', 'a1.jpg', 'Available', 1, '12174', ''),
(76, 'Samsung Galaxy Note 20 Ultra Mobile Phone', 'Hybrid Dual SIM 6.9 inch 256 GB 12 GB RAM 5G LTE 4500mAh Mystic Bronze', 's3.jpg', 'Available', 3, '18490', ''),
(77, 'Samsung Galaxy S21 ', 'Dual SIM Mobile 6.2 inches 128 GB 8 GB RAM 5G grey', 's4.jpg', 'Available', 3, '11999', ''),
(78, 'Samsung Galaxy Note 10 Lite ', 'Dual SIM 128 GB 8 GB RAM 4G LTE Aura Red', 's5.jpg', 'Available', 3, '7599', ''),
(79, 'samsung Galaxy A71 ', 'Dual SIM 128 GB 8 GB RAM 4G LTE Haze Crush Silver', 's7.jpg', 'Available', 3, '6175', ''),
(80, 'Samsung Galaxy S10 Plus ', 'Dual SIM 128 GB 8 GB RAM 4G LTE Prism White', 's8.jpg', 'Available', 3, '11199', ''),
(81, 'Samasung Galaxy A80', 'Dual SIM 128 GB 8 GB RAM 4G LTE Ghost White', 's9.jpg', 'Available', 3, '7625', ''),
(82, 'Apple iPhone 12 Mini', '128 GB 4 GB RAM Blue', 'a5.jpg', 'Available', 1, '14990', ''),
(83, 'Apple iPhone SE ', '128 GB 3 GB RAM 4G LTE Single SIM Red', 'a6.jpg', 'Available', 1, '9555', ''),
(84, 'Apple iPhone 8 Plus ', 'with FAceTime 64 GB 3 GB RAM 4G LTE Red', 'a7.jpg', 'Available', 1, '16649', ''),
(85, 'Apple iPhone 7', 'with FaceTime 256 GB 4G LTE Jet Black', 'a8.jpg', 'Available', 1, '7299', ''),
(86, 'Apple iPhone 6S', 'with FaceTime 128 GB 4G LTE Rose Gold', 'a9.jpg', 'Available', 1, '5400', ''),
(87, 'Apple iPhone 8 Plus ', 'without FaceTime 64 GB 4G LTE Gold', 'a10.jpg', 'Available', 1, '89700', ''),
(88, 'Samsung Galaxy S20 Plus ', 'Dual SIM 128 GB RAM 5G GREy', 's10.jpg', 'Available', 3, '12499', ''),
(89, 'Huawei Nova 7', 'Dual SIM 256 GB 8 GB RAM 5G Space Silver', 'h6.jpg', 'Available', 2, '6825', ''),
(90, 'Huawei Y9a Mobile Phone', 'Dual SIM 128 GB 8 GB RAM 4G LTE Sakura Pink with PowerBank ', 'h7.jpg', 'Available', 2, '4399', ''),
(91, 'Huawei Nova 7SE', 'Dual SIM 128 GB 8 GB RAM 4G LTE Space Silver', 'h8.jpg', 'Available', 2, '4666', ''),
(92, 'Huawei P30', 'Dual SIM 128 GB 8 GB RAM 4G LTE Aurora ', 'h9.jpg', 'Available', 2, '7999', ''),
(93, 'Huawei Y6p', 'Dual SIM 64 GB 3 GB RAM 4G LTE Midnight Black', 'h10.jpg', 'Available', 2, '2450', '');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `category`) VALUES
(1, 'Apple'),
(2, 'Huawei'),
(3, 'Samsung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custId`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depid` (`depid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodId`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`depid`) REFERENCES `departments` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`custId`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`prodId`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
