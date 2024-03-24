CREATE DATABASE IF NOT EXISTS CapitalVan;
USE CapitalVan;

/* Borrado de tablas para ejecutar desde 0 */
DROP TABLE IF EXISTS Service;
DROP TABLE IF EXISTS Place;
DROP TABLE IF EXISTS Company;
DROP TABLE IF EXISTS Vehicle;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS User_Type;
/* Borrado de tablas para ejecutar desde 0 */

CREATE TABLE IF NOT EXISTS User_Type(
  id_user_type INT NOT NULL AUTO_INCREMENT,
	user_type VARCHAR(15) NOT NULL,
	PRIMARY KEY(id_user_type)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS User(
  id_user INT NOT NULL AUTO_INCREMENT,
  id_user_type INT NOT NULL,
  user_name VARCHAR(50) NOT NULL,
  user_lastname VARCHAR(50) NOT NULL,
  user_username VARCHAR(20) NOT NULL,
  user_email VARCHAR(100),
  user_phone INT NOT NULL,
  user_rut VARCHAR(15),
  user_pass VARCHAR(100),
  user_created_at DATETIME NOT NULL DEFAULT NOW(),
	PRIMARY KEY(id_user),
    FOREIGN KEY(id_user_type) REFERENCES User_Type(id_user_type)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Vehicle (
  id_vehicle INT NOT NULL AUTO_INCREMENT,
  vehicle_licence_plate VARCHAR(12) NOT NULL,
	PRIMARY KEY(id_vehicle)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Company (
  id_company INT NOT NULL AUTO_INCREMENT,
  company_name VARCHAR(100) NOT NULL,
  company_contact_name VARCHAR(50) NOT NULL,
  company_rut VARCHAR(15) NOT NULL,
  company_phone INT,
  company_email VARCHAR(100),
  company_address VARCHAR(100),
	PRIMARY KEY(id_company)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Place(
  id_place INT NOT NULL AUTO_INCREMENT,
  place_name VARCHAR(100) NOT NULL,
  place_address VARCHAR(100) NOT NULL,
  place_phone INT NOT NULL,
  place_email VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_place)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Service(
  id_service INT NOT NULL AUTO_INCREMENT,
  id_service_driver INT,
  id_service_guide INT NOT NULL,
  id_service_approver INT,
  id_service_vehicle INT,
  id_service_company INT NOT NULL,
  service_origin INT NOT NULL,
  service_destination INT NOT NULL,
  service_date DATE NOT NULL DEFAULT CURDATE(),
  service_acronym VARCHAR(10) NOT NULL,
  service_quantity_passengers INT NOT NULL,
  service_price INT NOT NULL,
  service_status TINYINT(1) NOT NULL DEFAULT '0',
  service_attachment VARCHAR(200),

	PRIMARY KEY(id_service),
  FOREIGN KEY(id_service_driver) REFERENCES User(id_user),
  FOREIGN KEY(id_service_guide) REFERENCES User(id_user),
  FOREIGN KEY(id_service_vehicle) REFERENCES Vehicle(id_vehicle),
  FOREIGN KEY(id_service_company) REFERENCES Company(id_company),
  FOREIGN KEY(id_service_approver) REFERENCES User(id_user),
  FOREIGN KEY(service_origin) REFERENCES Place(id_place),
  FOREIGN KEY(service_destination) REFERENCES Place(id_place)
)CHARSET=utf8;

/* Se agregan datos para pruebas */
INSERT INTO User_Type(user_type)
  VALUES ('Administrador');
INSERT INTO User_Type(user_type)
  VALUES ('Conductor');
INSERT INTO User_Type(user_type)
  VALUES ('Guia');
INSERT INTO User_Type(user_type)
  VALUES ('Cliente');

INSERT INTO User (id_user_type, user_name, user_lastname, user_username, user_email, user_phone, user_rut, user_pass) VALUES (1, 'Admin', '', 'admin' ,'salvador@nandudigital.cl', 123456789, '180229140', MD5('admin'));
INSERT INTO User (id_user_type, user_name, user_lastname, user_username, user_email, user_phone, user_rut, user_pass) VALUES (1, 'Salvador', 'Selman', 'sselman' ,'salvador@nandudigital.cl', 123456789, '180229140', MD5('contraseña'));
INSERT INTO User (id_user_type, user_name, user_lastname, user_username, user_email, user_phone, user_rut, user_pass) VALUES (1, 'Prueba', 'Prueba', 'pprueba' ,'prueba@correo.cl', 123456789, '12345674', MD5('contraseña'));
INSERT INTO User (id_user_type, user_name, user_lastname, user_username, user_email, user_phone, user_rut, user_pass) VALUES (3, 'Guia', 'Uno', 'guno' ,'guia1@correo.cl', 123456789, '12345674', MD5('contraseña'));
INSERT INTO User (id_user_type, user_name, user_lastname, user_username, user_email, user_phone, user_rut, user_pass) VALUES (2, 'Conductor', 'Uno', 'cuno' ,'conductor1@correo.cl', 123456789, '12345674', MD5('contraseña'));

INSERT INTO Vehicle (vehicle_licence_plate) VALUES ('AAAA01');

INSERT INTO Company (company_name, company_contact_name, company_rut, company_phone, company_email, company_address) 
              VALUES('Empresa uno', 'contacto empresa 1', 111111111, 111111111, 'empresa1@correo.cl', 'direccion empresa uno 111');
INSERT INTO Company (company_name, company_contact_name, company_rut, company_phone, company_email, company_address) 
              VALUES('Empresa dos', 'contacto empresa 2', 222222222, 222222222, 'empresa2@correo.cl', 'direccion empresa dos 222');
INSERT INTO Company (company_name, company_contact_name, company_rut, company_phone, company_email, company_address) 
              VALUES('Empresa tres', 'contacto empresa 3', 333333333, 333333333, 'empresa3@correo.cl', 'direccion empresa tres 333');

INSERT INTO Place (place_name, place_address, place_phone, place_email) VALUES ('lugar uno', 'direccion lugar uno', 444416666, 'lugar1@correo.cl');
INSERT INTO Place (place_name, place_address, place_phone, place_email) VALUES ('lugar dos', 'direccion lugar dos', 777725555, 'lugar2@correo.cl');
INSERT INTO Place (place_name, place_address, place_phone, place_email) VALUES ('lugar tres', 'direccion lugar tres', 111123333, 'lugar3@correo.cl');

INSERT INTO Service (id_service_guide, id_service_company, service_origin, service_destination, service_acronym, service_quantity_passengers, service_price) VALUES (3, 1, 1, 2, 'AAA001', 6, 150000);