<title>ALV-esimerkki</title>
<?php
// Pääohjelma, ohjelman suoritus alkaa tästä
$alviton_loppusumma = 100;

// Funktion anna_alv kutsu:
$arvonlisavero = anna_alv($alviton_loppusumma);

// Lisätään ja tulostetaan arvonlisäverollinen hinta
$alvillinen_hinta = $alviton_loppusumma + $arvonlisavero;
echo "ALVillinen hinta on: $alvillinen_hinta";    // Tulostaa 124

// Funktion anna_alv määrittely
function anna_alv($maara) {
   $alv = $maara * 0.24;
   return $alv;
}
?>