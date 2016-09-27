-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-09-27 15:38:54
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
('', '', 'a', 'a', '', 'a@a', 'http://a', '2016-09-25 02:05:55'),
('', '', 'aaa', 'aaa', '', 'aaa@aaa.com', 'http://ww', '2016-09-25 02:26:21');

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `id` char(100) CHARACTER SET latin1 NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `carousel`
--

INSERT INTO `carousel` (`id`, `name`, `path`, `datetime`) VALUES
('0', '1(2).jpg', 'about/carousel/images/', '2016-09-02 22:21:00'),
('1', '', 'about/carousel/images/', '0000-00-00 00:00:00'),
('2', '', 'about/carousel/images/', '0000-00-00 00:00:00'),
('3', '', 'about/carousel/images/', '0000-00-00 00:00:00'),
('4', '', 'about/carousel/images/', '0000-00-00 00:00:00'),
('5', '', 'about/carousel/images/', '0000-00-00 00:00:00');

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
  `account` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`account`, `password`, `email`, `name`, `datetime`) VALUES
('2', '1', '1', '1', '0000-00-00 00:00:00'),
('1', '1', '1', '1', '0000-00-00 00:00:00'),
('ssssss', 'ssdsdsdssd', 'ssdd@gmai.com', 'sss', '2016-09-13 18:32:12');

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE `place` (
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Introduction` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `place`
--

INSERT INTO `place` (`place`, `Introduction`, `name`, `path`, `datetime`) VALUES
('test', 's', '1(2).jpg', 'about/place/images/', '2016-09-07 15:59:35');

-- --------------------------------------------------------

--
-- 資料表結構 `places`
--

CREATE TABLE `places` (
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `viewpoint` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `attractions` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `arrival` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `picname` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `places`
--

INSERT INTO `places` (`place`, `viewpoint`, `attractions`, `arrival`, `picname`, `path`, `datetime`) VALUES
('1', '1', '1', '1', '1', '1', '0000-00-00 00:00:00'),
('2', '2', '2', '2', '2', '2', '0000-00-00 00:00:00');

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
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `top`
--

INSERT INTO `top` (`id`, `name`, `path`, `datetime`) VALUES
('0', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('1', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('2', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('3', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('4', '', 'index/top6/images/', '0000-00-00 00:00:00'),
('5', '', 'index/top6/images/', '0000-00-00 00:00:00');

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
  ADD PRIMARY KEY (`place`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
