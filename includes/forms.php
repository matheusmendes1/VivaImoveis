<script>


function buscaCEP(cep,tipoCadastro)
{
    if (cep.length !== 9){
        
        alert('CEP inválido!');

		if(tipoCadastro == 'funcionario'){
			document.getElementById("ruaFuncionario").value = null;
			document.getElementById("bairroFuncionario").value = null;
			document.getElementById("cidadeFuncionario").value = null;
		}else{
			document.getElementById("ruaCliente").value = null;
			document.getElementById("bairroCliente").value = null;
			document.getElementById("cidadeCliente").value = null;
		}
		return;
    }
    else{

    	$.ajax({

                url: "searchEndereco.php?cep=" + cep,
                type: 'GET',
                async: true,
                dataType: 'json', 

                success: function (result)
                {
                	console.dir(result);
                	if(result.logradouro == null || result.bairro == null || result.cidade == null ){
                		alert('CEP não encontrado!');
                	}
                	else{

                		if(tipoCadastro == 'funcionario'){
				             document.getElementById("ruaFuncionario").value = result.logradouro;
				             document.getElementById("bairroFuncionario").value = result.bairro;
				             document.getElementById("cidadeFuncionario").value = result.cidade;
	            		}else{
				            document.getElementById("ruaCliente").value = result.logradouro;
				            document.getElementById("bairroCliente").value = result.bairro;
				            document.getElementById("cidadeCliente").value = result.cidade;
	            		}
                	}   
                },

                error: function (xhr, textStatus, error)
                {
                    // xhr é o objecto XMLHttpRequest
                    // No caso de um erro HTTP, o terceiro parametro 'error' contem a string 
                    // correspondente ao código do erro, como "Not found" ou "Internal Server Error"
                    alert(textStatus + ' - ' + error + ' - ' + xhr.responseText);
                }

            });

	}
}
      
function checkFiles(files) { 

  var // Define maximum number of files.
      max_file_number = 6,
       // Define your form id or class or just tag.
      $form = $('formulario'), 

      // Define your submit class or id or tag.
      $button = $('.submit', $form); 

  // Disable submit button on page ready.
  $button.prop('disabled', 'disabled');
    
    var number_of_images = files.length;
    if (number_of_images > max_file_number) {
      alert(`Você poder selecionar no máximo ${max_file_number} arquivos.`);
      files[0].value = null;
      $button.prop('disabled', 'disabled');
    } else {
      $button.prop('disabled', false);
    }
    
  };
  
function validateFiles() {
    
    if(document.getElementById('files').files.length > 6)
    {
        alert('Você possui mais de 6 arquivos selecionado.');
        return false;
    }
    else {
        return true;
    }
    
};
</script>	

<?php

require "conexaoMysql.php";

class Clientes{

	public $nomeCliente;
	public $cpfCliente;

}

function getCliente(){

	$arrayClientes = null;

	$conn = conectaAoMySQL();

	$SQL = "SELECT CPF,Nome
    		FROM Cliente_Proprietario
  	   ";

	$result = $conn->query($SQL);
	if (! $result)
		throw new Exception('Ocorreu um erro ao recuperar os clientes: ' . $conn->error);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$cliente = new Clientes();  		
			$cliente->nomeCliente = $row["Nome"];
			$cliente->cpfCliente = $row["CPF"]; 
			$arrayClientes[] = $cliente;
		}
	}

	if ($conn != null)
		$conn->close();

	return $arrayClientes;
}

$arrayClientes = null;

try{
	$arrayClientes = getCliente();
	//var_dump($arrayClientes);
}catch (Exception $e)
{
	$msgErro = $e->getMessage();
}

?>


