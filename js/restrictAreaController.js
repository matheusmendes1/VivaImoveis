$(document).ready(function(){
	/* Start - Controle de Visilibadade de Componentes */

	$("#formFuncionario").show();
	$( "#formClientes" ).hide();
	$( "#formImoveis" ).hide();

	$( "#subFormCasa" ).show();
	$( "#subFormApartamento" ).hide();
	$( "#subFormSalaComercial" ).hide();
	$( "#subFormTerreno" ).hide();

	$( "#tableFuncionario" ).hide();
	$( "#tableClientes" ).hide();
	$( "#tableImoveis" ).hide();
	$( "#tableInteressados" ).hide();


	$("#displayFormFuncionarios").click(function() {
    	$( "#formFuncionario" ).show();
		$( "#formClientes" ).hide();
		$( "#formImoveis" ).hide();
		$( "#tableFuncionario" ).hide();
		$( "#tableClientes" ).hide();
		$( "#tableImoveis" ).hide();
		$( "#tableInteressados" ).hide();
	});

	$("#displayFormClientes").click(function() {
    	$( "#formFuncionario" ).hide();
		$( "#formClientes" ).show();
		$( "#formImoveis" ).hide();
		$( "#tableFuncionario" ).hide();
		$( "#tableClientes" ).hide();
		$( "#tableImoveis" ).hide();
		$( "#tableInteressados" ).hide();
	});

	$("#displayFormImoveis").click(function() {
    	$( "#formFuncionario" ).hide();
		$( "#formClientes" ).hide();
		$( "#formImoveis" ).show();
		$( "#tableFuncionario" ).hide();
		$( "#tableClientes" ).hide();
		$( "#tableImoveis" ).hide();
		$( "#tableInteressados" ).hide();
	});

	$("#displayTableFuncionario").click(function() {
    	$( "#formFuncionario" ).hide();
		$( "#formClientes" ).hide();
		$( "#formImoveis" ).hide();
		$( "#tableFuncionario" ).show();
		$( "#tableClientes" ).hide();
		$( "#tableImoveis" ).hide();
		$( "#tableInteressados" ).hide();
	});

	$("#displayTableClientes").click(function() {
    	$( "#formFuncionario" ).hide();
		$( "#formClientes" ).hide();
		$( "#formImoveis" ).hide();
		$( "#tableFuncionario" ).hide();
		$( "#tableClientes" ).show();
		$( "#tableImoveis" ).hide();
		$( "#tableInteressados" ).hide();
	});

	$("#displayTableImoveis").click(function() {
    	$( "#formFuncionario" ).hide();
		$( "#formClientes" ).hide();
		$( "#formImoveis" ).hide();
		$( "#tableFuncionario" ).hide();
		$( "#tableClientes" ).hide();
		$( "#tableImoveis" ).show();
		$( "#tableInteressados" ).hide();
	});

	$("#displayTableInteressados").click(function() {
    	$( "#formFuncionario" ).hide();
		$( "#formClientes" ).hide();
		$( "#formImoveis" ).hide();
		$( "#tableFuncionario" ).hide();
		$( "#tableClientes" ).hide();
		$( "#tableImoveis" ).hide();
		$( "#tableInteressados" ).show();
	});

	 $("#tipoImovel").change(function(){
        var selectedImovel = $(this).children("option:selected").val();
        
        switch(selectedImovel){
        	case "casa":
        		$( "#subFormCasa" ).show();
				$( "#subFormApartamento" ).hide();
				$( "#subFormSalaComercial" ).hide();
				$( "#subFormTerreno" ).hide();
        		break;

        	case "apartamento":
        		$( "#subFormCasa" ).hide();
				$( "#subFormApartamento" ).show();
				$( "#subFormSalaComercial" ).hide();
				$( "#subFormTerreno" ).hide();
        		break;

        	case "salaComercial":
        		$( "#subFormCasa" ).hide();
				$( "#subFormApartamento" ).hide();
				$( "#subFormSalaComercial" ).show();
				$( "#subFormTerreno" ).hide();
        		break;

        	case "terreno":
        		$( "#subFormCasa" ).hide();
				$( "#subFormApartamento" ).hide();
				$( "#subFormSalaComercial" ).hide();
				$( "#subFormTerreno" ).show();
        		break;
        }
    });

	/* End - Controle de Visilibadade de Componentes */ 

	/* Start - Máscaras */

	/* CPF */
	$('.cpfMask').mask('000.000.000-00');

	/* Telefone */
	$('.telMask').mask('(00) 0000-0000');

	/* Celular */
	$('.celMask').mask('(00) 00000-0000');

	/* CEP */
	$('#cepFuncionario, #cepCliente').mask('00000-000');


	$('#submitFuncionarios').click( function(){
		alert("Maluco clicou aqui!");
	});
	
	/* End - Máscaras */
})