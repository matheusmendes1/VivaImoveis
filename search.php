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
		<a href="index.php" class="navbar-brand">
			<!-- LOGOTIPO -->
			<img src="img/nuno.png">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barraNavegacao">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="barraNavegacao">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> 
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li>
					<a href="#contacts" class="nav-link">Contacts</a>					
				</li>
				<li>
					<a href="search.php" class="nav-link default">Search</a>					
				</li>
				<li>
					<a class="nav-link login-link" data-toggle="modal" data-target="#loginModal">Login</a>					
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navigation -->

	<!-- Start Landing Page Section -->
	<div class="landing">
		<div class="home-wrap">
			<div class="home-inner">
				<div class="layer">
					
				</div>
			</div>
		</div>
	</div>

	<div class="caption text-center">
		<h1>Viva Imoveis</h1>
		<h3>Seu imóvel a um clique</h3>
	</div>
	<!-- End Landing Page Section -->

	<div id="search" class="offset">
		<div class="jumbotron">
			<div class="container">

				<div class="text-center">
					<button type="button" class="btn btn-secondary btn-md" data-toggle="modal" data-target="#searchModal">Pesquisar Imóveis</button>
				</div>
			
				<!-- Start Card -->
				<div class="card-properties row">
					<div class=col-md-4>
						<div class="row">
							<div class="col-md-12">
								<h3>Apartamento</h3>
								<div class="heading-underline"></div>
							</div>

							<div class="col-md-12">
								<label>Área: 128m²</label><br>
								<label>Quartos: 2</label><br>
								<label>Sala: 2</label><br>
								<label>Descrição: Eu gosto bastante desse imóvel mas vou ter que vender</label><br>
								<button type="button" class="btn btn-primary btn-color">Interesse</button>
							</div>
						</div>
						

					</div>

					<div class="col-md-8">
						<div class="row">
							<div class="col-md-4">
								<img src="img/casa1.jpg" class="img-fluid">
							</div>

							<div class="col-md-4">
								<img src="img/casa2.jpg" class="img-fluid">
							</div>

							<div class="col-md-4">
								<img src="img/casa3.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<!-- End Card -->

				<!-- Start Card -->
				<div class="card-properties row">
					<div class=col-md-4>
						<div class="row">
							<div class="col-md-12">
								<h3>Apartamento</h3>
								<div class="heading-underline"></div>
							</div>

							<div class="col-md-12">
								<label>Área: 128m²</label><br>
								<label>Quartos: 2</label><br>
								<label>Sala: 2</label><br>
								<label>Descrição: Eu gosto bastante desse imóvel mas vou ter que vender</label><br>
								<button type="button" class="btn btn-primary btn-color">Interesse</button>
							</div>
						</div>
						

					</div>

					<div class="col-md-8">
						<div class="row">
							<div class="col-md-4">
								<img src="img/casa1.jpg" class="img-fluid">
							</div>

							<div class="col-md-4">
								<img src="img/casa2.jpg" class="img-fluid">
							</div>

							<div class="col-md-4">
								<img src="img/casa3.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<!-- End Card -->

				<!-- Start Card -->
				<div class="card-properties row">
					<div class=col-md-4>
						<div class="row">
							<div class="col-md-12">
								<h3>Apartamento</h3>
								<div class="heading-underline"></div>
							</div>

							<div class="col-md-12">
								<label>Área: 128m²</label><br>
								<label>Quartos: 2</label><br>
								<label>Sala: 2</label><br>
								<label>Descrição: Eu gosto bastante desse imóvel mas vou ter que vender</label><br>

								<button type="button" class="btn btn-primary btn-color">Interesse</button>
							</div>
						</div>
						

					</div>

					<div class="col-md-8">
						<div class="row">
							<div class="col-md-4">
								<img src="img/casa1.jpg" class="img-fluid">
							</div>

							<div class="col-md-4">
								<img src="img/casa2.jpg" class="img-fluid">
							</div>

							<div class="col-md-4">
								<img src="img/casa3.jpg" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
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