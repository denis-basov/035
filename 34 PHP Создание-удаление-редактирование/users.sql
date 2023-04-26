-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 26 2023 г., 09:23
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `035_news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL DEFAULT 'images/default.png',
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `avatar`, `gender`) VALUES
(2, 'Анна', 'Иванова', 'anna888', 'anna888@test.ru', '1234567890', 'images/anna888_1682491238_romina-farias-BsZ71j4i_m4-unsplash.jpg', 'ж'),
(5, 'Сергей', 'Сергеев', 'serg12234', 'serg12234@mail.ru', '34534534', 'images/serg12234_1682490107_brooke-cagle-Nm70URdtf3c-unsplash.jpg', 'м'),
(15, 'Светлана', 'Ивановаа', 'Svet1122', 'Svet1122@gfg', '2342342', 'images/Svet1122_1682415848_christopher-campbell-rDEOVtE7vOs-unsplash.jpg', '0'),
(16, 'Анрей', 'Сидоров', 'andr233', 'andr233@mail.ru', '23234234', 'images/andr233_1682491079_taras-shypka-QEgHL8NN7nM-unsplash.jpg', '0'),
(17, 'Павел', 'Сергеев', 'pavel222', 'pavel222@fdf', 'fgdfgdh', 'images/pavel222_1682487832_warren-wong-VVEwJJRRHgk-unsplash.jpg', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
