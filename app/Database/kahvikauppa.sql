/* Saatte kopioida koko asian ja ajaa tietokantaan, ei tarvi yksitellen :) */

/* DB luontilause */ 

drop database if exists kahvikauppa;
create database kahvikauppa;
use kahvikauppa;


/*  Asiakas taulu, käytetään rekisteröinnissä*/

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

/*  Tuote ryhmät*/ 
CREATE TABLE category(
categorynum int(10) AUTO_INCREMENT PRIMARY KEY,
categoryname varchar(255)
);

/* Tilauslappunen, taulu sisältää postitustiedot, mikäli tilaaja ei ole kirjautunut hän syöttää tiedot ja ne tallentuu tähän,
 jos tilaaja on rekisteröitynyt,tiedot haetaan automaattisesti lomakkeeseen*/ 
CREATE TABLE ordr(
customername varchar (255),
address varchar(50),
city varchar(50),
phonenumber varchar(13),
postalnum char(5),
ordernum int(10) PRIMARY KEY,
date timestamp,
status char(1)
);

/*  tilausrivi, sisältää tilausnumeron tuote ID:n montako tuotetta tilauksessa on (rownum) sekä paljonko tuotetta on 
tilattu*/ 
CREATE TABLE ordr_row (
ordernum int(10) AUTO_INCREMENT PRIMARY KEY,
productID int UNSIGNED,
rownum int(3),
amount int(3)
);

/*  Tuotetaulu, sisältää tuote ID:n,tuotenimen, hinnan, kustannuksen, kuva nimen, ja kategoria numeron*/ 

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

/* Kategoriat*/

INSERT INTO category (categoryname)
VALUES ("coffee_beans");
INSERT INTO category (categoryname)
VALUES ("filter_papers");
INSERT INTO category (categoryname)
VALUES ("machines_presses");
INSERT INTO category (categoryname)
VALUES ("acessories");

 
 
