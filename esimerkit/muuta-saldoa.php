<title>Parametrin välittäminen viittauksena -esimerkki</title>
<?php
// muuta-saldoa.php

// Pääohjelma
$saldo  = 100;
$muutos = -40;

// $saldo välitetään nyt viittauksena, koska 
// niin on määritelty funktion esittelyssä
// Huomaa, että funktion palauttamaa NULL-arvoa
// ei käytetä (sijoiteta) mihinkään.

muuta_saldo($saldo, $muutos);
echo "Saldo: $saldo<br>
";  // tulostaa: 60

// Vähennetään $saldoa toistamiseen
muuta_saldo($saldo, $muutos);
echo "Saldo: $saldo<br>
";    // tulostaa: 20

// Huomaa &-merkki muodollisen parametrin edessä: Viittaus
function muuta_saldo(&$local_saldo, $muutos) {
   $local_saldo = $local_saldo + $muutos;
   // Täällä ei ole return-lausetta, palautetaan siis NULL
}

?>