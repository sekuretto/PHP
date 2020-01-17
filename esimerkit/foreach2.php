<title>Hajautustaulukon läpikäynti Foreach-rakenteen avulla</title>
<?php
// foreach-esim2.php

$taulu["sukunimi1"] = "Rantala";
$taulu["sukunimi2"] = "Rasku";
$taulu["sukunimi3"] = "Rautanen";

foreach ($taulu as $arvo) {
    echo "$arvo<br>";
}
?>