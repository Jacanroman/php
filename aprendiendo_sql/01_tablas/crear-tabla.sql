/*
CREAR TABLAS

int(nº caracteres) ENTERO
integer(nº caracteres) ENTERO
varchar(nº caracteres) string/alfanumerico  con un maximo de 255 caracteres
char(nº caracteres) string/alfanumerico
float(nº cifras, nº decimales) decimal
date, time, timestamp

text (almacenar 65000 caracteres)
mediumtext (almacenar 16 millones caracteres)


*/


CREATE TABLE usuarios (
   id INT(11) auto_increment not null,
   nombre VARCHAR(100) not null,
   apellidos VARCHAR(255) default('hola que tal'),
   email VARCHAR(255) not null,
   password VARCHAR (255),
   CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

