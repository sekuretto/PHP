<title>Staattinen muuttuja laskurina</title>
<?php
// static-counter.php

function huonoLaskuri() {
   if (isset($count)) {
      $count++;
   } else {
      $count = 0;
   }
   echo "huonoLaskuri: $count<br>";
}

function hyvaLaskuri() {
   static $count = 0; // sijoitetaan 0 ensimmäisellä kerralla
   $count++;
   echo "hyvaLaskuri: $count<br>";
}

// Molempia funktioita kutsutaan erikseen 3 kertaa
for ($i = 1; $i <= 3; $i++) {
   huonoLaskuri();
}

for ($i = 1; $i <= 3; $i++) {
   hyvaLaskuri();
}
?>