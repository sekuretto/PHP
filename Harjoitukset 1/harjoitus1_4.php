<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 1: Tehtävä 4</title>
</head>
<body>

<?php
    $kuva1 = rand(1,5);
    $kuva2 = rand(1,5);
    $kuva3 = rand(1,5);
    
    echo "<img src='$kuva1.jpg' />";
    echo "<img src='$kuva2.jpg' />";
    echo "<img src='$kuva3.jpg' />";

?>