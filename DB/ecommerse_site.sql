-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 02:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerse_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Samsung 1', '1', '2020-09-12 04:27:02', '2020-09-12 04:27:02');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `Catagory`, `Status`, `created_at`, `updated_at`) VALUES
(3, 'Men', 1, '2020-09-07 05:42:16', '2020-09-07 05:42:16'),
(4, 'Woman', 1, '2020-09-07 05:42:25', '2020-09-07 05:42:25'),
(5, 'Child', 1, '2020-09-07 05:42:44', '2020-09-07 05:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` int(11) DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_num`, `pass`, `created_at`, `updated_at`) VALUES
(1, 'tanvirul islam', 'mizan@gmail.com', 123456789, '$2y$10$A6WXOE6e3ajbSqDjQUiL5u665kBIibdzHWafZeeSotbLuSsFLEINa', '2020-09-24 01:05:43', '2020-09-24 01:05:43'),
(2, 'tanvir', 'tanvir@gmail.com', 12345678, '$2y$10$DNsN1IIRnbq/F.Q.5Dqxd.HZOvqv9Vzy7P59Yx0uOdu/D3C8BJLja', '2020-09-26 07:48:57', '2020-09-26 07:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'egg', '1', '2020-09-08 00:02:40', '2020-09-08 00:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_28_115927_create_catagories_table', 1),
(5, '2020_08_28_120118_create_products_table', 1),
(6, '2020_08_31_155103_create_brands_table', 1),
(7, '2020_09_01_082611_create_food_table', 1),
(8, '2020_09_01_161032_create_subcatagories_table', 1),
(9, '2020_09_21_154833_create_shippings_table', 2),
(10, '2020_09_21_155223_create_orders_table', 2),
(11, '2020_09_21_155415_create_order_details_table', 2),
(12, '2020_09_24_044930_create_customers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(20) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `shipping_id`, `order_id`, `pin`, `order_total`, `status`, `created_at`, `updated_at`) VALUES
(11, 1, 14, NULL, 'PUR-41791909', 2400, 1, '2020-09-24 02:15:37', '2020-09-24 02:15:37'),
(12, 2, 15, NULL, 'PUR-38947427', 800, 0, '2020-09-26 07:49:21', '2020-09-26 07:49:21'),
(13, 2, 16, NULL, 'PUR-38008728', 800, 0, '2020-09-26 07:49:21', '2020-09-26 07:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(20) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_total` double(8,2) DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `user_id`, `shipping_id`, `product_id`, `product_name`, `order_id`, `product_price`, `product_quantity`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(2, 1, 14, 11, 'Shoes', '11', 2400.00, 1, 2400.00, '1', '2020-09-24 02:15:37', '2020-09-24 02:15:37'),
(3, 2, 15, 14, 'Three pieces', '12', 800.00, 1, 800.00, 'pending', '2020-09-26 07:49:21', '2020-09-26 07:49:21'),
(4, 2, 16, 14, 'Three pieces', '13', 800.00, 1, 800.00, 'pending', '2020-09-26 07:49:21', '2020-09-26 07:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Catagory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcatagory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productdis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(15) NOT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Catagory_id`, `subcatagory_id`, `productname`, `productdis`, `color`, `picture`, `price`, `status`, `created_at`, `updated_at`) VALUES
(5, '4', '3', 'borkha', 'nice borkha', 'black', 'public/upload/UT8N9KCXRVXXXagOFbXS.jpg', 700, 1, '2020-09-07 08:30:02', '2020-09-13 10:01:56'),
(6, '3', '2', 'Jeans', 'Double XL', 'blue', 'public/upload/pant .jpg', 900, 1, '2020-09-09 11:11:07', '2020-09-09 11:11:07'),
(7, '3', '2', 'Gabardine Pant', 'XL', 'black', 'public/upload/smallimage1.jpg', 500, 1, '2020-09-09 11:12:48', '2020-09-13 22:31:28'),
(8, '5', '4', 'Ball', 'Tanis', 'green', 'public/upload/tb530-competition-tennis-balls-3-pack-yellow_5_.jpg', 120, 1, '2020-09-09 11:14:12', '2020-09-13 10:02:11'),
(9, '5', '5', 'Peanut bar', '100 Pieces', 'black', 'public/upload/bars-peanuts-isolated-closeup-on-260nw-500501503.webp', 14, 1, '2020-09-12 04:19:21', '2020-09-12 04:19:21'),
(10, '3', '7', 'T-shirt', 'XL', 'black', 'public/upload/2-pcs-lot-t-shirt-men-tumblr-skateboard-hip.jpg', 350, 1, '2020-09-13 00:04:33', '2020-09-13 00:04:33'),
(11, '3', '6', 'Shoes', '38', 'white', 'public/upload/OIP.jpg', 2400, 1, '2020-09-13 00:05:57', '2020-09-13 00:05:57'),
(12, '4', '3', 'blue borkha', 'Ordinary boorkha', 'white', 'public/upload/d05a41fff4181f35a926d00f6be6531a.jpg', 800, 1, '2020-09-13 01:27:00', '2020-09-13 01:27:00'),
(13, '3', '6', 'Yellow shoes', 'size 39', 'yellow', 'public/upload/Men-Sneakers-Fashion-Black-Yellow-Men-Casual-Shoes-Brand-Designer-Shoes-Men-High-Quality-Hip-Hop.webp', 2300, 1, '2020-09-13 03:57:45', '2020-09-13 03:57:45'),
(14, '4', '8', 'Three pieces', 'blue, large, awesome', 'blue', 'public/upload/formals-pret-collection-2020-ofw-243-_2_.jpg', 800, 1, '2020-09-13 07:42:42', '2020-09-13 07:42:42'),
(15, '5', '9', 'PS5', '8x Zen 2 Cores at 3.5GHz (variable frequency)', 'blue', 'public/upload/hqdefault.jpg', 40000, 1, '2020-09-13 07:55:02', '2020-09-13 07:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `email`, `phone_num`, `address`, `message`, `created_at`, `updated_at`) VALUES
(14, 1, 'tanvirulcse480@gmail.com', 123456789, 'mirpur-1', 'argent need', '2020-09-24 02:15:37', '2020-09-24 02:15:37'),
(15, 2, 'tanvir@gmail.com', 123456, 'dhaka', 'thnx', '2020-09-26 07:49:21', '2020-09-26 07:49:21'),
(16, 2, 'tanvir@gmail.com', 123456, 'dhaka', 'thnx', '2020-09-26 07:49:21', '2020-09-26 07:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `subcatagories`
--

CREATE TABLE `subcatagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Catagory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subcatagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcatagories`
--

INSERT INTO `subcatagories` (`id`, `Catagory_id`, `Subcatagory`, `Status`, `created_at`, `updated_at`) VALUES
(2, '3', 'pant', 1, '2020-09-07 05:43:10', '2020-09-07 05:43:10'),
(3, '4', 'borkha', 1, '2020-09-07 05:43:20', '2020-09-07 05:43:20'),
(4, '5', 'ball', 1, '2020-09-07 05:43:28', '2020-09-07 05:43:28'),
(5, '5', 'Chocolate', 1, '2020-09-12 04:16:49', '2020-09-12 04:16:49'),
(6, '3', 'Shoes', 1, '2020-09-13 00:00:40', '2020-09-13 00:00:40'),
(7, '3', 'T-shirt', 1, '2020-09-13 00:01:42', '2020-09-13 00:01:42'),
(8, '4', 'Three pieces', 1, '2020-09-13 07:37:54', '2020-09-13 07:37:54'),
(9, '5', 'video games', 1, '2020-09-13 07:50:53', '2020-09-13 07:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mizan', 'mizan@gmail.com', NULL, '$2y$10$XgdRVGXqmcQFaZn7tZlJQeVpiI5r0E.IxP6ciS7tq7LXN7581E0Je', NULL, '2020-09-04 21:16:46', '2020-09-04 21:16:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcatagories`
--
ALTER TABLE `subcatagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subcatagories`
--
ALTER TABLE `subcatagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
