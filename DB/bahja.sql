-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 05:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bahja`
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address_name`, `user_name`, `area`, `block`, `address`, `address1`, `phone`, `city`, `country`, `delivery_instruction`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Office', 'asdasdasdasd', '533', 'asdas', 'asasdasd', NULL, 'asdasdasd', NULL, NULL, 'asdas', 39, 'active', '2022-07-16 05:05:54', '2022-07-16 05:05:54');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(40, 'Banner 1', 'banner-1', '/storage/photos/1/banner/banner.jpg', 'Banner 1', 'active', '2022-07-16 01:22:04', '2022-07-16 01:22:04'),
(41, 'banner 2', 'banner-2', '/storage/photos/1/banner/banner1.jpg', 'banner 2', 'active', '2022-07-16 01:22:19', '2022-07-16 01:22:19'),
(42, 'banner 3', 'banner-3', '/storage/photos/1/banner/banner2.jpg', 'banner 3', 'active', '2022-07-16 01:22:34', '2022-07-16 01:22:34');

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `status` enum('new','progress','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `order_id`, `user_id`, `price`, `status`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(23, 23, 10, 39, 22.00, 'new', 5, 110.00, '2022-07-16 05:03:45', '2022-07-16 05:06:04'),
(25, 19, NULL, 1, 22.00, 'new', 1, 22.00, '2022-07-16 08:08:15', '2022-07-16 08:08:15');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `summary`, `photo`, `is_parent`, `parent_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(19, 'PERFUME', 'perfume', 'PERFUME', '/storage/photos/1/category/category1.jpg', 1, NULL, NULL, 'active', '2022-07-16 01:18:34', '2022-07-16 01:18:34'),
(20, 'BUKHOOR', 'bukhoor', 'BUKHOOR', '/storage/photos/1/category/category2.jpg', 1, NULL, NULL, 'active', '2022-07-16 01:19:02', '2022-07-16 01:19:34'),
(21, 'Sprays', 'sprays', 'Sprays', '/storage/photos/1/category/category3.jpg', 1, NULL, NULL, 'active', '2022-07-16 01:19:23', '2022-07-16 01:19:23'),
(22, 'seasonal perfumes', 'seasonal-perfumes', 'seasonal perfumes', '/storage/photos/1/category/category1.jpg', 1, NULL, NULL, 'active', '2022-07-16 01:20:13', '2022-07-16 01:20:13'),
(23, 'Special occasion', 'special-occasion', 'Special occasion', '/storage/photos/1/category/category2.jpg', 1, NULL, NULL, 'active', '2022-07-16 01:21:01', '2022-07-16 01:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `value` decimal(20,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(20, '2020_08_01_143408_create_settings_table', 1);

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
('4b226fb0-5526-4e3f-803d-41ed0c9441b5', 'App\\Notifications\\StatusNotification', 'App\\Models\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/10\",\"fas\":\"fa-file-alt\"}', NULL, '2022-07-16 05:06:04', '2022-07-16 05:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `shipping_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon` double(8,2) DEFAULT NULL,
  `total_amount` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_method` enum('knet','card') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `sub_total`, `shipping_id`, `coupon`, `total_amount`, `quantity`, `payment_method`, `payment_status`, `status`, `first_name`, `last_name`, `email`, `phone`, `country`, `post_code`, `address1`, `address2`, `created_at`, `updated_at`, `name`) VALUES
