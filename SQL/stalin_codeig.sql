-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2017 at 10:35 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stalin_codeig`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `app_id` int(11) NOT NULL,
  `app_date` varchar(11) NOT NULL,
  `app_url` varchar(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `app_date`, `app_url`, `app_name`, `app_description`) VALUES
(1, '1375465528', 'http://localhost/1', 'My Appointment', ''),
(2, '1375638327', 'http://localhost/2', 'My Second Appointment', ''),
(3, '1375897527', 'http://localhost/3', 'My Third Appointment', ''),
(4, '1381167927', 'http://localhost/4', 'My Forth Name', ''),
(5, '1386111600', 'http://localhost:8080/stalin_projects/stalin_codeig_blog/index.php/app_cal/appointment/2013/12/04', 'Yuvraj', 'Yuvraj Engagement'),
(7, '975884400', 'http://localhost:8080/stalin_projects/stalin_codeig_blog/index.php/app_cal/appointment/0/12/04', 'Pakyaraj', 'meet Veni'),
(9, '977698800', 'http://localhost:8080/stalin_projects/stalin_codeig_blog/index.php/app_cal/appointment/0/12/25', 'Suppose Christmas', 'Christmas Festival'),
(10, '1482620400', 'http://localhost:8080/stalin_projects/stalin_codeig_blog/index.php/app_cal/appointment/2016/12/25', 'Suppose Christmas', 'Christmas Festival'),
(11, '1467842400', 'http://localhost:8080/stalin_projects/stalin_codeig_blog/index.php/app_cal/appointment/2016/07/07', 'Stalin', 'Stalin Birth Day'),
(12, '1480546800', 'http://localhost:8080/stalin_projects/stalin_codeig_blog/index.php/app_cal/appointment/2016/12/01', 'Jason Birth day', 'Jason Birth day');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`) VALUES
(1, 'bootsrap', 'Bootstrap supports all the HTML5 input types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.\r\n\r\nNote: Inputs will NOT be fully styled if their type is not properly declared!', 1381009509),
(2, 'spacetrum', '\r\n\r\nWhere ignorance lurks, so too do the frontiers of discovery and imagination.\r\n\r\nWe want to explore. We’re curious people. Look back over history, people have put their lives at stake to go out and explore … We believe in what we’re doing. Now it’s time to go.\r\n\r\nAstronomy compels the soul to look upward, and leads us from this world to another.\r\n\r\nThe path of a cosmonaut is not an easy, triumphant march to glory. You have to get to know the meaning not just of joy but also of grief, before being allowed in the spacecraft cabin.\r\n\r\nThere can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.', 1381003509);

-- --------------------------------------------------------

--
-- Table structure for table `bench_table`
--

CREATE TABLE `bench_table` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bench_table`
--

INSERT INTO `bench_table` (`id`, `firstname`, `lastname`) VALUES
(1, 'Rob', 'Foster'),
(2, 'Lucy', 'Welsh'),
(3, 'George', 'Foster'),
(4, 'Jackie', 'Foster'),
(5, 'Antony', 'Welsh'),
(6, 'Rowena', 'Welsh'),
(7, 'Peter', 'Foster'),
(8, 'Jenny', 'Foster'),
(9, 'Oliver', 'Welsh'),
(10, 'Harrison', 'Foster'),
(11, 'Felicity', 'Foster'),
(12, 'George', 'Foster'),
(13, 'Jackie', 'Foster'),
(14, 'Antony', 'Welsh'),
(15, 'Rowena', 'Welsh'),
(16, 'Peter', 'Foster'),
(17, 'Jenny', 'Foster'),
(18, 'Oliver', 'Welsh'),
(19, 'Harrison', 'Foster'),
(20, 'Felicity', 'Foster');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(1, 1480670862, '::1', 'qDDq9MBs'),
(2, 1480670924, '::1', 'pYvGcdTV'),
(3, 1480670976, '::1', 'VQHN49P6'),
(4, 1480671653, '::1', 'dODOocn1'),
(5, 1480671942, '::1', 'oLu0SB80'),
(6, 1480671993, '::1', 'O5FIGLzg'),
(7, 1480672184, '::1', '2ycbHG0Q'),
(8, 1480672213, '::1', 'sEr5SfEt'),
(9, 1480672217, '::1', '4sEg6W5p'),
(10, 1480672224, '::1', 'bsAosoDn'),
(11, 1480672228, '::1', 'OoiaE1cq'),
(12, 1480672233, '::1', 'qEqpHG39'),
(13, 1480672247, '::1', 'sWxt7hzi'),
(14, 1480672309, '::1', 'Q98oK8fC'),
(15, 1480672342, '::1', 'f5jwfO9O'),
(16, 1480672389, '::1', 'y5Ab3JCW'),
(17, 1480672395, '::1', '7WYR9w0t'),
(18, 1480672402, '::1', 'IEFsijy6'),
(19, 1480672545, '::1', 'CKupdVBA'),
(20, 1480672645, '::1', 'LE5Mtpir'),
(21, 1480672688, '::1', 'fD7trThy'),
(22, 1480672827, '::1', '2mqS2OHZ'),
(23, 1480672855, '::1', 'wv5j3mlC'),
(24, 1480672907, '::1', 'KcWQusJq'),
(25, 1480673213, '::1', 'K96ipr6n'),
(26, 1480673643, '::1', 'bEilPEBP'),
(27, 1480673938, '::1', 'niTpmFgf'),
(28, 1480674962, '::1', 'xblFcfWv'),
(29, 1480674976, '::1', 'Y8xBeLfP'),
(30, 1480675146, '::1', 'GTpT57JE'),
(31, 1480675163, '::1', '9cyow7nw'),
(32, 1480675184, '::1', 'iKGhWnAj'),
(33, 1480675736, '::1', 'ckuqCp9m'),
(34, 1480675873, '::1', 'qONiwOWY'),
(35, 1481107348, '::1', '5otTVooc'),
(36, 1481108500, '::1', 'G3wShwuu');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Shirts'),
(2, 'Footware');

-- --------------------------------------------------------

--
-- Table structure for table `censor`
--

CREATE TABLE `censor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `censor`
--

