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

$(window).load(function() {
    $("#ModalLogin").modal('show');
});

function enviarEncuesta(){
	var valor = [];
	var boton = [];
	var valor1 = [];
	var valor2 = [];
	var valor3 = [];
	var valor4 = [];
	/*$("input:checked").each(function() {
	  valor.push($(this).val());
	});*/
	$('#preg1').find("input:checked").each(function() {
	  valor1.push($(this).val());
	});
	$('#preg2').find("input:checked").each(function() {
	  valor2.push($(this).val());
	});
	$('#preg3').find("input:checked").each(function() {
	  valor3.push($(this).val());
	});
	$('#preg4').find("input:checked").each(function() {
	  valor4.push($(this).val());
	});
	var suggestions = $('#suggestions').val();
	var future 		= $('#future').val();
	var rate 		= $(".button-select").find("span").text();
	if(valor1.length == 0) {
		msj('error', 'Complete all the questions'); 
		return;
	}
	if(valor1.length > 5) {
		msj('error', 'Up to five choices'); 
		return;
	}
	if(valor2.length == 0) {
		msj('error', 'Complete all the questions'); 
		return;
	}
	if(valor2.length > 5) {
		msj('error', 'Up to five choices'); 
		return;
	}
	if(valor3.length == 0) {
		msj('error', 'Complete all the questions'); 
		return;
	}
	if(valor3.length > 5) {
		msj('error', 'Up to five choices'); 
		return;
	}
	if(valor4.length == 0) {
		msj('error', 'Complete all the questions'); 
		return;
	}
	if(suggestions == null) {
		msj('error', 'Complete all the questions');
		return;
	}
	if(future == null) {
		msj('error', 'Complete all the questions');
		return;
	}
	if(rate == null) {
		msj('error', 'Complete all the questions');
		return;
	}
	$.ajax({
		data  : { valor1 	  : valor1.toString(),
				  valor2 	  : valor2.toString(),
				  valor3 	  : valor3,
				  valor4 	  : valor4,
				  suggestions : suggestions,
				  future 	  : future,
				  rate 		  : rate},
		url   : 'Survey/enviarEncuesta',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
        		sessionStorage.setItem('OPEN_MODAL', '1');
				location.href = 'Inicio';
        	}else {
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});

}

function numberRange(id){
	var buttonSelect = $('#'+id+'.button-number');
	$('.button-number').removeClass('button-select');
	buttonSelect.addClass('button-select');
}

function ingresar() {
	var correo = $('#correo').val();
	if(correo == null) {
		$('#correo').parent().addClass('is-invalid');
		return;
	}
	if (!validateEmail(correo)) {
		$('#correo').parent().addClass('is-invalid');
		return;
	}
	$.ajax({
		data  : { correo : correo},
		url   : 'Inicio/ingresar',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
        		location.href = 'Survey';
        		$('#correo').val("");
        	}else {
				$('#correo').parent().addClass('is-invalid');
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function verificarDatos(e) {
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}