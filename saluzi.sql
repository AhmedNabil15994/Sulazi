-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2020 at 01:00 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hatly`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `type` int(11) NOT NULL COMMENT ' 1 > User || 2 > Shop'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `text`, `street`, `city`, `home`, `postal_code`, `country`, `lat`, `lng`, `type`) VALUES
(1, 'Haackzeile 1<br>13589 Berlin<br>Germany', 'Haackzeile', 'Berlin', '1', '13589', 'Germany', '52.55179', '13.1682', 1),
(2, 'Landsberger Allee 11<br>10249 Berlin<br>Germany', 'Landsberger Allee', 'Berlin', '11', '10249', 'Germany', '52.523466', '13.4350873', 1),
(3, 'Landsberger Allee 12<br>10249 Berlin<br>Germany', 'Landsberger Allee', 'Berlin', '12', '10249', 'Germany', '52.5230932', '13.4355764', 1),
(4, 'Landsberger Allee 23<br>10249 Berlin<br>Germany', 'Landsberger Allee', 'Berlin', '23', '10249', 'Germany', '52.5238484', '13.4385343', 2),
(5, 'Lechstraße 20<br>86899 BY<br>Germany', 'Lechstraße', 'BY', '20', '86899', 'Germany', '48.0540812', '10.8761296', 2),
(6, 'Western Rd 2-20<br>NW10 7LW England<br>United Kingdom', 'Western Rd', 'England', '2-20', 'NW10 7LW', 'United Kingdom', '51.5285728', '-0.2696693', 2),
(7, ' <br> Adana<br>Turkey', '', 'Adana', '', '', 'Turkey', '36.9914194', '35.3308285', 2),
(8, 'Haackzeile 12<br>13589 Berlin<br>Germany', 'Haackzeile', 'Berlin', '12', '13589', 'Germany', '52.552178', '13.1661124', 1);

-- --------------------------------------------------------

--
-- Table structure for table `api_auth`
--

CREATE TABLE `api_auth` (
  `id` int(11) NOT NULL,
  `auth_token` varchar(450) NOT NULL,
  `auth_expire` tinyint(1) NOT NULL DEFAULT '0',
  `api_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `api_key` varchar(255) DEFAULT NULL,
  `api_value` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `api_key`, `api_value`, `created_at`, `updated_at`, `status`) VALUES
