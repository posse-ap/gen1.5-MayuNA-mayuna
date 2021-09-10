DROP SCHEMA IF EXISTS posse;
CREATE SCHEMA posse;
USE posse;

DROP TABLE IF EXISTS questions;
CREATE TABLE questions (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(225) NOT NULL
);

INSERT INTO questions (id,name) VALUES ('1', '東京'), ('2', '広島県');


