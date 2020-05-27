CREATE TABLE `inv_general` (
	`uniqueid` INT(50) NOT NULL AUTO_INCREMENT,
	`cpu_almacen` INT(10) NULL DEFAULT NULL,
	`cpu_uso` INT(10) NULL DEFAULT NULL,
	`cpu_dañados` INT(10) NULL DEFAULT NULL,
	`monitor_almacen` INT(10) NULL DEFAULT NULL,
	`monitor_uso` INT(10) NULL DEFAULT NULL,
	`monitor_dañados` INT(10) NULL DEFAULT NULL,
	`diadema_almacen` INT(10) NULL DEFAULT NULL,
	`diadema_uso` INT(10) NULL DEFAULT NULL,
	`diadema_dañados` INT(10) NULL DEFAULT NULL,
	`teclado_almacen` INT(10) NULL DEFAULT NULL,
	`teclado_uso` INT(10) NULL DEFAULT NULL,
	`teclado_dañados` INT(10) NULL DEFAULT NULL,
	`mouse_almacen` INT(10) NULL DEFAULT NULL,
	`mouse_uso` INT(10) NULL DEFAULT NULL,
	`mouse_dañados` INT(10) NULL DEFAULT NULL,
	
	PRIMARY KEY (`uniqueid`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=99
;

INSERT INTO `consumo_dia` (ip_cinco, ip_seis, ip_ocho, ip_once, ip_veintidos, ip_veintisiete, ip_veintiocho,
ip_veintinueve, ip_treintaycinco, ip_treintayseis, ip_treintaysiete, ip_treintayocho, ip_treintaynueve, ip_cuarentayuno,
ip_cuarentaydos, ip_cuarentaytres, ip_cuarentaycuatro, ip_cuarentaycinco, ip_cuarentayseis, ip_doscientosuno, fecha_registro)
VALUES (0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,'2020-05-10');