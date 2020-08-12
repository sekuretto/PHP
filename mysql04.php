<?php
// mysql04.php

try {
  require_once("/home/K8691/db-config/db-init.php");
  $result = $db->query('SELECT * FROM XcustomerX');
} catch(PDOException $ex) {
  echo "ErrMsg to enduser!<hr>";
  echo "CatchErrMsg: " . $ex->getMessage() . "<hr>";
}

while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row['id']}, {$row['name']}<br>";
}
?>