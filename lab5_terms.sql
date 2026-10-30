-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 30 2026 г., 13:16
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab5_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lab5_terms`
--

CREATE TABLE `lab5_terms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `definition` text NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lab5_terms`
--

INSERT INTO `lab5_terms` (`id`, `name`, `definition`, `img`) VALUES
(1, 'HTML', 'Язык разметки для создания структуры веб-страницы.', 'html.png'),
(2, 'CSS', 'Язык стилей для оформления веб-страниц.', 'css.png'),
(3, 'JavaScript', 'Язык программирования для создания интерактивности.', 'javascript.png'),
(4, 'PHP', 'Серверный язык программирования для создания сайтов.', 'php.png'),
(5, 'MySQL', 'Система управления реляционными базами данных.', 'mysql.png'),
(6, 'SQL', 'Язык запросов для работы с базами данных.', 'sql.png'),
(7, 'Сервер', 'Компьютер или программа для обработки запросов.', 'server.png'),
(8, 'База данных', 'Организованное хранилище информации.', 'database.png'),
(9, 'Браузер', 'Программа для просмотра веб-страниц.', 'browser.png'),
(10, 'URL', 'Адрес ресурса в интернете.', 'url.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lab5_terms`
--
ALTER TABLE `lab5_terms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lab5_terms`
--
ALTER TABLE `lab5_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
