<title>vuorovaikuta-v2.php</title>
<?php
// vuorovaikuta-v2.php

$kokonimi   = '';
$osoite     = '';
$hlotiedot  = '';
$taustavari = '';

if (isset($_GET['painike'])) {
   $kokonimi   = $_GET['kokonimi'];
   $osoite     = $_GET['osoite'];
   $taustavari = $_GET['taustavari'];
   $hlotiedot  = muotoile_hlotiedot($kokonimi, $osoite);
}

tulosta_sivun_alku();
tulosta_lomake($kokonimi, $osoite, $taustavari);
echo $hlotiedot;


// Huomaa: tulosta_lomake-funktion aluksi vaihdetaan
// HTML-moodiin, jotta HTML-kieltä voidaan kirjoittaa sellaisenaan

function tulosta_lomake($kokonimi, $osoite, $taustavari) {
$kokonimi = htmlspecialchars($kokonimi);
$osoite   = htmlspecialchars($osoite);
?>
<form method="get"
        action="<?php echo $_SERVER['PHP_SELF'];?>">
Nimi:<br><input type="text" name="kokonimi" value="<?php
                echo $kokonimi;?>"><br>
Osoite:<br><input type="text" name="osoite" value="<?php
                echo $osoite;?>"><br>
Taustaväri:<br>
<select name="taustavari" size="1">
<option value="#ffffff">Valitse taustaväri</option>
<option value="#ffff00"
<?php if ($taustavari == "#ffff00")echo "selected"?>>
Keltainen</option>
<option value="#ff0000"
<?php if ($taustavari == "#ff0000") echo "selected"?>>
Punainen</option>
<option value="#0000ff"
<?php if ($taustavari == "#0000ff") echo "selected"?>>
Sininen</option>
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

   $aikaleima = time();
   echo "<body bgcolor='{$_GET['taustavari']}'>";
   echo "<a href='{$_SERVER['PHP_SELF']}?tt=$aikaleima'>";
   echo "Aloita alusta</a>";
}

function muotoile_hlotiedot($kokonimi, $osoite) {
   $html = "<hr>" .
           "Terve <strong>$kokonimi</strong><br>" .
           "Osoitteesi on <strong>$osoite</strong><p>" .
           "<hr>";
   return $html;
}

?>