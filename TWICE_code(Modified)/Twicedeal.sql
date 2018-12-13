CREATE TABLE PIZZA
(
PizzaID int NOT NULL,
PizzaName varchar(255),
PizzaToppingOne varchar(255),
PizzaToppingTwo varchar(255),
PizzaToppingThree varchar(255),
PizzaPrice DECIMAL(18,2)
);

DROP TABLE PIZZA;

INSERT INTO PIZZA (PizzaName, PizzaToppingOne, PizzaToppingTwo, PizzaToppingThree, PizzaPrice) VALUES ('Large HUI','Beef','Cheese','Bacon', 49.99);

SELECT * FROM PIZZA;