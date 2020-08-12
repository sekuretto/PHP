<?php
// sessio-v01.php

session_start();

// $_SESSION['lkm'] alustetaan ensimmäisellä kerralla
if (!isset($_SESSION['lkm'])) $_SESSION['lkm'] = 0;

// Lisätään tämä sivulataus
$_SESSION['lkm']++;

// Tulostetaan latauskerrat
echo "Olet ladannut sivun <b>{$_SESSION['lkm']}</b> kertaa!";

?>