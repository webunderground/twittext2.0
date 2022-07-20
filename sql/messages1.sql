-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-07-2022 a las 01:09:31
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages1`
--
use  twittext2;
CREATE TABLE `messages1` (
  `id` int(12) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `hashtag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `messages1`
--

INSERT INTO `messages1` (`id`, `usuario`, `message`, `hashtag`, `time`) VALUES
(2, 'homero', ' #twitter es un pajaro trinando ', 'twitter', '2022-07-08 16:47:42'),
(3, 'homero', ' el muñeco diabolico', '', '2022-07-08 16:47:58'),
(4, 'homero', ' #twitter es una red social', 'twitter', '2022-07-08 16:48:16'),
(5, 'homero', '#twitter el pajaroco griton', 'twitter', '2022-07-08 16:48:53'),
(25, 'homero', '#twittext es un clon de la red social twitter', 'twittext', '2022-07-17 21:47:29'),
(27, 'homero', 'red scocial y sus #error', 'error', '2022-07-17 21:51:07'),
(28, 'homero', '#error se acabaron los errores y listo', 'error', '2022-07-17 21:53:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages1`
--
ALTER TABLE `messages1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages1`
--
ALTER TABLE `messages1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
