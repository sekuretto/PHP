<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 2 (versio 2)</title>
</head>
<body>
    
<?php
    $taustavarit["Keltainen"] = "#ff0";
    $taustavarit["Punainen"] = "#f00";
    $taustavarit["Sininen"] = "#00f";
    $taustavarit["Beige"] = "#fed";
    $taustavarit["Silver"] = "#888";
    
    $taustavari = '#ccc';
    
    if (isset($_GET['tvari'])) {
        $taustavari = $_GET['tvari'];
    }
    
    $tyylit = <<<EOTyyli
        <style type = 'text/css'>
        body{
            background-color: $taustavari;
        }
        </style>
    EOTyyli;
    
    $optiot = '';
    foreach($taustavarit as $varinimi => $varikoodi) {
        $optiot .= "<input type='radio' name='tvari' value='$varikoodi'>$varinimi<br>\n";
    }
    
    $lomake = <<<EOLomake
        <form method="get" action="{$_SERVER['PHP_SELF']}">
            $optiot
            <input type="submit" name="nappi" value="Väritä">
        </form>
    EOLomake;

    echo $tyylit;
?>
    
</body>
</html>