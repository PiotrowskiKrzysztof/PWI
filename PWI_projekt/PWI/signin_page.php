<?php

    session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: my_account.php');
		exit();
	}

?>

?>
<!DOCTYPE html>
<html lang="pl">
<head>
        <link rel="Stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Zaloguj się</title>
	    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-navbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex">
                            <img src="img/obraz_rejestracja.jpg" alt="Smiley face">
                    </div>
                    <div class="card-body py-5">
                        <div class="text-center">
                            <img src="img/logo_pion_granat.png" alt="" class="mt-5" height="100">
                        </div>
                        <h3 class="card-title text-center my-4">Zaloguj się</h3>
                        <form class="form-signin" method="post" action="login_account.php">
                        
                                E-mail: <br/>
                                <input type="email" class="form-control" placeholder="Adres email" name="email" required>
                                


                                Hasło: <br/>
                                <input type="password" class="form-control" placeholder="Hasło" name="haslo" required>
                                
                            
                            <hr class="my-5">

                            <button class="btn btn-lg btn-register btn-block text-uppercase mt-3" type="submit">Zaloguj się</button>
                            <a class="d-block text-center mt-2 small" href="register_page.html">Zarejestruj się</a>

                        
                        </form>
                        <?php
                        if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>