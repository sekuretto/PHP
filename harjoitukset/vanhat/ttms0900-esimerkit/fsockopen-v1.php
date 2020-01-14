<?php
 
$kohde_kone = "netisto.fi";
$kohde_portti = 80;
$kohde_polku = "/index.php";
$pyyntometodi = "GET";
 
$pyyntorivi = "$pyyntometodi $kohde_polku HTTP/1.1\r\n";
$otsakkeet  = "Host: $kohde_kone\r\n";
$otsakkeet .= "Connection: Close\r\n\r\n";
 
$fp = fsockopen($kohde_kone, $kohde_portti, $errno, $errstr, 30);
if (!$fp) {
   echo "$errstr ($errno)<br />\n";
} else {
   //Lähetetään HTTP-pyyntö ja otsakkeet
   fputs($fp, $pyyntorivi);
   fputs($fp, $otsakkeet);
 
   // Luetaan ja tulostetaan HTTP-vastaus
   while (!feof($fp)) {
       echo fgets($fp, 256);
   }
   fclose($fp);
}
?>