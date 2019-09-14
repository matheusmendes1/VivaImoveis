$(document).ready(function(){

	$("#formFuncionario").show();
	$( "#formClientes" ).hide();

	$("#displayFormFuncionarios").click(function() {
	    	$( "#formFuncionario" ).show();
			$( "#formClientes" ).hide();
	});

	$("#displayFormClientes").click(function() {
	    	$( "#formFuncionario" ).hide();
			$( "#formClientes" ).show();
	});

})