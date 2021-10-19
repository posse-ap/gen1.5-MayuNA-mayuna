function popupImage() {
  var popup = document.getElementById('js-popup');
  if(!popup) return;

  var blackBg = document.getElementById('js-black-bg');
  var closeBtn = document.getElementById('js-close-btn');
  var showBtn = document.getElementById('js-show-popup');
  var modalBtn = document.getElementById('modal_button_figure');
  
  closePopUp(blackBg);
  closePopUp(closeBtn);
  closePopUp(showBtn);
  // closePopUp(modalBtn);
  // closePopUp(modalBtn);
  // AppearPopUp(modal_main);
  
  function closePopUp(elem) {
    if(!elem) return;
    elem.addEventListener('click', function() {
      popup.classList.toggle('is-show');
    });
  }
}
　
　
   var modal_main = document.getElementById('modal_main');
   var success = document.getElementById('success');
   var modalBtn = document.getElementById('modal_button_figure');
   
   modalBtn.oncllick = function(){
    modal_main.style.display = "none";
    success.style.display = "block"
    console.log("成功");
   }



popupImage();
