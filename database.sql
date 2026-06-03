CREATE DATABASE konaing_store;

USE konaing_store;

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
uid VARCHAR(50) UNIQUE,
email VARCHAR(100) UNIQUE,
phone VARCHAR(20) UNIQUE,
password VARCHAR(255),
status ENUM('active','banned') DEFAULT 'active',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
uid VARCHAR(50),
email VARCHAR(100),
phone VARCHAR(20),
amount VARCHAR(50),
receipt VARCHAR(255),
status ENUM('pending','approved','rejected') DEFAULT 'pending',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);