


CREATE TABLE customer (
customerID int AUTO_INCREMENT PRIMARY KEY,
name varchar(100) not null,
password varchar(255),
address varchar(100),
postalnumber int(5),
city varchar(50),
email varchar(100),
phonenumber int(10)
);

CREATE TABLE category(
categorynum int(10) PRIMARY KEY,
categoryname varchar(255)
);

CREATE TABLE ordr(
customername varchar (255),
address varchar(50),
city varchar(50),
phonenumber varchar(13),
postalnum char(5),
ordernum int(10) PRIMARY KEY,
date timestamp,
status char(1),
);

CREATE TABLE ordr_row (
ordernum int(10),
productID int UNSIGNED,
rownum int(3),
amount int(3)
)

CREATE TABLE product (
productID INT AUTO_INCREMENT PRIMARY KEY,
productname varchar(255),
price int UNSIGNED,
cost int UNSIGNED,
picture varchar(255),
categorynum int(10),
FOREIGN KEY (categorynum)
REFERENCES category (categorynum)
);