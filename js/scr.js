  $(window).on("load", function () {

  	$(".spinner").fadeOut('slow');
  });
  $(document).ready(function () {


  	function initialize() {
  		var input = document.getElementById('location');
  		var autocomplete = new google.maps.places.Autocomplete(input);
  		var input1 = document.getElementById('location1');
  		var autocomplete = new google.maps.places.Autocomplete(input1);
  	}
  	google.maps.event.addDomListener(window, 'load', initialize);



  	$('#carouselFade,#mycarouse').carousel();
  	$('#timepicker1').timepicker();
  	$('#timepicker2').timepicker();
  	$(window).scroll(function (event) {
  		if ($(window).scrollTop() >= 1) {
  			$('.social').css({
  				left: '0'
  			});
  		} else {
  			$('.social').css({
  				left: '-42px'
  			});

  		}

  		/** nv reduce function and social back to top stuff**/

  		/**** paralax function ****/
  		var car = $(window).scrollTop() / 6.5;
  		if (-car != -177) {
  			$('.caro').css({
  				top: -car + 'px'
  			});
  		}
  		if (-car <= -177) {
  			$('.caro').css({
  				top: '0'
  			});
  		}
  		/**** paralax function ****/


  	});
  	/*function for smooth scrolling*/
  	$('a[href^="#"]').on('click', function (event) {
  		var target = $($(this).attr('href'));
  		if (target.length) {
  			event.preventDefault();
  			$('html, body').animate({
  				scrollTop: target.offset().top
  			}, 1500, 'swing');
  		}
  	});
  });
