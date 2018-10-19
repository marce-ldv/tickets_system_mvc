/*users (usuarios), customers (clientes), categories (categorias), events(eventos),
artists, calendars(calendario), place_events (lugar_evento), type_areas(tipo plazas),
area_events (plaza evento), calendars_x_artists(calendarios por artistas),
purchases (compras), lines_purchases (lineas compras), tickets,
accounts (cuenta), rols(roles)  ya esta*/

CREATE DATABASE dbusers;
USE dbusers;


CREATE TABLE users(
    id_user BIGINT UNSIGNED AUTO_INCREMENT,
    username VARCHAR(50),
    pass VARCHAR(100),
    email VARCHAR(50),
    role_user VARCHAR(50),
    CONSTRAINT pk_id_user PRIMARY KEY (id_user),
    CONSTRAINT uniq_username UNIQUE (username)
);

CREATE TABLE customers(
	id_customer BIGINT UNSIGNED AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	surname VARCHAR(50) NOT NULL,
	dni VARCHAR(50),
	id_fb INT,
	id_twitter INT,
	id_google INT,
	CONSTRAINT pk_id_customer PRIMARY KEY (id_customer),
	CONSTRAINT unq_dni UNIQUE (dni),
	CONSTRAINT unq_fb UNIQUE (id_fb)
);

CREATE TABLE categories(
	id_category BIGINT UNSIGNED AUTO_INCREMENT,
	description VARCHAR(50),
	CONSTRAINT pk_id_category PRIMARY KEY (id_category)
);

CREATE TABLE events(
	id_event BIGINT UNSIGNED AUTO_INCREMENT,
	id_category BIGINT UNSIGNED,
	title VARCHAR(50) NOT NULL,
	CONSTRAINT pk_id_event PRIMARY KEY (id_event),
	CONSTRAINT fk_id_category FOREIGN KEY (id_category) REFERENCES categories(id_category) ON DELETE CASCADE
); 

CREATE TABLE artists(
	id_artist BIGINT UNSIGNED AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	surname VARCHAR(50) NOT NULL,
	nick_name VARCHAR(50) NOT NULL,
	CONSTRAINT id_artist PRIMARY KEY (id_artist),
	CONSTRAINT nick_name UNIQUE (nick_name)
);


CREATE TABLE place_events(
	id_place_event BIGINT UNSIGNED AUTO_INCREMENT,
	capacity BIGINT NOT NULL,
	description VARCHAR(50),
	CONSTRAINT pk_id_place_event PRIMARY KEY (id_place_event)
);

CREATE TABLE type_areas(
	id_type_area BIGINT UNSIGNED AUTO_INCREMENT,
	description VARCHAR(50),
	CONSTRAINT pk_id_type_areas PRIMARY KEY (id_type_area)
);

CREATE TABLE calendars(
	id_calendar BIGINT UNSIGNED AUTO_INCREMENT,
	id_event BIGINT UNSIGNED,
	date_start DATE NOT NULL,
	date_end DATE NOT NULL,
	CONSTRAINT pk_id_calendar PRIMARY KEY (id_calendar),
	CONSTRAINT fk_id_event FOREIGN KEY (id_event) REFERENCES events(id_event) ON DELETE CASCADE
);

CREATE TABLE area_events(
	id_event_area BIGINT UNSIGNED AUTO_INCREMENT,
	id_type_area BIGINT UNSIGNED,
	id_calendar BIGINT UNSIGNED,
	quantity INT,
	price INT NOT NULL,
	remainder INT,
	CONSTRAINT pk_id_event_area PRIMARY KEY (id_event_area),
	CONSTRAINT fk_id_type_area FOREIGN KEY (id_type_area) REFERENCES type_areas(id_type_area) ON DELETE CASCADE,
	CONSTRAINT fk_id_calendar FOREIGN KEY (id_calendar) REFERENCES calendars(id_calendar) ON DELETE CASCADE
);

CREATE TABLE calendars_x_artists(
	id_calendar_x_artist BIGINT UNSIGNED AUTO_INCREMENT,
	id_calendar BIGINT UNSIGNED,
	id_artist BIGINT UNSIGNED,
	CONSTRAINT pk_id_calendar_x_artist PRIMARY KEY (id_calendar_x_artist),
	CONSTRAINT fk_id_calendar_x_artist_calendar FOREIGN KEY (id_calendar) REFERENCES calendars(id_calendar) ON DELETE CASCADE,
	CONSTRAINT fk_id_calendar_x_artist_artist FOREIGN KEY (id_artist) REFERENCES artists (id_artist) ON DELETE CASCADE
);


CREATE TABLE purchases(
	id_purchase BIGINT UNSIGNED AUTO_INCREMENT,
	id_customer BIGINT UNSIGNED,
	date_purchase DATE,
	CONSTRAINT pk_id_purchase PRIMARY KEY (id_purchase),
	CONSTRAINT fk_id_customer FOREIGN KEY (id_customer) REFERENCES customers (id_customer) ON DELETE CASCADE
);

CREATE TABLE lines_purchases(
	id_line_purchase BIGINT UNSIGNED AUTO_INCREMENT,
	id_purchase BIGINT UNSIGNED,
	quantity INT,
	price INT,
	CONSTRAINT pk_id_line_purchase PRIMARY KEY (id_line_purchase),
	CONSTRAINT fk_id_purchase FOREIGN KEY (id_purchase) REFERENCES purchases (id_purchase) ON DELETE CASCADE
);


CREATE TABLE tickets(
	id_ticket BIGINT UNSIGNED AUTO_INCREMENT,
	number_n INT,
	code_qr VARCHAR(50) NOT NULL,
	CONSTRAINT pk_id_ticket PRIMARY KEY (id_ticket),
	CONSTRAINT uniq_code_qr UNIQUE (code_qr) 
);


CREATE TABLE accounts(
	id_account BIGINT UNSIGNED AUTO_INCREMENT,
	nick_name VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	id_rol BIGINT UNSIGNED,
	CONSTRAINT pk_id_account PRIMARY KEY (id_account)
);

CREATE TABLE rols(
	id_rol BIGINT UNSIGNED AUTO_INCREMENT,
	priority INT NOT NULL,
	CONSTRAINT pk_id_rol PRIMARY KEY (id_rol)
);





