<?php

$db_conn = new PDO('mysql:host=localhost;dbname=recipes','admin','');

// $sql = 'SELECT name,description, chef FROM recipes WHERE id = :recipe_id';
$sql = 'SELECT name,description, chef FROM recipes WHERE chef = ? AND category_id = ?';

$stmt = $db_conn->prepare($sql);

// $stmt->execute(array("recipe_id" => 1));
$stmt->execute(array("Sylwia",3));

$recipe = $stmt->fetch();