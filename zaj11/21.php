<?php

   try
   {
    if(isset($_GET['id'])) { // zabezpieczenie do podania id
        $dbalkohole = new PDO('mysql:host=localhost;dbname=alkohole', 'root', '');
        $dbalkohole->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $dbalkohole->prepare("SELECT * FROM alkohole WHERE id = ?");
        $stm->execute(array($_GET['id'])); // wykonuje zadane polecenie
        $stm->setFetchMode(PDO::FETCH_ASSOC); // pobieranie tylko tablicy asocjacyjnej
        $res = $stm->fetchAll(); // lapie caly wynik zpaytania
        if(count($res) != 0) { // zabezpieczenie odnoszace sie do zawartosic tablicy
        foreach($res as $row) {
            //var_dump($row);
            foreach($row as $value) {
                echo $value . "\t";
            }
        }
        } else {
            echo 'Brak wynikow!';
        }
    } else {
        echo 'Nie podano id.';
    }

   }
   catch(PDOException $e)
   {
      echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   }
?>
