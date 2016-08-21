(function($)
{

  $(document).ready(function()
  {

    // Menu HAMBURGER
    $('.header-logo-menu').click(function(e){
      if(parseInt($('.header-hb-nav').css('left')) == 0){
        e.preventDefault();
        $('.header-hb-nav').css('left', '100%');
        $('section').css('display', 'block');
        $('.header-banner').css('display', 'none');
      } else {
        e.preventDefault();
        $('.header-hb-nav').css('left', '0');
        $('section').css('display', 'none');
      }
    });

  });
})(jQuery);
