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

function enviarEncuesta(){
	var valor = [];
	var boton = [];
	$("input:checked").each(function() {
	  valor.push($(this).val());
	});
	var rate = $('#rate').val();
	var suggestions = $('#suggestions').val();
	var future = $('#future').val();
	var rate = $(".button-select").text();
	$($(':checkbox').prop('checked', true)).each(function() {
	  console.log($(this));
	});
}

function numberRange(id){
	var buttonSelect = $('#'+id+'.button-number');
	$('.button-number').removeClass('button-select');
	buttonSelect.addClass('button-select');
}