-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 03:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firnuture`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(12) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'seatting furniture', 'seating.jpg', '2023-06-29 14:53:09', '2023-06-29 14:53:09'),
(2, 'storage furniture', 'Capturest.jpg', '2023-07-08 01:30:26', '2023-07-13 13:48:03'),
(3, 'sleeping furniture', 'sleeping.jpg', '2023-07-08 01:30:50', '2023-07-13 13:47:34'),
(4, 'dining furniture', 'diningf.jpg', '2023-07-08 01:31:05', '2023-07-13 13:47:12'),
(5, 'Accessing furniture', 'carpet.jpg', '2023-07-08 01:31:22', '2023-07-13 13:46:53'),
(6, 'Office furniture', 'st.jpg', '2023-07-08 01:31:34', '2023-07-13 13:46:30'),
(9, 'outdoor furniture', '1689210809.jpg', '2023-07-13 08:13:29', '2023-07-13 13:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_14_163917_create_products_table', 2),
(6, '2023_06_16_232051_create_carts_table', 3),
(7, '2023_06_18_023300_create_orders_table', 4),
(8, '2023_06_29_070046_create_categories_table', 5),
(9, '2023_07_12_225815_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(16) NOT NULL,
  `payment_stutus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `price`, `quantity`, `client_name`, `email`, `phone`, `address`, `product_id`, `user_id`, `owner_id`, `payment_stutus`, `created_at`, `updated_at`) VALUES
