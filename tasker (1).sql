-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 16 2024 г., 04:57
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
-- База данных: `tasker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `title`, `description`, `image`, `user_id`, `status`, `comment`) VALUES
(4, 'asdasdasd', 'asdasdasdasd', 'Images/Picture_studentB.jpg', 23, 'success', ''),
(5, 'Разработка модуля отчётов', 'Необходимо разработать новый модуль отчётов, который позволит пользователям генерировать, просматривать и экспортировать отчёты с данными из системы. Модуль должен быть гибким и поддерживать различные форматы отчётов (PDF, Excel, CSV). Также он должен обе', 'Images/Picture_task1.png', 23, 'success', ''),
(6, 'Продать Лего', 'Продать за 20$', 'Images/Picture_Лего.jpg', 23, 'success', ''),
(7, 'Продать', '1. Продать за 10$ \r\n2. 10 штук продать', 'Images/Picture_Nuka cola.jpg', 24, 'success', ''),
(8, 'Продать', '1. Продать за 25$\r\n2. Продать штук 10\r\n3. Зделать отчет продаж\r\n4. Продать минимум за 20$', 'Images/Picture_Квантовая кола.jpg', 24, 'success', ''),
(9, 'Продать', '1. Продать за 74000$\r\n2. Продать штук 3\r\n3. Бонус за каждую продажу 500$\r\n4. Зделать договор', 'Images/Picture_Li.png', 24, 'success', ''),
(10, 'sedd', 'ddererddfa', 'Images/Picture_Fizik.jpg', 24, 'progress', NULL),
(11, 'xcasdw', 'asdasdxcas', 'Images/Picture_studentC.jpg', 24, 'progress', NULL),
(12, 'Создание нового функционала для сайта', 'Разработать и внедрить новый раздел на сайте, который будет отображать актуальные новости и обновления. Необходимо обеспечить адаптивный дизайн и интеграцию с текущими системами управления контентом. Срок выполнения — 2 недели.', 'Images/Picture_structure.png', 25, 'send', NULL),
(13, 'Оптимизация производительности базы данных', 'Провести анализ текущей структуры базы данных и оптимизировать запросы для повышения производительности. Основное внимание уделить индексации таблиц и уменьшению времени отклика на запросы. Ожидается завершение до конца месяца.', 'Images/Picture_data.jpg', 26, 'send', NULL),
(14, 'Аудит безопасности веб-приложения', 'Провести полный аудит безопасности веб-приложения, включая тестирование на проникновение, анализ уязвимостей и оценку защиты данных. Подготовить отчет с рекомендациями по улучшению безопасности. Срок выполнения — 1 неделя.', 'Images/Picture_audit.jpg', 23, 'success', NULL),
(15, 'test', 'adasdasd', 'Images/Picture_StudenB.jpg', 23, 'success', NULL),
(16, 'asdasd', 'asdasdads', 'Images/Picture_vir.jpg', 23, 'progress', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `status`) VALUES
(7, 'Madiyor', 'Raydi', 'c20ad4d76fe97759aa27a0c99bff6710', 'admin', 'Управляющий'),
(23, 'asdasd', 'asd', '7815696ecbf1c96e6894b779456d330e', 'user', 'Принята'),
(24, 'Анастасия Смирнова', 'Candy', 'c548bdf4963bb316f7cc49ec437d1de5', 'user', 'Принята'),
(25, 'Sarah John', 'Sarass', '0b909d567a737b73862a4fb446d49e9b', 'user', 'Принята'),
(26, 'Александр Ковалёв', 'Dandi', 'a01610228fe998f515a72dd730294d87', 'user', 'Принята');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
