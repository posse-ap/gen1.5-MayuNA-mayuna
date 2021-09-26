DROP SCHEMA IF EXISTS posse;
CREATE SCHEMA posse;
USE posse;

DROP TABLE IF EXISTS questions;
CREATE TABLE questions (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  name VARCHAR(225) NOT NULL
);

INSERT INTO questions (id,name) VALUES ('1', '東京'), ('2', '広島');

/*
AUTO INCREMENTはあたいを挿入しなかったら1からの連番になる
PRIMARYKEYで重複の値はダメ
*/
DROP TABLE IF EXISTS choices;
CREATE TABLE choices (
  array_number INT NOT NULL PRIMARY KEY,
  id INT NOT NULL,
  question_number INT NOT NULL,
  question_id INT NOT NULL,
  name VARCHAR(225) NOT NULL
);
/*
 array_number 配列の番号
 id 東京か大阪か
 question_number 問題番号
 question_id = 1 が正解の選択肢とする。　選択肢の番号（１〜３）
 name 選択肢の名前
 */

INSERT INTO choices (array_number,id,question_number,question_id,name) VALUES 
    (0, 1, 1, 1, 'たかなわ'), 
    (1, 1, 1, 2, 'こうわ'), 
    (2, 1, 1, 3, 'たかわ'), 
    (3, 2, 1, 1, 'おなごばた'), 
    (4, 2, 1, 2, 'にょしら'), 
    (5, 2, 1, 3, 'めこばた');


