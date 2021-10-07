<?php
try {
  $pdo = new PDO(
    'mysql:host=db;dbname=posse;charset=utf8mb4',
    'mayuna_user',
    'pass',
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES=>false
    ]
  );
  $stmt = $pdo->prepare('SELECT * FROM questions WHERE id = :id');
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();

  
  $questions = $stmt->fetchAll();

  
  $stmt = $pdo->prepare('SELECT * FROM choices WHERE  id = :id');
  $stmt->bindParam(':id', $_GET['id']);
  $stmt->execute();

  $choices = $stmt->fetchAll();

} catch (PDOException $e) {
  echo $e->getMessage() . PHP_EOL;
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>kuizy</title>
     <link rel ="stylesheet" href="./index.css">
  </head>
  
  <body>
    
  <h1><?php echo $questions[0]['name'] ?>の難読地名クイズ</h1>
        <!-- <div class="loop1" id="loop1"> -->
        <?php for($i=0;$i<count($choices)/3;$i++){?>
        <div class="all">
          <img src="<?php echo $_GET['id']?>_<?php echo $i+1?>.png" class="image">
          <span class="under_line"><?php echo $i+1?>.この地名はなんて読む？</span><div class="green"></div>

          <?php 

          $number = $i*3;
          //TODO　　最後にこれ($number)をarraynumberにする
          // 東京の選択肢０、１、２
          // 広島の選択肢０、１、２

          $question_id1 = $choices[$number]['question_id'];
          $question_id2 = $choices[$number + 1]['question_id'];
          $question_id3 = $choices[$number + 2]['question_id'];


          $question_number = $choices[$number]['question_number'];
          
          $valid_num = 1;

          ?>

          <li class="button" id ="choice_<?php echo $question_id1?>_<?php echo $question_number?>" onclick=check(<?php echo $question_id1?>,<?php echo $valid_num?>,<?php echo $question_number?>) name="choice_<?php echo $question_number?>" ><?php echo $choices[$number]['name'] ?></li>
          <li class="button" id ="choice_<?php echo $question_id2?>_<?php echo $question_number?>" onclick=check(<?php echo $question_id2?>,<?php echo $valid_num?>,<?php echo $question_number?>) name="choice_<?php echo $question_number?>" ><?php echo $choices[$number + 1]['name'] ?></li>
          <li class="button" id ="choice_<?php echo $question_id3?>_<?php echo $question_number?>" onclick=check(<?php echo $question_id3?>,<?php echo $valid_num?>,<?php echo $question_number?>) name="choice_<?php echo $question_number?>" ><?php echo $choices[$number + 2]['name'] ?></li>
          <!-- <div id="answerbox_' + question_id + '" class="box"> -->
            <div class="box" id = "answer_box_<?php echo $question_number?>">
              <p id = "correct_result_<?php echo $question_number?>"></p><br><p>正解は<?php echo $choices[$number]['name']?>です</p> 
            </div>
          <!-- </div> -->
        </div>
        <?php }; ?>


        <script src="index.js"></script>
        <!-- </div> -->
  </body>

  
</html> 
    