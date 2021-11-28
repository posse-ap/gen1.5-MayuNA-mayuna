'use strict' ;



/**
 *ボタンをクリックされた時に発火する
 *正誤判定
 * @param {string} question_id - 問題番号
 * @param {string} choice_number - 問題の中の選択肢番号
 * @param {string} valid - 答えの選択肢番号：１
 */
function check(question_id,choice_number,valid){

  var correct_result = document.getElementById('correct_result_' + question_id );

  /**クリック無効化*/
    var answerlists = document.getElementsByName('choice_' + question_id);
    answerlists.forEach(answerlist => {
        answerlist.style.pointerEvents = 'none';
    });

  /** クリックした時の色の処理 */
      var button_blue = document.getElementById('choice_' + valid + '_' + question_id);
      var button_red = document.getElementById('choice_' + choice_number + '_' + question_id);
      console.log(button_red);
      console.log(button_blue);
      button_blue.classList.add('blue');

      var answer_box = document.getElementById('answer_box_' + question_id);

  /** 正解不正解の処理 */
      if(choice_number == valid){
        correct_result.innerText = '正解！';
        correct_result.classList.add('ansT');
        // box.classList.add('click_box');
      }else{
        button_red.classList.add('red');
        correct_result.innerText = '不正解！';
        correct_result.classList.add('ansF');
      }
answer_box.style.display = 'block';

}