(1, 'web', 'f450c1e62a74ad454a4a1eb86abe2d2d', NULL, NULL, 1),
(2, 'android', 'a01d1c7f13938203f3fbd26fa8850025', NULL, NULL, 1),
(3, 'IOS', 'bf07179e13b6b0e5fd003ca8f629c914', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Test', 'test', 1, '2020-03-08 13:29:38', 1, '2020-03-08 13:30:16', 1, '2020-03-08 13:30:22'),
(2, 'Foods', NULL, 1, '2020-03-08 13:33:22', NULL, NULL, NULL, NULL),
(3, 'Drinks', NULL, 1, '2020-03-08 13:33:27', NULL, NULL, NULL, NULL),
(4, 'Others', NULL, 1, '2020-03-08 13:33:32', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `chat_head_id` int(11) NOT NULL,
  `message_type` int(11) NOT NULL COMMENT '0 > Text || 1 > File || 2 > Image',
  `message` text NOT NULL,
  `file_url` text,
  `img_width` int(11) NOT NULL,
  `img_height` int(11) NOT NULL,
  `read` int(11) NOT NULL,
  `created_at` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chat_head_id`, `message_type`, `message`, `file_url`, `img_width`, `img_height`, `read`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 1, 0, '1', NULL, 0, 0, 1, '1583707991', 1, NULL, NULL, NULL, NULL),
(2, 1, 0, 'a', NULL, 0, 0, 0, '1583708002', 13, NULL, NULL, NULL, NULL),
(3, 2, 0, '1', NULL, 0, 0, 1, '1583708037', 1, NULL, NULL, NULL, NULL),
(4, 2, 0, '1', NULL, 0, 0, 1, '1583708044', 1, NULL, NULL, NULL, NULL),
(5, 2, 0, 'asdasd', NULL, 0, 0, 1, '1583708059', 1, NULL, NULL, NULL, NULL),
(6, 2, 0, 'asdasda', NULL, 0, 0, 1, '1583708060', 1, NULL, NULL, NULL, NULL),
(7, 2, 0, 'asdasds', NULL, 0, 0, 1, '1583708061', 1, NULL, NULL, NULL, NULL),
(8, 2, 0, '1', NULL, 0, 0, 1, '1583708096', 1, NULL, NULL, NULL, NULL),
(9, 2, 0, 'asdasd', NULL, 0, 0, 1, '1583708126', 1, NULL, NULL, NULL, NULL),
(10, 2, 0, 'asdasdas', NULL, 0, 0, 1, '1583708127', 1, NULL, NULL, NULL, NULL),
(11, 2, 0, 'asdasd', NULL, 0, 0, 1, '1583708128', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_heads`
--

CREATE TABLE `chat_heads` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat_heads`
--

INSERT INTO `chat_heads` (`id`, `sender_id`, `receiver_id`, `created_at`) VALUES
(1, 1, 13, '1583707985'),
(2, 1, 1, '1583708008');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_key` varchar(800) DEFAULT NULL,
  `auth_id` int(11) DEFAULT NULL,
  `version` double NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `permissions` text,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `title`, `permissions`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Super Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Driver', 'a:8:{i:0;s:11:\"list-groups\";i:1;s:10:\"edit-group\";i:2;s:9:\"add-group\";i:3;s:12:\"delete-group\";i:4;s:14:\"list-variables\";i:5;s:13:\"edit-variable\";i:6;s:12:\"add-variable\";i:7;s:15:\"delete-variable\";}', 1, '2020-03-07 15:47:40', 1, '2020-03-07 15:47:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `number`) VALUES
(1, '1069273925'),
(2, '123123123'),
(3, '1231231232'),
(4, '01558651994'),
(5, '0123125123123'),
(6, '12395123'),
(7, '01069273925'),
(8, '123124125123');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `display_name` varchar(300) DEFAULT NULL,
  `phone_id` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `group_id` varchar(255) NOT NULL,
  `extra_rules` text,
  `address_id` int(11) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL COMMENT '1 > Male | 2 > Female',
  `birth_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `display_name`, `phone_id`, `image`, `group_id`, `extra_rules`, `address_id`, `gender`, `birth_date`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 1, 'Ahmed', 'Nabil', 'Ahmed Nabil', 4, 'hatly-166222766820200308021728PM.png', '1', NULL, 1, 1, '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 7, 'Ahmed', 'Driver', 'Ahmed Driver', 1, NULL, '2', 'a:5:{i:0;s:10:\"list-users\";i:1;s:9:\"edit-user\";i:2;s:8:\"add-user\";i:3;s:11:\"delete-user\";i:4;s:18:\"change-user-status\";}', 1, 1, '2020-03-07', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 12, 'Test', 'Test10', 'Test Test10', 3, 'hatly-126132341320200307062533PM.png', '2', 'a:5:{i:0;s:10:\"list-users\";i:1;s:9:\"edit-user\";i:2;s:8:\"add-user\";i:3;s:11:\"delete-user\";i:4;s:18:\"change-user-status\";}', 3, 2, '2020-03-18', NULL, NULL, NULL, NULL, 1, '2020-03-08 14:23:18'),
(8, 13, 'Admin', '', 'Admin', 8, NULL, '1', NULL, 8, 1, '2020-03-05', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `phone_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `address_id`, `phone_id`, `category_id`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Moga', 4, 5, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Tokyo', 5, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'etestasd', 6, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `facebook_img` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `google_img` varchar(255) DEFAULT NULL,
  `twitter_id` varchar(255) DEFAULT NULL,
  `twitter_img` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `code_verified` int(11) DEFAULT NULL,
  `code_expire` datetime DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `created_by` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(5) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(5) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `facebook_id`, `facebook_img`, `google_id`, `google_img`, `twitter_id`, `twitter_img`, `last_login`, `code`, `code_verified`, `code_expire`, `is_active`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`) VALUES
(1, 'Ahmed Nabil', 'admin@admin.com', '$2y$10$caE8gyd1bFxmNjMwRKeqpu.1ug7H/K4NepG5PCHPBl9n8emfWn8zu', 'dlSvpXTgH422sHOxopaCorRwfCd6TJaUkSCBvM5362lcPBgkdwHDOd9yNtnG', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-08 22:55:37', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Ahmed Driver', 'momn_20@yahoo.com', '$2y$10$bWH2mjRZNLlIUNZZuJS0ZOcnRx39MK55MEMcHhvrK2mmo.CVaEhUW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-08 22:32:20', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Test Test10', 'resadasd@yeahoo.com1', '$2y$10$oX9awUBoAetXhjVGNgURr.4rqCSP2jdJCegbcYWHOZ5fGnzUeJZXC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-07 18:26:51', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, '2020-03-08 14:23:18'),
(13, 'Admin', 'admin2@admin.com', '$2y$10$0k2y7qj53oMWarSGCdmMMexOE1Z0kAhbXMoBowgOQbH3Mvn7mcFS2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-08 22:53:22', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

CREATE TABLE `variables` (
  `id` int(11) NOT NULL,
  `var_key` varchar(255) NOT NULL,
  `var_value` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`id`, `var_key`, `var_value`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(20, 'PAGINATION', '10', '2020-02-01 00:00:00', 1, NULL, NULL, NULL, NULL),
(21, 'PUSHER_APP_ID', '960145', '2020-02-12 19:54:37', 1, NULL, NULL, NULL, NULL),
(22, 'PUSHER_APP_KEY', '80d72d856505b26cdd66', '2020-02-12 19:54:47', 1, NULL, NULL, NULL, NULL),
(23, 'PUSHER_APP_SECRET', '95b607a8213a3bd0f975', '2020-02-12 19:55:02', 1, NULL, NULL, NULL, NULL),
(24, 'CLUSTER', 'eu', '2020-02-12 19:56:02', 1, NULL, NULL, NULL, NULL),
(25, 'FCM_KEY', 'AAAA4-3XX0c:APA91bHgjRi1UjlM-SxMZ5Rs6PCdxi53bhXgSNDKRpBuIpkm9DxijBNpHShta82szDO7dgMC81GNQg-j5VQop0WRwDCnP8_Dr031gGUTuNgfmkHbWC6A-0qEsvF2VT74co6_gtBH5vc4', '2020-02-15 21:16:11', 1, NULL, NULL, NULL, NULL),
(26, 'NEXMO_KEY', '16b224a2', '2020-03-06 00:00:00', 1, NULL, NULL, NULL, NULL),
(27, 'NEXMO_SECRET', '64KKNOR3WJOTd0K8', '2020-03-06 00:00:00', 1, NULL, NULL, NULL, NULL),
(29, 'GOOGLE_MAPS', 'AIzaSyBKbJsGIea4zN3LbwdZ7o1eDt2BttMnTCc', '2020-03-07 16:16:08', 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_auth`
--
ALTER TABLE `api_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_heads`
--
ALTER TABLE `chat_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `api_auth`
--
ALTER TABLE `api_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `chat_heads`
--
ALTER TABLE `chat_heads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `variables`
--
ALTER TABLE `variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
