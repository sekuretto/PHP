<title>vuorovaikuta-v1.php</title>
<?php
// vuorovaikuta-v1.php
 
// Pääohjelma sisältää vain kutsut funktioihin
tulosta_sivun_alku();
tulosta_lomake();
 
// Henkilötiedot näytetään vain, jos painiketta on painettu
if (isset($_GET['painike'])) {
   tulosta_hlotiedot();
}
 
// Huomaa: tulosta_lomake()-funktion aluksi vaihdetaan
// HTML-moodiin, jotta HTML-kieltä€ voidaan kirjoittaa sellaisenaan
 
function tulosta_lomake() {
?>
<form method="get"
        action="<?php echo $_SERVER['PHP_SELF'];?>">
Nimi:<br><input type="text" name="kokonimi"><br>
Osoite:<br><input type="text" name="osoite"><br>
Taustaväri:<br>
<select name="taustavari" size="1">
  <option value="#ffffff">Valitse taustaväri</option>
  <option value="#ffff00">Keltainen</option>
  <option value="#ff0000">Punainen</option>
  <option value="#0000ff">Sininen</option>
</select><p>
<input type="submit" name="painike"
       value="Lähetä/Muuta tietosi">
</form>
 
<?php
}
 
function tulosta_sivun_alku() {
   // Taustaväriä ei ole vielä valittu mm. ensimmäisellä
   // Siinä tapauksessa käytetään valkoista
   if (!isset($_GET['taustavari'])) {
      $_GET['taustavari'] = "#ffffff";
   }
   echo "<body bgcolor='{$_GET['taustavari']}'>";
}
 
function tulosta_hlotiedot() {
   echo "<hr>";
   echo "Terve <strong>{$_GET['kokonimi']}</strong><br>";
   echo "Osoitteesi on <strong>{$_GET['osoite']}</strong><p>";
   echo "<hr>";
}
 
?>