CREATE DATABASE registration

CREATE TABLE users(
    id INT PRIMARY AUTO_INCREMENT,
    firstname VARCHAR(60) NOT NULL,
    lastname VARCHAR(60),
    address VARCHAR(50)
);