CREATE DATABASE fsms;

USE fsms;

CREATE TABLE user
(
    user_id VARCHAR(50) PRIMARY KEY,
    password VARCHAR(100),
    role VARCHAR(20)
);