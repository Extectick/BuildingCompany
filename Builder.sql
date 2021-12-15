-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Дек 15 2021 г., 18:23
-- Версия сервера: 8.0.26
-- Версия PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Builder`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `created`, `modified`) VALUES
(1, 'Дом #1', '2.499.900', 'img/home1.jpg', '2021-12-12 12:27:09', '2021-12-12 17:44:16'),
(2, 'Дом #2', '3.299.900', 'img/home2.jpg', '2021-12-12 12:27:48', '2021-12-12 17:44:16'),
(3, 'Дом #3', '4.799.900', 'img/home3.jpg', '2021-12-12 16:48:03', '2021-12-12 17:44:16'),
(4, 'Дом #4', '1.699.900', 'img/home4.jpg', '2021-12-12 16:48:12', '2021-12-12 17:44:16'),
(5, 'Дом #5', '6.899.900', 'img/home5.jpg', '2021-12-12 16:48:20', '2021-12-12 17:44:16'),
(6, 'Дом #6', '2.199.900', 'img/home6.jpg', '2021-12-12 16:48:30', '2021-12-12 17:44:16'),
(7, 'Дом #7', '4.899.900', 'https://1house.by/wp-content/uploads/2017/01/Perspektiva-12.jpg', '2021-12-13 02:24:14', '2021-12-13 02:24:14');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(2048) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created`, `modified`) VALUES
(1, 'Vasiliy', 'Ivanov', 'vasya@coder.com', '$2y$10$gPSnyQjfFRnkBHzYanth1eqMR4YPMt0XCOeOoZ2zxh8AW5OS1.Sfe', '2021-11-26 06:24:55', '2021-11-26 06:24:55'),
(2, 'Алексей', 'Борховецкий', 'extectick@yandex.ru', '$2y$10$QB.G1B1l5AdH1mtOQbnAWuuBiMscbh45W9NHh0SRnTSvVoKy2uem2', '2021-11-30 05:46:47', '2021-11-30 05:46:47'),
(3, 'Alex', 'Foward', 'bilipt@yandex.ru', '$2y$10$oRxcA7sDlOcpB3AYf88youBFNWF0tkjuyA/8hRWA/SDYGBvQLDDiO', '2021-12-09 11:37:52', '2021-12-09 11:37:52'),
(4, 'fsd', 'dsf', 'sfd@gfd.ru', '$2y$10$uNo5mMqK1mS8omzltaxNIuLquL47LKyF/D//xGlU7oI/CnTDk6SKu', '2021-12-12 18:15:09', '2021-12-12 18:15:09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
