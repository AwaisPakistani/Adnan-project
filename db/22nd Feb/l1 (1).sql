-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 07:16 PM
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
-- Database: `l1`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_settings`
--

CREATE TABLE `advance_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advance_settings`
--

INSERT INTO `advance_settings` (`id`, `main_color`, `basic_color`, `button_color`, `footer_copyright`, `created_at`, `updated_at`) VALUES
(1, '#ff8000', '#fcf7f7', '#ff8000', '© 2020 Copyright: shukaar.com', '2023-02-06 21:21:51', '2023-02-19 13:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Social Science', 'show', '2023-01-30 04:56:16', '2023-02-22 07:56:35'),
(3, 'Phsycology', 'show', '2023-02-02 05:02:20', '2023-02-22 07:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `map`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.1356592924167!2d73.09691491440357!3d33.6536466460786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfebcf73fff37d%3A0xa9924240526b768d!2sInsari%20Home!5e0!3m2!1sen!2s!4v1675568364129!5m2!1sen!2s', '[\"address1\",\"address\",\"address2\",null]', '[\"anjumawais296@gmail.com\",\"mail@gmail.com\",\"mail2@mail.com\",null]', '[\"67567676777\",\"78678786668\",\"57656786786678\",null]', '2023-02-04 23:41:36', '2023-02-07 23:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `current_issues`
--

CREATE TABLE `current_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `frontuser_id` bigint(20) UNSIGNED NOT NULL,
  `journal_id` bigint(20) UNSIGNED NOT NULL,
  `journal_volume_id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_issues`
--

INSERT INTO `current_issues` (`id`, `frontuser_id`, `journal_id`, `journal_volume_id`, `issue_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 7, 5, 6, 9, NULL, '2023-02-16 06:39:45', '2023-02-16 06:42:46');

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
-- Table structure for table `frontusers`
--

CREATE TABLE `frontusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontusers`
--

INSERT INTO `frontusers` (`id`, `first_name`, `last_name`, `image`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chief', 'Adnan Khan', 'images/front/chiefs/1iWDNLiTak8JxI1mYP6AFss7HcNBu4uVnUSzrdPa.png', 'adnan@gmail.com', '$2y$10$GQx8v4Lv0NSOxZyEzjYPA.xKAbmiJSUvk88.JH73.y.09iFcat3WW', 1, '2023-02-09 04:50:13', '2023-02-09 06:34:18'),
(7, 'chief', 'Amir', 'images/front/chiefs/87rUqHR84DbiSxjucDLWJsDuWn4ybGl0WZ6Oeq6Q.png', 'amir@gmail.com', '$2y$10$3Rn9nqYr.ivvYB1nXzaFduxnpaHOmRUTncr6ViWBN/04cUnlChFFa', 1, '2023-02-14 02:41:26', '2023-02-18 23:18:05'),
(14, 'Chief', 'Anjum', 'images/front/chiefs/KXcGb9beVb5b9ldchqaBS6cTG9X4FyEbQ6NHdRCr.png', 'anjum@gmail.com', '$2y$10$g4TnXQkaseivm2YAC8/hJOly5NwjpHL3iI89hX7rCjbqCkNFAvGO6', 1, '2023-02-20 01:18:19', '2023-02-20 01:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `front_authors`
--

CREATE TABLE `front_authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `frontuser_id` bigint(20) UNSIGNED NOT NULL,
  `highest_qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefered_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `imageable_type`, `imageable_id`, `created_at`, `updated_at`) VALUES
(3, 'images/admin/admin_profile/lLU2FX57OvNxr6lfbdMOKGZhsWJCbWA5SxuvOU6x.jpg', 'App\\Models\\User', 26, '2023-01-25 04:17:52', '2023-01-25 04:17:52'),
(4, 'images/admin/admin_profile/n5PxXz7eaJHNTKFUcvW7DSKn3aXhOav6vuRkAAxP.jpg', 'App\\Models\\User', 27, '2023-01-25 04:20:14', '2023-01-25 04:20:14'),
(5, 'images/admin/admin_profile/Cn3NjhQfI4YAdIeFaFCQIMr69mwQqp1V3M390PNp.png', 'App\\Models\\User', 28, '2023-01-25 04:21:01', '2023-01-25 04:21:01'),
(6, 'images/admin/admin_profile/WO5KlKoJ4q27iYEYbv2kmBvSabmU1NYGAXTJTrQg.png', 'App\\Models\\User', 29, '2023-01-27 00:05:56', '2023-01-31 01:09:04'),
(7, 'images/admin/admin_profile/u7kSGSUQ4c5DzJO1eQtaKYFnbpfwXjYv1dRgzqU6.png', 'App\\Models\\User', 30, '2023-01-27 00:09:31', '2023-01-31 01:15:29'),
(8, 'images/admin/admin_profile/PhQtP9lOYT92c7ICs1jETFV8MtXc9CasYPrnQWGi.png', 'App\\Models\\User', 31, '2023-01-27 00:10:03', '2023-01-27 00:10:03'),
(9, 'images/admin/admin_profile/AfnIA5OAunja1b3e7Q0gKxs0XHvRVMzcwD13L7OV.png', 'App\\Models\\User', 33, '2023-01-27 00:18:20', '2023-01-31 01:12:02'),
(10, 'images/admin/admin_profile/WO5KlKoJ4q27iYEYbv2kmBvSabmU1NYGAXTJTrQg.png', 'App\\Models\\User', 29, '2023-01-27 02:09:22', '2023-01-31 01:09:04'),
(11, 'images/admin/admin_profile/WO5KlKoJ4q27iYEYbv2kmBvSabmU1NYGAXTJTrQg.png', 'App\\Models\\User', 29, '2023-01-27 02:09:36', '2023-01-31 01:09:04'),
(12, 'images/admin/admin_profile/WO5KlKoJ4q27iYEYbv2kmBvSabmU1NYGAXTJTrQg.png', 'App\\Models\\User', 29, '2023-01-27 02:09:54', '2023-01-31 01:09:04'),
(13, 'images/admin/admin_profile/WO5KlKoJ4q27iYEYbv2kmBvSabmU1NYGAXTJTrQg.png', 'App\\Models\\User', 29, '2023-01-27 02:12:06', '2023-01-31 01:09:04'),
(14, 'images/admin/admin_profile/hk7wfCX1MWkuG020faoR7CKt49Eh995aXKmfmvYb.png', 'App\\Models\\User', 1, '2023-01-27 02:28:13', '2023-01-31 01:08:05'),
(25, 'images/admin/site_icon/kE7o5rUBgWvyvMg360G93T5vQxMQQ4ICxYHl57Uo.png', 'App\\Models\\Siteintro', 1, '2023-01-28 00:22:38', '2023-01-31 00:43:38'),
(26, 'images/admin/logo/7acLwBU00dSHTLP84jWFkrIN9qCboqdWtgJ6dDOZ.png', 'App\\Models\\Siteintro', 2, '2023-01-28 22:38:50', '2023-02-20 22:13:20'),
(38, 'images/admin/categories/6Buud61vBsP7thAUniwT3gHIS9hemjK9SxEf9MYe.png', 'App\\Models\\Category', 13, '2023-02-22 06:34:23', '2023-02-22 06:34:23'),
(45, 'images/admin/categories/OKAu4Tj7WJIsguSqnvimDsNzeBkYsSpHR2V3DRYk.png', 'App\\Models\\Category', 1, '2023-02-22 07:56:35', '2023-02-22 07:56:35'),
(46, 'images/admin/categories/gzBcZ3PugSqjslnuStjB8nFrb2dog86Bka4GZO9p.png', 'App\\Models\\Category', 3, '2023-02-22 07:57:03', '2023-02-22 07:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journal_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope_and_aim` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `assign_chiefeditor` int(11) DEFAULT NULL,
  `more_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Indexing_or_abstracting` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_guideline` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days_review` int(11) DEFAULT NULL,
  `days_decision` int(11) DEFAULT NULL,
  `days_submission` int(11) DEFAULT NULL,
  `days_accept` int(11) DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `last_volume` int(11) DEFAULT NULL,
  `last_issue` int(11) DEFAULT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `journal_name`, `journal_slug`, `issn`, `scope_and_aim`, `category_id`, `assign_chiefeditor`, `more_info`, `information`, `Indexing_or_abstracting`, `author_guideline`, `days_review`, `days_decision`, `days_submission`, `days_accept`, `meta_title`, `meta_description`, `meta_keywords`, `image`, `user_id`, `author_id`, `last_volume`, `last_issue`, `notification`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Journal of Modern Perspective of Islamic Economics (JMPIE)', '', 'issn-cs1', '<p>Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,&nbsp;Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,Journal of Modern Perspective of Islamic Economics (JMPIE) will be a peer-refereed, international,</p>', 1, 1, 'pdf/journal_moreinfo/ZFrI04rKfy333XEWmVco3QZh3nSZLWaqRH33aH0J.pdf', '<p>information</p>', '<p>Google Scholar</p>', 'pdf/author_guidelines/f4pbwP9XGXeiPzlYQrVrnBEF1ueTNyYsiANjpjTc.pdf', 10, 4, 5, 15, 'meta title', 'meta description', 'computer science journal,keyword', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-11 02:24:29', '2023-02-20 22:01:44'),
