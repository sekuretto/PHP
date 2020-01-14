<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 2</title>
</head>
<body>
<?php
        
    // Jos lomakkeen tiedot on lähetetty, käytetään niitä
    $taustavari = isset($_GET['taustavari']) ? $_GET['taustavari'] : '#fff';
    $tekstivari = isset($_GET['tekstivari']) ? $_GET['tekstivari'] : '#000';
    
    // Asetetaan sivun taustaväri ja tekstiväri valinnan mukaiseksi
    $head = <<<EOHead
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 2</title>
    <style type='text/css'>
    body { background-color: $taustavari; color: $tekstivari;}
    </style>
    EOHead;
    
    // Syöttölomake, jonka tiedot lähetetään skriptille itselleen
    // Vain valitun taustavärin ja tekstivärin optio saa määritteen 'checked'
    $lomake = <<< EOLomake
    <form method="get" action="{$_SERVER['PHP_SELF']}">
    
    <table border="1px solid black">
      <tr>
        <td>Taustaväri:</td>
        <td>
        <input type="radio" name="taustavari" value="#fff">Valkoinen<br>
        <input type="radio" name="taustavari" value="#ffc">Keltainen<br>
        <input type="radio" name="taustavari" value="#87888a">Harmaa<br>
        <input type="radio" name="taustavari" value="#85b4ff">Sininen
        </td>
      </tr>
      <tr>
        <td>Tekstiväri:</td>
        <td>
        <input type="radio" name="tekstivari" value="#000">Musta<br>
        <input type="radio" name="tekstivari" value="#e62e1e">Punainen<br>
        <input type="radio" name="tekstivari" value="#26cf1d">Vihreä<br>
        <input type="radio" name="tekstivari" value="#1d2ccf">Sininen
        </td>
      </tr>
    </table>    
    <input type="submit" name="painike" value="Lähetä">
    </form>
    EOLomake;

    $teksti = <<< EOTeksti
    <h1>Valitse sivulle värit</h1>
    <hr>
    EOTeksti;
    
    // Tulostetaan sivun osat näkyviin
    echo $head;
    echo $teksti;
    echo $lomake;   
?>

</body>
</html>