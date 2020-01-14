<?php
// sivumuokkain-v2.php

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
$nimi       = isset($_GET['nimi']) ? $_GET['nimi'] : '';
$taustavari = isset($_GET['taustavari']) ? $_GET['taustavari'] : '#eee';

// Muutetaan HTML-erikoismerkit HTML-entiteeteiksi
$nimi = htmlspecialchars($nimi);

// Valittu (1 kpl) taustaväri merkitään 'selected', jotta
// se voidaan asettaa valituksi lomakkeessa
$valittu[0] = ($taustavari == "#eee") ? 'selected': '';
$valittu[1] = ($taustavari == "#ffc") ? 'selected': '';
$valittu[2] = ($taustavari == "#9fc") ? 'selected': '';


// Asetetaan sivun taustaväri valinnan mukaiseksi
$head = <<<EOHead
<title>sivumuokkain-v2.php</title>
<style type='text/css'>
body { background-color: $taustavari;}
</style>
EOHead;

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
// Vain valitun taustavärin option saa määritteen 'selected'
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
Sivun tekijä:<br>
<input type="text" name="nimi" value="$nimi"><br>

<select name="taustavari">
  <option value="#eee" {$valittu[0]}>Valitse taustaväri</option>
  <option value="#ffc" {$valittu[1]}>Keltainen</option>
  <option value="#9fc" {$valittu[2]}>Vihreä</option>
</select>

<br><br>

<input type="submit" name="painike" value="Lähetä">
</form>
EOLomake;

// Asetetaan sivun alaosan teksti
$footer = <<<EOFooter
<hr>
<p>Sivun teki: <em>$nimi</em></p>
EOFooter;


// Tulostetaan sivun osat näkyviin
echo $head;
echo $lomake;
echo $footer;

?>