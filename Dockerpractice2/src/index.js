'use strict' ;


var success1 = document.createTextNode('正解!');
var false1 = document.createTextNode('不正解!');


//question_id ：１問題の中のそれぞれのid
//valid_id:あっているものが１間違いが０
//id 問題ごとid
function check(question_id,valid_num,question_number){

  var correct_result = document.getElementById('correct_result_' + question_number );
  //クリック無効化
    var answerlists = document.getElementsByName('choice_' + question_number);
    answerlists.forEach(answerlist => {
        answerlist.style.pointerEvents = 'none';
    });
  
  //  クリックした時の色の処理
      var button_blue = document.getElementById('choice_' + valid_num + '_' + question_number);
      var button_red = document.getElementById('choice_' + question_id + '_' + question_number);     
      button_blue.classList.add('blue'); 

      var answer_box = document.getElementById('answer_box_' + question_number);


      if(question_id == valid_num){
        correct_result.appendChild(success1);
        correct_result.classList.add('ansT');
        // box.classList.add('click_box');
      }else{
        button_red.classList.add('red'); 
        correct_result.appendChild(false1);
        correct_result.classList.add('ansF');
      }
answer_box.style.display = 'block';

}