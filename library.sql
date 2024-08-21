CREATE DATABASE library;

USE library;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id VARCHAR(50) NOT NULL,
    book_name VARCHAR(100) NOT NULL,
    author_name VARCHAR(100) NOT NULL,
    year_of_publication INT NOT NULL
);
