-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 11:27 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietlothocbong`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--
-- Error reading structure for table vietlothocbong.brand: #1932 - Table 'vietlothocbong.brand' doesn't exist in engine
-- Error reading data for table vietlothocbong.brand: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`brand`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `country`
--
-- Error reading structure for table vietlothocbong.country: #1932 - Table 'vietlothocbong.country' doesn't exist in engine
-- Error reading data for table vietlothocbong.country: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`country`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(3) NOT NULL,
  `title` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `title`, `body`) VALUES
(1, 'nguyen duc hung', 'Em la ai co gai hay nang tien'),
(2, 'thu huong', 'Hom qua Thai lan da tong tien cong phong chong lu lut o bangkob');

-- --------------------------------------------------------

--
-- Table structure for table `group_project`
--

CREATE TABLE `group_project` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `alias` varchar(200) NOT NULL,
  `active` int(11) NOT NULL,
  `ord` int(11) NOT NULL,
  `metakeyword` varchar(200) NOT NULL,
  `metadescription` varchar(200) NOT NULL,
  `content_detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_project`
--

INSERT INTO `group_project` (`id`, `name`, `title`, `images`, `content`, `alias`, `active`, `ord`, `metakeyword`, `metadescription`, `content_detail`) VALUES
(1, 'Tìm kiếm học bồng toàn phần', '0', 'data_uploads/tin_tuc/bietthudonlap3.jpg', '	\r\nTìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', 'tim-kiem-hoc-bong-toan-phan', 1, 1, 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', '<h3>\r\n	T&igrave;m kiếm học bổng một c&aacute;ch ch&iacute;nh x&aacute;c, nhanh ch&oacute;ng v&agrave; dễ d&agrave;ng. T&igrave;m kiếm học bổng một c&aacute;ch ch&iacute;nh x&aacute;c, nhanh ch&oacute;ng v&agrave; dễ d&agrave;ng.</h3>\r\n'),
(3, 'Tìm kiếm học bổng một cách chính xác', '0', 'data_uploads/tin_tuc/10251941_553230461460615_5946109191669762772_n2.jpg', '<p>\r\n	T&igrave;m kiếm học bổng một c&aacute;ch ch&iacute;nh x&aacute;c, nhanh ch&oacute;ng v&agrave; dễ d&agrave;ng.</p>\r\n', 'tim-kiem-hoc-bong-mot-cach-chinh-xac', 1, 1, 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', '<p>\r\n	T&igrave;m kiếm học bổng một c&aacute;ch ch&iacute;nh x&aacute;c, nhanh ch&oacute;ng v&agrave; dễ d&agrave;ng.</p>\r\n'),
(4, 'Tìm kiếm học bổng một cách  ', '0', 'data_uploads/tin_tuc/10251941_553230461460615_5946109191669762772_n3.jpg', 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', 'tim-kiem-hoc-bong-mot-cach-', 1, 1, 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.', 'Tìm kiếm học bổng một cách chính xác, nhanh chóng và dễ dàng.');

-- --------------------------------------------------------

--
-- Table structure for table `introduc`
--
-- Error reading structure for table vietlothocbong.introduc: #1932 - Table 'vietlothocbong.introduc' doesn't exist in engine
-- Error reading data for table vietlothocbong.introduc: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`introduc`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(200) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `noidung` varchar(2000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `thoigian` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--
-- Error reading structure for table vietlothocbong.news: #1932 - Table 'vietlothocbong.news' doesn't exist in engine
-- Error reading data for table vietlothocbong.news: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`news`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--
-- Error reading structure for table vietlothocbong.scholarship: #1932 - Table 'vietlothocbong.scholarship' doesn't exist in engine
-- Error reading data for table vietlothocbong.scholarship: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`scholarship`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_type`
--
-- Error reading structure for table vietlothocbong.scholarship_type: #1932 - Table 'vietlothocbong.scholarship_type' doesn't exist in engine
-- Error reading data for table vietlothocbong.scholarship_type: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`scholarship_type`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--
-- Error reading structure for table vietlothocbong.setting: #1932 - Table 'vietlothocbong.setting' doesn't exist in engine
-- Error reading data for table vietlothocbong.setting: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`setting`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `contents` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `ord` int(3) UNSIGNED DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT NULL,
  `metakeyword` varchar(200) NOT NULL,
  `metadescription` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `name`, `contents`, `img`, `url`, `ord`, `active`, `metakeyword`, `metadescription`) VALUES
(1, 'Vietnam Headhunt Solutions', 'Investigators Vietnam offer the most discreet private investigation services in all of Vietnam – at local and affordable rates! Your \'eyes and ears\' on the ground anywhere in Vietnam, always on-time and always confidential. We are the most trusted and reliable detective agency in Vietnam!', 'images/slide/Vietnam_Headhunt_Solutions.jpg', 'http://noithat.org.vn/thi-cong-noi-that', 3, 1, '', ''),
(2, 'Vietnam Headhunt Solutions', 'Investigators Vietnam offer the most discreet private investigation services in all of Vietnam – at local and affordable rates! Your \'eyes and ears\' on the ground anywhere in Vietnam, always on-time and always confidential. We are the most trusted and reliable detective agency in Vietnam!', 'images/slide/Vietnam_Headhunt_Solutions.jpg', 'http://noithat.org.vn/thi-cong-mang-lan', 1, 1, '', ''),
(6, 'Vietnam Headhunt Solutions a', '<p>\r\n	Investigators Vietnam offer the most discreet private investigation services in all of Vietnam &ndash; at local and affordable rates! Your &#39;eyes and ears&#39; on the ground anywhere in Vietnam, always on-time and always confidential. We are the most trusted and reliable detective agency in Vietnam!</p>\r\n', 'images/slide/Vietnam_Headhunt_Solutions.jpg', 'http://noithat.org.vn/thi-cong-dien-nuoc', 3, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--
-- Error reading structure for table vietlothocbong.tag: #1932 - Table 'vietlothocbong.tag' doesn't exist in engine
-- Error reading data for table vietlothocbong.tag: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`tag`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tag_news`
--
-- Error reading structure for table vietlothocbong.tag_news: #1932 - Table 'vietlothocbong.tag_news' doesn't exist in engine
-- Error reading data for table vietlothocbong.tag_news: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`tag_news`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `university`
--
-- Error reading structure for table vietlothocbong.university: #1932 - Table 'vietlothocbong.university' doesn't exist in engine
-- Error reading data for table vietlothocbong.university: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`university`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--
-- Error reading structure for table vietlothocbong.user_group: #1932 - Table 'vietlothocbong.user_group' doesn't exist in engine
-- Error reading data for table vietlothocbong.user_group: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`user_group`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user_user`
--
-- Error reading structure for table vietlothocbong.user_user: #1932 - Table 'vietlothocbong.user_user' doesn't exist in engine
-- Error reading data for table vietlothocbong.user_user: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `vietlothocbong`.`user_user`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `demo` ADD FULLTEXT KEY `title` (`title`,`body`);

--
-- Indexes for table `group_project`
--
ALTER TABLE `group_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `group_project`
--
ALTER TABLE `group_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
