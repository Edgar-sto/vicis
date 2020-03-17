UPDATE mouse
SET ubicacion='Piso' WHERE ubicacion='Auditoria' 

SELECT * FROM cpu WHERE ubicacion ='Piso';


SELECT COUNT(*) ubicacion FROM cpu WHERE ubicacion != 'Almacen'

INSERT INTO teclados (ubicacion)
SELECT ubicacion FROM mouse WHERE comentario=''


SELECT campaign_name, active FROM vicidial_campaigns WHERE active = 'Y';