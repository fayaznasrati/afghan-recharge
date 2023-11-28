-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 02:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afghan_recharge`
--

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operator` varchar(255) NOT NULL,
  `bundleType` varchar(255) NOT NULL,
  `pakName_en` varchar(255) NOT NULL,
  `pakName_ps` varchar(255) NOT NULL,
  `pakName_fa` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `pakDetails_en` varchar(255) DEFAULT NULL,
  `pakDetails_ps` varchar(255) DEFAULT NULL,
  `pakDetails_fa` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `validity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundles`
--

INSERT INTO `bundles` (`id`, `operator`, `bundleType`, `pakName_en`, `pakName_ps`, `pakName_fa`, `price`, `quota`, `code`, `pakDetails_en`, `pakDetails_ps`, `pakDetails_fa`, `status`, `validity`, `created_at`, `updated_at`) VALUES
(1, 'awcc', 'data', 'voice pakage en', 'voice pakage ps', 'voice pakage fa', '200', '10 GB', '*123*1#', 'details', 'details', 'details', 1, '30', '2023-11-28 00:03:52', '2023-11-28 00:03:52'),
(2, 'mtn', 'data', 'data pakage en', 'data pakage ps', 'data pakage fa', '200', '10 GB', '*123*1#', 'details', 'details', 'details', 1, '30', '2023-11-28 00:04:51', '2023-11-28 00:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_activations`
--

CREATE TABLE `bundle_activations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bundle_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `sender_phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currancies`
--

CREATE TABLE `currancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `afghani` varchar(255) NOT NULL,
  `currancyType` varchar(255) NOT NULL,
  `currancy` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currancies`
--

INSERT INTO `currancies` (`id`, `afghani`, `currancyType`, `currancy`, `created_at`, `updated_at`) VALUES
(1, '77', 'US Dollar', '1', '2023-11-28 00:06:57', '2023-11-28 00:19:42'),
(2, '80', 'Canada Erue', '1', '2023-11-28 00:07:14', '2023-11-28 00:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `ebundles`
--

CREATE TABLE `ebundles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `operator` varchar(255) NOT NULL,
  `bundleType` varchar(255) NOT NULL,
  `pakName_en` varchar(255) NOT NULL,
  `pakName_ps` varchar(255) NOT NULL,
  `pakName_fa` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `pakDetails_en` varchar(255) DEFAULT NULL,
  `pakDetails_ps` varchar(255) DEFAULT NULL,
  `pakDetails_fa` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `validity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_15_090617_create_top_ups_table', 1),
(6, '2023_05_23_160538_create_currancies_table', 1),
(7, '2023_05_24_063821_create_ebundles_table', 1),
(8, '2023_06_03_101952_create_bundles_table', 1),
(9, '2023_06_04_080755_create_money_table', 1),
(10, '2023_06_04_085829_create_bundle_activations_table', 1),
(11, '2023_06_06_081233_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currancy_id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `currancy_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, '10', '2023-11-28 00:07:30', '2023-11-28 00:07:30'),
(2, 2, '10', '2023-11-28 00:07:42', '2023-11-28 00:07:42'),
(3, 1, '20', '2023-11-28 00:18:56', '2023-11-28 00:18:56'),
(4, 1, '30', '2023-11-28 00:19:08', '2023-11-28 00:19:08'),
(5, 1, '50', '2023-11-28 00:19:17', '2023-11-28 00:19:17'),
(6, 1, '100', '2023-11-28 00:19:27', '2023-11-28 00:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `top_ups`
--

CREATE TABLE `top_ups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currancyType` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sender_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin fayaz', 'fayaz.nasraty@gmail.com', 1, NULL, '$2y$10$7uw.57tSPtk0X3AOivmX.OsK5qC.yF60crz9QYqvZzPwEXIINYATm', NULL, '2023-11-28 00:01:27', '2023-11-28 00:01:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundle_activations`
--
ALTER TABLE `bundle_activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bundle_activations_bundle_id_foreign` (`bundle_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currancies`
--
ALTER TABLE `currancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebundles`
--
ALTER TABLE `ebundles`
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
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`),
  ADD KEY `money_currancy_id_foreign` (`currancy_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `top_ups`
--
ALTER TABLE `top_ups`
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
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bundle_activations`
--
ALTER TABLE `bundle_activations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currancies`
--
ALTER TABLE `currancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ebundles`
--
ALTER TABLE `ebundles`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `top_ups`
--
ALTER TABLE `top_ups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bundle_activations`
--
ALTER TABLE `bundle_activations`
  ADD CONSTRAINT `bundle_activations_bundle_id_foreign` FOREIGN KEY (`bundle_id`) REFERENCES `bundles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `money`
--
ALTER TABLE `money`
  ADD CONSTRAINT `money_currancy_id_foreign` FOREIGN KEY (`currancy_id`) REFERENCES `currancies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
