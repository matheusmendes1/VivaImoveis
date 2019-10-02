<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<?php include 'includes/head.php'; ?>

	<!-- Script Source Files -->
	<?php include 'includes/scripts.php'; ?>
	
	<link rel="stylesheet" href="css/restrictAreaStyle.css">
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
			    <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Cadastrar
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a id="displayFormFuncionarios" class="dropdown-item hide-nav" href="#formFuncionario">Funcionarios</a>
			          <a id="displayFormClientes" class="dropdown-item hide-nav" href="#formClientes">Clientes</a>
			          <a id="displayFormImoveis"class="dropdown-item hide-nav" href="#formImoveis">Imoveis</a>
			        </div>
			    </li>

			    <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Visualizar
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a id="displayTableFuncionario" class="dropdown-item hide-nav" href="#tableFuncionario">Funcionarios</a>
			          <a id="displayTableClientes" class="dropdown-item hide-nav" href="#tableClientes">Clientes</a>
			          <a id="displayTableImoveis" class="dropdown-item hide-nav" href="#tableImoveis">Imoveis</a>
			          <a id="displayTableInteressados" class="dropdown-item hide-nav" href="#tableInteressados">Interesses</a>
			        </div>
			    </li>

				<li>
					<a href="#contacts" class="nav-link hide-nav">Contatos</a>					
				</li>

				<li>
					<a href="index.php" class="nav-link">Logout</a>					
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
		<h3>Área restrita - Gerenciamento da Plataforma</h3>
	</div>
	<!-- End Landing Page Section -->

	<!-- Formulários e Tabelas -->
	<div id="pivo" class="offset">
		<div class="jumbotron">

			<!-- Formulários -->
			<?php include 'includes/forms.php'; ?>

			<!-- Tabelas -->
			<?php include 'includes/tables.php'; ?>

		</div>
	</div>


	<!-- Footer Section -->
	<?php include 'includes/footer.php'; ?>	
</body>
</html>