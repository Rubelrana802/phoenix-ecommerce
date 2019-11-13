-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 12:51 PM
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
-- Database: `phoenixecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_name`, `account_type`, `created_at`, `updated_at`) VALUES
(1, 'Salary', '1', '2019-11-06 03:54:39', '2019-11-06 03:54:39'),
(2, 'Customer', '2', '2019-11-06 03:59:38', '2019-11-06 03:59:38');

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
(6, 2, NULL, '5151', '2019-09-09', 'Credit-', NULL, 57000.00, 57000.00, 1, '2019-09-09 13:28:56', '2019-09-09 13:28:56'),
(7, 2, NULL, '4295', '2019-09-09', 'Debit+', 7000.00, NULL, 7000.00, 1, '2019-10-23 09:56:28', '2019-10-23 09:56:28'),
(8, 2, NULL, '5848948', '2019-09-09', 'Debit+', 50000.00, NULL, 50000.00, 1, '2019-10-23 09:57:13', '2019-10-23 09:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `image`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '1572946387.png', 'https://www.apple.com/', 1, '2019-11-05 23:33:07', '2019-11-05 23:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Nodebook', 0, NULL, NULL, 1, '2019-09-03 06:31:34', '2019-09-05 03:52:48'),
(6, 'Radio', 0, NULL, NULL, 1, '2019-09-03 06:35:58', '2019-09-05 03:52:22'),
(7, 'Tv', 0, NULL, NULL, 1, '2019-09-03 06:38:07', '2019-09-05 03:51:57'),
(8, 'Laptop', 0, NULL, NULL, 1, '2019-09-03 06:39:04', '2019-09-05 03:52:10'),
(10, 'Phone', 0, NULL, NULL, 1, '2019-09-24 13:50:49', '2019-09-24 13:50:49'),
(11, 'Phone', 0, NULL, NULL, 1, '2019-09-24 13:51:36', '2019-09-24 13:51:36'),
(12, 'Mobile', 0, NULL, NULL, 1, '2019-09-24 13:55:44', '2019-09-24 13:55:44'),
(14, 'ACDE', 0, NULL, NULL, 1, '2019-09-24 14:12:17', '2019-10-19 23:57:59'),
(15, 'Biscuts', 0, NULL, NULL, 1, '2019-09-24 14:25:41', '2019-09-24 14:25:41'),
(16, 'Water', 0, NULL, NULL, 1, '2019-10-19 23:55:39', '2019-10-19 23:55:39'),
(20, 'Light', 7, NULL, NULL, 1, '2019-11-04 09:32:24', '2019-11-04 09:32:24'),
(21, 'node', 4, NULL, NULL, 1, '2019-11-04 10:26:59', '2019-11-04 10:26:59'),
(22, 'Lectus', 15, NULL, NULL, 1, '2019-11-04 11:04:36', '2019-11-04 11:04:36');

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `email`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Md Nurul Islam', 'Product Issue', 'mdrubelrana112@gmail.com', '01775034549', 'quam nunc putamus parum claram anteposuerit litterarum formas human.', '2019-11-06 08:58:39', '2019-11-06 08:58:39'),
(2, 'Mt Nasima Khatun', 'Product Issue', 'mdrubelrana112@gmail.com', '01775034549', 'xg', '2019-11-06 09:02:01', '2019-11-06 09:02:01');

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
(1, 'Md. Riaz Uddin', 'riaz@gmail.com', '0177503458', 'Dhaka, Bangladesh', NULL, '2019-09-07 02:45:07', '2019-09-08 01:31:18'),
(2, 'Md. Taijul Islam', 'taijul@gmail.com', '01846465489', 'Dhaka', 500.00, '2019-09-29 11:15:43', '2019-09-29 11:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payments`
--

CREATE TABLE `customer_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `payment_total` double(8,2) NOT NULL,
  `date` date NOT NULL,
  `type` tinyint(4) NOT NULL,
  `detaits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_by` tinyint(4) DEFAULT NULL,
  `bank_id` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_payments`
--

INSERT INTO `customer_payments` (`id`, `customer_id`, `invoice_id`, `payment_total`, `date`, `type`, `detaits`, `payment_by`, `bank_id`, `created_at`, `updated_at`) VALUES
(81, 1, 38, 650.00, '2019-10-27', 2, NULL, NULL, NULL, '2019-10-27 14:08:33', '2019-10-27 14:08:33'),
(82, 2, 39, 10830.00, '2019-10-27', 1, NULL, 1, NULL, '2019-10-27 16:41:36', '2019-10-27 16:41:36'),
(83, 2, 39, 1083.00, '2019-10-27', 2, NULL, NULL, NULL, '2019-10-27 16:42:54', '2019-10-27 16:42:54'),
(84, 2, 39, 2508.00, '2019-10-27', 2, NULL, NULL, NULL, '2019-10-27 16:46:14', '2019-10-27 16:46:14'),
(85, 1, NULL, 50.00, '2019-10-27', 1, NULL, 1, NULL, '2019-10-27 17:53:23', '2019-10-27 17:53:23');

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
(29, 2, '2019-10-07', '19092929', 3000.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-08 03:33:46', '2019-10-08 03:33:46'),
(30, 1, '2019-10-24', '19092930', 2038.40, '1', 2.00, 40.00, 2.00, 39.20, 2.00, 39.20, NULL, 1, '2019-10-25 05:00:21', '2019-10-25 05:00:21'),
(31, 1, '2019-10-24', '19092931', 2038.40, '1', 2.00, 40.00, 2.00, 39.20, 2.00, 39.20, NULL, 1, '2019-10-25 05:04:37', '2019-10-25 05:04:37'),
(32, 1, '2019-10-24', '19092932', 2038.40, '1', 2.00, 40.00, 2.00, 39.20, 2.00, 39.20, NULL, 1, '2019-10-25 05:05:33', '2019-10-25 05:05:33'),
(33, 1, '2019-10-26', '19092933', 2038.40, '1', 2.00, 40.00, 2.00, 39.20, 2.00, 39.20, NULL, 1, '2019-10-26 23:50:13', '2019-10-26 23:50:13'),
(34, 1, '2019-10-26', '19092934', 25.00, '2', NULL, 0.00, NULL, 0.00, NULL, 0.00, 1, 1, '2019-10-27 02:12:01', '2019-10-27 02:12:01'),
(35, 2, '2019-10-27', '19092935', 2375.00, '1', 5.00, 125.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-27 09:39:52', '2019-10-27 09:39:52'),
(36, 1, '2019-10-27', '19092936', 1300.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-27 10:38:29', '2019-10-27 10:38:29'),
(37, 1, '2019-10-27', '19092937', 1300.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-27 10:46:52', '2019-10-27 10:46:52'),
(38, 1, '2019-10-27', '19092938', 1300.00, '1', NULL, 0.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-27 10:48:23', '2019-10-27 10:48:23'),
(39, 2, '2019-10-27', '19092939', 10830.00, '1', 5.00, 570.00, NULL, 0.00, NULL, 0.00, NULL, 1, '2019-10-27 16:41:36', '2019-10-27 16:41:36');

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
(4, 7, 4, NULL, 1, 0, 0.00, 52.00, 1, 1, '2019-09-29 11:16:18', '2019-10-27 08:13:24'),
(5, 7, 1, NULL, 1, 6, 5.00, 55.00, 2.75, 1, '2019-09-29 11:16:18', '2019-09-29 11:16:18'),
(6, 8, 5, NULL, 1, -2, -3.00, 24.00, 0, 1, '2019-09-29 11:17:40', '2019-10-27 10:29:20'),
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
(32, 29, 2, NULL, 1, 50, 50.00, 2500.00, 0, 1, '2019-10-08 03:33:46', '2019-10-08 03:33:46'),
(33, 35, 5, NULL, 1, 50, 50.00, 2500.00, 125, 1, '2019-10-27 09:39:52', '2019-10-27 09:39:52'),
(34, 36, 6, NULL, 1, 18, 65.00, 1300.00, 0, 1, '2019-10-27 10:38:29', '2019-10-27 10:43:23'),
(35, 37, 6, NULL, 1, 20, 65.00, 1300.00, 0, 1, '2019-10-27 10:46:52', '2019-10-27 10:46:52'),
(36, 38, 6, NULL, 1, 20, 65.00, 1300.00, 0, 1, '2019-10-27 10:48:23', '2019-10-27 10:48:23'),
(37, 39, 6, NULL, 1, 20, 70.00, 1400.00, 570, 1, '2019-10-27 16:41:36', '2019-10-27 16:41:36'),
(38, 39, 4, NULL, 1, 20, 500.00, 10000.00, 570, 1, '2019-10-27 16:41:36', '2019-10-27 16:41:36');

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
,`category_id` int(10) unsigned
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
(27, '2019_10_23_020435_create_person_infos_table', 18),
(28, '2019_10_22_221310_create_sale_returns_table', 19),
(29, '2019_10_22_221709_create_sale_return_details_table', 19),
(30, '2019_10_27_040026_create_supplier_payments_table', 20),
(31, '2019_11_05_145753_create_brands_table', 21),
(32, '2019_10_22_221310_create_products_table', 19),
(33, '2019_09_03_151737_create_products_table', 22),
(34, '2019_11_05_180326_create_product_galleries_table', 22),
(35, '2019_11_05_194030_create_accounts_table', 23),
(36, '2019_11_05_214320_create_sliders_table', 24),
(37, '2019_11_05_223406_create_subscribes_table', 25),
(38, '2019_11_06_004517_create_contacts_table', 26);

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
  `category_id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_sale` int(2) DEFAULT NULL,
  `offer` int(2) DEFAULT NULL,
  `offer_price` double(8,2) DEFAULT NULL,
  `sale_price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_price` double(8,2) NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `unit_id`, `brand_id`, `tax`, `product_name`, `tag`, `serial_number`, `type`, `model`, `best_sale`, `offer`, `offer_price`, `sale_price`, `image`, `supplier_price`, `details`, `created_at`, `updated_at`) VALUES
(1, 21, 1, 1, NULL, 'TAAZA BROOKE BOND TEA ', NULL, NULL, NULL, 'T555', NULL, 1, 190.00, 200.00, '1572951641.jpg', 150.00, '<div _ngcontent-c7=\"\" class=\"product-desc\" style=\"color: rgb(33, 37, 41); font-family: Exo, sans-serif; font-size: 16px; outline: 0px !important;\"><p _ngcontent-c7=\"\" style=\"margin-bottom: 1rem; outline: 0px !important;\"></p><p style=\"margin-bottom: 1rem; outline: 0px !important;\"><span style=\"outline: 0px !important;\">Taaza Tea bags are made of high quality food grade filter paper and uses food grade strings and thread. Finally, to ensure that the tea remains fresh, 2 layers of protective barriers are used to keep moisture out. The tea used is a perfect blend to give an uplifting cup of tea. Taaza’s special double chamber flow-through teabag provides a cup of tea with exceptional colour and taste. Consumers now have the option to customize their own cup of tea, the way they like it — light, regular or strong.</span></p><div><span style=\"outline: 0px !important;\"><br></span></div><p></p></div>', '2019-11-06 01:00:41', '2019-11-06 01:58:59'),
(2, 7, 1, 1, NULL, 'Ms. Alejandra Bergnaum', 'Dr. Winifred Casper', '93', '0', 'Laurel Hackett MD', NULL, 1, 31.00, 37.00, 'https://lorempixel.com/640/480/?38044', 29.00, 'Rem laboriosam debitis facere ut dolores sit. Laudantium occaecati aliquid ut alias minima reiciendis facere. Dolore pariatur et nihil magnam. Quo rerum modi fugit optio voluptatem suscipit.', '2019-11-07 21:01:47', '2019-11-07 21:01:47'),
(3, 8, 1, 1, NULL, 'Fleta Mohr', 'Ross Willms', '25', '1', 'Ramiro Murray', NULL, NULL, 30.00, 23.00, 'https://lorempixel.com/640/480/?35520', 12.00, 'Maxime ut velit maxime et reiciendis perspiciatis hic. Vel aut sit dolore alias nulla aut iste. Ut et ducimus nostrum voluptates. Voluptas ut quae rerum totam itaque.', '2019-11-07 21:01:47', '2019-11-07 21:01:47'),
(4, 6, 1, 1, NULL, 'Meda Carroll Sr.', 'Esther Haley', '70', '0', 'Mona Ratke', NULL, NULL, 46.00, 42.00, 'https://lorempixel.com/640/480/?60084', 25.00, 'Nulla nisi doloremque et est ut. Cumque aperiam ea repellendus aut qui voluptas. Pariatur nobis dolores vero quo corporis totam ut quis. Sunt ab magnam et recusandae molestias libero beatae.', '2019-11-07 21:01:47', '2019-11-07 21:01:47'),
(5, 22, 2, 1, NULL, 'Miss Odessa Turcotte III', 'Breana Heaney', '33', '1', 'Damian Hauck', NULL, 1, 5.00, 22.00, 'https://lorempixel.com/640/480/?91418', 18.00, 'Autem rerum repellat rerum qui. Quaerat qui et omnis sit accusantium. Qui quasi amet sit exercitationem soluta.', '2019-11-07 21:01:47', '2019-11-07 21:01:47'),
(6, 8, 1, 1, NULL, 'Audra Kilback', 'Susana Ebert V', '63', '0', 'Bessie Brakus', NULL, NULL, 41.00, 43.00, 'https://lorempixel.com/640/480/?79813', 17.00, 'Illo mollitia sunt consequatur eum. Tempore est sit cupiditate quidem aspernatur. Voluptatem reprehenderit iste sint architecto cum at eos. Dignissimos sed harum sed itaque voluptas magni quo.', '2019-11-07 21:01:47', '2019-11-07 21:01:47'),
(7, 22, 1, 1, NULL, 'Barton Lindgren', 'Prof. Gwen Schuster III', '99', '0', 'Lilian Ebert V', NULL, NULL, 23.00, 36.00, 'https://lorempixel.com/640/480/?84153', 26.00, 'Quas adipisci voluptates distinctio molestiae facere sit culpa. Sit delectus quam suscipit doloremque quo non. Dicta excepturi non aut consequatur nesciunt.', '2019-11-07 21:01:47', '2019-11-07 21:01:47'),
(8, 4, 3, 1, NULL, 'Guadalupe Dickinson', 'Effie D\'Amore', '26', '0', 'Morgan Runte', NULL, NULL, 19.00, 30.00, 'https://lorempixel.com/640/480/?69559', 33.00, 'Velit non sunt voluptas qui quidem. Similique dolorum velit quia non cumque. Cum et cumque quia dolor quaerat rerum. Enim accusantium tempore reiciendis id labore rerum illo.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(9, 8, 2, 1, NULL, 'Dr. Floy Bergstrom', 'Adolfo Abernathy', '37', '0', 'Jocelyn Ullrich', NULL, 1, 13.00, 21.00, 'https://lorempixel.com/640/480/?33568', 25.00, 'Aut aut voluptates itaque natus sit possimus. Laborum vitae fugiat aut eius assumenda reiciendis. Culpa et vel architecto eum.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(10, 21, 1, 1, NULL, 'Abbigail Rutherford III', 'Marcelo Littel', '14', '0', 'Hailie Terry', NULL, NULL, 32.00, 43.00, 'https://lorempixel.com/640/480/?90913', 21.00, 'Consectetur totam possimus repellendus molestiae placeat nesciunt. Ut quidem beatae et beatae ratione asperiores. Molestias atque quas aut assumenda aut autem.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(11, 12, 3, 1, NULL, 'Sadie Cremin', 'Prof. Izaiah Spencer DDS', '30', '1', 'Mr. Fern Feeney V', NULL, 1, 23.00, 48.00, 'https://lorempixel.com/640/480/?34258', 47.00, 'Odit sint et voluptate. Eligendi distinctio iure necessitatibus tenetur eligendi. Est nemo aut facere excepturi hic debitis dolor. Adipisci natus temporibus aut molestias quam.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(12, 4, 1, 1, NULL, 'Thalia Ebert', 'Hulda Hermiston', '45', '1', 'Prof. Willis Gleason', NULL, NULL, 24.00, 39.00, 'https://lorempixel.com/640/480/?79188', 50.00, 'Voluptas recusandae sed architecto facilis. Iste molestiae libero et suscipit. Ut praesentium voluptas sunt non quisquam. Vero voluptas soluta qui esse vero aliquid.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(13, 14, 3, 1, NULL, 'Keshaun Schoen', 'Miss Fay Mann', '79', '1', 'Ms. Ressie Walker II', NULL, NULL, 26.00, 12.00, 'https://lorempixel.com/640/480/?55651', 26.00, 'Nostrum voluptatibus est iure. Nemo non in quidem quae. Consequatur odio eveniet qui unde. Ut eos error dolor aliquid qui officiis rerum.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(14, 14, 1, 1, NULL, 'Anita Sporer', 'Margie Kunde', '28', '1', 'Elinore Lind', NULL, NULL, 29.00, 32.00, 'https://lorempixel.com/640/480/?83294', 43.00, 'Et voluptas exercitationem nam repellendus quia illo commodi quo. Expedita molestias molestiae nihil doloribus autem neque. Laborum sit officiis et ex dolore.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(15, 12, 3, 1, NULL, 'Alejandra Corkery', 'August Morissette', '41', '1', 'Terence McLaughlin', NULL, 1, 31.00, 42.00, 'https://lorempixel.com/640/480/?92603', 32.00, 'Animi quae voluptatibus et eos dolorem soluta iste. Recusandae culpa sed officia et qui quibusdam cumque beatae. Et non tempora dolores aliquid velit eaque. Adipisci sed ipsam incidunt dolorem.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(16, 20, 3, 1, NULL, 'Mr. Alexandre Effertz I', 'Mrs. Jody Langosh Jr.', '25', '0', 'Dr. Lela Swaniawski DDS', NULL, NULL, 39.00, 37.00, 'https://lorempixel.com/640/480/?80194', 44.00, 'Voluptatum eius tenetur nihil a. In harum illum tempore ullam vero iure. Quod dolorum eum molestias nisi voluptates eaque at odit.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(17, 15, 2, 1, NULL, 'Lilla Gislason', 'Sibyl Fay', '60', '1', 'Elmira Marvin', NULL, NULL, 40.00, 8.00, 'https://lorempixel.com/640/480/?82197', 33.00, 'Tempora officia vitae magnam aut alias nobis sed. Deleniti eum labore facere aut officiis. Aut eligendi illum atque perspiciatis veniam eveniet nihil. Culpa tempora voluptates ipsum autem sunt.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(18, 14, 3, 1, NULL, 'Deangelo Bergnaum', 'Jakayla Morar Jr.', '13', '0', 'Mr. Dudley Gulgowski', NULL, NULL, 31.00, 28.00, 'https://lorempixel.com/640/480/?48765', 50.00, 'Quaerat ut vero nihil rerum. Fugit non cupiditate est fugiat. Laboriosam molestiae dolorem eius ipsam ad. Accusantium occaecati ullam ratione deserunt illum. In enim placeat nesciunt animi.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(19, 7, 1, 1, NULL, 'Gus Nolan II', 'Dr. Ephraim Wisoky DVM', '68', '1', 'Earline Pfeffer', NULL, NULL, 42.00, 25.00, 'https://lorempixel.com/640/480/?58036', 49.00, 'Inventore et aut facere maiores expedita. Unde aut sed laborum iusto vel culpa. Sit quia beatae autem aperiam similique. Neque illo dolore labore explicabo totam.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(20, 21, 2, 1, NULL, 'Dr. Anna McDermott', 'Stanley Littel', '36', '1', 'Rick O\'Keefe', NULL, NULL, 42.00, 11.00, 'https://lorempixel.com/640/480/?24591', 27.00, 'Qui quia dolore temporibus tempora quo incidunt. Sit autem sit enim odio excepturi. Aliquam consequatur eum et fuga ducimus.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(21, 15, 2, 1, NULL, 'Prof. Sylvia Feil Jr.', 'Larissa Skiles', '32', '0', 'Libbie Schulist', NULL, NULL, 34.00, 46.00, 'https://lorempixel.com/640/480/?98338', 19.00, 'Sequi tempore suscipit similique numquam error atque aut. Consequatur atque eos quia atque optio. Nostrum sint non quasi quas illum fugiat.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(22, 4, 1, 1, NULL, 'Mr. Hipolito Dibbert IV', 'Chad Christiansen', '34', '0', 'Lincoln Shields', NULL, NULL, 13.00, 20.00, 'https://lorempixel.com/640/480/?88603', 24.00, 'Soluta voluptatibus minus non autem maxime officia nostrum. Omnis saepe officia assumenda adipisci quisquam. Quae est consequatur nostrum voluptatum dolorem.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(23, 14, 3, 1, NULL, 'Mandy Krajcik', 'Rosalia Von', '40', '1', 'Remington West DDS', NULL, NULL, 30.00, 45.00, 'https://lorempixel.com/640/480/?82365', 30.00, 'Sed optio fuga velit ipsa nihil. Qui ea officia vel dolorem. Qui culpa sunt quis repellat. Magnam maxime explicabo ut voluptatem cumque minima itaque.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(24, 11, 1, 1, NULL, 'Marcia Haag', 'Alexys Russel', '20', '0', 'Dr. Destin Hauck DVM', NULL, NULL, 11.00, 42.00, 'https://lorempixel.com/640/480/?78782', 13.00, 'Voluptas quo minus ex ducimus dolor temporibus fugit. Harum mollitia id iusto odio doloribus natus nihil. Possimus fuga qui voluptas neque.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(25, 22, 2, 1, NULL, 'Geovanni Boehm', 'Prof. Misael King', '45', '0', 'Rebeca Altenwerth', NULL, NULL, 43.00, 22.00, 'https://lorempixel.com/640/480/?38674', 1.00, 'Et aut nostrum alias qui pariatur voluptas. Iure nihil dolorem aut aspernatur voluptates.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(26, 4, 1, 1, NULL, 'Karlee Fritsch DDS', 'Mr. Vaughn Lehner', '41', '1', 'Doris Jacobson', NULL, NULL, 49.00, 32.00, 'https://lorempixel.com/640/480/?16538', 14.00, 'Nesciunt eum provident officia earum aut ut quo. Quos ut quis delectus ut distinctio. Dolores expedita optio aperiam odit inventore. Delectus est ut excepturi et vero voluptas enim.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(27, 6, 1, 1, NULL, 'Anya Bashirian', 'Fay Shanahan II', '37', '0', 'Mose Frami', NULL, NULL, 8.00, 30.00, 'https://lorempixel.com/640/480/?15593', 42.00, 'Vero amet maxime fugiat vero tempora fugiat iste. Quod dolorem rerum aspernatur sit ducimus aut. Adipisci ut omnis non dolore ut error voluptas quo. Consequatur quaerat vel dolorem.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(28, 10, 3, 1, NULL, 'Darien Schowalter', 'Rhoda Cremin', '27', '1', 'Leopold Hill', NULL, NULL, 48.00, 47.00, 'https://lorempixel.com/640/480/?22901', 48.00, 'Tempora rerum nobis eos quam. Distinctio ad blanditiis sint assumenda quia alias. Excepturi soluta repellat repellat molestiae.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(29, 10, 1, 1, NULL, 'Mr. Mose Hegmann', 'Arely O\'Conner', '77', '1', 'Darrick Armstrong', NULL, NULL, 40.00, 40.00, 'https://lorempixel.com/640/480/?96101', 40.00, 'Qui voluptatem quo ex nihil quod consequatur. Rerum velit fugit maxime minima ut rem. Dolorem distinctio velit maiores suscipit omnis omnis.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(30, 10, 1, 1, NULL, 'Augusta DuBuque', 'Keyshawn Yundt', '43', '1', 'Ms. Liza Wolff', NULL, NULL, 47.00, 27.00, 'https://lorempixel.com/640/480/?16963', 25.00, 'Et cupiditate sed autem molestiae modi. Iusto voluptatibus qui est atque cum. Tempora nostrum odit ut repellat. Ut vel explicabo facilis dolorem id cumque.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(31, 12, 1, 1, NULL, 'Keegan Schuster', 'Bonnie Parker', '20', '1', 'Providenci Thompson', NULL, NULL, 48.00, 42.00, 'https://lorempixel.com/640/480/?37522', 2.00, 'Eos omnis rem ullam optio voluptas perferendis. Sit molestias in et ad. Molestiae iste pariatur ea voluptatem. Sunt aperiam totam aut rerum delectus ratione sed.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(32, 6, 3, 1, NULL, 'Ms. Nedra Jacobson Sr.', 'Cecelia Sipes', '58', '1', 'Mrs. Brandi Barrows', NULL, NULL, 38.00, 12.00, 'https://lorempixel.com/640/480/?27747', 29.00, 'Dolorem et accusantium quia. Fugit ducimus aut omnis porro. Mollitia facilis et itaque quidem rerum fuga.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(33, 15, 2, 1, NULL, 'Devyn Cole', 'Miss Jaclyn Rowe I', '98', '1', 'Robb Barrows V', NULL, NULL, 46.00, 42.00, 'https://lorempixel.com/640/480/?68261', 17.00, 'Ullam quia vero quia enim et sapiente excepturi. Impedit aut minima quibusdam et. Facere cupiditate laborum qui omnis sint dolorem quam aut.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(34, 15, 1, 1, NULL, 'Prof. Christiana Lynch', 'Mariana Hodkiewicz', '89', '1', 'Patricia Balistreri', NULL, NULL, 37.00, 49.00, 'https://lorempixel.com/640/480/?60976', 12.00, 'Labore omnis nemo voluptatem et. Repellat et laborum ducimus nam et odit. Optio beatae quibusdam quam ea hic. Est ratione quia et itaque.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(35, 20, 3, 1, NULL, 'Winifred Schaden MD', 'Jany Dach', '81', '1', 'Gunner Williamson', NULL, NULL, 28.00, 24.00, 'https://lorempixel.com/640/480/?67999', 40.00, 'Quidem molestiae enim aperiam eos sed et. Voluptatum nam voluptates doloribus necessitatibus. Et enim error itaque cum porro dolor quas. Est voluptatum et ut consequuntur.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(36, 16, 1, 1, NULL, 'Lucius Wiegand', 'Miss Janiya Schultz I', '31', '0', 'Terrance Schultz', NULL, NULL, 38.00, 44.00, 'https://lorempixel.com/640/480/?20612', 46.00, 'Vero autem reprehenderit est fugit quia laborum non. Aut fugit et ratione qui vel est culpa. Est rerum laboriosam voluptas. Veritatis placeat voluptatem enim ad dolores qui.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(37, 10, 1, 1, NULL, 'Mrs. Maggie Witting', 'Dr. Camryn Herman I', '36', '1', 'Evangeline Pagac MD', NULL, NULL, 20.00, 5.00, 'https://lorempixel.com/640/480/?80602', 1.00, 'Totam tempora ratione reprehenderit asperiores. Sint quod molestiae quia ab iusto labore eaque. Id consequuntur aperiam ut animi.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(38, 10, 1, 1, NULL, 'Mr. Dawson Kessler Jr.', 'Mr. Rod Auer', '86', '0', 'Prof. Jaquan Dicki', NULL, NULL, 19.00, 47.00, 'https://lorempixel.com/640/480/?64979', 19.00, 'Praesentium omnis molestiae quam earum veritatis libero deserunt. Et fugiat aut ab et hic quia vero. Officiis nobis velit ut qui quidem. Facilis tempora dolorem consequuntur et et.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(39, 22, 2, 1, NULL, 'Zander Koss', 'Eusebio Blick', '73', '0', 'Elenora Abbott', NULL, NULL, 6.00, 35.00, 'https://lorempixel.com/640/480/?45333', 17.00, 'At accusamus doloribus tenetur id culpa et officiis. Repellat consequuntur tempore reiciendis eaque. Cupiditate quas nihil in molestiae.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(40, 22, 3, 1, NULL, 'Dr. Bettie Moen', 'Dr. Paolo Krajcik Jr.', '30', '0', 'Boris Stanton', NULL, NULL, 27.00, 26.00, 'https://lorempixel.com/640/480/?98256', 25.00, 'Quia autem eum illo magnam. Odit et at quaerat nisi vel. Eum et quo hic in velit voluptatem ex.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(41, 8, 1, 1, NULL, 'Mr. Brook Bartoletti III', 'Prof. Raheem Fadel PhD', '14', '0', 'Prof. Alfred McClure', NULL, NULL, 38.00, 21.00, 'https://lorempixel.com/640/480/?81719', 41.00, 'Eius aut et quis autem. Voluptas sed dolorum sit et assumenda dolor voluptate. Velit sapiente ad delectus soluta.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(42, 20, 3, 1, NULL, 'Cleveland Kerluke', 'Monte West', '34', '0', 'Santino Klocko', NULL, NULL, 13.00, 43.00, 'https://lorempixel.com/640/480/?16470', 9.00, 'Totam doloribus harum aut veritatis est. Sapiente optio in eum eligendi. Odit fugit quia reiciendis optio eos repellendus. Incidunt velit qui repudiandae laboriosam.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(43, 20, 2, 1, NULL, 'Prof. Earnestine Hessel DDS', 'Miss Noemi Schroeder MD', '79', '1', 'Prof. Rollin Pacocha PhD', NULL, NULL, 21.00, 25.00, 'https://lorempixel.com/640/480/?72380', 4.00, 'Assumenda iure veniam sint consequatur sint. Aliquid quod quia non voluptatem optio quia aut aut. Porro voluptatum consequatur sed.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(44, 20, 2, 1, NULL, 'Mandy Waters', 'Imogene Bogisich', '42', '1', 'Michele Wisozk', NULL, NULL, 35.00, 34.00, 'https://lorempixel.com/640/480/?97868', 8.00, 'Occaecati quaerat vel non illo quod rerum in. Aliquid maiores pariatur unde. Asperiores voluptates eum non accusamus quidem et rem.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(45, 7, 3, 1, NULL, 'Francis Toy', 'Dr. Judson Parker', '77', '1', 'Tatyana Schimmel', NULL, NULL, 42.00, 14.00, 'https://lorempixel.com/640/480/?19395', 45.00, 'Voluptatem rerum dolor odio velit molestias itaque. Qui qui nihil aut maxime est aut repudiandae. Iste et est repellendus deserunt.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(46, 4, 1, 1, NULL, 'Alisa Labadie I', 'Ms. Shania Balistreri PhD', '88', '0', 'Mabel Collier', NULL, NULL, 22.00, 2.00, 'https://lorempixel.com/640/480/?60201', 23.00, 'Et reprehenderit unde est eum placeat et. Harum rerum aperiam nihil autem eveniet exercitationem est. Porro soluta minima quaerat.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(47, 16, 1, 1, NULL, 'Michelle Kub', 'Marilyne Schoen II', '20', '0', 'Deron Kub', NULL, NULL, 38.00, 18.00, 'https://lorempixel.com/640/480/?74949', 10.00, 'Dignissimos officia distinctio repellat. Id impedit accusantium voluptatem et voluptatem ut nulla. Quasi iure blanditiis assumenda explicabo optio nulla.', '2019-11-07 21:01:48', '2019-11-07 21:01:48'),
(48, 8, 3, 1, NULL, 'Lillie McLaughlin', 'Geovany Kuvalis IV', '19', '1', 'Lucienne Bartoletti', NULL, NULL, 4.00, 30.00, 'https://lorempixel.com/640/480/?44161', 36.00, 'Dolor rerum aut corporis illo porro. Quisquam dicta quos dolores. Voluptatem molestiae nihil et quidem quod.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(49, 7, 2, 1, NULL, 'Eldora Romaguera DDS', 'Beryl Ledner', '89', '0', 'Dawn Hartmann Sr.', NULL, NULL, 12.00, 18.00, 'https://lorempixel.com/640/480/?22413', 32.00, 'Aut odit voluptatem commodi. Cupiditate ad itaque dolor ea soluta quia. Laboriosam eos est eveniet eos at laborum. Omnis ea eum quos sit delectus voluptas nihil doloremque.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(50, 6, 2, 1, NULL, 'Tyra Stokes PhD', 'Graciela Cassin', '24', '1', 'Cassie Erdman PhD', NULL, NULL, 15.00, 48.00, 'https://lorempixel.com/640/480/?87161', 12.00, 'Aut veritatis sit enim esse velit. Alias autem cupiditate laborum dolores eos expedita omnis. Harum ut modi sit impedit neque ratione eum rerum.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(51, 7, 2, 1, NULL, 'Rhett Dare', 'Bailee Brakus', '28', '0', 'Esmeralda Borer', NULL, NULL, 17.00, 50.00, 'https://lorempixel.com/640/480/?21645', 28.00, 'Quia officia neque fugiat sapiente sit. Id voluptas voluptate ut molestiae nisi illum sit et. Officia est quis alias minus alias numquam neque.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(52, 6, 2, 1, NULL, 'Dr. Christ Huel', 'Mr. Jack Jaskolski I', '55', '0', 'Dr. Marlen Hoppe', NULL, NULL, 45.00, 30.00, 'https://lorempixel.com/640/480/?63539', 33.00, 'Suscipit mollitia consequatur eius dolorem voluptates vel earum. Cum hic nemo et. Quisquam omnis in ut. Vel consequuntur et quibusdam. Et illum magni cum tempore consequatur.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(53, 15, 2, 1, NULL, 'Santina Rohan Jr.', 'Trystan Graham', '75', '0', 'Zechariah Towne', NULL, NULL, 37.00, 43.00, 'https://lorempixel.com/640/480/?45235', 7.00, 'Quidem ipsum non nulla pariatur et. Mollitia quas laudantium similique similique nam deleniti. Quae voluptas qui omnis perspiciatis dolor. Rerum consectetur et dolorum eum quasi est.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(54, 12, 3, 1, NULL, 'Audra Johnston', 'Yasmin Hoppe', '18', '1', 'Prof. Wellington Dickinson III', NULL, NULL, 11.00, 50.00, 'https://lorempixel.com/640/480/?15750', 40.00, 'Et voluptatibus maxime in optio culpa quas. Laudantium similique at provident consequatur consequatur voluptatem. Quo fugit autem veniam eligendi. Voluptatem ut et illum sit hic.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(55, 20, 3, 1, NULL, 'Alvis Kuhn', 'Sheldon Pagac', '35', '1', 'Dr. Zachariah Bernier I', NULL, NULL, 38.00, 30.00, 'https://lorempixel.com/640/480/?99866', 32.00, 'Aliquid dolor aut voluptas tempore et. Pariatur possimus voluptatibus omnis dignissimos quaerat beatae. Ut dolor ducimus quae voluptatem. Sunt aliquam in ipsa molestiae deleniti nemo velit.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(56, 10, 2, 1, NULL, 'Dandre Kertzmann', 'Chandler West', '29', '0', 'Ms. Kristin Grady PhD', NULL, NULL, 44.00, 41.00, 'https://lorempixel.com/640/480/?88366', 44.00, 'Iste id nostrum assumenda ipsum. Eum quia dolor accusantium recusandae itaque. Quasi est aperiam error modi inventore fuga officia.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(57, 20, 3, 1, NULL, 'Ambrose Lockman', 'Dr. Stan Pfannerstill', '45', '1', 'Jewell Dicki', NULL, NULL, 22.00, 13.00, 'https://lorempixel.com/640/480/?92495', 22.00, 'Nihil voluptatem voluptas qui nihil et qui dolores. Officia totam quia optio ut consectetur. Corrupti quas culpa consequuntur sint. Repellat molestiae debitis officia natus.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(58, 22, 1, 1, NULL, 'Earline Leuschke', 'Keaton Willms', '100', '0', 'Prof. Cayla Sporer', NULL, NULL, 27.00, 39.00, 'https://lorempixel.com/640/480/?41096', 39.00, 'Excepturi et in at neque magnam. Dolorum occaecati accusamus voluptatem. Necessitatibus architecto omnis quo ea earum reiciendis.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(59, 14, 3, 1, NULL, 'Conner Hermiston', 'Icie McCullough', '80', '0', 'Leanna Hirthe', NULL, NULL, 1.00, 8.00, 'https://lorempixel.com/640/480/?20860', 33.00, 'Ullam quia laboriosam qui. Quia alias iure nostrum eaque. Voluptatem nemo cumque recusandae mollitia quis sint. Ea quis sint dolor dolores voluptas modi.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(60, 15, 2, 1, NULL, 'Devyn Berge', 'Brock Breitenberg', '17', '1', 'Casey Zboncak DVM', NULL, NULL, 35.00, 21.00, 'https://lorempixel.com/640/480/?67732', 5.00, 'Non dolorem quo nostrum voluptas. Quod commodi incidunt eveniet odit. Fugiat fuga cupiditate non quam enim voluptates.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(61, 20, 3, 1, NULL, 'Tamara Zieme', 'Jaren Yundt', '80', '1', 'Hanna Wilderman', NULL, NULL, 45.00, 45.00, 'https://lorempixel.com/640/480/?96075', 15.00, 'Culpa aut eum ad cupiditate omnis nesciunt nisi porro. Dolor qui incidunt natus libero nemo. Ea cum quisquam provident laboriosam architecto. Iure dolorum et dolorum voluptatem optio tempore.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(62, 14, 2, 1, NULL, 'Sofia Jast', 'Mrs. Krystal Rodriguez', '81', '0', 'Micah Johnston', NULL, NULL, 25.00, 25.00, 'https://lorempixel.com/640/480/?40763', 39.00, 'Expedita et temporibus consequuntur. Ab vel expedita sit quia aperiam quae eveniet alias. Consequuntur corrupti repellat et et aut voluptate minus consequatur.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(63, 22, 3, 1, NULL, 'Orin Wehner', 'Vivienne Wuckert', '80', '1', 'Malvina Cremin Sr.', NULL, NULL, 38.00, 25.00, 'https://lorempixel.com/640/480/?78160', 11.00, 'Et sed incidunt unde excepturi totam nam cum. Totam ex ut ut voluptates dolorem. Facilis et voluptas quas vel fuga. Est aut consequatur in mollitia voluptas.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(64, 15, 2, 1, NULL, 'Danial Nicolas', 'Maye Parisian', '62', '1', 'Neoma Altenwerth', NULL, NULL, 10.00, 38.00, 'https://lorempixel.com/640/480/?26874', 8.00, 'Ratione ad et magni aut alias. Quasi fugit voluptatem eos sit quas et consectetur. Ut iure dolor vitae officia adipisci quam exercitationem. Laboriosam velit maxime odit adipisci numquam.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(65, 12, 3, 1, NULL, 'Mr. Jamaal Windler', 'Noe Haley', '88', '1', 'Cindy Lesch', NULL, NULL, 32.00, 48.00, 'https://lorempixel.com/640/480/?85304', 19.00, 'Sunt eum magni natus sapiente cumque excepturi perferendis. Et ut repellat harum quia quidem.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(66, 8, 2, 1, NULL, 'Lauren Kuhic', 'Arden Kerluke', '83', '1', 'Kaitlyn Mills PhD', NULL, NULL, 47.00, 29.00, 'https://lorempixel.com/640/480/?12994', 29.00, 'Nesciunt dolores id sed fugit esse cum. Nemo ullam id iure consequatur ut nulla voluptatem ut. Incidunt nobis impedit rerum. Et repellendus id mollitia qui rerum vel quas.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(67, 20, 2, 1, NULL, 'Ms. Kathryn Ward DDS', 'Mr. Braden Beatty III', '29', '1', 'Prof. Juston Berge V', NULL, NULL, 49.00, 11.00, 'https://lorempixel.com/640/480/?18500', 36.00, 'Aliquid autem dolor ab cum provident. Ut at ipsa minus fugiat laboriosam. Iusto officia ea reprehenderit ut laboriosam. Quia error libero enim illum quia id.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(68, 16, 3, 1, NULL, 'Darien Mueller I', 'Mr. Shad Heller', '63', '0', 'Danielle Hartmann', NULL, NULL, 36.00, 4.00, 'https://lorempixel.com/640/480/?75684', 1.00, 'Et qui officia labore fuga autem nesciunt odio. Suscipit ipsa aut reprehenderit rem hic iste. Quo qui voluptatum officia.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(69, 6, 3, 1, NULL, 'Stephania Halvorson', 'Michele Homenick', '88', '0', 'Jermaine Hartmann', NULL, NULL, 19.00, 17.00, 'https://lorempixel.com/640/480/?33977', 12.00, 'Assumenda quia quis doloremque est porro. Pariatur error optio consequatur molestias. Libero consequatur consequatur molestiae sed quaerat nihil quo voluptas. Ipsum atque doloribus dolores soluta.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(70, 7, 2, 1, NULL, 'Dr. Marcus Schmidt Jr.', 'Katrine Beer', '21', '1', 'Talia Spinka', NULL, NULL, 47.00, 36.00, 'https://lorempixel.com/640/480/?97640', 26.00, 'Sed dolor nulla beatae nostrum rem ipsa libero molestias. Minus tempore omnis qui et voluptatem. Repudiandae ipsam tempore voluptas culpa laborum ea.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(71, 15, 1, 1, NULL, 'Evalyn Stokes', 'Myrna Greenholt', '86', '1', 'Destany Franecki', NULL, NULL, 10.00, 14.00, 'https://lorempixel.com/640/480/?23220', 25.00, 'Nihil nemo exercitationem et repellendus dolore ea. Dolores sapiente officiis sit assumenda in cum voluptas. Aut beatae quia corporis nisi. Et quo id autem omnis.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(72, 4, 2, 1, NULL, 'Myra Deckow', 'Fritz Witting', '98', '0', 'Daniella Keeling II', NULL, NULL, 48.00, 10.00, 'https://lorempixel.com/640/480/?98369', 30.00, 'Veritatis et iusto omnis ipsa maiores temporibus. Libero molestiae voluptatem illum quod. Sit officiis omnis eum accusantium debitis odio.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(73, 4, 3, 1, NULL, 'Alfred Turcotte DVM', 'Alessandro Trantow DVM', '56', '0', 'Miss Ilene Ledner V', NULL, NULL, 44.00, 21.00, 'https://lorempixel.com/640/480/?44238', 49.00, 'Et in et voluptatem et id incidunt unde. Laboriosam qui aliquam quasi voluptatem libero debitis libero. Labore odit est consequuntur voluptas aut soluta. Sit suscipit veritatis ea facere.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(74, 12, 3, 1, NULL, 'Prof. Saul Fisher IV', 'Dr. Lela Wolff I', '32', '0', 'Prof. Yvonne Stracke III', NULL, NULL, 13.00, 37.00, 'https://lorempixel.com/640/480/?90485', 44.00, 'Et adipisci facere aut ab doloremque. Perspiciatis in veritatis accusamus ipsum hic ea in sunt. Et veniam distinctio aperiam veniam rem. Ab est et officia eos.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(75, 7, 1, 1, NULL, 'Ms. Billie Kessler', 'Dr. Owen Bruen', '70', '0', 'Margret O\'Kon', NULL, NULL, 13.00, 5.00, 'https://lorempixel.com/640/480/?89739', 9.00, 'Nam ea ut nisi. Quam nihil adipisci porro deleniti debitis repellat deleniti. Molestias quibusdam consequatur inventore numquam dicta cupiditate quos.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(76, 20, 1, 1, NULL, 'Prof. Travon Pfannerstill', 'Harley Dietrich', '29', '1', 'Hanna Lockman', NULL, NULL, 13.00, 1.00, 'https://lorempixel.com/640/480/?32631', 44.00, 'Accusamus impedit ut exercitationem debitis. Ut rerum eum mollitia dolores reprehenderit maxime eveniet. Totam vel repellat numquam repellendus.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(77, 16, 1, 1, NULL, 'Lessie Connelly', 'Lesly Raynor', '27', '0', 'Jacquelyn Schmidt IV', NULL, NULL, 9.00, 31.00, 'https://lorempixel.com/640/480/?16090', 48.00, 'Et dolor enim expedita voluptatum. Tenetur repellendus eveniet nobis asperiores qui. Est impedit cum harum occaecati labore asperiores.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(78, 22, 3, 1, NULL, 'Odie Kautzer', 'Adela Hermann', '10', '1', 'Miss Emmanuelle Kertzmann V', NULL, NULL, 34.00, 18.00, 'https://lorempixel.com/640/480/?47053', 17.00, 'Et et et repudiandae maiores. Ut vel ut non temporibus quis magni dolor. Eaque quaerat ipsa libero qui.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(79, 22, 2, 1, NULL, 'Miss Katharina Berge', 'Ova Beatty I', '49', '1', 'Brandt Walsh', NULL, NULL, 13.00, 25.00, 'https://lorempixel.com/640/480/?49033', 45.00, 'Quas dolorem laboriosam quae enim nihil facere. Eius nostrum facilis explicabo non ut quis incidunt. Aut voluptas voluptates nemo et consequuntur consequuntur.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(80, 12, 3, 1, NULL, 'Miss Suzanne Muller', 'Myrtis Gleason MD', '28', '1', 'Dr. Antonietta Anderson II', NULL, NULL, 3.00, 28.00, 'https://lorempixel.com/640/480/?61824', 10.00, 'Consectetur quos ducimus laboriosam et quisquam ullam. Officia in eius architecto et. Tenetur quia aliquam quo sit suscipit. Aut enim ab qui. Tempora dolores rerum nisi ut aliquam.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(81, 20, 2, 1, NULL, 'Haven Bayer', 'Juston Koelpin', '85', '1', 'Dr. Phoebe Bayer V', NULL, NULL, 21.00, 35.00, 'https://lorempixel.com/640/480/?25267', 21.00, 'Dolorum omnis consequatur numquam fuga. Facilis ipsam laboriosam et velit natus aut quae. Quo dolor perferendis quos.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(82, 8, 1, 1, NULL, 'Jerrell Howell', 'Prof. Gregoria Weber II', '39', '1', 'Abelardo Satterfield', NULL, NULL, 37.00, 2.00, 'https://lorempixel.com/640/480/?39558', 25.00, 'Dolore voluptas debitis non occaecati fugiat. Quae sint nesciunt quia. Amet voluptatem qui pariatur et deserunt explicabo laudantium suscipit. Non ex nemo officiis sapiente quisquam est.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(83, 8, 1, 1, NULL, 'Urban Schmitt DVM', 'Leta Connelly', '86', '1', 'Jack Daniel IV', NULL, NULL, 22.00, 27.00, 'https://lorempixel.com/640/480/?31698', 42.00, 'Voluptatem cumque dolor quaerat cum iusto pariatur iste. Consectetur cupiditate eaque dolores doloribus necessitatibus magnam. Consequuntur qui et vel aut. Molestiae assumenda qui qui quo.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(84, 12, 2, 1, NULL, 'Mikayla Cronin Jr.', 'Frances Mayer', '60', '0', 'Tremayne Gusikowski', NULL, NULL, 29.00, 22.00, 'https://lorempixel.com/640/480/?82015', 3.00, 'Incidunt ullam voluptatem in aut maxime id magni. Et numquam architecto dolor ullam. Sit ut et tenetur ab placeat velit non. Aliquam non voluptatum aliquam quidem exercitationem sunt laboriosam.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(85, 22, 3, 1, NULL, 'Dr. Nicolas Leannon DDS', 'Porter Nader', '80', '1', 'Hortense Ernser', NULL, NULL, 6.00, 36.00, 'https://lorempixel.com/640/480/?64568', 38.00, 'Ratione dolores expedita et est laudantium qui vero. Consequatur corporis quia inventore voluptatem tenetur repellendus sed. Quidem nostrum et laborum rerum velit deleniti.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(86, 21, 3, 1, NULL, 'Nat Parisian DVM', 'Prof. Bill King II', '32', '1', 'Jake Harris PhD', NULL, NULL, 31.00, 27.00, 'https://lorempixel.com/640/480/?68963', 46.00, 'At ex aliquid qui perferendis. In quae culpa quam. Quaerat quidem officiis sequi molestias. Omnis consequuntur dolores ut inventore.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(87, 16, 1, 1, NULL, 'Velma O\'Reilly', 'Josefina Nikolaus', '56', '1', 'Kelli Jacobi', NULL, NULL, 28.00, 23.00, 'https://lorempixel.com/640/480/?80295', 46.00, 'Dolorem sunt et quos. Aliquid totam odit voluptas odio distinctio autem voluptas sequi. Atque eum nisi architecto corporis est. Quasi natus quod deserunt maiores aperiam placeat eligendi.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(88, 6, 2, 1, NULL, 'Vance Lebsack', 'Sophia Collier III', '16', '1', 'Dale Brakus', NULL, NULL, 38.00, 34.00, 'https://lorempixel.com/640/480/?83008', 41.00, 'Neque hic quia et tempora ipsam quam eveniet. Dolorem omnis enim excepturi. Hic minus fuga debitis soluta sit sit aut.', '2019-11-07 21:01:49', '2019-11-07 21:01:49'),
(89, 15, 3, 1, NULL, 'Franco Kertzmann', 'Prof. Jamaal Gottlieb DVM', '16', '0', 'Dr. Trystan Rippin', NULL, NULL, 40.00, 30.00, 'https://lorempixel.com/640/480/?91892', 10.00, 'Omnis aut non ea maiores ducimus consequatur rem. Deserunt dolorem occaecati est consequatur. Et ratione quae rem eius vero. Culpa excepturi corrupti labore veniam quod.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(90, 20, 2, 1, NULL, 'Ms. Meggie Wunsch', 'Trey Grimes', '66', '0', 'Dr. Domingo Rosenbaum', NULL, NULL, 23.00, 5.00, 'https://lorempixel.com/640/480/?56293', 41.00, 'Veniam illo nobis est beatae id. Blanditiis excepturi dolore corporis reprehenderit fugiat similique fugit fugiat. Reiciendis velit iusto assumenda temporibus nulla et.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(91, 11, 1, 1, NULL, 'Zaria Mann', 'Lance Wunsch', '45', '0', 'Prof. Wilson Hermann V', NULL, NULL, 3.00, 14.00, 'https://lorempixel.com/640/480/?91905', 10.00, 'Itaque quibusdam quod harum dolorem dolorem minus repudiandae. Sunt modi fuga reprehenderit harum. Quasi vel fugiat earum temporibus enim.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(92, 15, 3, 1, NULL, 'Annamarie Halvorson', 'Roscoe Gorczany', '16', '0', 'Joanie Mayer DVM', NULL, NULL, 10.00, 31.00, 'https://lorempixel.com/640/480/?10777', 28.00, 'Tenetur nobis saepe reprehenderit labore dignissimos ea blanditiis. Molestiae molestias omnis et possimus mollitia assumenda.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(93, 4, 2, 1, NULL, 'Kyleigh Willms', 'Edna Schinner', '66', '0', 'Prof. Andreanne Ritchie I', NULL, NULL, 25.00, 37.00, 'https://lorempixel.com/640/480/?98662', 32.00, 'Dolore sed culpa rerum dolorem est. Ut voluptatem et et ea suscipit et. Aut voluptatem impedit et explicabo est ea laborum dolores.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(94, 10, 1, 1, NULL, 'Dorothy Davis', 'Robert Hagenes', '18', '0', 'Scotty Kemmer', NULL, NULL, 16.00, 27.00, 'https://lorempixel.com/640/480/?67281', 37.00, 'Ex eos illo et aliquam voluptas odit ipsam. Repellendus repellat est voluptatibus itaque nemo quia repellat. Debitis amet deserunt sed natus distinctio perferendis vitae.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(95, 20, 2, 1, NULL, 'Lora Greenfelder', 'Nelda Sauer', '69', '1', 'Troy Orn', NULL, NULL, 2.00, 24.00, 'https://lorempixel.com/640/480/?32580', 4.00, 'Ut nisi et possimus. Vel ipsa consequatur eos qui impedit. Molestiae aut voluptas molestiae impedit sed. Et numquam fugiat doloremque consequatur dignissimos fuga nesciunt.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(96, 20, 1, 1, NULL, 'Taurean Shields', 'Dr. Ricky Glover V', '55', '0', 'Bryon Muller', NULL, NULL, 12.00, 19.00, 'https://lorempixel.com/640/480/?33561', 34.00, 'Dolores consequatur minus ut facilis. Facere consectetur et reprehenderit ut illum fugiat. Qui aut sint ea.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(97, 7, 3, 1, NULL, 'Kayla Baumbach', 'Felipe Nader', '41', '1', 'Vivienne Volkman', NULL, NULL, 24.00, 28.00, 'https://lorempixel.com/640/480/?66925', 27.00, 'Qui vel quos modi odio quisquam. Nostrum et sit voluptatem ipsa aliquam autem aut fuga. Impedit qui dignissimos vel incidunt.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(98, 21, 2, 1, NULL, 'Travis Aufderhar', 'Ms. Noemie Schumm Sr.', '19', '0', 'Rossie Beatty', NULL, NULL, 18.00, 18.00, 'https://lorempixel.com/640/480/?76972', 45.00, 'Voluptatem nihil aliquam praesentium. Nihil voluptas voluptate et autem omnis. Nihil neque aut et illo dolores omnis soluta. Ut iste culpa laborum vitae.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(99, 15, 2, 1, NULL, 'Mr. Glen Funk III', 'Prof. Penelope Bradtke', '17', '1', 'Mrs. Krista Gleichner', NULL, NULL, 16.00, 6.00, 'https://lorempixel.com/640/480/?80879', 17.00, 'Porro sit reiciendis omnis asperiores est. Quia veritatis dicta in temporibus. Quidem unde incidunt et et ipsa dolorum. Ullam commodi qui accusantium in. Molestias voluptas quas id id.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(100, 11, 1, 1, NULL, 'Dr. Crawford Hudson II', 'Ellis Schneider', '67', '0', 'Tanya Ziemann Sr.', NULL, NULL, 6.00, 48.00, 'https://lorempixel.com/640/480/?37229', 35.00, 'Perspiciatis ea aut voluptate. Provident itaque rem molestiae et et consequatur non voluptatum. Nisi quo magnam ut recusandae vel laboriosam. Esse voluptatem qui sunt quam ut ab ratione aliquam.', '2019-11-07 21:01:50', '2019-11-07 21:01:50'),
(101, 4, 1, 1, NULL, 'Mr. Vidal Rice', 'Dr. Gavin Powlowski', '36', '1', 'Wiley Trantow', NULL, NULL, 28.00, 4.00, 'https://lorempixel.com/640/480/?21921', 1.00, 'Ut vero deserunt ipsum. Rem quia qui est ad omnis. Sequi fugit dolorem voluptates est ea consequatur alias.', '2019-11-07 21:01:50', '2019-11-07 21:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1572958296.jpg', '2019-11-06 02:51:36', '2019-11-06 02:51:36'),
(2, 1, '1573479836.jpg', '2019-11-12 03:43:56', '2019-11-12 03:43:56'),
(3, 1, '1573479879.jpg', '2019-11-12 03:44:39', '2019-11-12 03:44:39');

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
(31, 2, 190928, 80000.00, 0.00, NULL, '2019-10-07', '1', NULL, NULL, 1, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(32, 2, 190929, 1250.00, 0.00, NULL, '2019-10-27', '1', NULL, NULL, 1, '2019-10-27 09:43:49', '2019-10-27 09:43:49'),
(33, 1, 190930, 6000.00, 0.00, NULL, '2019-10-27', '1', NULL, NULL, 1, '2019-10-27 10:37:29', '2019-10-27 10:37:29');

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
(43, 31, 5, NULL, 1, 100.00, 200.00, 20000.00, 0.00, 1, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(44, 32, 5, NULL, 1, 25.00, 50.00, 1250.00, 0.00, 1, '2019-10-27 09:43:49', '2019-10-27 09:43:49'),
(45, 33, 6, NULL, 1, 100.00, 60.00, 6000.00, 0.00, 1, '2019-10-27 10:37:29', '2019-10-27 10:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_returns`
--

CREATE TABLE `purchase_returns` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_id` int(11) UNSIGNED NOT NULL,
  `supplier_id` int(11) UNSIGNED NOT NULL,
  `return_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date` date NOT NULL,
  `grand_total` double NOT NULL,
  `payment_type` int(2) NOT NULL,
  `bank_id` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_returns`
--

INSERT INTO `purchase_returns` (`id`, `purchase_id`, `supplier_id`, `return_no`, `return_date`, `grand_total`, `payment_type`, `bank_id`, `created_at`, `updated_at`) VALUES
(13, 13, 3, '1572139208', '2019-10-27', 20, 1, NULL, '2019-10-27 14:20:08', '2019-10-27 14:20:08'),
(14, 18, 2, '1572148623', '2019-10-27', 1000, 1, NULL, '2019-10-27 16:57:03', '2019-10-27 16:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_details`
--

CREATE TABLE `purchase_return_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `return_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_qty` int(10) NOT NULL,
  `return_qty` int(11) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `dis_per` float DEFAULT NULL,
  `total_dis` int(15) DEFAULT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_return_details`
--

INSERT INTO `purchase_return_details` (`id`, `return_id`, `product_id`, `purchase_qty`, `return_qty`, `store_id`, `price`, `dis_per`, `total_dis`, `total`, `created_at`, `updated_at`) VALUES
(4, 13, 1, 5, 2, 1, 5, 1, 0, 20, '2019-10-27 14:20:08', '2019-10-27 14:20:08'),
(5, 14, 4, 1, 20, 1, 50, NULL, 0, 1000, '2019-10-27 16:57:03', '2019-10-27 16:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `sale_returns`
--

CREATE TABLE `sale_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_return` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `return_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `payment_type` int(10) UNSIGNED NOT NULL,
  `bank_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_returns`
--

INSERT INTO `sale_returns` (`id`, `date_return`, `grand_total`, `invoice_id`, `return_no`, `customer_id`, `payment_type`, `bank_id`, `created_at`, `updated_at`) VALUES
(73, '2019-10-27', 650.00, 38, '1572138513', 1, 1, NULL, '2019-10-27 14:08:33', '2019-10-27 14:08:33'),
(74, '2019-10-27', 1083.00, 39, '1572147774', 2, 1, NULL, '2019-10-27 16:42:54', '2019-10-27 16:42:54'),
(75, '2019-10-27', 2508.00, 39, '1572147974', 2, 1, NULL, '2019-10-27 16:46:14', '2019-10-27 16:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `sale_return_details`
--

CREATE TABLE `sale_return_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `return_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `sold_qty` int(8) NOT NULL,
  `return_qty` int(8) NOT NULL,
  `price` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `dis_per` float DEFAULT NULL,
  `total_dis` float DEFAULT NULL,
  `store_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_return_details`
--

INSERT INTO `sale_return_details` (`id`, `return_id`, `product_id`, `sold_qty`, `return_qty`, `price`, `total`, `dis_per`, `total_dis`, `store_id`, `created_at`, `updated_at`) VALUES
(49, 73, 6, 20, 10, 65.00, 650.00, NULL, 0, 1, '2019-10-27 14:08:33', '2019-10-27 14:08:33'),
(50, 74, 6, 20, 2, 70.00, 1140.00, 5, 57, 1, '2019-10-27 16:42:54', '2019-10-27 16:42:54'),
(51, 75, 6, 20, 2, 70.00, 2640.00, 5, 132, 1, '2019-10-27 16:46:14', '2019-10-27 16:46:14'),
(52, 75, 4, 20, 5, 500.00, 2640.00, 5, 132, 1, '2019-10-27 16:46:15', '2019-10-27 16:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_link`, `image`, `position`, `status`, `created_at`, `updated_at`) VALUES
(2, 'http://localhost/phoenixecom/', '1572985949.jpg', '1', 1, '2019-11-06 10:32:29', '2019-11-06 10:32:29'),
(3, 'http://localhost/phoenixecom', '1572985968.jpg', '1', 1, '2019-11-06 10:32:48', '2019-11-06 10:32:48');

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
(2, 4, 280, 39, 1, NULL, '2019-09-29 11:39:51', '2019-10-27 16:57:03'),
(3, 2, 5, 128, 2, NULL, '2019-10-01 12:04:43', '2019-10-08 03:33:46'),
(4, 4, 6, NULL, 2, NULL, '2019-10-01 12:04:43', '2019-10-01 12:04:43'),
(5, 1, 96, NULL, 1, NULL, '2019-10-08 02:43:13', '2019-10-27 14:20:08'),
(6, 2, 100, NULL, 1, NULL, '2019-10-08 02:43:13', '2019-10-08 02:43:13'),
(7, 5, 85, 35, 1, NULL, '2019-10-08 02:43:13', '2019-10-27 11:51:17'),
(8, 6, 80, 61, 1, NULL, '2019-10-27 10:37:29', '2019-10-27 16:46:15');

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
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `ip`, `email`, `created_at`, `updated_at`) VALUES
(1, '::1', 'mdrubelrana112@gmail.com', '2019-11-06 06:54:14', '2019-11-06 06:54:14'),
(2, '::1', 'mdrubelrahna112@gmail.com', '2019-11-06 06:55:28', '2019-11-06 06:55:28'),
(3, '::1', 'mdrubelra2na112@gmail.com', '2019-11-06 07:01:23', '2019-11-06 07:01:23');

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
-- Table structure for table `supplier_payments`
--

CREATE TABLE `supplier_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `payment_total` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detaits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_by` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_payments`
--

INSERT INTO `supplier_payments` (`id`, `supplier_id`, `purchase_id`, `payment_total`, `date`, `type`, `detaits`, `payment_by`, `created_at`, `updated_at`) VALUES
(6, 3, 13, 20.00, '2019-10-27', 'd', NULL, NULL, '2019-10-27 14:20:08', '2019-10-27 14:20:08'),
(7, 2, 18, 1000.00, '2019-10-27', 'd', NULL, NULL, '2019-10-27 16:57:03', '2019-10-27 16:57:03');

-- --------------------------------------------------------

--
-- Stand-in structure for view `supplier_stocks`
-- (See below for the actual view)
--
CREATE TABLE `supplier_stocks` (
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
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
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
-- Indexes for table `sale_returns`
--
ALTER TABLE `sale_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_return_details`
--
ALTER TABLE `sale_return_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_payments`
--
ALTER TABLE `supplier_payments`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_payments`
--
ALTER TABLE `customer_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_purchases`
--
ALTER TABLE `product_purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_purchase_details`
--
ALTER TABLE `product_purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `purchase_returns`
--
ALTER TABLE `purchase_returns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase_return_details`
--
ALTER TABLE `purchase_return_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_returns`
--
ALTER TABLE `sale_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `sale_return_details`
--
ALTER TABLE `sale_return_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_payments`
--
ALTER TABLE `supplier_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
