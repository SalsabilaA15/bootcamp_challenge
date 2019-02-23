<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Web Sensus Penduduk">
	<meta name="keywords" content="sensus,penduduk">
	<meta name="author" content="Salsabilla">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE ?>/assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			
		<a class="navbar-brand" href="#">Sensus Penduduk</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<span class="navbar-text">
				<?php 
				if (!empty($_SESSION['login'])) { ?>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item ">
							<a class="nav-link" href="#"><?php echo $_SESSION['login']['email'] ?></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo BASE ?>/index/logout">logout</a>
						</li>
					</ul>
					
				<?php } else{ ?>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item ">
							<a class="nav-link" href="#">Login</a>
						</li>
						
					</ul>
				<?php } ?>
			</span>
			
		</div>
	
		</div>
	</nav>

	<section class="section-padding">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</section>


	<script type="text/javascript"></script>
</body>
</html>


