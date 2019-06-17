<?php
    session_start();
    
    if ((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
	{
		header('Location: signin_admin.php');
		exit();
	}

	require_once "config.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if($polaczenie->connect_errno != 0){
		echo "Error".$polaczenie->connect_errno;
	} else {
		
	$login = $_POST['email'];
	$haslo = $_POST['haslo'];
	
	$login = htmlentities($login, ENT_QUOTES, "UTF-8");

	if ($rezultat = @$polaczenie->query(
	sprintf("SELECT * FROM admins WHERE email='%s'",
	mysqli_real_escape_string($polaczenie,$login))))
	{		
		//sprawdzenie czy mail sie nie powtorzyl
		$ilu_userow = $rezultat->num_rows;

			$wiersz = $rezultat->fetch_assoc();
			if (password_verify($haslo, $wiersz['pass'])) {

                $_SESSION['zalogowany'] = true;
                $_SESSION['admin'] = true;
				$_SESSION['id'] = $wiersz['id'];
				
				unset($_SESSION['blad']);
                $rezultat->close();
                header('Location: admin.php');

			} else {
				$_SESSION['blad'] = '<center><span style="color:red">Nieprawidłowy login lub hasło!</span></center>';
				header('Location:signin_admin.php');
			}
	}

	}

?>