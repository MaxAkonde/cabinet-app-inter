//aos
AOS.init({
})

//header
$(".header").sticky({ topSpacing: 0 });

$('.nav').append($('<div class="nav-mobile"></div>'));
$('.nav-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
$('.nav-submenu-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');

$('.nav-mobile').click(function(){
  $('.nav-list').toggle();
});
$('.nav-list').on('click', '.nav-click', function(){
  $(this).siblings('.nav-submenu').toggle();
  $(this).children('.nav-arrow').toggleClass('nav-rotate');
  
});
$('.nav-submenu').on('click', '.nav-click', function(){
  $(this).siblings('.nav-subsubmenu').toggle();
  $(this).children('.nav-arrow').toggleClass('nav-rotate');
  
});

//Modal
var elements = $('.modal-overlay, .modal');

$('#btn-rdv').click(function(){
    elements.addClass('active');
});
$('#btn-rdv1').click(function(){
    elements.addClass('active');
});

$('.close-modal').click(function(){
    elements.removeClass('active');
});

//slider
$('.homeslider').slick({
    arrows:false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    autoplay:true,
    autoplaySpeed: 3000
});
$('.item-article').slick({
    arrows:false,
    dots:true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    autoplay:true,
    autoplaySpeed: 3000
});

