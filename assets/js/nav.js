// jQuery(function() {
//   jQuery("#navbutton").click(function() {
//       jQuery("#header-nav-wrap").slideToggle();
//   });
// });

  $(function() {
    $('.hamburger').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
        $('.globalMenuSp').addClass('active');

        $('body').addClass('showing-modal');
        $('body').addClass('showing-menu-modal');
        // $('body').addClass('menu-modal');
      } else {
        $('.globalMenuSp').removeClass('active');

        $('body').removeClass('showing-modal');
        $('body').removeClass('showing-menu-modal');
        // $('body').removeClass('menu-modal');
      }

    });
  });

  //メニュー内を閉じておく
  $(function() {
    $('.globalMenuSp a[href]').click(function() {
      $('.globalMenuSp').removeClass('active');
      $('.hamburger').removeClass('active');
    });
  });
