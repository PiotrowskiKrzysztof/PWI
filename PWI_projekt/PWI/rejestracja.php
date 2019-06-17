<?php
    session_start();

    if(isset($_POST['email'])) {
        //udana walidacja
        $wszystko_OK = true;

        // Hashowanie hasla
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];

        $email = $_POST['email'];


        $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
        echo $haslo_hash;

        require_once "config.php";

        try {

            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            if($polaczenie->connect_errno != 0){
                throw new Exception(mysqli_connect_errno()); // lapie wyjatki,jesli jakies wystapia przy polaczeniu
            } else {
                //sprawdza czy email znajduje sie w bazie
                $rezultat = $polaczenie->query("SELECT id FROM user WHERE email=$email");

                $ile_takich_maili = $rezultat->num_rows;
                if($ile_takich_maili > 0) {
                    $wszystko_OK = false;
                    $_SESSION['e_email'] = "Istnieje juz konto przypisane do takiego adresu email";
                }

                if ($wszystko_OK==true)
				{
                    //Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
                    
                    $email = $polaczenie->real_escape_string($email);
					
					if ($polaczenie->query("INSERT INTO user VALUES (NULL, '$email', '$haslo_hash', 0)"))
					{
						header('Location: register_page_accept.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}

                $polaczenie->close();
            }

        } catch(Exception $e) {

            echo '<center><span style="color:red">Blad serwera! Spróbuj zarejestrować się za chwilę.</span><center>';
            echo '</br> Informacja developerska: ' . $e;

        }
    }
?>