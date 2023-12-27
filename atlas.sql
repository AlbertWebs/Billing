-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 08:05 AM
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
-- Database: `atlas`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountbalance`
--

CREATE TABLE `accountbalance` (
  `accountBalID` int(11) NOT NULL,
  `WorkingAccount` varchar(20) NOT NULL,
  `FloatAccount` varchar(20) NOT NULL,
  `UtilityAccount` varchar(20) NOT NULL,
  `ChargesPaidAccount` varchar(20) NOT NULL,
  `OrganizationSettlementAccount` varchar(20) NOT NULL,
  `BOCompletedTime` varchar(50) NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Student:MOHAMED FARAH HASSAN has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 12:35:17', '2023-02-22 12:35:17'),
(2, 'default', 'ZAHRA HASSAN ALI has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 12:36:57', '2023-02-22 12:36:57'),
(3, 'default', 'Student:ZAHRA HASSAN ALI has paid 4000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 12:37:25', '2023-02-22 12:37:25'),
(4, 'default', 'FATUMA ALI has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 20:22:16', '2023-02-22 20:22:16'),
(5, 'default', 'Student:FATUMA ALI has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 20:22:56', '2023-02-22 20:22:56'),
(6, 'default', 'Student:FATUMA ALI has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 20:27:56', '2023-02-22 20:27:56'),
(7, 'default', 'Student:Ali Hassan Mohamed has paid 2000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 20:29:30', '2023-02-22 20:29:30'),
(8, 'default', 'Student:FATUMA ALI has paid 6000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-22 22:24:26', '2023-02-22 22:24:26'),
(9, 'default', 'Student:FATUMA ALI has paid 2000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:13:39', '2023-02-23 14:13:39'),
(10, 'default', 'Student:FATUMA ALI has paid 1000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:14:08', '2023-02-23 14:14:08'),
(11, 'default', 'JOHN HERSI has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:15:25', '2023-02-23 14:15:25'),
(12, 'default', 'Student:JOHN HERSI has paid 7000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:15:59', '2023-02-23 14:15:59'),
(13, 'default', 'Student:JOHN HERSI has paid 6000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:16:34', '2023-02-23 14:16:34'),
(14, 'default', 'Student:JOHN HERSI has paid 2000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:17:01', '2023-02-23 14:17:01'),
(15, 'default', 'Student:JOHN HERSI has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:18:21', '2023-02-23 14:18:21'),
(16, 'default', 'ARDO MOHAMUD has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:20:36', '2023-02-23 14:20:36'),
(17, 'default', 'Student:ARDO MOHAMUD has paid 4000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:21:01', '2023-02-23 14:21:01'),
(18, 'default', 'Student:ARDO MOHAMUD has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:21:48', '2023-02-23 14:21:48'),
(19, 'default', 'Student:ARDO MOHAMUD has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:22:57', '2023-02-23 14:22:57'),
(20, 'default', 'Student:ARDO MOHAMUD has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 14:24:53', '2023-02-23 14:24:53'),
(21, 'default', 'Albert Muhatia has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:48:52', '2023-02-23 16:48:52'),
(22, 'default', 'Student:Albert Muhatia has paid 5000 For Computer Packages  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:49:26', '2023-02-23 16:49:26'),
(23, 'default', 'Student:Albert Muhatia has paid 5000 For Computer Packages  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:50:08', '2023-02-23 16:50:08'),
(24, 'default', 'Student:Albert Muhatia has paid 2000 For Computer Packages  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:50:48', '2023-02-23 16:50:48'),
(25, 'default', 'Student:Albert Muhatia has paid 1000 For Business Management  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:52:10', '2023-02-23 16:52:10'),
(26, 'default', 'Student:Albert Muhatia has paid 9000 For Business Management  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:52:41', '2023-02-23 16:52:41'),
(27, 'default', 'Student:Albert Muhatia has paid 1000 For Business Management  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:53:32', '2023-02-23 16:53:32'),
(28, 'default', 'Student:Albert Muhatia has paid 14000 For Business Management  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:54:17', '2023-02-23 16:54:17'),
(29, 'default', 'Student:Albert Muhatia has paid 15000 For Social Work And Community Devp  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:55:29', '2023-02-23 16:55:29'),
(30, 'default', 'Student:Albert Muhatia has paid 15000 For Social Work And Community Devp  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:56:05', '2023-02-23 16:56:05'),
(31, 'default', 'Student:Albert Muhatia has paid 1400 For Social Work And Community Devp  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 16:57:19', '2023-02-23 16:57:19'),
(32, 'default', 'PETER KAMAU has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 21:52:21', '2023-02-23 21:52:21'),
(33, 'default', 'Student:PETER KAMAU has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 21:53:32', '2023-02-23 21:53:32'),
(34, 'default', 'Student:PETER KAMAU has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 21:54:12', '2023-02-23 21:54:12'),
(35, 'default', 'Student:PETER KAMAU has paid 6000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 21:54:55', '2023-02-23 21:54:55'),
(36, 'default', 'Student:PETER KAMAU has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 21:56:06', '2023-02-23 21:56:06'),
(37, 'default', 'Student:PETER KAMAU has paid 4000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 21:57:05', '2023-02-23 21:57:05'),
(38, 'default', 'Student:PETER KAMAU has paid 10000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-23 21:57:57', '2023-02-23 21:57:57'),
(39, 'default', 'OSCAR ABDI has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-24 09:54:08', '2023-02-24 09:54:08'),
(40, 'default', 'Student:OSCAR ABDI has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-24 09:54:45', '2023-02-24 09:54:45'),
(41, 'default', 'Student:OSCAR ABDI has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-24 09:56:11', '2023-02-24 09:56:11'),
(42, 'default', 'NICHOLAS JUMA has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-25 13:32:14', '2023-02-25 13:32:14'),
(43, 'default', 'Student:NICHOLAS JUMA has paid 4000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-25 13:34:06', '2023-02-25 13:34:06'),
(44, 'default', 'Student:NICHOLAS JUMA has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-25 13:34:57', '2023-02-25 13:34:57'),
(45, 'default', 'Student:NICHOLAS JUMA has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-25 13:38:09', '2023-02-25 13:38:09'),
(46, 'default', 'Student:NICHOLAS JUMA has paid 7000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-25 14:23:29', '2023-02-25 14:23:29'),
(47, 'default', 'Student:NICHOLAS JUMA has paid 4000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-25 14:37:11', '2023-02-25 14:37:11'),
(48, 'default', 'Student:Albert Muhatia has paid 100 For Social Work And Community Devp  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 13:23:13', '2023-02-26 13:23:13'),
(49, 'default', 'ALBERT has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 16:14:09', '2023-02-26 16:14:09'),
(50, 'default', 'Student:ALBERT has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 16:16:01', '2023-02-26 16:16:01'),
(51, 'default', 'Student:ALBERT has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 16:18:22', '2023-02-26 16:18:22'),
(52, 'default', 'Student:ALBERT has paid 4000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 16:26:40', '2023-02-26 16:26:40'),
(53, 'default', 'Admin:ZAHRA OMAR has been added By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 16:31:26', '2023-02-26 16:31:26'),
(54, 'default', 'Admin:ZAHRA OMAR has been Deleted By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 16:32:15', '2023-02-26 16:32:15'),
(55, 'default', 'Admin:zahra omar has been added By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-26 16:32:51', '2023-02-26 16:32:51'),
(56, 'default', 'ABDUL IBRAHIM has been Enrolled By zahra omar', NULL, NULL, NULL, 'App\\Models\\User', 14, '[]', NULL, '2023-02-26 16:45:16', '2023-02-26 16:45:16'),
(57, 'default', 'Student:ABDUL IBRAHIM has paid 5000 For English as a Second Language  Recorded By zahra omar', NULL, NULL, NULL, 'App\\Models\\User', 14, '[]', NULL, '2023-02-26 16:46:13', '2023-02-26 16:46:13'),
(58, 'default', 'Student:NICHOLAS JUMA has paid 10000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-27 09:26:54', '2023-02-27 09:26:54'),
(59, 'default', 'QAMAR GARAD has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-27 09:30:51', '2023-02-27 09:30:51'),
(60, 'default', 'Student:QAMAR GARAD has paid 5000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-27 09:31:29', '2023-02-27 09:31:29'),
(61, 'default', 'Student:QAMAR GARAD has paid 3000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-27 09:33:14', '2023-02-27 09:33:14'),
(62, 'default', 'Student:QAMAR GARAD has paid 7000 For English as a Second Language  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-27 09:34:16', '2023-02-27 09:34:16'),
(63, 'default', 'Albert Muhatia has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 12:07:05', '2023-02-28 12:07:05'),
(64, 'default', 'Student:Albert Muhatia has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 12:07:26', '2023-02-28 12:07:26'),
(65, 'default', 'Student:Albert Muhatia has paid 100 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 12:23:44', '2023-02-28 12:23:44'),
(66, 'default', 'Student:Albert Muhatia has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 12:24:05', '2023-02-28 12:24:05'),
(67, 'default', 'Student:Albert Muhatia has paid 100 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 12:24:06', '2023-02-28 12:24:06'),
(68, 'default', 'Student:Albert Muhatia has paid 10000 For Computer Packages  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 13:13:06', '2023-02-28 13:13:06'),
(69, 'default', 'Student:Albert Muhatia has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 13:16:19', '2023-02-28 13:16:19'),
(70, 'default', 'Student:Albert Muhatia has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 13:16:54', '2023-02-28 13:16:54'),
(71, 'default', 'Student:Albert Muhatia has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-02-28 13:16:55', '2023-02-28 13:16:55'),
(72, 'default', 'ABDUL IBRAHIM has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 20:53:12', '2023-03-02 20:53:12'),
(73, 'default', 'Student:ABDUL IBRAHIM has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 20:53:55', '2023-03-02 20:53:55'),
(74, 'default', 'Student:ABDUL IBRAHIM has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 20:55:01', '2023-03-02 20:55:01'),
(75, 'default', 'Student:ABDUL IBRAHIM has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 20:55:53', '2023-03-02 20:55:53'),
(76, 'default', 'Student:ABDUL IBRAHIM has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 20:56:44', '2023-03-02 20:56:44'),
(77, 'default', 'Student:ABDUL IBRAHIM has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 20:56:46', '2023-03-02 20:56:46'),
(78, 'default', 'Student:ABDUL IBRAHIM has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 20:58:54', '2023-03-02 20:58:54'),
(79, 'default', 'Student:ABDUL IBRAHIM has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:01:08', '2023-03-02 21:01:08'),
(80, 'default', 'Student:ABDUL IBRAHIM has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:01:09', '2023-03-02 21:01:09'),
(81, 'default', 'Student:ABDUL IBRAHIM has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:02:41', '2023-03-02 21:02:41'),
(82, 'default', 'Student:ABDUL IBRAHIM has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:02:43', '2023-03-02 21:02:43'),
(83, 'default', 'RONALD has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:09:02', '2023-03-02 21:09:02'),
(84, 'default', 'Student:RONALD has paid 2500 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:09:50', '2023-03-02 21:09:50'),
(85, 'default', 'Student:RONALD has paid 2500 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:11:15', '2023-03-02 21:11:15'),
(86, 'default', 'Student:RONALD has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:11:54', '2023-03-02 21:11:54'),
(87, 'default', 'Student:RONALD has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:12:33', '2023-03-02 21:12:33'),
(88, 'default', 'Student:RONALD has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:13:32', '2023-03-02 21:13:32'),
(89, 'default', 'Student:RONALD has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:14:19', '2023-03-02 21:14:19'),
(90, 'default', 'Student:RONALD has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:14:21', '2023-03-02 21:14:21'),
(91, 'default', 'Student:RONALD has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:22:17', '2023-03-02 21:22:17'),
(92, 'default', 'Student:RONALD has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:22:20', '2023-03-02 21:22:20'),
(93, 'default', 'ABDIFATAH MADEY has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:50:59', '2023-03-02 21:50:59'),
(94, 'default', 'Student:ABDIFATAH MADEY has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-02 21:51:23', '2023-03-02 21:51:23'),
(95, 'default', 'WARSAME ALI has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-03 17:48:30', '2023-03-03 17:48:30'),
(96, 'default', 'GULED ABDI has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-04 13:14:01', '2023-03-04 13:14:01'),
(97, 'default', 'Student:GULED ABDI has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-04 13:14:38', '2023-03-04 13:14:38'),
(98, 'default', 'Student:GULED ABDI has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-04 13:15:21', '2023-03-04 13:15:21'),
(99, 'default', 'Student:GULED ABDI has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-04 13:15:22', '2023-03-04 13:15:22'),
(100, 'default', 'Student:GULED ABDI has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-04 13:16:33', '2023-03-04 13:16:33'),
(101, 'default', 'Student:GULED ABDI has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-04 13:16:34', '2023-03-04 13:16:34'),
(102, 'default', 'Student:GULED ABDI has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-05 21:04:30', '2023-03-05 21:04:30'),
(103, 'default', 'Student:GULED ABDI has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-05 21:04:33', '2023-03-05 21:04:33'),
(104, 'default', 'Student:GULED ABDI has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 09:59:36', '2023-03-08 09:59:36'),
(105, 'default', 'Student:GULED ABDI has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 09:59:39', '2023-03-08 09:59:39'),
(106, 'default', 'Student:GULED ABDI has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 10:01:00', '2023-03-08 10:01:00'),
(107, 'default', 'FIRDHOS HASSAB has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 15:51:09', '2023-03-08 15:51:09'),
(108, 'default', 'Student:FIRDHOS HASSAB has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 15:51:39', '2023-03-08 15:51:39'),
(109, 'default', 'Ronald Mugambi has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 20:07:13', '2023-03-08 20:07:13'),
(110, 'default', 'Student:Ronald Mugambi has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 20:13:32', '2023-03-08 20:13:32'),
(111, 'default', 'Ronald Pimson has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 20:17:51', '2023-03-08 20:17:51'),
(112, 'default', 'Student:Ronald Pimson has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-08 20:18:15', '2023-03-08 20:18:15'),
(113, 'default', 'Student:Ronald Pimson has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-09 09:09:06', '2023-03-09 09:09:06'),
(114, 'default', 'Student:Ronald Pimson has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-09 09:09:08', '2023-03-09 09:09:08'),
(115, 'default', 'Student:Ronald Pimson has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 09:28:41', '2023-03-10 09:28:41'),
(116, 'default', 'Student:Ronald Pimson has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 09:28:43', '2023-03-10 09:28:43'),
(117, 'default', 'Albert Muhatia has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 14:05:38', '2023-03-10 14:05:38'),
(118, 'default', 'Student:Albert Muhatia has paid 12500 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 14:06:03', '2023-03-10 14:06:03'),
(119, 'default', 'Student:Albert Muhatia has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 14:08:48', '2023-03-10 14:08:48'),
(120, 'default', 'Student:Albert Muhatia has paid 8000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 14:09:05', '2023-03-10 14:09:05'),
(121, 'default', 'Student:Albert Muhatia has paid 7000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 19:19:10', '2023-03-10 19:19:10'),
(122, 'default', 'Student:Albert Muhatia has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-10 19:20:45', '2023-03-10 19:20:45'),
(123, 'default', 'Abdifatah issack has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-11 13:09:32', '2023-03-11 13:09:32'),
(124, 'default', 'Student:Abdifatah issack has paid 2000 For Computer Packages  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-11 13:10:10', '2023-03-11 13:10:10'),
(125, 'default', 'Student:Abdifatah issack has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:16:23', '2023-03-12 22:16:23'),
(126, 'default', 'Student:RONALD has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:17:30', '2023-03-12 22:17:30'),
(127, 'default', 'Student:ABDUL IBRAHIM has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:19:22', '2023-03-12 22:19:22'),
(128, 'default', 'Student:ABDUL IBRAHIM has paid 7000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:20:04', '2023-03-12 22:20:04'),
(129, 'default', 'Student:ABDUL IBRAHIM has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:21:20', '2023-03-12 22:21:20'),
(130, 'default', 'Student:ABDUL IBRAHIM has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:22:36', '2023-03-12 22:22:36'),
(131, 'default', 'Student:ABDUL IBRAHIM has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:23:42', '2023-03-12 22:23:42'),
(132, 'default', 'Student:ABDUL IBRAHIM has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:24:48', '2023-03-12 22:24:48'),
(133, 'default', 'Student:ABDUL IBRAHIM has paid 6000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:25:49', '2023-03-12 22:25:49'),
(134, 'default', 'Student:ABDUL IBRAHIM has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-12 22:28:23', '2023-03-12 22:28:23'),
(135, 'default', 'ALBERT has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 10:39:34', '2023-03-13 10:39:34'),
(136, 'default', 'Student:ALBERT has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 10:41:39', '2023-03-13 10:41:39'),
(137, 'default', 'Student:ALBERT has paid 6000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 10:42:17', '2023-03-13 10:42:17'),
(138, 'default', 'Student:ALBERT has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 10:43:05', '2023-03-13 10:43:05'),
(139, 'default', 'Student:ALBERT has paid 10000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 10:43:57', '2023-03-13 10:43:57'),
(140, 'default', 'Student:ALBERT has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 10:47:23', '2023-03-13 10:47:23'),
(141, 'default', 'Student:ALBERT has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 11:02:17', '2023-03-13 11:02:17'),
(142, 'default', 'Student:ALBERT has paid 10000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-13 11:07:27', '2023-03-13 11:07:27'),
(143, 'default', ' has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:14:04', '2023-03-23 20:14:04'),
(144, 'default', ' has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:15:11', '2023-03-23 20:15:11'),
(145, 'default', ' has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:15:11', '2023-03-23 20:15:11'),
(146, 'default', ' has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:15:12', '2023-03-23 20:15:12'),
(147, 'default', ' has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:15:12', '2023-03-23 20:15:12'),
(148, 'default', 'Student:ALBERT has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:15:56', '2023-03-23 20:15:56'),
(149, 'default', 'Student:ALBERT has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:21:32', '2023-03-23 20:21:32'),
(150, 'default', 'WILLIAM RUTO has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:23:07', '2023-03-23 20:23:07'),
(151, 'default', 'Student:WILLIAM RUTO has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:23:41', '2023-03-23 20:23:41'),
(152, 'default', 'Student:WILLIAM RUTO has paid 7000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:24:34', '2023-03-23 20:24:34'),
(153, 'default', 'Student:WILLIAM RUTO has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:25:31', '2023-03-23 20:25:31'),
(154, 'default', 'Student:WILLIAM RUTO has paid 6000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:26:37', '2023-03-23 20:26:37'),
(155, 'default', 'Student:WILLIAM RUTO has paid 8000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:27:44', '2023-03-23 20:27:44'),
(156, 'default', 'Student:WILLIAM RUTO has paid 8000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-23 20:27:52', '2023-03-23 20:27:52'),
(157, 'default', 'ALBERT has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:12:59', '2023-03-28 10:12:59'),
(158, 'default', 'Student:ALBERT has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:13:23', '2023-03-28 10:13:23'),
(159, 'default', 'Student:ALBERT has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:14:25', '2023-03-28 10:14:25'),
(160, 'default', 'Student:ALBERT has paid 6000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:15:27', '2023-03-28 10:15:27'),
(161, 'default', 'Student:ALBERT has paid 8000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:16:37', '2023-03-28 10:16:37'),
(162, 'default', 'Student:ALBERT has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:30:55', '2023-03-28 10:30:55'),
(163, 'default', 'Student:ALBERT has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:34:12', '2023-03-28 10:34:12'),
(164, 'default', 'Student:ALBERT has paid 2000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-28 10:40:28', '2023-03-28 10:40:28'),
(165, 'default', 'Student:ABDUL IBRAHIM has paid 4000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-03-31 22:45:48', '2023-03-31 22:45:48'),
(166, 'default', 'Student:ALBERT has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-04-09 00:03:59', '2023-04-09 00:03:59'),
(167, 'default', 'FARODSA BORANA has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-04-09 00:07:50', '2023-04-09 00:07:50'),
(168, 'default', 'Student:FARODSA BORANA has paid 6000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-04-09 00:08:29', '2023-04-09 00:08:29'),
(169, 'default', 'BRIAN SANYA has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-07 17:47:24', '2023-05-07 17:47:24'),
(170, 'default', 'Student:BRIAN SANYA has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-07 17:48:01', '2023-05-07 17:48:01'),
(171, 'default', 'Student:BRIAN SANYA has paid 3000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-07 17:53:15', '2023-05-07 17:53:15'),
(172, 'default', 'Student:BRIAN SANYA has paid 7000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-07 17:55:05', '2023-05-07 17:55:05'),
(173, 'default', 'Student:BRIAN SANYA has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-07 17:57:34', '2023-05-07 17:57:34'),
(174, 'default', 'JAMES has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-07 18:12:03', '2023-05-07 18:12:03'),
(175, 'default', 'Student:JAMES has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-07 18:12:31', '2023-05-07 18:12:31'),
(176, 'default', 'Nicholas kibisu has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-20 12:16:10', '2023-05-20 12:16:10'),
(177, 'default', 'Student:Nicholas kibisu has paid 5000 For Computer Packages  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-20 12:17:02', '2023-05-20 12:17:02'),
(178, 'default', 'ALI SHALABOW has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-23 21:21:21', '2023-05-23 21:21:21'),
(179, 'default', 'Student:ALI SHALABOW has paid 5000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-05-23 21:21:41', '2023-05-23 21:21:41'),
(180, 'default', 'Student:ALBERT has paid 5000 For Computer Packages  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 09:42:58', '2023-10-18 09:42:58'),
(181, 'default', 'Student:ALBERT has paid 5000 For Computer Packages  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 09:44:22', '2023-10-18 09:44:22'),
(182, 'default', 'Student:Albert Muhatia has paid 2000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 10:08:15', '2023-10-18 10:08:15'),
(183, 'default', 'Student:Albert Muhatia has paid 3000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 10:11:28', '2023-10-18 10:11:28'),
(184, 'default', 'Student:Albert Muhatia has paid 1000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 10:40:57', '2023-10-18 10:40:57'),
(185, 'default', 'Student:Albert Muhatia has paid 1000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 10:44:20', '2023-10-18 10:44:20'),
(186, 'default', 'Student:Albert Muhatia has paid 1000 For Computer Packages  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 10:46:36', '2023-10-18 10:46:36'),
(187, 'default', 'Student:Albert Muhatia has paid 1000 For Computer Packages  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 10:56:59', '2023-10-18 10:56:59'),
(188, 'default', 'Student:Albert Muhatia has paid 1000 For HRM  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 11:01:26', '2023-10-18 11:01:26'),
(189, 'default', 'Student:Albert Muhatia has paid 4000 For HRM  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 11:03:15', '2023-10-18 11:03:15'),
(190, 'default', 'Student:Albert Muhatia has paid 10000 For HRM  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-10-18 11:05:30', '2023-10-18 11:05:30'),
(191, 'default', 'Student:Albert Muhatia has paid 5000 For HRM  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-11-30 05:28:06', '2023-11-30 05:28:06'),
(192, 'default', 'Student:Albert Muhatia has paid 10000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-11-30 05:42:30', '2023-11-30 05:42:30'),
(193, 'default', 'Student:Albert Muhatia has paid 5000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-11-30 05:43:39', '2023-11-30 05:43:39'),
(194, 'default', 'Student:RONALD has paid 2000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-11-30 05:44:34', '2023-11-30 05:44:34'),
(195, 'default', 'Student:RONALD has paid 3000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-11-30 05:45:24', '2023-11-30 05:45:24'),
(196, 'default', 'Student:Albert Muhatia has paid 5000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-12-12 12:02:09', '2023-12-12 12:02:09'),
(197, 'default', 'Student:Albert Muhatia has paid 3000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-12-12 12:02:45', '2023-12-12 12:02:45'),
(198, 'default', 'Student:Albert Muhatia has paid 7000 For ESL  Recorded By Eugene Robert', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-12-12 12:03:26', '2023-12-12 12:03:26'),
(199, 'default', 'Course:HRM has been Deleted By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-12-25 01:19:39', '2023-12-25 01:19:39'),
(200, 'default', 'Alphones has been Enrolled By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-12-25 01:44:27', '2023-12-25 01:44:27'),
(201, 'default', 'Student:ABDUL IBRAHIM has paid 100 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-12-26 12:45:37', '2023-12-26 12:45:37'),
(202, 'default', 'Student:ABDUL IBRAHIM has paid 100 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-12-26 12:46:10', '2023-12-26 12:46:10'),
(203, 'default', 'Student:ABDUL IBRAHIM has paid 12 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-12-26 12:53:24', '2023-12-26 12:53:24'),
(204, 'default', 'Student:RONALD has paid 1000 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-12-26 12:55:49', '2023-12-26 12:55:49'),
(205, 'default', 'Student:Albert Muhatia has paid 1450 For ESL  Recorded By Ronald Mugambi', NULL, NULL, NULL, 'App\\Models\\User', 10, '[]', NULL, '2023-12-26 12:56:24', '2023-12-26 12:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `b2b_api_response`
--

CREATE TABLE `b2b_api_response` (
  `b2bTransactionID` int(11) NOT NULL,
  `TransactionID` varchar(20) NOT NULL,
  `InitiatorAccountCurrentBalance` varchar(20) NOT NULL,
  `DebitAccountCurrentBalance` varchar(20) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `DebitPartyAffectedAccountBalance` varchar(20) NOT NULL,
  `TransCompletedTime` varchar(20) NOT NULL,
  `DebitPartyCharges` varchar(20) NOT NULL,
  `ReceiverPartyPublicName` varchar(50) NOT NULL,
  `Currency` varchar(20) NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b2c_api_response`
