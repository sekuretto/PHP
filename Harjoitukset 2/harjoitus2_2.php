<html>
<?php
        
    // Jos lomakkeen tiedot on lähetetty, käytetään niitä
    $taustavari = isset($_GET['taustavari']) ? $_GET['taustavari'] : '#fff';
    
    // Asetetaan sivun taustaväri ja tekstiväri valinnan mukaiseksi
    $head = <<<EOHead
    <head>
      <meta charset="UTF-8">
      <title>Harjoitukset 2: Tehtävä 2</title>
      <style type='text/css'>
    body { background-color: $taustavari;}
    </style>
    </head>
    <body>
    EOHead;

    $valittu[0] = ($taustavari == "#ffc") ? 'checked': '';
    $valittu[1] = ($taustavari == "#F87979") ? 'checked': '';
    $valittu[2] = ($taustavari == "#85b4ff") ? 'checked': '';
    $valittu[3] = ($taustavari == "#9E675B") ? 'checked': '';
    $valittu[4] = ($taustavari == "#A8A8A8") ? 'checked': '';
   
    // Syöttölomake, jonka tiedot lähetetään skriptille itselleen
    // Vain valitun taustavärin ja tekstivärin optio saa määritteen 'checked'
    $lomake = <<< EOLomake
    <form method="get" action="{$_SERVER['PHP_SELF']}">
    <table>
      <tr>
        <td>
        <h4>Vaihda taustaväri:</h4>
        <input type="radio" name="taustavari" value="#ffc" {$valittu[0]}>Keltainen<br>
        <input type="radio" name="taustavari" value="#F87979" {$valittu[1]}>Punainen<br>
        <input type="radio" name="taustavari" value="#85b4ff" {$valittu[2]}>Sininen<br>
        <input type="radio" name="taustavari" value="#9E675B" {$valittu[3]}>Beige<br>
        <input type="radio" name="taustavari" value="#A8A8A8" {$valittu[4]}>Harmaa<br>
        </td>
      </tr>
    </table>
    <br>    
    <input type="submit" name="painike" value="Väritä">
    </form>
    </body>
    </html>
    EOLomake;
    
    // Tulostetaan sivun osat näkyviin
    echo $head;
    echo $lomake;   

?>

</html>