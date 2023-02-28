-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2023 г., 17:12
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `demo`
--
CREATE DATABASE IF NOT EXISTS `demo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `demo`;

-- --------------------------------------------------------

--
-- Структура таблицы `ajax_demo`
--

CREATE TABLE `ajax_demo` (
  `id` int NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `age` int NOT NULL,
  `hometown` varchar(15) NOT NULL,
  `job` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `ajax_demo`
--

INSERT INTO `ajax_demo` (`id`, `firstname`, `lastname`, `age`, `hometown`, `job`) VALUES
(1, 'Ivan', 'Ivanov', 30, 'Moskow', 'disigner'),
(2, 'Stepan', 'Stepanov', 32, 'Kaliningrad', 'programmer'),
(3, 'Maxim', 'Maximov', 33, 'Voronej', 'programmer'),
(4, 'Irina', 'Sidorova', 27, 'Orel', 'menager');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ajax_demo`
--
ALTER TABLE `ajax_demo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ajax_demo`
--
ALTER TABLE `ajax_demo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- База данных: `phpbase`
--
CREATE DATABASE IF NOT EXISTS `phpbase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `phpbase`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Продукты'),
(2, 'Инструменты'),
(3, 'Одежда'),
(4, 'Электроника');

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`) VALUES
(1, 'продукты'),
(2, 'промтовары');

-- --------------------------------------------------------

--
-- Структура таблицы `podgroup`
--

CREATE TABLE `podgroup` (
  `id` int NOT NULL,
  `name` varchar(15) NOT NULL,
  `id_group` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `podgroup`
--

INSERT INTO `podgroup` (`id`, `name`, `id_group`) VALUES
(1, 'мясо', 1),
(2, 'рыба', 1),
(3, 'инструменты', 2),
(4, 'электроника', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `id-category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `id-category`) VALUES
(1, 'Хлеб', 1),
(2, 'Молоко', 1),
(3, 'Сахар', 1),
(4, 'Творог', 1),
(5, 'Отвертка', 2),
(6, 'Молоток', 2),
(7, 'Зубило', 2),
(8, 'Пила', 2),
(9, 'Пиджак', 3),
(10, 'Рубашка', 3),
(11, 'Брюки', 3),
(12, 'Майка', 3),
(13, 'Телевизор', 4),
(14, 'Компьютер', 4),
(15, 'Монитор', 4),
(16, 'Принтер', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int NOT NULL,
  `name` varchar(15) NOT NULL,
  `id_podgroup` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `id_podgroup`) VALUES
(1, 'сосиски', 1),
(2, 'колбаса', 1),
(3, 'лосось', 2),
(4, 'селедка', 2),
(5, 'молоток', 3),
(6, 'отвертка', 3),
(7, 'телевизор', 4),
(8, 'магнитола', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(15) NOT NULL,
  `age` varchar(15) NOT NULL,
  `salary` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `salary`) VALUES
(1, 'user1', '23', '400'),
(2, 'user2', '25', '500'),
(3, 'user3', '23', '500'),
(4, 'user4', '30', '900'),
(5, 'user5', '27', '500'),
(6, 'user6', '28', '900');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `podgroup`
--
ALTER TABLE `podgroup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_group` (`id_group`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_poggroup` (`id_podgroup`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `podgroup`
--
ALTER TABLE `podgroup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `podgroup`
--
ALTER TABLE `podgroup`
  ADD CONSTRAINT `podgroup_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `group` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD CONSTRAINT `tovar_ibfk_1` FOREIGN KEY (`id_podgroup`) REFERENCES `podgroup` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
--
-- База данных: `student`
--
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `student`;

-- --------------------------------------------------------

--
-- Структура таблицы `college`
--

CREATE TABLE `college` (
  `id` int NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `college`
--

INSERT INTO `college` (`id`, `name`) VALUES
(1, 'Колледж 1'),
(2, 'Колледж 2');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Группа 1'),
(2, 'Группа 2');

-- --------------------------------------------------------

--
-- Структура таблицы `speciality`
--

CREATE TABLE `speciality` (
  `id` int NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `speciality`
--

INSERT INTO `speciality` (`id`, `name`) VALUES
(1, 'Специальность 1'),
(2, 'Специальность 2');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `group_id` int NOT NULL,
  `speciality_id` int NOT NULL,
  `kolledge_id` int NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `group_id`, `speciality_id`, `kolledge_id`, `name`) VALUES
(1, 1, 1, 1, 'Иванов И. И.'),
(2, 1, 1, 1, 'Сидоров С.С.'),
(3, 2, 1, 1, 'Авгеев А.А.'),
(4, 2, 1, 1, 'Николаев Н.Н.'),
(5, 1, 2, 1, 'Петров П.П.'),
(6, 1, 2, 1, 'михайлов М.С.'),
(7, 2, 2, 1, 'Пряников М.М.'),
(8, 2, 2, 1, 'Пирожков П.П.'),
(9, 1, 1, 2, 'Птичкин П.П.'),
(10, 1, 1, 2, 'Галкин А.А.'),
(11, 2, 1, 2, 'Сорокин С.С.'),
(12, 2, 1, 2, 'Орлов Г.В.'),
(13, 1, 2, 2, 'Синицин П.В.'),
(14, 1, 2, 2, 'Грачев Е.Н.'),
(15, 2, 2, 2, 'Телегин Г.Ю.'),
(16, 2, 2, 2, 'Дибров Н.Р.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `speciality_id` (`speciality_id`),
  ADD KEY `kolledge_id` (`kolledge_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `college`
--
ALTER TABLE `college`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`speciality_id`) REFERENCES `speciality` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`kolledge_id`) REFERENCES `college` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(15) NOT NULL,
  `sur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `sur`) VALUES
(1, 'user1', 'user1'),
(2, 'user2', 'user2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- База данных: `vue-base`
--
CREATE DATABASE IF NOT EXISTS `vue-base` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `vue-base`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
