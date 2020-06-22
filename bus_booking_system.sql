-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 05:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snap_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_policy` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `activation`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$qNLAX/22JssGmeXeiCeu6.YRSJ95iXAy5RbaVN.8em/LKkqofsnHm', 1, '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Cairo', '2020-06-21 11:39:29', '2020-06-21 11:40:02'),
(3, 'AlFayyum', '2020-06-21 11:55:00', '2020-06-21 11:55:00'),
(4, 'AlMinya', '2020-06-21 11:55:11', '2020-06-21 11:55:11'),
(5, 'Asyut', '2020-06-21 11:55:17', '2020-06-21 11:55:17'),
(6, 'Aswan', '2020-06-21 11:55:29', '2020-06-21 11:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_19_094009_create_about_table', 1),
(4, '2019_09_05_130006_create_admins_table', 1),
(5, '2020_02_02_104012_create_cities_table', 1),
(6, '2020_06_21_104314_create_trips_table', 1),
(7, '2020_06_21_104413_create_user_trip_table', 1),
(8, '2020_06_21_104451_create_trip_crosses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_city` bigint(10) UNSIGNED DEFAULT NULL,
  `to_city` bigint(10) UNSIGNED DEFAULT NULL,
  `seats_num` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `title`, `from_city`, `to_city`, `seats_num`, `created_at`, `updated_at`) VALUES
(1, 'Cairo - Aswan', 1, 6, 12, '2020-06-21 12:00:19', '2020-06-21 12:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `trip_crosses`
--

CREATE TABLE `trip_crosses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(10) UNSIGNED DEFAULT NULL,
  `city_id` bigint(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_crosses`
--

INSERT INTO `trip_crosses` (`id`, `trip_id`, `city_id`, `created_at`, `updated_at`) VALUES
(4, NULL, 3, '2020-06-22 10:56:48', '2020-06-22 10:56:48'),
(5, NULL, 4, '2020-06-22 10:56:48', '2020-06-22 10:56:48'),
(6, NULL, 5, '2020-06-22 10:56:48', '2020-06-22 10:56:48'),
(7, 1, 3, NULL, NULL),
(8, 1, 4, NULL, NULL),
(9, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Mahmoud', 'mahmoud@gmail.com', NULL, '$2y$10$d9NSiOZUxlGNkzxe0IcH6ubon4uvMTTdfzKVfht3WAIugfGpBpJ/a', NULL, '2020-06-22 10:22:13', '2020-06-22 10:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_trip`
--

CREATE TABLE `user_trip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(10) UNSIGNED DEFAULT NULL,
  `trip_id` bigint(10) UNSIGNED DEFAULT NULL,
  `from_city` bigint(10) UNSIGNED DEFAULT NULL,
  `to_city` bigint(10) UNSIGNED DEFAULT NULL,
  `num_of_seat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_trip`
--

INSERT INTO `user_trip` (`id`, `user_id`, `trip_id`, `from_city`, `to_city`, `num_of_seat`, `created_at`, `updated_at`) VALUES
(4, 3, 1, 1, 3, 1, '2020-06-22 12:37:19', '2020-06-22 12:37:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
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
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_city` (`from_city`),
  ADD KEY `to_city` (`to_city`);

--
-- Indexes for table `trip_crosses`
--
ALTER TABLE `trip_crosses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_crosses_ibfk_1` (`city_id`),
  ADD KEY `trip_crosses_ibfk_2` (`trip_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_trip`
--
ALTER TABLE `user_trip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_id` (`trip_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `from_city` (`from_city`),
  ADD KEY `to_city` (`to_city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trip_crosses`
--
ALTER TABLE `trip_crosses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_trip`
--
ALTER TABLE `user_trip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_ibfk_1` FOREIGN KEY (`from_city`) REFERENCES `cities` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `trips_ibfk_2` FOREIGN KEY (`to_city`) REFERENCES `cities` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `trip_crosses`
--
ALTER TABLE `trip_crosses`
  ADD CONSTRAINT `trip_crosses_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `trip_crosses_ibfk_2` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `user_trip`
--
ALTER TABLE `user_trip`
  ADD CONSTRAINT `user_trip_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `user_trip_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `user_trip_ibfk_3` FOREIGN KEY (`from_city`) REFERENCES `cities` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `user_trip_ibfk_4` FOREIGN KEY (`to_city`) REFERENCES `cities` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
