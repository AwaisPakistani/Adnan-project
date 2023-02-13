-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 02:53 PM
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
(1, '#ff8000', '#fcf7f7', '#1c31ce', '© 2020 Copyright: shukaar.com', '2023-02-06 21:21:51', '2023-02-06 21:35:22');

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
(1, 'Computer Science', 'show', '2023-01-30 04:56:16', '2023-01-30 07:10:38'),
(3, 'Mathematics', 'show', '2023-02-02 05:02:20', '2023-02-02 05:02:20'),
(4, 'Political Science', 'show', '2023-02-02 05:03:10', '2023-02-02 05:04:12'),
(5, 'Software Engineering', 'show', '2023-02-02 05:04:58', '2023-02-02 05:04:58'),
(6, 'Botany', 'show', '2023-02-02 05:05:51', '2023-02-02 05:05:51'),
(7, 'Zoology', 'show', '2023-02-02 05:06:07', '2023-02-02 05:06:07'),
(8, 'Information Technology', 'show', '2023-02-02 05:06:51', '2023-02-02 05:06:51');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontusers`
--

INSERT INTO `frontusers` (`id`, `first_name`, `last_name`, `image`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Chief', 'Adnan Khan', 'images/front/chiefs/1iWDNLiTak8JxI1mYP6AFss7HcNBu4uVnUSzrdPa.png', 'adnan@gmail.com', '$2y$10$GQx8v4Lv0NSOxZyEzjYPA.xKAbmiJSUvk88.JH73.y.09iFcat3WW', '2023-02-09 04:50:13', '2023-02-09 06:34:18');

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
(26, 'images/admin/logo/xSnoWWvicRKVMFGIgMPsgzMI2hwDiLKKsSXKmiWL.png', 'App\\Models\\Siteintro', 2, '2023-01-28 22:38:50', '2023-02-08 21:37:28'),
(28, 'images/admin/categories/vZ9GIXLzJsygxVb56AXxk9TIONRtp5Ihu7UFvaXy.png', 'App\\Models\\Category', 1, '2023-01-30 04:56:17', '2023-01-30 04:56:17'),
(30, 'images/admin/categories/YN2BHj7Bje6y5DSjwYWXikCnxNNRk5ucJELi868G.png', 'App\\Models\\Category', 3, '2023-02-02 05:02:22', '2023-02-02 05:02:22'),
(31, 'images/admin/categories/OzFEC1N8gqODSWSxBxyrNnPKJYXKeiic6KaBumhV.png', 'App\\Models\\Category', 4, '2023-02-02 05:03:10', '2023-02-02 05:03:10'),
(32, 'images/admin/categories/ti52VlQ7FUA4xTy3EZ0OQFxpC9urIwrT1SDAfvBk.png', 'App\\Models\\Category', 5, '2023-02-02 05:04:58', '2023-02-02 05:04:58'),
(33, 'images/admin/categories/nehX2nW2MNscaHXiplWYdeDXeYsR9D5bHjFVD3ZJ.png', 'App\\Models\\Category', 6, '2023-02-02 05:05:51', '2023-02-02 05:05:51'),
(34, 'images/admin/categories/qyArefc5wZiewB7A6ojHmGR5Yprl7LsaLhLfq8GK.png', 'App\\Models\\Category', 7, '2023-02-02 05:06:07', '2023-02-02 05:06:07'),
(35, 'images/admin/categories/KRJQe3bIXb6PcBNdxdbyVa6cMpwyvttBAsJ1cGnx.png', 'App\\Models\\Category', 8, '2023-02-02 05:06:51', '2023-02-02 05:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `journal_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope_and_aim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Islamic Perspective Scholarly Journal', '', 'issn-cs1', '<p>Scope and aim</p>', 1, 1, 'pdf/journal_moreinfo/ZFrI04rKfy333XEWmVco3QZh3nSZLWaqRH33aH0J.pdf', '<p>information</p>', '<p>indexing&nbsp;</p>', 'pdf/author_guidelines/f4pbwP9XGXeiPzlYQrVrnBEF1ueTNyYsiANjpjTc.pdf', 10, 4, 5, 15, 'meta title', 'meta description', 'computer science journal,keyword', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-11 02:24:29', '2023-02-11 09:08:48'),
(4, 'Internship during journal', '', 'issn-cs2', '<p>Scope and aim</p>', 1, 1, 'pdf/journal_moreinfo/fFQrO1lLu9uTbFwouS06ag0wcR5JrpUzgic88yoS.pdf', '<p>information</p>', '<p>indexing</p>', 'pdf/author_guidelines/fFQrO1lLu9uTbFwouS06ag0wcR5JrpUzgic88yoS.pdf', 1, 2, 3, 4, 'meta title', 'meta description', 'internship,job journal', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-11 22:46:23', '2023-02-11 22:46:23');

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
(23, '2023_02_10_035437_create_journals_table', 19);

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
(1, 'About Us', 'publications, paper publish', 'Expert of paper publication', '<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar is a registered and legitimate publishing Society. Its vision is to ensure that all academic activities are systematically and properly organized. It aims to bridge the gap between scientific revelations and publications through publishing research Journals, articles and other academic activities. The quality of research published, and transparency post a challenge in terms of payment. The aim of Shukaar is to publish high-quality documents that can contribute to the literature and can help for researchers. Moreover, it gives recommendations based on standardized policies implemented for research work and study. Shukaar differs from the traditional academic publisher as it constantly adapts to the dynamic innovations of this generation such as:</span></span></span></span></span></p>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\">An open-source channel to utilize and promote the development of science and research</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\">Excellent multi-disciplinary scholars from around the world with unique criteria of reviewing papers</span></span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"color:#212529\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\">A small administrative system</span></span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Our focus is on promoting a healthy culture of research, enrichment of technical writing skills and enhancing presentation capabilities of students for a diverse group of audiences. We organize conferences annually while workshops and training are conducted on demand. Moreover, we also promote academic events conducted by institutions.Workshops on research papers, thesis writing, methodology and other academic events conducted by Shukaar serve as stepping stone towards the fulfilment of bringing researchers together and providing them with a platform to present and share their unpublished research, and dissertation. Researchers can subscribe to get the information about international conferences in different countries. We work like the international conferences news alert.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Open Access Policies</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Our main goal at Shukaar is to have a harmonious working relationship with the community we serve in, to establish trust, transparency, and reliability with the people and the organization.As the companys objective, we make sure that these scholarly writings are properly published and well communicated which can/will benefit researchers around the globe. Listed below are the following policies that Shukaar implements for Open Access. Policies will be reviewed constantly as the need arises.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Green Open Access/Self-Archiving</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">The Green Open Access route will enable all the journal authors and readers to have free access to all the research papers without restrictions and payments. Once the articles are accepted for publication, all our users will be granted free access to download for non-commercial use that is subject to attribution.The author may deposit these documents on their personal website or company repository and subject repositories.These can also be used for teaching and training materials. Authors may post the articles submitted at any time. However, there are exceptions to the policy which include articles/journals stored in the repository of another institution and articles that are systematically uploaded or collated by Shukaar through repositories.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">For further inquiries and information, please contact:&nbsp;</span></span><a href=\"mailto:permissions@shukaar.com\"><strong><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#2c2c2c\">permissions@shukaar.com</span></span></strong></a></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Gold Open Access</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">This policy permits the publisher to make the articles available immediately for the public to access easily which is free of the cost covered by the Article Processing Charge (APC).Thus, the public can openly access any documents, researchers or articles mandated by the funding institutions under the terms of the Creative Common Attribution 4.0 License.Moreover, unlimited use, sharing and duplication are allowed in any form provided that the original author and the source are being recognized. Shukaar offer the following option to authors wishing to publish via the Gold Open Access route.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Hybrid</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">At Shukaar, authors for subscription journals are offered an alternative to publishing articles through the Gold Open Access route whereby the article submitted and accepted go through the Scholar One Manuscripts which is subject to a full, double-blind peer review. In the process of submission, you can choose the Gold Open Access option as well.As soon as your paper is accepted, an invoice will be delivered to you for the Article Processing Charge (APC) that costs USD 100 (inclusive of VAT). All prices are evaluated annually and are subject to change.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Fully Open Access</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Fully Open Access or commonly known as Platinum Open Access is another option we offer at Shukaar.The authors are free of any charges in publishing articles as long as they are in partnership with universities and other professional associations. There will be no charge for the author as these are considered sponsored publications. Moreover, the articles that are accepted for publication are available and easy to access openly.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Online and Printed Journals</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar believes that online journal is far more cost friendly and economical compared to a traditional print journal which is quite expensive. Thus, in this modern age, it is recognized that digital scholarly journals are the new trends in scientific publication. However, Shukaar accepts print journal on special orders. Journals under Shukaar has a fee waiver policy for best papers. Currently, Shukaar charges 100 USD for a publication to control the publication expenses/ operating cost; the fee can be changed based on the article page length.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Access and Format Language</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar believes that spreading knowledge is the key to learning, developing and enhancement of skills and capabilities for every human being in the educational field. As scholars say, education is the key to success regardless of race, culture and religious background. Shukaar prohibits the self-centred approaches. Thus, full text published by Shukaar is available for free through Open Access without delay. All the publications published in our journals are in the English language. Users do not need to register to read the full text. Articles of full text are available in the format of PDF.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Aggregator</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">The Shukaar intends to use the platform, host or aggregator of the journal content in OJS and EBSCO.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Fee Waiver Policy</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar has the passion and the zeal to contribute scholarly writings and journals in the educational field. Authors who have a minimum of seven (3) papers published in Springer, Elsevier, Wiley, Taylor and Francis or in any high impact factor journal (journal impact must be shown in Thomson Reuters Science Citation IndexTM and SCI ExpandedTM) will not pay any operating cost or charges. All expenses will be paid by Shukaar as a token of appreciation. Moreover, monetary rewards will also be given to the author of the best paper of the year. On training and workshops, it has two types: First, workshops and training conducted by Shukaar and its volunteers will be free of charge. Please note, if the workshop is online, the requesting party must pay the operating cost of the web and other charges if any. If the requesting party ask for an offline workshop, then they must pay for the travel and living costs. If Shukaar charges any cost, it shall send details to the payer to verify and to develop trust.Second, workshops and training conducted by Shukaar that hires an instructor or trainer, the requesting party can bargain directly with facilitators, and both parties must send the final decided monetary rewards agreement to Shukaar. If Shukaar gets external funding from agencies or any institution and carries the operating cost, Shukaar will not charge any operating cost and will increase discount policy on publication fee. Journal under Shukaar has a waiver policy for best papers.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Currently, Shukaar charges 100 USD for a publication, the fee can be changed based on the article page length. Shukaar stabilizes and control the publication expenses including those of peer review management, journal production and online hosting and archiving by charging an Article Processing Charge (APC), to authors, institutions or funders for each article published. There is no fee for readers. However, Shukaar has an APC waiver policy for quality articles.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Archiving</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">What digital archiving policy usually does Shukaar utilize?</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Currently, Shukaar is using National Library while in future Global LOCKSS Network etc. will also be included.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Quality Control</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Shukaar selects highly qualified editors having experience in research and are from different universities worldwide. Each journal needs a minimum of 10 members on the editorial board. When an author submits the paper, the editorial board review processed the document.Once the board approves the manuscript, it is then forwarded for the further review process (Blind Review). Before publishing the paper, it goes through verification in terms of the language, formatting etc. Furthermore, the details are given for Peer review flowchart of journals. All the journals under Shukaar must undergo the Plagiarism screening policy.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Copyright</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">In all the journals under Shukaar, Creative Commons Attribution-Noncommercial License (CC BY-NC 4.0) is applied. The detail of ethics, plagiarism, licensing is given in the author guide.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><strong><span style=\"font-size:16.5pt\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">More</span></span></span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"background-color:white\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;\"><span style=\"color:#505151\">Details about more can be found on journal homepage and within the website.</span></span></span></span></span></p>', '2023-02-06 04:13:46', '2023-02-13 08:23:42'),
(2, 'Privacy Policy', 'privacy policy meta keywords', 'privacy policy meta description', '<h1>Privacy Policy</h1>\r\n\r\n<p>Privacy policy of shukaar group</p>\r\n\r\n<p>&nbsp;</p>', '2023-02-06 04:17:37', '2023-02-06 05:58:56'),
(4, 'Disclaimer', 'Disclaimer keywords', 'Disclaimer description', '<h1>Disclaimer</h1>\r\n\r\n<p>Disclaimer detail</p>', '2023-02-07 21:35:57', '2023-02-07 21:35:57');

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
(1, 'Shukaar', 'shukaar is a platform where we students can publish their papers and can rank up in  an international market and can show his specilalities in international markets.', '2023-01-27 06:47:24', '2023-02-08 21:46:21'),
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontusers`
--
ALTER TABLE `frontusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

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
