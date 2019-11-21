<script type="text/javascript">
	

function getBairros(proposito){

	$.ajax({

                url: "getBairros.php?proposito=" + proposito,
                type: 'GET',
                async: true,
                dataType: 'json', 

                success: function (result)
                {
               	
                	if(result == null){
                		alert('Não Existem Bairros Cadastrados para esse Propósito!');
                	}
                	else{

                		var bairroInput = $('#bairroImovel');
                		bairroInput.find('option').remove();
                		
                		$.each(result, function (i, bairro) {
                        	$('<option>').val(bairro).text(bairro).appendTo(bairroInput);
                    	});
                	}   
                },

                error: function (xhr, textStatus, error)
                {

                    alert(textStatus + ' - ' + error + ' - ' + xhr.responseText);
                }

            });
}


</script>

<?php 

require "conexaoMysql.php";

class Imovel{
	
	public $id;
	public $preco;
	public $numQuartos;
	public $bairro;
	public $categoria;
	public $descricao;
	public $imagens;
}

function getImoveisByLimit($conn){

	$arrayImoveis = null;

	$SQL = "
		SELECT *
		FROM Imovel
	";

	$result = $conn->query($SQL);
	if (! $result)
		throw new Exception('Ocorreu um erro ao recuperar os imóveis: ' . $conn->error);

	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_assoc())
		{
			$imovel = new Imovel();  
			$imovel->id = $row["Id"];	
			$imovel->preco = $row["ValorImovel"];
			$imovel->numQuartos = $row["QuantidadeQuartos"];
			$imovel->bairro = $row["Bairro"]; 
			$imovel->categoria = $row["Categoria"];
			$imovel->descricao = $row["Descricao"];
			$imovel->imagens = $row["ImagensImovel"];
			$arrayImoveis[] = $imovel;
		}
	}

	return $arrayImoveis;
}

$arrayImoveis = null;

try
{
	$conn = conectaAoMySQL();
	$arrayImoveis = getImoveisByLimit($conn);

}catch (Exception $e)
{
	$msgErro = $e->getMessage();
}

if ($conn != null)
		$conn->close();


$msg = "";

function filtraEntrada($dado)
{
    $dado = trim($dado);               // remove espaços no inicio e no final da string
    $dado = stripslashes($dado);       // remove contra barras: "cobra d\'agua" vira "cobra d'agua"
    $dado = htmlspecialchars($dado);   // caracteres especiais do HTML (como < e >) são codificados

    return $dado;
}

function searchImoveis($propositoImovel,$bairroImovel,$valorMinimoImovel,$valorMaximoImovel,$outrasInformacoes){

	$arrayImoveis = null;

	try{
		$conn = conectaAoMySQL();

		$sql = "SELECT * FROM Imovel WHERE (Proposito = '$propositoImovel')";
		if($bairroImovel != ""){
			$sql = $sql. " AND (Bairro = '$bairroImovel')";
		}
		if($valorMinimoImovel != "" && $valorMaximoImovel != ""){
			$sql = $sql. " AND (ValorImovel BETWEEN $valorMinimoImovel AND $valorMaximoImovel)";
		}
 		if($outrasInformacoes != ""){
 			$sql = $sql. " AND (Descricao like '%$outrasInformacoes%')";
 		}
 		
		$result = $conn->query($sql);

		if (!$result)
			throw new Exception('Ocorreu um erro ao recuperar os imóveis: ' . $conn->error);

		if ($result->num_rows > 0)
		{
			while ($row = $result->fetch_assoc())
			{
				$imovel = new Imovel();
				$imovel->id = $row["Id"];  		
				$imovel->preco = $row["ValorImovel"];
				$imovel->numQuartos = $row["QuantidadeQuartos"];
				$imovel->bairro = $row["Bairro"]; 
				$imovel->categoria = $row["Categoria"];
				$imovel->descricao = $row["Descricao"];
				$imovel->imagens = $row["ImagensImovel"];
				$arrayImoveis[] = $imovel;
			}
		}

		if ($conn != null)
			$conn->close();

		return $arrayImoveis;
	}
	catch (Exception $e)
	{
		$msg = $e->getMessage();
	}

}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$propositoImovel =  filtraEntrada($_POST["propositoImovel"]);
	$bairroImovel =  filtraEntrada($_POST["bairroImovel"]);

	$valorMinimoImovel =  filtraEntrada($_POST["valorMinimoImovel"]);

	$valorMaximoImovel =  filtraEntrada($_POST["valorMaximoImovel"]);
	$outrasInformacoes =  filtraEntrada($_POST["outrasInformacoes"]);

	$arrayImoveis = null;

	if($propositoImovel == 'Selecione...'){
		$msg = 'Selecione o Propósito do Imóvel Desejado!';
		//header("Location: search.php");
	}else if($bairroImovel == "Selecione..."){
		$msg = "Selecione o Bairro Desejado!";
		//header("Location: search.php");
	}else{
		
		$arrayImoveis = searchImoveis($propositoImovel,$bairroImovel,$valorMinimoImovel,$valorMaximoImovel,$outrasInformacoes);
	
		if($arrayImoveis == null)
			$msg = "Não foram encontrados nenhum imóvel correspondente a sua Pesquisa!";
	}
	
}

 ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<?php include 'includes/head.php'; ?>

	<!-- Script Source Files -->
	<?php include 'includes/scripts.php'; ?>
	
	<link rel="stylesheet" href="css/searchAreaStyle.css">
