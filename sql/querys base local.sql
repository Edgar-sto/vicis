UPDATE mouse
SET ubicacion='Piso' WHERE ubicacion=''

SELECT * FROM cpu WHERE ubicacion ='Piso';


SELECT COUNT(*) ubicacion FROM cpu WHERE ubicacion != 'Almacen'

INSERT INTO mouse (ubicacion)
SELECT campania FROM estaciones WHERE comentario=''