-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2026 at 09:20 AM
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
-- Database: `graham_delight_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `full_name`, `email`, `password`, `created_at`) VALUES
(1, 'Administrator', 'admin@grahamdelight.com', 'admin123', '2026-07-31 11:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` enum('Small','Medium','Large') NOT NULL DEFAULT 'Medium',
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `size`, `quantity`, `created_at`) VALUES
(22, 2, 12, 'Small', 1, '2026-11-09 03:51:14'),
(23, 2, 11, 'Small', 1, '2026-11-09 03:57:33'),
(24, 2, 12, 'Medium', 1, '2026-11-09 03:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Fruit'),
(2, 'Coffee'),
(3, 'Chocolate'),
(4, 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `product_id`, `stock`, `last_updated`) VALUES
(1, 1, 26, '2026-11-09 03:47:12'),
(7, 7, 17, '2026-11-09 03:47:12'),
(9, 9, 18, '2026-08-09 11:38:15'),
(10, 10, 16, '2026-08-09 11:40:52'),
(11, 11, 49, '2026-11-09 03:47:12'),
(12, 12, 31, '2026-10-12 01:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `status` enum('Pending','Preparing','Out for Delivery','Delivered','Cancelled') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `total_amount`, `payment_method`, `status`) VALUES
(1, 1, '2026-07-31 11:57:22', 298.00, 'Cash on Delivery', 'Preparing'),
(2, 2, '2026-07-31 11:57:22', 129.00, 'GCash', 'Delivered'),
(3, 1, '2026-08-06 10:03:14', 795.00, 'Cash on Delivery', 'Pending'),
(4, 3, '2026-08-09 11:31:16', 159.00, 'Cash on Delivery', 'Pending'),
(5, 4, '2026-08-09 11:44:42', 597.00, 'GCash', 'Pending'),
(7, 6, '2026-08-22 08:07:59', 160.00, 'Cash on Delivery', 'Pending'),
(8, 10, '2026-09-23 08:20:50', 160.00, 'Cash on Delivery', 'Pending'),
(9, 2, '2026-10-12 02:09:07', 447.00, 'Cash on Delivery', 'Pending'),
(10, 2, '2026-11-08 01:35:51', 119.00, 'Cash on Delivery', 'Pending'),
(11, 2, '2026-11-09 03:47:12', 715.00, 'Cash on Delivery', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size` enum('Small','Medium','Large') NOT NULL DEFAULT 'Medium',
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `size`, `quantity`, `price`) VALUES
(1, 1, 1, 'Medium', 2, 149.00),
(3, 3, 7, 'Medium', 5, 159.00),
(4, 4, 7, 'Medium', 1, 159.00),
(5, 5, 1, 'Medium', 1, 149.00),
(6, 5, 7, 'Medium', 1, 159.00),
(7, 5, 9, 'Medium', 1, 129.00),
(8, 5, 10, 'Medium', 1, 160.00),
(10, 7, 10, 'Medium', 1, 160.00),
(11, 8, 10, 'Medium', 1, 160.00),
(12, 9, 12, 'Medium', 3, 149.00),
(13, 10, 11, 'Medium', 1, 119.00),
(14, 11, 1, 'Medium', 3, 149.00),
(15, 11, 7, 'Medium', 1, 159.00),
(16, 11, 11, 'Medium', 1, 109.00);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_status` enum('Pending','Paid','Failed') DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `order_id`, `payment_method`, `payment_status`, `payment_date`) VALUES
(1, 1, 'Cash on Delivery', 'Pending', '2026-07-31 11:57:22'),
(2, 2, 'GCash', 'Paid', '2026-07-31 11:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Available','Out of Stock') DEFAULT NULL,
  `featured` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `description`, `price`, `image`, `status`, `featured`, `created_at`) VALUES
