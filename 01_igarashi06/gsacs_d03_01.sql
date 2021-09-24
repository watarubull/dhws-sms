-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 9 月 24 日 05:27
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacs_d03_01`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `class_table`
--

CREATE TABLE `class_table` (
  `classID` int(11) NOT NULL,
  `className` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseTerm` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `class_table`
--

INSERT INTO `class_table` (`classID`, `className`, `courseTerm`) VALUES
(1, 'Webデザイナー専攻', 6),
(2, '主婦ママクラス', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `ex_attend_table`
--

CREATE TABLE `ex_attend_table` (
  `exID` int(11) NOT NULL,
  `stuID` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `ex_table`
--

CREATE TABLE `ex_table` (
  `exID` int(11) NOT NULL,
  `exName` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseTerm` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `stu_table`
--

CREATE TABLE `stu_table` (
  `stuID` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stuName` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stuRuby` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stuBirth` date NOT NULL,
  `classID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `stu_table`
--

INSERT INTO `stu_table` (`stuID`, `stuName`, `stuRuby`, `stuBirth`, `classID`) VALUES
('wsap211101', '五十嵐渉', 'いがらしわたる', '1991-08-04', 1),
('wsap211102', '五十嵐渉子', 'いがらしわたるこ', '1991-10-03', 2),
('wsap211103', '五十嵐わたお', 'いがらしわたお', '2021-09-01', 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `class_table`
--
ALTER TABLE `class_table`
  ADD PRIMARY KEY (`classID`);

--
-- テーブルのインデックス `ex_table`
--
ALTER TABLE `ex_table`
  ADD PRIMARY KEY (`exID`);

--
-- テーブルのインデックス `stu_table`
--
ALTER TABLE `stu_table`
  ADD PRIMARY KEY (`stuID`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `class_table`
--
ALTER TABLE `class_table`
  MODIFY `classID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルのAUTO_INCREMENT `ex_table`
--
ALTER TABLE `ex_table`
  MODIFY `exID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
