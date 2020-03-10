-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 04:00:11
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
-- Estructura de tabla para la tabla `teclados`
--

CREATE TABLE `teclados` (
  `uniqueid` int(250) NOT NULL,
  `ubicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `teclados`
--

INSERT INTO `teclados` (`uniqueid`, `ubicacion`) VALUES
(128, 'Piso'),
(129, 'Piso'),
(130, 'Piso'),
(131, 'Piso'),
(132, 'Piso'),
(133, 'Piso'),
(134, 'Piso'),
(135, 'Piso'),
(136, 'Piso'),
(137, 'Piso'),
(138, 'Piso'),
(139, 'Piso'),
(140, 'Piso'),
(141, 'Piso'),
(142, 'Piso'),
(143, 'Piso'),
(144, 'Piso'),
(145, 'Piso'),
(146, 'Piso'),
(147, 'Piso'),
(148, 'Piso'),
(149, 'Piso'),
(150, 'Piso'),
(151, 'Piso'),
(152, 'Piso'),
(153, 'Piso'),
(154, 'Piso'),
(155, 'Piso'),
(156, 'Piso'),
(157, 'Piso'),
(158, 'Piso'),
(159, 'Piso'),
(160, 'Piso'),
(161, 'Piso'),
(162, 'Piso'),
(163, 'Piso'),
(164, 'Piso'),
(165, 'Piso'),
(166, 'Piso'),
(167, 'Piso'),
(168, 'Piso'),
(169, 'Piso'),
(170, 'Piso'),
(171, 'Piso'),
(172, 'Piso'),
(173, 'Piso'),
(174, 'Piso'),
(175, 'Piso'),
(176, 'Piso'),
(177, 'Piso'),
(178, 'Piso'),
(179, 'Piso'),
(180, 'Piso'),
(181, 'Piso'),
(182, 'Piso'),
(183, 'Piso'),
(184, 'Piso'),
(185, 'Piso'),
(186, 'Piso'),
(187, 'Piso'),
(188, 'Piso'),
(189, 'Piso'),
(190, 'Piso'),
(191, 'Piso'),
(192, 'Piso'),
(193, 'Piso'),
(194, 'Piso'),
(195, 'Piso'),
(196, 'Piso'),
(197, 'Piso'),
(198, 'Piso'),
(199, 'Piso'),
(200, 'Piso'),
(201, 'Piso'),
(202, 'Piso'),
(203, 'Piso'),
(204, 'Piso'),
(205, 'Piso'),
(206, 'Piso'),
(207, 'Piso'),
(208, 'Piso'),
(209, 'Piso'),
(210, 'Piso'),
(211, 'Piso'),
(212, 'Piso'),
(213, 'Piso'),
(214, 'Piso'),
(215, 'Piso'),
(216, 'Piso'),
(217, 'Piso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `teclados`
--
ALTER TABLE `teclados`
  ADD PRIMARY KEY (`uniqueid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `teclados`
--
ALTER TABLE `teclados`
  MODIFY `uniqueid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