(1, 1, 'Pineapplemisu', 'Creamy pineapple graham dessert.', 149.00, 'pineapplemisu.jpeg', 'Available', 1, '2026-07-31 11:57:22'),
(7, 2, 'tiramisu', 'coffee cake', 159.00, 'tiramisu.jpeg', 'Available', 0, '2026-08-04 12:28:36'),
(9, 4, 'mango graham', 'fresh mango layered with graham crackers', 129.00, 'mangograham.jpeg', 'Available', 0, '2026-08-09 11:38:15'),
(10, 3, 'choco graham', 'choco flavor graham', 160.00, 'chocograham.png', 'Available', 0, '2026-08-09 11:40:52'),
(11, 4, 'Mango Shake Graham', 'Mango Graham Shake with special topings', 119.00, 'mangoshakegraham.jpg', 'Available', 0, '2026-10-12 01:23:42'),
(12, 4, 'Graham Cake', 'Special Mango Graham Cake', 149.00, 'mango_graham_cake.webp', 'Available', 0, '2026-10-12 01:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `product_size_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`product_size_id`, `product_id`, `size_name`, `price`) VALUES
(1, 12, 'Small', 99.00),
(2, 12, 'Medium', 109.00),
(3, 12, 'Large', 119.00),
(4, 11, 'Small', 99.00),
(5, 11, 'Medium', 109.00),
(6, 11, 'Large', 119.00),
(7, 10, 'Small', 139.00),
(8, 10, 'Medium', 149.00),
(9, 10, 'Large', 159.00),
(10, 9, 'Small', 129.00),
(11, 9, 'Medium', 134.00),
(12, 9, 'Large', 144.00),
(13, 7, 'Small', 99.00),
(14, 7, 'Medium', 109.00),
(15, 7, 'Large', 114.00),
(16, 1, 'Small', 149.00),
(17, 1, 'Medium', 154.00),
(18, 1, 'Large', 164.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` enum('Customer','Admin') DEFAULT 'Customer',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `contact`, `address`, `password`, `created_at`, `role`, `status`) VALUES
(1, 'Maria', 'Santos', 'maria@gmail.com', '09123456789', 'Legazpi City', '123456', '2026-07-31 11:57:22', 'Customer', 'Inactive'),
(2, 'John', 'Cruz', 'john@gmail.com', '09987654321', 'Daraga, Albay', '123456', '2026-07-31 11:57:22', 'Customer', 'Active'),
(3, 'Juan', 'Dela Cruz', 'juan@gmail.com', '09123456789', 'Legazpi City', '$2y$10$rKYuCx5oGg9QSN5clEaon.JYmahQwS9VYKmWjdwxAdhHnD0EM.TIO', '2026-08-08 11:08:00', 'Customer', 'Active'),
(4, 'cedric', 'manly', 'Cedric@email.com', '09257383963', 'lapu lapu', '$2y$10$LLNsRAKXfZJ6brzjoyi6FeX5UFsPZtjIYcobKTqbosjJBMOX5pfmq', '2026-08-09 11:43:41', 'Customer', 'Active'),
(5, 'raine', 'manly', 'raine@gmail.com', '09549840721', 'lapu lapu st. legazpi city', '$2y$10$qql3Zh4PCnmK4C9n07GjXuhx7DAQxt34kLmAAL2c3EUuS6vpkAd8i', '2026-08-17 12:27:05', 'Customer', 'Active'),
(6, 'Jared', 'Guillermo', 'jared@gmail.com', '09123457689', 'legazpi city', '$2y$10$APbKcbZRNSZAjgsrmTlcKuuKxRlS28.7utdEhF6EFqAqI/VVbBD1a', '2026-08-22 08:02:30', 'Customer', 'Active'),
(7, 'Marcus', 'Vargas', 'marcus@gmail.com', '09123456789', 'dapdap legazpi city', '$2y$10$ffZUgSm7IqzKDmjqcpRNWuzmF88MTsJ3x475WCqCkFf9vZk9az5mi', '2026-09-17 10:59:02', 'Customer', 'Active'),
(8, 'mae', 'dela cruz', 'mae@gmail.com', '09123456789', 'dapdap legazpi city', '$2y$10$Z74BfvODTnYBTceiJB1FQemzFilUpLewREDy57l4QDrAQCcT2NAVe', '2026-09-18 13:25:05', 'Customer', 'Active'),
(9, 'nida', 'manly', 'nida@gmail.com', '09123456789', 'lapu lapu', '$2y$10$B8cVlZFx.0szg6h4cO9S7ebuHyXwb55vPQRuUe0cZESqOp1XCCeee', '2026-09-19 06:02:48', 'Customer', 'Active'),
(10, 'dina', 'natuto', 'dina@gmail.com', '09123456789', 'lapu lapu', '$2y$10$KfMSL4AKTtLkaNM1oRqbpeF0EmdxW4upfwBzJuP1TbIwnnOQCflsO', '2026-09-23 05:26:07', 'Customer', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`product_size_id`),
  ADD UNIQUE KEY `uq_product_size_name` (`product_id`,`size_name`),
  ADD KEY `idx_product_sizes_product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `product_size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
