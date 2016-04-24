-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 24 2016 г., 21:30
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testirovanie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `usr` text,
  `textid` text,
  `answer` text,
  `relief_data` text,
  `rokich` text,
  `range_test` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `usr`, `textid`, `answer`, `relief_data`, `rokich`, `range_test`) VALUES
(1, 'dio canuhearme 24 Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½Ð°', 'IzRFu1F', NULL, NULL, '{"1":"perk1","2":"perk2","3":"perk3","4":"perk4","5":"perk5","6":"perk6","7":"perk7","8":"perk8","9":"perk9","10":"perk10","11":"perk11","12":"perk12","13":"perk13","14":"perk14","15":"perk15","16":"perk16","17":"perk17","18":"perk18"}{"1":"perk1","2":"perk2","3":"perk3","4":"perk4","5":"perk5","6":"perk6","7":"perk7","8":"perk8","9":"perk9","10":"perk10","11":"perk11","12":"perk12","13":"perk13","14":"perk14","15":"perk15","16":"perk16","17":"perk17","18":"perk18"}', '{"question1":"Ð½ÐµÑ‚","question2":"Ð½ÐµÑ‚","question3":"Ð½ÐµÑ‚"}'),
(2, 'dio canuhearme 22 Ð¼ÑƒÐ¶Ñ‡Ð¸Ð½Ð°', 'sLbFtLe', NULL, NULL, NULL, '{"question1":"Ð½ÐµÑ‚","question2":"Ð½ÐµÑ‚","question3":"Ð½ÐµÑ‚","question4":"Ð½ÐµÑ‚","question5":"Ð½ÐµÑ‚","question6":"Ð½ÐµÑ‚","question7":"Ð½ÐµÑ‚","question8":"Ð½ÐµÑ‚","question9":"Ð½ÐµÑ‚","question10":"Ð½ÐµÑ‚","question11":"Ð½ÐµÑ‚","question12":"Ð½ÐµÑ‚","question13":"Ð½ÐµÑ‚","question14":"Ð½ÐµÑ‚","question15":"Ð½ÐµÑ‚"}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
