-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 09:55 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietlot`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_university` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `alias`, `id_university`, `order`) VALUES
(1, 'CNTT Phần cứng', 'cntt-phan-cung', 2, 1),
(2, 'Công nghệ phần mềm', 'cong-nghe-phan-mem', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `alias`, `order`) VALUES
(1, 'Việt Nam', 'viet-nam', 1),
(2, 'Singgapore', 'singgapore', 2),
(3, 'Thái Lan', 'thai-lan', 3);

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

CREATE TABLE `introduc` (
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `introduc`
--

INSERT INTO `introduc` (`content`) VALUES
('<p>&nbsp;</p>\r\n<p>Mục ti&ecirc;u tổng qu&aacute;t của chiến lược ph&aacute;t triển kinh tế- x&atilde; hội 2011-2020 đ&atilde; được Đại hội Đại biểu to&agrave;n quốc lần thứ XI Đảng cộng sản Việt Nam th&ocirc;ng qua đ&oacute; l&agrave; "Phấn đấu đến năm 2020 nước ta cơ bản trở th&agrave;nh nước C&ocirc;ng nghiệp theo hướng hiện đại" v&agrave; "Đổi mới m&ocirc; h&igrave;nh tăng trưởng v&agrave; cơ cấu lại nền kinh tế; đẩy mạnh c&ocirc;ng nghiệp h&oacute;a, hiện đại h&oacute;a, ph&aacute;t triển nhanh, bền vững".&nbsp; &nbsp; Với sự ph&aacute;t triển kh&ocirc;ng ngừng của khoa học c&ocirc;ng nghệ, tất c&aacute;c lĩnh vực kinh doanh tr&ecirc;n thế giới đ&atilde; v&agrave; đang tận dụng tối đa c&aacute;c th&agrave;nh quả của khoa học c&ocirc;ng nghệ để đưa v&agrave;o qu&aacute; tr&igrave;nh sản xuất, quản l&yacute;, tổ chức hoạt động kinh doanh nhằm n&acirc;ng cao hiệu quả kinh tế. Kh&ocirc;ng nằm ngo&agrave;i xu thế đ&oacute;, hoạt động kinh doanh xổ số tr&ecirc;n thế giới đ&atilde; c&oacute; những thay đổi lớn đ&oacute; l&agrave; việc sử dụng mạng th&ocirc;ng tin, mạng viễn th&ocirc;ng, c&aacute;c thiết bị điện tử để hiện đại h&oacute;a quy tr&igrave;nh ph&aacute;t h&agrave;nh xổ số từ đ&oacute; mang đến c&aacute;c tr&ograve; chơi giải tr&iacute; c&oacute; thưởng c&oacute; t&iacute;nh linh hoạt v&agrave; giải tr&iacute; cao đ&aacute;p ứng nhu cầu vui chơi giải tr&iacute; của một bộ phận người d&acirc;n.&nbsp;&nbsp; &nbsp; Tr&ecirc;n cơ sở đ&oacute;, ng&agrave;y 11 th&aacute;ng 7 năm 2011 Thủ tướng Ch&iacute;nh phủ đ&atilde; ban h&agrave;nh Quyết định số 1109/QĐ-TTg ph&ecirc; duyệt chủ trương hiện đại ho&aacute; hoạt động kinh doanh xổ số theo đ&oacute; Ch&iacute;nh phủ cho ph&eacute;p th&agrave;nh lập C&ocirc;ng ty kinh doanh xổ số tự chọn số điện to&aacute;n để tổ chức hoạt động kinh doanh xổ số tự chọn số điện to&aacute;n tr&ecirc;n phạm vi cả nước. Đ&acirc;y l&agrave; quyết định đ&uacute;ng đắn ph&ugrave; hợp với xu thế tr&ecirc;n thế giới v&agrave; thực tiễn ph&aacute;t triển về khoa học c&ocirc;ng nghệ, điện tử viễn th&ocirc;ng ở nước ta.</p>\r\n<p><span> </span><strong>Email:</strong><a href="mailto:abc@example.com?Subject=Hello" target="_top"> abc@gmail.</a></p>\r\n<p><a href="mailto:abc@example.com?Subject=Hello" target="_top"></a><strong>Skype:</strong><a href="callTo://skypename" target="_top"> Skypename</a></p>\r\n&nbsp;&nbsp;\r\n<p>&nbsp;</p>');

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

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(5) DEFAULT NULL,
  `modify_date` int(5) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `content`, `image`, `tag`, `create_date`, `modify_date`, `type`, `active`) VALUES
