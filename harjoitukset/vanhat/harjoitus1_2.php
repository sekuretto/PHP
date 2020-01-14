<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 2</title>
</head>
<body>
<form method="get" action="harjoitus1_2.php">
    Anna eurot:<br><input type="text" name="eurot"><br>
    <input type="submit" name="nappi" value="Lähetä">
</form>

<?php
    if (!isset($_REQUEST['nappi'])) exit;
    
    $markat = $_REQUEST['eurot'] * 5.95;
    
    echo "{$_REQUEST['eurot']} euroa on $markat markkaa.<br>";
?>
</body>
</html>