(5, 'Mathematics journal', '', 'issn-math1', '<p>Scope and aim</p>', 3, 7, 'pdf/journal_moreinfo/0zso24s7qc60tyuQwlNyJMe0UzIie5scOSilKb1M.pdf', '<p>Informaiton about journal</p>', '<p>indexing information</p>', 'pdf/author_guidelines/0zso24s7qc60tyuQwlNyJMe0UzIie5scOSilKb1M.pdf', 10, 10, 15, 20, 'Mathematics', 'Description for Mathematics journal', 'matehmatics,journal for mathematics', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-14 03:14:00', '2023-02-14 03:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `journal_issues`
--

CREATE TABLE `journal_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_issue_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journal_volume_id` bigint(20) UNSIGNED NOT NULL,
  `journal_id` bigint(20) UNSIGNED NOT NULL,
  `journal_issue_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_issues`
--

INSERT INTO `journal_issues` (`id`, `journal_issue_name`, `journal_volume_id`, `journal_id`, `journal_issue_status`, `year`, `created_at`, `updated_at`) VALUES
(8, 'Mth-issue1', 6, 5, 'pending', '2023-02-16', '2023-02-16 06:39:05', '2023-02-16 06:39:05'),
(9, 'is1', 6, 5, 'approved', '2023-02-17', '2023-02-16 06:42:22', '2023-02-16 06:42:22'),
(12, 'issue 21', 4, 1, 'pending', '2023-02-22', '2023-02-21 23:05:17', '2023-02-21 23:05:17'),
(13, 'issue 22', 4, 1, 'pending', '2023-02-22', '2023-02-21 23:05:35', '2023-02-21 23:05:35'),
(18, 'issue 01-v01', 24, 1, 'pending', '2023-02-22', '2023-02-22 12:29:01', '2023-02-22 12:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `journal_volumes`
--

CREATE TABLE `journal_volumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_volume_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journal_id` bigint(20) UNSIGNED NOT NULL,
  `journal_volume_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_volumes`
--

INSERT INTO `journal_volumes` (`id`, `journal_volume_name`, `journal_id`, `journal_volume_status`, `created_at`, `updated_at`) VALUES
(4, 'Volume 2', 1, 'pending', '2023-02-15 00:52:36', '2023-02-15 00:52:36'),
(6, 'Mth-vol1', 5, 'pending', '2023-02-16 06:38:06', '2023-02-16 06:38:06'),
(7, 'Mth-vol2', 5, 'pending', '2023-02-16 06:38:17', '2023-02-16 06:38:17'),
(8, 'Mth-vol3', 5, 'pending', '2023-02-16 06:40:13', '2023-02-16 06:40:13'),
(9, 'Mth-vol4', 5, 'pending', '2023-02-16 06:40:25', '2023-02-16 06:40:25'),
(10, 'Mth-vol5', 5, 'pending', '2023-02-16 06:40:34', '2023-02-16 06:40:34'),
(11, 'Mth-vol6', 5, 'pending', '2023-02-16 06:40:40', '2023-02-16 06:40:40'),
(12, 'Mth-vol7', 5, 'pending', '2023-02-16 06:40:49', '2023-02-16 06:40:49'),
(13, 'Mth-vol8', 5, 'pending', '2023-02-16 06:40:58', '2023-02-16 06:40:58'),
(14, 'Mth-vol9', 5, 'pending', '2023-02-16 06:41:05', '2023-02-16 06:41:05'),
(15, 'Mth-vol10', 5, 'pending', '2023-02-16 06:41:11', '2023-02-16 06:41:11'),
(16, 'Mth-vol11', 5, 'pending', '2023-02-16 06:41:17', '2023-02-16 06:41:17'),
(17, 'Mth-vol12', 5, 'pending', '2023-02-16 06:41:23', '2023-02-16 06:41:23'),
(24, 'Volume 01', 1, 'approved', '2023-02-22 12:28:21', '2023-02-22 12:28:21');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_17_081029_create_permission_tables', 1),
(6, '2023_01_24_074025_create_images_table', 2),
(7, '2023_01_27_103215_create_siteintros_table', 3),
(8, '2023_01_29_121952_create_socials_table', 4),
(9, '2023_01_30_025138_create_categories_table', 5),
(10, '2023_01_31_070603_create_frontusers_table', 6),
(11, '2023_02_03_043515_create_contacts_table', 7),
(12, '2023_02_05_042351_create_contacts_table', 8),
(13, '2023_02_05_043456_create_contacts_table', 9),
(14, '2023_02_05_071842_create_sliders_table', 10),
(15, '2023_02_06_064008_create_pages_table', 11),
(16, '2023_02_06_085528_create_pages_table', 12),
(17, '2023_02_07_004453_create_advance_settings_table', 13),
(18, '2023_02_07_021537_create_advance_settings_table', 14),
(19, '2023_02_09_034641_create_frontusers_table', 15),
(20, '2023_02_09_035253_create_frontusers_table', 16),
(21, '2023_02_09_081541_create_frontusers_table', 17),
(22, '2023_02_09_104503_create_journals_table', 18),
(23, '2023_02_10_035437_create_journals_table', 19),
(24, '2023_02_13_105255_create_journal_volumes_table', 20),
(25, '2023_02_14_085945_create_journal_issues_table', 21),
(26, '2023_02_14_091325_create_journal_issues_table', 22),
(27, '2023_02_15_063916_create_current_issues_table', 23),
(28, '2023_02_18_223404_create_front_authors_table', 24),
(29, '2023_02_18_225032_create_front_authors_table', 25),
(30, '2023_02_18_225716_create_front_authors_table', 26);

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

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(5, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 9),
(6, 'App\\Models\\User', 26),
(6, 'App\\Models\\User', 29),
(7, 'App\\Models\\User', 27),
(7, 'App\\Models\\User', 28),
(7, 'App\\Models\\User', 30),
(8, 'App\\Models\\User', 33),
(11, 'App\\Models\\Frontuser', 1),
(11, 'App\\Models\\Frontuser', 2),
(11, 'App\\Models\\Frontuser', 3),
(11, 'App\\Models\\Frontuser', 4),
(11, 'App\\Models\\Frontuser', 7),
(11, 'App\\Models\\Frontuser', 14),
(12, 'App\\Models\\Frontuser', 5),
(16, 'App\\Models\\Frontuser', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `meta_keywords`, `meta_description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'About', 'publications, paper publish', 'Our main goal at Shukaar is to have a harmonious working relationship with the community we serve in, to establish trust, transparency, and reliability with the people and the organization.As the companys objective, we make sure that these scholarly writings are properly published and well communicated which can/will benefit researchers around the globe. Listed below are the following policies that Shukaar implements for Open Access. Policies will be reviewed constantly as the need arises. The Green Open Access route will enable all the journal authors and readers to have free access to all the research papers without restrictions and payments. Once the articles are accepted for publication, all our users will be granted free access to download for non-commercial use that is subject to attribution.The author may deposit these documents on their personal website or company repository and subject repositories.These can also be used for teaching and training materials. Authors may post the articles submitted at any time. However, there are exceptions to the policy which include articles/journals stored in the repository of another institution and articles that are systematically uploaded or collated by Shukaar through repositories.\r\n\r\nFor further inquiries and information, please contact: permissions@shukaar.com This policy permits the publisher to make the articles available immediately for the public to access easily which is free of the cost covered by the Article Processing Charge (APC).Thus, the public can openly access any documents, researchers or articles mandated by the funding institutions under the terms of the Creative Common Attribution 4.0 License.Moreover, unlimited use, sharing and duplication are allowed in any form provided that the original author and the source are being recognized. Shukaar offer the following option to authors wishing to publish via the Gold Open Access route.', '<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar is a registered and legitimate publishing Society. Its vision is to ensure that all academic activities are systematically and properly organized. It aims to bridge the gap between scientific revelations and publications through publishing research Journals, articles and other academic activities. The quality of research published, and transparency post a challenge in terms of payment. The aim of Shukaar is to publish high-quality documents that can contribute to the literature and can help for researchers. Moreover, it gives recommendations based on standardized policies implemented for research work and study. Shukaar differs from the traditional academic publisher as it constantly adapts to the dynamic innovations of this generation such as:</span></span></span></span></span></p>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\">An open-source channel to utilize and promote the development of science and research</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\">Excellent multi-disciplinary scholars from around the world with unique criteria of reviewing papers</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\">A small administrative system</span></span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Our focus is on promoting a healthy culture of research, enrichment of technical writing skills and enhancing presentation capabilities of students for a diverse group of audiences. We organize conferences annually while workshops and training are conducted on demand. Moreover, we also promote academic events conducted by institutions.Workshops on research papers, thesis writing, methodology and other academic events conducted by Shukaar serve as stepping stone towards the fulfilment of bringing researchers together and providing them with a platform to present and share their unpublished research, and dissertation. Researchers can subscribe to get the information about international conferences in different countries. We work like the international conferences news alert.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Open Access Policies</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Our main goal at Shukaar is to have a harmonious working relationship with the community we serve in, to establish trust, transparency, and reliability with the people and the organization.As the companys objective, we make sure that these scholarly writings are properly published and well communicated which can/will benefit researchers around the globe. Listed below are the following policies that Shukaar implements for Open Access. Policies will be reviewed constantly as the need arises.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Green Open Access/Self-Archiving</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">The Green Open Access route will enable all the journal authors and readers to have free access to all the research papers without restrictions and payments. Once the articles are accepted for publication, all our users will be granted free access to download for non-commercial use that is subject to attribution.The author may deposit these documents on their personal website or company repository and subject repositories.These can also be used for teaching and training materials. Authors may post the articles submitted at any time. However, there are exceptions to the policy which include articles/journals stored in the repository of another institution and articles that are systematically uploaded or collated by Shukaar through repositories.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">For further inquiries and information, please contact:&nbsp;</span></span><a href=\"mailto:permissions@shukaar.com\"><strong><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">permissions@shukaar.com</span></span></strong></a></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Gold Open Access</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">This policy permits the publisher to make the articles available immediately for the public to access easily which is free of the cost covered by the Article Processing Charge (APC).Thus, the public can openly access any documents, researchers or articles mandated by the funding institutions under the terms of the Creative Common Attribution 4.0 License.Moreover, unlimited use, sharing and duplication are allowed in any form provided that the original author and the source are being recognized. Shukaar offer the following option to authors wishing to publish via the Gold Open Access route.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Hybrid</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">At Shukaar, authors for subscription journals are offered an alternative to publishing articles through the Gold Open Access route whereby the article submitted and accepted go through the Scholar One Manuscripts which is subject to a full, double-blind peer review. In the process of submission, you can choose the Gold Open Access option as well.As soon as your paper is accepted, an invoice will be delivered to you for the Article Processing Charge (APC) that costs USD 100 (inclusive of VAT). All prices are evaluated annually and are subject to change.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Fully Open Access</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Fully Open Access or commonly known as Platinum Open Access is another option we offer at Shukaar.The authors are free of any charges in publishing articles as long as they are in partnership with universities and other professional associations. There will be no charge for the author as these are considered sponsored publications. Moreover, the articles that are accepted for publication are available and easy to access openly.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Online and Printed Journals</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar believes that online journal is far more cost friendly and economical compared to a traditional print journal which is quite expensive. Thus, in this modern age, it is recognized that digital scholarly journals are the new trends in scientific publication. However, Shukaar accepts print journal on special orders. Journals under Shukaar has a fee waiver policy for best papers. Currently, Shukaar charges 100 USD for a publication to control the publication expenses/ operating cost; the fee can be changed based on the article page length.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Access and Format Language</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar believes that spreading knowledge is the key to learning, developing and enhancement of skills and capabilities for every human being in the educational field. As scholars say, education is the key to success regardless of race, culture and religious background. Shukaar prohibits the self-centred approaches. Thus, full text published by Shukaar is available for free through Open Access without delay. All the publications published in our journals are in the English language. Users do not need to register to read the full text. Articles of full text are available in the format of PDF.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Aggregator</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">The Shukaar intends to use the platform, host or aggregator of the journal content in OJS and EBSCO.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Fee Waiver Policy</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar has the passion and the zeal to contribute scholarly writings and journals in the educational field. Authors who have a minimum of seven (3) papers published in Springer, Elsevier, Wiley, Taylor and Francis or in any high impact factor journal (journal impact must be shown in Thomson Reuters Science Citation IndexTM and SCI ExpandedTM) will not pay any operating cost or charges. All expenses will be paid by Shukaar as a token of appreciation. Moreover, monetary rewards will also be given to the author of the best paper of the year. On training and workshops, it has two types: First, workshops and training conducted by Shukaar and its volunteers will be free of charge. Please note, if the workshop is online, the requesting party must pay the operating cost of the web and other charges if any. If the requesting party ask for an offline workshop, then they must pay for the travel and living costs. If Shukaar charges any cost, it shall send details to the payer to verify and to develop trust.Second, workshops and training conducted by Shukaar that hires an instructor or trainer, the requesting party can bargain directly with facilitators, and both parties must send the final decided monetary rewards agreement to Shukaar. If Shukaar gets external funding from agencies or any institution and carries the operating cost, Shukaar will not charge any operating cost and will increase discount policy on publication fee. Journal under Shukaar has a waiver policy for best papers.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Currently, Shukaar charges 100 USD for a publication, the fee can be changed based on the article page length. Shukaar stabilizes and control the publication expenses including those of peer review management, journal production and online hosting and archiving by charging an Article Processing Charge (APC), to authors, institutions or funders for each article published. There is no fee for readers. However, Shukaar has an APC waiver policy for quality articles.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Archiving</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">What digital archiving policy usually does Shukaar utilize?</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Currently, Shukaar is using National Library while in future Global LOCKSS Network etc. will also be included.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Quality Control</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar selects highly qualified editors having experience in research and are from different universities worldwide. Each journal needs a minimum of 10 members on the editorial board. When an author submits the paper, the editorial board review processed the document.Once the board approves the manuscript, it is then forwarded for the further review process (Blind Review). Before publishing the paper, it goes through verification in terms of the language, formatting etc. Furthermore, the details are given for Peer review flowchart of journals. All the journals under Shukaar must undergo the Plagiarism screening policy.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Copyright</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">In all the journals under Shukaar, Creative Commons Attribution-Noncommercial License (CC BY-NC 4.0) is applied. The detail of ethics, plagiarism, licensing is given in the author guide.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">More</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Details about more can be found on journal homepage and within the website.</span></span></span></span></span></p>', '2023-02-06 04:13:46', '2023-02-20 23:09:16'),
(6, 'Jobs', 'submit resume, vacancies, publishers, editors, content editing,, proofreading, web developer, search engine optimization', 'To apply for any type of job, apply online and cc your cover letter and resume on the following Email : careers@shukaar.comStudents who will go for the internship program will be provided with an experience letter. To apply for a job, a minimum of 7 years experience is required in a specific field with an online publishing house.Individuals who had studied Academic writing and Research Methods are preferred.Click for detail- Content Editors assesses and evaluate the manuscripts accepted in the publishing company to check for continuity errors, plot holes and areas in writing that needs improvement. They also check for clichs smoothness of writing and point of view. To work at home, you will need a word processing program that tracks changes where you can delete and add words to the manuscript. You can also leave line notes on the document for comments or suggestions. The goal is not to rewrite the author\'s work, but to point out places where he should make changes. Content editors need to have previous experience in publishing and editing to be considered for this position.Click for detail-Like content editors, proofreaders usually need a word processing program that tracks changes. Once the primary editor is done with the manuscript, the proofreader is expected to find any last-minute spelling and grammar issues and formatting problems. He/She also has to fact check the paper. Proofreaders are usually paid less than content editors, but the work is less extensive and not as skilled. Click for detail- SEO who desires to work with Shukaar must possess the following skills and strategies: Determine your keywords. It is very important to know and understand the language your target audience use in research. Knowing how to use the Google Keyword Planner is important. When keywords are found, you should be able to write based on the content. This content should be explanatory, helpful, informative to get best results. You just have to write and use the keywords naturally throughout the page without stuffing or repeating them and be able to reach your client). Create and share interesting content, use social media ( create social network accounts for Shukaar like research gate, Mendely.com, LinkedIn, Quora.com, , loop.frontiersin.org, www.researcherid.com, university students community page like Facebook and university students communities, conferences page). Link to other pages on your site (Example Internal linking). Track your progress (You can use a lot of different tools to track progress, like Google Analytics). Shukaar will also track your progress).', '<h3><span style=\"font-size:18pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Internships and Jobs</span></span></span></span></span></h3>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Submit your resume</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">To apply for any type of job, apply online and cc your cover letter and resume on the following Email :&nbsp;</span></span></span><a href=\"mailto:careers@shukaar.com\" style=\"color:blue; text-decoration:underline\" target=\"_blank\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">careers@shukaar.com</span></span></span></strong></a></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Vacancies</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Students who will go for the internship program will be provided with an experience letter. To apply for a job, a minimum of 7 years experience is required in a specific field with an online publishing house.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Publisher</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">We need an experienced publisher with a good background in online publishing.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Editors</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">We need Editors in the following fields; Social Science, Business and Management and Computer Sciences, who had worked as an editor in a reputable online publishing house.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">English Language Center</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Individuals who had studied Academic writing and Research Methods are preferred.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Content Editing</span></span></span></strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">&nbsp;Click for detail- Content Editors assesses and evaluate the manuscripts accepted in the publishing company to check for continuity errors, plot holes and areas in writing that needs improvement. They also check for clichs smoothness of writing and point of view. To work at home, you will need a word processing program that tracks changes where you can delete and add words to the manuscript. You can also leave line notes on the document for comments or suggestions. The goal is not to rewrite the author&#39;s work, but to point out places where he should make changes. Content editors need to have previous experience in publishing and editing to be considered for this position.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Proofreading</span></span></span></strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">&nbsp;Click for detail-Like content editors, proofreaders usually need a word processing program that tracks changes. Once the primary editor is done with the manuscript, the proofreader is expected to find any last-minute spelling and grammar issues and formatting problems. He/She also has to fact check the paper. Proofreaders are usually paid less than content editors, but the work is less extensive and not as skilled.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Jobs in Information technology (IT) Professionals</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Web Developer&nbsp;</span></span></span></strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Click for detail- Must have a good understanding of UX design and can work closely with clients.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Search Engine Optimization (SEO)</span></span></span></strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">&nbsp;Click for detail- SEO who desires to work with Shukaar must possess the following skills and strategies: Determine your keywords. It is very important to know and understand the language your target audience use in research. Knowing how to use the Google Keyword Planner is important. When keywords are found, you should be able to write based on the content. This content should be explanatory, helpful, informative to get best results. You just have to write and use the keywords naturally throughout the page without stuffing or repeating them and be able to reach your client). Create and share interesting content, use social media ( create social network accounts for Shukaar like research gate, Mendely.com, LinkedIn, Quora.com, , loop.frontiersin.org, www.researcherid.com, university students community page like Facebook and university students communities, conferences page). Link to other pages on your site (Example Internal linking). Track your progress (You can use a lot of different tools to track progress, like Google Analytics). Shukaar will also track your progress).</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Information Security Analyst:&nbsp;</span></span></span></strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Click for detail-Must possess the required proficiency in a range of programming languages such as C, C++, C#, Java or PHP. Strong understanding of networking, operating systems, IDS, IPS, cloud computing and malware. Communication, Problem-solving is extremely important in this occupation.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Database Administrator:</span></span></span></strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">&nbsp;Click for detail-Typical Responsibilities: Identify user needs and create and administer databases that meet them. Maintain databases, ensuring they are up-to-date, secured and backed up. Identify and fix bugs in the system, developing systems to ensure that this does not affect operational efficiency or risk data loss. Create and test modifications to the structure of the database as required.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Required Skills: Proficiency in SQL, the language most commonly used in database systems. Depending on the role and company, there may also be a requirement to become proficient in additional programming languages. This is a role that requires high level of detail orientation and strong analytical skills.</span></span></span></span></span></span></p>', '2023-02-20 22:35:19', '2023-02-20 22:44:22'),
(7, 'Partnership & Services', 'Partnership,  Scope of The Journal, Project', 'The aim of Shukaar is to contribute in the field of research. The candidate can start their own journal for free with Shukaar under an easy agreement term. We are looking for a proposal from experts to start their scholarly journals under Shukaar; Proposal must cover the following key areas: Editorial Board (minimum 10 members)\r\nQuality Control and Reviewing Process\r\nStrategy to get popularity of Journal (example like permuting by social media, SEO etc)\r\nStrategy to get more manuscripts/paper\r\nStrategy to index step by step\r\nMore ideas to if any\r\nWe have a team of experienced researchers from around the world. We accept the project with the underlying guidelines and policies. You just give us the topic and we will provide you the complete team with project.', '<h2><span style=\"font-size:18pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Partnership, Start Your Own Journal</span></span></strong></span></span></span></h2>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">The aim of Shukaar is to contribute in the field of research. The candidate can start their own journal for free with Shukaar under an easy agreement term. We are looking for a proposal from experts to start their scholarly journals under Shukaar; Proposal must cover the following key areas:</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Scope of The Journal</span></span></strong></span></span></span></span></h3>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Editorial Board (minimum 10 members)</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Quality Control and Reviewing Process</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Strategy to get popularity of Journal (example like permuting by social media, SEO etc)</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Strategy to get more manuscripts/paper</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Strategy to index step by step</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">More ideas to if any</span></span></span></span></span></li>\r\n</ol>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">If you want to start your own open access academic journal or online Publishing house Shukaar, please send an email to&nbsp;</span></span></span><a href=\"mailto:partnership@obtain99.com\" style=\"color:blue; text-decoration:underline\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">partnership@ shukaar.com</span></span></span></strong></a></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Project</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">We have a team of experienced researchers from around the world. We accept the project with the underlying guidelines and policies. You just give us the topic and we will provide you the complete team with project. If the organization or institution is looking for research projects in the field of business and management, please feel free to contact us at&nbsp;</span></span></span><a href=\"mailto:projects@shukaar.com\" style=\"color:blue; text-decoration:underline\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">projects@shukaar.com</span></span></span></a></span></span></span></p>', '2023-02-20 22:49:16', '2023-02-20 22:49:16');
INSERT INTO `pages` (`id`, `page_name`, `meta_keywords`, `meta_description`, `content`, `created_at`, `updated_at`) VALUES
(8, 'Conferences & Events', 'Conferences, Workshops  Trainings, Workshops', 'Shukaar is responsible in promoting a healthy culture of research, enrichment of technical writing skills and enhancing presentation capabilities of students for a diverse group of audiences. It organizes conference annually, workshops and training as per demand. Moreover, it also accepts academic events conducted by other institutions. Workshops on research papers, thesis writing, methodology and other academic events handled and supervised by Shukaar serve as stepping stone towards the fulfillment of bringing researchers together and providing them a platform to present and share their unpublished research from their final year projects (FYPs) or other significant research works. Researchers who need consultancy in their dissertation in the field of management, business and economics can contact us.\r\n\r\nWe serve universities, societies and organization by accepting their upcoming conferences and their research and academic activities. Shukaar does not only serve by increasing number of submissions in international conferences but also contribute in spreading the knowledge in society. The mutual benefits do not include any monetary rewards from educational institute and others. Interested universities, societies and organization can email us through conference@shukaar.com. The best papers for the international conferences are published free of cost in the journals under Shukaar.\r\n\r\nResearchers can subscribe to get the information about international conferences in different countries. We work like the international conferences news alert.', '<h2><span style=\"font-size:18pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Conferences Workshops and Trainings</span></span></strong></span></span></span></h2>\r\n\r\n<p><img alt=\"Conferences image\" src=\"http://127.0.0.1:8000/storage/images/front/pages/1.jpg\" style=\"float:left; height:263px; width:860px\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-size:18pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Conferences, Trainings and Workshops</span></span></strong></span></span></span></h2>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar is responsible in promoting a healthy culture of research, enrichment of technical writing skills and enhancing presentation capabilities of students for a diverse group of audiences. It organizes conference annually, workshops and training as per demand. Moreover, it also accepts academic events conducted by other institutions. Workshops on research papers, thesis writing, methodology and other academic events handled and supervised by Shukaar serve as stepping stone towards the fulfillment of bringing researchers together and providing them a platform to present and share their unpublished research from their final year projects (FYPs) or other significant research works. Researchers who need consultancy in their dissertation in the field of management, business and economics can contact us.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">We serve universities, societies and organization by accepting their upcoming conferences and their research and academic activities. Shukaar does not only serve by increasing number of submissions in international conferences but also contribute in spreading the knowledge in society. The mutual benefits do not include any monetary rewards from educational institute and others. Interested universities, societies and organization can email us through&nbsp;</span></span></span><a href=\"mailto:conference@shukaar.com\" style=\"color:blue; text-decoration:underline\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">conference@shukaar.com</span></span></span></a><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">.</span></span></span></strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">&nbsp;The best papers for the international conferences are published free of cost in the journals under Shukaar.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Researchers can subscribe to get the information about international conferences in different countries. We work like the international conferences news alert.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Are you in search of website that accepts conference, workshop or another academic activity?</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">If you want to Promote your event via targeted e-mails, Shukaar Alert&#39;s monthly newsletters and on the Conference Alert&#39;s website</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Why should i choose Shukaar?</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar can promote your event to increase the number of participants in your event as it has contacts with several organizations, society or educational institutes. Shukaar also can accept your event by its own subscribers.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">WHERE AND HOW CAN I SUBMIT?</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">There are two methods you can submit your manuscript for conference conducted by Shukaar.</span></span></span></span></span></span></p>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\">Go to author login of relevant journal and submit your paper the same way the manuscript is submitted but mention in the cover letter that your manuscript(s) is/are for the conference.</span></span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">CC your manuscript to,</span></span></span></strong>&nbsp;<a href=\"mailto:conference@shukaar.com\" style=\"color:blue; text-decoration:underline\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">conference@shukaar.com</span></span></span></a></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Author Guide</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Please download the authors guide from Shukaar. You must follow the same authors guide used by authors who submitted their manuscript for scholarly journals.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Subscribe</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">When you subscribe, you will receive free email updates of events or activities that matches your interests. Kindly subscribe to this website to stay up-to-date with what is happening in the industry.</span></span></span></span></span></span></p>\r\n\r\n<h3><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Cambria,&quot;serif&quot;\"><span style=\"color:#4f81bd\"><strong><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Do you want to Conduct workshop or Training?</span></span></strong></span></span></span></span></h3>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">To conduct the workshops, scholars and interested institutions can send their CVs to Shukaar. To apply as a facilitator, go to home page and apply for job and send your CV with cover letter on the following email:&nbsp;</span></span></span><a href=\"mailto:event@shukaar.com\" style=\"color:blue; text-decoration:underline\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">event@shukaar.com</span></span></span></a></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">There are no charges for workshops but if the workshop is online, the requesting party must pay the operating cost of web or other costs if any. if, you request for offline workshops you must pay for travel and living cost. You can get our services in research projects, research papers, dissertation, thesis etc. Transparency in payment matter is in the top priority of Shukaar. If Shukaar charge any cost, it sends the details to the payer to verify and to develop trust. Students also can apply if they have any problem or need to discuss their research papers. We have researchers who can help by conducting online workshops for you. If you are stuck in research or not understanding anything related to your research paper, you can discuss through video call. For any query email to:&nbsp;</span></span></span><a href=\"mailto:event@shukaar.com\" style=\"color:blue; text-decoration:underline\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">event@shukaar.com</span></span></span></a></span></span></span></p>', '2023-02-20 23:06:16', '2023-02-21 05:14:53');

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
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'view', 'web', '2023-01-25 05:12:39', '2023-01-25 05:12:39'),
(6, 'add', 'web', '2023-01-25 05:12:50', '2023-01-25 05:12:50'),
(7, 'edit', 'web', '2023-01-25 05:13:47', '2023-01-25 05:13:47'),
(8, 'delete', 'web', '2023-01-25 05:13:53', '2023-01-25 05:13:53'),
(11, 'journal_volumes', 'frontuser', '2023-02-01 00:16:13', '2023-02-01 00:16:13'),
(13, 'journal_issues', 'frontuser', '2023-02-01 00:28:48', '2023-02-01 00:29:19');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'superadmin', 'web', '2023-01-24 06:26:35', '2023-01-24 06:26:35'),
(6, 'admin', 'web', '2023-01-24 06:26:41', '2023-01-24 06:26:41'),
(7, 'editor', 'web', '2023-01-24 06:26:49', '2023-01-24 06:26:49'),
(8, 'writer', 'web', '2023-01-24 06:26:55', '2023-01-24 06:26:55'),
(11, 'chiefeditor', 'frontuser', '2023-01-31 21:28:48', '2023-01-31 21:28:48'),
(12, 'paper_editor', 'frontuser', '2023-01-31 21:30:36', '2023-01-31 22:51:00'),
(13, 'reviewer', 'frontuser', '2023-01-31 21:31:02', '2023-01-31 21:31:02'),
(16, 'author', 'frontuser', '2023-01-31 21:52:55', '2023-01-31 21:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(6, 5),
(6, 6),
(6, 8),
(7, 5),
(7, 6),
(7, 7),
(8, 5),
(8, 6),
(11, 11),
(13, 11);

-- --------------------------------------------------------

--
-- Table structure for table `siteintros`
--

CREATE TABLE `siteintros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteintros`
--

INSERT INTO `siteintros` (`id`, `site_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Obtaain', 'In all the journals under Shukaar , Creative Commons Attribution-Noncommercial License (CC BY-NC 4.0) is applied. The detail of ethics, plagiarism, licensing is given in the author guide', '2023-01-27 06:47:24', '2023-02-20 22:36:41'),
(2, 'Title', 'Description', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `button_title`, `button_url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shukaar Publications', 'Shukaar publishes the best research papers for free. Submit your paper for upcoming issues', 'Slide one button', 'first-slider-slug', 'images/admin/slides/xtW97nOWjArA9sc88H62aeOx0NTZ8SgoDBdF0b4M.png', '2023-02-05 03:52:12', '2023-02-09 06:08:18'),
(5, 'Start your own journal', 'The aim of shukaar is to the field fo researc. Research experts can start their own journal for free with shukaar under an easy agreement term', 'Slide two button', 'Slide two url', 'images/admin/slides/jboDepWCMc4cDb3wQi0Ahd3jVtPb9R2VDU0HKBRC.png', '2023-02-05 05:33:07', '2023-02-09 06:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_class`, `social_url`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-f', 'https://www.linkedin.com/in/muhammad-awais-967445175/', '2023-01-29 07:58:10', '2023-02-02 08:00:41'),
(2, 'fab fa-linkedin', 'https://www.linkedin.com/', '2023-01-29 19:48:52', '2023-02-02 08:01:40'),
(4, 'fab fa-twitter', 'https://www.linkedin.com/in/muhammad-awais-967445175/', '2023-01-29 20:12:58', '2023-02-02 08:02:15'),
(5, 'fab fa-dribbble', 'https://www.social.com/', '2023-01-29 20:13:52', '2023-02-02 08:03:55');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adnan Azeemi', 'admin@gmail.com', '2023-01-18 02:12:45', '$2y$10$fg/eWGdeUNVKPIR2XjrRZeT86APpRuvrIghXS3k/dXlsr6eJ/LeCK', NULL, '2023-01-18 02:12:46', '2023-01-26 07:27:06'),
(29, 'Martin', 'martin@gmail.com', NULL, '$2y$10$gZJUXg4So.r.uE10v3A6O.FkQK0SqZRqt07YuOiC4JunARNvC5CCy', NULL, '2023-01-27 00:05:54', '2023-01-27 00:05:54'),
(30, 'Neil', 'neil@gmail.com', NULL, '$2y$10$8nEZ23E938KLcunyUYBt6epme/G7ac0d3kv1JGY9rs0PAcBgbjz7S', NULL, '2023-01-27 00:09:31', '2023-01-27 00:09:31'),
(33, 'Nida', 'nida@gmail.com', NULL, '$2y$10$6bIVo56brAxuhnkFIz3b8eZJLYs/nkfwnoWBfy9u9OMSSgQuLlpki', NULL, '2023-01-27 00:18:19', '2023-01-27 00:18:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_settings`
--
ALTER TABLE `advance_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_issues`
--
ALTER TABLE `current_issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `current_issues_frontuser_id_foreign` (`frontuser_id`),
  ADD KEY `current_issues_journal_id_foreign` (`journal_id`),
  ADD KEY `current_issues_journal_volume_id_foreign` (`journal_volume_id`),
  ADD KEY `current_issues_issue_id_foreign` (`issue_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontusers`
--
ALTER TABLE `frontusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `frontusers_email_unique` (`email`);

--
-- Indexes for table `front_authors`
--
ALTER TABLE `front_authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `front_authors_frontuser_id_foreign` (`frontuser_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imageable_type_imageable_id_index` (`imageable_type`,`imageable_id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journals_category_id_foreign` (`category_id`);

--
-- Indexes for table `journal_issues`
--
ALTER TABLE `journal_issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_issues_journal_volume_id_foreign` (`journal_volume_id`),
  ADD KEY `journal_issues_journal_id_foreign` (`journal_id`);

--
-- Indexes for table `journal_volumes`
--
ALTER TABLE `journal_volumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_volumes_journal_id_foreign` (`journal_id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `siteintros`
--
ALTER TABLE `siteintros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
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
-- AUTO_INCREMENT for table `advance_settings`
--
ALTER TABLE `advance_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `current_issues`
--
ALTER TABLE `current_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontusers`
--
ALTER TABLE `frontusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `front_authors`
--
ALTER TABLE `front_authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `journal_issues`
--
ALTER TABLE `journal_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `journal_volumes`
--
ALTER TABLE `journal_volumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `siteintros`
--
ALTER TABLE `siteintros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `current_issues`
--
ALTER TABLE `current_issues`
  ADD CONSTRAINT `current_issues_frontuser_id_foreign` FOREIGN KEY (`frontuser_id`) REFERENCES `frontusers` (`id`),
  ADD CONSTRAINT `current_issues_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `journal_issues` (`id`),
  ADD CONSTRAINT `current_issues_journal_id_foreign` FOREIGN KEY (`journal_id`) REFERENCES `journals` (`id`),
  ADD CONSTRAINT `current_issues_journal_volume_id_foreign` FOREIGN KEY (`journal_volume_id`) REFERENCES `journal_volumes` (`id`);

--
-- Constraints for table `front_authors`
--
ALTER TABLE `front_authors`
  ADD CONSTRAINT `front_authors_frontuser_id_foreign` FOREIGN KEY (`frontuser_id`) REFERENCES `frontusers` (`id`);

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `journal_issues`
--
ALTER TABLE `journal_issues`
  ADD CONSTRAINT `journal_issues_journal_id_foreign` FOREIGN KEY (`journal_id`) REFERENCES `journals` (`id`),
  ADD CONSTRAINT `journal_issues_journal_volume_id_foreign` FOREIGN KEY (`journal_volume_id`) REFERENCES `journal_volumes` (`id`);

--
-- Constraints for table `journal_volumes`
--
ALTER TABLE `journal_volumes`
  ADD CONSTRAINT `journal_volumes_journal_id_foreign` FOREIGN KEY (`journal_id`) REFERENCES `journals` (`id`);

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
