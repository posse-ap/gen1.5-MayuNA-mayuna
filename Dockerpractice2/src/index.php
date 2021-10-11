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

        <?php $stmt = $pdo->prepare('SELECT * FROM choices WHERE question_number = :question_number AND id = :id');
        $j = $i + 1;
        $stmt->bindParam(':question_number',$j);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        
        $each_question = $stmt->fetchAll();
        
        shuffle($each_question);

        $valid_num = 1;
        ?>

        <div class="all">
          <img src="img/<?php echo $_GET['id']?>_<?php echo $i+1?>.png" class="image">
          <span class="under_line"><?php echo $i+1?>.この地名はなんて読む？</span><div class="green"></div>

          <?php foreach($each_question as $each_choice){?>
            <li class="button" id ="choice_<?php echo $each_choice['question_id']?>_<?php echo $each_choice['question_number']?>" onclick=check(<?php echo $each_choice['question_id']?>,<?php echo $valid_num?>,<?php echo $each_choice['question_number']?>) name="choice_<?php echo $each_choice['question_number']?>" ><?php echo $each_choice['name'] ?></li>
          <?php } ?>

            <div class="box" id = "answer_box_<?php echo $each_choice['question_number']?>">
              <p id = "correct_result_<?php echo $each_choice['question_number']?>"></p><br><p>正解は<?php echo $choices[$i*3]['name']?>です</p> 
            </div>
          <!-- </div> -->
        </div>
        <?php }; ?>


        <script src="index.js"></script>
        <!-- </div> -->
  </body>

  
</html> 
    