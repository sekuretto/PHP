<?php
// Heittomerkit
$mja = 36;
$str = 'James O\'Neill is $mja years old';
echo $str; // Tulostaa: James O'Neill is $mja years old

// Lainausmerkit
$mja = 54;
$_POST['nimi'] = "Ari";

// Seuraavat rivit tulostavat kumpikin
// Ari on 54-vuotias
echo $_POST['nimi'] . " on " . $mja . "-vuotias";
echo "{$_POST['nimi']}  on $mja-vuotias";

// Heredoc-syntaksi
$mja = 54;
$_POST['nimi'] = "Ari";

$lomake = <<<EOLomake
<form action="softa.php" method="get">
<input type='text' name="nimi" value="{$_POST['nimi']}">
<input type='text' name="ika" value="$mja">
<input type='submit' name="nappi">
</form>
EOLomake;

// Tulostaa lomakkeen muuttujien arvoineen
echo $lomake;
?>