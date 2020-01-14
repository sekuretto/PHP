<?php
// HTTP/1.1 vaatii absoluuttisen URIn Location-otsakkeen argumentiksi
 
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "nayta-http-data.php"); 
?>