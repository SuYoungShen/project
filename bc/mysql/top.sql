-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-09-15 21:51:22
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `top`
--

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
('3', '1', '1', '1', '0000-00-00 00:00:00'),
('1', '1', '1', '1', '0000-00-00 00:00:00'),
('ssssss', 'ssdsdsdssd', 'ssdd@gmai.com', 'sss', '2016-09-13 18:32:12');

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

--
-- 已匯出資料表的索引
--

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
