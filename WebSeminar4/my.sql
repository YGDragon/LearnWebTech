-- create
CREATE TABLE GROUPMATES (
  empId INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age INTEGER,
  adress TEXT NOT NULL
);

-- insert
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Михаил', 27, 'Москва');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Дмитрий', 30, 'Владимир');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Анна', 18, 'Москва');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Андрей', 30, 'Новкузнецк');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Дмитрий', 30, 'Москва');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Оксана', 25, 'Санкт-Питербург');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Сергей', 26, 'Москва');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Станислав', 30, 'Санкт-Питербург');
INSERT INTO GROUPMATES (name, age, adress) VALUES ('Павел', 31, 'Москва');

-- fetch 
SELECT * FROM GROUPMATES WHERE adress = 'Москва' AND age BETWEEN 18 AND 29;