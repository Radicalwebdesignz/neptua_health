$(document).ready(function(){

	// Navbar color change on scroll
	
  	$(window).scroll(function(){
  		var scroll = $(window).scrollTop();
	  	if (scroll > 300) {
		  	$("#change-color").removeClass("nav-color");
		    $("#change-color").addClass("nav-color1");
	  	}

	  	else{
			$("#change-color").removeClass("nav-color1");
	   		$("#change-color").addClass("nav-color");
	  	}
  	});

  	// PARALLER PARALLAX EFFECT

  	// initialize paroller.js 
	$('window').paroller();
	// initialize paroller.js and set attributes 
	$("#home-banner").paroller({ factor: '-0.68', type: 'background', direction: 'horizontal'});
	$("#facilities").paroller({ factor: '-0.68', type: 'background', direction: 'horizontal'});
	$("#appointment").paroller({ factor: '0.68', type: 'background', direction: 'horizontal'});
	$("#about-banner").paroller({ factor: '-0.68', type: 'background', direction: 'vertical'});
	$("#departments-banner").paroller({ factor: '-0.68', type: 'background', direction: 'vertical'});
	$("#articles-banner").paroller({ factor: '-0.68', type: 'background', direction: 'vertical'});
	$("#testimonials").paroller({ factor: '-0.68', type: 'background', direction: 'vertical'});
	$("#departments-appointment").paroller({ factor: '-0.68', type: 'background', direction: 'horizontal'});
	$("#appointments-banner").paroller({ factor: '0.68', type: 'background', direction: 'horizontal'});

	// Slick Slider
	$('.slick_slider').slick({
	    slidesToShow: 4,
	  	slidesToScroll: 1,
	  	autoplay: true,
	  	autoplaySpeed: 2000,
  	});

  	// Slick Slider
	$('.slick_slider1').slick({
	    slidesToShow: 3,
	  	slidesToScroll: 1,
	  	autoplay: true,
	  	autoplaySpeed: 2000,
  	});

  	// Number increment Counter
  	var stop = $("#testimonials").offset().top
  	$(window).scroll(startCounter);
	function startCounter() {
	    if ($(window).scrollTop() > stop) {
	        $(window).off("scroll", startCounter);
	        $('.count').each(function () {
			    $(this).prop('Counter',0).animate({
			        Counter: $(this).text()
			    }, {
			        duration: 2000,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(Math.ceil(now));
			        }
			    });
			});
	    }
	}



})

// Bootstrap Dropdown Link activate and dropdown on hover

jQuery(function($) {
    $('.navbar .dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.navbar .dropdown > a').click(function(){
    location.href = this.href;
    });

});

