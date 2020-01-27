<html>
<head>
    <title>PHP-esimerkki: tulosta-tiedot2.php</title>
</head>
<body>
<form method="post" action="tulosta-tiedot2.php">
    Nimi:<br><input type="text" name="kokonimi"><br>
    S-vuosi:<br><input type="text" name="svuosi"><br>
    <input type="submit" name="nappi" value="Lähetä">
</form>

<?php
    if (!isset($_REQUEST['nappi'])) exit;
    
    $ika = 2018 - $_REQUEST['svuosi'];
    
    echo "Terve <strong>{$_REQUEST['kokonimi']}</strong><br>";
    echo "Ikäsi on <strong>$ika</strong><p>";
?>
</body>
</html>