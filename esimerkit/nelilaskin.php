<?php
// Muuttujat määritellään asettamalla niille arvo
// Tyyppi määräytyy sijoitetun arvon mukaan
$luku1 = 6;
$luku2 = 2;

$summa    = $luku1 + $luku2; // Yhteenlasku
$erotus   = $luku1 - $luku2; // Vähennyslasku
$tulo     = $luku1 * $luku2; // Kertolasku
$osamaara = $luku1 / $luku2; // Jakolasku

// Vaihtoehtoisia tulostustapoja
echo $luku1 . "+" . $luku2 . "=" . $summa . "<br>";
echo $luku1 . "-" . $luku2 . "=" . $erotus . "<br>";
echo "$luku1*$luku2=$tulo<br>";
echo "$luku1/$luku2=$osamaara<br>";
?>