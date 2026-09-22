-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2026 at 07:33 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advocatesheba`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
CREATE TABLE IF NOT EXISTS `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `training` text COLLATE utf8mb4_unicode_ci,
  `achievement` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `user_id`, `training`, `achievement`, `created_at`, `updated_at`) VALUES
(22, 9, 'E-Mail: sohel@gmail.com', NULL, '2023-05-02 17:49:33', '2023-05-02 17:49:33'),
(21, 9, 'Web: akmmch.com', NULL, '2023-05-02 17:49:33', '2023-05-02 17:49:33'),
(5, 7, 'Specialized Training in Internal  Medicine & Diabetes', NULL, '2023-04-17 18:35:44', '2023-04-17 18:35:44'),
(19, 9, 'Specialized Training in Internal  Medicine & Diabetes', NULL, '2023-05-02 17:49:33', '2023-05-02 17:49:33'),
(20, 9, 'Training on MRI', NULL, '2023-05-02 17:49:33', '2023-05-02 17:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

DROP TABLE IF EXISTS `advice`;
CREATE TABLE IF NOT EXISTS `advice` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `advice_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advice`
--

INSERT INTO `advice` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'ডাল জাতীয় খাবার পরিহার করতে হবে', 1, 1, '2024-01-15 05:05:15', '2024-01-15 05:07:00'),
(3, 'বেশি বেশি শাক-সব্জি ও ফল খাবেন', 1, NULL, '2024-01-15 05:08:13', '2024-01-15 05:08:13'),
(4, 'তৈলাক্ত ও চর্বি জাতীয় খাবার কম খাবেন', 1, NULL, '2024-02-01 02:03:29', '2024-02-01 02:03:29'),
(5, 'নিয়মিত হাঁটা-হাঁটি এবং হাল্কা ব্যায়াম করবেন', 1, NULL, '2024-02-01 02:03:43', '2024-02-01 02:03:43'),
(6, 'ধুমপান করবেন না', 1, NULL, '2024-02-01 02:03:54', '2024-02-01 02:03:54'),
(7, 'প্রচুর পানি খাবেন', 1, NULL, '2024-02-01 02:04:05', '2024-02-01 02:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `ambulances`
--

DROP TABLE IF EXISTS `ambulances`;
CREATE TABLE IF NOT EXISTS `ambulances` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor1` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ambulances`
--

INSERT INTO `ambulances` (`id`, `image`, `title`, `mobile`, `editor1`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '202308041134202304101559Untitled (300 × 200px) (6).png', 'Abmulance Service', '01928511049', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-08-04 05:34:41', '2023-08-04 05:34:41'),
(3, '20230804113520230410153415.png', 'Abmulance Service 1', '01704344126', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-08-04 05:35:11', '2023-08-04 05:35:11'),
(4, '2023080411352023041708464960554.png', 'Abmulance Service 2', '01737387905', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-08-04 05:35:26', '2023-08-04 05:35:26'),
(5, '2023080411352023040914533.png', 'Abmulance Service 3', '01317608200', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-08-04 05:35:41', '2023-08-04 05:35:41'),
(6, '2023080411362023040914532.png', 'Abmulance Service 4', '01886716142', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-08-04 05:36:08', '2023-08-04 05:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT '0',
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `mobile`, `amount`, `discount`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Doctor', NULL, 0, NULL, '1786375053.png', 1, 11, NULL, '2023-03-20 03:06:13', '2026-08-10 09:17:33'),
(2, 'Lab', NULL, 500, NULL, '1786375087.png', 1, 11, NULL, '2023-03-20 03:10:00', '2026-08-10 09:18:07'),
(3, 'Package', NULL, 0, NULL, '1786375106.png', 1, 11, NULL, '2023-03-20 03:10:17', '2026-08-10 09:18:26'),
(4, 'Ambulance', '01928511049', 0, NULL, '1786375124.png', 1, 11, NULL, '2023-03-20 03:11:59', '2026-08-10 09:18:44'),
(5, 'Medicine', NULL, 500, NULL, '1786375133.png', 1, 11, NULL, '2023-03-20 03:11:59', '2026-08-10 09:18:53'),
(6, 'Nurse', NULL, 0, NULL, '1786375140.png', 1, 11, NULL, '2023-03-20 03:11:59', '2026-08-10 09:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `chambers`
--

DROP TABLE IF EXISTS `chambers`;
CREATE TABLE IF NOT EXISTS `chambers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `chamber_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber_details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chambers`
--

INSERT INTO `chambers` (`id`, `user_id`, `chamber_name`, `chamber_details`, `created_at`, `updated_at`) VALUES
(27, 9, 'wweee', NULL, '2023-05-06 04:00:04', '2023-05-06 04:00:04'),
(26, 9, '01317608200', NULL, '2023-05-06 04:00:04', '2023-05-06 04:00:04'),
(25, 9, 'h-17', NULL, '2023-05-06 04:00:04', '2023-05-06 04:00:04'),
(24, 9, 'Akmmch', NULL, '2023-05-06 04:00:04', '2023-05-06 04:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `chief_complaints`
--

DROP TABLE IF EXISTS `chief_complaints`;
CREATE TABLE IF NOT EXISTS `chief_complaints` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chief_complaints_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chief_complaints`
--

INSERT INTO `chief_complaints` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Nasal discharge', 1, NULL, '2024-01-15 05:20:16', '2024-01-15 05:20:16'),
(3, 'Anasarca', 1, NULL, '2024-01-15 05:20:25', '2024-01-15 05:20:25'),
(4, 'Chest pain', 1, NULL, '2024-02-01 01:17:27', '2024-02-01 01:17:27'),
(5, 'Claudication', 1, NULL, '2024-02-01 01:17:46', '2024-02-01 01:17:46'),
(6, 'Dry mouth', 1, NULL, '2024-02-01 01:18:13', '2024-02-01 01:18:13'),
(7, 'Bleeding', 1, NULL, '2024-02-01 01:18:31', '2024-02-01 01:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `address`, `mobile_no`, `email`, `image`, `facebook`, `youtube`, `linkedin`, `instagram`, `twitter`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Advocate Sheba', 'Dhaka', '+880 1928 511049', 'akmmch@gmail.com', '1786421450.png', 'http://www.facebook.com/popularsoftbd', 'https://www.youtube.com/popularsoftbd', 'http://www.linkedin.com', 'http://www.instagram.com', 'http://www.twitter.com/', 1, 11, '2020-03-18 11:20:59', '2026-08-30 00:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_colors`
--

DROP TABLE IF EXISTS `dashboard_colors`;
CREATE TABLE IF NOT EXISTS `dashboard_colors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navbarbgcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navbartxtcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childnavbarbgcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `childnavbartxtcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tablebgcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabletxtcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboard_colors`
--

INSERT INTO `dashboard_colors` (`id`, `usertype`, `navbarbgcode`, `navbartxtcode`, `childnavbarbgcode`, `childnavbartxtcode`, `tablebgcode`, `tabletxtcode`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'admin', '#0283D6', '#fdf9f9', '#0283D6', '#000', '#0283D6', '#f0f2ee', 1, 1, '2019-01-08 09:49:45', '2022-04-17 04:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

DROP TABLE IF EXISTS `days`;
CREATE TABLE IF NOT EXISTS `days` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `value` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `days_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`, `status`, `value`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sat', 1, 6, 1, NULL, '2023-03-20 03:19:45', '2023-03-21 00:03:46'),
(2, 'Sun', 1, 0, 1, NULL, '2023-03-20 03:19:57', '2023-03-21 00:03:54'),
(3, 'Mon', 1, 1, 1, NULL, '2023-03-20 03:20:15', '2023-03-21 00:04:01'),
(4, 'Tue', 1, 2, 1, NULL, '2023-03-20 03:20:23', '2023-03-21 00:04:10'),
(5, 'Wed', 1, 3, 1, NULL, '2023-03-20 03:20:34', '2023-03-21 00:04:20'),
(6, 'Thu', 1, 4, 1, NULL, '2023-03-20 03:20:46', '2023-03-21 00:04:28'),
(7, 'Fri', 1, 5, 1, NULL, '2023-03-20 03:21:23', '2023-03-21 00:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departments_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `image`, `sort`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'Eye', '2023040915077.png', NULL, 1, NULL, '2022-06-11 14:45:20', '2023-04-09 19:07:18'),
(6, 'Nephrology & Medicine', '2023040915076.png', NULL, 1, NULL, '2022-06-11 14:45:43', '2023-04-10 14:15:25'),
(10, 'Dermatology | চর্ম', '202303261055skin.jpg', NULL, 1, NULL, '2022-06-11 14:47:45', '2023-04-11 18:13:01'),
(38, 'Pediatric      শিশু', '2023040915098.png', NULL, 1, NULL, '2023-03-26 04:56:36', '2023-04-09 19:11:33'),
(39, 'Paediatric Nephrology', '20230410094010.png', NULL, 1, NULL, '2023-04-10 13:40:07', '2023-04-10 13:40:07'),
(40, 'Gastroenterology & Liver', '202304100945Untitled (300 × 200px).png', NULL, 1, NULL, '2023-04-10 13:45:56', '2023-04-10 13:45:56'),
(41, 'Medicine & Cardiology', '20230410094817.png', NULL, 1, NULL, '2023-04-10 13:48:31', '2023-04-10 13:48:31'),
(42, 'Surgery', '20230410094814.png', NULL, 1, NULL, '2023-04-10 13:48:57', '2023-04-10 13:48:57'),
(43, 'Gynae & Obs', '20230410094916.png', NULL, 1, NULL, '2023-04-10 13:49:36', '2023-04-10 13:49:36'),
(44, 'Pediatric শিশু', '20230410095010.png', NULL, 1, NULL, '2023-04-10 13:50:25', '2023-04-10 13:50:25'),
(45, 'Pathology', '20230410095012.png', NULL, 1, NULL, '2023-04-10 13:50:50', '2023-04-10 13:50:50'),
(46, 'Urology', '202304101026nephrology-urology-tiny-doctors-doing-260nw-2055652754.webp', NULL, 1, NULL, '2023-04-10 13:51:31', '2023-04-10 14:26:03'),
(47, 'Respiratory & Chest', '202304101010Untitled (300 × 200px) (1).png', NULL, 1, NULL, '2023-04-10 14:10:50', '2023-04-10 14:10:50'),
(48, 'Medical Ultrasound', '202304101020Untitled (300 × 200px) (3).png', NULL, 1, NULL, '2023-04-10 14:20:39', '2023-04-10 14:20:39'),
(49, 'Neurosurgery', '202304101033Untitled (300 × 200px) (4).png', NULL, 1, NULL, '2023-04-10 14:33:41', '2023-04-10 14:33:41'),
(50, 'Medicine', '20230410152915.png', NULL, 1, NULL, '2023-04-10 14:34:50', '2023-04-10 19:29:01'),
(51, 'Orthopedics', '202304111301Untitled (300 × 200px) (7).png', NULL, 1, NULL, '2023-04-11 17:01:25', '2023-04-11 17:01:25'),
(52, 'Regenerative, Biological & Functional Medicine', '202306200620323423.png', NULL, 1, NULL, '2023-06-20 00:20:06', '2023-06-20 00:20:06'),
(53, 'Nursing', '202306200624ters.jpeg', 1, 1, NULL, '2023-06-20 00:24:13', '2023-10-28 03:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
CREATE TABLE IF NOT EXISTS `designations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `designations_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(13, 'Professor', 1, 9, 1, '2022-06-16 14:31:10', '2023-04-10 17:13:53'),
(14, 'Associate Professor', 1, 9, 1, '2022-06-16 14:32:24', '2023-04-10 17:14:53'),
(15, 'Assistant Professor', 1, 9, 1, '2022-06-16 14:33:15', '2023-04-10 17:15:40'),
(16, 'Consultant', 1, 9, 1, '2022-06-16 14:33:54', '2023-04-10 17:16:13'),
(19, 'Dr.', 1, 9, 1, '2022-06-16 14:36:48', '2023-04-17 19:05:42'),
(20, 'Medical Officer (NICU)', 1, 9, NULL, '2022-06-16 14:37:25', '2022-06-16 14:37:25'),
(21, 'Medical Officer (Radiology)', 1, 9, NULL, '2022-06-16 15:20:58', '2022-06-16 15:20:58'),
(22, 'Medical Officer (Paediatrics)', 1, 9, NULL, '2022-06-16 15:21:22', '2022-06-16 15:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `diagnoses`
--

DROP TABLE IF EXISTS `diagnoses`;
CREATE TABLE IF NOT EXISTS `diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `diagnoses_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnoses`
--

INSERT INTO `diagnoses` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'AS', 1, NULL, '2024-01-15 05:44:21', '2024-01-15 05:44:21'),
(3, 'CERVICAL PAIN', 1, NULL, '2024-01-15 05:44:33', '2024-01-15 05:44:33'),
(4, 'OA KNEE', 1, NULL, '2024-02-01 01:22:34', '2024-02-01 01:22:34'),
(5, 'FU OA', 1, NULL, '2024-02-01 01:23:03', '2024-02-01 01:23:03'),
(6, 'RA', 1, NULL, '2024-02-01 01:23:23', '2024-02-01 01:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `districts_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Narsingdi', 1, 11, '2021-02-07 02:08:59', '2026-08-10 23:11:38'),
(2, 1, 'Gazipur', 1, 1, '2021-02-07 02:12:16', '2021-02-07 02:12:24'),
(3, 1, 'Shariatpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(4, 1, 'Narayanganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(5, 1, 'Tangail', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(6, 1, 'Kishoreganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(7, 1, 'Manikganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(8, 1, 'Dhaka', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(9, 1, 'Munshiganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(10, 1, 'Rajbari', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(11, 1, 'Madaripur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(12, 1, 'Gopalganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(13, 1, 'Faridpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(14, 2, 'Sherpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(15, 2, 'Mymensingh', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(16, 2, 'Jamalpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(17, 2, 'Netrokona', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(18, 3, 'Jashore', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(19, 3, 'Satkhira', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(20, 3, 'Meherpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(21, 3, 'Narail', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(22, 3, 'Chuadanga', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(23, 3, 'Kushtia', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(24, 3, 'Magura', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(25, 3, 'Khulna', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(26, 3, 'Bagerhat', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(27, 3, 'Jhenaidah', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(28, 4, 'Sirajganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(29, 4, 'Pabna', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(30, 4, 'Bogura', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(31, 4, 'Rajshahi', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(32, 4, 'Natore', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(33, 4, 'Joypurhat', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(34, 4, 'Chapainawabganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(35, 4, 'Naogaon', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(36, 5, 'Cumilla', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(37, 5, 'Feni', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(38, 5, 'Brahmanbaria', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(39, 5, 'Rangamati', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(40, 5, 'Noakhali', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(41, 5, 'Chandpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(42, 5, 'Lakshmipur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(43, 5, 'Chattogram', 1, 1, '2023-10-24 04:39:18', '2024-06-02 15:32:40'),
(44, 5, 'Cox\'sbazar', 1, 1, '2023-10-24 04:39:18', '2024-04-27 11:47:42'),
(45, 5, 'Khagrachhari', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(46, 5, 'Bandarban', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(47, 6, 'Panchagarh', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(48, 6, 'Dinajpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(49, 6, 'Lalmonirhat', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(50, 6, 'Nilphamari', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(51, 6, 'Gaibandha', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(52, 6, 'Thakurgaon', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(53, 6, 'Rangpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(54, 6, 'Kurigram', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(55, 7, 'Sylhet', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(56, 7, 'Moulvibazar', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(57, 7, 'Habiganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(58, 7, 'Sunamganj', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(59, 8, 'Jhalakathi', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(60, 8, 'Patuakhali', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(61, 8, 'Pirojpur', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(62, 8, 'Barishal', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(63, 8, 'Bhola', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(64, 8, 'Barguna', 1, NULL, '2023-10-24 04:39:18', '2023-10-24 04:39:18'),
(65, 1, 'Dhaka City', 1, 1, '2024-05-02 16:33:43', '2024-11-20 07:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

DROP TABLE IF EXISTS `divisions`;
CREATE TABLE IF NOT EXISTS `divisions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `divisions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, 1, '2021-02-07 02:04:17', '2021-02-07 02:04:21'),
(2, 'Mymensingh', 1, NULL, '2023-10-24 04:36:28', '2023-10-24 04:36:28'),
(3, 'Khulna', 1, NULL, '2024-01-13 06:10:50', '2024-01-13 06:10:50'),
(4, 'Rajshahi', 1, NULL, '2024-01-13 06:10:50', '2024-01-13 06:10:50'),
(5, 'Chattogram', 1, 1, '2024-01-13 06:10:50', '2024-06-02 15:32:20'),
(6, 'Rangpur', 1, NULL, '2024-01-13 06:10:50', '2024-01-13 06:10:50'),
(7, 'Sylhet', 1, NULL, '2024-01-13 06:10:50', '2024-01-13 06:10:50'),
(8, 'Barisal', 1, NULL, '2024-01-13 06:10:50', '2024-01-13 06:10:50'),
(9, 'Feni', 1, NULL, '2024-03-28 15:10:54', '2024-03-28 15:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_bookings`
--

DROP TABLE IF EXISTS `doctor_bookings`;
CREATE TABLE IF NOT EXISTS `doctor_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `booking_type` varchar(51) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL COMMENT 'doctor_id=user_id',
  `time_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nagad_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nagad_transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT '0',
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_bookings`
--

INSERT INTO `doctor_bookings` (`id`, `booking_type`, `doctor_id`, `time_id`, `category_id`, `date`, `name`, `mobile`, `email`, `gender`, `fee_type`, `image`, `payment_method`, `bkash_number`, `bkash_transaction_id`, `rocket_number`, `rocket_transaction_id`, `nagad_number`, `nagad_transaction_id`, `code`, `amount`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'doctor', 9, 4, NULL, '2023-05-17', 'Md. Asadullah khan', '01928511049', 'asadullahkpi@gmail.com', 'Male', 'Follow-Up-Fee', NULL, 'Hand Cash', '', '', '', '', '', '', '3616111553', 0, NULL, 1, '2023-05-04 05:15:53', '2023-05-04 05:15:53'),
(2, 'doctor', 9, 4, NULL, '2023-05-17', 'Md. Asadullah khan', '01928511049', 'asadullahkpi@gmail.com', 'Male', 'Follow-Up-Fee', NULL, 'Hand Cash', '', '', '', '', '', '', '7256111952', 0, NULL, 1, '2023-05-04 05:19:52', '2023-05-04 05:19:52'),
(3, 'doctor', 9, 5, NULL, '2023-05-24', 'Md. Asadullah khan', '01928511049', 'asadullahkpi@gmail.com', 'Male', 'Consultation-Fee', NULL, 'bkash', '0192855555', '444444', '', '', '', '', '1893115018', 800, NULL, 2, '2023-05-04 05:50:18', '2023-05-15 08:56:03'),
(6, 'doctor', 9, 6, NULL, '2023-05-17', 'Md. Asadullah khan', '01928511049', 'asadullahkpi@gmail.com', 'Male', 'Consultation-Fee', NULL, 'Hand Cash', '', '', '', '', '', '', '185162116', 800, NULL, 0, '2023-05-15 10:21:16', '2023-05-15 10:21:16'),
(7, 'category', NULL, NULL, 2, '2023-06-28', 'Md. Asadullah khan', '01928511049', '', NULL, NULL, NULL, 'bkash', '01928511049', '0258923', '', '', '', '', '5481071255', 500, NULL, 0, '2023-06-28 01:12:55', '2023-06-28 01:12:55'),
(8, 'category', NULL, NULL, 5, '2023-11-03', 'Md. Asadullah khan', '01928511049', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8192164005', 0, NULL, 0, '2023-11-03 10:40:05', '2023-11-03 10:40:05'),
(9, 'category', NULL, NULL, 2, '2023-11-03', 'Md. Asadullah khan', '01928511049', NULL, NULL, NULL, '202311031650test froum.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '958165019', 0, NULL, 0, '2023-11-03 10:50:19', '2023-11-03 10:50:19'),
(10, 'category', NULL, NULL, 2, '2023-11-03', 'Md. Asadullah khan', '01928511049', NULL, NULL, NULL, '202311031717Ibtida Mirza.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3349171731', 0, 'test description', 0, '2023-11-03 11:17:31', '2023-11-03 11:17:31'),
(11, 'category', NULL, NULL, 2, '2023-11-03', 'Nishad', '01317608200', NULL, NULL, NULL, '202311031739test froum (1).JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5693173913', 0, 'Test', 0, '2023-11-03 11:39:13', '2023-11-03 11:39:13'),
(12, 'category', NULL, NULL, 2, '2023-11-03', 'Md. Asadullah khan', '01317608200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5398174721', 0, '3222', 0, '2023-11-03 11:47:21', '2023-11-03 11:47:21'),
(13, 'doctor', 9, 4, NULL, '2023-11-15', 'Md. Asadullah khan', '01928511049', 'asadullahkpi@gmail.com', 'Male', 'Consultation-Fee', NULL, 'Hand Cash', '', '', '', '', '', '', '7707165625', 800, NULL, 0, '2023-11-13 10:56:25', '2023-11-13 10:56:25'),
(14, 'doctor', 9, 4, NULL, '2023-11-22', 'Md. Asadullah khan', '01928511049', 'asadullahkpi@gmail.com', 'Male', 'Consultation-Fee', NULL, 'Hand Cash', '', '', '', '', '', '', '4462170434', 800, NULL, 0, '2023-11-13 11:04:34', '2023-11-13 11:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `exam_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci,
  `institute_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `exam_name`, `subject`, `qualification`, `institute_name`, `result`, `passing_year`, `created_by`, `created_at`, `updated_at`) VALUES
(6, 9, NULL, NULL, 'MSc (Ortho)', 'UK', NULL, NULL, NULL, '2023-04-16 18:36:02', '2023-04-16 18:36:02'),
(5, 9, NULL, NULL, 'MBBS', 'Dhaka', NULL, NULL, NULL, '2023-04-16 18:36:02', '2023-04-16 18:36:02'),
(9, 7, NULL, NULL, 'MBBS(DU), MD(Gastro)', 'FRCP (London), FRCP(Glasgow), FRCP(Ireland)', NULL, NULL, NULL, '2023-04-17 18:42:23', '2023-04-17 18:42:23'),
(10, 7, NULL, NULL, 'MACG(USA), FACP(USA)', 'FRCP(Edin), FISG(India)', NULL, NULL, NULL, '2023-04-17 18:42:23', '2023-04-17 18:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

DROP TABLE IF EXISTS `examinations`;
CREATE TABLE IF NOT EXISTS `examinations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `examinations_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examinations`
--

INSERT INTO `examinations` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Oxygen Level', 1, NULL, '2024-01-15 05:27:40', '2024-01-15 05:27:40'),
(3, 'Jaundice', 1, NULL, '2024-02-01 01:18:57', '2024-02-01 01:18:57'),
(4, 'Weight', 1, NULL, '2024-02-01 01:19:13', '2024-02-01 01:19:13'),
(5, 'Anaemia', 1, NULL, '2024-02-01 01:19:36', '2024-02-01 01:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `expanses`
--

DROP TABLE IF EXISTS `expanses`;
CREATE TABLE IF NOT EXISTS `expanses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `expanse_type_id` int(11) DEFAULT NULL,
  `amount` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expanse_types`
--

DROP TABLE IF EXISTS `expanse_types`;
CREATE TABLE IF NOT EXISTS `expanse_types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `expanse_types_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expanse_types`
--

INSERT INTO `expanse_types` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Electricity Bill', 1, 1, 1, '2022-03-27 09:36:19', '2022-03-27 09:36:22'),
(2, 'Employee Salary', 1, 1, NULL, '2022-03-27 09:36:56', '2022-03-27 09:36:56'),
(3, 'Computer', 1, 1, NULL, '2022-04-11 10:20:14', '2022-04-11 10:20:14'),
(4, 'Tea Bill', 1, 1, NULL, '2022-05-11 08:37:07', '2022-05-11 08:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `experience`, `created_at`, `updated_at`) VALUES
(24, 7, 'Professor & Head, Dept. of Gastroenterology', '2023-04-17 18:53:45', '2023-04-17 18:53:45'),
(25, 7, 'Shaheed Suhrawardy Medical College, Sher-E-Bangla Nagar, Dhaka - 1207', '2023-04-17 18:53:45', '2023-04-17 18:53:45'),
(14, 9, 'Consultant, Holy Family Red Crescent Medical College & Hospital', '2023-04-16 18:34:39', '2023-04-16 18:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investigation_advice`
--

DROP TABLE IF EXISTS `investigation_advice`;
CREATE TABLE IF NOT EXISTS `investigation_advice` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `investigation_advice_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investigation_advice`
--

INSERT INTO `investigation_advice` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Blood Sugar (R)', 1, NULL, '2024-01-15 05:53:11', '2024-01-15 05:53:11'),
(3, '2 hrs. after 75gm Glucose', 1, NULL, '2024-02-01 01:30:59', '2024-02-01 01:30:59'),
(4, '24 hrs Urinary Calcium', 1, NULL, '2024-02-01 01:31:18', '2024-02-01 01:31:18'),
(5, 'ABG', 1, NULL, '2024-02-01 01:31:37', '2024-02-01 01:31:37'),
(6, 'ADA', 1, NULL, '2024-02-01 01:31:51', '2024-02-01 01:31:51'),
(7, 'ADMISSION FEE', 1, NULL, '2024-02-01 01:32:09', '2024-02-01 01:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `image2`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '1788071228.png', '1788019790.jpg', 1, 11, '2020-05-08 01:00:18', '2026-08-30 00:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_categories`
--

DROP TABLE IF EXISTS `medicine_categories`;
CREATE TABLE IF NOT EXISTS `medicine_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `medicine_categories_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_categories`
--

INSERT INTO `medicine_categories` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Injection', 1, 1, '2024-01-15 07:04:06', '2024-01-15 07:04:20'),
(2, 'Syrup', 1, NULL, '2024-01-15 07:25:29', '2024-01-15 07:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent`, `route`, `sort`, `add`, `edit`, `delete`, `status`, `icon`, `created_at`, `updated_at`) VALUES
(4, 'Manage User', 0, 'user', 1, NULL, NULL, NULL, 1, 'fa fa-user', '2018-06-08 22:29:53', '2020-08-07 15:41:49'),
(6, 'Role List', 4, 'user.role', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(7, 'Menu Permission', 4, 'user.permission', 6, NULL, NULL, NULL, 1, NULL, '2018-06-05 00:59:51', '2020-08-07 15:41:49'),
(26, 'Color', 115, 'setup.color.view', 3, NULL, NULL, NULL, 0, NULL, NULL, '2020-08-07 15:41:50'),
(27, 'User List', 4, 'user', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(28, 'Manage Profile', 0, 'profiles', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(29, 'Your Profile', 28, 'profiles.view', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(30, 'Password Change', 28, 'profiles.passowrd.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(31, 'Manage Setups', 0, 'setups', 3, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(33, 'Designation List', 31, 'human-resource.hrm.designation.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(35, 'Department List', 31, 'human-resource.hrm.department.view', 4, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(36, 'Manage Doctors', 0, 'doctors', 4, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(37, 'Doctor Add', 36, 'payroll.employee.view.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(38, 'Doctor List', 36, 'payroll.employee.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(39, 'Doctor Report', 36, 'payroll.employee.report', 3, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(41, 'Time List', 31, 'human-resource.hrm.time.view', 6, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(42, 'Category List', 31, 'human-resource.hrm.category.view', 7, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(43, 'Day List', 31, 'human-resource.hrm.day.view', 8, NULL, NULL, NULL, 0, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(44, 'Payment Number', 31, 'human-resource.hrm.number.view', 9, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(45, 'Slider List', 100, 'human-resource.hrm.slider.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(46, 'User Profile', 0, 'doctor-profile', 5, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(47, 'Social Media', 46, 'doctor-profile.social.view', 3, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(48, 'Photo Gallery', 46, 'doctor-profile.photo.view', 4, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(49, 'Video Gallery', 46, 'doctor-profile.video.view', 5, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(50, 'News & Events', 46, 'doctor-profile.news.view', 6, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(51, 'Your Profile', 46, 'doctor-profile.view.details', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(52, 'Doctor Booking', 36, 'payroll.booking.view', 4, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(53, 'Booking Report', 36, 'payroll.booking.report', 5, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(54, 'Booking List', 46, 'doctor-profile.booking.view', 7, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(55, 'Booking Report', 46, 'doctor-profile.booking.report', 8, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(56, 'Logo', 102, 'site-setting.contents.logo.view', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(57, 'Contact Us', 102, 'site-setting.contents.contact.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(58, 'SMS', 31, 'human-resource.hrm.sms.view', 13, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(59, 'Package List', 31, 'human-resource.hrm.package.view', 14, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(60, 'Ambulance List', 31, 'human-resource.hrm.ambulance.view', 15, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(61, 'Promotion List', 31, 'human-resource.hrm.promotion.view', 16, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(62, 'About US', 98, 'human-resource.hrm.about.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(63, 'E-prescription', 0, 'e-prescription', 7, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(64, 'Chief Complients', 63, 'chief', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(65, 'Add Chief Complients', 64, 'e-prescription.chief.complient.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(66, 'Chief Complients List', 64, 'e-prescription.chief.complient.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(67, 'Examination', 63, 'examination', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(68, 'Add Examination', 67, 'e-prescription.examination.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(69, 'Examination List', 67, 'e-prescription.examination.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(70, 'Diagnosis', 63, 'diagnosis', 3, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(71, 'Add Diagnosis', 70, 'e-prescription.diagnosis.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(72, 'Diagnosis List', 70, 'e-prescription.diagnosis.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(73, 'Investigation Advice', 63, 'investigation', 4, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(74, 'Add Investigation', 73, 'e-prescription.investigation.advice.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(75, 'Investigation List', 73, 'e-prescription.investigation.advice.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(76, 'Advice', 63, 'advice', 5, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(77, 'Add Advice', 76, 'e-prescription.advice.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(78, 'Advice List', 76, 'e-prescription.advice.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(79, 'Medicine', 63, 'medicine', 6, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(80, 'Add Category', 79, 'e-prescription.medicine.category.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(81, 'Category List', 79, 'e-prescription.medicine.category.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(82, 'Add Medicine Name', 79, 'e-prescription.product.add', 3, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(83, 'Medicine Name List', 79, 'e-prescription.product.view', 4, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(84, 'Manage Prescription', 63, 'prescription', 7, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(85, 'Create Prescription', 84, 'e-prescription.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(86, 'Prescription List', 84, 'e-prescription.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(87, 'Address', 0, 'address', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(88, 'Division', 87, 'Division', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(89, 'Add Division', 88, 'setup.division.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(90, 'Division List', 88, 'setup.division.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(91, 'District', 87, 'District', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(92, 'Add District', 91, 'setup.district.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(93, 'District List', 91, 'setup.district.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(94, 'Upazila', 87, 'Upazila', 3, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(95, 'Add Upazila', 94, 'setup.upazila.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(96, 'Upazila List', 94, 'setup.upazila.view', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(97, 'Website Settings', 0, 'Website Settings', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(98, 'About Us', 97, 'About Us', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(99, 'Add About', 98, 'human-resource.hrm.about.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(100, 'Slider', 97, 'Slider', 2, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(101, 'Add Slider', 100, 'human-resource.hrm.slider.add', 1, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49'),
(102, 'Contact Us', 97, 'Contact Us', 3, NULL, NULL, NULL, 1, NULL, '2018-06-08 22:57:27', '2020-08-07 15:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `menu_permissions`
--

DROP TABLE IF EXISTS `menu_permissions`;
CREATE TABLE IF NOT EXISTS `menu_permissions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permitted_route` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1201 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_permissions`
--

INSERT INTO `menu_permissions` (`id`, `menu_id`, `role_id`, `permitted_route`, `created_at`, `updated_at`) VALUES
(670, 30, 2, 'profiles.passowrd.view', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(671, 28, 2, 'profiles', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(672, 51, 2, 'doctor-profile.view.details', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(673, 46, 2, 'doctor-profile', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(674, 47, 2, 'doctor-profile.social.view', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(675, 48, 2, 'doctor-profile.photo.view', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(676, 49, 2, 'doctor-profile.video.view', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(677, 50, 2, 'doctor-profile.news.view', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(678, 54, 2, 'doctor-profile.booking.view', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(679, 55, 2, 'doctor-profile.booking.report', '2023-05-06 03:20:17', '2023-05-06 03:20:17'),
(835, 30, 4, 'profiles.passowrd.view', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(836, 28, 4, 'profiles', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(837, 51, 4, 'doctor-profile.view.details', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(838, 46, 4, 'doctor-profile', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(839, 47, 4, 'doctor-profile.social.view', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(840, 48, 4, 'doctor-profile.photo.view', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(841, 49, 4, 'doctor-profile.video.view', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(842, 50, 4, 'doctor-profile.news.view', '2023-08-01 06:18:43', '2023-08-01 06:18:43'),
(1036, 6, 3, 'user.role', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1037, 4, 3, 'user', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1038, 27, 3, 'user', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1039, 7, 3, 'user.permission', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1040, 29, 3, 'profiles.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1041, 28, 3, 'profiles', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1042, 30, 3, 'profiles.passowrd.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1043, 89, 3, 'setup.division.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1044, 88, 3, 'Division', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1045, 87, 3, 'address', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1046, 90, 3, 'setup.division.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1047, 92, 3, 'setup.district.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1048, 91, 3, 'District', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1049, 93, 3, 'setup.district.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1050, 95, 3, 'setup.upazila.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1051, 94, 3, 'Upazila', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1052, 96, 3, 'setup.upazila.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1053, 33, 3, 'human-resource.hrm.designation.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1054, 31, 3, 'setups', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1055, 35, 3, 'human-resource.hrm.department.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1056, 41, 3, 'human-resource.hrm.time.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1057, 42, 3, 'human-resource.hrm.category.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1058, 44, 3, 'human-resource.hrm.number.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1059, 45, 3, 'human-resource.hrm.slider.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1060, 56, 3, 'site-setting.contents.logo.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1061, 57, 3, 'site-setting.contents.contact.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1062, 58, 3, 'human-resource.hrm.sms.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1063, 37, 3, 'payroll.employee.view.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1064, 36, 3, 'doctors', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1065, 38, 3, 'payroll.employee.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1066, 39, 3, 'payroll.employee.report', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1067, 52, 3, 'payroll.booking.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1068, 53, 3, 'payroll.booking.report', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1069, 51, 3, 'doctor-profile.view.details', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1070, 46, 3, 'doctor-profile', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1071, 47, 3, 'doctor-profile.social.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1072, 48, 3, 'doctor-profile.photo.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1073, 49, 3, 'doctor-profile.video.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1074, 50, 3, 'doctor-profile.news.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1075, 54, 3, 'doctor-profile.booking.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1076, 55, 3, 'doctor-profile.booking.report', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1077, 59, 3, 'human-resource.hrm.package.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1078, 60, 3, 'human-resource.hrm.ambulance.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1079, 61, 3, 'human-resource.hrm.promotion.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1080, 62, 3, 'human-resource.hrm.about.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1081, 63, 3, 'e-prescription', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1082, 65, 3, 'e-prescription.chief.complient.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1083, 64, 3, 'chief', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1084, 66, 3, 'e-prescription.chief.complient.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1085, 68, 3, 'e-prescription.examination.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1086, 67, 3, 'examination', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1087, 69, 3, 'e-prescription.examination.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1088, 71, 3, 'e-prescription.diagnosis.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1089, 70, 3, 'diagnosis', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1090, 72, 3, 'e-prescription.diagnosis.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1091, 74, 3, 'e-prescription.investigation.advice.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1092, 73, 3, 'investigation', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1093, 75, 3, 'e-prescription.investigation.advice.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1094, 77, 3, 'e-prescription.advice.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1095, 76, 3, 'advice', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1096, 78, 3, 'e-prescription.advice.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1097, 80, 3, 'e-prescription.medicine.category.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1098, 79, 3, 'medicine', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1099, 81, 3, 'e-prescription.medicine.category.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1100, 82, 3, 'e-prescription.product.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1101, 83, 3, 'e-prescription.product.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1102, 85, 3, 'e-prescription.add', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1103, 84, 3, 'prescription', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1104, 86, 3, 'e-prescription.view', '2026-08-10 22:55:08', '2026-08-10 22:55:08'),
(1126, 6, 1, 'user.role', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1127, 4, 1, 'user', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1128, 27, 1, 'user', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1129, 7, 1, 'user.permission', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1130, 29, 1, 'profiles.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1131, 28, 1, 'profiles', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1132, 30, 1, 'profiles.passowrd.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1133, 89, 1, 'setup.division.add', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1134, 88, 1, 'Division', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1135, 87, 1, 'address', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1136, 90, 1, 'setup.division.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1137, 92, 1, 'setup.district.add', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1138, 91, 1, 'District', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1139, 93, 1, 'setup.district.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1140, 95, 1, 'setup.upazila.add', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1141, 94, 1, 'Upazila', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1142, 96, 1, 'setup.upazila.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1143, 99, 1, 'human-resource.hrm.about.add', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1144, 98, 1, 'About Us', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1145, 97, 1, 'Website Settings', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1146, 62, 1, 'human-resource.hrm.about.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1147, 101, 1, 'human-resource.hrm.slider.add', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1148, 100, 1, 'Slider', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1149, 45, 1, 'human-resource.hrm.slider.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1150, 56, 1, 'site-setting.contents.logo.view', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1151, 102, 1, 'Contact Us', '2026-08-11 00:55:05', '2026-08-11 00:55:05'),
(1152, 57, 1, 'site-setting.contents.contact.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1153, 33, 1, 'human-resource.hrm.designation.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1154, 31, 1, 'setups', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1155, 35, 1, 'human-resource.hrm.department.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1156, 41, 1, 'human-resource.hrm.time.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1157, 42, 1, 'human-resource.hrm.category.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1158, 44, 1, 'human-resource.hrm.number.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1159, 58, 1, 'human-resource.hrm.sms.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1160, 59, 1, 'human-resource.hrm.package.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1161, 60, 1, 'human-resource.hrm.ambulance.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1162, 61, 1, 'human-resource.hrm.promotion.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1163, 37, 1, 'payroll.employee.view.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1164, 36, 1, 'doctors', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1165, 38, 1, 'payroll.employee.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1166, 39, 1, 'payroll.employee.report', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1167, 52, 1, 'payroll.booking.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1168, 53, 1, 'payroll.booking.report', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1169, 51, 1, 'doctor-profile.view.details', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1170, 46, 1, 'doctor-profile', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1171, 47, 1, 'doctor-profile.social.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1172, 48, 1, 'doctor-profile.photo.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1173, 49, 1, 'doctor-profile.video.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1174, 50, 1, 'doctor-profile.news.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1175, 54, 1, 'doctor-profile.booking.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1176, 55, 1, 'doctor-profile.booking.report', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1177, 65, 1, 'e-prescription.chief.complient.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1178, 64, 1, 'chief', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1179, 63, 1, 'e-prescription', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1180, 66, 1, 'e-prescription.chief.complient.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1181, 68, 1, 'e-prescription.examination.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1182, 67, 1, 'examination', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1183, 69, 1, 'e-prescription.examination.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1184, 71, 1, 'e-prescription.diagnosis.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1185, 70, 1, 'diagnosis', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1186, 72, 1, 'e-prescription.diagnosis.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1187, 74, 1, 'e-prescription.investigation.advice.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1188, 73, 1, 'investigation', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1189, 75, 1, 'e-prescription.investigation.advice.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1190, 77, 1, 'e-prescription.advice.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1191, 76, 1, 'advice', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1192, 78, 1, 'e-prescription.advice.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1193, 80, 1, 'e-prescription.medicine.category.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1194, 79, 1, 'medicine', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1195, 81, 1, 'e-prescription.medicine.category.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1196, 82, 1, 'e-prescription.product.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1197, 83, 1, 'e-prescription.product.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1198, 85, 1, 'e-prescription.add', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1199, 84, 1, 'prescription', '2026-08-11 00:55:06', '2026-08-11 00:55:06'),
(1200, 86, 1, 'e-prescription.view', '2026-08-11 00:55:06', '2026-08-11 00:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_03_13_111441_create_logos_table', 3),
(14, '2020_03_18_164701_create_contacts_table', 9),
(19, '2020_05_08_111429_create_colors_table', 14),
(36, '2019_10_28_120538_create_divisions_table', 20),
(37, '2019_10_28_120626_create_districts_table', 20),
(38, '2019_10_28_120652_create_upazilas_table', 20),
(39, '2019_10_28_120730_create_unions_table', 20),
(40, '2014_10_12_000000_create_users_table', 21),
(41, '2020_07_23_143137_create_menus_table', 22),
(42, '2020_07_23_143203_create_menu_permissions_table', 22),
(43, '2020_07_23_143223_create_roles_table', 22),
(51, '2020_07_13_094043_create_designations_table', 27),
(59, '2021_01_27_180913_create_departments_table', 27),
(60, '2021_01_28_195646_create_education_table', 27),
(61, '2020_10_08_201620_create_religions_table', 28),
(64, '2019_12_10_173702_create_expanses_table', 30),
(65, '2021_03_12_124421_create_expanse_types_table', 30),
(84, '2022_01_22_092004_create_relations_table', 33),
(109, '2022_05_29_172735_create_account_types_table', 47),
(110, '2018_12_18_061006_create_user_logs_table', 48),
(111, '2022_07_01_060835_create_employee_attachments_table', 49),
(112, '2023_03_16_110642_create_times_table', 50),
(113, '2023_03_16_114749_create_time_assigns_table', 51),
(114, '2023_03_20_084619_create_categories_table', 52),
(115, '2023_03_20_085008_create_days_table', 52),
(116, '2023_04_13_073100_create_payment_numbers_table', 53),
(117, '2023_04_16_061617_create_experiences_table', 54),
(118, '2023_04_16_062040_create_achievements_table', 54),
(119, '2023_04_16_101419_create_specialities_table', 56),
(120, '2023_04_16_143642_create_profile_times_table', 57),
(121, '2023_04_29_094709_create_work_places_table', 58),
(122, '2023_04_29_094921_create_chambers_table', 58),
(124, '2023_04_16_071450_create_sliders_table', 59),
(125, '2023_04_16_071516_create_social_media_table', 60),
(126, '2023_04_16_071548_create_video_galleries_table', 61),
(127, '2023_04_16_071611_create_photo_galleries_table', 62),
(128, '2023_04_16_071637_create_news_events_table', 63),
(129, '2023_05_04_061231_create_doctor_bookings_table', 63),
(130, '2023_02_06_043017_create_sms_messages_table', 64),
(131, '2023_06_24_105758_create_packages_table', 65),
(132, '2023_08_04_105818_create_ambulances_table', 66),
(133, '2023_11_09_100911_create_promotions_table', 67),
(134, '2023_11_09_101217_create_supports_table', 67),
(135, '2024_01_15_092832_create_chief_complaints_table', 68),
(136, '2024_01_15_094604_create_examinations_table', 68),
(137, '2024_01_15_094623_create_diagnoses_table', 68),
(138, '2024_01_15_094645_create_investigation_advice_table', 68),
(139, '2024_01_15_094735_create_medicine_categories_table', 68),
(140, '2024_01_15_094826_create_products_table', 68),
(141, '2024_01_15_094847_create_advice_table', 68);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

DROP TABLE IF EXISTS `news_events`;
CREATE TABLE IF NOT EXISTS `news_events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `editor1` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `user_id`, `image`, `title`, `date`, `editor1`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 9, '202304211047ewr32ewe.jpeg', '21 February', '2023-04-11', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.&nbsp;</p>\r\n\r\n<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 9, NULL, '2023-04-21 14:47:55', '2023-04-21 14:47:55'),
(2, 9, '202304211048ewrrree.jpeg', '26 March', '2023-04-11', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.&nbsp;</p>\r\n\r\n<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 9, NULL, '2023-04-21 14:48:24', '2023-04-21 14:48:24'),
(3, 9, '202304211048ewrre.jpeg', '1 April', '2023-04-11', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.&nbsp;</p>\r\n\r\n<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 9, NULL, '2023-04-21 14:48:40', '2023-04-21 14:48:40'),
(4, 9, '202304211049ewre3we.jpeg', 'আনোয়ার খান মডার্ণ ডায়াগনস্টিক সেন্টার এন্ড হসপিটাল আউটডোর সার্ভিসের উদ্বোধন', '2023-04-11', '<p>আনোয়ার খান মডার্ণ ডায়াগনস্টিক সেন্টার এন্ড হসপিটাল আউটডোর সার্ভিসের উদ্বোধন আনোয়ার খান মডার্ণ ডায়াগনস্টিক সেন্টার এন্ড হসপিটাল আউটডোর সার্ভিসের উদ্বোধন করা হয়েছে।</p>\r\n\r\n<p>শুক্রবার বিকেল সোয়া চারটার দিকে ফিতা কেটে এর উদ্বোধন করেন চেয়ারম্যান ও ব্যবস্থাপনা পরিচালক ড. আনোয়ার হোসেন খান এমপি। প্রথমে পবিত্র কোরআন থেকে তেলাওয়াতের মাধ্যমে অনুষ্ঠানের শুরু হয়। এ উপলক্ষ্যে দোয়া মাহফিলের আয়োজন করা হয়।</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li><strong><a href=\"https://www.bd-journal.com/other/232224/%E2%80%8B%E0%A6%95%E0%A6%B0%E0%A7%8B%E0%A6%A8%E0%A6%BE%E0%A6%B0-%E0%A6%9A%E0%A6%BF%E0%A6%95%E0%A6%BF%E0%A7%8E%E0%A6%B8%E0%A6%BE%E0%A7%9F-%E0%A6%85%E0%A6%AC%E0%A6%A6%E0%A6%BE%E0%A6%A8%E0%A7%87%E0%A6%B0-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A7%80%E0%A6%95%E0%A7%83%E0%A6%A4%E0%A6%BF-%E0%A6%B8%E0%A6%A8%E0%A6%A6-%E0%A6%AA%E0%A7%87%E0%A6%B2-%E0%A6%86%E0%A6%A8%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0-%E0%A6%96%E0%A6%BE%E0%A6%A8-%E0%A6%AE%E0%A6%A1%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AE%E0%A7%87%E0%A6%A1%E0%A6%BF%E0%A6%95%E0%A7%87%E0%A6%B2-%E0%A6%95%E0%A6%B2%E0%A7%87%E0%A6%9C-%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE%E0%A6%B2\">উদ্বোধন অনুষ্ঠানে স্বাগত বক্তব্য রাখেন ড. আনোয়ার হোসেন খান এমপি। এসময় গণ্যমান্য ব্যক্তিরা উপস্থিত ছিলেন।</a></strong></li>\r\n</ul>', 9, 9, '2023-04-21 14:49:08', '2023-04-24 16:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor1` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `image`, `title`, `mobile`, `editor1`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2023062507552023040914533.png', 'Abmulance Service', '01980273461', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, 1, '2023-06-25 01:53:09', '2023-06-25 01:55:58'),
(2, '2023062508022023040914521.png', 'dummy test', '01704344126', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-06-25 02:02:41', '2023-06-25 02:02:41'),
(3, '2023062508022023041708464960554.png', 'dummy test 2', '01704344126', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-06-25 02:02:54', '2023-06-25 02:02:54'),
(4, '2023062508032023040914532.png', 'dummy test 3', '01704344126', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-06-25 02:03:05', '2023-06-25 02:03:05'),
(5, '20230625080320230410153415.png', 'dummy test 4', '01704344126', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 1, NULL, '2023-06-25 02:03:14', '2023-06-25 02:03:14'),
(6, '202308011211ramadan-kareem-golden-mosque-with-transparent-background-free-png.jpg', 'test', '01928511049', '<p>test</p>', 1, NULL, '2023-08-01 06:11:10', '2023-08-01 06:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_numbers`
--

DROP TABLE IF EXISTS `payment_numbers`;
CREATE TABLE IF NOT EXISTS `payment_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bkash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nagad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rocket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_numbers`
--

INSERT INTO `payment_numbers` (`id`, `bkash`, `nagad`, `rocket`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bkash Number : 01928511049', 'Nagad Number : 01928511049', 'Rocket Number : 01928511049', 1, 1, NULL, '2023-04-13 01:58:21', '2023-04-16 18:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

DROP TABLE IF EXISTS `photo_galleries`;
CREATE TABLE IF NOT EXISTS `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `user_id`, `image`, `title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 9, '202304211043ewr323.jpeg', NULL, 9, NULL, '2023-04-21 14:43:17', '2023-04-21 14:43:17'),
(2, 9, '202304211043ewrrree.jpeg', NULL, 9, NULL, '2023-04-21 14:43:29', '2023-04-21 14:43:29'),
(3, 9, '202304211043ewrre.jpeg', NULL, 9, NULL, '2023-04-21 14:43:40', '2023-04-21 14:43:40'),
(4, 9, '202304211043ewrewe.jpeg', NULL, 9, NULL, '2023-04-21 14:43:57', '2023-04-21 14:43:57'),
(5, 9, '202304211044ewre3we.jpeg', NULL, 9, NULL, '2023-04-21 14:44:12', '2023-04-21 14:44:12'),
(6, 9, '202304211044rewer.jpeg', NULL, 9, NULL, '2023-04-21 14:44:26', '2023-04-21 14:44:26'),
(7, 9, '202304231041WhatsApp Image 2023-04-23 at 16.12.18.jpg', NULL, 9, 9, '2023-04-21 14:44:47', '2023-04-23 14:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `medicine_category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `medicine_category_id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, 'Ace Injection 500 ml', 1, NULL, '2024-01-15 07:30:45', '2024-01-15 07:30:45'),
(3, 2, 'Nafa Injection 500 ml', 1, NULL, '2024-02-01 02:51:49', '2024-02-01 02:51:49'),
(4, 2, 'Ace Syrap', 1, NULL, '2024-02-01 02:52:08', '2024-02-01 02:52:08'),
(5, 2, 'Tushka Syrup', 1, NULL, '2024-02-01 02:52:25', '2024-02-01 02:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `profile_times`
--

DROP TABLE IF EXISTS `profile_times`;
CREATE TABLE IF NOT EXISTS `profile_times` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `time` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_times`
--

INSERT INTO `profile_times` (`id`, `user_id`, `time`, `created_at`, `updated_at`) VALUES
(15, 9, 'শনি, রবি এবং বুধ', '2023-05-02 17:51:26', '2023-05-02 17:51:26'),
(14, 9, 'Time : 7.30 pm - 10.00 pm', '2023-05-02 17:51:26', '2023-05-02 17:51:26'),
(13, 9, 'Day : SAT, SUN & WED', '2023-05-02 17:51:26', '2023-05-02 17:51:26'),
(16, 9, '565656', '2023-05-02 17:51:26', '2023-05-02 17:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `title`, `image`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'test', '2023110910321c42497e-2acb-44a9-b897-2a6f4c7d0d78.jpeg', NULL, 1, 1, NULL, '2023-11-09 04:32:11', '2023-11-09 04:32:11'),
(3, 'test 2', '20231111162932323.jpeg', NULL, 1, 1, NULL, '2023-11-11 10:29:56', '2023-11-11 10:29:56'),
(4, 'test 3', '202311111630BAF SEMC LOGO..png', NULL, 1, 1, NULL, '2023-11-11 10:30:10', '2023-11-11 10:30:10'),
(5, 'test 4', '202311111631ttyt.jpeg', 1, 1, 1, 1, '2023-11-11 10:31:18', '2023-11-18 23:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

DROP TABLE IF EXISTS `relations`;
CREATE TABLE IF NOT EXISTS `relations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `relations_name_unique` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

DROP TABLE IF EXISTS `religions`;
CREATE TABLE IF NOT EXISTS `religions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `religions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Islam', 1, NULL, NULL, NULL, NULL),
(2, 'Hindu', 1, NULL, NULL, NULL, NULL),
(3, 'Christian', 1, NULL, NULL, NULL, NULL),
(4, 'Buddhist', 1, NULL, NULL, NULL, NULL),
(5, 'Atheist', 1, NULL, NULL, NULL, NULL),
(6, '', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `mail_status` tinyint(4) DEFAULT '1' COMMENT '0=off , 1= on',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `mail_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Super admin will get full access to all menus of this system', 1, NULL, '2018-06-11 05:59:30', '2019-01-09 18:05:13'),
(2, 'Doctor', 'Super admin will get full access to nearly all menus of this system', 1, NULL, '2018-06-11 05:59:37', '2019-01-09 18:06:06'),
(3, 'Developer', NULL, 0, NULL, '2018-12-12 13:34:07', '2022-06-19 08:32:40'),
(4, 'Nursing', NULL, 1, NULL, '2022-05-11 07:55:29', '2023-06-20 00:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `link`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1786355507.png', NULL, NULL, 1, 11, '2023-04-16 04:53:04', '2026-08-10 03:51:48'),
(3, '1786355476.png', NULL, NULL, 11, NULL, '2026-08-10 03:51:18', '2026-08-10 03:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `sms_messages`
--

DROP TABLE IF EXISTS `sms_messages`;
CREATE TABLE IF NOT EXISTS `sms_messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `booking_msg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_msg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_approve_msg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_messages`
--

INSERT INTO `sms_messages` (`id`, `booking_msg`, `signup_msg`, `doctor_approve_msg`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Congratulations! Your booking is successfully completed. Best Regards: AKMMCH', 'Congratulations! Your registration is successfully completed. Best Regards: AKMMCH', 'Congratulations! Your are approved. Now you can log in our system. Best Regards: AKMMCH', NULL, 1, NULL, '2023-05-19 05:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(41) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `user_id`, `image`, `icon`, `name`, `link`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 9, '202304211039popular.png', 'youtube', 'yt/popularsoftbd', 'https://www.youtube.com/popularsoftbd', 9, 9, '2023-04-21 14:39:32', '2023-04-23 14:18:54'),
(3, 9, '202304211040galib.jpg', 'linkedin', 'li/asadullahgalibbd', 'https://www.linkedin.com/in/asadullahgalibbd/', 9, 9, '2023-04-21 14:40:21', '2023-04-23 14:24:20'),
(4, 5, '202304211042profil3e.jpg', 'instagram', 'ig/asadullahgalibBd', 'https://www.instagram.com/asadullahgalibbd/', 9, 1, '2023-04-21 14:42:10', '2023-10-06 11:09:28'),
(6, 9, '202310061638Facebook-Feature.jpg', 'facebook', 'Md. Asadullah khan', 'https://www.facebook.com/AsadullahGalibBd', 9, NULL, '2023-10-06 10:38:05', '2023-10-06 10:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

DROP TABLE IF EXISTS `specialities`;
CREATE TABLE IF NOT EXISTS `specialities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `speciality` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `user_id`, `speciality`, `created_at`, `updated_at`) VALUES
(1, 8, 'Diploma', '2023-04-16 04:35:55', '2023-04-16 04:35:55'),
(2, 8, 'BSC', '2023-04-16 04:35:55', '2023-04-16 04:35:55'),
(3, 8, 'MSC', '2023-04-16 04:35:55', '2023-04-16 04:35:55'),
(9, 9, 'Orthopedic Trauma & Spine Surgeon', '2023-04-19 19:04:34', '2023-04-19 19:04:34'),
(8, 7, 'Specialist in Gastrointestinal Hepatobiliary & Pancreatic Diseases', '2023-04-17 18:36:51', '2023-04-17 18:36:51'),
(10, 9, 'অর্থোপেডিক ট্রমা এবং মেরুদণ্ডের সার্জন', '2023-04-19 19:04:34', '2023-04-19 19:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

DROP TABLE IF EXISTS `supports`;
CREATE TABLE IF NOT EXISTS `supports` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `title`, `description`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'General Support', 'We have our own call center support team to give support of your all needs.It may be software connectivity issues, general queries or information support.', '20231111162432323.jpeg', 1, 1, NULL, '2023-11-11 10:24:08', '2023-11-11 10:24:08'),
(3, 'Technical Support', 'Do you want to reset of your software or server? Or modifiy your software or application? Or Any other technical issues? Our technical support team are always ready for you.', '202311111624BAF SEMC LOGO..png', 1, 1, NULL, '2023-11-11 10:24:38', '2023-11-11 10:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

DROP TABLE IF EXISTS `times`;
CREATE TABLE IF NOT EXISTS `times` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `times_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '7.00 pm - 7.20 pm', 1, 1, NULL, '2023-03-16 05:31:49', '2023-03-16 05:31:49'),
(2, '7.20 pm - 7.40 pm', 1, 1, NULL, '2023-03-16 05:32:42', '2023-03-16 05:32:42'),
(3, '7.40 pm - 8.00 pm', 1, 1, NULL, '2023-03-16 05:33:06', '2023-03-16 05:33:06'),
(4, '8.00 pm - 8.20 pm', 1, 1, NULL, '2023-03-16 05:33:34', '2023-03-16 05:33:34'),
(5, '8.20 pm - 8.40 pm', 1, 1, NULL, '2023-03-16 05:33:49', '2023-03-16 05:33:49'),
(6, '8.40 pm - 9.00 pm', 1, 1, NULL, '2023-03-16 05:34:46', '2023-03-16 05:34:46'),
(7, 'Evening: 7.30 pm - 7.45 pm', 1, 1, NULL, '2023-04-14 14:49:10', '2023-04-14 15:05:32'),
(8, '7.45 pm - 8.00 pm', 1, 1, NULL, '2023-04-14 14:49:46', '2023-04-14 14:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `time_assigns`
--

DROP TABLE IF EXISTS `time_assigns`;
CREATE TABLE IF NOT EXISTS `time_assigns` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL COMMENT 'doctor_id=user_id',
  `day_id` int(11) DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_assigns`
--

INSERT INTO `time_assigns` (`id`, `doctor_id`, `day_id`, `time_id`, `created_by`, `created_at`, `updated_at`) VALUES
(12, 4, 1, 6, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(11, 4, 1, 5, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(10, 4, 1, 4, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(9, 4, 1, 3, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(8, 4, 1, 2, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(7, 4, 1, 1, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(13, 4, 2, 1, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(14, 4, 2, 2, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(15, 4, 2, 3, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(16, 4, 2, 4, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(17, 4, 2, 5, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(18, 4, 2, 6, NULL, '2023-03-21 01:52:47', '2023-03-21 01:52:47'),
(94, 9, 5, 6, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(93, 9, 5, 5, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(92, 9, 5, 4, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(91, 9, 5, 8, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(90, 9, 2, 6, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(89, 9, 2, 5, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(88, 9, 2, 4, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(87, 9, 2, 8, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(86, 9, 1, 6, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(85, 9, 1, 5, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(84, 9, 1, 4, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(83, 9, 1, 8, NULL, '2023-04-15 10:32:26', '2023-04-15 10:32:26'),
(96, 8, 1, 2, NULL, '2023-05-04 23:37:52', '2023-05-04 23:37:52'),
(95, 8, 1, 1, NULL, '2023-05-04 23:37:52', '2023-05-04 23:37:52'),
(97, 8, 1, 3, NULL, '2023-05-04 23:37:52', '2023-05-04 23:37:52'),
(98, 8, 1, 5, NULL, '2023-05-04 23:37:52', '2023-05-04 23:37:52'),
(99, 8, 1, 6, NULL, '2023-05-04 23:37:52', '2023-05-04 23:37:52'),
(100, 8, 1, 7, NULL, '2023-05-04 23:37:52', '2023-05-04 23:37:52'),
(101, 8, 1, 8, NULL, '2023-05-04 23:37:52', '2023-05-04 23:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `unions`
--

DROP TABLE IF EXISTS `unions`;
CREATE TABLE IF NOT EXISTS `unions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `upazila_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unions`
--

INSERT INTO `unions` (`id`, `division_id`, `district_id`, `upazila_id`, `name`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Gundor', 1, 1, '2021-02-07 02:41:16', '2021-02-07 02:41:21'),
(2, 1, 1, 1, 'Zafrabadh', 1, 1, '2021-02-07 02:41:16', '2021-02-07 02:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

DROP TABLE IF EXISTS `upazilas`;
CREATE TABLE IF NOT EXISTS `upazilas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=547 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `division_id`, `district_id`, `name`, `created_by`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Belabo', 1, 1, '2021-02-07 02:36:52', '2024-01-13 06:21:44'),
(2, 1, 1, 'Monohardi', 1, 11, '2024-01-13 06:22:36', '2026-08-10 23:15:38'),
(3, 1, 1, 'Narsingdi Sadar', 1, 1, '2024-01-13 06:22:36', '2024-05-20 16:26:19'),
(4, 1, 1, 'Palash', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(5, 1, 1, 'Raipura', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(6, 1, 1, 'Shibpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(7, 1, 2, 'Kaliganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(8, 1, 2, 'Kaliakair', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(9, 1, 2, 'Kapasia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(10, 1, 2, 'Gazipur Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(11, 1, 2, 'Sreepur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(12, 1, 3, 'Shariatpur Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(13, 1, 3, 'Naria', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(14, 1, 3, 'Zajira', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(15, 1, 3, 'Gosairha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(16, 1, 3, 'Bhedarganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(17, 1, 3, 'Damudya', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(18, 1, 4, 'Narayanganj Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(19, 1, 4, 'Araihazar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(20, 1, 4, 'Bandar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(21, 1, 4, 'Rupgan', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(22, 1, 4, 'Sonargaon', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(23, 1, 5, 'Tangail Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(24, 1, 5, 'Basail', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(25, 1, 5, 'Bhuapur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(26, 1, 5, 'Delduar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(27, 1, 5, 'Ghatail', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(28, 1, 5, 'Gopalpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(29, 1, 5, 'Madhupur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(30, 1, 5, 'Mirzapur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(31, 1, 5, 'Nagarpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(32, 1, 5, 'Sakhipur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(33, 1, 5, 'Kalihati', 1, 1, '2024-01-13 06:22:36', '2024-07-29 05:54:24'),
(34, 1, 5, 'Dhanbari', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(35, 1, 6, 'Kishoreganj Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(36, 1, 6, 'Itna', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(37, 1, 6, 'Katiadi', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(38, 1, 6, 'Bhairab', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(39, 1, 6, 'Tarail', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(40, 1, 6, 'Hossainpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(41, 1, 6, 'Pakundia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(42, 1, 6, 'Kuliarchar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(43, 1, 6, 'Karimgonj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(44, 1, 6, 'Austagram', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(45, 1, 6, 'Mithamoin', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(46, 1, 6, 'Nikli', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(47, 1, 7, 'Manikganj Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(48, 1, 7, 'Harirampur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(49, 1, 7, 'Saturia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(50, 1, 7, 'Gior', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(51, 1, 7, 'Shibaloy', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(52, 1, 7, 'Doulatpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(53, 1, 7, 'Singiar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(54, 1, 8, 'Dohar', 1, 1, '2024-01-13 06:22:36', '2024-05-18 17:20:58'),
(55, 1, 8, 'Dhamrai', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(56, 1, 8, 'Keraniganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(57, 1, 8, 'Nawabganj', 1, 1, '2024-01-13 06:22:36', '2024-05-18 11:09:04'),
(58, 1, 8, 'Savar', 1, 1, '2024-01-13 06:22:36', '2024-11-20 18:12:13'),
(59, 1, 9, 'Munshiganj Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(60, 1, 9, 'Sreenagar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(61, 1, 9, 'Sirajdikhan', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(62, 1, 9, 'Louhajan', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(63, 1, 9, 'Gajaria', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(64, 1, 9, 'Tongibari', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(65, 1, 10, 'Rajbari Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(66, 1, 10, 'Goalanda', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(67, 1, 10, 'Pangsa', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(68, 1, 10, 'Baliakand', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(69, 1, 10, 'Kalukhali', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(70, 1, 11, 'Madaripur Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(71, 1, 11, 'Shibchar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(72, 1, 11, 'Kalkini', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(73, 1, 11, 'Rajoir', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(74, 1, 12, 'Gopalganj Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(75, 1, 12, 'Kashiani', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(76, 1, 12, 'Tungipara', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(77, 1, 12, 'Kotalipara', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(78, 1, 12, 'Muksudpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(79, 1, 13, 'Faridpur Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(80, 1, 13, 'Alfadanga', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(81, 1, 13, 'Boalmari', 1, 1, '2024-01-13 06:22:36', '2025-01-11 11:17:17'),
(82, 1, 13, 'Sadarpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(83, 1, 13, 'Nagarkanda', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(84, 1, 13, 'Bhanga', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(85, 1, 13, 'Charbhadrasan', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(86, 1, 13, 'Madhukhali', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(87, 1, 13, 'Saltha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(88, 2, 14, 'Sherpur Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(89, 2, 14, 'Nalitabari', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(90, 2, 14, 'Sreebordi', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(91, 2, 14, 'Nokla', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(92, 2, 14, 'Jhenaigati', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(93, 2, 15, 'Mymensingh Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(94, 2, 15, 'Fulbaria', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(95, 2, 15, 'Trishal', 1, 1, '2024-01-13 06:22:36', '2024-06-04 19:01:06'),
(96, 2, 15, 'Bhaluka', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(97, 2, 15, 'Muktagacha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(98, 2, 15, 'Dhobaura', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(99, 2, 15, 'Phulpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(100, 2, 15, 'Haluaghat', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(101, 2, 15, 'Gouripur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(102, 2, 15, 'Gafargaon', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(103, 2, 15, 'Iswarganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(104, 2, 15, 'Nandail', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(105, 2, 15, 'Tarakanda', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(106, 2, 16, 'Jamalpur Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(107, 2, 16, 'Melandah', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(108, 2, 16, 'Islampur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(109, 2, 16, 'Dewangonj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(110, 2, 16, 'Sarishabari', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(111, 2, 16, 'Madarganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(112, 2, 16, 'Bokshiganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(113, 2, 17, 'Netrokona Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(114, 2, 17, 'Barhatta', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(115, 2, 17, 'Durgapur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(116, 2, 17, 'Kendua', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(117, 2, 17, 'Atpara', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(118, 2, 17, 'Madan', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(119, 2, 17, 'Khaliajuri', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(120, 2, 17, 'Kalmakanda', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(121, 2, 17, 'Mohongonj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(122, 2, 17, 'Purbadhala', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(123, 3, 18, 'Jashore Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(124, 3, 18, 'Manirampur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(125, 3, 18, 'Abhaynagar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(126, 3, 18, 'Bagherpara', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(127, 3, 18, 'Chougachha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(128, 3, 18, 'Jhikargacha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(129, 3, 18, 'Keshabpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(130, 3, 18, 'Sharsha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(131, 3, 19, 'Satkhira Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(132, 3, 19, 'Assasuni', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(133, 3, 19, 'Debhata', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(134, 3, 19, 'Kalaroa', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(135, 3, 19, 'Shyamnagar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(136, 3, 19, 'Tala', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(137, 3, 19, 'Kaliganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(138, 3, 20, 'Meherpur Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(139, 3, 20, 'Mujibnagar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(140, 3, 20, 'Gangni', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(141, 3, 21, 'Narail Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(142, 3, 21, 'Lohagara', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(143, 3, 21, 'Kalia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(144, 3, 22, 'Chuadanga Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(145, 3, 22, 'Alamdanga', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(146, 3, 22, 'Damurhuda', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(147, 3, 22, 'Jibannagar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(148, 3, 23, 'Kushtia Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(149, 3, 23, 'Kumarkhali', 1, 1, '2024-01-13 06:22:36', '2025-10-30 06:25:19'),
(150, 3, 23, 'Khoksa', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(151, 3, 23, 'Mirpurkushtia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(152, 3, 23, 'Daulatpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(153, 3, 23, 'Bheramara', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(154, 3, 24, 'Magura Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(155, 3, 24, 'Shalikha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(156, 3, 24, 'Sreepur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(157, 3, 24, 'Mohammadpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(158, 3, 25, 'Paikgasa', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(159, 3, 25, 'Fultola', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(160, 3, 25, 'Digholia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(161, 3, 25, 'Rupsha', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(162, 3, 25, 'Terokhada', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(163, 3, 25, 'Dumuria', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(164, 3, 25, 'Botiaghata', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(165, 3, 25, 'Dakop', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(166, 3, 25, 'Koyra', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(167, 3, 26, 'Bagerhat Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(168, 3, 26, 'Fakirhat', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(169, 3, 26, 'Mollahat', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(170, 3, 26, 'Sarankhola', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(171, 3, 26, 'Rampal', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(172, 3, 26, 'Morrelganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(173, 3, 26, 'Kachua', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(174, 3, 26, 'Mongla', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(175, 3, 26, 'Chitalmari', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(176, 3, 27, 'Jhenaidah Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(177, 3, 27, 'Shailkupa', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(178, 3, 27, 'Harinakundu', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(179, 3, 27, 'Kaliganj', 1, 1, '2024-01-13 06:22:36', '2024-06-02 10:17:37'),
(180, 3, 27, 'Kotchandpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(181, 3, 27, 'Moheshpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(182, 4, 28, 'Sirajganj Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(183, 4, 28, 'Belkuchi', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(184, 4, 28, 'Chauhali', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(185, 4, 28, 'Kamarkhand', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(186, 4, 28, 'Kazipur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(187, 4, 28, 'Raigonj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(188, 4, 28, 'Shahjadpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(189, 4, 28, 'Tarash', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(190, 4, 28, 'Ullapara', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(191, 4, 29, 'Pabna Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(192, 4, 29, 'Sujanagar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(193, 4, 29, 'Ishurdi', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(194, 4, 29, 'Bhangura', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(195, 4, 29, 'Bera', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(196, 4, 29, 'Atghoria', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(197, 4, 29, 'Chatmohar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(198, 4, 29, 'Santhia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(199, 4, 29, 'Faridpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(200, 4, 30, 'Bogura Sadar', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(201, 4, 30, 'Kahaloo', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(202, 4, 30, 'Shariakandi', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(203, 4, 30, 'Shajahanpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(204, 4, 30, 'Dupchanchia', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(205, 4, 30, 'Adamdighi', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(206, 4, 30, 'Nondigram', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(207, 4, 30, 'Sonatala', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(208, 4, 30, 'Dhunot', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(209, 4, 30, 'Gabtali', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(210, 4, 30, 'Sherpur', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(211, 4, 30, 'Shibganj', 1, NULL, '2024-01-13 06:22:36', '2024-01-13 06:22:36'),
(212, 4, 31, 'Paba, ', 1, NULL, '2024-01-20 14:41:11', '2024-01-20 14:41:11'),
(213, 4, 31, 'Durgapur', 1, NULL, '2024-01-20 14:41:45', '2024-01-20 14:41:45'),
(214, 4, 31, 'Mohonpur', 1, NULL, '2024-01-20 14:42:07', '2024-01-20 14:42:07'),
(215, 4, 31, 'Charghat', 1, NULL, '2024-01-20 14:42:26', '2024-01-20 14:42:26'),
(216, 4, 31, 'Puthia', 1, NULL, '2024-01-20 14:42:42', '2024-01-20 14:42:42'),
(217, 4, 31, 'Bagha', 1, NULL, '2024-01-20 14:42:57', '2024-01-20 14:42:57'),
(218, 4, 31, 'Godagari', 1, NULL, '2024-01-20 14:43:18', '2024-01-20 14:43:18'),
(219, 4, 31, 'Tanore', 1, NULL, '2024-01-20 14:43:37', '2024-01-20 14:43:37'),
(220, 4, 31, 'Bagmara', 1, NULL, '2024-01-20 14:43:51', '2024-01-20 14:43:51'),
(221, 4, 32, 'Natore Sadar', 1, 1, '2024-01-20 14:44:50', '2024-05-20 16:21:20'),
(222, 4, 32, 'Singra', 1, NULL, '2024-01-20 14:45:09', '2024-01-20 14:45:09'),
(223, 4, 32, 'Baraigram', 1, NULL, '2024-01-20 14:45:28', '2024-01-20 14:45:28'),
(224, 4, 32, 'Bagatipara', 1, NULL, '2024-01-20 14:45:56', '2024-01-20 14:45:56'),
(225, 4, 32, 'Lalpur', 1, NULL, '2024-01-20 14:46:11', '2024-01-20 14:46:11'),
(226, 4, 32, 'Gurudaspur', 1, NULL, '2024-01-20 14:46:32', '2024-01-20 14:46:32'),
(227, 4, 32, 'Naldanga', 1, NULL, '2024-01-20 14:46:49', '2024-01-20 14:46:49'),
(228, 4, 34, 'Chapainawabganj Sadar', 1, 1, '2024-01-20 14:47:13', '2024-06-02 16:43:41'),
(229, 4, 34, 'Gomostapur', 1, NULL, '2024-01-20 14:47:35', '2024-01-20 14:47:35'),
(230, 4, 34, 'Nachol', 1, NULL, '2024-01-20 14:47:52', '2024-01-20 14:47:52'),
(231, 4, 34, 'Bholahat', 1, NULL, '2024-01-20 14:48:04', '2024-01-20 14:48:04'),
(232, 4, 34, 'Shibganj', 1, NULL, '2024-01-20 14:48:18', '2024-01-20 14:48:18'),
(233, 4, 35, 'Mohadevpur', 1, NULL, '2024-01-20 14:48:44', '2024-01-20 14:48:44'),
(234, 4, 35, 'Badalgachi', 1, NULL, '2024-01-20 14:49:04', '2024-01-20 14:49:04'),
(235, 4, 35, 'Patnitala', 1, NULL, '2024-01-20 14:49:25', '2024-01-20 14:49:25'),
(236, 4, 35, 'Dhamoirhat', 1, NULL, '2024-01-20 14:49:44', '2024-01-20 14:49:44'),
(237, 4, 35, 'Niamatpur', 1, NULL, '2024-01-20 14:50:05', '2024-01-20 14:50:05'),
(238, 4, 35, 'Manda', 1, NULL, '2024-01-20 14:50:26', '2024-01-20 14:50:26'),
(239, 4, 35, 'Atrai', 1, NULL, '2024-01-20 14:50:53', '2024-01-20 14:50:53'),
(240, 4, 35, 'Raninagar', 1, NULL, '2024-01-20 14:51:24', '2024-01-20 14:51:24'),
(241, 4, 35, 'Naogaon Sadar', 1, 1, '2024-01-20 14:51:46', '2024-05-18 11:43:59'),
(242, 4, 35, 'Porsha', 1, NULL, '2024-01-20 14:52:01', '2024-01-20 14:52:01'),
(243, 4, 35, 'Sapahar', 1, NULL, '2024-01-20 14:52:17', '2024-01-20 14:52:17'),
(244, 8, 59, 'Jhalakathi Sadar', 1, 1, '2024-01-20 14:52:51', '2024-06-04 18:00:40'),
(245, 8, 59, 'Kathalia', 1, 1, '2024-01-20 14:53:13', '2024-01-20 14:58:51'),
(246, 8, 59, 'Nalchity', 1, NULL, '2024-01-20 14:59:16', '2024-01-20 14:59:16'),
(247, 8, 59, 'Rajapur', 1, NULL, '2024-01-20 14:59:31', '2024-01-20 14:59:31'),
(248, 8, 60, 'Bauphal', 1, NULL, '2024-01-20 14:59:54', '2024-01-20 14:59:54'),
(249, 8, 60, 'Patuakhali Sadar', 1, 1, '2024-01-20 15:00:09', '2024-06-04 18:01:26'),
(250, 8, 60, 'Dumki', 1, NULL, '2024-01-20 15:00:34', '2024-01-20 15:00:34'),
(251, 8, 60, 'Dashmina', 1, NULL, '2024-01-20 15:00:51', '2024-01-20 15:00:51'),
(252, 8, 60, 'Kalapara', 1, NULL, '2024-01-20 15:01:14', '2024-01-20 15:01:14'),
(253, 8, 62, 'Mirzaganj', 1, NULL, '2024-01-20 15:01:41', '2024-01-20 15:01:41'),
(254, 8, 60, 'Galachiapa', 1, 1, '2024-01-20 15:02:04', '2024-01-20 15:02:36'),
(255, 8, 60, 'Rangabali', 1, NULL, '2024-01-20 15:02:52', '2024-01-20 15:02:52'),
(256, 8, 61, 'Pirojpur Sadar', 1, 1, '2024-01-20 15:03:06', '2024-06-04 18:02:03'),
(257, 8, 61, 'Nazirpur', 1, NULL, '2024-01-20 15:03:44', '2024-01-20 15:03:44'),
(258, 8, 61, 'Kawkhali', 1, NULL, '2024-01-20 15:04:52', '2024-01-20 15:04:52'),
(259, 8, 61, 'Bhandaria', 1, NULL, '2024-01-20 15:05:07', '2024-01-20 15:05:07'),
(260, 8, 61, 'Mathbaria', 1, NULL, '2024-01-20 15:05:23', '2024-01-20 15:05:23'),
(261, 8, 61, 'Nesarabad', 1, NULL, '2024-01-20 15:05:41', '2024-01-20 15:05:41'),
(262, 8, 61, 'Indurkani', 1, NULL, '2024-01-20 15:06:03', '2024-01-20 15:06:03'),
(263, 8, 62, 'Barishal Sadar', 1, 1, '2024-01-20 15:21:45', '2024-06-02 16:44:56'),
(264, 8, 62, 'Bakerganj', 1, NULL, '2024-01-20 15:22:08', '2024-01-20 15:22:08'),
(265, 8, 62, 'Babuganj', 1, NULL, '2024-01-20 15:25:36', '2024-01-20 15:25:36'),
(266, 8, 62, 'Wazirpur', 1, NULL, '2024-01-20 15:25:56', '2024-01-20 15:25:56'),
(267, 8, 62, 'Banaripara', 1, NULL, '2024-01-20 15:36:19', '2024-01-20 15:36:19'),
(268, 8, 62, 'Gournadi', 1, NULL, '2024-01-20 15:36:43', '2024-01-20 15:36:43'),
(269, 8, 62, 'Agailjhara', 1, NULL, '2024-01-20 15:38:34', '2024-01-20 15:38:34'),
(270, 8, 62, 'Mehendiganj', 1, NULL, '2024-01-20 15:39:30', '2024-01-20 15:39:30'),
(271, 8, 62, 'Muladi', 1, NULL, '2024-01-20 15:40:53', '2024-01-20 15:40:53'),
(272, 8, 62, 'Hizla', 1, NULL, '2024-01-20 15:41:14', '2024-01-20 15:41:14'),
(273, 8, 63, 'Bhola Sadar', 1, 1, '2024-01-20 15:41:35', '2024-06-04 18:02:36'),
(274, 8, 63, 'Borhanuddin', 1, NULL, '2024-01-20 15:42:04', '2024-01-20 15:42:04'),
(275, 8, 63, 'Charfesson', 1, NULL, '2024-01-20 15:43:50', '2024-01-20 15:43:50'),
(276, 8, 63, 'Doulatkhan', 1, NULL, '2024-01-20 15:44:13', '2024-01-20 15:44:13'),
(277, 8, 63, 'Monpura', 1, NULL, '2024-01-20 15:44:33', '2024-01-20 15:44:33'),
(278, 8, 63, 'Tazumuddin', 1, NULL, '2024-01-20 15:44:51', '2024-01-20 15:44:51'),
(279, 8, 63, 'Lalmohan', 1, NULL, '2024-01-20 15:45:15', '2024-01-20 15:45:15'),
(280, 8, 64, 'Amtali', 1, NULL, '2024-01-20 15:45:34', '2024-01-20 15:45:34'),
(281, 8, 64, 'Barguna Sadar', 1, 1, '2024-01-20 15:45:46', '2024-06-04 18:03:02'),
(282, 8, 64, 'Betagi', 1, NULL, '2024-01-20 15:49:02', '2024-01-20 15:49:02'),
(283, 8, 64, 'Bamna', 1, NULL, '2024-01-20 15:49:19', '2024-01-20 15:49:19'),
(284, 8, 64, 'Pathorghata', 1, NULL, '2024-01-20 15:55:31', '2024-01-20 15:55:31'),
(285, 8, 64, 'Taltali', 1, NULL, '2024-01-20 15:56:11', '2024-01-20 15:56:11'),
(286, 7, 55, 'Balaganj', 1, NULL, '2024-01-20 15:59:15', '2024-01-20 15:59:15'),
(287, 7, 55, 'Beanibazar', 1, NULL, '2024-01-20 15:59:36', '2024-01-20 15:59:36'),
(288, 7, 55, 'Bishwanath', 1, NULL, '2024-01-20 16:07:09', '2024-01-20 16:07:09'),
(289, 7, 55, 'Companiganj', 1, NULL, '2024-01-20 16:07:30', '2024-01-20 16:07:30'),
(290, 7, 55, 'Fenchuganj', 1, NULL, '2024-01-20 16:08:10', '2024-01-20 16:08:10'),
(291, 7, 55, 'Golapganj', 1, NULL, '2024-01-20 16:08:33', '2024-01-20 16:08:33'),
(292, 7, 55, 'Gowainghat', 1, NULL, '2024-01-20 16:08:51', '2024-01-20 16:08:51'),
(293, 7, 55, 'Jaintiapur', 1, NULL, '2024-01-20 16:09:07', '2024-01-20 16:09:07'),
(294, 7, 55, 'Kanaighat', 1, NULL, '2024-01-20 16:09:43', '2024-01-20 16:09:43'),
(295, 7, 55, 'Sylhet Sadar', 1, 1, '2024-01-20 16:10:55', '2024-05-18 11:17:54'),
(296, 7, 55, 'Zakiganj', 1, NULL, '2024-01-20 16:11:23', '2024-01-20 16:11:23'),
(297, 7, 55, 'Dakshinsurma', 1, NULL, '2024-01-20 16:11:38', '2024-01-20 16:11:38'),
(298, 7, 55, 'Osmaninagar', 1, NULL, '2024-01-20 16:11:50', '2024-01-20 16:11:50'),
(299, 7, 56, 'Barlekha', 1, NULL, '2024-01-20 16:12:44', '2024-01-20 16:12:44'),
(300, 7, 56, 'Kamolganj', 1, NULL, '2024-01-20 16:13:00', '2024-01-20 16:13:00'),
(301, 7, 56, 'Kulaura', 1, NULL, '2024-01-20 16:13:32', '2024-01-20 16:13:32'),
(302, 7, 56, ' Moulvibazar Sadar', 1, 1, '2024-01-20 16:13:55', '2024-05-18 10:50:29'),
(303, 7, 56, 'Rajnagar', 1, NULL, '2024-01-20 16:14:20', '2024-01-20 16:14:20'),
(304, 7, 56, 'Sreemangal', 1, NULL, '2024-01-20 16:14:41', '2024-01-20 16:14:41'),
(305, 7, 56, ' Juri', 1, NULL, '2024-01-20 16:14:59', '2024-01-20 16:14:59'),
(306, 7, 57, 'Nabiganj', 1, NULL, '2024-01-20 16:15:47', '2024-01-20 16:15:47'),
(307, 7, 57, 'Bahubal', 1, NULL, '2024-01-20 16:16:13', '2024-01-20 16:16:13'),
(308, 7, 57, 'Ajmiriganj', 1, NULL, '2024-01-20 16:16:37', '2024-01-20 16:16:37'),
(309, 7, 57, ' Baniachong', 1, NULL, '2024-01-20 16:17:03', '2024-01-20 16:17:03'),
(310, 7, 57, ' Lakhai', 1, NULL, '2024-01-20 16:17:21', '2024-01-20 16:17:21'),
(311, 7, 57, 'Chunarughat,', 1, NULL, '2024-01-20 16:17:45', '2024-01-20 16:17:45'),
(312, 7, 57, ' Habiganj Sadar', 1, 1, '2024-01-20 16:18:12', '2024-06-02 16:45:40'),
(313, 7, 57, 'Madhabpur', 1, NULL, '2024-01-20 16:18:35', '2024-01-20 16:18:35'),
(314, 7, 57, 'Shayestaganj', 1, NULL, '2024-01-20 16:18:46', '2024-01-20 16:18:46'),
(315, 7, 58, 'Sunamganj Sadar', 1, 1, '2024-01-20 16:19:19', '2024-06-04 18:03:40'),
(316, 7, 58, 'Southsunamganj', 1, NULL, '2024-01-20 16:19:37', '2024-01-20 16:19:37'),
(317, 7, 58, 'Bishwambarpur', 1, NULL, '2024-01-20 16:20:02', '2024-01-20 16:20:02'),
(318, 7, 58, 'Chhatak', 1, NULL, '2024-01-20 16:20:23', '2024-01-20 16:20:23'),
(319, 7, 58, 'Jagannathpur', 1, 1, '2024-01-20 16:20:43', '2024-01-20 16:23:02'),
(326, 7, 58, ' Dowarabazar', 1, NULL, '2024-01-20 16:23:44', '2024-01-20 16:23:44'),
(320, 7, 58, 'Dowarabazar', 1, NULL, '2024-01-20 16:20:59', '2024-01-20 16:20:59'),
(321, 7, 58, ' Tahirpur', 1, NULL, '2024-01-20 16:21:27', '2024-01-20 16:21:27'),
(322, 7, 58, 'Dharmapasha', 1, NULL, '2024-01-20 16:21:43', '2024-01-20 16:21:43'),
(323, 7, 58, 'Jamalganj', 1, NULL, '2024-01-20 16:22:06', '2024-01-20 16:22:06'),
(324, 7, 58, ' Shalla', 1, NULL, '2024-01-20 16:22:21', '2024-01-20 16:22:21'),
(325, 7, 58, 'Derai', 1, NULL, '2024-01-20 16:22:33', '2024-01-20 16:22:33'),
(327, 6, 47, 'Panchagarh Sadar', 1, 1, '2024-01-20 16:27:55', '2024-06-02 15:58:28'),
(328, 6, 47, ' Debiganj', 1, NULL, '2024-01-20 16:28:14', '2024-01-20 16:28:14'),
(329, 6, 47, 'Boda', 1, NULL, '2024-01-20 16:28:41', '2024-01-20 16:28:41'),
(330, 6, 47, 'Atwari', 1, NULL, '2024-01-20 16:28:55', '2024-01-20 16:28:55'),
(331, 6, 47, 'Tetulia', 1, NULL, '2024-01-20 16:29:08', '2024-01-20 16:29:08'),
(332, 6, 48, 'Nawabganj', 1, NULL, '2024-01-20 16:29:58', '2024-01-20 16:29:58'),
(333, 6, 48, 'Birganj', 1, NULL, '2024-01-20 16:30:16', '2024-01-20 16:30:16'),
(334, 6, 48, 'Ghoraghat', 1, NULL, '2024-01-20 16:30:37', '2024-01-20 16:30:37'),
(335, 6, 48, ' Birampur', 1, NULL, '2024-01-20 16:30:57', '2024-01-20 16:30:57'),
(336, 6, 48, 'Parbatipur', 1, NULL, '2024-01-20 16:31:13', '2024-01-20 16:31:13'),
(337, 6, 48, 'Bochaganj', 1, NULL, '2024-01-20 16:31:32', '2024-01-20 16:31:32'),
(338, 6, 48, 'Kaharol', 1, NULL, '2024-01-20 16:31:46', '2024-01-20 16:31:46'),
(339, 6, 48, 'Fulbari', 1, NULL, '2024-01-20 16:32:17', '2024-01-20 16:32:17'),
(340, 6, 48, 'Dinajpur Sadar', 1, 1, '2024-01-20 16:32:45', '2024-05-02 19:01:32'),
(341, 6, 48, 'Hakimpur', 1, NULL, '2024-01-20 16:33:00', '2024-01-20 16:33:00'),
(342, 6, 48, 'Khansama', 1, NULL, '2024-01-20 16:33:18', '2024-01-20 16:33:18'),
(343, 6, 48, 'Birol', 1, NULL, '2024-01-20 16:33:31', '2024-01-20 16:33:31'),
(344, 6, 48, 'Chirirbandar', 1, NULL, '2024-01-20 16:33:42', '2024-01-20 16:33:42'),
(345, 6, 49, 'Lalmonirhat Sadar', 1, 1, '2024-01-20 16:36:33', '2024-06-04 18:04:55'),
(346, 6, 49, 'Kaliganj', 1, NULL, '2024-01-20 16:36:47', '2024-01-20 16:36:47'),
(347, 6, 49, ' Hatibandha', 1, NULL, '2024-01-20 16:37:03', '2024-01-20 16:37:03'),
(348, 6, 49, 'Patgram', 1, NULL, '2024-01-20 16:37:25', '2024-01-20 16:37:25'),
(349, 6, 49, 'Aditmari', 1, NULL, '2024-01-20 16:37:37', '2024-01-20 16:37:37'),
(350, 6, 50, 'Syedpur', 1, NULL, '2024-01-20 16:38:16', '2024-01-20 16:38:16'),
(351, 6, 50, 'Domar', 1, NULL, '2024-01-20 16:38:39', '2024-01-20 16:38:39'),
(352, 6, 50, 'Dimla', 1, NULL, '2024-01-20 16:38:57', '2024-01-20 16:38:57'),
(353, 6, 50, ' Jaldhaka', 1, NULL, '2024-01-20 16:39:12', '2024-01-20 16:39:12'),
(354, 6, 50, 'Kishorganj', 1, NULL, '2024-01-20 16:39:24', '2024-01-20 16:39:24'),
(355, 6, 50, 'Nilphamari Sadar', 1, 1, '2024-01-20 16:39:34', '2024-06-02 16:44:11'),
(356, 6, 51, 'Sadullapur', 1, NULL, '2024-01-20 16:39:55', '2024-01-20 16:39:55'),
(357, 6, 51, 'Gaibandha Sadar', 1, 1, '2024-01-20 16:40:35', '2025-01-15 12:53:06'),
(358, 6, 51, 'Palashbari', 1, NULL, '2024-01-20 16:41:15', '2024-01-20 16:41:15'),
(359, 6, 51, 'Saghata', 1, NULL, '2024-01-20 16:41:34', '2024-01-20 16:41:34'),
(360, 6, 51, 'Gobindaganj', 1, NULL, '2024-01-20 16:41:47', '2024-01-20 16:41:47'),
(361, 6, 51, 'Sundarganj', 1, NULL, '2024-01-20 16:42:06', '2024-01-20 16:42:06'),
(362, 6, 51, 'Phulchari', 1, 1, '2024-01-20 16:42:17', '2024-01-20 16:43:12'),
(363, 6, 52, 'Thakurgaon Sadar', 1, 1, '2024-01-20 16:43:55', '2024-06-02 16:42:55'),
(364, 6, 52, 'Pirganj', 1, NULL, '2024-01-20 16:45:55', '2024-01-20 16:45:55'),
(365, 6, 52, 'Ranisankail', 1, NULL, '2024-01-20 16:46:11', '2024-01-20 16:46:11'),
(366, 6, 52, 'Haripur', 1, NULL, '2024-01-20 16:46:32', '2024-01-20 16:46:32'),
(367, 6, 52, 'Baliadangi', 1, NULL, '2024-01-20 16:46:42', '2024-01-20 16:46:42'),
(368, 6, 53, 'Rangpur Sadar', 1, 1, '2024-01-20 16:47:22', '2024-06-04 18:05:30'),
(369, 6, 53, ' Gangachara', 1, NULL, '2024-01-20 16:47:38', '2024-01-20 16:47:38'),
(370, 6, 53, 'Taragonj', 1, NULL, '2024-01-20 16:47:55', '2024-01-20 16:47:55'),
(371, 6, 53, 'Badargonj', 1, NULL, '2024-01-20 16:48:12', '2024-01-20 16:48:12'),
(372, 6, 53, ' Mithapukur', 1, NULL, '2024-01-20 16:48:26', '2024-01-20 16:48:26'),
(373, 6, 53, ' Pirgonj', 1, NULL, '2024-01-20 16:48:48', '2024-01-20 16:48:48'),
(374, 6, 53, 'Kaunia', 1, NULL, '2024-01-20 16:49:04', '2024-01-20 16:49:04'),
(375, 6, 53, 'Pirgacha', 1, NULL, '2024-01-20 16:49:19', '2024-01-20 16:49:19'),
(376, 6, 54, 'Kurigram Sadar', 1, 1, '2024-01-20 16:57:04', '2024-06-02 16:38:48'),
(377, 6, 54, 'Nageshwari', 1, NULL, '2024-01-20 16:57:19', '2024-01-20 16:57:19'),
(378, 6, 54, ' Bhurungamari', 1, NULL, '2024-01-20 16:57:39', '2024-01-20 16:57:39'),
(379, 6, 54, 'Phulbari', 1, NULL, '2024-01-20 16:59:26', '2024-01-20 16:59:26'),
(380, 6, 54, 'Rajarhat', 1, NULL, '2024-01-20 16:59:49', '2024-01-20 16:59:49'),
(381, 6, 54, ' Ulipur', 1, NULL, '2024-01-20 17:00:08', '2024-01-20 17:00:08'),
(382, 6, 54, 'Chilmari', 1, NULL, '2024-01-20 17:00:43', '2024-01-20 17:00:43'),
(383, 6, 54, ' Rowmari', 1, NULL, '2024-01-20 17:00:57', '2024-01-20 17:00:57'),
(384, 6, 54, 'Charrajibpur', 1, NULL, '2024-01-20 17:01:10', '2024-01-20 17:01:10'),
(385, 4, 33, 'Akkelpur', 1, NULL, '2024-01-20 17:10:40', '2024-01-20 17:10:40'),
(386, 4, 33, 'Kalai', 1, NULL, '2024-01-20 17:10:53', '2024-01-20 17:10:53'),
(387, 4, 33, ' Khetlal', 1, NULL, '2024-01-20 17:11:07', '2024-01-20 17:11:07'),
(388, 4, 33, 'Panchbibi', 1, NULL, '2024-01-20 17:11:21', '2024-01-20 17:11:21'),
(389, 4, 33, 'Joypurhat Sadar', 1, 1, '2024-01-20 17:11:35', '2024-05-20 14:05:27'),
(390, 5, 43, 'CTG Sadar', 1, 1, '2024-01-23 12:48:05', '2024-04-27 11:31:31'),
(391, 1, 65, 'Uttara (95)', 1, 1, '2024-01-23 12:48:36', '2024-11-21 14:59:51'),
(392, 3, 25, 'Khulna Sadar', 1, 1, '2024-01-23 12:49:34', '2024-06-04 18:07:32'),
(393, 8, 62, 'Barisal Sadar', 1, 1, '2024-01-23 12:49:59', '2024-06-04 18:08:12'),
(394, 6, 53, 'Rangpur Sadar', 1, 1, '2024-01-23 12:50:32', '2024-06-04 18:09:07'),
(395, 1, 65, 'Tejgaon (90)', 1, 1, '2024-03-28 14:07:28', '2024-11-21 15:00:45'),
(396, 5, 37, 'Chagalnaiya', 1, 1, '2024-03-28 15:17:14', '2024-03-28 15:22:18'),
(397, 5, 37, 'Daganbhuiyan', 1, NULL, '2024-03-28 15:17:34', '2024-03-28 15:17:34'),
(398, 5, 37, 'Feni Sadar', 1, NULL, '2024-03-28 15:17:53', '2024-03-28 15:17:53'),
(399, 5, 37, 'Fulgazi', 1, NULL, '2024-03-28 15:18:22', '2024-03-28 15:18:22'),
(400, 5, 37, 'Parshuram', 1, NULL, '2024-03-28 15:18:40', '2024-03-28 15:18:40'),
(401, 5, 37, 'Sonagazi', 1, NULL, '2024-03-28 15:19:03', '2024-03-28 15:19:03'),
(402, 4, 31, 'Rajshahi Sadar', 1, NULL, '2024-04-23 11:05:14', '2024-04-23 11:05:14'),
(403, 5, 36, 'Laksam', 1, NULL, '2024-04-23 11:15:45', '2024-04-23 11:15:45'),
(404, 5, 42, 'Chandragonj', 1, NULL, '2024-04-27 10:59:02', '2024-04-27 10:59:02'),
(405, 5, 40, 'Noakhali Sadar', 1, NULL, '2024-04-27 11:02:12', '2024-04-27 11:02:12'),
(406, 5, 40, 'Companiganj', 1, 1, '2024-04-27 11:02:37', '2024-04-27 11:03:58'),
(407, 5, 40, 'Begumganj (Chowmohani)', 1, 1, '2024-04-27 11:04:25', '2024-04-27 11:09:03'),
(408, 5, 40, 'Hatia', 1, NULL, '2024-04-27 11:04:48', '2024-04-27 11:04:48'),
(409, 5, 40, 'Subarnachar', 1, NULL, '2024-04-27 11:05:29', '2024-04-27 11:05:29'),
(410, 5, 40, 'Kabirhat', 1, NULL, '2024-04-27 11:05:46', '2024-04-27 11:05:46'),
(411, 5, 40, 'Senbug', 1, NULL, '2024-04-27 11:06:23', '2024-04-27 11:06:23'),
(412, 5, 40, 'Chatkhil', 1, NULL, '2024-04-27 11:06:59', '2024-04-27 11:06:59'),
(413, 5, 40, 'Sonaimuri', 1, NULL, '2024-04-27 11:07:29', '2024-04-27 11:07:29'),
(414, 5, 36, 'Cumilla Sadar', 1, NULL, '2024-04-27 11:15:08', '2024-04-27 11:15:08'),
(415, 5, 36, 'Debidwar', 1, NULL, '2024-04-27 11:18:06', '2024-04-27 11:18:06'),
(416, 5, 36, 'Barura', 1, NULL, '2024-04-27 11:18:32', '2024-04-27 11:18:32'),
(417, 5, 36, 'Brahmanpara', 1, NULL, '2024-04-27 11:18:54', '2024-04-27 11:18:54'),
(418, 5, 36, 'Chandina', 1, 1, '2024-04-27 11:19:12', '2024-04-27 11:25:44'),
(419, 5, 36, 'Chuddagram', 1, NULL, '2024-04-27 11:19:32', '2024-04-27 11:19:32'),
(420, 5, 36, 'Daudkandi', 1, NULL, '2024-04-27 11:19:52', '2024-04-27 11:19:52'),
(421, 5, 36, 'Homna', 1, NULL, '2024-04-27 11:20:08', '2024-04-27 11:20:08'),
(422, 5, 36, 'Muradnagar', 1, NULL, '2024-04-27 11:20:43', '2024-04-27 11:20:43'),
(423, 5, 40, 'Langalkot', 1, NULL, '2024-04-27 11:21:10', '2024-04-27 11:21:10'),
(424, 5, 36, 'Meghna', 1, NULL, '2024-04-27 11:21:32', '2024-04-27 11:21:32'),
(425, 5, 36, 'Monoharganj', 1, NULL, '2024-04-27 11:22:01', '2024-04-27 11:22:01'),
(426, 5, 36, 'Sadar Dakshin', 1, NULL, '2024-04-27 11:23:27', '2024-04-27 11:23:27'),
(427, 5, 36, 'Titas', 1, NULL, '2024-04-27 11:23:48', '2024-04-27 11:23:48'),
(428, 5, 36, 'Burichang', 1, NULL, '2024-04-27 11:24:15', '2024-04-27 11:24:15'),
(429, 5, 36, 'Lalmai', 1, NULL, '2024-04-27 11:24:36', '2024-04-27 11:24:36'),
(430, 5, 38, 'B. Baria Sadar', 1, 1, '2024-04-27 11:26:34', '2024-04-27 11:30:22'),
(431, 5, 38, 'Kasba', 1, NULL, '2024-04-27 11:26:48', '2024-04-27 11:26:48'),
(432, 5, 38, 'Nasirnagar', 1, NULL, '2024-04-27 11:27:11', '2024-04-27 11:27:11'),
(433, 5, 38, 'Sarail', 1, NULL, '2024-04-27 11:27:30', '2024-04-27 11:27:30'),
(434, 5, 38, 'Ashuganj', 1, NULL, '2024-04-27 11:28:00', '2024-04-27 11:28:00'),
(435, 5, 38, 'Akhaura', 1, NULL, '2024-04-27 11:28:17', '2024-04-27 11:28:17'),
(436, 5, 38, 'Nabinagar', 1, NULL, '2024-04-27 11:28:41', '2024-04-27 11:28:41'),
(437, 5, 38, 'Bancharampur', 1, NULL, '2024-04-27 11:29:10', '2024-04-27 11:29:10'),
(438, 5, 38, 'Bijoynagar', 1, NULL, '2024-04-27 11:29:37', '2024-04-27 11:29:37'),
(439, 5, 43, 'Rangunia', 1, NULL, '2024-04-27 11:31:57', '2024-04-27 11:31:57'),
(440, 5, 43, 'Sitakunda', 1, NULL, '2024-04-27 11:32:27', '2024-04-27 11:32:27'),
(441, 5, 43, 'Mirsharai', 1, 1, '2024-04-27 11:32:54', '2024-06-04 19:13:23'),
(442, 5, 43, 'Patiya', 1, NULL, '2024-04-27 11:33:22', '2024-04-27 11:33:22'),
(443, 5, 43, 'Sandwip', 1, NULL, '2024-04-27 11:33:56', '2024-04-27 11:33:56'),
(444, 5, 43, 'Banshkhali', 1, NULL, '2024-04-27 11:34:25', '2024-04-27 11:34:25'),
(445, 5, 43, 'Boalkhali', 1, NULL, '2024-04-27 11:36:20', '2024-04-27 11:36:20'),
(446, 5, 43, 'Anwara', 1, NULL, '2024-04-27 11:36:40', '2024-04-27 11:36:40'),
(447, 5, 43, 'Chandanaish', 1, NULL, '2024-04-27 11:37:01', '2024-04-27 11:37:01'),
(448, 5, 43, 'Satkania', 1, NULL, '2024-04-27 11:37:38', '2024-04-27 11:37:38'),
(449, 5, 43, 'Lohagara', 1, NULL, '2024-04-27 11:37:57', '2024-04-27 11:37:57'),
(450, 5, 43, 'Hathazari', 1, NULL, '2024-04-27 11:38:23', '2024-04-27 11:38:23'),
(451, 5, 43, 'Fatikchhari', 1, NULL, '2024-04-27 11:38:48', '2024-04-27 11:38:48'),
(452, 5, 43, 'Raozan', 1, NULL, '2024-04-27 11:39:06', '2024-04-27 11:39:06'),
(453, 5, 43, 'Karnafuli', 1, NULL, '2024-04-27 11:39:29', '2024-04-27 11:39:29'),
(454, 5, 41, 'Chandpur Sadar', 1, NULL, '2024-04-27 11:43:02', '2024-04-27 11:43:02'),
(455, 5, 41, 'Haimchar', 1, NULL, '2024-04-27 11:43:35', '2024-04-27 11:43:35'),
(456, 5, 41, 'Kachua', 1, NULL, '2024-04-27 11:43:52', '2024-04-27 11:43:52'),
(457, 5, 41, 'Shahrasti', 1, NULL, '2024-04-27 11:44:14', '2024-04-27 11:44:14'),
(458, 5, 41, 'Matlab South', 1, NULL, '2024-04-27 11:44:49', '2024-04-27 11:44:49'),
(459, 5, 41, 'Hajiganj', 1, NULL, '2024-04-27 11:45:07', '2024-04-27 11:45:07'),
(460, 5, 41, 'Matlab North', 1, NULL, '2024-04-27 11:45:40', '2024-04-27 11:45:40'),
(461, 5, 41, 'Faridganj', 1, NULL, '2024-04-27 11:45:55', '2024-04-27 11:45:55'),
(462, 5, 44, 'Cox\'sbazar Sadar', 1, NULL, '2024-04-27 11:47:00', '2024-04-27 11:47:00'),
(463, 5, 44, 'Chakaria', 1, NULL, '2024-04-27 11:48:19', '2024-04-27 11:48:19'),
(464, 5, 44, 'Kutubdia', 1, NULL, '2024-04-27 11:48:45', '2024-04-27 11:48:45'),
(465, 5, 44, 'Ukhiya', 1, NULL, '2024-04-27 11:49:01', '2024-04-27 11:49:01'),
(466, 5, 44, 'Moheshkhali', 1, NULL, '2024-04-27 11:49:21', '2024-04-27 11:49:21'),
(467, 5, 44, 'Pekua', 1, NULL, '2024-04-27 11:49:41', '2024-04-27 11:49:41'),
(468, 5, 44, 'Ramu', 1, NULL, '2024-04-27 11:49:55', '2024-04-27 11:49:55'),
(469, 5, 44, 'Teknaf', 1, NULL, '2024-04-27 11:50:12', '2024-04-27 11:50:12'),
(470, 5, 45, 'Khagrachhari Sadar', 1, NULL, '2024-04-27 11:51:46', '2024-04-27 11:51:46'),
(471, 5, 45, 'Dighinala', 1, NULL, '2024-04-27 11:52:13', '2024-04-27 11:52:13'),
(472, 5, 45, 'Panchari', 1, NULL, '2024-04-27 11:52:36', '2024-04-27 11:52:36'),
(473, 5, 45, 'Laxmichhari', 1, NULL, '2024-04-27 11:53:06', '2024-04-27 11:53:06'),
(474, 5, 45, 'Mohalchari', 1, NULL, '2024-04-27 11:53:36', '2024-04-27 11:53:36'),
(475, 5, 45, 'Manikchari', 1, NULL, '2024-04-27 11:53:56', '2024-04-27 11:53:56'),
(476, 5, 45, 'Ramgarh', 1, NULL, '2024-04-27 11:54:23', '2024-04-27 11:54:23'),
(477, 5, 45, 'Matiranga', 1, NULL, '2024-04-27 11:56:39', '2024-04-27 11:56:39'),
(478, 5, 45, 'Guimara', 1, NULL, '2024-04-27 11:56:58', '2024-04-27 11:56:58'),
(479, 5, 39, 'Rangamati Sadar', 1, NULL, '2024-04-27 11:58:38', '2024-04-27 11:58:38'),
(480, 5, 39, 'Kaptai', 1, NULL, '2024-04-27 11:59:04', '2024-04-27 11:59:04'),
(481, 5, 39, 'Kawkhali', 1, NULL, '2024-04-27 11:59:33', '2024-04-27 11:59:33'),
(482, 5, 39, 'Baghaichari', 1, NULL, '2024-04-27 12:00:20', '2024-04-27 12:00:20'),
(483, 5, 39, 'Barakal', 1, NULL, '2024-04-27 12:00:38', '2024-04-27 12:00:38'),
(484, 5, 39, 'Langadu', 1, NULL, '2024-04-27 12:01:05', '2024-04-27 12:01:05'),
(485, 5, 39, 'Rajasthali', 1, NULL, '2024-04-27 12:01:47', '2024-04-27 12:01:47'),
(486, 5, 39, 'Belaichari', 1, NULL, '2024-04-27 12:02:16', '2024-04-27 12:02:16'),
(487, 5, 39, 'Juraichari', 1, NULL, '2024-04-27 12:02:55', '2024-04-27 12:02:55'),
(488, 5, 39, 'Naniarchar', 1, NULL, '2024-04-27 12:03:17', '2024-04-27 12:03:17'),
(489, 5, 42, 'Lakshmipur Sadar', 1, NULL, '2024-04-27 12:06:15', '2024-04-27 12:06:15'),
(490, 5, 42, 'Kamalnagar', 1, NULL, '2024-04-27 12:06:35', '2024-04-27 12:06:35'),
(491, 5, 42, 'Raipur', 1, NULL, '2024-04-27 12:06:51', '2024-04-27 12:06:51'),
(492, 5, 42, 'Ramgati', 1, NULL, '2024-04-27 12:07:10', '2024-04-27 12:07:10'),
(493, 5, 42, 'Ramganj', 1, NULL, '2024-04-27 12:07:27', '2024-04-27 12:07:27'),
(494, 5, 46, 'Bandarban Sadar', 1, NULL, '2024-04-27 12:09:20', '2024-04-27 12:09:20'),
(495, 5, 46, 'Alikadam', 1, NULL, '2024-04-27 12:09:41', '2024-04-27 12:09:41'),
(496, 5, 46, 'Naikhongchhari', 1, 1, '2024-04-27 12:10:07', '2024-04-27 12:10:55'),
(497, 5, 46, 'Rowangchhari', 1, NULL, '2024-04-27 12:11:28', '2024-04-27 12:11:28'),
(498, 5, 46, 'Lama', 1, NULL, '2024-04-27 12:11:52', '2024-04-27 12:11:52'),
(499, 5, 46, 'Ruma', 1, NULL, '2024-04-27 12:12:07', '2024-04-27 12:12:07'),
(500, 5, 46, 'Thanchi', 1, NULL, '2024-04-27 12:12:25', '2024-04-27 12:12:25'),
(501, 3, 25, 'Khulna Sadar', 1, 1, '2024-04-28 09:30:44', '2024-04-28 09:33:05'),
(502, 1, 65, 'Cantonment (08)', 1, 1, '2024-05-02 16:34:03', '2024-11-21 14:54:21'),
(503, 1, 65, 'Badda (04)', 1, 1, '2024-05-18 10:54:01', '2024-11-21 14:38:44'),
(504, 1, 65, 'Gulshan (26)', 1, 1, '2024-05-18 10:54:18', '2024-11-21 14:40:18'),
(505, 1, 65, 'Elephant Road (63)', 1, 1, '2024-05-18 10:54:43', '2024-11-21 14:41:15'),
(506, 1, 65, 'Jatrabari (29)', 1, 1, '2024-05-18 10:55:44', '2024-11-21 14:42:21'),
(507, 1, 65, 'Kamrangirchar (34)', 1, 1, '2024-05-18 10:57:00', '2024-11-21 14:42:59'),
(508, 1, 65, 'Gendaria (24)', 1, 1, '2024-05-18 10:57:50', '2024-11-21 15:02:12'),
(509, 1, 65, 'Rampura (67)', 1, 1, '2024-05-18 11:00:19', '2024-11-21 14:45:02'),
(510, 1, 65, 'Lalbagh (42)', 1, 1, '2024-05-18 11:01:12', '2024-11-21 14:45:33'),
(511, 1, 65, 'Malibag', 1, 1, '2024-05-18 11:01:35', '2024-11-21 14:46:01'),
(512, 1, 65, 'Motijheel (54)', 1, 1, '2024-05-18 11:02:03', '2024-11-21 14:46:38'),
(513, 1, 65, 'Mirpur (48)', 1, 1, '2024-05-18 11:02:26', '2024-11-21 14:47:06'),
(514, 1, 65, 'Dakshinkhan (10)', 1, 1, '2024-05-18 11:02:51', '2024-11-21 14:55:46'),
(515, 1, 65, 'Stadium', 1, 1, '2024-05-18 11:03:19', '2024-11-21 07:29:26'),
(516, 1, 65, 'Darus Salam (11)', 1, 1, '2024-05-18 11:06:21', '2024-11-21 14:56:15'),
(517, 1, 65, 'Demra (12)', 1, 1, '2024-05-18 11:06:53', '2024-11-21 14:56:42'),
(518, 1, 65, 'Dhanmondi (16)', 1, 1, '2024-05-18 11:07:16', '2024-11-21 14:57:55'),
(519, 5, 43, 'Muradpur', 1, NULL, '2024-06-01 18:08:28', '2024-06-01 18:08:28'),
(520, 3, 18, 'Noyapara', 1, NULL, '2024-06-01 20:15:42', '2024-06-01 20:15:42'),
(521, 4, 35, 'Nozipur', 1, NULL, '2024-06-04 17:55:30', '2024-06-04 17:55:30'),
(522, 5, 43, 'Agrabad', 1, NULL, '2024-06-04 18:40:02', '2024-06-04 18:40:02'),
(523, 5, 43, 'Shah Amanat Market', 1, NULL, '2024-06-04 18:44:27', '2024-06-04 18:44:27'),
(524, 5, 43, 'New Market', 1, NULL, '2024-06-04 18:44:57', '2024-06-04 18:44:57'),
(525, 5, 43, 'Halishahar', 1, NULL, '2024-06-04 18:45:35', '2024-06-04 18:45:35'),
(526, 5, 43, 'Pahartali', 1, NULL, '2024-06-04 18:46:11', '2024-06-04 18:46:11'),
(527, 5, 43, 'Baraiyarhat', 1, NULL, '2024-06-04 18:48:31', '2024-06-04 18:48:31'),
(528, 1, 5, 'Karatia', 1, NULL, '2024-06-25 15:01:27', '2024-06-25 15:01:27'),
(529, 5, 36, 'Langolkot', 1, NULL, '2024-06-29 14:08:22', '2024-06-29 14:08:22'),
(530, 5, 40, 'Basurhat', 1, NULL, '2024-06-29 16:36:25', '2024-06-29 16:36:25'),
(531, 1, 1, 'Madhabdi', 1, NULL, '2024-06-30 10:49:00', '2024-06-30 10:49:00'),
(532, 1, 65, 'Kafrul (30)', 1, NULL, '2024-11-21 15:05:59', '2024-11-21 15:05:59'),
(533, 1, 65, 'Kadamtali (32)', 1, NULL, '2024-11-21 15:06:38', '2024-11-21 15:06:38'),
(534, 1, 65, 'Kalabagan (33)', 1, NULL, '2024-11-21 15:07:07', '2024-11-21 15:07:07'),
(535, 1, 65, 'Khilkhet (37)', 1, NULL, '2024-11-21 15:07:38', '2024-11-21 15:07:38'),
(536, 1, 65, 'Mohammadpur (50)', 1, NULL, '2024-11-21 15:08:36', '2024-11-21 15:08:36'),
(537, 1, 65, 'Pallabi (64)', 1, NULL, '2024-11-21 15:09:18', '2024-11-21 15:09:18'),
(538, 1, 65, 'Paltan (65)', 1, NULL, '2024-11-21 15:09:53', '2024-11-21 15:09:53'),
(539, 1, 65, 'Ramna (66)', 1, NULL, '2024-11-21 15:10:19', '2024-11-21 15:10:19'),
(540, 1, 65, 'Sabujbagh (68)', 1, NULL, '2024-11-21 15:10:51', '2024-11-21 15:10:51'),
(541, 1, 65, 'Shah Ali (74)', 1, NULL, '2024-11-21 15:11:53', '2024-11-21 15:11:53'),
(542, 1, 65, 'Shyampur (76)', 1, NULL, '2024-11-21 15:12:30', '2024-11-21 15:12:30'),
(543, 1, 65, 'Sutrapur (88)', 1, NULL, '2024-11-21 15:13:12', '2024-11-21 15:13:12'),
(544, 1, 65, 'Uttarkhan (96)', 1, NULL, '2024-11-21 15:13:55', '2024-11-21 15:13:55'),
(545, 1, 2, 'Tongi', 1, NULL, '2025-08-16 08:20:43', '2025-08-16 08:20:43'),
(546, 1, 6, 'Bajitpur', 1, NULL, '2025-09-16 09:11:47', '2025-09-16 09:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'customer,employee/admin/all user',
  `employee_type` tinyint(4) DEFAULT '1' COMMENT '1=Internal,2=External',
  `booking_status` tinyint(4) DEFAULT '1' COMMENT '1=Yes,2=No',
  `user_category` varchar(51) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Admin,Employee',
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mbbs_fcp` varchar(51) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` longtext COLLATE utf8mb4_unicode_ci,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_id` int(11) DEFAULT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `birth_place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'birth_place=Spouse Name',
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of software,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_with` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultation_fee` double DEFAULT '0',
  `follow_up_fee` double DEFAULT '0',
  `chamber_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber_details` text COLLATE utf8mb4_unicode_ci,
  `appointment_contact` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash_number` varchar(51) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nagad_number` varchar(51) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket_number` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `usertype`, `employee_type`, `booking_status`, `user_category`, `username`, `name`, `name_bn`, `email`, `email_verified_at`, `password`, `mbbs_fcp`, `mobile`, `qualification`, `experience`, `work_place`, `address`, `gender`, `image`, `fname`, `mname`, `religion_id`, `id_no`, `employee_code`, `dob`, `birth_place`, `code`, `role`, `join_date`, `designation_id`, `department_id`, `nationality`, `nid_no`, `blood_group`, `marital_status`, `present_address`, `permanent_address`, `emergency_contact_name`, `relation_with`, `emergency_contact_no`, `consultation_fee`, `follow_up_fee`, `chamber_name`, `chamber_details`, `appointment_contact`, `bkash_number`, `nagad_number`, `rocket_number`, `ecard`, `sort`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 1, 1, 'admin', '01704344126', 'Engr. Asadullah Galib', NULL, 'admin@gmail.com', NULL, '$2y$10$BcBwDv0We8AzdxSWLHPGae5p8bEAcJYPgf2xu317NobDcycxQrkay', NULL, '01928511049', NULL, NULL, NULL, NULL, 'Male', '202206110628PNG logo Hospital.png', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-07-23 18:00:00', '2022-12-07 09:14:19'),
(4, NULL, 'admin', 1, 2, 'doctor', NULL, 'Prof. Dr. Mahboob Ali', NULL, 'mahboob@gmail.com', NULL, '$2y$10$ZiWprFTDV/4oKo6sTWdTeeyF/Z97MIdWDdAxcjMocm1LyoIMEml1O', 'FPC-2038', '01704344126', 'MBBS,FCPS', '5 Years', NULL, NULL, NULL, '202304111335330136191_1899531317086646_5811074125508834328_n.jpg', 'Md. Abdul Jalil', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2', '2023-03-15', 13, 41, NULL, NULL, 'B+', NULL, 'Kishoreganj Sadar', 'Kishoreganj Sadar', NULL, NULL, NULL, 500, 0, NULL, NULL, '01704344126', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-03-15 09:42:21', '2023-06-25 03:53:29'),
(5, NULL, 'admin', 1, 2, 'doctor', NULL, 'Prof. Dr. Wahida Khan Chowdhury', NULL, 'wahida@gmail.com', NULL, '$2y$10$ZiWprFTDV/4oKo6sTWdTeeyF/Z97MIdWDdAxcjMocm1LyoIMEml1O', 'FPC-2038', '01704344126', 'MBBS,FCPS', '5 Years', NULL, NULL, NULL, '202304111333330297032_685220656624824_3985839818249938773_n.jpg', 'Md. Abdul Jalil', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2', '2023-03-15', 13, 10, NULL, NULL, 'B+', NULL, 'Kishoreganj Sadar', 'Kishoreganj Sadar', NULL, NULL, NULL, 500, 0, NULL, NULL, '01704344126', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-03-15 09:42:21', '2023-06-25 03:53:17'),
(6, NULL, 'admin', 1, 2, 'doctor', NULL, 'Prof. Dr.Md.Rafiqul Islam', NULL, 'rafiq@gmail.com', NULL, '$2y$10$ZiWprFTDV/4oKo6sTWdTeeyF/Z97MIdWDdAxcjMocm1LyoIMEml1O', 'FPC-2038', NULL, 'MBBS,FCPS', '5 Years', NULL, NULL, NULL, '202304111325Prof.-Dr.-Md.-Rafiqul-Islam.jpg', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2', '2023-03-15', 13, 47, NULL, NULL, 'B+', NULL, 'Kishoreganj Sadar', 'Kishoreganj Sadar', NULL, NULL, NULL, 500, 0, NULL, NULL, '01704344126', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-03-15 09:42:21', '2023-06-25 03:53:05'),
(7, NULL, 'admin', 1, 2, 'doctor', NULL, 'Prof. Dr. Mohammad Mahmuduzzaman', 'প্রফেসরঃ ডঃ মোঃ মাহমুদুজ্জামান', 'mahmud@gmail.com', NULL, '$2y$10$ZiWprFTDV/4oKo6sTWdTeeyF/Z97MIdWDdAxcjMocm1LyoIMEml1O', 'FPC-2038', NULL, 'MBBS(DU), MD(Gastro),MACG(USA),FACP(USA),FRCP (London),FRCP(Glasgow),FRCP(Ireland),FRCP(Edin),FISG(India)', '30 Years', 'AKMDCH', NULL, NULL, '202304111322330200044_881005166472690_7853872338688448587_n.jpg', 'Md. Abdul Jalil', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2', '2023-03-15', 13, 40, NULL, NULL, 'B+', NULL, 'Kishoreganj Sadar', 'Kishoreganj Sadar', NULL, NULL, NULL, 1500, 1000, 'Anwer Khan Modern Diagnostic Center & Hospital Outdoor Service', 'H-11, R-11, B-G, Banani, Dhaka-1213', '01705407170', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-03-15 09:42:21', '2023-06-25 03:52:42'),
(8, NULL, 'admin', 1, 2, 'doctor', NULL, 'Prof. Golam Muin Uddin', NULL, 'muin@gmail.com', NULL, '$2y$10$ZiWprFTDV/4oKo6sTWdTeeyF/Z97MIdWDdAxcjMocm1LyoIMEml1O', 'FPC-2038', NULL, 'MBBS,FCPS', '10 Years', 'AKMMCH', NULL, NULL, '202304111311329014890_1117691982241626_7444476244883568920_n.jpg', 'Md. Abdul Jalil', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2', '2023-03-15', 13, 39, NULL, NULL, 'B+', NULL, 'Kishoreganj Sadar', 'Kishoreganj Sadar', NULL, NULL, NULL, 500, 0, NULL, NULL, '0170434412601704344126', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-03-15 09:42:21', '2023-06-25 03:52:34'),
(9, NULL, 'admin', 1, 1, 'doctor', NULL, 'Masakin', 'রাব্বি মাহমুদ', 'rabbi@gmail.com', NULL, '$2y$10$BcBwDv0We8AzdxSWLHPGae5p8bEAcJYPgf2xu317NobDcycxQrkay', '123', NULL, 'MBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UKMBBS, MSc (Ortho), UK MBBS, MSc (Ortho), UK', '10 Years', 'AKMMCH', NULL, NULL, '202310211730202304111322330200044_881005166472690_7853872338688448587_n.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2007-04-04', 16, 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 800, 0, 'Anwer Khan Modern Diagnostic Center & Hospital Outdoor Service', 'H-11, R-11, B-G, Banani, Dhaka-1213', '01928511049', '01928510049', '01928511049', NULL, '202310211726eweerw.png', 32, 1, NULL, '2023-04-04 18:51:36', '2023-11-24 04:56:11'),
(10, NULL, 'admin', 1, 1, 'admin', NULL, 'Nishit', NULL, 'nishitreza@gmail.com', NULL, '$2y$10$9KSZLWKOVjvOzMaC7FefWOIHO991GmD/yCsLue2t9jQVp/FwzSLiK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, '01704344126', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-04-10 17:27:33', '2023-04-10 17:27:33'),
(11, 1, 'admin', 1, 1, 'Developer', '01928511049', 'Engr. Asadullah Galib', NULL, 'developer@gmail.com', NULL, '$2y$10$6fRVHmehrRM5Rg2CDKvCOOy3XKrmvwy3.xIcb78fnqGqftRcpGqpe', NULL, '01928511049', NULL, NULL, NULL, NULL, 'Male', '', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '01704344126', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-07-23 18:00:00', '2022-12-07 09:14:19'),
(12, NULL, 'admin', 1, 1, 'nurse', NULL, 'Md. Asadullah khan', NULL, 'afia@gmail.com', NULL, '$2y$10$fR0DoYWilQf/uSlp/2EShOck5A3ku44iqNRhFGRO.3pBh2jEHz5Ly', 'FPC-2038', '01928511049', 'MBBS,FCPS', '5 Years', 'Banani,Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3587121549', '4', NULL, NULL, 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-01 06:15:49', '2023-08-01 06:16:39'),
(13, NULL, 'admin', 1, 1, 'nurse', NULL, 'Sakibuzzaman Udoy', NULL, NULL, NULL, '$2y$10$2xeEDvtW02z9fsSC87n7d.XICowARUdJvlf009MuLpjP0wpmJC6uS', 'FPC-2038', '01928511049', 'MBBS,FCPS', NULL, 'Banani,Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4651104032', '4', NULL, NULL, 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-11-06 04:40:32', '2023-11-06 04:41:03'),
(14, NULL, 'admin', 1, 2, 'nurse', NULL, 'Md. Asadullah khan', 'Md. Asadullah khan', 'adseer@gmail.com', NULL, '$2y$10$ZSqWljonZvj0a5gJyISZS.9tV3LKb3jVdxjki8B9mymxHustCwpdC', 'FPC-2038', '01928511049', 'MBBS,FCPS', '5 Years', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', '2023-11-06', 15, 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1000, 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2023-11-06 04:54:56', '2023-11-18 23:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
CREATE TABLE IF NOT EXISTS `user_logs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `access_in_time` datetime DEFAULT NULL,
  `access_out_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `access_in_time`, `access_out_time`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-09-15 09:14:28', NULL, '2022-09-15 03:14:28', '2022-09-15 03:14:28'),
(2, 1, '2022-12-04 08:38:15', NULL, '2022-12-04 02:38:15', '2022-12-04 02:38:15'),
(3, 1, '2022-12-07 15:04:28', NULL, '2022-12-07 09:04:28', '2022-12-07 09:04:28'),
(4, 1, '2023-03-15 14:23:24', NULL, '2023-03-15 08:23:24', '2023-03-15 08:23:24'),
(5, 1, '2023-03-16 08:03:10', NULL, '2023-03-16 02:03:10', '2023-03-16 02:03:10'),
(6, 1, '2023-03-16 10:50:01', NULL, '2023-03-16 04:50:01', '2023-03-16 04:50:01'),
(7, 1, '2023-03-16 13:49:52', NULL, '2023-03-16 07:49:52', '2023-03-16 07:49:52'),
(8, 4, '2023-03-16 14:28:27', NULL, '2023-03-16 08:28:27', '2023-03-16 08:28:27'),
(9, 1, '2023-03-20 08:36:02', NULL, '2023-03-20 02:36:02', '2023-03-20 02:36:02'),
(10, 1, '2023-03-21 05:00:50', NULL, '2023-03-20 23:00:50', '2023-03-20 23:00:50'),
(11, 1, '2023-03-21 08:45:59', NULL, '2023-03-21 02:45:59', '2023-03-21 02:45:59'),
(12, 1, '2023-03-21 15:16:56', NULL, '2023-03-21 09:16:56', '2023-03-21 09:16:56'),
(13, 1, '2023-03-26 10:40:52', NULL, '2023-03-26 04:40:52', '2023-03-26 04:40:52'),
(14, 1, '2023-03-26 16:29:21', NULL, '2023-03-26 10:29:21', '2023-03-26 10:29:21'),
(15, 1, '2023-03-27 04:14:49', NULL, '2023-03-26 22:14:49', '2023-03-26 22:14:49'),
(16, 1, '2023-03-29 14:24:01', NULL, '2023-03-29 08:24:01', '2023-03-29 08:24:01'),
(17, 1, '2023-04-01 07:34:32', NULL, '2023-04-01 01:34:32', '2023-04-01 01:34:32'),
(18, 1, '2023-04-04 06:07:17', NULL, '2023-04-04 00:07:17', '2023-04-04 00:07:17'),
(19, 1, '2023-04-04 10:39:55', NULL, '2023-04-04 14:39:55', '2023-04-04 14:39:55'),
(20, 1, '2023-04-04 14:43:58', NULL, '2023-04-04 18:43:58', '2023-04-04 18:43:58'),
(21, 1, '2023-04-05 14:32:20', NULL, '2023-04-05 18:32:20', '2023-04-05 18:32:20'),
(22, 1, '2023-04-06 06:19:43', NULL, '2023-04-06 10:19:43', '2023-04-06 10:19:43'),
(23, 1, '2023-04-09 14:30:14', NULL, '2023-04-09 18:30:14', '2023-04-09 18:30:14'),
(24, 1, '2023-04-10 06:36:32', NULL, '2023-04-10 10:36:32', '2023-04-10 10:36:32'),
(25, 1, '2023-04-10 13:10:33', NULL, '2023-04-10 17:10:33', '2023-04-10 17:10:33'),
(26, 10, '2023-04-10 13:28:34', NULL, '2023-04-10 17:28:34', '2023-04-10 17:28:34'),
(27, 1, '2023-04-10 13:29:42', NULL, '2023-04-10 17:29:42', '2023-04-10 17:29:42'),
(28, 10, '2023-04-10 13:34:29', NULL, '2023-04-10 17:34:29', '2023-04-10 17:34:29'),
(29, 1, '2023-04-10 13:36:26', NULL, '2023-04-10 17:36:26', '2023-04-10 17:36:26'),
(30, 1, '2023-04-11 11:49:05', NULL, '2023-04-11 15:49:05', '2023-04-11 15:49:05'),
(31, 1, '2023-04-13 13:04:58', NULL, '2023-04-13 17:04:58', '2023-04-13 17:04:58'),
(32, 1, '2023-04-13 14:59:13', NULL, '2023-04-13 18:59:13', '2023-04-13 18:59:13'),
(33, 1, '2023-04-14 10:33:15', NULL, '2023-04-14 14:33:15', '2023-04-14 14:33:15'),
(34, 1, '2023-04-15 04:52:32', NULL, '2023-04-15 08:52:32', '2023-04-15 08:52:32'),
(35, 1, '2023-04-15 05:31:02', NULL, '2023-04-15 09:31:02', '2023-04-15 09:31:02'),
(36, 1, '2023-04-15 06:29:35', NULL, '2023-04-15 10:29:35', '2023-04-15 10:29:35'),
(37, 1, '2023-04-15 12:57:15', NULL, '2023-04-15 16:57:15', '2023-04-15 16:57:15'),
(38, 1, '2023-04-16 05:19:21', NULL, '2023-04-16 09:19:21', '2023-04-16 09:19:21'),
(39, 1, '2023-04-16 09:29:07', NULL, '2023-04-16 13:29:07', '2023-04-16 13:29:07'),
(40, 1, '2023-04-16 11:53:11', NULL, '2023-04-16 15:53:11', '2023-04-16 15:53:11'),
(41, 1, '2023-04-16 11:59:17', NULL, '2023-04-16 15:59:17', '2023-04-16 15:59:17'),
(42, 1, '2023-04-16 15:20:31', NULL, '2023-04-16 19:20:31', '2023-04-16 19:20:31'),
(43, 1, '2023-04-16 16:17:56', NULL, '2023-04-16 20:17:56', '2023-04-16 20:17:56'),
(44, 1, '2023-04-17 06:18:58', NULL, '2023-04-17 10:18:58', '2023-04-17 10:18:58'),
(45, 1, '2023-04-17 11:58:39', NULL, '2023-04-17 15:58:39', '2023-04-17 15:58:39'),
(46, 1, '2023-04-18 07:12:48', NULL, '2023-04-18 11:12:48', '2023-04-18 11:12:48'),
(47, 1, '2023-04-18 10:42:47', NULL, '2023-04-18 14:42:47', '2023-04-18 14:42:47'),
(48, 1, '2023-04-19 11:42:47', NULL, '2023-04-19 15:42:47', '2023-04-19 15:42:47'),
(49, 1, '2023-04-19 13:52:31', NULL, '2023-04-19 17:52:31', '2023-04-19 17:52:31'),
(50, 1, '2023-04-21 10:37:06', NULL, '2023-04-21 14:37:06', '2023-04-21 14:37:06'),
(51, 9, '2023-04-21 10:37:49', NULL, '2023-04-21 14:37:49', '2023-04-21 14:37:49'),
(52, 1, '2023-04-21 11:52:59', NULL, '2023-04-21 15:52:59', '2023-04-21 15:52:59'),
(53, 9, '2023-04-21 11:54:39', NULL, '2023-04-21 15:54:39', '2023-04-21 15:54:39'),
(54, 9, '2023-04-21 17:23:35', NULL, '2023-04-21 21:23:35', '2023-04-21 21:23:35'),
(55, 9, '2023-04-23 10:13:34', NULL, '2023-04-23 14:13:34', '2023-04-23 14:13:34'),
(56, 9, '2023-04-23 14:35:46', NULL, '2023-04-23 18:35:46', '2023-04-23 18:35:46'),
(57, 9, '2023-04-24 09:43:55', NULL, '2023-04-24 13:43:55', '2023-04-24 13:43:55'),
(58, 1, '2023-04-26 11:41:24', NULL, '2023-04-26 15:41:24', '2023-04-26 15:41:24'),
(59, 9, '2023-04-27 14:39:26', NULL, '2023-04-27 18:39:26', '2023-04-27 18:39:26'),
(60, 9, '2023-04-30 11:06:56', NULL, '2023-04-30 15:06:56', '2023-04-30 15:06:56'),
(61, 1, '2023-04-30 11:25:48', NULL, '2023-04-30 15:25:48', '2023-04-30 15:25:48'),
(62, 9, '2023-04-30 17:28:05', NULL, '2023-04-30 21:28:05', '2023-04-30 21:28:05'),
(63, 1, '2023-04-30 17:38:36', NULL, '2023-04-30 21:38:36', '2023-04-30 21:38:36'),
(64, 1, '2023-05-01 09:50:30', NULL, '2023-05-01 13:50:30', '2023-05-01 13:50:30'),
(65, 1, '2023-05-01 12:52:06', NULL, '2023-05-01 16:52:06', '2023-05-01 16:52:06'),
(66, 1, '2023-05-02 13:48:02', NULL, '2023-05-02 17:48:02', '2023-05-02 17:48:02'),
(67, 1, '2023-05-04 15:58:59', NULL, '2023-05-04 09:58:59', '2023-05-04 09:58:59'),
(68, 1, '2023-05-05 05:32:58', NULL, '2023-05-04 23:32:58', '2023-05-04 23:32:58'),
(69, 1, '2023-05-06 04:52:56', NULL, '2023-05-05 22:52:56', '2023-05-05 22:52:56'),
(70, 1, '2023-05-06 07:11:01', NULL, '2023-05-06 01:11:01', '2023-05-06 01:11:01'),
(71, 9, '2023-05-06 09:19:41', NULL, '2023-05-06 03:19:41', '2023-05-06 03:19:41'),
(72, 1, '2023-05-06 09:20:01', NULL, '2023-05-06 03:20:01', '2023-05-06 03:20:01'),
(73, 9, '2023-05-06 09:20:42', NULL, '2023-05-06 03:20:42', '2023-05-06 03:20:42'),
(74, 1, '2023-05-06 09:57:59', NULL, '2023-05-06 03:57:59', '2023-05-06 03:57:59'),
(75, 9, '2023-05-13 10:58:55', NULL, '2023-05-13 04:58:55', '2023-05-13 04:58:55'),
(76, 1, '2023-05-15 08:33:45', NULL, '2023-05-15 02:33:45', '2023-05-15 02:33:45'),
(77, 1, '2023-05-15 10:47:19', NULL, '2023-05-15 04:47:19', '2023-05-15 04:47:19'),
(78, 1, '2023-05-15 13:40:10', NULL, '2023-05-15 07:40:10', '2023-05-15 07:40:10'),
(79, 9, '2023-05-15 14:57:38', NULL, '2023-05-15 08:57:38', '2023-05-15 08:57:38'),
(80, 1, '2023-05-15 15:54:52', NULL, '2023-05-15 09:54:52', '2023-05-15 09:54:52'),
(81, 1, '2023-05-16 07:16:41', NULL, '2023-05-16 01:16:41', '2023-05-16 01:16:41'),
(82, 1, '2023-05-16 07:35:37', NULL, '2023-05-16 01:35:37', '2023-05-16 01:35:37'),
(83, 9, '2023-05-16 08:49:37', NULL, '2023-05-16 02:49:37', '2023-05-16 02:49:37'),
(84, 1, '2023-05-16 09:12:40', NULL, '2023-05-16 03:12:40', '2023-05-16 03:12:40'),
(85, 1, '2023-05-16 13:52:18', NULL, '2023-05-16 07:52:18', '2023-05-16 07:52:18'),
(86, 9, '2023-05-16 13:54:59', NULL, '2023-05-16 07:54:59', '2023-05-16 07:54:59'),
(87, 1, '2023-05-16 14:31:55', NULL, '2023-05-16 08:31:55', '2023-05-16 08:31:55'),
(88, 9, '2023-05-16 14:48:33', NULL, '2023-05-16 08:48:33', '2023-05-16 08:48:33'),
(89, 1, '2023-05-18 05:16:27', NULL, '2023-05-17 23:16:27', '2023-05-17 23:16:27'),
(90, 1, '2023-05-18 08:58:40', NULL, '2023-05-18 02:58:40', '2023-05-18 02:58:40'),
(91, 1, '2023-05-18 13:45:39', NULL, '2023-05-18 07:45:39', '2023-05-18 07:45:39'),
(92, 9, '2023-05-18 14:59:51', NULL, '2023-05-18 08:59:51', '2023-05-18 08:59:51'),
(93, 1, '2023-05-18 15:13:16', NULL, '2023-05-18 09:13:16', '2023-05-18 09:13:16'),
(94, 1, '2023-05-18 15:48:18', NULL, '2023-05-18 09:48:18', '2023-05-18 09:48:18'),
(95, 1, '2023-05-19 10:36:09', NULL, '2023-05-19 04:36:09', '2023-05-19 04:36:09'),
(96, 1, '2023-05-22 08:07:55', NULL, '2023-05-22 02:07:55', '2023-05-22 02:07:55'),
(97, 1, '2023-05-22 16:44:30', NULL, '2023-05-22 10:44:30', '2023-05-22 10:44:30'),
(98, 1, '2023-06-08 15:00:19', NULL, '2023-06-08 09:00:19', '2023-06-08 09:00:19'),
(99, 11, '2023-06-10 17:16:10', NULL, '2023-06-10 11:16:10', '2023-06-10 11:16:10'),
(100, 1, '2023-06-15 05:46:38', NULL, '2023-06-14 23:46:38', '2023-06-14 23:46:38'),
(101, 11, '2023-06-15 07:02:31', NULL, '2023-06-15 01:02:31', '2023-06-15 01:02:31'),
(102, 1, '2023-06-15 07:04:48', NULL, '2023-06-15 01:04:48', '2023-06-15 01:04:48'),
(103, 1, '2023-06-19 08:10:00', NULL, '2023-06-19 02:10:00', '2023-06-19 02:10:00'),
(104, 1, '2023-06-19 15:01:29', NULL, '2023-06-19 09:01:29', '2023-06-19 09:01:29'),
(105, 1, '2023-06-20 05:59:51', NULL, '2023-06-19 23:59:51', '2023-06-19 23:59:51'),
(106, 1, '2023-06-20 09:12:36', NULL, '2023-06-20 03:12:36', '2023-06-20 03:12:36'),
(107, 1, '2023-06-21 10:49:33', NULL, '2023-06-21 04:49:33', '2023-06-21 04:49:33'),
(108, 1, '2023-06-22 17:35:15', NULL, '2023-06-22 11:35:15', '2023-06-22 11:35:15'),
(109, 1, '2023-06-24 10:52:22', NULL, '2023-06-24 04:52:22', '2023-06-24 04:52:22'),
(110, 1, '2023-06-25 06:58:33', NULL, '2023-06-25 00:58:33', '2023-06-25 00:58:33'),
(111, 1, '2023-06-27 12:31:57', NULL, '2023-06-27 06:31:57', '2023-06-27 06:31:57'),
(112, 1, '2023-06-27 17:22:28', NULL, '2023-06-27 11:22:28', '2023-06-27 11:22:28'),
(113, 1, '2023-06-28 07:55:03', NULL, '2023-06-28 01:55:03', '2023-06-28 01:55:03'),
(114, 1, '2023-07-25 12:18:38', NULL, '2023-07-25 06:18:38', '2023-07-25 06:18:38'),
(115, 1, '2023-08-01 12:07:59', NULL, '2023-08-01 06:07:59', '2023-08-01 06:07:59'),
(116, 12, '2023-08-01 12:19:02', NULL, '2023-08-01 06:19:02', '2023-08-01 06:19:02'),
(117, 12, '2023-08-01 12:19:11', NULL, '2023-08-01 06:19:11', '2023-08-01 06:19:11'),
(118, 1, '2023-08-01 12:19:27', NULL, '2023-08-01 06:19:27', '2023-08-01 06:19:27'),
(119, 12, '2023-08-01 12:20:12', NULL, '2023-08-01 06:20:12', '2023-08-01 06:20:12'),
(120, 1, '2023-08-02 11:54:34', NULL, '2023-08-02 05:54:34', '2023-08-02 05:54:34'),
(121, 12, '2023-08-02 12:01:07', NULL, '2023-08-02 06:01:07', '2023-08-02 06:01:07'),
(122, 1, '2023-08-04 05:14:04', NULL, '2023-08-03 23:14:04', '2023-08-03 23:14:04'),
(123, 1, '2023-08-04 06:05:00', NULL, '2023-08-04 00:05:00', '2023-08-04 00:05:00'),
(124, 1, '2023-08-04 06:36:05', NULL, '2023-08-04 00:36:05', '2023-08-04 00:36:05'),
(125, 9, '2023-08-04 06:41:30', NULL, '2023-08-04 00:41:30', '2023-08-04 00:41:30'),
(126, 1, '2023-08-04 06:43:20', NULL, '2023-08-04 00:43:20', '2023-08-04 00:43:20'),
(127, 1, '2023-08-04 11:24:26', NULL, '2023-08-04 05:24:26', '2023-08-04 05:24:26'),
(128, 1, '2023-09-04 18:23:25', NULL, '2023-09-04 12:23:25', '2023-09-04 12:23:25'),
(129, 9, '2023-10-06 16:20:31', NULL, '2023-10-06 10:20:31', '2023-10-06 10:20:31'),
(130, 1, '2023-10-06 17:06:27', NULL, '2023-10-06 11:06:27', '2023-10-06 11:06:27'),
(131, 9, '2023-10-06 17:27:07', NULL, '2023-10-06 11:27:07', '2023-10-06 11:27:07'),
(132, 1, '2023-10-21 17:12:30', NULL, '2023-10-21 11:12:30', '2023-10-21 11:12:30'),
(133, 1, '2023-10-21 17:23:34', NULL, '2023-10-21 11:23:34', '2023-10-21 11:23:34'),
(134, 1, '2023-10-28 08:54:10', NULL, '2023-10-28 02:54:10', '2023-10-28 02:54:10'),
(135, 1, '2023-10-28 11:06:22', NULL, '2023-10-28 05:06:22', '2023-10-28 05:06:22'),
(136, 1, '2023-11-03 16:41:44', NULL, '2023-11-03 10:41:44', '2023-11-03 10:41:44'),
(137, 1, '2023-11-06 07:37:54', NULL, '2023-11-06 01:37:54', '2023-11-06 01:37:54'),
(138, 1, '2023-11-09 10:20:11', NULL, '2023-11-09 04:20:11', '2023-11-09 04:20:11'),
(139, 1, '2023-11-11 13:26:36', NULL, '2023-11-11 07:26:36', '2023-11-11 07:26:36'),
(140, 1, '2023-11-13 17:08:25', NULL, '2023-11-13 11:08:25', '2023-11-13 11:08:25'),
(141, 1, '2023-11-19 04:59:27', NULL, '2023-11-18 22:59:27', '2023-11-18 22:59:27'),
(142, 1, '2023-11-19 08:22:54', NULL, '2023-11-19 02:22:54', '2023-11-19 02:22:54'),
(143, 1, '2023-11-24 10:55:08', NULL, '2023-11-24 04:55:08', '2023-11-24 04:55:08'),
(144, 1, '2023-11-25 05:49:34', NULL, '2023-11-24 23:49:34', '2023-11-24 23:49:34'),
(145, 1, '2024-01-15 09:44:00', NULL, '2024-01-15 03:44:00', '2024-01-15 03:44:00'),
(146, 1, '2024-02-01 04:25:46', NULL, '2024-01-31 22:25:46', '2024-01-31 22:25:46'),
(147, 1, '2024-05-30 05:49:44', NULL, '2024-05-29 23:49:44', '2024-05-29 23:49:44'),
(148, 1, '2025-01-30 08:40:57', NULL, '2025-01-30 02:40:57', '2025-01-30 02:40:57'),
(149, 1, '2025-02-03 09:57:32', NULL, '2025-02-03 03:57:32', '2025-02-03 03:57:32'),
(150, 11, '2025-05-21 14:05:31', NULL, '2025-05-21 08:05:31', '2025-05-21 08:05:31'),
(151, 11, '2025-05-21 14:07:35', NULL, '2025-05-21 08:07:35', '2025-05-21 08:07:35'),
(152, 11, '2026-08-10 05:00:00', NULL, '2026-08-09 23:00:00', '2026-08-09 23:00:00'),
(153, 11, '2026-08-10 14:45:55', NULL, '2026-08-10 08:45:55', '2026-08-10 08:45:55'),
(154, 11, '2026-08-11 03:25:27', NULL, '2026-08-10 21:25:27', '2026-08-10 21:25:27'),
(155, 11, '2026-08-11 04:45:25', NULL, '2026-08-10 22:45:25', '2026-08-10 22:45:25'),
(156, 11, '2026-08-29 15:57:16', NULL, '2026-08-29 09:57:16', '2026-08-29 09:57:16'),
(157, 11, '2026-08-30 06:26:51', NULL, '2026-08-30 00:26:51', '2026-08-30 00:26:51'),
(158, 11, '2026-08-30 06:55:19', NULL, '2026-08-30 00:55:19', '2026-08-30 00:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

DROP TABLE IF EXISTS `video_galleries`;
CREATE TABLE IF NOT EXISTS `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `user_id`, `link`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 9, 'https://www.youtube.com/watch?v=Qw5r5C7WUNg', '2023042110522334.jpg', 9, NULL, '2023-04-21 14:52:52', '2023-04-21 14:52:52'),
(2, 9, 'https://www.youtube.com/watch?v=VQvdid2x_W0', '2023042110532333244.jpg', 9, NULL, '2023-04-21 14:53:30', '2023-04-21 14:53:30'),
(3, 9, 'https://www.youtube.com/watch?v=4Gy3rpFEhuE', '20230421105342333244.jpg', 9, NULL, '2023-04-21 14:53:55', '2023-04-21 14:53:55'),
(4, 9, 'https://www.youtube.com/watch?v=-utLmw7ktF0', '202304211054423338244.jpg', 9, NULL, '2023-04-21 14:54:29', '2023-04-21 14:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `work_places`
--

DROP TABLE IF EXISTS `work_places`;
CREATE TABLE IF NOT EXISTS `work_places` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `workplace` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_places`
--

INSERT INTO `work_places` (`id`, `user_id`, `workplace`, `details`, `created_at`, `updated_at`) VALUES
(36, 9, 'H-17,R-8,Dhanmondi,Dhaka', NULL, '2023-05-06 03:59:06', '2023-05-06 03:59:06'),
(37, 9, 'United Hospital', NULL, '2023-05-06 03:59:06', '2023-05-06 03:59:06'),
(38, 9, 'H-17,R-8,Dhanmondi,Dhaka', NULL, '2023-05-06 03:59:06', '2023-05-06 03:59:06'),
(35, 9, 'Anwer Khan Modern Medical College Hospital', NULL, '2023-05-06 03:59:06', '2023-05-06 03:59:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
