CREATE TABLE users (
    id int NOT NULL,
    username VARCHAR(50),
    email VARCHAR(100),
);

CREATE TABLE orders (
    orderid int NOT NULL,
    userid int,
    date date,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (userid) REFERENCES users(id)
);

CREATE TABLE burger (
    burgerid int NOT NULL AUTO_INCREMENT,
    pain VARCHAR(30),
    legumes int,
    steakveg int,
    saucemaison int,
    orderid int,
    PRIMARY KEY (burgerid),
    FOREIGN KEY (orderid) REFERENCES orders(orderid)
);

