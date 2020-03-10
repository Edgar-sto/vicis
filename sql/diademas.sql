-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 04:00:20
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
-- Estructura de tabla para la tabla `diademas`
--

CREATE TABLE `diademas` (
  `id` int(250) NOT NULL,
  `marca_diadema` varchar(50) DEFAULT NULL,
  `num_serie` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `area` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diademas`
--

INSERT INTO `diademas` (`id`, `marca_diadema`, `num_serie`, `ubicacion`, `area`) VALUES
(1, 'Accutone', 'H-ER008277	', 'Estación 92	', NULL),
(2, 'Accutone', 'H-ER008279	', 'Estación 25	', NULL),
(3, 'Accutone', 'H-ER008275	', 'Almacén', NULL),
(4, 'Accutone', 'H-ER008267	', 'Almacén', NULL),
(5, 'Accutone', 'H-ER008269	', 'Almacén', NULL),
(6, 'Accutone', 'H-ER008278	', 'Almacén', NULL),
(7, 'Accutone', 'H-ER008282	', 'Almacén', NULL),
(8, 'Accutone', 'H-ER008281	', 'Almacén', NULL),
(9, 'Accutone', 'H-ER008272	', 'Almacen', NULL),
(10, 'Accutone', 'H-ER008276	', 'Almacén', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diademas`
--
ALTER TABLE `diademas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diademas`
--
ALTER TABLE `diademas`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
