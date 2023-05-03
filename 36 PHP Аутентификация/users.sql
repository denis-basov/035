-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 03 2023 г., 12:44
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
-- База данных: `035_mini_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'ivanov', 'ivanov@test', '$2y$10$u4Xuh1wzKwT8bBItEYagVOkXcrvEN6oXs7jGqSf3Lqz62B2CoL8wy'),
(2, 'ivanov1', 'ivanov@test1', '$2y$10$cWMbxf4/atQXS8SVU5xLBON/H7Sy7aVI9QjTy5s.fVyhwkyvAdGr6'),
(3, 'vasya11', 'vasya@wee', '$2y$10$.GZKW.XzLPwyt8SEXro3MueW0D0cxUmmwDx/eyIlfneHf8PAqhIEG'),
(4, 'Anna1232', 'anna@eww', '$2y$10$ZrJ.MshXEf/6KPkNY7UGfOO.bPVa7zTY7TOakTd7U8gEQygj5rgs6'),
(5, 'test', 'test@rrr', '$2y$10$sZqvzcE0/9YeMfpl8JX9.u/XRbSLo4847UaX8/UA7iTs4TBiwtrnm');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
