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
id int(10) AUTO_INCREMENT PRIMARY KEY,
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
delivery varchar(10),
ordernum int(5) AUTO_INCREMENT PRIMARY KEY,
date timestamp,
status char(1)
);

/*  tilausrivi, sisältää tilausnumeron tuote ID:n montako tuotetta tilauksessa on (rownum) sekä paljonko tuotetta on 
tilattu*/ 
CREATE TABLE ordr_row (
ordernum int(10) ,
product_id int UNSIGNED,
rownum int(3),
amount int(3),
FOREIGN KEY (ordernum)
REFERENCES ordr(ordernum)
);

/*  Tuotetaulu, sisältää tuote ID:n,tuotenimen, hinnan, kustannuksen, kuva nimen, ja kategoria numeron*/ 

CREATE TABLE product (
id INT AUTO_INCREMENT PRIMARY KEY,
productname varchar(255),
description text not null,
price decimal(6,2) UNSIGNED,
cost decimal(6,2) UNSIGNED,
picture varchar(255),
category_id int(10),
FOREIGN KEY (category_id)
REFERENCES category(id)
);

/* Kategoriat*/

INSERT INTO category (categoryname)
VALUES ("Coffee Beans");
INSERT INTO category (categoryname)
VALUES ("Filter Papers");
INSERT INTO category (categoryname)
VALUES ("Machines & Presses");
INSERT INTO category (categoryname)
VALUES ("Accessories");

/* Admin käyttäjän luontilause */

/* INSERT INTO customer (name, password, address, postalnumber, city, email)
VALUES ('Admin', '12345678', 'Keskisentie 5', '84100', 'Ylivieska','office@vienoscoffee.com');*/

/* Tuotteiden lisäys lauseita */

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Juhla Mokka Filter Ground Coffee 500g", "Finland's most popular coffee, has survived over
time by renewing itself while respecting traditions.
 Paulig’s nostalgic pan coffee tastes good to a coffee lover.
  Compared to filter coffee, the taste of pan grinding is rounder and fuller.
   Finland's most popular coffee, has stood the test of time, renewing itself while respecting traditions.
    Roast level 1.",4.39,1,"Juhla-Mokka-kahvi.jpg",1);

 INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Brazil Original Filter Ground Coffee 500g ", "The original pale roast Paulig
 Brazilian coffee is characterized by a balanced, soft and honey-sweet taste.
    Roast level 2.",5.19,1,"Brazil-kahvi.jpg",1);
 
INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Paulig Café Sydney Filter Ground Coffee 500g", "Pleasantly sour coffee blend,
  with a light roast that brings out the nuances of coffee. Fruity, honey sweet
  a blend of African and Latin American arabica coffee beans. Nuanced,
  fruity and honey sweet. Roast level 2.",5.65,1,"Paulig Cafe Sydney.jpg",1);
 
 INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Pirkka Costa Rica Brazil Filter Ground Coffee 450g", "Costa Rica by Pirkka Brazilian coffee is made
from the beans of the Arabica coffee Bourbon and Catuai coffee varieties grown on the sand plateau in the Bahia region.
The coffee is produced responsibly and is UTZ certified. The taste of the coffee is medium-bodied and softly sour.
 The aroma is nutty; aromatic nuances of hazelnut and walnut. The taste can be found in sweetness,
  honey, fruitiness, and even the aroma of dried fruit. Roast level 2.",3.89,1,"Pirkka-Costa-Rica-Brazil.jpg",1);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Presidentti Filter Ground Coffee 500g", "
The taste of Presidentti-coffee highlights the Central American,
 High quality arabica coffee beans from Kenya and Ethiopia. The taste is richly aromatic and charming.
  Roast level 1.",5.19,1,"Presidentti-kahvi.jpg",1);
 
 INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Lehmus Roastery Kettu Filter Ground Coffee 220g", "The medium roasted Kettu is a soft and full-bodied coffee.
 Roast level 3.",8.95,1,"Lehmus-Roastery-Kettu-kahvi-220g.jpg",1);

 INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Arvid Nordquist Selection 450g Blond Organic Filter Ground Coffee", "Blond is a light roasted coffee,
 with a soft and sweet scent. A nuanced fruity taste with grapefruit and citrus aromas in the aftertaste.
  Blond is made from 100% of the best Arabica beans, it is Fair Trade certified and 100% climate compensated
   and it is roasted without using fossil fuels. Roast level 2.",5.49,1,"Arvid-Nordquist-Selection-450g-Blond-luomu.jpg",1);
 
 INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Jacobs Krönung Filter Ground Coffee 500g", "The secret of Jacobs Krönung coffee is in specially selected coffee beans from Latin America and Asia.
 The beans are roasted in a way that results in a coffee with rich taste and best aroma. Premium roasted coffee beans and 
 Jacobs best selling coffee blend. Roast level 3.",5.90,1,"Jacobs-Krönung-kahvi-500g.jpg",1);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Moccamaster KBG962AO Coffee Maker 10 cups, 1.25 l","The Moccamaster KBG962 AO coffee machine represents guaranteed Moccamaster quality and style. 
