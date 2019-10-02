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
					<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#searchModal">Pesquisar Imóveis</button>
				</div>
			
				<!-- Start Card -->
				<div class="card-properties row">
					<div class=col-md-4>
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center">Apartamento</h3>
								<div class="heading-underline"></div>
							</div>

							<div class="col-md-12">
								<label><strong>Área:</strong> 128m²</label><br>
								<label><strong>Quartos:</strong> 2</label><br>
								<label><strong>Sala:</strong> 2</label><br>
								<label><strong>Descrição:</strong> Apartamento para venda, bem conservado.</label><br>
								
								<div  class="text-center">
									<button type="button" class="btn btn-primary btn-color" data-toggle="modal" data-target="#interesseModal">Interessado!</button>	
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
				<!-- End Card -->

				<!-- Start Card -->
				<div class="card-properties row">
					<div class=col-md-4>
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center">Casa</h3>
								<div class="heading-underline"></div>
							</div>

							<div class="col-md-12">
								<label><strong>Área:</strong> 128m²</label><br>
								<label><strong>Quartos:</strong> 2</label><br>
								<label><strong>Sala:</strong> 2</label><br>
								<label><strong>Descrição:</strong> Casa disponível para locação. Cozinha espaçosa, único dono.</label><br>

								<div  class="text-center">
									<button type="button" class="btn btn-primary btn-color" data-toggle="modal" data-target="#interesseModal">Interessado!</button>	
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
				<!-- End Card -->

				<!-- Start Card -->
				<div class="card-properties row">
					<div class=col-md-4>
						<div class="row">
							<div class="col-md-12">
								<h3 class="text-center">Sala Comercial</h3>
								<div class="heading-underline"></div>
							</div>

							<div class="col-md-12">
								<label><strong>Área:</strong> 128m²</label><br>
								<label><strong>Banheiros:</strong> 2</label><br>
								<label><strong>Descrição:</strong> sala comercial bem localizada. Ótimo ponto!</label><br>

								<div  class="text-center">
									<button type="button" class="btn btn-primary btn-color" data-toggle="modal" data-target="#interesseModal">Interessado!</button>	
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