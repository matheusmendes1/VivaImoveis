<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<?php include 'includes/head.php'; ?>
</head>

<body data-spy="scroll" data-target="#barraNavegacao">

<!-- Start Home Section -->
<div id="home">
	
	<!-- Barra de navegação -->
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
					<a href="index.php" class="nav-link hide-nav">Home</a>
				</li>
				<li>
					<a href="#features" class="nav-link hide-nav">Sobre</a>					
				</li>
				<li>
					<a href="#about" class="nav-link hide-nav">Empresa</a>					
				</li>
				<li>
					<a href="#founders" class="nav-link hide-nav">Fundadores</a>					
				</li>
				<li>
					<a href="#contacts" class="nav-link hide-nav">Contatos</a>					
				</li>
				<li>
					<a href="search.php" class="nav-link default hide-nav">Pesquise</a>					
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
		<h3>Seu imovel, nossa responsabilidade</h3>
	</div>
	<!-- End Landing Page Section -->

</div>
<!-- End Home Section -->

<!-- Start Features Section -->
<div id="features" class="offset">
	<!-- Start Jumbotron -->
	<div class="jumbotron" style="background-color: white !important;">
		<div class="narrow">
			<div class="col-12">
				<h3 class="heading text-center">Sobre</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="row text-center">
				<div class="col-sm-4 col-md-4">
					<div class="feature">
						<i class="fas fa-sign fa-5x" data-fa-transform="shrink-3 up-5"></i>
						<h3>Aluguel</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat.
						</p>
					</div>
				</div>

				<div class="col-sm-4 col-md-4 central-feature">
					<div class="feature">
						<i class="fas fa-dollar-sign fa-5x" data-fa-transform="shrink-3 up-5"></i>
						<h3>Vendas</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat.
						</p>
					</div>
				</div>

				<div class="col-sm-4 col-md-4">
					<div class="feature">
						<i class="fas fa-user-friends fa-5x" data-fa-transform="shrink-3 up-5"></i>
						<h3>Suporte</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat.
						</p>
					</div>
				</div>

				<div class="col-12 col-md-12">
					<a href="" class="btn btn-secondary">Encontre o imóvel ideal</a>
				</div>

			</div>
		</div>

	</div>
	<!-- End Jumbotron -->
</div>
<!-- End Features Section -->

<!-- Start About Section -->
<div id="about" class="offset">
	<div class="jumbotron">
		<div class="col-12 text-center">
			<h3 class="heading">Empresa</h3>
			<div class="heading-underline"></div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-5">
					<img class="img-fluid mx-auto d-block" src="img/missao.jpg" width="400" height="300">
				</div>

				<div class="col-12 col-md-8 col-lg-7">
					<h5 class="heading">Missao</h5>
					<div class="sub-heading-underline"></div>
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat. Praesent mattis pellentesque dolor ac faucibus. Mauris tempus purus nec dui efficitur dictum. Curabitur ut condimentum leo. Fusce vehicula ipsum sit amet est semper, a pharetra libero malesuada.
						</p>
					</blockquote>					
				</div>
			</div>

			<div class="row swap-one">
				<div class="col-12 col-md-8 col-lg-7">
					<h5 class="heading">Valores</h5>
					<div class="sub-heading-underline"></div>
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat. Praesent mattis pellentesque dolor ac faucibus. Mauris tempus purus nec dui efficitur dictum. Curabitur ut condimentum leo. Fusce vehicula ipsum sit amet est semper, a pharetra libero malesuada.
						</p>
					</blockquote>					
				</div>

				<div class="col-12 col-md-4 col-lg-5">
					<img class="img-fluid mx-auto d-block" src="img/valores.jpg" width="400" height="300">
				</div>
			</div>		

			<!-- START TO SMALL DEVICES -->
			<div class="row swap-two">

				<div class="col-12 col-md-4 col-lg-5">
					<img class="img-fluid mx-auto d-block" src="img/valores.jpg" width="400" height="300">
				</div>

				<div class="col-12 col-md-8 col-lg-7">
					<h5 class="heading">Valores</h5>
					<div class="sub-heading-underline"></div>
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat. Praesent mattis pellentesque dolor ac faucibus. Mauris tempus purus nec dui efficitur dictum. Curabitur ut condimentum leo. Fusce vehicula ipsum sit amet est semper, a pharetra libero malesuada.
						</p>
					</blockquote>					
				</div>
			</div>		
			<!-- END TO SMALL DEVICES -->

		</div>
		
	</div>
</div>
<!-- End About Section -->


<!-- Start Founders Section -->
<div id="founders" class="offset">

	<!-- Start Jumbotron -->
	<div class="jumbotron" style="background-color: white !important;">
		<div class="col-12 text-center">
			<h3 class="heading">Fundadores</h3>
			<div class="heading-underline"></div>
		</div>

		<!-- Start Founders Row -->
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 founders">
				<div class="row">
					<div class="col-md-4">
						<img class="mx-auto d-block" src="img/matheus.png">
					</div>

					<div class="col-md-8">
						<blockquote>
							<i class="fas fa-quote-left"></i>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat. Praesent mattis pellentesque dolor ac faucibus. Mauris tempus purus nec dui efficitur dictum. Curabitur ut condimentum leo. Fusce vehicula ipsum sit amet est semper, a pharetra libero malesuada.
								<hr class="founders-hr">
								<cite>&#8212; Matheus, CEO</cite>
							</p>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-12 col-md-6 col-lg-4 founders">
				<div class="row">
					<div class="col-md-4">
						<img class="mx-auto d-block" src="img/david.png">
					</div>

					<div class="col-md-8">
						<blockquote>
							<i class="fas fa-quote-left"></i>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat. Praesent mattis pellentesque dolor ac faucibus. Mauris tempus purus nec dui efficitur dictum. Curabitur ut condimentum leo. Fusce vehicula ipsum sit amet est semper, a pharetra libero malesuada.
								<hr class="founders-hr">
								<cite>&#8212; David, Bobo</cite>
							</p>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-4 founders">
				<div class="row">
					<div class="col-md-4">
						<img class="mx-auto d-block" src="img/maxwell.png">
					</div>

					<div class="col-md-8">
						<blockquote>
							<i class="fas fa-quote-left"></i>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam et urna a porta. Integer imperdiet elementum augue eget volutpat. Praesent mattis pellentesque dolor ac faucibus. Mauris tempus purus nec dui efficitur dictum. Curabitur ut condimentum leo. Fusce vehicula ipsum sit amet est semper, a pharetra libero malesuada.
								<hr class="founders-hr">
								<cite>&#8212; Maxwell, outro bobo</cite>
							</p>
						</blockquote>
					</div>
				</div>
			</div>

		</div>
		<!-- End Founders Row -->

	</div>
	<!-- End Jumbotron -->
</div>
<!-- End Founders Section -->


<!-- Footer Section -->
<?php include 'includes/footer.php'; ?>

<!-- Modals Section -->
<?php include 'includes/modals.php'; ?>	


<!-- Script Source Files -->
<?php include 'includes/scripts.php'; ?>

</body>
</html>