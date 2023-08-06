CREATE DATABASE IF NOT EXISTS contact;

USE contact;

CREATE TABLE IF NOT EXISTS name_info (
    host_id INT AUTO_INCREMENT PRIMARY KEY,
    host_name VARCHAR(255) NULL,
    host_surname VARCHAR(255) NULL,
    host_telephone INT(10) NULL,
    host_address VARCHAR(255) NULL,
);
