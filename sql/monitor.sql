-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 03:59:55
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
  `area` varchar(50) DEFAULT NULL,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `monitor`
--

INSERT INTO `monitor` (`uniqueid`, `marca_monitor`, `serie_monitor`, `modelo_monitor`, `ubicacion`, `area`, `comentario`) VALUES
(257, 'HP', 'CNN73107D9', NULL, 'Piso', '0002 - Validacion', 'Funcionando al 100'),
(258, 'HP', 'CNN6410484', NULL, 'Piso', '0002 - Validacion', 'Funcionando al 100'),
(259, 'LG', 'PANTALLA LG', NULL, 'Piso', '0002 - Validacion', 'Equipo para pantalla de monitoreo'),
(260, 'HP', 'CNN64104Z4', NULL, 'Piso', '0002 - Validación', 'Equipo completo'),
(261, 'HP', 'CNN5381C1R', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(262, 'HP', 'CNN64106MH', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(263, 'HP', 'CNN64104YR', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(264, 'HP', 'CNN7322GQW', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(265, 'HP', 'CNN64105QZ', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(266, 'HP', 'CNN7107CY', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(267, 'HP', 'CNN5381C2H', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(268, 'HP', 'CNN6410489', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(269, 'HP', 'CNN7322G98', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(270, 'HP', 'CNN7322G9N', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(271, 'HP', 'CNN73107DH', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(272, 'HP', 'CNN64104ZF', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(273, 'HP', 'CNN641048V', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(274, 'HP', 'CNN64105W3', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(275, 'DELL', 'CNOUH572-466', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(276, 'DELL', 'CNN73106YN', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(277, 'DELL', 'CNN73106Y8', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(278, 'HP', 'CNN7322GQ0', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(279, 'HP', 'CNN5381BVZ', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(280, 'HP', 'CNN64106PT ', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(281, 'HP', 'CNN5381BJ7', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(282, '', 'CNN5381BJD', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(283, 'HP', 'CNN7322G8S', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(284, 'HP', 'CNN5381BW1', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(285, 'HP', 'CNN641048N', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(286, 'HP', 'CNN7322G9G', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(287, 'HP', 'CNN7322GQ5', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(288, 'HP', 'CNN ', NULL, 'Piso', '0002 - Validacion', 'Falta agrega numero de serie de monitor'),
(289, 'HP', 'CNN7322G9B', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(290, 'HP', 'CNN64106PQ', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(291, 'HP', 'CNN73107CQ', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(292, 'HP', 'CNN641054Y', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(293, 'HP', 'CNN53819TS', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(294, 'HP', 'CNN5381BVX', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(295, 'HP', 'CNN73107DG', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(296, 'DELL', 'CN-0WH318-72', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(297, 'HP', 'CNN7322Q8Z', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(298, 'HP', 'CNN7322G9H', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(299, 'HP', 'CNN73107CN', NULL, 'Piso', '0002 - Validacion', 'Equipo completo'),
(300, 'HP', 'CNN7322G8R', NULL, 'Piso', 'Centros Externos', 'Equipo completo'),
(301, 'HP', 'CNN64106PN', NULL, 'Piso', '0002 - Validacion', 'Estacion sin CPU'),
(302, 'HP', 'CNN641048T', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(303, 'AOC', '33E5BA004834', NULL, 'Piso', 'Coordinador', 'Equipo completo'),
(304, 'HP', 'CNN6420Z8F', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(305, 'HP', 'CNN5381C04', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(306, 'HP', 'CNN7322GQC', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(307, 'HP', 'CNN7322GR3', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(308, 'HP', 'CNN64104Z6', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo sin CPU'),
(309, 'HP', 'CNN7322GQD', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(310, 'HP', 'CNN64104Z6', NULL, 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(311, 'HP', 'CNN7322GQL', NULL, 'Piso', '0000 - Área libre', 'No prende CPU'),
(312, 'HP', 'CNN6410560', NULL, 'Piso', '0000 - Área libre', ' '),
(313, 'HP', 'CNN7322G9K', NULL, 'Piso', '0000 - Área libre', ' '),
(314, 'HP', 'CNN7322G96', NULL, 'Piso', '0000 - Área libre', ' '),
(315, 'HP', 'CNN64104ZD', NULL, 'Piso', '0000 - Área libre', ' '),
(316, 'HP', 'CNN64104TX', NULL, 'Piso', '0000 - Área libre', ' '),
(317, 'HP', 'CNN6410480', NULL, 'Piso', '0000 - Área libre', ' '),
(318, 'HP', 'CNN64106PX', NULL, 'Piso', '0000 - Área libre', ' '),
(319, 'HP', 'CNN7322GQP', NULL, 'Piso', '0000 - Área libre', ' '),
(320, 'HP', 'CNN7322G8Y', NULL, 'Piso', '0000 - Área libre', ' '),
(321, 'HP', 'CNN7322G8T', NULL, 'Piso', '0000 - Área libre', ' '),
(322, 'HP', 'CNN7322GQ6', NULL, 'Piso', '0000 - Área libre', ' '),
(323, 'HP', 'CNN73107BD', NULL, 'Piso', 'Monitoreo', ' Equipo completo'),
(324, 'HP', 'CNN64105Z1', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(325, 'HP', 'CNN5381C0P', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(326, 'HP', 'CNN7322GQZ', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(327, 'HP', 'CNN73107CZ', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(328, 'HP', 'CNN7322G8H', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(329, 'Laboratorio', 'Laboratorio', NULL, 'Piso', 'Laboratorio', 'Equipo para uso de Laboratorio'),
(330, 'AOC', 'AEUF59AOO3416', NULL, 'Piso', 'Monitoreo-Calidad', 'Equipo completo de Saul Aguilar'),
(331, 'HP', 'CNN64106MN', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(332, 'HP', 'CNN5381C28', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(333, 'HP', 'CNN6410485', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(334, 'HP', 'CNN7322GQ7', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(335, 'HP', 'CNN64106RN', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(336, 'HP', 'CNN7322G92', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(337, 'HP', 'CNN64105RZ', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(338, 'HP', 'CNN64105W2', NULL, 'Piso', 'Monitoreo', 'Equipo completo'),
(339, 'HP', 'CNN7322GQM', NULL, 'Piso', 'Procesos', 'Equipo completo'),
(340, 'HP', 'CNN64212RX', NULL, 'Piso', 'Procesos', 'Equipo completo'),
(341, 'HP', 'CNN64105W9', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(342, 'HP', 'CNN7322G99', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(343, 'HP', 'CNN7322GQ3', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(344, 'HP', 'CNN7322G8V', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(345, 'HP', 'CNN7322G8M', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(346, 'HP', 'CNN73106YB', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(347, 'HP', 'CNN73106YF', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(348, 'Dell', 'CN-0KU789-71 ', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(349, 'HP', 'CNN5381BP9 ', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(350, 'HP', 'CNN64105N7 ', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(351, 'HP', 'CNN64106M9 ', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(352, 'HP', 'CNN641048W ', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(353, 'HP', 'CNN73107DD', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(354, 'HP', 'CNN73107pj', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(355, 'HP', 'CNN6420YYH', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(356, 'BENQ', 'ET14G06562019', NULL, 'Piso', '0004 - Formalización', 'Equipo completo'),
(357, 'DELL', 'CN-0KU789-716', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(358, 'HP', 'CNN7322G8J', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(359, 'HP', 'CNN64105W6', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(360, 'HP', 'CNN64105X3', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(361, ' ', ' ', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(362, 'HP', 'CNN73107CS', NULL, 'Piso', 'Auditoria', ' Equipo incompleto'),
(363, 'HP', 'CNN64105WC', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(364, 'HP', 'CNNATM002', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(365, 'HP', 'CNN5381BF7', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(366, 'HP', 'CNN64106PN', NULL, 'Piso', 'Auditoria', 'Equipo completo'),
(367, 'HP', 'CNN7122GQ3', NULL, 'Piso', 'Auditoria', 'Equipo completo'),
(368, 'HP', 'CNN7322G8V', NULL, 'Piso', 'Auditoria', 'Equipo completo'),
(369, 'DELL', 'CN-0PM372-72872-78R-3EGI', NULL, 'Piso', 'Auditoria', 'Equipo completo'),
(370, 'HP', 'CNN641048R', NULL, 'Piso', 'Auditoria', 'Equipo completo'),
(371, 'HP', 'CNN641055P', NULL, 'Piso', 'Auditoria', 'Equipo completo'),
(372, 'HP', 'CNN73107D3', NULL, 'Piso', 'Auditoria', 'Equipo incompleto'),
(373, 'HP', 'CNN5381c16', NULL, 'Piso', 'Auditoria', 'Equipo incompleto sin CPU'),
(374, 'HP', 'CNN7322G7J', NULL, 'Piso', 'Auditoria', 'Equipo incompleto sin CPU'),
(375, 'HP', 'CNN7322G94', NULL, 'Piso', 'Almacen', 'Equipo incompleto');

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
  MODIFY `uniqueid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