--

CREATE TABLE `b2c_api_response` (
  `b2bID` int(11) NOT NULL,
  `TransactionReceipt` varchar(15) NOT NULL,
  `TransactionAmount` varchar(10) NOT NULL,
  `B2CWorkingAccountAvailableFunds` varchar(10) NOT NULL,
  `B2CUtilityAccountAvailableFunds` varchar(100) NOT NULL,
  `TransactionCompletedDateTime` varchar(20) NOT NULL,
  `ReceiverPartyPublicName` varchar(30) NOT NULL,
  `B2CChargesPaidAccountAvailableFunds` varchar(10) NOT NULL,
  `B2CRecipientIsRegisteredCustomer` varchar(2) NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE `balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `expenses` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `campus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student` varchar(255) NOT NULL,
  `campus` int(11) NOT NULL,
  `note` text NOT NULL,
  `balance` int(11) NOT NULL,
  `balance_temp` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `agreed_amount` int(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `group_id` varchar(255) DEFAULT NULL,
  `group_role` varchar(255) DEFAULT NULL,
  `original_payment` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `due` varchar(255) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `transID` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `m_pesa` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashes`
--

CREATE TABLE `cashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `campus` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `balance` text DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `campus` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `campus`, `price`, `school`, `created_at`, `updated_at`) VALUES
(1, 'ESL', 1, 5000, 2, '2023-01-22 21:40:29', '2023-01-22 21:40:29'),
(2, 'KISWAHILI', 1, 5000, 2, '2023-01-22 21:40:52', '2023-01-22 21:40:52'),
(3, 'Computer Packages', 1, 10000, 1, '2023-01-22 21:41:14', '2023-01-22 21:41:14'),
(4, 'Business Management', 1, 15000, 3, '2023-01-22 21:41:36', '2023-01-22 21:41:36'),
(5, 'Social Work And Community Devp', 1, 15000, 4, '2023-01-22 21:42:59', '2023-01-22 21:42:59'),
(6, 'International Relations', 1, 15000, 7, '2023-01-22 21:44:37', '2023-01-22 21:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `balance` varchar(255) DEFAULT NULL,
  `campus` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student` varchar(255) NOT NULL,
  `campus` int(11) NOT NULL,
  `note` text NOT NULL,
  `balance` int(11) NOT NULL,
  `balance_temp` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `agreed_amount` int(11) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `group_id` varchar(255) DEFAULT NULL,
  `group_role` varchar(255) DEFAULT NULL,
  `original_payment` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `due` varchar(255) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `transID` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `m_pesa` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrolments`
--

CREATE TABLE `enrolments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolments`
--

INSERT INTO `enrolments` (`id`, `course_id`, `student_id`, `created_at`, `updated_at`) VALUES
(1, '1', '8', '2023-11-30 05:42:30', '2023-11-30 05:42:30'),
(2, '1', '2', '2023-11-30 05:44:34', '2023-11-30 05:44:34'),
(3, '1', '1', '2023-12-26 12:44:17', '2023-12-26 12:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `entrolments`
--

CREATE TABLE `entrolments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `campus` int(11) NOT NULL,
  `balance` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(255) DEFAULT NULL,
  `reason` text DEFAULT NULL,
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
-- Table structure for table `lnmo_api_response`
--

CREATE TABLE `lnmo_api_response` (
  `lnmoID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `Amount` varchar(20) NOT NULL,
  `MpesaReceiptNumber` varchar(20) NOT NULL,
  `CheckoutRequestID` varchar(20) NOT NULL,
  `MerchantRequestID` varchar(20) NOT NULL,
  `TransactionDate` varchar(20) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `updateTime` datetime NOT NULL DEFAULT current_timestamp()
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
(5, '2021_04_21_072753_create_accountbalance_table', 1),
(6, '2021_04_21_072753_create_b2b_api_response_table', 1),
(7, '2021_04_21_072753_create_b2c_api_response_table', 1),
(8, '2021_04_21_072753_create_lnmo_api_response_table', 1),
(9, '2021_04_21_072753_create_reverse_transaction_table', 1),
(10, '2021_04_21_072753_create_transaction_status_table', 1),
(11, '2021_05_18_084722_create_payment_table', 1),
(12, '2022_05_04_083014_create_students_table', 1),
(13, '2022_05_04_102613_create_courses_table', 1),
(14, '2022_05_04_102855_create_tutors_table', 1),
(15, '2022_05_04_121154_create_billings_table', 2),
(16, '2022_05_11_055807_create_settings_table', 2),
(17, '2022_05_13_092350_create_schools_table', 2),
(18, '2022_05_16_110936_create_cashes_table', 2),
(19, '2022_05_16_111803_create_expenses_table', 2),
(20, '2022_05_20_115317_create_s_t_k_requests_table', 2),
(21, '2022_06_14_122016_create_balances_table', 3),
(22, '2022_06_14_132458_create_notifies_table', 3),
(23, '2022_10_10_150052_create_activity_log_table', 4),
(24, '2022_10_10_150053_add_event_column_to_activity_log_table', 4),
(25, '2022_10_10_150054_add_batch_uuid_column_to_activity_log_table', 4),
(26, '2022_10_15_101835_create_deposits_table', 5),
(27, '2023_01_04_073727_create_entrolments_table', 6),
(28, '2023_01_04_074239_create_enrolments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `millages`
--

CREATE TABLE `millages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `course_id` int(11) NOT NULL,
  `registred` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `millages`
--

INSERT INTO `millages` (`id`, `student_id`, `status`, `course_id`, `registred`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 1, '2023-03-12', '2023-03-12 22:16:23', '2023-03-12 22:16:23'),
(2, 2, 1, 1, '2023-03-12', '2023-03-12 22:17:30', '2023-03-12 22:17:30'),
(3, 1, 1, 1, '2023-03-12', '2023-03-12 22:19:22', '2023-03-12 22:19:22'),
(4, 1, 1, 1, '2023-03-12', '2023-03-12 22:20:04', '2023-03-12 22:20:04'),
(5, 1, 1, 1, '2023-03-12', '2023-03-12 22:21:20', '2023-03-12 22:21:20'),
(6, 1, 1, 1, '2023-03-12', '2023-03-12 22:22:36', '2023-03-12 22:22:36'),
(7, 1, 1, 1, '2023-03-12', '2023-03-12 22:23:41', '2023-03-12 22:23:41'),
(8, 1, 1, 1, '2023-03-12', '2023-03-12 22:24:48', '2023-03-12 22:24:48'),
(9, 1, 1, 1, '2023-03-12', '2023-03-12 22:25:49', '2023-03-12 22:25:49'),
(10, 1, 1, 1, '2023-03-12', '2023-03-12 22:28:23', '2023-03-12 22:28:23'),
(11, 10, 1, 1, '2023-03-13', '2023-03-13 10:41:39', '2023-03-13 10:41:39'),
(12, 10, 1, 1, '2023-03-13', '2023-03-13 10:42:17', '2023-03-13 10:42:17'),
(13, 10, 1, 1, '2023-03-13', '2023-03-13 10:43:05', '2023-03-13 10:43:05'),
(14, 10, 1, 1, '2023-03-13', '2023-03-13 10:43:56', '2023-03-13 10:43:56'),
(15, 10, 1, 1, '2023-03-13', '2023-03-13 10:47:23', '2023-03-13 10:47:23'),
(16, 10, 1, 1, '2023-03-13', '2023-03-13 11:02:17', '2023-03-13 11:02:17'),
(17, 10, 1, 1, '2023-03-13', '2023-03-13 11:07:27', '2023-03-13 11:07:27'),
(18, 10, 1, 1, '2023-03-23', '2023-03-23 20:15:56', '2023-03-23 20:15:56'),
(19, 10, 1, 1, '2023-03-23', '2023-03-23 20:21:32', '2023-03-23 20:21:32'),
(20, 11, 1, 1, '2023-03-23', '2023-03-23 20:23:41', '2023-03-23 20:23:41'),
(21, 11, 1, 1, '2023-03-23', '2023-03-23 20:24:34', '2023-03-23 20:24:34'),
(22, 11, 1, 1, '2023-03-23', '2023-03-23 20:25:31', '2023-03-23 20:25:31'),
(23, 11, 1, 1, '2023-03-23', '2023-03-23 20:26:37', '2023-03-23 20:26:37'),
(24, 11, 1, 1, '2023-03-23', '2023-03-23 20:27:44', '2023-03-23 20:27:44'),
(25, 11, 1, 1, '2023-03-23', '2023-03-23 20:27:52', '2023-03-23 20:27:52'),
(26, 12, 1, 1, '2023-03-28', '2023-03-28 10:13:23', '2023-03-28 10:13:23'),
(27, 12, 1, 1, '2023-03-28', '2023-03-28 10:14:25', '2023-03-28 10:14:25'),
(28, 12, 1, 1, '2023-03-28', '2023-03-28 10:15:27', '2023-03-28 10:15:27'),
(29, 12, 1, 1, '2023-03-28', '2023-03-28 10:16:37', '2023-03-28 10:16:37'),
(30, 12, 1, 1, '2023-03-28', '2023-03-28 10:30:55', '2023-03-28 10:30:55'),
(31, 12, 1, 1, '2023-03-28', '2023-03-28 10:34:12', '2023-03-28 10:34:12'),
(32, 12, 1, 1, '2023-03-28', '2023-03-28 10:40:28', '2023-03-28 10:40:28'),
(33, 1, 1, 1, '2023-03-31', '2023-03-31 22:45:48', '2023-03-31 22:45:48'),
(34, 12, 1, 1, '2023-04-08', '2023-04-09 00:03:59', '2023-04-09 00:03:59'),
(35, 13, 1, 1, '2023-04-08', '2023-04-09 00:08:29', '2023-04-09 00:08:29'),
(36, 14, 1, 1, '2023-05-07', '2023-05-07 17:48:01', '2023-05-07 17:48:01'),
(37, 14, 1, 1, '2023-05-07', '2023-05-07 17:53:15', '2023-05-07 17:53:15'),
(38, 14, 1, 1, '2023-05-07', '2023-05-07 17:55:05', '2023-05-07 17:55:05'),
(39, 14, 1, 1, '2023-05-07', '2023-05-07 17:57:34', '2023-05-07 17:57:34'),
(40, 15, 1, 1, '2023-05-07', '2023-05-07 18:12:31', '2023-05-07 18:12:31'),
(41, 16, 1, 3, '2023-05-20', '2023-05-20 12:17:02', '2023-05-20 12:17:02'),
(42, 17, 1, 1, '2023-05-23', '2023-05-23 21:21:41', '2023-05-23 21:21:41'),
(43, 12, 1, 3, '2023-10-18', '2023-10-18 09:42:58', '2023-10-18 09:42:58'),
(44, 12, 1, 3, '2023-10-18', '2023-10-18 09:44:22', '2023-10-18 09:44:22'),
(45, 8, 1, 1, '2023-10-18', '2023-10-18 10:08:15', '2023-10-18 10:08:15'),
(46, 8, 1, 1, '2023-10-18', '2023-10-18 10:11:28', '2023-10-18 10:11:28'),
(47, 8, 1, 1, '2023-10-18', '2023-10-18 10:40:23', '2023-10-18 10:40:23'),
(48, 8, 1, 1, '2023-10-18', '2023-10-18 10:40:57', '2023-10-18 10:40:57'),
(49, 8, 1, 1, '2023-10-18', '2023-10-18 10:41:52', '2023-10-18 10:41:52'),
(50, 8, 1, 1, '2023-10-18', '2023-10-18 10:42:03', '2023-10-18 10:42:03'),
(51, 8, 1, 1, '2023-10-18', '2023-10-18 10:44:20', '2023-10-18 10:44:20'),
(52, 8, 1, 3, '2023-10-18', '2023-10-18 10:46:36', '2023-10-18 10:46:36'),
(53, 8, 1, 3, '2023-10-18', '2023-10-18 10:52:07', '2023-10-18 10:52:07'),
(54, 8, 1, 3, '2023-10-18', '2023-10-18 10:53:19', '2023-10-18 10:53:19'),
(55, 8, 1, 3, '2023-10-18', '2023-10-18 10:56:59', '2023-10-18 10:56:59'),
(56, 8, 1, 7, '2023-10-18', '2023-10-18 11:01:26', '2023-10-18 11:01:26'),
(57, 8, 1, 7, '2023-10-18', '2023-10-18 11:03:15', '2023-10-18 11:03:15'),
(58, 8, 1, 7, '2023-10-18', '2023-10-18 11:05:30', '2023-10-18 11:05:30'),
(59, 8, 1, 7, '2023-11-30', '2023-11-30 05:28:06', '2023-11-30 05:28:06'),
(60, 8, 1, 1, '2023-11-30', '2023-11-30 05:42:29', '2023-11-30 05:42:29'),
(61, 8, 1, 1, '2023-11-30', '2023-11-30 05:43:39', '2023-11-30 05:43:39'),
(62, 2, 1, 1, '2023-11-30', '2023-11-30 05:44:34', '2023-11-30 05:44:34'),
(63, 2, 1, 1, '2023-11-30', '2023-11-30 05:45:24', '2023-11-30 05:45:24'),
(64, 8, 1, 1, '2023-12-12', '2023-12-12 12:02:09', '2023-12-12 12:02:09'),
(65, 8, 1, 1, '2023-12-12', '2023-12-12 12:02:45', '2023-12-12 12:02:45'),
(66, 8, 1, 1, '2023-12-12', '2023-12-12 12:03:26', '2023-12-12 12:03:26'),
(67, 1, 1, 1, '2023-12-26', '2023-12-26 12:44:17', '2023-12-26 12:44:17'),
(68, 1, 1, 1, '2023-12-26', '2023-12-26 12:45:37', '2023-12-26 12:45:37'),
(69, 1, 1, 1, '2023-12-26', '2023-12-26 12:46:10', '2023-12-26 12:46:10'),
(70, 1, 1, 1, '2023-12-26', '2023-12-26 12:49:26', '2023-12-26 12:49:26'),
(71, 1, 1, 1, '2023-12-26', '2023-12-26 12:49:47', '2023-12-26 12:49:47'),
(72, 1, 1, 1, '2023-12-26', '2023-12-26 12:50:45', '2023-12-26 12:50:45'),
(73, 1, 1, 1, '2023-12-26', '2023-12-26 12:50:59', '2023-12-26 12:50:59'),
(74, 1, 1, 1, '2023-12-26', '2023-12-26 12:51:31', '2023-12-26 12:51:31'),
(75, 1, 1, 1, '2023-12-26', '2023-12-26 12:53:24', '2023-12-26 12:53:24'),
(76, 2, 1, 1, '2023-12-26', '2023-12-26 12:55:49', '2023-12-26 12:55:49'),
(77, 8, 1, 1, '2023-12-26', '2023-12-26 12:56:24', '2023-12-26 12:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `TransactionType` varchar(10) NOT NULL,
  `TransID` varchar(10) NOT NULL,
  `TransTime` varchar(14) NOT NULL,
  `TransAmount` double NOT NULL,
  `BusinessShortCode` varchar(6) NOT NULL,
  `BillRefNumber` varchar(200) NOT NULL,
  `InvoiceNumber` varchar(6) NOT NULL,
  `OrgAccountBalance` varchar(100) NOT NULL,
  `ThirdPartyTransID` varchar(10) NOT NULL,
  `MSISDN` varchar(14) NOT NULL,
  `FirstName` varchar(10) DEFAULT NULL,
  `MiddleName` varchar(10) DEFAULT NULL,
  `LastName` varchar(10) DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifies`
--

CREATE TABLE `notifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifies`
--

INSERT INTO `notifies` (`id`, `user_id`, `balance`, `created_at`, `updated_at`) VALUES
(19, '9', '7000', '2023-02-24 09:54:45', '2023-02-24 09:54:45'),
(20, '9', '2000', '2023-02-24 09:56:11', '2023-02-24 09:56:11'),
(42, '3', '1000', '2023-03-02 21:51:25', '2023-03-02 21:51:25'),
(46, '4', '2000', '2023-03-08 10:01:02', '2023-03-08 10:01:02'),
(47, '7', '2000', '2023-03-10 09:28:45', '2023-03-10 09:28:45'),
(50, '9', '8000', '2023-03-11 13:10:13', '2023-03-11 13:10:13'),
(51, '9', '1000', '2023-03-12 22:16:27', '2023-03-12 22:16:27'),
(60, '11', '2000', '2023-03-23 20:28:07', '2023-03-23 20:28:07'),
(65, '13', '4000', '2023-04-09 00:08:30', '2023-04-09 00:08:30'),
(67, '16', '5000', '2023-05-20 12:17:03', '2023-05-20 12:17:03'),
(78, '1', '4800', '2023-12-26 12:46:10', '2023-12-26 12:46:10'),
(79, '1', '4788', '2023-12-26 12:53:24', '2023-12-26 12:53:24'),
(80, '2', '4000', '2023-12-26 12:55:49', '2023-12-26 12:55:49'),
(81, '8', '3550', '2023-12-26 12:56:24', '2023-12-26 12:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `student_id`, `description`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '8', 'Flight Bookings', '5420', '1', '2023-02-21 03:50:30', '2023-02-21 03:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nektatech@gmail.com', '$2y$10$czjFUi82eK.RAn3WBXjVBOADGtWyAPhvTfDRW7LX5O.7QVg6ancF6', '2022-06-18 00:27:56'),
('albertmuhatia@gmail.com', '$2y$10$7SNMzUkmWbc266lReghGK.2jPeSZOn5iWMDYdViU6AOHYW164BXn6', '2022-10-09 04:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payer_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `reverse_transaction`
--

CREATE TABLE `reverse_transaction` (
  `transactionstatusID` int(11) NOT NULL,
  `DebitAccountBalance` varchar(255) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `TransCompletedTime` varchar(25) NOT NULL,
  `OriginalTransactionID` varchar(20) NOT NULL,
  `Charge` varchar(20) NOT NULL,
  `CreditPartyPublicName` varchar(50) NOT NULL,
  `DebitPartyPublicName` varchar(50) NOT NULL,
  `updateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `campus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `title`, `campus`, `created_at`, `updated_at`) VALUES
(1, 'ICT', 1, '2023-01-22 21:35:41', '2023-01-22 21:35:41'),
(2, 'LANGUAGES', 1, '2023-01-22 21:36:08', '2023-01-22 21:36:08'),
(3, 'BUSINESS COURSES', 1, '2023-01-22 21:36:17', '2023-01-22 21:36:17'),
(4, 'HAIR DRESSING AND BEAUTY', 1, '2023-01-22 21:36:31', '2023-01-22 21:36:31'),
(5, 'HOSPITALITY AND CATERING', 1, '2023-01-22 21:38:01', '2023-01-22 21:38:01'),
(6, 'COSMOTOLOGY', 1, '2023-01-22 21:38:18', '2023-01-22 21:38:18'),
(7, 'Humanities', 1, '2023-01-22 21:44:08', '2023-01-22 21:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `aka` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `address`, `aka`, `email`, `mobile`, `location`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Global Technical Training College', 'P.O. BOX 79186 - 00400', 'GTTC', 'globaltechke2021@gmail.com', '0799 925 625', '2nd Avenue, Eastleigh', 'logo-1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `campus` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `course_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `email_address`, `campus`, `mobile`, `gender`, `avatar`, `status`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'ABDUL IBRAHIM', '101', 'ookiyaale2022@gmail.com', '1', '+254 722142020', 'Male', 'avatar.jpg', 'Active', '1', '2023-03-02 20:53:12', '2023-03-02 20:53:12'),
(2, 'RONALD', '102', 'ookiyaale2022@gmail.com', '1', '+254 722', 'Male', 'avatar.jpg', 'Active', '1', '2023-03-02 21:09:02', '2023-03-02 21:09:02'),
(8, 'Albert Muhatia', '001451', 'albertmuhatia@gmail.com', '1', '+254 723014032', 'Male', 'avatar.jpg', 'Active', '1', '2023-03-10 14:05:38', '2023-03-10 14:05:38'),
(18, 'Alphones', 'ADM100', NULL, '1', '+254 712531336', 'Male', 'avatar.jpg', 'Active', '1', '2023-12-25 01:44:27', '2023-12-25 01:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `s_t_k_requests`
--

CREATE TABLE `s_t_k_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `Amount` varchar(20) NOT NULL,
  `CheckoutRequestID` varchar(255) NOT NULL,
  `MerchantRequestID` varchar(255) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_status`
--

CREATE TABLE `transaction_status` (
  `transactionStatusID` int(11) NOT NULL,
  `ReceiptNo` varchar(20) NOT NULL,
  `ConversationID` varchar(50) NOT NULL,
  `FinalisedTime` varchar(25) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `TransactionStatus` varchar(20) NOT NULL,
  `ReasonType` varchar(50) NOT NULL,
  `DebitPartyCharges` varchar(20) DEFAULT NULL,
  `DebitAccountType` varchar(100) NOT NULL,
  `InitiatedTime` varchar(20) NOT NULL,
  `OriginatorConversationID` varchar(20) NOT NULL,
  `CreditPartyName` varchar(55) NOT NULL,
  `CreditPartyCharges` varchar(255) NOT NULL,
  `DebitPartyName` varchar(50) NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
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
  `role` varchar(255) DEFAULT NULL,
  `campus` int(11) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 1,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `campus`, `avatar`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eugene Robert', 'Super Admin', 1, '188142773_2046856382119267_1706973228643307406_n (1).jpg', 'albertmuhatia@gmail.com', NULL, 1, '$2y$10$C3gxPTIR89w.GqsvN0vDpuqO.jfdFLulHDKRfszig7zZpmqkgezsG', NULL, '2022-05-11 09:02:44', '2022-05-11 09:02:44'),
(10, 'Abdul Ibrahim', 'Super Admin', 1, '1598056819526.jpg', 'atlaske2014@gmail.com', NULL, 1, '$2y$10$oBbB4JujGOP9mmraF8aeduQTbToNgues2vjssI06dHAEi3tUnhChm', NULL, '2023-01-19 12:39:53', '2023-01-19 12:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `student_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '10', '4000', 0, '2023-02-25 14:23:29', '2023-02-25 14:23:29'),
(2, '11', '4000', 0, '2023-02-26 16:18:22', '2023-02-26 16:18:22'),
(3, '10', '4000', 1, '2023-02-27 09:26:54', '2023-02-27 09:26:54'),
(4, '13', '5000', 1, '2023-02-27 09:34:16', '2023-02-27 09:34:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountbalance`
--
ALTER TABLE `accountbalance`
  ADD PRIMARY KEY (`accountBalID`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  ADD PRIMARY KEY (`b2bTransactionID`);

--
-- Indexes for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  ADD PRIMARY KEY (`b2bID`);

--
-- Indexes for table `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashes`
--
ALTER TABLE `cashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolments`
--
ALTER TABLE `enrolments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrolments`
--
ALTER TABLE `entrolments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
  ADD PRIMARY KEY (`lnmoID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `millages`
--
ALTER TABLE `millages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  ADD PRIMARY KEY (`transLoID`),
  ADD UNIQUE KEY `TransID` (`TransID`);

--
-- Indexes for table `notifies`
--
ALTER TABLE `notifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  ADD PRIMARY KEY (`transactionstatusID`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_t_k_requests`
--
ALTER TABLE `s_t_k_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_status`
--
ALTER TABLE `transaction_status`
  ADD PRIMARY KEY (`transactionStatusID`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountbalance`
--
ALTER TABLE `accountbalance`
  MODIFY `accountBalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  MODIFY `b2bTransactionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  MODIFY `b2bID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `balances`
--
ALTER TABLE `balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashes`
--
ALTER TABLE `cashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolments`
--
ALTER TABLE `enrolments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entrolments`
--
ALTER TABLE `entrolments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
  MODIFY `lnmoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `millages`
--
ALTER TABLE `millages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  MODIFY `transLoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifies`
--
ALTER TABLE `notifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  MODIFY `transactionstatusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `s_t_k_requests`
--
ALTER TABLE `s_t_k_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_status`
--
ALTER TABLE `transaction_status`
  MODIFY `transactionStatusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
