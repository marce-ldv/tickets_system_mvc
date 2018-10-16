CREATE DATABASE dbusers;
USE dbusers;

CREATE TABLE users(
    id_user BIGINT AUTO_INCREMENT,
    username VARCHAR(50),
    pass VARCHAR(100),
    name_user VARCHAR(100),
    email VARCHAR(50),
    role_user VARCHAR(50),
    CONSTRAINT pk_id_user PRIMARY KEY (id_user)
);

CREATE TABLE customers(
	id_customer INT AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	surname VARCHAR(50) NOT NULL,
	dni VARCHAR(50),
	id_fb INT,
	CONSTRAINT pk_id_customer PRIMARY KEY (id_customer),
	CONSTRAINT unq_dni UNIQUE (dni),
	CONSTRAINT unq_fb UNIQUE (id_fb)
);

INSERT INTO users (username,pass,name_user,email,role_user) VALUES
('tefaltasopa','1234','Marcelo','marcefs@gmail.com','admin');
INSERT INTO users (username,pass,name_user,email,role_user) VALUES
('nachochad','1234','Ignacio','nachochad@gmail.com','user');
INSERT INTO users (username,pass,name_user,email,role_user) VALUES
('nicolascrack','1234','Nicolas','nicolascrack@gmail.com','user');