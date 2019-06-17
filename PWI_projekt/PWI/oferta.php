<?php

class oferta {

    var $polaczenie ;

    function oferta() {
        require_once "config.php";

        $this->polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        
        if ($this->polaczenie->connect_errno!=0)
        {
            echo "Error: ". $this->polaczenie->connect_errno;
        }
        mysqli_set_charset($this->polaczenie, "utf8");
    }

    function wypisz_oferte($iddyscypliny, $idligii) {

        $sql = "SELECT
        z.id,
        z.id_gospodarz, d.nazwa AS nazwa_gospodarz,
        z.id_gosc, d2.nazwa AS nazwa_gosc,
        z.`data`,
        o.`kurs`,
        oo.`oznaczenie`,
        dysc.`id` AS DID,
        reg.`id` AS RID,
        lig.`id` AS LID

        FROM `zdarzenie` z

        LEFT JOIN oferta o ON z.id = o.id_zdarzenia
        LEFT JOIN opcja oo ON oo.id = o.id_opcji

        LEFT JOIN liga lig ON lig.id = o.id_ligii
        LEFT JOIN region reg ON reg.id = lig.id_regionu
        LEFT JOIN dyscyplina dysc ON dysc.id = reg.id_dyscypliny
        
        LEFT JOIN druzyna d ON d.id = z.id_gospodarz
        LEFT JOIN druzyna d2 ON d2.id = z.id_gosc

        WHERE dysc.`id` = ".$iddyscypliny."&& lig.`id` = ".$idligii;

        $result = $this->polaczenie->query($sql);

        $dane = array();
        $i=0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
                if(!isset($dane[$row['id']])){
                    $dane[$row['id']] = array(
                            'gospodarz' => array(
                                'id'=>$row['id_gospodarz'],
                                'nazwa'=>$row['nazwa_gospodarz'] 
                            ),
                            'gosc' => array(
                                'id'=>$row['id_gosc'],
                                'nazwa'=>$row['nazwa_gosc'] 
                            ),
                            'data'=>$row['data'],
                            'kursy'=>array(),
                    ); 
                }
                $dane[$row['id']]['kursy'][$row['oznaczenie']] = $row['kurs'];
            } 

        }    
        //print_r($dane);
        
        
        
            foreach($dane as $row) {
                //echo "id: " . $row["id"]. " - gospodarz: " . $row["id_gospodarz"]. "gosc: " . $row["id_gosc"]. "<br>";
                echo '
                    <div class="card-body">
                    <div class="row">
                            <!-- ikona dyscypliny -->
                            <div class="col-9 col-md-3 col-lg-1">
                                    <img src="img/ikona_pilkanozna.jpg" height="50" alt="">
                            </div>
                            <!-- drużyna gospodarzy -->
                            <div class="col-9 col-md-3 col-lg-2">
                            '.                            
                                $row["gospodarz"]['nazwa']                           
                            .'
                            </div>
                            <!-- drużyna gości -->
                            <div class="col-9 col-md-3 col-lg-2">
                            '.
                                $row['gosc']["nazwa"]
                            .'
                            </div>
                            <!-- data -->
                            <div class="col-9 col-md-3 col-lg-2">
                            '.
                                $row["data"]
                            .'
                            </div>
                            <!-- opcja1 -->
                            <div class="col-9 col-md-3 col-lg-1">
                            '.
                            (isset($row["kursy"]['1']) ? ($row["kursy"]['1']) : '')
                            .'
                            </div>
                            <!-- opcja2 -->
                            <div class="col-9 col-md-3 col-lg-1">
                            '.
                            (isset($row["kursy"]['X']) ? ($row["kursy"]['X']) : '')
                            .'
                            </div>
                            <!-- opcja3 -->
                            <div class="col-9 col-md-3 col-lg-1">
                            '.
                            (isset($row["kursy"]['2']) ? ($row["kursy"]['2']) : '')
                            .'
                            </div>
                            <!-- opcja3 -->
                            <div class="col-9 col-md-3 col-lg-1">
                            '.
                            (isset($row["kursy"]['1,5-']) ? ($row["kursy"]['1,5-']) : '')
                            .'
                            </div>
                            <!-- opcja3 -->
                            <div class="col-9 col-md-3 col-lg-1">
                            '.
                            (isset($row["kursy"]['1,5+']) ? ($row["kursy"]['1,5+']) : '')
                            .'
                            </div>
                        </div>
                </div>
                ';
            }
        }
        
    }

?>
