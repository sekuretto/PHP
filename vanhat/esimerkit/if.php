<title>Esimerkki If-rakenteesta</title>
<?php
// if-esimerkki.php
$nimi = "Kaveri";
$ika = 36;
if ($ika < 0) { // Jos ika on pienempi kuin nolla {
   echo "$nimi ei vielä ole syntynyt
";
}
else if ($ika < 18) { // muutoin jos ika on pienempi kuin 18
   echo "$nimi ei ole täysi-ikäinen
";
}
else {
   echo "$nimi on täysi-ikäinen
";
}
?>