<title>2-ulotteisen taulukon läpikäynti Foreach-rakenteella</title>
<pre>
<?php

// foreach-esim3.php

// Tulostetaan 2-ulotteisen taulukon kaikki arvot
// foreach-rakenteella

$taulu[0]["nimi"]        = "Rantala";
$taulu[0]["gsmnro"]      = "040 001";
$taulu[0]["paikkakunta"] = "Jyväskylä";

$taulu[1]["nimi"]     = "Rasku";
$taulu[1]["gsmnro"]   = "040 002";

foreach ($taulu as $uloinavain => $sistaulu) {
   echo "**** Henkilön nro $uloinavain tiedot: ****";
   // Käydään läpi sisemmät taulut vuorollaan:
   foreach ($sistaulu as $avain => $arvo) {
      echo "  $avain = $arvo";
   }
}

?>
</pre>