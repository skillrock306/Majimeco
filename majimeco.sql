-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 07, 2020 lúc 01:39 PM
-- Phiên bản máy phục vụ: 5.7.23
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `majimeco`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_11_20_034444_vp_user', 1),
(17, '2019_11_20_160351_vp_categories', 1),
(18, '2019_11_26_112755_vp_news', 1),
(19, '2019_11_29_022537_vp_slides', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_categories`
--

DROP TABLE IF EXISTS `vp_categories`;
CREATE TABLE IF NOT EXISTS `vp_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_categories`
--

INSERT INTO `vp_categories` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(1, 'Xuất Khẩu Hàn', 'xuat-khau-han', '2019-11-26 23:27:58', '2019-11-27 08:28:52'),
(2, 'Xuất Khẩu Nhật', 'xuat-khau-nhat', '2019-11-26 23:28:05', '2019-11-26 23:28:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_news`
--

DROP TABLE IF EXISTS `vp_news`;
CREATE TABLE IF NOT EXISTS `vp_news` (
  `new_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `new_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_brief` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_highlight` tinyint(4) NOT NULL,
  `new_numberviews` int(11) NOT NULL,
  `new_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`new_id`),
  KEY `vp_news_new_cate_foreign` (`new_cate`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_news`
--

INSERT INTO `vp_news` (`new_id`, `new_title`, `new_slug`, `new_brief`, `new_description`, `new_img`, `new_highlight`, `new_numberviews`, `new_cate`, `created_at`, `updated_at`) VALUES
(2, 'Phỏng vấn nóng fan Super Junior Việt bị bảo vệ AAA 2019', 'phong-van-nong-fan-super-junior-viet-bi-bao-ve-aaa-2019', 'Một fan Super Junior lâu năm đã bị bảo vệ của Asia Artist Awards 2019 (AAA 2019) lôi ra hành hung ngay trước giờ G.', '<p>Tối qua (26/11), lễ trao giải&nbsp;<a href=\"http://kenh14.vn/asia-artist-awards-2019-tai-viet-nam.html\" target=\"_blank\">Asia Artist Awards 2019</a>&nbsp;đ&atilde; ch&iacute;nh thức diễn ra tại SVĐ Mỹ Đ&igrave;nh với quy m&ocirc; khủng, quy h&agrave;ng trăm nghệ sĩ đ&igrave;nh đ&aacute;m như Yoona, Jang Dong Gun, Ji Chang Wook, Super Junior, TWICE, Red Velvet, GOT7... v&agrave; h&agrave;ng ngh&igrave;n kh&aacute;n giả đổ về từ khắp nơi tr&ecirc;n thế giới. Đ&aacute;ng n&oacute;i, kh&acirc;u tổ chức của chương tr&igrave;nh lại vấp phải v&ocirc; số &yacute; kiến tranh c&atilde;i v&igrave; thiếu chuy&ecirc;n nghiệp, lỏng lẻo, an ninh k&eacute;m.&nbsp;</p>\r\n\r\n<p>Mới đ&acirc;y nhất, một ELF l&acirc;u năm (fan của nh&oacute;m nhạc đ&igrave;nh đ&aacute;m Super Junior) đ&atilde; ngồi lại với ch&uacute;ng t&ocirc;i, kể lại trải nghiệm kinh ho&agrave;ng tại AAA h&ocirc;m qua. D&ugrave; bỏ ra tận 4,8 triệu đồng để mua về một tấm v&eacute; SVIP &quot;xịn x&ograve;&quot;, nhưng những g&igrave; bạn fan n&agrave;y nhận lại chỉ l&agrave; trải nghiệm đau đớn cả về thể x&aacute;c lẫn tinh thần. Được biết, bạn V.B.T đ&atilde; bị chặn ngay ngo&agrave;i cổng khi chương tr&igrave;nh sắp bắt đầu, thậm ch&iacute; c&ograve;n bị bảo vệ l&ocirc;i ra đ&aacute;nh bầm dập ch&acirc;n tay.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Majimeco/public/upload/images/donedsc7003-15748352553291850245514.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p><strong><em>Xin ch&agrave;o bạn, mọi chuyện xảy ra cụ thể như thế n&agrave;o?</em></strong></p>\r\n\r\n<p>&quot;Dạ, h&ocirc;m qua l&uacute;c em v&agrave; rất nhiều fan xếp h&agrave;ng v&agrave;o cửa từ, em thấy anh b&ecirc;n BTC th&ocirc;ng b&aacute;o rằng 2 giờ fan sẽ được v&agrave;o th&ocirc;ng qua lối cửa từ n&agrave;y. Nhưng sau đ&oacute;, do chương tr&igrave;nh delay n&ecirc;n họ bắt đầu chặn lại v&agrave; kh&ocirc;ng cho ch&uacute;ng em v&agrave;o.</p>\r\n\r\n<p>V&igrave; phải đợi qu&aacute; l&acirc;u, mọi người xung quanh v&agrave; cả em đều kh&ocirc;ng chịu được nữa. Đ&aacute;m đ&ocirc;ng đ&atilde; &ugrave;a v&agrave;o đến cổng ở s&acirc;n. L&uacute;c n&agrave;y đ&acirc;y, fan đều muốn hỏi r&otilde; th&ocirc;ng tin để nắm được giờ giấc nhưng bảo vệ mỗi người n&oacute;i một kiểu. Một người th&ocirc;ng b&aacute;o với ch&uacute;ng em cổng n&agrave;y l&agrave; cổng thảm đỏ, nhưng sau đ&oacute; người kh&aacute;c lại bảo cổng 1 l&agrave; cổng thảm đỏ. Mọi người bị đội bảo vệ v&agrave; BTC xoay đến mức chạy đi chạy lại qua c&aacute;c cổng đến 2-3 lần. L&uacute;c n&agrave;y, fan nghĩ rằng BTC đang trả lời cho c&oacute; lệ nhưng thực chất kh&ocirc;ng nắm được ch&iacute;nh x&aacute;c th&ocirc;ng tin d&ugrave; chỉ c&ograve;n v&agrave;i tiếng nữa chương tr&igrave;nh sẽ diễn ra&quot;.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Majimeco/public/upload/images/00-1574759733566766568655-15748354177721174743756.jpg\" style=\"height:600px; width:800px\" /></p>', 'images2537656_ky_su_bao_ho_lao_dong_1492565771.jpg', 1, 0, 2, '2019-11-26 23:39:29', '2019-11-30 00:58:42'),
(3, 'Dành 6 tiếng thanh xuân đón xem AAA tại Việt Nam, ừa chính thức khép lại tại Sân vận động Quốc gia Mỹ Đình, kết thúc', 'danh-6-tieng-thanh-xuan-don-xem-aaa-tai-viet-nam-ua-chinh-thuc-khep-lai-tai-san-van-dong-quoc-gia-my-dinh-ket-thuc', 'Bất chấp là một sự kiện mang tầm vóc khu vực', '<p><a href=\"http://kenh14.vn/asia-artist-awards-tai-viet-nam.html\" target=\"_blank\">Lễ trao giải AAA 2019</a>&nbsp;vừa ch&iacute;nh thức kh&eacute;p lại tại S&acirc;n vận động Quốc gia Mỹ Đ&igrave;nh, kết th&uacute;c chuỗi ng&agrave;y &quot;ăn ngủ c&ugrave;ng AAA&quot; của người h&acirc;m mộ Kpop suốt r&ograve;ng r&atilde; mấy th&aacute;ng qua. Vui kh&ocirc;ng? Ừ th&igrave; cũng vui v&igrave; đ&atilde; l&acirc;u lắm rồi, người h&acirc;m mộ Kpop mới chứng kiến c&ugrave;ng l&uacute;c d&agrave;n sao h&ugrave;ng hậu từ xứ H&agrave;n đến vậy. Cũng l&acirc;u lắm rồi, idol Kpop mới ngập tr&agrave;n đường phố H&agrave; Nội đến mức &quot;đi đ&acirc;u cũng đụng mặt idol&quot;. Nhưng rồi, s&acirc;n khấu tắt đ&egrave;n, c&aacute;c ng&ocirc;i sao trở về qu&ecirc; nh&agrave;, niềm vui dần qua đi chỉ c&ograve;n kh&aacute;n giả Việt Nam ngồi &ocirc;m cục tức to đ&ugrave;ng trước một lễ trao giải nghiệp dư đến mức đ&aacute;ng kinh ngạc!</p>\r\n\r\n<p>Đầu ti&ecirc;n v&agrave; trước nhất, phải kể đến...</p>\r\n\r\n<h3><strong>Người đ&agrave;n &ocirc;ng H&agrave;n Quốc nhưng tr&ocirc;ng rất... Việt Nam</strong></h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Majimeco/public/upload/images/40129692_2131385003854963_8901430419447087104_o.jpg\" style=\"height:600px; width:800px\" /></p>\r\n\r\n<p>Chỉ mới c&aacute;ch đ&acirc;y v&agrave;i tuần, B&iacute;ch Phương bị một kh&aacute;n giả manh động giật micro ngay khi đang biểu diễn, S.T Sơn Thạch bị một g&atilde; đ&agrave;n &ocirc;ng động chạm bộ phận nhạy cảm, những tưởng sẽ r&uacute;t kinh nghiệm sau loạt sự cố đ&aacute;ng xấu hổ từ kh&aacute;n giả nhưng kh&ocirc;ng, ban tổ chức AAA vẫn để cho khoảnh khắc v&ocirc; duy&ecirc;n nhất lịch sử lễ trao giải diễn ra (hoặc c&oacute; thể họ trở tay kh&ocirc;ng kịp v&igrave; h&agrave;nh động bộc ph&aacute;t c&aacute; nh&acirc;n): một người đ&agrave;n &ocirc;ng đeo thẻ ban tổ chức ngang nhi&ecirc;n &quot;x&ocirc;ng pha&quot; l&ecirc;n s&acirc;n khấu, đứng cạnh, nở 1 nụ cười rất tươi c&ograve;n tay th&igrave; cầm điện thoại giơ l&ecirc;n đ&ograve;i selfie với Quốc Trường khi nam diễn vi&ecirc;n đang nhận giải &quot;Nghệ sĩ Việt Nam xuất sắc nhất&quot;. Người đ&agrave;n &ocirc;ng c&oacute; h&agrave;ng l&ocirc;ng m&agrave;y th&uacute; vị cười tươi bao nhi&ecirc;u khi đứng cạnh v&agrave; selfie c&ugrave;ng Quốc Trường, th&igrave; kh&aacute;n giả ph&iacute;a dưới v&agrave; đ&ocirc;ng đảo người theo d&otilde;i tr&ecirc;n truyền h&igrave;nh lại c&agrave;ng xấu hổ bấy nhi&ecirc;u v&igrave; sự thiếu chuy&ecirc;n nghiệp từ ch&iacute;nh BTC.</p>\r\n\r\n<p>Nhưng đ&oacute; chưa phải l&agrave; tất cả. Chuyện hay c&ograve;n ở ph&iacute;a sau.</p>\r\n\r\n<p>Ngay sau khi khoảnh khắc ấy diễn ra, li&ecirc;n hệ để t&igrave;m kiếm sự thật về danh t&iacute;nh người đ&agrave;n &ocirc;ng ấy để hỏi xem anh ta &quot;quyền lực&quot; tới đ&acirc;u m&agrave; c&oacute; thể lao l&ecirc;n s&acirc;n khấu dễ d&agrave;ng đến vậy th&igrave; ch&uacute;ng ta lại nhận được c&acirc;u trả lời &quot;bẻ l&aacute;i&quot; kh&ocirc;ng ai ngờ: Anh ta l&agrave; người H&agrave;n, thuộc ekip H&agrave;n Quốc, v&igrave; y&ecirc;u th&iacute;ch Quốc Trường v&agrave; Bảo Thanh trong phim &quot;Về Nh&agrave; Đi Con&quot; n&ecirc;n mới sinh ra h&agrave;nh động như vậy.</p>\r\n\r\n<p>Ối giời ơi mừng qu&aacute; c&aacute;c bạn ơi, sức h&uacute;t của &quot;Về Nh&agrave; Đi Con&quot; lan rộng đến người H&agrave;n họ cũng biết m&agrave; y&ecirc;u mến đến &quot;đi&ecirc;n cuồng&quot; lu&ocirc;n k&igrave;a... Nghe BTC trả lời xong m&agrave; cộng đồng mạng thấy &quot;hơi bị tứk &aacute;&quot;, thấy cảm nhận về nh&acirc;n tướng học của m&igrave;nh bị BTC l&agrave;m cho hoang mang lu&ocirc;n &aacute; khi m&agrave; nh&igrave;n anh ta tr&ocirc;ng chẳng giống người H&agrave;n Quốc ch&uacute;t n&agrave;o cả!!</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Majimeco/public/upload/images/donedsc7003-15748352553291850245514.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n\r\n<p>Vậy nếu đ&acirc;y đ&uacute;ng l&agrave; ch&agrave;ng trai g&acirc;y ra h&agrave;nh động xấu hổ kia th&igrave; nghĩa l&agrave; BTC đ&atilde; n&oacute;i dối, trong l&uacute;c bối rối qu&aacute; n&ecirc;n &quot;đổ vỏ&quot; ngay sang cho ekip H&agrave;n Quốc đấy &agrave;? &Yacute; của BTC đại loại nh&acirc;n vật n&agrave;y thuộc ekip của BTC, nhưng d&agrave;n staff thuộc BTC qu&aacute; đ&ocirc;ng kh&ocirc;ng thể kiểm so&aacute;t hết, lại l&agrave; người H&agrave;n n&ecirc;n c&agrave;ng kh&oacute;... quy tr&aacute;ch nhiệm chăng? Sao cũng được thế nhưng nếu nh&acirc;n vật n&agrave;y thực sự l&agrave; người Việt, m&agrave; BTC lại bảo l&agrave; người H&agrave;n th&igrave; &quot;bản c&aacute;o trạng&quot; d&agrave;nh cho BTC Việt Nam ngo&agrave;i việc qu&aacute; thiếu chuy&ecirc;n nghiệp dẫn đến xảy ra sự cố th&igrave; sẽ c&oacute; th&ecirc;m tội n&oacute;i dối, đổ lỗi trốn tr&aacute;ch nhiệm. Sau B&iacute;ch Phương, S.T Sơn Thạch v&agrave; giờ l&agrave; Quốc Trường, chuyện bảo vệ an to&agrave;n cho nghệ sĩ tr&ecirc;n s&acirc;n khấu đang rất b&aacute;o động, đ&acirc;y c&ograve;n diễn ra ngay tại sự kiện c&oacute; mặt d&agrave;n idol nghệ sĩ nước ngo&agrave;i th&igrave; đ&uacute;ng l&agrave; đ&aacute;ng xấu hổ.</p>\r\n\r\n<p>V&agrave; theo th&ocirc;ng tin mới nhất, BTC đ&atilde; đưa ra lời giải th&iacute;ch ch&iacute;nh thức cho sự cố n&agrave;y:&nbsp;<em>&quot;Ch&uacute;ng t&ocirc;i hiện chưa r&otilde; người đ&agrave;n &ocirc;ng n&agrave;y ch&iacute;nh x&aacute;c thuộc ekip n&agrave;o nhưng ch&uacute;ng t&ocirc;i khẳng định người n&agrave;y kh&ocirc;ng thuộc nh&acirc;n vi&ecirc;n của BTC chương tr&igrave;nh. Khu vực s&acirc;n khấu nơi nghệ sĩ nhận giải ho&agrave;n to&agrave;n do ph&iacute;a sản xuất v&agrave; an ninh ekip H&agrave;n Quốc kiểm so&aacute;t. Đến người của BTC khi ra v&agrave;o khu vực n&agrave;y cũng kh&ocirc;ng hề dễ d&agrave;ng. Ekip H&agrave;n Quốc kh&ocirc;ng ho&agrave;n to&agrave;n 100% l&agrave; người H&agrave;n Quốc m&agrave; c&ograve;n c&oacute; cả người Việt Nam do họ thu&ecirc; tới từ phi&ecirc;n dịch cho đến nh&acirc;n vi&ecirc;n&quot;.</em></p>\r\n\r\n<p>Vậy l&agrave; c&oacute; thể thấy, ch&iacute;nh BTC 2 b&ecirc;n cũng c&oacute; sự phối hợp kh&ocirc;ng nhịp nh&agrave;ng, kh&aacute; m&acirc;u thuẫn trong nhiều kh&acirc;u dẫn tới kh&ocirc;ng thể kiểm so&aacute;t được to&agrave;n bộ mọi th&ocirc;ng tin về chương tr&igrave;nh. Đ&acirc;y thật sự l&agrave; điều cho thấy r&otilde; vấn đề dẫn đến to&agrave;n bộ sự thiếu chuy&ecirc;n nghiệp của AAA 2019.</p>\r\n\r\n<p>Cơ m&agrave; đ&acirc;y cũng chỉ l&agrave; 1 hạt sạn nhỏ giữa biển sạn m&ecirc;nh m&ocirc;ng nuốt kh&ocirc;ng tr&ocirc;i nổi m&agrave; BTC AAA 2019 đem đến cho ch&uacute;ng ta. Lễ trao giải k&eacute;o d&agrave;i suốt 6 tiếng đồng hồ c&ograve;n nhiều điều bức x&uacute;c kể m&atilde;i kh&ocirc;ng hết...</p>\r\n\r\n<h3>Kh&aacute;n giả đi xem lễ trao giải được &quot;hưởng&quot; ngay một chuyến h&agrave;nh x&aacute;c?</h3>\r\n\r\n<p>Đ&oacute; l&agrave; t&igrave;nh trạng chung của kh&aacute;n giả c&oacute; mặt tại s&acirc;n vận động Mỹ Đ&igrave;nh ng&agrave;y diễn ra sự kiện 26/11. Nghe n&oacute;i v&agrave;o giờ ch&oacute;t, v&eacute; b&aacute;n tống b&aacute;n th&aacute;o chỉ c&ograve;n 50 ngh&igrave;n một chiếc, thậm ch&iacute; c&ograve;n cao hơn cả ph&iacute; giữ xe, thế nhưng vẫn kh&ocirc;ng c&aacute;ch n&agrave;o lấp k&iacute;n nổi c&aacute;c kh&aacute;n đ&agrave;i như mơ ước. Nhưng đ&oacute; l&agrave; chuyện ngo&agrave;i lề, c&acirc;u chuyện ch&iacute;nh yếu ở đ&acirc;y l&agrave;: người h&acirc;m mộ trước khi được đi v&agrave;o &quot;thi&ecirc;n đường visual&quot; với d&agrave;n sao th&igrave; phải trải qua đủ 9981 kiếp nạn, 7749 nguy nan, vật v&atilde; chờ đợi suốt hơn 8 tiếng đồng hồ trong khung cảnh hỗn loạn, BTC gần như kh&ocirc;ng c&oacute; khả năng điều phối đ&aacute;m đ&ocirc;ng khiến sự hỗn loạn ngự trị. Nghe kể lại m&agrave; tưởng họ l&agrave; diễn vi&ecirc;n quần ch&uacute;ng đ&oacute;ng trong một bộ phim zombie n&agrave;o đ&oacute;.</p>', 'Where-do-Civil-Engineers-Work-1024x642.jpg', 1, 0, 1, '2019-11-27 00:29:25', '2020-01-07 06:26:44'),
(4, 'Trực tiếp xét xử mẹ nữ sinh giao gà cùng đồng phạm: Bà Hiền bật khóc, liên tục ngoái nhìn con gái lớn và chồng', 'truc-tiep-xet-xu-me-nu-sinh-giao-ga-cung-dong-pham-ba-hien-bat-khoc-lien-tuc-ngoai-nhin-con-gai-lon-va-chong', 'Bất chấp là một sự kiện mang tầm vóc khu vực', '<p><a href=\"https://jvnet.vn/tin-tuc-su-kien/di-nhat-nen-chon-don-hang-nao-tot-luong-cao\">Đơn h&agrave;ng xuất khẩu lao động Nhật Bản</a>&nbsp;chế tạo kim loại l&agrave; một trong những c&ocirc;ng việc thuộc nh&oacute;m ng&agrave;nh cơ kh&iacute;. Với c&ocirc;ng việc c&oacute; t&iacute;nh chất đặc th&ugrave; ri&ecirc;ng, x&iacute; nghiệp tiếp nhận tại Nhật Bản tuyển dụng lao động l&agrave; nam giới. Nắm bắt nhu cầu c&aacute;c bạn c&oacute; mong muốn xuất cảnh sớm trong năm 2020, c&ocirc;ng ty tiếp nhận c&ugrave;ng nghiệp đo&agrave;n v&agrave; phối hợp với đơn vị ph&aacute;i cử dự kiến tổ chức phỏng vấn ng&agrave;y 15.12.2019 tại khu vực H&agrave; Nội. C&ocirc;ng ty JVNET sẽ gi&uacute;p c&aacute;c bạn thực hiện ước mơ đi XKLĐ sang Nhật một c&aacute;ch nhanh ch&oacute;ng m&agrave; đ&uacute;ng quy định của luật ph&aacute;p. C&ograve;n chờ g&igrave; nữa, h&atilde;y nhanh tay nhấc m&aacute;y li&ecirc;n hệ để nghe tư vấn&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Majimeco/public/upload/images/00-1574759733566766568655-15748354177721174743756.jpg\" style=\"height:750px; width:1000px\" /></p>', 'cokhidongluc.jpg', 0, 0, 2, '2019-11-30 01:01:30', '2019-11-30 01:01:30'),
(6, 'Đạo diễn lên tiếng vụ Jack bị ê-kíp hành hung ở Pháp', 'dao-dien-len-tieng-vu-jack-bi-e-kip-hanh-hung-o-phap', 'Nhiều tài khoản mạng tung tin Jack bị hành hung trong chuyến đi Pháp hồi đầu tháng 12. Một thành viên trong ê-kíp lên tiếng trên trang cá nhân.', '<p>Sau khi m&acirc;u thuẫn giữa Jack v&agrave; c&ocirc;ng ty quản l&yacute; ICM nổ ra, mạng x&atilde; hội xuất hiện rất nhiều tin đồn li&ecirc;n quan đến vấn đề n&agrave;y. Cụ thể, một số nguồn tin cho rằng Jack từng bị &ecirc;-k&iacute;p &aacute;p bức, h&agrave;nh hung trong chuyến đi Ph&aacute;p v&agrave;o đầu th&aacute;ng 12.</p>\r\n\r\n<p>Fan của Jack đưa ra h&igrave;nh ảnh nam ca sĩ bịt mắt k&iacute;n m&iacute;t khi trở về Việt Nam. Theo họ, đ&acirc;y l&agrave; dấu hiệu bất thường v&agrave; c&oacute; thể Jack muốn che giấu điều g&igrave; đ&oacute;.</p>\r\n\r\n<p>Tối 6/1, đạo diễn từng quay MV&nbsp;<em>Hoa v&ocirc; sắc, Em g&igrave; ơi, Việt Nam t&ocirc;i&nbsp;</em>cho bộ đ&ocirc;i Jack v&agrave; K-ICM l&ecirc;n tiếng tr&ecirc;n trang c&aacute; nh&acirc;n. Anh n&agrave;y cũng l&agrave; th&agrave;nh vi&ecirc;n &ecirc;-k&iacute;p trong chuyến đi Ph&aacute;p hồi đầu th&aacute;ng 12.</p>\r\n\r\n<p>Đạo diễn Nguyễn Chung cho biết chuyện Jack bị h&agrave;nh hung ở Ph&aacute;p kh&ocirc;ng c&oacute; thật: &quot;Về chuyện mọi người đang tự bịa một loạt chuyện về việc thằng em Jack bị t&ocirc;i h&agrave;nh hung sau khi đi Ph&aacute;p về, th&igrave; t&ocirc;i d&aacute;m khẳng định 100% l&agrave; kh&ocirc;ng c&oacute;. Chuyện ở Th&aacute;i bị nhốt cũng kh&ocirc;ng c&oacute; v&agrave; chuyện bị bỏ đ&oacute;i c&agrave;ng kh&ocirc;ng&quot;.</p>\r\n\r\n<p>&quot;Jack, anh biết l&uacute;c n&agrave;y c&oacute; thể mỗi người đều c&oacute; c&aacute;i l&yacute; ri&ecirc;ng của m&igrave;nh. Anh xin ph&eacute;p được n&oacute;i điều m&agrave; anh thấy một l&agrave; để bảo vệ em... V&igrave; anh tin em kh&ocirc;ng bao giờ l&agrave;m những chuyện thất đức như vậy. Anh tin cộng đồng mạng đang tự đưa mọi chuyện đi th&ecirc;m xa v&agrave; tự bịa h&agrave;ng loạt những tin đồn thất thiệt. Nay anh phải l&ecirc;n tiếng v&igrave; c&acirc;u chuyện n&agrave;y trực tiếp ảnh hưởng tới anh. Mong Jack th&ocirc;ng cảm cho anh nha Jack&quot;, đạo diễn trẻ viết tr&ecirc;n trang c&aacute; nh&acirc;n.</p>\r\n\r\n<p>Ngo&agrave;i ra, anh n&agrave;y c&ograve;n tung tin nhắn tr&ograve; chuyện c&ugrave;ng Jack. Theo đ&oacute;, anh chất vấn Jack, cho rằng nam ca sĩ l&agrave; người đ&atilde; tung tin bị h&agrave;nh hung ra ngo&agrave;i. Về ph&iacute;a Jack, giọng ca&nbsp;<em>S&oacute;ng gi&oacute;</em>&nbsp;đưa ra c&acirc;u trả lời ẩn &yacute;.</p>\r\n\r\n<p>Cụ thể, đạo diễn MV&nbsp;<em>Hoa v&ocirc; sắc</em>&nbsp;chụp m&agrave;n h&igrave;nh một b&agrave;i viết cho rằng anh h&agrave;nh hung Jack tại Paris v&agrave; gửi cho Jack. Anh gửi tin nhắn: &quot;Anh kh&ocirc;ng nghĩ một con người hiền l&agrave;nh như em lại c&oacute; thể l&agrave;m một thứ đ&aacute;ng sợ như n&agrave;y&quot;.</p>\r\n\r\n<p>Ở ph&iacute;a dưới, Jack trả lời: &quot;Em kh&ocirc;ng chi&ecirc;u tr&ograve; được đ&acirc;u anh ơi. Cảm ơn anh g&oacute;p &yacute; nhưng khi n&agrave;o ổn định anh sẽ hiểu. C&ograve;n những điều ảnh hưởng tới anh hay những người kh&aacute;c th&igrave; chưa chắc l&agrave; do em. Tỉnh t&aacute;o suy nghĩ anh ạ, chứ con người em đ&agrave;ng ho&agrave;ng, c&oacute; giận c&oacute; tr&aacute;ch ai th&igrave; tr&aacute;ch, chứ em kh&ocirc;ng l&agrave;m tiểu nh&acirc;n được&quot;.</p>\r\n\r\n<p>Tiếp đến, đạo diễn nhắn nhủ Jack: &quot;Anh nghĩ m&agrave;y l&agrave; người c&oacute; t&agrave;i, độc lập hay đi chung th&igrave; đều c&oacute; thể ngẩng cao đầu. Th&agrave;nh c&ocirc;ng l&agrave; nhờ v&agrave;o sự cố gắng, kh&ocirc;ng phải đ&aacute;nh đổi hay thủ đoạn. Anh tin m&agrave;y, cố l&ecirc;n&quot;.</p>\r\n\r\n<p>Nam ca sĩ sinh năm 1997 đ&aacute;p lại: &quot;Em &iacute;t n&oacute;i thật nhưng bản chất em kh&ocirc;ng &acirc;m mưu hại ai được g&igrave; đ&acirc;u. Cống hiến hay hoạt động nghệ thuật c&oacute; nhiều c&aacute;ch, nhiều kh&iacute;a cạnh. Em kh&ocirc;ng thoải m&aacute;i, em kh&ocirc;ng bước trụ m&atilde;i ho&agrave;i được. Anh cũng n&ecirc;n b&igrave;nh tĩnh, chọn con đường v&agrave; hoạt động hợp l&yacute;, l&agrave;m sao m&agrave; anh cảm thấy vui vẻ l&agrave;m việc. Đừng k&igrave;m h&atilde;m sức s&aacute;ng tạo của m&igrave;nh nữa&quot;.</p>\r\n\r\n<p>&quot;Em lu&ocirc;n ch&uacute;c anh mọi điều may mắn, sức khỏe, chưa hề giận hay tr&aacute;ch hờn g&igrave; anh, cả Boo, cả Tony make-up, tất cả đều v&igrave; c&ocirc;ng việc... Em m&atilde;i l&agrave; em, họ c&oacute; d&igrave;m chết em đi nữa, em cũng kh&ocirc;ng bao giờ giận c&aacute;c anh bất cứ điều g&igrave;&quot;.</p>', 'Jack3.jpg', 1, 0, 1, '2019-12-05 06:33:47', '2020-01-07 05:00:39'),
(7, 'Australia điều trực thăng giết 10.000 lạc đà vì uống nước quá nhiều', 'australia-dieu-truc-thang-giet-10000-lac-da-vi-uong-nuoc-qua-nhieu', 'Các quan chức sẽ giết hàng nghìn con lạc đà ở Australia vì chúng uống quá nhiều nước khi các vụ cháy rừng đang hoành hành.', '<p>C&aacute;c l&atilde;nh đạo ở Anangu Pitjantjatjara Yankunytjatjara (APY) Lands ở t&acirc;y bắc&nbsp;<a href=\"https://news.zing.vn/tieu-diem/australia-uc.html\">Australia</a>&nbsp;sẽ gửi trực thăng để giết tới 10.000 con lạc đ&agrave; trong chiến dịch k&eacute;o d&agrave;i 5 ng&agrave;y bắt đầu ng&agrave;y 8/1,&nbsp;<em>The Australian</em>&nbsp;đưa tin.</p>\r\n\r\n<p>Lệnh thủ ti&ecirc;u được đưa ra khi hạn h&aacute;n khiến những con lạc đ&agrave; tuyệt vọng hơn v&igrave; nước, g&acirc;y ra sự hỗn loạn trong cộng đồng địa phương.</p>\r\n\r\n<p>&quot;Ch&uacute;ng t&ocirc;i bị mắc kẹt trong điều kiện n&oacute;ng bức v&agrave; kh&oacute; chịu, cảm thấy kh&ocirc;ng ổn, bởi những con lạc đ&agrave; đang đến v&agrave; ph&aacute; đổ h&agrave;ng r&agrave;o, đi lại trong nh&agrave; v&agrave; cố gắng t&igrave;m nước th&ocirc;ng qua điều h&ograve;a kh&ocirc;ng kh&iacute;&quot;, Marita Baker, th&agrave;nh vi&ecirc;n ban điều h&agrave;nh APY, cho biết.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Majimeco/public/upload/images/lac_da.jpg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Lạc đ&agrave; g&acirc;y rắc rối cho người d&acirc;n địa phương khi t&igrave;m kiếm nước ở v&ugrave;ng hạn h&aacute;n. Ảnh:&nbsp;<em>Shutterstock</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Bộ M&ocirc;i trường v&agrave; Nước sẽ gửi trực thăng đến. X&aacute;c lạc đ&agrave; sẽ được thi&ecirc;u hoặc ch&ocirc;n nếu c&oacute; thể tiếp cận được hoặc bị bỏ lại ở những v&ugrave;ng xa x&ocirc;i.</p>\r\n\r\n<p>Những con lạc đ&agrave; cũng đang bị loại bỏ do lo ngại về kh&iacute; thải nh&agrave; k&iacute;nh, v&igrave; lạc đ&agrave; thải ra một tấn carbon dioxide mỗi năm.</p>\r\n\r\n<p>Số lượng lạc đ&agrave; cũng tăng gấp đ&ocirc;i cứ sau ch&iacute;n năm nếu kh&ocirc;ng được kiểm so&aacute;t. Ban Quản l&yacute; Lạc đ&agrave; Hoang d&atilde; Quốc gia ước t&iacute;nh khoảng một triệu con lạc đ&agrave; sống ở ba tiểu bang v&agrave; l&atilde;nh thổ ph&iacute;a Bắc trong năm 2010.</p>\r\n\r\n<p>Theo Tim Moore, gi&aacute;m đốc điều h&agrave;nh của nh&oacute;m chuy&ecirc;n gia RegenCo, một triệu con lạc đ&agrave; tương đương với việc c&oacute; th&ecirc;m 400.000 xe hơi tr&ecirc;n đường.</p>\r\n\r\n<p>Việc giết lạc đ&agrave; theo kế hoạch diễn ra v&agrave;o thời điểm đất nước bị t&agrave;n ph&aacute; bởi hỏa hoạn kể từ th&aacute;ng 11/2019. Thảm họa đ&atilde; giết chết h&agrave;ng chục người, g&acirc;y ra sự dịch chuyển hoặc c&aacute;i chết của 480 triệu động vật, theo c&aacute;c nh&agrave; nghi&ecirc;n cứu của Đại học Sydney.</p>', 'lac_da.jpg', 1, 0, 2, '2019-12-05 06:35:29', '2020-01-07 06:26:09'),
(8, 'Trực tiếp xét xử mẹ nữ sinh giao gà cùng đồng phạm: Bà Hiền bật khóc, liên tục ngoái nhìn con gái lớn và chồng', 'truc-tiep-xet-xu-me-nu-sinh-giao-ga-cung-dong-pham-ba-hien-bat-khoc-lien-tuc-ngoai-nhin-con-gai-lon-va-chong', 'Sáng 27/11, TAND tỉnh Điện Biên mở phiên xét xử đối với bị cáo Trần Thị Hiền (mẹ nữ sinh giao gà bị sát hại ở Điện Biên) cùng 4 đồng phạm trong vụ án mua bán trái phép chất ma túy.', '<p>Vụ giẫm đạp xảy ra tại đ&aacute;m tang tướng Qassem Soleimani được tổ chức tại qu&ecirc; nh&agrave; của vị cố tư lệnh ở Kerman, g&acirc;y ra nhiều thương vong.</p>\r\n\r\n<p>Đ&agrave;i truyền h&igrave;nh nh&agrave; nước&nbsp;<a href=\"https://news.zing.vn/tieu-diem/iran.html\">Iran</a>&nbsp;ng&agrave;y 7/1 x&aacute;c nhận vụ giẫm đạp v&agrave; cảnh hỗn loạn xảy ra tại Kerman, ph&iacute;a đ&ocirc;ng nam nước n&agrave;y, qu&ecirc; nh&agrave; của tướng Qassem Soleimani.</p>\r\n\r\n<p>H&atilde;ng tin&nbsp;<em>AP&nbsp;</em>ban đầu đưa tin &iacute;t nhất 35 người thiệt mạng v&agrave; 48 người bị thương trong vụ giẫm đạp tại tang lễ. Sau đ&oacute;, đ&agrave;i truyền h&igrave;nh nh&agrave; nước Iran hạ thấp số người thiệt mạng, cho biết c&oacute; 32 người chết v&agrave; 190 người bị thương trong vụ giẫm đạp.</p>\r\n\r\n<p>H&atilde;ng th&ocirc;ng tấn b&aacute;n ch&iacute;nh thức của Iran&nbsp;<em>ISNA&nbsp;</em>đưa tin lễ ch&ocirc;n cất tư lệnh Soleimani sẽ bị ho&atilde;n lại, kh&ocirc;ng diễn ra v&agrave;o ng&agrave;y 7/1 như dự kiến, v&igrave; vụ giẫm đạp chết người.</p>\r\n\r\n<p>Bản tin kh&ocirc;ng n&ecirc;u r&otilde; việc ch&ocirc;n cất sẽ ho&atilde;n lại trong bao l&acirc;u.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:81/Majimeco/public/upload/images/merlin_166777353_12391b28_a36e_4d8f_af89_55ce37794e66_superJumbo.jpg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<p>L&atilde;nh đạo cơ quan y tế khẩn cấp Iran, Pirhossein Koulivand, th&ocirc;ng b&aacute;o c&oacute; nhiều thương vong. Trước đ&oacute;, truyền th&ocirc;ng Iran cho biết đ&aacute;m tang tướng Soleimani tại quảng trường trung t&acirc;m Kerman c&oacute; sự tham gia của h&agrave;ng ngh&igrave;n người.</p>\r\n\r\n<p>&quot;Thật kh&ocirc;ng may l&agrave; do vụ giẫm đạp, một số đồng b&agrave;o của ch&uacute;ng ta đ&atilde; bị thương v&agrave; một số người đ&atilde; thiệt mạng trong đ&aacute;m tang&quot;, &ocirc;ng Koulivand n&oacute;i.</p>\r\n\r\n<p>L&atilde;nh đạo lực lượng Quds, nh&aacute;nh chịu tr&aacute;ch nhiệm cho hoạt động qu&acirc;n sự v&agrave; t&igrave;nh b&aacute;o ở nước ngo&agrave;i của Vệ binh C&aacute;ch mạng Hồi gi&aacute;o (IRGC) bị s&aacute;t hại trong vụ kh&ocirc;ng k&iacute;ch do&nbsp;<a href=\"https://news.zing.vn/tieu-diem/hop-chung-quoc-hoa-ky.html\">Mỹ</a>&nbsp;thực hiện ng&agrave;y 3/1. Đo&agrave;n xe chở &ocirc;ng rời khỏi s&acirc;n bay quốc tế Baghdad bị m&aacute;y bay kh&ocirc;ng người l&aacute;i Mỹ triệt hạ.</p>\r\n\r\n<p>Tang lễ tướng Soleimani ở Tehran ng&agrave;y 6/1 c&oacute; gần 1 triệu người xuống đường đưa tiễn. Buổi lễ diễn ra ở Đại học Tehran với sự tham gia của nhiều l&atilde;nh đạo cấp cao nhất Iran, trong đ&oacute; c&oacute; L&atilde;nh đạo Tối cao Ayatollah Ali Khamenei.</p>', 'merlin_166777353_12391b28_a36e_4d8f_af89_55ce37794e66_superJumbo.jpg', 1, 0, 1, '2019-12-05 06:35:44', '2020-01-07 06:25:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_slides`
--

DROP TABLE IF EXISTS `vp_slides`;
CREATE TABLE IF NOT EXISTS `vp_slides` (
  `slide_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_slides`
--

INSERT INTO `vp_slides` (`slide_id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Xuất Khẩu Hàn Quốc 99999', 'dsc_9839.jpg', 'xuat-khau-han-quoc-99999', '2019-11-28 20:15:03', '2020-01-07 04:55:49'),
(4, 'nguyen quynh 232523', 'maxresdefault (1).jpg', 'nguyen-quynh-232523', '2019-11-28 20:19:03', '2020-01-07 04:55:57'),
(5, 'Ngày tiễn các bạn kỹ sư lên đường ....', 'maxresdefault.jpg', 'ngay-tien-cac-ban-ky-su-len-duong', '2019-11-28 20:58:19', '2020-01-07 04:56:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_users`
--

DROP TABLE IF EXISTS `vp_users`;
CREATE TABLE IF NOT EXISTS `vp_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_users`
--

INSERT INTO `vp_users` (`id`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tantrung@gmail.com', '$2y$10$BOaVmaAomgbfHJclvRGc5eFir5jjkO.7ylPZpN0LB2JjLwGXZLJmG', 1, 'qRQ0UAxToVgvGm47VSTfhAzNUaTzNAIpAO13ogzm7oSG0QkeB79r7dlYK3uZ', NULL, NULL),
(2, 'admin@gmail.com', '$2y$10$fzuNTFUs0HEfOiuAXrD/0.N7a5LoRPktsMgWgs2PHSZoYc8Jmhvb2', 1, 'lnsZrO5sdZJkB3QKNyzR8RHybf7kC7uZRjQCSzwtGmyVIlLMb6y6kdbDrB1R', NULL, NULL),
(6, 'trung@gmail.com', '$2y$10$aDwOZ0Cp4j3DIy737Nt4xOA4e2/lA2W/uz1qaKD6aI8RkVS/1Gir.', 1, NULL, '2019-11-27 08:25:27', '2019-11-28 06:18:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
