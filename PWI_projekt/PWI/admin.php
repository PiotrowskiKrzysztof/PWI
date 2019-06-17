<?php

	session_start();

	
	include "dodaj_zdarzenie.php";
	$zdarzenie = new zdarzenie();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: signin_admin.php');
		exit();
	}

	if(isset($_POST['gogo']) && $_POST['gogo'] == 1){
		include "config.php";
		try {

			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if($polaczenie->connect_errno != 0){
				
				throw new Exception(mysqli_connect_errno()); // lapie wyjatki,jesli jakies wystapia przy polaczeniu
			
			} else {
				if(isset($_POST['data'])){
					$wszystko_OK = true;
					//$data = $_POST['data'];
					$data = explode("T", $_POST['data']);
					
					$dyscyplina = $_POST['dyscyplina'];
					if($dyscyplina == 0) {
						$wszystko_OK = false;
						$_SESSION['e_dyscyplina'] = "Wybierz dyscypline!</br>";
					}

					$region = $_POST['region'];
					if($region == 0) {
						$wszystko_OK = false;
						$_SESSION['e_region'] = "Wybierz region!</br>";
					}

					$druzyna_gospodarzy = $_POST['druzyna_gospodarzy'];
					if($druzyna_gospodarzy == 0) {
						$wszystko_OK = false;
						$_SESSION['e_druzyna_gospodarzy'] = "Wybierz drużynę gospodarzy!</br>";
					}
					
					$druzyna_gosci = $_POST['druzyna_gosci'];
					if($druzyna_gosci == 0) {
						$wszystko_OK = false;
						$_SESSION['e_druzyna_gosci'] = "Wybierz drużynę gości!</br>";
					}

					if($druzyna_gosci == $druzyna_gospodarzy) {
						$wszystko_OK = false;
						$_SESSION['e_druzyny_identyczne'] = "Druzyna gosci i gospodarzy nie moze byc taka sama!";
					}

					if($wszystko_OK == true) {
						//echo "WSZYSTKO OK!!";

						$data[0] = $polaczenie->real_escape_string($data[0]);
						$druzyna_gospodarzy = $polaczenie->real_escape_string($druzyna_gospodarzy);
						$druzyna_gosci = $polaczenie->real_escape_string($druzyna_gosci);
						$data[1] = $polaczenie->real_escape_string($data[1]);
						
						$dodaj = "INSERT INTO zdarzenie (id, `data`, id_gospodarz, id_gosc, godzina_start)
						VALUES(NULL, "." ' "."$data[0]"." ' ".", $druzyna_gospodarzy, $druzyna_gosci, "." ' "."$data[1]"." ' ".")";
						//echo $dodaj;
						if(mysqli_query($polaczenie, $dodaj)){
							//echo "Dodales zdarzenie";
						}
					} else {
						//echo "Nie jest ok!";
					}

					$polaczenie->close();
				}
			}
		} catch(Exception $e) {

			echo '<center><span style="color:red">Blad serwera! Spróbuj zarejestrować się za chwilę.</span><center>';
			echo '</br> Informacja developerska: ' . $e;

		}	
	}


	if(isset($_POST['gogo2']) && $_POST['gogo2'] == 1){
		include "config.php";
		try {

			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if($polaczenie->connect_errno != 0){
				
				throw new Exception(mysqli_connect_errno()); // lapie wyjatki,jesli jakies wystapia przy polaczeniu
			
			} else {

					$wszystko_OK2 = true;
					
					$liga = $_POST['liga'];
					if($liga == 0) {
						$wszystko_OK2 = false;
						$_SESSION['e_liga'] = "Wybierz lige!</br>";
					}

					$zdarzeniedodaj = $_POST['zdarzenie'];
					if($liga == 0) {
						$wszystko_OK2 = false;
						$_SESSION['e_zdarzenie'] = "Wybierz zdarzenie!</br>";
					}

					$opcja = $_POST['opcja'];
					if($liga == 0) {
						$wszystko_OK2 = false;
						$_SESSION['e_opcja'] = "Wybierz opcję!</br>";
					}
					
					$kurs = $_POST['kurs'];

					if($wszystko_OK2 == true) {
						//echo "WSZYSTKO OK!!";

						$liga = $polaczenie->real_escape_string($liga);
						$zdarzeniedodaj = $polaczenie->real_escape_string($zdarzeniedodaj);
						$opcja = $polaczenie->real_escape_string($opcja);
						$kurs = $polaczenie->real_escape_string($kurs);
						
						$dodaj = "INSERT INTO oferta (id_ligii, id_zdarzenia, id_opcji, aktywnosc, kurs)
						VALUES($liga, $zdarzeniedodaj, $opcja, 1, $kurs)";
						//echo $dodaj;
						if(mysqli_query($polaczenie, $dodaj)){
							//echo "Dodales zdarzenie";
						}
					} else {
						//echo "Nie jest ok!";
					}

					//$polaczenie->close();
				
			}
		} catch(Exception $e) {

			echo '<center><span style="color:red">Blad serwera! Spróbuj zarejestrować się za chwilę.</span><center>';
			echo '</br> Informacja developerska: ' . $e;

		}	
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
							<a class="nav-link active" id="v-pills-dodaj-zdarzenia-tab" data-toggle="pill" href="#v-pills-dodaj-zdarzenia" role="tab" aria-controls="v-pills-dodaj-zdarzenia" aria-selected="true">Dodaj zdarzenia</a>
							<a class="nav-link" id="v-pills-dodaj-dooferty-tab" data-toggle="pill" href="#v-pills-dodaj-dooferty" role="tab" aria-controls="v-pills-dodaj-dooferty" aria-selected="true">Dodaj do oferty</a>
						</div>
						<div class="tab-content col-9" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="v-pills-dodaj-zdarzenia" role="tabpanel" aria-labelledby="v-pills-dodaj-zdarzenia-tab">
									<div class="my-5 text-center text-white">
											<h1>Dodaj zdarzenia</h1>
									</div>
									<div class="row rounded mx-1 px-3 py-3">
										<form class="col-md-12" method="post" name="dodaj_zdarzenie" action="admin.php">
													<label for="inputState">Dyscyplina</label>
													<select name="dyscyplina" id="inputState" class="form-control">
													  <option value="0">Wybierz</option>
													  <?php
														
														var_dump($zdarzenie);
														$zdarzenie->dodaj_dyscypline();
													  ?>
													</select>
													<?php
														if(isset($_SESSION['e_dyscyplina'])) {
															echo $_SESSION['e_dyscyplina'];
															unset($_SESSION['e_dyscyplina']);
														}
													?>
													<label for="inputState2">Region</label>
													<select name="region" id="inputState2" class="form-control">
													  <option value="0">Wybierz</option>
													  <?php														
														$zdarzenie->dodaj_region();
													  ?>
													</select>
													<?php
														if(isset($_SESSION['e_region'])) {
															echo $_SESSION['e_region'];
															unset($_SESSION['e_region']);
														}
													?>
													<label for="inputState3">Drużyna gospodarzy</label>
													<select name="druzyna_gospodarzy" id="inputState3" class="form-control">
													  <option value="0">Wybierz</option>
													  <?php														
														$zdarzenie->dodaj_druzyne();
													  ?>
													</select>
													<?php
														if(isset($_SESSION['e_druzyna_gospodarzy'])) {
															echo $_SESSION['e_druzyna_gospodarzy'];
															unset($_SESSION['e_druzyna_gospodarzy']);
														}
													?>
													<label for="inputState4">Drużyna gości</label>
													<select name="druzyna_gosci" id="inputState4" class="form-control">
													  <option value="0">Wybierz</option>
													  <?php														
														$zdarzenie->dodaj_druzyne();
													  ?>
													</select>
													<?php
														if(isset($_SESSION['e_druzyna_gosci'])) {
															echo $_SESSION['e_druzyna_gosci'];
															unset($_SESSION['e_druzyna_gosci']);
														}
														if(isset($_SESSION['e_druzyny_identyczne'])) {
															echo $_SESSION['e_druzyny_identyczne'];
															unset($_SESSION['e_druzyny_identyczne']);
														}
													?>
												<label for="example-datetime-local-input" class="col-12 col-form-label">Date and time</label>
												<div class="col-12">
													<input name="data" class="form-control" type="datetime-local" value="2019-08-19T20:45:00" id="example-datetime-local-input">
												</div>
											<button type="submit" class="btn btn-block btn-myaccount col-12 mt-2">Dodaj</button>
											<input type="hidden" name="gogo" value="1">
										</form>
									</div>
									
								</div>
							<div class="tab-pane fade" id="v-pills-dodaj-dooferty" role="tabpanel" aria-labelledby="v-pills-dodaj-dooferty-tab">
							<form class="col-md-12" method="post" name="dodaj_opcje" action="admin.php">
													
													<label for="inputState2">Liga</label>
													<select name="liga" id="inputState2" class="form-control">
													  <option value="0">Wybierz</option>
													  <?php														
														$zdarzenie->dodaj_lige();
													  ?>
													</select>
													<?php
														if(isset($_SESSION['e_liga'])) {
															echo $_SESSION['e_liga'];
															unset($_SESSION['e_liga']);
														}
													?>
													<label for="inputState3">Zdarzenie</label>
													<select name="zdarzenie" id="inputState3" class="form-control">
													  <option value="0">Wybierz</option>
													  <?php														
														$zdarzenie->dodaj_zdarzenie();
													  ?>
													</select>
													<?php
														if(isset($_SESSION['e_zdarzenie'])) {
															echo $_SESSION['e_zdarzenie'];
															unset($_SESSION['e_zdarzenie']);
														}
													?>
													<label for="inputState4">Opcja</label>
													<select name="opcja" id="inputState4" class="form-control">
													  <option value="0">Wybierz</option>
													  <?php														
														$zdarzenie->dodaj_opcje();
													  ?>
													</select>
													<?php
														if(isset($_SESSION['e_opcja'])) {
															echo $_SESSION['e_opcja'];
															unset($_SESSION['e_opcja']);
														}
													?>
													<input name ="kurs" class="form-control" type="number" placeholder="Kurs" value = 1.0 step=0.01 min=1.0>
												
											<button type="submit" class="btn btn-block btn-myaccount col-12 mt-2">Dodaj</button>
											<input type="hidden" name="gogo2" value="1">
										</form>
								</div>
						</div>

						

					</div>


				</section>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>