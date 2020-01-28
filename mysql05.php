<?php
// mysql05.php
require_once("/home/K8691/db-config/db-init.php");

// Ota kommentti pois, jos et halua syöttää id:tä URLin avulla
//$_GET['id'] = 1;

$sql     = "SELECT * FROM customer WHERE id = :id";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();

echo "<table border='1'>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";
}
echo "</table>";

?>