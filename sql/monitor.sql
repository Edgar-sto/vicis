-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2020 a las 08:21:37
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
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE `monitor` (
  `uniqueid` int(250) NOT NULL,
  `marca_monitor` varchar(50) NOT NULL,
  `serie_monitor` varchar(50) NOT NULL,
  `modelo_monitor` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `monitor`
--

INSERT INTO `monitor` (`uniqueid`, `marca_monitor`, `serie_monitor`, `modelo_monitor`, `ubicacion`, `comentario`) VALUES
(130, 'HP', 'CNN73107D9', NULL, '0002 - Validacion', 'Funcionando al 100'),
(131, 'HP', 'CNN6410484', NULL, '0002 - Validacion', 'Funcionando al 100'),
(132, 'LG', 'PANTALLA LG', NULL, '0002 - Validacion', 'Equipo para pantalla de monitoreo'),
(133, 'HP', 'CNN64104Z4', NULL, '0002 - Validación', 'Equipo completo'),
(134, 'HP', 'CNN5381C1R', NULL, '0002 - Validacion', 'Equipo completo'),
(135, 'HP', 'CNN64106MH', NULL, '0002 - Validacion', 'Equipo completo'),
(136, 'HP', 'CNN64104YR', NULL, '0002 - Validacion', 'Equipo completo'),
(137, 'HP', 'CNN7322GQW', NULL, '0002 - Validacion', 'Equipo completo'),
(138, 'HP', 'CNN64105QZ', NULL, '0002 - Validacion', 'Equipo completo'),
(139, 'HP', 'CNN7107CY', NULL, '0002 - Validacion', 'Equipo completo'),
(140, 'HP', 'CNN5381C2H', NULL, '0002 - Validacion', 'Equipo completo'),
(141, 'HP', 'CNN6410489', NULL, '0002 - Validacion', 'Equipo completo'),
(142, 'HP', 'CNN7322G98', NULL, '0002 - Validacion', 'Equipo completo'),
(143, 'HP', 'CNN7322G9N', NULL, '0002 - Validacion', 'Equipo completo'),
(144, 'HP', 'CNN73107DH', NULL, '0002 - Validacion', 'Equipo completo'),
(145, 'HP', 'CNN64104ZF', NULL, '0002 - Validacion', 'Equipo completo'),
(146, 'HP', 'CNN641048V', NULL, '0002 - Validacion', 'Equipo completo'),
(147, 'HP', 'CNN64105W3', NULL, '0002 - Validacion', 'Equipo completo'),
(148, 'DELL', 'CNOUH572-466', NULL, '0002 - Validacion', 'Equipo completo'),
(149, 'DELL', 'CNN73106YN', NULL, '0002 - Validacion', 'Equipo completo'),
(150, 'DELL', 'CNN73106Y8', NULL, '0002 - Validacion', 'Equipo completo'),
(151, 'HP', 'CNN7322GQ0', NULL, '0002 - Validacion', 'Equipo completo'),
(152, 'HP', 'CNN5381BVZ', NULL, '0002 - Validacion', 'Equipo completo'),
(153, 'HP', 'CNN64106PT ', NULL, '0002 - Validacion', 'Equipo completo'),
(154, 'HP', 'CNN5381BJ7', NULL, '0002 - Validacion', 'Equipo completo'),
(155, '', 'CNN5381BJD', NULL, '0002 - Validacion', 'Equipo completo'),
(156, 'HP', 'CNN7322G8S', NULL, '0002 - Validacion', 'Equipo completo'),
(157, 'HP', 'CNN5381BW1', NULL, '0002 - Validacion', 'Equipo completo'),
(158, 'HP', 'CNN641048N', NULL, '0002 - Validacion', 'Equipo completo'),
(159, 'HP', 'CNN7322G9G', NULL, '0002 - Validacion', 'Equipo completo'),
(160, 'HP', 'CNN7322GQ5', NULL, '0002 - Validacion', 'Equipo completo'),
(161, 'HP', 'CNN ', NULL, '0002 - Validacion', 'Falta agrega numero de serie de monitor'),
(162, 'HP', 'CNN7322G9B', NULL, '0002 - Validacion', 'Equipo completo'),
(163, 'HP', 'CNN64106PQ', NULL, '0002 - Validacion', 'Equipo completo'),
(164, 'HP', 'CNN73107CQ', NULL, '0002 - Validacion', 'Equipo completo'),
(165, 'HP', 'CNN641054Y', NULL, '0002 - Validacion', 'Equipo completo'),
(166, 'HP', 'CNN53819TS', NULL, '0002 - Validacion', 'Equipo completo'),
(167, 'HP', 'CNN5381BVX', NULL, '0002 - Validacion', 'Equipo completo'),
(168, 'HP', 'CNN73107DG', NULL, '0002 - Validacion', 'Equipo completo'),
(169, 'DELL', 'CN-0WH318-72', NULL, '0002 - Validacion', 'Equipo completo'),
(170, 'HP', 'CNN7322Q8Z', NULL, '0002 - Validacion', 'Equipo completo'),
(171, 'HP', 'CNN7322G9H', NULL, '0002 - Validacion', 'Equipo completo'),
(172, 'HP', 'CNN73107CN', NULL, '0002 - Validacion', 'Equipo completo'),
(173, 'HP', 'CNN7322G8R', NULL, 'Centros Externos', 'Equipo completo'),
(174, 'HP', 'CNN64106PN', NULL, '0002 - Validacion', 'Estacion sin CPU'),
(175, 'HP', 'CNN641048T', NULL, '0006 - Validacion Invex', 'Equipo completo'),
(176, 'AOC', '33E5BA004834', NULL, 'Coordinador', 'Equipo completo'),
(177, 'HP', 'CNN6420Z8F', NULL, '0006 - Validacion Invex', 'Equipo completo'),
(178, 'HP', 'CNN5381C04', NULL, '0006 - Validacion Invex', 'Equipo completo'),
(179, 'HP', 'CNN7322GQC', NULL, '0006 - Validacion Invex', 'Equipo completo'),
(180, 'HP', 'CNN7322GR3', NULL, '0006 - Validacion Invex', 'Equipo completo'),
(181, 'HP', 'CNN64104Z6', NULL, '0006 - Validacion Invex', 'Equipo sin CPU'),
(182, 'HP', 'CNN7322GQD', NULL, '0006 - Validacion Invex', 'Equipo completo'),
(183, 'HP', 'CNN64104Z6', NULL, '0006 - Validacion Invex', 'Equipo completo'),
(184, 'HP', 'CNN7322GQL', NULL, '0000 - Área libre', 'No prende CPU'),
(185, 'HP', 'CNN6410560', NULL, '0000 - Área libre', ' '),
(186, 'HP', 'CNN7322G9K', NULL, '0000 - Área libre', ' '),
(187, 'HP', 'CNN7322G96', NULL, '0000 - Área libre', ' '),
(188, 'HP', 'CNN64104ZD', NULL, '0000 - Área libre', ' '),
(189, 'HP', 'CNN64104TX', NULL, '0000 - Área libre', ' '),
(190, 'HP', 'CNN6410480', NULL, '0000 - Área libre', ' '),
(191, 'HP', 'CNN64106PX', NULL, '0000 - Área libre', ' '),
(192, 'HP', 'CNN7322GQP', NULL, '0000 - Área libre', ' '),
(193, 'HP', 'CNN7322G8Y', NULL, '0000 - Área libre', ' '),
(194, 'HP', 'CNN7322G8T', NULL, '0000 - Área libre', ' '),
(195, 'HP', 'CNN7322GQ6', NULL, '0000 - Área libre', ' '),
(196, 'HP', 'CNN73107BD', NULL, 'Monitoreo', ' Equipo completo'),
(197, 'HP', 'CNN64105Z1', NULL, 'Monitoreo', 'Equipo completo'),
(198, 'HP', 'CNN5381C0P', NULL, 'Monitoreo', 'Equipo completo'),
(199, 'HP', 'CNN7322GQZ', NULL, 'Monitoreo', 'Equipo completo'),
(200, 'HP', 'CNN73107CZ', NULL, 'Monitoreo', 'Equipo completo'),
(201, 'HP', 'CNN7322G8H', NULL, 'Monitoreo', 'Equipo completo'),
(202, 'Laboratorio', 'Laboratorio', NULL, 'Laboratorio', 'Equipo para uso de Laboratorio'),
(203, 'AOC', 'AEUF59AOO3416', NULL, 'Monitoreo-Calidad', 'Equipo completo de Saul Aguilar'),
(204, 'HP', 'CNN64106MN', NULL, 'Monitoreo', 'Equipo completo'),
(205, 'HP', 'CNN5381C28', NULL, 'Monitoreo', 'Equipo completo'),
(206, 'HP', 'CNN6410485', NULL, 'Monitoreo', 'Equipo completo'),
(207, 'HP', 'CNN7322GQ7', NULL, 'Monitoreo', 'Equipo completo'),
(208, 'HP', 'CNN64106RN', NULL, 'Monitoreo', 'Equipo completo'),
(209, 'HP', 'CNN7322G92', NULL, 'Monitoreo', 'Equipo completo'),
(210, 'HP', 'CNN64105RZ', NULL, 'Monitoreo', 'Equipo completo'),
(211, 'HP', 'CNN64105W2', NULL, 'Monitoreo', 'Equipo completo'),
(212, 'HP', 'CNN7322GQM', NULL, 'Procesos', 'Equipo completo'),
(213, 'HP', 'CNN64212RX', NULL, 'Procesos', 'Equipo completo'),
(214, 'HP', 'CNN64105W9', NULL, '0004 - Formalización', 'Equipo completo'),
(215, 'HP', 'CNN7322G99', NULL, '0004 - Formalización', 'Equipo completo'),
(216, 'HP', 'CNN7322GQ3', NULL, '0004 - Formalización', 'Equipo completo'),
(217, 'HP', 'CNN7322G8V', NULL, '0004 - Formalización', 'Equipo completo'),
(218, 'HP', 'CNN7322G8M', NULL, '0004 - Formalización', 'Equipo completo'),
(219, 'HP', 'CNN73106YB', NULL, '0004 - Formalización', 'Equipo completo'),
(220, 'HP', 'CNN73106YF', NULL, '0004 - Formalización', 'Equipo completo'),
(221, 'Dell', 'CN-0KU789-71 ', NULL, '0004 - Formalización', 'Equipo completo'),
(222, 'HP', 'CNN5381BP9 ', NULL, '0004 - Formalización', 'Equipo completo'),
(223, 'HP', 'CNN64105N7 ', NULL, '0004 - Formalización', 'Equipo completo'),
(224, 'HP', 'CNN64106M9 ', NULL, '0004 - Formalización', 'Equipo completo'),
(225, 'HP', 'CNN641048W ', NULL, '0004 - Formalización', 'Equipo completo'),
(226, 'HP', 'CNN73107DD', NULL, '0004 - Formalización', 'Equipo completo'),
(227, 'HP', 'CNN73107pj', NULL, '0004 - Formalización', 'Equipo completo'),
(228, 'HP', 'CNN6420YYH', NULL, '0004 - Formalización', 'Equipo completo'),
(229, 'BENQ', 'ET14G06562019', NULL, '0004 - Formalización', 'Equipo completo'),
(230, 'DELL', 'CN-0KU789-716', NULL, 'Auditoria', 'Equipo incompleto'),
(231, 'HP', 'CNN7322G8J', NULL, 'Auditoria', 'Equipo incompleto'),
(232, 'HP', 'CNN64105W6', NULL, 'Auditoria', 'Equipo incompleto'),
(233, 'HP', 'CNN64105X3', NULL, 'Auditoria', 'Equipo incompleto'),
(234, ' ', ' ', NULL, 'Auditoria', 'Equipo incompleto'),
(235, 'HP', 'CNN73107CS', NULL, 'Auditoria', ' Equipo incompleto'),
(236, 'HP', 'CNN64105WC', NULL, 'Auditoria', 'Equipo incompleto'),
(237, 'HP', 'CNNATM002', NULL, 'Auditoria', 'Equipo incompleto'),
(238, 'HP', 'CNN5381BF7', NULL, 'Auditoria', 'Equipo incompleto'),
(239, 'HP', 'CNN64106PN', NULL, 'Auditoria', 'Equipo completo'),
(240, 'HP', 'CNN7122GQ3', NULL, 'Auditoria', 'Equipo completo'),
(241, 'HP', 'CNN7322G8V', NULL, 'Auditoria', 'Equipo completo'),
(242, 'DELL', 'CN-0PM372-72872-78R-3EGI', NULL, 'Auditoria', 'Equipo completo'),
(243, 'HP', 'CNN641048R', NULL, 'Auditoria', 'Equipo completo'),
(244, 'HP', 'CNN641055P', NULL, 'Auditoria', 'Equipo completo'),
(245, 'HP', 'CNN73107D3', NULL, 'Auditoria', 'Equipo incompleto'),
(246, 'HP', 'CNN5381c16', NULL, 'Auditoria', 'Equipo incompleto sin CPU'),
(247, 'HP', 'CNN7322G7J', NULL, 'Auditoria', 'Equipo incompleto sin CPU'),
(248, 'HP', 'CNN7322G94', NULL, 'Auditoria', 'Equipo incompleto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`uniqueid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `monitor`
--
ALTER TABLE `monitor`
  MODIFY `uniqueid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
