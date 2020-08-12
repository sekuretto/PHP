<?php
// sessio-v02.php

session_start();

// Alustus ensimmäisellä kerralla
if (!isset($_SESSION['edellinen_aika'])) {
  $_SESSION['edellinen_aika'] = time();
}

// Lasketaan kulunut aika. Ekalla kerralla näytetään
// kuluneeksi ajaksi 0 sekuntia
$aika_nyt     = time();
$kulunut_aika = $aika_nyt - $_SESSION['edellinen_aika'];

echo "Edellisestä vierailusta on kulunut ";
echo "<b>$kulunut_aika</b> sekuntia";

// Nykyinen aika seuraavan pyynnön edelliseksi
$_SESSION['edellinen_aika'] = $aika_nyt;
?>