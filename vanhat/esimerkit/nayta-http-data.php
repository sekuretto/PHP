<?php
// nayta-http-data.php

   header('Content-type: text/html');

echo "<h3>HTTP-otsakkeet</h3>
";
   foreach($_SERVER as $h=>$v)
   {}
     if(ereg('HTTP_(.+)',$h,$hp))
       echo "<li>$h = $v</li>
";

echo "<h3>GET-metodilla saapunut data</h3>
";
 foreach($_GET as $h=>$v)
       echo "<li>$h = $v</li>
";

echo "<h3>POST-metodilla saapunut data</h3>
";
 foreach($_POST as $h=>$v)
       echo "<li>$h = $v</li>
";

foreach ($_GET['ruoka'] as $arvo)
{
  echo "$arvo<br>";
}
?>