(5, 'Hướng dẫn lĩnh thưởng', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Năm học mới 2011-2012, trường Chu Văn An, một trong 3  trường tiểu học trọng điểm tại Hải Ph&ograve;ng, th&iacute; điểm học sinh lớp 1 kh&ocirc;ng  phải mang cặp v&agrave; l&agrave;m b&agrave;i tập về nh&agrave; buổi tối. Theo Hiệu trưởng Trịnh Thị  Minh, việc l&agrave;m n&agrave;y xuất ph&aacute;t từ nhu cầu thực tế suốt 30 năm gắn b&oacute; với  nghề gi&aacute;o.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">&ldquo;Khi nh&igrave;n những đứa con t&ocirc;i phải c&otilde;ng nhiều s&aacute;ch vở  tới trường suốt mấy năm kh&ocirc;ng cao th&ecirc;m cm n&agrave;o, c&agrave;ng ng&agrave;y chiếc cặp đi  học c&agrave;ng nặng theo thời gian, t&ocirc;i trăn trở nghĩ đến phải l&agrave;m một điều g&igrave;  đ&oacute; để đổi mới&rdquo;, c&ocirc; Minh chia sẻ.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Th&aacute;ng 9 vừa qua, trường tiểu học Chu Văn An bắt đầu  th&iacute; điểm việc học sinh lớp 1 kh&ocirc;ng phải mang cặp tới trường. Mỗi em sẽ  c&oacute; một ngăn tủ ri&ecirc;ng tại lớp để đựng s&aacute;ch vở v&agrave; đồ d&ugrave;ng c&aacute; nh&acirc;n. Cặp  s&aacute;ch được mang về v&agrave;o ng&agrave;y thứ s&aacute;u cuối tuần để c&aacute;c em thuận tiện trong  việc &ocirc;n lại b&agrave;i vở 2 ng&agrave;y nghỉ.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/e6/tu_dung_sach_vo_va_do_dung_ca_nhan.JPG" alt="tu do dung" width="495" height="333" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Tại lớp học, mỗi em c&oacute; một tủ đồ c&aacute; nh&acirc;n. Ảnh: <em>Hồng Nhung.</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">&Yacute; tưởng đổi mới của c&ocirc; Minh nhận được sự ủng hộ của Sở  GD&amp;ĐT Hải Ph&ograve;ng v&agrave; đa số phụ huynh c&oacute; con v&agrave;o lớp 1. Tuy nhi&ecirc;n, v&igrave;  l&agrave; trường đầu ti&ecirc;n th&iacute; điểm n&ecirc;n đối mặt nhiều kh&oacute; khăn. &ldquo;Học sinh lớp 1  mới từ mẫu gi&aacute;o l&ecirc;n, mải chơi hơn mải học. Với c&aacute;c ch&aacute;u tiếp thu chậm,  nếu buổi tối kh&ocirc;ng về nh&agrave; k&egrave;m th&ecirc;m b&agrave;i tập th&igrave; chưa chắc đ&atilde; theo kịp&rdquo;,  chị Cao Thị Thu, một phụ huynh học sinh chia sẻ.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ph&iacute;a gi&aacute;o vi&ecirc;n chủ nhiệm cũng phải mất nhiều thời gian  hơn cho học sinh. C&ocirc; gi&aacute;o Nhữ Thị Thanh Dung, chủ nhiệm lớp 1A5 trường  tiểu học Chu Văn An cho biết, tranh thủ giờ ra chơi hay những buổi chiều  muộn, c&ocirc; tr&ograve; c&ugrave;ng &ocirc;n b&agrave;i. &ldquo;Trong lớp c&aacute;c con tiếp thu nhanh chậm kh&aacute;c  nhau. Để bạn học chậm đuổi kịp c&aacute;c bạn chỉ c&oacute; c&aacute;ch c&ocirc; tr&ograve; c&ugrave;ng học&rdquo;, c&ocirc;  Dung giải th&iacute;ch.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">C&ocirc; Dung cho biết th&ecirc;m, c&aacute;ch đ&acirc;y một th&aacute;ng, đa số c&aacute;c  con đều chưa quen với việc tự sắp xếp đồ d&ugrave;ng s&aacute;ch vở th&igrave; b&acirc;y giờ &ocirc; đồ  của bạn n&agrave;o bạn nấy đ&atilde; biết c&aacute;ch quản l&yacute;. "Nhiều bạn tỏ ra tiến bộ trong  việc tự phục vụ bản th&acirc;n, biết c&aacute;ch tự bơm mực, xếp đồ đạc v&agrave; c&ograve;n gi&uacute;p  đỡ bạn kh&aacute;c l&agrave;m chậm hơn m&igrave;nh&rdquo;, c&ocirc; Dung kể.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Kỳ kiểm tra vừa qua, hơn 95% học sinh lớp 1A5 của c&ocirc; Dung đều đạt điểm 8 trở l&ecirc;n c&aacute;c m&ocirc;n To&aacute;n, Tiếng Việt.</span></p>', 'data_uploads/tin_tuc/a2.JPG', '', 1320121576, 1484455779, 0, 1),
(6, 'Lần đầu tiên có vé trúng thưởng Jackpot vào thứ Sáu', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Nh&oacute;m thứ nhất gồm học sinh, sinh vi&ecirc;n c&aacute;c trường đại  học, cao đẳng, trung học chuy&ecirc;n nghiệp - dạy nghề v&agrave; THPT, bắt đầu học  từ 7h, kết th&uacute;c v&agrave;o 18h. Nh&oacute;m hai l&agrave; c&aacute;c trung t&acirc;m thương mại, cơ quan  dịch vụ, t&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng bắt đầu mở cửa từ 9h, đ&oacute;ng cửa sau 19h.  Nh&oacute;m ba gồm c&ocirc;ng chức, vi&ecirc;n chức, học sinh c&aacute;c trường mầm non, tiểu học,  trung học cơ sở... c&ugrave;ng l&agrave;m việc v&agrave; học tập từ 8h, kết th&uacute;c 17h.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ngo&agrave;i ra, theo điều kiện của từng trường, Sở GD&amp;ĐT  c&oacute; thể điều chỉnh cục bộ giờ v&agrave;o học, tan học để đảm bảo &iacute;t ảnh hưởng  đến học sinh, phụ huynh. Phương &aacute;n điều chỉnh giờ, tần suất hoạt động  của nhiều tuyến xe bu&yacute;t cũng được t&iacute;nh đến khi khung giờ cao điểm c&oacute; thể  k&eacute;o d&agrave;i th&ecirc;m một giờ.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/af/a1.jpg" alt="&Ugrave;n tắc" width="495" height="338" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Giao th&ocirc;ng lộn xộn tr&ecirc;n nhiều tuyến phố ở thủ đ&ocirc;. Ảnh: <em>Tiến Dũng.</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Theo đại diện Th&agrave;nh ủy H&agrave; Nội, nếu được Thủ tướng ph&ecirc;  duyệt, việc đổi giờ học, giờ l&agrave;m tr&ecirc;n địa b&agrave;n sẽ triển khai từ ng&agrave;y  1/12/2011 hoặc 1/1/2012.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Phương &aacute;n n&agrave;y dựa tr&ecirc;n đề xuất của c&aacute;c sở ng&agrave;nh H&agrave;  Nội, như thu hẹp nh&oacute;m, kh&ocirc;ng thay đổi giờ l&agrave;m của c&ocirc;ng chức, vi&ecirc;n chức  trung ương v&agrave; H&agrave; Nội. Hiện giờ l&agrave;m việc của c&aacute;c cơ quan trung ương tại  H&agrave; Nội l&agrave; từ 7h30 đến 16h30; của c&aacute;c cơ quan th&agrave;nh phố l&agrave; từ 8h đến 19h.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Trước đ&oacute; 4 ng&agrave;y, Bộ Giao th&ocirc;ng Vận tải đ&atilde; tr&igrave;nh Ch&iacute;nh  phủ phương &aacute;n đổi giờ học, giờ l&agrave;m theo 9 nh&oacute;m. Điểm thay đổi lớn nhất  của đề &aacute;n n&agrave;y l&agrave; đẩy l&ugrave;i giờ l&agrave;m việc của c&ocirc;ng chức cơ quan quan trung  ương xuống muộn c&ograve;n 9h v&agrave; kết th&uacute;c l&uacute;c 18h; c&ocirc;ng chức của H&agrave; Nội cũng  được đề xuất đi l&agrave;m muộn một giờ so với hiện nay.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ri&ecirc;ng học sinh, sinh vi&ecirc;n được Bộ chia ra l&agrave;m 6 nh&oacute;m  học tập v&agrave;o những giờ kh&aacute;c nhau. Cụ thể bậc mầm non đến THCS học b&aacute;n tr&uacute;  từ 8h đến 17h30. Học sinh THPT học ca s&aacute;ng 7-11h; ca chiều 12h30-16h30.  Giờ học của sinh vi&ecirc;n được ph&acirc;n chia cụ thể theo địa b&agrave;n quận. C&ograve;n  trung t&acirc;m kinh doanh, thương mại sẽ mở cửa từ 9h30 đến 23h30.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Chủ trương điều chỉnh giờ l&agrave;m việc, giờ học đ&atilde; được  Thủ tướng chỉ đạo thực hiện, đ&acirc;y được coi l&agrave; một trong những giải ph&aacute;p  giảm &ugrave;n tắc giao th&ocirc;ng tại H&agrave; Nội v&agrave; TP HCM. Ph&aacute;t biểu trước Quốc hội,  Bộ trưởng Đinh La Thăng thừa nhận việc đổi giờ l&agrave;m việc thực sự cũng g&acirc;y  x&aacute;o trộn, ảnh hưởng đến sinh hoạt của người d&acirc;n, nhưng nếu hy sinh lợi  &iacute;ch nhỏ m&agrave; kh&ocirc;ng &ugrave;n tắc giao th&ocirc;ng, giảm tai nạn giao th&ocirc;ng th&igrave; người  d&acirc;n cũng được lợi.</span></p>', 'data_uploads/tin_tuc/a1.jpg', '', 1320121615, 1484455804, 0, 1),
(7, 'Vietlott đã thực hiện trả thưởng giải Jackpot kỳ quay số mở thưởng số 69', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal"><span style="font-size: small; font-family: arial, helvetica, sans-serif;">Vụ tai nạn xảy ra khoảng 15h chiều 1/11 tại th&ocirc;n Mỹ Quang, x&atilde; Thăng Long.</span></p>\r\n<p class="Normal"><span style="color: #000000; font-size: small; font-family: arial, helvetica, sans-serif;">&Ocirc;ng Phạm Văn Li&ecirc;n ở th&ocirc;n Mỹ Quang cho biết, c&aacute;ch đ&acirc;y &iacute;t ng&agrave;y c&oacute; 8 c&ocirc;ng nh&acirc;n đến xin trọ tại gia đ&igrave;nh để thi c&ocirc;ng đường điện cho C&ocirc;ng ty Cổ phần m&iacute;a đường N&ocirc;ng Cống.</span></p>\r\n<p class="Normal"><span style="color: #000000; font-size: small; font-family: arial, helvetica, sans-serif;">Khi xảy ra sự cố, 6 c&ocirc;ng nh&acirc;n đang x&acirc;y lắp cột điện, 2 người c&ograve;n lại đi x&aacute;ch nước để trộn vữa. Nghe tiếng ch&aacute;y nổ, họ ch&aacute;y đến v&agrave; đ&atilde; sốc nặng khi chứng kiến c&aacute;i chết thảm của đồng nghiệp. Cả hai đang được nh&acirc;n vi&ecirc;n y tế chăm s&oacute;c.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial, helvetica, sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0e/5b/dien.jpg" alt="" width="495" height="349" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial, helvetica, sans-serif;">Người d&acirc;n v&acirc;y k&iacute;n hiện trường vụ tai nạn. Ảnh:&nbsp;<em>L&ecirc; Ho&agrave;ng.</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial, helvetica, sans-serif;"><span style="color: #000000;">Theo x&aacute;c minh của cơ quan chức năng,&nbsp;</span>6 nạn nh&acirc;n tr&uacute; tại hai huyện Cẩm Thủy v&agrave; Thạch Th&agrave;nh của Thanh H&oacute;a, l&agrave; c&ocirc;ng nh&acirc;n của C&ocirc;ng ty Phương Anh c&oacute; địa chỉ tại th&agrave;nh phố Thanh H&oacute;a. Trong đ&oacute; c&oacute; 3 người họ Trương l&agrave; họ h&agrave;ng.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial, helvetica, sans-serif;"><span style="color: #000000;">Đến 19h c&ugrave;ng ng&agrave;y, c&ocirc;ng t&aacute;c kh&aacute;m nghiệm tử thi vẫn đang được cơ quan điều tra tiến h&agrave;nh.&nbsp;</span>Tại hiện trường, x&aacute;c 6 c&ocirc;ng nh&acirc;n bị ch&aacute;y x&eacute;m nhiều phần tr&ecirc;n cơ thể. Chiếc t&oacute; ba ch&acirc;n d&ugrave;ng để tời c&acirc;y cột điện bị đổ nghi&ecirc;ng tr&ecirc;n mặt đất. V&ugrave;ng m&iacute;a xung quanh nơi c&ocirc;ng nh&acirc;n đang trồng cột điện cũng bị ch&aacute;y.</span></p>\r\n<p class="Normal"><span style="color: #000000; font-size: small; font-family: arial, helvetica, sans-serif;">&Ocirc;ng L&ecirc; Trọng H&ugrave;ng, Ph&oacute; chủ tịch UBND huyện N&ocirc;ng Cống cho biết, nguy&ecirc;n nh&acirc;n tai nạn l&agrave; điện giật v&igrave; c&ocirc;ng nh&acirc;n l&agrave;m ngay ph&iacute;a dưới đường d&acirc;y điện trung thế 35 kV. "C&oacute; thể trong l&uacute;c dựng cột, d&ograve;ng điện đ&atilde; ph&oacute;ng xuống v&agrave; giật chết số c&ocirc;ng nh&acirc;n n&agrave;y", &ocirc;ng H&ugrave;ng n&oacute;i.</span></p>\r\n<p class="Normal"><span style="color: #000000; font-size: small; font-family: arial, helvetica, sans-serif;">UBND huyện N&ocirc;ng Cống đ&atilde; tr&iacute;ch ng&acirc;n s&aacute;ch hỗ trợ mỗi gia đ&igrave;nh nạn nh&acirc;n một triệu đồng tiền mai t&aacute;ng v&agrave; tổ chức đưa thi h&agrave;i người xấu số về địa phương.</span></p>', 'data_uploads/tin_tuc/Penguins.jpg', '', 1320195326, 1484653895, 0, 1),
(8, 'Hướng dẫn lĩnh thưởng', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Năm học mới 2011-2012, trường Chu Văn An, một trong 3  trường tiểu học trọng điểm tại Hải Ph&ograve;ng, th&iacute; điểm học sinh lớp 1 kh&ocirc;ng  phải mang cặp v&agrave; l&agrave;m b&agrave;i tập về nh&agrave; buổi tối. Theo Hiệu trưởng Trịnh Thị  Minh, việc l&agrave;m n&agrave;y xuất ph&aacute;t từ nhu cầu thực tế suốt 30 năm gắn b&oacute; với  nghề gi&aacute;o.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">&ldquo;Khi nh&igrave;n những đứa con t&ocirc;i phải c&otilde;ng nhiều s&aacute;ch vở  tới trường suốt mấy năm kh&ocirc;ng cao th&ecirc;m cm n&agrave;o, c&agrave;ng ng&agrave;y chiếc cặp đi  học c&agrave;ng nặng theo thời gian, t&ocirc;i trăn trở nghĩ đến phải l&agrave;m một điều g&igrave;  đ&oacute; để đổi mới&rdquo;, c&ocirc; Minh chia sẻ.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Th&aacute;ng 9 vừa qua, trường tiểu học Chu Văn An bắt đầu  th&iacute; điểm việc học sinh lớp 1 kh&ocirc;ng phải mang cặp tới trường. Mỗi em sẽ  c&oacute; một ngăn tủ ri&ecirc;ng tại lớp để đựng s&aacute;ch vở v&agrave; đồ d&ugrave;ng c&aacute; nh&acirc;n. Cặp  s&aacute;ch được mang về v&agrave;o ng&agrave;y thứ s&aacute;u cuối tuần để c&aacute;c em thuận tiện trong  việc &ocirc;n lại b&agrave;i vở 2 ng&agrave;y nghỉ.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/e6/tu_dung_sach_vo_va_do_dung_ca_nhan.JPG" alt="tu do dung" width="495" height="333" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Tại lớp học, mỗi em c&oacute; một tủ đồ c&aacute; nh&acirc;n. Ảnh: <em>Hồng Nhung.</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">&Yacute; tưởng đổi mới của c&ocirc; Minh nhận được sự ủng hộ của Sở  GD&amp;ĐT Hải Ph&ograve;ng v&agrave; đa số phụ huynh c&oacute; con v&agrave;o lớp 1. Tuy nhi&ecirc;n, v&igrave;  l&agrave; trường đầu ti&ecirc;n th&iacute; điểm n&ecirc;n đối mặt nhiều kh&oacute; khăn. &ldquo;Học sinh lớp 1  mới từ mẫu gi&aacute;o l&ecirc;n, mải chơi hơn mải học. Với c&aacute;c ch&aacute;u tiếp thu chậm,  nếu buổi tối kh&ocirc;ng về nh&agrave; k&egrave;m th&ecirc;m b&agrave;i tập th&igrave; chưa chắc đ&atilde; theo kịp&rdquo;,  chị Cao Thị Thu, một phụ huynh học sinh chia sẻ.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ph&iacute;a gi&aacute;o vi&ecirc;n chủ nhiệm cũng phải mất nhiều thời gian  hơn cho học sinh. C&ocirc; gi&aacute;o Nhữ Thị Thanh Dung, chủ nhiệm lớp 1A5 trường  tiểu học Chu Văn An cho biết, tranh thủ giờ ra chơi hay những buổi chiều  muộn, c&ocirc; tr&ograve; c&ugrave;ng &ocirc;n b&agrave;i. &ldquo;Trong lớp c&aacute;c con tiếp thu nhanh chậm kh&aacute;c  nhau. Để bạn học chậm đuổi kịp c&aacute;c bạn chỉ c&oacute; c&aacute;ch c&ocirc; tr&ograve; c&ugrave;ng học&rdquo;, c&ocirc;  Dung giải th&iacute;ch.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">C&ocirc; Dung cho biết th&ecirc;m, c&aacute;ch đ&acirc;y một th&aacute;ng, đa số c&aacute;c  con đều chưa quen với việc tự sắp xếp đồ d&ugrave;ng s&aacute;ch vở th&igrave; b&acirc;y giờ &ocirc; đồ  của bạn n&agrave;o bạn nấy đ&atilde; biết c&aacute;ch quản l&yacute;. "Nhiều bạn tỏ ra tiến bộ trong  việc tự phục vụ bản th&acirc;n, biết c&aacute;ch tự bơm mực, xếp đồ đạc v&agrave; c&ograve;n gi&uacute;p  đỡ bạn kh&aacute;c l&agrave;m chậm hơn m&igrave;nh&rdquo;, c&ocirc; Dung kể.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Kỳ kiểm tra vừa qua, hơn 95% học sinh lớp 1A5 của c&ocirc; Dung đều đạt điểm 8 trở l&ecirc;n c&aacute;c m&ocirc;n To&aacute;n, Tiếng Việt.</span></p>', 'data_uploads/tin_tuc/a2.JPG', '', 1320121576, 1484455779, 0, 1),
(9, 'Hướng dẫn lĩnh thưởng', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Ph&ograve;ng, th&iacute; điểm học sinh lớp 1 kh&ocirc;ng phải mang cặp v&agrave; l&agrave;m b&agrave;i tập về nh&agrave; buổi tối. Theo Hiệu trưởng Trịnh Thị Minh, việc l&agrave;m n&agrave;y xuất ph&aacute;t từ nhu cầu thực tế suốt 30 năm gắn b&oacute; với nghề gi&aacute;o.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">&ldquo;Khi nh&igrave;n những đứa con t&ocirc;i phải c&otilde;ng nhiều s&aacute;ch vở tới trường suốt mấy năm kh&ocirc;ng cao th&ecirc;m cm n&agrave;o, c&agrave;ng ng&agrave;y chiếc cặp đi học c&agrave;ng nặng theo thời gian, t&ocirc;i trăn trở nghĩ đến phải l&agrave;m một điều g&igrave; đ&oacute; để đổi mới&rdquo;, c&ocirc; Minh chia sẻ.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Th&aacute;ng 9 vừa qua, trường tiểu học Chu Văn An bắt đầu th&iacute; điểm việc học sinh lớp 1 kh&ocirc;ng phải mang cặp tới trường. Mỗi em sẽ c&oacute; một ngăn tủ ri&ecirc;ng tại lớp để đựng s&aacute;ch vở v&agrave; đồ d&ugrave;ng c&aacute; nh&acirc;n. Cặp s&aacute;ch được mang về v&agrave;o ng&agrave;y thứ s&aacute;u cuối tuần để c&aacute;c em thuận tiện trong việc &ocirc;n lại b&agrave;i vở 2 ng&agrave;y nghỉ.</span></p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img alt="tu do dung" height="333" src="http://vnexpress.net/Files/Subject/3b/a3/0d/e6/tu_dung_sach_vo_va_do_dung_ca_nhan.JPG" width="495" /></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Tại lớp học, mỗi em c&oacute; một tủ đồ c&aacute; nh&acirc;n. Ảnh: <em>Hồng Nhung.</em></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">&Yacute; tưởng đổi mới của c&ocirc; Minh nhận được sự ủng hộ của Sở GD&amp;ĐT Hải Ph&ograve;ng v&agrave; đa số phụ huynh c&oacute; con v&agrave;o lớp 1. Tuy nhi&ecirc;n, v&igrave; l&agrave; trường đầu ti&ecirc;n th&iacute; điểm n&ecirc;n đối mặt nhiều kh&oacute; khăn. &ldquo;Học sinh lớp 1 mới từ mẫu gi&aacute;o l&ecirc;n, mải chơi hơn mải học. Với c&aacute;c ch&aacute;u tiếp thu chậm, nếu buổi tối kh&ocirc;ng về nh&agrave; k&egrave;m th&ecirc;m b&agrave;i tập th&igrave; chưa chắc đ&atilde; theo kịp&rdquo;, chị Cao Thị Thu, một phụ huynh học sinh chia sẻ.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ph&iacute;a gi&aacute;o vi&ecirc;n chủ nhiệm cũng phải mất nhiều thời gian hơn cho học sinh. C&ocirc; gi&aacute;o Nhữ Thị Thanh Dung, chủ nhiệm lớp 1A5 trường tiểu học Chu Văn An cho biết, tranh thủ giờ ra chơi hay những buổi chiều muộn, c&ocirc; tr&ograve; c&ugrave;ng &ocirc;n b&agrave;i. &ldquo;Trong lớp c&aacute;c con tiếp thu nhanh chậm kh&aacute;c nhau. Để bạn học chậm đuổi kịp c&aacute;c bạn chỉ c&oacute; c&aacute;ch c&ocirc; tr&ograve; c&ugrave;ng học&rdquo;, c&ocirc; Dung giải th&iacute;ch.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">C&ocirc; Dung cho biết th&ecirc;m, c&aacute;ch đ&acirc;y một th&aacute;ng, đa số c&aacute;c con đều chưa quen với việc tự sắp xếp đồ d&ugrave;ng s&aacute;ch vở th&igrave; b&acirc;y giờ &ocirc; đồ của bạn n&agrave;o bạn nấy đ&atilde; biết c&aacute;ch quản l&yacute;. &quot;Nhiều bạn tỏ ra tiến bộ trong việc tự phục vụ bản th&acirc;n, biết c&aacute;ch tự bơm mực, xếp đồ đạc v&agrave; c&ograve;n gi&uacute;p đỡ bạn kh&aacute;c l&agrave;m chậm hơn m&igrave;nh&rdquo;, c&ocirc; Dung kể.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Kỳ kiểm tra vừa qua, hơn 95% học sinh lớp 1A5 của c&ocirc; Dung đều đạt điểm 8 trở l&ecirc;n c&aacute;c m&ocirc;n To&aacute;n, Tiếng Việt.</span></p>\r\n', 'data_uploads/tin_tuc/a2.JPG', 'vu avnb inh, binhminhthanhdat', 1320121576, 1488022405, 0, 1),
(10, 'Hướng dẫn lĩnh thưởng', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Ph&ograve;ng, th&iacute; điểm học sinh lớp 1 kh&ocirc;ng phải mang cặp v&agrave; l&agrave;m b&agrave;i tập về nh&agrave; buổi tối. Theo Hiệu trưởng Trịnh Thị Minh, việc l&agrave;m n&agrave;y xuất ph&aacute;t từ nhu cầu thực tế suốt 30 năm gắn b&oacute; với nghề gi&aacute;o.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">&ldquo;Khi nh&igrave;n những đứa con t&ocirc;i phải c&otilde;ng nhiều s&aacute;ch vở tới trường suốt mấy năm kh&ocirc;ng cao th&ecirc;m cm n&agrave;o, c&agrave;ng ng&agrave;y chiếc cặp đi học c&agrave;ng nặng theo thời gian, t&ocirc;i trăn trở nghĩ đến phải l&agrave;m một điều g&igrave; đ&oacute; để đổi mới&rdquo;, c&ocirc; Minh chia sẻ.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Th&aacute;ng 9 vừa qua, trường tiểu học Chu Văn An bắt đầu th&iacute; điểm việc học sinh lớp 1 kh&ocirc;ng phải mang cặp tới trường. Mỗi em sẽ c&oacute; một ngăn tủ ri&ecirc;ng tại lớp để đựng s&aacute;ch vở v&agrave; đồ d&ugrave;ng c&aacute; nh&acirc;n. Cặp s&aacute;ch được mang về v&agrave;o ng&agrave;y thứ s&aacute;u cuối tuần để c&aacute;c em thuận tiện trong việc &ocirc;n lại b&agrave;i vở 2 ng&agrave;y nghỉ.</span></p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img alt="tu do dung" height="333" src="http://vnexpress.net/Files/Subject/3b/a3/0d/e6/tu_dung_sach_vo_va_do_dung_ca_nhan.JPG" width="495" /></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Tại lớp học, mỗi em c&oacute; một tủ đồ c&aacute; nh&acirc;n. Ảnh: <em>Hồng Nhung.</em></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">&Yacute; tưởng đổi mới của c&ocirc; Minh nhận được sự ủng hộ của Sở GD&amp;ĐT Hải Ph&ograve;ng v&agrave; đa số phụ huynh c&oacute; con v&agrave;o lớp 1. Tuy nhi&ecirc;n, v&igrave; l&agrave; trường đầu ti&ecirc;n th&iacute; điểm n&ecirc;n đối mặt nhiều kh&oacute; khăn. &ldquo;Học sinh lớp 1 mới từ mẫu gi&aacute;o l&ecirc;n, mải chơi hơn mải học. Với c&aacute;c ch&aacute;u tiếp thu chậm, nếu buổi tối kh&ocirc;ng về nh&agrave; k&egrave;m th&ecirc;m b&agrave;i tập th&igrave; chưa chắc đ&atilde; theo kịp&rdquo;, chị Cao Thị Thu, một phụ huynh học sinh chia sẻ.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ph&iacute;a gi&aacute;o vi&ecirc;n chủ nhiệm cũng phải mất nhiều thời gian hơn cho học sinh. C&ocirc; gi&aacute;o Nhữ Thị Thanh Dung, chủ nhiệm lớp 1A5 trường tiểu học Chu Văn An cho biết, tranh thủ giờ ra chơi hay những buổi chiều muộn, c&ocirc; tr&ograve; c&ugrave;ng &ocirc;n b&agrave;i. &ldquo;Trong lớp c&aacute;c con tiếp thu nhanh chậm kh&aacute;c nhau. Để bạn học chậm đuổi kịp c&aacute;c bạn chỉ c&oacute; c&aacute;ch c&ocirc; tr&ograve; c&ugrave;ng học&rdquo;, c&ocirc; Dung giải th&iacute;ch.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">C&ocirc; Dung cho biết th&ecirc;m, c&aacute;ch đ&acirc;y một th&aacute;ng, đa số c&aacute;c con đều chưa quen với việc tự sắp xếp đồ d&ugrave;ng s&aacute;ch vở th&igrave; b&acirc;y giờ &ocirc; đồ của bạn n&agrave;o bạn nấy đ&atilde; biết c&aacute;ch quản l&yacute;. &quot;Nhiều bạn tỏ ra tiến bộ trong việc tự phục vụ bản th&acirc;n, biết c&aacute;ch tự bơm mực, xếp đồ đạc v&agrave; c&ograve;n gi&uacute;p đỡ bạn kh&aacute;c l&agrave;m chậm hơn m&igrave;nh&rdquo;, c&ocirc; Dung kể.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Kỳ kiểm tra vừa qua, hơn 95% học sinh lớp 1A5 của c&ocirc; Dung đều đạt điểm 8 trở l&ecirc;n c&aacute;c m&ocirc;n To&aacute;n, Tiếng Việt.</span></p>\r\n', 'data_uploads/tin_tuc/a2.JPG', 'vu avnb inh, binhminhthanhdat', 1320121576, 1488022398, 0, 1),
(12, 'Hướng dẫn lĩnh thưởng sdfsdfsdf', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Ph&ograve;ng, th&iacute; điểm học sinh lớp 1 kh&ocirc;ng phải mang cặp v&agrave; l&agrave;m b&agrave;i tập về nh&agrave; buổi tối. Theo Hiệu trưởng Trịnh Thị Minh, việc l&agrave;m n&agrave;y xuất ph&aacute;t từ nhu cầu thực tế suốt 30 năm gắn b&oacute; với nghề gi&aacute;o.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">&ldquo;Khi nh&igrave;n những đứa con t&ocirc;i phải c&otilde;ng nhiều s&aacute;ch vở tới trường suốt mấy năm kh&ocirc;ng cao th&ecirc;m cm n&agrave;o, c&agrave;ng ng&agrave;y chiếc cặp đi học c&agrave;ng nặng theo thời gian, t&ocirc;i trăn trở nghĩ đến phải l&agrave;m một điều g&igrave; đ&oacute; để đổi mới&rdquo;, c&ocirc; Minh chia sẻ.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Th&aacute;ng 9 vừa qua, trường tiểu học Chu Văn An bắt đầu th&iacute; điểm việc học sinh lớp 1 kh&ocirc;ng phải mang cặp tới trường. Mỗi em sẽ c&oacute; một ngăn tủ ri&ecirc;ng tại lớp để đựng s&aacute;ch vở v&agrave; đồ d&ugrave;ng c&aacute; nh&acirc;n. Cặp s&aacute;ch được mang về v&agrave;o ng&agrave;y thứ s&aacute;u cuối tuần để c&aacute;c em thuận tiện trong việc &ocirc;n lại b&agrave;i vở 2 ng&agrave;y nghỉ.</span></p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Tại lớp học, mỗi em c&oacute; một tủ đồ c&aacute; nh&acirc;n. Ảnh: <em>Hồng Nhung.</em></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">&Yacute; tưởng đổi mới của c&ocirc; Minh nhận được sự ủng hộ của Sở GD&amp;ĐT Hải Ph&ograve;ng v&agrave; đa số phụ huynh c&oacute; con v&agrave;o lớp 1. Tuy nhi&ecirc;n, v&igrave; l&agrave; trường đầu ti&ecirc;n th&iacute; điểm n&ecirc;n đối mặt nhiều kh&oacute; khăn. &ldquo;Học sinh lớp 1 mới từ mẫu gi&aacute;o l&ecirc;n, mải chơi hơn mải học. Với c&aacute;c ch&aacute;u tiếp thu chậm, nếu buổi tối kh&ocirc;ng về nh&agrave; k&egrave;m th&ecirc;m b&agrave;i tập th&igrave; chưa chắc đ&atilde; theo kịp&rdquo;, chị Cao Thị Thu, một phụ huynh học sinh chia sẻ.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ph&iacute;a gi&aacute;o vi&ecirc;n chủ nhiệm cũng phải mất nhiều thời gian hơn cho học sinh. C&ocirc; gi&aacute;o Nhữ Thị Thanh Dung, chủ nhiệm lớp 1A5 trường tiểu học Chu Văn An cho biết, tranh thủ giờ ra chơi hay những buổi chiều muộn, c&ocirc; tr&ograve; c&ugrave;ng &ocirc;n b&agrave;i. &ldquo;Trong lớp c&aacute;c con tiếp thu nhanh chậm kh&aacute;c nhau. Để bạn học chậm đuổi kịp c&aacute;c bạn chỉ c&oacute; c&aacute;ch c&ocirc; tr&ograve; c&ugrave;ng học&rdquo;, c&ocirc; Dung giải th&iacute;ch.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">C&ocirc; Dung cho biết th&ecirc;m, c&aacute;ch đ&acirc;y một th&aacute;ng, đa số c&aacute;c con đều chưa quen với việc tự sắp xếp đồ d&ugrave;ng s&aacute;ch vở th&igrave; b&acirc;y giờ &ocirc; đồ của bạn n&agrave;o bạn nấy đ&atilde; biết c&aacute;ch quản l&yacute;. &quot;Nhiều bạn tỏ ra tiến bộ trong việc tự phục vụ bản th&acirc;n, biết c&aacute;ch tự bơm mực, xếp đồ đạc v&agrave; c&ograve;n gi&uacute;p đỡ bạn kh&aacute;c l&agrave;m chậm hơn m&igrave;nh&rdquo;, c&ocirc; Dung kể.</span></p>\r\n<p class="Normal">\r\n	<span style="font-size: small; font-family: arial,helvetica,sans-serif;">Kỳ kiểm tra vừa qua, hơn 95% học sinh lớp 1A5 của c&ocirc; Dung đều đạt điểm 8 trở l&ecirc;n c&aacute;c m&ocirc;n To&aacute;n, Tiếng Việt.</span></p>\r\n', 'data_uploads/tin_tuc/a2.JPG', 'vu avnb inh, binhminhthanhdat', 1320121576, 1488020935, 0, 1),
(13, 'vu van binh test', 'vu van binh test', '<p>\r\n	sfsdfs dsdfj&nbsp;</p>\r\n', 'data_uploads/tin_tuc/giúp_việc_theo_giờ.jpg', 'sdfsdf', 1488048041, 1488048041, 0, 1),
(14, 'vu van binh test', 'vu van binh test', '<p>\r\n	sfsdfs dsdfj&nbsp;</p>\r\n', 'data_uploads/tin_tuc/bietthudonlap.jpg', 'sdfsdf', 1488048057, 1494032655, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) NOT NULL,
  `id_country` int(11) NOT NULL,
  `name_country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `university_id` int(11) NOT NULL,
  `university_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `Institution` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Fieldofstudy` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Eligibility` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Applicationinstructions` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Otherinformation` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_scholarship_str` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `name`, `alias`, `id_country`, `name_country`, `university_id`, `university_name`, `deadline`, `link`, `Institution`, `Fieldofstudy`, `Eligibility`, `Applicationinstructions`, `Otherinformation`, `image`, `type_scholarship_str`, `order`) VALUES
(1, 'Học bổng nguyễn văn đạo', 'hoc-bong-nguyen-van-dao', 1, 'Việt Nam', 1, 'Đại hoc FPT', '2017-05-18', 'http://localhost/vietlot/admin/scholarship/add_edit/1.html', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumhttp://localhost/vietlot/admin/scholarship/add_edit/1.html</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumhttp://localhost/vietlot/admin/scholarship/add_edit/1.html</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumhttp://localhost/vietlot/admin/scholarship/add_edit/1.html</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumhttp://localhost/vietlot/admin/scholarship/add_edit/1.html</p>\r\n', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumhttp://localhost/vietlot/admin/scholarship/add_edit/1.html</p>\r\n', 'data_uploads/tin_tuc/bietthudonlap2.jpg', '2,4,5', 12),
(2, 'Học bổng du học mỹ', 'hoc-bong-du-hoc-my', 3, 'Thái Lan', 3, 'Đại Học Hàng Hải', '2017-05-20', 'http://localhost/phpmyadmin/tbl_structure.php?db=vietlot&table=scholarship&token=d93c6ddd1d35ab3f5096a124e6c16fb4', '<p>\r\n	<span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Hi vọng mới từ g&oacute;i hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp</span><span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><img alt="" aria-hidden="1" class="img" height="16" src="https://www.facebook.com/images/emoji.php/v8/f6d/1/16/2600.png" style="border: 0px; vertical-align: -3px;" width="16" /><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;" />\r\n	<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Sau hơn hai th&aacute;ng triển khai ch&iacute;nh s&aacute;ch hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp tại dự &aacute;n The Vesta th&igrave; sang đầu th&aacute;ng 5 chương tr&igrave;nh ưu đ&atilde;i ch&iacute;nh thức kh&eacute;p lại. Nhưng để kỷ niệm ng&agrave;y 30/4 - 1/5 CĐT Hải Ph&aacute;t Invest mới đ&acirc;y bổ xung th&ecirc;m 16 căn hộ được hỗ trợ l&atilde;i suất tại dự &aacute;n</span></p>\r\n', '<p>\r\n	<span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Hi vọng mới từ g&oacute;i hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp</span><span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><img alt="" aria-hidden="1" class="img" height="16" src="https://www.facebook.com/images/emoji.php/v8/f6d/1/16/2600.png" style="border: 0px; vertical-align: -3px;" width="16" /><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;" />\r\n	<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Sau hơn hai th&aacute;ng triển khai ch&iacute;nh s&aacute;ch hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp tại dự &aacute;n The Vesta th&igrave; sang đầu th&aacute;ng 5 chương tr&igrave;nh ưu đ&atilde;i ch&iacute;nh thức kh&eacute;p lại. Nhưng để kỷ niệm ng&agrave;y 30/4 - 1/5 CĐT Hải Ph&aacute;t Invest mới đ&acirc;y bổ xung th&ecirc;m 16 căn hộ được hỗ trợ l&atilde;i suất tại dự &aacute;n</span></p>\r\n', '<p>\r\n	<span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Hi vọng mới từ g&oacute;i hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp</span><span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><img alt="" aria-hidden="1" class="img" height="16" src="https://www.facebook.com/images/emoji.php/v8/f6d/1/16/2600.png" style="border: 0px; vertical-align: -3px;" width="16" /><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;" />\r\n	<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Sau hơn hai th&aacute;ng triển khai ch&iacute;nh s&aacute;ch hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp tại dự &aacute;n The Vesta th&igrave; sang đầu th&aacute;ng 5 chương tr&igrave;nh ưu đ&atilde;i ch&iacute;nh thức kh&eacute;p lại. Nhưng để kỷ niệm ng&agrave;y 30/4 - 1/5 CĐT Hải Ph&aacute;t Invest mới đ&acirc;y bổ xung th&ecirc;m 16 căn hộ được hỗ trợ l&atilde;i suất tại dự &aacute;n</span></p>\r\n', '<p>\r\n	<span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Hi vọng mới từ g&oacute;i hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp</span><span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><img alt="" aria-hidden="1" class="img" height="16" src="https://www.facebook.com/images/emoji.php/v8/f6d/1/16/2600.png" style="border: 0px; vertical-align: -3px;" width="16" /><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">☀</span></span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;" />\r\n	<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Sau hơn hai th&aacute;ng triển khai ch&iacute;nh s&aacute;ch hỗ trợ 5% cho người mua nh&agrave; thu nhập thấp tại dự &aacute;n The Vesta th&igrave; sang đầu th&aacute;ng 5 chương tr&igrave;nh ưu đ&atilde;i ch&iacute;nh thức kh&eacute;p lại. Nhưng để kỷ niệm ng&agrave;y 30/4 - 1/5 CĐT Hải Ph&aacute;t Invest mới đ&acirc;y bổ xung th&ecirc;m 16 căn hộ được hỗ trợ l&atilde;i suất tại dự &aacute;n</span></p>\r\n', '<p>\r\n	<span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">?</span></span><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Hi v?ng m?i t? g&oacute;i h? tr? 5% cho ng??i mua nh&agrave; thu nh?p th?p</span><span class="_5mfr _47e3" style="line-height: 0; vertical-align: middle; margin: 0px 1px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;"><img alt="" aria-hidden="1" class="img" height="16" src="https://www.facebook.com/images/emoji.php/v8/f6d/1/16/2600.png" style="border: 0px; vertical-align: -3px;" width="16" /><span class="_7oe" style="display: inline-block; font-size: 0px; width: 0px; font-family: inherit;">?</span></span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;" />\r\n	<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px;">Sau h?n hai th&aacute;ng tri?n khai ch&iacute;nh s&aacute;ch h? tr? 5% cho ng??i mua nh&agrave; thu nh?p th?p t?i d? &aacute;n The Vesta th&igrave; sang ??u th&aacute;ng 5 ch??ng tr&igrave;nh ?u ?&atilde;i ch&iacute;nh th?c kh&eacute;p l?i. Nh?ng ?? k? ni?m ng&agrave;y 30/4 - 1/5 C?T H?i Ph&aacute;t Invest m?i ?&acirc;y b? xung th&ecirc;m 16 c?n h? ???c h? tr? l&atilde;i su?t t?i d? &aacute;n</span></p>\r\n', 'data_uploads/tin_tuc/10251941_553230461460615_5946109191669762772_n1.jpg', '1,3,5', 14);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_type`
--

CREATE TABLE `scholarship_type` (
  `id` int(11) NOT NULL,
  `id_scholarship` int(11) NOT NULL,
  `val_type_scholarship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `meta_key` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `per_page` int(5) DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_status` int(2) NOT NULL DEFAULT '1',
  `google_analytics` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`meta_key`, `meta_desc`, `per_page`, `address`, `phone`, `site_name`, `site_status`, `google_analytics`, `id`) VALUES
('can dien tu, can, dien tu, can chinh tam, cân, điện tử', 'can dien tu, can, dien tu, can chinh tam, cân, điện tử', 20, '104/2 Trường Chinh - P.Tân Thới - Q.12 - TP.HCM', '0918.620.484 or 0918.506.419 Mr Hồng Quy', 'Công ty TNHH SX TM Cân Chính Tâm - Mua bán cân điện tử - Sửa chữa bảo trì các loại cân điện tử', 1, '', 1);

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
(1, 'Vietnam Headhunt Solutions', 'Investigators Vietnam offer the most discreet private investigation services in all of Vietnam – at local and affordable rates! Your ''eyes and ears'' on the ground anywhere in Vietnam, always on-time and always confidential. We are the most trusted and reliable detective agency in Vietnam!', 'images/slide/Vietnam_Headhunt_Solutions.jpg', 'http://noithat.org.vn/thi-cong-noi-that', 3, 1, '', ''),
(2, 'Vietnam Headhunt Solutions', 'Investigators Vietnam offer the most discreet private investigation services in all of Vietnam – at local and affordable rates! Your ''eyes and ears'' on the ground anywhere in Vietnam, always on-time and always confidential. We are the most trusted and reliable detective agency in Vietnam!', 'images/slide/Vietnam_Headhunt_Solutions.jpg', 'http://noithat.org.vn/thi-cong-mang-lan', 1, 1, '', ''),
(6, 'Vietnam Headhunt Solutions a', '<p>\r\n	Investigators Vietnam offer the most discreet private investigation services in all of Vietnam &ndash; at local and affordable rates! Your &#39;eyes and ears&#39; on the ground anywhere in Vietnam, always on-time and always confidential. We are the most trusted and reliable detective agency in Vietnam!</p>\r\n', 'images/slide/Vietnam_Headhunt_Solutions.jpg', 'http://noithat.org.vn/thi-cong-dien-nuoc', 3, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `id_newsxoso` int(11) NOT NULL,
  `tagname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `id_newsxoso`, `tagname`) VALUES
(1, 14, 'sdfdsf'),
(2, 14, 'fgdfgdfg'),
(3, 8, 'dien-thoai-di-dong'),
(4, 8, 'may-tinh-bang'),
(5, 15, 'vu-van-binh'),
(6, 15, 'nguyen-ha-phuong'),
(7, 9, 'dien-thoai-di-dong'),
(8, 9, 'may-tinh-bang'),
(9, 7, 'dien-thoai-di-dong'),
(10, 7, 'may-tinh-bang');

-- --------------------------------------------------------

--
-- Table structure for table `tag_news`
--

CREATE TABLE `tag_news` (
  `id` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `tagname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_news`
--

INSERT INTO `tag_news` (`id`, `id_news`, `tagname`) VALUES
(1, 12, 'vu-avnb-inh'),
(2, 12, 'binhminhthanhdat'),
(3, 10, 'gfdg-f'),
(4, 10, 'fh-dfg-dfgdf'),
(5, 10, 'vu-avnb-inh'),
(6, 10, 'binhminhthanhdat'),
(7, 9, 'vu-avnb-inh'),
(8, 9, 'binhminhthanhdat'),
(9, 13, 'sdfsdf'),
(10, 14, 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_country` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `alias`, `id_country`, `order`) VALUES
(1, 'Đại hoc FPT', 'dai-hoc-fpt', 1, 1),
(2, 'Đại hoc Hà Nội', 'dai-hoc-ha-noi', 2, 2),
(3, 'Đại Học Hàng Hải', 'dai-hoc-hang-hai', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `user_group_id` int(3) NOT NULL,
  `user_group_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission_view` text COLLATE utf8_unicode_ci NOT NULL,
  `permission_edit_del` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`user_group_id`, `user_group_name`, `permission_view`, `permission_edit_del`) VALUES
(1, ' demo', 'a:1:{i:0;s:10:"admin/user";}', 'a:1:{i:0;s:10:"admin/user";}');

-- --------------------------------------------------------

--
-- Table structure for table `user_user`
--

CREATE TABLE `user_user` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_active` int(2) NOT NULL DEFAULT '1',
  `user_group_id` int(3) DEFAULT NULL,
  `user_password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_user`
--

INSERT INTO `user_user` (`user_id`, `user_name`, `user_fullname`, `user_email`, `user_active`, `user_group_id`, `user_password`) VALUES
(2, 'admin', 'Demo', 'abc@yahoo.com', 1, NULL, '21232f297a57a5a743894a0e4a801fc3'),
(3, 'adminadmin', NULL, '', 1, 3, 'admin@123'),
(4, 'adminadmin', NULL, '', 1, 3, 'e6e061838856bf47e1de730719fb2609');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagname` (`tagname`);

--
-- Indexes for table `tag_news`
--
ALTER TABLE `tag_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagname` (`tagname`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `user_user`
--
ALTER TABLE `user_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tag_news`
--
ALTER TABLE `tag_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `user_group_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_user`
--
ALTER TABLE `user_user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
