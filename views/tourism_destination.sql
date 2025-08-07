CREATE DATABASE IF NOT EXISTS tourist_destination_db;

USE tourist_destination_db;

CREATE TABLE IF NOT EXISTS admin_tb(
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_username VARCHAR(255) NOT NULL,
    admin_password VARCHAR(255) NOT NULL,
    admin_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS  client_tb(
    client_id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(255) NOT NULL,
    client_email VARCHAR(255) NOT NULL,
    client_contact BIGINT(15) NOT NULL,
    client_message TEXT NOT NULL,
    client_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
