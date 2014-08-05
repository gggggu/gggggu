-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 29 2014 г., 22:52
-- Версия сервера: 5.6.11
-- Версия PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `rap`
--
CREATE DATABASE IF NOT EXISTS `rap` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rap`;

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `login`, `password`) VALUES
(1, 'gggggu', 'fae5500801134536dafbe31e70327aa2');

-- --------------------------------------------------------

--
-- Структура таблицы `wrong_login`
--

CREATE TABLE IF NOT EXISTS `wrong_login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL,
<<<<<<< HEAD
  `date_time` datetime,
=======
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
>>>>>>> b94907de4392f0d523e5a5aff881aa8782149ba1
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `wrong_login`
--

<<<<<<< HEAD
=======
INSERT INTO `wrong_login` (`id`, `ip`, `date_time`) VALUES
(5, '::1', '2014-06-30 00:51:09');
>>>>>>> b94907de4392f0d523e5a5aff881aa8782149ba1

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
