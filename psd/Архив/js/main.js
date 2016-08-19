$(document).ready(function(){
	
/* Slider */
$('.bxslider').bxSlider({
    slideWidth: 200,
    minSlides: 5,
    maxSlides: 5,
    slideMargin: 10, 
	moveSlides: 1,
	pager: false,
});

/* Modal Form */
$(document).on('click', '.callback', function(){
    $('#callback-modal').arcticmodal();
});
$(document).on('click', '.single-door img', function(){
    $('#door-modal').arcticmodal();
});

/* Slicknav Menu */
$(function(){
	$('#menu').slicknav();
});


/*  Scroll menu  */
$(document).ready(function() {
if ($(window).width() > 1139) {
   var search_bar = $('header');
   var margin = 0;
   var borderY = 1;/*search_bar.offset().top - margin;*/
   
   $(window).bind('scroll', function()
   {
     var currentY = $(document).scrollTop();
     if(currentY > borderY)
     {
       search_bar.css({position: 'fixed', width: '100%', top: margin + 'px'});
     } 
     else if(currentY < borderY)
     {
       search_bar.css({position: '', top: '', width: ''});
     }
   });
}
if ($(window).width() < 1139) {
   var search_bar = $('.slicknav_menu');
   var margin = 0;
   var borderY = 225;/*search_bar.offset().top - margin;*/
   
   $(window).bind('scroll', function()
   {
     var currentY = $(document).scrollTop();
     if(currentY > borderY)
     {
       search_bar.css({position: 'fixed', width: '100%', top: margin + 'px'});
     } 
     else if(currentY < borderY)
     {
       search_bar.css({position: '', top: '', width: ''});
     }
   });
}
});

/*  MixItUp plugin (catalog filters)  */
$(function () {
		
	var filterList = {
		init: function () {
			$('#catalog').mixItUp({
				selectors: {
  			  target: '.single-product',
  			  filter: '.filter'	
  		  },
  		  load: {
    		  filter: '.1, .2, .3, .4, .5, .1-1, .1-2, .1-3, .1-4, .1-5, .2-1, .2-2, .2-3, .3-1, .3-2, .3-3' // show app tab on first load
    		}     
			});								
		}
	};
	filterList.init();
});		


/*  Anchor Scrolling  */
$(document).ready(function(){
	$(".all-doors").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1000);
	});
});

/*  ToTop  */

$(document).ready(function(){   
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroll-panel').fadeIn();
        } else {
            $('#scroll-panel').fadeOut();
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});


});