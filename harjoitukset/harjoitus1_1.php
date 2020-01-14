<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 1</title>
</head>
<body>

<form method="post"
      action="<?php echo $_SERVER['PHP_SELF']?>">
Mikä on painosi kiloina?<br><input type="text" name="paino"><br>

<input type="submit" name="painike" value="Lähetä">
</form>

<?php
if (!isset($_POST['painike'])) exit();
$laiha = $_POST['paino'] - 5;

echo "Mikä on painosi kiloina: <strong>{$_POST['paino']}</strong><br>";
echo "Minun painoni on <strong>$laiha</strong>, sinulla taitaa olla paino-ongelmia?";

?>

</body>
</html>