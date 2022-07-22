<?php

// $db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');

// $sql = 'UPDATE recipes SET category_id = :id WHERE category_id is NULL';

// $stmt = $db_conn->prepare($sql);

// $stmt->execute(array(':id' => 2));
// echo $stmt->rowCount() . 'wierszy zmodyfikowanych';



$db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');

$stmt = $db_conn->prepare('DELETE FROM categories WHERE name = :name');

$stmt->execute(array(':name' => 'Przystawka'));
echo $stmt->rowCount() . 'wierszy usuniętych';
