




// ここから前の処理



// const question_list = [
// ['たかなわ','こうわ','たかわ'],
// ['かめいど','かめと','かめど'],
// ['こうじまち','おかとまち','かゆまち'],
// ['おなりもん','おかどもん','ごせいもん'],
// ['とどろき','たたりき','たたら'],
// ['しゃくじい','せきこうい','いじい'],
// ['ぞうしき','ざっしょく','ざっしき'],
// ['おかちまち','みとちょう','ごしろちょう'],
// ['ししぼね','ろっこつ','しこね'],
// ['こぐれ','こしゃく','こばく'],

// ];


// // let seikai = ['たかなわ','かめいど','こうじまち','おなりもん','とどろき','しゃくじい','ぞうしき','おかちまち','ししぼね','こぐれ'];


// const image_box = document.getElementById("image_box");
// const loop1 = document.getElementById("loop1");



// //question_id 問題番号
// //selection_id 選択肢の上から数えたときの位置
// //true_id 答えの選択肢を上からかぞえたときの位置


// function check(question_id,selection_id,true_id){

//     //クリック無効化
//     var answerlists = document.getElementsByName('sentakusi_' + question_id);
//     answerlists.forEach(answerlist => {
//         answerlist.style.pointerEvents = 'none';
//     });

   
//     //クリックした時の色の処理
//     var button_red = document.getElementById('sentakusi_' + question_id + '_' + selection_id);
//     var button_blue = document.getElementById('sentakusi_' + question_id + '_' + true_id);
//     //青だけいつでも
//     button_blue.classList.add('blue');   
 

//     var success1 = document.createTextNode('正解!');
//     var false1 = document.createTextNode('不正解!');
//     var answerbox = document.getElementById('answerbox_' + question_id);
//     var answertext = document.getElementById('answertext_' + question_id);
//     // var num = Number(click_id);
//     // console.log('num' + num);
//     // var key = Math.floor(num / 11);
//     // console.log('key:' + key);
//     console.log('answerbox' + answerbox);
//     if (selection_id == true_id) {
//         console.log('正解');
//         // answertext.classList.add('blue');
//         answertext.appendChild(success1);
//         answertext.classList.add('ansT');
//         answertext.classList.add('syutugenn');
//     } else {
//          console.log('不正解');
//          button_red.classList.add('red');
//          answertext.classList.add('ansF');
//         //  answertext.classList.add('red');
//          answertext.appendChild(false1);
//          answertext.classList.add('syutugenn');
//     }
//    answerbox.style.display = 'block';
// }



// function createquestion(question_id,after_shuffle_question,true_id){

//     var main_contents = [];

//     main_contents += '<div class="all">';
//     var img_src = (question_id-1) + ".png";
//     var img_tag = '<img src="' + img_src + '" class="image">';
//     console.log(img_tag);
//     main_contents += '<span class="under_line">' + question_id +'.この地名はなんて読む？</span><div class="green"></div>' + img_tag + '<ul>';
    
//     after_shuffle_question.forEach(function(item,index){
//         main_contents += ' <li class="button" id ="sentakusi_' + question_id + '_' + (index + 1) +'"name="sentakusi_' + question_id + '" onclick="check('+ question_id + ', ' + (index + 1) + ', ' + (true_id + 1) +')">' + item + '</li>' ;
        
//         //id sentakusi_1_1
//         //id sentakusi_1_2
//         //id sentakusi_1_3
//         //id sentakusi_2_1

//         //index+1 選択肢の上からの順番

//         console.log("ok2");

//     });
//     main_contents += '<div id="answerbox_' + question_id + '" class="box"><p id = "answertext_' + question_id +'"></p><br> <p>正解は「' + after_shuffle_question[true_id] + '」です！</p> </div>';
//     main_contents += '</div>'

//     document.getElementById('loop1').insertAdjacentHTML('beforeend',main_contents);
    
    
// }



    
// function createhtml(){
//     question_list.forEach(function(question,index){


//         const answer = question[0];

//         console.log('1'+ question);

//         const shuffle = ([...array]) => {
//             for(let i = array.length - 1; i>0;i--){
//                 const j = Math.floor(Math.random() * (i+1));
//                 [array[j],array[i]] = [array[i],array[j]];

//             }
//         return array
//         }


//         // questionをシャッフルしたときの配列の並び順
//         var after_shuffle_question = shuffle(question);
        

//         console.log('aftershuffle' + after_shuffle_question);

       
        
//             createquestion(index+1,after_shuffle_question,after_shuffle_question.indexOf(answer));
//             //index+1 = question_id
//             //indexOfはanswerの場所を探すため
//         })


// }






// window.load = createhtml();
// // loop1.innerHTML += main_contents;
