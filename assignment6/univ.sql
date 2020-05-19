-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2020 г., 11:43
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `univ`
--

CREATE TABLE `univ` (
  `name` varchar(32) NOT NULL,
  `location` varchar(32) NOT NULL,
  `field` varchar(32) NOT NULL,
  `rank` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `univ`
--

INSERT INTO `univ` (`name`, `location`, `field`, `rank`) VALUES
('AITU', 'Astana', 'IT', '4'),
('NU', 'Astana', 'Science', '5'),
('KBTU', 'Almaty', 'Technical', '3'),
('ENU', 'Astana', 'Science', '3'),
('AlmaU', 'Almaty', 'Business', '3'),
('QarGU', 'Qaragandy', 'Science', '2'),
('IITU', 'Almaty', 'IT', '3'),
('SDU', 'Almaty', 'Technical', '4'),
('Al-Farabi', 'Almaty', 'Technical', '4'),
('Agrarka', 'Astana', 'Science', '2'),
('QarGTU', 'Qaragandy', 'Technical', '1'),
('Satpayev University', 'Almaty', 'Science', '3'),
('KazGYU', 'Astana', 'Law', '4'),
('KIMEP', 'Almaty', 'Business', '4'),
('AAES', 'Almaty', 'Technical', '3'),
('ATU', 'Almaty', 'Technical', '1'),
('AGOY', 'Atyrau', 'Science', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
