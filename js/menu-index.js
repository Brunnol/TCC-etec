$(function () {
  'use strict'

  $(window).scroll(function () {
    if ($(this).scrollTop() >= 40) {
     $(".menu").addClass('fixed-top');
     $('.offcanvas-collapse').css("top","56px");
     $('.fechar-menu-lateral').css("top","56px");
    } else {
     $(".menu").removeClass('fixed-top');
     $('.offcanvas-collapse').css("top","96px");
     $('.fechar-menu-lateral').css("top","96px");
    }
  });
  $('[data-toggle="menu"]').on('click', function () {
    var loading = 1;
    $('.offcanvas-collapse').toggleClass('open');
    $('.fechar-menu-lateral').toggleClass('open');
    $(".menu").addClass('fixed-top');
  });
  $('.fechar-menu-lateral').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open');
    $('.fechar-menu-lateral').toggleClass('open');
    $(".menu").removeClass('fixed-top');
  });
    var largura = $(document).width();
    if (largura <= 991.9) {
      $('.menu-dropdown-body').hide();
      $('[data-dropdawn-toggle="menu-dropdown1"]').on('click', function () {
        $('[data-dropdawn-toggle="menu-dropdown1"]').toggleClass('menu-item');
        $('[data-dropdawn-toggle="menu-dropdown1"]').toggleClass('dropdawn');
        $('#menu-dropdown1').slideToggle("fast");
        $('#seta1').toggleClass('fa-caret-down');
        $('#seta1').toggleClass('fa-caret-up');
        $('#login').addClass('menu-item');
        $('#login').html('<a class="menu-link" href="#">Login</a>')
      });
    };
})