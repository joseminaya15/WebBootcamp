$(document).ready(function() {
	resizeContent();
    $(window).resize(function() {
        resizeContent();
    });
});

//CHANGE POSITION HEIGHT-TOP
function resizeContent() {
   var top = $( window ).height();
   $("#principal").css('height', top);
}

$('a.link[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : y
 	}, 'slow');
});