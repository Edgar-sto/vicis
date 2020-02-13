-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2020 a las 03:40:28
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
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE `estaciones` (
  `uniqueid` int(250) NOT NULL,
  `num_estacion` varchar(50) NOT NULL,
  `local_host` varchar(50) NOT NULL,
  `serie_cpu` varchar(50) NOT NULL,
  `marca_cpu` varchar(20) NOT NULL,
  `serie_monitor` varchar(50) NOT NULL,
  `marca_monito` varchar(20) NOT NULL,
  `campania` varchar(50) NOT NULL,
  `mouse` varchar(1) NOT NULL,
  `teclado` varchar(1) NOT NULL,
  `diadema` varchar(1) NOT NULL,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`uniqueid`, `num_estacion`, `local_host`, `serie_cpu`, `marca_cpu`, `serie_monitor`, `marca_monito`, `campania`, `mouse`, `teclado`, `diadema`, `comentario`) VALUES
(1, 'Estacion 001', 'EST-LAZ-001', 'MXJ73801R1', 'HP', 'CNN73107D9', 'HP', '0002 - Validacion', 'S', 'S', 'S', 'Funcionando al 100'),
(2, 'Estacion 002', 'EST-LAZ-002', '28TK5J1', 'Optiplex 760', 'CNN6410484', 'HP', '0002 - Validacion', 'S', 'S', 'S', 'Funcionando al 100');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`uniqueid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
