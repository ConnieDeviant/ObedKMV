-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 29 2022 г., 10:30
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kmv_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `opis` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `porc` int NOT NULL,
  `cena` int NOT NULL,
  `kat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `opis`, `porc`, `cena`, `kat`) VALUES
(1, 'Корейская морковь', NULL, 100, 50, 'САЛАТЫ'),
(2, 'Салат \"П\\О\"', NULL, 130, 45, 'САЛАТЫ'),
(3, 'Помидоры соленые', NULL, 100, 45, 'САЛАТЫ'),
(4, 'Салат \"Греческий\"', NULL, 130, 60, 'САЛАТЫ'),
(5, 'Салат \"Красное море\"', 'Крабовое мясо, помидор, сыр, майонез', 140, 82, 'САЛАТЫ'),
(6, 'Салат \"Московский\"', NULL, 150, 80, 'САЛАТЫ'),
(7, 'Салат \"Пекинский\"', 'Курица, капуста, пекин, огурец, помидор, сухари, майонез', 130, 90, 'САЛАТЫ'),
(8, 'Салат \"Сказка\"', 'Курица, кукуруза, яйцо, чипсы, майонез', 100, 74, 'САЛАТЫ'),
(9, 'Суп лапша с грибами', NULL, 500, 55, 'ПЕРВОЕ'),
(10, 'Харчо', NULL, 500, 110, 'ПЕРВОЕ'),
(11, 'Биток \"Корсика\"', NULL, 90, 87, 'ВТОРОЕ'),
(12, 'Биток рыбный', NULL, 100, 90, 'ВТОРОЕ'),
(13, 'Котлета Дружба', NULL, 120, 95, 'ВТОРОЕ'),
(14, 'Котлета куриная', NULL, 100, 70, 'ВТОРОЕ'),
(15, 'Куриная ножка духовая', NULL, 100, 86, 'ВТОРОЕ'),
(16, 'Куриная отбивная Барбара', NULL, 100, 98, 'ВТОРОЕ'),
(17, 'Куриная поджарка', NULL, 100, 94, 'ВТОРОЕ'),
(18, 'Плов куриный', NULL, 250, 80, 'ВТОРОЕ'),
(19, 'Филе куриное', NULL, 100, 90, 'ВТОРОЕ'),
(20, 'Цыпленок рождественский', NULL, 100, 90, 'ВТОРОЕ'),
(21, 'Заливка овощная', NULL, 100, 50, 'ГАРНИРЫ'),
(22, 'Капуста тушеная', NULL, 150, 55, 'ГАРНИРЫ'),
(23, 'Картофельное пюре', NULL, 200, 60, 'ГАРНИРЫ'),
(24, 'Картофельный Гратен', NULL, 100, 75, 'ГАРНИРЫ'),
(25, 'Каша гречневая', NULL, 200, 50, 'ГАРНИРЫ'),
(26, 'Макароны', NULL, 150, 45, 'ГАРНИРЫ'),
(27, 'Рис по-Турецки', NULL, 150, 40, 'ГАРНИРЫ'),
(28, 'Сотэ из кабачков', NULL, 150, 65, 'ГАРНИРЫ'),
(29, 'Шампиньоны с овощами', NULL, 100, 98, 'ГАРНИРЫ'),
(32, 'Сметана', NULL, 25, 20, 'СОУСА'),
(33, 'Хлеб', NULL, 30, 3, 'МУЧНЫЕ'),
(34, 'Хлеб бородинский', NULL, 30, 3, 'МУЧНЫЕ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
