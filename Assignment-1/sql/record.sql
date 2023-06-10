-- create table intructions written with one insert value given to test.

CREATE TABLE OrderDetails(
    id int not null primary key auto_increment,
    fullName varchar(255) not null,
    phoneNo varchar(255) not null,
    email varchar(255) not null,
    deliveryAddress varchar(255) not null,
    pizzaSize varchar(255) not null,
    crustType varchar(255) not null,
    finalToppings varchar(255) not null,
    finalSauces varchar(255) not null,
    cheeseType varchar(255) not null,
    paymentMethod varchar(255) not null
    
);

INSERT INTO OrderDetails(fullName, phoneNo, email, deliveryAddress, pizzaSize, crustType, finalToppings, finalSauces, cheeseType, paymentMethod)
VALUES('Akshit Moudgil', '1234567890', 'ak123@gmail.com', '206 Cardinal Street', 'large', 'thin', 'pepperoni mushrooms', 'Pesto Alfredo', 'Mozzarella', 'Credit Card');

DROP TABLE OrderDetails;