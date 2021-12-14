-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2021 г., 23:25
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gos`
--

-- --------------------------------------------------------

--
-- Структура таблицы `homer`
--

CREATE TABLE `homer` (
  `Homer` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Pasport` varchar(100) NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Dat1` date NOT NULL,
  `Dat2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `homer`
--

INSERT INTO `homer` (`Homer`, `Name`, `Pasport`, `Tel`, `Mail`, `Dat1`, `Dat2`) VALUES
(1, 'Болотненко Александр Дмитриевич', '0000 000000', '88888888888', 'sas@mail.ru', '2021-12-12', '2021-12-12'),
(2, 'Болотненко Александр Дмитриевич', '0000 000000', '88888888888', 'sas@mail.ru', '2021-12-12', '2021-12-12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `homer`
--
ALTER TABLE `homer`
  ADD PRIMARY KEY (`Homer`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `homer`
--
ALTER TABLE `homer`
  MODIFY `Homer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
