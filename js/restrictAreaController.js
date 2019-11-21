$(document).ready(function(){
	/* Start - Controle de Visilibadade de Componentes */

	$("#formFuncionario").show();
	$( "#formClientes" ).hide();
	$( "#formImoveis" ).hide();

	$( "#subFormCasa" ).hide();
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
        	case "Casa":
        		$( "#subFormCasa" ).show();
				$( "#subFormApartamento" ).hide();
				//document.getElementById("numApartamento").removeAttribute("required");
				document.getElementById("numApartamento").required = false;
				document.getElementById("numApartamento").value = null;

				//document.getElementById("andarApartamento").removeAttribute("required");
				document.getElementById("andarApartamento").required = false;
				document.getElementById("andarApartamento").value = null;

				//document.getElementById("valorCondominio").removeAttribute("required");
				document.getElementById("valorCondominio").required = false;
				document.getElementById("valorCondominio").value = null;

				document.getElementById("areaCasa").required = true;

        		break;

        	case "Apartamento":
        		$( "#subFormCasa" ).hide();
				$( "#subFormApartamento" ).show();
				//document.getElementById("areaCasa").removeAttribute("required");
				document.getElementById("areaCasa").required = false;
				document.getElementById("areaCasa").value = null;
				document.getElementById("possuiPiscina").required = false;

				document.getElementById("numApartamento").required = true;
				document.getElementById("andarApartamento").required = true;
				document.getElementById("valorCondominio").required = true;
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

	/* End - Máscaras */
})