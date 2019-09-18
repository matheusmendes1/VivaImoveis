$(document).ready(function(){

	$(".hide-nav").click(function() {
		$( "#barraNavegacao" ).hide();
	});

	$(".navbar-toggler").click(function () {
	    $("#barraNavegacao").toggle();
	});

	$("#cepFuncionario").focusout(function(){
		$.ajax({

			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			dataType: 'json',
			success: function(resposta){
				$("#ruaFuncionario").val(resposta.logradouro);
				$("#complementoFuncionario").val(resposta.complemento);
				$("#bairroFuncionario").val(resposta.bairro);
				$("#cidadeFuncionario").val(resposta.localidade);
				$("#estadoFuncionario").val(resposta.uf);
				$("#numeroRuaFuncionario").focus();
			}
		});
	});

	$("#cepCliente").focusout(function(){

		$.ajax({
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			dataType: 'json',
			success: function(resposta){
				$("#logradouroCliente").val(resposta.logradouro);
				$("#complementoCliente").val(resposta.complemento);
				$("#bairroCliente").val(resposta.bairro);
				$("#cidadeCliente").val(resposta.localidade);
				$("#estadoCliente").val(resposta.uf);
				$("#numeroRuaCliente").focus();
			}
		});
	});

})