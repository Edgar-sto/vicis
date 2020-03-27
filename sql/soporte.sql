-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para soporte
CREATE DATABASE IF NOT EXISTS `soporte` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `soporte`;

-- Volcando estructura para tabla soporte.cpu_oficial
CREATE TABLE IF NOT EXISTS `cpu_oficial` (
  `uniqueid` int(250) NOT NULL AUTO_INCREMENT,
  `marca_cpu` varchar(50) NOT NULL,
  `serie_cpu` varchar(50) NOT NULL,
  `modelo_cpu` varchar(50) NOT NULL,
  `mac_address` varchar(25) DEFAULT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB AUTO_INCREMENT=454 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla soporte.cpu_oficial: ~55 rows (aproximadamente)
/*!40000 ALTER TABLE `cpu_oficial` DISABLE KEYS */;
REPLACE INTO `cpu_oficial` (`uniqueid`, `marca_cpu`, `serie_cpu`, `modelo_cpu`, `mac_address`, `ubicacion`, `area`, `comentario`) VALUES
	(380, 'HP', 'MXJ73801R1', 'DC5800', '00:1B:78:B3:B7:72', 'Estacion 001', 'Validacion', 'Funcionando al 100'),
	(381, 'HP', 'MXJ7370C2L', 'DC5750', '00:24:E8:0C:A4:95', 'Estacion 002', 'Validacion', 'Funcionando al 100'),
	(382, 'GHIA', '183684', 'PCGHIA-1496', 'EC:A8:6B:D0:51:FA', 'Estacion 003', 'Validacion', 'Equipo para pantalla de monitoreo'),
	(383, 'HP', 'MXJ84908Y6', 'DC5800', '00:23:7D:13:9C:55', 'Estacion 004', 'Validacion', 'Equipo completo'),
	(384, 'HP', 'MXJ8200BBV', 'DC5800', '00:1F:29:47:02:79', 'Estacion 005', 'Validacion', 'Equipo completo'),
	(385, 'HP', 'MXJ74403G4', 'DC5700', '00:1C:C4:19:D7:68', 'Estacion 006', 'Validacion', 'Equipo completo'),
	(386, 'HP', 'MXJ81109DT', 'DC5700', '00:1E:0B:3B:32:3B', 'Estacion 007', 'Validacion', 'Equipo completo'),
	(387, 'HP', 'MXJ91005XP', 'DC5800', '00:23:7D:B8:1B:66', 'Estacion 008', 'Validacion', 'Equipo completo'),
	(388, 'HP', 'MXJ74403CJ', 'DC5700', '00:1C:C4:19:D5:24', 'Estacion 009', 'Validacion', 'Equipo completo'),
	(389, 'HP', 'MXJ849094M', 'DC5800', '00:23:7D:12:E8:EC', 'Estacion 010', 'Validacion', 'Equipo completo'),
	(390, 'HP', 'MXJ7460CHD', 'DC5760', '00:1A:EF:1E:92:BE', 'Estacion 011', 'Validacion', 'Equipo completo'),
	(392, 'DELL', '3ZN2KQ1', 'Optiplex 790', '78:2B:CB:AD:84:55', 'Estacion 013', 'Validacion', 'Equipo completo'),
	(393, 'HP', 'MXJ7370C42', 'DC5750', '00:1B:78:B7:53:1D', 'Estacion 014', 'Validacion', 'Equipo completo'),
	(394, 'HP', 'MXJ7370C2V', 'DC5750', '00:1B:78:B7:47:4C', 'Estacion 015', 'Validacion', 'Equipo completo'),
	(395, 'HP', 'MXJ6490D6N', 'DC5750', '00:18:FE:6E:63:86', 'Estacion 016', 'Validacion', 'Equipo completo'),
	(396, 'HP', 'MXJ7370C36', 'DC5750', '00:1B:78:B7:51:7B', 'Estacion 017', 'Validacion', 'Equipo completo'),
	(397, 'HP', 'MXJ7370C5L', 'DC5750', '00:1B:78:B7:45:71', 'Estacion 018', 'Validacion', 'Equipo completo'),
	(398, 'HP', 'MXJ7370C3Q', 'DC5750', '00:1B:78:B7:51:7B', 'Estacion 019', 'Validacion', 'Revisar MAC'),
	(399, 'DELL', 'B6JHKH1', 'Optiplex 755', '00:21:70:47:FF:2A', 'Estacion 020', 'Validacion', 'Equipo completo'),
	(400, 'HP', 'MXJ7370C35', 'DC5750', '00:1B:78:B7:52:1C', 'Estacion  021', 'Validacion', 'Equipo completo'),
	(401, 'HP', 'MXJ6490D7Y', 'DC5750', '00:18:FE:6E:94:A1', 'Estacion 022', 'Validacion', 'Equipo completo'),
	(402, 'DELL', 'CZM2KD1', 'Optiplex 745', '00:1A:A0:56:25:A8', 'Estacion 023', 'Validacion', 'Equipo completo'),
	(403, 'HP', 'MXJ7370C45', 'DC5750', '00:1B:78:B7:53:08', 'Estacion 024', 'Validacion', 'Equipo completo'),
	(404, 'HP', 'MXJ6490D77', 'DC5750', '00:18:FE:6E:62:BA', 'Estacion 025', 'Validacion', 'Equipo completo'),
	(405, 'HP', 'MXJ83509GB', 'DC5800', '00:21:54:77:C8:DF', 'Estacion 026', 'Validacion', 'Equipo completo'),
	(406, 'HP', 'MXJ7370C4R', 'DC5750', '00:1B:78:B7:54:51', 'Estacion 027', 'Validacion', 'Equipo completo'),
	(408, 'HP', 'MXJ7370C3G', 'DC5750', '00:1B:78:B7:45:85', 'Estacion 028', 'Validacion', 'Equipo completo'),
	(409, 'HP', 'MXJ6490D6K', 'DC5750', '00:18:FE:6E:63:B1', 'Estacion 029', 'Validacion', 'Equipo completo'),
	(410, 'HP', 'MXJ6490D6X', 'DC5750', '00:18:FE:6E:D6:86', 'Estacion 030', 'Validacion', 'Equipo completo'),
	(411, 'HP', 'MXJ83417X7', 'DC7800', '00:21:5A:68:9A:C6', 'Estacion 031', 'Validacion', 'Equipo completo'),
	(412, 'HP', '2UA8340V1N', 'DC5750', '00:21:5A:C0:A8:9A', 'Estacion 032', 'Validacion', 'Equipo funcionando'),
	(413, 'HP', 'MXJ7370C5B', 'DC5750', '00:1B:78:B7:45:46', 'Estacion 033', 'Validacion', 'Equipo funcionando'),
	(414, 'HP', 'MXJ6490D5W', 'DC5750', '00:18:FE:6E:A0:D8', 'Estacion 034', 'Validacion', 'Equipo funcionando'),
	(415, 'HP', 'MXJ7370C2Z', 'DC5750', '00:1B:78:B7:53:48', 'Estacion 035', 'Validacion', 'Equipo funcionando'),
	(416, 'HP', 'MXJ7370C3Z', 'DC5750', '00:1B:78:B7:47:28', 'Estacion 036', 'Validacion', 'Equipo funcionando'),
	(417, 'HP', 'MXJ802056J', 'DC5750', '00:1C:C4:8E:79:D9', 'Estacion 037', 'Validacion', 'Equipo funcionando'),
	(418, 'HP', 'MXJ7370C52', 'DC5750', '00:1B:78:B7:46:A6', 'Estacion 038', 'Validacion', 'Equipo funcionando'),
	(419, 'HP', 'MXJ7370C27', 'DC5750', '00:1B:78:B7:44:79', 'Estacion 039', 'Validacion', 'Equipo funcionando'),
	(420, 'HP', 'MXJ7370C4G', 'DC5750', '00:1B:78:B7:44:F2', 'Estacion 040', 'Validacion', 'Equipo funcionando'),
	(421, 'HP', 'MXJ6490D5K', 'DC5750', '00:18:FE:6E:9D:23', 'Estacion 041', 'Validacion', 'Equipo funcionando'),
	(422, 'DELL', '871NPJ1', 'Optiplex 760', '00:24:E8:04:4B:53', 'Estacion 042', 'Validacion', 'Equipo funcionando'),
	(423, 'HP', 'MXJ7370C2R', 'DC5750', '00:1B:78:B7:43:E0', 'Estacion 043', 'Validacion', 'Equipo funcionando'),
	(425, 'HP', '1Z461D1', 'Optiplex 745', '00:1A:A0:45:3B:FB', 'Estacion 012', 'Validacion', 'Funcionando'),
	(426, 'DELL', '7WQFWG1', 'Optiplex 755', '00:21:70:25:23:14', 'Estacion 086', 'FORMALIZACION', 'Equipo funcionando'),
	(427, 'DELL', 'C9PY2F1', 'Optiplex 745', '00:1A:A0:75:50:1B', 'Estacion 087', 'FORMALIZACION', 'Equipo funcionando'),
	(428, 'DELL', 'D10SZD1', 'Optiplex 745', '00:1A:A0:6F:82:9A', 'Estacion 088', 'FORMALIZACION', 'Equipo funcionando'),
	(429, 'HP', 'MXJ7370C3Y', 'DC5750', '00:1B:78:B7:45:C1', 'Estacion 089', 'FORMALIZACION', 'Equipo funcionando'),
	(430, 'GHIA', '184093', 'PCGHIA-1496', 'EC:A8:6B:D0:55:1D', 'Estacion 093', 'FORMALIZACION', 'Equipo funcionando'),
	(431, 'HP', 'MXJ7370C24', 'DC5750', '00:1B:78:B7:3C:0B', 'Estacion 096', 'FORMALIZACION', 'Equipo funcionando'),
	(432, 'DELL', '99PG4K1', 'Optiplex 760', '00:24:E8:12:70:C7', 'Estacion 098', 'FORMALIZACION', 'Estacion funcionando'),
	(433, 'DELL', '8S8WJK1', 'Optiplex 700', '00:24:E8:21:0F:F0', 'Estacion 091', 'FORMALIZACION', 'Equipo funcionando'),
	(434, 'DELL', '67LZDD1', 'Optiplex 745', '00:1A:A0:56:46:46', 'Estacion 092', 'FORMALIZACION', 'Equipo funcionando'),
	(435, 'HP', 'MXJ7370C31', 'DC5750', '00:1B:78:B7:4D:2C', 'Estacion 094', 'FORMALIZACION', 'Equipo funcionando'),
	(436, 'hp', 'MXJ6490D6S', 'DC5700', '00:18:FE:6E:A0:4D', 'Estacion 097', 'FORMALIZACION', 'Equipo funcionando'),
	(437, 'GHIA', '341589', 'PCGHIA-1496', 'E0:D5:5E:74:42:67', 'Estacion 100', 'FORMALIZACION', 'Equipo funcionando'),
	(438, 'HP', 'MXL1400RM9', '4000', '3C:D9:2B:75:0E:7E', 'Estacion 083', 'Procesos', 'Equipo funcionando'),
	(439, 'DELL', 'D75GWD1', 'Optiplex 755', '00:1A:A0:66:9F:0B', 'Estacion 084', 'Procesos', 'Equipo funcionando'),
	(440, 'DELL', '2HBWQB1', 'Optiplex 650', '', 'Estacion 060', 'Monitoreo', 'Falta agregar MAC'),
	(441, 'DELL', 'FDWHZC1', 'Optiplex 755', '', 'Estacion 061', 'Monitoreo', 'Falta agregar MAC'),
	(442, 'DELL', '48DR8F1', 'Optiplex 755', '00:1A:A0:7A:67:8E', 'Estacion 062', 'Monitoreo', 'Equipo funcionando'),
	(443, 'DELL', '66JZZQ1', 'Optiplex 790', '', 'Estacion 065', 'Monitoreo', 'Equipo funcionando'),
	(444, 'DELL', 'H60PPJ1', 'Optiplex 760', '00:24:E8:4:8A:9A', 'Estacion 066', 'Monitoreo', 'Equipo funcionando'),
	(445, 'HP', 'MXJ6490BBN', 'DC5750', '00:18:FE:6E:ED:93', 'Estacion 072', 'Monitoreo', 'Equipo funcionando'),
	(446, 'DELL', 'DS7LQJ1', 'Optiplex 755', '00:21:70:5B:27:DC', 'Estacion 070', 'Monitoreo', 'Equipo funcionando'),
	(447, 'HP', 'MXJ6490D6Z', 'DC5750', '00:18:FE:6E:D8:2D', 'Estacion 069', 'Monitoreo', 'Equipo funcionando'),
	(448, 'HP', 'MXJ6490D72', 'DC5750', '00:18:FE:6E:97:3', 'Estacion 068', 'Monitoreo', 'Equipo funcionando'),
	(449, 'HP', '6354JH1', 'DC5750', '00:21:70:38:8C:0A', 'Estacion 067', 'Monitoreo', 'Equipo funcionando'),
	(450, 'DELL', '28TK5J1', 'Optiplex 760', '00:24:E8:0C:A4:95', 'Estacion 078', 'Monitoreo', 'Equipo funcionando'),
	(451, 'HP', 'MXJ7460CJC', 'DC5750', '', 'Estacion 079', 'Monitoreo', 'Falta agregar MAC'),
	(452, 'DELL', 'H9DR8F1', 'Optiplex 745', '00:1A:A0:7A:8B:C8', 'Estacion 081', 'Monitoreo', 'Equipo funcionando'),
	(453, 'DELL', '7WQFWG1', 'Optiplex 755', '00:21:70:25:23:14', 'Estacion 085', 'FORMALIZACION', 'Equipo funcionando');
/*!40000 ALTER TABLE `cpu_oficial` ENABLE KEYS */;

-- Volcando estructura para tabla soporte.diademas
CREATE TABLE IF NOT EXISTS `diademas` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `marca_diadema` varchar(50) DEFAULT NULL,
  `num_serie` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `piso` int(100) DEFAULT NULL,
  `almacen` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla soporte.diademas: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `diademas` DISABLE KEYS */;
REPLACE INTO `diademas` (`id`, `marca_diadema`, `num_serie`, `ubicacion`, `area`, `piso`, `almacen`) VALUES
	(1, 'Accutone', 'H-ER008277	', 'Estación 92	', NULL, NULL, NULL),
	(2, 'Accutone', 'H-ER008279	', 'Estación 26', NULL, NULL, NULL),
	(3, 'Accutone', 'H-ER008275	', 'Estación 38', NULL, NULL, NULL),
	(4, 'Accutone', 'H-ER008267	', 'Estacion 56', 'Prestada por contingencia', NULL, NULL),
	(5, 'Accutone', 'H-ER008269	', 'Estacion 51', 'prestada por contingencia', NULL, NULL),
	(6, 'Accutone', 'H-ER008278	', 'Estacion 76', NULL, NULL, NULL),
	(7, 'Accutone', 'H-ER008282	', 'Estacioón 09', NULL, NULL, NULL),
	(8, 'Accutone', 'H-ER008281	', 'Estación 19', NULL, NULL, NULL),
	(9, 'Accutone', 'H-ER008272	', 'estacion 42', 'prestada por contingencia', NULL, NULL),
	(10, 'Accutone', 'H-ER008276	', 'estacion 54', 'prestada por contingencia', NULL, NULL),
	(100, 'General', 'General', 'Lazaro', 'lazaro', 75, 0);
/*!40000 ALTER TABLE `diademas` ENABLE KEYS */;

-- Volcando estructura para tabla soporte.diadema_oficial
CREATE TABLE IF NOT EXISTS `diadema_oficial` (
  `uniqueid` int(250) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(50) NOT NULL,
  `piso` int(100) NOT NULL,
  `almacen` int(100) NOT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla soporte.diadema_oficial: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `diadema_oficial` DISABLE KEYS */;
REPLACE INTO `diadema_oficial` (`uniqueid`, `ubicacion`, `piso`, `almacen`) VALUES
	(134, 'Lazaro', 75, 0);
/*!40000 ALTER TABLE `diadema_oficial` ENABLE KEYS */;

-- Volcando estructura para tabla soporte.estaciones
CREATE TABLE IF NOT EXISTS `estaciones` (
  `uniqueid` int(250) NOT NULL AUTO_INCREMENT,
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
  `comentario` varchar(100) NOT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla soporte.estaciones: ~119 rows (aproximadamente)
/*!40000 ALTER TABLE `estaciones` DISABLE KEYS */;
REPLACE INTO `estaciones` (`uniqueid`, `num_estacion`, `local_host`, `mac_address`, `serie_cpu`, `modelo_cpu`, `marca_cpu`, `serie_monitor`, `marca_monito`, `campania`, `mouse`, `teclado`, `diadema`, `comentario`) VALUES
	(1, 'Estacion 001', 'EST-LAZ-001', '00:1B:78:B3:B7:72', 'MXJ73801R1', 'DC5800', 'HP', 'CNN73107D9', 'HP', '0002 - Validacion', 1, 1, 1, 'Funcionando al 100'),
	(2, 'Estacion 002', 'EST-LAZ-002', '00:24:E8:0C:A4:95', 'MXJ7370C2L', 'DC5750', 'HP', 'CNN6410484', 'HP', '0002 - Validacion', 1, 1, 1, 'Funcionando al 100'),
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
	(56, 'Estacion 056', 'EST-LAZ-056', '', 'MXJ7370C4F', 'DC5750', 'HP', 'CNN6410560', 'HP', 'Equipo enviado a sucursal MARIANO', 0, 0, 0, ' '),
	(57, 'Estacion 057', 'EST-LAZ-057', '', '2HBWQB1', 'Optiplex 650', 'DELL', 'CNN7322G9K', 'HP', '0000 - Área libre', 0, 0, 0, ' '),
	(58, 'Estacion 058', 'EST-LAZ-058', '00:18:FE:6E:9C:30\r\n', 'MXJ6490D6R', 'DC5750', 'HP', 'CNN7322G96', 'HP', 'Equipo enviado a sucursal MARIANO', 1, 1, 0, ' '),
	(59, 'Estacion 059', 'EST-LAZ-059', '', 'GPB0JF1', 'Optiplex 755', 'DELL', 'CNN64104ZD', 'HP', '0000 - Área libre', 1, 0, 0, ' '),
	(60, 'Estacion 075', 'EST-LAZ-060', '00:1B:78:B7:3A:00', 'MXJ7370C3W', 'DC5750', 'HP', 'CNN64104TX', 'HP', 'Equipo enviado a sucursal MARIANO', 0, 0, 0, ' '),
	(61, 'Estacion 061', 'EST-LAZ-061', '00:1B:78:B7:56:12\r\n', 'MXJ7370C2H', 'DC5750', 'HP', 'CNN6410480', 'HP', 'Equipo enviado a sucursal MARIANO', 0, 1, 1, ' '),
	(62, 'Estacion 062', 'EST-LAZ-062', '', 'MXJ6490D9M', 'DC5750', 'HP', 'CNN64106PX', 'HP', 'Equipo enviado a sucursal MARIANO', 0, 1, 0, ' '),
	(63, 'Estacion 063', 'EST-LAZ-063', '', 'MXJ6490D64', 'DC5750', 'HP', 'CNN7322GQP', 'HP', '0000 - Área libre', 0, 1, 0, ' '),
	(64, 'Estacion 064', 'EST-LAZ-064', '', 'MXJ6490D6W', 'DC5750', 'HP', 'CNN7322G8Y', 'HP', '0000 - Área libre', 1, 1, 0, ' '),
	(65, 'Estacion 065', 'EST-LAZ-065', '', 'FDWHZC1', 'Optiplex 755', 'DELL', 'CNN7322G8T', 'HP', '0000 - Área libre', 0, 1, 0, ' '),
	(66, 'Estacion 066', 'EST-LAZ-066', '00:18:FE:6E:96:E1\r\n', 'MXJ6490D68', 'DC5750', 'HP', 'CNN7322GQ6', 'HP', 'Equipo enviado a sucursal MARIANO', 1, 1, 0, ' '),
	(67, 'Estacion 067', 'EST-LAZ-067', '00:21:70:38:8C:0A', '6354JH1', 'DC5750', 'HP', 'CNN73107BD', 'HP', 'Monitoreo', 1, 1, 1, ' Equipo completo'),
	(68, 'Estacion 068', 'EST-LAZ-068', '00:18:FE:6E:D8:2D', 'MXJ6490D6Z', 'DC5750', 'HP', 'CNN64105Z1', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
	(69, 'Estacion 069', 'EST-LAZ-069', '00:18:FE:6E:97:3', 'MXJ6490D72', 'DC5750', 'HP', 'CNN5381C0P', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
	(70, 'Estacion 070', 'EST-LAZ-070', '00:21:70:5B:27:DC', 'DS7LQJ1', 'Optiplex 755', 'DELL', 'CNN7322GQZ', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
	(71, 'Estacion 071', 'EST-LAZ-071', '00:24:E8:4:8A:9A', 'H60PPJ1', 'Optiplex 760', 'DELL', 'CNN73107CZ', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
	(72, 'Estacion 072', 'EST-LAZ-072', '00:18:FE:6E:ED:93\r\n', 'MXJ6490BBN', 'DC5750', 'HP', 'CNN7322G8H', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
	(73, 'Estacion 073', 'EST-LAZ-073', '', 'Laboratorio', 'Laboratorio', 'DELL', 'Laboratorio', 'Laboratorio', 'Laboratorio', 1, 1, 0, 'Equipo para uso de Laboratorio'),
	(74, 'Estacion 074', 'EST-LAZ-074', '', '341539', 'PC-GHIA-2378', 'GHIA', 'AEUF59AOO3416', 'AOC', 'Monitoreo-Calidad', 1, 1, 1, 'Equipo completo de Saul Aguilar'),
	(75, 'Estacion 060', 'EST-LAZ-075', '00:21:70:1F:A1:57', '359R5J1', 'Optiplex 760', 'DELL', 'CNN64106MN', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
	(76, 'Estacion 076', 'EST-LAZ-076', '', '9B1G7D1', 'Optiplex 745', 'DELL', 'CNN5381C28', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
	(77, 'Estacion 077', 'EST-LAZ-077', '00:1B:78:B7:53:0F\r\n', 'MXJ7370C41', 'DC5750', 'HP', 'CNN6410485', 'HP', 'Equipo enviado a sucursal MARIANO', 1, 1, 1, 'Equipo completo'),
	(78, 'Estacion 078', 'EST-LAZ-078', '00:24:E8:0C:A4:95', '28TK5J1', 'Optiplex 760', 'DELL', 'CNN7322GQ7', 'HP', 'Monitoreo', 1, 1, 1, 'Equipo completo'),
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
	(91, 'Estacion 091', 'EST-LAZ-091', '00:24:E8:21:0F:F0', '8S8WJK1', 'Optiplex 700', 'DELL', 'CNN73106YF', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(92, 'Estacion 092', 'EST-LAZ-092', '00:1A:A0:56:46:46', '67LZDD1', 'Optiplex 745', 'DELL', 'CN-0KU789-71 ', 'Dell', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(93, 'Estacion 093', 'EST-LAZ-093', 'EC:A8:6B:D0:55:1D', '184093', 'PCGHIA-1496', 'GHIA', 'CNN5381BP9 ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(94, 'Estacion 094', 'EST-LAZ-094', '', 'MXJ6490DX7', 'DC5750', 'HP', 'CNN64105N7 ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(95, 'Estacion 095', 'EST-LAZ-095', '00:1B:78:B7:4D:2C', 'MXJ7370C31', 'DC5750', 'HP', 'CNN64106M9 ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(96, 'Estacion 096', 'EST-LAZ-096', '00:1B:78:B7:3C:0B', 'MXJ7370C24', 'DC5750', 'HP', 'CNN641048W ', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(97, 'Estacion 097', 'EST-LAZ-097', '', 'MXJ6490D65', 'DC5750', 'HP', 'CNN73107DD', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(98, 'Estacion 098', 'EST-LAZ-098', '00:24:E8:12:70:C7\r\n', '99PG4K1', 'Optiplex 760', 'DELL', 'CNN73107pj', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(99, 'Estacion 099', 'EST-LAZ-099', '', ' ', ' ', '', 'CNN6420YYH', 'HP', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(100, 'Estacion 100', 'EST-LAZ-100', '', '2UA9480BN0', '6000', 'HP', 'ET14G06562019', 'BENQ', '0004 - Formalización', 1, 1, 1, 'Equipo completo'),
	(101, 'Estacion 101', 'EST-LAZ-101', '', ' ', ' ', '', 'CN-0KU789-716', 'DELL', 'Auditoria', 1, 1, 1, 'Equipo incompleto'),
	(102, 'Estacion 102', 'EST-LAZ-102', '', 'BCLV0G1', 'Optiplex 755', 'DELL', 'CNN7322G8J', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
	(103, 'Estacion 103', 'EST-LAZ-103', '00:21:70:5A:1B:09', '176PPJ1', 'Optiplex 745', 'DELL', 'CNN64105W6', 'HP', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
	(104, 'Estacion 104', 'EST-LAZ-104', '', 'MXJ6490D7N', 'DC5750', 'HP', 'CNN64105X3', 'HP', 'Equipo enviado a sucursal MARIANO', 0, 0, 0, 'Equipo incompleto'),
	(105, 'Estacion 105', 'EST-LAZ-105', '', ' ', ' ', '', ' ', ' ', 'Auditoria', 0, 0, 0, 'Equipo incompleto'),
	(106, 'Estacion 106', 'EST-LAZ-106', '00:1B:78:B7:48:55\r\n', 'MXJ7370C33', 'DC5750', 'HP', 'CNN73107CS', 'HP', 'Equipo enviado a sucursal MARIANO', 0, 0, 0, ' Equipo incompleto'),
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
	(119, 'Estacion 119', 'EST-LAZ-119', '00:21:9B:68:65:69\r\n', 'F7D4KH1', 'DCNE', 'HP', 'CNN7322G94', 'HP', 'Almacen', 0, 0, 0, 'Equipo incompleto');
/*!40000 ALTER TABLE `estaciones` ENABLE KEYS */;

-- Volcando estructura para tabla soporte.monitor_oficial
CREATE TABLE IF NOT EXISTS `monitor_oficial` (
  `uniqueid` int(250) NOT NULL AUTO_INCREMENT,
  `marca_monitor` varchar(50) NOT NULL,
  `serie_monitor` varchar(50) NOT NULL,
  `modelo_monitor` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `comentario` varchar(100) NOT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB AUTO_INCREMENT=496 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla soporte.monitor_oficial: ~59 rows (aproximadamente)
/*!40000 ALTER TABLE `monitor_oficial` DISABLE KEYS */;
REPLACE INTO `monitor_oficial` (`uniqueid`, `marca_monitor`, `serie_monitor`, `modelo_monitor`, `ubicacion`, `area`, `comentario`) VALUES
	(377, 'HP', 'CNN73107D9', 'HP L1706', 'Estacion 001', 'Validacion', 'Funcionando'),
	(378, 'HP', 'CNN6410484', 'HP L1706', 'Estacion 002', 'Validacion', 'Funcionando'),
	(379, 'LG', 'PANTALLA LG', 'LG', 'Estacion 003', 'Validacion', 'Funcionando'),
	(380, 'HP', 'CNN64104Z4', 'HP L1706', 'Estacion 004', 'Validacion', 'Funcionando'),
	(381, 'HP', 'CNN5381C1R', 'HP L1706', 'Estacion 005', 'Validacion', 'Funcionando'),
	(382, 'HP', 'CNN64106MH', 'HP L1706', 'Estacion 006', 'Validacion', 'Funcionando'),
	(383, 'HP', 'CNN64104YR', 'HP L1706', 'Estacion 007', 'Validacion', 'Funcionando'),
	(384, 'HP', 'CNN7322GQW', 'HP L1706', 'Estacion 008', 'Validacion', 'Funcionando'),
	(385, 'HP', 'CNN64105QZ', 'HP L1706', 'Estacion 009', 'Validacion', 'Funcionando'),
	(386, 'HP', 'CNN7107CY', 'HP L1706', 'Estacion 010', 'Validacion', 'Funcionando'),
	(387, 'HP', 'CNN5381C2H', 'HP L1706', 'Estacion 011', 'Validacion', 'Funcionando'),
	(388, 'HP', 'CNN6410489', 'HP L1706', 'Estacion 012', 'Validacion', 'Funcionando'),
	(389, 'HP', 'CNN7322G98', 'HP L1706', 'Estacion 013', 'Validacion', 'Funcionando'),
	(391, 'HP', 'CNN7322G9N', 'HP L1706', 'Estacion 014', 'Validacion', 'Funcionando'),
	(392, 'HP', 'CNN73107DH', 'HP L1706', 'Estacion 015', 'Validacion', 'Funcionando'),
	(393, 'HP', 'CNN64104ZF', 'HP L1706', 'Estacion 016', 'Validacion', 'Funcionando'),
	(394, 'HP', 'CNN641048V', 'HP L1706', 'Estacion 017', 'Validacion', 'Funcionando'),
	(395, 'HP', 'CNN64105W3', 'HP L1706', 'Estacion 018', 'Validacion', 'Funcionando'),
	(396, 'DELL', 'CNOUH572-466', 'E177FP', 'Estacion 019', 'Validacion', 'Funcionando'),
	(397, 'HP', 'CNN73106YN', 'HP L1706', 'Estacion 020', 'Validacion', 'Funcionando'),
	(398, 'HP', 'CNN73106Y8', 'HP L1706', 'Estacion 021', 'Validacion', 'Funcionando'),
	(399, 'HP', 'CNN7322GQ0', 'HP L1706', 'Estacion 022', 'Validacion', 'Funcionando'),
	(400, 'HP', 'CNN5381BVZ', 'HP L1706', 'Estacion 023', 'Validacion', 'Funcionando'),
	(401, 'HP', 'CNN64106PT ', 'HP L1706', 'Estacion 024', 'Validacion', 'Funcionando'),
	(402, 'HP', 'CNN5381BJ7', 'HP L1706', 'Estacion 025', 'Validacion', 'Funcionando'),
	(403, 'HP', 'CNN5381BJD', 'HP L1706', 'Estacion 026', 'Validacion', 'Funcionando'),
	(404, 'HP', 'CNN7322G8S', 'HP L1706', 'Estacion 027', 'Validacion', 'Funcionando'),
	(405, 'HP', 'CNN5381BW1', 'HP L1706', 'Estacion 028', 'Validacion', 'Funcionando'),
	(406, 'HP', 'CNN641048N', 'HP L1706', 'Estacion 029', 'Validacion', 'Funcionando'),
	(407, 'HP', 'CNN7322G9G', 'HP L1706', 'Estacion 030', 'Validacion', 'Funcionando'),
	(408, 'HP', 'CNN7322GQ5', 'HP L1706', 'Estacion 031', 'Validacion', 'Funcionando'),
	(409, 'HP', 'CNN ', 'HP L1706', 'Estacion 032', 'Validacion', 'Funcionando'),
	(410, 'HP', 'CNN7322G9B', 'HP L1706', 'Estacion 033', 'Validacion', 'Funcionando'),
	(411, 'HP', 'CNN64106PQ', 'HP L1706', 'Estacion 034', 'Validacion', 'Funcionando'),
	(412, 'HP', 'CNN73107CQ', 'HP L1706', 'Estacion 035', 'Validacion', 'Funcionando'),
	(413, 'HP', 'CNN641054Y', 'HP L1706', 'Estacion 036', 'Validacion', 'Funcionando'),
	(414, 'HP', 'CNN53819TS', 'HP L1706', 'Estacion 037', 'Validacion', 'Funcionando'),
	(415, 'HP', 'CNN5381BVX', 'HP L1706', 'Estacion 038', 'Validacion', 'Funcionando'),
	(416, 'HP', 'CNN73107DG', 'HP L1706', 'Estacion 039', 'Validacion', 'Funcionando'),
	(417, 'DELL', 'CN-0WH318-72', 'E177FP', 'Estacion 040', 'Validacion', 'Funcionando'),
	(418, 'HP', 'CNN7322Q8Z', 'HP L1706', 'Estacion 041', 'Validacion', 'Funcionando'),
	(419, 'HP', 'CNN7322G9H', 'HP L1706', 'Estacion 042', 'Validacion', 'Funcionando'),
	(420, 'HP', 'CNN73107CN', 'HP L1706', 'Estacion 043', 'Validacion', 'Funcionando'),
	(421, 'HP', 'CNN7322G99', 'HP L1706', 'Estacion 086', 'FORMALIZACION', 'Equipo funcionando'),
	(422, 'HP', 'CNN7322GQ3', 'HP L1706', 'Estacion 087', 'FORMALIZACION', 'Equipo funcionando'),
	(423, 'HP', 'CNN7322G8V', 'HP L1706', 'Estacion 088', 'FORMALIZACION', 'Equipo funcionando'),
	(424, 'HP', 'CNN7322G8M', 'HP L1706', 'Estacion 089', 'FORMALIZACION', 'Equipo funcionando'),
	(425, 'HP', 'CNN73106YB', 'HP L1706', 'Estacion 090', 'FORMALIZACION', 'Equipo funcionando'),
	(426, 'HP', 'CNN73106YF', 'HP L1706', 'Estacion 091', 'FORMALIZACION', 'Equipo funcionando'),
	(427, 'Dell', 'CN-0KU789-71 ', 'HP L1706', '', '', ''),
	(428, 'Dell', 'CN-0KU789-71 ', 'DELL', 'Estacion 092', 'FORMALIZACION', 'Equipo funcionando'),
	(429, 'HP', 'CNN5381BP9 ', 'HP L1706', 'Estacion 093', 'FORMALIZACION', 'Equipo funcionando'),
	(430, 'HP', 'CNN64105N7 ', 'HP L1706', 'Estacion 094', 'FORMALIZACION', 'Equipo funcionando'),
	(431, 'HP', 'CNN64106M9 ', 'HP L1706', 'Estacion 095', 'FORMALIZACION', 'Equipo funcionando'),
	(432, 'HP', 'CNN641048W ', 'HP L1706', 'Estacion 096', 'FORMALIZACION', 'Equipo funcionando'),
	(433, 'HP', 'CNN73107DD', 'HP L1706', 'Estacion 097', 'FORMALIZACION', 'Equipo funcionando'),
	(434, 'HP', 'CNN73107PJ', 'HP L1706', 'Estacion 098', 'FORMALIZACION', 'Equipo funcionando'),
	(435, 'HP', 'CNN6420YYH', 'HP L1706', 'Estacion 099', 'FORMALIZACION', 'Equipo funcionando'),
	(436, 'BENQ', 'ET14G06562019', 'BENQ', 'Estacion 100', 'FORMALIZACION', 'Equipo funcionando'),
	(437, 'HP', 'CNN64106MN', 'HP L1706', 'Estacion 075', 'Monitoreo', 'Equipo funcionando'),
	(438, 'HP', 'CNN5381C28', 'HP L1706', 'Estacion 076', 'Monitoreo', 'Equipo funcionando'),
	(439, 'HP', 'CNN7322GQ7', 'HP L1706', 'Estacion 078', 'Monitoreo', 'Equipo funcionando'),
	(440, 'HP', 'CNN64106RN', 'HP L1706', 'Estacion 079', 'Monitoreo', 'Equipo funcionando'),
	(441, 'HP', 'CNN7322G92', 'HP L1706', 'Estacion 080', 'Monitoreo', 'Equipo funcionando'),
	(442, 'HP', 'CNN64105RZ', 'HP L1706', 'Estacion 081', 'Monitoreo', 'Equipo funcionando'),
	(443, 'HP', 'CNN64105W2', 'HP L1706', 'Estacion 082', 'Monitoreo', 'Equipo funcionando'),
	(444, 'HP', 'CNN7322GQM', 'HP L1706', 'Estacion 083', 'Monitoreo', 'Equipo funcionando'),
	(445, 'HP', 'CNN64212RX', 'HP L1706', 'Estacion 084', 'Procesos', 'Equipo funcionando'),
	(446, 'HP', 'CNN64104TX', 'HP L1706', 'Estacion 060', 'Monitoreo', 'Equipo funcionando'),
	(447, 'HP', 'CNN64106PX', 'HP L1706', 'Estacion 061', 'Monitoreo', 'Equipo funcionando'),
	(448, 'h', 'CNN641480', 'HP L1706', 'Estacion 062', 'Monitoreo', 'Equipo funcionando'),
	(449, 'HP', 'CNN7322G8T', 'HP L1706', 'Estacion 063', 'Monitoreo', 'Equipo funcionando'),
	(450, 'HP', 'CNN7322G8Y', 'HP L1706', 'Estacion 064', 'Monitoreo', 'Equipo funcionando'),
	(451, 'HP', 'CNN7322GQP', 'HP L1706', 'Estacion 065', 'Monitoreo', 'Equipo funcionando'),
	(452, 'HP', 'CNN7322G8H', 'HP L1706', 'Estacion 072', 'Monitoreo', 'Equipo funcionando'),
	(453, 'HP', 'CNN73107CZ', 'HP L1706', 'Estacion 071', 'Monitoreo', 'Equipo funcionando'),
	(454, 'HP', 'CNN64105Z1', 'HP L1706', 'Estacion 068', 'Monitoreo', 'Equipo funcionando'),
	(455, 'HP', 'CNN64106PN', 'HP L1706', 'Estacion 044', 'Invex', 'Equipo funcionando'),
	(456, 'HP', 'CNN7322G8R', 'HP L1706', 'Estacion 044', 'Maquilas', 'Equipo funcionando'),
	(457, 'HP', 'CNN73107CN', 'HP L1706', 'Estacion 046', 'Invex', 'Equipo funcionando'),
	(458, 'HP', 'CNN7322G8R', 'HP L1706', 'Estacaion 045', 'Monitoreo', 'Equipo funcionando'),
	(459, 'HP', 'CNN64106PN', 'HP L1706', 'Estacion 044', 'Invex', 'Equipo funcionando'),
	(460, 'AOC', '33E5BA004834', '236LM00044', 'Estacion 047', 'Invex', 'Equipo funcionando'),
	(461, 'HP', 'CNN6420Z8F', 'HP L1706', 'Estacion 048', 'Invex', 'Equipo funcionando'),
	(462, 'HP', 'CNN5381C04', 'HP L1706', 'Estacion 049', 'Invex', 'Equipo funcionando'),
	(463, 'HP', 'CNN7322GQC', 'HP L1706', 'Estacion 050', 'Invex', 'Equipo funcionando'),
	(464, 'HP', 'CNN7322GR3', 'HP L1706', 'Estacion 051', 'Invex', 'Equipo funcionando'),
	(465, 'HP', 'CNN7322GQD', 'HP L1706', 'Estacion 053', 'Invex', 'Equipo funcionando'),
	(466, 'HP', 'CNN6410AZ6', 'HP L1706', 'Estacion 054', 'Invex', 'Equipo funcionando'),
	(467, 'HP', 'CNN7322GQL', 'HP L1706', 'Estacion 055', 'Invex', 'Equipo funcionando'),
	(468, 'HP', 'CNN7322G9K', 'HP L1706', 'Estacion 056', 'Invex', 'Equipo funcionando'),
	(469, 'HP', 'CNN6410560', 'HP L1706', 'Estacion 057', 'Invex', 'Equipo funcionando'),
	(470, 'HP', 'CNN7322G96', 'HP L1706', 'Estacion 058', 'Invex', 'Equipo funcionando'),
	(471, 'HP', 'CNN64104ZD', 'HP L1706', 'Estacion 059', 'Invex', 'Equipo funcionando'),
	(472, 'HP', 'CNN7322GQZ', 'HP L1706', 'Estacion 070', 'Invex', 'Equipo funcionando'),
	(473, 'HP', 'CNN6322GQ6', 'HP L1706', 'Estacion 066', 'Monitoreo', 'Equipo funcionando'),
	(474, 'HP', 'CNN73107BD', 'HP L1706', 'Estacion 067', 'Invex', 'Equipo funcionando'),
	(475, 'HP', 'CNN5381C0P', 'HP L1706', 'Estacion 069', 'Monitoreo', 'Equipo funcionando'),
	(476, 'AOC', 'AEUF59AOO3416', 'AOC', 'Estacion 074', 'Monitoreo', 'Equipo funcionando, Equipo de Saul Aguilar'),
	(477, 'HP', 'CNN641048S', 'HP L1706', 'Estacion 077', 'Monitoreo', 'Equipo funcionando'),
	(478, 'HP', 'CNN64105W9', 'HP L1706', 'Estacion 085', 'FORMALIZACION', 'Equipo funcionando'),
	(479, 'HP', 'CNN7322G8J', 'HP L1706', 'Estacion 104', 'Auditoria', 'Equipo funcionando'),
	(480, 'HP', 'CNN64105X3', 'HP L1706', 'Estacion 105', 'Auditoria', 'Equipo funcionando'),
	(481, 'HP', 'CNN73107CS', 'HP L1706', 'Estacion 106', 'Auditoria', 'Equipo funcionando'),
	(482, 'HP', 'CNN64105WC', 'HP L1706', 'Estacion 107', 'Auditoria', 'Equipo funcionando'),
	(483, 'HP', 'PX849A', 'HP L1706', 'Estacion 108', 'Auditoria', 'Numero de serie dañado, se coloco el numero de producto'),
	(484, 'HP', 'CNN5381BF7', 'HP L1706', 'Estacion 109', 'Auditoria', 'Equipo funcionando'),
	(485, 'HP', 'CNN64105VV', 'HP L1706', 'Estacion 110', 'Auditoria', 'Equipo funcionando'),
	(486, 'HP', 'CNN641055P', 'HP L1706', 'Estacion 111', 'Auditoria', 'Equipo funcionando'),
	(487, 'HP', 'CNN7322G9F', 'HP L1706', 'Estacion 112', 'Auditoria', 'Equipo funcionando'),
	(488, 'HP', 'CN-0PM372', 'DELL', 'Estacion 113', 'Auditoria', 'Equipo funcionando'),
	(489, 'DELL', 'CN-0PM372', 'DELL', 'Estacion 113', 'Auditoria', 'Equipo funcionando'),
	(490, 'DELL', 'CN-DCC280', 'M-1707FPf', 'Estacion 114', 'Auditoria', 'Equipo funcionando'),
	(491, 'HP', 'CNN63107D3', 'HP L1706', 'Estacion 115', 'Auditoria', 'Equipo funcionando'),
	(492, 'HP', 'CNN641048R', 'HP L1706', 'Estacion 116', 'Auditoria', 'Equipo funcionando'),
	(493, 'HP', 'CNN5381C16', 'HP L1706', 'Estacion 117', 'Auditoria', 'Equipo funcionando'),
	(494, 'HP', 'CNN7322G7J', 'HP L1706', 'Estacion 118', 'Auditoria', 'Equipo funcionando'),
	(495, 'HP', 'CNN7322G94', 'HP L1706', 'Estacion 119', 'Auditoria', 'Equipo funcionando');
/*!40000 ALTER TABLE `monitor_oficial` ENABLE KEYS */;

-- Volcando estructura para tabla soporte.mouse
CREATE TABLE IF NOT EXISTS `mouse` (
  `uniqueid` int(250) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(50) NOT NULL,
  `piso` int(100) NOT NULL,
  `almacen` int(100) NOT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla soporte.mouse: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `mouse` DISABLE KEYS */;
REPLACE INTO `mouse` (`uniqueid`, `ubicacion`, `piso`, `almacen`) VALUES
	(1, 'Lázaro', 98, 22);
/*!40000 ALTER TABLE `mouse` ENABLE KEYS */;

-- Volcando estructura para tabla soporte.teclados
CREATE TABLE IF NOT EXISTS `teclados` (
  `uniqueid` int(250) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(50) NOT NULL,
  `piso` int(100) NOT NULL,
  `almacen` int(100) NOT NULL,
  PRIMARY KEY (`uniqueid`)
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla soporte.teclados: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `teclados` DISABLE KEYS */;
REPLACE INTO `teclados` (`uniqueid`, `ubicacion`, `piso`, `almacen`) VALUES
	(128, 'Lázaro', 108, 18);
/*!40000 ALTER TABLE `teclados` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
