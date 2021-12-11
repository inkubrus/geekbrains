-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 11 2021 г., 11:44
-- Версия сервера: 8.0.27
-- Версия PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magaz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `foto`
--

CREATE TABLE `foto` (
  `id` int NOT NULL COMMENT 'id фотографии',
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'название фотографии',
  `adress` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'адрес на сервере',
  `adress_small` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `size` int DEFAULT NULL COMMENT 'размер в мб',
  `count` int DEFAULT NULL COMMENT 'количество просмотров',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `foto`
--

INSERT INTO `foto` (`id`, `name`, `adress`, `adress_small`, `size`, `count`, `date`) VALUES
(2, 'dante.jpg', 'big/dante.jpg', 'big', 5, 9, '2021-12-11 08:27:21'),
(3, 'game_of_thrones.jpg', 'big/game_of_thrones.jpg', 'big', 4, 7, '2021-12-11 08:28:24'),
(4, 'gui.jpg', 'big/gui.jpg', 'big', 7, 5, '2021-12-11 08:28:24'),
(5, 'lich.jpg', 'big/lich.jpg', 'big', 4, 0, '2021-12-11 08:32:16'),
(6, 'spider-man.jpg', 'big/spider-man.jpg', 'big', 5, 20, '2021-12-11 08:32:16'),
(7, 'vader.jpg', 'big/vader.jpg', 'big', 5, 5, '2021-12-11 08:32:33'),
(8, 'luffi.jpg', 'big/luffi.jpg', 'big', 10, 15, '2021-12-11 09:29:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id фотографии', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
