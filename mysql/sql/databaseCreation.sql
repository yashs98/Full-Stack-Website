

CREATE TABLE CUSTOMERS (

    FirstName TEXT,
    LastName TEXT,
    Email TEXT,
    CustomerID INT AUTO_INCREMENT PRIMARY KEY
);


CREATE TABLE PRODUCTS (

    ProductName TEXT,
    ProductPrice DECIMAL(4, 2),
    ProductQuantity INT,
    ProductImage TEXT
);


CREATE TABLE ORDERS (

    OrderTime DATETIME,
    ProductName TEXT,
    CustomerID INT,
    FOREIGN KEY (CustomerID) REFERENCES CUSTOMERS(CustomerID),
    Tax DECIMAL(4,2),
    Donation DECIMAL(4, 2),
    Total DECIMAL(6,2),
    OrderQuantity INT,
    OrderID INT AUTO_INCREMENT PRIMARY KEY
);


INSERT INTO PRODUCTS 
VALUES ("Hostiles", 46.99, 10, "../images/mysql/hostiles.jpg" );


INSERT INTO PRODUCTS 
VALUES ("Logan", 41.99, 10, "../images/mysql/logan.jpg" );

INSERT INTO PRODUCTS 
VALUES ("The Martian", 29.99, 10, "../images/mysql/themartian.jpg");

INSERT INTO PRODUCTS 
VALUES ("Indiana Jones and the Last Crusade", 15.99, 10, "../images/mysql/thelastcrusade.jpg");

INSERT INTO PRODUCTS 
VALUES ("Star Wars: Episode V - The Empire Strikes Back", 6.99, 10, "../images/mysql/empirestrikesback.jpg" );








