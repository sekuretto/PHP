<?php
// Lähetetän PDF-dokumentti
header('Content-type: application/pdf');
 
// Käyttäjä näkee tiedoston nimellä downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');
 
// Alkuperäinen tiedosto voidaan generoida "lennosta" tai lukea
// esim. levyltä
readfile('print.pdf');
?>