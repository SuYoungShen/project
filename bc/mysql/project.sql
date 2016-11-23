-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-11-23 17:16:15
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `about` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `about`
--

INSERT INTO `about` (`about`, `datetime`) VALUES
('高雄市位於臺灣西南部東經120.15度、北緯22.31度，面積為153.6029平方公里，是臺灣第二大都市，也是台灣人口密度最高與重工業最發達的都市；而位於臺灣西南部東經120.24度、北緯22.3度，面積2792.6744平方公里的高雄縣，北鄰南投縣、東鄰嘉義縣和台南市、南鄰屏東縣、東鄰花蓮縣和台東縣，為臺灣第四大都市，在2010年12月25日五都改制後與高雄市合併，並與台北市、新北市(原台北縣)、台中市、台南市並列臺灣五大直轄市。合併後的高雄市行政區域劃分除原有的楠梓區、左營區、鼓山區、三民區、苓雅區、新興區、前金區、鹽埕區、小港區、旗津區、前鎮區之外，另新增鳳山區、岡山區、旗山區、美濃區、大寮區、茄萣區、永安區、大園區、大社區、杉林區、仁武區、田寮區、燕巢區、路竹區、阿蓮區、甲仙區、大樹區、湖內區、桃源區、鳥松區、彌陀區、那瑪夏區(原三民鄉)、梓官區、內門區、茂林區、橋頭區、六龜區、林園區等共39個行政區，為五都中最多行政區的直轄市。', '2016-10-18 02:01:04'),
('ssssss', '2016-10-18 19:47:45'),
('高雄市位於臺灣西南部東經120.15度、北緯22.31度，面積為153.6029平方公里', '2016-11-21 15:10:56');

-- --------------------------------------------------------

--
-- 資料表結構 `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `placename` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `viewpoint` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `posted` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `replydatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `area`
--

