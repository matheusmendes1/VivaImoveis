$(document).ready(function(){

	$("#formFuncionario").show();
	$( "#formClientes" ).hide();
	$( "#formImoveis" ).hide();

	$( "#subFormCasa" ).show();
	$( "#subFormApartamento" ).hide();
	$( "#subFormSalaComercial" ).hide();
	$( "#subFormTerreno" ).hide();

	$("#displayFormFuncionarios").click(function() {
	    	$( "#formFuncionario" ).show();
			$( "#formClientes" ).hide();
			$( "#formImoveis" ).hide();
	});

	$("#displayFormClientes").click(function() {
	    	$( "#formFuncionario" ).hide();
			$( "#formClientes" ).show();
			$( "#formImoveis" ).hide();
	});

	$("#displayFormImoveis").click(function() {
	    	$( "#formFuncionario" ).hide();
			$( "#formClientes" ).hide();
			$( "#formImoveis" ).show();
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

})