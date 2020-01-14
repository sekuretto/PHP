<?php
 
$kohde_kone = "netisto.fi";
$kohde_portti = 80;
$kohde_polku = "/index.php";
$pyyntometodi = "GET";
$html_osuus = FALSE;
$http_vastaus = '';
 
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
 
   // Luetaan HTTP-vastaus
   while (!feof($fp)) {
       $http_vastaus .= fgets($fp, 256);
   }
   fclose($fp);
}
 
$http_vastaus = str_replace("\r", "", $http_vastaus);
$rivit = explode("\n", $http_vastaus);
 
// Tulostetaan HTTP-vastauksesta vain data-osa eli
// HTML-osuus
foreach ($rivit as $arvo)
{
    // Ensimmäinen tyhjä rivi erottaa HTTP-otsakkeet data-
    // osasta eli HTML-osuudesta
    if ($arvo == "")
        $html_osuus = TRUE;
 
    if ($html_osuus)
        print($arvo. "\n");
}