-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 10:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `feature` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `body`, `image`, `category_id`, `user_id`, `status`, `feature`, `created_at`, `updated_at`) VALUES
(1, 'Modi maxime hic quis', 'dfdf-fdfd', 'Quia esse impedit o', 'Anim omnis impedit, .&nbsp;', 'upload/blog-image/1868036532.png', 1, 1, 1, NULL, '2023-03-03 08:21:26', '2023-03-03 08:21:26'),
(2, 'Maiores corrupti ul', 'tfgfg-54', 'Enim eum est nostrum', 'Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi. Adipisicing anim odi.&nbsp;', 'upload/blog-image/784292447.png', 1, 1, 1, NULL, '2023-03-03 08:24:24', '2023-03-03 08:24:24'),
(3, 'Facere et in molesti', 'cvgv-5', 'Illo eiusmod aute qu', 'Deleniti rerum quia .&nbsp;', 'upload/blog-image/1072099063.png', 1, 1, 1, NULL, '2023-03-03 10:30:23', '2023-03-03 10:30:23'),
(4, 'Amet lorem proident', 'fgghh-45', 'Aut veritatis enim d', 'Ut accusamus quo vol. tui kor', 'upload/blog-image/135172545.png', 1, 1, 1, 1, '2023-03-03 10:44:27', '2023-03-03 10:44:27'),
(5, 'dsfsd', 'fdfdf-gfgf5', 'sdfsdf', '<p>sdfsd</p>', 'upload/blog-image/47671536.png', 1, 1, 1, 1, '2023-03-03 10:45:33', '2023-03-03 10:45:33'),
(6, 'Optio rerum atque v', 'fffdgf-fgf', 'Deleniti obcaecati q', 'Ut ex ut at assumend.&nbsp;', 'upload/blog-image/2108210837.jpg', 1, 1, 1, 1, '2023-03-04 04:09:34', '2023-03-04 04:09:34'),
(7, 'Qui laudantium maxi', 'ffgf-55', 'Sunt cum consequat', 'Distinctio. Ad labor.&nbsp;', 'upload/blog-image/90395079.jpg', 1, 1, 1, 1, '2023-03-04 04:11:12', '2023-03-04 04:11:12'),
(9, 'Sunt quo ut qui est', 'dd-fd5', 'Nemo excepteur aperi', 'Culpa dolor dolore f.&nbsp;', 'upload/blog-image/1600276973.jpg', 1, 1, 1, 1, '2023-03-04 04:54:59', '2023-03-04 04:54:59'),
(10, 'Aliquip beatae delen', 'fgg-dfdf-21', 'Repudiandae aut exer', 'Proident, provident.&nbsp;', 'upload/blog-image/1349148605.jpg', 2, 1, 1, 0, '2023-03-04 05:16:01', '2023-03-04 05:18:55'),
(11, 'Nobis ut et accusamu', 'gfg-fgfg', 'Nihil eum duis quam', 'Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum. Dolor temporibus eum.&nbsp;', 'upload/blog-image/469661259.jpg', 2, 1, 1, 1, '2023-03-04 08:43:31', '2023-03-04 08:43:31'),
(12, 'Aliquid cillum nemo', 'sdsd-sdddf', 'Voluptatem Ea delec', 'Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.Nam autem ea non vol.', 'upload/blog-image/892474031.jpg', 1, 1, 1, 1, '2023-03-04 08:44:53', '2023-03-04 08:44:53'),
(13, 'Quisquam dolore amet', 'quisquam-dolore-amet', 'Duis perspiciatis p', 'Dolore velit eius mo.&nbsp;', 'upload/blog-image/1162485559.jpg', 3, 1, 1, 0, '2023-03-05 06:16:51', '2023-03-05 06:16:51'),
(14, 'Quasi quibusdam aliq', 'quasi-quibusdam-aliq', 'Necessitatibus minim', 'Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.', 'upload/blog-image/1268316577.jpg', 3, 1, 1, 0, '2023-03-06 02:41:39', '2023-03-06 02:41:39'),
(15, 'Elit totam ipsam no', 'elit-totam-ipsam-no', 'Quaerat natus qui co', 'Tempor pariatur? Dol.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.', 'upload/blog-image/475233621.jpg', 3, 1, 1, 0, '2023-03-06 02:42:04', '2023-03-06 02:42:04'),
(16, 'Voluptatibus harum n', 'voluptatibus-harum-n', 'Quidem aperiam susci', 'Ad eos eaque quae no.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.', 'upload/blog-image/768939337.jpg', 1, 1, 1, 0, '2023-03-06 02:42:26', '2023-03-06 02:42:26'),
(17, 'Esse tempor est enim', 'esse-tempor-est-enim', 'Debitis id laborum i', 'Similique voluptatem.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.Et sapiente non quod.', 'upload/blog-image/280726316.jpg', 1, 1, 1, 1, '2023-03-06 02:43:37', '2023-03-06 02:43:37'),
(18, 'Nam debitis non temp', 'nam-debitis-non-temp', 'Voluptatum et magni', '<p>Et sapiente non quod.<span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><span style=\"font-size: 1rem;\">Et sapiente non quod.</span><br></p>', 'upload/blog-image/583762305.jpg', 3, 1, 1, 1, '2023-03-06 02:44:28', '2023-03-06 02:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=published, 0=unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Music', 'music', 'hello this is simple description', 1, '2023-03-03 08:17:04', '2023-03-03 08:17:04'),
(2, 'Uncategorized', 'uncategorized', NULL, 1, '2023-03-04 05:01:36', '2023-03-04 05:01:36'),
(3, 'plugins', 'plugins', NULL, 1, '2023-03-04 05:14:09', '2023-03-04 05:14:09');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_02_102501_create_categories_table', 1),
(6, '2023_03_03_024822_create_blogs_table', 1),
(7, '2023_03_07_032454_create_settings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `footer`, `description`, `google`, `author`, `keywords`, `tags`, `url`, `website_logo`, `fav_icon`, `created_at`, `updated_at`) VALUES
(1, 'ThusBlog', 'All Rights Reserved Powered by websiteowner', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'google-site-verification', 'author name', 'tags, model, music, video, upload, etc', NULL, 'https://thusblog.com/', 'upload/website/1597407428.png', 'upload/website/920830639.png', NULL, '2023-03-07 02:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Durjay Ghosh', 'admin@gmail.com', NULL, '$2a$12$3tvwTw2KG.XwN0H.5Qjwi.ucLyarkVTZ5hzIGU1prJQo13iE05da6', 'uploads/admin/image/770933128.jpg', 'Hello, I just a ordinary bloger', NULL, '2023-03-03 08:15:30', '2023-03-06 21:13:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
