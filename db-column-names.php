<?php
// db-column-names.php
require_once("/home/K8691/db-config/db-init.php");

$sql = <<<EOSql
SELECT id,
  name as nimi,
  DATE_FORMAT(created_at, "%d.%m.%Y %H:%i:%s") AS luotu
FROM customer
EOSql;

$results = $db->query($sql);

$printColumnNames = TRUE;
echo "<table border='1'>";
while($row = $results->fetch(PDO::FETCH_ASSOC)) {
    if ($printColumnNames) {
        echo "<tr>";
        foreach ($row as $avain => $arvo) {
            echo "<th>" . ucfirst($avain) . "</th>";
        }
       echo "</tr>";
        $printColumnNames = FALSE;
    }
        echo "<tr>";
        foreach ($row as $arvo) {
            echo "<td>$arvo</td>";
        }
       echo "</tr>";
}
echo "</table>";

?>