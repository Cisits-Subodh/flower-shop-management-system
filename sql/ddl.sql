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
    supplier_name VARCHAR(50),
    mobile_no CHAR(10),
    email_id VARCHAR(30),
    address VARCHAR(50),
    gst VARCHAR(10),
    bank_ac VARCHAR(50),
    pincode VARCHAR(20)
);
CREATE TABLE purchase
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_id INT NOT NULL,
    supplier_invoice_no VARCHAR(50),
    date DATE,
    FOREIGN KEY(supplier_id) REFERENCES supplier(id)
);

CREATE TABLE purchase_item
(
    id int AUTO_INCREMENT PRIMARY kEY,
    purchase_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT,
    rate DECIMAL(20),
    gst DECIMAL(10),
    date DATE,
    amount DECIMAL(50,2),

    FOREIGN KEY(purchase_id) REFERENCES purchase(id),
    FOREIGN KEY(product_id) REFERENCES product(id)
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
CREATE TABLE bank_ac
(
    cash VARCHAR PRIMARY KEY,
    upi VARCHAR PRIMARY KEY,
    online_payment VARCHAR PRIMARY KEY,
    card VARCHAR PRIMARY KEY
);
CREATE TABLE gst(
5 int PRIMARY kEY,
18 int PRIMARY kEY,
10 int PRIMARY KEY
);
CREATE TABLE sales
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    date date,
    total_amount DECIMAL(50,2),
    FOREIGN kEY(customer_id) REFERENCES customer(id)
);
CREATE TABLE sales_item
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sales_id INT,
    product_id INT NOT NULL,
    quantity INT,
    rate DECIMAL(20),
    gst DECIMAL(10),
    date DATE,
    amount DECIMAL(50,2),
     FOREIGN KEY(sales_id) REFERENCES sales(id),
    FOREIGN KEY(product_id) REFERENCES product(id)
);


