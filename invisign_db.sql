-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2021 at 09:49 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invisign_db`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_details_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `product_details_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/gallery/tXaS9M1KN6PsDrinuhJRwYmqpUsYciZnHaQH1wda.jpg', NULL, '2021-12-21 02:17:38', '2021-12-21 02:27:21'),
(2, 2, 'assets/gallery/Wx2aNNk43GAXbSyXjXoCS7bMcg3VqxnCYdA4ApCg.jpg', NULL, '2021-12-21 02:30:40', '2021-12-21 02:30:40'),
(3, 3, 'assets/gallery/eDaLbFUCVYrWOj1UWmsUpoIqFufycKZtswe39d8t.png', NULL, '2021-12-21 02:32:27', '2021-12-21 02:32:27');

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
(4, '2021_05_30_040502_create_product_details_table', 1),
(5, '2021_05_30_042020_create_galleries_table', 1),
(6, '2021_05_30_042837_create_transactions_table', 1),
(7, '2021_05_30_070709_add_roles_field_to_users_table', 1),
(8, '2021_05_30_131117_add_username_field_to_users_table', 1),
(9, '2021_06_20_123943_create_product_types_table', 1),
(10, '2021_06_20_182924_create_product_discounts_table', 1),
(11, '2021_06_23_025520_add_product_types_id_to_product_details_table', 1),
(12, '2021_06_24_233637_add_bukti_transfer_to_transactions_table', 1),
(13, '2021_06_25_135324_create_testimonies_table', 1),
(14, '2021_09_16_115502_add_status_to_product_discounts_table', 1);

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
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_types_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `title`, `slug`, `type`, `about`, `price`, `deleted_at`, `created_at`, `updated_at`, `product_types_id`) VALUES
(1, 'SI-001', 'si-001', 'Invitation', 'Static Invitation', 50000, NULL, '2021-12-21 02:14:59', '2021-12-21 02:28:09', 1),
(2, 'SI-002', 'si-002', 'Invitation', 'Static Invitation', 50000, NULL, '2021-12-21 02:28:36', '2021-12-21 02:31:09', 1),
(3, 'VA-001', 'va-001', 'Vector Art', 'Vector Art', 75000, NULL, '2021-12-21 02:31:53', '2021-12-21 02:31:53', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_discounts`
--

CREATE TABLE `product_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pakages_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `start_at` timestamp NOT NULL,
  `end_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_discounts`
--

INSERT INTO `product_discounts` (`id`, `pakages_id`, `title`, `amount`, `start_at`, `end_at`, `deleted_at`, `created_at`, `updated_at`, `status`) VALUES
(1, 0, 'Reguler', '0.00', '2021-12-20 17:00:00', '2025-12-20 17:00:00', NULL, '2021-12-21 01:57:24', '2021-12-21 01:57:24', 'ACTIVE'),
(2, 0, 'HOT DEALS', '0.50', '2021-12-20 17:00:00', '2022-01-09 17:00:00', NULL, '2021-12-21 02:13:21', '2021-12-21 02:13:29', 'HIGHLIGHT');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_discounts_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initial_price` int(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `product_discounts_id`, `title`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `initial_price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Static Invitation', 'Format Invitation (.jpg)', 'Max 2 Photo', 'Minor Revision (Free)', '3-5 Days working process', 50000, NULL, '2021-12-21 02:03:11', '2021-12-21 02:03:11'),
(2, 1, 'Video Invitation', 'Format Invitation (.mp4)', 'Max 5 Photo', 'Minor Revision (Free)', '1-2 Weeks working process', 85000, NULL, '2021-12-21 02:04:25', '2021-12-21 02:04:25'),
(3, 1, 'Website Invitation', 'couplename.invisign.my.id', 'QR Code Location Map', 'Major Revision (+10000)', '2-4 Weeks working process', 200000, NULL, '2021-12-21 02:06:43', '2021-12-21 02:06:43'),
(4, 1, 'Other Design (Vector/Product/Cloth)', 'Format Invitation (.jpg)', 'Major Revision (+20000)', 'Base on Request', '1-4 Weeks working process', 100000, NULL, '2021-12-21 02:08:58', '2021-12-21 02:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `testimony` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_details_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bukti_transfer` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `product_details_id`, `users_id`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`, `bukti_transfer`) VALUES
(1, 1, 1, 50000, 'PENDING', NULL, '2021-12-21 02:36:59', '2021-12-21 02:41:13', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'SuperAdmin', 'admin@gmail.com', '2021-12-21 07:24:37', '$2y$10$5/L5rAGG9iT4KCpd0CCOCuWmbfiaScZN4KkSjggj4y9izPgd//1a2', NULL, '2021-12-21 00:22:02', '2021-12-21 00:22:02', 'ADMIN', 'admin'),
(2, 'Annetta Tillman', 'predovic.kiley@example.com', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4gk4EA2RgE', '2021-12-21 00:58:37', '2021-12-21 00:58:37', 'USER', 'Otis Block'),
(3, 'Elinore Gibson', 'tboehm@example.com', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9ke1hKvTj1', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Miss Rosemary Mosciski'),
(4, 'Gillian Little', 'thill@example.net', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4YRTeXDpOQ', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Addie Herman'),
(5, 'Nickolas Windler DVM', 'julius91@example.com', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'edeKhdESRv', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Elody Runolfsson'),
(6, 'Rosamond Champlin', 'percy03@example.com', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nBTpcK1T7a', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Garfield Raynor'),
(7, 'Dr. Doris Wilderman II', 'mtowne@example.com', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JO6HSFcECY', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Minerva Huel'),
(8, 'Octavia Williamson', 'rgutmann@example.com', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6sviLTBfRB', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Axel Wiza'),
(9, 'Wilfred Emard', 'adolfo22@example.net', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'idccJlPBuL', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Dr. Sadie Auer V'),
(10, 'Elroy Thompson DDS', 'vcollier@example.org', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'msgoTO7qDm', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Lorenza Strosin'),
(11, 'Agnes Jacobson', 'dortha79@example.com', '2021-12-21 00:58:37', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PobdmlLZl7', '2021-12-21 00:58:38', '2021-12-21 00:58:38', 'USER', 'Zora Rippin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_discounts`
--
ALTER TABLE `product_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_discounts`
--
ALTER TABLE `product_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
