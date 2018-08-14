-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 14 2018 г., 04:57
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `short_links`
--

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(11) UNSIGNED NOT NULL,
  `link_fake` varchar(100) NOT NULL,
  `link_real` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `link_fake`, `link_real`) VALUES
(177, '1488', 'www.yandex.ru'),
(178, '1337', 'www.youtube.com'),
(179, '228', 'www.vk.com'),
(180, '322', 'www.google.com'),
(181, '14881', 'yandex.ru'),
(182, '12', '12'),
(183, '123', '12'),
(184, '1231231', '12312'),
(185, '1222', '12'),
(186, '4545', '4545'),
(187, '12122112', '1212'),
(188, '243', '234'),
(189, '21323132', 'www.yandex.ru'),
(190, '2132313212', 'www.yandex.ru'),
(191, '15b6f4f32a4d3a', 'http://www.yaandex.ru'),
(192, '15b6f4f3fe4642', 'http://www.yandex.ru'),
(193, '1231231231', 'http://www.yandex.ru'),
(194, '', 'http://'),
(195, '123123123', 'http://www.yandex.ru'),
(196, '1231231231212', 'https://www.yandex.ru/'),
(197, '15b6f5db2aeea7', 'http://123'),
(198, '132', 'http://123'),
(199, 'sad', 'http://asdasda'),
(200, '15b71e8ab35fd2', 'http://www.yandex.ru'),
(201, '1231', 'http://www.yandex.ru'),
(202, '15b71e8c2eb780', 'http://www.yandex.ru'),
(203, '15b71e8c756d4c', 'http://www.yandex.ru'),
(204, '15b71e8cfcaa09', 'http://www.yandex.ru'),
(205, '15b71fd9f9af61', 'http://www.twitch.rv'),
(206, '15b71fda32761d', 'http://www.twitch.rv'),
(207, '15b71fda62b7d1', 'http://www.twitch.tv'),
(208, '15b7203465be60', 'http://12'),
(209, '1221', 'http://2121'),
(210, '12213123', 'http://21'),
(211, '212121', 'http://122112'),
(212, '21', 'http://12'),
(213, '21122121', 'http://12'),
(214, '312321', 'http://132312'),
(215, 'gggg', 'http://www.google.com'),
(216, '15b72338d3771a', 'http://1'),
(217, '15b7240eeae0e9', 'http://www.yandex.ru'),
(218, '3123123', 'http://www.yandex.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
