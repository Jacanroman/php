/* CONSULTAS DE AGRUPAMIENTO */

SELECT COUNT(titulo) AS 'numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;


/* CONDICIONES EN CONSULTAS DE AGRUPAMIENTO ---HAVING---*/

SELECT COUNT(titulo) AS 'numero de entradas', categoria_id 
FROM entradas GROUP BY categoria_id
HAVING COUNT(titulo) >= 4;


/* 
AVG ---- media
COUNT --- contar
MAX -- Devuelve el valor maximo del grupo
MIN -- Devuelve el valor minimo del grupo
SUM -- Sumar todo el contenido del grupo
*/


SELECT AVG(id) AS 'MEDIA DEL ID' FROM entradas;

SELECT MAX(id) AS 'Maximo_id', titulo FROM entradas;

SELECT MIN(id) AS 'Minimo_id', titulo FROM entradas;

SELECT SUM(id) AS 'Suma de los id' FROM entradas;





