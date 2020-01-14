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
    
    // Valittu (1 kpl) taustaväri merkitään 'selected', jotta
    // se voidaan asettaa valituksi lomakkeessa
    $tausta[0] = ($taustavari == "#fff") ? 'selected': '';
    $tausta[1] = ($taustavari == "#fff") ? 'selected': '';
    $tausta[2] = ($taustavari == "#ffc") ? 'selected': '';
    $tausta[3] = ($taustavari == "#87888a") ? 'selected': '';
    $tausta[4] = ($taustavari == "#85b4ff") ? 'selected': '';
    
    $teksti[0] = ($tekstivari == "#000") ? 'selected': '';
    $teksti[1] = ($tekstivari == "#000") ? 'selected': '';
    $teksti[2] = ($tekstivari == "#e62e1e") ? 'selected': '';
    $teksti[3] = ($tekstivari == "#26cf1d") ? 'selected': '';
    $teksti[4] = ($tekstivari == "#1d2ccf") ? 'selected': '';
    
    
    // Asetetaan sivun taustaväri ja tekstiväri valinnan mukaiseksi
    $head = <<<EOHead
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 2</title>
    <style type='text/css'>
    body { background-color: $taustavari; color: $tekstivari;}
    </style>
    EOHead;
    
    // Syöttölomake, jonka tiedot lähetetään skriptille itselleen
    // Vain valitun taustavärin ja tekstivärin optio saa määritteen 'selected'
    $lomake = <<< EOLomake
    <form method="get" action="{$_SERVER['PHP_SELF']}">
    
    <select name="taustavari">
      <option value="#fff" {$tausta[0]}>Valitse taustaväri</option>
      <option value="#fff" {$tausta[1]}>Valkoinen</option>
      <option value="#ffc" {$tausta[2]}>Keltainen</option>
      <option value="#87888a" {$tausta[3]}>Harmaa</option>
      <option value="#85b4ff" {$tausta[4]}>Sininen</option>
    </select>
    <br><br>
    
    <select name="tekstivari">
      <option value="#000" {$teksti[0]}>Valitse tekstiväri</option>
      <option value="#000" {$teksti[1]}>Musta</option>
      <option value="#e62e1e" {$teksti[2]}>Punainen</option>
      <option value="#26cf1d" {$teksti[3]}>Vihreä</option>
      <option value="#1d2ccf" {$teksti[4]}>Sininen</option>
    </select>
    
    <br><br>
    
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