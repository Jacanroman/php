/* CONSULTA CON UNA CONDICION */

SELECT * FROM usuarios WHERE email='admin@admin.com'

/*
OPERADORES DE COMPARACION
Igual =
Distinto !=
Menor <
Mayor >
Menor o igual <=
Mayor o igula =>

Entre between A and B
En  in
Es  nulo is null
No  nulo is not null
Como like
No es como  not like

*/

/*
OPERADORES LOGICOS
o   OR
y   AND
no  NOT

*/

/*
comodines para LIKE

cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/



/*nombre y apellidos todos los usuarios que se registraton en 2019*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)= 2019;


/* mostrar todos los usuarios que no se registraron en 2019 */
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!= 2019;

/*mostrar todos los usuarios cuyo apellido tenga la letra a y que la contraseña sea prueba*/
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password='prueba';

/*mostrar todos los usuarios cuando el año de registro sea par*/
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

/*mostrar todos los registros cuyo nombre tenga mas de 5 letras registrado antes de 2020*/
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre)>5 and YEAR(fecha)<'2020';

/* PARA ORDENAR SEGUN LA COLUMNA ORDER BY */

SELECT * FROM usuarios ORDER BY fecha ASC;
SELECT * FROM usuarios ORDER BY fecha DESC;

/*LIMITAR LA CANTIDAD DE REGISTROS limit*/

SELECT * FROM usuarios LIMIT 3;
/*COGE A PARTIR DEL PRIMERO--DOS*/
SELECT * FROM usuarios LIMIT 1,2;
