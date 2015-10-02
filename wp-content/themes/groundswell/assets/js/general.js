$( window ).load(function() {
	caseStudySlider();
	navToggle();

	if ($(window).width() > 990) {
	} else {

	}

})

$( document).ready(function() {

})

$( window ).resize(function() {
	if ($(window).width() > 990) {

	} else {

	}
})

$(document).ajaxComplete( function() {

})

var lastScrollTop = 0;
$(window).scroll(function() {
	var scrollTop = $(this).scrollTop();
  if (scrollTop > lastScrollTop){
      $('header.scroll').fadeOut();
      $('header.homepage').css('visibility','visible')
  } else if (scrollTop < lastScrollTop ) {
      $('header.scroll').fadeIn();
      $('header.homepage').css('visibility','hidden')
  }
  if (scrollTop == 0) {
  	$('header.scroll').fadeOut();
      $('header.homepage').css('visibility','visible')
  }

  lastScrollTop = scrollTop;
})


function squareMaker(selector) {
	var width = selector.width();
	selector.css('height', width);
	if ($(window).width() > 1150) {
		$('.contact.offset-cont .side-cont').css('height', width);
	}
}

function divEqualizer(divSelector) {
	var maxHeight = 0;
	divSelector.each(function(){
   		if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	divSelector.height(maxHeight);
}

function centerBlogImages() {
	$('img.aligncenter').parent().css('text-align','center')
}

function smoothScroll(element, padding) {
	$('html, body').animate({
        scrollTop: element.offset().top - padding
    }, 600);
}

function caseStudySlider() {
	$('.case-study-slider').flexslider({
		controlNav: false,
		directionNav: true,
		slideshow: false,
		nextText: '',
		prevText: ''
	})
}

function navToggle() {
	$('.hamburger').on('click', function() {
		$('nav').slideDown();
		$('body').css('overflow-y', 'hidden')
	})
	$('.close').on('click', function() {
		$('nav').slideUp();
		$('body').css('overflow-y', 'visible')
	})
}


