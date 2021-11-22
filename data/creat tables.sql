CREATE TABLE users (
    id int NOT NULL,
    username VARCHAR(50),
    email VARCHAR(100),
);


CREATE TABLE orders (
    orderid int NOT NULL AUTO_INCREMENT,
    userid int,
    date date,
    PRIMARY KEY (orderid),
    FOREIGN KEY (userid) REFERENCES users(id)
);

CREATE TABLE burger (
    burgerid int NOT NULL AUTO_INCREMENT,
    pain int,
    legumes int,
    steakveg int,
    saucemaison int,
    orderid int,
    PRIMARY KEY (burgerid),
    FOREIGN KEY (orderid) REFERENCES orders(orderid)
);

