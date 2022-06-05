-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 22 2022 г., 10:47
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `prezer`
--
CREATE DATABASE IF NOT EXISTS `prezer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `prezer`;

-- --------------------------------------------------------

--
-- Структура таблицы `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `logo`
--

INSERT INTO `logo` (`id`, `logo_img`, `slogan`) VALUES
(1, 'logo3.svg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_family` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_size` int(11) NOT NULL,
  `coordinate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `leftpad` int(11) NOT NULL,
  `toppad` int(11) NOT NULL,
  `rightpad` int(11) NOT NULL,
  `align` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `templates`
--

INSERT INTO `templates` (`id`, `template_name`, `template_img`, `color`, `font_family`, `font_size`, `coordinate`, `user_id`, `width`, `height`, `leftpad`, `toppad`, `rightpad`, `align`) VALUES
(42, 'роеногке', 'сертификат.jpg', '', 'Montserrat', 28, '2,674', 1, 904, 100, 0, 0, 0, 'center'),
(47, 'екуке', 'сертификат.jpg', '', 'Montserrat', 28, '-1,690', 1, 904, 100, 0, 0, 0, 'center'),
(48, 'выфв', 'сертификат.jpg', '', 'Montserrat', 25, '1,679', 1, 904, 100, 0, 0, 0, 'center'),
(51, '3', 'Питон сертификат.jpg', '255,255,255', 'Montserrat', 24, '444,586', 1, 904, 100, 0, 0, 0, 'center'),
(52, '4', 'Мультики сертификат.jpg', '255,255,255', 'Montserrat', 24, '446,552', 1, 904, 100, 0, 0, 0, 'center'),
(53, '5', 'Системное сертификат.jpg', '255,255,255', 'Montserrat', 24, '440,571', 1, 904, 100, 0, 0, 0, 'center'),
(54, '6', 'Скрейтч сертификат.jpg', '255,255,255', 'Montserrat', 24, '448,567', 1, 904, 100, 0, 0, 0, 'center'),
(55, 'p1', 'Питон диплом 1 ст.jpg', '255,255,255', 'Montserrat', 24, '441,565', 1, 904, 100, 0, 0, 0, 'center'),
(56, 'п2', 'Питон диплом 2 ст.jpg', '255,255,255', 'Montserrat', 24, '439,581', 1, 904, 100, 0, 0, 0, 'center'),
(57, 'п3', 'Питон диплом 3 ст.jpg', '255,255,255', 'Montserrat', 24, '442,598', 1, 904, 100, 0, 0, 0, 'center'),
(58, 'кб', 'Кибергигиена 1 ст.jpg', '255,255,255', 'Montserrat', 24, '438,568', 1, 904, 100, 0, 0, 0, 'center'),
(59, 'ск1', 'Скрейтч 1 степ.jpg', '255,255,255', 'Montserrat', 24, '443,554', 1, 904, 100, 0, 0, 0, 'center'),
(60, 'ск2', 'Скрейтч 2 степ.jpg', '255,255,255', 'Montserrat', 24, '462,544', 1, 904, 100, 0, 0, 0, 'center'),
(61, 'ск3', 'Скрейтч 3 степ.jpg', '255,255,255', 'Montserrat', 24, '447,548', 1, 904, 100, 0, 0, 0, 'center'),
(62, 'м', 'Мультики диплом 1 ст.jpg', '255,255,255', 'Montserrat', 24, '458,514', 1, 904, 100, 0, 0, 0, 'center'),
(63, 'дж1', 'Java диплом 1 ст.jpg', '255,255,255', 'Montserrat', 24, '442,551', 1, 904, 100, 0, 0, 0, 'center'),
(64, 'дж2', 'Java диплом 2 ст.jpg', '255,255,255', 'Montserrat', 24, '439,559', 1, 904, 100, 0, 0, 0, 'center'),
(65, 'дж3', 'Java диплом 3 ст.jpg', '255,255,255', 'Montserrat', 24, '442,539', 1, 904, 100, 0, 0, 0, 'center'),
(66, 'с11', 'Системное 1 ст.jpg', '255,255,255', 'Montserrat', 24, '437,545', 1, 904, 100, 0, 0, 0, 'center'),
(67, 'с2', 'Системное 2 ст.jpg', '255,255,255', 'Montserrat', 24, '423,540', 1, 904, 100, 0, 0, 0, 'center'),
(68, 'с3', 'Системное 3 ст.jpg', '255,255,255', 'Montserrat', 24, '437,541', 1, 904, 100, 0, 0, 0, 'center'),
(69, 'афы', 'сертификат.jpg', '', 'Montserrat', 24, '4,673', 1, 904, 100, 0, 0, 0, 'center'),
(70, 'кцукуц', 'Мультики диплом 2 ст.jpg', '255,255,255', 'Montserrat', 24, '440,508', 1, 904, 100, 0, 0, 0, 'center'),
(71, 'енркен', 'Сертификат.jpg', '', 'Montserrat', 24, '1,643', 1, 904, 100, 0, 0, 0, 'center');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `avatar`, `email`, `surname`, `name`, `phone`, `password`) VALUES
(1, 'it-cube-logo-dark-cut.png', 'test@mail.ru', 'IT-Cube', 'Смоленск', '+ 7(999) 999-99-99', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `templates`
--
ALTER TABLE `templates`
  ADD CONSTRAINT `templates_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
