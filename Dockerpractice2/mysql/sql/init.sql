DROP SCHEMA IF EXISTS posse;
CREATE SCHEMA posse;
USE posse;

DROP TABLE IF EXISTS questions;
CREATE TABLE questions (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(225) NOT NULL
);

INSERT INTO questions (id,name) VALUES ('1', '東京'), ('2', '広島県');

DROP TABLE IF EXISTS choices;
CREATE TABLE choices (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  question_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(225) NOT NULL,
  valid INT AUTO_INCREMENT NOT NULL PRIMARY KEY
);


INSERT INTO choices (id, question_id, name, valid) VALUES (1, 1, 'たかなわ', 1), (1, 2, 'たかわ', 0);