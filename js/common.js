jQuery(function($) {

  // PC navi
  $('.menu-item-has-children').hover(function() {
    $(this).children('ul.sub-menu').stop().slideDown();
  }, function() {
    $(this).children('ul.sub-menu').stop().slideUp();
  });

  // SP navi
  $('#menu-global-navigation').slicknav({
    closedSymbol: '<i class="fa fa-angle-double-right"></i>',
    openedSymbol: '<i class="fa fa-angle-double-down"></i>',
    prependTo:'#navigation-sp'
  });

  $('.slider-for').slick({
    autoplay: true,
    slidesToScroll: 1,
    // arrows: false,
    fade: true,
  });
});