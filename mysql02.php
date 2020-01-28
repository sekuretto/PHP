<?php
// mysql02.php
require_once("/home/K8691/db-config/db-init.php");
$results = $db->query('SELECT * FROM customer');

echo "<table border='1'>";

while($row = $results->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>\n";
}

echo "</table>";

?>