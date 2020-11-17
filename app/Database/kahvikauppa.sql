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
description text not null,
price decimal(6,2) UNSIGNED,
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

/* Tuotteiden lisäys lauseita */

INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Juhla Mokka Filter Ground Coffee 500g", "Finland's most popular coffee, has survived over
 time by renewing itself while respecting traditions.
 Paulig’s nostalgic pan coffee tastes good to a coffee lover.
  Compared to filter coffee, the taste of pan grinding is rounder and fuller.
   Finland's most popular coffee, has stood the test of time, renewing itself while respecting traditions.
    Roast level 1.",4.39,1,"Juhla-Mokka-kahvi.jpg",1);

 INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Brazil Original Filter Ground Coffee 500g ", "The original pale roast Paulig
 Brazilian coffee is characterized by a balanced, soft and honey-sweet taste.
    Roast level 2.",5.19,1,"Brazil-kahvi.jpg",1);
 
INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Paulig Café Sydney Filter Ground Coffee 500g", "Pleasantly sour coffee blend,
  with a light roast that brings out the nuances of coffee. Fruity, honey sweet
  a blend of African and Latin American arabica coffee beans. Nuanced,
  fruity and honey sweet. Roast level 2.",5.65,1,"Paulig Cafe Sydney.jpg",1);
 
 INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Pirkka Costa Rica Brazil Filter Ground Coffee 450g", "Costa Rica by Pirkka Brazilian coffee is made
from the beans of the Arabica coffee Bourbon and Catuai coffee varieties grown on the sand plateau in the Bahia region.
The coffee is produced responsibly and is UTZ certified. The taste of the coffee is medium-bodied and softly sour.
 The aroma is nutty; aromatic nuances of hazelnut and walnut. The taste can be found in sweetness,
  honey, fruitiness, and even the aroma of dried fruit. Roast level 2.",3.89,1,"Pirkka-Costa-Rica-Brazil.jpg",1);

INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Presidentti Filter Ground Coffee 500g", "
The taste of Presidentti-coffee highlights the Central American,
 High quality arabica coffee beans from Kenya and Ethiopia. The taste is richly aromatic and charming.
  Roast level 1.",5.19,1,"Presidentti-kahvi.jpg",1);
 
 INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Lehmus Roastery Kettu Filter Ground Coffee 220g", "The medium roasted Kettu is a soft and full-bodied coffee.
 Roast level 3.",8.95,1,"Lehmus-Roastery-Kettu-kahvi-220g.jpg",1);

 INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Arvid Nordquist Selection 450g Blond Organic Filter Ground Coffee", "Blond is a light roasted coffee,
 with a soft and sweet scent. A nuanced fruity taste with grapefruit and citrus aromas in the aftertaste.
  Blond is made from 100% of the best Arabica beans, it is Fair Trade certified and 100% climate compensated
   and it is roasted without using fossil fuels. Roast level 2.",5.49,1,"Arvid-Nordquist-Selection-450g-Blond-luomu.jpg",1);
 
 INSERT INTO product (productname, description, price, cost, picture, categorynum)
VALUES ("Jacobs Krönung Filter Ground Coffee 500g", "The secret of Jacobs Krönung coffee is in specially selected coffee beans from Latin America and Asia.
 The beans are roasted in a way that results in a coffee with rich taste and best aroma. Premium roasted coffee beans and 
 Jacobs best selling coffee blend. Roast level 3.",5.90,1,"Jacobs-Krönung-kahvi-500g.jpg",1);
 
