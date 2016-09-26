-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-09-26 14:08:51
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `message`
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
