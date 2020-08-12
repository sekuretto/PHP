<?php
// sql-inject.php
require_once("/home/K8691/db-config/db-init.php");

echo "<code style='background-color: #eeb;'>{$_GET['id']} = {$_GET['id']}</code><br><br>";

$sql = "SELECT * FROM customer WHERE id = '{$_GET['id']}'";
echo "<code style='background-color: #eeb;'>SQL: $sql</code><br><br>";


$results = $db->query($sql);


echo "<table border='1'>";
while($row = $results->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";
}
echo "</table>";

?>