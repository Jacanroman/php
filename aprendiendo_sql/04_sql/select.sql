/*MOSTRAR TODOS REGISTROS / FILAS DE UNA TABLA */

SELECT * from usuarios;

SELECT email, nombre, apellidos FROM usuarios;


/* OPERADORES ARITMETICOS */

SELECT email, (4+7) FROM usuarios;

SELECT email, (4+7) AS 'OPERACION' FROM usuarios;

/*FUNCIONES MATEMATICAS */

/*valor absoluto*/
SELECT abs(7) AS 'OPERACION' FROM usuarios;

/* Redondeo al alza */
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;

/* Redondeo a la baja */
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;

/* PI */
SELECT PI() AS 'OPERACION' FROM usuarios

/* FUNCIONES CON CARACTERES  STRING*/


/*selecionar en mayusculas*/
SELECT UPPER(nombre) FROM usuarios;

/*selecionar en minusculas*/
SELECT LOWER(nombre) FROM usuarios;

/*selecionar CONCATENANDO*/
SELECT CONCAT(nombre, '', apellidos) AS 'CONVERSION' FROM usuarios;

/*LENGTH longitud cadena de caracteres*/
SELECT LENGTH(CONCAT(nombre, '', apellidos)) AS 'CONVERSION' FROM usuarios;

/*TRIM quitar los espacios*/
SELECT TRIM(CONCAT('       ',nombre, '', apellidos)) AS 'CONVERSION' FROM usuarios;


/* FUNCIONES CON FECHAS */

/* MOSTRAR FECHA ACTUAL*/
SELECT email, nombre, fecha, CURDATE() AS 'Fecha actual'FROM usuarios;


/* dias de diferencia entre la fecha y la fecha actual*/
SELECT email, nombre, DATEDIFF(fecha, CURDATE() ) FROM usuarios;

/* nombre del dia*/
SELECT email, nombre, DAYNAME(fecha) FROM usuarios;


/*FUNCIONES GENERALES*/

/*comprobar si algo es nulo*/
SELECT email, ISNULL(apellidos) FROM usuarios;

/* comprobar si algo es igual */
SELECT email, STRCMP('hola','hola') FROM usuarios;

/* si algo es nulo poner algo*/

SELECT IFNULL(apellidos, 'ESTE CAMPO ESTA VACIO') FROM usuarios;
