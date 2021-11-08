CREATE TABLE user
(
    id INT PRIMARY KEY NOT NULL,
    name VARCHAR(50),
    username VARCHAR(50),
    email VARCHAR(100),
);

CREATE TABLE order
(
    id INT PRIMARY KEY NOT NULL,
    date DATE,
    FOREIGN KEY (id) REFERENCES user (id)
);

CREATE TABLE burger
(
    id INT PRIMARY KEY NOT NULL,
    bred VARCHAR(30),
    veg VARCHAR(30),
    sauce VARCHAR(30),
    meet VARCHAR(30),
    FOREIGN KEY (id) REFERENCES burger (id)
);

CREATE TABLE 
(

);

