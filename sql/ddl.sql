CREATE DATABASE fsms;

USE fsms;

CREATE TABLE user
(
    user_id VARCHAR(50) PRIMARY KEY,
    password VARCHAR(100),
    role VARCHAR(20)
);

CREATE TABLE staff
(
    staff_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    gemder CHAR(1),
    dob DATE
)