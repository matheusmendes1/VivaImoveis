<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<?php include 'includes/head.php'; ?>

	<!-- Script Source Files -->
	<?php include 'includes/scripts.php'; ?>
	
	<link rel="stylesheet" href="css/restrictAreaStyle.css">
</head>

<body>

	<!-- Start Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
		<a href="index.php" class="navbar-brand">
			<!-- LOGOTIPO -->
			<img src="img/nuno.png">
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
			          <a id="displayFormFuncionarios" class="dropdown-item" href="#">Funcionarios</a>
			          <a id="displayFormClientes" class="dropdown-item" href="#">Clientes</a>
			          <a id="displayFormImoveis"class="dropdown-item" href="#">Imoveis</a>
			        </div>
			    </li>

			    <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Visualizar
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Funcionarios</a>
			          <a class="dropdown-item" href="#">Clientes</a>
			          <a class="dropdown-item" href="#">Imoveis</a>
			          <a class="dropdown-item" href="#">Interesses</a>
			        </div>
			    </li>

				<li>
					<a href="index.php" class="nav-link">Logout</a>					
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navigation -->

	<!-- Start Forms Section -->
	<div id="forms" class="offset">	
		<div class="jumbotron">
			<div class="container" id="pivo"> <!-- Start Formularios Holder Section -->
				<div id="formFuncionario"> <!-- Start - Cadastro de Funcionarios -->
					<div class="col-12 text-center">
						<h3 class="heading">Cadastro de Funcionarios</h3>
						<div class="heading-underline"></div>
					</div>

					<form>
						<div class="form-row">
						    <div class="col-md-8">
								<label for="nomeFuncionario">Nome Completo</label>
								<input id="nomeFuncionario" name="nomeFuncionario" type="text" class="form-control">
						    </div>
						    <div class="col-md-4">
								<label for="cpfFuncionario">CPF</label>
								<input id="cpfFuncionario" name="cpfFuncionario" type="text" class="form-control">
						    </div>
						</div>

						<div class="form-row">
						    <div class="col-md-12">
								<label for="endFuncionario">Endereço Completo</label>
								<input id="endFuncionario" name="endFuncionario" type="text" class="form-control">
						    </div>
						</div>

						<div class="form-row">

						    <div class="col-md-4">
								<label for="dataIngressoFuncionario">Data de Ingresso</label>
								<input id="dataIngressoFuncionario" name="dataIngressoFuncionario" type="date" class="form-control">
						    </div>

							<div class="col-md-4">
								<label for="telefoneFuncionario">Telefone</label>
								<input id="telefoneFuncionario" name="telefoneFuncionario" type="text" class="form-control">
						    </div>

							<div class="col-md-4">
								<label for="celularFuncionario">Celular</label>
								<input id="celularFuncionario" name="celularFuncionario" type="text" class="form-control">
						    </div>

						</div>

						<div class="form-row">

						    <div class="col-md-6">
								<label for="cargoFuncionario">Cargo</label>
								<input id="cargoFuncionario" name="cargoFuncionario" type="text" class="form-control">
						    </div>
						    
							<div class="col-md-6">
								<label for="salarioFuncionario">Remuneração</label>
								<input id="salarioFuncionario" name="salarioFuncionario" type="text" class="form-control">
						    </div>

						</div>

						<div class="form-row">

						    <div class="col-md-6">
								<label for="nomeUsuarioFuncionario">Usuario</label>
								<input id="nomeUsuarioFuncionario" name="nomeUsuarioFuncionario" type="text" class="form-control">
						    </div>
						    
							<div class="col-md-6">
								<label for="senhaUsuario">Senha</label>
								<input id="senhaUsuario" name="senhaUsuario" type="password" class="form-control">
						    </div>

						</div>

						<button id="submitFuncionarios" type="submit" class="btn btn-primary">Submit</button>
					</form>
					
				</div> <!-- End - Cadastro de Funcionarios -->

				
				<div id="formClientes"> <!-- Start - Cadastro de Clientes -->
					
					<div class="col-12 text-center">
						<h3 class="heading">Cadastro de Clientes</h3>
						<div class="heading-underline"></div>
					</div>

					<form>
						<div class="form-row">
						    <div class="col-md-8">
								<label for="nomeCliente">Nome Completo</label>
								<input id="nomeCliente" name="nomeCliente" type="text" class="form-control">
						    </div>
						    <div class="col-md-4">
								<label for="cpfCliente">CPF</label>
								<input id="cpfCliente" name="cpfCliente" type="text" class="form-control">
						    </div>
						</div>

						<div class="form-row">
						    <div class="col-md-12">
								<label for="endCliente">Endereço Completo</label>
								<input id="endCliente" name="endCliente" type="text" class="form-control">
						    </div>
						</div>

						<div class="form-row">

						    <div class="col-md-4">
								<label for="emailCliente">Email</label>
								<input id="emailCliente" name="emailCliente" type="email" class="form-control">
						    </div>

							<div class="col-md-4">
								<label for="telefoneCliente">Telefone</label>
								<input id="telefoneCliente" name="telefoneCliente" type="text" class="form-control">
						    </div>

							<div class="col-md-4">
								<label for="celularCliente">Celular</label>
								<input id="celularCliente" name="celularCliente" type="text" class="form-control">
						    </div>

						</div>

						<div class="form-row">

						    <div class="col-md-4">
								<label for="sexoCliente">Sexo</label>

								<select id="sexoCliente" class="custom-select">
								  <option selected hidden>Selecione...</option>
								  <option value="masc">Masculino</option>
								  <option value="fem">Feminino</option>
								  <option value="outro">Outro</option>
								</select>
						    </div>
						    
							<div class="col-md-4">
								<label for="estadoCivilCliente">Estado Civil</label>

								<select id="estadoCivilCliente" class="custom-select">
								  <option selected hidden>Selecione...</option>
								  <option value="masc">Casado(a)</option>
								  <option value="fem">Solteiro(a)</option>
								</select>
						    </div>

							<div class="col-md-4">
								<label for="profissaoCliente">Profissão</label>
								<input id="profissaoCliente" name="profissaoCliente" type="text" class="form-control">
						    </div>

						</div>

						<button id="submitClientes" type="submit" class="btn btn-primary">Submit</button>
					</form>
					
				</div> <!-- End - Cadastro de Clientes -->
			</div> <!-- End Formularios Holder Section -->

		</div>
	</div>
	<!-- End Forms Section -->

	<!-- Footer Section -->
	<?php include 'includes/footer.php'; ?>	
</body>
</html>