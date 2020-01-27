<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 5</title>
</head>
<body>

<?php
    echo "<table border=0\n";
        for ($i = 1; $i < 8; $i++) {
            $tvari = taustaVari();
            echo "<tr style='background-color: $tvari'><td>Rivi $i</td></tr>";
        }
    echo "</table>\n";

    echo "<br><table border=0\n";
        $taulu[0] = 1;
        $taulu[1] = 2;
        $taulu[2] = 3;
        $taulu[3] = 4;
        $taulu[4] = 5;
        $taulu[5] = 6;
        $taulu[6] = 7;
        foreach ($taulu as $arvo) {
            $tvari = taustaVari();
            echo "<tr style='background-color: $tvari'><td>Rivi $arvo</td></tr>";
        }
    echo "</table>\n";

    function taustaVari() {
        static $valinta = true;
        if ($valinta === true) {
            $varikoodi = "#ffff00";
            $valinta = false;
        }
        else {
            $varikoodi = "#fff";
            $valinta = true;
        }
        return $varikoodi;
    }

?>