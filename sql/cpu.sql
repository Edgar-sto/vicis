-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 03:59:43
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
-- Estructura de tabla para la tabla `cpu`
--

CREATE TABLE `cpu` (
  `uniqueid` int(250) NOT NULL,
  `marca_cpu` varchar(50) NOT NULL,
  `serie_cpu` varchar(50) NOT NULL,
  `modelo_cpu` varchar(50) NOT NULL,
  `mac_address` varchar(25) DEFAULT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cpu`
--

INSERT INTO `cpu` (`uniqueid`, `marca_cpu`, `serie_cpu`, `modelo_cpu`, `mac_address`, `ubicacion`, `area`, `comentario`) VALUES
(260, 'HP', 'MXJ73801R1', 'DC5800', '00:1B:78:B3:B7:72', 'Piso', '0002 - Validacion', 'Funcionando al 100'),
(261, 'HP', 'MXJ7370C2L', 'DC5750', '00:24:E8:0C:A4:95', 'Piso', '0002 - Validacion', 'Funcionando al 100'),
(262, 'GHIA', '183684', 'PCGHIA-1496', 'EC:A8:6B:D0:51:FA', 'Piso', '0002 - Validacion', 'Equipo para pantalla de monitoreo'),
(263, 'HP', 'MXJ84908Y6', 'DC5800', '00:23:7D:13:9C:55', 'Piso', '0002 - Validación', 'Equipo completo'),
(264, 'HP', 'MXJ8200BBV', 'DC5800', '00:1F:29:47:02:79', 'Piso', '0002 - Validacion', 'Equipo completo'),
(265, 'HP', 'MXJ74403G4', 'DC5700', '00:1C:C4:19:D7:68', 'Piso', '0002 - Validacion', 'Equipo completo'),
(266, 'HP', 'MXJ81109DT', 'DC5700', '00:1E:0B:3B:32:3B', 'Piso', '0002 - Validacion', 'Equipo completo'),
(267, 'HP', 'MXJ91005XP', 'DC5800', '00:23:7D:B8:1B:66', 'Piso', '0002 - Validacion', 'Equipo completo'),
(268, 'HP', 'MXJ74403CJ', 'DC5700', '00:1C:C4:19:D5:24\r\n', 'Piso', '0002 - Validacion', 'Equipo completo'),
(269, 'HP', 'MXJ849094M', 'DC5800', '00:23:7D:12:E8:EC', 'Piso', '0002 - Validacion', 'Equipo completo'),
(270, 'HP', 'MXJ7460CHD', 'DC5760', '00:1A:EF:1E:92:BE\r\n', 'Piso', '0002 - Validacion', 'Equipo completo'),
(271, 'DELL', '1Z461D1', 'Optiplex 745', '00:1A:A0:45:3B:FB', 'Piso', '0002 - Validacion', 'Equipo completo'),
(272, 'DELL', '3ZN2KQ1', 'Optiplex 790', '78:2B:CB:AD:84:55', 'Piso', '0002 - Validacion', 'Equipo completo'),
(273, 'HP', 'MXJ7370C42', 'DC5750', '00:1B:78:B7:53:1D', 'Piso', '0002 - Validacion', 'Equipo completo'),
(274, 'HP', 'MXJ7370C2V', 'DC5750', '00:1B:78:B7:47:4C', 'Piso', '0002 - Validacion', 'Equipo completo'),
(275, 'HP', 'MXJ6490D6N', 'DC5750', '00:18:FE:6E:63:86', 'Piso', '0002 - Validacion', 'Equipo completo'),
(276, 'HP', 'MXJ7370C36', 'DC5750', '00:1B:78:B7:51:7B', 'Piso', '0002 - Validacion', 'Equipo completo'),
(277, 'HP', 'MXJ7370C5L', 'DC5750', '00:1B:78:B7:45:71', 'Piso', '0002 - Validacion', 'Equipo completo'),
(278, 'HP', 'MXJ7370C3Q', 'DC5750', '00:1B:78:B7:51:7B', 'Piso', '0002 - Validacion', 'Equipo completo'),
(279, 'DELL', 'B6JHKH1', 'Optiplex 755', '00:21:70:47:FF:2A', 'Piso', '0002 - Validacion', 'Equipo completo'),
(280, 'HP', 'MXJ7370C35', 'DC5750', '00:1B:78:B7:52:1C', 'Piso', '0002 - Validacion', 'Equipo completo'),
(281, 'HP', 'MXJ6490D7Y', 'DC5750', '00:18:FE:6E:94:A1', 'Piso', '0002 - Validacion', 'Equipo completo'),
(282, 'DELL', 'CZM2KD1', 'Optiplex 745', '00:1A:A0:56:25:A8', 'Piso', '0002 - Validacion', 'Equipo completo'),
(283, 'HP', 'MXJ7370C45', 'DC5750', '00:1B:78:B7:53:08', 'Piso', '0002 - Validacion', 'Equipo completo'),
(284, 'HP', 'MXJ6490D77', 'DC5750', '00:18:FE:6E:62:BA', 'Piso', '0002 - Validacion', 'Equipo completo'),
(285, 'HP', 'MXJ83509GB', 'DC5800', '00:21:54:77:C8:DF', 'Piso', '0002 - Validacion', 'Equipo completo'),
(286, 'HP', 'MXJ7370C4R', 'DC5750', '00:1B:78:B7:54:51', 'Piso', '0002 - Validacion', 'Equipo completo'),
(287, 'HP', 'MXJ7370C3G', 'DC5750', '00:1B:78:B7:45:85', 'Piso', '0002 - Validacion', 'Equipo completo'),
(288, 'HP', 'MXJ6490D6K', 'DC5750', '00:18:FE:6E:63:B1', 'Piso', '0002 - Validacion', 'Equipo completo'),
(289, 'HP', 'MXJ6490D6X', 'DC5750', '00:18:FE:6E:D6:86', 'Piso', '0002 - Validacion', 'Equipo completo'),
(290, 'HP', 'MXJ83417X7', 'DC7800', '00:21:5A:68:9A:C6', 'Piso', '0002 - Validacion', 'Equipo completo'),
(291, 'HP', '2UA8340V1N', 'DC5750', '00:21:5A:C0:A8:9A', 'Piso', '0002 - Validacion', 'Falta agrega numero de serie de monitor'),
(292, 'HP', 'MXJ7370C5B', 'DC5750', '00:1B:78:B7:45:46', 'Piso', '0002 - Validacion', 'Equipo completo'),
(293, 'HP', 'MXJ6490D5W', 'DC5750', '00:18:FE:6E:A0:D8', 'Piso', '0002 - Validacion', 'Equipo completo'),
(294, 'HP', 'MXJ7370C2Z', 'DC5750', '00:1B:78:B7:53:48', 'Piso', '0002 - Validacion', 'Equipo completo'),
(295, 'HP', 'MXJ7370C3Z', 'DC5750', '00:1B:78:B7:47:28', 'Piso', '0002 - Validacion', 'Equipo completo'),
(296, 'HP', 'MXJ802056J', 'DC5750', '00:1C:C4:8E:79:D9', 'Piso', '0002 - Validacion', 'Equipo completo'),
(297, 'HP', 'MXJ7370C52', 'DC5750', '00:1B:78:B7:46:A6', 'Piso', '0002 - Validacion', 'Equipo completo'),
(298, 'HP', 'MXJ7370C27', 'DC5750', '00:1B:78:B7:44:79', 'Piso', '0002 - Validacion', 'Equipo completo'),
(299, 'HP', 'MXJ7370C4G', 'DC5750', '00:1B:78:B7:44:F2', 'Piso', '0002 - Validacion', 'Equipo completo'),
(300, 'HP', 'MXJ6490D5K', 'DC5750', '00:18:FE:6E:9D:23', 'Piso', '0002 - Validacion', 'Equipo completo'),
(301, 'DELL', '871NPJ1', 'Optiplex 760', '00:24:E8:04:4B:53', 'Piso', '0002 - Validacion', 'Equipo completo'),
(302, 'HP', 'MXJ7370C2R', 'DC5750', '00:1B:78:B7:43:E0', 'Piso', '0002 - Validacion', 'Equipo completo'),
(303, 'DELL', '3ZX1K01', 'Optiplex 790', '', 'Piso', 'Centros Externos', 'Equipo completo'),
(305, 'DELL', '3Y2ZJQ1', 'Optiplex 790', '78:2B:CB:AD:0D:4D\r\n', 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(306, 'DELL', '3Z0YJQ1', 'Optiplex 790', '78:2B:CB:AD:8E:79\r\n', 'Piso', 'Coordinador', 'Equipo completo'),
(307, 'DELL', '9BVQDF1', 'Optiplex 745', '00:1A:A0:73:94:2B', 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(308, 'DELL', '3XYZJQ1', 'Optiplex 790', '78:2B:CB:AD:86:50\r\n', 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(309, 'DELL', '3ZWZJQ1', 'Optiplex 790', '78:2B:CB:AD:72:33\r\n', 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(310, 'DELL', '3ZL1KQ1', 'Optiplex 790', '', 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(312, 'DELL', '3ZS0KQ1', 'Optiplex 790', '', 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(313, 'DELL', 'BHM5YG1', 'Optiplex 755', '', 'Piso', '0006 - Validacion Invex', 'Equipo completo'),
(314, 'DELL', '66JZZQ1', 'Optiplex 790', '', 'Piso', '0000 - Área libre', 'No prende CPU'),
(315, 'HP', 'MXJ7370C4F', 'DC5750', '', 'Piso', '0000 - Área libre', ' '),
(316, 'DELL', '2HBWQB1', 'Optiplex 650', '', 'Piso', '0000 - Área libre', ' '),
(317, 'HP', 'MXJ6490D6R', 'DC5750', '00:18:FE:6E:9C:30\r\n', 'Piso', '0000 - Área libre', ' '),
(318, 'DELL', 'GPB0JF1', 'Optiplex 755', '', 'Piso', '0000 - Área libre', ' '),
(319, 'HP', 'MXJ7370C3W', 'DC5750', '00:1B:78:B7:3A:00', 'Piso', '0000 - Área libre', ' '),
(320, 'HP', 'MXJ7370C2H', 'DC5750', '00:1B:78:B7:56:12\r\n', 'Piso', '0000 - Área libre', ' '),
(321, 'HP', 'MXJ6490D9M', 'DC5750', '', 'Piso', '0000 - Área libre', ' '),
(322, 'HP', 'MXJ6490D64', 'DC5750', '', 'Piso', '0000 - Área libre', ' '),
(323, 'HP', 'MXJ6490D6W', 'DC5750', '', 'Piso', '0000 - Área libre', ' '),
(324, 'DELL', 'FDWHZC1', 'Optiplex 755', '', 'Piso', '0000 - Área libre', ' '),
(325, 'HP', 'MXJ6490D68', 'DC5750', '00:18:FE:6E:96:E1\r\n', 'Piso', '0000 - Área libre', ' '),
(326, 'HP', '6354JH1', 'DC5750', '00:21:70:38:8C:0A', 'Piso', 'Monitoreo', ' Equipo completo'),
(327, 'HP', 'MXJ6490D6Z', 'DC5750', '00:18:FE:6E:D8:2D', 'Piso', 'Monitoreo', 'Equipo completo'),
(328, 'HP', 'MXJ6490D72', 'DC5750', '00:18:FE:6E:97:3', 'Piso', 'Monitoreo', 'Equipo completo'),
(329, 'DELL', 'DS7LQJ1', 'Optiplex 755', '00:21:70:5B:27:DC', 'Piso', 'Monitoreo', 'Equipo completo'),
(330, 'DELL', 'H60PPJ1', 'Optiplex 760', '00:24:E8:4:8A:9A', 'Piso', 'Monitoreo', 'Equipo completo'),
(331, 'HP', 'MXJ6490BBN', 'DC5750', '00:18:FE:6E:ED:93\r\n', 'Piso', 'Monitoreo', 'Equipo completo'),
(332, 'DELL', 'Laboratorio', 'Laboratorio', '', 'Piso', 'Laboratorio', 'Equipo para uso de Laboratorio'),
(333, 'GHIA', '341539', 'PC-GHIA-2378', '', 'Piso', 'Monitoreo-Calidad', 'Equipo completo de Saul Aguilar'),
(334, 'DELL', '359R5J1', 'Optiplex 760', '00:21:70:1F:A1:57', 'Piso', 'Monitoreo', 'Equipo completo'),
(335, 'DELL', '9B1G7D1', 'Optiplex 745', '', 'Piso', 'Monitoreo', 'Equipo completo'),
(336, 'HP', 'MXJ7370C41', 'DC5750', '00:1B:78:B7:53:0F\r\n', 'Piso', 'Monitoreo', 'Equipo completo'),
(337, 'DELL', '28TK5J1', 'Optiplex 760', '00:24:E8:0C:A4:95', 'Piso', 'Monitoreo', 'Equipo completo'),
(338, 'DELL', '48DR8F1', 'Optiplex 755', '00:1A:A0:7A:67:8E\r\n', 'Piso', 'Monitoreo', 'Equipo completo'),
(339, 'DELL', 'HS4TMG1', 'Optiplex 755', '', 'Piso', 'Monitoreo', 'Equipo completo'),
(340, 'HP', 'MXJ7460CJC', 'DC5750', '', 'Piso', 'Monitoreo', 'Equipo completo'),
(341, 'DELL', 'H9DR8F1', 'Optiplex 745', '00:1A:A0:7A:8B:C8\r\n', 'Piso', 'Monitoreo', 'Equipo completo'),
(342, 'HP', 'MXL1400RM9', '4000', '3C:D9:2B:75:0E:7E', 'Piso', 'Procesos', 'Equipo completo'),
(343, 'DELL', 'D75GWD1', 'Optiplex 755', '00:1A:A0:66:9F:0B', 'Piso', 'Procesos', 'Equipo completo'),
(344, 'DELL', 'C5J3FD1', 'Optiplex 745', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(345, 'DELL', '7WQFWG1', 'Optiplex 755', '00:21:70:25:23:14', 'Piso', '0004 - Formalización', 'Equipo completo'),
(346, 'DELL', 'C9PY2F1', 'Optiplex 745', '00:1A:A0:75:50:1B', 'Piso', '0004 - Formalización', 'Equipo completo'),
(347, 'DELL', 'D10SZD1', 'Optiplex 745', '00:1A:A0:6F:82:9A\r\n', 'Piso', '0004 - Formalización', 'Equipo completo'),
(348, 'HP', 'MXJ7370C3Y', 'DC5750', '00:1B:78:B7:45:C1', 'Piso', '0004 - Formalización', 'Equipo completo'),
(349, 'HP', 'C4N8GF1', 'DC5750', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(350, 'DELL', '8S8WJK1', 'Optiplex 700', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(351, 'DELL', '67LZDD1', 'Optiplex 745', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(352, 'GHIA', '184093', 'PCGHIA-1496', 'EC:A8:6B:D0:55:1D', 'Piso', '0004 - Formalización', 'Equipo completo'),
(353, 'HP', 'MXJ6490DX7', 'DC5750', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(354, 'HP', 'MXJ7370C31', 'DC5750', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(355, 'HP', 'MXJ7370C24', 'DC5750', '00:1B:78:B7:3C:0B', 'Piso', '0004 - Formalización', 'Equipo completo'),
(356, 'HP', 'MXJ6490D65', 'DC5750', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(357, 'DELL', '99PG4K1', 'Optiplex 760', '00:24:E8:12:70:C7\r\n', 'Piso', '0004 - Formalización', 'Equipo completo'),
(359, 'HP', '2UA9480BN0', '6000', '', 'Piso', '0004 - Formalización', 'Equipo completo'),
(361, 'DELL', 'BCLV0G1', 'Optiplex 755', '', 'Piso', 'Auditoria', 'Equipo incompleto'),
(362, 'DELL', '176PPJ1', 'Optiplex 745', '00:21:70:5A:1B:09', 'Piso', 'Auditoria', 'Equipo incompleto'),
(363, 'HP', 'MXJ6490D7N', 'DC5750', '', 'Piso', 'Auditoria', 'Equipo incompleto'),
(365, 'HP', 'MXJ7370C33', 'DC5750', '00:1B:78:B7:48:55\r\n', 'Piso', 'Auditoria', ' Equipo incompleto'),
(367, 'GHIA', '177374', 'PCGHIA-1496', '', 'Piso', 'Auditoria', 'Equipo incompleto'),
(368, 'HP', 'MXJ6490D63', 'DC5750', '00:18:FE:6E:9E:02\r\n', 'Piso', 'Auditoria', 'Equipo incompleto'),
(369, 'DELL', '3ZXRJQ1', 'Optiplex-790', '78:2B:CB:AD:C0:79\r\n', 'Piso', 'Auditoria', 'Equipo completo'),
(370, 'DELL', '9VD3RG1', 'Optiplex-750', '78:2B:CB:AD:0D:6C\r\n', 'Piso', 'Auditoria', 'Equipo completo'),
(371, 'DELL', 'J98SDG1', 'Optiplex-755', '00:21:70:0:6C:7A\r\n', 'Piso', 'Auditoria', 'Equipo completo'),
(372, 'DELL', 'FTL4ZH1', 'Optiplex-755', '00:21:70:53:FB:CA', 'Piso', 'Auditoria', 'Equipo completo'),
(373, 'DELL', '4R0BKH1', 'Optiplex-755', '00:21:70:47:36:E0', 'Piso', 'Auditoria', 'Equipo completo'),
(374, 'DELL', '66JZZQ1', 'Optiplex-790', '', 'Piso', 'Auditoria', 'Equipo completo'),
(375, 'HP', 'MXJ6490D79', 'DC5700', '', 'Piso', 'Auditoria', 'Equipo incompleto'),
(378, 'HP', 'F7D4KH1', 'DCNE', '00:21:9B:68:65:69\r\n', 'Piso', 'Almacen', 'Equipo incompleto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`uniqueid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cpu`
--
ALTER TABLE `cpu`
  MODIFY `uniqueid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
