$(function(){

  function changeNav() {

    function toggleNav() {
      const $this = $(this);
      const $nav = $('header').find('nav');
  
      $this.toggleClass('open');
      $('.mask').toggleClass('active');
  
      if($this.hasClass('open')) {
        $nav.animate({
          top: 0
        }, 200);
      } else {
        $nav.animate({
          top: -150
        }, 200);
      }
    }
    $('.toggleBtn').on('click', toggleNav);

  }

  function init(){
    changeNav();
  }
  
  init();

});