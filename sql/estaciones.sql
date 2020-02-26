-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2020 a las 03:56:25
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
  `mac_address` varchar(25) NOT NULL,
  `serie_cpu` varchar(50) NOT NULL,
  `modelo_cpu` varchar(20) NOT NULL,
  `marca_cpu` varchar(50) NOT NULL,
  `serie_monitor` varchar(50) NOT NULL,
  `marca_monito` varchar(20) NOT NULL,
  `campania` varchar(50) NOT NULL,
  `mouse` int(3) NOT NULL DEFAULT 0,
  `teclado` int(3) NOT NULL DEFAULT 0,
  `diadema` int(3) NOT NULL DEFAULT 0,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`uniqueid`, `num_estacion`, `local_host`, `mac_address`, `serie_cpu`, `modelo_cpu`, `marca_cpu`, `serie_monitor`, `marca_monito`, `campania`, `mouse`, `teclado`, `diadema`, `comentario`) VALUES
(1, 'Estacion 001', 'EST-LAZ-001', '00:1B:78:B3:B7:72', 'MXJ73801R1', 'HP', 'HP', 'CNN73107D9', 'HP', '0002 - Validacion', 1, 1, 1, 'Funcionando al 100'),
(2, 'Estacion 002', 'EST-LAZ-002', '00:24:E8:0C:A4:95', '28TK5J1', 'Optiplex 760', 'DELL', 'CNN6410484', 'HP', '0002 - Validacion', 1, 1, 1, 'Funcionando al 100'),
(3, 'Estacion 003', 'EST-LAZ-003', 'EC:A8:6B:D0:51:FA', '183684', 'PCGHIA-1496', 'GHIA', 'PANTALLA LG', 'LG', '0002 - Validacion', 1, 1, 0, 'Equipo para pantalla de monitoreo'),
(4, 'Estacion 004', 'EST-LAZ-004', '00:23:7D:13:9C:55', 'MXJ84908Y6', 'DC5800', 'HP', 'CNN64104Z4', 'HP', '0002 - Validación', 1, 1, 1, 'Equipo completo'),
(5, 'Estacion 005', 'EST-LAZ-005', '00:1F:29:47:02:79', 'MXJ8200BBV', 'DC5800', 'HP', 'CNN5381C1R', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(6, 'Estacion 006', 'EST-LAZ-006', '00:1C:C4:19:D7:68', 'MXJ74403G4', 'DC5700', 'HP', 'CNN64106MH', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(7, 'Estacion 007', 'EST-LAZ-007', '00:1E:0B:3B:32:3B', 'MXJ81109DT', 'DC5700', 'HP', 'CNN64104YR', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(8, 'Estacion 008', 'EST-LAZ-008', '00:23:7D:B8:1B:66', 'MXJ91005XP', 'DC5800', 'HP', 'CNN7322GQW', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(9, 'Estacion 009', 'EST-LAZ-009', '00:1C:C4:19:D5:24\r\n', 'MXJ74403CJ', 'DC5700', 'HP', 'CNN64105QZ', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(10, 'Estacion 010', 'EST-LAZ-010', '00:23:7D:12:E8:EC', 'MXJ849094M', 'DC5800', 'HP', 'CNN7107CY', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(11, 'Estacion 011', 'EST-LAZ-011', '00:1A:EF:1E:92:BE\r\n', 'MXJ7460CHD', 'DC5760', 'HP', 'CNN5381C2H', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(12, 'Estacion 012', 'EST-LAZ-012', '00:1A:A0:45:3B:FB', '1Z461D1', 'Optiplex 745', 'DELL', 'CNN6410489', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(13, 'Estacion 013', 'EST-LAZ-013', '78:2B:CB:AD:84:55', '3ZN2KQ1', 'Optiplex 790', 'DELL', 'CNN7322G98', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(14, 'Estacion 014', 'EST-LAZ-014', '00:1B:78:B7:53:1D', 'MXJ7370C42', 'DC5750', 'HP', 'CNN7322G9N', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(15, 'Estacion 015', 'EST-LAZ-015', '00:1B:78:B7:47:4C', 'MXJ7370C2V', 'DC5750', 'HP', 'CNN73107DH', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(16, 'Estacion 016', 'EST-LAZ-016', '00:18:FE:6E:63:86', 'MXJ6490D6N', 'DC5750', 'HP', 'CNN64104ZF', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(17, 'Estacion 017', 'EST-LAZ-017', '00:1B:78:B7:51:7B', 'MXJ7370C36', 'DC5750', 'HP', 'CNN641048V', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(18, 'Estacion 018', 'EST-LAZ-018', '00:1B:78:B7:45:71', 'MXJ7370C5L', 'DC5750', 'HP', 'CNN64105W3', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(19, 'Estacion 019', 'EST-LAZ-019', '00:1B:78:B7:51:7B', 'MXJ7370C3Q', 'DC5750', 'HP', 'CNOUH572-466', 'DELL', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(20, 'Estacion 020', 'EST-LAZ-020', '00:21:70:47:FF:2A', 'B6JHKH1', 'Optiplex 755', 'DELL', 'CNN73106YN', 'DELL', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(21, 'Estacion 021', 'EST-LAZ-021', '00:1B:78:B7:52:1C', 'MXJ7370C35', 'DC5750', 'HP', 'CNN73106Y8', 'DELL', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(22, 'Estacion 022', 'EST-LAZ-022', '00:18:FE:6E:94:A1', 'MXJ6490D7Y', 'DC5750', 'HP', 'CNN7322GQ0', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(23, 'Estacion 023', 'EST-LAZ-023', '00:1A:A0:56:25:A8', 'CZM2KD1', 'Optiplex 745', 'DELL', 'CNN5381BVZ', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(24, 'Estacion 024', 'EST-LAZ-024', '00:1B:78:B7:53:08', 'MXJ7370C45', 'DC5750', 'HP', 'CNN64106PT ', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(25, 'Estacion 025', 'EST-LAZ-025', '00:18:FE:6E:62:BA', 'MXJ6490D77', 'DC5750', 'HP', 'CNN5381BJ7', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(26, 'Estacion 026', 'EST-LAZ-026', '00:21:54:77:C8:DF', 'MXJ83509GB', 'DC5800', 'HP', 'CNN5381BJD', '', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(27, 'Estacion 027', 'EST-LAZ-027', '00:1B:78:B7:54:51', 'MXJ7370C4R', 'DC5750', 'HP', 'CNN7322G8S', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(28, 'Estacion 028', 'EST-LAZ-028', '00:1B:78:B7:45:85', 'MXJ7370C3G', 'DC5750', 'HP', 'CNN5381BW1', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(29, 'Estacion 029', 'EST-LAZ-029', '00:18:FE:6E:63:B1', 'MXJ6490D6K', 'DC5750', 'HP', 'CNN641048N', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(30, 'Estacion 030', 'EST-LAZ-030', '00:18:FE:6E:D6:86', 'MXJ6490D6X', 'DC5750', 'HP', 'CNN7322G9G', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(31, 'Estacion 031', 'EST-LAZ-031', '00:21:5A:68:9A:C6', 'MXJ83417X7', 'DC7800', 'HP', 'CNN7322GQ5', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(32, 'Estacion 032', 'EST-LAZ-032', '00:21:5A:C0:A8:9A', '2UA8340V1N', 'DC5750', 'HP', 'CNN ', 'HP', '0002 - Validacion', 1, 1, 1, 'Falta agrega numero de serie de monitor'),
(33, 'Estacion 033', 'EST-LAZ-033', '00:1B:78:B7:45:46', 'MXJ7370C5B', 'DC5750', 'HP', 'CNN7322G9B', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(34, 'Estacion 034', 'EST-LAZ-034', '00:18:FE:6E:A0:D8', 'MXJ6490D5W', 'DC5750', 'HP', 'CNN64106PQ', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(35, 'Estacion 035', 'EST-LAZ-035', '00:1B:78:B7:53:48', 'MXJ7370C2Z', 'DC5750', 'HP', 'CNN73107CQ', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(36, 'Estacion 036', 'EST-LAZ-036', '00:1B:78:B7:47:28', 'MXJ7370C3Z', 'DC5750', 'HP', 'CNN641054Y', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(37, 'Estacion 037', 'EST-LAZ-037', '00:1C:C4:8E:79:D9', 'MXJ802056J', 'DC5750', 'HP', 'CNN53819TS', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(38, 'Estacion 038', 'EST-LAZ-038', '00:1B:78:B7:46:A6', 'MXJ7370C52', 'DC5750', 'HP', 'CNN5381BVX', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(39, 'Estacion 039', 'EST-LAZ-039', '00:1B:78:B7:44:79', 'MXJ7370C27', 'DC5750', 'HP', 'CNN73107DG', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(40, 'Estacion 040', 'EST-LAZ-040', '00:1B:78:B7:44:F2', 'MXJ7370C4G', 'DC5750', 'HP', 'CN-0WH318-72', 'DELL', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(41, 'Estacion 041', 'EST-LAZ-041', '00:18:FE:6E:9D:23', 'MXJ6490D5K', 'DC5750', 'HP', 'CNN7322Q8Z', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(42, 'Estacion 042', 'EST-LAZ-042', '00:24:E8:04:4B:53', '871NPJ1', 'Optiplex 760', 'DELL', 'CNN7322G9H', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(43, 'Estacion 043', 'EST-LAZ-043', '00:1B:78:B7:43:E0', 'MXJ7370C2R', 'DC5750', 'HP', 'CNN73107CN', 'HP', '0002 - Validacion', 1, 1, 1, 'Equipo completo'),
(44, 'Estacion 044', 'EST-LAZ-044', '', '3ZX1K01', 'Optiplex 790', 'DELL', 'CNN7322G8R', 'HP', 'Centros Externos', 1, 1, 1, 'Equipo completo'),
(45, 'Estacion 045', 'EST-LAZ-045', '', ' ', ' ', '', 'CNN64106PN', 'HP', '0002 - Validacion', 1, 1, 1, 'Estacion sin CPU'),
(46, 'Estacion 046', 'EST-LAZ-046', '78:2B:CB:AD:0D:4D\r\n', '3Y2ZJQ1', 'Optiplex 790', 'DELL', 'CNN641048T', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo completo'),
(47, 'Estacion 047', 'EST-LAZ-047', '78:2B:CB:AD:8E:79\r\n', '3Z0YJQ1', 'Optiplex 790', 'DELL', '33E5BA004834', 'AOC', 'Coordinador', 1, 1, 1, 'Equipo completo'),
(48, 'Estacion 048', 'EST-LAZ-048', '00:1A:A0:73:94:2B', '9BVQDF1', 'Optiplex 745', 'DELL', 'CNN6420Z8F', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo completo'),
(49, 'Estacion 049', 'EST-LAZ-049', '78:2B:CB:AD:86:50\r\n', '3XYZJQ1', 'Optiplex 790', 'DELL', 'CNN5381C04', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo completo'),
(50, 'Estacion 050', 'EST-LAZ-050', '78:2B:CB:AD:72:33\r\n', '3ZWZJQ1', 'Optiplex 790', 'DELL', 'CNN7322GQC', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo completo'),
(51, 'Estacion 051', 'EST-LAZ-051', '', '3ZL1KQ1', 'Optiplex 790', 'DELL', 'CNN7322GR3', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo completo'),
(52, 'Estacion 052', 'EST-LAZ-052', '', ' ', ' ', '', 'CNN64104Z6', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo sin CPU'),
(53, 'Estacion 053', 'EST-LAZ-053', '', '3ZS0KQ1', 'Optiplex 790', 'DELL', 'CNN7322GQD', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo completo'),
(54, 'Estacion 054', 'EST-LAZ-054', '', 'BHM5YG1', 'Optiplex 755', 'DELL', 'CNN64104Z6', 'HP', '0006 - Validacion Invex', 1, 1, 1, 'Equipo completo'),
(55, 'Estacion 055', 'EST-LAZ-055', '', '66JZZQ1', 'Optiplex 790', 'DELL', 'CNN7322GQL', 'HP', '0000 - Área libre', 0, 0, 0, 'No prende CPU'),
(56, 'Estacion 056', 'EST-LAZ-056', '', 'MXJ7370C4F', 'DC5750', 'HP', 'CNN6410560', 'HP', '0000 - Área libre', 0, 0, 0, ' '),
(57, 'Estacion 057', 'EST-LAZ-057', '', '2HBWQB1', 'Optiplex 650', 'DELL', 'CNN7322G9K', 'HP', '0000 - Área libre', 0, 0, 0, ' '),
(58, 'Estacion 058', 'EST-LAZ-058', '00:18:FE:6E:9C:30\r\n', 'MXJ6490D6R', 'DC5750', 'HP', 'CNN7322G96', 'HP', '0000 - Área libre', 1, 1, 0, ' '),
(59, 'Estacion 059', 'EST-LAZ-059', '', 'GPB0JF1', 'Optiplex 755', 'DELL', 'CNN64104ZD', 'HP', '0000 - Área libre', 1, 0, 0, ' '),
(60, 'Estacion 060', 'EST-LAZ-060', '00:1B:78:B7:3A:00', 'MXJ7370C3W', 'DC5750', 'HP', 'CNN64104TX', 'HP', '0000 - Área libre', 0, 0, 0, ' '),
(61, 'Estacion 061', 'EST-LAZ-061', '00:1B:78:B7:56:12\r\n', 'MXJ7370C2H', 'DC5750', 'HP', 'CNN6410480', 'HP', '0000 - Área libre', 0, 1, 1, ' '),
(62, 'Estacion 062', 'EST-LAZ-062', '', 'MXJ6490D9M', 'DC5750', 'HP', 'CNN64106PX', 'HP', '0000 - Área libre', 0, 1, 0, ' '),
(63, 'Estacion 063', 'EST-LAZ-063', '', 'MXJ6490D64', 'DC5750', 'HP', 'CNN7322GQP', 'HP', '0000 - Área libre', 0, 1, 0, ' '),
(64, 'Estacion 064', 'EST-LAZ-064', '', 'MXJ6490D6W', 'DC5750', 'HP', 'CNN7322G8Y', 'HP', '0000 - Área libre', 1, 1, 0, ' '),
(65, 'Estacion 065', 'EST-LAZ-065', '', 'FDWHZC1', 'Optiplex 755', 'DELL', 'CNN7322G8T', 'HP', '0000 - Área libre', 0, 1, 0, ' '),
(66, 'Estacion 066', 'EST-LAZ-066', '00:18:FE:6E:96:E1\r\n', 'MXJ6490D68', 'DC5750', 'HP', 'CNN7322GQ6', 'HP', '0000 - Área libre', 1, 1, 0, ' '),
(67, 'Estacion 067', 'EST-LAZ-067', '00:21:70:38:8C:0A', '6354JH1', 'DC5750', 'HP', 'CNN73107BD', 'HP', 'Monitoreo', 1, 1, 1, ' Equipo completo'),
(68, 'Estacion 068', 'EST-LAZ-068', '00:18:FE:6E:D8:2D', 'MXJ6490D6Z', 'DC5750', 'HP', 'CNN64105Z1', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(69, 'Estacion 069', 'EST-LAZ-069', '00:18:FE:6E:97:3', 'MXJ6490D72', 'DC5750', 'HP', 'CNN5381C0P', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(70, 'Estacion 070', 'EST-LAZ-070', '00:21:70:5B:27:DC', 'DS7LQJ1', 'Optiplex 755', 'DELL', 'CNN7322GQZ', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(71, 'Estacion 071', 'EST-LAZ-071', '00:24:E8:4:8A:9A', 'H60PPJ1', 'Optiplex 760', 'DELL', 'CNN73107CZ', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(72, 'Estacion 072', 'EST-LAZ-072', '00:18:FE:6E:ED:93\r\n', 'MXJ6490BBN', 'DC5750', 'HP', 'CNN7322G8H', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(73, 'Estacion 073', 'EST-LAZ-073', '', 'Laboratorio', 'Laboratorio', 'DELL', 'Laboratorio', 'Laboratorio', 'Laboratorio', 1, 1, 0, 'Equipo para uso de Laboratorio'),
(74, 'Estacion 074', 'EST-LAZ-074', '', '341539', 'PC-GHIA-2378', 'GHIA', 'AEUF59AOO3416', 'AOC', 'Monitoreo-Calidad', 1, 1, 1, 'Equipo completo de Saul Aguilar'),
(75, 'Estacion 075', 'EST-LAZ-075', '00:21:70:1F:A1:57', '359R5J1', 'Optiplex 760', 'DELL', 'CNN64106MN', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(76, 'Estacion 076', 'EST-LAZ-076', '', '9B1G7D1', 'Optiplex 745', 'DELL', 'CNN5381C28', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(77, 'Estacion 077', 'EST-LAZ-077', '00:1B:78:B7:53:0F\r\n', 'MXJ7370C41', 'DC5750', 'HP', 'CNN6410485', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(78, 'Estacion 078', 'EST-LAZ-078', '', 'MXJ7370C2L', 'DC5750', 'HP', 'CNN7322GQ7', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(79, 'Estacion 079', 'EST-LAZ-079', '00:1A:A0:7A:67:8E\r\n', '48DR8F1', 'Optiplex 755', 'DELL', 'CNN64106RN', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(80, 'Estacion 080', 'EST-LAZ-080', '', 'HS4TMG1', 'Optiplex 755', 'DELL', 'CNN7322G92', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(81, 'Estacion 081', 'EST-LAZ-081', '', 'MXJ7460CJC', 'DC5750', 'HP', 'CNN64105RZ', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(82, 'Estacion 082', 'EST-LAZ-082', '00:1A:A0:7A:8B:C8\r\n', 'H9DR8F1', 'Optiplex 745', 'DELL', 'CNN64105W2', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
(83, 'Estacion 083', 'EST-LAZ-083', '3C:D9:2B:75:0E:7E', 'MXL1400RM9', '4000', 'HP', 'CNN7322GQM', 'HP', 'Procesos', 1, 1, 1, 'Equipo completo'),
(84, 'Estacion 084', 'EST-LAZ-084', '00:1A:A0:66:9F:0B', 'D75GWD1', 'Optiplex 755', 'DELL', 'CNN64212RX', 'HP', 'Procesos', 1, 1, 1, 'Equipo completo'),
(85, 'Estacion 085', 'EST-LAZ-085', '', 'C5J3FD1', 'Optiplex 745', 'DELL', 'CNN64105W9', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(86, 'Estacion 086', 'EST-LAZ-086', '00:21:70:25:23:14', '7WQFWG1', 'Optiplex 755', 'DELL', 'CNN7322G99', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(87, 'Estacion 087', 'EST-LAZ-087', '00:1A:A0:75:50:1B', 'C9PY2F1', 'Optiplex 745', 'DELL', 'CNN7322GQ3', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(88, 'Estacion 088', 'EST-LAZ-088', '00:1A:A0:6F:82:9A\r\n', 'D10SZD1', 'Optiplex 745', 'DELL', 'CNN7322G8V', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(89, 'Estacion 089', 'EST-LAZ-089', '00:1B:78:B7:45:C1', 'MXJ7370C3Y', 'DC5750', 'HP', 'CNN7322G8M', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(90, 'Estacion 090', 'EST-LAZ-090', '', 'C4N8GF1', 'DC5750', 'HP', 'CNN73106YB', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(91, 'Estacion 091', 'EST-LAZ-091', '', '8S8WJK1', 'Optiplex 700', 'DELL', 'CNN73106YF', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(92, 'Estacion 092', 'EST-LAZ-092', '', '67LZDD1', 'Optiplex 745', 'DELL', 'CN-0KU789-71 ', 'Dell', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(93, 'Estacion 093', 'EST-LAZ-093', 'EC:A8:6B:D0:55:1D', '184093', 'PCGHIA-1496', 'GHIA', 'CNN5381BP9 ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(94, 'Estacion 094', 'EST-LAZ-094', '', 'MXJ6490DX7', 'DC5750', 'HP', 'CNN64105N7 ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(95, 'Estacion 095', 'EST-LAZ-095', '', 'MXJ7370C31', 'DC5750', 'HP', 'CNN64106M9 ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(96, 'Estacion 096', 'EST-LAZ-096', '00:1B:78:B7:3C:0B', 'MXJ7370C24', 'DC5750', 'HP', 'CNN641048W ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(97, 'Estacion 097', 'EST-LAZ-097', '', 'MXJ6490D65', 'DC5750', 'HP', 'CNN73107DD', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(98, 'Estacion 098', 'EST-LAZ-098', '00:24:E8:12:70:C7\r\n', '99PG4K1', 'Optiplex 760', 'DELL', 'CNN73107pj', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(99, 'Estacion 099', 'EST-LAZ-099', '', ' ', ' ', '', 'CNN6420YYH', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(100, 'Estacion 100', 'EST-LAZ-100', '', '2UA9480BN0', '6000', 'HP', 'ET14G06562019', 'BENQ', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
(101, 'Estacion 101', 'EST-LAZ-101', '', ' ', ' ', '', 'CN-0KU789-716', 'DELL', 'Auditoria', 1, 1, 1, 'Equipo incompleto'),
(102, 'Estacion 102', 'EST-LAZ-102', '', 'BCLV0G1', 'Optiplex 755', 'DELL', 'CNN7322G8J', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(103, 'Estacion 103', 'EST-LAZ-103', '00:21:70:5A:1B:09', '176PPJ1', 'Optiplex 745', 'DELL', 'CNN64105W6', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(104, 'Estacion 104', 'EST-LAZ-104', '', 'MXJ6490D7N', 'DC5750', 'HP', 'CNN64105X3', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(105, 'Estacion 105', 'EST-LAZ-105', '', ' ', ' ', '', ' ', ' ', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(106, 'Estacion 106', 'EST-LAZ-106', '00:1B:78:B7:48:55\r\n', 'MXJ7370C33', 'DC5750', 'HP', 'CNN73107CS', 'HP', 'Auditoria', 0, 0, 0, ' Equipo incompleto'),
(107, 'Estacion 107', 'EST-LAZ-107', '', ' ', ' ', '', 'CNN64105WC', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(108, 'Estacion 108', 'EST-LAZ-108', '', '177374', 'PCGHIA-1496', 'GHIA', 'CNNATM002', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(109, 'Estacion 109', 'EST-LAZ-109', '00:18:FE:6E:9E:02\r\n', 'MXJ6490D63', 'DC5750', 'HP', 'CNN5381BF7', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(110, 'Estacion 110', 'EST-LAZ-110', '78:2B:CB:AD:C0:79\r\n', '3ZXRJQ1', 'Optiplex-790', 'DELL', 'CNN64106PN', 'HP', 'Auditoria', 1, 1, 1, 'Equipo completo'),
(111, 'Estacion 111', 'EST-LAZ-111', '78:2B:CB:AD:0D:6C\r\n', '9VD3RG1', 'Optiplex-750', 'DELL', 'CNN7122GQ3', 'HP', 'Auditoria', 1, 1, 1, 'Equipo completo'),
(112, 'Estacion 112', 'EST-LAZ-112', '00:21:70:0:6C:7A\r\n', 'J98SDG1', 'Optiplex-755', 'DELL', 'CNN7322G8V', 'HP', 'Auditoria', 1, 1, 1, 'Equipo completo'),
(113, 'Estacion 113', 'EST-LAZ-113', '00:21:70:53:FB:CA', 'FTL4ZH1', 'Optiplex-755', 'DELL', 'CN-0PM372-72872-78R-3EGI', 'DELL', 'Auditoria', 1, 1, 1, 'Equipo completo'),
(114, 'Estacion 114', 'EST-LAZ-114', '00:21:70:47:36:E0', '4R0BKH1', 'Optiplex-755', 'DELL', 'CNN641048R', 'HP', 'Auditoria', 1, 1, 1, 'Equipo completo'),
(115, 'Estacion 115', 'EST-LAZ-115', '', '66JZZQ1', 'Optiplex-790', 'DELL', 'CNN641055P', 'HP', 'Auditoria', 1, 1, 1, 'Equipo completo'),
(116, 'Estacion 116', 'EST-LAZ-116', '', 'MXJ6490D79', 'DC5700', 'HP', 'CNN73107D3', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
(117, 'Estacion 117', 'EST-LAZ-117', '', ' ', ' ', '', 'CNN5381c16', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto sin CPU'),
(118, 'Estacion 118', 'EST-LAZ-118', '', ' ', ' ', '', 'CNN7322G7J', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto sin CPU'),
(119, 'Estacion 119', 'EST-LAZ-119', '00:21:9B:68:65:69\r\n', 'F7D4KH1', 'DCNE', 'HP', 'CNN7322G94', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto');

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
