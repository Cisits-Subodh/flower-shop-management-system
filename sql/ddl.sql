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
    gender CHAR(1),
    dob DATE
);
    CREATE TABLE product(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    category VARCHAR(50),
    unit VARCHAR(20),
    supplier VARCHAR(50),
    rate VARCHAR(20),
    gst VARCHAR(10)

);
CREATE TABLE supplier
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    business_name VARCHAR(20),
    supplier_name VARCHAR(50),
    mobile_no CHAR(10),
    email_id VARCHAR(30),
    office_address VARCHAR(50),
    gst VARCHAR(10),
    payment_terms VARCHAR(50)
);
CREATE TABLE purchase
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_invoice_no VARCHAR(50),
    parti_name VARCHAR(50),
    particulars VARCHAR(50),
    quantity VARCHAR(50),
    rate VARCHAR(20),
    gst VARCHAR(10),
    date VARCHAR()
    amount VARCHAR(50)
);
CREATE TABLE customer
(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    mobile CHAR(10),
    email VARCHAR(100),
    address VARCHAR(100),
    city VARCHAR(100),
    district VARCHAR(100),
    state VARCHAR(100),
    pincode  VARCHAR(100)  
);
