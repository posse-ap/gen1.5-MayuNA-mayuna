<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title') -サイト名</title>
     <link rel ="stylesheet" href="./css/index.css">
  </head>

  <body>
          @yield('questions')
            <!-- <div class="box" id = "answer_box_1">
              <p id = "correct_result_1"></p><br><p>正解はたかなわです</p>
            </div> -->
        <script src="./js/index.js"></script>
        <!-- </div> -->
  </body>


</html>
