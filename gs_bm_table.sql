-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql3104.db.sakura.ne.jp
-- 生成日時: 2025 年 1 月 02 日 23:24
-- サーバのバージョン： 8.0.40
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `indigofrog33_php02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `third` varchar(255) NOT NULL,
  `memo` text,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `first`, `second`, `third`, `memo`, `date`) VALUES
(3, 'ジャスティンパレス', 'スターズオンアース', 'ドウデュース', 'やはり坂井くんが乗るので', '2024-12-18 15:00:24'),
(5, 'ブローザホーン', 'ジャスティンパレス', 'ドウデュース', '先輩がこれだというので', '2024-12-18 15:15:07'),
(6, '', '', '', '', '2024-12-18 22:48:49'),
(7, '', '', '', '', '2024-12-19 15:15:29'),
(8, '', '', '', '', '2024-12-19 16:36:34'),
(9, 'ドゥデュース', 'アーバンシック', 'スタンニングローズ', '２２日はM-1と有馬で激熱ですね！！！', '2024-12-19 16:39:10'),
(10, '', '', '', '', '2024-12-21 12:19:06'),
(11, '馬', 'ペガサス', 'ツチノコ', 'なかなかの番狂わせである…', '2024-12-21 14:22:15'),
(12, 'ジャスティンパレス', 'スターズオンアース', 'ドウデュース', 'も', '2025-01-02 14:10:36'),
(13, 'ブローザホーン', 'スターズオンアース', 'ドウデュース', 'おむむむ', '2025-01-02 14:16:02');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