This premium model combines complete comfort, timelessly stylish design and reliability.The Moccamaster KBG962 AO coffee machine brews 10 cups of coffee 
(1.25 l) in just six minutes. The aroma lid mixes during coffee filtration to ensure an optimal taste experience.",279.00,1,"",3);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("OBH Nordica Vivace kahvinkeitin 2327","Make delicious coffee with the OBH Nordica Vivace coffee machine with drip lock. The machine can produce 
12 cups at a time and has an automatic switch-off and a removable filter holder.",64.95,1,"",3);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Smeg 50 s Style Coffee Maker DCF02WHEU (White)","The good-looking Smeg 50 s Style coffee machine has a large volume, function for keeping your coffee hot, 
an automatic switch-off and a convenient LED display.",219.00,1,"",3);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Moccamaster oxygen bleached filter paper No. 4, 100 pcs","White high quality filter paper for coffee makers. Size no. 4 (also known as 1x4). 
The paper is made of FSC-certified wood fiber and is oxygen bleached in an environmentally friendly way. The package contains 100 pieces of filter papers.",4.95,1,"",2);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Moccamaster oxygen bleached filter paper 100 X 110 mm","White high quality filter paper for 1.8 liter coffee makers. The paper is made of FSC-certified wood 
fiber and is oxygen bleached in an environmentally friendly way. The package contains 100 pieces of filter papers.",8.90,1,"",2);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Westmark Permanent Steel Coffee Filter","Westmark's reusable coffee steel filter bag is used in the same way as a traditional paper filter. The steel coffee 
filter bag is made of a dense metal mesh that lets the coffee oils through, unlike filter paper, this makes the coffee taste richer and fuller. For cleaning, rinse 
with hot water and occasionally wash by hand with detergent or in the dishwasher. Available in two sizes: 02 and 04",12.90,1,"",2);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Melitta 1X4/80 Brown filter paper","With Melitta coffee filters you will find an aromatic and balanced taste experience, as they contain 3 patented AromaZone 
aroma zones. They have Aromapore aroma pores. This guarantees a perfect aroma. FSC certified product. Unbleached.",2.49,1,"",2);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Melitta 101/40 Brown filter paper","Unleash the good aroma of your coffee with the fine Aromapor aroma pores of Melitta filter papers. For the perfect, 
classic coffee enjoyment. Unbleached.",1.55,1,"",2);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Melitta 1X2/40 Brown filter paper","Melitta filter paper has Aromapor aroma pores that make your coffee moment enjoyable and full-bodied. Unbleached. 
FSC certified. Unbleached.",1.99,1,"",2);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Moccamaster spout","9-hole Moccamaster spout. Fits all Moccamaster coffee machines.",24.95,1,"",4);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Moccamaster Glass Jug, 1250 ml","The glass jugs of Moccamaster coffee makers are elegantly elegantly designed and designed to maintain the aromas of the 
filtered coffee beverage at its best on top of the heating elements. The Moccamaster-Technivorm seal is a mark of quality on the side of each Moccamaster glass jug. 
The Moccamaster KB glass jug is suitable for Moccamaster KB model coffee machines with a mechanical drip lock. The glass jug has a mixing aroma lid that ensures 
the homogeneity of the coffee and the mixing of the aromas. Keep the jug clear by washing it after each use. The taste of the coffee filtered in this way remains 
full-bodied aroma without unpleasant side flavors.",30.95,1,"",4);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("AEG Glass Jug, Black","10-15 cup glass jug for AEG coffee maker.",37.95,1,"",4);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("OBH Glass Jug, 1250 ml","Coffee pot with black jug and handle. Jug capacity 1.25 l (10 cups).",36.95,1,"",4);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Lid on glass jug, Moccamaster coffee maker, Black","Lid with mixing stick for Moccamaster glass jug.",21.95,1,"",4);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Coffee measure, Moccamaster coffee maker 12g","This is a universal product that is suitable for many different 
brands and models.",11.95,1,"",4);

INSERT INTO product (productname, description, price, cost, picture, category_id)
VALUES ("Filter cover, Moccamaster coffee maker","The lid fits all Moccamaster coffee machines with a glass jug. 
The lid protects the filter funnel from contaminants and prevents heat from evaporating during filtration. 
We recommend washing the coffee machine and its parts daily. The lid of the Moccamaster filter funnel is made of 
durable BPA and BPS-free material.",17.95,1,"",4);