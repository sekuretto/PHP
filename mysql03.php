<?php
// mysql03.php
require_once("/home/K8691/db-config/db-init.php");

//-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
// Lisätään yksi tietue
$sql ="INSERT INTO customer VALUES(6, 'Mieli Kaino', '2011-01-01', (select now()))";
$affected_rows = $db->exec($sql);
echo "<br>" . $affected_rows . " riviä lisättiin:<br>";

print_customers($db);

//-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
// Päivitetään yksi tietue
$sql ="UPDATE customer SET birth_date = '2019-01-09' WHERE name = 'Mieli Kaino'";
$affected_rows = $db->exec($sql);
echo "<br>" . $affected_rows . " riviä muutettiin:<br>";

print_customers($db);

//-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
// Poistetaan yksi tietue
$sql ="DELETE FROM customer WHERE name = 'Mieli Kaino'";
$affected_rows = $db->exec($sql);
echo "<br>" . $affected_rows . " riviä poistettiin:<br>";

print_customers($db);

//-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
// Tulostetaan customer-taulu HTML-taulukkona
function print_customers($db) {
  $result = $db->query('SELECT * FROM customer');
  $row_count = $result->rowCount();
  echo "Näytetään " . $row_count. " riviä:<br>";

  echo "<table border='1'>";
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['birth_date']}</td></tr>";
  }
  echo "</table>";
}
?>