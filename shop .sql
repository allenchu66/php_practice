-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `shop`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `login`, `password`) VALUES
(1, '邱柏升', '嘉義縣民雄鄉文隆村85號', 'aaaa', 'aaaa'),
(2, '王柏升', '嘉義市林森東路151號', 'bbbb', 'Ncyu12345678'),
(3, '林柏升', '嘉義市鹿寮里學府路300號', 'cccc', 'EgretPond3'),
(4, '張柏升', '嘉義縣民雄鄉文隆村99號', 'dddd', 'EagleTail4'),
(5, '黃柏升', '嘉義市林森東路101號', 'eeee', 'CowIsland5'),
(7, '哈哈哈', 'address', '12345', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `favorite`
--

CREATE TABLE `favorite` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `favorite`
--

INSERT INTO `favorite` (`customer_id`, `product_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, '復仇者聯盟4', 150),
(2, '海綿寶寶', 100),
(3, '一拳超人', 210),
(4, '返校\r\n', 220),
(5, '後宮古堡', 180),
(6, '阿拉丁', 180),
(7, '奇異博士', 150),
(8, '死亡之握', 220),
(9, '喵喵', 180),
(10, '柯南', 150),
(11, '韓假', 400);

-- --------------------------------------------------------

--
-- 資料表結構 `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `purchase`
--

INSERT INTO `purchase` (`id`, `customer_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `purchase_detail`
--

INSERT INTO `purchase_detail` (`purchase_id`, `product_id`, `count`) VALUES
(1, 3, 3);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- 資料表索引 `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`customer_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- 資料表索引 `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`purchase_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- 資料表的限制式 `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- 資料表的限制式 `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD CONSTRAINT `purchase_detail_ibfk_1` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`),
  ADD CONSTRAINT `purchase_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
