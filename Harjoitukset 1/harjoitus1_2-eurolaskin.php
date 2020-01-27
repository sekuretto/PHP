<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 2</title>
</head>
<body>
    
<?php

// jos lomakeelle on annettu arvo, käytetään sitä
$arvo = isset($_GET['eurot']) ? $_GET['eurot'] : '';

$lomake = <<<Markat
<form method="get"
      action="harjoitus1_2-eurolaskin.php">
Anna eurot:<br><input type="text" name="eurot" value="$arvo"><br>

<input type="submit" name="painike" value="Muunna markoiksi">
</form>
Markat;

echo $lomake;

if (!isset($_GET['painike'])) exit();

$markat = 6 * $arvo;
echo "<strong>$arvo</strong> euroa on $markat markkoo!<br>";

?>

</body>
</html>