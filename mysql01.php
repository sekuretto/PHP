<?php
// mysql01.php
$db = new PDO('mysql:host=mysql.labranet.jamk.fi;dbname=N1234;charset=utf8',
              'K8691', 'mjJEVf133cWUTxTVNtW9V8E3Q1RNxkqV');

$results = $db->query('SELECT * FROM customer');

while($row = $results->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row['id']}: {$row['name']} {$row['birth_date']}<br>";
}
?>