(1, 'bed', 250000, 1, 'kaka', 'kaka@gmail.com', '22222', '12333', '2', '12', 0, 'proccessing', '2023-06-18 09:55:12', '2023-06-18 09:55:12'),
(2, 'bed', 250000, 1, 'kaka', 'kaka@gmail.com', '22222', '12333', '2', '12', 0, 'processing', '2023-06-18 09:55:12', '2023-06-18 09:55:12'),
(3, 'chair', 12000, 1, 'kaka', 'kaka@gmail.com', '22222', '12333', '13', '12', 13, 'payed', '2023-06-18 12:59:24', '2023-06-18 15:04:46'),
(4, 'chair', 12000, 1, 'kaka', 'kaka@gmail.com', '22222', '12333', '13', '12', 13, 'payed', '2023-06-18 12:59:24', '2023-06-18 15:12:15'),
(5, 'kaka', 250000, 1, 'kaka', 'kaka@gmail.com', '22222', '12333', '12', '12', 14, 'proccessing', '2023-06-18 13:11:45', '2023-06-18 13:11:45'),
(6, 'nnnn', 250000, 1, 'kaka', 'kaka@gmail.com', '22222', '12333', '11', '12', 13, 'payed', '2023-06-18 15:51:09', '2023-06-18 15:51:47'),
(7, 'kaka', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '12', '17', 0, 'proccessing', '2023-06-23 10:03:08', '2023-06-23 10:03:08'),
(8, 'kaka', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '12', '17', 0, 'proccessing', '2023-06-23 10:03:08', '2023-06-23 10:03:08'),
(9, 'bed', 250000, 2, 'kk', 'kk@gmail.com', '66666', 'hhhh', '2', '17', 0, 'proccessing', '2023-06-23 10:03:08', '2023-06-23 10:03:08'),
(10, 'bed', 250000, 3, 'kk', 'kk@gmail.com', '66666', 'hhhh', '2', '17', 0, 'proccessing', '2023-06-23 10:08:16', '2023-06-23 10:08:16'),
(11, 'bed', 250000, 2, 'kk', 'kk@gmail.com', '66666', 'hhhh', '1', '17', 0, 'proccessing', '2023-06-23 10:10:14', '2023-06-23 10:10:14'),
(12, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '2', '17', 0, 'proccessing', '2023-06-25 00:11:27', '2023-06-25 00:11:27'),
(13, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 00:13:42', '2023-06-25 00:13:42'),
(14, 'sheffield-with-studs-min', 20000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '7', '17', 0, 'proccessing', '2023-06-25 00:13:42', '2023-06-25 00:13:42'),
(15, 'bed', 250000, 2, 'kk', 'kk@gmail.com', '66666', 'hhhh', '2', '17', 0, 'proccessing', '2023-06-25 00:13:42', '2023-06-25 00:13:42'),
(16, 'bed', 250000, 3, 'kk', 'kk@gmail.com', '66666', 'hhhh', '1', '17', 0, 'proccessing', '2023-06-25 00:16:28', '2023-06-25 00:16:28'),
(17, 'bed', 250000, 2, 'kk', 'kk@gmail.com', '66666', 'hhhh', '1', '17', 0, 'proccessing', '2023-06-25 00:51:06', '2023-06-25 00:51:06'),
(18, 'kaka', 250000, 3, 'kk', 'kk@gmail.com', '66666', 'hhhh', '12', '17', 14, 'proccessing', '2023-06-25 00:52:02', '2023-06-25 00:52:02'),
(19, 'choir', 250000, 3, 'kk', 'kk@gmail.com', '66666', 'hhhh', '11', '17', 13, 'proccessing', '2023-06-25 00:52:02', '2023-06-25 00:52:02'),
(20, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '1', '17', 0, 'proccessing', '2023-06-25 01:26:50', '2023-06-25 01:26:50'),
(21, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '2', '17', 0, 'proccessing', '2023-06-25 01:27:49', '2023-06-25 01:27:49'),
(22, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 01:31:33', '2023-06-25 01:31:33'),
(23, 'dark brown', 250000, 2, 'kk', 'kk@gmail.com', '66666', 'hhhh', '4', '17', 0, 'proccessing', '2023-06-25 01:32:47', '2023-06-25 01:32:47'),
(24, 'dark brown', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '4', '17', 0, 'proccessing', '2023-06-25 01:35:33', '2023-06-25 01:35:33'),
(25, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 01:40:57', '2023-06-25 01:40:57'),
(26, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 01:44:20', '2023-06-25 01:44:20'),
(27, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 01:55:35', '2023-06-25 01:55:35'),
(28, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 01:55:35', '2023-06-25 01:55:35'),
(29, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 01:59:20', '2023-06-25 01:59:20'),
(30, 'bed', 250000, 2, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 01:59:55', '2023-06-25 01:59:55'),
(31, 'bed', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '3', '17', 0, 'proccessing', '2023-06-25 02:00:36', '2023-06-25 02:00:36'),
(32, 'dark brown', 250000, 2, 'kk', 'kk@gmail.com', '66666', 'hhhh', '4', '17', 0, 'proccessing', '2023-06-25 02:00:36', '2023-06-25 02:00:36'),
(33, 'dark brown', 250000, 1, 'kk', 'kk@gmail.com', '66666', 'hhhh', '4', '17', 0, 'proccessing', '2023-06-25 02:04:36', '2023-06-25 02:04:36'),
(34, 'hampton_ottoman-bedframe__lifestyle', 2000000, 2, 'roro', 'roro@gmail.com', '0789932372', 'huye', '5', '16', 0, 'proccessing', '2023-07-14 09:48:53', '2023-07-14 09:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(16) NOT NULL,
  `phone` int(16) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(16) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `more_description`, `quantity`, `price`, `image`, `owner_name`, `email`, `owner_id`, `phone`, `address`, `cat_id`, `category`, `created_at`, `updated_at`) VALUES
(4, 'dark brown', 'The bed has a strong and sturdy construction   ', '', 0, 250000, '1686800491.jpg', '', '', 0, 0, '', 3, 'Sleep furniture', '2023-06-15 10:41:31', '2023-06-25 02:04:36'),
(5, 'hampton_ottoman-bedframe__lifestyle', 'beds, divans with storage, and luxurious statement bed frames.', '', 1, 2000000, '1686801209.jpeg', '', '', 0, 0, '', 3, 'Sleep furniture', '2023-06-15 10:53:29', '2023-07-14 09:48:53'),
(6, 'WALNUT-LEITH-MODERN-BED', 'The Leith is a stylish, contemporary bed ', '', 3, 2000000, '1686801621.jpg', '', '', 0, 0, '', 3, 'Sleep furniture', '2023-06-15 11:00:21', '2023-06-15 11:00:21'),
(7, 'sheffield-with-studs-min', 'For non-ottoman beds: 25cm', '', 3, 20000, '1686804082.webp', '', '', 0, 0, '', 3, 'Sleep furniture', '2023-06-15 11:41:22', '2023-06-15 11:41:22'),
(8, 'Cupboard-with-Sliding-Doors', 'Cupboard-with-Sliding-Doors', '', 10, 20000, '1686804590.jpg', '', '', 0, 0, '', 1, 'seatting furniture', '2023-06-15 11:49:50', '2023-06-15 11:49:50'),
(9, 'cupboard', ' It features 2 mirror doors ', '', 2, 20000, '1686806408.jpg', '', '', 0, 0, '', 1, 'seatting furniture', '2023-06-15 12:20:08', '2023-06-15 12:20:08'),
(14, 'dining', '4 chair and table', 'it made in original wood from Gabon and congo', 3, 250000, '1687716354.jpg', 'claude', 'claude@gmail.com', 13, 5555, 'hff', 1, 'seatingfurniture', '2023-06-26 01:05:54', '2023-06-26 01:05:54'),
(16, 'chair', 'value=\"all needed\"', 'value=\"all needed\"', 3, 250000, '1689230138.jpg', 'claude', 'claude@gmail.com', 13, 5555, 'hff', 1, 'seatting furniture', '2023-06-29 15:25:02', '2023-07-13 13:35:38'),
(18, 'bed', 'value=\"eeeeeeeeeeee\"', 'value=\"eeeeeeeeeeee\"', 3, 250000, '1689230104.jpg', 'claude', 'claude@gmail.com', 13, 5555, 'hff', 1, 'seatting furniture', '2023-07-10 12:36:09', '2023-07-13 13:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'admin', 'admin@gmail.com', '2', '08777', 'huye', NULL, '$2y$10$9gpBmrZqNShfyyIdUiOQfO3bTWum8.HXP0H6O9gxqYf6oSNh9N572', NULL, '2023-06-10 05:06:42', '2023-06-10 05:06:42'),
(11, 'leon', 'leon@gmail.com', '0', '07899999', 'huye', NULL, '$2y$10$.gEgKHkw9pAMD9rLaEW3aORYw5zIPDbKk/7QfrNMCrq4fUcuF.t0a', NULL, '2023-06-10 05:10:30', '2023-06-10 05:10:30'),
(12, 'kaka', 'kaka@gmail.com', '0', '22222', '12333', NULL, '$2y$10$ZHnze3fcyl2lGYpeGjoZDukuVSAILtLCetABLkAGjxZF4aF1vt0ke', NULL, '2023-06-10 05:57:43', '2023-06-10 05:57:43'),
(13, 'claude', 'claude@gmail.com', '1', '5555', 'hff', NULL, '$2y$10$9gpBmrZqNShfyyIdUiOQfO3bTWum8.HXP0H6O9gxqYf6oSNh9N572', NULL, '2023-06-10 08:00:38', '2023-06-10 08:00:38'),
(14, 'leon tunka', 'tunka@gmail.com', '1', '0789932372', 'huye', NULL, '$2y$10$.p.zn/juDHvfKwcwsvt0o.TAZEdO8kZhMkac3MCbiUsxzR/AfSOCe', NULL, '2023-06-16 06:19:43', '2023-06-16 06:19:43'),
(15, 'teo', 'teo@gmail.com', '0', '089999999', 'huye', NULL, '$2y$10$HzZXIZgjNfCVSf0qHbcNWeSWhhwhpabPh3uyNqi47cGRAXXQk38UG', NULL, '2023-06-17 08:11:33', '2023-06-17 08:11:33'),
(16, 'roro', 'roro@gmail.com', '0', '0789932372', 'huye', NULL, '$2y$10$xVTvxvF5VNHyoTMTUZMRW.W2maZ461JVDYHZAmCw9J3VBjNFGnojS', NULL, '2023-06-17 08:15:14', '2023-07-08 13:02:43'),
(21, 'philly', 'philly@gmail.com', '0', '0789932372', 'huye', NULL, '$2y$10$WXwBMjjXwfHbsOxTkQrw4OxJ8N0LNayf3awJIJ8XiKY.w5aR8oipe', NULL, '2023-07-08 15:52:57', '2023-07-08 15:52:57'),
(22, 'titi', 'titi@gmail.com', '0', '999999', 'huye', NULL, '$2y$10$WD3wx4VebMAswPVkgKmHr.Fr7T3P1dOoqxMwOvdMp.ftrkYgvhuBO', NULL, '2023-07-13 07:05:30', '2023-07-13 07:05:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
