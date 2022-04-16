function popupImage() {
    var popup = document.getElementById('js-popup');
    if(!popup) return;

    var inner = document.getElementById('popup-inner');

    var blackBg = document.getElementById('js-black-bg');
    var closeBtn = document.getElementById('js-close-btn');
    var showBtn = document.getElementById('js-show-popup');
    var modalBtn = document.getElementById('modal_button_figure');
    var modal_main = document.getElementById('modal_main');
    var success = document.getElementById('success');


    closePopUp(blackBg);
    closePopUp(closeBtn);
    closePopUp(showBtn);
    // closePopUp(modalBtn);
    // closePopUp(modalBtn);
    AppearPopUp(modalBtn);

    function closePopUp(elem) {
      if(!elem) return;
      elem.addEventListener('click', function() {
        popup.classList.toggle('is-show');
        success.style.display = 'none';
        modal_main.style.display = 'block';
      });
    }
    function AppearPopUp(elem) {
        if(!elem) return;
        elem.addEventListener('click', function() {
          modal_main.style.display = 'none';
          success.style.display = 'block';
        });
    }
  }



    //  var success = document.getElementById('success');
    //  var modalBtn = document.getElementById('modal_button_figure');


    //  modalBtn.addEventListener ('click', function(){
    //     modalBtn.style.display = 'block';
    //   },false);


  popupImage();
