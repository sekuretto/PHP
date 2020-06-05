<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 5</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2>Haluatko miljonääriksi</h2>
<p>
1. Mikä seuraavista on oikea vastaus?<br>
<input type="radio" name="yksi" value="5">Oikea vastaus<br>
<input type="radio" name="yksi" value="0">Väärä vastaus<br>
<input type="radio" name="yksi" value="0">Väärä vastaus
</p>

<p>
2. Mitä kirjainlyhenne PHP tarkoittaa puhuttaessa Web-ohjelmoinnista?<br>
<select name="kaksi" size="1">
  <option selected value="ei valittu">
                 Valitse kieli</option>
  <option value="oikea">PHP: Hypertext Preprosessor</option>
  <option value="vaara">Pahuksen Hieno Programming-kieli</option>
  <option value="vaara">PHP: Hyper Prosessing</option>
</select>
</p>

<p>
3. PHP-skriptit<br>
<input type="checkbox" name="kolme" value="ON"> toimivat ainoastaan Unix- ja Linux-käyttöjärjestelmissä<br>
<input type="checkbox" name="kolme" value="ON"> tarvitsevat toimiakseen Perl-tulkin<br>
<input type="checkbox" name="kolme" value="ON"> ovat ohjelmakoodia, joka upotetaan HTML-sivun lomaan
</p>

<p>
4. PHP-kielessä<br>
<input type="checkbox" name="nelja" value="ON"> muuttujat on aina esiteltävä ennen käyttöä<br>
<input type="checkbox" name="nelja" value="ON"> toulukoissa voi käyttää ainoastaan kokonaislukuindeksejä<br>
<input type="checkbox" name="nelja" value="ON"> on boolean-tietotyyppi
</p>

<p>
Nimi:<br>
<input type="text" size="30" name="nimi"><br>
</p>
<input type="submit" name=painike value="Lähetä">

</form>

<?php
    /*$yksi = isset($_POST['yksi']) ? $_POST['yksi'] : '';
    $kaksi = $_POST['kaksi'];
    $kolme = $_POST['kolme'];
    $neljä = $_POST['nelja']; */
    $nimi = isset($_POST['nimi']) ? $_POST['nimi'] : '';
    // Muutetaan HTML-erikoismerkit HTML-entiteeteiksi
    $nimi = htmlspecialchars($nimi);
    $pisteet = 0;

    /*if ($yksi = 5) {
        $pisteet + 5;
    }*/

    echo "<p>Hei " + $nimi + ", sait kilpailun tulokseksi " + $pisteet + " pistettä.</p>"; 
    
?>

</body>
</html>