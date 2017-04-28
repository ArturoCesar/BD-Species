$(document).ready(function(){
	$('.carousel').carousel();
	$('.modal').modal();
	$('.parallax').parallax();
	$('.tap-target').tapTarget('open');
    $('.tap-target').tapTarget('close');
	$('.tooltipped').tooltip({delay: 50});	
	function valida_envia(){
		if(($("#contraseña")).value==""){
			alert ("Por favor indique su nombre");
			return 0;
		}
	};
	function valida_envia2(){
		if(($("#contraseña")).value==""){
			alert ("Por favor indique su nombre");
			return 0;
		}
	};
});
