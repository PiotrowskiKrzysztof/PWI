<?php
	session_start();
	include_once "oferta.php";

	$oferta = new oferta();
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
				<nav class="navbar navbar-dark bg-navbar navbar-expand-lg">
	
						<div class="container">
	
								<a class="navbar-brand" href="index.php"><img src="img/logo_poziom.png" height="50" class="d-inline-block align-bottom" alt=""></a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
	
								<div class="collapse navbar-collapse" id="navbarResponsive">
	
										<ul class="navbar-nav ml-auto">
	
										<li class="nav-item">
											<a class="nav-link" href="index.php">Strona główna
												<span class="sr-only">(current)</span>
											</a>
										</li>
										<li class="nav-item active">
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
		
			</header>
	
	<main>
		
		<section class="container-fluid col-12 mt-5">

				<div class="row">
						<div id="bet" class="col-3 px-0">
							<div class="navbar navbar-dark bg-navbar col-3 position-fixed">

								<div class="col-12 border-bottom mb-3">
									<h3 class="my-3">KUPON</h3>
								</div>
								
									<div class="col-12">
										<div class="row">
										<div class="col-11 mt-1 px-0 text-left">
											<p>OPCJA KURS</p>
										</div>
										<div class="X col-1 mt-1 px-0 text-right">
											<p>X</p>
										</div>
										<div class="col-12 text-left px-0">
											<p>Drużyna1 VS Drużyna2</p>
										</div>
										<div class="col-12 text-left px-0">
											<p>OZNACZENIE MECZU</p>
										</div>
										</div>
									</div>

									<div class="col-12">
										<div class="row">
										<div class="col-11 mt-1 px-0 text-left">
											<p>OPCJA KURS</p>
										</div>
										<div class="X col-1 mt-1 px-0 text-right">
											<p>X</p>
										</div>
										<div class="col-12 text-left px-0">
											<p>Drużyna1 VS Drużyna2</p>
										</div>
										<div class="col-12 text-left px-0">
											<p>OZNACZENIE MECZU</p>
										</div>
										</div>
									</div>

									<div class="col-12">
										<div class="row">
										<div class="col-11 mt-1 px-0 text-left">
											<p>OPCJA KURS</p>
										</div>
										<div class="X col-1 mt-1 px-0 text-right">
											<p>X</p>
										</div>
										<div class="col-12 text-left px-0">
											<p>Driżyna1 VS Drużyna2</p>
										</div>
										<div class="col-12 text-left px-0">
											<p>OZNACZENIE MECZU</p>
										</div>
										</div>
									</div>

									<div class="col-12 px-0">
										<input class="form-control" type="text" placeholder="Stawka">
									</div>

									<div class="col-12 px-0 mt-3">
										<div class="row">
											<div class="col-6 text-left">
												<p>Podatek</p>
											</div>
											<div class="col-6 text-right">
												<p>0.88</p>
											</div>
											<div class="col-6 text-left">
												<p>Kurs</p>
											</div>
											<div class="col-6 text-right">
												<p>213.21</p>
											</div>
											<div class="col-12 text-center">
												<h2>WYGRANA</h2>
											</div>
											<div class="col-12 mt-3">
												<button type="button" class="btn btn-accept btn-lg btn-block mb-2">Zatwierdź</button>
											</div>
										</div>
									</div>
								
							 </div>
						 </div>

					
					<ul class="nav nav-tabs col-9 offset-3 py-3 text-center">
						
							<li class="tab-item active col-12 col- col-md-3"><a data-toggle="tab" href="#home">PIŁKA NOŻNA</a></li>
							<li class="tab-item col-12 col-md-3"><a data-toggle="tab" href="#menu1">KOSZYKÓWKA</a></li>
							<li class="tab-item col-12 col-md-3"><a data-toggle="tab" href="#menu2">TENIS</a></li>
							<li class="tab-item col-12 col-md-3"><a data-toggle="tab" href="#menu3">SIATKÓWKA</a></li>
						
					</ul>
				

				</div>
					
					<div class="tab-content col-9 float-right mt-3">

						<div id="home" class="tab-pane fade in active">
							
								<div id="accordion">
										<div class="card">
											<div class="card-header" id="headingOne">
												<h5 class="mb-0">
													<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														Ekstraklasa
													</button>
												</h5>
											</div>
									
											<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
															</div>

															<?php
																
																//$ofertaekstraklasa = new oferta();
																$oferta->wypisz_oferte(1,4);
															
															?>															
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingTwo">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														1.liga Polska
													</button>
												</h5>
											</div>
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
												<div class="card-body">
																	
														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
																	<?php
																
																		//$ofertabundesliga = new oferta();
																		$oferta->wypisz_oferte(1,5);
																	
																	?>	
															</div>

												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingThree">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														Bundesliga
													</button>
												</h5>
											</div>
											<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
												<div class="card-body">
																	
														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
																	<?php
																
																		//$ofertabundesliga = new oferta();
																		$oferta->wypisz_oferte(1,6);
																	
																	?>	
															</div>

												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingFour">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
														Ligue 1
													</button>
												</h5>
											</div>
											<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
												<div class="card-body">
																	
														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
																	<?php
																
																		//$ofertabundesliga = new oferta();
																		$oferta->wypisz_oferte(1,7);
																	
																	?>	
															</div>

												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingFive">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
														Serie A
													</button>
												</h5>
											</div>
											<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
												<div class="card-body">
																	
														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
																	<?php
																
																		//$ofertabundesliga = new oferta();
																		$oferta->wypisz_oferte(1,8);
																	
																	?>	
															</div>

												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingSix">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
														LaLiga
													</button>
												</h5>
											</div>
											<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
												<div class="card-body">
													
														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
																	<?php
																
																		//$ofertabundesliga = new oferta();
																		$oferta->wypisz_oferte(1,9);
																	
																	?>
															</div>

												</div>
											</div>
										</div>
									</div>
									<div class="card">
											<div class="card-header" id="headingSeven">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
														Premier League
													</button>
												</h5>
											</div>
											<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
												<div class="card-body">
																	
														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
																	<?php
																
																		//$ofertabundesliga = new oferta();
																		$oferta->wypisz_oferte(1,10);
																	
																	?>	
															</div>

												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingEight">
												<h5 class="mb-0">
													<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
														Liga Mistrzów
													</button>
												</h5>
											</div>
											<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
												<div class="card-body">
																	
														<div class="card-body border-bottom">
																<div class="row">
																		<!-- ikona dyscypliny -->
																		<div class="col-9 col-md-3 col-lg-1">

																		</div>
																		<!-- drużyna gospodarzy -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gospodarzy</p>
																		</div>
																		<!-- drużyna gości -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>drużyna gości</p>
																		</div>
																		<!-- data -->
																		<div class="col-9 col-md-3 col-lg-2">
																				<p>data</p>
																		</div>
																		<!-- opcja1 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>1</p>
																		</div>
																		<!-- opcja2 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>X</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>2</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>-1,5</p>
																		</div>
																		<!-- opcja3 -->
																		<div class="col-9 col-md-3 col-lg-1">
																				<p>+1,5</p>
																		</div>
																	</div>
																	<?php
																
																		//$ofertabundesliga = new oferta();
																		$oferta->wypisz_oferte(1,11);
																	
																	?>	
															</div>

												</div>
											</div>
										</div>

						
									</div>


						<!-- KOSZYKOWKA !!!-->
						<div id="menu1" class="tab-pane fade">					
							<div id="accordion">
								<div class="card">
									<div class="card-header" id="heading9">
										<h5 class="mb-0">
											<button class="btn btn-link" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
												NBA
											</button>
										</h5>
									</div>									
									<div id="collapse9" class="collapse show" aria-labelledby="heading9" data-parent="#accordion">
										<div class="card-body border-bottom">
												<div class="row">
																			<!-- ikona dyscypliny -->
																			<div class="col-9 col-md-3 col-lg-1">

																			</div>
																			<!-- drużyna gospodarzy -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>drużyna gospodarzy</p>
																			</div>
																			<!-- drużyna gości -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>drużyna gości</p>
																			</div>
																			<!-- data -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>data</p>
																			</div>
																			<!-- opcja1 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>1</p>
																			</div>
																			<!-- opcja2 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>X</p>
																			</div>
																			<!-- opcja3 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>2</p>
																			</div>																		
																		</div>
																</div>

																<?php
																	
																	//$ofertaekstraklasa = new oferta();
																	$oferta->wypisz_oferte(3,13);
																
																?>															
												</div>
										</div>					
							
							</div>
						</div>
						<!-- TENIS -->
						<div id="menu2" class="tab-pane fade">
							
						<div id="accordion">
								<div class="card">
									<div class="card-header" id="heading10">
										<h5 class="mb-0">
											<button class="btn btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
												ATP
											</button>
										</h5>
									</div>									
									<div id="collapse10" class="collapse show" aria-labelledby="heading10" data-parent="#accordion">
										<div class="card-body border-bottom">
												<div class="row">
																			<!-- ikona dyscypliny -->
																			<div class="col-9 col-md-3 col-lg-1">

																			</div>
																			<!-- drużyna gospodarzy -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>drużyna gospodarzy</p>
																			</div>
																			<!-- drużyna gości -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>drużyna gości</p>
																			</div>
																			<!-- data -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>data</p>
																			</div>
																			<!-- opcja1 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>1</p>
																			</div>
																			<!-- opcja2 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>X</p>
																			</div>
																			<!-- opcja3 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>2</p>
																			</div>																		
																		</div>
																</div>

																<?php
																	
																	//$ofertaekstraklasa = new oferta();
																	$oferta->wypisz_oferte(2,12);
																
																?>															
												</div>
										</div>					
							
							</div>

						</div>
						<!-- SIATKOWKA -->
						<div id="menu3" class="tab-pane fade">
								
						<div id="accordion">
								<div class="card">
									<div class="card-header" id="heading11">
										<h5 class="mb-0">
											<button class="btn btn-link" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
												Liga narodów
											</button>
										</h5>
									</div>									
									<div id="collapse11" class="collapse show" aria-labelledby="heading11" data-parent="#accordion">
										<div class="card-body border-bottom">
												<div class="row">
																			<!-- ikona dyscypliny -->
																			<div class="col-9 col-md-3 col-lg-1">

																			</div>
																			<!-- drużyna gospodarzy -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>drużyna gospodarzy</p>
																			</div>
																			<!-- drużyna gości -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>drużyna gości</p>
																			</div>
																			<!-- data -->
																			<div class="col-9 col-md-3 col-lg-2">
																					<p>data</p>
																			</div>
																			<!-- opcja1 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>1</p>
																			</div>
																			<!-- opcja2 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>X</p>
																			</div>
																			<!-- opcja3 -->
																			<div class="col-9 col-md-3 col-lg-1">
																					<p>2</p>
																			</div>																		
																		</div>
																</div>

																<?php
																	
																	//$ofertaekstraklasa = new oferta();
																	$oferta->wypisz_oferte(4,14);
																
																?>															
												</div>
										</div>					
							
							</div>

							</div>
					</div>
				
		</section>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>