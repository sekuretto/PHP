<?php
// evaste-v01.php

// Jos selain lähetti sivun latauskertojen lukumäärän evästeenä (laskuri),
// käytetään sitä, muuten tulkitaan aiemmisi latauskerroiksi 0
$lkm = isset($_COOKIE['lkm']) ? $_COOKIE['lkm'] : 0;

// Lisätään tämä sivulataus
$lkm++;

// Tulostetaan latauskerrat
echo "Olet ladannut sivun <b>$lkm</b> kertaa!";

// Tallennetaan nykyiset latauskerrat selaimen evästeeksi
setcookie ("lkm", "$lkm" , time()+86400);