jQuery(document).ready(function($){
  $('.b_welcome-text').addClass('b_welcome-text-active');
  $('.scroll-down').addClass('scroll-down-active');
  $('.b_audit-welcome-title').addClass('esco-fade');
  $('.b_audit-welcome .esco-line').addClass('esco-fade');
  $('.b_audit-welcome-description').addClass('esco-fade');
  $('.b_audit-welcome .esco-list__item').addClass('esco-fade');
  $('.b_audit-welcome .esco-detail-right').addClass('animate-active');
  $('.b_podryad-welcome .esco-detail-right').addClass('animate-active');
  $('.b_contract-welcome .esco-detail-right').addClass('animate-active');
  $('.b_contract-welcome__title').addClass('esco-fade');
  $('.b_contract-welcome__description').addClass('esco-fade');
  $('.b_contract-welcome__icons').addClass('esco-fade');
  $('.b_contract-welcome .esco-line').addClass('esco-fade');
  $('.b_contract-welcome__bottom').addClass('esco-fade');
  $('.b_proect-welcome__title').addClass('esco-fade');
  $('.b_proect-welcome__description').addClass('esco-fade');
  $('.b_proect-welcome .esco-line').addClass('esco-fade');
  $('.b_proect-welcome-list__item').addClass('esco-fade');
  $('.b_proect-welcome .esco-detail-right').addClass('animate-active');
  $('.b_vie-welcome__title').addClass('esco-fade');
  $('.b_vie-welcome .esco-line').addClass('esco-fade');
  $('.b_vie-welcome__description').addClass('esco-fade');
  $('.b_vie-welcome__item').addClass('esco-fade');
})

$('.mobile-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('mobile-menu__active');
  $('.mobile-cover').toggleClass('mobile-cover__open');
  $('body').toggleClass('modal-open');
});

if ($(document).width() < 992) {
  $(window).scroll(function(){
    var h_scroll = $(this).scrollTop();
    if (h_scroll > 100) {
      $('.header__logo').fadeOut();
    } else {
      $('.header__logo').fadeIn();
    }
  })
}

//Плавный скролл
$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  var target = $($.attr(this, 'href'));
  var targetScroll =  target.offset().top;
  $('html, body').animate({
      scrollTop: targetScroll
  }, 500);
});

$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

var checkFirstSlide = function(){
  var ref = $('.puk-slide').first().attr("data-section-name");
  console.log(ref);
  if(ref==="dark") {
    $(".header").removeClass("light-header");
  }
  if(ref==="light") {
    $(".header").addClass("light-header");
  } 
}

checkFirstSlide();
if ($(document).width() > 760) {
  $.scrollify({
    section : ".puk-slide",
    easing: "easeOutExpo",
    updateHash: false,
    before: function(i,panels) {
      var ref = panels[i].attr("data-section-name");
      console.log(ref);
      if(ref==="dark") {
        $(".header").removeClass("light-header");
      }
      if(ref==="light") {
        $(".header").addClass("light-header");
      }
    },
  });
}

function initialPosition() {
  var current = $.scrollify.current();
}

$('.counter').counterUp({
    delay: 10,
    time: 5000
});

heightHeader = ($('.header').outerHeight() + 20);
if ($('.b_ingi-detail').length > 0) {
  heightIngiDetail = $('.b_ingi-detail').height();
  console.log(heightHeader);
  offsetTopIngiTitle = $('.b_ingi-title').offset().top;
  $('.b_ingi-detail').css({'top':heightHeader});
  $('.b_ingi .esco-line').css({'margin-bottom':heightIngiDetail/2})  
}