CREATE DATABASE IF NOT EXISTS CapitalVan;
USE CapitalVan;

/* Borrado de tablas para ejecutar desde 0 */
DROP TABLE IF EXISTS Servicio;
DROP TABLE IF EXISTS Lugar;
DROP TABLE IF EXISTS Empresa;
DROP TABLE IF EXISTS Recurso;
DROP TABLE IF EXISTS Usuario;
DROP TABLE IF EXISTS Tipo_Usuario;
/* Borrado de tablas para ejecutar desde 0 */

CREATE TABLE IF NOT EXISTS Tipo_Usuario(
	id_tipo_usuario INT NOT NULL AUTO_INCREMENT,
	tipo_usuario VARCHAR(10) NOT NULL,
	PRIMARY KEY(id_tipo_usuario)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Usuario (
    id_usuario INT NOT NULL AUTO_INCREMENT,
    id_tipo_usuario INT NOT NULL,
    nombre_usuario VARCHAR(50) NOT NULL,
    apellido_usuario VARCHAR(50) NOT NULL,
    correo_usuario VARCHAR(100),
    rut_usuario VARCHAR(15),
    contrasena_usuario VARCHAR(100),
	PRIMARY KEY(id_usuario),
    FOREIGN KEY(id_tipo_usuario) REFERENCES Tipo_Usuario(id_tipo_usuario)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Recurso (
    id_recurso INT NOT NULL AUTO_INCREMENT,
    patente_recurso VARCHAR(12) NOT NULL,
	PRIMARY KEY(id_recurso)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Empresa (
    id_empresa INT NOT NULL AUTO_INCREMENT,
    nombre_empresa VARCHAR(100) NOT NULL,
    nombre_contacto_empresa VARCHAR(50) NOT NULL,
    rut_empresa VARCHAR(15) NOT NULL,
    telefono_empresa INT,
    correo_empresa VARCHAR(100),
    dirección_empresa VARCHAR(100),
	PRIMARY KEY(id_empresa)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Lugar(
    id_lugar INT NOT NULL AUTO_INCREMENT,
    nombre_lugar VARCHAR(100) NOT NULL,
    dirección_lugar VARCHAR(100) NOT NULL,
    telefono_lugar INT NOT NULL,
    correo_lugar VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_lugar)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Servicio (
    id_servicio INT NOT NULL AUTO_INCREMENT,
    id_conductor_servicio INT,
    id_guia_servicio INT NOT NULL,
    id_aprobador_servicio INT,
    id_recurso_servicio INT,
    id_empresa_servicio INT NOT NULL,
    origen_servicio INT NOT NULL,
    destino_servicio INT NOT NULL,
    fecha_servicio DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    sigla_servicio INT NOT NULL,
    cantidad_pasajeros_servicio INT NOT NULL,
    valor_servicio INT NOT NULL,
    estado_servicio TINYINT(1) NOT NULL DEFAULT '0',
    archivo_adjunto_servicio VARCHAR(200),

	PRIMARY KEY(id_servicio),
    FOREIGN KEY(id_conductor_servicio) REFERENCES Usuario(id_usuario),
    FOREIGN KEY(id_guia_servicio) REFERENCES Usuario(id_usuario),
    FOREIGN KEY(id_recurso_servicio) REFERENCES Recurso(id_recurso),
    FOREIGN KEY(id_empresa_servicio) REFERENCES Empresa(id_empresa),
    FOREIGN KEY(id_aprobador_servicio) REFERENCES Usuario(id_usuario),
    FOREIGN KEY(origen_servicio) REFERENCES Lugar(id_lugar),
    FOREIGN KEY(destino_servicio) REFERENCES Lugar(id_lugar)
)CHARSET=utf8;

/* Se agregan datos para pruebas */
INSERT INTO Tipo_Usuario(tipo_usuario)
    VALUES ('Administrador');
INSERT INTO Tipo_Usuario(tipo_usuario)
    VALUES ('Conductor');
INSERT INTO Tipo_Usuario(tipo_usuario)
    VALUES ('Guia');
INSERT INTO Tipo_Usuario(tipo_usuario)
    VALUES ('Cliente');

INSERT INTO Usuario (id_tipo_usuario, nombre_usuario, apellido_usuario, correo_usuario, rut_usuario, contrasena_usuario) VALUES (1, 'Salvador', 'Selman', 'salvador@nandudigital.cl', '180229140', MD5('contraseña'));
INSERT INTO Usuario (id_tipo_usuario, nombre_usuario, apellido_usuario, correo_usuario, rut_usuario, contrasena_usuario) VALUES (1, 'Prueba', 'Prueba', 'prueba@correo.cl', '12345674', MD5('contraseña'));
INSERT INTO Usuario (id_tipo_usuario, nombre_usuario, apellido_usuario, correo_usuario, rut_usuario, contrasena_usuario) VALUES (3, 'Guia', 'Uno', 'guia1@correo.cl', '12345674', MD5('contraseña'));
INSERT INTO Usuario (id_tipo_usuario, nombre_usuario, apellido_usuario, correo_usuario, rut_usuario, contrasena_usuario) VALUES (2, 'Conductor', 'Uno', 'conductor1@correo.cl', '12345674', MD5('contraseña'));

INSERT INTO Recurso (patente_recurso) VALUES ('AAAA01');

INSERT INTO Empresa (nombre_empresa, nombre_contacto_empresa, rut_empresa, telefono_empresa, correo_empresa, dirección_empresa) VALUES ('Empresa uno', 'contacto empresa 1', 111111111, 1111111111, 'empresa1@correo.cl', 'direccion empresa uno 111');
INSERT INTO Empresa (nombre_empresa, nombre_contacto_empresa, rut_empresa, telefono_empresa, correo_empresa, dirección_empresa) VALUES ('Empresa dos', 'contacto empresa 2', 222222222, 2222222222, 'empresa2@correo.cl', 'direccion empresa dos 222');

INSERT INTO Lugar (nombre_lugar, dirección_lugar, telefono_lugar, correo_lugar) VALUES ('lugar uno', 'direccion lugar uno', 444416666, 'lugar1@correo.cl');
INSERT INTO Lugar (nombre_lugar, dirección_lugar, telefono_lugar, correo_lugar) VALUES ('lugar dos', 'direccion lugar dos', 777725555, 'lugar2@correo.cl');
INSERT INTO Lugar (nombre_lugar, dirección_lugar, telefono_lugar, correo_lugar) VALUES ('lugar tres', 'direccion lugar tres', 111123333, 'lugar3@correo.cl');

INSERT INTO Servicio (id_guia_servicio, id_empresa_servicio, origen_servicio, destino_servicio, sigla_servicio, cantidad_pasajeros_servicio, valor_servicio)
VALUES (3, 1, 1, 2, 'AAA001', 6, 150000);