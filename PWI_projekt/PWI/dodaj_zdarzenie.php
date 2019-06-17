<?php
    class zdarzenie {

        var $polaczenie;

        function zdarzenie() {
            require_once "config.php";
            

            $this->polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        
            if ($this->polaczenie->connect_errno!=0)
            {
                echo "Error: ". $this->polaczenie->connect_errno;
            }
            mysqli_set_charset($this->polaczenie, "utf8");
        }

        function dodaj_dyscypline(){
            $sql = "SELECT id, nazwa, ikona
                    FROM dyscyplina";

            $result = $this->polaczenie->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option '. ((isset($_POST['dyscyplina']) && $_POST['dyscyplina'] == $row['id']) ? "selected":"" ).' value="'.$row["id"].'">'.$row["nazwa"]."</option>";
                } 

            } else {
                echo "Problem z wyswietleniem dyscyplin";
            }
        }
        function dodaj_region(){
            $sql = "SELECT id, nazwa, id_dyscypliny
                    FROM region";

            $result = $this->polaczenie->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option '. ((isset($_POST['region']) && $_POST['region'] == $row['id']) ? "selected":"" ).' value="'.$row["id"].'">'.$row["nazwa"]."</option>";
                } 

            } else {
                echo "Problem z wyswietleniem regionu";
            }
        }
        function dodaj_lige(){
            $sql = "SELECT id, nazwa, id_regionu
                    FROM liga";

            $result = $this->polaczenie->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option '. ((isset($_POST['liga']) && $_POST['liga'] == $row['id']) ? "selected":"" ).' value="'.$row["id"].'">'.$row["nazwa"]."</option>";
                } 

            } else {
                echo "Problem z wyswietleniem ligi";
            }
        }
        function dodaj_druzyne(){
            $sql = "SELECT id, nazwa
                    FROM druzyna";

            $result = $this->polaczenie->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row["id"].'">'.$row["nazwa"]."</option>";
                } 

            } else {
                echo "Problem z wyswietleniem druzyny";
            }
        }
        function dodaj_zdarzenie(){
            $sql = "SELECT
                    z.id,
                    z.id_gospodarz, d.nazwa AS nazwa_gospodarz,
                    z.id_gosc, d2.nazwa AS nazwa_gosc
                    FROM `zdarzenie` z
                    
                    LEFT JOIN druzyna d ON d.id = z.id_gospodarz
                    LEFT JOIN druzyna d2 ON d2.id = z.id_gosc";

            $result = $this->polaczenie->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option '. ((isset($_POST['zdarzenie']) && $_POST['zdarzenie'] == $row['id']) ? "selected":"" ).' value="'.$row["id"].'">'.$row["nazwa_gospodarz"]." vs ".$row["nazwa_gosc"]."</option>";
                } 

            } else {
                echo "Problem z wyswietleniem druzyn zdarzenia";
            }
        }
        function dodaj_opcje(){
            $sql = "SELECT *
                    FROM opcja";

            $result = $this->polaczenie->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<option '. ((isset($_POST['opcja']) && $_POST['opcja'] == $row['id']) ? "selected":"" ).' value="'.$row["id"].'">'.$row["oznaczenie"]."</option>";
                } 

            } else {
                echo "Problem z wyswietleniem druzyny";
            }
        }
    }
?>