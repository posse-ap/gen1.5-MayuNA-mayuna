'use strict' ;



/**
 *ボタンをクリックされた時に発火する
 *正誤判定
 * @param {string} question_id - 問題の中の選択肢番号
 * @param {string} valid_num - 答えの選択肢番号：１
 * @param {string} question_number - 問題番号
 */
function check(question_id,valid_num,question_number){

  var correct_result = document.getElementById('correct_result_' + question_number );
  
  /**クリック無効化*/
    var answerlists = document.getElementsByName('choice_' + question_number);
    answerlists.forEach(answerlist => {
        answerlist.style.pointerEvents = 'none';
    });
  
  /** クリックした時の色の処理 */
      var button_blue = document.getElementById('choice_' + valid_num + '_' + question_number);
      var button_red = document.getElementById('choice_' + question_id + '_' + question_number);     
      button_blue.classList.add('blue'); 

      var answer_box = document.getElementById('answer_box_' + question_number);

  /** 正解不正解の処理 */
      if(question_id == valid_num){
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