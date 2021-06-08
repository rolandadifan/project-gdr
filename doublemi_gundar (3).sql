-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2021 at 02:33 AM
-- Server version: 5.6.27
-- PHP Version: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doublemi_gundar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE IF NOT EXISTS `alumnis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `course_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `predicate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_top` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alumnis_user_id_foreign` (`user_id`),
  KEY `alumnis_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `user_id`, `course_id`, `name`, `predicate`, `thumbnail`, `is_top`, `review`, `created_at`, `updated_at`) VALUES
(1, 3, 5, NULL, NULL, NULL, '0', 'nyoba', '2021-05-15 20:42:18', '2021-05-15 20:42:18'),
(6, NULL, NULL, 'Bawel', 'Kucing', 'alumnus/SSqHdNSziiLye3dyUDPXy5AxZ6YWd5F5P0Erz8jE.jpg', '0', 'cc', '2021-05-16 08:39:21', '2021-05-16 09:37:58'),
(8, 4, 27, NULL, NULL, 'alumnus/bAjdVoH0kPAjrMVMFK0ZSWLZfLLGzlK1IbAbsJdx.jpg', '1', 'aa', '2021-05-16 09:42:52', '2021-05-16 09:42:52'),
(9, 5, 27, NULL, 'c', 'alumnus/Gx5CrhbZUtpFkYb5jHknYqE4hUMOQrnzpVGunQmA.png', '1', 'raasas', '2021-05-22 01:09:55', '2021-05-22 01:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` bigint(20) unsigned NOT NULL,
  `status_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_type_id_foreign` (`type_id`),
  KEY `articles_status_id_foreign` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `type_id`, `status_id`, `created_at`, `updated_at`, `group`) VALUES
