DROP SCHEMA IF EXISTS media;
CREATE SCHEMA media;
USE media;

DROP TABLE IF EXISTS study_all;
CREATE TABLE study_all (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(225) NOT NULL
);

INSERT INTO questions (id,name) VALUES ('1', 'N予備'), ('2', 'まゆ');
