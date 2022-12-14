-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2022 at 11:07 AM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theklozet_bahja_latest`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_instruction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_id` bigint(20) DEFAULT NULL,
  `shipping` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address_name`, `user_name`, `area`, `block`, `address`, `address1`, `phone`, `city`, `country`, `delivery_instruction`, `user_id`, `status`, `created_at`, `updated_at`, `address_id`, `shipping`) VALUES
(8, 'Office', 'asdasdasdasd', '606', '56', 'United Kingdom', NULL, '000000', NULL, NULL, '13123123123123', NULL, 'active', '2022-09-12 06:42:18', '2022-09-12 06:42:18', NULL, NULL),
(9, 'Abc', 'Singh', '602', 'B block', '2386', NULL, '987654321', NULL, NULL, 'no', NULL, 'active', '2022-09-14 09:14:46', '2022-09-14 09:14:46', NULL, NULL),
(11, 'Office', 'Jone', '606', '20', 'United Kingdom', NULL, '1233123123', NULL, NULL, '13123123123123', NULL, 'active', '2022-09-15 14:34:25', '2022-09-15 14:34:25', NULL, NULL),
(12, 'test', 'test test', '581', 'B block', '2333', NULL, '16984092123', NULL, NULL, 'no', NULL, 'active', '2022-09-16 03:59:20', '2022-09-16 03:59:20', NULL, NULL),
(13, 'Office', 'hfghfgh', '533', '20', 'United Kingdom', NULL, '1233123123', NULL, NULL, 'hddgdgdfgdgdfgdfgdf', NULL, 'active', '2022-09-18 15:52:29', '2022-09-18 15:52:29', NULL, NULL),
(14, 'home', 'Viv', '2', 'D', '12', NULL, '88687967', NULL, NULL, 'test', 47, 'active', '2022-09-19 10:41:03', '2022-11-21 07:31:48', NULL, 'Select your'),
(15, 'Abc', 'Singh', '606', 'B block', '2333', NULL, '16984092123', NULL, NULL, 'no', NULL, 'active', '2022-10-06 07:35:34', '2022-10-06 07:35:34', NULL, NULL),
(16, 'Test', 'Test', '485', 'a', 'test', NULL, '01234567890', NULL, NULL, 'test', NULL, 'active', '2022-10-20 09:36:13', '2022-10-20 09:36:13', NULL, NULL),
(17, 'Test', 'Test', '485', 'DD', '343', NULL, '6464312', NULL, NULL, 'DD', NULL, 'active', '2022-10-27 10:19:55', '2022-10-27 13:14:20', NULL, NULL),
(18, 'Noidda sector-135', 'Kamlesh sharma', '625', 'D', 'ABC123', NULL, '7652070287', NULL, NULL, 'test', NULL, 'active', '2022-10-28 06:03:34', '2022-10-28 06:03:34', NULL, NULL),
(19, 'Abc', 'Singh', '552', 'B block', '2386', NULL, '3526833902', NULL, NULL, 'no', 53, 'active', '2022-10-31 06:39:59', '2022-10-31 06:39:59', NULL, NULL),
(20, 'test', 'test test', '533', 'B block', '2386', NULL, '16984092123', NULL, NULL, 'no', 53, 'active', '2022-10-31 07:00:44', '2022-10-31 07:00:44', NULL, NULL),
(37, 'Noidda sector-135', 'Kamlesh sharma', '533', 'D', '343', NULL, '6464312', NULL, NULL, 'test', NULL, 'active', '2022-10-31 08:08:20', '2022-10-31 08:08:20', NULL, NULL),
(41, 'test', 'test test', '602', 'B block', '2386', NULL, '25738440', NULL, NULL, 'no', NULL, 'active', '2022-11-01 08:02:22', '2022-11-01 08:02:22', NULL, NULL),
(42, 'Office', 'KUNAL PANDEY', '4', 'B block', 'Kuwait ABC Complex 101 East', NULL, '25738442', NULL, NULL, 'Make a call before you reach', 56, 'active', '2022-11-01 10:00:15', '2022-11-25 06:40:20', NULL, '10'),
(43, 'Abc', 'Singh', '585', 'B block', '2386', NULL, '25738442', NULL, NULL, 'no', 53, 'active', '2022-11-04 04:40:26', '2022-11-04 04:40:26', NULL, NULL),
(44, 'Abc', 'Singh', '528', 'B block', '2333', NULL, '987654321', NULL, NULL, 'no', 53, 'active', '2022-11-07 10:36:51', '2022-11-07 10:36:51', NULL, NULL),
(45, 'Diksha', 'Singh', '625', 'B block', '2333', NULL, '987654321', NULL, NULL, 'no', 59, 'active', '2022-11-11 07:13:42', '2022-11-11 07:13:42', NULL, NULL),
(47, 'Home', 'KUNAL PANDEY', '1', 'Block 1', 'Kuwait Street 86 House No 101', NULL, '22447710', NULL, NULL, 'Hand over to security guard.', 56, 'active', '2022-11-15 18:44:20', '2022-11-25 09:41:40', NULL, '12'),
(48, 'kamlesh', 'kamlesh sharma', '1', 'g', 'gali no23', NULL, '7652070287', NULL, NULL, 'hhhhhh', NULL, 'active', '2022-11-16 06:22:52', '2022-11-16 06:22:52', NULL, NULL),
(50, 'Diksha', 'test test', '585', 'B block', 'Kuwait', NULL, '25738442', NULL, NULL, 'no', 60, 'active', '2022-11-16 10:53:44', '2022-11-16 10:53:44', NULL, NULL),
(51, 'ffff', 'ffffffffff', '485', 'ffffffffff', 'ffffffffff', NULL, '3784253533', NULL, NULL, 'uytrge', 61, 'active', '2022-11-17 11:17:45', '2022-11-17 11:17:45', NULL, NULL),
(53, 'ABC', 'karamjeet', '586', 'block a', 'House No 2', NULL, '7530979185', NULL, NULL, 'aaa', 63, 'active', '2022-11-25 06:02:01', '2022-11-25 06:02:01', NULL, NULL),
(54, 'Abc', 'karamjeet', '586', 'Block A', 'House No 2', NULL, '7530979185', NULL, NULL, 'aaa', 63, 'active', '2022-11-25 07:57:15', '2022-11-25 07:57:15', NULL, NULL),
(55, 'ABC', 'karamjeet', '553', 'Block A', 'House No 2', NULL, '123456789', NULL, NULL, 'aaa', 63, 'active', '2022-11-25 07:57:47', '2022-11-25 07:57:47', NULL, NULL),
(57, 'Offfice', 'Diksha', NULL, 'B block', 'b-block Kuwait', NULL, '25738442', NULL, NULL, 'no', 53, 'active', '2022-11-25 11:13:21', '2022-11-25 11:13:21', NULL, '12'),
(59, 'Office', 'Vivek', NULL, 'B block', 'test', NULL, '987654321', NULL, NULL, 'no', 47, 'active', '2022-11-26 05:20:12', '2022-11-26 05:20:12', NULL, '11'),
(62, 'home', 'masnoor', NULL, '10', '10', NULL, '66482660', NULL, NULL, 'opp bank', 66, 'active', '2022-11-26 10:11:36', '2022-11-26 10:11:36', NULL, '12'),
(63, 'home', 'masnoor', NULL, '10', '66482660', NULL, '1515', NULL, NULL, '1234567', 67, 'active', '2022-11-26 10:51:59', '2022-11-26 10:51:59', NULL, '22'),
(64, 'Office sector 5255 , noida , block 2020', 'Abhishek Dangi', NULL, '525', 'H-420 sector 420 Noida UP', NULL, '55845755', NULL, NULL, 'Nothing', 62, 'active', '2022-11-28 07:34:26', '2022-12-05 06:41:11', NULL, '22'),
(65, 'obs building', 'Karamjeet', NULL, 'Block H', 'House no 21', NULL, '1234567890', NULL, NULL, 'No', 68, 'active', '2022-11-30 04:09:54', '2022-12-01 04:21:16', NULL, '22'),
(67, 'obs building', 'karam', NULL, 'Block HB', 'House no 21', NULL, '123456789', NULL, NULL, 'no', 55, 'active', '2022-11-30 06:26:12', '2022-11-30 06:26:12', NULL, '23'),
(68, 'Abcd', 'Karam', NULL, 'Block bh', 'Aab', NULL, '12345677', NULL, NULL, 'Aa', 70, 'active', '2022-12-02 08:17:46', '2022-12-02 08:23:33', NULL, '15'),
(70, 'office', 'masnoor', NULL, '10', 'block 10', NULL, '66482660', NULL, NULL, '1234567', 67, 'active', '2022-12-05 12:49:19', '2022-12-05 12:49:19', NULL, '19'),
(72, 'obs building', 'Joy', NULL, 'Block H', 'Kuwait', NULL, '12345685', NULL, NULL, 'affdgd', 63, 'active', '2022-12-08 10:14:31', '2022-12-08 10:14:31', NULL, '18');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abdaly', '2022-11-07 01:15:55', '2022-11-07 01:15:55'),
(2, 'Abdullah Al-Mubarak - West Jleeb', '2022-11-07 01:21:14', '2022-11-07 01:21:14'),
(4, 'fintas', '2022-11-07 08:13:05', '2022-11-07 08:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`, `title_ar`, `description_ar`) VALUES
(40, 'Banner 1', 'banner-1', '/storage/photos/1/banner/banner.jpg', 'Banner 1', 'active', '2022-07-16 01:22:04', '2022-07-16 01:22:04', NULL, NULL),
(41, 'banner 2', 'banner-2', '/storage/photos/1/banner/banner1.jpg', 'banner 2', 'active', '2022-07-16 01:22:19', '2022-07-16 01:22:19', NULL, NULL),
(42, 'banner 3', 'banner-3', '/storage/photos/1/banner/banner2.jpg', 'banner 3', 'active', '2022-07-16 01:22:34', '2022-07-16 01:22:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,3) NOT NULL,
  `status` enum('new','progress','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `quantity` int(11) NOT NULL,
  `amount` double(8,3) NOT NULL,
  `inventory_updated` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `order_id`, `user_id`, `price`, `status`, `quantity`, `amount`, `inventory_updated`, `created_at`, `updated_at`) VALUES
(168, 82, 254, 69339, 35.000, 'new', 1, 35.000, '0', '2022-11-26 10:15:34', '2022-11-26 11:13:54'),
(171, 87, 255, 77712, 33.000, 'new', 1, 33.000, '0', '2022-11-28 05:08:36', '2022-11-28 05:10:33'),
(172, 92, 256, 66051, 55.000, 'new', 1, 55.000, '0', '2022-11-28 06:30:35', '2022-11-28 06:33:39'),
(173, 92, 257, 56, 55.000, 'new', 1, 55.000, '0', '2022-11-28 06:56:41', '2022-12-08 11:15:16'),
(174, 61, 258, 56, 20.000, 'new', 1, 20.000, '0', '2022-11-28 07:03:13', '2022-12-08 11:15:16'),
(176, 61, 259, 71875, 20.000, 'new', 1, 20.000, '0', '2022-11-28 07:06:36', '2022-11-28 07:07:47'),
(177, 91, 260, 62, 35.000, 'new', 1, 35.000, '0', '2022-11-28 07:32:06', '2022-12-06 11:38:03'),
(178, 90, 260, 62, 50.000, 'new', 1, 50.000, '0', '2022-11-28 07:32:09', '2022-12-06 11:38:03'),
(179, 99, 261, 62, 9.000, 'new', 1, 9.000, '0', '2022-11-28 07:36:48', '2022-12-06 11:38:03'),
(180, 61, 261, 62, 20.000, 'new', 1, 20.000, '0', '2022-11-28 07:36:53', '2022-12-06 11:38:03'),
(181, 92, 261, 62, 55.000, 'new', 1, 55.000, '0', '2022-11-28 07:36:58', '2022-12-06 11:38:03'),
(182, 86, 261, 62, 10.000, 'new', 1, 10.000, '0', '2022-11-28 07:37:03', '2022-12-06 11:38:03'),
(183, 71, 261, 62, 80.000, 'new', 1, 80.000, '0', '2022-11-28 07:37:08', '2022-12-06 11:38:03'),
(185, 92, NULL, 50460, 55.000, 'new', 1, 55.000, '0', '2022-11-28 10:06:43', '2022-11-28 10:07:42'),
(186, 87, 263, 62, 33.000, 'new', 1, 33.000, '0', '2022-11-28 10:25:03', '2022-12-06 11:38:03'),
(187, 81, 263, 62, 24.000, 'new', 2, 48.000, '0', '2022-11-28 10:25:08', '2022-12-06 11:38:03'),
(189, 92, NULL, 66106, 55.000, 'new', 1, 55.000, '0', '2022-11-29 11:18:17', '2022-11-29 11:18:17'),
(195, 61, NULL, 63554, 20.000, 'new', 1, 20.000, '0', '2022-11-30 04:19:54', '2022-11-30 04:19:54'),
(196, 90, NULL, 63554, 50.000, 'new', 1, 50.000, '0', '2022-11-30 04:19:58', '2022-11-30 04:19:58'),
(208, 92, 265, 68, 55.000, 'new', 1, 55.000, '0', '2022-11-30 06:27:09', '2022-11-30 06:30:23'),
(212, 72, 266, 56, 36.000, 'new', 1, 40.000, '1', '2022-11-30 07:15:05', '2022-12-08 11:15:16'),
(213, 91, 266, 56, 35.000, 'new', 1, 35.000, '1', '2022-11-30 07:15:19', '2022-12-08 11:15:16'),
(221, 82, NULL, 69, 35.000, 'new', 1, 35.000, '0', '2022-11-30 11:32:05', '2022-11-30 11:32:05'),
(223, 61, 274, 68, 20.000, 'new', 1, 20.000, '1', '2022-12-01 04:08:27', '2022-12-01 04:09:25'),
(224, 98, 275, 68, 60000.000, 'new', 2, 120000.000, '1', '2022-12-01 04:13:52', '2022-12-01 04:14:38'),
(225, 97, 276, 68, 40000.000, 'new', 1, 40000.000, '1', '2022-12-01 04:22:44', '2022-12-01 04:23:19'),
(227, 91, 279, 56, 35.000, 'new', 1, 35.000, '1', '2022-12-01 05:24:32', '2022-12-08 11:15:16'),
(228, 90, 279, 56, 45.000, 'new', 1, 50.000, '1', '2022-12-01 05:24:51', '2022-12-08 11:15:16'),
(230, 90, 280, 56, 45.000, 'new', 1, 50.000, '1', '2022-12-01 06:12:02', '2022-12-08 11:15:16'),
(232, 92, 281, 70, 55.000, 'new', 1, 55.000, '1', '2022-12-02 07:28:13', '2022-12-02 08:13:47'),
(235, 72, 287, 70, 36.000, 'new', 1, 40.000, '1', '2022-12-02 07:42:20', '2022-12-02 08:13:47'),
(236, 73, 287, 70, 30.400, 'new', 1, 32.000, '1', '2022-12-02 07:42:27', '2022-12-02 08:13:47'),
(246, 97, NULL, 70, 40000.000, 'new', 1, 40000.000, '0', '2022-12-02 08:25:03', '2022-12-02 08:25:03'),
(248, 86, NULL, 72, 9.000, 'new', 2, 20.000, '0', '2022-12-02 10:12:45', '2022-12-02 10:59:53'),
(249, 115, NULL, 67254, 9.000, 'new', 1, 9.000, '0', '2022-12-02 10:14:39', '2022-12-02 10:14:39'),
(250, 87, NULL, 58023, 9.000, 'new', 1, 10.000, '0', '2022-12-05 04:04:32', '2022-12-05 04:04:32'),
(252, 82, 289, 67, 9.300, 'new', 1, 10.000, '1', '2022-12-05 12:48:21', '2022-12-06 11:12:02'),
(253, 90, 301, 67, 9.400, 'new', 1, 9.400, '1', '2022-12-05 12:55:50', '2022-12-06 11:12:02'),
(257, 90, NULL, 69713, 9.400, 'new', 1, 9.400, '0', '2022-12-05 12:59:01', '2022-12-05 12:59:01'),
(258, 82, NULL, 69713, 9.300, 'new', 1, 9.300, '0', '2022-12-05 12:59:09', '2022-12-05 12:59:09'),
(266, 90, 301, 67, 9.400, 'new', 1, 9.400, '1', '2022-12-05 15:37:31', '2022-12-06 11:12:02'),
(277, 87, NULL, 61838, 5.000, 'new', 1, 5.000, '0', '2022-12-06 04:51:30', '2022-12-06 04:51:30'),
(278, 91, NULL, 61838, 7.000, 'new', 1, 7.000, '0', '2022-12-06 04:51:41', '2022-12-06 04:51:41'),
(281, 92, NULL, 47, 7.000, 'new', 1, 7.000, '0', '2022-12-06 05:16:39', '2022-12-08 07:25:55'),
(282, 82, NULL, 47, 7.000, 'new', 1, 7.000, '0', '2022-12-06 05:17:42', '2022-12-08 07:25:55'),
(283, 86, NULL, 61838, 7.000, 'new', 1, 7.000, '0', '2022-12-06 05:20:37', '2022-12-06 05:20:37'),
(292, 90, 302, 62, 6.000, 'new', 1, 6.000, '1', '2022-12-06 06:50:43', '2022-12-06 11:38:03'),
(293, 91, 302, 62, 7.000, 'new', 1, 7.000, '1', '2022-12-06 06:50:47', '2022-12-06 11:38:03'),
(297, 119, 301, 67, 6.000, 'new', 1, 6.000, '1', '2022-12-06 07:29:32', '2022-12-06 11:12:02'),
(298, 114, 301, 67, 7.000, 'new', 1, 7.000, '1', '2022-12-06 07:34:51', '2022-12-06 11:12:02'),
(301, 87, 302, 62, 5.000, 'new', 1, 5.000, '1', '2022-12-06 09:38:45', '2022-12-06 11:38:03'),
(302, 95, 303, 62, 7.000, 'new', 1, 7.000, '1', '2022-12-06 09:43:01', '2022-12-06 11:38:03'),
(303, 82, 306, 62, 7.000, 'new', 1, 7.000, '1', '2022-12-06 09:58:50', '2022-12-06 11:38:03'),
(304, 73, 306, 62, 7.000, 'new', 1, 7.000, '1', '2022-12-06 09:58:53', '2022-12-06 11:38:03'),
(305, 90, 306, 62, 6.000, 'new', 1, 6.000, '1', '2022-12-06 10:00:19', '2022-12-06 11:38:03'),
(306, 87, 306, 62, 5.000, 'new', 1, 5.000, '1', '2022-12-06 10:00:23', '2022-12-06 11:38:03'),
(307, 86, 307, 62, 7.000, 'new', 1, 7.000, '1', '2022-12-06 10:13:12', '2022-12-06 11:38:03'),
(308, 86, 308, 62, 7.000, 'new', 1, 7.000, '1', '2022-12-06 10:31:15', '2022-12-06 11:38:03'),
(309, 90, 309, 62, 6.000, 'new', 1, 6.000, '1', '2022-12-06 10:35:00', '2022-12-06 11:38:03'),
(310, 92, NULL, 67, 7.000, 'new', 2, 14.000, '0', '2022-12-06 10:41:32', '2022-12-06 11:12:02'),
(311, 90, 310, 62, 6.000, 'new', 1, 6.000, '1', '2022-12-06 10:48:17', '2022-12-06 11:38:03'),
(312, 90, 312, 62, 6.000, 'new', 1, 6.000, '1', '2022-12-06 10:53:22', '2022-12-06 11:38:03'),
(315, 86, NULL, 62, 7.000, 'new', 1, 7.000, '0', '2022-12-06 12:10:09', '2022-12-06 12:10:09'),
(331, 124, 315, 63, 13.220, 'new', 1, 13.220, '1', '2022-12-07 05:27:27', '2022-12-08 10:21:35'),
(335, 129, NULL, 59143, 12.000, 'new', 1, 12.000, '0', '2022-12-07 08:34:01', '2022-12-07 08:34:08'),
(336, 86, NULL, 53, 7.000, 'new', 1, 7.000, '0', '2022-12-07 11:56:01', '2022-12-07 12:16:40'),
(338, 123, 321, 63, 11.330, 'new', 1, 11.330, '1', '2022-12-08 04:12:24', '2022-12-08 10:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `category_show` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `summary`, `photo`, `is_parent`, `parent_id`, `added_by`, `status`, `category_show`, `created_at`, `updated_at`, `title_ar`, `summary_ar`) VALUES
(19, 'PERFUME', 'perfume', 'PERFUME', '/storage/photos/1/category/category1.jpg', 1, NULL, NULL, 'active', 'yes', '2022-07-16 01:18:34', '2022-12-08 05:00:04', 'عطر', 'PERFUME'),
(20, 'BUKHOOR', 'bukhoor', 'BUKHOOR', '/storage/photos/1/category/category2.jpg', 1, NULL, NULL, 'active', 'no', '2022-07-16 01:19:02', '2022-12-08 05:00:20', 'بخور', 'BUKHOOR'),
(21, 'SPRAYS', 'sprays', 'Sprays', '/storage/photos/1/category/category3.jpg', 1, NULL, NULL, 'active', 'no', '2022-07-16 01:19:23', '2022-12-02 08:05:49', 'رشوش', 'Sprays'),
(22, 'SEASONAL PERFUMES', 'seasonal-perfumes', 'seasonal perfumes', '/storage/photos/1/category/category1.jpg', 1, NULL, NULL, 'active', 'yes', '2022-07-16 01:20:13', '2022-11-29 12:19:05', 'العطور الموسمية', 'seasonal perfumes'),
(23, 'SPECIAL OCCASION', 'special-occasion', 'Special Occasion', '/storage/photos/1/category/category2.jpg', 0, 22, NULL, 'active', 'yes', '2022-07-16 01:21:01', '2022-11-29 12:19:28', 'مناسبات خاصة', 'مناسبات خاصة'),
(27, 'ATTARS', 'attars', 'ssss', 'https://bahja-latest.theklozet.com/storage/photos/56/category1.jpg', 1, NULL, NULL, 'active', 'yes', '2022-11-26 10:22:12', '2022-11-29 11:36:51', 'ATTARS', 'ssss'),
(29, 'Deodorant', 'deodorant', 'deodorant is a substance applied to the body to prevent or mask body odor due to bacterial breakdown of perspiration.', 'https://bahja-latest.theklozet.com/storage/photos/56/category1.jpg', 0, 22, NULL, 'active', 'yes', '2022-12-02 06:59:12', '2022-12-02 07:08:32', 'testing', 'aa'),
(32, 'spray2', 'spray2', NULL, 'https://bahja-latest.theklozet.com/storage/photos/56/119800097_1228529960814076_6665591499614185828_n.jpg', 0, 27, NULL, 'active', 'yes', '2022-12-06 07:43:33', '2022-12-09 05:14:05', 'spray2', NULL),
(34, 'deodorant test', 'deodorant-test', 'deodorant test', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 0, 21, NULL, 'inactive', 'no', '2022-12-08 04:50:20', '2022-12-09 08:06:45', 'deodorant test', 'deodorant test'),
(35, 'SEASONAL PERFUMES11', 'seasonal-perfumes11', 'seasonal perfume1', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 0, 22, NULL, 'inactive', 'no', '2022-12-08 05:26:36', '2022-12-09 08:06:10', 'SEASONAL PERFUMES11', 'seasonal perfume1');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `value` decimal(20,3) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Coupon', 'fixed', '90.000', 'active', '2022-07-18 01:49:57', '2022-11-01 08:06:05'),
(8, 'Coupon12', 'percent', '5.000', 'active', '2022-11-01 09:38:19', '2022-11-01 09:38:19'),
(9, 'BHWD', 'fixed', '2.200', 'active', '2022-11-30 10:52:20', '2022-11-30 10:52:20'),
(10, 'SALE', 'fixed', '5.000', 'active', '2022-12-06 10:45:53', '2022-12-06 10:45:53'),
(11, 'ABC12', 'percent', '2.300', 'active', '2022-12-07 08:29:51', '2022-12-07 08:29:51'),
(12, 'ABC23', 'fixed', '2.200', 'active', '2022-12-07 08:30:04', '2022-12-07 08:30:04'),
(13, 'TEST1', 'fixed', '2.200', 'active', '2022-12-07 08:30:38', '2022-12-07 08:30:38');

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
-- Table structure for table `ltm_translations`
--

CREATE TABLE `ltm_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `locale` varchar(191) COLLATE utf8mb4_bin NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_bin NOT NULL,
  `key` text COLLATE utf8mb4_bin NOT NULL,
  `value` text COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `ltm_translations`
--

INSERT INTO `ltm_translations` (`id`, `status`, `locale`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'auth', 'failed', 'These credentials do not match our records.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(2, 1, 'en', 'auth', 'password', 'The provided password is incorrect.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(3, 1, 'en', 'auth', 'throttle', 'Too many login attempts. Please try again in :seconds seconds.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(4, 1, 'en', 'pagination', 'previous', '&laquo; Previous', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(5, 1, 'en', 'pagination', 'next', 'Next &raquo;', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(6, 1, 'en', 'passwords', 'reset', 'Your password has been reset!', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(7, 1, 'en', 'passwords', 'sent', 'We have emailed your password reset link!', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(8, 1, 'en', 'passwords', 'throttled', 'Please wait before retrying.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(9, 1, 'en', 'passwords', 'token', 'This password reset token is invalid.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(10, 1, 'en', 'passwords', 'user', 'We can\'t find a user with that email address.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(11, 1, 'en', 'validation', 'accepted', 'The :attribute must be accepted.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(12, 1, 'en', 'validation', 'accepted_if', 'The :attribute must be accepted when :other is :value.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(13, 1, 'en', 'validation', 'active_url', 'The :attribute is not a valid URL.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(14, 1, 'en', 'validation', 'after', 'The :attribute must be a date after :date.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(15, 1, 'en', 'validation', 'after_or_equal', 'The :attribute must be a date after or equal to :date.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(16, 1, 'en', 'validation', 'alpha', 'The :attribute must only contain letters.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(17, 1, 'en', 'validation', 'alpha_dash', 'The :attribute must only contain letters, numbers, dashes and underscores.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(18, 1, 'en', 'validation', 'alpha_num', 'The :attribute must only contain letters and numbers.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(19, 1, 'en', 'validation', 'array', 'The :attribute must be an array.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(20, 1, 'en', 'validation', 'before', 'The :attribute must be a date before :date.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(21, 1, 'en', 'validation', 'before_or_equal', 'The :attribute must be a date before or equal to :date.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(22, 1, 'en', 'validation', 'between.array', 'The :attribute must have between :min and :max items.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(23, 1, 'en', 'validation', 'between.file', 'The :attribute must be between :min and :max kilobytes.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(24, 1, 'en', 'validation', 'between.numeric', 'The :attribute must be between :min and :max.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(25, 1, 'en', 'validation', 'between.string', 'The :attribute must be between :min and :max characters.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(26, 1, 'en', 'validation', 'boolean', 'The :attribute field must be true or false.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(27, 1, 'en', 'validation', 'confirmed', 'The :attribute confirmation does not match.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(28, 1, 'en', 'validation', 'current_password', 'The password is incorrect.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(29, 1, 'en', 'validation', 'date', 'The :attribute is not a valid date.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(30, 1, 'en', 'validation', 'date_equals', 'The :attribute must be a date equal to :date.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(31, 1, 'en', 'validation', 'date_format', 'The :attribute does not match the format :format.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(32, 1, 'en', 'validation', 'declined', 'The :attribute must be declined.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(33, 1, 'en', 'validation', 'declined_if', 'The :attribute must be declined when :other is :value.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(34, 1, 'en', 'validation', 'different', 'The :attribute and :other must be different.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(35, 1, 'en', 'validation', 'digits', 'The :attribute must be :digits digits.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(36, 1, 'en', 'validation', 'digits_between', 'The :attribute must be between :min and :max digits.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(37, 1, 'en', 'validation', 'dimensions', 'The :attribute has invalid image dimensions.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(38, 1, 'en', 'validation', 'distinct', 'The :attribute field has a duplicate value.', '2022-09-12 22:09:28', '2022-09-12 22:09:28'),
(39, 1, 'en', 'validation', 'doesnt_start_with', 'The :attribute may not start with one of the following: :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(40, 1, 'en', 'validation', 'email', 'The :attribute must be a valid email address.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(41, 1, 'en', 'validation', 'ends_with', 'The :attribute must end with one of the following: :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(42, 1, 'en', 'validation', 'enum', 'The selected :attribute is invalid.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(43, 1, 'en', 'validation', 'exists', 'The selected :attribute is invalid.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(44, 1, 'en', 'validation', 'file', 'The :attribute must be a file.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(45, 1, 'en', 'validation', 'filled', 'The :attribute field must have a value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(46, 1, 'en', 'validation', 'gt.array', 'The :attribute must have more than :value items.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(47, 1, 'en', 'validation', 'gt.file', 'The :attribute must be greater than :value kilobytes.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(48, 1, 'en', 'validation', 'gt.numeric', 'The :attribute must be greater than :value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(49, 1, 'en', 'validation', 'gt.string', 'The :attribute must be greater than :value characters.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(50, 1, 'en', 'validation', 'gte.array', 'The :attribute must have :value items or more.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(51, 1, 'en', 'validation', 'gte.file', 'The :attribute must be greater than or equal to :value kilobytes.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(52, 1, 'en', 'validation', 'gte.numeric', 'The :attribute must be greater than or equal to :value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(53, 1, 'en', 'validation', 'gte.string', 'The :attribute must be greater than or equal to :value characters.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(54, 1, 'en', 'validation', 'image', 'The :attribute must be an image.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(55, 1, 'en', 'validation', 'in', 'The selected :attribute is invalid.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(56, 1, 'en', 'validation', 'in_array', 'The :attribute field does not exist in :other.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(57, 1, 'en', 'validation', 'integer', 'The :attribute must be an integer.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(58, 1, 'en', 'validation', 'ip', 'The :attribute must be a valid IP address.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(59, 1, 'en', 'validation', 'ipv4', 'The :attribute must be a valid IPv4 address.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(60, 1, 'en', 'validation', 'ipv6', 'The :attribute must be a valid IPv6 address.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(61, 1, 'en', 'validation', 'json', 'The :attribute must be a valid JSON string.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(62, 1, 'en', 'validation', 'lt.array', 'The :attribute must have less than :value items.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(63, 1, 'en', 'validation', 'lt.file', 'The :attribute must be less than :value kilobytes.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(64, 1, 'en', 'validation', 'lt.numeric', 'The :attribute must be less than :value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(65, 1, 'en', 'validation', 'lt.string', 'The :attribute must be less than :value characters.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(66, 1, 'en', 'validation', 'lte.array', 'The :attribute must not have more than :value items.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(67, 1, 'en', 'validation', 'lte.file', 'The :attribute must be less than or equal to :value kilobytes.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(68, 1, 'en', 'validation', 'lte.numeric', 'The :attribute must be less than or equal to :value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(69, 1, 'en', 'validation', 'lte.string', 'The :attribute must be less than or equal to :value characters.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(70, 1, 'en', 'validation', 'mac_address', 'The :attribute must be a valid MAC address.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(71, 1, 'en', 'validation', 'max.array', 'The :attribute must not have more than :max items.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(72, 1, 'en', 'validation', 'max.file', 'The :attribute must not be greater than :max kilobytes.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(73, 1, 'en', 'validation', 'max.numeric', 'The :attribute must not be greater than :max.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(74, 1, 'en', 'validation', 'max.string', 'The :attribute must not be greater than :max characters.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(75, 1, 'en', 'validation', 'mimes', 'The :attribute must be a file of type: :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(76, 1, 'en', 'validation', 'mimetypes', 'The :attribute must be a file of type: :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(77, 1, 'en', 'validation', 'min.array', 'The :attribute must have at least :min items.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(78, 1, 'en', 'validation', 'min.file', 'The :attribute must be at least :min kilobytes.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(79, 1, 'en', 'validation', 'min.numeric', 'The :attribute must be at least :min.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(80, 1, 'en', 'validation', 'min.string', 'The :attribute must be at least :min characters.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(81, 1, 'en', 'validation', 'multiple_of', 'The :attribute must be a multiple of :value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(82, 1, 'en', 'validation', 'not_in', 'The selected :attribute is invalid.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(83, 1, 'en', 'validation', 'not_regex', 'The :attribute format is invalid.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(84, 1, 'en', 'validation', 'numeric', 'The :attribute must be a number.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(85, 1, 'en', 'validation', 'password.letters', 'The :attribute must contain at least one letter.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(86, 1, 'en', 'validation', 'password.mixed', 'The :attribute must contain at least one uppercase and one lowercase letter.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(87, 1, 'en', 'validation', 'password.numbers', 'The :attribute must contain at least one number.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(88, 1, 'en', 'validation', 'password.symbols', 'The :attribute must contain at least one symbol.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(89, 1, 'en', 'validation', 'password.uncompromised', 'The given :attribute has appeared in a data leak. Please choose a different :attribute.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(90, 1, 'en', 'validation', 'present', 'The :attribute field must be present.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(91, 1, 'en', 'validation', 'prohibited', 'The :attribute field is prohibited.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(92, 1, 'en', 'validation', 'prohibited_if', 'The :attribute field is prohibited when :other is :value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(93, 1, 'en', 'validation', 'prohibited_unless', 'The :attribute field is prohibited unless :other is in :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(94, 1, 'en', 'validation', 'prohibits', 'The :attribute field prohibits :other from being present.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(95, 1, 'en', 'validation', 'regex', 'The :attribute format is invalid.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(96, 1, 'en', 'validation', 'required', 'The :attribute field is required.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(97, 1, 'en', 'validation', 'required_array_keys', 'The :attribute field must contain entries for: :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(98, 1, 'en', 'validation', 'required_if', 'The :attribute field is required when :other is :value.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(99, 1, 'en', 'validation', 'required_unless', 'The :attribute field is required unless :other is in :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(100, 1, 'en', 'validation', 'required_with', 'The :attribute field is required when :values is present.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(101, 1, 'en', 'validation', 'required_with_all', 'The :attribute field is required when :values are present.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(102, 1, 'en', 'validation', 'required_without', 'The :attribute field is required when :values is not present.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(103, 1, 'en', 'validation', 'required_without_all', 'The :attribute field is required when none of :values are present.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(104, 1, 'en', 'validation', 'same', 'The :attribute and :other must match.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(105, 1, 'en', 'validation', 'size.array', 'The :attribute must contain :size items.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(106, 1, 'en', 'validation', 'size.file', 'The :attribute must be :size kilobytes.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(107, 1, 'en', 'validation', 'size.numeric', 'The :attribute must be :size.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(108, 1, 'en', 'validation', 'size.string', 'The :attribute must be :size characters.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(109, 1, 'en', 'validation', 'starts_with', 'The :attribute must start with one of the following: :values.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(110, 1, 'en', 'validation', 'string', 'The :attribute must be a string.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(111, 1, 'en', 'validation', 'timezone', 'The :attribute must be a valid timezone.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(112, 1, 'en', 'validation', 'unique', 'The :attribute has already been taken.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(113, 1, 'en', 'validation', 'uploaded', 'The :attribute failed to upload.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(114, 1, 'en', 'validation', 'url', 'The :attribute must be a valid URL.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(115, 1, 'en', 'validation', 'uuid', 'The :attribute must be a valid UUID.', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(116, 1, 'en', 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(117, 1, 'ar', '_json', 'LIMITED-TIME OFFERS: FREE DELIVERY WITH ORDERS OVER 20 KWD', 'عروض لفترة محدودة: توصيل مجاني مع الطلبات بأكثر من 20 دينار كويتي', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(118, 1, 'ar', '_json', 'Contact Us', 'اتصل بنا', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(119, 1, 'ar', '_json', 'About Us', 'معلومات عنا', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(120, 1, 'ar', '_json', 'Search', 'يبحث', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(121, 1, 'ar', '_json', 'Shopping Cart', 'عربة التسوق', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(122, 1, 'ar', '_json', 'Quantity', 'كمية', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(123, 1, 'ar', '_json', 'Total', 'المجموع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(124, 1, 'ar', '_json', 'View cart', 'عرض عربة التسوق', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(125, 1, 'ar', '_json', 'Checkout', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(126, 1, 'ar', '_json', 'Home', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(127, 1, 'ar', '_json', 'Terms of Use', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(128, 1, 'ar', '_json', 'FAQ', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(129, 1, 'ar', '_json', '2022 All rights reserved. Bahja', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(130, 1, 'ar', '_json', 'Show Now', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(131, 1, 'ar', '_json', 'Best Sellers', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(132, 1, 'ar', '_json', 'View All', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(133, 1, 'ar', '_json', 'New Arrivals', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(134, 1, 'ar', '_json', 'New Lunched', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(135, 1, 'ar', '_json', 'Perfume', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(136, 1, 'ar', '_json', 'A range of carefully selected fragrances that represent a history of expertise to be a\n                                part of your life', ' الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(137, 1, 'ar', '_json', 'SHOP NOW', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(138, 1, 'ar', '_json', 'About Bahja', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(139, 1, 'ar', '_json', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed nisi mollis, tempus\n                            diam vel, interdum nibh', ' الدفعالدفعالدفعالدفعالدفعالدفعالدفعالدفعالدفعالدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(140, 1, 'ar', '_json', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed nisi mollis, tempus\n                            diam vel, interdum nibh. Sed pellentesque vulputate lacinia. Vivamus pretium nibh et auctor\n                            consectetur. Cras eget ligula ullamcorper, pellentesque nisl et, euismod\n                            ex. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient\n                            montes, nascetur ridiculus mus. Nam egestas sollicitudin sapien at sodales. Cras consectetur\n                            finibus magna sit amet mollis. Fusce\n                            ullamcorper est in gravida malesuada. Curabitur ac arcu et nunc vestibulum venenatis eu a\n                            risus. Mauris magna dui, euismod sit amet turpis aliquet, dapibus congue justo. Nunc eget\n                            dui eu ante lobortis vehicula non eget\n                            nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id bibendum eros. Aenean\n                            consequat, ligula ac mollis efficitur, nisl sem feugiat augue, in condimentum ex neque ac\n                            magna. Proin at malesuada est. Etiam\n                            tempor massa faucibus, volutpat est eget, imperdiet lectus. In purus augue, molestie at\n                            massa vel, efficitur vehicula dolor. Donec tempor lobortis massa, a tincidunt turpis mattis\n                            non.', ' الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(141, 1, 'ar', '_json', 'PRODUCT', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(142, 1, 'ar', '_json', 'UNIT PRICE', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(143, 1, 'ar', '_json', 'QUANTITY', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(144, 1, 'ar', '_json', 'TOTAL', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(145, 1, 'ar', '_json', 'Remove', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(146, 1, 'ar', '_json', 'Update Cart', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(147, 1, 'ar', '_json', 'Coupon code', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(148, 1, 'ar', '_json', 'Apply', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(149, 1, 'ar', '_json', 'You Save', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(150, 1, 'ar', '_json', 'You Pay', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(151, 1, 'ar', '_json', 'Proceed to Checkout', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(152, 1, 'ar', '_json', 'Continue Shopping', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(153, 1, 'ar', '_json', 'Delivery Address', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(154, 1, 'ar', '_json', 'Phone', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(155, 1, 'ar', '_json', 'Edit', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(156, 1, 'ar', '_json', 'Empty Address List', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(157, 1, 'ar', '_json', 'Add New Address', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(158, 1, 'ar', '_json', 'Payment Method', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(159, 1, 'ar', '_json', 'Knet', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(160, 1, 'ar', '_json', 'Credit Card', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(161, 1, 'ar', '_json', 'Order Items', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(162, 1, 'ar', '_json', 'Qty', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(163, 1, 'ar', '_json', 'Subtotal', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(164, 1, 'ar', '_json', 'Delivery Charge', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(165, 1, 'ar', '_json', 'Select your address', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(166, 1, 'ar', '_json', 'Free', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(167, 1, 'ar', '_json', 'Confirm Order', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(168, 1, 'ar', '_json', 'Contact', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(169, 1, 'ar', '_json', 'Contact Address', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(170, 1, 'ar', '_json', 'Send us a Message', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(171, 1, 'ar', '_json', 'Submit', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(172, 1, 'ar', '_json', 'Customer Login', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(173, 1, 'ar', '_json', 'I\'m already a customer', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(174, 1, 'ar', '_json', 'Email', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(175, 1, 'ar', '_json', 'Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(176, 1, 'ar', '_json', 'Log In', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(177, 1, 'ar', '_json', 'Login With Facebook', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(178, 1, 'ar', '_json', 'Login With Google', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(179, 1, 'ar', '_json', 'Forgot Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(180, 1, 'ar', '_json', 'No account yet', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(181, 1, 'ar', '_json', 'Join Now', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(182, 1, 'ar', '_json', 'OR', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(183, 1, 'ar', '_json', 'Guest Checkout', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(184, 1, 'ar', '_json', 'Perfumes', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(185, 1, 'ar', '_json', 'Product Size', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(186, 1, 'ar', '_json', 'ML', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(187, 1, 'ar', '_json', 'Sort By', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(188, 1, 'ar', '_json', 'Name', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(189, 1, 'ar', '_json', 'Price', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(190, 1, 'ar', '_json', 'Category', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(191, 1, 'ar', '_json', 'There are no products', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(192, 1, 'ar', '_json', 'Back', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(193, 1, 'ar', '_json', 'Next', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(194, 1, 'ar', '_json', 'In Stock', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(195, 1, 'ar', '_json', 'Out Of Stock', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(196, 1, 'ar', '_json', 'Add to Cart', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(197, 1, 'ar', '_json', 'Description', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(198, 1, 'ar', '_json', 'You might also like', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(199, 1, 'ar', '_json', 'Create New Account', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(200, 1, 'ar', '_json', 'Register', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(201, 1, 'ar', '_json', 'Full Name', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(202, 1, 'ar', '_json', 'Email Id', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(203, 1, 'ar', '_json', 'Confirm Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(204, 1, 'ar', '_json', 'Create An Account', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(205, 1, 'ar', '_json', 'Existing User', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(206, 1, 'ar', '_json', 'Sign In', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(207, 1, 'ar', '_json', 'Orders', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(208, 1, 'ar', '_json', 'Profile', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(209, 1, 'ar', '_json', 'Addresses', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(210, 1, 'ar', '_json', 'Change Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(211, 1, 'ar', '_json', 'Logout', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(212, 1, 'ar', '_json', 'Order', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(213, 1, 'ar', '_json', 'Date', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(214, 1, 'ar', '_json', 'Status', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(215, 1, 'ar', '_json', 'Action', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(216, 1, 'ar', '_json', 'View', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(217, 1, 'ar', '_json', 'You have no order yet!! Please order some products', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(218, 1, 'ar', '_json', 'Personal details', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(219, 1, 'ar', '_json', 'Save changes', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(220, 1, 'ar', '_json', 'Id', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(221, 1, 'ar', '_json', 'Address Name', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(222, 1, 'ar', '_json', 'Block', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(223, 1, 'ar', '_json', 'Area', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(224, 1, 'ar', '_json', 'Delete', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(225, 1, 'ar', '_json', 'You have no Address yet', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(226, 1, 'ar', '_json', 'Address', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(227, 1, 'ar', '_json', 'Select Area', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(228, 1, 'ar', '_json', 'Edit Address', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(229, 1, 'ar', '_json', 'Password Change', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(230, 1, 'ar', '_json', 'Change New Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(231, 1, 'ar', '_json', 'Current Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(232, 1, 'ar', '_json', 'New Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29'),
(233, 1, 'ar', '_json', 'New Confirm Password', 'الدفع', '2022-09-12 22:09:29', '2022-09-12 22:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `subject`, `email`, `photo`, `phone`, `message`, `read_at`, `created_at`, `updated_at`) VALUES
(10, 'test', 'test test', 'test@mail.com', NULL, '987654321', 'this is test,  \r\n\r\nPlease mention the today’s date on the heading.', '2022-10-31 04:17:41', '2022-09-16 06:34:47', '2022-10-31 04:17:41'),
(11, 'test', 'test test', 'test@mail.com', NULL, '987654321', 'agksh JHjx< xJKHNMN HJ JHM KJ KJ Zh hbN MBBN', NULL, '2022-10-31 06:09:31', '2022-10-31 06:09:31'),
(12, 'test', 'testing it', 'user@mail.com', NULL, '3526833902', 'This is Bahja test. BUKHOOR\r\nPERFUME\r\nSEASONAL PERFUMES\r\nSPECIAL OCCASION\r\nSPRAYS', NULL, '2022-11-01 08:13:42', '2022-11-01 08:13:42'),
(13, 'tryuofyiutyrterwewd', 'rhebfyk6u4hge 5ygwegrw5 3145qw', 'qewrtyuiytrew@hhj.com', NULL, '654784548487', 'q78u5y3grvnmi78o67iu4y534wghyi8p3rgh', NULL, '2022-11-17 04:26:08', '2022-11-17 04:26:08'),
(14, 'tryuofyiutyrterwewd', 'rhebfyk6u4hge 5ygwegrw5 3145qw', 'qewrtyuiytrew@hhj.com', NULL, '654784548487', 'q78u5y3grvnmi78o67iu4y534wghyi8p3rgh', NULL, '2022-11-17 04:27:15', '2022-11-17 04:27:15'),
(15, 'tryuofyiutyrterwewd', 'rhebfyk6u4hge 5ygwegrw5 3145qw', 'qewrtyuiytrew@hhj.com', NULL, '654784548487', 'q78u5y3grvnmi78o67iu4y534wghyi8p3rgh', NULL, '2022-11-17 04:28:35', '2022-11-17 04:28:35'),
(16, 'wegrwgwrg', 'ehkblds difhjl v79u fewuvejh', 'wegeert@gmail.com', NULL, '56454154848', ';knvin no jewhvdhn jen89', NULL, '2022-11-17 04:28:57', '2022-11-17 04:28:57'),
(17, 'Diksha', 'testing it', 'test@mail.com', NULL, '16984092123', 'tjhv tyrfbn guyjgvtyiulhyioujb fgug iuhmn jyhghn kjgbn', NULL, '2022-11-17 12:06:16', '2022-11-17 12:06:16'),
(18, 'Diksha', 'testing it', 'user@gmail.com', NULL, '3526833902', 'hgixb jmhtgj,frikyhvvhtyk btuijgb nbgjhv gjhm jyfcb tku', NULL, '2022-11-17 12:07:54', '2022-11-17 12:07:54'),
(19, 'Diksha', 'testing it', 'diksha@gmail.com', NULL, '234133', 'testing it, testing it,testing it,testing it,testing it,testing it,', '2022-11-25 07:44:04', '2022-11-24 16:40:06', '2022-11-25 07:44:04'),
(20, 'Diksha Singh', 'testing it', 'dikshajadoun9582@gmail.com', NULL, '987654321', 'Testing it Testing it Testing it Testing it', '2022-11-25 07:58:44', '2022-11-25 07:58:09', '2022-11-25 07:58:44'),
(21, 'eefwe', 'erherhre', 'kamlesh@regerhrehre.com', NULL, '76548978846544', 'reherhewghghghghghghghghghghghghghghghghghghghghghghghgh', NULL, '2022-11-26 04:48:29', '2022-11-26 04:48:29'),
(22, 'Abhishek', 'kdnfondsdbdsgbfhkdsk', 'dangiabhi672@gmail.com', NULL, '955534845615646', 'ndhvink dfmnv ynifdulkvm ,en80wdpjm;kvygd0k[p\'d,lmv,y i-kp\',l,mkhdigvjk,dijpl;m,d sv7pdskp;,vmdhsbkv,;d/svds', NULL, '2022-11-26 05:14:56', '2022-11-26 05:14:56'),
(23, 'Diksha', 'test test', 'test@mail.com', NULL, '987654321', 'adipisicing elit. Ea repudiandae hic necessitatibus dignissimos suscipit dolores, minima accusantium aperiam iste ad repellendus voluptatem dolor fuga quam obcaecati optio ipsum quo', NULL, '2022-11-26 07:44:35', '2022-11-26 07:44:35'),
(24, 'karamjeet', 'aa', 'karamjeetkaur487@gmail.com', NULL, '123456789123', 'orem ipsum dolor sit amet consectetur adipisicing elit. Ea repudiandae hic necessitatibus dignissimos suscipit dolores, minima accusantium aperiam iste ad repellendus voluptate', NULL, '2022-11-26 07:46:02', '2022-11-26 07:46:02'),
(25, 'mansoor', 'ss', 'mansoor@designbox.com.kw', NULL, '+96566481515', 'ssshkdhjjdhkjdh kdhdhkhdll dhkldjhkldjh ldkjdlkjd dkjdlkjdkljldljk', NULL, '2022-11-26 10:15:04', '2022-11-26 10:15:04'),
(26, 'wee', 'q12q2', 'z.mansoor@yahoo.com', NULL, '2333444555', '122333344455 dddfdfdf', NULL, '2022-11-26 11:11:49', '2022-11-26 11:11:49');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_10_021010_create_brands_table', 1),
(5, '2020_07_10_025334_create_banners_table', 1),
(6, '2020_07_10_112147_create_categories_table', 1),
(7, '2020_07_11_063857_create_products_table', 1),
(8, '2020_07_12_073132_create_post_categories_table', 1),
(9, '2020_07_12_073701_create_post_tags_table', 1),
(10, '2020_07_12_083638_create_posts_table', 1),
(11, '2020_07_13_151329_create_messages_table', 1),
(12, '2020_07_14_023748_create_shippings_table', 1),
(13, '2020_07_15_054356_create_orders_table', 1),
(14, '2020_07_15_102626_create_carts_table', 1),
(15, '2020_07_16_041623_create_notifications_table', 1),
(16, '2020_07_16_053240_create_coupons_table', 1),
(17, '2020_07_23_143757_create_wishlists_table', 1),
(18, '2020_07_24_074930_create_product_reviews_table', 1),
(19, '2020_07_24_131727_create_post_comments_table', 1),
(20, '2020_08_01_143408_create_settings_table', 1),
(21, '2022_09_09_160230_update_product_table', 2),
(22, '2022_09_09_160301_update_category_table', 3),
(23, '2022_09_10_152423_update_banner_table', 4),
(24, '2022_09_12_135320_update_order_table', 5),
(25, '2014_04_02_193005_create_translations_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0179f373-a45c-4a14-90ea-dd15f2ec80b7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/256\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 06:31:22', '2022-11-28 06:31:22'),
('0342c4eb-bba5-4d3b-afd9-bf38d680ff20', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/168\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 12:27:55', '2022-10-31 12:27:55'),
('03d99992-5a80-4073-b882-1508490c9522', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/141\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-28 06:04:13', '2022-10-28 06:04:13'),
('046ff67a-413a-43f2-afbf-e49bb838296a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/214\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:15:37', '2022-11-26 05:15:37'),
('04d91125-d856-44c6-99df-cfade59dbff8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/68\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:53:27', '2022-09-12 07:53:27'),
('04e83569-2c65-475a-95c2-562b2b89b2d0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/67\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:52:40', '2022-09-12 07:52:40'),
('05c126bb-c5be-4872-8313-3cd5c760d0c4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/217\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:17:17', '2022-11-26 05:17:17'),
('05c39ccf-27ff-4c3f-8d1c-34c5b0116773', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/100\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 22:18:17', '2022-09-12 22:18:17'),
('05c5cb6b-9a23-4cb6-9b53-fa20b959fa28', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/170\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-01 07:55:38', '2022-11-01 07:55:38'),
('06abfd45-74df-4192-8408-55b9f0266b2f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/207\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 12:22:15', '2022-11-25 12:22:15'),
('06eb3d6d-0e55-4f02-9628-02d59f51bb7b', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/29\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:14:39', '2022-07-18 01:14:39'),
('0748866f-8afb-44ce-9cd7-3c860a8da48c', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/125\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-12 14:02:17', '2022-10-12 14:02:17'),
('07b33993-133e-4cb3-978e-93c99ca18553', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/175\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-01 10:59:54', '2022-11-01 10:59:54'),
('07e7caeb-588a-482e-a569-7071ec972060', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/81\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:00:46', '2022-09-12 08:00:46'),
('085d7d12-e595-48c6-a12a-b475fa7d04d4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/321\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-08 10:21:38', '2022-12-08 10:21:38'),
('08bcd94f-e6c2-4a2f-a57f-905f7ce55f09', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/265\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 06:28:44', '2022-11-30 06:28:44'),
('0914171f-dd0b-496f-ba85-d753047c5548', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/40\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 02:47:10', '2022-07-18 02:47:10'),
('0ab23d2c-25fc-4557-9eed-d6a42ae8cead', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/291\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 13:00:39', '2022-12-05 13:00:39'),
('0b9eaa9a-283a-427f-8016-e5040873e3ab', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/52\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:31:59', '2022-07-18 03:31:59'),
('0c40a86b-b3db-4166-a421-dcc71baad7f1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/106\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 03:51:24', '2022-09-15 03:51:24'),
('0cbdecc8-1610-4f59-acb6-d1ffa85ac9d5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/76\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:57:05', '2022-09-12 07:57:05'),
('0ea55375-5b65-458c-b791-83150ef06e8d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/299\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 06:51:59', '2022-12-06 06:51:59'),
('0efc8cb4-cd7c-4676-a9f8-51a1b9a95af9', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/316\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-07 08:12:20', '2022-12-07 08:12:20'),
('10919cdd-065e-47d8-b914-02be2330f0ec', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/252\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:52:24', '2022-11-26 10:52:24'),
('10e6487b-71d0-447e-9855-4dcaacd440b8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/45\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:08:12', '2022-07-18 03:08:12'),
('116d5c31-b0c4-4287-b0df-9700b732b069', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/254\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 11:13:28', '2022-11-26 11:13:28'),
('1209ec16-30a9-411e-afa6-73e5feb60088', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/285\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 07:54:25', '2022-12-02 07:54:25'),
('1311a848-c1ab-44a9-a281-50a3f0f5874f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/114\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 14:35:40', '2022-09-15 14:35:40'),
('144b81e9-4ad7-4540-b8ee-001e49bb9072', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/208\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 12:33:13', '2022-11-25 12:33:13'),
('154b0a73-3946-416a-8d0d-8d3459f109db', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/94\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:43:51', '2022-09-12 08:43:51'),
('157deb4a-0113-4427-a83d-cf21ae0f8a97', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/257\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 06:57:30', '2022-11-28 06:57:30'),
('159fd07e-7dcf-4136-886a-3b42eb5b5767', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/159\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 10:39:43', '2022-10-31 10:39:43'),
('15c2cdd0-fd1d-4d9c-abf7-68e636cd0bb4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/150\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 07:20:42', '2022-10-29 07:20:42'),
('166e9a06-6792-4c62-9f3f-9965b9407aea', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/26\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 07:59:24', '2022-07-17 07:59:24'),
('167ee721-4f34-4832-9618-e473852e7b14', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/64\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:51:52', '2022-09-12 07:51:52'),
('1692338b-368f-4bf0-8ab3-8c633a4e62e7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/85\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:02:24', '2022-09-12 08:02:24'),
('16b5b157-a7d4-4180-8a36-afab39e94747', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/123\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-12 13:44:53', '2022-10-12 13:44:53'),
('185f8f48-b832-4764-b3c8-2a0b63926739', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/184\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 07:51:12', '2022-11-18 07:51:12'),
('1894b2bb-a815-4ca8-ac4f-feae7bfa0363', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/229\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 06:48:46', '2022-11-26 06:48:46'),
('192a0788-7e2c-431d-b896-19a63f58608d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/241\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:12:23', '2022-11-26 10:12:23'),
('1bafa847-304a-4e3c-addb-cf5af46fee2c', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/226\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:57:53', '2022-11-26 05:57:53'),
('1c364808-5672-42fe-9041-1871d7d7fdb1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/17\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:04:20', '2022-07-17 05:04:20'),
('1caf411c-1495-43cc-a0af-ed5592ec2f79', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/16\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 04:05:06', '2022-07-17 04:05:06'),
('1e81ec0e-fc0d-48f4-9c76-10a560d6151d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/213\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:15:23', '2022-11-26 05:15:23'),
('1eb9a243-8b20-48b9-bdfc-00baca6490fc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/171\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-01 09:59:44', '2022-11-01 09:59:44'),
('1f345f1f-10cb-47c8-8e3a-a0f8ea782688', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/83\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:01:11', '2022-09-12 08:01:11'),
('205625cc-5193-485d-a0a5-b204b6d239e0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/160\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 10:46:25', '2022-10-31 10:46:25'),
('21a747d5-ba12-4743-86e0-a7b070432fb4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/120\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-16 08:45:51', '2022-09-16 08:45:51'),
('22991314-671b-4b66-9073-7b468dc8d08e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/21\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:24:04', '2022-07-17 05:24:04'),
('23bdd5a7-f9a2-417a-a9a4-9844b72dd3db', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/15\",\"fas\":\"fa-file-alt\"}', '2022-07-19 21:56:13', '2022-07-17 03:31:53', '2022-07-19 21:56:13'),
('259032c6-c9c1-4dab-8a9c-0d21667333be', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/300\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 07:33:00', '2022-12-06 07:33:00'),
('275d1e67-ff02-4eae-af3b-d1e619b80e0e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/127\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-12 14:08:52', '2022-10-12 14:08:52'),
('2859801f-4465-46e4-a7fe-9a0ba8053067', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/192\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 10:43:38', '2022-11-18 10:43:38'),
('287ee8c1-b0c7-4051-b22e-828449fce4b9', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/293\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 13:01:48', '2022-12-05 13:01:48'),
('28d07a47-5711-4458-8457-fff676fe54bf', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/69\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:53:59', '2022-09-12 07:53:59'),
('2a2ba785-6416-439b-8ae9-1dbe12c01114', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/204\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 12:03:29', '2022-11-25 12:03:29'),
('2a4f934d-aa2d-424f-b7fe-1b1e38dbaa15', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/178\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-16 11:34:46', '2022-11-16 11:34:46'),
('2be0c7cc-c0f4-44be-ab0c-93eee2aa23e2', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/267\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 10:58:41', '2022-11-30 10:58:41'),
('2cb81a87-ce7a-4694-9b9a-1738e00c7e81', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/296\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 19:13:37', '2022-12-05 19:13:37'),
('2cffc255-488a-40ff-b517-29358f4fb2a6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/129\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-20 09:36:40', '2022-10-20 09:36:40'),
('2f0f6415-1a77-489f-b78d-26f098871ae8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/14\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 01:23:15', '2022-07-17 01:23:15'),
('32ab6820-6692-43b4-9d8a-bde2bab7d7e1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/295\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 18:51:05', '2022-12-05 18:51:05'),
('3381ac2f-88fc-4c92-abf1-2401321943e8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/108\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 03:56:45', '2022-09-15 03:56:45'),
('33f0e2b0-555a-4978-94b3-358a39e52411', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/138\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-27 13:16:01', '2022-10-27 13:16:01'),
('350aa9ba-9fd8-4ddb-bfb5-131ad0557195', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/23\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:27:38', '2022-07-17 05:27:38'),
('35f88dcc-6f8a-4c7f-8334-2fd7bed8db89', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/136\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-27 05:27:50', '2022-10-27 05:27:50'),
('37bf3d5d-f1b0-4e41-9cc2-b6357f799ac1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/73\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:55:38', '2022-09-12 07:55:38'),
('38e3b52e-e741-4d47-8a57-a30c5904c88c', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/134\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-22 05:38:02', '2022-10-22 05:38:02'),
('390eda11-0aaa-4da3-a7a8-7f18c2e58eac', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/145\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 04:18:10', '2022-10-29 04:18:10'),
('3ad452ab-8bac-4599-932f-0ec2d4a90774', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/70\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:54:09', '2022-09-12 07:54:09'),
('3adb6960-4829-4375-9494-839376e3f91a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/270\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 11:26:04', '2022-11-30 11:26:04'),
('3af6c129-72cf-4d84-8d2e-b54f67c73fd9', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/262\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 10:07:09', '2022-11-28 10:07:09'),
('3bad4561-877e-40ca-9f22-e782e4a624cb', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/276\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-01 04:22:52', '2022-12-01 04:22:52'),
('3c10bd89-8add-4f99-bb4e-277d1516a5ba', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/165\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 12:05:30', '2022-10-31 12:05:30'),
('3c88f902-302a-451f-a7d3-228b0e14a9d8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/188\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 10:37:04', '2022-11-18 10:37:04'),
('3cd08623-1f78-4b90-b1d7-5a5d436856c5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/56\",\"fas\":\"fa-file-alt\"}', '2022-07-19 21:55:23', '2022-07-18 04:23:04', '2022-07-19 21:55:23'),
('3dd30a12-2ac7-429c-b97d-fc1d5dc6cada', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/174\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-01 10:17:45', '2022-11-01 10:17:45'),
('3e0daa21-97a6-4c77-a26d-b89126877eb0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/34\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:46:21', '2022-07-18 01:46:21'),
('3f02ce4d-a13e-4b7a-9f09-4d604d9932a5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/39\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 02:06:15', '2022-07-18 02:06:15'),
('3f904606-cf39-41bf-8c03-e5967387a8f1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/315\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-07 05:30:00', '2022-12-07 05:30:00'),
('40029091-9979-4342-8c24-c691d02a10cc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/157\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 06:55:22', '2022-10-31 06:55:22'),
('40210729-42ed-4c23-8a60-f22dcf6a9b9e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/163\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 11:27:01', '2022-10-31 11:27:01'),
('40677970-1da5-4995-869c-4327403ffd58', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/317\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-07 08:13:15', '2022-12-07 08:13:15'),
('410839d1-c5a0-440c-9515-e05b381ec640', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/30\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:14:53', '2022-07-18 01:14:53'),
('41a344dc-222b-4802-9742-5b4c3b6bf3a8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/225\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:35:30', '2022-11-26 05:35:30'),
('41e2f78b-81ff-4cc5-b22f-2ffd126785ce', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/202\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 11:13:36', '2022-11-25 11:13:36'),
('42f725ba-3d91-4815-a4b7-5bf6cfa82fc7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/86\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:02:44', '2022-09-12 08:02:44'),
('4378550a-8844-4e6f-9694-91b0bc74bcda', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/107\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 03:55:36', '2022-09-15 03:55:36'),
('4385f301-58c1-4978-9750-19be4e3e4ca0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/320\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-08 10:20:34', '2022-12-08 10:20:34'),
('4482fe40-bc5f-46a0-864e-34b0f88e003f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/266\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 07:20:50', '2022-11-30 07:20:50'),
('44a592d1-ef42-476c-9b49-f582103fa923', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/72\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:55:05', '2022-09-12 07:55:05'),
('44b162bb-6a9e-4800-b4ae-789475af00ce', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/19\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:15:26', '2022-07-17 05:15:26'),
('45f89bce-a1a8-4754-803b-7c354b174e1b', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/116\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 14:38:08', '2022-09-15 14:38:08'),
('46df2f60-61a9-4cc5-bf82-3d9ca590a482', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/251\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:52:07', '2022-11-26 10:52:07'),
('46e1956b-c6bc-4b26-9e92-1479d24d1a0a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/11\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 00:34:45', '2022-07-17 00:34:45'),
('481bab51-b54e-4c57-ae5c-cd02e9a142d6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/65\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:52:03', '2022-09-12 07:52:03'),
('49ef3993-ece5-4bd5-adf2-0db7b80218ab', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/286\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 07:58:41', '2022-12-02 07:58:41'),
('4adb7771-98ad-4d3f-90d9-664c6fa870ad', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/146\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 04:26:00', '2022-10-29 04:26:00'),
('4afa0456-79ff-4456-92f3-9135bcaa3311', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/183\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 07:15:03', '2022-11-18 07:15:03'),
('4afa997d-a4d2-47dc-82be-5dda55fb3611', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/216\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:17:02', '2022-11-26 05:17:02'),
('4b226fb0-5526-4e3f-803d-41ed0c9441b5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/10\",\"fas\":\"fa-file-alt\"}', '2022-07-19 21:56:04', '2022-07-16 05:06:04', '2022-07-19 21:56:04'),
('4c2fb775-2874-4015-b1d9-65f5621790d2', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/59\",\"fas\":\"fa-file-alt\"}', '2022-07-19 21:55:14', '2022-07-18 05:05:00', '2022-07-19 21:55:14'),
('4c74cf63-5321-433c-ba69-718eb8d6da23', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/210\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 04:56:38', '2022-11-26 04:56:38'),
('4d140072-f67b-4d8c-b440-4df07e1b7532', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/287\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 08:00:03', '2022-12-02 08:00:03'),
('4e8a21c6-cf2b-43f3-8207-a93d1ba6998a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/238\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 09:51:11', '2022-11-26 09:51:11'),
('4f1c1c11-1c62-494a-9e4b-6afc080c24ca', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/279\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-01 05:43:47', '2022-12-01 05:43:47'),
('4fca8b83-bd1c-4bfc-9c9d-39c65971ecfa', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/234\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 08:30:08', '2022-11-26 08:30:08'),
('4fd2f8ef-3b89-497d-8f36-47cd574527fe', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/189\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 10:37:44', '2022-11-18 10:37:44'),
('50b0c839-d1c3-4610-bf8a-99ba73d20367', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/319\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-08 08:12:57', '2022-12-08 08:12:57'),
('52097a7c-8bc6-44d7-a2de-cd912704cef5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/185\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 07:53:38', '2022-11-18 07:53:38'),
('53264a88-5dff-42f3-9746-f8fc3434e694', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/84\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:01:34', '2022-09-12 08:01:34'),
('545ebd8f-e7e4-4e4b-9570-ccd3d79b90b8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/205\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 12:04:19', '2022-11-25 12:04:19'),
('563d9b05-fc7d-4b5b-bdad-d04e1a3a889d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/209\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 04:55:30', '2022-11-26 04:55:30'),
('58083dd6-af99-48fa-a0ac-d6618baad460', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/233\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 08:29:35', '2022-11-26 08:29:35'),
('584c4823-fe1c-45df-85ba-f7504ca8d4cc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/310\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:48:24', '2022-12-06 10:48:24'),
('5b5c8801-f63a-4b61-b716-bb8f8fd897bd', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/74\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:56:06', '2022-09-12 07:56:06'),
('5c0bcc5e-a701-4e40-8cb4-ff4005ebc76d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/186\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 08:25:07', '2022-11-18 08:25:07'),
('5d3dcfeb-1a7a-485d-ac13-53a0f06a9fb7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/79\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:00:00', '2022-09-12 08:00:00'),
('5d91c0f5-18b2-4705-a343-26da4dfd0026', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/308\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:31:23', '2022-12-06 10:31:23'),
('5e51e570-7024-40fb-9e89-9b4c9d3b8e48', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/305\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:00:31', '2022-12-06 10:00:31'),
('5e604c3d-821e-48c2-88de-67f161ca18e0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/121\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-19 10:41:22', '2022-09-19 10:41:22'),
('5ebdaa08-349f-4528-9ba6-ea8dd5160ab8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/288\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 10:06:44', '2022-12-02 10:06:44'),
('60114367-891b-4e24-950e-241a07e536c6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/124\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-12 13:53:54', '2022-10-12 13:53:54'),
('6030cb76-3f13-4f60-934e-136c532e8204', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/200\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 10:42:03', '2022-11-25 10:42:03'),
('6053c191-f45b-4215-9a02-9ba4ee16f0a6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/110\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 04:02:35', '2022-09-15 04:02:35'),
('6058110d-54e7-4194-9fc7-412014b53b2a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/13\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 00:49:12', '2022-07-17 00:49:12'),
('629fa40d-1418-43d9-9e53-6d60f560a738', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/164\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 11:28:50', '2022-10-31 11:28:50'),
('62d14167-fde5-408a-8c07-3ddb33fa66d5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/309\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:35:11', '2022-12-06 10:35:11'),
('6381019d-5142-491e-a69c-f56aaf8215d8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/318\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-08 08:12:47', '2022-12-08 08:12:47'),
('63cacdb5-79f0-4bdb-9780-f2c48476c781', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/103\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-14 11:44:34', '2022-09-14 11:44:34'),
('63e9f32d-b957-4c03-a42a-293ddf052805', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/272\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 12:20:00', '2022-11-30 12:20:00'),
('644a3e86-c0b8-4265-9175-088ed5cf6859', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/149\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 05:20:54', '2022-10-29 05:20:54'),
('65353749-f513-4427-bfa9-c0ed45aeb042', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/294\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 18:30:26', '2022-12-05 18:30:26'),
('65ab4f2c-7a98-4875-b8fe-f322cf075953', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/237\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 09:50:06', '2022-11-26 09:50:06'),
('66a2ac1e-5a96-4a1b-80e9-b5715bc16309', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/155\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 06:47:11', '2022-10-31 06:47:11'),
('6881dc47-bb64-4617-b5cd-5c3d8a0e1edc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/142\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-28 06:06:52', '2022-10-28 06:06:52'),
('68b9b98b-5ee2-49a9-8cf4-b4bb859de203', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/98\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 21:53:00', '2022-09-12 21:53:00'),
('68bc0077-788a-4858-96f7-0e008d5fdc0c', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/48\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:16:52', '2022-07-18 03:16:52'),
('6a7d2523-9cb8-4c7f-b67f-30c8ee8396bc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/166\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 12:06:49', '2022-10-31 12:06:49'),
('6aeea76f-3126-44b7-b1b4-e4b685f5d9fb', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/306\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:01:43', '2022-12-06 10:01:43'),
('6af47c1b-5ada-4ce3-9262-e65b4b73abb2', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/22\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:27:00', '2022-07-17 05:27:00'),
('6afe7d58-13a8-41f2-98ed-cd6f31ca5068', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/61\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:49:12', '2022-09-12 07:49:12'),
('6b895672-f254-4b8e-8d60-5abaf444bef3', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/60\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:32:03', '2022-09-12 07:32:03'),
('6c546a71-59ae-4c9e-adf4-6011e9dc2724', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/255\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 05:09:45', '2022-11-28 05:09:45'),
('6d23d396-0c82-4249-b651-ddf4804734cd', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/261\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 07:37:22', '2022-11-28 07:37:22'),
('6dc61d49-b13d-41f0-8ba2-8a64183f1389', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/147\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 04:54:44', '2022-10-29 04:54:44'),
('7000ac3f-4169-4b3a-8b71-88a42be04df6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/187\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 09:39:25', '2022-11-18 09:39:25'),
('70255167-1fdd-4350-9c27-fc9a4f22ee3e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/314\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-07 05:27:47', '2022-12-07 05:27:47'),
('70f0d889-6565-42c4-8724-22d8d3ad881d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/132\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-22 04:57:03', '2022-10-22 04:57:03'),
('71085c81-63c1-4b04-b872-b46277368ab6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/195\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-21 07:34:48', '2022-11-21 07:34:48'),
('71da5d64-ae65-47d1-a8f8-e82c13174dd0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/140\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-28 03:41:32', '2022-10-28 03:41:32'),
('73219ee1-8c91-472d-bf6b-6e8eddb1c336', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/301\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 07:35:06', '2022-12-06 07:35:06'),
('73f58d79-4faf-4328-9dca-3b00c3c8e4bd', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/181\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 06:57:17', '2022-11-18 06:57:17'),
('74231a37-95df-4ddd-b049-2d32e07ee5a4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/201\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 10:48:34', '2022-11-25 10:48:34'),
('7441b9d5-0a24-4784-8728-c315f61dd899', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/113\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 14:34:53', '2022-09-15 14:34:53'),
('749da56f-259a-498c-96da-2c84309eb043', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/44\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:01:44', '2022-07-18 03:01:44'),
('74cb790c-a56a-4633-86a5-eec3c8efd835', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/105\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 03:45:40', '2022-09-15 03:45:40'),
('752ad90d-92a5-441e-8ca6-72ad8cf64d53', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/223\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:21:38', '2022-11-26 05:21:38'),
('75fc60ea-7d1a-4b3b-92e3-3760e5fe6d2a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/154\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 06:41:51', '2022-10-31 06:41:51'),
('76797576-e226-40e5-b926-ff499cf1df2b', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/87\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:06:55', '2022-09-12 08:06:55'),
('77c96fcf-6626-4c75-8a65-18e3f36dca04', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/20\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:22:22', '2022-07-17 05:22:22'),
('780deb95-a8f6-4861-99ba-835e3c9004a6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/53\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:32:36', '2022-07-18 03:32:36'),
('78a4e7a7-b02b-4e5c-b992-41e7680eb606', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/289\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 12:49:36', '2022-12-05 12:49:36'),
('78d9f49d-97b4-4cb1-a5a4-533c830ae232', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/91\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:41:52', '2022-09-12 08:41:52'),
('796c2fe9-e741-4972-9b81-67f7a70d5ad7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/117\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-16 03:57:44', '2022-09-16 03:57:44'),
('79c9ecbf-4d23-449b-926a-b06166e265f4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/313\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-07 05:16:08', '2022-12-07 05:16:08'),
('7bfb70a6-e137-4fae-ab86-6cf69cff4048', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/211\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 04:57:39', '2022-11-26 04:57:39'),
('7cc24041-a831-47b0-a87f-7093aea8988f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/203\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 12:03:00', '2022-11-25 12:03:00'),
('7e75492c-257f-4f94-9a8f-aebe7127a3a5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/246\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:21:00', '2022-11-26 10:21:00');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('7f9f7e9a-45c6-4d32-9630-c21154b5b5c7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/283\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 07:51:43', '2022-12-02 07:51:43'),
('7fc5dfa3-8efd-4373-b5c9-ac6577950645', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/75\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:56:27', '2022-09-12 07:56:27'),
('815d8e4d-4676-4dfe-8a0f-7568781712e9', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/278\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-01 05:19:24', '2022-12-01 05:19:24'),
('815df240-e224-4749-8d1a-469e31776e3f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/232\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 08:28:17', '2022-11-26 08:28:17'),
('81bddae7-896e-4b77-83d2-b5939755d36f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/88\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:30:38', '2022-09-12 08:30:38'),
('82e42454-8360-4e75-856c-87168209fc25', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/206\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 12:04:28', '2022-11-25 12:04:28'),
('82e50048-c2fa-474d-9faa-baa03329419f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/90\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:40:28', '2022-09-12 08:40:28'),
('84462629-3f4e-477f-b842-1c8d809ed5c6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/130\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-20 09:46:06', '2022-10-20 09:46:06'),
('84e932eb-a654-420c-88c2-296cdfb6f5ba', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/259\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 07:06:51', '2022-11-28 07:06:51'),
('8573f32e-8710-4e65-8253-c2b664e14776', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/137\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-27 10:20:39', '2022-10-27 10:20:39'),
('85d628f0-ad02-4388-896f-02743ed20803', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/248\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:22:42', '2022-11-26 10:22:42'),
('85df1f3e-8074-4889-81d3-f4cab8903e1a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/182\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 07:12:10', '2022-11-18 07:12:10'),
('863f312f-af51-4655-9b88-8314a0234a22', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/307\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:13:19', '2022-12-06 10:13:19'),
('86e42262-1f7c-4682-a46f-3072771e6a81', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/297\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 19:22:34', '2022-12-05 19:22:34'),
('88c46f17-a4dd-4fe6-9cb7-a9bf1763d4d6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/228\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 06:39:31', '2022-11-26 06:39:31'),
('89bddbc8-f397-4dec-a9b9-03671d161544', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/28\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 21:51:45', '2022-07-17 21:51:45'),
('8ce94e8a-2564-4a05-ae40-e45b23cf1829', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/271\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 11:30:14', '2022-11-30 11:30:14'),
('8e41d524-cf7e-4bf4-8e84-958d8b16b8da', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/303\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 09:43:10', '2022-12-06 09:43:10'),
('9064074e-4ea8-49d7-8bc2-d2f673732543', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/247\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:21:39', '2022-11-26 10:21:39'),
('90ef179f-f04a-4dd1-8869-d082ea78b724', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/273\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 12:36:06', '2022-11-30 12:36:06'),
('91a3c691-cf1a-487e-978d-38f821705c21', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/133\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-22 04:59:31', '2022-10-22 04:59:31'),
('927741b9-041b-499a-ad20-cf82c0ca73e5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/112\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 04:12:32', '2022-09-15 04:12:32'),
('928aadbd-301d-4ed1-b801-3c92b5d2e5d2', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/235\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 08:31:08', '2022-11-26 08:31:08'),
('94093535-a368-4c3f-a105-724d001a01de', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/80\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:00:12', '2022-09-12 08:00:12'),
('952c6ade-9c0d-466c-9c5c-da930c0c39af', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/249\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:40:06', '2022-11-26 10:40:06'),
('95a28ac7-d169-4b1e-be47-17925bb3a781', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/41\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 02:49:40', '2022-07-18 02:49:40'),
('96bec452-600e-4614-a98a-1e4232fa663f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/122\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-06 07:36:06', '2022-10-06 07:36:06'),
('97c392b2-8fd6-4f7b-a12b-1d3ab5e535c0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/77\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:58:47', '2022-09-12 07:58:47'),
('98b69396-7480-4c1c-8a2f-89e7dda7a304', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/274\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-01 04:08:40', '2022-12-01 04:08:40'),
('99cfa563-8177-41bf-96f1-34c8e357e078', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/311\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:53:43', '2022-12-06 10:53:43'),
('9a271371-3594-492f-be94-8a6c1154281d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/179\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-17 10:43:36', '2022-11-17 10:43:36'),
('9a891377-e45d-484a-b5e2-b312e562f8ef', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/49\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:18:27', '2022-07-18 03:18:27'),
('9aeed681-b450-4c59-929b-dcbfc9d3471e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/258\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 07:03:57', '2022-11-28 07:03:57'),
('9d6d693f-d9ea-4954-82b6-61b02f7320af', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/230\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 07:28:25', '2022-11-26 07:28:25'),
('9f1bb15a-df64-4f8e-8dd0-5d898a9641d0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/172\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-01 10:00:24', '2022-11-01 10:00:24'),
('9f517fa1-239d-4e6e-818c-8a1ac769db13', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/173\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-01 10:02:07', '2022-11-01 10:02:07'),
('9f8f54d6-dee3-46ec-88d3-f1bb66dfd037', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/162\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 10:58:06', '2022-10-31 10:58:06'),
('9ff18809-6528-4fe4-be52-b2e1f5b16c92', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/63\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:51:24', '2022-09-12 07:51:24'),
('a030b822-dc81-413e-889f-061b7361d6cd', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/239\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 10:04:11', '2022-11-26 10:04:11'),
('a28f5fc5-55fa-4b63-b309-0625ac23c8f4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/221\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:20:52', '2022-11-26 05:20:52'),
('a2ee584e-5a07-4763-b8ad-8c9a43a79e0d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/260\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 07:34:33', '2022-11-28 07:34:33'),
('a3dd4fdd-b03f-42d9-9c75-a4fdefdb856e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/54\",\"fas\":\"fa-file-alt\"}', '2022-07-19 21:55:46', '2022-07-18 03:39:28', '2022-07-19 21:55:46'),
('a41fc93a-2b4f-46da-91a4-6c23e8db36c1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/95\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:44:31', '2022-09-12 08:44:31'),
('a46fc72f-83a4-46a9-b07f-bc216fa92926', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/126\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-12 14:08:22', '2022-10-12 14:08:22'),
('a698cf59-d8a3-4570-b149-3a58affb8884', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/119\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-16 08:06:13', '2022-09-16 08:06:13'),
('a81c6758-eca7-4bfb-ad1f-e1684ee0db2f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/78\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:59:19', '2022-09-12 07:59:19'),
('a856ae73-d591-4378-b26c-71db986836c1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/144\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 04:15:29', '2022-10-29 04:15:29'),
('a8b74921-5662-49dd-a2e7-7f616c25fc88', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/89\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:37:14', '2022-09-12 08:37:14'),
('a8bf55ee-4ab9-4812-b051-b2e4d45f9c93', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/104\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-14 11:46:39', '2022-09-14 11:46:39'),
('aadd3993-6d6d-493d-bc75-635d9d0ae107', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/37\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 02:02:19', '2022-07-18 02:02:19'),
('ab3a66c9-d908-4b30-a898-a6cc15d2b1c8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/292\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 13:01:04', '2022-12-05 13:01:04'),
('abbc4cb5-d123-4ba2-84d0-953ff878be86', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/152\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 08:46:15', '2022-10-29 08:46:15'),
('abe37989-16d6-4f47-bbe4-69c5158a3746', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/62\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:51:05', '2022-09-12 07:51:05'),
('b19d0f32-ab64-4b11-9693-49114f3a8487', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/31\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:24:49', '2022-07-18 01:24:49'),
('b1a22915-075d-40af-89a1-09e40d20dd69', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/180\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-17 11:18:20', '2022-11-17 11:18:20'),
('b25f7a15-6fbb-466f-b4f1-46bde206822e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/156\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 06:48:24', '2022-10-31 06:48:24'),
('b43c87ef-82fc-4509-be77-49e27566f9eb', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/131\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-22 04:14:07', '2022-10-22 04:14:07'),
('b63f2bfd-0df6-4eb1-954c-04b33fe7b856', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/99\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 22:17:15', '2022-09-12 22:17:15'),
('b67d8adf-b8eb-4a8c-987c-962bc037f408', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/42\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 02:59:45', '2022-07-18 02:59:45'),
('b70ffa6f-6896-4f60-903f-ddcc7f6a7457', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/281\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 07:36:42', '2022-12-02 07:36:42'),
('b7b7a8d4-b72b-44ce-a5fe-85d9a185d3cd', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/231\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 07:57:13', '2022-11-26 07:57:13'),
('b95e398f-5b7f-4448-95ad-066f9a9e19bc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/115\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 14:35:52', '2022-09-15 14:35:52'),
('bb52547c-09f5-44b0-afff-deff82cdb994', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/71\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:54:22', '2022-09-12 07:54:22'),
('bb634099-7695-4ead-883e-ea08550e6872', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/66\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 07:52:11', '2022-09-12 07:52:11'),
('bb90bafd-7b8c-4173-bdc5-c80f0d86125b', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/236\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 09:48:43', '2022-11-26 09:48:43'),
('bbe034b8-80c2-4573-af9a-50cb16230588', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/227\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 06:27:43', '2022-11-26 06:27:43'),
('bcc41c0e-1ead-4957-acad-9c4907f99f8f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/36\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:59:28', '2022-07-18 01:59:28'),
('bd0dd6d5-17bf-4f9f-8592-03dfdc00fee0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/269\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 11:11:00', '2022-11-30 11:11:00'),
('bd79f3bb-56fa-4e62-94dd-6b691661b4a8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/35\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:50:31', '2022-07-18 01:50:31'),
('be8c5036-5dea-4bab-bd40-57388aeb1723', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/280\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-01 06:30:03', '2022-12-01 06:30:03'),
('c154d920-3163-4d00-9f20-bca02c123949', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/253\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 11:09:59', '2022-11-26 11:09:59'),
('c2b15322-af99-44c0-956d-e3e54ea3bac6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/97\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 21:49:20', '2022-09-12 21:49:20'),
('c5119e1d-6d13-46ae-b31e-d871d3827e27', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/177\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-16 10:55:03', '2022-11-16 10:55:03'),
('c6533147-d865-4a75-9778-5613d79bb6e5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/148\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 05:05:38', '2022-10-29 05:05:38'),
('c671fcbb-1fc0-4eb2-8853-558f5eb013c6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/275\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-01 04:14:13', '2022-12-01 04:14:13'),
('c7224694-f381-45cb-8754-80299064829f', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/290\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-05 12:58:36', '2022-12-05 12:58:36'),
('c814ba1a-7246-46cb-86f5-baced32c4970', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/24\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:31:55', '2022-07-17 05:31:55'),
('c83151f0-cfe5-437d-b421-3965ecd62efd', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/151\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 07:33:48', '2022-10-29 07:33:48'),
('c8704cc7-2576-49dd-b44a-ff8c488882c1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/284\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 07:54:02', '2022-12-02 07:54:02'),
('c8d90757-de3b-4cc0-8855-5dfcb115f6a5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/302\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 09:39:33', '2022-12-06 09:39:33'),
('c9e0ece9-260c-4646-9f02-5240979ca157', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/57\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 05:03:57', '2022-07-18 05:03:57'),
('c9f4baa5-1252-415e-b343-3cd328a2f177', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/198\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-22 08:11:26', '2022-11-22 08:11:26'),
('ca61e90b-5366-4437-a32a-f8ea3c942286', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/196\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-22 08:09:16', '2022-11-22 08:09:16'),
('cb5cbed7-0713-431f-a141-79b74e71625a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/194\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-20 14:40:05', '2022-11-20 14:40:05'),
('ccf474ad-5334-4658-b806-c3e993555cd7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/111\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 04:03:34', '2022-09-15 04:03:34'),
('cecdfc72-61ac-44c1-8807-09275b3a148b', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/92\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:43:16', '2022-09-12 08:43:16'),
('cf6773cf-d8fe-4498-9615-64387d69f405', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/12\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 00:35:49', '2022-07-17 00:35:49'),
('cf9bfe81-d1cd-4d5e-b3af-edaed178dde7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/277\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-01 05:11:37', '2022-12-01 05:11:37'),
('d1f194be-fce0-4372-85b0-a3b24d56cdf3', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/220\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:20:40', '2022-11-26 05:20:40'),
('d266c69e-7583-4dad-b3d2-d99b00e1d422', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/101\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-14 09:18:17', '2022-09-14 09:18:17'),
('d2985ff2-9c68-4ad5-8bd4-63b2b1573669', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/96\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:45:08', '2022-09-12 08:45:08'),
('d2d89b07-a5f8-4d94-bdb7-72e6481810bc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/50\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:19:53', '2022-07-18 03:19:53'),
('d4535f10-1481-40c1-811f-690d7d1fe034', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/51\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:29:43', '2022-07-18 03:29:43'),
('d53cb6f5-b3e5-48fa-813c-d40cbd1a240a', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/25\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 07:50:11', '2022-07-17 07:50:11'),
('d6b6dfeb-1363-4427-bc66-3298f9327099', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/32\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:25:44', '2022-07-18 01:25:44'),
('d6d3b643-e96f-4db2-8b67-2c3d3b42922e', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/43\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:00:03', '2022-07-18 03:00:03'),
('d894ba6b-9f71-401e-ad27-ff17a06caf6d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/93\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:43:33', '2022-09-12 08:43:33'),
('d9b822d9-b9ed-46e1-9c5c-ddfa313fb0e1', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/47\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:14:56', '2022-07-18 03:14:56'),
('da963814-9074-4fcc-a3e1-5655a37efad3', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/218\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:18:44', '2022-11-26 05:18:44'),
('db00ce6b-53ab-427e-b42a-3a70430a1fa8', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:1111\\/admin\\/order\\/82\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-12 08:00:59', '2022-09-12 08:00:59'),
('db865e65-f21f-4dea-a2e2-ffb82f437728', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/304\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 09:59:06', '2022-12-06 09:59:06'),
('db8d280f-96a1-492b-96f7-830cea3588ba', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/264\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 06:26:31', '2022-11-30 06:26:31'),
('dd0e72b0-c6ca-48a7-adbd-90edffc0bbcf', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/167\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 12:11:11', '2022-10-31 12:11:11'),
('dd4bfb07-eb15-49f6-96a9-624866c5def0', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/176\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-16 10:40:20', '2022-11-16 10:40:20'),
('dd56c890-d694-464c-bf3d-286cfe1ba0cb', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/139\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-27 13:18:03', '2022-10-27 13:18:03'),
('de584af1-d5fa-44bd-bf1e-8f7937388535', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/215\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:15:55', '2022-11-26 05:15:55'),
('df9251d3-348e-4e9c-9225-dff239439281', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/190\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 10:38:24', '2022-11-18 10:38:24'),
('e02502dd-e7e5-4b7d-b0a8-eb5d80958a33', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/161\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 10:50:39', '2022-10-31 10:50:39'),
('e1b80bc2-97c2-4bdf-94c8-b60d01ce4d10', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/46\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:08:54', '2022-07-18 03:08:54'),
('e2c690f4-4f92-4ed5-bce2-664764cc14c9', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/153\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 06:31:33', '2022-10-31 06:31:33'),
('e38776dc-aba6-4bf0-83c1-c895188d7b84', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/282\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-02 07:48:15', '2022-12-02 07:48:15'),
('e405e94a-e7e1-4069-bb65-e65ad363ef83', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/118\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-16 03:59:50', '2022-09-16 03:59:50'),
('e4aa956f-d41b-482a-af7f-880f0efa2f2d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/263\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-28 10:25:21', '2022-11-28 10:25:21'),
('e4d9f44a-a95b-499c-9541-a874d2611c05', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/197\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-22 08:10:04', '2022-11-22 08:10:04'),
('e6989f30-c60f-46be-809b-09ea7410f871', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/191\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 10:43:02', '2022-11-18 10:43:02'),
('e6e274fb-b7af-407f-8868-c61103e172df', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/33\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 01:27:21', '2022-07-18 01:27:21'),
('e912f4e1-879e-441d-be5a-19d1513da3b6', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/169\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-01 04:16:55', '2022-11-01 04:16:55'),
('eac27d5a-35d6-4a73-a341-9c8e0c72567b', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/109\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-15 04:00:54', '2022-09-15 04:00:54'),
('ee4f672d-4f8b-43c1-a453-c04ec8e3ed81', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/268\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-30 11:09:49', '2022-11-30 11:09:49'),
('ef10fec9-b27c-403f-9df4-972f7ac35007', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/158\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-31 06:57:39', '2022-10-31 06:57:39'),
('f06c28fd-2ba0-4995-8074-f85abcd763ec', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/212\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 04:57:49', '2022-11-26 04:57:49'),
('f08d827a-c389-465d-8809-78df675b68c4', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/143\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-29 04:13:04', '2022-10-29 04:13:04'),
('f1766f61-886c-492f-8465-6b54b4ec8f8d', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/199\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-25 07:24:32', '2022-11-25 07:24:32'),
('f178d720-2cf3-4b9c-8355-5efc0fac2a19', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/128\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-12 14:16:43', '2022-10-12 14:16:43'),
('f4128cf3-b774-4521-9d2f-4a9f59e62bfc', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/312\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 10:54:22', '2022-12-06 10:54:22'),
('f44e5cf3-db0b-42e2-b678-f7bfd0e3b7a9', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/55\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 03:45:54', '2022-07-18 03:45:54'),
('f5f5decc-e699-4ddd-b9ba-fea2979621ea', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/193\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-18 10:43:39', '2022-11-18 10:43:39'),
('f633d6e8-75bb-4f01-b9c4-ef4042d50668', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/219\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:20:18', '2022-11-26 05:20:18'),
('f72af17e-d42b-4832-8230-18ebbc1941ae', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/135\",\"fas\":\"fa-file-alt\"}', NULL, '2022-10-27 04:03:23', '2022-10-27 04:03:23'),
('f94622c7-2e37-4795-b0fb-9cf422badafd', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/222\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:21:22', '2022-11-26 05:21:22'),
('f976243f-4357-4054-8634-30f673a4ddca', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/102\",\"fas\":\"fa-file-alt\"}', NULL, '2022-09-14 11:38:55', '2022-09-14 11:38:55'),
('fc82f6f5-7b10-419e-a5e3-0128f7bcf1e7', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/298\",\"fas\":\"fa-file-alt\"}', NULL, '2022-12-06 06:51:27', '2022-12-06 06:51:27'),
('fe0d41c1-af30-4fba-b228-b72d08e5edbf', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 55, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/bahja-latest.theklozet.com\\/admin\\/order\\/224\",\"fas\":\"fa-file-alt\"}', NULL, '2022-11-26 05:34:15', '2022-11-26 05:34:15'),
('feb9d8be-1b45-47fb-af79-e9c4b2310522', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/27\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 21:51:07', '2022-07-17 21:51:07'),
('febe570a-f134-4225-ae53-9a211d9fedef', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/38\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-18 02:05:07', '2022-07-18 02:05:07'),
('febf703a-eb68-4230-b855-f6bb4e9bb8ad', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/18\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-17 05:05:05', '2022-07-17 05:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_total` double(8,3) NOT NULL,
  `shipping_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `coupon` double(8,3) DEFAULT 0.000,
  `total_amount` double(8,3) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_method` enum('knet','myfatoorah') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` enum('paid','unpaid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `status` enum('new','process','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReferenceId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `sub_total`, `shipping_id`, `product_id`, `coupon`, `total_amount`, `quantity`, `payment_method`, `payment_status`, `status`, `first_name`, `last_name`, `email`, `phone`, `country`, `post_code`, `address1`, `address2`, `created_at`, `updated_at`, `name`, `paymentId`, `ReferenceId`, `checkout_type`) VALUES
(254, 'ORD-0SGBRULG2O', NULL, 35.000, 18, 0, 0.000, 36.000, 1, 'knet', 'paid', 'process', 'KUNAL PANDEY', '', 'kunal@shivalikjournal.com', '9149252803', NULL, NULL, 'KUWAIT BLOCK 40 NEAR ABC', '', '2022-10-26 10:13:28', '2022-11-26 11:30:05', NULL, '100202233030605190', '233010000207', 'guest#69339'),
(255, 'ORD-VUN01ILOCY', NULL, 33.000, 23, 0, 0.000, 35.000, 1, 'knet', 'paid', 'process', 'KUNAL PANDEY', '', 'kunal@shivalikjournal.com', '9149252803', NULL, NULL, 'KUWAIT BLOCK 40 NEAR ABC', '', '2022-11-28 05:09:45', '2022-11-28 06:30:12', NULL, '100202233293904938', '233210000096', 'guest#77712'),
(256, 'ORD-YYXTK0VCMD', NULL, 55.000, 21, 0, 0.000, 56.000, 1, 'knet', 'paid', 'process', 'KUNAL PANDEY', '', 'kunal@shivalikjournal.com', '9149252803', NULL, NULL, 'KUWAIT BLOCK 40 NEAR ABC', '', '2022-11-28 06:31:21', '2022-11-28 07:54:42', NULL, '100202233291457697', '233210000239', 'guest#66051'),
(257, 'ORD-MHEBF8TFAI', NULL, 55.000, 22, 0, 0.000, 58.000, 1, 'knet', 'paid', 'process', 'Diksha', '', 'test@mail.com', '2573844211', NULL, NULL, '2332', '', '2022-11-28 06:57:30', '2022-11-28 06:57:54', NULL, '100202233209325962', '233210000292', 'guest#58356'),
(258, 'ORD-PPYQWRQPBS', NULL, 20.000, 14, 0, 0.000, 22.000, 1, 'knet', 'paid', 'process', 'Diksha', '', 'dikshajadoun9582@gmail.com', '2573844211', NULL, NULL, '2332', '', '2022-11-28 07:03:56', '2022-11-28 07:04:23', NULL, '100202233209518919', '233210000305', 'guest#58356'),
(259, 'ORD-PRN31EUNLB', NULL, 20.000, 23, 0, 0.000, 22.000, 1, 'knet', 'paid', 'process', 'Diksha', '', 'dikshajadoun9582@gmail.com', '2573844211', NULL, NULL, '2332', '', '2022-11-28 07:06:51', '2022-11-28 07:07:47', NULL, '100202233290394056', '233210000317', 'guest#71875'),
(260, 'ORD-GC564ZGUWR', 62, 85.000, 22, 0, 0.000, 88.000, 2, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '9555372847', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-11-28 07:34:33', '2022-11-28 07:35:23', NULL, '100202233210437377', '233210000394', 'registered#62'),
(261, 'ORD-2IOWRSVWZR', 62, 174.000, 22, 0, 0.000, 177.000, 5, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '9555372847', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-11-28 07:37:22', '2022-11-28 07:52:32', NULL, '100202233210521268', '233210000399', 'registered#62'),
(263, 'ORD-7FGRDN1WGL', 62, 81.000, 22, 0, 0.000, 84.000, 3, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '9555372847', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-11-28 10:25:21', '2022-11-28 10:25:53', NULL, '100202233215561513', '233210000717', 'registered#62'),
(265, 'ORD-ZTQXJE15OH', 68, 55.000, 22, 0, 0.000, 58.000, 1, 'knet', 'paid', 'process', 'ABC', '', 'bahja123@gmail.com', '1234567890', '', NULL, 'House no 21', '', '2022-11-30 06:28:44', '2022-11-30 06:30:23', NULL, '100202233444862075', '233410000231', 'registered#68'),
(266, 'ORD-IGRKYRDKWB', 56, 75.000, 10, 0, 0.000, 79.000, 2, 'knet', 'paid', 'process', 'KUNAL PANDEY', '', 'admin@gmail.com', '25738442', '', '4', 'Kuwait ABC Complex 101 East', '', '2022-11-30 07:20:50', '2022-11-30 08:29:08', NULL, '100202233446425627', '233410000324', 'registered#56'),
(274, 'ORD-VVWH4B7XR3', 68, 20.000, 22, 0, 0.000, 23.000, 1, 'knet', 'paid', 'process', 'ABC', '', 'bahja123@gmail.com', '1234567890', '', NULL, 'House no 21', '', '2022-12-01 04:08:39', '2022-12-01 04:09:25', NULL, '100202233533860550', '233510000086', 'registered#68'),
(275, 'ORD-PDJABTITQW', 68, 120000.000, 22, 0, 0.000, 120003.000, 2, 'knet', 'paid', 'process', 'ABC', '', 'bahja123@gmail.com', '1234567890', '', NULL, 'House no 21', '', '2022-12-01 04:14:13', '2022-12-01 04:14:38', NULL, '100202233534026876', '233510000089', 'registered#68'),
(276, 'ORD-7K7ZXHYAI0', 68, 40000.000, 22, 0, 0.000, 40003.000, 1, 'knet', 'paid', 'process', 'Karamjeet', '', 'bahja123@gmail.com', '1234567890', '', NULL, 'House no 21', '', '2022-12-01 04:22:52', '2022-12-01 04:23:19', NULL, '100202233565713697', '233510000091', 'registered#68'),
(279, 'ORD-YCMGUTDIAG', NULL, 85.000, 22, 0, 0.000, 88.000, 2, 'knet', 'paid', 'process', 'KUNAL PANDEY', '', 'kunal@shivalikjournal.com', '91492528', NULL, NULL, 'KUWAIT BLOCK 40 NEAR ABC', '', '2022-12-01 05:43:47', '2022-12-01 05:44:30', NULL, '100202233563286071', '233510000156', 'guest#55518'),
(280, 'ORD-IRYM336KWY', NULL, 50.000, 20, 0, 0.000, 53.000, 1, 'knet', 'paid', 'process', 'KUNAL PANDEY', '', 'kunal@shivalikjournal.com', '91492528', NULL, NULL, 'KUWAIT BLOCK 40 NEAR ABC <Block>: 100 <Delivery Instruction>: Make a call before you reach', '', '2022-12-01 06:30:03', '2022-12-01 06:31:20', NULL, '100202233538101950', '233510000250', 'guest#73060'),
(281, 'ORD-6WK70NX8S6', NULL, 55.000, 20, 0, 0.000, 58.000, 1, 'knet', 'paid', 'process', 'Testing', '', 'abcde@gmail.com', '12345689', NULL, NULL, 'A block (Block): Block b (Delivery Instruction): No', '', '2022-12-02 07:36:41', '2022-12-02 07:37:28', NULL, '100202233666697085', '233610000256', 'guest#59862'),
(287, 'ORD-FWMDIX9F3A', NULL, 72.000, 18, 0, 0.000, 73.000, 2, 'knet', 'paid', 'process', 'Testinga', '', 'vkr@gmail.com', '12345667', NULL, NULL, 'A block (Block): Ab (Delivery Instruction): No', '', '2022-12-02 08:00:03', '2022-12-02 08:00:49', NULL, '100202233665996571', '233610000280', 'guest#59862'),
(289, 'ORD-RYHOGRZXQS', 67, 10.000, 22, 0, 0.000, 13.000, 1, 'knet', 'paid', 'process', 'masnoor', '', 'manzakir@gmail.com', '1515', '', NULL, '66482660', '', '2022-12-05 12:49:36', '2022-12-05 12:51:09', NULL, '100202233977710957', '233910001120', 'registered#67'),
(298, 'ORD-ZQZYUXAEMT', NULL, 13.000, 14, 0, 0.000, 15.000, 2, 'knet', 'unpaid', 'new', 'Abhishek', '', 'dangiabhi672@gmail.com', '76548978', NULL, NULL, 'eqknfgkewmegn jewng we gt testing (Block): 525 (Delivery Instruction): erherhhrtj67tjdfgfjj', '', '2022-12-06 06:51:27', '2022-12-06 06:51:27', NULL, NULL, NULL, 'guest#57342'),
(299, 'ORD-RP4HBTZWCC', NULL, 13.000, 22, 0, 0.000, 16.000, 2, 'knet', 'unpaid', 'new', 'Abhishek', '', 'dangiabhi672@gmail.com', '76548978', NULL, NULL, 'eqknfgkewmegn jewng we gt testing (Block): 525 (Delivery Instruction): erherhhrtj67tjdfgfjj', '', '2022-12-06 06:51:59', '2022-12-06 06:51:59', NULL, NULL, NULL, 'guest#57342'),
(300, 'ORD-7MCDIOTR3G', 67, 24.800, 22, 0, 0.000, 27.800, 3, 'knet', 'unpaid', 'cancel', 'masnoor', '', 'manzakir@gmail.com', '1515', '', NULL, '66482660', '', '2022-12-06 07:33:00', '2022-12-06 07:33:41', NULL, '100202234094009818', '234010000392', 'registered#67'),
(301, 'ORD-SKGKOFKVEW', 67, 31.800, 22, 0, 0.000, 34.800, 4, 'knet', 'paid', 'process', 'masnoor', '', 'manzakir@gmail.com', '1515', '', NULL, '66482660', '', '2022-12-06 07:35:06', '2022-12-06 07:35:31', NULL, '100202234093946851', '234010000395', 'registered#67'),
(302, 'ORD-VVPHW7Q2JY', 62, 18.000, 22, 0, 0.000, 21.000, 3, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 09:39:33', '2022-12-06 09:42:40', NULL, '100202234090212298', '234010000653', 'registered#62'),
(303, 'ORD-X9EBY1AWUZ', 62, 7.000, 22, 0, 0.000, 10.000, 1, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 09:43:10', '2022-12-06 09:44:00', NULL, '100202234009895354', '234010000658', 'registered#62'),
(304, 'ORD-K4OMEDI919', 62, 14.000, 22, 0, 0.000, 17.000, 2, 'knet', 'unpaid', 'cancel', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 09:59:05', '2022-12-06 09:59:39', NULL, '100202234010373883', '234010000714', 'registered#62'),
(305, 'ORD-BRQVSYN8Y5', 62, 25.000, 22, 0, 0.000, 28.000, 4, 'knet', 'unpaid', 'cancel', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:00:31', '2022-12-06 10:00:58', NULL, '100202234089584480', '234010000717', 'registered#62'),
(306, 'ORD-BERG5NTRMG', 62, 25.000, 22, 0, 0.000, 28.000, 4, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:01:43', '2022-12-06 10:12:58', NULL, '100202234010451660', '234010000721', 'registered#62'),
(307, 'ORD-7TAZX1TZZJ', 62, 7.000, 22, 0, 0.000, 10.000, 1, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:13:19', '2022-12-06 10:19:33', NULL, '100202234089200300', '234010000760', 'registered#62'),
(308, 'ORD-IEMZD5O2DZ', 62, 7.000, 22, 0, 0.000, 10.000, 1, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:31:23', '2022-12-06 10:34:48', NULL, '100202234088657064', '234010000801', 'registered#62'),
(309, 'ORD-M2GGICBGKZ', 62, 6.000, 22, 0, 0.000, 9.000, 1, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:35:11', '2022-12-06 10:35:56', NULL, '100202234011456703', '234010000816', 'registered#62'),
(310, 'ORD-VVGBXKMQV3', 62, 6.000, 22, 0, 0.000, 9.000, 1, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:48:24', '2022-12-06 10:52:52', NULL, '100202234088146697', '234010000848', 'registered#62'),
(311, 'ORD-Q5J5OUO5VD', 62, 6.000, 22, 0, 0.000, 9.000, 1, 'knet', 'unpaid', 'cancel', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:53:43', '2022-12-06 10:54:09', NULL, '100202234087988097', '234010000862', 'registered#62'),
(312, 'ORD-WHPMKT5KPN', 62, 6.000, 22, 0, 0.000, 9.000, 1, 'knet', 'paid', 'process', 'Abhishek Dangi', '', 'abhishek@bharatarpanet.com', '55845755', '', NULL, 'H-420 sector 420 Noida UP', '', '2022-12-06 10:54:22', '2022-12-06 11:01:48', NULL, '100202234012031292', '234010000864', 'registered#62'),
(313, 'ORD-WTGANRAMD8', NULL, 13.220, 20, 0, 0.000, 16.220, 1, 'knet', 'unpaid', 'new', 'test new', '', 'new@gmail.com', '12345678', NULL, NULL, 'asv (Block): Block H (Delivery Instruction): ', '', '2022-12-07 05:16:08', '2022-12-07 05:16:08', NULL, NULL, NULL, 'guest#71605'),
(314, 'ORD-ELNYNY2UNO', 63, 13.220, 19, 0, 0.000, 15.220, 1, 'knet', 'unpaid', 'cancel', 'Abh', '', 'karamjeetkaur487@gmail.com', '12345667', '', NULL, 'Aab', '', '2022-12-07 05:27:47', '2022-12-07 05:28:37', NULL, '100202234145434039', '07071894543137254773', 'registered#63'),
(315, 'ORD-L61N224DK6', 63, 13.220, 19, 0, 0.000, 15.220, 1, 'knet', 'paid', 'process', 'Abh', '', 'karamjeetkaur487@gmail.com', '12345667', '', NULL, 'Aab', '', '2022-12-07 05:30:00', '2022-12-07 05:30:41', NULL, '100202234145500648', '234110000202', 'registered#63'),
(316, 'ORD-VYFLLRQFUL', 63, 13.220, 19, 0, 0.000, 15.220, 1, 'knet', 'unpaid', 'new', 'Abh', '', 'karamjeetkaur487@gmail.com', '12345667', '', NULL, 'Aab', '', '2022-12-07 08:12:20', '2022-12-07 08:12:20', NULL, NULL, NULL, 'registered#63'),
(317, 'ORD-TQCOELX7LU', 63, 13.220, 18, 0, 0.000, 14.220, 1, 'knet', 'unpaid', 'new', 'Abh1', '', 'karamjeetkaur487@gmail.com', '12345667', '', NULL, 'Aaaa', '', '2022-12-07 08:13:15', '2022-12-07 08:13:15', NULL, NULL, NULL, 'registered#63'),
(318, 'ORD-RF1VTK2XZU', 55, 2.550, 23, 0, 0.000, 4.550, 1, 'knet', 'unpaid', 'new', 'karam', '', 'admin@bahjakw.com', '123456789', '', NULL, 'House no 21', '', '2022-12-08 08:12:47', '2022-12-08 08:12:47', NULL, NULL, NULL, 'registered#55'),
(319, 'ORD-PR8BW70JHT', 55, 2.550, 23, 0, 0.000, 4.550, 1, 'knet', 'unpaid', 'new', 'karam', '', 'admin@bahjakw.com', '123456789', '', NULL, 'House no 21', '', '2022-12-08 08:12:56', '2022-12-08 08:12:56', NULL, NULL, NULL, 'registered#55'),
(320, 'ORD-NHAW6LSH4N', 63, 11.330, 18, 0, 0.000, 12.330, 1, 'knet', 'unpaid', 'cancel', 'Joy', '', 'karamjeetkaur487@gmail.com', '12345685', '', NULL, 'Kuwait', '', '2022-12-08 10:20:34', '2022-12-08 10:21:20', NULL, '100202234252576198', '234210000661', 'registered#63'),
(321, 'ORD-F9C83ZCND2', 63, 11.330, 18, 0, 0.000, 12.330, 1, 'knet', 'paid', 'process', 'Joy', '', 'karamjeetkaur487@gmail.com', '12345685', '', NULL, 'Kuwait', '', '2022-12-08 10:21:38', '2022-12-08 10:22:04', NULL, '100202234252551053', '234210000663', 'registered#63');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('HASMUKHDHARAJIYA8182@GMAIL.COM', '$2y$10$p8yUooo1B03h9M0xEjtd6.ax.xV3bbYQe/jVIrMwiNHgeCzLJHR4q', '2022-07-15 21:31:11'),
('admin@gmail.com', '$2y$10$dr.HTHFKIO9AJUrlTdxHzOX.n/WugAjuciF1nIzdDXXpPMsXV6GSe', '2022-09-16 02:54:14'),
('dikshajadoun9582@gmail.com', '$2y$10$uYD7VA8knMEgZKXsNuBMLecbX5LCK6oOcBtplo6CKQ7nqzAo1a2CG', '2022-11-25 06:56:41'),
('test@gmail.com', '$2y$10$MnINIhTi8UEtrPixaxQtZ.w.O0X19869V/AmQ4c3D5Xl1ViqExc46', '2022-12-02 08:45:44'),
('karamjeetkaur487@gmail.com', '$2y$10$2m4HpjYCNbYDEAhILIwqW.7AAnuUXU0jHPO/PEPzjdvXTOIBKWCTO', '2022-12-02 11:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 1,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'M',
  `condition` enum('default','new','hot') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `productType` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,3) NOT NULL,
  `discount` double(8,3) DEFAULT 0.000,
  `is_featured` tinyint(1) NOT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `summary`, `description`, `photo`, `stock`, `size`, `condition`, `status`, `productType`, `price`, `discount`, `is_featured`, `cat_id`, `child_cat_id`, `brand_id`, `created_at`, `updated_at`, `title_ar`, `summary_ar`, `description_ar`) VALUES
(61, 'Perfume number 1', 'aatr-rkm-1', 'Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022', 'Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022', 'https://bahja-latest.theklozet.com/storage/photos/56/Perfume-1.jpg', 0, '50ml', 'new', 'active', 'newarrivals', 10.000, 5.000, 1, 19, NULL, NULL, '2022-10-29 09:03:50', '2022-12-01 04:09:25', 'عطر رقم 1', 'عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022', 'عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022'),
(63, 'Seasonal Perfumes 3', 'seasonal-perfumes-3', 'Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022', 'Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022', 'https://bahja-latest.theklozet.com/storage/photos/1/product/4.jpg', 21, '50ml', 'new', 'active', '', 10.000, 5.000, 1, 22, NULL, NULL, '2022-10-29 09:13:23', '2022-10-29 09:53:15', 'العطور الموسمية 3', 'عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022', 'عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022'),
(67, 'Rashoosh-surayya', 'rashoosh-surayya', 'Rashoosh-surayya', '<div><span style=\"font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span><br></div>', 'https://bahja-latest.theklozet.com/storage/photos/1/product/1.jpg', 2, '50ml', 'new', 'active', 'bestseller', 10.000, 7.000, 1, 23, NULL, NULL, '2022-10-30 02:35:07', '2022-11-07 11:56:37', 'رشوش سريا', 'رشوش سريا', '<div>عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</div><div><br></div>'),
(71, 'Seasonal Perfumes 1', 'seasonal-perfumes-1', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Seasonal Perfumes 1&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:31235,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3557987},&quot;15&quot;:&quot;\\&quot;DM Sans\\&quot;, sans-serif&quot;,&quot;16&quot;:11,&quot;17&quot;:1}\" style=\"font-size: 11pt; font-family: &quot;DM Sans&quot;, Arial; font-weight: bold; color: rgb(54, 74, 99);\">Seasonal Perfumes 1</span>', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:15107,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3355443},&quot;15&quot;:&quot;Montserrat, sans-serif&quot;,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Montserrat, Arial; color: rgb(51, 51, 51);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/S-1.jpg', 5, '50ml', 'new', 'inactive', NULL, 10.000, 7.000, 1, 22, NULL, NULL, '2022-10-31 04:39:06', '2022-11-29 11:15:50', 'العطور الموسمية 1', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"rtl\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; text-align: right; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"ar\">العطور الموسمية 1</span></pre>', '<div><font color=\"#333333\" face=\"Montserrat, Arial\"><span style=\"font-size: 14.6667px;\">عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</span></font></div><div><br></div>'),
(72, 'Seasonal Perfumes 1', 'seasonal-perfumes-1-2210313906-27', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Seasonal Perfumes 1&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:31235,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3557987},&quot;15&quot;:&quot;\\&quot;DM Sans\\&quot;, sans-serif&quot;,&quot;16&quot;:11,&quot;17&quot;:1}\" style=\"font-size: 11pt; font-family: &quot;DM Sans&quot;, Arial; font-weight: bold; color: rgb(54, 74, 99);\">Seasonal Perfumes 1</span>', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:15107,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3355443},&quot;15&quot;:&quot;Montserrat, sans-serif&quot;,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Montserrat, Arial; color: rgb(51, 51, 51);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/S-1.jpg', 3, '75ml', 'new', 'active', NULL, 10.000, 9.000, 1, 22, NULL, NULL, '2022-10-31 04:39:06', '2022-12-02 08:00:49', 'العطور الموسمية 1', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"rtl\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; text-align: right; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"ar\">العطور الموسمية 1</span></pre>', '<div>عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</div><div><br></div>'),
(73, 'Seasonal Perfumes 1', 'seasonal-perfumes-1-2210313906-696', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Seasonal Perfumes 1&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:31235,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3557987},&quot;15&quot;:&quot;\\&quot;DM Sans\\&quot;, sans-serif&quot;,&quot;16&quot;:11,&quot;17&quot;:1}\" style=\"font-size: 11pt; font-family: &quot;DM Sans&quot;, Arial; font-weight: bold; color: rgb(54, 74, 99);\">Seasonal Perfumes 1</span>', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:15107,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3355443},&quot;15&quot;:&quot;Montserrat, sans-serif&quot;,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Montserrat, Arial; color: rgb(51, 51, 51);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/S-1.jpg', 3, '50ml', 'new', 'active', 'newarrivals', 10.000, 7.000, 1, 22, NULL, NULL, '2022-10-31 04:39:06', '2022-12-06 10:02:09', 'العطور الموسمية 1', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"rtl\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; text-align: right; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"ar\">العطور الموسمية 1</span></pre>', '<div><font color=\"#333333\" face=\"Montserrat, Arial\"><span style=\"font-size: 14.6667px;\">عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</span></font></div><div><br></div>'),
(81, 'Ward Room Spray', 'ward-room-spray', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Ward Room Spray&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:513,&quot;3&quot;:{&quot;1&quot;:0},&quot;12&quot;:0}\" style=\"font-size: 10pt; font-family: Arial;\">Ward Room Spray</span>', '<div><br></div><div>Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</div>', 'https://bahja-latest.theklozet.com/storage/photos/56/177336935_458465835258578_936436754588063878_n.jpg', 4, '50ml', 'new', 'inactive', NULL, 10.000, 7.000, 1, 20, NULL, NULL, '2022-10-31 11:07:52', '2022-11-29 11:45:38', 'بخاخ غرفة وارد', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"rtl\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; text-align: right; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"ar\">بخاخ غرفة وارد</span></pre>', '<div>عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</div><div><br></div>'),
(82, 'Ward Room Spray', 'ward-room-spray-2210310752-886', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Ward Room Spray&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:513,&quot;3&quot;:{&quot;1&quot;:0},&quot;12&quot;:0}\" style=\"font-size: 10pt; font-family: Arial;\">Ward Room Spray</span>', '<div><br></div><div>Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</div>', 'https://bahja-latest.theklozet.com/storage/photos/56/177336935_458465835258578_936436754588063878_n.jpg', 2, '50ml', 'new', 'active', 'bestseller', 10.000, 7.000, 1, 20, NULL, NULL, '2022-10-31 11:07:52', '2022-12-06 10:02:09', 'بخاخ غرفة وارد', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"rtl\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; text-align: right; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"ar\">بخاخ غرفة وارد</span></pre>', '<div>عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</div><div><br></div>'),
(86, 'Perfume 4', 'test12345', 'Perfume 4', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:15107,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3355443},&quot;15&quot;:&quot;Montserrat, sans-serif&quot;,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Montserrat, Arial; color: rgb(51, 51, 51);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/118456764_1751046745034013_4623699613655814643_n (1).jpg', 19, '50ml', 'new', 'active', 'newarrivals', 10.000, 7.000, 1, 19, NULL, NULL, '2022-11-04 08:28:24', '2022-12-06 10:31:55', 'العطور 4', 'Perfume 4', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:15107,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3355443},&quot;15&quot;:&quot;Montserrat, sans-serif&quot;,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Montserrat, Arial; color: rgb(51, 51, 51);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>'),
(87, 'test New arrivals', 'test-new-arrivals', 'test New arrivals', 'test New arrivals', 'https://bahja-latest.theklozet.com/storage/photos/56/2.jpg', 19, '50ml', 'hot', 'active', 'newarrivals', 10.000, 5.000, 1, 20, NULL, NULL, '2022-11-04 08:31:23', '2022-12-06 10:02:10', 'test New arrivals', 'test New arrivals', 'test New arrivals'),
(90, 'Perfume number 3', 'perfume-number-3', 'Perfume number 3', '<span style=\"color: rgb(51, 51, 51); font-family: docs-Montserrat; font-size: 15px; white-space: pre-wrap;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/Perfume-3.jpg', 10, '50ml', 'new', 'active', 'bestseller', 10.000, 6.000, 1, 19, NULL, NULL, '2022-11-16 04:59:02', '2022-12-06 10:54:45', 'رقم العطر 3', 'Perfume number 3', '<div style=\"text-align: end;\"><font color=\"#333333\" face=\"Montserrat, Arial\"><span style=\"font-size: 14.6667px;\">عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</span></font></div><div style=\"text-align: end;\"><br style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 16px;\"></div><br>'),
(91, 'Seasonal Perfume 2', 'seasonal-perfume-number-4', 'Seasonal Perfume number 2', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:15107,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3355443},&quot;15&quot;:&quot;Montserrat, sans-serif&quot;,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Montserrat, Arial; color: rgb(51, 51, 51);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/122099917_843984829702979_3517690650926117072_n.jpg', 22, '50ml', 'default', 'active', 'bestseller', 10.000, 7.000, 1, 22, NULL, NULL, '2022-11-17 05:08:27', '2022-12-06 09:40:02', 'عطر موسمي 2', 'عطر موسمي 2', '<span style=\"font-family: Arial; font-size: 13px; white-space: pre-wrap;\">عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</span>'),
(92, 'Ward Room Spray 3', 'ward-room-spray-3', 'Ward Room Spray 2', '<span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:15107,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16777215},&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:3355443},&quot;15&quot;:&quot;Montserrat, sans-serif&quot;,&quot;16&quot;:11}\" style=\"font-size: 11pt; font-family: Montserrat, Arial; color: rgb(51, 51, 51);\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/M2.jpg', 33, '50ml', 'new', 'active', 'bestseller', 10.000, 7.000, 1, 21, NULL, NULL, '2022-11-17 05:10:26', '2022-12-02 07:37:28', 'رذاذ غرفة وارد 3', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"rtl\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 32px; background-color: rgb(248, 249, 250); border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; text-align: right; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"ar\">رذاذ غرفة وارد</span></pre>', '<span style=\"font-family: Arial; font-size: 13px; white-space: pre-wrap;\">عطر الفانيليا مع مزيج البهجة الفرنسي يقدم أفضل جودة للعطور. فهو يساعد على التخلص من رائحة الجسم غير المرغوب فيها ويضمن لك رائحة طيبة طوال اليوم. عطور بهجة التي تعكس حالتك المزاجية لإبراز علامة تجارية أفضل لنفسك. بهجة رائحة تناسب شخصيتك والتي يمكن أن ترفع معنوياتك وتأتي مستعدة لكل حدث في حياتك. كمُحسِّن للمزاج ، يمكن لعطور بهجة أن تساعد في نزع فتيل التوتر والقضايا الأخرى المتعلقة بالقلق. عطور بهجة هي المسؤولة عن جودة المنتج. التسليم المقدّر في أو قبل 3 مايو 2022</span>'),
(95, 'Perfume Number 2', 'perfume-number-2', '<div>Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</div><div><br></div>', '<div>Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</div><div><br></div>', 'https://bahja-latest.theklozet.com/storage/photos/56/Perfume-2.jpg', 0, '50ml', 'default', 'active', NULL, 10.000, 7.000, 1, 19, NULL, NULL, '2022-11-22 07:11:42', '2022-12-06 09:43:50', 'Perfume Number 2', '<div>Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</div><div><br></div>', '<div>Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</div><div><br></div>'),
(97, 'Seasonal Perfumes', 'seasonal-perfumes', '<span style=\"color: rgb(54, 74, 99); font-family: &quot;DM Sans&quot;, Arial; font-size: 14.6667px; font-weight: 700;\">Seasonal Perfumes</span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, Arial; font-size: 14.6667px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay.</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/S-1.jpg', 9, '75ml', 'new', 'active', NULL, 10.000, 6.000, 1, 22, NULL, NULL, '2022-11-26 08:00:11', '2022-12-01 04:23:19', 'Seasonal Perfumes', '<span style=\"color: rgb(54, 74, 99); font-family: &quot;DM Sans&quot;, Arial; font-size: 14.6667px; font-weight: 700;\">Seasonal Perfumes</span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, Arial; font-size: 14.6667px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay.</span>'),
(98, 'Seasonal Perfumes', 'seasonal-perfumes-2211260011-385', '<span style=\"color: rgb(54, 74, 99); font-family: &quot;DM Sans&quot;, Arial; font-size: 14.6667px; font-weight: 700;\">Seasonal Perfumes</span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, Arial; font-size: 14.6667px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay.</span>', 'https://bahja-latest.theklozet.com/storage/photos/56/S-1.jpg', 8, '100ml', 'new', 'active', NULL, 10.000, 5.000, 1, 22, NULL, NULL, '2022-11-26 08:00:11', '2022-12-01 04:14:38', 'Seasonal Perfumes', '<span style=\"color: rgb(54, 74, 99); font-family: &quot;DM Sans&quot;, Arial; font-size: 14.6667px; font-weight: 700;\">Seasonal Perfumes</span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, Arial; font-size: 14.6667px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay.</span>'),
(99, 'oud bukhoor', 'oud-bukhoor', 'shkkshk', 'shkjshkjshk', 'https://bahja-latest.theklozet.com/storage/photos/55/sign.jpg', 12, '50ml', 'new', 'inactive', 'bestseller', 10.000, 7.000, 1, 27, NULL, NULL, '2022-11-26 11:07:11', '2022-11-29 12:08:15', 'oud bukhoor', 'shkkshk', 'shkjshkjshk'),
(114, 'Testing', 'testing', 'Testing', 'Testing', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 11, '50ml', 'default', 'active', NULL, 10.000, 7.000, 1, 27, NULL, NULL, '2022-11-29 12:17:42', '2022-12-06 07:35:32', 'Testing', 'Testing', 'Testing'),
(115, 'TEST', 'test', 'TEST', 'TEST', 'https://bahja-latest.theklozet.com/storage/photos/56/118456764_1751046745034013_4623699613655814643_n (1).jpg', 10, '75ml', 'default', 'active', NULL, 10.000, 7.000, 1, 22, 23, NULL, '2022-12-01 08:01:32', '2022-12-01 08:01:32', 'TEST', 'TEST', 'TEST'),
(116, 'TEST', 'test-2212010132-502', 'TEST', 'TEST', 'https://bahja-latest.theklozet.com/storage/photos/56/118456764_1751046745034013_4623699613655814643_n (1).jpg', 12, '100ml', 'default', 'active', NULL, 10.000, 7.000, 1, 22, 23, NULL, '2022-12-01 08:01:32', '2022-12-01 08:01:32', 'TEST', 'TEST', 'TEST'),
(117, 'TEST-2', 'test-2', 'TEST-2', 'TEST-2', 'https://bahja-latest.theklozet.com/storage/photos/56/5.jpg', 10, '100ml', 'default', 'active', NULL, 15.000, 11.000, 1, 22, 23, NULL, '2022-12-01 09:55:21', '2022-12-06 05:58:47', 'TEST-2', 'TEST-2', 'TEST-2'),
(118, 'TEST-2', 'test-2-2212015521-599', 'TEST-2', 'TEST-2', 'https://bahja-latest.theklozet.com/storage/photos/56/5.jpg', 10, '75ml', 'default', 'active', NULL, 14.000, 5.000, 1, 22, 23, NULL, '2022-12-01 09:55:21', '2022-12-05 12:45:22', 'TEST-2', 'TEST-2', 'TEST-2'),
(119, 'TEST-2', 'test-2-2212015521-335', 'TEST-2', 'TEST-2', 'https://bahja-latest.theklozet.com/storage/photos/56/5.jpg', 19, '50ml', 'default', 'active', NULL, 10.000, 6.000, 1, 22, 23, NULL, '2022-12-01 09:55:21', '2022-12-06 07:35:32', 'TEST-2', 'TEST-2', 'TEST-2'),
(120, 'dehnaloud', 'dehnaloud', 'ghsghjgsjg', 'gfrgfhgf', 'https://bahja-latest.theklozet.com/storage/photos/55/sign.jpg', 10, '50ml', 'default', 'inactive', 'newarrivals', 20.000, 7.000, 1, 19, NULL, NULL, '2022-12-06 07:48:52', '2022-12-06 11:56:22', 'dehnaloud', 'ghsghjgsjg', 'gfrgfhgf'),
(121, 'dehnaloud', 'dehnaloud-2212064852-616', 'ghsghjgsjg', 'gfrgfhgf', 'https://bahja-latest.theklozet.com/storage/photos/55/sign.jpg', 5, '75ml', 'default', 'active', 'bestseller', 25.000, 25.000, 1, 27, 32, NULL, '2022-12-06 07:48:52', '2022-12-06 11:45:12', 'dehnaloud', 'ghsghjgsjg', 'gfrgfhgf'),
(122, 'test', 'test-2212064934-455', 'test', 'test', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 10, '50ml', 'default', 'inactive', NULL, 20.300, 19.245, 1, 19, NULL, NULL, '2022-12-06 11:49:34', '2022-12-06 12:29:55', 'test', 'test', 'test'),
(123, 'test1', 'test1', 'test1', 'test1', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 9, '50ml', 'default', 'active', NULL, 12.300, 11.326, 1, 19, NULL, NULL, '2022-12-07 04:24:17', '2022-12-08 10:22:04', 'test1', 'test1', 'test1'),
(124, 'test1', 'test1-2212072418-361', 'test1', 'test1', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 9, '75ml', 'default', 'active', NULL, 14.253, 13.223, 1, 19, NULL, NULL, '2022-12-07 04:24:18', '2022-12-07 05:30:41', 'test1', 'test1', 'test1'),
(125, 'test1', 'test1-2212072418-847', 'test1', 'test1', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 10, '100ml', 'default', 'active', NULL, 15.230, 14.260, 1, 19, NULL, NULL, '2022-12-07 04:24:18', '2022-12-07 04:28:15', 'test1', 'test1', 'test1'),
(126, 'test2', 'test2', 'test2', 'test2', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 12, '50ml', 'default', 'active', NULL, 12.000, 11.000, 1, 19, NULL, NULL, '2022-12-07 04:31:08', '2022-12-07 04:31:08', 'test2', 'test2', 'test2'),
(127, 'test2', 'test2-2212073108-445', 'test2', 'test2', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 10, '75ml', 'default', 'active', NULL, 13.200, 12.420, 1, 19, NULL, NULL, '2022-12-07 04:31:08', '2022-12-07 04:34:44', 'test2', 'test2', 'test2'),
(128, 'test2', 'test2-2212073108-106', 'test2', 'test2', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 12, '50ml', 'default', 'active', NULL, 12.000, 11.000, 1, 19, NULL, NULL, '2022-12-07 04:31:08', '2022-12-07 04:31:08', 'test2', 'test2', 'test2'),
(129, 'test3', 'test2-2212073108-148', 'test3', 'test3', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 10, '50ml', 'default', 'active', NULL, 15.300, 12.000, 1, 19, NULL, NULL, '2022-12-07 04:31:08', '2022-12-07 06:04:33', 'test2', 'test2', 'test2'),
(130, 'test3', 'test2-2212073108-598', 'test3', 'test3', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 10, '75ml', 'default', 'active', NULL, 13.200, 12.000, 1, 19, NULL, NULL, '2022-12-07 04:31:08', '2022-12-07 04:50:14', 'test2', 'test2', 'test2'),
(131, 'test3', 'test2-2212073109-191', 'test3', 'test3', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 10, '100ml', 'default', 'active', NULL, 15.300, 15.300, 1, 19, NULL, NULL, '2022-12-07 04:31:09', '2022-12-07 08:24:35', 'test2', 'test2', 'test2'),
(135, 'vabcc', 'abcc', 'abcc', 'abcc', 'https://bahja-latest.theklozet.com/storage/photos/56/124595269_830057267768956_419739911111830936_n.jpg', 0, '50ml', 'default', 'active', NULL, 2.601, 3.201, 1, 19, NULL, NULL, '2022-12-08 08:04:37', '2022-12-09 07:58:43', 'abcc', 'abcc', 'abcc');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `payload` varchar(255) NOT NULL,
  `last_activity` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `description`, `short_des`, `logo`, `photo`, `address`, `phone`, `email`, `created_at`, `updated_at`, `whatsapp`, `instagram`, `facebook`, `twitter`) VALUES
(1, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu\r\n\r\n                            sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.', 'Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', '/storage/photos/1/add/personalized.png', '/storage/photos/1/add/abc.png', 'Kuwait', '+965 50550923', 'info@bahjakwt.com', NULL, '2022-11-29 12:24:10', '+965 50550923', 'bahjakw', 'bahjakw', 'bahjakw');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `type`, `price`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Fintas', '2.000', 'active', '2022-10-27 04:06:41', '2022-10-27 04:06:41'),
(11, 'Jabriya', '2.000', 'active', '2022-10-27 04:06:50', '2022-10-27 04:06:50'),
(12, 'Rabiya', '2.000', 'active', '2022-10-27 13:05:51', '2022-11-26 06:12:02'),
(14, 'Al Jahra', '2.000', 'active', '2022-11-26 10:29:14', '2022-11-26 10:29:14'),
(15, 'Failaka Island', '2.000', 'active', '2022-11-26 10:29:29', '2022-11-26 10:29:29'),
(16, 'Sulaibikhat', '2.000', 'active', '2022-11-26 10:29:43', '2022-11-26 10:29:43'),
(17, 'Fahaheel', '2.000', 'active', '2022-11-26 10:29:53', '2022-11-26 10:29:53'),
(18, 'Al Ahmadi', '2.000', 'active', '2022-11-26 10:30:13', '2022-11-26 10:30:13'),
(19, 'Adiliya', '2.000', 'active', '2022-11-26 10:30:35', '2022-11-26 10:30:35'),
(20, 'Wafra', '2.000', 'active', '2022-11-26 10:30:46', '2022-11-26 10:30:46'),
(21, 'Doha Port', '2.000', 'active', '2022-11-26 10:31:06', '2022-11-26 10:31:06'),
(22, 'Abu Halifa', '2.000', 'active', '2022-11-26 10:31:21', '2022-11-26 10:31:21'),
(23, 'Jahra', '2.000', 'active', '2022-11-26 10:31:34', '2022-11-26 10:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `shippings2`
--

CREATE TABLE `shippings2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings2`
--

INSERT INTO `shippings2` (`id`, `type`, `price`, `status`, `created_at`, `updated_at`, `area_id`) VALUES
(10, 'Fintas', '4.00', 'active', '2022-10-27 04:06:41', '2022-10-27 04:06:41', 1),
(14, 'Jabriya', '5.00', 'active', '2022-11-16 06:18:23', '2022-11-16 06:18:23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `role`, `provider`, `provider_id`, `status`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(47, 'Vivek', 'vivek@designbox.com.kw', NULL, '$2y$10$pgin9xnRPSmLtHWMrb/07.5wwWEBoyRGD0YazS8xQLMcLG5u0.Pfu', NULL, 'user', NULL, NULL, 'active', NULL, '2022-09-19 10:39:26', '2022-09-19 10:39:26', '88888880'),
(53, 'Diksha', 'dikshajadoun9582@gmail.com', NULL, '$2y$10$Ntu5WxKgJYpcRkXhUVjb5.NiYXTk280KMDk6B0.0O7pNq/vX3R5Mm', NULL, 'user', NULL, NULL, 'active', NULL, '2022-10-31 06:38:07', '2022-10-31 06:38:07', '987654321'),
(55, 'Bahja', 'admin@bahjakw.com', NULL, '$2y$10$2uWkmhVYvF6/yg8.FAnyQuJKXzjFVWGEQ6Sxn3tobof2FWgFMiAmW', NULL, 'admin', NULL, NULL, 'active', NULL, '2022-10-31 12:37:57', '2022-10-31 12:37:57', NULL),
(56, 'Admin', 'admin@gmail.com', NULL, '$2y$10$wbXckBBjQWwoiDkG.7I/p.KjwWtnAqVoG2GHOiUCh5Y9zmYWjpnhG', NULL, 'admin', NULL, NULL, 'active', NULL, '2022-11-01 08:09:35', '2022-11-29 07:36:11', NULL),
(58, 'Diksha', 'test12@mail.com', NULL, '$2y$10$f76Z19xF56Fjcpp1.X5uguHbfV8xQ60o.9p7tCa8Aw.zQ1mTb0S92', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-01 11:12:20', '2022-11-01 11:12:20', '16984092123'),
(59, 'Diksha', 'user987@gmail.com', NULL, '$2y$10$395StNW7horoOD0U6OkhUuka/NtR3GdB.JByL/dC.MqmZ5D/qneFG', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-11 07:11:43', '2022-11-11 07:11:43', '3526833902'),
(60, 'Diksha', 'testing@gmail.com', NULL, '$2y$10$8QVHJtn1T3p.wzHFaUakJumTz1h1avEiYjwNm9gPsrj0WI6kVLML6', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-16 10:53:05', '2022-11-16 10:53:05', '25738442'),
(61, 'Abhishek', 'dangiabhi672@gmail.com', NULL, '$2y$10$gYB2DD3So6aZ97NdyyybY.sxEY8Iokc4hMmoCLDO5lNldPyQHN/3S', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-17 11:17:14', '2022-11-17 11:17:14', '9555372847'),
(62, 'Abhishek', 'abhishek@bharatarpanet.com', NULL, '$2y$10$LJFQ4FNRFK4UaBzime9vC.PiJJIziIGn.DLqNZ.4Z12GhZG0cmbXW', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-18 10:36:11', '2022-11-18 10:36:11', '9555372847'),
(63, 'karamjeet', 'karamjeetkaur487@gmail.com', NULL, '$2y$10$bpJ1ivu1cl3nzduZ9flQN.PWfMiEAS6dEvzzXVfrx.NLtGG9z..zq', NULL, 'user', NULL, NULL, 'active', '5X2QlitLEwVTmjlldIvV8o5HPP2oZJV7A5YOkuocmFYw8XND726PCnPL1sBG', '2022-11-25 05:59:10', '2022-11-26 08:25:44', '7530979185'),
(64, 'karamjeet kaur singh kaur', 'abc@gmail.com', NULL, '$2y$10$4IOGl8t5HfkxTPmSJ1Qn/OwnR52nocwA9A2RXbBWv6lc2sgjAsy3y', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-25 06:34:51', '2022-11-25 06:38:12', '12345678981'),
(65, 'karamjeet', 'abcd@gmail.com', NULL, '$2y$10$GaT2REaPCrcKqXyKJMLugO48WN/axkqqeLvhJ9YuKLhkUXdkaKT6y', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-25 06:51:16', '2022-11-25 06:53:15', '12334567899'),
(66, 'mansoor', 'z.mansoor@yahoo.com', NULL, '$2y$10$andVe2pbYQzlwOrGIpNpLeXLIagOZWrUkS6HwIYLSHuUZNZA1FPPi', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-26 10:10:14', '2022-11-26 10:10:14', '66482660'),
(67, 'mansoor', 'manzakir@gmail.com', NULL, '$2y$10$MmdYOwVbs0aRgBsK5t/sxeI8TLGIygFKBAyHRn3wFyU/VADgRwMkW', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-26 10:50:09', '2022-11-26 10:50:09', '66482660'),
(68, 'karam', 'bahja123@gmail.com', NULL, '$2y$10$OwYlHpJpDvrgGRsTep90r.Z8lRgy3F0A1jVVUheNwbdxOO6dw00mW', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-30 04:08:40', '2022-12-01 04:20:26', '123456789'),
(69, 'KUNAL PANDEY', 'kunal@shivalikjournal.com', NULL, '$2y$10$XXI.tOImAN.WindET.DQxe/IygpTZjoATaIO3hLPSvr01mPgdWFOu', NULL, 'user', NULL, NULL, 'active', NULL, '2022-11-30 11:31:57', '2022-11-30 11:31:57', '9149252803'),
(70, 'Karam', 'abcded@gmail.com', NULL, '$2y$10$PftADsd2a.DusmMB5rQH4O1lPZoO/mw.vOD/vMkoQeTfhTTYfMyKa', NULL, 'user', NULL, NULL, 'active', NULL, '2022-12-02 08:13:47', '2022-12-02 08:13:47', '12345667'),
(71, 'Jeet', 'test@gmail.com', NULL, '$2y$10$iwIUP6YN25rW5Pw5gzPPFugLjersEZ2phArwYq.3YpIEzWE7r/gPC', NULL, 'user', NULL, NULL, 'active', NULL, '2022-12-02 08:42:59', '2022-12-02 08:42:59', '18575555559556885588'),
(72, 'Customer', 'vka@gmail.com', NULL, '$2y$10$bQ424UryNcuDSwl18CppN.4kWFWW.Ir6eFYriUuxws0yYQi1sfmzG', NULL, 'user', NULL, NULL, 'active', NULL, '2022-12-02 10:09:50', '2022-12-02 10:09:50', '12345678910'),
(73, '123456785', 'demo@gmail.com1255362', NULL, '$2y$10$tGKYA2xv41MKFoVsBeAVDOto/z3fCsVEGUb3whetA3N9tdRxnaJV2', NULL, 'user', NULL, NULL, 'active', NULL, '2022-12-08 04:24:29', '2022-12-08 04:24:29', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_added_by_foreign` (`added_by`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_child_cat_id_foreign` (`child_cat_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings2`
--
ALTER TABLE `shippings2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_area_id_foreign` (`area_id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cache`
--
ALTER TABLE `cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shippings2`
--
ALTER TABLE `shippings2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_child_cat_id_foreign` FOREIGN KEY (`child_cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `shippings2`
--
ALTER TABLE `shippings2`
  ADD CONSTRAINT `shippings_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
