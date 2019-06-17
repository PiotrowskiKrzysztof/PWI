<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: signin_page.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>My account/historia</title>
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
</head>

<body class="d-flex flex-column">

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
										<li class="nav-item">
											<a class="nav-link" href="bet_page.php">Stwórz kupon</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="promotion.php">Promocje</a>
										</li>

										</ul>

										<div class="dropdown ml-2">
												<img src="img/user.png" width="50" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="">
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
												  <?php
												  echo '<a class="dropdown-item" href="logout.php" style="color: #0F1C46">Wyloguj się</a>'
												  ?>
												</div>
											</div>
	
								</div>
	
						</div>
				
				</nav>

			</header>

			<section class="container" style="color: #0F1C46">

				<div class="row mt-5">
					<div class="nav flex-column nav-pills col-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-moje_konto-tab" data-toggle="pill" href="#v-pills-moje_konto" role="tab" aria-controls="v-pills-moje_konto" aria-selected="true">Moje konto</a>
							<a class="nav-link" id="v-pills-historia-tab" data-toggle="pill" href="#v-pills-historia" role="tab" aria-controls="v-pills-historia" aria-selected="false">Historia</a>
						</div>
						<div class="tab-content col-9" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="v-pills-moje_konto" role="tabpanel" aria-labelledby="v-pills-moje_konto-tab">
									<div class="my-5 text-center text-white">
											<h1>Moje konto</h1>
									</div>
									<div class="row rounded mx-1 px-3" style="background-color: white">
													<div class="col-6 py-2 mt-2 border-bottom">
															<p>Adres e-mail: </p>
													</div>
													<div class="col-6 py-2 mt-2 text-right border-bottom">
														<?php
															echo $_SESSION['email'];
														?>
													</div>
													<div class="col-6 py-2 mt-2 border-bottom">
															<p>Saldo: </p>
													</div>
													<div class="col-6 py-2 mt-2 text-right border-bottom">
															<?php
																echo $_SESSION['saldo'];
															?>
													</div>													
									</div>
										<button type="button" class="btn btn-block btn-myaccount col-12 mt-2">Doładuj saldo</button>
										<button type="button" class="btn btn-block btn-myaccount col-12">Edytuj dane</button>
								</div>
							<div class="tab-pane fade" id="v-pills-historia" role="tabpanel" aria-labelledby="v-pills-historia-tab">
									<div class="my-5 text-center text-white">
											<h1>Historia zakładów</h1>
										</div>
										<div id="accordion">
												<div class="card">
													<div class="card-header" id="headingOne">
													<h5 class="mb-0">
														<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														Aktywne
														</button>
													</h5>
													</div>
												
													<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
													<div class="card-body">
														<div class="col-12">
															<div class="row border-bottom py-3 mb-4">
															<div class="col-3">
																<p>Nr. kuponu</p>
															</div>
															<div class="col-3">
																<p>Data</p>
															</div>
															<div class="col-3">
																<p>Stawka</p>
															</div>
															<div class="col-3">
																<p>Wygrana</p>
															</div>
															</div>
															<div class="row">
																<div class="col-3">
																	<p>27416</p>
																</div>
																<div class="col-3">
																	<p>27.03.2019</p>
																</div>
																<div class="col-3">
																	<p>100.00</p>
																</div>
																<div class="col-3">
																	<p>599.99</p>
																</div>
															</div>
															<div class="row">
																<div class="col-3">
																	<p>27417</p>
																</div>
																<div class="col-3">
																	<p>27.03.2019</p>
																</div>
																<div class="col-3">
																	<p>10.00</p>
																</div>
																<div class="col-3">
																	<p>299.99</p>
																</div>
															</div>
															<div class="row">
																<div class="col-3">
																	<p>27418</p>
																</div>
																<div class="col-3">
																	<p>27.03.2019</p>
																</div>
																<div class="col-3">
																	<p>250.00</p>
																</div>
																<div class="col-3">
																	<p>799.99</p>
																</div>
															</div>
														</div>
													</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingTwo">
													<h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														Wygrane
														</button>
													</h5>
													</div>
													<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
													<div class="card-body">
															<div class="col-12">
																	<div class="row border-bottom py-3 mb-4">
																		<div class="col-3">
																			<p>Nr. kuponu</p>
																		</div>
																		<div class="col-3">
																			<p>Data</p>
																		</div>
																		<div class="col-3">
																			<p>Stawka</p>
																		</div>
																		<div class="col-3">
																			<p>Wygrana</p>
																		</div>
																	</div>
																	<div class="row">
																			<div class="col-3">
																				<p>27426</p>
																			</div>
																			<div class="col-3">
																				<p>27.03.2019</p>
																			</div>
																			<div class="col-3">
																				<p>15.00</p>
																			</div>
																			<div class="col-3">
																				<p>75.39</p>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-3">
																				<p>21217</p>
																			</div>
																			<div class="col-3">
																				<p>27.03.2019</p>
																			</div>
																			<div class="col-3">
																				<p>150.00</p>
																			</div>
																			<div class="col-3">
																				<p>232.99</p>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-3">
																				<p>27318</p>
																			</div>
																			<div class="col-3">
																				<p>27.03.2019</p>
																			</div>
																			<div class="col-3">
																				<p>250.00</p>
																			</div>
																			<div class="col-3">
																				<p>799.99</p>
																			</div>
																	</div>
																</div>
													</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree">
													<h5 class="mb-0">
														<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														Przegrane
														</button>
													</h5>
													</div>
													<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
													<div class="card-body">
															<div class="col-12">
																	<div class="row border-bottom py-3 mb-4">
																		<div class="col-3">
																			<p>Nr. kuponu</p>
																		</div>
																		<div class="col-3">
																			<p>Data</p>
																		</div>
																		<div class="col-3">
																			<p>Stawka</p>
																		</div>
																		<div class="col-3">
																			<p>Wygrana</p>
																		</div>
																	</div>
																	<div class="row">
																			<div class="col-3">
																				<p>27416</p>
																			</div>
																			<div class="col-3">
																				<p>27.03.2019</p>
																			</div>
																			<div class="col-3">
																				<p>100.00</p>
																			</div>
																			<div class="col-3">
																				<p>599.99</p>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-3">
																				<p>27417</p>
																			</div>
																			<div class="col-3">
																				<p>27.03.2019</p>
																			</div>
																			<div class="col-3">
																				<p>10.00</p>
																			</div>
																			<div class="col-3">
																				<p>299.99</p>
																			</div>
																	</div>
																	<div class="row">
																			<div class="col-3">
																				<p>27418</p>
																			</div>
																			<div class="col-3">
																				<p>27.03.2019</p>
																			</div>
																			<div class="col-3">
																				<p>250.00</p>
																			</div>
																			<div class="col-3">
																				<p>799.99</p>
																			</div>
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
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>