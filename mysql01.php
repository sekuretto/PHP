<?php
// mysql01.php
$db = new PDO('mysql:host=mysql.labranet.jamk.fi;dbname=K8691;charset=utf8',
              'K8691', 'BZwtiGNhkjxs2ljslV0odVW5qtpwyGmy');

$results = $db->query('SELECT * FROM customer');

while($row = $results->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row['id']}: {$row['name']} {$row['birth_date']}<br>";
}
?>