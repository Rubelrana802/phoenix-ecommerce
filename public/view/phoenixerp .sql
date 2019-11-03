-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 10:35 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoenixerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `account_name`, `account_number`, `branch`, `image`, `created_at`, `updated_at`) VALUES
(1, 'City Bank', 'Md. Rubel Rana', '11011065885', 'Dhanmondi', '1567954138.jpg', '2019-09-08 08:48:58', '2019-09-08 10:47:20'),
(2, 'Sonali Bank Limited', 'Md. Rayhan', '5458476512', 'Panthapath', '1568058574.png', '2019-09-09 13:49:34', '2019-09-09 13:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `bank_transactions`
--

CREATE TABLE `bank_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_id` int(10) UNSIGNED NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposite_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr` double(8,2) DEFAULT NULL,
  `cr` double(8,2) DEFAULT NULL,
  `ammount` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_transactions`
--

INSERT INTO `bank_transactions` (`id`, `bank_id`, `details`, `deposite_id`, `date`, `ac_type`, `dr`, `cr`, `ammount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '556', '2019-09-09', 'Debit+', 500.00, NULL, 500.00, 1, '2019-09-09 11:36:24', '2019-09-09 11:36:24'),
(2, 1, NULL, '63856', '2019-09-09', 'Credit-', NULL, 5000.00, 5000.00, 1, '2019-09-09 13:01:26', '2019-09-09 13:01:26'),
(3, 2, 'cash', '25545', '2019-09-09', 'Debit+', 5000.00, NULL, 5000.00, 1, '2019-09-09 13:51:29', '2019-09-09 13:51:29'),
(4, 1, NULL, '51', '2019-09-19', 'Credit-', NULL, 2018.00, 2018.00, 1, '2019-09-09 13:57:24', '2019-09-09 13:57:24'),
(5, 1, NULL, '45', '2019-09-09', 'Debit+', 55.00, NULL, 55.00, 1, '2019-09-09 13:57:51', '2019-09-09 13:57:51'),
(6, 2, NULL, '5151', '2019-09-09', 'Credit-', NULL, 57000.00, 57000.00, 1, '2019-09-09 13:28:56', '2019-09-09 13:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Nodebook', 1, '2019-09-03 06:31:34', '2019-09-05 03:52:48'),
(6, 'Radio', 1, '2019-09-03 06:35:58', '2019-09-05 03:52:22'),
(7, 'Tv', 1, '2019-09-03 06:38:07', '2019-09-05 03:51:57'),
(8, 'Laptop', 1, '2019-09-03 06:39:04', '2019-09-05 03:52:10'),
(10, 'Phone', 1, '2019-09-24 13:50:49', '2019-09-24 13:50:49'),
(11, 'Phone', 1, '2019-09-24 13:51:36', '2019-09-24 13:51:36'),
(12, 'Mobile', 1, '2019-09-24 13:55:44', '2019-09-24 13:55:44'),
(14, 'ACDE', 1, '2019-09-24 14:12:17', '2019-10-19 23:57:59'),
(15, 'Biscuts', 1, '2019-09-24 14:25:41', '2019-09-24 14:25:41'),
(16, 'Water', 1, '2019-10-19 23:55:39', '2019-10-19 23:55:39'),
(19, 'yy', 1, '2019-10-20 01:13:51', '2019-10-20 01:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `email`, `mobile`, `address`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Phoenix Software', 'rubel@phoenixsoftbd.com', '01775034549', '68-69 Green Road, Panthapath, Dhaka-1205', 'http://phoenixsoftbd.com', 1, '2019-09-16 07:00:00', '2019-09-16 01:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_due` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email`, `mobile`, `address`, `previous_due`, `created_at`, `updated_at`) VALUES
(1, 'Md. Riaz Uddin', 'riaz@gmail.com', '0177503458', 'Dhaka', NULL, '2019-09-07 02:45:07', '2019-09-08 01:31:18'),
(2, 'Md. Taijul Islam', 'taijul@gmail.com', '01846465489', 'Dhaka', 500.00, '2019-09-29 11:15:43', '2019-09-29 11:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payments`
--

CREATE TABLE `customer_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `payment_total` double(100,2) NOT NULL,
  `date` date NOT NULL,
  `type` tinyint(4) NOT NULL,
  `detaits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_by` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoicemanage`
-- (See below for the actual view)
--
CREATE TABLE `invoicemanage` (
`customer_name` varchar(191)
,`mobile` varchar(191)
,`address` mediumtext
,`previous_due` double(8,2)
,`id` int(10) unsigned
,`customer_id` int(11)
,`date` varchar(191)
,`sell_invoice_no` varchar(191)
,`grand_total_amount` double(8,2)
,`payment_type` varchar(191)
,`discount_percentage` double(8,2)
,`total_discount` double(8,2)
,`tax_percentage` double(8,2)
,`total_tax` double(8,2)
,`vat_percentage` double(8,2)
,`total_vat` double(8,2)
,`bank_id` int(11)
,`invoice_details_id` bigint(20) unsigned
,`invoice_id` int(11)
,`product_id` int(11)
,`store_id` int(11)
,`quantity` int(11)
,`rate` double(30,2)
,`total_price` double(8,2)
,`discount` float
);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total_amount` double(8,2) NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_percentage` double(8,2) DEFAULT NULL,
  `total_discount` double(8,2) DEFAULT NULL,
  `tax_percentage` double(8,2) DEFAULT NULL,
  `total_tax` double(8,2) DEFAULT NULL,
  `vat_percentage` double(8,2) DEFAULT NULL,
  `total_vat` double(8,2) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `date`, `sell_invoice_no`, `grand_total_amount`, `payment_type`, `discount_percentage`, `total_discount`, `tax_percentage`, `total_tax`, `vat_percentage`, `total_vat`, `bank_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-09-29', '19092901', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 1, 1, '2019-09-29 09:35:41', '2019-09-29 09:35:41'),
(2, 1, '2019-09-29', '19092902', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 1, 1, '2019-09-29 09:36:16', '2019-09-29 09:36:16'),
(3, 1, '2019-09-29', '19092903', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 1, 1, '2019-09-29 09:37:47', '2019-09-29 09:37:47'),
(4, 1, '2019-09-29', '19092904', 22.80, NULL, 5.00, 1.20, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 10:45:43', '2019-09-29 10:45:43'),
(5, 1, '2019-09-29', '19092905', 26.60, NULL, 5.00, 1.25, 6.00, 1.43, 6.00, 1.43, NULL, 1, '2019-09-29 10:48:32', '2019-09-29 10:48:32'),
(6, 1, '2019-09-29', '19092906', 522.50, '2', 5.00, 25.00, 5.00, 23.75, 5.00, 23.75, NULL, 1, '2019-09-29 10:54:05', '2019-09-29 10:54:05'),
(7, 2, '2019-09-29', '19092907', 57.47, '2', 5.00, 2.75, 5.00, 2.61, 5.00, 2.61, NULL, 1, '2019-09-29 11:16:18', '2019-09-29 11:16:18'),
(8, 2, '2019-09-29', '19092908', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 2, 1, '2019-09-29 11:17:40', '2019-09-29 11:17:40'),
(9, 1, '2019-09-29', '19092909', 4.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 11:20:54', '2019-09-29 11:20:54'),
(10, 1, '2019-09-29', '19092910', 4.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 11:27:09', '2019-09-29 11:27:09'),
(11, 2, '2019-09-29', '19092911', 25.85, '2', 6.00, 1.50, 5.00, 1.18, 5.00, 1.18, NULL, 1, '2019-09-29 11:27:53', '2019-09-29 11:27:53'),
(12, 2, '2019-09-29', '19092912', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 2, 1, '2019-09-29 11:29:27', '2019-09-29 11:29:27'),
(13, 2, '2019-09-29', '19092913', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 2, 1, '2019-09-29 11:30:09', '2019-09-29 11:30:09'),
(14, 2, '2019-09-29', '19092914', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 2, 1, '2019-09-29 11:31:16', '2019-09-29 11:31:16'),
(15, 2, '2019-09-29', '19092915', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 2, 1, '2019-09-29 11:32:26', '2019-09-29 11:32:26'),
(16, 2, '2019-09-29', '19092916', 25.00, '3', NULL, 0.00, NULL, 0.00, NULL, 0.00, 2, 1, '2019-09-29 11:32:40', '2019-09-29 11:32:40'),
(17, 2, '2019-09-29', '19092917', 25.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 11:33:21', '2019-09-29 11:33:21'),
(18, 2, '2019-09-29', '19092918', 25.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 11:34:21', '2019-09-29 11:34:21'),
(19, 1, '2019-09-29', '19092919', 100.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 11:40:42', '2019-09-29 11:40:42'),
(20, 2, '2019-09-29', '19092920', 25.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 11:42:30', '2019-09-29 11:42:30'),
(21, 2, '2019-09-29', '19092921', 25.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-29 11:42:55', '2019-09-29 11:42:55'),
(22, 2, '2019-09-30', '19092922', 10.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-09-30 09:11:46', '2019-09-30 09:11:46'),
(23, 1, '2019-10-01', '19092923', 2038.40, '1', 2.00, 40.00, 2.00, 39.20, 2.00, 39.20, NULL, 1, '2019-10-01 10:53:23', '2019-10-01 10:53:23'),
(24, 2, '2019-10-07', '19092924', 20.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-08 01:30:19', '2019-10-08 01:30:19'),
(25, 1, '2019-10-07', '19092925', 96.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-08 02:30:41', '2019-10-08 02:30:41'),
(26, 2, '2019-10-07', '19092926', 350.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-08 02:37:18', '2019-10-08 02:37:18'),
(27, 2, '2019-10-07', '19092927', 100.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-08 02:38:48', '2019-10-08 02:38:48'),
(28, 2, '2019-10-07', '19092928', 2000.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-08 02:44:00', '2019-10-08 02:44:00'),
(29, 2, '2019-10-07', '19092929', 3000.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-08 03:33:46', '2019-10-08 03:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `rate` double(30,2) NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `discount` float DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_id`, `product_id`, `inventory_id`, `store_id`, `quantity`, `rate`, `total_price`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 5, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 09:36:16', '2019-09-29 09:36:16'),
(2, 3, 5, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 09:37:47', '2019-09-29 09:37:47'),
(3, 6, 2, NULL, 1, 10, 50.00, 500.00, 25, 1, '2019-09-29 10:54:05', '2019-09-29 10:54:05'),
(4, 7, 4, NULL, 1, 5, 5.00, 55.00, 2.75, 1, '2019-09-29 11:16:18', '2019-09-29 11:16:18'),
(5, 7, 1, NULL, 1, 6, 5.00, 55.00, 2.75, 1, '2019-09-29 11:16:18', '2019-09-29 11:16:18'),
(6, 8, 5, NULL, 1, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:17:40', '2019-09-29 11:17:40'),
(7, 9, 5, NULL, 2, 2, 2.00, 4.00, 0, 1, '2019-09-29 11:20:54', '2019-09-29 11:20:54'),
(8, 10, 5, NULL, 2, 2, 2.00, 4.00, 0, 1, '2019-09-29 11:27:09', '2019-09-29 11:27:09'),
(9, 11, 5, NULL, 1, 5, 5.00, 25.00, 1.5, 1, '2019-09-29 11:27:53', '2019-09-29 11:27:53'),
(10, 12, 4, NULL, 1, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:29:27', '2019-09-29 11:29:27'),
(11, 13, 4, NULL, 1, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:30:09', '2019-09-29 11:30:09'),
(12, 14, 2, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:31:16', '2019-09-29 11:31:16'),
(13, 15, 2, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:32:26', '2019-09-29 11:32:26'),
(14, 16, 2, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:32:40', '2019-09-29 11:32:40'),
(15, 17, 2, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:33:21', '2019-09-29 11:33:21'),
(16, 18, 2, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:34:21', '2019-09-29 11:34:21'),
(17, 19, 1, NULL, 1, 10, 10.00, 100.00, 0, 1, '2019-09-29 11:40:42', '2019-09-29 11:40:42'),
(18, 20, 1, NULL, 1, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:42:30', '2019-09-29 11:42:30'),
(19, 21, 1, NULL, 2, 5, 5.00, 25.00, 0, 1, '2019-09-29 11:42:55', '2019-09-29 11:42:55'),
(20, 22, 4, NULL, 2, 2, 5.00, 10.00, 0, 1, '2019-09-30 09:11:46', '2019-09-30 09:11:46'),
(21, 23, 5, NULL, 1, 50, 40.00, 2000.00, 40, 1, '2019-10-01 10:53:23', '2019-10-01 10:53:23'),
(22, 24, 2, NULL, 1, 4, 5.00, 20.00, 0, 1, '2019-10-08 01:30:19', '2019-10-08 01:30:19'),
(23, 25, 5, NULL, 2, 8, 8.00, 96.00, 0, 1, '2019-10-08 02:30:41', '2019-10-08 02:30:41'),
(24, 26, 1, NULL, 1, 4, 50.00, 350.00, 0, 1, '2019-10-08 02:37:18', '2019-10-08 02:37:18'),
(25, 26, 1, NULL, 1, 5, 30.00, 350.00, 0, 1, '2019-10-08 02:37:18', '2019-10-08 02:37:18'),
(26, 27, 5, NULL, 1, 8, 8.00, 100.00, 0, 1, '2019-10-08 02:38:49', '2019-10-08 02:38:49'),
(27, 28, 1, NULL, 1, 10, 50.00, 2000.00, 0, 1, '2019-10-08 02:44:00', '2019-10-08 02:44:00'),
(28, 28, 2, NULL, 1, 10, 50.00, 2000.00, 0, 1, '2019-10-08 02:44:00', '2019-10-08 02:44:00'),
(29, 28, 4, NULL, 1, 10, 50.00, 2000.00, 0, 1, '2019-10-08 02:44:00', '2019-10-08 02:44:00'),
(30, 28, 5, NULL, 1, 10, 50.00, 2000.00, 0, 1, '2019-10-08 02:44:00', '2019-10-08 02:44:00'),
(31, 29, 1, NULL, 1, 10, 50.00, 500.00, 0, 1, '2019-10-08 03:33:46', '2019-10-08 03:33:46'),
(32, 29, 2, NULL, 1, 50, 50.00, 2500.00, 0, 1, '2019-10-08 03:33:46', '2019-10-08 03:33:46');

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_wise`
-- (See below for the actual view)
--
CREATE TABLE `invoice_wise` (
`id` int(10) unsigned
,`date` varchar(191)
,`sell_invoice_no` varchar(191)
,`customer_id` int(11)
,`grand_total_amount` double(8,2)
,`payment_type` varchar(191)
,`discount_percentage` double(8,2)
,`total_discount` double(8,2)
,`tax_percentage` double(8,2)
,`total_tax` double(8,2)
,`vat_percentage` double(8,2)
,`total_vat` double(8,2)
,`invoice_id` int(11)
,`product_id` int(11)
,`inventory_id` int(11)
,`store_id` int(11)
,`quantity` int(11)
,`rate` double(30,2)
,`total_price` double(8,2)
,`discount` float
,`category_id` int(11)
,`product_name` varchar(191)
,`serial_number` varchar(191)
,`model` varchar(191)
,`sale_price` double(8,2)
,`supplier_price` double(8,2)
);

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
(3, '2019_09_03_072251_create_categories_table', 2),
(4, '2019_09_03_131031_create_units_table', 3),
(6, '2019_09_03_132140_create_taxes_table', 4),
(8, '2019_09_03_151737_create_products_table', 5),
(9, '2019_09_05_084125_create_suppliers_table', 6),
(10, '2019_09_07_081651_create_customers_table', 7),
(11, '2019_09_08_142933_create_banks_table', 8),
(12, '2019_09_08_144056_create_bank_transactions_table', 9),
(13, '2019_09_16_062416_create_companies_table', 10),
(14, '2019_09_17_122435_create_product_purchases_table', 11),
(15, '2019_09_17_122957_create_product_purchase_details_table', 11),
(16, '2019_09_17_142108_create_stores_table', 12),
(17, '2019_09_18_072633_create_stocks_table', 13),
(18, '2019_09_25_160532_create_purchase_returns_table', 14),
(19, '2019_09_25_160645_create_purchase_return_details_table', 14),
(20, '2019_09_24_210647_create_invoices_table', 15),
(21, '2019_09_24_210709_create_invoice_details_table', 15),
(22, '2019_10_02_145815_create_customer_payments_table', 16),
(23, '2019_10_13_154950_create_admins_table', 16),
(24, '2019_10_20_172644_create_office_infos_table', 17),
(25, '2019_10_20_173245_create_office_loans_table', 17),
(26, '2019_10_20_220213_create_office_ledgers_table', 17),
(27, '2019_10_23_020435_create_person_infos_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `office_infos`
--

CREATE TABLE `office_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `person_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_infos`
--

INSERT INTO `office_infos` (`id`, `person_name`, `person_phone`, `email`, `person_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mt Nasima Khatun', '0188454154', 'nasima54@gmail.com', 'Mymensingh', NULL, '2019-10-21 05:28:05', '2019-10-23 09:20:26'),
(2, 'Hasan Ali', '01775034958', 'hasan@gmail.com', 'Green Road, Dhaka', NULL, '2019-10-21 08:23:43', '2019-10-21 08:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `office_loans`
--

CREATE TABLE `office_loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` int(15) UNSIGNED NOT NULL,
  `person_id` int(10) UNSIGNED NOT NULL,
  `debit` double(8,2) DEFAULT NULL,
  `credit` double(8,2) DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_loans`
--

INSERT INTO `office_loans` (`id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 666, 1, 1000.00, 0.00, '2019-10-20', NULL, NULL, '2019-10-21 06:53:21', '2019-10-21 06:53:21'),
(2, 572, 1, 100.00, 0.00, '2019-10-20', NULL, NULL, '2019-10-21 06:55:13', '2019-10-21 06:55:13'),
(3, 66918, 1, 0.00, 500.00, '2019-10-21', NULL, NULL, '2019-10-21 07:05:33', '2019-10-21 07:05:33'),
(4, 4550357, 1, 5600.00, 0.00, '2019-10-21', NULL, NULL, '2019-10-21 10:46:16', '2019-10-21 10:46:16'),
(5, 6765523, 2, 2000.00, 0.00, '2019-10-21', NULL, NULL, '2019-10-21 11:58:07', '2019-10-21 11:58:07'),
(6, 5011463, 2, 0.00, 200.00, '2019-10-21', NULL, NULL, '2019-10-21 11:58:27', '2019-10-21 11:58:27');

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
('mdrubelrana112@gmail.com', '$2y$10$xeMCQrYkDz3fINBqMystrO/g2jlNJvzpR.piE/b3lQgk9mtxoVmUS', '2019-10-20 01:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `person_infos`
--

CREATE TABLE `person_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `person_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person_infos`
--

INSERT INTO `person_infos` (`id`, `person_name`, `person_phone`, `email`, `person_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mt Nasima Khatun', '0188454154', 'nasima54@gmail.com', 'Mymensingh', NULL, '2019-10-23 09:14:52', '2019-10-23 09:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `person_loans`
--

CREATE TABLE `person_loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` int(15) UNSIGNED NOT NULL,
  `person_id` int(10) UNSIGNED NOT NULL,
  `debit` double(8,2) DEFAULT NULL,
  `credit` double(8,2) DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person_loans`
--

INSERT INTO `person_loans` (`id`, `transaction_id`, `person_id`, `debit`, `credit`, `date`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 2640306, 1, 1000.00, 0.00, '2019-10-23', NULL, NULL, '2019-10-23 09:24:09', '2019-10-23 09:24:09'),
(2, 4809641, 1, 0.00, 200.00, '2019-10-23', NULL, NULL, '2019-10-23 09:26:29', '2019-10-23 09:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `supplier_price` double(8,2) NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `unit_id`, `tax`, `product_name`, `serial_number`, `model`, `sale_price`, `image`, `supplier_id`, `supplier_price`, `details`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, NULL, 'Samphone', NULL, '2019SAM201', 200.00, '1567591947.jpg', 1, 2000.00, NULL, '2019-09-04 04:12:27', '2019-09-24 09:28:53'),
(2, 4, NULL, NULL, 'Noodbook', NULL, '2019MKS', 500.00, '1567595987.png', 1, 400.00, NULL, '2019-09-04 05:19:47', '2019-09-24 09:27:44'),
(4, 9, 2, '5', 'Walton Primo 3i', '1111', '2019', 8000.00, '1567936358.jpg', 2, 7500.00, 'Good Product', '2019-09-08 03:35:13', '2019-09-08 03:52:38'),
(5, 9, 2, '2', 'Samsung', '351653', '2019', 12000.00, NULL, 3, 10200.00, 'bd', '2019-09-08 04:14:38', '2019-09-08 04:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchases`
--

CREATE TABLE `product_purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `purchase_invoice_no` int(11) NOT NULL,
  `grand_total_amount` double(8,2) NOT NULL,
  `total_discount` double(8,2) NOT NULL,
  `dis_per` float DEFAULT NULL,
  `purchase_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_purchases`
--

INSERT INTO `product_purchases` (`id`, `supplier_id`, `purchase_invoice_no`, `grand_total_amount`, `total_discount`, `dis_per`, `purchase_date`, `payment_type`, `bank_id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, 190901, 25.00, 0.00, NULL, '2019-09-18', '2', NULL, NULL, 1, '2019-09-18 05:04:02', '2019-09-18 05:04:02'),
(5, 2, 190902, 11400.00, 600.00, NULL, '2019-09-22', '3', '2', NULL, 1, '2019-09-18 05:05:50', '2019-09-21 21:13:46'),
(6, 1, 190903, 3800.00, 200.00, 5, '2019-09-18', '3', '2', NULL, 1, '2019-09-18 09:09:04', '2019-09-18 09:09:04'),
(7, 3, 190904, 4750.00, 250.00, 5, '2019-09-19', '3', '2', NULL, 1, '2019-09-19 04:18:30', '2019-09-19 04:18:30'),
(8, 3, 190905, 49.00, 1.00, 2, '2019-09-19', '3', '1', NULL, 1, '2019-09-19 13:15:13', '2019-09-19 13:15:13'),
(9, 2, 190906, 49.00, 1.00, 2, '2019-09-19', '3', '2', NULL, 1, '2019-09-19 14:08:52', '2019-09-19 14:08:52'),
(10, 2, 190907, 49.50, 0.50, 1, '2019-09-19', '3', '1', NULL, 1, '2019-09-19 14:15:20', '2019-09-19 14:15:20'),
(11, 2, 190908, 49.50, 0.50, 1, '2019-09-19', '3', '1', NULL, 1, '2019-09-19 14:18:45', '2019-09-19 14:18:45'),
(12, 2, 190909, 49.00, 1.00, 2, '2019-09-19', '3', '1', NULL, 1, '2019-09-19 14:20:48', '2019-09-19 14:20:48'),
(13, 3, 190910, 49.50, 0.50, 1, '2019-09-19', '3', '2', NULL, 1, '2019-09-19 14:28:27', '2019-09-19 14:28:27'),
(14, 3, 190911, 600.00, 0.00, NULL, '2019-09-19', '3', '2', NULL, 1, '2019-09-19 14:30:17', '2019-09-19 14:30:17'),
(15, 2, 190912, 23.75, 1.25, 5, '2019-09-19', '2', NULL, NULL, 1, '2019-09-19 14:32:07', '2019-09-19 14:32:07'),
(16, 1, 190913, 122.50, 2.50, 2, '2019-09-21', '1', NULL, NULL, 1, '2019-09-21 07:16:16', '2019-09-21 07:16:16'),
(17, 2, 190914, 11.52, 0.48, NULL, '2019-09-22', '1', NULL, NULL, 1, '2019-09-21 10:34:12', '2019-09-21 21:20:27'),
(18, 2, 190915, 5000.00, 0.00, NULL, '2019-09-22', '2', NULL, NULL, 1, '2019-09-22 06:21:34', '2019-09-22 06:21:34'),
(19, 2, 190916, 100.00, 0.00, NULL, '2019-09-22', '3', '2', NULL, 1, '2019-09-22 06:24:46', '2019-09-22 06:24:46'),
(20, 2, 190917, 294.00, 6.00, NULL, '2019-09-24', '3', '2', NULL, 1, '2019-09-24 13:29:30', '2019-09-24 13:30:35'),
(21, 2, 190918, 25.00, 0.00, NULL, '2019-09-28', '2', NULL, NULL, 1, '2019-09-28 13:23:50', '2019-09-28 13:23:50'),
(22, 3, 190919, 25.00, 0.00, NULL, '2019-09-29', '3', '1', NULL, 1, '2019-09-29 10:10:13', '2019-09-29 10:10:13'),
(23, 2, 190920, 1000.00, 0.00, NULL, '2019-09-29', '2', NULL, NULL, 1, '2019-09-29 11:36:10', '2019-09-29 11:36:10'),
(24, 3, 190921, 1000.00, 0.00, NULL, '2019-09-29', '1', NULL, NULL, 1, '2019-09-29 11:37:02', '2019-09-29 11:37:02'),
(25, 2, 190922, 1600.00, 0.00, NULL, '2019-09-29', '2', NULL, NULL, 1, '2019-09-29 11:37:36', '2019-09-29 11:37:36'),
(26, 3, 190923, 2500.00, 0.00, NULL, '2019-09-29', '1', NULL, NULL, 1, '2019-09-29 11:38:44', '2019-09-29 11:38:44'),
(27, 1, 190924, 10000.00, 0.00, NULL, '2019-09-29', '1', NULL, NULL, 1, '2019-09-29 11:39:19', '2019-09-29 11:39:19'),
(28, 2, 190925, 5000.00, 0.00, NULL, '2019-09-29', '2', NULL, NULL, 1, '2019-09-29 11:39:51', '2019-09-29 11:39:51'),
(29, 2, 190926, 10000.00, 0.00, NULL, '2019-09-29', '2', NULL, NULL, 1, '2019-09-29 11:40:11', '2019-09-29 11:40:11'),
(30, 3, 190927, 85.00, 0.00, NULL, '2019-10-01', '2', NULL, NULL, 1, '2019-10-01 12:04:43', '2019-10-01 12:04:43'),
(31, 2, 190928, 80000.00, 0.00, NULL, '2019-10-07', '1', NULL, NULL, 1, '2019-10-08 02:43:13', '2019-10-08 02:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase_details`
--

CREATE TABLE `product_purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `inventory_id` int(10) UNSIGNED DEFAULT NULL,
  `store_id` int(10) UNSIGNED NOT NULL,
  `quantity` double(8,2) NOT NULL,
  `rate` double(8,2) NOT NULL,
  `total_amount` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_purchase_details`
--

INSERT INTO `product_purchase_details` (`id`, `purchase_id`, `product_id`, `inventory_id`, `store_id`, `quantity`, `rate`, `total_amount`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(2, 4, 5, NULL, 1, 5.00, 5.00, 25.00, 0.00, 1, '2019-09-18 05:04:02', '2019-09-18 05:04:02'),
(3, 5, 5, NULL, 1, 100.00, 20.00, 1900.00, 100.00, 1, '2019-09-18 05:05:50', '2019-09-21 21:16:48'),
(4, 5, 4, NULL, 1, 200.00, 50.00, 9500.00, 500.00, 1, '2019-09-18 05:05:50', '2019-09-21 21:16:48'),
(5, 6, 5, NULL, 1, 50.00, 20.00, 1000.00, 0.00, 1, '2019-09-18 09:09:04', '2019-09-18 09:09:04'),
(6, 6, 4, NULL, 1, 100.00, 30.00, 3000.00, 0.00, 1, '2019-09-18 09:09:04', '2019-09-18 09:09:04'),
(7, 7, 2, NULL, 1, 50.00, 100.00, 5000.00, 0.00, 1, '2019-09-19 04:18:30', '2019-09-19 04:18:30'),
(8, 8, 1, NULL, 1, 5.00, 5.00, 25.00, 0.00, 1, '2019-09-19 13:15:13', '2019-09-19 13:15:13'),
(9, 8, 2, NULL, 1, 5.00, 5.00, 25.00, 0.00, 1, '2019-09-19 13:15:14', '2019-09-19 13:15:14'),
(10, 9, 3, NULL, 1, 5.00, 5.00, 25.00, 1.00, 1, '2019-09-19 14:08:52', '2019-09-19 14:08:52'),
(11, 9, 2, NULL, 1, 5.00, 5.00, 25.00, 1.00, 1, '2019-09-19 14:08:52', '2019-09-19 14:08:52'),
(12, 10, 4, NULL, 1, 5.00, 5.00, 50.00, 0.50, 1, '2019-09-19 14:15:20', '2019-09-19 14:15:20'),
(13, 10, 5, NULL, 1, 5.00, 5.00, 50.00, 0.50, 1, '2019-09-19 14:15:21', '2019-09-19 14:15:21'),
(14, 11, 4, NULL, 1, 5.00, 5.00, 25.00, 0.50, 1, '2019-09-19 14:18:45', '2019-09-19 14:18:45'),
(15, 11, 5, NULL, 1, 5.00, 5.00, 25.00, 0.50, 1, '2019-09-19 14:18:45', '2019-09-19 14:18:45'),
(16, 12, 4, NULL, 1, 5.00, 5.00, 25.00, 1.00, 1, '2019-09-19 14:20:48', '2019-09-19 14:20:48'),
(17, 12, 5, NULL, 1, 5.00, 5.00, 25.00, 1.00, 1, '2019-09-19 14:20:48', '2019-09-19 14:20:48'),
(18, 13, 3, NULL, 1, 5.00, 5.00, 25.00, 0.00, 1, '2019-09-19 14:28:27', '2019-09-19 14:28:27'),
(19, 13, 4, NULL, 1, 5.00, 5.00, 25.00, 0.00, 1, '2019-09-19 14:28:27', '2019-09-19 14:28:27'),
(20, 14, 3, NULL, 1, 20.00, 20.00, 400.00, 0.00, 1, '2019-09-19 14:30:17', '2019-09-19 14:30:17'),
(21, 14, 4, NULL, 1, 10.00, 20.00, 200.00, 0.00, 1, '2019-09-19 14:30:17', '2019-09-19 14:30:17'),
(22, 15, 3, NULL, 2, 5.00, 5.00, 25.00, 1.25, 1, '2019-09-19 14:32:07', '2019-09-19 14:32:07'),
(23, 16, 4, NULL, 1, 5.00, 5.00, 25.00, 2.50, 1, '2019-09-21 07:16:16', '2019-09-21 07:16:16'),
(24, 16, 4, NULL, 1, 10.00, 10.00, 100.00, 2.50, 1, '2019-09-21 07:16:16', '2019-09-21 07:16:16'),
(25, 17, 1, NULL, 1, 3.00, 4.00, 11.52, 0.48, 1, '2019-09-21 10:34:12', '2019-09-21 21:20:27'),
(26, 18, 4, NULL, 2, 100.00, 50.00, 5000.00, 0.00, 1, '2019-09-22 06:21:34', '2019-09-22 06:21:34'),
(27, 19, 4, NULL, 1, 10.00, 10.00, 100.00, 0.00, 1, '2019-09-22 06:24:46', '2019-09-22 06:24:46'),
(28, 20, 4, NULL, 1, 5.00, 60.00, 294.00, 6.00, 1, '2019-09-24 13:29:30', '2019-09-24 13:30:35'),
(29, 21, 2, NULL, 1, 5.00, 5.00, 25.00, 0.00, 1, '2019-09-28 13:23:51', '2019-09-28 13:23:51'),
(30, 22, 2, NULL, 1, 5.00, 5.00, 25.00, 0.00, 1, '2019-09-29 10:10:13', '2019-09-29 10:10:13'),
(31, 23, 4, NULL, 2, 100.00, 10.00, 1000.00, 0.00, 1, '2019-09-29 11:36:10', '2019-09-29 11:36:10'),
(32, 24, 4, NULL, 1, 50.00, 20.00, 1000.00, 0.00, 1, '2019-09-29 11:37:02', '2019-09-29 11:37:02'),
(33, 25, 2, NULL, 2, 40.00, 40.00, 1600.00, 0.00, 1, '2019-09-29 11:37:36', '2019-09-29 11:37:36'),
(34, 26, 1, NULL, 2, 50.00, 50.00, 2500.00, 0.00, 1, '2019-09-29 11:38:44', '2019-09-29 11:38:44'),
(35, 27, 1, NULL, 2, 100.00, 100.00, 10000.00, 0.00, 1, '2019-09-29 11:39:19', '2019-09-29 11:39:19'),
(36, 28, 4, NULL, 1, 100.00, 50.00, 5000.00, 0.00, 1, '2019-09-29 11:39:51', '2019-09-29 11:39:51'),
(37, 29, 4, NULL, 1, 100.00, 100.00, 10000.00, 0.00, 1, '2019-09-29 11:40:11', '2019-09-29 11:40:11'),
(38, 30, 2, NULL, 2, 5.00, 5.00, 25.00, 0.00, 1, '2019-10-01 12:04:43', '2019-10-01 12:04:43'),
(39, 30, 4, NULL, 2, 6.00, 10.00, 60.00, 0.00, 1, '2019-10-01 12:04:43', '2019-10-01 12:04:43'),
(40, 31, 1, NULL, 1, 100.00, 200.00, 20000.00, 0.00, 1, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(41, 31, 2, NULL, 1, 100.00, 200.00, 20000.00, 0.00, 1, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(42, 31, 4, NULL, 1, 100.00, 200.00, 20000.00, 0.00, 1, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(43, 31, 5, NULL, 1, 100.00, 200.00, 20000.00, 0.00, 1, '2019-10-08 02:43:13', '2019-10-08 02:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_returns`
--

CREATE TABLE `purchase_returns` (
  `id` int(10) UNSIGNED NOT NULL,
  `return_invoice_no` int(15) NOT NULL,
  `purchase_id` int(11) UNSIGNED NOT NULL,
  `supplier_id` int(11) UNSIGNED NOT NULL,
  `return_date` date NOT NULL,
  `grand_total` double NOT NULL,
  `store_id` int(3) DEFAULT NULL,
  `payment_type` int(2) NOT NULL,
  `bank_id` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_details`
--

CREATE TABLE `purchase_return_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_return_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_return_qty` int(11) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `purchase_qty` int(11) DEFAULT NULL,
  `sell_qty` int(11) DEFAULT NULL,
  `store_id` int(10) UNSIGNED DEFAULT NULL,
  `inventory_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `purchase_qty`, `sell_qty`, `store_id`, `inventory_id`, `created_at`, `updated_at`) VALUES
(1, 1, 150, 68, 2, NULL, '2019-09-29 11:38:44', '2019-10-08 03:33:46'),
(2, 4, 300, 24, 1, NULL, '2019-09-29 11:39:51', '2019-10-08 02:44:00'),
(3, 2, 5, 128, 2, NULL, '2019-10-01 12:04:43', '2019-10-08 03:33:46'),
(4, 4, 6, NULL, 2, NULL, '2019-10-01 12:04:43', '2019-10-01 12:04:43'),
(5, 1, 100, NULL, 1, NULL, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(6, 2, 100, NULL, 1, NULL, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(7, 5, 100, 20, 1, NULL, '2019-10-08 02:43:13', '2019-10-08 02:44:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `stock_report`
-- (See below for the actual view)
--
CREATE TABLE `stock_report` (
`id` bigint(20) unsigned
,`product_name` varchar(191)
,`model` varchar(191)
,`sale_price` double(8,2)
,`purchase_qty` int(11)
,`sell_qty` int(11)
,`stock` bigint(12)
,`stock_price` double(19,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `mobile`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Store', '01775034549', 'Green Road, Panthapath, Dhaka-1205', 1, '2019-09-18 01:04:01', '2019-09-18 01:04:01'),
(2, 'Mymensingh Store', '01824080609', 'Sadar, Mymensingh', 1, '2019-09-18 01:21:03', '2019-09-18 01:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_due` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `mobile`, `address`, `details`, `previous_due`, `created_at`, `updated_at`) VALUES
(1, 'Md. Rubel Rana', '01775034549', 'Dhaka', NULL, 5000.00, '2019-09-05 03:03:41', '2019-09-05 03:03:41'),
(2, 'Md. Noor Ali', '01824080609', 'Panthapatha, Dhaka', NULL, 2000.00, '2019-09-05 03:04:09', '2019-09-08 02:32:12'),
(3, 'Rayhan', '01775498565', 'Mirpur', 'ghg', 800000.00, '2019-09-05 03:04:32', '2019-09-08 02:31:48');

-- --------------------------------------------------------

--
-- Stand-in structure for view `supplier_stocks`
-- (See below for the actual view)
--
CREATE TABLE `supplier_stocks` (
`supplier_id` bigint(20) unsigned
,`supplier_name` varchar(191)
,`product_id` bigint(20) unsigned
,`product_name` varchar(191)
,`model` varchar(191)
,`sale_price` double(8,2)
,`purchase_qty` int(11)
,`sell_qty` int(11)
,`stock` bigint(12)
,`stock_price` double(19,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `tax`, `created_at`, `updated_at`) VALUES
(1, '2', '2019-09-03 08:00:43', '2019-09-03 08:05:14'),
(2, '5', '2019-09-05 04:00:00', '2019-09-05 04:00:00'),
(3, '6', '2019-09-05 04:00:14', '2019-09-05 04:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gram', 1, '2019-09-03 07:38:20', '2019-09-03 07:41:32'),
(2, 'kg', 1, '2019-09-03 07:48:41', '2019-09-03 07:48:41'),
(3, 'PSC', 1, '2019-10-19 23:58:56', '2019-10-19 23:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `email_verified_at`, `password`, `remember_token`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Md. Rubel Rana', 'mdrubelrana112@gmail.com', 0, NULL, '$2y$10$ua2z0qkEu1HVHXLIHRRAfesM3M7k3nMUQYRiAtKjpkir5pJeZtcmK', 'jCSRW2am0ZUoZJwwZsN2pJzeKbymBvHEF5qrhC5pmNaOpjdcQq1lAVSgHQgq', '1571244778.jpg', 1, '2019-09-01 06:35:41', '2019-10-19 21:37:29'),
(4, 'Rana', 'rubel.bu112@gmail.com', 1, NULL, '$2y$10$lds8DZIOCuWT0w0W/VwmNODWVap9aOGFm8UZsPiPhCeNzOwrVXcbe', NULL, '1571243991.png', 0, '2019-10-15 00:46:09', '2019-10-17 05:41:46'),
(5, 'Rakib', 'rubel@gmail.com', 0, NULL, '$2y$10$4GXvKbd.6FHFWsV2cPf46OqX1ZoKT45vBCdnIY0DoKlbYo9tkZEXq', NULL, NULL, NULL, '2019-10-19 20:07:58', '2019-10-19 21:38:22'),
(12, 'ff', 'rubel.b5u112@gmail.com', 0, NULL, '$2y$10$vwc20xGJi3PZYLrWHqtCzuHDqe6jJ3t5A3P4cFVJscYcwQH.pn/9O', NULL, NULL, 0, '2019-10-20 01:06:32', '2019-10-20 01:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `setting_id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `invoice_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `currency_position` varchar(10) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `rtr` varchar(255) DEFAULT NULL,
  `captcha` int(11) DEFAULT 1 COMMENT '0=active,1=inactive',
  `site_key` varchar(250) DEFAULT NULL,
  `secret_key` varchar(250) DEFAULT NULL,
  `discount_type` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`setting_id`, `logo`, `invoice_logo`, `favicon`, `currency`, `currency_position`, `footer_text`, `language`, `rtr`, `captcha`, `site_key`, `secret_key`, `discount_type`, `created_at`, `updated_at`) VALUES
(1, '1568630042.png', '1568630055.png', '1568630024.png', 'TK', '0', 'Copyright PhoenixERP © 2019 Phoenix Software. All rights reserved.', 'english', '0', 1, NULL, NULL, 1, NULL, '2019-09-30 10:40:15');

-- --------------------------------------------------------

--
-- Structure for view `invoicemanage`
--
DROP TABLE IF EXISTS `invoicemanage`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoicemanage`  AS  select `c`.`customer_name` AS `customer_name`,`c`.`mobile` AS `mobile`,`c`.`address` AS `address`,`c`.`previous_due` AS `previous_due`,`i`.`id` AS `id`,`i`.`customer_id` AS `customer_id`,`i`.`date` AS `date`,`i`.`sell_invoice_no` AS `sell_invoice_no`,`i`.`grand_total_amount` AS `grand_total_amount`,`i`.`payment_type` AS `payment_type`,`i`.`discount_percentage` AS `discount_percentage`,`i`.`total_discount` AS `total_discount`,`i`.`tax_percentage` AS `tax_percentage`,`i`.`total_tax` AS `total_tax`,`i`.`vat_percentage` AS `vat_percentage`,`i`.`total_vat` AS `total_vat`,`i`.`bank_id` AS `bank_id`,`d`.`id` AS `invoice_details_id`,`d`.`invoice_id` AS `invoice_id`,`d`.`product_id` AS `product_id`,`d`.`store_id` AS `store_id`,`d`.`quantity` AS `quantity`,`d`.`rate` AS `rate`,`d`.`total_price` AS `total_price`,`d`.`discount` AS `discount` from ((`customers` `c` join `invoices` `i` on(`c`.`id` = `i`.`customer_id`)) join `invoice_details` `d` on(`i`.`id` = `d`.`invoice_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `invoice_wise`
--
DROP TABLE IF EXISTS `invoice_wise`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_wise`  AS  select `i`.`id` AS `id`,`i`.`date` AS `date`,`i`.`sell_invoice_no` AS `sell_invoice_no`,`i`.`customer_id` AS `customer_id`,`i`.`grand_total_amount` AS `grand_total_amount`,`i`.`payment_type` AS `payment_type`,`i`.`discount_percentage` AS `discount_percentage`,`i`.`total_discount` AS `total_discount`,`i`.`tax_percentage` AS `tax_percentage`,`i`.`total_tax` AS `total_tax`,`i`.`vat_percentage` AS `vat_percentage`,`i`.`total_vat` AS `total_vat`,`d`.`invoice_id` AS `invoice_id`,`d`.`product_id` AS `product_id`,`d`.`inventory_id` AS `inventory_id`,`d`.`store_id` AS `store_id`,`d`.`quantity` AS `quantity`,`d`.`rate` AS `rate`,`d`.`total_price` AS `total_price`,`d`.`discount` AS `discount`,`p`.`category_id` AS `category_id`,`p`.`product_name` AS `product_name`,`p`.`serial_number` AS `serial_number`,`p`.`model` AS `model`,`p`.`sale_price` AS `sale_price`,`p`.`supplier_price` AS `supplier_price` from ((`invoices` `i` join `invoice_details` `d` on(`i`.`id` = `d`.`invoice_id`)) join `products` `p` on(`p`.`id` = `d`.`product_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `stock_report`
--
DROP TABLE IF EXISTS `stock_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stock_report`  AS  select `p`.`id` AS `id`,`p`.`product_name` AS `product_name`,`p`.`model` AS `model`,`p`.`sale_price` AS `sale_price`,`s`.`purchase_qty` AS `purchase_qty`,`s`.`sell_qty` AS `sell_qty`,`s`.`purchase_qty` - `s`.`sell_qty` AS `stock`,`p`.`sale_price` * (`s`.`purchase_qty` - `s`.`sell_qty`) AS `stock_price` from (`products` `p` join `stocks` `s` on(`p`.`id` = `s`.`product_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `supplier_stocks`
--
DROP TABLE IF EXISTS `supplier_stocks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `supplier_stocks`  AS  select `s`.`id` AS `supplier_id`,`s`.`supplier_name` AS `supplier_name`,`p`.`id` AS `product_id`,`p`.`product_name` AS `product_name`,`p`.`model` AS `model`,`p`.`sale_price` AS `sale_price`,`stocks`.`purchase_qty` AS `purchase_qty`,`stocks`.`sell_qty` AS `sell_qty`,`stocks`.`purchase_qty` - `stocks`.`sell_qty` AS `stock`,`p`.`sale_price` * (`stocks`.`purchase_qty` - `stocks`.`sell_qty`) AS `stock_price` from ((`suppliers` `s` join `products` `p` on(`s`.`id` = `p`.`supplier_id`)) join `stocks` on(`p`.`id` = `stocks`.`product_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_payments`
--
ALTER TABLE `customer_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_infos`
--
ALTER TABLE `office_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_loans`
--
ALTER TABLE `office_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `person_infos`
--
ALTER TABLE `person_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_loans`
--
ALTER TABLE `person_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_purchases`
--
ALTER TABLE `product_purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_purchase_details`
--
ALTER TABLE `product_purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_returns`
--
ALTER TABLE `purchase_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return_details`
--
ALTER TABLE `purchase_return_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_payments`
--
ALTER TABLE `customer_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `office_infos`
--
ALTER TABLE `office_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `office_loans`
--
ALTER TABLE `office_loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `person_infos`
--
ALTER TABLE `person_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person_loans`
--
ALTER TABLE `person_loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_purchases`
--
ALTER TABLE `product_purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_purchase_details`
--
ALTER TABLE `product_purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `purchase_returns`
--
ALTER TABLE `purchase_returns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_return_details`
--
ALTER TABLE `purchase_return_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
