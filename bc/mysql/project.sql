-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-11-25 20:01:39
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
('ssssss', '2016-10-18 19:47:45');

-- --------------------------------------------------------

--
-- 資料表結構 `area`
--

CREATE TABLE `area` (
  `placename` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `viewpoint` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `posted` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `area`
--

INSERT INTO `area` (`placename`, `viewpoint`, `posted`, `message`, `reply`, `email`, `site`, `datetime`) VALUES
('', '', 'sss', 'ssss', '', 'ss@fc.om', 'http://tw.ay.com/', '2016-10-18 18:41:08'),
('', '', 'ssss', 'sss', 'ssss', 'sss@d.com', 'http://rtw.tw.xom/', '2016-10-18 19:48:57');

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
('0', 'ㄔ', '1.jpg', 'about/carousel/images/', '2016-10-22 21:28:49'),
('1', '美麗島', '2.jpg', 'about/carousel/images/', '2016-10-22 21:24:26'),
('2', '高雄', '3.jpg', 'about/carousel/images/', '2016-10-22 21:24:32'),
('3', '2', '4.jpg', 'about/carousel/images/', '2016-10-22 21:23:36'),
('4', '3', '5.jpg', 'about/carousel/images/', '2016-10-22 21:23:36'),
('5', '4', '6.jpg', 'about/carousel/images/', '2016-10-22 21:23:36');

-- --------------------------------------------------------

--
-- 資料表結構 `forum`
--

CREATE TABLE `forum` (
  `theme` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `posted` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(0, 'aaaa', 'aaaaa', 'aaaa@gmail.com', 'aa', 'member', '2016-10-18 08:41:17', '0000-00-00 00:00:00'),
(0, 'ssss', 'sssss', 'sss@gmail.com', 'ssss', 'member', '2016-10-17 23:22:28', '0000-00-00 00:00:00'),
(0, 'ssss', 'ddddd', 'd33@gc.com', 'sss', 'member', '2016-10-18 19:47:00', '0000-00-00 00:00:00');

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
(22, 'bbb', 'bbb', '2.jpg', 'about/place/images/', '2016-10-23 15:24:42'),
(23, 'ccc', 'ccc', '2.jpg', 'about/place/images/', '2016-10-23 15:24:55'),
(36, 'aaa', 'aaa', '3.jpg', 'about/place/images/', '2016-10-23 16:18:43'),
(37, 'dddd', 'dddd', '3.jpg', 'about/place/images/', '2016-10-23 16:18:51'),
(38, 'eee', 'ee', '4.jpg', 'about/place/images/', '2016-10-23 16:18:58'),
(39, 'eee', 'eee', '5.jpg', 'about/place/images/', '2016-10-23 16:19:05');

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
(7, 'bbb', 's', '1', '', '4.jpg', 'view/place/images/', '2016-10-24 19:07:10'),
(8, 'bbb', 's', '1', '', '4.jpg', 'view/images/', '2016-10-24 19:07:10');

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
('0', '', 'index/slider/images/', '0000-00-00 00:00:00'),
('1', '', 'index/slider/images/', '0000-00-00 00:00:00'),
('2', '', 'index/slider/images/', '0000-00-00 00:00:00'),
('3', '', 'index/slider/images/', '0000-00-00 00:00:00'),
('4', '', 'index/slider/images/', '0000-00-00 00:00:00'),
('5', '', 'index/slider/images/', '0000-00-00 00:00:00');

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
('0', '85大樓', '1.jpg', 'index/top6/images/', '2016-10-23 16:19:40'),
('1', '', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('2', '', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('3', '', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('4', '', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('5', '', '', 'index/top6/images/', '0000-00-00 00:00:00');

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
(0, '', '', '', '0000-00-00 00:00:00'),
(1, '', '', '', '0000-00-00 00:00:00'),
(2, '', '', '', '0000-00-00 00:00:00'),
(3, '', '', '', '0000-00-00 00:00:00'),
(4, '', '', '', '0000-00-00 00:00:00'),
(5, '', '', '', '0000-00-00 00:00:00'),
(6, '', '', '', '0000-00-00 00:00:00'),
(7, '', '', '', '0000-00-00 00:00:00'),
(8, '', '', '', '0000-00-00 00:00:00');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
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
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- 使用資料表 AUTO_INCREMENT `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
