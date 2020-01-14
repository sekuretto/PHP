<html>
<head>
    <title>PHP-esimerkki: tulosta-tiedot.php</title>
</head>
<body>
<?php
echo "Terve <strong>{$_POST['kokonimi']}</strong><br>";
echo "Osoitteesi on <strong>{$_REQUEST['osoite']}</strong><p>";
//request löytää sekä GET että POST
    ?>
</body>
</html>