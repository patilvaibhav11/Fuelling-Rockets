

$(document).ready(function(){
	$(function() {
		//$("img.lazy").lazyload();
		new WOW().init();
		
		$('ul.nav li.dropdown').hover(function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
			}, function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		
	});
	
	$('.dropdown-submenu').on("click", function(e){
		//$(this).next('ul').toggle();
		e.stopPropagation();
		//e.preventDefault();
	});
	
	
	$(".moveTop").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
	
});

$(window).bind('scroll', function(){
	console.log('scroll');
	if ($(this).scrollTop() > 520) {
		$(".moveTop").show( "slide", { direction: "down"  }, 500 );
		}else{
		$(".moveTop").hide( "slide", { direction: "down"  }, 500 );
	}
});

// all form validation



