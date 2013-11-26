// JavaScript Document
  
$(function () {

  $("a[href^='#']").click(function(event) {
	  event.preventDefault();	// prevent default link behavior
	  var target = $(this).attr("href");
	  $('html,body').animate({scrollTop: $(target).offset().top}, 500);
  });
  
  var revealBacktoTop = function(){
	var scrollTop = $(window).scrollTop();
		 
	if (scrollTop > 500) { 
		$('#backtotop').css('opacity','1');
		$('#backtotop').css('z-index','9999');
	}
	else {
		$('#backtotop').css('opacity','0');
		$('#backtotop').css('z-index','-9999');
	}
	};
	
	revealBacktoTop();
	
	$(window).scroll(function() {
		revealBacktoTop();
  });
  
  
  //This part is for main page only
  
  var stickyNavTop = $('#navBar2').offset().top;
  
  var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
		 
	if (scrollTop > stickyNavTop) { 
		$('#navBar2').addClass('sticky');
	} else {
		$('#navBar2').removeClass('sticky'); 
	}
	};
	
	stickyNav();
	
	$(window).scroll(function() {
		stickyNav();
  });
});
