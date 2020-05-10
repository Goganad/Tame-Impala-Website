-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 11 2020 г., 01:39
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chinese_calendar`
--

CREATE TABLE `chinese_calendar` (
  `year` int(11) NOT NULL,
  `chinese` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `chinese_calendar`
--

INSERT INTO `chinese_calendar` (`year`, `chinese`) VALUES
(0, 'Monkey'),
(1, 'Rooster'),
(2, 'Dog'),
(3, 'Pig'),
(4, 'Rat'),
(5, 'Ox'),
(6, 'Tiger'),
(7, 'Hare'),
(8, 'Dragon'),
(9, 'Snake'),
(10, 'Horse'),
(11, 'Sheep');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 10000,
  `in_stock` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `info`, `price`, `in_stock`) VALUES
(1, 'Lonerism', 'LP2', 35, 1),
(2, 'Currents', 'LP3', 35, 1),
(3, 'Innerspeaker', 'LP1', 35, 1),
(4, 'The Slow Rush', 'LP4', 35, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `item_id`, `customer`, `adress`, `date`) VALUES
(1, 3, 'Anton', 'Minsk', '2020-05-10 16:26:46'),
(2, 2, 'James', 'New-Orleans', '2020-05-12 01:32:35'),
(6, 4, 'Hayley', 'Nashville', '2020-05-13 01:35:38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
