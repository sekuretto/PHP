<title>Esimerkki Switch-rakenteesta</title>
<pre>
<?php
// switch-esim.php
$n1 = 36;
$n2 = 10;
$action = "erotus";

switch ($action)
{
   case "summa": // Jos muuttujan $action arvo on "summa", suoritetaan rivit:
      echo $n1, " + ", $n2, " = ", $n1 + $n2, "
";
      break;
   case "erotus":
      echo $n1, " - ", $n2, " = ", $n1 - $n2, "
";
      break;
   case "tulo":
      echo $n1, " * ", $n2, " = ", $n1 * $n2, "
";
      break;
   case "osamaara":
      echo $n1, " / ", $n2, " = ", $n1 / $n2, "
";
      break;
   default:
      echo "Virhe: Laskutoimitusta ei ole määrittelty";
      break;
}
?>
</pre>