<?php
// mysql06.php
require_once("/home/N1234/db-config/db-init.php");

//-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
// Lisätään yksi tietue
// "Ulkoinen data":
$id = 6;
$nimi = 'Mieli Kaino';
$pvm = '2011-01-01';


$sql ="INSERT INTO customer VALUES(:id, :nimi, :pvm, (select now()))";
$stmt = $db->prepare($sql);
$bind_array = array(':id' => $id, ':nimi' => $nimi, ':pvm' => $pvm);

$affected_rows = $stmt->execute($bind_array);
echo "<br>" . $affected_rows . " riviä lisättiin:<br>";

print_customers($db);

//-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
// Päivitetään yksi tietue
// "Ulkoinen data":
$pvm = '2019-01-09';

$sql ="UPDATE customer SET birth_date = :pvm WHERE name = 'Mieli Kaino'";
$stmt = $db->prepare($sql);
$stmt->bindValue(':pvm', $pvm, PDO::PARAM_STR);
$affected_rows = $stmt->execute();
echo "<br>" . $affected_rows . " riviä muutettiin:<br>";

print_customers($db);

//-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
// Poistetaan yksi tietue
// "Ulkoinen data":
$nimi = 'Mieli Kaino';

$sql ="DELETE FROM customer WHERE name = :nimi";
$stmt = $db->prepare($sql);
$stmt->bindValue(':nimi', $nimi, PDO::PARAM_STR);
$affected_rows = $stmt->execute();

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