INSERT INTO `censor` (`id`, `name`, `body`) VALUES
(1, 'stalinremo', 'This is stalin from Kumbakonam'),
(2, 'hi', ';[;--o0i9u08'),
(3, 'Rob', 'BOOM TOWN'),
(4, 'Stalin', 'Kumbakonam'),
(5, 'Stalin', 'Kumbakonam TOWN'),
(6, 'Tom', 'Kumbakonam TOWN');

-- --------------------------------------------------------

--
-- Table structure for table `censored_words`
--

CREATE TABLE `censored_words` (
  `id` int(11) NOT NULL,
  `word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `censored_words`
--

INSERT INTO `censored_words` (`id`, `word`) VALUES
(1, 'rude_word_number_1'),
(2, 'rude_word_number_2'),
(3, 'rude_word_number_3'),
(4, 'rude_word_number_4');

-- --------------------------------------------------------

--
-- Table structure for table `ch6_users`
--

CREATE TABLE `ch6_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_date` int(11) NOT NULL,
  `is_active` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ch6_users`
--

INSERT INTO `ch6_users` (`id`, `firstname`, `lastname`, `username`, `password`, `created_date`, `is_active`) VALUES
(1, 'Jessica', 'Welsh', 'jesswelsh', 'password', 1480589826, 'yes'),
(3, 'claire', 'Strickland', 'cstrickland', 'password', 1366114115, 'yes'),
(4, 'Douglas', 'Morrisson', 'dmorrisson', 'password', 1366114115, 'yes'),
(5, 'Jessica', 'Welsh', 'jesswelsh', 'password', 1366114115, 'yes'),
(6, 'Lucy', 'Welsh', 'lucywelsh', 'password', 1481091796, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `ci_pfofes_register`
--

CREATE TABLE `ci_pfofes_register` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(125) NOT NULL,
  `user_last_name` varchar(125) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_profess_users`
--

CREATE TABLE `ci_profess_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_profess_users`
--

INSERT INTO `ci_profess_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'stalin', 'stalin@gmail.com', '1905d521c85e990ccbfbb8ea8e817c025af1130b');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `peopleid` int(11) NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `left` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions_bp`
--

CREATE TABLE `ci_sessions_bp` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `comments_bp`
--

CREATE TABLE `comments_bp` (
  `cm_id` int(11) NOT NULL,
  `ds_id` int(11) NOT NULL,
  `cm_body` text NOT NULL,
  `cm_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_id` int(11) NOT NULL,
  `cm_is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_address`, `contact_phone`) VALUES
(1, 'S Roy', 'http://roytuts.com', '1234578960'),
(2, 'S Roy', 'http://roytuts.com', '1234578960'),
(3, 'S Roy', 'http://roytuts.com', '5454544574'),
(4, 'S Roy', 'http://roytuts.com', '4578912360'),
(5, 'S Roy', 'http://roytuts.com', '8945761254'),
(6, 'S Roy', 'http://roytuts.com', '4587961235'),
(7, 'S Roy', 'http://roytuts.com', '1254897652'),
(13, 'Stalin', 'www.stalincodelooms.com', '9791132559'),
(14, 'Mervin Thomas', 'www.codelooms.com', '9894405547'),
(15, 'Jason', 'www.jason@yahoo.com', '9791132559'),
(16, 'Vaseekaran', 'www.vasi.com', '5265456231');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'stalinthomas', 'stalingalaxy@gmail.com', 'kumbakonam', '9791132559'),
(2, 'stalinremo', 'stalingalaxy@gmail.com', 'kumbakonam', '9791132559'),
(3, 'Pakkiyaraj', 'oneindia@gmail.com', 'kumbakonam', '9791132559'),
(4, 'stalinremo', 'st@gmail.com', 'kumbakonam', '9791132559'),
(5, 'stalinremo', 'stalin@gmail.com', 'kumbakonam', '9791132559'),
(6, 'Pakkiyaraj', 'stalin@gmail.com', 'kumbakonam', '9791132559');

-- --------------------------------------------------------

--
-- Table structure for table `diff_articles`
--

CREATE TABLE `diff_articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_body` text NOT NULL,
  `is_main` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diff_articles`
--

INSERT INTO `diff_articles` (`article_id`, `article_title`, `article_body`, `is_main`) VALUES
(1, 'Article One', 'Article One Body', 'yes'),
(2, 'Article Two', 'Article Two Body', 'no'),
(3, 'Article Three', 'Article Three Body', 'no'),
(4, 'Article Four', 'Article Four Body', 'no'),
(5, 'Article Five', 'Article Five Body', 'no'),
(6, 'Article Six', 'Article Six Body', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `discussions_bp`
--

CREATE TABLE `discussions_bp` (
  `ds_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `ds_title` varchar(255) NOT NULL,
  `ds_body` text NOT NULL,
  `ds_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ds_is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `id` int(10) NOT NULL,
  `url` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `registrar` varchar(100) NOT NULL,
  `dateregd` int(11) NOT NULL DEFAULT '0',
  `cost` float NOT NULL DEFAULT '0',
  `regdfor` int(11) NOT NULL DEFAULT '0',
  `notes` blob NOT NULL,
  `pw` varchar(25) NOT NULL,
  `un` varchar(25) NOT NULL,
  `lastupdate` int(11) NOT NULL DEFAULT '0',
  `submit` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dyn_menu`
--

CREATE TABLE `dyn_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `link_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'uri',
  `page_id` int(11) NOT NULL DEFAULT '0',
  `module_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dyn_group_id` int(11) NOT NULL DEFAULT '0',
  `position` int(5) NOT NULL DEFAULT '0',
  `target` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_parent` tinyint(1) NOT NULL DEFAULT '0',
  `show_menu` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `emp_id` int(11) NOT NULL,
  `emp_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`emp_id`, `emp_data`) VALUES
(1, '{"employee_name":"stalin","employee_email":"stalingalaxy@gmail.com","employee_gender":"Male","employee_address":"kumbakonam"}'),
(2, '{"employee_name":"king","employee_email":"king@gmail.com","employee_gender":"Male","employee_address":"Kumbakonam"}'),
(3, '{"employee_name":"jithan","employee_email":"king@gmail.com","employee_gender":"Male","employee_address":"Kumbakonam"}');

-- --------------------------------------------------------

--
-- Table structure for table `escape`
--

CREATE TABLE `escape` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escape`
--

INSERT INTO `escape` (`id`, `firstname`, `lastname`) VALUES
(1, 'stalin', 'thomas'),
(2, '   king', 'kobra'),
(3, 'Rob''s', 'thomson'),
(4, 'stalin''s', 'thomas');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'not set',
  `type` enum('test','alert','report') NOT NULL,
  `testid` int(10) NOT NULL,
  `siteid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `reported` int(11) NOT NULL,
  `result` blob NOT NULL,
  `time` int(11) NOT NULL,
  `timetaken` float NOT NULL,
  `isalert` varchar(2) NOT NULL,
  `emailid` int(11) NOT NULL,
  `submit` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frequencies`
--

CREATE TABLE `frequencies` (
  `id` int(10) NOT NULL,
  `name` varchar(16) NOT NULL,
  `submit` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `geocode_cache`
--

CREATE TABLE `geocode_cache` (
  `id` int(11) NOT NULL,
  `lng` double NOT NULL,
  `lat` double NOT NULL,
  `query` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosts`
--

CREATE TABLE `hosts` (
  `id` int(11) NOT NULL,
  `cost` float NOT NULL,
  `name` varchar(100) NOT NULL,
  `hosturl` varchar(100) NOT NULL,
  `un` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `ns1url` varchar(36) NOT NULL,
  `ns1ip` varchar(36) NOT NULL,
  `ns2url` varchar(36) NOT NULL,
  `ns2ip` varchar(36) NOT NULL,
  `ftpurl` varchar(100) NOT NULL,
  `ftpserverip` varchar(36) NOT NULL,
  `ftpun` varchar(50) NOT NULL,
  `ftppw` varchar(50) NOT NULL,
  `cpurl` varchar(36) NOT NULL,
  `cpun` varchar(36) NOT NULL,
  `cppw` varchar(36) NOT NULL,
  `pop3server` varchar(36) NOT NULL,
  `servicetel` varchar(50) NOT NULL,
  `servicetel2` varchar(50) NOT NULL,
  `serviceemail` varchar(100) NOT NULL,
  `webroot` varchar(48) NOT NULL,
  `absoluteroot` varchar(48) NOT NULL,
  `cgiroot` varchar(48) NOT NULL,
  `booked` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `lastupdate` int(11) NOT NULL DEFAULT '0',
  `submit` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent`, `name`, `icon`, `slug`, `number`) VALUES
(1, NULL, 'With Database', '', 'table/index/', 1),
(2, NULL, 'Without Database', '', 'Item-1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent`, `name`, `icon`, `slug`, `number`) VALUES
(1, NULL, 'Item 0', 'glyphicon glyphicon-user', 'Item-0', 1),
(2, NULL, 'Item 1', 'glyphicon glyphicon-remove', 'Item-1', 2),
(3, NULL, 'Item 2', '', 'Item-2', 3),
(4, NULL, 'Item 3', '', 'Item-3', 4),
(5, NULL, 'Item 4', '', 'Item-4', 5),
(6, NULL, 'Item 5', '', 'Item-5', 6),
(7, NULL, 'Item 6', '', 'Item-6', 7),
(8, 1, 'Item 0.1', '', 'item-0.1', 1),
(9, 1, 'Item 0.2', 'glyphicon glyphicon-search', 'item-0-2', 2),
(10, 8, 'Item 0.1.1', '', 'item-0-1-1', 1),
(11, 8, 'Item 0.1.2', '', 'Item-0-1-2', 2),
(12, 10, 'Item 0.1.1.1', '', 'Item-0-1-1-1', 1),
(13, 10, 'Item 0.1.1.2', '', 'Item-0-1-1-2', 2),
(14, 2, 'Item 1.1', '', 'item-1-1', 1),
(15, 2, 'Item 1.2', '', 'item-1-2', 2),
(16, 3, 'Item 2.2', '', 'item-2-2', 2),
(17, 3, 'Item 2.1', '', 'item-2.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'india', 'india', 'India, officially the Republic of India,[c] is a country in South Asia. It is the seventh largest country by area, the second most populous country (with over 1.2 billion people), and the most populous democracy in the world. It is bounded by the Indian Ocean on the south, the Arabian Sea on the southwest, and the Bay of Bengal on the southeast. It shares land borders with Pakistan to the west;[d] China, Nepal, and Bhutan to the northeast; and Myanmar (Burma) and Bangladesh to the east. In the Indian Ocean, India is in the vicinity of Sri Lanka and the Maldives. India''s Andaman and Nicobar Islands share a maritime border with Thailand and Indonesia. India''s capital is New Delhi; other metropolises include Mumbai, Kolkata, Chennai, Bangalore, Hyderabad and Ahmedabad.'),
(2, 'king', 'king', 'King Digital Entertainment plc, doing business as King, is a social games company. King develops games for the web, for mobile, Facebook, and Windows 10'),
(3, 'Black Money', 'blackmoney', 'In India, black money refers to funds earned on the black market, on which income and other taxes have not been paid. The total amount of black money deposited in foreign banks by Indians is unknown. Some reports claim a total of US$1.06 trillion is held illegally in Switzerland.[1] Other reports, including those reported by the Swiss Bankers Association and the Government of Switzerland, claim these reports are false and fabricated, and the total amount held in all Swiss bank accounts by citizens of India is about US$2 billion'),
(4, 'Mumbai', 'Mumbai', 'Mumbai (/m?m?ba?/; also known as Bombay, the official name until 1995) is the capital city of the Indian state of Maharashtra. It is the most populous city in India and the ninth most populous agglomeration in the world, with an estimated city population of 18.4 million. Along with the neighbouring regions of the Mumbai Metropolitan Region, it is one of the most populous urban regions in the world and the second most populous metropolitan area in India, with a population of 20.7 million as of 2011.[11][12] Mumbai lies on the west coast of India and has a deep natural harbour. In 2009, Mumbai was named an alpha world city.[13] It is also the wealthiest city in India,[14] and has the highest GDP of any city in South, West, or Central Asia.[15] Mumbai has the highest number of billionaires and millionaires among all cities in India'),
(5, 'Kumbakonam', 'kmu', 'Kumbakonam, also spelt as Coombaconum in the records of British India, is a town and a special grade municipality in the Thanjavur district in the southeast Indian state of Tamil Nadu. It is located 40 km (25 mi) from Thanjavur and 273 km (170 mi) from Chennai and is the headquarters of the Kumbakonam taluk of Thanjavur district. The town is bounded by two rivers, the Kaveri River to the north and Arasalar River to the south. According to the 2011 census, Kumbakonam has a population of 140,156 and has a strong Hindu majority; but it also has sizeable Muslim and Christian populations. Kumbakonam is known as a "temple town" due to the prevalence of a number of temples here and is noted for its Mahamaham festival which attracts people from all over the globe.'),
(6, 'Temples of Kumbakonam', 'Temples_of_Kumbakonam', 'Kumbakonam is known for its temples and mathas (monasteries). There are around 188 Hindu temples within the municipal limits of Kumbakonam.[25] Apart from these, there several thousand temples around the town thereby giving the town the sobriquets "Temple Town" and "City of temples".[50]\r\n\r\nAdi Kumbeswarar Temple is considered to be the oldest Shaiva (the sect of the god Shiva) shrine in the town, believed to be constructed by the Cholas in the 7th century.[51] The Nageswaraswamy Temple has a separate shrine for the Sun god Surya who is believed to have worshipped Shiva at this place.[52] Adi Kumbeswarar temple, Nageswaraswamy temple and Kasi Viswanathar temple are Shiva temples in the town revered in the Tevaram, a Tamil Shaiva canonical work of the 7th–8th century.[53] Kumbakonam has one of the few temples dedicated to the god Brahma.[54]'),
(7, 'codeignator pagination', 'pagination', 'Now you know how to use the most useful configuration options for the CodeIgniter pagination library, and you can also fix the way the pagination links are displayed to provide a consistent experience for your users. A user guide comes with every download of CodeIgniter, so be sure to check the other configuration options for the library there. It contains options for styling the pagination links, and changing the way the links are rendered on the page.'),
(8, 'Yii Pagination', 'yii_pagination', 'When there are too much data to be displayed on a single page, a common strategy is to display them in multiple pages and on each page only display a small portion of the data. This strategy is known as pagination.\r\n\r\nYii uses a yii\\data\\Pagination object to represent the information about a pagination scheme. In particular,\r\n\r\n    total count specifies the total number of data items. Note that this is usually much more than the number of data items needed to display on a single page.\r\n    page size specifies how many data items each page contains. The default value is 20.\r\n    current page gives the current page number (zero-based). The default value is 0, meaning the first page.\r\n\r\nWith a fully specified yii\\data\\Pagination object, you can retrieve and display data partially. For example, if you are fetching data from a database, you can specify the OFFSET and LIMIT clause of the DB query with the corresponding values provided by the pagination. Below is an example, '),
(9, 'CI Active Record', 'active_record', 'CodeIgniter uses a modified version of the Active Record Database Pattern. This pattern allows information to be retrieved, inserted, and updated in your database with minimal scripting. In some cases only one or two lines of code are necessary to perform a database action. CodeIgniter does not require that each database table be its own class file. It instead provides a more simplified interface.\r\n\r\nBeyond simplicity, a major benefit to using the Active Record features is that it allows you to create database independent applications, since the query syntax is generated by each database adapter. It also allows for safer queries, since the values are escaped automatically by the system.'),
(10, 'CI Form validation', 'form_validation', 'What follows is a "hands on" tutorial for implementing CodeIgniters Form Validation.\r\n\r\nIn order to implement form validation you''ll need three things:\r\n\r\n    A View file containing a form.\r\n    A View file containing a "success" message to be displayed upon successful submission.\r\n    A controller function to receive and process the submitted data.\r\n\r\nLet''s create those three things, using a member sign-up form as the example.'),
(11, 'Modi', 'modi', 'As Prime Minister, Modi''s administration has focused on reforming and modernising India''s infrastructure and government,[4] reducing bureaucracy, encouraging increased foreign direct investment,[5] improving national standards of health and sanitation and improving foreign relations.[6][7] Earlier, as Chief Minister of Gujarat, Modi''s economic policies (credited with encouraging economic growth in Gujarat) have been praised,[8] although his administration has been criticised for failing to significantly improve the human development in the state and for failing to prevent the 2002 Gujarat riots.[9][10][11] A Hindu nationalist and member of the Rashtriya Swayamsevak Sangh (RSS), Modi remains a controversial figure domestically and internationally.[9][12][13][14][15][16][17]');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2016-11-30', 1),
(2, '2016-11-30', 2),
(3, '2016-11-30', 3),
(4, '2016-11-30', 4),
(5, '2016-11-30', 5),
(6, '2016-11-30', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 1, 2, 250),
(1, 4, 1, 40),
(2, 1, 1, 250),
(3, 1, 1, 250),
(4, 1, 1, 250),
(4, 2, 1, 80),
(5, 1, 2, 250),
(6, 1, 2, 250);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pw` varchar(25) NOT NULL,
  `status` smallint(3) NOT NULL DEFAULT '1',
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `lastupdate` int(11) NOT NULL DEFAULT '0',
  `submit` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `performance_id` int(10) UNSIGNED NOT NULL,
  `performance_year` smallint(4) UNSIGNED NOT NULL,
  `performance_sales` int(10) UNSIGNED NOT NULL,
  `performance_expense` double NOT NULL,
  `performance_profit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`performance_id`, `performance_year`, `performance_sales`, `performance_expense`, `performance_profit`) VALUES
(1, 2010, 1000, 400, 200),
(2, 2011, 1100, 450, 220),
(3, 2012, 760, 1120, 400),
(4, 2013, 1030, 540, 310),
(5, 2014, 850, 420, 260),
(6, 2015, 1250, 560, 330);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Rob', 'Foster', 'rfoster@dudlydog.com'),
(2, 'Lucy', 'Welsh', 'lwelsh@cocopopet.com'),
(3, 'Chloe', 'Graves', 'cgraves@mia-cat.com'),
(4, 'Claire', 'Strickland', 'cstrickland@an-other-domain.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'View Sonic LCD', '19" View Sonic Black LCD, with 10 months warranty', 250, 'image/lcd.jpg'),
(2, 'IBM CDROM Drive', 'IBM CDROM Drive', 80, 'image/cdrom-drive.jpg'),
(3, 'Laptop Charger', 'Dell Laptop Charger with 6 months warranty', 50, 'image/charger.jpg'),
(4, 'Seagate Hard Drive', '80 GB Seagate Hard Drive in 10 months warranty', 40, 'image/hard-drive.jpg'),
(5, 'Atech Mouse', 'Black colored laser mouse. No warranty', 5, 'image/mouse.jpg'),
(6, 'Nokia 5800', 'Nokia 5800 XpressMusic is a mobile device with 3.2" widescreen display brings photos, video clips and web content to life', 299, 'image/mobile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sc_categories`
--

CREATE TABLE `sc_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `shortdesc` varchar(200) NOT NULL,
  `longdesc` text NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `parentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_categories`
--

INSERT INTO `sc_categories` (`id`, `name`, `shortdesc`, `longdesc`, `status`, `parentid`) VALUES
(1, 'shoes', 'Shoes for boys and girls.', '', 'active', 7),
(2, 'shirts', 'Shirts and blouses!', '', 'active', 7),
(3, 'pants', 'Stylish, durable pants for play or school.', '', 'active', 7),
(4, 'dresses', 'Pretty dresses for the apple of your eye.', '', 'inactive', 7),
(5, 'toys', 'Toys that are fun and mentally stimulating at the same time.', '', 'active', 8),
(6, 'games', 'Fun for the whole family.', '', 'active', 8),
(7, 'clothes', 'Clothes for school and play.', '', 'active', 0),
(8, 'fun', 'It''s time to unwind!', '', 'active', 0),
(9, 'test', 'testing', 'Testing!!!!', 'inactive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sc_colors`
--

CREATE TABLE `sc_colors` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_colors`
--

INSERT INTO `sc_colors` (`id`, `name`, `status`) VALUES
(1, 'red', 'active'),
(2, 'green', 'active'),
(3, 'blue', 'active'),
(4, 'yellow', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sc_pages`
--

CREATE TABLE `sc_pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_pages`
--

INSERT INTO `sc_pages` (`id`, `name`, `keywords`, `description`, `path`, `content`, `status`) VALUES
(1, 'About Us', 'about us', 'about us page', 'about_us', '<p>Sample About Us information</p>', 'active'),
(2, 'Privacy', 'privacy', 'privacy', 'privacy', 'Privacy information', 'active'),
(3, 'Contact', 'contact', 'contact', 'contact', 'Contact Information goes here', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sc_products`
--

CREATE TABLE `sc_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortdesc` varchar(255) NOT NULL,
  `longdesc` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `grouping` varchar(16) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` enum('true','false') NOT NULL,
  `price` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_products`
--

INSERT INTO `sc_products` (`id`, `name`, `shortdesc`, `longdesc`, `thumbnail`, `image`, `grouping`, `status`, `category_id`, `featured`, `price`) VALUES
(1, 'Game 1', 'This is a very good game.', 'What a product! You''ll love the way your kids will play with this game all day long. It''s terrific!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 3, 'true', 19.95),
(2, 'Game 2', 'This is a very good game.', 'What a product! You''ll love the way your kids will play with this game all day long. It''s terrific!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 3, 'true', 19.95),
(3, 'Game 3', 'This is a very good game.', 'What a product! You''ll love the way your kids will play with this game all day long. It''s terrific!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 1, 'true', 39.95),
(4, 'Toy 1', 'This is a very good toy.', 'What a product! You''ll love the way your kids will play with this game all day long. It''s terrific!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 1, 'true', 9.95),
(5, 'Toy 2', 'This is a very good toy.', 'What a product! You''ll love the way your kids will play with this game all day long. It''s terrific!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 6, 'false', 23.95),
(6, 'Shoes 1', 'This is a very good pair of shoes.', 'These shoes will last forever!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 6, 'true', 23.95),
(7, 'Shoes 2', 'This is a very good pair of shoes.', 'These shoes will last forever!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 1, 'false', 23.95),
(8, 'Shirt 1', 'Nice shirt!', 'A stylish shirt for school!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 2, 'true', 23.95),
(9, 'Shirt 2', 'Nice shirt!', 'A stylish shirt for school!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 2, 'false', 23.95),
(10, 'Dress 1', 'Nice dress!', 'A stylish dress just in time for school!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 2, 'true', 33.95),
(11, 'Dress 2', 'Nice dress!', 'A stylish dress just in time for school!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 2, 'true', 43.95),
(12, 'Pants 1', 'Nice pair of pants!', 'A stylish pair of pants just in time for school!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'blob', 'active', 3, 'true', 33.95),
(13, 'test123', 'test!!', 'test!!!!', '/img/dummy-thumb.jpg', '/img/dummy-main.jpg', 'xyz', 'active', 1, 'false', 10.95),
(14, 'Long-sleeved t-shirt', 'Very comfy!', 'A great t-shirt for cold autumn days.', '/img/dummy-thumb1.jpg', '/img/dummy-main1.jpg', 'blah', 'active', 2, 'true', 29.95),
(15, 'Shoes Testing', 'test', 'test', '/img/dummy-thumb4.jpg', '/img/dummy-main4.jpg', 'adfasdf', 'active', 1, 'true', 1.29),
(16, 'afd', 'afd', 'adfds', '', '', 'aasdfd', 'active', 1, '', 5.99);

-- --------------------------------------------------------

--
-- Table structure for table `sc_products_colors`
--

CREATE TABLE `sc_products_colors` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_products_colors`
--

INSERT INTO `sc_products_colors` (`product_id`, `color_id`) VALUES
(15, 2),
(15, 3),
(16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sc_products_sizes`
--

CREATE TABLE `sc_products_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_products_sizes`
--

INSERT INTO `sc_products_sizes` (`product_id`, `size_id`) VALUES
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(16, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sc_sizes`
--

CREATE TABLE `sc_sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_sizes`
--

INSERT INTO `sc_sizes` (`id`, `name`, `status`) VALUES
(1, 'S', 'active'),
(2, 'M', 'active'),
(3, 'L', 'active'),
(4, 'XL', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sc_subscribers`
--

CREATE TABLE `sc_subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_subscribers`
--

INSERT INTO `sc_subscribers` (`id`, `name`, `email`) VALUES
(1, 'Tom Myer', 'myerman@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `un` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `client1` int(10) NOT NULL DEFAULT '0',
  `client2` int(10) NOT NULL DEFAULT '0',
  `admin1` int(10) NOT NULL DEFAULT '0',
  `admin2` int(10) NOT NULL DEFAULT '0',
  `domainid` int(10) NOT NULL DEFAULT '0',
  `hostid` int(10) NOT NULL DEFAULT '0',
  `webroot` varchar(50) NOT NULL,
  `files` text NOT NULL,
  `filesdate` int(11) NOT NULL DEFAULT '0',
  `lastupdate` int(11) NOT NULL DEFAULT '0',
  `submit` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `roll_no`, `name`) VALUES
(1, 101, 'stalinthomas'),
(2, 102, 'pakki');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `siteid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(250) NOT NULL,
  `type` varchar(25) NOT NULL,
  `url` varchar(120) NOT NULL,
  `regex` varchar(250) NOT NULL,
  `p1` varchar(250) NOT NULL,
  `p2` varchar(250) NOT NULL,
  `p3` varchar(250) NOT NULL,
  `p4` varchar(250) NOT NULL,
  `p5` varchar(250) NOT NULL,
  `p6` varchar(250) NOT NULL,
  `frequency` int(10) NOT NULL DEFAULT '0',
  `lastdone` int(10) NOT NULL DEFAULT '0',
  `isalert` varchar(2) NOT NULL,
  `setup` int(10) NOT NULL DEFAULT '0',
  `lastupdate` int(10) NOT NULL DEFAULT '0',
  `notes` varchar(250) NOT NULL,
  `submit` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` varchar(7) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `url_id` int(11) NOT NULL,
  `url_code` varchar(10) NOT NULL,
  `url_address` text NOT NULL,
  `url_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`url_id`, `url_code`, `url_address`, `url_created_at`) VALUES
(1, 'OQBWYw9d', 'stalin', '2016-12-22 12:41:46'),
(2, '0ewgyzcb', 'stalin', '2016-12-22 12:48:45'),
(3, 'L9bujtrY', 'jack', '2016-12-22 12:49:10'),
(4, 'ZxoJ3nei', 'www.codelooms.com', '2016-12-22 12:52:06'),
(5, 'gH5bIXR1', 'www.codelooms.com', '2016-12-22 12:53:52'),
(6, 'j73pv4Fz', 'www.codelooms.com', '2016-12-22 12:57:30'),
(7, 'apLzw6XR', 'www.codelooms.com', '2016-12-22 12:58:02'),
(8, 'mvy2IpJl', 'stalin', '2016-12-22 12:58:41'),
(9, 'CUKkV1e9', 'stalin', '2016-12-29 12:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'stalin', 'thomas', 'stalin@gmaial.com', '9d498f1145728c7ab6c1a29bc031ea63'),
(2, 'stalin', 'thomas', 'st@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'virat', 'kohli', 'v@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(125) NOT NULL,
  `last_name` varchar(125) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_date` int(11) NOT NULL COMMENT 'unix timestamp',
  `is_active` varchar(3) NOT NULL COMMENT 'yes or no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `created_date`, `is_active`) VALUES
(6, 'stalin', 'thomas', 'st@gmail.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_bp`
--

CREATE TABLE `users_bp` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(25) NOT NULL,
  `usr_hash` varchar(255) NOT NULL,
  `usr_email` varchar(125) NOT NULL,
  `usr_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_is_active` int(1) NOT NULL,
  `usr_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bench_table`
--
ALTER TABLE `bench_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `censor`
--
ALTER TABLE `censor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `censored_words`
--
ALTER TABLE `censored_words`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch6_users`
--
ALTER TABLE `ch6_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_pfofes_register`
--
ALTER TABLE `ci_pfofes_register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ci_profess_users`
--
ALTER TABLE `ci_profess_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions_bp`
--
ALTER TABLE `ci_sessions_bp`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `comments_bp`
--
ALTER TABLE `comments_bp`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `diff_articles`
--
ALTER TABLE `diff_articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `discussions_bp`
--
ALTER TABLE `discussions_bp`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dyn_menu`
--
ALTER TABLE `dyn_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dyn_group_id - normal` (`dyn_group_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `escape`
--
ALTER TABLE `escape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequencies`
--
ALTER TABLE `frequencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geocode_cache`
--
ALTER TABLE `geocode_cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`performance_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `sc_categories`
--
ALTER TABLE `sc_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_colors`
--
ALTER TABLE `sc_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_pages`
--
ALTER TABLE `sc_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_products`
--
ALTER TABLE `sc_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_products_colors`
--
ALTER TABLE `sc_products_colors`
  ADD PRIMARY KEY (`product_id`,`color_id`);

--
-- Indexes for table `sc_products_sizes`
--
ALTER TABLE `sc_products_sizes`
  ADD PRIMARY KEY (`product_id`,`size_id`);

--
-- Indexes for table `sc_sizes`
--
ALTER TABLE `sc_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_subscribers`
--
ALTER TABLE `sc_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`url_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_bp`
--
ALTER TABLE `users_bp`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bench_table`
--
ALTER TABLE `bench_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `censor`
--
ALTER TABLE `censor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `censored_words`
--
ALTER TABLE `censored_words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ch6_users`
--
ALTER TABLE `ch6_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ci_pfofes_register`
--
ALTER TABLE `ci_pfofes_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ci_profess_users`
--
ALTER TABLE `ci_profess_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments_bp`
--
ALTER TABLE `comments_bp`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `diff_articles`
--
ALTER TABLE `diff_articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `discussions_bp`
--
ALTER TABLE `discussions_bp`
  MODIFY `ds_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dyn_menu`
--
ALTER TABLE `dyn_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `escape`
--
ALTER TABLE `escape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `geocode_cache`
--
ALTER TABLE `geocode_cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosts`
--
ALTER TABLE `hosts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `performance_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sc_categories`
--
ALTER TABLE `sc_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sc_colors`
--
ALTER TABLE `sc_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sc_pages`
--
ALTER TABLE `sc_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sc_products`
--
ALTER TABLE `sc_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sc_sizes`
--
ALTER TABLE `sc_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sc_subscribers`
--
ALTER TABLE `sc_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_bp`
--
ALTER TABLE `users_bp`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menus` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
