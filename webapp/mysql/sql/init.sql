DROP SCHEMA IF EXISTS media;
CREATE SCHEMA media;
USE media;

DROP TABLE IF EXISTS study_all;
CREATE TABLE study_all (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(225) NOT NULL
);


DROP TABLE IF EXISTS study_time;
CREATE TABLE study_time (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  study_day VARCHAR(225) NOT NULL,
  study_month VARCHAR(225) NOT NULL,
  study_hour VARCHAR(225) NOT NULL
);

DROP TABLE IF EXISTS study_contents;
CREATE TABLE study_contents (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  study_content VARCHAR(225) NOT NULL,
  study_hour  VARCHAR(225) NOT NULL
);

INSERT INTO study_contents SET study_content='1', study_hour='1';

DROP TABLE IF EXISTS study_languages;
CREATE TABLE study_languages (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  study_language VARCHAR(225) NOT NULL,
  study_hour  VARCHAR(225) NOT NULL
);

INSERT INTO study_languages SET study_language='4', study_hour='1';