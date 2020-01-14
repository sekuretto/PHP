<title>Taulukon läpikäynti For-rakenteella</title>
<?php
//for-esimerkki.php

$ruoka[] = "Tomaatti"; //ruoka[0]
$ruoka[] = "Pinaatti"; //ruoka[1]
$ruoka[] = "Salaatti"; //ruoka[2]
$ruoka_lkm = count($ruoka);

for($i = 0; $i < $ruoka_lkm; $i++) {
   print("Ruoka $i on
   $ruoka[$i]<br>
");
}
?>