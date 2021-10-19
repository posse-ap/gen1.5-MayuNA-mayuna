<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <!-- カレンダー -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="calendar.css">
  <!-- カレンダー終わり -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  <title>media</title>
</head>
<body>
  <div class="main" id="main">
    <div class="header" id="header">
      <header class="header_in" id="header_in">
        <div class="logoAND4"> 
           <div class="posselogo" id="posselogo">
             <img src="img/posselogowhite.jpg" width=120px height=24px alt="posseのロゴ">
           </div>
           <div class="week4" id="week4">
               <h2 class="figure_4th">4thweek</h2>
           </div>
        </div>
        <div class="header_button" id="header_button">
           <a id="js-show-popup" class="btn_blue">記録・投稿</a>
        </div>
        <!-- モーダル -->
        <div class="popup" id="js-popup">
          <div class="popup-inner" id="popup-inner">
            <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
            <div class="modal_main" id="modal_main">
              <div class="modal_contents" id="modal_contents">
                <div class="modal_left" id="modal_left">
                  <div class="s_day" id="s_day">
                    <h3>学習日</h3>
                    <input class="inputs_day"type="text" id="calendar">
                  </div>
                  <div class="s_contents" id="s_contents">
                     <h3>学習コンテンツ(複数選択可)</h3>

                     <div class="radio-wrap">
                      <label>
                        <input type="checkbox" name="radio" value="radiobtn">
                        <span class="radio_figure">N予備校</span>
                      </label>
                  
                      <label>
                        <input type="checkbox" name="radio" value="radiobtn">
                        <span class="radio_figure">ドットインストール</span>
                      </label><br>
                      <label>
                        <input type="radio" name="radio" value="radiobtn">
                        <span class="radio_figure">POSSE課題</span>
                      </label>
                    </div>
                  </div>
                  <div class="s_language" id="s_language">
  　　　　　　　　　　　　<h3>学習言語(複数選択可)</h3>
                      <div class="radio-wrap">
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">HTML</span>
                        </label>
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">CSS</span>
                        </label>
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">JavaScript</span>
                        </label><br>
                    
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">PHP</span>
                        </label>
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">Laravel</span>
                        </label>
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">SQL</span>
                        </label>
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">SHELL</span>
                        </label><br>
                    
                        <label>
                          <input type="checkbox" name="radio" value="radiobtn">
                          <span class="radio_figure">情報システム基礎知識(その他)</span>
                        </label>
                      </div>
                      
                  </div>
                </div>
                <div class="modal_right" id="modal_right">
                  <div class="s_time" id="s_time">
                    <h3>学習時間</h3>
                    <input class="inputs_day"type="text">
                  </div>
                  <div class="comment_twitter" id="comment_twitter">
                     <h3>Twitter用コメント</h3>
                     <input class="input_twitter"type="text">
                     　<div class="radio-wrapL">
                      <label>
                        <input type="checkbox" name="radio" value="radiobtn">
                        <span class="figure_twittershare">Twitterにシェアする</span>
                      </label><br>
                      </div>
                  </div>
                </div>
              </div>
              <div class="modal_button" id="modal_button">
                 <a href="" class="modal_button_figure" id="modal_button_figure">記録・投稿</a>
              </div>            
            </div>
          </div>
          <div class="black-background" id="js-black-bg"></div>
        </div>
        <div class="success" id="success">
          <p class="success_logo" id="success_logo"></p>
        </div>
        <!-- モーダル終了 -->
        </div>
      </header>
    </div>

    <div class="backGray" id="backgray">
        <div class="mainData" id="mainData">
          <div class="hoursData" id="hoursData">
              <div class="hoursDataS" id="hoursDataS">
                 <div class="todayData" id="todayData">
                    <h3>Today</h3>
                    <p class="study_figure">3</p>
                    <p class="hour">hour</p>
                 </div>
                 <div class="monthData" id="monthData"> 
                     <h3>Month</h3>
                     <p class="study_figure">120</p>
                     <p class="hour">hour</p>
                 </div>
                 <div class="totalData" id="totalData">
                     <h3>Total</h3>
                     <p class="study_figure">1384</p>
                     <p class="hour">hour</p>
                 </div>
              </div>
              <div class="graph">
                <canvas id="canvas" style="position: relative"; height="240px";width="500px"></canvas>

                
                <script>
                var ctx = document.getElementById("canvas").getContext("2d");
                var myBar = new Chart(ctx, {
                    type: 'bar',                           //◆棒グラフ
                    data: {                                //◆データ
                        labels: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],     //ラベル名
                        datasets: [{                       //データ設定
                            data: [3,4,5,3,0,0,4,2,2,8,8,2,2,1,7,4,4,3,3,3,2,2,6,2,2,1,1,1,7,8],          //データ内容
                            backgroundColor: '#3BCFFF'  //背景色
                        }]
                    },
                    options: {                             //◆オプション
                        responsive: true,                  //グラフ自動設定
                        legend: {                          //凡例設定
                            display: false                 //表示設定
                       },
                        title: {                           //タイトル設定
                            display: true,                 //表示設定
                            fontSize: 18,                  //フォントサイズ
                            // text: 'タイトル'                //ラベル
                        },
                        scales: {                          //軸設定
                            yAxes: [{                      //y軸設定
                                display: true,             //表示設定
                                scaleLabel: {              //軸ラベル設定
                                   display: true,          //表示設定
                                  //  labelString: '縦軸ラベル',  //ラベル
                                   fontSize: 18               //フォントサイズ
                                },
                                ticks: {                      //最大値最小値設定
                                    min: 0,                   //最小値
                                    max: 8,                  //最大値
                                    fontSize: 18,             
                                    stepSize: 2               //軸間隔
                                },
                                gridLines:{
                                  display:false
                                }
                            }],
                            xAxes: [{                         //x軸設定
                                display: true,                //表示設定
                                barPercentage: 0.65,           //棒グラフ幅
                                categoryPercentage: 0.65,      //棒グラフ幅
                                scaleLabel: {                 //軸ラベル設定
                                   display: true,             //表示設定
                                  //  labelString: '横軸ラベル',  //ラベル
                                   fontSize: 5            //フォントサイズ
                                },
                                ticks: {
                                    maxTicksLimit:15,
                                    fontSize: 10,   //フォントサイズ
                                    stepSize:2
                                },
                                gridLines:{
                                  display:false
                                }
                            }],
                        },
                        layout: {                             //レイアウト
                            padding: {                          //余白設定
                                left: 0,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        }
                        
                        
                    }
                });
                </script>
              </div>
          </div>
        
          <div class="circleData" id="circleData">
            <div class="langData" id="langData">
              <h2>学習言語</h2>
              <canvas id="myPieChart"　style="position: relative"; height="350";width="120"></canvas>
              <!-- CDN -->
　            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
　　　　　　　 　<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
              <script>
              var ctx = document.getElementById("myPieChart");
              var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                  labels: ["Javascript", "CSS", "PHP", "HTML","Laravel","SQL","SHELL","情報システム基礎知識(その他)"],
                  datasets: [{
                      backgroundColor: [
                          "#2A46EC",
                          "#1B71BC",
                          "#21BCDE",
                          "#3DCEFE",
                          "#3DCEFE",
                          "#6D46EC",
                          "#4A18EF",
                          "#3107BF",
                      ],
                      data: [30,20,10,5,5,20,20,10],
                      borderAlign:'center',
                      borderWidth:0,
                      
                  }]
                },
                options: {
                  cutoutPercentage: 50,
                  legend:{
                    position:"bottom",
                    paddingtop:"20px",
                    labels:{
                      display:true,
                      boxWidth:12,
                      boxHeight:12,
                    }
                  },
                  // title: {
                  //   display: true,
                  //   text: '血液型 割合'
                  // }
                
                // responsive: false,
                 plugins: {
                    datalabels: {
                        color: '#FFFF',
                        font: {
                            weight: 'bold',
                            size: 10,
                },
                formatter: (value, ctx) => {
                    return value + '%';
                },
            }
        }
    }
              });
              </script>
            
            </div>
            <div class="contentsData" id="contentsData">
              <h2>学習チャート</h2>
              <canvas id="myPieChart2"　style="position: relative"; height="300";width="120"></canvas>
              <!-- CDN -->
　            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
　　　　　　　 　<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
              <script>
              var ctx = document.getElementById("myPieChart2");
              var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                  labels: ["N予備校", "ドットインストール", "課題"],
                  datasets: [{
                      backgroundColor: [
                          "#2A46EC",
                          "#1B71BC",
                          "#21BCDE",
                      ],
                      data: [40,20,40],
                      borderAlign:'center',
                      borderWidth:0,
                      
                  }]
                },
                options: {
                  cutoutPercentage: 50,
                  legend:{
                    position:"bottom",
                    paddingtop:"20px",
                    labels:{
                      display:true,
                      boxWidth:12,
                      boxHeight:12,
                    }
                  },
                  
                 plugins: {
                    datalabels: {
                        color: '#FFFF',
                        font: {
                            weight: 'bold',
                            size: 10,
                },
                formatter: (value, ctx) => {
                    return value + '%';
                },
            }
        }
    }
              });
              </script>
            </div>
          </div>

        </div>
        <div class="index" id="index">
          
        </div>
    </div>
  </div>
  <script src="index.js"></script>
  <script src="calendar1.js"></script>
  <script src="calendar2.js"></script>
  <script>
    flatpickr.localize(flatpickr.l10ns.ja);
    flatpickr('#calendar');
  </script>
</body>
</html>