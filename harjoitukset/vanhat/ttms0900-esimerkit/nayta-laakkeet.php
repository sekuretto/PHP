<title>Näytä lääkkeet</title>
<?php
echo "<h3>Lääkkeet</h3>";
 
// Tarkistetaan, että jokin lääke on valittu
if (!isset($_GET['laake'])) {
   echo "Virhe: Et valinnut lääkettä!";
   exit();
}
 
// Näytetään kaikki valitut lääkkeet
foreach ($_GET['laake'] as $arvo) {
  echo "$arvo<br>\n";
}
?>