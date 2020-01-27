<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 3</title>
</head>
<body>
<form method="get" action="harjoitus1_3.php">
    Anna tähtien määrä:<br><input type="text" name="luku"><br>
    <input type="submit" name="nappi" value="Lähetä">
</form>

<?php
    if (!isset($_REQUEST['nappi'])) exit;
    
    $tahdet = $_REQUEST['luku'];
    for ($i = 0; $i < $tahdet; $i++)
    {
        echo "*";
    }
?>
</body>
</html>