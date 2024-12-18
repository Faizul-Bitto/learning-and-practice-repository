-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 09:16 PM
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
-- Database: `product_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_11_04_111950_create_products_table', 1),
(2, '2024_11_04_123046_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `description`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(1, 'df193a44-e159-4325-90bf-9c25cf85ccba', 'et', 'Rerum neque repudiandae ullam aut aut.', 86.28, 37, 'https://via.placeholder.com/640x480.png/00ff44?text=hic', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(2, 'bf4b2e73-b445-4769-9b2e-c3860674cd09', 'neque', 'Et vero quam tempore ipsam voluptas molestiae.', 154.11, 32, 'https://via.placeholder.com/640x480.png/009999?text=cum', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(3, 'c7360803-5a05-4cc3-829c-2dd16296697b', 'ut', 'Labore ut sint ratione qui non.', 70.67, 47, 'https://via.placeholder.com/640x480.png/006622?text=blanditiis', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(4, 'ee61eec7-4c32-41c2-a60d-ad260ce53802', 'fuga', 'In asperiores dolorem fugit eos et.', 121.13, 73, 'https://via.placeholder.com/640x480.png/003300?text=cumque', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(5, '89b9c315-39a1-4934-b4d3-1c54c4c1397c', 'cumque', 'Sequi facere laudantium eos.', 47.71, 19, 'https://via.placeholder.com/640x480.png/00cc66?text=optio', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(6, '62cbfb34-6541-48d7-a3d6-fc5884a8d578', 'asperiores', 'Nulla maxime consectetur accusantium.', 30.84, 168, 'https://via.placeholder.com/640x480.png/00ee55?text=tenetur', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(7, 'a753ec73-f4f4-4568-b4c3-830e5401bb30', 'nam', 'Ipsam nostrum quos temporibus totam.', 176.28, 84, 'https://via.placeholder.com/640x480.png/000055?text=doloremque', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(8, 'aa754b6d-19e3-4d2d-82bb-302b9fbc749a', 'et', 'Deleniti ab ex fuga repellat.', 112.74, 85, 'https://via.placeholder.com/640x480.png/005544?text=provident', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(9, '5743a4b3-06c3-4d84-ac68-bcc516b51bf4', 'facilis', 'Eaque et voluptatum veritatis corporis officiis.', 57.29, 194, 'https://via.placeholder.com/640x480.png/00dd22?text=voluptatibus', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(10, '677d5728-4024-4a1c-a2a2-c19bde299b6f', 'earum', 'Placeat itaque fuga eum ratione et perferendis.', 80.18, 138, 'https://via.placeholder.com/640x480.png/00ff00?text=voluptates', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(11, '5feee9f0-f8f7-4101-912d-75159ec87a0e', 'aut', 'Nobis consequatur cupiditate enim dolores quo.', 47.29, 125, 'https://via.placeholder.com/640x480.png/001133?text=tempora', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(12, 'f3c3e277-1afb-4f99-8bb3-13f12ca69ac6', 'doloremque', 'Sed eius et adipisci.', 27.80, 144, 'https://via.placeholder.com/640x480.png/0088ee?text=alias', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(13, '39443671-5cfd-464b-843e-951097871ea1', 'nihil', 'Voluptates corporis ullam nam.', 141.75, 70, 'https://via.placeholder.com/640x480.png/0011bb?text=doloribus', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(14, '3c2411b5-9026-409c-90ea-5bfbacf2c64b', 'architecto', 'Recusandae sint quisquam consectetur non.', 146.54, 17, 'https://via.placeholder.com/640x480.png/008822?text=repellendus', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(15, '5d8fdc82-d820-48f0-b368-cf9e769d0af9', 'possimus', 'Laboriosam unde rerum reprehenderit minus quae dolorem.', 123.02, 14, 'https://via.placeholder.com/640x480.png/007700?text=et', '2024-11-06 12:01:58', '2024-11-06 12:01:58'),
(17, 'ea134016-7e94-4dd4-ae89-153fe80f05b1', 'Rose', 'Rose', 10.00, 10, 'uploads/Rose.jpg', '2024-11-06 13:49:47', '2024-11-06 13:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('E9u4cDzkgdnmEebh3hUN28gW4NNx60qcu1nDOza6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzlUb1pXVGxRT1dmaDNsbkY4V0pScVhtMlo1ZjZpb3gzZ0s2RlBqRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730923025);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_id_unique` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
