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

  
  $questions = $stmt->fetch();

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
  <h1><?php echo $questions['name']?>の難読地名クイズ</h1>
        <div class="loop1" id="loop1">
            <script src="./index.js"></script>
        </div>
  </body>

  
</html> 
    