<!-- Start Forms Section -->
		<div class="container" id="forms"> <!-- Start Formularios Holder Section -->
			<div id="formFuncionario"> <!-- Start - Cadastro de Funcionarios -->
				<div class="col-12 text-center">
					<h3 class="heading">Cadastro de Funcionarios</h3>
					<div class="heading-underline"></div>
				</div>

				<form action="cadastraFuncionario.php" method="post">
					<div class="form-row">
					    <div class="col-md-8">
							<label for="nomeFuncionario">Nome Completo</label>
							<input maxlength="80" id="nomeFuncionario" name="nomeFuncionario" type="text" class="form-control" required>
					    </div>
					    <div class="col-md-4">
							<label for="cpfFuncionario">CPF</label>
							<input id="cpfFuncionario" name="cpfFuncionario" type="text" class="form-control cpfMask" required>
					    </div>
					</div>

					<div class="form-row">
					    <div class="col-sm-12 col-md-3">
							<label for="cepFuncionario">CEP</label>
							<input id="cepFuncionario" name="cepFuncionario" onkeyup="buscaCEP(this.value,'funcionario')" type="text" class="form-control" required>
					    </div>

					</div>

					<div class="form-row">
					    <div class="col-md-6">
							<label for="ruaFuncionario">Logradouro</label>
							<input id="ruaFuncionario" name="ruaFuncionario" type="text" class="form-control" required>
					    </div>
					    <div class="col-md-2">
							<label for="numeroRuaFuncionario">Nº</label>
							<input id="numeroRuaFuncionario" name="numeroRuaFuncionario" type="number" class="form-control" required>
					    </div>
					    <div class="col-md-4">
							<label for="bairroFuncionario">Bairro</label>
							<input id="bairroFuncionario" name="bairroFuncionario" type="text" class="form-control" required>						
						</div>
					    <div class="col-md-4">
							<label for="cidadeFuncionario">Cidade</label>
							<input id="cidadeFuncionario" name="cidadeFuncionario" type="text" class="form-control" required>
						</div>		
					</div>

					<div class="form-row">
					    <div class="col-md-4">
							<label for="dataIngressoFuncionario">Data de Ingresso</label>
							<input id="dataIngressoFuncionario" name="dataIngressoFuncionario" type="date" class="form-control" required>
					    </div>

						<div class="col-md-4">
							<label for="telefoneFuncionario">Telefone</label>
							<input id="telefoneFuncionario" name="telefoneFuncionario" type="text" class="form-control telMask">
					    </div>

						<div class="col-md-4">
							<label for="celularFuncionario">Celular</label>
							<input id="celularFuncionario" name="celularFuncionario" type="text" class="form-control celMask" required>
					    </div>
					</div>

					<div class="form-row">
					    <div class="col-md-6">
							<label for="cargoFuncionario">Cargo</label>
							<input id="cargoFuncionario" name="cargoFuncionario" type="text" class="form-control" required>
					    </div>
					    
						<div class="col-md-6">
							<label for="salarioFuncionario">Salário</label>
								<div class="input-group">
									<div class="input-group-prepend">
							      		<span class="input-group-text" id="inputGroupPrepend">R$</span>
							    	</div>
									<input id="salarioFuncionario" name="salarioFuncionario" type="number" class="form-control remMask" required>
								</div>
					    </div>
					</div>

					<div class="form-row">
					    <div class="col-md-6">
							<label for="emailFuncionario">Email</label>
							<input id="emailFuncionario" name="emailFuncionario" type="text" class="form-control" required>
					    </div>
					    
						<div class="col-md-6">
							<label for="senhaFuncionario">Senha</label>
							<input id="senhaFuncionario" name="senhaFuncionario" type="password" class="form-control" required>
					    </div>
					</div>

					<button id="submitFuncionarios" type="submit" class="btn btn-primary">Registrar</button>
				</form>
				
			</div> <!-- End - Cadastro de Funcionarios -->

			
			<div id="formClientes"> <!-- Start - Cadastro de Clientes -->
				
				<div class="col-12 text-center">
					<h3 class="heading">Cadastro de Clientes</h3>
					<div class="heading-underline"></div>
				</div>

				<form action="cadastraCliente.php" method="post">
					<div class="form-row">
					    <div class="col-md-8">
							<label for="nomeCliente">Nome Completo</label>
							<input id="nomeCliente" name="nomeCliente" type="text" class="form-control" required>
					    </div>
					    <div class="col-md-4">
							<label for="cpfCliente">CPF</label>
							<input id="cpfCliente" name="cpfCliente" type="text" class="form-control cpfMask" required>
					    </div>
					</div>

					<div class="form-row">
					    <div class="col-sm-12 col-md-3">
							<label for="cepCliente">CEP</label>
							<input id="cepCliente" name="cepCliente" type="text" onkeyup="buscaCEP(this.value,'cliente')" class="form-control" required>
					    </div>
					</div>

					<div class="form-row">
						<div class="col-md-6">
							<label for="cidadeCliente">Cidade</label>
							<input id="cidadeCliente" name="cidadeCliente" type="text" class="form-control" required>
						</div>

						<div class="col-md-6">
							<label for="bairroCliente">Bairro</label>
							<input id="bairroCliente" name="bairroCliente" type="text" class="form-control" required>						
						</div>
					</div>

					<div class="form-row">

					    <div class="col-md-7">
							<label for="ruaCliente">Logradouro</label>
							<input id="ruaCliente" name="ruaCliente" type="text" class="form-control" required>
					    </div>

						<div class="col-md-5">
							<label for="numeroRuaCliente">Nº</label>
							<input id="numeroRuaCliente" name="numeroRuaCliente" type="number" class="form-control" required>
					    </div>

					</div>

					<div class="form-row">

					    <div class="col-md-4">
							<label for="emailCliente">Email</label>
							<input id="emailCliente" name="emailCliente" type="email" class="form-control" required>
					    </div>

						<div class="col-md-4">
							<label for="telefoneCliente">Telefone</label>
							<input id="telefoneCliente" name="telefoneCliente" type="text" minlength="14" maxlength="14" class="form-control telMask" required>
					    </div>

						<div class="col-md-4">
							<label for="celularCliente">Celular</label>
							<input id="celularCliente" name="celularCliente" type="text" minlength="15" maxlength="15" class="form-control celMask" required>
					    </div>

					</div>

					<div class="form-row">

					    <div class="col-md-4">
							<label for="sexoCliente">Sexo</label>

							<select id="sexoCliente" name="sexoCliente" class="custom-select" required>
							  <option selected hidden>Selecione...</option>
							  <option value="Masculino">Masculino</option>
							  <option value="Feminino">Feminino</option>  
							</select>
					    </div>
					    
						<div class="col-md-4">
							<label for="estadoCivilCliente">Estado Civil</label>

							<select id="estadoCivilCliente" name="estadoCivilCliente" class="custom-select" required>
							  <option selected hidden>Selecione...</option>
							  <option value="Casado">Casado(a)</option>
							  <option value="Solteiro">Solteiro(a)</option>
							</select>
					    </div>

						<div class="col-md-4">
							<label for="profissaoCliente">Profissão</label>
							<input id="profissaoCliente" name="profissaoCliente" type="text" class="form-control"required>
					    </div>

					</div>

					<button id="submitClientes" type="submit" class="btn btn-primary">Registrar</button>
				</form>
				
			</div> <!-- End - Cadastro de Clientes -->


			<div id="formImoveis"> <!-- Start - Cadastro de Imóveis -->
				
				<div class="col-12 text-center">
					<h3 class="heading">Cadastro de Imóveis</h3>
					<div class="heading-underline"></div>
				</div>

				<form action="cadastraImovel.php" method="post" id="formulario" onsubmit="return validateFiles()">
					<div class="form-row">
						<div class="col-md-3">		
							<label for="tipoImovel">Tipo de Imóvel</label>
							<select id="tipoImovel" name="tipoImovel" class="custom-select" required="true">
							  <option selected hidden>Selecione...</option>
							  <option value="Casa">Casa</option>
							  <option value="Apartamento">Apartamento</option>
							</select>	
					    </div>

					    <div class="col-md-3">		
							<label for="propositoImovel">Propósito</label>
							<select id="propositoImovel" name="propositoImovel" class="custom-select" required="true">
							  <option selected value="Venda">Venda</option>
							  <option value="Locacao">Locação</option>
							</select>
					    </div>

						<div class="col-md-6">							
							<label for="proprietarioImovel">Proprietário</label>
							<select id="proprietarioImovel" name="proprietarioImovel" class="custom-select" required="true">
								<option selected hidden>Selecione...</option>
								<?php
									if ($arrayClientes != null)
									{
										foreach ($arrayClientes as $cliente)
										{       
											echo '
											<option value="'.$cliente->cpfCliente.'">'.$cliente->nomeCliente.'</option>
											';
										}
									}
								?>
							</select>							
						</div>
					</div>

					<div class="form-row">
						    <div class="col-md-3">
								<label for="valorImovel">Valor do Imóvel:</label>
								<input id="valorImovel" name="valorImovel" type="number" class="form-control" required="true">
						    </div>

						    <div class="col-md-3">
								<label for="bairroImovel">Bairro:</label>
								<input id="bairroImovel" name="bairroImovel" type="text" class="form-control" required="true">
						    </div>

							<div class="col-md-6">
								<div class="custom-file" style="margin-top: 32px !important;">
									<input id="files" type="file" class="custom-file-input"	name="files[]" multiple="multiple" required = "true"
									onchange="checkFiles(files)">
								    <!--input type="file" class="custom-file-input" name="fotosImovel" id="fotosImovel" multiple-->
								    <label class="custom-file-label" for="fotosImovel">Fotos do Imóvel</label>
								</div>
							</div>		
					</div>

					<div class="form-row">
						    <div class="col-md-3">
								<label for="qtdQuartosImovel">Número de Quartos:</label>
								<input id="qtdQuartosImovel" name="qtdQuartosImovel" type="number" class="form-control" min="1" max="5" required="true">
						    </div>

						    <div class="col-md-3">
								<label for="qtdSuitesImovel">Número de Suites:</label>
								<input id="qtdSuitesImovel" name="qtdSuitesImovel" type="number" class="form-control" min="1" max="5" required="true">
						    </div>	   
					</div>

					<div class="form-row">
						    <div class="col-md-12">
								<label for="descricaoImovel">Descrição do Imóvel:</label>
								<textarea id="descricaoImovel" name="descricaoImovel" class="form-control" rows="3" required="true"></textarea>
						    </div>
					</div>

					<!--Campos especificos de Casa e Apartamento -->
					<div id="subFormCasa"> <!-- Start Formulario - Casa -->

						<div class="form-row">
						    <div class="col-md-5">
								<label for="areaCasa">Área (em m²):</label>
								<input id="areaCasa" name="areaCasa" type="number" class="form-control" min="1" max="999" required="true">
						    </div>

						    <div class="col-md-3">
						    	<label for="possuiPiscina">Possui Piscina?</label>
								<select id="possuiPiscina" name="possuiPiscina" class="custom-select" required="true">
								  <option selected value="Nao">Não</option>
								  <option value="Sim">Sim</option>
								</select>
							</div>
						</div>
						<button id="submitImovelCasa" type="submit" class="btn btn-primary">Registrar</button>
					</div> <!-- End Formulario - Casa -->
					
					<div id="subFormApartamento"> <!-- Start Formulario - Apartamento -->						
						<div class="form-row">
							<div class="col-md-4">
								<label for="numApartamento">Número do Apartamento:</label>
								<input id="numApartamento" name="numApartamento" type="number" class="form-control" required="true">
							</div>

							<div class="col-md-4">
								<label for="andarApartamento">Andar:</label>
							  	<input id="andarApartamento" name="andarApartamento" class="form-control" type="number" min="1" max="30" required="true">									
							</div>

							<div class="col-md-4">
								<label for="valorCondominio">Valor do Condomínio:</label>
								<input id="valorCondominio" name="valorCondominio" type="number" class="form-control" required="true">			
							</div>	
						</div>

						<button id="submitImovelApt" type="submit" class="btn btn-primary">Registrar</button>
					</div> <!-- End Formulario - Apartamento -->		
				</form>
				
			</div> <!-- End - Cadastro de Imóveis -->

		</div> <!-- End Formularios Holder Section -->
<!-- End Forms Section -->