<?php
//    /home/N1234/db-config/db-init.php (mysqlyhteystiedot)
$db = new PDO('mysql:host=mysql.labranet.jamk.fi;dbname=K8691;charset=utf8',
              'K8691', 'mjJEVf133cWUTxTVNtW9V8E3Q1RNxkqV');

//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>