(21, 2, 2, '2021-05-01 06:36:50', '2021-05-29 03:18:21', NULL),
(23, 2, 1, '2021-05-01 06:44:59', '2021-05-01 06:44:59', NULL),
(24, 2, 1, '2021-05-01 06:45:29', '2021-05-01 06:45:29', NULL),
(25, 3, 1, '2021-05-01 07:47:10', '2021-05-01 08:07:52', 'Reserach Group'),
(26, 3, 1, '2021-05-01 08:23:25', '2021-05-01 08:23:25', 'Reserach And Industri'),
(27, 3, 1, '2021-05-01 08:25:13', '2021-05-01 08:25:13', 'Responses Covid-19'),
(28, 1, 1, '2021-05-01 08:56:18', '2021-05-01 08:56:18', NULL),
(29, 4, 1, '2021-05-01 08:58:02', '2021-05-14 03:15:03', NULL),
(30, 1, 1, '2021-05-09 23:24:20', '2021-05-31 00:17:23', NULL),
(31, 1, 1, '2021-05-09 23:25:21', '2021-05-31 00:16:48', NULL),
(32, 4, 1, '2021-05-10 06:05:55', '2021-05-31 00:16:03', NULL),
(33, 4, 1, '2021-05-10 06:06:53', '2021-05-31 00:13:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_details`
--

CREATE TABLE IF NOT EXISTS `article_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` bigint(20) unsigned NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `article_details`
--

INSERT INTO `article_details` (`id`, `article_id`, `thumbnail`, `title`, `slug`, `excerpt`, `content`, `created_at`, `updated_at`) VALUES
(13, 21, 'artikel/xOaZkrS8dGRnXhFTjLgRr7kyaSaUcxRqBB7yHJjy.png', 'Gunadarma University International School 2021', 'gunadarma-university-international-school-2021', 'Some quick example text to build on the card title and make up the bulk of the card''s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium repellendus nemo placeat aperiam eligendi dolores necessitatibus unde odit facere distinctio in perferendis non esse, incidunt porro! Odio sed cum harum. Quos nulla magnam accusamus suscipit? Illum deleniti possimus nobis natus quasi deserunt saepe non totam, qui enim perspiciatis asperiores! Cupiditate ad quia eligendi porro assumenda, architecto fugit sit harum cumque! Officia ducimus explicabo soluta, ipsam quia beatae dolores sit molestiae cumque iure sapiente quisquam nemo sunt quo iste accusamus ex aperiam neque magnam. Dignissimos sit earum, autem eligendi quisquam voluptatem? Adipisci, optio fugiat. Molestias sed sit magnam distinctio repudiandae, vel et aut voluptatem ab adipisci assumenda id culpa ex porro numquam suscipit. Molestias facere aliquid debitis? Minus laudantium quidem eligendi! Dolores, dicta eaque itaque incidunt labore quas harum consequuntur, soluta delectus perferendis nobis, nesciunt voluptatum repellendus doloribus ad earum odit sapiente inventore nemo veritatis asperiores. Laborum minus molestiae modi dolores. Placeat repellendus nisi ab vel eligendi maiores a quisquam dolor eveniet provident nemo fugit excepturi aliquam dolore, nihil amet qui dolores nulla incidunt. Labore quidem voluptatibus dolores expedita voluptatem maiores? Quas vel aliquam esse facere sint sed, accusantium delectus ipsa quaerat commodi ex? Eius hic deleniti facilis placeat, quos quasi assumenda nulla, cum quisquam ad dignissimos dolor. Quasi, sequi reprehenderit! Consequatur corporis culpa, ea eaque architecto sed consectetur maxime odio facere fugiat error hic inventore omnis quidem officiis. Totam aliquid reprehenderit provident sint enim nulla esse incidunt iste sapiente dolorem. Fugiat ea exercitationem distinctio cumque esse cum necessitatibus iusto repellat ducimus quaerat molestiae, animi laborum odio sed veritatis et explicabo incidunt excepturi consequatur mollitia. Voluptates at eius similique modi officiis. Nostrum dolor minus unde repellendus veritatis rem omnis suscipit dolore! Veniam quidem voluptatum animi. Illum, culpa exercitationem. Culpa minima velit suscipit eos corrupti, fugit sapiente. Magni facere omnis distinctio rerum. Ad, illum neque. Vero laborum, facere nostrum iste doloremque fugiat officiis fugit cum vitae assumenda perspiciatis pariatur molestias harum unde eum aperiam repellendus repudiandae blanditiis autem quia, excepturi a. Culpa. Cupiditate necessitatibus optio vitae, dicta aliquid, porro a, itaque qui voluptas aliquam quos! Culpa error libero consequuntur a. Optio necessitatibus sit, magnam nisi inventore explicabo debitis similique autem deserunt maxime? Nesciunt magni sapiente voluptatibus mollitia aspernatur temporibus. Sunt, iure rem magnam non ex est repellat! Eligendi, quo cupiditate? Sapiente quidem laboriosam repellendus, accusantium eveniet aut tempore nihil exercitationem soluta distinctio? Maxime, harum. Facilis sunt atque adipisci maiores ipsam porro nesciunt. Laborum possimus veritatis assumenda dignissimos neque culpa eum molestiae consequuntur omnis. Eius eligendi eveniet id neque delectus esse placeat aperiam. Doloremque, vel pariatur laboriosam laborum sit nobis quisquam, asperiores consequatur voluptas deleniti voluptate omnis esse dignissimos quos similique? Quas sapiente ab delectus accusamus temporibus deleniti eum a ipsum odit tempore.</p>\r\n\r\n<p><strong>Program Details</strong></p>\r\n\r\n<p>Course: Introduction of Marketing and Culture in Taiwan (2 credits)</p>\r\n\r\n<ul>\r\n	<li>Marketing and Culture Introduction</li>\r\n	<li>Sales and Promotion</li>\r\n	<li>Multinational Marketing</li>\r\n	<li>Taiwanese Food Culture</li>\r\n	<li>Taiwanese Religious Culture</li>\r\n	<li>Aboriginal Instrument Learning</li>\r\n</ul>\r\n\r\n<p><strong>Course: Chinese Language (1 credit)</strong></p>\r\n\r\n<ul>\r\n	<li>Basic Pronunciation</li>\r\n	<li>Four tones in Mandarin Chinese</li>\r\n	<li>Number and time</li>\r\n	<li>Ordering food</li>\r\n	<li>Self-introduction</li>\r\n</ul>\r\n\r\n<p>Program Duration:&nbsp;11-31 July 2021 in Gunadarma</p>\r\n\r\n<p>Application Deadline :&nbsp;30 April 2021</p>\r\n\r\n<p>Note</p>\r\n\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, deleniti temporibus. Dolore, eaque! Quae eaque aut et temporibus facilis! Illo quisquam quod dolor aperiam deleniti. Corporis possimus in ipsam fugit.</li>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam possimus fuga quidem aspernatur adipisci veniam. Necessitatibus, corporis! Quo asperiores pariatur animi iste aperiam cumque iusto? Neque amet soluta delectus id?</li>\r\n</ul>\r\n\r\n<p><a href="#">Click here to go to the application link&nbsp;</a>(applicants may register by themselves, no nomination/registration to AGE is required)</p>\r\n\r\n<p><a href="#">Click here to download the program&rsquo;s brochure</a></p>', '2021-05-01 06:36:51', '2021-05-01 06:36:51'),
(15, 23, 'artikel/i8KcQloo8TLVRrhXyep50D7lvrT1lj6jwuIOe2dY.png', 'Gunadarma University International School 2020', 'gunadarma-university-international-school-2020', 'Some quick example text to build on the card title and make up the bulk of the card''s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium repellendus nemo placeat aperiam eligendi dolores necessitatibus unde odit facere distinctio in perferendis non esse, incidunt porro! Odio sed cum harum. Quos nulla magnam accusamus suscipit? Illum deleniti possimus nobis natus quasi deserunt saepe non totam, qui enim perspiciatis asperiores! Cupiditate ad quia eligendi porro assumenda, architecto fugit sit harum cumque! Officia ducimus explicabo soluta, ipsam quia beatae dolores sit molestiae cumque iure sapiente quisquam nemo sunt quo iste accusamus ex aperiam neque magnam. Dignissimos sit earum, autem eligendi quisquam voluptatem? Adipisci, optio fugiat. Molestias sed sit magnam distinctio repudiandae, vel et aut voluptatem ab adipisci assumenda id culpa ex porro numquam suscipit. Molestias facere aliquid debitis? Minus laudantium quidem eligendi! Dolores, dicta eaque itaque incidunt labore quas harum consequuntur, soluta delectus perferendis nobis, nesciunt voluptatum repellendus doloribus ad earum odit sapiente inventore nemo veritatis asperiores. Laborum minus molestiae modi dolores. Placeat repellendus nisi ab vel eligendi maiores a quisquam dolor eveniet provident nemo fugit excepturi aliquam dolore, nihil amet qui dolores nulla incidunt. Labore quidem voluptatibus dolores expedita voluptatem maiores? Quas vel aliquam esse facere sint sed, accusantium delectus ipsa quaerat commodi ex? Eius hic deleniti facilis placeat, quos quasi assumenda nulla, cum quisquam ad dignissimos dolor. Quasi, sequi reprehenderit! Consequatur corporis culpa, ea eaque architecto sed consectetur maxime odio facere fugiat error hic inventore omnis quidem officiis. Totam aliquid reprehenderit provident sint enim nulla esse incidunt iste sapiente dolorem. Fugiat ea exercitationem distinctio cumque esse cum necessitatibus iusto repellat ducimus quaerat molestiae, animi laborum odio sed veritatis et explicabo incidunt excepturi consequatur mollitia. Voluptates at eius similique modi officiis. Nostrum dolor minus unde repellendus veritatis rem omnis suscipit dolore! Veniam quidem voluptatum animi. Illum, culpa exercitationem. Culpa minima velit suscipit eos corrupti, fugit sapiente. Magni facere omnis distinctio rerum. Ad, illum neque. Vero laborum, facere nostrum iste doloremque fugiat officiis fugit cum vitae assumenda perspiciatis pariatur molestias harum unde eum aperiam repellendus repudiandae blanditiis autem quia, excepturi a. Culpa. Cupiditate necessitatibus optio vitae, dicta aliquid, porro a, itaque qui voluptas aliquam quos! Culpa error libero consequuntur a. Optio necessitatibus sit, magnam nisi inventore explicabo debitis similique autem deserunt maxime? Nesciunt magni sapiente voluptatibus mollitia aspernatur temporibus. Sunt, iure rem magnam non ex est repellat! Eligendi, quo cupiditate? Sapiente quidem laboriosam repellendus, accusantium eveniet aut tempore nihil exercitationem soluta distinctio? Maxime, harum. Facilis sunt atque adipisci maiores ipsam porro nesciunt. Laborum possimus veritatis assumenda dignissimos neque culpa eum molestiae consequuntur omnis. Eius eligendi eveniet id neque delectus esse placeat aperiam. Doloremque, vel pariatur laboriosam laborum sit nobis quisquam, asperiores consequatur voluptas deleniti voluptate omnis esse dignissimos quos similique? Quas sapiente ab delectus accusamus temporibus deleniti eum a ipsum odit tempore.</p>\r\n\r\n<p>Program Details</p>\r\n\r\n<p>Course: Introduction of Marketing and Culture in Taiwan (2 credits)</p>\r\n\r\n<ul>\r\n	<li>Marketing and Culture Introduction</li>\r\n	<li>Sales and Promotion</li>\r\n	<li>Multinational Marketing</li>\r\n	<li>Taiwanese Food Culture</li>\r\n	<li>Taiwanese Religious Culture</li>\r\n	<li>Aboriginal Instrument Learning</li>\r\n</ul>\r\n\r\n<p>Course: Chinese Language (1 credit)</p>\r\n\r\n<ul>\r\n	<li>Basic Pronunciation</li>\r\n	<li>Four tones in Mandarin Chinese</li>\r\n	<li>Number and time</li>\r\n	<li>Ordering food</li>\r\n	<li>Self-introduction</li>\r\n</ul>\r\n\r\n<p>Program Duration:&nbsp;11-31 July 2021 in Gunadarma</p>\r\n\r\n<p>Application Deadline :&nbsp;30 April 2021</p>\r\n\r\n<p>Note</p>\r\n\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, deleniti temporibus. Dolore, eaque! Quae eaque aut et temporibus facilis! Illo quisquam quod dolor aperiam deleniti. Corporis possimus in ipsam fugit.</li>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam possimus fuga quidem aspernatur adipisci veniam. Necessitatibus, corporis! Quo asperiores pariatur animi iste aperiam cumque iusto? Neque amet soluta delectus id?</li>\r\n</ul>\r\n\r\n<p><a href="#">Click here to go to the application link&nbsp;</a>(applicants may register by themselves, no nomination/registration to AGE is required)</p>\r\n\r\n<p><a href="#">Click here to download the program&rsquo;s brochure</a></p>', '2021-05-01 06:44:59', '2021-05-01 06:45:51'),
(16, 24, 'artikel/Mdrofnnp3vIyBkdRr3xkC2GvFgtWlcADjtsnuYTk.png', 'Gunadarma University International School 2019', 'gunadarma-university-international-school-2019', 'Some quick example text to build on the card title and make up the bulk of the card''s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium repellendus nemo placeat aperiam eligendi dolores necessitatibus unde odit facere distinctio in perferendis non esse, incidunt porro! Odio sed cum harum. Quos nulla magnam accusamus suscipit? Illum deleniti possimus nobis natus quasi deserunt saepe non totam, qui enim perspiciatis asperiores! Cupiditate ad quia eligendi porro assumenda, architecto fugit sit harum cumque! Officia ducimus explicabo soluta, ipsam quia beatae dolores sit molestiae cumque iure sapiente quisquam nemo sunt quo iste accusamus ex aperiam neque magnam. Dignissimos sit earum, autem eligendi quisquam voluptatem? Adipisci, optio fugiat. Molestias sed sit magnam distinctio repudiandae, vel et aut voluptatem ab adipisci assumenda id culpa ex porro numquam suscipit. Molestias facere aliquid debitis? Minus laudantium quidem eligendi! Dolores, dicta eaque itaque incidunt labore quas harum consequuntur, soluta delectus perferendis nobis, nesciunt voluptatum repellendus doloribus ad earum odit sapiente inventore nemo veritatis asperiores. Laborum minus molestiae modi dolores. Placeat repellendus nisi ab vel eligendi maiores a quisquam dolor eveniet provident nemo fugit excepturi aliquam dolore, nihil amet qui dolores nulla incidunt. Labore quidem voluptatibus dolores expedita voluptatem maiores? Quas vel aliquam esse facere sint sed, accusantium delectus ipsa quaerat commodi ex? Eius hic deleniti facilis placeat, quos quasi assumenda nulla, cum quisquam ad dignissimos dolor. Quasi, sequi reprehenderit! Consequatur corporis culpa, ea eaque architecto sed consectetur maxime odio facere fugiat error hic inventore omnis quidem officiis. Totam aliquid reprehenderit provident sint enim nulla esse incidunt iste sapiente dolorem. Fugiat ea exercitationem distinctio cumque esse cum necessitatibus iusto repellat ducimus quaerat molestiae, animi laborum odio sed veritatis et explicabo incidunt excepturi consequatur mollitia. Voluptates at eius similique modi officiis. Nostrum dolor minus unde repellendus veritatis rem omnis suscipit dolore! Veniam quidem voluptatum animi. Illum, culpa exercitationem. Culpa minima velit suscipit eos corrupti, fugit sapiente. Magni facere omnis distinctio rerum. Ad, illum neque. Vero laborum, facere nostrum iste doloremque fugiat officiis fugit cum vitae assumenda perspiciatis pariatur molestias harum unde eum aperiam repellendus repudiandae blanditiis autem quia, excepturi a. Culpa. Cupiditate necessitatibus optio vitae, dicta aliquid, porro a, itaque qui voluptas aliquam quos! Culpa error libero consequuntur a. Optio necessitatibus sit, magnam nisi inventore explicabo debitis similique autem deserunt maxime? Nesciunt magni sapiente voluptatibus mollitia aspernatur temporibus. Sunt, iure rem magnam non ex est repellat! Eligendi, quo cupiditate? Sapiente quidem laboriosam repellendus, accusantium eveniet aut tempore nihil exercitationem soluta distinctio? Maxime, harum. Facilis sunt atque adipisci maiores ipsam porro nesciunt. Laborum possimus veritatis assumenda dignissimos neque culpa eum molestiae consequuntur omnis. Eius eligendi eveniet id neque delectus esse placeat aperiam. Doloremque, vel pariatur laboriosam laborum sit nobis quisquam, asperiores consequatur voluptas deleniti voluptate omnis esse dignissimos quos similique? Quas sapiente ab delectus accusamus temporibus deleniti eum a ipsum odit tempore.</p>\r\n\r\n<p>Program Details</p>\r\n\r\n<p>Course: Introduction of Marketing and Culture in Taiwan (2 credits)</p>\r\n\r\n<ul>\r\n	<li>Marketing and Culture Introduction</li>\r\n	<li>Sales and Promotion</li>\r\n	<li>Multinational Marketing</li>\r\n	<li>Taiwanese Food Culture</li>\r\n	<li>Taiwanese Religious Culture</li>\r\n	<li>Aboriginal Instrument Learning</li>\r\n</ul>\r\n\r\n<p>Course: Chinese Language (1 credit)</p>\r\n\r\n<ul>\r\n	<li>Basic Pronunciation</li>\r\n	<li>Four tones in Mandarin Chinese</li>\r\n	<li>Number and time</li>\r\n	<li>Ordering food</li>\r\n	<li>Self-introduction</li>\r\n</ul>\r\n\r\n<p>Program Duration:&nbsp;11-31 July 2021 in Gunadarma</p>\r\n\r\n<p>Application Deadline :&nbsp;30 April 2021</p>\r\n\r\n<p>Note</p>\r\n\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, deleniti temporibus. Dolore, eaque! Quae eaque aut et temporibus facilis! Illo quisquam quod dolor aperiam deleniti. Corporis possimus in ipsam fugit.</li>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam possimus fuga quidem aspernatur adipisci veniam. Necessitatibus, corporis! Quo asperiores pariatur animi iste aperiam cumque iusto? Neque amet soluta delectus id?</li>\r\n</ul>\r\n\r\n<p><a href="#">Click here to go to the application link&nbsp;</a>(applicants may register by themselves, no nomination/registration to AGE is required)</p>\r\n\r\n<p><a href="#">Click here to download the program&rsquo;s brochure</a></p>', '2021-05-01 06:45:29', '2021-05-01 06:45:29'),
(17, 25, 'artikel/q0t23oZifbfja5QS4pBwSMbzkve6HCIlNaRGyCF9.png', 'The Importance of Implementing Social Distancing to Prevent COVID-19', 'the-importance-of-implementing-social-distancing-to-prevent-covid-19', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe et blanditiis quia earum alias quisquam, molestias totam consectetur illo similique aliquam quidem illum consequatur nobis repu', '<p>test</p>', '2021-05-01 07:47:10', '2021-05-01 07:47:10'),
(18, 26, 'artikel/UdNHeSoPMwVu1Z8Dlhxg1GKJSFiUnQuM9r30XIo3.png', 'The Importance of Implementing Social Distancing to Prevent COVID-19', 'the-importance-of-implementing-social-distancing-to-prevent-covid-19', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe et blanditiis quia earum alias quisquam, molestias totam consectetur illo similique aliquam quidem illum consequatur nobis repu', '<p>test</p>', '2021-05-01 08:23:25', '2021-05-01 08:23:25'),
(19, 27, 'artikel/v1GqAbWBy7su0DyhkCoZkvTfMvhvtyYk1IS9GhL3.png', 'The Importance of Implementing Social Distancing to Prevent COVID-19', 'the-importance-of-implementing-social-distancing-to-prevent-covid-19', 'The Importance of Implementing Social Distancing to Prevent COVID-19', '<p>test</p>', '2021-05-01 08:25:13', '2021-05-01 08:25:13'),
(20, 28, 'artikel/pE2LXjAGanXDdM93kRJ5oeoA0glMS0P9Nb7mjB2y.png', 'test', 'test', 'test', '<p>test</p>', '2021-05-01 08:56:18', '2021-05-01 08:56:18'),
(21, 29, 'artikel/XfA1t7rJtfKECio7LcYt89n9JiZQ8S4c1C8fyhMD.png', 'test event1', 'test-event1', 'test', '<p>test</p>', '2021-05-01 08:58:02', '2021-05-14 03:15:03'),
(22, 30, 'artikel/Yzior0oumDK0xVLDoBTbeHhWkBgZdavSy46QNqdj.png', 'test2', 'test2', 'test', '<p>test</p>', '2021-05-09 23:24:20', '2021-05-31 00:17:23'),
(23, 31, 'artikel/AOCiKNW4Siom8ezqFZFfyMbjiYGjK8CNLvH7qxhy.png', 'test3', 'test3', 'test', '<p>test</p>', '2021-05-09 23:25:21', '2021-05-31 00:16:48'),
(24, 32, 'artikel/7YEYfBvNXvcoeeO2zM0u99vuhs98Lk0PxHnjGYv1.png', 'test2 even', 'test2-even', 'test', '<p>test</p>', '2021-05-10 06:05:55', '2021-05-31 00:16:03'),
(25, 33, 'artikel/0cHj2Yk7x1A55Yka4eEB0Tzrr31eboJKDmHSRcAg.png', 'test3 event3', 'test3-event3', 'test', '<p>test</p>', '2021-05-10 06:06:54', '2021-05-31 00:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `article_types`
--

CREATE TABLE IF NOT EXISTS `article_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `article_types`
--

INSERT INTO `article_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'news', '2021-04-26 15:56:27', '2021-04-26 15:56:27'),
(2, 'scholarship', '2021-04-26 15:56:27', '2021-04-26 15:56:27'),
(3, 'research', '2021-04-26 15:56:27', '2021-04-26 15:56:27'),
(4, 'event', '2021-04-26 15:56:27', '2021-04-26 15:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(240, 'ME', 'MONTENEGRO', 'Montenegro', NULL, NULL, 381),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'RS', 'SERBIA', 'Serbia', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` bigint(20) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_status_id_foreign` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `status_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(5, 2, 'computer-science', 'Computer Science', '2021-04-25 07:02:15', '2021-04-26 06:56:25'),
(16, 2, 'information-system', 'Information System', '2021-04-26 07:48:45', '2021-04-27 07:29:05'),
(26, 2, 'test-master', 'test master', '2021-05-01 09:19:06', '2021-05-01 09:22:26'),
(27, 2, 'test-bachelor', 'test bachelor', '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(28, 2, 'test-doctor', 'test doctor', '2021-05-01 09:24:03', '2021-05-01 09:24:03'),
(39, 1, 'information-system-tech-no', 'Information System tech no', '2021-05-17 06:00:15', '2021-05-17 06:00:15'),
(40, 1, 'information-tech-no', 'Information tech no', '2021-05-17 07:18:59', '2021-05-17 07:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE IF NOT EXISTS `course_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) unsigned NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` enum('non','diploma','bachelor','master','doctor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_dates` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deaken_student` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_id`, `thumbnail`, `title`, `degree`, `duration`, `campus`, `key_dates`, `deaken_student`, `content`, `created_at`, `updated_at`) VALUES
(2, 16, NULL, NULL, 'diploma', '4 year full-time or part-time equivalent', 'gunadarma', 'ini key dates', 'ini deakin', 'ini content', '2021-04-26 07:48:45', '2021-04-27 07:32:36'),
(12, 26, NULL, NULL, 'master', '4 year full-time or part-time equivalent', 'H', 'ini key dates', 'ini deakin', 'test', '2021-05-01 09:19:06', '2021-05-01 09:22:27'),
(13, 27, NULL, NULL, 'bachelor', '4 year full-time or part-time equivalent', 'C', 'ini key dates', 'ini deakin', 'test', '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(14, 28, NULL, NULL, 'doctor', '4 year full-time or part-time equivalent', 'gunadarma', 'ini key dates', 'ini deakin', 'test', '2021-05-01 09:24:03', '2021-05-01 09:24:03'),
(25, 39, 'course/yJZRMB7RvNojF8hyPMqrW4GaCGHEM3z5Z3QqdIaA.png', NULL, 'non', NULL, NULL, NULL, NULL, 'test some', '2021-05-17 06:00:15', '2021-05-17 06:00:15'),
(26, 40, 'course/XoH3CxlppNo8p4T2dm5FLsysEkrzlrZunWfROdp4.png', NULL, 'non', NULL, NULL, NULL, NULL, 'test1', '2021-05-17 07:18:59', '2021-05-17 07:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `course_detail_infos`
--

CREATE TABLE IF NOT EXISTS `course_detail_infos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_info_id` bigint(20) unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_info_id` (`course_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_infos`
--

CREATE TABLE IF NOT EXISTS `course_infos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_detail_id` bigint(20) unsigned NOT NULL,
  `key` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_detail_id` (`course_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `course_infos`
--

INSERT INTO `course_infos` (`id`, `course_detail_id`, `key`, `title`, `info`, `created_at`, `updated_at`) VALUES
(6, 25, 'info1', 'test1 updated', '{"detail1":"test1 updated","detail2":"test2","detail3":"test3"}', '2021-05-17 06:00:15', '2021-05-17 06:39:04'),
(7, 25, 'info2', 'test2 updated', '{"detail1":"test2 updated","detail2":"test2","detail3":"test2"}', '2021-05-17 06:00:15', '2021-05-17 06:41:56'),
(8, 25, 'info3', 'test3 updated', '{"detail1":"test3 updated","detail2":"test3","detail3":"test3"}', '2021-05-17 06:00:15', '2021-05-17 06:43:32'),
(10, 25, 'info4', 'TEST4', '{"detail1":"TEST4","detail2":"TEST4","detail3":"test 3"}', '2021-05-17 06:51:55', '2021-05-17 08:09:29'),
(11, 26, 'info1', NULL, '{"detail1":null,"detail2":null,"detail3":null}', '2021-05-17 07:18:59', '2021-05-17 07:18:59'),
(12, 26, 'info2', NULL, '{"detail1":null,"detail2":null,"detail3":null}', '2021-05-17 07:18:59', '2021-05-17 07:18:59'),
(13, 26, 'info3', NULL, '{"detail1":null,"detail2":null,"detail3":null}', '2021-05-17 07:18:59', '2021-05-17 07:18:59'),
(14, 26, 'info4', NULL, '{"detail1":null,"detail2":null,"detail3":null}', '2021-05-17 07:18:59', '2021-05-17 07:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `course_prices`
--

CREATE TABLE IF NOT EXISTS `course_prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_detail_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_detail_id` (`course_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=78 ;

--
-- Dumping data for table `course_prices`
--

INSERT INTO `course_prices` (`id`, `course_detail_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(51, 12, 'AA', 1000, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(52, 12, 'AA_BPP', 100, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(53, 12, 'AA_SKS', 1000, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(54, 12, 'A', 1000, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(55, 12, 'A_BPP', 1000, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(56, 12, 'A_SKS', 0, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(57, 12, 'B', 1000, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(58, 12, 'B_BPP', 1000, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(59, 12, 'B_SKS', 1000, '2021-05-01 09:19:06', '2021-05-01 09:19:06'),
(60, 13, 'AA', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(61, 13, 'AA_BPP', 9000, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(62, 13, 'AA_SKS', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(63, 13, 'A', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(64, 13, 'A_BPP', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(65, 13, 'A_SKS', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(66, 13, 'B', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(67, 13, 'B_BPP', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(68, 13, 'B_SKS', 0, '2021-05-01 09:23:24', '2021-05-01 09:23:24'),
(69, 14, 'AA', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(70, 14, 'AA_BPP', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(71, 14, 'AA_SKS', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(72, 14, 'A', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(73, 14, 'A_BPP', 97564646, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(74, 14, 'A_SKS', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(75, 14, 'B', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(76, 14, 'B_BPP', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04'),
(77, 14, 'B_SKS', 0, '2021-05-01 09:24:04', '2021-05-01 09:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE IF NOT EXISTS `enrollments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `status_id` bigint(20) unsigned NOT NULL,
  `university` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enrollments_user_id_foreign` (`user_id`),
  KEY `enrollments_course_id_foreign` (`course_id`),
  KEY `enrollments_status_id_foreign` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `user_id`, `course_id`, `status_id`, `university`, `created_at`, `updated_at`) VALUES
(1, 6, 26, 4, 'Universitas Telkom', '2021-05-25 22:16:25', '2021-05-30 03:28:44'),
(5, 6, 39, 4, 'Universitas Telkom', '2021-05-30 23:33:45', '2021-05-31 20:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `key_dates`
--

CREATE TABLE IF NOT EXISTS `key_dates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` bigint(20) unsigned NOT NULL,
  `period` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `key_dates_status_id_foreign` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `key_dates`
--

INSERT INTO `key_dates` (`id`, `status_id`, `period`, `open_status`, `close_date`, `created_at`, `updated_at`) VALUES
(2, 2, 'Trimester 1, 2099', 'close', '2021-05-23', '2021-05-21 19:51:18', '2021-05-22 00:44:48'),
(7, 2, 'Trimester 2, 2021', 'open', '2021-05-17', '2021-05-21 23:06:26', '2021-05-21 23:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `key_date_details`
--

CREATE TABLE IF NOT EXISTS `key_date_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key_date_id` bigint(20) unsigned NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activities` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `key_date_details_key_date_id_foreign` (`key_date_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `key_date_details`
--

INSERT INTO `key_date_details` (`id`, `key_date_id`, `title`, `activities`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, '11 results released', 'test act 2', '2021-05-20', '2021-05-21 19:51:18', '2021-05-21 23:07:07'),
(2, 2, 'test 2', 'test act', '2021-05-18', '2021-05-21 19:51:18', '2021-05-21 19:51:18'),
(3, 2, 'Exams End', 'Exams End', 'Monday 8 March', '2021-05-21 21:05:54', '2021-05-21 21:05:54'),
(11, 7, '11 teaching period begins', 'teaching period begins', 'Monday 8 March', '2021-05-21 23:06:26', '2021-05-21 23:06:26'),
(12, 7, '11 teaching period ends', 'teaching period begins', 'Friday 18 June', '2021-05-21 23:06:26', '2021-05-21 23:06:26'),
(13, 7, 'Exams End', 'teaching period begins', 'Thursday 8 July', '2021-05-21 23:06:26', '2021-05-21 23:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `campus` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `campus`, `thumbnail`, `address`, `phone`, `ext`, `fax`, `created_at`, `updated_at`) VALUES
(1, 'Campus J1', NULL, 'Jl. Cemara Raya No.57, RT.006/RW.006A, Jakasampurna Kec. Bekasi Bar., Kota Bks, Jawa Barat 17145 Indonesia', '(021) 88860117', NULL, NULL, '2021-05-22 06:04:29', '2021-05-22 06:45:21'),
(2, 'Campus J2', NULL, 'Jl. Cemara Raya No.57, RT.006/RW.006A, Jakasampurna Kec. Bekasi Bar., Kota Bks, Jawa Barat 17145 Indonesia', '(021) 88954184', NULL, NULL, '2021-05-22 06:51:49', '2021-05-22 06:51:49'),
(3, 'Campus J3', NULL, 'Jalan Cempaka - Margahayu No., Jatimulya Kec. Tambun Sel., Bekasi, Jawa Barat 17510 Indonesia.', '(021) 88954184', NULL, NULL, '2021-05-22 06:52:03', '2021-05-22 06:57:39'),
(4, 'Campus D', NULL, 'Jalan Cempaka - Margahayu No., Jatimulya Kec. Tambun Sel., Bekasi, Jawa Barat 17510 Indonesia.', '(021) 88954184', NULL, NULL, '2021-05-22 07:00:20', '2021-05-22 07:00:20'),
(5, 'Campus C', NULL, 'testing', '0219444', NULL, NULL, '2021-05-22 07:02:53', '2021-05-22 07:02:53'),
(6, 'Campus F', NULL, 'ADADD', '1212', NULL, NULL, '2021-05-22 07:10:03', '2021-05-22 07:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE IF NOT EXISTS `menu_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) unsigned DEFAULT NULL,
  `status_id` bigint(20) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_details_status_id_foreign` (`status_id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`id`, `menu_id`, `status_id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(3, NULL, 2, 'member info', 'member-info', '<p>ini adahal contoh halaman</p>', '2021-05-14 20:20:42', '2021-05-22 05:30:46'),
(4, NULL, 2, 'testing', 'testing', '<p>testing</p>', '2021-05-22 05:31:08', '2021-05-22 05:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=46 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_04_24_070253_create_cities_table', 1),
(4, '2021_04_24_070312_create_provinces_table', 1),
(5, '2021_04_24_070325_create_countries_table', 1),
(6, '2021_04_24_070400_create_post_codes_table', 1),
(7, '2021_04_24_073004_create_statuses_table', 1),
(8, '2021_04_24_074849_create_user_details_table', 1),
(9, '2021_04_24_075526_create_user_fundings_table', 1),
(10, '2021_04_24_075950_create_user_passports_table', 1),
(11, '2021_04_24_080156_create_user_residances_table', 1),
(12, '2021_04_24_080821_create_user_studies_table', 1),
(13, '2021_04_24_080940_create_user_uploads_table', 1),
(16, '2021_04_24_082125_create_courses_table', 1),
(17, '2021_04_24_082254_create_course_details_table', 1),
(18, '2021_04_24_082721_create_course_infos_table', 1),
(19, '2021_04_24_082930_create_course_prices_table', 1),
(20, '2021_04_24_083102_create_course_detail_infos_table', 1),
(21, '2021_04_24_083526_create_enrollments_table', 1),
(22, '2021_04_24_083744_create_menus_table', 1),
(23, '2021_04_24_083837_create_menu_details_table', 2),
(24, '2021_04_25_131013_add_thumbnail_to_course_details_table', 3),
(25, '2021_04_24_081237_create_article_types_table', 4),
(26, '2021_04_24_081238_create_articles_table', 4),
(27, '2021_04_24_081357_create_article_details_table', 4),
(28, '2021_04_27_151254_add_thumbnail_to_article_details_table', 5),
(29, '2021_05_01_145021_add_group_to_articles_table', 6),
(30, '2021_05_01_161250_create_settings_table', 7),
(31, '2021_05_14_160612_create_alumnis_table', 8),
(32, '2021_05_16_125427_create_schedules_table', 9),
(33, '2021_05_17_040850_create_locations_table', 10),
(34, '2021_05_17_075849_add_info_to_course_infos_table', 11),
(35, '2021_05_17_125435_add_key_to_course_infos_table', 12),
(36, '2021_05_22_005214_create_key_dates_table', 13),
(37, '2021_05_22_005225_create_key_date_details_table', 14),
(38, '2021_05_22_012536_add_open_status_to_key_dates_table', 15),
(39, '2021_05_22_014344_add_title_to_key_date_details_table', 16),
(40, '2021_05_22_121450_add_place_birth_to_user_details_table', 17),
(42, '2021_05_26_021110_add_residance_to_user_details_table', 18),
(43, '2021_05_26_044915_add_university_to_enrollments_table', 19),
(44, '2021_05_26_064832_add_more_document_to_user_uploads_table', 20),
(45, '2021_06_01_023701_create_notifications_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('4e43b1dc-5b08-45e7-82c0-bf52a2d2248f', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 1, '{"user":"amber nadiak"}', '2021-06-01 00:02:49', '2021-05-31 20:06:47', '2021-06-01 00:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=61 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `key`, `value`, `thumbnail`, `created_at`, `updated_at`) VALUES
(27, 'chooseOne', '{"title":"WorkSpace Learning","content":"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae."}', 'setting/rg8GjnYGDjymSoSGIVxwWWpfQCyDfgEgv04H0Eb7.png', '2021-05-16 04:18:22', '2021-05-16 04:18:41'),
(28, 'chooseTwo', '{"title":"Supporting Your Study","content":"ubah di admin site"}', 'setting/t12NGt1ZxOkrqMPi65KgvMKQUu9hBI4alz8NP3uc.png', '2021-05-16 04:28:02', '2021-05-16 04:28:02'),
(29, 'chooseThree', '{"title":"Building Your Career","content":"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae."}', 'setting/VWb9nLeIclzMVJgn2VNZXtyUPiqMnnueEsGz5GKk.png', '2021-05-16 04:28:44', '2021-05-16 04:28:44'),
(30, 'lat', '{"title":"Life At Gunadarma","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt officia dignissimos pariatur tempora illo unde a labore blanditiis exercitationem commodi, facilis ex deleniti iste possimus quam sed esse expedita. Dolores?\\r\\n                            Maiores delectus dicta mollitia a, laborum minus iste illum ullam, impedit autem, praesentium eum? Ipsa quidem doloremque at quia ratione ullam maxime, odit iusto obcaecati accusamus laudantium, maiores placeat quam!\\r\\n                            Sequi quam labore illo, quisquam consequuntur excepturi deleniti veritatis consequatur. Aperiam doloribus esse a ullam modi minima minus temporibus tempore dicta, quibusdam rem distinctio dignissimos facere nulla dolore voluptatibus dolor?\\r\\n                            Facere cum dolorem iure totam eum tenetur explicabo quos iusto veritatis animi ab dolor distinctio architecto enim quisquam, magni modi dignissimos doloremque quas eius itaque beatae esse aliquam nesciunt! Quo.\\r\\n                            Asperiores quis, modi suscipit illo et officiis totam, optio explicabo reprehenderit eligendi eum ducimus voluptatum obcaecati minima eos ipsam numquam sed fugiat. Error blanditiis earum hic omnis cum perspiciatis quae?"}', NULL, '2021-05-16 04:31:04', '2021-05-16 04:31:47'),
(31, 'wio', '{"title":"Extracurricular","content":"ubah text ini di admin"}', NULL, '2021-05-16 04:34:47', '2021-05-16 04:35:09'),
(32, 'wit', '{"title":"Campus Locations","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque? Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet. Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore."}', NULL, '2021-05-16 04:37:06', '2021-05-16 04:37:06'),
(33, 'slpOne', '{"title":"Organization","content":"ubah ini di admin site"}', 'setting/yYNfVGDyyniOS19E2V9AiMLFlzuM0JJqWvK7fLJW.png', '2021-05-16 04:41:03', '2021-05-16 04:41:03'),
(34, 'slpTwo', '{"title":"Clubs and societies","content":"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae."}', 'setting/m235dBYeuO3EjFJBq1N3vdRqiEUHcdqtufSoxGda.png', '2021-05-16 04:44:27', '2021-05-16 04:44:27'),
(35, 'slpThree', '{"title":"Opportunity to Work","content":"ubah text ini di admin site"}', 'setting/wYrGcQBd5XLOyzyz4mR0ChioBw79PUiLPEx2GNSA.png', '2021-05-16 04:47:06', '2021-05-16 04:47:06'),
(36, 'sio', '{"title":"Campus H","content":"ubah ini di admin site"}', 'setting/W88fX3QF641zVH5uTbQJSwoPljOvA9s9MAPBHqPZ.png', '2021-05-16 04:52:22', '2021-05-16 04:52:29'),
(37, 'sit', '{"title":"Sport Center","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente saepe blanditiis quae fugit minus, omnis tenetur dolor excepturi quibusdam eveniet veniam accusantium impedit harum corrupti consequuntur perspiciatis repellendus velit odio!"}', 'setting/z5q73YTyyvyfPDcNMJwKbn2Hnpgqrtjv1cAtifWv.png', '2021-05-16 04:56:21', '2021-05-16 04:57:03'),
(38, 'sithree', '{"title":"Library","content":"ubah ini di admin site"}', NULL, '2021-05-16 04:58:26', '2021-05-16 04:58:26'),
(39, 'sif', '{"title":"The Integrated Laboratory","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non, inventore expedita ex accusantium tempora doloribus, obcaecati repudiandae, sequi velit esse. Asperiores facilis perspiciatis eaque consectetur delectus numquam similique pariatur.\\r\\n                                    Ipsam culpa sunt officia. Facere culpa sed velit illum incidunt sint dolore nisi recusandae ex amet omnis error ad, reprehenderit blanditiis rerum animi ea! Suscipit beatae eius magnam illo maiores?\\r\\n                                    Consequuntur quas molestias dolores itaque accusamus maiores, assumenda obcaecati commodi repellendus error sint temporibus mollitia. Quam possimus repudiandae alias facere cumque iure ut vel aut delectus, quisquam tempore amet eum."}', NULL, '2021-05-16 04:59:42', '2021-05-16 05:00:02'),
(40, 'six', '{"title":"Parking","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente saepe blanditiis quae fugit minus, omnis tenetur dolor excepturi quibusdam eveniet veniam accusantium impedit harum corrupti consequuntur perspiciatis repellendus velit odio!"}', NULL, '2021-05-16 05:28:51', '2021-05-16 05:31:06'),
(41, 'sis', '{"title":"Life At Gunadarma","content":"ubah ini di admin site"}', NULL, '2021-05-16 05:29:04', '2021-05-16 05:29:04'),
(42, 'siv', '{"title":"Getting to Campus","content":"ubah ini di admin site"}', NULL, '2021-05-16 05:30:39', '2021-05-16 05:30:39'),
(43, 'sie', '{"title":"Gunadarma University Student Community","content":"ubah ini di admin site"}', NULL, '2021-05-16 05:35:08', '2021-05-16 05:35:08'),
(44, 'sin', '{"title":"Career Planning","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit.\\r\\n                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur\\r\\n                                dolor excepturi quibusdam eveniet veniam accusantium impedit\\r\\n                                harum corrupti consequuntur perspiciatis repellendus velit\\r\\n                                odio!"}', NULL, '2021-05-16 05:35:21', '2021-05-16 05:35:43'),
(45, 'gio', '{"title":"WorkSpace Learning","content":"ubah ini di admin site"}', 'setting/gVwlgfhDnSBC92pzus9zWsFnRvyICAZWT0NFMcek.png', '2021-05-16 05:44:48', '2021-05-16 05:45:28'),
(46, 'git', '{"title":"WorkSpace Learning","content":"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae."}', 'setting/PzgvaSh3dtxE4hVZqhU7TSCDYqbVU0AUiLCV1CwR.png', '2021-05-16 05:46:04', '2021-05-16 05:46:04'),
(47, 'githree', '{"title":"Building Your Career","content":"ubah text ini di admin site"}', 'setting/i5BRHwBqFV990OkIsuBsx9M8dF1wSOVk5bOqTDVp.png', '2021-05-16 05:46:33', '2021-05-16 05:46:33'),
(48, 'gif', '{"title":"Graduations","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt officia dignissimos pariatur tempora illo unde a labore blanditiis exercitationem commodi, facilis ex deleniti iste possimus quam sed esse expedita. Dolores? Maiores delectus dicta mollitia a, laborum minus iste illum ullam, impedit autem, praesentium eum? Ipsa quidem doloremque at quia ratione ullam maxime, odit iusto obcaecati accusamus laudantium, maiores placeat quam! Sequi quam labore illo, quisquam consequuntur excepturi deleniti veritatis consequatur. Aperiam doloribus esse a ullam modi minima minus temporibus tempore dicta, quibusdam rem distinctio dignissimos facere nulla dolore voluptatibus dolor? Facere cum dolorem iure totam eum tenetur explicabo quos iusto veritatis animi ab dolor distinctio architecto enim quisquam, magni modi dignissimos doloremque quas eius itaque beatae esse aliquam nesciunt! Quo. Asperiores quis, modi suscipit illo et officiis totam, optio explicabo reprehenderit eligendi eum ducimus voluptatum obcaecati minima eos ipsam numquam sed fugiat. Error blanditiis earum hic omnis cum perspiciatis quae?"}', NULL, '2021-05-16 05:47:36', '2021-05-16 05:48:43'),
(49, 'giv', '{"title":"Ceremony Video 2020","content":"ubah text ini di admin site"}', NULL, '2021-05-16 05:51:45', '2021-05-16 05:51:45'),
(50, 'gix', '{"title":"Graduation Day at Gunadarmas","content":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque? Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet. Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore."}', NULL, '2021-05-16 05:51:57', '2021-05-16 05:51:57'),
(51, 'sigle-unit', '<p><strong>Using a single units as a pathway to a course</strong></p>\r\n\r\n<p>If you complete a non-award unit successfully, it may be counted as credit towards a degree course at Deakin. If you enjoy your single-unit study experience at Deakin and decide to apply for an award course, submit a course application and include your completed unit on a recognition of prior learning application.</p>\r\n\r\n<p><strong>How to apply</strong></p>\r\n\r\n<p>To apply for single-unit/non-award study, submit your application online via the Deakin Course and Scholarship applicant portal. Apply for multiple units in one trimester in a single application if you like and you&rsquo;ll be notified of the outcome by email. To study units in a subsequent trimester, you&rsquo;ll have to submit another online application.</p>\r\n\r\n<p><strong>Application dates</strong></p>\r\n\r\n<p>Applications for Trimester 1 close 28 February 2021.</p>\r\n\r\n<p><strong>Fees</strong></p>\r\n\r\n<p>Deakin charges fees for single-unit/non-award enrolments as they aren&rsquo;t Commonwealth supported places. The cost of each unit depends on the government-classified area of study to which the unit belongs. To find information about specific unit fees check our non-award information for domestic and international students.</p>\r\n\r\n<p><strong>Rights and responsibilities</strong></p>\r\n\r\n<p>Just like a degree student, you&rsquo;ll be expected to complete all administrative, academic and examination requirements to get formal recognition that you&rsquo;ve completed the unit properly. Once enrolled, you&rsquo;ll have the same rights and responsibilities as other Deakin students.</p>\r\n\r\n<p><strong>Computing requirements</strong></p>\r\n\r\n<p>At Deakin, we make extensive use of technology in our teaching. To study at Deakin you are required to have:</p>\r\n\r\n<ol>\r\n	<li>access to a device such as a desktop computer or laptop</li>\r\n	<li>connectivity to the internet</li>\r\n	<li>capability to use Deakin&rsquo;s online learning environments.</li>\r\n</ol>', NULL, '2021-05-16 07:02:59', '2021-05-16 07:43:17'),
(52, 'under-unit', '<p><strong>Using a Undergraduate unit as a pathway to a course</strong></p>\r\n\r\n<p>If you complete a non-award unit successfully, it may be counted as credit towards a degree course at Deakin. If you enjoy your single-unit study experience at Deakin and decide to apply for an award course, submit a course application and include your completed unit on a recognition of prior learning application.</p>\r\n\r\n<p><strong>How to apply</strong></p>\r\n\r\n<p>To apply for single-unit/non-award study, submit your application online via the Deakin Course and Scholarship applicant portal. Apply for multiple units in one trimester in a single application if you like and you&rsquo;ll be notified of the outcome by email. To study units in a subsequent trimester, you&rsquo;ll have to submit another online application.</p>\r\n\r\n<p><strong>Application dates</strong></p>\r\n\r\n<p>Applications for Trimester 1 close 28 February 2021.</p>\r\n\r\n<p><strong>Fees</strong></p>\r\n\r\n<p>Deakin charges fees for single-unit/non-award enrolments as they aren&rsquo;t Commonwealth supported places. The cost of each unit depends on the government-classified area of study to which the unit belongs. To find information about specific unit fees check our non-award information for domestic and international students.</p>\r\n\r\n<p><strong>Rights and responsibilities</strong></p>\r\n\r\n<p>Just like a degree student, you&rsquo;ll be expected to complete all administrative, academic and examination requirements to get formal recognition that you&rsquo;ve completed the unit properly. Once enrolled, you&rsquo;ll have the same rights and responsibilities as other Deakin students.</p>\r\n\r\n<p><strong>Computing requirements</strong></p>\r\n\r\n<p>At Deakin, we make extensive use of technology in our teaching. To study at Deakin you are required to have:</p>\r\n\r\n<ol>\r\n	<li>access to a device such as a desktop computer or laptop</li>\r\n	<li>connectivity to the internet</li>\r\n	<li>capability to use Deakin&rsquo;s online learning environments.</li>\r\n</ol>', NULL, '2021-05-16 07:04:17', '2021-05-16 07:04:17'),
(53, 'post-unit', '<p><strong>Using a Postgraduate unit as a pathway to a course</strong></p>\r\n\r\n<p>If you complete a non-award unit successfully, it may be counted as credit towards a degree course at Deakin. If you enjoy your single-unit study experience at Deakin and decide to apply for an award course, submit a course application and include your completed unit on a recognition of prior learning application.</p>\r\n\r\n<p><strong>How to apply</strong></p>\r\n\r\n<p>To apply for single-unit/non-award study, submit your application online via the Deakin Course and Scholarship applicant portal. Apply for multiple units in one trimester in a single application if you like and you&rsquo;ll be notified of the outcome by email. To study units in a subsequent trimester, you&rsquo;ll have to submit another online application.</p>\r\n\r\n<p><strong>Application dates</strong></p>\r\n\r\n<p>Applications for Trimester 1 close 28 February 2021.</p>\r\n\r\n<p><strong>Fees</strong></p>\r\n\r\n<p>Deakin charges fees for single-unit/non-award enrolments as they aren&rsquo;t Commonwealth supported places. The cost of each unit depends on the government-classified area of study to which the unit belongs. To find information about specific unit fees check our non-award information for domestic and international students.</p>\r\n\r\n<p><strong>Rights and responsibilities</strong></p>\r\n\r\n<p>Just like a degree student, you&rsquo;ll be expected to complete all administrative, academic and examination requirements to get formal recognition that you&rsquo;ve completed the unit properly. Once enrolled, you&rsquo;ll have the same rights and responsibilities as other Deakin students.</p>\r\n\r\n<p><strong>Computing requirements</strong></p>\r\n\r\n<p>At Deakin, we make extensive use of technology in our teaching. To study at Deakin you are required to have:</p>\r\n\r\n<ol>\r\n	<li>access to a device such as a desktop computer or laptop</li>\r\n	<li>connectivity to the internet</li>\r\n	<li>capability to use Deakin&rsquo;s online learning environments.</li>\r\n</ol>', NULL, '2021-05-16 07:04:33', '2021-05-16 07:04:59'),
(54, 'step-1', '{"title":"STEP 1","content":"<p><strong>Application (Select Type)<\\/strong><\\/p>\\r\\n\\r\\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!<\\/p>"}', NULL, '2021-05-16 22:21:31', '2021-05-16 22:33:58'),
(55, 'step-2', '{"title":"Step 2","content":"<p><strong>Personal Details (Fill the Form)<\\/strong><\\/p>\\r\\n\\r\\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!<\\/p>"}', NULL, '2021-05-16 22:33:09', '2021-05-16 22:33:09'),
(56, 'step-3', '{"title":"Step 3","content":"<p><strong>Verification (Review and Submit)<\\/strong><\\/p>\\r\\n\\r\\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!<\\/p>"}', NULL, '2021-05-16 22:33:31', '2021-05-16 22:33:31'),
(59, 'postg', '{"header":"<h2><strong>MASTER DEGREE (INTERNATIONAL)<\\/strong><\\/h2>\\r\\n\\r\\n<p>English as a medium instruction<\\/p>\\r\\n\\r\\n<p><strong>International Bachelor Categories:<\\/strong><\\/p>\\r\\n\\r\\n<ol>\\r\\n\\t<li>Single Degree, student will be awarded a degree from UL<\\/li>\\r\\n\\t<li>Double Degree, student will obtain one degree from UI and one more from partner university.<\\/li>\\r\\n<\\/ol>","content":"<p><strong>General Requirements<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>High school graduated or equivalent no longer than 5 years of the time registration (e.g. admission 2019 for high school graduates in 2019,2018,2017,2016,2015)<\\/li>\\r\\n\\t<li>Foculty of Medicine applicant should be graduating from nationally accredited high schools\\/completing general certificate of education (A level) or graduate of Diploma Program of European Baccalaureate or Diploma Program of International Baccalaureate or Passing international education qualification equivalent to any of the above.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p><strong>Documents Required<\\/strong><\\/p>\\r\\n\\r\\n<ol>\\r\\n\\t<li>Non Indonesian passport<\\/li>\\r\\n\\t<li>Latest color photo (full face without hat\\/glasses\\/accessories)<\\/li>\\r\\n\\t<li>High school diploma or equivalent<\\/li>\\r\\n\\t<li>High school academic transcript or equivalent<\\/li>\\r\\n\\t<li>English Proficiency certificate: International TOEFL (www.ets.org) with minimum score of 173(CBT), or 61(iBT) or IELTS (http:\\/\\/ielts.org) with minimum score of 5.5 TOEFL\\/IELTS score are valid for two years from the test date. If you have or will have received a degree from an institution where English is the primary language of instruction, you do not need to submit TOEFL\\/IELTS certificate.<br \\/>\\r\\n\\tFor Faculty of Medicine applicant, International TOEFL score must above 80(iBT) or IELTS score must above 7.<br \\/>\\r\\n\\tFor Faculty of Economics and Business applicant, International TOEFL score must above 213(CBT), or 70 (iBT) or IELTS score must above 6.<br \\/>\\r\\n\\tFor Faculty of Law applicant, International TOEFL score must above 213 (CBT), or 80(iBT) or IELTS score must above 6.<\\/li>\\r\\n\\t<li>Faculty of Medicine and Faculty of Law applicant required to hold Indonesia language proficiency test (TIBA) certificate is mandatory document for Faculty of Medicine applicant, except those from high school with entirely the class in Bahasa Indonesia<\\/li>\\r\\n\\t<li>Motivation Statement<\\/li>\\r\\n\\t<li>Health Certificate<\\/li>\\r\\n<\\/ol>\\r\\n\\r\\n<p><strong>Important Notice:<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>All of the documents are submitted online on the registration account.<\\/li>\\r\\n\\t<li>The faculty may apply higher specific requirements<\\/li>\\r\\n\\t<li>Re-check your online application status to ensure all of the form completely filled and all of the documents successfully submitted.<\\/li>\\r\\n<\\/ul>"}', NULL, '2021-05-21 07:22:57', '2021-05-21 07:28:30'),
(60, 'underg', '{"header":"<h2><strong>UNDERGRADUATE (INTERNATIONAL)<\\/strong><\\/h2>\\r\\n\\r\\n<p>English as a medium instruction<\\/p>\\r\\n\\r\\n<p><strong>International Bachelor Categories:<\\/strong><\\/p>\\r\\n\\r\\n<ol>\\r\\n\\t<li>Single Degree, student will be awarded a degree from UL<\\/li>\\r\\n\\t<li>Double Degree, student will obtain one degree from UI and one more from partner university.<\\/li>\\r\\n<\\/ol>","content":"<p><strong>General Requirements<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>High school graduated or equivalent no longer than 5 years of the time registration (e.g. admission 2019 for high school graduates in 2019,2018,2017,2016,2015)<\\/li>\\r\\n\\t<li>Foculty of Medicine applicant should be graduating from nationally accredited high schools\\/completing general certificate of education (A level) or graduate of Diploma Program of European Baccalaureate or Diploma Program of International Baccalaureate or Passing international education qualification equivalent to any of the above.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p><strong>Documents Required<\\/strong><\\/p>\\r\\n\\r\\n<ol>\\r\\n\\t<li>Non Indonesian passport<\\/li>\\r\\n\\t<li>Latest color photo (full face without hat\\/glasses\\/accessories)<\\/li>\\r\\n\\t<li>High school diploma or equivalent<\\/li>\\r\\n\\t<li>High school academic transcript or equivalent<\\/li>\\r\\n\\t<li>English Proficiency certificate: International TOEFL (www.ets.org) with minimum score of 173(CBT), or 61(iBT) or IELTS (http:\\/\\/ielts.org) with minimum score of 5.5 TOEFL\\/IELTS score are valid for two years from the test date. If you have or will have received a degree from an institution where English is the primary language of instruction, you do not need to submit TOEFL\\/IELTS certificate.<br \\/>\\r\\n\\tFor Faculty of Medicine applicant, International TOEFL score must above 80(iBT) or IELTS score must above 7.<br \\/>\\r\\n\\tFor Faculty of Economics and Business applicant, International TOEFL score must above 213(CBT), or 70 (iBT) or IELTS score must above 6.<br \\/>\\r\\n\\tFor Faculty of Law applicant, International TOEFL score must above 213 (CBT), or 80(iBT) or IELTS score must above 6.<\\/li>\\r\\n\\t<li>Faculty of Medicine and Faculty of Law applicant required to hold Indonesia language proficiency test (TIBA) certificate is mandatory document for Faculty of Medicine applicant, except those from high school with entirely the class in Bahasa Indonesia<\\/li>\\r\\n\\t<li>Motivation Statement<\\/li>\\r\\n\\t<li>Health Certificate<\\/li>\\r\\n<\\/ol>\\r\\n\\r\\n<p><strong>Important Notice:<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>All of the documents are submitted online on the registration account.<\\/li>\\r\\n\\t<li>The faculty may apply higher specific requirements<\\/li>\\r\\n\\t<li>Re-check your online application status to ensure all of the form completely filled and all of the documents successfully submitted.<\\/li>\\r\\n<\\/ul>"}', NULL, '2021-05-21 07:33:57', '2021-05-21 07:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_codes`
--

CREATE TABLE IF NOT EXISTS `post_codes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` bigint(20) unsigned NOT NULL,
  `value` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_codes_province_id_foreign` (`province_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE IF NOT EXISTS `provinces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Aceh', NULL, NULL),
(2, 'Sumatera Utara', NULL, NULL),
(3, 'Sumatera Barat', NULL, NULL),
(4, 'Riau', NULL, NULL),
(5, 'Kepulauan Riau', NULL, NULL),
(6, 'Jambi ', NULL, NULL),
(7, 'Sumatera Selatan', NULL, NULL),
(8, 'Kepulauan Bangka Belitung', NULL, NULL),
(9, 'Bengkulu', NULL, NULL),
(10, 'Lampung', NULL, NULL),
(11, 'DKI Jakarta', NULL, NULL),
(12, 'Banten', NULL, NULL),
(13, 'Jawa Barat', NULL, NULL),
(14, 'Jawa Tengah', NULL, NULL),
(15, 'DI Yogyakarta', NULL, NULL),
(16, 'Jawa Timur', NULL, NULL),
(17, 'Bali', NULL, NULL),
(18, 'Nusa Tenggara Barat', NULL, NULL),
(19, 'Nusa Tenggara Timur', NULL, NULL),
(20, 'Kalimantan Barat', NULL, NULL),
(21, 'Kalimantan Tengah', NULL, NULL),
(22, 'Kalimantan Selatan', NULL, NULL),
(23, 'Kalimantan Timur', NULL, NULL),
(24, 'Kalimantan Utara', NULL, NULL),
(25, 'Sulawesi Utara', NULL, NULL),
(26, 'Gorontalo', NULL, NULL),
(27, 'Sulawesi Tengah', NULL, NULL),
(28, 'Sulawesi Barat', NULL, NULL),
(29, 'Sulawesi Selatan', NULL, NULL),
(30, 'Sulawesi Tenggara', NULL, NULL),
(31, 'Maluku', NULL, NULL),
(32, 'Maluku Utara', NULL, NULL),
(33, 'Papua Barat', NULL, NULL),
(34, 'Papua', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phase` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `venue` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `info` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `phase`, `date`, `venue`, `info`, `created_at`, `updated_at`) VALUES
(1, 'Graduation Stage 1 - for all students in Depok', '2021-12-05', 'N/A', 'All students will be contacted via WhatsApp', '2021-05-16 06:20:39', '2021-05-16 06:36:31'),
(3, 'Graduation Stage 2 - for all students in Depok', '2022-08-03', 'N/A', 'All students will be contacted via WhatsApp', '2021-05-16 06:38:46', '2021-05-16 06:38:54'),
(4, 'Graduation Stage 3 - for all students in Depok', '2022-09-17', 'N/A', 'All students will be contacted via WhatsApp', '2021-05-16 06:39:14', '2021-05-16 06:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `thumbnail`, `created_at`, `updated_at`) VALUES
(3, 'landing-video-section-1', 'SZesNKBVG3U', NULL, '2021-05-16 17:00:00', '2021-05-16 23:11:49'),
(4, 'landing-bg-section-1', NULL, NULL, '2021-05-15 17:00:00', NULL),
(5, 'landing-title', '<p>GET YOUR DEGREE WITH US</p>', NULL, '2021-05-15 17:00:00', '2021-05-15 18:13:17'),
(6, 'landing-excerpt', 'Beside providing you with new knowledge and raining in chosen disciplines Our university also gives you opportunity to benefit from spending your free time by planning', NULL, '2021-05-15 17:00:00', '2021-05-15 17:00:00'),
(7, 'landing-button-text-1', 'start a journey', NULL, '2021-05-15 17:00:00', NULL),
(8, 'logo', NULL, NULL, '2021-05-15 17:00:00', NULL),
(9, 'landing-point-title-1', 'Best Private University', NULL, '2021-05-15 17:00:00', NULL),
(10, 'landing-point-icon-1', NULL, 'setting/GTFd4qnO22JumB2TjHeA62qYeyKjX5gxBAgwAUdf.png', '2021-05-15 17:00:00', '2021-06-01 00:07:30'),
(11, 'landing-point-content-1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero corrupti molestias commodi, ut amet quas quisquam neque facere ullam, recusandae quam nemo quo, adipisci iure possimus.', NULL, '2021-05-15 17:00:00', NULL),
(12, 'landing-point-title-2', 'High Achieving Graduates', NULL, '2021-05-15 17:00:00', NULL),
(13, 'landing-point-icon-2', NULL, 'setting/Tr0P4NCYv9EV0zwxj4rqZzMgynheL1Vz7h3Gsoff.png', '2021-05-15 17:00:00', '2021-06-01 00:08:13'),
(14, 'landing-point-content-2', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero corrupti molestias commodi, ut amet quas quisquam neque facere ullam, recusandae quam nemo quo, adipisci iure possimus.\r\n\r\n', NULL, '2021-05-15 17:00:00', NULL),
(15, 'landing-point-title-3', 'Online Learning', NULL, '2021-05-15 17:00:00', NULL),
(16, 'landing-point-icon-3', NULL, 'setting/sZtJP8uXasKt52QkgLIzvoB9y3JEwKISJtkHsB0h.png', '2021-05-15 17:00:00', '2021-06-01 00:08:36'),
(17, 'landing-point-content-3', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero corrupti molestias commodi, ut amet quas quisquam neque facere ullam, recusandae quam nemo quo, adipisci iure possimus.\r\n\r\n', NULL, '0000-00-00 00:00:00', NULL),
(18, 'landing-point-title-4', 'Student Satisfaction', NULL, '2021-05-15 17:00:00', NULL),
(19, 'landing-point-icon-4', NULL, 'setting/ZXoCjXIgQvhSxHUi5THsrm1PxTl3uIJIxOw9yr18.png', '2021-05-15 17:00:00', '2021-06-01 00:09:43'),
(20, 'landing-point-content-4', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero corrupti molestias commodi, ut amet quas quisquam neque facere ullam.\r\n\r\n', NULL, '0000-00-00 00:00:00', NULL),
(21, 'location', 'Kampus Depok (Kampus D)\r\n\r\nJln.Margonda Raya No 100 Gd2. Lt2\r\nPondok Cina, Depok 16424\r\nJawa Barat - Indonesia\r\n', NULL, '2021-05-15 17:00:00', '2021-05-15 17:00:00'),
(22, 'email', '@Gunadarma.ac.id', NULL, '2021-05-15 17:00:00', '2021-05-15 17:00:00'),
(23, 'telephone', '123456789', NULL, '2021-05-15 17:00:00', '2021-05-15 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'active', '2021-04-25 06:57:22', '2021-04-25 06:57:25'),
(2, 'inactive', NULL, NULL),
(3, 'pending', NULL, NULL),
(4, 'submit', NULL, NULL),
(5, 'approved', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('student','admin','sadmin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `telephone`, `password`, `role`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super adminer', 'superadmin@admin.com', NULL, '8777677', '$2y$10$Di7ofEVyzqDaXSPnbAReQuuAQlmadgtTf1WIGFfXAKIJOF6l3GCOu', 'sadmin', NULL, NULL, NULL, '2021-05-16 21:44:40'),
(2, 'admin', 'admin@admin.com', NULL, '8777677', '$2y$10$hWvCwL5K.rtPMqfjkZ3Meejk/zBCI1P/YHlJyltwQEEei2AqUs7qC', 'admin', NULL, NULL, NULL, NULL),
(3, 'amber nadia', 'diana98@gmail.com', NULL, '6466467', '$2y$10$sLaHnezhELsJJOOKnU9Ep.0BcSlh13VOlKo5Oy0e6OhTHZabGrIm2', 'student', NULL, NULL, '2021-04-24 08:53:48', '2021-04-25 08:27:28'),
(4, 'jacky sparow', 'jacky21@gmail.com', NULL, '6466467', '$2y$10$aXz.xtnMW406TjfI61IqJudiyyLkGslWqPNlBMff1F71kXsHIe/YG', 'student', NULL, NULL, '2021-04-25 06:31:01', '2021-05-16 21:34:40'),
(5, 'joko santoso', 'joko30.82@gmail.com', NULL, '9643884582', '$2y$10$t.LvLWobiwwtmC4rtz.6quYa3Rx3BMY1VE6qGBkSw0JTQA78ZxQ9.', 'student', NULL, NULL, '2021-04-25 06:46:21', '2021-05-16 07:33:06'),
(6, 'amber nadiak', 'rolandadifandana@gmail.com', NULL, '625552200', '$2y$10$xIHXsdb/vk50xGHxp0D5mu0CudM9j4wKQl97K6UXhsq87onfl6lbW', 'student', NULL, NULL, '2021-05-22 20:12:23', '2021-05-23 21:03:00'),
(7, 'test123', 'test@gmail.com', NULL, '6288888', '$2y$10$TVYkh0.zDem/roMwMA7A9eV4v7l9Uj.9rXvTJdbfpHQaX0DWfUtke', 'student', NULL, NULL, '2021-05-23 21:06:24', '2021-05-23 21:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `status_id` bigint(20) unsigned NOT NULL,
  `place_birth` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `province` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_details_user_id_foreign` (`user_id`),
  KEY `user_details_status_id_foreign` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `status_id`, `place_birth`, `date_birth`, `gender`, `address`, `province`, `city`, `country`, `post_code`, `nationality`, `avatar`, `created_at`, `updated_at`) VALUES
(6, 3, 1, 'Jakarta', '2017-01-03', 'M', 'jl.kemang dua selatan', NULL, NULL, NULL, NULL, 'indonesia', 'profile/qtXIbhbmc6Jk3a4pZrW4fk0ulF6UZCjnPoXCfPLE.png', '2021-04-25 02:31:21', '2021-05-22 05:19:19'),
(7, 1, 1, NULL, '2021-01-22', 'M', 'jl .kampung durian runtuh 2', NULL, NULL, NULL, NULL, NULL, 'profile/l74g5WhZVx7m1HZ5He97eWtLaJC3oyA0L7XbIBin.png', '2021-05-16 07:35:46', '2021-05-16 21:46:31'),
(8, 4, 1, NULL, NULL, 'F', 'jl. kepala gading', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-16 21:38:31', '2021-05-16 21:38:31'),
(9, 5, 1, 'Jakarta', '1994-01-25', 'M', 'Kelapa Gading', NULL, NULL, NULL, NULL, NULL, 'profile/Zpe44AF8W5nxkzvSqiLI5HU2RdPEAOp5WYNILELB.jpg', '2021-05-22 15:39:43', '2021-05-22 15:39:43'),
(10, 6, 1, 'Jakarta', '2021-05-04', 'M', 'jl.kemang dua selatan', 'Jakarta', 'Jakarta timur', 'indonesia', 123456, 'indonesia', 'profile/mWPUtefVlCJJjJ5ntZk3GKkJBbH5Ob9gFxmJxcUo.png', '2021-05-22 20:15:09', '2021-05-25 19:39:30'),
(11, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile/gdA0noD8coMeCkuU8vYTAr0J2PWHRcICrMhgYCoP.png', '2021-06-01 00:36:20', '2021-06-01 00:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_fundings`
--

CREATE TABLE IF NOT EXISTS `user_fundings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_detail_id` bigint(20) unsigned NOT NULL,
  `type` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_fundings_user_detail_id_foreign` (`user_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_fundings`
--

INSERT INTO `user_fundings` (`id`, `user_detail_id`, `type`, `provider`, `guarantor`, `created_at`, `updated_at`) VALUES
(2, 10, '-', 'goverment', 'director', '2021-05-25 22:16:25', '2021-05-25 23:00:38'),
(3, 10, '-', 'test', 'test', '2021-05-25 22:52:04', '2021-05-25 22:52:04'),
(4, 10, '-', 'test', 'test', '2021-05-25 22:55:07', '2021-05-25 22:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_passports`
--

CREATE TABLE IF NOT EXISTS `user_passports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_detail_id` bigint(20) unsigned NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filling` date NOT NULL,
  `expired` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_passports_user_detail_id_foreign` (`user_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_passports`
--

INSERT INTO `user_passports` (`id`, `user_detail_id`, `nomor`, `filling`, `expired`, `created_at`, `updated_at`) VALUES
(2, 10, '12345679', '2021-05-11', '2021-05-03', '2021-05-25 21:18:43', '2021-05-25 23:00:50'),
(4, 10, '12345678', '2021-05-11', '2021-05-03', '2021-05-25 22:52:04', '2021-05-25 22:52:04'),
(5, 10, '12345678', '2021-05-11', '2021-05-03', '2021-05-25 22:55:07', '2021-05-25 22:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_residances`
--

CREATE TABLE IF NOT EXISTS `user_residances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_detail_id` bigint(20) unsigned DEFAULT NULL,
  `city_id` bigint(20) unsigned DEFAULT NULL,
  `prov_id` bigint(20) unsigned DEFAULT NULL,
  `country_id` bigint(20) unsigned DEFAULT NULL,
  `postcode_id` bigint(20) unsigned DEFAULT NULL,
  `current_city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_postcode` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_detail_id` (`user_detail_id`),
  KEY `city_id` (`city_id`),
  KEY `prov_id` (`prov_id`),
  KEY `postcode_id` (`postcode_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_residances`
--

INSERT INTO `user_residances` (`id`, `user_detail_id`, `city_id`, `prov_id`, `country_id`, `postcode_id`, `current_city`, `current_prov`, `current_country`, `current_postcode`, `address`, `created_at`, `updated_at`) VALUES
(6, 10, NULL, NULL, NULL, NULL, 'bekasi', 'jawa barat', 'indonesia', 12344, 'Pulo Gadung', '2021-05-25 22:16:25', '2021-05-29 06:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_studies`
--

CREATE TABLE IF NOT EXISTS `user_studies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_detail_id` bigint(20) unsigned NOT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_studies_user_detail_id_foreign` (`user_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_uploads`
--

CREATE TABLE IF NOT EXISTS `user_uploads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_detail_id` bigint(20) unsigned NOT NULL,
  `photo_passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_formal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statment_letter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_letter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_cover_passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_letter_sign_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_accept` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_transkip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_uploads_user_detail_id_foreign` (`user_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_uploads`
--

INSERT INTO `user_uploads` (`id`, `user_detail_id`, `photo_passport`, `photo_formal`, `statment_letter`, `sponsor_letter`, `photo_cover_passport`, `sponsor_letter_sign_id`, `letter_accept`, `financial`, `medical`, `academic_transkip`, `last_certificate`, `created_at`, `updated_at`) VALUES
(11, 10, 'document/2021-05-31-938972-sample_pdf_50kb.pdf', 'document/2021-05-31-280227-sample_pdf_50kb.pdf', 'document/2021-05-31-930241-sample_pdf_50kb.pdf', 'document/2021-05-31-78996-sample_pdf_50kb.pdf', 'document/2021-05-31-495453-sample_pdf_50kb.pdf', 'document/2021-05-31-465358-sample_pdf_50kb.pdf', 'document/2021-05-31-613068-sample_pdf_50kb.pdf', 'document/2021-05-31-353343-sample_pdf_50kb.pdf', 'document/2021-05-31-469305-sample_pdf_50kb.pdf', 'document/2021-05-31-564954-sample_pdf_50kb.pdf', 'document/2021-05-31-882564-sample_pdf_50kb.pdf', '2021-05-29 04:51:57', '2021-05-30 23:33:45');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD CONSTRAINT `alumnis_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alumnis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `articles_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `article_types` (`id`);

--
-- Constraints for table `article_details`
--
ALTER TABLE `article_details`
  ADD CONSTRAINT `article_details_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

--
-- Constraints for table `course_details`
--
ALTER TABLE `course_details`
  ADD CONSTRAINT `course_details_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_detail_infos`
--
ALTER TABLE `course_detail_infos`
  ADD CONSTRAINT `course_detail_infos_ibfk_1` FOREIGN KEY (`course_info_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD CONSTRAINT `course_infos_ibfk_1` FOREIGN KEY (`course_detail_id`) REFERENCES `course_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_prices`
--
ALTER TABLE `course_prices`
  ADD CONSTRAINT `course_prices_ibfk_1` FOREIGN KEY (`course_detail_id`) REFERENCES `course_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `enrollments_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `enrollments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `key_dates`
--
ALTER TABLE `key_dates`
  ADD CONSTRAINT `key_dates_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD CONSTRAINT `menu_details_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_details_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

--
-- Constraints for table `post_codes`
--
ALTER TABLE `post_codes`
  ADD CONSTRAINT `post_codes_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_fundings`
--
ALTER TABLE `user_fundings`
  ADD CONSTRAINT `user_fundings_user_detail_id_foreign` FOREIGN KEY (`user_detail_id`) REFERENCES `user_details` (`id`);

--
-- Constraints for table `user_passports`
--
ALTER TABLE `user_passports`
  ADD CONSTRAINT `user_passports_user_detail_id_foreign` FOREIGN KEY (`user_detail_id`) REFERENCES `user_details` (`id`);

--
-- Constraints for table `user_residances`
--
ALTER TABLE `user_residances`
  ADD CONSTRAINT `user_residances_ibfk_1` FOREIGN KEY (`user_detail_id`) REFERENCES `user_details` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_residances_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_residances_ibfk_3` FOREIGN KEY (`prov_id`) REFERENCES `provinces` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_residances_ibfk_5` FOREIGN KEY (`postcode_id`) REFERENCES `post_codes` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `user_studies`
--
ALTER TABLE `user_studies`
  ADD CONSTRAINT `user_studies_user_detail_id_foreign` FOREIGN KEY (`user_detail_id`) REFERENCES `user_details` (`id`);

--
-- Constraints for table `user_uploads`
--
ALTER TABLE `user_uploads`
  ADD CONSTRAINT `user_uploads_user_detail_id_foreign` FOREIGN KEY (`user_detail_id`) REFERENCES `user_details` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
