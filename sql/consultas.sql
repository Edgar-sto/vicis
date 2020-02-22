SELECT * FROM estaciones WHERE num_estacion = 'Estacion 004' ORDER BY num_estacion;
SELECT * FROM estaciones ORDER BY num_estacion;


ALTER TABLE estaciones ADD cometario VARCHAR(100) NOT NULL;

 	
 INSERT INTO `estaciones` (uniqueid, num_estacion, local_host, serie_cpu, modelo_cpu, serie_monitor, marca_monito, campania, mouse, teclado, diadema, comentario)
 VALUES (119, "Estacion 119", "EST-LAZ-119", "F7D4KH1", "DCNE", "CNN7322G94", "HP", "Auditoria", "0", "0", "0", "Equipo incompleto");