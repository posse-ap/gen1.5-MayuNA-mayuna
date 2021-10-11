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
 id 東京か大阪か
 question_number 問題番号
 question_id = 1 が正解の選択肢とする。　選択肢の番号（１〜３）
 name 選択肢の名前
 */


/*
一つ目正しいもの
*/

INSERT INTO choices (array_number,id,question_number,question_id,name) VALUES 
    (0, 1, 1, 1, 'たかなわ'), (1, 1, 1, 2, 'こうわ'), (2, 1, 1, 3, 'たかわ'), 
    (3, 1, 2, 1, 'かめいど'), (4, 1, 2, 2, 'かめど'), (5, 1, 2, 3, 'かめと'),
    (6, 1, 3, 1, 'こうじまち'), (7, 1, 3, 2, 'かゆまち'), (8, 1, 3, 3, 'おかとまち'),
    (9, 1, 4, 1, 'おなりもん'), (10, 1, 4, 2, 'おかどもん'), (11, 1, 4, 3, 'ごせいもん'),
    (12, 2, 1, 1, 'いばらいち'), (13, 2, 1, 2, 'せいげんち'), (14, 2, 1, 3, 'いのはらし'),
    (15, 2, 2, 1, 'かるが'), (16, 2, 2, 2, 'かりどめや'), (17, 2, 2, 3, 'いがるけ'),
    (18, 2, 3, 1, 'へら'), (19, 2, 3, 2, 'たいら'), (20, 2, 3, 3, 'ひらよし'),
    (21, 2, 4, 1, 'すもも'), (22, 2, 4, 2, 'ざくろ'), (23, 2, 4, 3, 'はっさく');
