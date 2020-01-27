<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 1</title>
</head>
<body>

<?php
    $paino = $_REQUEST['paino'];
    $minunpaino = $paino - 5;
    
    echo "Mikä on painosi kiloina: <strong>$paino</strong><br>";
    echo "Minun painoni on $minunpaino, sinulla taitaa olla paino-ongelmia?<br>";
?>
</body>
</html>