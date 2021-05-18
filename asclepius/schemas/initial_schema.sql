CREATE SCHEMA IF NOT EXISTS asclepius;

CREATE TABLE IF NOT EXISTS asclepius.spec
(
    id         		SERIAL 	   PRIMARY KEY,
	name			TEXT	   NOT NULL
);

CREATE TABLE IF NOT EXISTS asclepius.hospital
(
    id          	SERIAL	PRIMARY KEY,
	name			TEXT	NOT NULL,
	street_name		TEXT	NOT NULL,
	street_number	TEXT	NOT NULL,
	city			TEXT	NOT NULL,
	postal_code		TEXT	NOT NULL,
	country			TEXT	NOT NULL
);

CREATE TABLE IF NOT EXISTS asclepius.doctor
(
    id         		SERIAL 	   PRIMARY KEY,
    name			TEXT	   NOT NULL,
	lastname		TEXT	   NOT NULL,
	email			TEXT	   NOT NULL,
	password	  	TEXT       NOT NULL,
	phone			INT		   NOT NULL,
	hospital_id		BIGINT		/* UNSIGNED */  NOT NULL,
	office_number	SMALLINT   NOT NULL,
	spec_id			BIGINT	/*	UNSIGNED */  NOT NULL
	

    -- FOREIGN KEY (hospital_id) REFERENCES asclepius.hospital (id),
	-- FOREIGN KEY (spec_id) REFERENCES asclepius.spec (id)
);

CREATE TABLE IF NOT EXISTS asclepius.patient
(
    id           SERIAL  			PRIMARY KEY,
	pesel			INT				NOT NULL,
    name		  	TEXT  			NOT NULL,
	lastname		TEXT			NOT NULL,
    password	  	TEXT     		NOT NULL,
    email         	TEXT      		NOT NULL,
    phone		  	INT,
    street_name   	TEXT            NOT NULL,
    street_number 	TEXT 			NOT NULL,
    flat_number   	TEXT, 				
    city          	TEXT            NOT NULL,
    country	      	TEXT            NOT NULL,
    postal_code   	TEXT		    NOT NULL,
	age			  	TINYINT			NOT NULL,
	gender		  	TEXT			NOT NULL
    -- doctor_id	  	BIGINT	UNSIGNED			NOT NULL,

	-- FOREIGN KEY (doctor_id) REFERENCES asclepius.doctor (id)
);

CREATE TABLE IF NOT EXISTS asclepius.pc_info
(
	id				SERIAL	PRIMARY KEY,
	patient_id		BIGINT UNSIGNED		NOT NULL,
	illness			TEXT	NOT NULL,
	date_of_visit	DATE	NOT NULL,
	doctor_id		BIGINT UNSIGNED		NOT NULL,
	drugs_in_use	TEXT	NOT NULL,
	
	FOREIGN KEY (doctor_id) REFERENCES asclepius.doctor (id),
	FOREIGN KEY (patient_id) REFERENCES asclepius.patient (id)
);

CREATE TABLE IF NOT EXISTS asclepius.patient_card
(
    id				SERIAL	PRIMARY KEY,
	info_id			BIGINT	UNSIGNED	NOT NULL,
	hospital_id		BIGINT	UNSIGNED	NOT NULL,
	
	FOREIGN KEY (info_id) REFERENCES asclepius.pc_info (id),
	FOREIGN KEY (hospital_id) REFERENCES asclepius.hospital (id)
);

CREATE TABLE IF NOT EXISTS asclepius.prescription
(
    id        	SERIAL		PRIMARY KEY,
	patient_id	BIGINT UNSIGNED			NOT NULL,
	doctor_id	BIGINT UNSIGNED			NOT NULL,
	drug_name	INT			NOT NULL,
	quantity	INT			NOT NULL,
	dosage		INT			NOT NULL,

	FOREIGN KEY (patient_id) REFERENCES asclepius.patient (id),
	FOREIGN KEY (doctor_id) REFERENCES asclepius.doctor (id)
);