</head>

<body data-spy="scroll" data-target="#barraNavegacao">
	
	<!-- Start Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a href="#landing" class="navbar-brand">
			<!-- LOGOTIPO -->
			<img src="img/newLogo.png">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barraNavegacao">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="barraNavegacao">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> 
					<a href="index.php" class="nav-link hide-nav">Home</a>
				</li>
				<li>
					<a href="#contacts" class="nav-link hide-nav">Contatos</a>					
				</li>
				<li>
					<a href="#landing" class="nav-link default hide-nav">Pesquise</a>					
				</li>
				<li>
					<a class="nav-link login-link" data-toggle="modal" data-target="#loginModal">Login</a>					
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navigation -->

	<!-- Start Landing Page Section -->
	<div class="landing" id="landing">
		<div class="home-wrap">
			<div class="home-inner">
				<div class="layer">
					
				</div>
			</div>
		</div>
	</div>

	<div class="caption text-center">
		<h1>Viva Imóveis</h1>
		<h3>Seu imóvel a um clique</h3>
	</div>
	<!-- End Landing Page Section -->

	<div id="search" class="offset">
		<div class="jumbotron">
			<div class="container">

				<div class="text-center">
					<button id="show-filterPanel" type="button" class="btn btn-secondary">Pesquisar Imóveis</button>
				</div>

				<div class="text-center">
					<?php 
						if ($_SERVER["REQUEST_METHOD"] == "POST") 
						{ 
						if($msg != "")				
						echo "<h5 class='text-danger'>$msg</h5>";
						}
					?>
				</div>
				<!-- Modal - Search -->
				<div class="container modal-properties" id="filterPanel">
			      	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			      		<div class="form-row">
			      			<div class="col-5 col-md-5">
								   <label for="propositoImovel">Propósito</label>

			    					<select id="propositoImovel" class="custom-select" name="propositoImovel" onchange="getBairros(this.value)">
			    					  <option selected hidden>Selecione...</option>
			    					  <option value="Venda">Venda</option>
			    					  <option value="Locacao">Locação</option>
			    					</select>
			      			</div>

							<div class="col-7 col-md-7">
							    <label for="bairroImovel">Bairro</label>
							    <select id="bairroImovel" class="custom-select" name="bairroImovel">
			    					 <option selected hidden>Selecione...</option>
			    					  
			    				</select>

							</div>

							<div class="col-6 col-md-6">
							    <label for="valorMinimoImovel">Valor Mínimo</label>
							    <input type="number" class="form-control" id="valorMinimoImovel" name="valorMinimoImovel">					
							</div>      		

							<div class="col-6 col-md-6">
							    <label for="valorMaximoImovel">Valor Máximo</label>
							    <input type="number" class="form-control" id="valorMaximoImovel" name="valorMaximoImovel">						
							</div>

							<div class="col-md-12">
							    <label for="outrasInformacoes">Outras Informações:</label>
							    <input type="text" class="form-control" id="outrasInformacoes" name="outrasInformacoes">
							</div>

			      		</div>


						<div class="col-sm-12 col-md-12">
							<div class="d-flex justify-content-center">
								<button id="hide-filterPanel" type="submit" class="btn btn-secondary btn-modal">Buscar</button>
							</div>
						</div>
			      	</form>
				</div>
				<!-- End - Modal Search -->
			
				<!-- Start Card -->
			<?php
				if ($arrayImoveis != null)
				{ 

					foreach ($arrayImoveis as $imovel)
					{ 
			?>	
					<div class="card-properties row">
						<div class=col-md-4>
							<div class="row">
								<div class="col-md-12">
									<h3 class="text-center"><?php echo "$imovel->categoria" ?></h3>
									<div class="heading-underline"></div>
								</div>

								<div class="col-md-12">
									<label><strong>Quartos:</strong> <?php echo "$imovel->numQuartos" ?> </label><br>
									<label><strong>Bairro:</strong> <?php echo "$imovel->bairro" ?> </label><br>
									<label><strong>Preço:</strong> <?php echo "$imovel->preco" ?> </label><br>
									<label><strong>Descrição:</strong> <?php echo "$imovel->descricao" ?></label><br>
									
									<div class="row">
										<div class="col-md-12 text-center">
											<button type="button" class="btn btn-primary btn-color" data-toggle="modal" data-target="#interesseModal" data-id="<?php echo $imovel->id ?>" >Interessado!</button>	
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<div class="row">
								<div class="col-md-4">
									<img src="img/casa1.jpg" class="img-fluid">
								</div>

								<div class="col-md-4">
									<img src="img/casa1.jpg" class="img-fluid">
								</div>

								<div class="col-md-4">
									<img src="img/casa1.jpg" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<?php } ?>   <!-- fim do for -->
				<?php } ?> <!-- fim do if -->

				<!-- End Card -->
			</div>		
		</div>
	</div>

	<!-- Footer Section -->
	<?php include 'includes/footer.php'; ?>	

	<!-- Modals Section -->
	<?php include 'includes/modals.php'; ?>	

</body>
</html>

<script type="text/javascript">
	$('#interesseModal').on('show.bs.modal', function (event) {                                                       
	    
	    console.log('Chamou interesseModal');
	    var button = $(event.relatedTarget); // Button that triggered the modal
	    var imovelId = button.data('id');      
	    console.log('Imovel Id-> '+ imovelId);                                                           
	    
	    var modal = $(this);
	    modal.find('#imovelId').val(imovelId);
	});
</script>