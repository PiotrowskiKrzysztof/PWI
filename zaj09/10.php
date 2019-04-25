<?php
    $wynik = $_POST['liczba1'] + $_POST['liczba2'];
    echo $wynik;
    $wynik2 = $_POST['liczba1'] - $_POST['liczba2'];
    echo $wynik2;
    $wynik3 = $_POST['liczba1'] * $_POST['liczba2'];
    echo $wynik3;
    if($_POST['liczba2'] == 0){
        echo "nie dziel przez 0";
    } else { 
        $wynik4 = $_POST['liczba1'] / $_POST['liczba2'];
        echo $wynik4;
    }
?>