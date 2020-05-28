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

INSERT INTO `inv_general` (cpu_almacen, cpu_uso, cpu_dañados, monitor_almacen, monitor_uso, monitor_dañados, diadema_almacen,
diadema_uso, diadema_dañados, teclado_almacen, teclado_uso, teclado_dañados, mouse_almacen, mouse_uso, mouse_dañados)
VALUES (2, 172, 0, 7, 172, 0, 0, 0, 0, 0, 172, 0, 0, 172, 0);