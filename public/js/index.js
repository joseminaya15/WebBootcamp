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
	var suggestions = $('#suggestions').val();
	var future 		= $('#future').val();
	var rate 		= $(".button-select").find("span").text();
	if(valor.length < 9){ 
		return;
	}
	if(suggestions == null) {
		return;
	}
	if(future == null) {
		return;
	}
	if(rate == null) {
		return;
	}
	$.ajax({
		data  : { valor 	  : valor,
				  suggestions : suggestions,
				  future 	  : future,
				  rate 		  : rate},
		url   : 'Survey/enviarEncuesta',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				/*addLoading('idEncuesta');
					setTimeout(function(){ 
						stopLoading('idEncuesta')
					}, 4000);*/
        	}else {
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
	/*$($(':checkbox').prop('checked', true)).each(function() {
	  console.log($(this));
	});*/

}

function numberRange(id){
	var buttonSelect = $('#'+id+'.button-number');
	$('.button-number').removeClass('button-select');
	buttonSelect.addClass('button-select');
}