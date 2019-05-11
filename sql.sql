-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2019 г., 00:16
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `straumann`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 'Slider posts', 'slider-posts', '2019-03-20 07:46:20', '2019-03-20 07:46:20'),
(2, NULL, 2, 'Advantages posts', 'advantages-posts', '2019-03-20 07:46:51', '2019-03-20 07:46:51'),
(3, NULL, 1, 'News Posts', 'news-posts', '2019-03-20 07:48:02', '2019-03-20 07:48:02');

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Минск', '2019-03-20 14:29:54', '2019-03-20 14:29:54', NULL),
(2, 'Гродно', '2019-03-20 14:30:08', '2019-03-20 14:30:08', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `clinics`
--

CREATE TABLE `clinics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` tinytext COLLATE utf8mb4_unicode_ci,
  `email` tinytext COLLATE utf8mb4_unicode_ci,
  `address` tinytext COLLATE utf8mb4_unicode_ci,
  `city_id` int(11) DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `clinics`
--

INSERT INTO `clinics` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `description`, `image`, `url`, `email`, `address`, `city_id`, `map`) VALUES
(1, 'Some Clinic', '2019-03-19 18:26:00', '2019-03-20 14:32:56', NULL, 'aksmd mkasdm asmdl asmld kamls dmlkaslkd maksd lkma sdlkma sdmkla smda dlmkas mdkl', 'clinics\\March2019\\ZIspSkdvh9CU8iYVjJmT.jpg', 'https://google.com', 'admin@admin.com', 'asdasd asd', 1, NULL),
(2, 'Clinic 2', '2019-03-19 18:34:00', '2019-03-20 17:09:10', NULL, 'фыьвл фыьдвьфд фдьыв ьдфывьлд фыьв дфьывдь лфыьв фвлы ьдлфыдл в2ьлд12ьдл 2ьлд23ль д23влд2ьдл', 'clinics\\March2019\\SEsrVq5DqFPT93ohrcfc.jpg', 'https://google.com', 'clinic@clinic.qwe', 'qw asd asd', 2, '<iframe src=\"https://yandex.by/map-widget/v1/-/CBR64CDdlB\" width=\"100%\" height=\"400\" frameborder=\"1\" allowfullscreen=\"true\"></iframe>'),
(3, 'Clinic 3', '2019-03-19 19:01:00', '2019-03-20 14:32:44', NULL, 'OASD MAOSDOM ASMO DAMO MOSDO Mawmod asmod moasdm aosdo askdi oaiks daisdi asi dioasiod', 'clinics\\March2019\\GJoLd4L7slYiwcHk5Foa.jpg', 'https://google.com', 'clinic@clinic.qwe', 'Some Address', 2, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 4),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 5),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 6),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 7),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 8),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 9),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 10),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(62, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(64, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(65, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(66, 13, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 5),
(67, 13, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(68, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(69, 14, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(70, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(71, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(72, 14, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 5),
(73, 14, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(74, 14, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 7),
(75, 14, 'url', 'text', 'Url', 0, 1, 1, 1, 1, 1, '{}', 8),
(76, 14, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 9),
(77, 14, 'address', 'text', 'Address', 0, 1, 1, 1, 1, 1, '{}', 10),
(78, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(79, 15, 'position', 'text', 'Position', 0, 1, 1, 1, 1, 1, '{}', 3),
(80, 15, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 4),
(81, 15, 'contact', 'text', 'Contact', 0, 1, 1, 1, 1, 1, '{}', 5),
(84, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(85, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(86, 15, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 10),
(87, 15, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(88, 15, 'doctor_belongsto_clinic_relationship', 'relationship', 'clinics', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Clinic\",\"table\":\"clinics\",\"type\":\"belongsTo\",\"column\":\"clinic_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(89, 15, 'clinic_id', 'text', 'Clinic Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(90, 5, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{}', 15),
(91, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 16, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(93, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(94, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(95, 16, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 0, 1, 0, 1, '{}', 5),
(96, 14, 'clinic_belongsto_city_relationship', 'relationship', 'City', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\City\",\"table\":\"cities\",\"type\":\"belongsTo\",\"column\":\"city_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(97, 14, 'city_id', 'text', 'City Id', 0, 1, 1, 1, 1, 1, '{}', 11),
(98, 16, 'city_hasmany_clinic_relationship', 'relationship', 'clinics', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Clinic\",\"table\":\"clinics\",\"type\":\"hasMany\",\"column\":\"city_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":null}', 6),
(99, 14, 'map', 'text', 'Map', 0, 1, 1, 1, 1, 1, '{}', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-03-15 20:56:21', '2019-03-15 20:56:21'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-03-15 20:56:21', '2019-03-15 20:56:21'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-03-15 20:56:21', '2019-03-15 20:56:21'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'App\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-03-15 20:56:23', '2019-03-20 09:16:30'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(13, 'clinic', 'clinic', 'Clinic', 'Clinics', NULL, 'App\\Clinic', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-03-19 17:30:37', '2019-03-19 17:30:37'),
(14, 'clinics', 'clinics', 'Clinic', 'Clinics', 'voyager-data', 'App\\Clinic', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-03-19 18:06:36', '2019-03-20 17:09:52'),
(15, 'doctors', 'doctors', 'Doctor', 'Doctors', NULL, 'App\\Doctor', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-03-19 19:51:31', '2019-03-20 17:37:42'),
(16, 'cities', 'cities', 'City', 'Cities', NULL, 'App\\City', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-03-20 14:29:00', '2019-03-20 14:29:44');

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` tinytext COLLATE utf8mb4_unicode_ci,
  `photo` tinytext COLLATE utf8mb4_unicode_ci,
  `contact` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci,
  `clinic_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `doctors`
--

INSERT INTO `doctors` (`id`, `position`, `photo`, `contact`, `created_at`, `updated_at`, `deleted_at`, `name`, `clinic_id`) VALUES
(1, 'Doctir', 'doctors\\March2019\\GBRpsjO8yNiYxnydININ.jpg', '+3432423432', '2019-03-19 19:56:00', '2019-03-19 20:29:39', NULL, 'Musk', 1),
(2, 'Some doctor', 'doctors\\March2019\\GqfYcLu5Yz6xKf2q8XQ4.jpg', 'asd asda sdas', '2019-03-19 20:02:00', '2019-03-19 20:29:22', NULL, 'Name 1', 1),
(3, 'qw asd asd', 'doctors\\March2019\\plWPNsTDjY0atHrMdngy.jpg', '+3432423432s', '2019-03-19 20:05:00', '2019-03-19 20:29:16', NULL, 'Name 3', 2),
(4, 'asdas da', 'doctors\\March2019\\3D3eyOF5S8mgsr1eyT09.jpg', 'asdasd', '2019-03-19 20:06:00', '2019-03-19 20:29:10', NULL, 'System 2', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(2, 'frontend', '2019-03-20 10:26:05', '2019-03-20 10:26:40');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-03-15 20:56:22', '2019-03-15 20:56:22', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2019-03-15 20:56:22', '2019-03-19 18:24:26', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-03-15 20:56:22', '2019-03-15 20:56:22', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-03-15 20:56:22', '2019-03-15 20:56:22', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2019-03-15 20:56:22', '2019-03-19 19:55:29', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-03-15 20:56:22', '2019-03-19 18:24:26', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-03-15 20:56:22', '2019-03-19 18:24:26', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-03-15 20:56:22', '2019-03-19 18:24:26', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-03-15 20:56:22', '2019-03-19 18:24:26', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 11, '2019-03-15 20:56:22', '2019-03-19 19:55:29', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 9, '2019-03-15 20:56:23', '2019-03-19 19:55:29', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 5, '2019-03-15 20:56:23', '2019-03-19 18:24:26', 'voyager.posts.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-03-15 20:56:23', '2019-03-19 18:24:26', 'voyager.hooks', NULL),
(17, 1, 'Clinics', '', '_self', NULL, '#000000', NULL, 6, '2019-03-19 17:30:37', '2019-03-19 18:24:46', 'voyager.clinic.index', 'null'),
(19, 1, 'Doctors', '', '_self', NULL, NULL, NULL, 7, '2019-03-19 19:51:31', '2019-03-19 19:55:29', 'voyager.doctors.index', NULL),
(20, 2, 'Главная', '/', '_self', NULL, '#000000', NULL, 1, '2019-03-20 10:28:51', '2019-03-20 10:41:51', NULL, ''),
(21, 2, 'Клиники', '/clinics', '_self', NULL, '#000000', NULL, 2, '2019-03-20 10:29:26', '2019-03-20 10:42:16', NULL, ''),
(22, 2, 'Контакты', '/contacts', '_self', NULL, '#000000', NULL, 3, '2019-03-20 10:29:57', '2019-03-20 10:41:52', NULL, ''),
(23, 1, 'Cities', '', '_self', NULL, NULL, NULL, 12, '2019-03-20 14:29:00', '2019-03-20 14:29:00', 'voyager.cities.index', NULL),
(24, 2, 'Цены', '/pricing', '_self', NULL, '#000000', NULL, 13, '2019-03-20 16:59:19', '2019-03-20 16:59:19', NULL, ''),
(25, 2, 'Преимущества', '/#advantages', '_self', NULL, '#000000', NULL, 14, '2019-03-20 17:00:19', '2019-03-20 17:00:19', NULL, '');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(2, 'browse_bread', NULL, '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(3, 'browse_database', NULL, '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(4, 'browse_media', NULL, '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(5, 'browse_compass', NULL, '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(6, 'browse_menus', 'menus', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(7, 'read_menus', 'menus', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(8, 'edit_menus', 'menus', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(9, 'add_menus', 'menus', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(10, 'delete_menus', 'menus', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(11, 'browse_roles', 'roles', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(12, 'read_roles', 'roles', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(13, 'edit_roles', 'roles', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(14, 'add_roles', 'roles', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(15, 'delete_roles', 'roles', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(16, 'browse_users', 'users', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(17, 'read_users', 'users', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(18, 'edit_users', 'users', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(19, 'add_users', 'users', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(20, 'delete_users', 'users', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(21, 'browse_settings', 'settings', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(22, 'read_settings', 'settings', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(23, 'edit_settings', 'settings', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(24, 'add_settings', 'settings', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(25, 'delete_settings', 'settings', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(26, 'browse_categories', 'categories', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(27, 'read_categories', 'categories', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(28, 'edit_categories', 'categories', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(29, 'add_categories', 'categories', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(30, 'delete_categories', 'categories', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(31, 'browse_posts', 'posts', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(32, 'read_posts', 'posts', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(33, 'edit_posts', 'posts', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(34, 'add_posts', 'posts', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(35, 'delete_posts', 'posts', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(36, 'browse_pages', 'pages', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(37, 'read_pages', 'pages', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(38, 'edit_pages', 'pages', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(39, 'add_pages', 'pages', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(40, 'delete_pages', 'pages', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(41, 'browse_hooks', NULL, '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(52, 'browse_clinic', 'clinic', '2019-03-19 17:30:37', '2019-03-19 17:30:37'),
(53, 'read_clinic', 'clinic', '2019-03-19 17:30:37', '2019-03-19 17:30:37'),
(54, 'edit_clinic', 'clinic', '2019-03-19 17:30:37', '2019-03-19 17:30:37'),
(55, 'add_clinic', 'clinic', '2019-03-19 17:30:37', '2019-03-19 17:30:37'),
(56, 'delete_clinic', 'clinic', '2019-03-19 17:30:37', '2019-03-19 17:30:37'),
(57, 'browse_clinics', 'clinics', '2019-03-19 18:06:36', '2019-03-19 18:06:36'),
(58, 'read_clinics', 'clinics', '2019-03-19 18:06:36', '2019-03-19 18:06:36'),
(59, 'edit_clinics', 'clinics', '2019-03-19 18:06:36', '2019-03-19 18:06:36'),
(60, 'add_clinics', 'clinics', '2019-03-19 18:06:36', '2019-03-19 18:06:36'),
(61, 'delete_clinics', 'clinics', '2019-03-19 18:06:36', '2019-03-19 18:06:36'),
(62, 'browse_doctors', 'doctors', '2019-03-19 19:51:31', '2019-03-19 19:51:31'),
(63, 'read_doctors', 'doctors', '2019-03-19 19:51:31', '2019-03-19 19:51:31'),
(64, 'edit_doctors', 'doctors', '2019-03-19 19:51:31', '2019-03-19 19:51:31'),
(65, 'add_doctors', 'doctors', '2019-03-19 19:51:31', '2019-03-19 19:51:31'),
(66, 'delete_doctors', 'doctors', '2019-03-19 19:51:31', '2019-03-19 19:51:31'),
(67, 'browse_cities', 'cities', '2019-03-20 14:29:00', '2019-03-20 14:29:00'),
(68, 'read_cities', 'cities', '2019-03-20 14:29:00', '2019-03-20 14:29:00'),
(69, 'edit_cities', 'cities', '2019-03-20 14:29:00', '2019-03-20 14:29:00'),
(70, 'add_cities', 'cities', '2019-03-20 14:29:00', '2019-03-20 14:29:00'),
(71, 'delete_cities', 'cities', '2019-03-20 14:29:00', '2019-03-20 14:29:00');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinytext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `featured`, `created_at`, `updated_at`, `status`) VALUES
(4, 1, 3, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p><strong>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</strong></p>\r\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\r\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 0, '2019-03-15 20:56:23', '2019-03-20 09:32:02', 'PUBLISHED'),
(5, 1, 3, 'Hello Article', NULL, 'Это текст, который будет отображаться на мейне', '<p>Это текст, который будет отображаться на странице самой статьи</p>\r\n<p><strong>asdas das das das dasdas dsa</strong></p>', 'posts\\March2019\\qdqqp36bCUMleCDavKdj.jpg', 'hello-article', NULL, NULL, 0, '2019-03-15 21:23:10', '2019-03-20 17:14:42', 'PUBLISHED'),
(6, 1, 1, 'Хуйня на слайдере номер 1', NULL, NULL, '<p>Проверка блфыв щфывло фылвь фыьв лфьоывль фывльо&nbsp;</p>', NULL, 'hujnya-na-slajdere-nomer-1', NULL, NULL, 0, '2019-03-20 08:36:14', '2019-03-20 09:17:43', 'PUBLISHED'),
(7, 1, 1, 'Хуйня на слайдере номер 2', NULL, NULL, '<p>Проверка фыьв фьыв ьлдфыв льдфыьвл фдльвы ьлдфыв лдьфыьдвл фылв&nbsp;</p>', NULL, 'hujnya-na-slajdere-nomer-2', NULL, NULL, 0, '2019-03-20 08:36:34', '2019-03-20 09:17:18', 'PUBLISHED'),
(8, 1, 2, 'Какое-то преимущество', NULL, NULL, NULL, NULL, 'kakoe-to-preimushestvo', NULL, NULL, 0, '2019-03-20 09:25:39', '2019-03-20 09:25:39', 'PUBLISHED'),
(9, 1, 2, 'И ещё одно преимущество', NULL, NULL, NULL, NULL, 'i-eshyo-odno-preimushestvo', NULL, NULL, 0, '2019-03-20 09:25:55', '2019-03-20 09:25:55', 'PUBLISHED');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-03-15 20:56:22', '2019-03-15 20:56:22'),
(2, 'user', 'Normal User', '2019-03-15 20:56:22', '2019-03-15 20:56:22');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\March2019\\chFZQKzZiz8eu8ZghSSf.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(12, 'site.link.instagram', 'Instagram Link', 'https://google.com', NULL, 'text', 7, 'Site'),
(13, 'site.link.facebook', 'Facebook Link', 'https://google.com', NULL, 'text', 8, 'Site');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-03-15 20:56:23', '2019-03-15 20:56:23'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-03-15 20:56:23', '2019-03-15 20:56:23');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\March2019\\Ak63rwfjGycijVPkvH9I.png', NULL, '$2y$10$.rX/FN4jRiV1UNcAqwCnuuOHeubYIyctsOVQaKHWTIKRnf6pycuMW', 'dZubtnbUl909OhSpRzf4gSqk6xAv8iTJmp7tleDEjyXjuX5Tp7sSvKZdcdBC', '{\"locale\":\"ru\"}', '2019-03-15 20:56:23', '2019-03-15 21:02:42');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
