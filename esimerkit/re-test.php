<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
Malli (RE):<br>
<input type="text" name="malli" size="40"
value="<?php if (isset($_GET['malli']))echo htmlspecialchars($_GET['malli']);?>">
<br>

Tutkittava merkkijono:<br>
<?php

echo "<textarea name='mjono' rows='3' cols='40'>";
if (isset($_GET['mjono']))echo htmlspecialchars($_GET['mjono']);
echo "</textarea>";
?>
<input type="submit" value="Tutki">
</form>
<hr>
<pre>
<?php

//Tulosten havainnollistamista varten

$s = <<< EOSSPAN
<span style="color:black;background-color:#ffff00">
EOSSPAN;
$e = "</span>";


if (isset($_GET['malli']) AND isset($_GET['mjono']))
{
   $n_malli = htmlspecialchars($_GET['malli']);
   $n_mjono = htmlspecialchars($_GET['mjono']);
   echo "Malli (RE) : $n_malli\n";
   echo "Merkkijono : $n_mjono\n";

   $pattern = "/{$_GET['malli']}/";
   if (preg_match($pattern, $_GET['mjono'], $matches))

        {
      echo "<strong>Löytyi seuraava osuma:</strong>\n";
     $match = htmlspecialchars($matches[0]);
      echo "matches[0] = $s$match$e\n\n";
      echo "<strong>Sulkulausekkeet:</strong>\n";
      $i = 0;
      foreach ($matches as $osuma)
      {
         if($i != 0) echo "matches[$i] = $s$osuma$e<br>";
         $i++;
      }
   }
        else
   {
      echo "<strong>Ei osumaa!</strong>";
   }
}
?>
</pre>
</body>
</html>
