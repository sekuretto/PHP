<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 1</title>
</head>
<body>
<h1></h1>
    
<?php
    $on_vasy = '';
    $on_pe = '';
    $on_paapipi = '';
    
    if (isset($_GET['vasy'])) {
        echo "On väsy.";
        $on_vasy = ' checked=checked';
    }
    if (isset($_GET['paapipi'])) {
        echo "On pää kipiä.";
        $on_paapipi = ' checked=checked';
    }
    if (isset($_GET['perjantai'])) {
        echo "On perjantai.";
        $on_pe = ' checked=checked';
    }
    
    $lomake = <<<EOLomake
        <form method="get" action="{$_SERVER['PHP_SELF']}">
            <p><b>Mikä on</b><br>
            Väsy <input type="checkbox" name="vasy" $on_vasy><br>
            Pää kipiä <input type="checkbox" name="paapipi" $on_paapipi><br>
            Perjantai <input type="checkbox" name="perjantai" $on_pe><br>
            <input type="submit" name="nappi" value="Kerro">
            </p>
        </form>
    EOLomake;

    echo $lomake;
?>
    
</body>
</html>