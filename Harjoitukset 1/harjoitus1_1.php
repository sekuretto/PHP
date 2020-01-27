
<?php
//if (!isset($_POST['painike'])) exit();
$laiha = $_POST['paino'] - 5;

echo "Mikä on painosi kiloina: <strong>{$_POST['paino']}</strong><br>";
echo "Minun painoni on <strong>$laiha</strong>, sinulla taitaa olla paino-ongelmia?";

?>
