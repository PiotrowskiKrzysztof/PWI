<?php
    session_start();

    if ((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "config.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
        echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{   
		$login = $_POST['email'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM user WHERE email='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
            $ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				if (password_verify($haslo, $wiersz['pass']))
				{
                    $_SESSION['zalogowany'] = true;
					$_SESSION['id'] = $wiersz['id'];
                    $_SESSION['email'] = $wiersz['email'];
                    $_SESSION['saldo'] = $wiersz['saldo'];
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: my_account.php');
				}
				else 
				{
                    $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: signin_page.php');
				}
				
			} else {
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: signin_page.php');
				
            }
			
		}
		$polaczenie->close();
	}
?>