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


  function showItems() {

    function fadeInItems() {
      const winScroll = $(window).scrollTop();
      const winHeight = $(window).height();
      const scrollPos = winScroll + (winHeight * 0.8);

      $(".show").each(function() {
        const $this = $(this);
        
        if($this.offset().top < scrollPos) {
          $this.addClass('slideIn');
        }
      });
    }
    $(window).on('load scroll', fadeInItems);

  }


  function init(){
    changeNav();
    showItems();
  }
  
  init();

});