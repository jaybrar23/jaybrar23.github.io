CREATE DATABASE wt19591504;
USE wt19591504;

CREATE TABLE suggestions
(
 name varchar(50),
 year INT,
 author varchar(40),
 why varchar(101)
);

CREATE TABLE newsletter (
email varchar(50)
);

CREATE TABLE books
(
 bookid int PRIMARY KEY,
 name varchar(60),
 author varchar(40),
 year INT
);

INSERT INTO books VALUES
(1,"Automate the boring stuff with python","Al Sweigart",2015),
(2,"The C programming language","Kernighan, B. & Ritchie, D",1988),
(3,"Clean Code: A Handbook of Agile Software Craftsmanship","Robert C. Martin",2008),
(4,"Code: the hidden language of computer hardware and software","Petzold, C",1999),
(5,"Introduction to compilers and language design","Thain, D",2018),
(6,"Computer science distilled","Filho, W",2018),
(7,"Eloquent JavaScript","Haverbeke, M",2019),
(8,"C++ primer plus","Prata, S",2012),
(9,"The art of readable code","Boswell, D. & Foucher, T",2011);

CREATE TABLE rating (
id int,
rating float(2),
ratedby varchar(30),
FOREIGN KEY (id) REFERENCES books(bookid)
);

INSERT INTO rating VALUES
(1,4.25,"Goodreads"),
(2,4.41,"Goodreads"),
(3,4.40,"Goodreads"),
(4,4.39,"Goodreads"),
(5,0,"Not rated"),
(6,4.08,"Goodreads"),
(7,4.13,"Goodreads"),
(8,4.06,"Goodreads"),
(9,3.95,"Goodreads");

GRANT SELECT, INSERT, UPDATE ON wt19591504.* TO 'jay'@'localhost' IDENTIFIED BY 'pass';