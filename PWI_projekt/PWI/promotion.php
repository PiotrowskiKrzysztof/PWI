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
			<nav class="navbar navbar-dark bg-navbar navbar-expand-lg fixed-top">

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
									<li class="nav-item">
										<a class="nav-link" href="bet_page.php">Stwórz kupon</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="#">Promocje</a>
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

		<div class="header-video">
			<div class="overlay gradient-tlo"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
				<source src="https://storage.googleapis.com/coverr-main/mp4/Dreamy-Basketball.mp4" type="video/mp4">
			</video>
			<div class="container h-100" style="z-index: 10">
				<div class="d-flex h-100 text-center align-items-center">
					<div class="w-100" style ="max-height: 100%">
											<section class="pricing py-5 mt-5">
												<div class="container">
													<div class="row">
														<!-- Plus Tier -->
														<div class="col-12 col-lg-6">
															<div class="card mb-lg-0">
																<div class="card-body">
																	<h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
																	<h6 class="card-price text-center">100zł<span class="period">/miesięcznie</span></h6>
																	<hr>
																	<ul class="fa-ul d-none d-lg-block">
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>2 darmowe zakłady</li>
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>Kursy zwiększone o 2%</li>
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>Automatyczne wyniki</li>
																		<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Możliwość wcześniejszej wypłaty</li>
																		<li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dodatkowe statystki meczy</li>
																	</ul>
																							<!-- Button trigger modal -->
																							<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
																								Subskrybuj
																							</button>

																							<!-- Modal -->
																							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
																								<div class="modal-dialog modal-dialog-centered" role="document">
																									<div class="modal-content">
																										<div class="modal-header">
																											<h5 class="modal-title" id="exampleModalLongTitle">Wersja PLUS</h5>
																											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																												<span aria-hidden="true">&times;</span>
																											</button>
																										</div>
																										<div class="modal-body">
																											<p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.
																												Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.
																												Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.</p>
																										</div>
																										<div class="modal-footer">
																											<button type="button" class="btn btn-block btn-primary">Subskrybuj</button>
																										</div>
																									</div>
																								</div>
																							</div>
																</div>
															</div>
														</div>
														<!-- Pro Tier -->
														<div class="col-12 col-lg-6">
															<div class="card mb-lg-0">
																<div class="card-body">
																	<h5 class="card-title text-muted text-uppercase text-center">PREMIUM</h5>
																	<h6 class="card-price text-center">350zł<span class="period">/miesięcznie</span></h6>
																	<hr>
																	<ul class="fa-ul d-none d-lg-block">
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>5 darmowych zakładów</li>
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>Kursy zwiększone o 5%</li>
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>Automatyczne wyniki</li>
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>Możliwość wcześniejszej wypłaty</li>
																		<li><span class="fa-li"><i class="fas fa-check"></i></span>Dodatkowe statystyki meczy</li>
																	</ul>
																							<!-- Button trigger modal -->
																							<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
																									Subskrybuj
																								</button>
	
																								<!-- Modal -->
																								<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
																									<div class="modal-dialog modal-dialog-centered" role="document">
																										<div class="modal-content">
																											<div class="modal-header">
																												<h5 class="modal-title" id="exampleModalLongTitle2">Wersja PREMIUM</h5>
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																													<span aria-hidden="true">&times;</span>
																												</button>
																											</div>
																											<div class="modal-body">
																												<p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.
																													Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.
																													Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.</p>
																											</div>
																											<div class="modal-footer">
																												<button type="button" class="btn btn-block btn-primary">Subskrybuj</button>
																											</div>
																										</div>
																									</div>
																								</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
					</div>
				</div>
			</div>
		</div>

		<!-- Page Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6 portfolio-item my-5">
					<div class="card h-100">
						<a href="#"><img class="card-img-top" src="img/promotion1.PNG" alt=""></a>
						<div class="promotion card-body">
							<h4 class="card-title">Bonus na weekend!</h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalCenter3">
												Subskrybuj
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle3">Bonus na weekend!</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.
																Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.
																Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-block btn-primary">Subskrybuj</button>
														</div>
													</div>
												</div>
											</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item my-5">
					<div class="card h-100">
						<a href="#"><img class="card-img-top" src="img/promotion2.PNG" alt=""></a>
						<div class="promotion card-body">
							<h4 class="card-title">Obstawiaj e-sport!</h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalCenter4">
												Subskrybuj
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle4">Obstawiaj e-sport!</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.
																Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.
																Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-block btn-primary">Subskrybuj</button>
														</div>
													</div>
												</div>
											</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item my-5">
					<div class="card h-100">
						<a href="#"><img class="card-img-top" src="img/promotion3.PNG" alt=""></a>
						<div class="promotion card-body">
							<h4 class="card-title">Stawiaj na naszą ligę!</h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalCenter5">
												Subskrybuj
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle5">Stawiaj na naszą ligę!</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.
																Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.
																Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-block btn-primary">Subskrybuj</button>
														</div>
													</div>
												</div>
											</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item mb-5 mt-2">
					<div class="card h-100">
						<a href="#"><img class="card-img-top" src="img/promotion4.PNG" alt=""></a>
						<div class="promotion card-body">
							<h4 class="card-title">Sumujemy rożne!</h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModalCenter6">
									Subskrybuj
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle6">Sumujemy rożne!</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.
													Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.
													Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-block btn-primary">Subskrybuj</button>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Footer -->
		<footer class="py-4 bg-footer">
			<p class="m-0 text-center">Copyright &copy; Zakłady Bukmacherskie</p>
		<!-- /.container -->
	</footer>

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>