SELECT * FROM concentrado_telefonia WHERE d_phone_number = '7223389421';

INSERT INTO monitor (marca_monitor, serie_monitor)
SELECT marca_monitor, serie_monitor FROM estaciones; WHERE CLAVE=@CLAVESECRETOSDENEGUS