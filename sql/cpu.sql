-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2020 a las 08:21:17
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
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cpu`
--

INSERT INTO `cpu` (`uniqueid`, `marca_cpu`, `serie_cpu`, `modelo_cpu`, `mac_address`, `ubicacion`, `comentario`) VALUES
(131, 'HP', 'MXJ73801R1', 'DC5800', '00:1B:78:B3:B7:72', '0002 - Validacion', 'Funcionando al 100'),
(132, 'HP', 'MXJ7370C2L', 'DC5750', '00:24:E8:0C:A4:95', '0002 - Validacion', 'Funcionando al 100'),
(133, 'GHIA', '183684', 'PCGHIA-1496', 'EC:A8:6B:D0:51:FA', '0002 - Validacion', 'Equipo para pantalla de monitoreo'),
(134, 'HP', 'MXJ84908Y6', 'DC5800', '00:23:7D:13:9C:55', '0002 - Validación', 'Equipo completo'),
(135, 'HP', 'MXJ8200BBV', 'DC5800', '00:1F:29:47:02:79', '0002 - Validacion', 'Equipo completo'),
(136, 'HP', 'MXJ74403G4', 'DC5700', '00:1C:C4:19:D7:68', '0002 - Validacion', 'Equipo completo'),
(137, 'HP', 'MXJ81109DT', 'DC5700', '00:1E:0B:3B:32:3B', '0002 - Validacion', 'Equipo completo'),
(138, 'HP', 'MXJ91005XP', 'DC5800', '00:23:7D:B8:1B:66', '0002 - Validacion', 'Equipo completo'),
(139, 'HP', 'MXJ74403CJ', 'DC5700', '00:1C:C4:19:D5:24\r\n', '0002 - Validacion', 'Equipo completo'),
(140, 'HP', 'MXJ849094M', 'DC5800', '00:23:7D:12:E8:EC', '0002 - Validacion', 'Equipo completo'),
(141, 'HP', 'MXJ7460CHD', 'DC5760', '00:1A:EF:1E:92:BE\r\n', '0002 - Validacion', 'Equipo completo'),
(142, 'DELL', '1Z461D1', 'Optiplex 745', '00:1A:A0:45:3B:FB', '0002 - Validacion', 'Equipo completo'),
(143, 'DELL', '3ZN2KQ1', 'Optiplex 790', '78:2B:CB:AD:84:55', '0002 - Validacion', 'Equipo completo'),
(144, 'HP', 'MXJ7370C42', 'DC5750', '00:1B:78:B7:53:1D', '0002 - Validacion', 'Equipo completo'),
(145, 'HP', 'MXJ7370C2V', 'DC5750', '00:1B:78:B7:47:4C', '0002 - Validacion', 'Equipo completo'),
(146, 'HP', 'MXJ6490D6N', 'DC5750', '00:18:FE:6E:63:86', '0002 - Validacion', 'Equipo completo'),
(147, 'HP', 'MXJ7370C36', 'DC5750', '00:1B:78:B7:51:7B', '0002 - Validacion', 'Equipo completo'),
(148, 'HP', 'MXJ7370C5L', 'DC5750', '00:1B:78:B7:45:71', '0002 - Validacion', 'Equipo completo'),
(149, 'HP', 'MXJ7370C3Q', 'DC5750', '00:1B:78:B7:51:7B', '0002 - Validacion', 'Equipo completo'),
(150, 'DELL', 'B6JHKH1', 'Optiplex 755', '00:21:70:47:FF:2A', '0002 - Validacion', 'Equipo completo'),
(151, 'HP', 'MXJ7370C35', 'DC5750', '00:1B:78:B7:52:1C', '0002 - Validacion', 'Equipo completo'),
(152, 'HP', 'MXJ6490D7Y', 'DC5750', '00:18:FE:6E:94:A1', '0002 - Validacion', 'Equipo completo'),
(153, 'DELL', 'CZM2KD1', 'Optiplex 745', '00:1A:A0:56:25:A8', '0002 - Validacion', 'Equipo completo'),
(154, 'HP', 'MXJ7370C45', 'DC5750', '00:1B:78:B7:53:08', '0002 - Validacion', 'Equipo completo'),
(155, 'HP', 'MXJ6490D77', 'DC5750', '00:18:FE:6E:62:BA', '0002 - Validacion', 'Equipo completo'),
(156, 'HP', 'MXJ83509GB', 'DC5800', '00:21:54:77:C8:DF', '0002 - Validacion', 'Equipo completo'),
(157, 'HP', 'MXJ7370C4R', 'DC5750', '00:1B:78:B7:54:51', '0002 - Validacion', 'Equipo completo'),
(158, 'HP', 'MXJ7370C3G', 'DC5750', '00:1B:78:B7:45:85', '0002 - Validacion', 'Equipo completo'),
(159, 'HP', 'MXJ6490D6K', 'DC5750', '00:18:FE:6E:63:B1', '0002 - Validacion', 'Equipo completo'),
(160, 'HP', 'MXJ6490D6X', 'DC5750', '00:18:FE:6E:D6:86', '0002 - Validacion', 'Equipo completo'),
(161, 'HP', 'MXJ83417X7', 'DC7800', '00:21:5A:68:9A:C6', '0002 - Validacion', 'Equipo completo'),
(162, 'HP', '2UA8340V1N', 'DC5750', '00:21:5A:C0:A8:9A', '0002 - Validacion', 'Falta agrega numero de serie de monitor'),
(163, 'HP', 'MXJ7370C5B', 'DC5750', '00:1B:78:B7:45:46', '0002 - Validacion', 'Equipo completo'),
(164, 'HP', 'MXJ6490D5W', 'DC5750', '00:18:FE:6E:A0:D8', '0002 - Validacion', 'Equipo completo'),
(165, 'HP', 'MXJ7370C2Z', 'DC5750', '00:1B:78:B7:53:48', '0002 - Validacion', 'Equipo completo'),
(166, 'HP', 'MXJ7370C3Z', 'DC5750', '00:1B:78:B7:47:28', '0002 - Validacion', 'Equipo completo'),
(167, 'HP', 'MXJ802056J', 'DC5750', '00:1C:C4:8E:79:D9', '0002 - Validacion', 'Equipo completo'),
(168, 'HP', 'MXJ7370C52', 'DC5750', '00:1B:78:B7:46:A6', '0002 - Validacion', 'Equipo completo'),
(169, 'HP', 'MXJ7370C27', 'DC5750', '00:1B:78:B7:44:79', '0002 - Validacion', 'Equipo completo'),
(170, 'HP', 'MXJ7370C4G', 'DC5750', '00:1B:78:B7:44:F2', '0002 - Validacion', 'Equipo completo'),
(171, 'HP', 'MXJ6490D5K', 'DC5750', '00:18:FE:6E:9D:23', '0002 - Validacion', 'Equipo completo'),
(172, 'DELL', '871NPJ1', 'Optiplex 760', '00:24:E8:04:4B:53', '0002 - Validacion', 'Equipo completo'),
(173, 'HP', 'MXJ7370C2R', 'DC5750', '00:1B:78:B7:43:E0', '0002 - Validacion', 'Equipo completo'),
(174, 'DELL', '3ZX1K01', 'Optiplex 790', '', 'Centros Externos', 'Equipo completo'),
(175, '', ' ', ' ', '', '0002 - Validacion', 'Estacion sin CPU'),
(176, 'DELL', '3Y2ZJQ1', 'Optiplex 790', '78:2B:CB:AD:0D:4D\r\n', '0006 - Validacion Invex', 'Equipo completo'),
(177, 'DELL', '3Z0YJQ1', 'Optiplex 790', '78:2B:CB:AD:8E:79\r\n', 'Coordinador', 'Equipo completo'),
(178, 'DELL', '9BVQDF1', 'Optiplex 745', '00:1A:A0:73:94:2B', '0006 - Validacion Invex', 'Equipo completo'),
(179, 'DELL', '3XYZJQ1', 'Optiplex 790', '78:2B:CB:AD:86:50\r\n', '0006 - Validacion Invex', 'Equipo completo'),
(180, 'DELL', '3ZWZJQ1', 'Optiplex 790', '78:2B:CB:AD:72:33\r\n', '0006 - Validacion Invex', 'Equipo completo'),
(181, 'DELL', '3ZL1KQ1', 'Optiplex 790', '', '0006 - Validacion Invex', 'Equipo completo'),
(182, '', ' ', ' ', '', '0006 - Validacion Invex', 'Equipo sin CPU'),
(183, 'DELL', '3ZS0KQ1', 'Optiplex 790', '', '0006 - Validacion Invex', 'Equipo completo'),
(184, 'DELL', 'BHM5YG1', 'Optiplex 755', '', '0006 - Validacion Invex', 'Equipo completo'),
(185, 'DELL', '66JZZQ1', 'Optiplex 790', '', '0000 - Área libre', 'No prende CPU'),
(186, 'HP', 'MXJ7370C4F', 'DC5750', '', '0000 - Área libre', ' '),
(187, 'DELL', '2HBWQB1', 'Optiplex 650', '', '0000 - Área libre', ' '),
(188, 'HP', 'MXJ6490D6R', 'DC5750', '00:18:FE:6E:9C:30\r\n', '0000 - Área libre', ' '),
(189, 'DELL', 'GPB0JF1', 'Optiplex 755', '', '0000 - Área libre', ' '),
(190, 'HP', 'MXJ7370C3W', 'DC5750', '00:1B:78:B7:3A:00', '0000 - Área libre', ' '),
(191, 'HP', 'MXJ7370C2H', 'DC5750', '00:1B:78:B7:56:12\r\n', '0000 - Área libre', ' '),
(192, 'HP', 'MXJ6490D9M', 'DC5750', '', '0000 - Área libre', ' '),
(193, 'HP', 'MXJ6490D64', 'DC5750', '', '0000 - Área libre', ' '),
(194, 'HP', 'MXJ6490D6W', 'DC5750', '', '0000 - Área libre', ' '),
(195, 'DELL', 'FDWHZC1', 'Optiplex 755', '', '0000 - Área libre', ' '),
(196, 'HP', 'MXJ6490D68', 'DC5750', '00:18:FE:6E:96:E1\r\n', '0000 - Área libre', ' '),
(197, 'HP', '6354JH1', 'DC5750', '00:21:70:38:8C:0A', 'Monitoreo', ' Equipo completo'),
(198, 'HP', 'MXJ6490D6Z', 'DC5750', '00:18:FE:6E:D8:2D', 'Monitoreo', 'Equipo completo'),
(199, 'HP', 'MXJ6490D72', 'DC5750', '00:18:FE:6E:97:3', 'Monitoreo', 'Equipo completo'),
(200, 'DELL', 'DS7LQJ1', 'Optiplex 755', '00:21:70:5B:27:DC', 'Monitoreo', 'Equipo completo'),
(201, 'DELL', 'H60PPJ1', 'Optiplex 760', '00:24:E8:4:8A:9A', 'Monitoreo', 'Equipo completo'),
(202, 'HP', 'MXJ6490BBN', 'DC5750', '00:18:FE:6E:ED:93\r\n', 'Monitoreo', 'Equipo completo'),
(203, 'DELL', 'Laboratorio', 'Laboratorio', '', 'Laboratorio', 'Equipo para uso de Laboratorio'),
(204, 'GHIA', '341539', 'PC-GHIA-2378', '', 'Monitoreo-Calidad', 'Equipo completo de Saul Aguilar'),
(205, 'DELL', '359R5J1', 'Optiplex 760', '00:21:70:1F:A1:57', 'Monitoreo', 'Equipo completo'),
(206, 'DELL', '9B1G7D1', 'Optiplex 745', '', 'Monitoreo', 'Equipo completo'),
(207, 'HP', 'MXJ7370C41', 'DC5750', '00:1B:78:B7:53:0F\r\n', 'Monitoreo', 'Equipo completo'),
(208, 'DELL', '28TK5J1', 'Optiplex 760', '00:24:E8:0C:A4:95', 'Monitoreo', 'Equipo completo'),
(209, 'DELL', '48DR8F1', 'Optiplex 755', '00:1A:A0:7A:67:8E\r\n', 'Monitoreo', 'Equipo completo'),
(210, 'DELL', 'HS4TMG1', 'Optiplex 755', '', 'Monitoreo', 'Equipo completo'),
(211, 'HP', 'MXJ7460CJC', 'DC5750', '', 'Monitoreo', 'Equipo completo'),
(212, 'DELL', 'H9DR8F1', 'Optiplex 745', '00:1A:A0:7A:8B:C8\r\n', 'Monitoreo', 'Equipo completo'),
(213, 'HP', 'MXL1400RM9', '4000', '3C:D9:2B:75:0E:7E', 'Procesos', 'Equipo completo'),
(214, 'DELL', 'D75GWD1', 'Optiplex 755', '00:1A:A0:66:9F:0B', 'Procesos', 'Equipo completo'),
(215, 'DELL', 'C5J3FD1', 'Optiplex 745', '', '0004 - Formalización', 'Equipo completo'),
(216, 'DELL', '7WQFWG1', 'Optiplex 755', '00:21:70:25:23:14', '0004 - Formalización', 'Equipo completo'),
(217, 'DELL', 'C9PY2F1', 'Optiplex 745', '00:1A:A0:75:50:1B', '0004 - Formalización', 'Equipo completo'),
(218, 'DELL', 'D10SZD1', 'Optiplex 745', '00:1A:A0:6F:82:9A\r\n', '0004 - Formalización', 'Equipo completo'),
(219, 'HP', 'MXJ7370C3Y', 'DC5750', '00:1B:78:B7:45:C1', '0004 - Formalización', 'Equipo completo'),
(220, 'HP', 'C4N8GF1', 'DC5750', '', '0004 - Formalización', 'Equipo completo'),
(221, 'DELL', '8S8WJK1', 'Optiplex 700', '', '0004 - Formalización', 'Equipo completo'),
(222, 'DELL', '67LZDD1', 'Optiplex 745', '', '0004 - Formalización', 'Equipo completo'),
(223, 'GHIA', '184093', 'PCGHIA-1496', 'EC:A8:6B:D0:55:1D', '0004 - Formalización', 'Equipo completo'),
(224, 'HP', 'MXJ6490DX7', 'DC5750', '', '0004 - Formalización', 'Equipo completo'),
(225, 'HP', 'MXJ7370C31', 'DC5750', '', '0004 - Formalización', 'Equipo completo'),
(226, 'HP', 'MXJ7370C24', 'DC5750', '00:1B:78:B7:3C:0B', '0004 - Formalización', 'Equipo completo'),
(227, 'HP', 'MXJ6490D65', 'DC5750', '', '0004 - Formalización', 'Equipo completo'),
(228, 'DELL', '99PG4K1', 'Optiplex 760', '00:24:E8:12:70:C7\r\n', '0004 - Formalización', 'Equipo completo'),
(229, '', ' ', ' ', '', '0004 - Formalización', 'Equipo completo'),
(230, 'HP', '2UA9480BN0', '6000', '', '0004 - Formalización', 'Equipo completo'),
(231, '', ' ', ' ', '', 'Auditoria', 'Equipo incompleto'),
(232, 'DELL', 'BCLV0G1', 'Optiplex 755', '', 'Auditoria', 'Equipo incompleto'),
(233, 'DELL', '176PPJ1', 'Optiplex 745', '00:21:70:5A:1B:09', 'Auditoria', 'Equipo incompleto'),
(234, 'HP', 'MXJ6490D7N', 'DC5750', '', 'Auditoria', 'Equipo incompleto'),
(235, '', ' ', ' ', '', 'Auditoria', 'Equipo incompleto'),
(236, 'HP', 'MXJ7370C33', 'DC5750', '00:1B:78:B7:48:55\r\n', 'Auditoria', ' Equipo incompleto'),
(237, '', ' ', ' ', '', 'Auditoria', 'Equipo incompleto'),
(238, 'GHIA', '177374', 'PCGHIA-1496', '', 'Auditoria', 'Equipo incompleto'),
(239, 'HP', 'MXJ6490D63', 'DC5750', '00:18:FE:6E:9E:02\r\n', 'Auditoria', 'Equipo incompleto'),
(240, 'DELL', '3ZXRJQ1', 'Optiplex-790', '78:2B:CB:AD:C0:79\r\n', 'Auditoria', 'Equipo completo'),
(241, 'DELL', '9VD3RG1', 'Optiplex-750', '78:2B:CB:AD:0D:6C\r\n', 'Auditoria', 'Equipo completo'),
(242, 'DELL', 'J98SDG1', 'Optiplex-755', '00:21:70:0:6C:7A\r\n', 'Auditoria', 'Equipo completo'),
(243, 'DELL', 'FTL4ZH1', 'Optiplex-755', '00:21:70:53:FB:CA', 'Auditoria', 'Equipo completo'),
(244, 'DELL', '4R0BKH1', 'Optiplex-755', '00:21:70:47:36:E0', 'Auditoria', 'Equipo completo'),
(245, 'DELL', '66JZZQ1', 'Optiplex-790', '', 'Auditoria', 'Equipo completo'),
(246, 'HP', 'MXJ6490D79', 'DC5700', '', 'Auditoria', 'Equipo incompleto'),
(247, '', ' ', ' ', '', 'Auditoria', 'Equipo incompleto sin CPU'),
(248, '', ' ', ' ', '', 'Auditoria', 'Equipo incompleto sin CPU'),
(249, 'HP', 'F7D4KH1', 'DCNE', '00:21:9B:68:65:69\r\n', 'Auditoria', 'Equipo incompleto');

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
  MODIFY `uniqueid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
