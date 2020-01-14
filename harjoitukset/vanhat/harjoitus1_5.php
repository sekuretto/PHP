<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 5</title>
</head>
<body>

<?php
    echo "<table border=0\n";
        for ($i = 1; $i < 10; $i++) {
            $tvari = taustaVari();
            echo "<tr style='background-color: $tvari'><td>Rivi $i</td></tr>";
        }
    echo "</table>\n";
    
    function taustaVari() {
        static $varikoodi = "#ffff00";
        // ratkaisu tähän
        
        return $varikoodi;
    }

?>