<!DOCTYPE html>

<head>
    <title>PHP-esimerkki: tulosta-tiedot.php</title>
</head>

<?php
$ika = 2019 - $_POST['vuosi'];

echo "Terve <strong>{$_POST['nimi']}</strong><br>";
echo "Osoitteesi on <strong>{$_POST['osoite']}</strong><p>";
echo "Ikäsi on <strong>$ika</strong><p>";
?>

</html>