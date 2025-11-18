CREATE DATABASE ticket_system;
USE ticket_system;


CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) UNIQUE,
password VARCHAR(255)
);


CREATE TABLE tickets (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
event VARCHAR(255),
event_date DATE
);