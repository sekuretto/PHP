<?php
$hakemisto = dirname($_SERVER['SCRIPT_FILENAME']);
 
system("zip -r $hakemisto/paku.zip *");
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="paku.zip"');
 
readfile('paku.zip');
unlink("$hakemisto/paku.zip");
?>