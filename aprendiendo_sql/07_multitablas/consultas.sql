/*
CONSULTA MULTITABLA:

Son consultas que sirven para consultar varias
tablas en un sola sentencia
*/


/*Mostrar las entradas con el nombre del autor y
el nombre de la categoria*/

SELECT entradas.titulo, usarios.nombre, categorias.nombre
FROM entradas, usuarios, categorias;

/* con alias */
SELECT e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c;


SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id=u.id AND e.categoria_id=c.id;



/*INNER JOIN
igual que lo anterior con INNER JOIN
*/

SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
INNER JOIN categorias c ON e.categoria_id = c.id;





/*Mostrar el nombre de las categorias y al 
lado cuantas entradas tienen*/

SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id= c.id GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id=c.id
GROUP BY e.categoria_id;


/*Mostar el email de los usuarios y al lado 
cuantas entradas tienee*/

SELECT u.email, COUNT(e.id) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;


