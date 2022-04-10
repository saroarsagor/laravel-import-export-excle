-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 08:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_excle`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_networks`
--

CREATE TABLE `business_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `introduce_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upper_hand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_hand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_networks`
--

INSERT INTO `business_networks` (`id`, `introduce_id`, `upper_hand`, `lower_hand`, `position`, `user_id`, `joining_date`, `created_at`, `updated_at`) VALUES
(69, 'Emdadul', NULL, 'Emdadul Haque', 'Left', 'Ahasan', NULL, NULL, NULL),
(70, 'Abuusuf', NULL, 'Abu Usuf', 'Right', 'Ahsan94', NULL, NULL, NULL),
(71, 'Palaus45', NULL, 'Md Palaus Hossain', 'Left', 'Nuruzzaman42', NULL, NULL, NULL),
(72, 'Masum512', NULL, 'Masum', 'Left', 'Emdadul', NULL, NULL, NULL),
(73, 'RubelRaj001', NULL, 'Md. Tariqul Islam Rubel', 'Right', 'RubelRaj003', NULL, NULL, NULL),
(74, 'RubelRaj001', NULL, 'Md. Tariqul Islam Rubel', 'Left', 'RubelRaj002', NULL, NULL, NULL),
(75, 'Joynal001', NULL, 'Md. Abdul Motin', 'Right', 'RubelRaj001', NULL, NULL, NULL),
(76, 'Biplob404', NULL, 'Biplob', 'Right', 'Tawhidul', NULL, NULL, NULL),
(77, 'Biplob404', NULL, 'Biplob', 'Left', 'Sabina77', NULL, NULL, NULL),
(78, 'Masudbd123', NULL, 'MD.Masud Rana', 'Right', 'Nasirbd121', NULL, NULL, NULL),
(79, 'Sahinur888', NULL, 'Sahinur Islam', 'Right', 'Abuusuf', NULL, NULL, NULL),
(80, 'Sahinur888', NULL, 'Sahinur Islam', 'Left', 'Palaus45', NULL, NULL, NULL),
(81, 'Masum512', NULL, 'Masum', 'Right', 'Mamunur36', NULL, NULL, NULL),
(82, 'Johorul01', NULL, 'JMd. Johorul Islam', 'Left', 'Bablu001', NULL, NULL, NULL),
(83, 'Khokon1', NULL, 'Md. Shohel Rana Khokon', 'Left', 'Johorul01', NULL, NULL, NULL),
(84, 'Sobuz01', NULL, 'Md. Shahiidul Idlam', 'Left', 'Khokon1', NULL, NULL, NULL),
(85, 'RuhulAn02', NULL, 'Md, Ruhul Amin', 'Left', 'Sobuz01', NULL, NULL, NULL),
(86, 'RuhulA01', NULL, 'Md, Ruhul Amin', 'Right', 'RuhulAn04', NULL, NULL, NULL),
(87, 'RuhulA01', NULL, 'Md, Ruhul Amin', 'Left', 'RuhulAn03', NULL, NULL, NULL),
(88, 'RuhulA01', NULL, 'Md, Ruhul Amin', 'Left', 'RuhulAn02', NULL, NULL, NULL),
(89, 'Popy01', NULL, 'Popy Khatun', 'Left', 'RuhulA01', NULL, NULL, NULL),
(90, 'Joynal003', NULL, 'Md. Joynal Abedin', 'Left', 'Popy01', NULL, NULL, NULL),
(91, 'Hazera01', NULL, 'Most. Hazera Bibi', 'Right', 'Hazera03', NULL, NULL, NULL),
(92, 'Hazera01', NULL, 'Most. Hazera Bibi', 'Left', 'Hazera02', NULL, NULL, NULL),
(93, 'Jahanggir1', NULL, 'Md. Jahanggir Alom', 'Right', 'Jahanggir3', NULL, NULL, NULL),
(94, 'Jahanggir1', NULL, 'Md. Jahanggir Alom', 'Left', 'Jahanggir2', NULL, NULL, NULL),
(95, 'Shilpi007', NULL, 'Shilpi Akter', 'Right', 'Jahanggir1', NULL, NULL, NULL),
(96, 'Shilpi007', NULL, 'Shilpi Akter', 'Left', 'Moriom1', NULL, NULL, NULL),
(97, 'Nuralom01', NULL, 'Md. Nur Alom', 'Right', 'Shilpi007', NULL, NULL, NULL),
(98, 'Shilpi006', NULL, 'Shilpi Akter', 'Right', 'Fatema03', NULL, NULL, NULL),
(99, 'Shilpi006', NULL, 'Shilpi Akter', 'Left', 'Hazera01', NULL, NULL, NULL),
(100, 'Shilpi003', NULL, 'Shilpi Akter', 'Right', 'Nuralom01', NULL, NULL, NULL),
(101, 'Shilpi003', NULL, 'Shilpi Akter', 'Left', 'Shilpi006', NULL, NULL, NULL),
(102, 'SuzonRaj01', NULL, 'Suzon kumar', 'Right', 'SuzonRaj03', NULL, NULL, NULL),
(103, 'SuzonRaj01', NULL, 'Suzon kumar', 'Left', 'SuzonRaj02', NULL, NULL, NULL),
(104, 'Shilpi005', NULL, 'Shilpi Akter', 'Left', 'SuzonRaj01', NULL, NULL, NULL),
(105, 'Shilpi002', NULL, 'Shilpi Akter', 'Right', 'Shilpi005', NULL, NULL, NULL),
(106, 'Ali Haider', NULL, 'Md Ali Haider', 'Right', 'AliHaider03', NULL, NULL, NULL),
(107, 'Ali Haider', NULL, 'Md Ali Haider', 'Left', 'AliHaider02', NULL, NULL, NULL),
(108, 'Sadiqul03', NULL, 'Md Sadiqul islam', 'Right', 'Ali Haider', NULL, NULL, NULL),
(109, 'Sadiqul01', NULL, 'Md Sadiqul islam', 'Right', 'Sadiqul03', NULL, NULL, NULL),
(110, 'Sadiqul01', NULL, 'Md Sadiqul islam', 'Left', 'Sadiqul02', NULL, NULL, NULL),
(111, 'Salahuddin06', NULL, 'Md Salahuddin', 'Right', 'Sadiqul01', NULL, NULL, NULL),
(112, 'M.Shariful1', NULL, 'Md. Shariful Islam', 'Right', 'M.Shariful3', NULL, NULL, NULL),
(113, 'M.Shariful1', NULL, 'Md. Shariful Islam', 'Left', 'M.Shariful2', NULL, NULL, NULL),
(114, 'A.Rakib03', NULL, 'Md Abdur Rakib', 'Left', 'M.Shariful1', NULL, NULL, NULL),
(115, 'Sabinabd001', NULL, 'Mst Sabina Easmin', 'Left', 'Sayembd01', NULL, NULL, NULL),
(116, 'Shilpi002', NULL, 'Md. Gias Uddin', 'Left', 'Shilpi004', NULL, NULL, NULL),
(117, 'Gias001', NULL, 'Md.Gias Uddin', 'Left', 'Gias002', NULL, NULL, NULL),
(118, 'Amirul07', NULL, 'Md. Amirul Islam', 'Left', 'Gias001', NULL, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_02_24_155330_create_permission_tables', 1),
(10, '2022_03_26_001356_create_user_logs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `introducer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `introducer_id`, `referral_id`, `position`, `created_at`, `updated_at`) VALUES
(44, 'Hasanjsr01', 'Piashjsr07', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(45, NULL, 'Piashjsr06', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(46, NULL, 'Piashjsr05', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(47, NULL, 'Piashjsr04', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(48, NULL, 'Piashjsr03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(49, NULL, 'Piashjsr02', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(50, NULL, 'Piashjsr01', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(51, NULL, 'Khaled20', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(52, NULL, 'Hasanjsr04', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(53, NULL, 'Sakhawat03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(54, NULL, 'Sakhawat02', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(55, NULL, 'Sakhawat01', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(56, NULL, 'Alimkus03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(57, NULL, 'Alimkus02', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(58, NULL, 'Alimkus01', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(59, NULL, 'Rahmanjsr06', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(60, NULL, 'Rahmanjsr05', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(61, NULL, 'Rahmanjsr04', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(62, NULL, 'Galibjsr63', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(63, NULL, 'Galibjsr62', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(64, NULL, 'Galibjsr61', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(65, NULL, 'Dourjoypab03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(66, NULL, 'Dourjoypab02', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(67, NULL, 'Dourjoypab01', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(68, NULL, 'Sahidusjsr03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(69, NULL, 'Sahidusjsr02', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(70, NULL, 'Sahidusjsr01', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(71, NULL, 'Rahmanjsr03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(72, NULL, 'Rahmanjsr02', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(73, NULL, 'Rahmanjsr01', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(74, NULL, 'Riazuljsr07', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(75, NULL, 'Riazuljsr06', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(76, NULL, 'Riazuljsr05', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(77, NULL, 'Riazuljsr04', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(78, NULL, 'Riazuljsr03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(79, NULL, 'Riazuljsr02', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(80, NULL, 'Riazuljsr01', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(81, NULL, 'Amitjsr03', 'Left', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(82, NULL, 'Amitjsr02', 'Left', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(83, NULL, 'Amitjsr01', 'Left', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(84, NULL, 'Hasanjsr03', 'Right', '2022-04-09 06:10:29', '2022-04-09 06:10:29'),
(85, NULL, 'Hasanjsr02', 'Left', '2022-04-09 06:10:29', '2022-04-09 06:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT 0,
  `userid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tran_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_two_factor_auth` tinyint(1) NOT NULL DEFAULT 0,
  `last_active_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `type_id`, `userid`, `phone`, `email`, `photo_uri`, `verify_code`, `phone_verified_at`, `email_verified_at`, `password`, `tran_pass`, `is_active`, `is_two_factor_auth`, `last_active_at`, `remember_token`, `joining_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(105, 'null', 'Md Ahasan Ali', 4, 'Ahasan', '8801722777098', 'reza512joypur@gmail.com', NULL, '12345', NULL, NULL, '123456', '132A78', 1, 0, NULL, '14', '44561.974583333', NULL, '2022-04-10 17:26:33', NULL),
(106, 'null', 'Md Ahsan Habib', 4, 'Ahsan94', '8801739101094', 'mdshahin007888@gmail.com', NULL, '12345', NULL, NULL, '123456', '5A9B8F', 1, 0, NULL, '14', '44561.969976852', NULL, '2022-04-10 17:26:33', NULL),
(107, 'null', 'Md Nuruzzaman', 4, 'Nuruzzaman42', '8801719364642', 'mdshahin007888@gmail.com', NULL, '12345', NULL, NULL, '123456', '5320DC', 1, 0, NULL, '14', '44561.966458333', NULL, '2022-04-10 17:26:33', NULL),
(108, 'null', 'Emdadul Haque', 4, 'Emdadul', '8801740960512', 'reza512joypur@gmail.com', NULL, '12345', NULL, NULL, '123456', '11FD6B', 1, 0, NULL, '14', '44561.955277778', NULL, '2022-04-10 17:26:33', NULL),
(109, 'null', 'Md. Tariqul Islam Rubel', 4, 'RubelRaj003', '8801767497440', 'tariqul.r.071078@gmail.com', NULL, '12345', NULL, NULL, 'r12345', '314F7D', 1, 0, NULL, '14', '44561.921168981', NULL, '2022-04-10 17:26:33', NULL),
(110, 'null', 'Md. Tariqul Islam Rubel', 4, 'RubelRaj002', '8801767497440', 'tariqul.r.071078@gmail.com', NULL, '12345', NULL, NULL, 'r12345', '8416C7', 1, 0, NULL, '14', '44561.919074074', NULL, '2022-04-10 17:26:33', NULL),
(111, 'null', 'Md. Tariqul Islam Rubel', 4, 'RubelRaj001', '8801767497440', 'tariqul.r.071078@gmail.com', NULL, '12345', NULL, NULL, 'r12345', '8AAD3B', 1, 0, NULL, '14', '44561.916805556', NULL, '2022-04-10 17:26:33', NULL),
(112, 'null', 'Tawhidul86', 4, 'Tawhidul', '8801740667586', 'bdbipop404@gmail.com', NULL, '12345', NULL, NULL, '123456', '98FC58', 1, 0, NULL, '14', '44561.899282407', NULL, '2022-04-10 17:26:33', NULL),
(113, 'null', 'Mst Sabina Yesmin', 4, 'Sabina77', '8801845602577', 'bdbipop404@gmail.com', NULL, '12345', NULL, NULL, '123456', '92B5F9', 1, 0, NULL, '14', '44561.89787037', NULL, '2022-04-10 17:26:33', NULL),
(114, 'null', 'MD.Nasir Gazi', 4, 'Nasirbd121', '8801931595703', 'taherabl228@gmail.com', NULL, '12345', NULL, NULL, '595703', '307089', 1, 0, NULL, '14', '44561.83400463', NULL, '2022-04-10 17:26:33', NULL),
(115, 'null', 'Abu Usuf', 4, 'Abuusuf', '8801723118512', 'mdshahin007888@gmail.com', NULL, '12345', NULL, NULL, '123456', '278160', 1, 0, NULL, '14', '44561.827418981', NULL, '2022-04-10 17:26:33', NULL),
(116, 'null', 'Md Palaus Hossain', 4, 'Palaus45', '8801722231645', 'mdshahin007888@gmail.com', NULL, '12345', NULL, NULL, '123456', '660EE4', 1, 0, NULL, '14', '44561.826076389', NULL, '2022-04-10 17:26:33', NULL),
(117, 'null', 'Mamunur Roshid', 4, 'Mamunur36', '8801857793336', 'm.roshid2017@gmail.com', NULL, '12345', NULL, NULL, 'Mamunur36', '70A5E9', 1, 0, NULL, '14', '44561.821898148', NULL, '2022-04-10 17:26:33', NULL),
(118, 'null', 'Md., Bablu', 4, 'Bablu001', '8801722721437', 'ruhul.fi2014@gmail.com', NULL, '12345', NULL, NULL, 'b123456', 'EEB4BB', 1, 0, NULL, '14', '44561.810543981', NULL, '2022-04-10 17:26:33', NULL),
(119, 'null', 'JMd. Johorul Islam', 4, 'Johorul01', '8801716385995', 'ruhul.fi2014@gmail.com', NULL, '12345', NULL, NULL, 'j12345', '7BB8F0', 1, 0, NULL, '14', '44561.807430556', NULL, '2022-04-10 17:26:33', NULL),
(120, 'null', 'Md. Shohel Rana Khokon', 4, 'Khokon1', '8801761855338', 'ruhul.fi2014@gmail.com', NULL, '12345', NULL, NULL, 'k12345', '3AAA92', 1, 0, NULL, '14', '44561.80494213', NULL, '2022-04-10 17:26:33', NULL),
(121, 'null', 'Md. Shahiidul Idlam', 4, 'Sobuz01', '8801717191710', 'sobuj.zj@gmail.com', NULL, '12345', NULL, NULL, 's12345', '476733', 1, 0, NULL, '14', '44561.802233796', NULL, '2022-04-10 17:26:33', NULL),
(122, 'null', 'Md, Ruhul Amin', 4, 'RuhulAn04', '8801722721437', 'ruhul.fi2014@gmail.com', NULL, '12345', NULL, NULL, 'r12345', '50FCF2', 1, 0, NULL, '14', '44561.796111111', NULL, '2022-04-10 17:26:33', NULL),
(123, 'null', 'Md, Ruhul Amin', 4, 'RuhulAn03', '8801722721437', 'ruhul.fi2014@gmail.com', NULL, '12345', NULL, NULL, 'r12345', '4432FF', 1, 0, NULL, '14', '44561.768773148', NULL, '2022-04-10 17:26:33', NULL),
(124, 'null', 'Md, Ruhul Amin', 4, 'RuhulAn02', '8801722721437', 'ruhul.fi2014@gmail.com', NULL, '12345', NULL, NULL, 'r12345', '5B8567', 1, 0, NULL, '14', '44561.767997685', NULL, '2022-04-10 17:26:33', NULL),
(125, 'null', 'Md, Ruhul Amin', 4, 'RuhulA01', '8801722721437', 'ruhul.fi2014@gmail.com', NULL, '12345', NULL, NULL, 'r12345', '529EE1', 1, 0, NULL, '14', '44561.765497685', NULL, '2022-04-10 17:26:33', NULL),
(126, 'null', 'Popy Khatun', 4, 'Popy01', '8801791770444', 'nesaashrafun540@gmail.com', NULL, '12345', NULL, NULL, 'p12345', '89AE61', 1, 0, NULL, '14', '44561.760358796', NULL, '2022-04-10 17:26:33', NULL),
(127, 'null', 'Most. Hazera Bibi', 4, 'Hazera03', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'h12345', 'BC1C25', 1, 0, NULL, '14', '44561.61380787', NULL, '2022-04-10 17:26:33', NULL),
(128, 'null', 'Most. Hazera Bibi', 4, 'Hazera02', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'h12345', '128481', 1, 0, NULL, '14', '44561.61162037', NULL, '2022-04-10 17:26:33', NULL),
(129, 'null', 'Md. Jahanggir Alom', 4, 'Jahanggir3', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'j12345', '86940000', 1, 0, NULL, '14', '44561.604641204', NULL, '2022-04-10 17:26:33', NULL),
(130, 'null', 'Md. Jahanggir Alom', 4, 'Jahanggir2', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'j12345', 'D3AD93', 1, 0, NULL, '14', '44561.604143519', NULL, '2022-04-10 17:26:33', NULL),
(131, 'null', 'Md. Jahanggir Alom', 4, 'Jahanggir1', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'j12345', 'DEF6CD', 1, 0, NULL, '14', '44561.603148148', NULL, '2022-04-10 17:26:33', NULL),
(132, 'null', 'Mst. Moriom Bibi', 4, 'Moriom1', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'm12345', '2CD628', 1, 0, NULL, '14', '44561.600659722', NULL, '2022-04-10 17:26:33', NULL),
(133, 'null', 'Shilpi Akter', 4, 'Shilpi007', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 's12345', '03F03C', 1, 0, NULL, '14', '44561.592175926', NULL, '2022-04-10 17:26:33', NULL),
(134, 'null', 'Mst. Fatema Bibi', 4, 'Fatema03', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'f12345', '23D2A7', 1, 0, NULL, '14', '44561.589918981', NULL, '2022-04-10 17:26:33', NULL),
(135, 'null', 'Most. Hazera Bibi', 4, 'Hazera01', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'h12345', '7FFC2C', 1, 0, NULL, '14', '44561.583402778', NULL, '2022-04-10 17:26:33', NULL),
(136, 'null', 'Md. Nur Alom', 4, 'Nuralom01', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 'n12345', '1D3D64', 1, 0, NULL, '14', '44561.574409722', NULL, '2022-04-10 17:26:33', NULL),
(137, 'null', 'Shilpi Akter', 4, 'Shilpi006', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 's12345', 'CB3D4B', 1, 0, NULL, '14', '44561.570902778', NULL, '2022-04-10 17:26:33', NULL),
(138, 'null', 'Suzon kumar', 4, 'SuzonRaj03', '8801744351816', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 's12345', 'E06498', 1, 0, NULL, '14', '44561.568449074', NULL, '2022-04-10 17:26:33', NULL),
(139, 'null', 'Suzon kumar', 4, 'SuzonRaj02', '8801744351618', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 's12345', '62E559', 1, 0, NULL, '14', '44561.56556713', NULL, '2022-04-10 17:26:33', NULL),
(140, 'null', 'Suzon kumar', 4, 'SuzonRaj01', '8801744351618', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 's12345', '80082E', 1, 0, NULL, '14', '44561.561805556', NULL, '2022-04-10 17:26:33', NULL),
(141, 'null', 'Shilpi Akter', 4, 'Shilpi005', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 's12345', 'FE06AA', 1, 0, NULL, '14', '44561.558032407', NULL, '2022-04-10 17:26:33', NULL),
(142, 'null', 'Md Ali Haider', 4, 'AliHaider03', '8801728756965', 'shahjamal9171@gmail.com', NULL, '12345', NULL, NULL, '123456', '9E3403', 1, 0, NULL, '14', '44561.342881944', NULL, '2022-04-10 17:26:33', NULL),
(143, 'null', 'Md Ali Haider', 4, 'AliHaider02', '8801728756965', 'shahjamal9171@gmail.com', NULL, '12345', NULL, NULL, '123456', '427789', 1, 0, NULL, '14', '44561.342314815', NULL, '2022-04-10 17:26:33', NULL),
(144, 'null', 'Md Ali Haider', 4, 'Ali Haider', '8801728756965', 'shahjamal9171@gmail.com', NULL, '12345', NULL, NULL, '123456', '575F49', 1, 0, NULL, '14', '44561.338761574', NULL, '2022-04-10 17:26:33', NULL),
(145, 'null', 'Md Sadiqul islam', 4, 'Sadiqul03', '8801799180056', 'shahjamal9171@gmail.com', NULL, '12345', NULL, NULL, '123456', '0F7B17', 1, 0, NULL, '14', '44561.336539352', NULL, '2022-04-10 17:26:33', NULL),
(146, 'null', 'Md Sadiqul islam', 4, 'Sadiqul02', '8801799180056', 'shahjamal9171@gmail.com', NULL, '12345', NULL, NULL, '123456', '2B70A1', 1, 0, NULL, '14', '44561.333958333', NULL, '2022-04-10 17:26:33', NULL),
(147, 'null', 'Md Sadiqul islam', 4, 'Sadiqul01', '8801799180056', 'shahjamal9171@gmail.com', NULL, '12345', NULL, NULL, '123456', '69499F', 1, 0, NULL, '14', '44561.329479167', NULL, '2022-04-10 17:26:33', NULL),
(148, 'null', 'Md. Shariful Islam', 4, 'M.Shariful3', '8801773132820', 'md6279273@gmail.com', NULL, '12345', NULL, NULL, '123456', '3B87AE', 1, 0, NULL, '14', '44561.269826389', NULL, '2022-04-10 17:26:33', NULL),
(149, 'null', 'Md. Shariful Islam', 4, 'M.Shariful2', '8801773132820', 'md6279273@gmail.com', NULL, '12345', NULL, NULL, '123456', '208C16', 1, 0, NULL, '14', '44561.269618056', NULL, '2022-04-10 17:26:33', NULL),
(150, 'null', 'Md. Shariful Islam', 4, 'M.Shariful1', '8801773132820', 'md6279273@gmail.com', NULL, '12345', NULL, NULL, '123456', '11EDFC', 1, 0, NULL, '14', '44561.269224537', NULL, '2022-04-10 17:26:33', NULL),
(151, 'null', 'Md Sayem', 4, 'Sayembd01', '8801712748578', 'ssabinaeasmin1987@gmail.com', NULL, '12345', NULL, NULL, 'Sayem123', '57BB52', 1, 0, NULL, '14', '44561.227777778', NULL, '2022-04-10 17:26:33', NULL),
(152, 'null', 'Shilpi Akter', 4, 'Shilpi004', '8801785662650', 'aktershilpi475@gmail.com', NULL, '12345', NULL, NULL, 's12345', 'C59AB7', 1, 0, NULL, '14', '44561.152060185', NULL, '2022-04-10 17:26:33', NULL),
(153, 'null', 'Md. Gias Uddin', 4, 'Gias002', '8801733118147', 'mdgiasuddin01011957@gmail.com', NULL, '12345', NULL, NULL, 'g12345', 'C5FE5B', 1, 0, NULL, '14', '44561.005752315', NULL, '2022-04-10 17:26:33', NULL),
(154, 'null', 'Md.Gias Uddin', 4, 'Gias001', '8801733118147', 'mdgiasuddin01011957@gmail.com', NULL, '12345', NULL, NULL, 'g12345', '0665F5', 1, 0, NULL, '14', '44561.003252315', NULL, '2022-04-10 17:26:33', NULL),
(155, 'null', 'ghjhg', 4, 'ghjhg', '65756', 'fghj', NULL, '12345', NULL, NULL, 'ghjhg', 'ghjgh', 1, 0, NULL, '14', 'gfhgj', NULL, '2022-04-10 17:26:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleman_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_networks`
--
ALTER TABLE `business_networks`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_networks`
--
ALTER TABLE `business_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
