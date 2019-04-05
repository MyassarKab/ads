-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 06:55 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@typa.com', '$2y$10$vhyXS14101zQE8nT0MKyoObGpvgu1IBti9FnASbAuJzaDYHrtk8S.', 1, 'RyUt99Nz9oQzBtHaQ2pPjAHsnqHRVzgCe6pfqAALF47E0DOKvK1KCJPHSPCY', '2018-12-03 22:00:00', '2018-12-03 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_ar`, `name_tr`, `name_en`, `created_at`, `updated_at`) VALUES
(6, 'سامسونغ', 'Samsung', 'Samsung', '2019-01-21 16:40:03', '2019-01-21 16:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `brand_categories`
--

CREATE TABLE `brand_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_categories`
--

INSERT INTO `brand_categories` (`id`, `category_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(10, 6, 6, '2019-01-21 16:40:03', '2019-01-21 16:40:03'),
(11, 7, 6, '2019-01-21 16:40:03', '2019-01-21 16:40:03'),
(12, 8, 6, '2019-01-21 16:40:03', '2019-01-21 16:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'typa.jpg',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_tr`, `name_en`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(6, 'موبايلات و تابلت', 'seyyar', 'Mobiles & Tablets', 'upload/Category/CTk-mobile.png', NULL, '2018-12-21 14:01:05', '2019-01-23 14:52:07'),
(7, 'كومبيوتر و شبكات', 'Computers, IT & Networking', 'Computers, IT & Networking', 'upload/Category/5YJ-Computers.png', NULL, '2018-12-21 16:25:56', '2018-12-21 16:25:56'),
(8, 'الكترونيات', 'Electronics', 'Electronics', 'upload/Category/wXx-Electronics.png', NULL, '2018-12-21 16:37:10', '2018-12-21 16:37:10'),
(9, 'سيارات', 'Cars', 'Cars', 'upload/Category/Css-cars.png', NULL, '2018-12-21 16:39:58', '2018-12-21 16:39:58'),
(10, 'أثاث', 'Furnitures', 'Furnitures', 'upload/Category/0OK-Furnitures.png', NULL, '2018-12-21 16:42:07', '2018-12-21 16:42:07'),
(11, 'تجميل', 'Beauty', 'Beauty', 'upload/Category/qw9-be.png', NULL, '2018-12-21 17:25:17', '2018-12-21 17:25:17'),
(12, 'موبايلات', 'Mobiles', 'Mobiles', 'upload/Category/kbK-teba1.ico', 6, '2019-01-23 14:52:28', '2019-01-23 14:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_tr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name_ar`, `name_tr`, `name_en`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Afghanistan', '2018-10-20 15:37:43', '2018-10-20 15:37:43'),
(2, NULL, NULL, 'Albania', '2018-10-20 15:37:43', '2018-10-20 15:37:43'),
(3, NULL, NULL, 'Algeria', '2018-10-20 15:37:43', '2018-10-20 15:37:43'),
(4, NULL, NULL, 'American Samoa', '2018-10-20 15:37:43', '2018-10-20 15:37:43'),
(5, NULL, NULL, 'Andorra', '2018-10-20 15:37:43', '2018-10-20 15:37:43'),
(6, NULL, NULL, 'Angola', '2018-10-20 15:37:43', '2018-10-20 15:37:43'),
(7, NULL, NULL, 'Anguilla', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(8, NULL, NULL, 'Antarctica', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(9, NULL, NULL, 'Antigua and Barbuda', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(10, NULL, NULL, 'Argentina', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(11, NULL, NULL, 'Armenia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(12, NULL, NULL, 'Aruba', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(13, NULL, NULL, 'Australia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(14, NULL, NULL, 'Austria', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(15, NULL, NULL, 'Azerbaijan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(16, NULL, NULL, 'Bahamas', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(17, NULL, NULL, 'Bahrain', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(18, NULL, NULL, 'Bangladesh', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(19, NULL, NULL, 'Barbados', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(20, NULL, NULL, 'Belarus', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(21, NULL, NULL, 'Belgium', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(22, NULL, NULL, 'Belize', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(23, NULL, NULL, 'Benin', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(24, NULL, NULL, 'Bermuda', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(25, NULL, NULL, 'Bhutan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(26, NULL, NULL, 'Bolivia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(27, NULL, NULL, 'Bosnia and Herzegowina', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(28, NULL, NULL, 'Botswana', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(29, NULL, NULL, 'Bouvet Island', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(30, NULL, NULL, 'Brazil', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(31, NULL, NULL, 'British Indian Ocean Territory', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(32, NULL, NULL, 'Brunei Darussalam', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(33, NULL, NULL, 'Bulgaria', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(34, NULL, NULL, 'Burkina Faso', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(35, NULL, NULL, 'Burundi', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(36, NULL, NULL, 'Cambodia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(37, NULL, NULL, 'Cameroon', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(38, NULL, NULL, 'Canada', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(39, NULL, NULL, 'Cape Verde', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(40, NULL, NULL, 'Cayman Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(41, NULL, NULL, 'Central African Republic', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(42, NULL, NULL, 'Chad', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(43, NULL, NULL, 'Chile', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(44, NULL, NULL, 'China', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(45, NULL, NULL, 'Christmas Island', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(46, NULL, NULL, 'Cocos (Keeling) Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(47, NULL, NULL, 'Colombia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(48, NULL, NULL, 'Comoros', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(49, NULL, NULL, 'Congo', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(50, NULL, NULL, 'Congo, the Democratic Republic of the', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(51, NULL, NULL, 'Cook Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(52, NULL, NULL, 'Costa Rica', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(53, NULL, NULL, 'Cote d\'Ivoire', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(54, NULL, NULL, 'Croatia (Hrvatska)', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(55, NULL, NULL, 'Cuba', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(56, NULL, NULL, 'Cyprus', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(57, NULL, NULL, 'Czech Republic', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(58, NULL, NULL, 'Denmark', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(59, NULL, NULL, 'Djibouti', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(60, NULL, NULL, 'Dominica', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(61, NULL, NULL, 'Dominican Republic', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(62, NULL, NULL, 'East Timor', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(63, NULL, NULL, 'Ecuador', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(64, NULL, NULL, 'Egypt', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(65, NULL, NULL, 'El Salvador', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(66, NULL, NULL, 'Equatorial Guinea', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(67, NULL, NULL, 'Eritrea', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(68, NULL, NULL, 'Estonia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(69, NULL, NULL, 'Ethiopia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(70, NULL, NULL, 'Falkland Islands (Malvinas)', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(71, NULL, NULL, 'Faroe Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(72, NULL, NULL, 'Fiji', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(73, NULL, NULL, 'Finland', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(74, NULL, NULL, 'France', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(75, NULL, NULL, 'France Metropolitan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(76, NULL, NULL, 'French Guiana', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(77, NULL, NULL, 'French Polynesia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(78, NULL, NULL, 'French Southern Territories', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(79, NULL, NULL, 'Gabon', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(80, NULL, NULL, 'Gambia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(81, NULL, NULL, 'Georgia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(82, NULL, NULL, 'Germany', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(83, NULL, NULL, 'Ghana', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(84, NULL, NULL, 'Gibraltar', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(85, NULL, NULL, 'Greece', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(86, NULL, NULL, 'Greenland', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(87, NULL, NULL, 'Grenada', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(88, NULL, NULL, 'Guadeloupe', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(89, NULL, NULL, 'Guam', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(90, NULL, NULL, 'Guatemala', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(91, NULL, NULL, 'Guinea', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(92, NULL, NULL, 'Guinea-Bissau', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(93, NULL, NULL, 'Guyana', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(94, NULL, NULL, 'Haiti', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(95, NULL, NULL, 'Heard and Mc Donald Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(96, NULL, NULL, 'Holy See (Vatican City State)', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(97, NULL, NULL, 'Honduras', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(98, NULL, NULL, 'Hong Kong', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(99, NULL, NULL, 'Hungary', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(100, NULL, NULL, 'Iceland', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(101, NULL, NULL, 'India', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(102, NULL, NULL, 'Indonesia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(103, NULL, NULL, 'Iran (Islamic Republic of)', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(104, NULL, NULL, 'Iraq', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(105, NULL, NULL, 'Ireland', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(106, NULL, NULL, 'Israel', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(107, NULL, NULL, 'Italy', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(108, NULL, NULL, 'Jamaica', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(109, NULL, NULL, 'Japan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(110, NULL, NULL, 'Jordan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(111, NULL, NULL, 'Kazakhstan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(112, NULL, NULL, 'Kenya', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(113, NULL, NULL, 'Kiribati', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(114, NULL, NULL, 'Korea, Democratic People\'s Republic of', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(115, NULL, NULL, 'Korea, Republic of', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(116, NULL, NULL, 'Kuwait', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(117, NULL, NULL, 'Kyrgyzstan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(118, NULL, NULL, 'Lao, People\'s Democratic Republic', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(119, NULL, NULL, 'Latvia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(120, NULL, NULL, 'Lebanon', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(121, NULL, NULL, 'Lesotho', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(122, NULL, NULL, 'Liberia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(123, NULL, NULL, 'Libyan Arab Jamahiriya', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(124, NULL, NULL, 'Liechtenstein', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(125, NULL, NULL, 'Lithuania', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(126, NULL, NULL, 'Luxembourg', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(127, NULL, NULL, 'Macau', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(128, NULL, NULL, 'Macedonia, The Former Yugoslav Republic of', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(129, NULL, NULL, 'Madagascar', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(130, NULL, NULL, 'Malawi', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(131, NULL, NULL, 'Malaysia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(132, NULL, NULL, 'Maldives', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(133, NULL, NULL, 'Mali', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(134, NULL, NULL, 'Malta', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(135, NULL, NULL, 'Marshall Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(136, NULL, NULL, 'Martinique', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(137, NULL, NULL, 'Mauritania', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(138, NULL, NULL, 'Mauritius', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(139, NULL, NULL, 'Mayotte', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(140, NULL, NULL, 'Mexico', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(141, NULL, NULL, 'Micronesia, Federated States of', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(142, NULL, NULL, 'Moldova, Republic of', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(143, NULL, NULL, 'Monaco', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(144, NULL, NULL, 'Mongolia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(145, NULL, NULL, 'Montserrat', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(146, NULL, NULL, 'Morocco', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(147, NULL, NULL, 'Mozambique', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(148, NULL, NULL, 'Myanmar', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(149, NULL, NULL, 'Namibia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(150, NULL, NULL, 'Nauru', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(151, NULL, NULL, 'Nepal', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(152, NULL, NULL, 'Netherlands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(153, NULL, NULL, 'Netherlands Antilles', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(154, NULL, NULL, 'New Caledonia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(155, NULL, NULL, 'New Zealand', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(156, NULL, NULL, 'Nicaragua', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(157, NULL, NULL, 'Niger', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(158, NULL, NULL, 'Nigeria', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(159, NULL, NULL, 'Niue', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(160, NULL, NULL, 'Norfolk Island', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(161, NULL, NULL, 'Northern Mariana Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(162, NULL, NULL, 'Norway', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(163, NULL, NULL, 'Oman', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(164, NULL, NULL, 'Pakistan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(165, NULL, NULL, 'Palau', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(166, NULL, NULL, 'Panama', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(167, NULL, NULL, 'Papua New Guinea', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(168, NULL, NULL, 'Paraguay', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(169, NULL, NULL, 'Peru', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(170, NULL, NULL, 'Philippines', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(171, NULL, NULL, 'Pitcairn', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(172, NULL, NULL, 'Poland', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(173, NULL, NULL, 'Portugal', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(174, NULL, NULL, 'Puerto Rico', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(175, NULL, NULL, 'Qatar', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(176, NULL, NULL, 'Reunion', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(177, NULL, NULL, 'Romania', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(178, NULL, NULL, 'Russian Federation', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(179, NULL, NULL, 'Rwanda', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(180, NULL, NULL, 'Saint Kitts and Nevis', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(181, NULL, NULL, 'Saint Lucia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(182, NULL, NULL, 'Saint Vincent and the Grenadines', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(183, NULL, NULL, 'Samoa', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(184, NULL, NULL, 'San Marino', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(185, NULL, NULL, 'Sao Tome and Principe', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(186, NULL, NULL, 'Saudi Arabia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(187, NULL, NULL, 'Senegal', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(188, NULL, NULL, 'Seychelles', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(189, NULL, NULL, 'Sierra Leone', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(190, NULL, NULL, 'Singapore', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(191, NULL, NULL, 'Slovakia (Slovak Republic)', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(192, NULL, NULL, 'Slovenia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(193, NULL, NULL, 'Solomon Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(194, NULL, NULL, 'Somalia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(195, NULL, NULL, 'South Africa', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(196, NULL, NULL, 'South Georgia and the South Sandwich Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(197, NULL, NULL, 'Spain', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(198, NULL, NULL, 'Sri Lanka', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(199, NULL, NULL, 'St. Helena', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(200, NULL, NULL, 'St. Pierre and Miquelon', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(201, NULL, NULL, 'Sudan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(202, NULL, NULL, 'Suriname', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(203, NULL, NULL, 'Svalbard and Jan Mayen Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(204, NULL, NULL, 'Swaziland', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(205, NULL, NULL, 'Sweden', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(206, NULL, NULL, 'Switzerland', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(207, NULL, NULL, 'Syrian Arab Republic', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(208, NULL, NULL, 'Taiwan, Province of China', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(209, NULL, NULL, 'Tajikistan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(210, NULL, NULL, 'Tanzania, United Republic of', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(211, NULL, NULL, 'Thailand', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(212, NULL, NULL, 'Togo', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(213, NULL, NULL, 'Tokelau', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(214, NULL, NULL, 'Tonga', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(215, NULL, NULL, 'Trinidad and Tobago', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(216, NULL, NULL, 'Tunisia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(217, NULL, NULL, 'Turkey', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(218, NULL, NULL, 'Turkmenistan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(219, NULL, NULL, 'Turks and Caicos Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(220, NULL, NULL, 'Tuvalu', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(221, NULL, NULL, 'Uganda', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(222, NULL, NULL, 'Ukraine', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(223, NULL, NULL, 'United Arab Emirates', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(224, NULL, NULL, 'United Kingdom', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(225, NULL, NULL, 'United States', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(226, NULL, NULL, 'United States Minor Outlying Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(227, NULL, NULL, 'Uruguay', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(228, NULL, NULL, 'Uzbekistan', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(229, NULL, NULL, 'Vanuatu', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(230, NULL, NULL, 'Venezuela', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(231, NULL, NULL, 'Vietnam', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(232, NULL, NULL, 'Virgin Islands (British)', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(233, NULL, NULL, 'Virgin Islands (U.S.)', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(234, NULL, NULL, 'Wallis and Futuna Islands', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(235, NULL, NULL, 'Western Sahara', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(236, NULL, NULL, 'Yemen', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(237, NULL, NULL, 'Yugoslavia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(238, NULL, NULL, 'Zambia', '2018-10-20 15:37:44', '2018-10-20 15:37:44'),
(239, NULL, NULL, 'Zimbabwe', '2018-10-20 15:37:44', '2018-10-20 15:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `urgently_kind` int(11) NOT NULL,
  `end_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `product_id`, `urgently_kind`, `end_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2019-02-28', NULL, '2019-02-18 22:00:00', '2019-02-18 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'upload/products/ptF_ImageC_l5j', 1, '2019-02-03 20:14:56', '2019-02-03 20:14:56'),
(2, 'upload/products/oSx_ImageC_EUO', 2, '2019-02-03 20:18:04', '2019-02-03 20:18:04'),
(3, 'upload/products/2LD_ImageC_NVH', 3, '2019-02-05 18:07:27', '2019-02-05 18:07:27'),
(4, 'upload/products/9jZ_ImageC_eiA', 4, '2019-02-05 20:08:22', '2019-02-05 20:08:22'),
(5, 'upload/products/dgQ_ImageC_tfc', 10, '2019-02-05 20:18:13', '2019-02-05 20:18:13'),
(6, 'upload/products/2Wj_ImageC_R08', 10, '2019-02-05 20:18:13', '2019-02-05 20:18:13'),
(7, 'upload/products/6E1_ImageC_0Um', 10, '2019-02-05 20:18:13', '2019-02-05 20:18:13'),
(8, 'upload/products/V0J_ImageC_pD9', 10, '2019-02-05 20:18:13', '2019-02-05 20:18:13'),
(9, 'upload/products/iyX_ImageC_8m0', 11, '2019-02-05 20:22:34', '2019-02-05 20:22:34'),
(10, 'upload/products/yGO_ImageC_a3J', 11, '2019-02-05 20:22:34', '2019-02-05 20:22:34'),
(11, 'upload/products/1D0_ImageC_Ast', 11, '2019-02-05 20:22:34', '2019-02-05 20:22:34'),
(12, 'upload/products/UGa_ImageC_Bb0', 12, '2019-02-05 20:23:32', '2019-02-05 20:23:32'),
(13, 'upload/products/fux_ImageC_u0y', 18, '2019-02-05 20:56:52', '2019-02-05 20:56:52'),
(14, 'upload/products/RRR_ImageC_A6A', 19, '2019-02-05 21:06:35', '2019-02-05 21:06:35');

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
(3, '2018_10_16_190104_create_categories_table', 1),
(4, '2018_10_16_190435_create_brands_table', 1),
(5, '2018_10_16_190601_create_votes_table', 1),
(6, '2018_10_16_190714_create_brand_categories_table', 1),
(7, '2018_10_17_202143_create_models_table', 2),
(8, '2018_10_18_123457_create_countries_table', 2),
(9, '2018_10_19_185300_create_products_table', 2),
(10, '2018_10_19_190745_create_images_table', 3),
(11, '2018_10_23_193159_create_types_table', 4),
(12, '2018_11_06_193129_create_sliders_table', 5),
(13, '2018_12_04_194508_create_admins_table', 6),
(14, '2019_01_03_192600_create_verify_users_table', 7),
(15, '2019_01_20_211046_update_types_table', 8),
(16, '2019_02_17_205123_create_deals_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_tr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_tr` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `Contact_clicked` int(11) NOT NULL DEFAULT '0',
  `status_en` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `shipping` tinyint(4) NOT NULL DEFAULT '0',
  `negotiable` tinyint(4) NOT NULL DEFAULT '0',
  `urgently_kind` tinyint(2) NOT NULL DEFAULT '0',
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `Technical_condition_en` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'good',
  `Technical_condition_ar` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'جيد',
  `Technical_condition_tr` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'iyi',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_ar` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'جديد',
  `status_tr` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yeni'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_tr`, `name_ar`, `name_en`, `user_id`, `category_id`, `brand_id`, `type_id`, `country_id`, `adress`, `price`, `discount`, `description_ar`, `description_tr`, `description_en`, `view`, `Contact_clicked`, `status_en`, `shipping`, `negotiable`, `urgently_kind`, `approved`, `Technical_condition_en`, `Technical_condition_ar`, `Technical_condition_tr`, `image`, `expiry_date`, `is_active`, `created_at`, `updated_at`, `status_ar`, `status_tr`) VALUES
(1, NULL, NULL, 'test', 10, 6, 6, NULL, 3, 'istanbl', '200', NULL, NULL, NULL, 'test', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/s2L_Image_lGv', '2019-02-15', 1, '2019-02-03 20:14:56', '2019-02-03 20:14:56', 'جديد', 'yeni'),
(2, NULL, NULL, 'sscsc', 10, 6, 6, NULL, 2, 'istanbl', '200', NULL, NULL, NULL, 'scsdcsdc', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/59w_Image_3Eh', '2019-02-15', 1, '2019-02-03 20:18:04', '2019-02-03 20:18:04', 'جديد', 'yeni'),
(3, NULL, NULL, 's7  new for seal', 10, 6, 6, 4, 207, 'istanbl', '3600', NULL, NULL, NULL, 'new Samsung s7  for seal', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/Ymx_Image_D7l', '2019-02-28', 1, '2019-02-05 18:07:27', '2019-02-05 18:07:27', 'جديد', 'yeni'),
(4, NULL, NULL, 's7 s', 10, 6, 6, 4, 3, 'istanbl', '369', NULL, NULL, NULL, 's7 d', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/iIy_Image_04V', '2019-02-28', 1, '2019-02-05 20:08:21', '2019-02-05 20:08:21', 'جديد', 'yeni'),
(5, NULL, NULL, 'scscs', 10, 6, 6, 4, 2, 'asca', '652', NULL, NULL, NULL, 'scscsc', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/62F_Image_tKk', '2019-02-07', 1, '2019-02-05 20:10:08', '2019-02-05 20:10:08', 'جديد', 'yeni'),
(6, NULL, NULL, 'scscs', 10, 6, 6, 4, 2, 'asca', '652', NULL, NULL, NULL, 'scscsc', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/FKq_Image_qBk', '2019-02-07', 1, '2019-02-05 20:10:41', '2019-02-05 20:10:41', 'جديد', 'yeni'),
(7, NULL, NULL, 'scscs', 10, 6, 6, 4, 2, 'asca', '652', NULL, NULL, NULL, 'scscsc', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/Nuf_Image_ApV', '2019-02-07', 1, '2019-02-05 20:11:18', '2019-02-05 20:11:18', 'جديد', 'yeni'),
(8, NULL, NULL, 'scscs', 10, 6, 6, 4, 2, 'asca', '652', NULL, NULL, NULL, 'scscsc', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/1kf_Image_gZ8', '2019-02-07', 1, '2019-02-05 20:16:24', '2019-02-05 20:16:24', 'جديد', 'yeni'),
(9, NULL, NULL, 'scscs', 10, 6, 6, 4, 2, 'asca', '652', NULL, NULL, NULL, 'scscsc', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/PNJ_Image_51V', '2019-02-07', 1, '2019-02-05 20:17:31', '2019-02-05 20:17:31', 'جديد', 'yeni'),
(10, NULL, NULL, 'scscs', 10, 6, 6, 4, 2, 'asca', '652', NULL, NULL, NULL, 'scscsc', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/VTH_Image_7GS', '2019-02-07', 1, '2019-02-05 20:18:13', '2019-02-05 20:18:13', 'جديد', 'yeni'),
(11, NULL, NULL, 'wwewe', 10, 6, 6, 4, 11, 'cccc', '2332', NULL, NULL, NULL, 'weweewe', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/gwV_Image_Pe7', '2019-02-21', 1, '2019-02-05 20:22:34', '2019-02-05 20:22:34', 'جديد', 'yeni'),
(12, 'Samsung s7', 'سامسونغ s7', 'scsc', 10, 6, 6, 4, 15, 'istanbl', '200', NULL, NULL, NULL, 'scas', 0, 0, 'new', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/Zyn_Image_TYk', '2019-02-08', 1, '2019-02-05 20:23:31', '2019-02-05 20:23:31', 'جديد', 'yeni'),
(18, 'Samsung s7', 'سامسونغ s7', 'ere', 10, 6, 6, 4, 3, 'istanbl', '200', NULL, NULL, NULL, 'egregv', 0, 0, 'applied', 0, 0, 0, 0, 'good', 'جيد', 'iyi', 'upload/products/mYq_Image_vp4', '2019-02-15', 1, '2019-02-05 20:56:52', '2019-02-05 20:56:52', 'مستعمل', 'kullanılmış'),
(19, 'Samsung s7', 'سامسونغ s7', 's7 newww', 10, 6, 6, 4, 11, 'istanbl', '369', NULL, 'سامسونغ s7 جديد', 'Samsung s7 yeni', 's7 newww', 0, 0, 'new', 0, 1, 0, 1, 'good', 'جيد', 'iyi', 'upload/products/W5l_Image_TvA', '2019-02-21', 1, '2019-02-05 21:06:35', '2019-02-06 21:52:01', 'جديد', 'yeni');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name_ar`, `name_tr`, `name_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'feqe', 'vae', 'sdcs', 'upload/slider/E5gImage.jpg', '2018-11-06 20:16:03', '2018-11-09 11:27:54'),
(2, 'feqeeee', 'vae', 'sdcs', 'upload/slider/Aj9Image.jpg', '2018-11-06 20:16:39', '2018-11-09 11:28:09'),
(4, 'dfvd', 'dfdv', 'rer', 'upload/slider/VA9Image.jpg', '2018-11-09 11:29:26', '2018-11-09 11:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimage`
--

CREATE TABLE `testimage` (
  `id` int(11) NOT NULL,
  `image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_tr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name_ar`, `name_tr`, `name_en`, `category_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(4, 's7', 's7', 's7', 6, 6, '2019-01-23 14:33:08', '2019-01-23 14:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `rating` tinyint(4) NOT NULL DEFAULT '0',
  `blocked` tinyint(1) NOT NULL DEFAULT '0',
  `points` int(11) NOT NULL DEFAULT '0',
  `expiry_date` int(11) NOT NULL DEFAULT '0',
  `country_id` int(11) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `image`, `email`, `password`, `role`, `verified`, `rating`, `blocked`, `points`, `expiry_date`, `country_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '00963999233718', 'user.jpg', 'admin@typa.com', '$2y$10$IBbG79Ml7jfQ4YHpo2RF4ux7WVsJKxZockZZYFRBThvVe8mhunMQS', 1, 1, 0, 0, 0, 0, 1, 'T3PFioXaJ3oPmNqBDT0q4olGry2mbdfec0kN69I9FQhkJGiUJqX3FgELxav8', '2018-10-20 18:37:10', '2018-10-20 18:37:10'),
(2, 'user', '01221313433', NULL, 'user@user.com', '$2y$10$IBbG79Ml7jfQ4YHpo2RF4ux7WVsJKxZockZZYFRBThvVe8mhunMQS', 0, 1, 0, 0, 0, 0, 6, 'W4cVwVerAeBEFao7LajN25rAqqRJ4MfdISKZMehYnywEqFrONxcLdVZSiCA8', '2018-10-21 12:12:46', '2018-11-29 02:39:40'),
(3, 'user1', '1221313433', 'user.jpg', 'user1@user.com', '$2y$10$yLbACmZjDHNAkv/oJZiKY.5UfKnpPit5rVha5SwkZZUh8uqER1OMu', 0, 0, 0, 0, 0, 0, 207, NULL, '2018-11-22 21:38:14', '2018-11-22 21:38:14'),
(4, 'user5', '1221313433', 'user.jpg', 'user5@user.com', '$2y$10$u0VIxu3EZrmKNYqJwbPjw.xogdFkJqBuUkf56KQLWrnbNOqY69VXq', 0, 0, 0, 0, 0, 0, 3, 'ZkYo8ZhXCsBuDT3S9XuPLJQrmI4AwwfljmunoCfpI1LaBCe8Savw0qa73nOF', '2018-11-23 20:25:31', '2018-11-23 20:25:31'),
(5, 'user42', '1221313433', 'images\\user.jpg', 'user3@user.com', '$2y$10$cTOHdTXJP4oOsFqdxGGEDu/OIIig5083q8T1ljTMLmE4R0FMjcD2W', 0, 1, 0, 0, 50, 0, 6, 'YqR05yQ5uV7iGUwTFVikg2MQkkgN3D9fluf60JCzwpYQGehK8PqTgwvtu6yl', '2018-11-23 21:31:06', '2018-11-23 21:31:06'),
(6, 'user52', '00963999233718', 'user.jpg', 'myassar.kaboul@hotmail.com', '$2y$10$0jvpptF2lD4MNoevEYyDj.GIZfLoJBdCAXY/.s/YL.MKEQrljSErS', 0, 0, 0, 0, 0, 0, 207, NULL, '2018-12-04 14:48:07', '2018-12-04 14:48:07'),
(7, 'admin', '00963999233718', 'user.jpg', 'admin2@typa.com', '$2y$10$vhyXS14101zQE8nT0MKyoObGpvgu1IBti9FnASbAuJzaDYHrtk8S.', 1, 1, 0, 0, 0, 0, 207, '6FD0UpPpDIwdpbEHgA7xCTNHKdHcfJW9GWS21L2Ko5JWQoKk0eOjMuHkaoRQ', '2018-12-04 14:56:55', '2018-12-04 14:56:55'),
(10, 'user12', '00963999233718', 'upload/users/d7zQN.jpg', 'user12@user.com', '$2y$10$GhsThqXTjBypc0gdwjChUuIv6fjNkick/8RAjmS5ICgzrHedraWmW', 0, 1, 0, 0, 50, 0, 1, 'zfSwm7Cpvd0c3RmoFUjus7Y67HMS1e3MJPDtuxdeqjcMAt7foTFdN0K6nSbS', '2019-01-03 20:57:15', '2019-02-09 10:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(3, 10, 'h4oJ1E31qK3PONo2ZD0wEP5vLcxQ5POPxZnz1YVz', '2019-01-03 20:57:15', '2019-01-03 20:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_target_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_categories`
--
ALTER TABLE `brand_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_categories_category_id_foreign` (`category_id`),
  ADD KEY `brand_categories_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_id_foreign` (`parent_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deals_product_id_foreign` (`product_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_country_id_foreign` (`country_id`),
  ADD KEY `products_model_id_foreign` (`type_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_user_id_foreign` (`user_id`),
  ADD KEY `votes_user_target_id_foreign` (`user_target_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `brand_categories`
--
ALTER TABLE `brand_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand_categories`
--
ALTER TABLE `brand_categories`
  ADD CONSTRAINT `brand_categories_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `brand_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_model_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `country` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `votes_user_target_id_foreign` FOREIGN KEY (`user_target_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
