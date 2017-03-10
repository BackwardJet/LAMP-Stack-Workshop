SHOW DATABASES;
DROP DATABASE RSVP;
CREATE DATABASE RSVP;
SHOW DATABASES;
USE RSVP;
CREATE TABLE Attendees(
    id              INT             NOT NULL AUTO_INCREMENT,
    name            VARCHAR (255)   NOT NULL,
    email           VARCHAR (255)   NOT NULL,
    num_attendees   INT             NOT NULL,
    food            VARCHAR (255),
    PRIMARY KEY (ID)
);
SHOW TABLES;
SHOW COLUMNS FROM Attendees;
