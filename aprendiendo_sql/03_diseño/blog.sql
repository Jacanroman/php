CREATE TABLE usuarios (
id int(255) auto_increment not null,
nombre VARCHAR(100) not null,
apellidos varchar(100) not null,
email VARCHAR(255) not null,
password VARCHAR(255) not null,
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

/*ENGINE=InnoDb para indicar el motor */


CREATE TABLE categorias(
id int(255) auto_increment not null,
nombre VARCHAR(100),
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
id INT(255) auto_increment not null,
usuario_id int(255) not null,
categoria_id int(255) not null,
titulo varchar(255) not null,
descripcion text,
fecha date not null,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;