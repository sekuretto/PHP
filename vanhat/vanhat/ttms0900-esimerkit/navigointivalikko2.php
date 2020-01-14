<?php
//navigointivalikko2.php

function tee_linkit($valikko)
{
   $path_parts = explode("/", $_SERVER['PHP_SELF']); //Polku
   $filename = array_pop($path_parts); //Tiedoston nimi
   $html = ""; //Valikon alustus

   foreach($valikko as $avain => $arvo)
   {
       if ($filename == $arvo) // Käsillä oleva tiedosto
       {                       // Ei linkkiä
          $html .= "[ $avain ]";
       }
       else
       {
          $html .= "[ <a href=$arvo>$avain</a> ]";
       }
   }
       return $html;
}

$valikko = array("Etusivu" => "index.php",
                 "Tuotteet" => "tuotteet.php",
                 "Navigointivalikko" => "navigointivalikko2.php",
                 "Henkilökunta" => "henkilokunta.php");
$linkit = tee_linkit($valikko);
print $linkit;
?>