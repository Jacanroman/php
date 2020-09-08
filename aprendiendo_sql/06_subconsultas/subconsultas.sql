/*
SUBCONSULTAS:
-Son consultas que se ejecutan dentro de otras.
-Consiste en utilizar los resultados de la subconsulta 
para operar en la consulta principal.
- Usando las claves ajenas /foraneas.

*/

/* SACAR TODOS LOS USUARIOS CON ENTRADAS */
SELECT * FROM usuarios 
WHERE id IN (SELECT usuario_id FROM entradas);

/* SACAR LOS USUARIOS SIN ENTRADAS */
SELECT * FROM usuarios 
WHERE id NOT IN (SELECT usuario_id FROM entradas);


/* SACAR LOS USUARIOS QUE TENGAN ALGUNA ENTRADA
QUE EN SU TITUTLO HABLE DE GTA */

SELECT * FROM usuarios
WHERE id IN (SELECT  usuario_id FROM entradas 
            WHERE titulo LIKE '%GTA%');


/*SACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION*/


SELECT * FROM entradas
WHERE categoria_id IN (SELECT id FROM categorias
                        WHERE nombre = 'Accion');

/*MOSTRAR LAS CATEGORIAS CON MAS DE 3 ENTRADAS */

SELECT * FROM categorias
WHERE id IN
(SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3) ;


/* MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN MARTES */

SELECT * FROM usuarios
WHERE id IN (SELECT usuario_id from entradas
            WHERE DAYOFWEEK(fecha) = 3 );

/* MOSTRAR el nombre de le usuario que tenga mas entradas*/

SELECT nombre FROM usuarios
WHERE id IN
    (SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC);

/* MOSTRAR LAS CATEGORIAS SIN ENTRADAS */

SELECT * FROM categorias WHERE 
    id NOT IN(SELECT categoria_id FROM entradas); 