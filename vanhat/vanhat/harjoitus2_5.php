<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 5</title>
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
    
   <input type ="radio" name="kysymys1" value="1">Oikea vastaus<br>
   <input type ="radio" name="kysymys1" value="0">Väärä vastaus<br>

   <input type ="checkbox" name="kysymys3[]" value="-3">tarvitsevat toimiakseen Perl-tulkin<br>
   <input type ="checkbox" name="kysymys3[]" value="3">    

    
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