(10, 'ORD-86FMTJ0K86', 39, 110.00, 8, NULL, 160.00, 5, 'card', 'paid', 'new', NULL, NULL, 'bahja@gmail.com', 'asdasdasd', NULL, NULL, 'asasdasd', NULL, '2022-07-16 05:06:04', '2022-07-16 05:06:04', 'asdasdasdasd');

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
('admin@gmail.com', '$2y$10$tZl2KPFQvOaiOPpOvSf5Se5a6xffuXx2d76bys0jxlUs40ZvZDXoa', '2022-07-15 21:38:24');

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
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `summary`, `description`, `photo`, `stock`, `size`, `condition`, `status`, `price`, `discount`, `is_featured`, `cat_id`, `child_cat_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(17, 'Rashoosh Surayya', 'rashoosh-surayya', '<div class=\"product-content\" style=\"color: rgb(51, 51, 51); outline: none; font-family: Montserrat, sans-serif; font-size: 16px; padding: 1rem 0px 1.5rem; position: relative; display: flex;\"><div class=\"pro-box\" style=\"width: 288.75px;\"><h3 style=\"margin-bottom: 0.5rem; font-weight: 400; line-height: 1.2; font-size: 16px; height: auto; overflow: hidden; color: rgb(0, 0, 0); letter-spacing: 0.5px;\">Rashoosh Surayya&nbsp;</h3><p style=\"margin-bottom: 0.5rem; font-weight: 400; line-height: 1.2; font-size: 16px; height: auto; overflow: hidden; color: rgb(0, 0, 0); letter-spacing: 0.5px;\"><br></p></div></div>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 14.4px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', '/storage/photos/1/product/1.jpg', 90, '50,75,100', 'new', 'active', 22.00, 0.00, 1, 22, NULL, NULL, '2022-07-16 01:25:24', '2022-07-16 01:31:14'),
(18, 'Seasonal Perfumes 1', 'seasonal-perfumes-1', '&nbsp;<font color=\"#202124\" face=\"consolas, lucida console, courier new, monospace\"><span style=\"font-size: 12px; white-space: pre-wrap;\">Seasonal Perfumes 1</span></font>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 14.4px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', '/storage/photos/1/product/2.jpg', 500, '50,75,100', 'hot', 'active', 25.00, 0.00, 1, 19, NULL, NULL, '2022-07-16 01:27:19', '2022-07-16 01:27:19'),
(19, 'Seasonal Perfumes 3', 'seasonal-perfumes-3', 'Seasonal Perfumes 3', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 14.4px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', '/storage/photos/1/product/3.jpg', 500, '50,75,100', 'hot', 'active', 22.00, 0.00, 1, 19, NULL, NULL, '2022-07-16 01:30:57', '2022-07-16 01:30:57'),
(20, 'Ward Room Spray', 'ward-room-spray', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Ward Room Spray</span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 14.4px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', '/storage/photos/1/product/4.jpg', 500, '50,75,100', 'new', 'active', 15.00, 0.00, 1, 21, NULL, NULL, '2022-07-16 01:32:08', '2022-07-16 01:32:08'),
(21, 'Perfume number 1', 'perfume-number-1', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\"> Perfume number 1 </span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 14.4px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', '/storage/photos/1/product/5.jpg', 500, '50,75,100', 'new', 'active', 22.00, 0.00, 1, 19, NULL, NULL, '2022-07-16 01:32:56', '2022-07-16 01:32:56'),
(22, 'Perfume number 1', 'perfume-number-1-2207160410-413', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\"> Perfume number 1 </span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 14.4px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', '/storage/photos/1/product/6.jpg', 500, '50,75,100', 'new', 'active', 25.00, 0.00, 1, 23, NULL, NULL, '2022-07-16 01:34:10', '2022-07-16 01:34:10'),
(23, 'Rashoosh Surayya', 'rashoosh-surayya-2207160551-76', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Rashoosh Surayya</span>', '<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 14.4px;\">Vanilla with the French mix Bahja perfume providing best quality perfume . It helps keep unwanted body odor at bay and ensures that you smell good throughout the day. Bahja perfumes that actually reflects your mood to project a better brand of yourself. Bahja a scent that suits your personality and which, can boost your morale and come prepared for every event in your life. As mood enhancers, Bahja Perfumes can help out defuse stress and other anxiety-related issues at bay. Bahja Perfumes is responsible For Product quality. Estimated delivery on or before 3rd May 2022</span>', '/storage/photos/1/product/2.jpg', 500, '50,75,100', 'new', 'active', 22.00, 0.00, 1, 19, NULL, NULL, '2022-07-16 01:35:51', '2022-07-16 01:35:51');

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
(1, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu\r\n\r\n                            sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.', 'Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', '/storage/photos/1/add/personalized.png', '/storage/photos/1/add/abc.png', 'NO. 342 - London Oxford Street, 012 United Kingdom', '+965 50550923', 'INFO@BAHJAKWT.COM', NULL, '2022-07-16 01:38:26', '+965 50550923', 'bahjakw', 'bahjakw', 'bahjakw');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `type`, `price`, `status`, `created_at`, `updated_at`) VALUES
(8, 'In This Country', '50.00', 'active', '2022-07-16 01:36:37', '2022-07-16 01:36:37'),
(9, 'Out Of Counry', '100.00', 'active', '2022-07-16 01:36:50', '2022-07-16 01:36:50');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$GOGIJdzJydYJ5nAZ42iZNO3IL1fdvXoSPdUOH3Ajy5hRmi0xBmTzm', '/storage/photos/1/avatar-3637561_1280.png', 'admin', NULL, NULL, 'active', 'vGtZ7tsxWN0jla8mzFxJdSQqoV3Bl2dQHRPZPzeSrMNbkU1MkP0zB7H96bnr', NULL, '2022-07-15 12:35:14', NULL),
(39, 'bahja', 'bahja@gmail.com', NULL, '$2y$10$L.oYYUoJrXJIrGyr.sV/m.i1RcZxr5E3/FzACuZ4giZXJ4nXv4Uhe', NULL, 'user', NULL, NULL, 'active', NULL, '2022-07-16 05:03:04', '2022-07-16 05:03:04', '1233123123');

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
