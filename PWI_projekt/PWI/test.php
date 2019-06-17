<?php
    $haslo1 = $_POST['haslo1'];    
    
    $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
    echo $haslo_hash;
?>