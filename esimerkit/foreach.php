<title>Taulukon läpikäynti Foreach-rakenteen avulla</title>
<?php
//foreach-esim1.php

$taulu[0] = "Rantala";
$taulu[1] = "Rasku";
$taulu[2] = "Rautanen";

// Ei tarvitse välittää lukumäärästä:
foreach ($taulu as $arvo) {
    echo "$arvo<br>";
}

?>