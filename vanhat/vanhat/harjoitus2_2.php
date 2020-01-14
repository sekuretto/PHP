<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 2</title>
</head>
<body>
    
<?php
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
    
    $lomake = <<<EOLomake
        <form method="get" action="{$_SERVER['PHP_SELF']}">
            <input type="radio" name="tvari" value="ff0">Keltainen<br>
            <input type="radio" name="tvari" value="f00">Punainen<br>
            <input type="radio" name="tvari" value="00f">Sininen<br>
            <input type="submit" name="nappi" value="Väritä">
            </p>
        </form>
    EOLomake;

    echo $tyylit;
?>
    
</body>
</html>