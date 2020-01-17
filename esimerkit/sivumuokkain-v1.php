<?php
// sivumuokkain-v1.php

// Jos lomakkeen tiedot on lähetetty, käytetään niitä
$nimi       = isset($_GET['nimi']) ? $_GET['nimi'] : '';
$taustavari = isset($_GET['taustavari']) ? $_GET['taustavari'] : '#eee';

// Asetaan sivun taustaväri valinnan mukaiseksi
$head = <<<EOHead
<title>sivumuokkain-v1.php</title>
<style type='text/css'>
body { background-color: $taustavari;}
</style>
EOHead;

// Syöttölomake, jonka tiedot lähetetään skriptille itselleen
$lomake = <<< EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
Sivun tekijä:<br>
<input type="text" name="nimi" value=""><br>

<select name="taustavari">
  <option value="#eee">Valitse taustaväri</option>
  <option value="#ffc">Keltainen</option>
  <option value="#9fc">Vihreä</option>
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