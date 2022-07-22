<?php

try{
    $db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');
} catch (PDOException $e) {
    echo "Nie można połączyć się z bazą danych";
    exit;
}


// $stmt = $db_conn->query('call get_recipes()');
// $results = $stmt->fetchAll();

try {
    $db_conn->beginTransaction();
    $db_conn->exec('UPDATE categories SET id=17 WHERE name = "Deser"');
    $db_conn->exec('UPDATE recipes SET category_id=17 WHERE category_id=3');
    $db_conn->commit();
} catch (PDOException $e) {
    $db_conn->rollBack();
    echo "Coś się nie udało: " . $e->getMessage();
    
}