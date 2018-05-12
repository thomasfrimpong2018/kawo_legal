-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 10:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kawolegal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `startup_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2018_05_09_151813_create_admin_table', 1),
(4, '2018_05_09_152256_create_comments_table', 1),
(5, '2018_05_09_152419_create_start_ups_table', 1);

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
-- Table structure for table `start_ups`
--

CREATE TABLE `start_ups` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `founder_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `twitter_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `linkedin_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `founder_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `facebook_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `twitter_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `linkedin_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `founder_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `facebook_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `twitter_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `linkedin_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `founder_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `facebook_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `twitter_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `linkedin_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `founder_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `facebook_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `twitter_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `linkedin_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unapproved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `start_ups`
--

INSERT INTO `start_ups` (`id`, `user_id`, `fullname`, `email`, `password`, `business_name`, `business_location`, `business_website`, `phone`, `facebook`, `twitter`, `linkedin`, `industry`, `description`, `business_logo`, `founder_1`, `facebook_1`, `twitter_1`, `linkedin_1`, `founder_2`, `facebook_2`, `twitter_2`, `linkedin_2`, `founder_3`, `facebook_3`, `twitter_3`, `linkedin_3`, `founder_4`, `facebook_4`, `twitter_4`, `linkedin_4`, `founder_5`, `facebook_5`, `twitter_5`, `linkedin_5`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'kwaku ananse', 'ananse@gmail.com', 'e35cf7b66449df565f93c607d5a81d09', 'ananse ventures', 'Accra newtown', 'ananse.com', '505469577', NULL, NULL, NULL, 'Agric/food', '<p>agtin sonfoa distin</p>', 'download (3)_1526113714.jpg', 'kwaku ananse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unapproved', '2018-05-11 07:42:04', '2018-05-12 07:28:34'),
(2, 1, 'kojo nkansah', 'nkansah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'asaase  aban limited', 'mallam', 'asaase.com', '0245033873', NULL, NULL, NULL, 'land economy', '<p>this is all about the assase aban distin</p>', 'vuejs_1526063997.png', 'kojo nkansah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unapproved', '2018-05-11 17:39:57', '2018-05-11 17:39:57'),
(3, 1, 'kojo nkansah', 'nkansah@gmail.com', 'e35cf7b66449df565f93c607d5a81d09', 'asempa  ventures', 'madina estate', 'asem.com', '0505469577', NULL, NULL, NULL, 'trade/finance', '<p>about the trade distin</p>', 'Octocat_1526113505.png', 'kojo nkansah', NULL, NULL, NULL, 'kwaku ananse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unapproved', '2018-05-11 17:43:19', '2018-05-12 07:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kojo nkansah', 'nkansah@gmail.com', '$2y$10$SE.DY5h3hA0Rvg3Bk83pnusWPamNxxVB6XsttfdHSeDbP4NCn0sWW', 'RSsQCCgx7ZZt2o5ZBKTjN6VX4m7OfFkMCK7plsSy0CVIQo7yUrn9UfJfyKyf', '2018-05-10 08:51:18', '2018-05-10 08:51:18'),
(2, 'tamela mann', 'mann@gmail.com', '$2y$10$60I0MK6Zm8PLmrodAbBrIe0HJi3MCXXxOIx4U0Hm/FQDmk9lNnnyO', '6Ph7jYQ9TX9x9w5j1wI07auehfe0JFjIBi0l8XU9QWBt8RT1e84e8SEf6dyf', '2018-05-10 09:07:16', '2018-05-10 09:07:16'),
(3, 'ben carson', 'carson@gmail.com', '$2y$10$P7VfBU2wC2ze3Swy6ZgLvOconuD1a1xm4k.EOfFrqJg6b.tyjmVFO', '7uSp6rZz84XeQghOusp6ep69iU1GjZdociMDNfmlrljkxWTIwmOx6iCItJt2', '2018-05-10 09:22:12', '2018-05-10 09:22:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `start_ups`
--
ALTER TABLE `start_ups`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `start_ups`
--
ALTER TABLE `start_ups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