INSERT INTO `area` (`id`, `placename`, `viewpoint`, `posted`, `message`, `reply`, `email`, `site`, `datetime`, `replydatetime`) VALUES
(1, '高雄', 'd', 'ddd', 'ss', '很好', 'ddd@c.comd', 'http://ssss.cdd', '2016-11-15 16:25:12', '2016-11-15 16:25:42'),
(2, '高雄', 'd', 'sssss', 'sss', '', 'sss@cd.sssss', 'sssss', '2016-11-15 19:06:33', '0000-00-00 00:00:00'),
(3, 'ccc', 's', 'sss', 's', '', 'sss@sss', 'ssssss', '2016-11-15 19:07:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `id` char(100) CHARACTER SET latin1 NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `carousel`
--

INSERT INTO `carousel` (`id`, `place`, `name`, `path`, `datetime`) VALUES
('0', '85大樓夜景', '1.jpg', 'about/carousel/images/', '2016-11-21 15:06:32'),
('1', '高雄圖書總館', '6.jpg', 'about/carousel/images/', '2016-11-21 15:11:55'),
('2', '蓮池潭', '2.jpg', 'about/carousel/images/', '2016-11-21 15:12:05'),
('3', '美麗島', '3.jpg', 'about/carousel/images/', '2016-11-21 15:12:10'),
('4', '愛河', '4.jpg', 'about/carousel/images/', '2016-11-21 15:12:17'),
('5', '真愛碼頭', '5.jpg', 'about/carousel/images/', '2016-11-21 15:12:27');

-- --------------------------------------------------------

--
-- 資料表結構 `favorite`
--

CREATE TABLE `favorite` (
  `Account` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PicName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PicPath` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WebSite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `favorite`
--

INSERT INTO `favorite` (`Account`, `place`, `PicName`, `PicPath`, `WebSite`, `Datetime`) VALUES
('aaaa', '85大樓夜景', '1.jpg', 'bc/index/top6/images/', '/project/index.php', '2016-11-21 08:54:06'),
('aaaa', '蓮池潭', '2.jpg', 'bc/index/top6/images/', '/project/index.php', '2016-11-21 08:54:54'),
('aaaa', '高雄美麗島', '3.jpg', 'bc/index/top6/images/', '/project/index.php', '2016-11-21 08:55:28'),
('aaaa', '燒等補資料', '6.jpg', 'bc/index/top6/images/', '/project/index.php', '2016-11-21 15:43:56'),
('aaaa', '燒等補資料', '5.jpg', 'bc/index/top6/images/', '/project/index.php', '2016-11-21 17:05:36'),
('aaaa', '燒等補資料', '2.jpg', 'bc/index/top6/images/', '/project/index.php', '2016-11-21 17:05:38'),
('aaaa', '燒等補資料', '6.jpg', 'bc/index/top6/images/', '/project/index.php', '2016-11-21 17:05:44');

-- --------------------------------------------------------

--
-- 資料表結構 `forum`
--

CREATE TABLE `forum` (
  `id` int(100) NOT NULL,
  `theme` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `posted` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `forum`
--

INSERT INTO `forum` (`id`, `theme`, `posted`, `email`, `message`, `reply`, `datetime`) VALUES
(2, 'sss', 'sss', 'sss@ddd', 'ddd', '', '2016-11-21 00:03:22');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `account` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('admin','member','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `datetime` datetime NOT NULL,
  `jointime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `email`, `name`, `level`, `datetime`, `jointime`) VALUES
(0, 'admin', 'admin', '', '', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(0, 'aaaa', 'aaaaa', 'aaaa@gmail.com', 'aa', 'member', '2016-10-18 08:41:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Introduction` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `place`
--

INSERT INTO `place` (`id`, `place`, `Introduction`, `name`, `path`, `datetime`) VALUES
(38, '苓雅區', '苓雅區為臺灣高雄市一市轄區，位於市內西南部，市中心中部，北臨三民區，西北連新興區、前金區，西隔愛河與鹽埕區、鼓山區為界，南接前鎮區，東鄰鳳山區，是高雄市政府四維行政中心的所在地。', '1.jpg', 'about/place/images/', '2016-11-21 17:05:03'),
(39, '鳥松區', 'ㄋ', '7.jpg', 'about/place/images/', '2016-11-22 16:28:09');

-- --------------------------------------------------------

--
-- 資料表結構 `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `viewpoint` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `attractions` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `arrival` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `places`
--

INSERT INTO `places` (`id`, `place`, `viewpoint`, `attractions`, `arrival`, `name`, `path`, `datetime`) VALUES
(39, '苓雅區', '85大樓', '高雄85大樓位於高雄市苓雅區東側為自強路，南側為新光路，北側為三多路，西邊只隔半條街與成功路相毗鄰，與高雄港、高雄市小港機場、高雄市火車站和新光碼頭距離相近，又稱東帝士85國際廣場或東帝士建臺大樓，於西元1997年完工、由建築師李祖原設計，是南台灣最高的摩天大樓、全台灣第2高樓，目前是世界第13高的摩天大樓。', '★ 搭乘大眾運輸：1、捷運：(1)、搭乘捷運紅線至R8三多商圈站，出2號出口往新光路方向步行約8分鐘即可抵達。', '1.jpg', 'view/place/images/', '2016-11-22 16:18:07'),
(40, '鳥松區', '澄清湖', '鳥松濕地公園位於澄清湖風景區門口東側，原本是自來水公司澄清湖淨水場的沉沙地，於1999年動工、2000年完工成為台灣第一座以人工濕地為主題的自然生態公園；鳥松濕地公園佔地約為3公頃，陸地和水路面積各占三分之一和三分之二，豐富的地形地貌孕育出許多種植物，包含約90種鳥類、250種以上的昆蟲和340種以上的植物，加上鄰近澄清湖因此是高雄是相當不錯的戶外教學和自然觀察的好場所，目前鳥松濕地公園社團法人高雄市野鳥學會所認養。', '', '7.jpg', 'view/place/images/', '2016-11-22 16:19:19');

-- --------------------------------------------------------

--
-- 資料表結構 `slider`
--

CREATE TABLE `slider` (
  `id` char(100) CHARACTER SET latin1 NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `slider`
--

INSERT INTO `slider` (`id`, `name`, `path`, `datetime`) VALUES
('0', '6.jpg', 'index/slider/images/', '2016-11-21 15:02:05'),
('1', '2.jpg', 'index/slider/images/', '2016-11-21 15:02:05'),
('2', '3.jpg', 'index/slider/images/', '2016-11-21 15:02:05'),
('3', '4.jpg', 'index/slider/images/', '2016-11-21 15:02:05'),
('4', '5.jpg', 'index/slider/images/', '2016-11-21 15:02:05'),
('5', '6.jpg', 'index/slider/images/', '2016-11-21 15:01:36');

-- --------------------------------------------------------

--
-- 資料表結構 `top`
--

CREATE TABLE `top` (
  `id` char(100) CHARACTER SET latin1 NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `top`
--

INSERT INTO `top` (`id`, `place`, `name`, `path`, `datetime`) VALUES
('0', '', '1.jpg', 'index/top6/images/', '2016-11-21 09:28:46'),
('1', '', '2.jpg', 'index/top6/images/', '2016-11-21 09:28:47'),
('2', '', '3.jpg', 'index/top6/images/', '2016-11-21 09:28:47'),
('3', '', '4.jpg', 'index/top6/images/', '2016-11-21 09:28:47'),
('4', '', '5.jpg', 'index/top6/images/', '2016-11-21 09:28:47'),
('5', '', '6.jpg', 'index/top6/images/', '2016-11-21 09:28:47');

-- --------------------------------------------------------

--
-- 資料表結構 `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `viewpoint` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `picname` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `view`
--

INSERT INTO `view` (`id`, `viewpoint`, `picname`, `path`, `datetime`) VALUES
(0, '', '1.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(1, '', '2.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(2, '', '3.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(3, '', '4.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(4, '', '5.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(5, '', '6.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(6, '', '7.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(7, '', '', '', '0000-00-00 00:00:00'),
(8, '', '', '', '0000-00-00 00:00:00');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- 使用資料表 AUTO_INCREMENT `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
