/* Creación de la base de datos */
CREATE DATABASE IF NOT EXISTS CapitalVan;
USE CapitalVan;

/* Borrado de tablas para ejecutar desde 0 */
DROP TABLE IF EXISTS Service;
DROP TABLE IF EXISTS Place;
DROP TABLE IF EXISTS Company;
DROP TABLE IF EXISTS Vehicle;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS User_Type;
DROP TABLE IF EXISTS Service_Type;
/* Borrado de tablas para ejecutar desde 0 */

CREATE TABLE IF NOT EXISTS User_Type(
  id_user_type INT NOT NULL AUTO_INCREMENT,
  user_type VARCHAR(15) NOT NULL,

  PRIMARY KEY(id_user_type),
  
  UNIQUE INDEX idx_id_user_type(id_user_type)
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
  FOREIGN KEY(id_user_type) REFERENCES User_Type(id_user_type),
  
  UNIQUE INDEX idx_id_user(id_user),
  INDEX idx_user_name(user_name),
  INDEX idx_user_lastname(user_lastname),
  INDEX idx_user_rut(user_rut)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Vehicle (
  id_vehicle INT NOT NULL AUTO_INCREMENT,
  vehicle_licence_plate VARCHAR(12) NOT NULL,
  
  PRIMARY KEY(id_vehicle),
  
  UNIQUE INDEX idx_id_vehicle(id_vehicle),
  INDEX idx_vehicle_licence_plate(vehicle_licence_plate)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Company (
  id_company INT NOT NULL AUTO_INCREMENT,
  company_name VARCHAR(100) NOT NULL,
  company_contact_name VARCHAR(50) NOT NULL,
  company_rut VARCHAR(15) NOT NULL,
  company_phone INT,
  company_email VARCHAR(100),
  company_address VARCHAR(100),
  
  PRIMARY KEY(id_company),
  
  UNIQUE INDEX idx_id_company(id_company),
  INDEX idx_company_name(company_name)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Place(
  id_place INT NOT NULL AUTO_INCREMENT,
  place_name VARCHAR(100) NOT NULL,
  place_address VARCHAR(100) NOT NULL,
  place_phone INT NOT NULL,
  place_email VARCHAR(100) NOT NULL,
  
  PRIMARY KEY (id_place),
  
  UNIQUE INDEX idx_id_place(id_place),
  INDEX idx_place_name(place_name)
)CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Service_Type(
  id_service_type INT NOT NULL AUTO_INCREMENT,
  service_type VARCHAR (50) NOT NULL,

  PRIMARY KEY (id_service_type),
  UNIQUE INDEX idx_id_service_type(id_service_type),
  INDEX idx_service_type(service_type)
);

CREATE TABLE IF NOT EXISTS Service(
  id_service INT NOT NULL AUTO_INCREMENT,
  id_service_driver INT,
  id_service_guide INT NOT NULL,
  id_service_approver INT,
  id_service_vehicle INT,
  id_service_company INT NOT NULL,
  id_service_type INT NOT NULL,
  service_start_time TIME,
  service_end_time TIME,
  service_origin INT NOT NULL,
  service_destination INT NOT NULL,
  service_date DATE NOT NULL DEFAULT CURDATE(),
  service_acronym VARCHAR(10) NOT NULL,
  service_quantity_passengers INT NOT NULL,
  service_price INT NOT NULL,
  service_status TINYINT(1) NOT NULL DEFAULT '0',
  service_code_flight VARCHAR(10),
  service_attachment VARCHAR(300),

  PRIMARY KEY(id_service),
  FOREIGN KEY(id_service_driver) REFERENCES User(id_user),
  FOREIGN KEY(id_service_guide) REFERENCES User(id_user),
  FOREIGN KEY(id_service_vehicle) REFERENCES Vehicle(id_vehicle),
  FOREIGN KEY(id_service_company) REFERENCES Company(id_company),
  FOREIGN KEY(id_service_approver) REFERENCES User(id_user),
  FOREIGN KEY(service_origin) REFERENCES Place(id_place),
  FOREIGN KEY(service_destination) REFERENCES Place(id_place),
  FOREIGN KEY(id_service_type) REFERENCES Service_Type(id_service_type),

  UNIQUE INDEX idx_id_service(id_service),
  INDEX idx_id_service_driver(id_service_driver),
  INDEX idx_id_service_guide(id_service_guide),
  INDEX idx_id_service_approver(id_service_approver),
  INDEX idx_id_service_vehicle(id_service_vehicle),
  INDEX idx_id_service_company(id_service_company),
  INDEX idx_id_service_type(id_service_type),
  INDEX idx_service_origin(service_origin),
  INDEX idx_service_destination(service_destination),
  INDEX idx_service_date(service_date),
  INDEX idx_service_acronym(service_acronym),
  INDEX idx_service_status(service_status),
  INDEX service_idx_code_flight(service_code_flight)
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
INSERT INTO User (id_user_type, user_name, user_lastname, user_username, user_email, user_phone, user_rut, user_pass) VALUES (2, 'Conductor', 'dos', 'cdos' ,'conductor2@correo.cl', 123456789, '12345674', MD5('contraseña'));

INSERT INTO Vehicle (vehicle_licence_plate) VALUES ('AAAA01');

INSERT INTO Company (company_name, company_contact_name, company_rut, company_phone, company_email, company_address) VALUES('Empresa uno', 'contacto empresa 1', 111111111, 111111111, 'empresa1@correo.cl', 'direccion empresa uno 111');
INSERT INTO Company (company_name, company_contact_name, company_rut, company_phone, company_email, company_address) VALUES('Empresa dos', 'contacto empresa 2', 222222222, 222222222, 'empresa2@correo.cl', 'direccion empresa dos 222');
INSERT INTO Company (company_name, company_contact_name, company_rut, company_phone, company_email, company_address) VALUES('Empresa tres', 'contacto empresa 3', 333333333, 333333333, 'empresa3@correo.cl', 'direccion empresa tres 333');

INSERT INTO Place (place_name, place_address, place_phone, place_email) VALUES ('lugar uno', 'direccion lugar uno', 444416666, 'lugar1@correo.cl');
INSERT INTO Place (place_name, place_address, place_phone, place_email) VALUES ('lugar dos', 'direccion lugar dos', 777725555, 'lugar2@correo.cl');
INSERT INTO Place (place_name, place_address, place_phone, place_email) VALUES ('lugar tres', 'direccion lugar tres', 111123333, 'lugar3@correo.cl');

INSERT INTO Service_Type(service_type) VALUES ('FULL DAY');
INSERT INTO Service_Type(service_type) VALUES ('CITY TOUR');
INSERT INTO Service_Type(service_type) VALUES ('HD');

INSERT INTO Service (id_service_guide, id_service_company, service_origin, service_destination, id_service_type, service_acronym, service_quantity_passengers, service_price) VALUES (3, 1, 1, 2, 1, 'AAA001', 6, 150000);
INSERT INTO Service (id_service_driver, id_service_guide, id_service_company, service_origin, service_destination, id_service_type, service_acronym, service_quantity_passengers, service_price, service_status) VALUES (5, 3, 1, 1, 2, 2, 'AAA001', 8, 210000, 1);
INSERT INTO Service (id_service_driver, id_service_guide, id_service_company, service_origin, service_destination, id_service_type, service_acronym, service_quantity_passengers, service_price, service_status) VALUES (6, 3, 1, 1, 2, 3, 'AAA001', 5, 110000, 1);
INSERT INTO Service (id_service_driver, id_service_guide, id_service_company, service_origin, service_destination, id_service_type, service_acronym, service_quantity_passengers, service_price, service_status) VALUES (6, 3, 1, 1, 2, 1, 'AAA001', 5, 110000, 1);
INSERT INTO Service (id_service_driver, id_service_guide, id_service_company, service_origin, service_destination, id_service_type, service_acronym, service_quantity_passengers, service_price, service_status) VALUES (6, 3, 1, 1, 2, 1, 'AAA001', 5, 110000, 1);
INSERT INTO Service (id_service_driver, id_service_guide, id_service_company, service_origin, service_destination, id_service_type, service_acronym, service_quantity_passengers, service_price, service_status) VALUES (6, 3, 1, 1, 2, 1, 'AAA001', 5, 110000, 1);

/* consultas de prueba */
SELECT 
	s.id_service AS "ID Servicio", 
	s.service_status AS "Status", 
  ud.user_name as "Nombre conductor",
  ud.user_lastname as "Apellido conductor",
  ua.user_name as "Nombre Aprobador",
  ua.user_lastname as "Apellido Aprobador",
  c.company_name as "Empresa",
  po.place_name as "Origen",
  pd.place_name as "Destino",
  s.service_date as "Fecha del servicio",
  s.service_acronym as "Sigla del servicio",
  s.service_quantity_passengers as "Cantidad de pasajeros",
  s.service_price as "Valor del servicio",
  s.service_attachment as "Adjunto",
  v.vehicle_licence_plate as "Patente"
FROM 
  service s
LEFT JOIN 
  user ud on s.id_service_driver = ud.id_user
LEFT JOIN 
  user ua on s.id_service_approver = ua.id_user
LEFT JOIN 
  Company c on s.id_service_company = c.id_company
LEFT JOIN
  Place po on s.service_origin = po.id_place
LEFT JOIN
  Place pd on s.service_destination = pd.id_place
LEFT JOIN
  Vehicle v on s.id_service_vehicle = v.id_vehicle
WHERE 
  service_status != 0;
