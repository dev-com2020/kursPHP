<?php

$db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');

// wykonanie zapytania
$stmt = $db_conn->query('SELECT name, chef FROM recipes');

// wyświetlanie wyniku #1
while($row = $stmt->fetch()) {
    echo $row['name'] . ': autor'. $row['chef'] . "<br>";
}

// wyświetlanie wyniku #2
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result);



