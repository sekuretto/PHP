<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 3: Tehtävä 2</title>
</head>
<body>
<h3 style=background-color:#fed;color:#000>Autolaskuri</h3>
<?php
// autolaskuri-v1.php
 
// Pääohjelma
session_start();
$vw_lkm = isset($_SESSION['vw_lkm']) ? $_SESSION['vw_lkm'] : 0;    
$opel_lkm = isset($_SESSION['opel_lkm']) ? $_SESSION['opel_lkm'] : 0;    
$painike = '';
 
if (isset($_POST['painike'])) {
   $vw_lkm   =  $_SESSION['vw_lkm'];
   $opel_lkm = $_SESSION['opel_lkm'];
   $painike  = $_POST['painike'];
}

laske_lkm($vw_lkm, $opel_lkm, $painike);
tee_lomake($vw_lkm, $opel_lkm);
nayta_tulokset($vw_lkm, $opel_lkm);
 
// Alustetaan tai päivitetään autojen lukumääriä:
// Muodolliset parametrit ovat viittauksia, joten
// muutetut arvot välittyvät "takaisin" kutsuvaan
// ohjelmalohkooon
function laske_lkm(&$vw_lkm, &$opel_lkm, $nappi) {
   // Jotakin autonappia painettu, lisätään kertymää
   if ($nappi == "VW") {
      $_SESSION['vw_lkm']++;
   }
   elseif ($nappi == "Opel") {
      $_SESSION['opel_lkm']++;
   }
   // Painettiin Nollaa-painiketta tai pyydetään sivua ekaa kertaa
   else {
      $_SESSION['vw_lkm'] = 0;
      $_SESSION['opel_lkm'] = 0;
   }
}
 
function nayta_tulokset($vw_lkm, $opel_lkm) {
   echo "<pre>\n";
   echo "Volkswagenit ... : $vw_lkm kpl.\n";
   echo "Opelit ......... : $opel_lkm kpl.\n";
   echo "</pre>\n";
}
 
// Tehdään lomake piilokenttineen
function tee_lomake($vw_lkm, $opel_lkm) {
?>
   <!--
     Oleellista on pitää yllä _samassa_ lomakkeessa
     kaikkien autojen kertymiä
   -->
   <form method="post" action="<?php echo $_SERVER{'PHP_SELF'}?>">
   <input type="hidden"
   value="<?php echo "$vw_lkm"?>" name="vw_lkm">
   <input type="hidden"
   value="<?php echo "$opel_lkm"?>" name="opel_lkm">
 
   <!--
    Huomaa useat samannimiset painikkeet: Arvona välittyy
    *vain* sen painikkeen arvo, jota painettiin!
   -->
 
   <input type="submit" value="VW" name="painike">
   <input type="submit" value="Opel" name="painike">
   <input type="submit" value="Nollaa" name="painike">
   </form>
<?php
}
 
?>
    
</body>
</html>