<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>ZAKŁADY BUKMACHERSKIE</title>
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
</head>

<body>

	<header>

			<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="#">Active</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>

			<nav class="navbar navbar-dark bg-navbar navbar-expand-lg fixed-top">

					<div class="container">
							<a class="navbar-brand" href="index.php"><img src="img/logo_poziom.png" height="50" class="d-inline-block align-bottom" alt=""></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarResponsive">

							    <ul class="navbar-nav ml-auto">

									<li class="nav-item active">
										<a class="nav-link" href="index.php">Strona główna
											<span class="sr-only">(current)</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="bet_page.php">Stwórz kupon</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="promotion.php">Promocje</a>
									</li>

							    </ul>
									<?php

									if (!isset($_SESSION['zalogowany']))
									{
										echo '
											<a class="btn btn-outline-success ml-3" href="register_page.php" role="button">ZAREJESTRUJ SIĘ</a>
											<a class="btn btn-outline-success ml-1" href="signin_page.php" role="button">ZALOGUJ SIĘ</a>	
										';									
									} else {
										if(isset($_SESSION['admin'])) {
											echo '
												<div class="dropdown ml-2">
													<img src="img/user.png" width="50" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="">
													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
														<a class="dropdown-item" href="admin.php" style="color: #0F1C46">Moje konto</a>
														<a class="dropdown-item" href="logout.php" style="color: #0F1C46">Wyloguj się</a>
													</div>
												</div>
											';
											} else {
												echo '
												<div class="dropdown ml-2">
													<img src="img/user.png" width="50" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="">
													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
														<a class="dropdown-item" href="my_account.php" style="color: #0F1C46">Moje konto</a>
														<a class="dropdown-item" href="logout.php" style="color: #0F1C46">Wyloguj się</a>
													</div>
												</div>
												';
											}
										}
										
									?>

							</div>

					</div>
			
			</nav>
			
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<!-- Slide One - Set the background image for this slide in the line below -->
					<div class="carousel-item active" style="background-image: url('img/obraz1slider.jpg')">
						<div class="overlay gradient-tlo"></div>
					<div class="carousel-caption d-none d-md-block">
						<div class="mb-5">
							<h1 class="display-3">GRAJ ONLINE</h1>
							<p class="lead">Sprawdź naszą aplikację internetową!</p>
						</div>
					</div>
				  </div>
				  <!-- Slide Two - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('img/obraz2slider.jpg')">
						<div class="overlay gradient-tlo"></div>
					<div class="carousel-caption d-none d-md-block">
					  <h2 class="display-4">Z NAMI WYGRYWASZ WIĘCEJ</h2>
					  <p class="lead">Wykup subsykpcję i wygrywaj więcej!</p>
					</div>
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
			  </div>
	
	</header>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>