<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 2</title>
</head>
<body>
    
<form method="get"
      action="<?php echo $_SERVER['PHP_SELF']?>">
Anna eurot:<br><input type="text" name="eurot"><br>

<input type="submit" name="painike" value="Lähetä">
</form>

<?php
if (!isset($_GET['painike'])) exit();
$markat = 6 * $_GET['eurot'];

echo "<strong>{$_GET['eurot']}</strong> euroa on $markat markkoo!<br>";

?>

</body>
</html>