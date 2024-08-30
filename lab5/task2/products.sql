-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 16 2024 р., 13:01
-- Версія сервера: 8.2.0
-- Версія PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `lab5`
--

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `cost` int DEFAULT NULL,
  `kol` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `kol`, `date`) VALUES
(1, 'Молоко ультрапастери', 30, 200, '2024-06-16'),
(2, 'Сир твердий \"Гауда\"', 100, 50, '2024-06-16'),
(3, 'Яблука Голден', 15, 150, '2024-06-16'),
(4, 'Печиво \"Орео\"', 25, 80, '2024-06-16'),
(5, 'Мясо свиняче', 80, 30, '2024-06-16'),
(6, 'Сік апельсиновий', 35, 100, '2024-06-16'),
(7, 'Пиво \"Старопрамен\"', 40, 60, '2024-06-16'),
(8, 'Шоколадка \"Снікерс\"', 20, 120, '2024-06-16'),
(9, 'Масло вершкове', 50, 40, '2024-06-16'),
(10, 'Макарони \"Фарфалле\"', 10, 200, '2024-06-16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
