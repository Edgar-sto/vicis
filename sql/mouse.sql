-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 04:00:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mouse`
--

CREATE TABLE `mouse` (
  `uniqueid` int(250) NOT NULL,
  `ubicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mouse`
--

INSERT INTO `mouse` (`uniqueid`, `ubicacion`) VALUES
(1, 'Piso'),
(2, 'Piso'),
(3, 'Piso'),
(4, 'Piso'),
(5, 'Piso'),
(6, 'Piso'),
(7, 'Piso'),
(8, 'Piso'),
(9, 'Piso'),
(10, 'Piso'),
(11, 'Piso'),
(12, 'Piso'),
(13, 'Piso'),
(14, 'Piso'),
(15, 'Piso'),
(16, 'Piso'),
(17, 'Piso'),
(18, 'Piso'),
(19, 'Piso'),
(20, 'Piso'),
(21, 'Piso'),
(22, 'Piso'),
(23, 'Piso'),
(24, 'Piso'),
(25, 'Piso'),
(26, 'Piso'),
(27, 'Piso'),
(28, 'Piso'),
(29, 'Piso'),
(30, 'Piso'),
(31, 'Piso'),
(32, 'Piso'),
(33, 'Piso'),
(34, 'Piso'),
(35, 'Piso'),
(36, 'Piso'),
(37, 'Piso'),
(38, 'Piso'),
(39, 'Piso'),
(40, 'Piso'),
(41, 'Piso'),
(42, 'Piso'),
(43, 'Piso'),
(44, 'Piso'),
(45, 'Piso'),
(46, 'Piso'),
(47, 'Piso'),
(48, 'Piso'),
(49, 'Piso'),
(50, 'Piso'),
(51, 'Piso'),
(52, 'Piso'),
(53, 'Piso'),
(54, 'Piso'),
(55, 'Piso'),
(56, 'Piso'),
(57, 'Piso'),
(58, 'Piso'),
(59, 'Piso'),
(60, 'Piso'),
(61, 'Piso'),
(62, 'Piso'),
(63, 'Piso'),
(64, 'Piso'),
(65, 'Piso'),
(66, 'Piso'),
(67, 'Piso'),
(68, 'Piso'),
(69, 'Piso'),
(70, 'Piso'),
(71, 'Piso'),
(72, 'Piso'),
(73, 'Piso'),
(74, 'Piso'),
(75, 'Piso'),
(76, 'Piso'),
(77, 'Piso'),
(78, 'Piso'),
(79, 'Piso'),
(80, 'Piso'),
(81, 'Piso'),
(82, 'Piso'),
(83, 'Piso'),
(84, 'Piso'),
(85, 'Piso'),
(128, 'Piso'),
(129, 'Piso'),
(131, 'Piso'),
(132, 'Piso'),
(133, 'Piso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`uniqueid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mouse`
--
ALTER TABLE `mouse`
  MODIFY `uniqueid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
