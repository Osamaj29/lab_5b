# lab_5b
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    matric VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    accessLevel VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);