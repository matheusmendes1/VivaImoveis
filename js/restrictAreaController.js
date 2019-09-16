$(document).ready(function(){
	/* Máscaras */

	/* CPF */
	$('.cpfMask').mask('000.000.000-00');

	/* Telefone */
	$('.telMask').mask('(00) 0000-0000');

	/* Celular */
	$('.celMask').mask('(00) 00000-0000');

	$('#submitFuncionarios').click( function(){
		alert("Maluco clicou aqui!");
	});
	
})