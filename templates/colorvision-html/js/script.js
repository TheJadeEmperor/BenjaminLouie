$(document).ready(function(){ 	
						   
						   
	// radius Box
	$('.topnav li a').css({"border-radius":"4px", "-moz-border-radius":"4px", "-webkit-border-radius":"4px"});
	$('#slider').css({"border-radius":"4px", "-moz-border-radius":"4px", "-webkit-border-radius":"4px"});
	$('#rightcol').css({"border-radius":"4px", "-moz-border-radius":"4px", "-webkit-border-radius":"4px"});
	$('#rightcol .box').css({"border-radius":"4px", "-moz-border-radius":"4px", "-webkit-border-radius":"4px"});
	$('p.rss').css({"border-radius":"16px", "-moz-border-radius":"16px", "-webkit-border-radius":"16px"});
	$('.search').css({"border-radius":"16px", "-moz-border-radius":"16px", "-webkit-border-radius":"16px"});
	$('#slider_controls ul').css({"border-radius":"18px", "-moz-border-radius":"18px", "-webkit-border-radius":"18px"});
	// end radius Box

    // add tags span to a href
//    $('.topnav ul').children('li').each(function() {
//      $(this).children('a').html('<span>'+$(this).children('a').text()+'</span>'); // add tags span to a href
//    });
//    $('#nav1 ul').children('li').each(function() {
//      $(this).children('a').html('<span>'+$(this).children('a').text()+'</span>'); // add tags span to a href
//    });
	// end add tags span to a href
	
	$("ul.sf-menu").superfish({
		autoArrows:  false,
		delay:       400,                             // one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
		speed:       'fast',                          // faster animation speed 
		autoArrows:  false,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 			
	}); 
	
	$('ul.list li').each(function() {
	  var a = $(this).children('a');
	  var aClass = a.attr('rel');
	  if (a.hasClass('active')) {     
	   $('.'+aClass).css({'display':'block'});
	  } else {
	   $('.'+aClass).css({'display':'none'});
	  }
	 });
	 $('ul.list li a').click(function () {             
	  var thisaClass = $(this).attr('rel');
	  $(this).parent('li').parent('ul').children('li').each(function() {
	   var a = $(this).children('a');
	   var aClass = a.attr('rel');
	   if (thisaClass == aClass) {
		$('.'+aClass).show();
		a.attr('class','active');
	   } else {
		$('.'+aClass).hide();
		a.attr('class','');
	   }
	  });
	  return false;
	});
	 
	$('#slideshow').cycle({
        fx:     'fade',
        speed:  'slow',
        timeout: 5000,
        pager:  '#slider_nav',
        pagerAnchorBuilder: function(idx, slide) {
            // return sel string for existing anchor
            return '#slider_nav li:eq(' + (idx) + ') a';
        }
    });
	 
});	