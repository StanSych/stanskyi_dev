CREATE TABLE PIZZA
(
PizzaID int NOT NULL AUTO_INCREMENT,
PizzaName varchar(255),
PizzaToppingOne varchar(255),
PizzaToppingTwo varchar(255),
PizzaToppingThree varchar(255),
PizzaPrice DECIMAL(18,2),
PRIMARY KEY (PizzaID)
);

/* DROP TABLE PIZZA; */

INSERT INTO PIZZA (PizzaName, PizzaToppingOne, PizzaToppingTwo, PizzaToppingThree, PizzaPrice) VALUES ('Large HUI','Beef','Cheese','Bacon', 49.99);

INSERT INTO PIZZA (PizzaName, PizzaToppingOne, PizzaToppingTwo, PizzaToppingThree, PizzaPrice) VALUES ('Medium','Chicken','Mozzarella','Tomatoes', 29.99);

SELECT PizzaName FROM PIZZA;

SELECT 
            PizzaName, 
            PizzaToppingOne, 
            PizzaToppingTwo, 
            PizzaToppingThree,
            PizzaPrice 
            FROM Twicedeal.PIZZA
            WHERE PizzaID=1
            
            UPDATE PIZZA SET PizzaName='Srsfsd' WHERE PizzaID='1'
            
            DELETE FROM pizza WHERE PizzaID = '1'
