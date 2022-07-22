<?php

$db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');

// $sql = 'SELECT name,description, chef FROM recipes WHERE id = :recipe_id';
$sql = 'SELECT name,description FROM recipes WHERE chef = :chef AND category_id = :category_id';

$stmt = $db_conn->prepare($sql);

// $stmt->execute(array("recipe_id" => 1));

$stmt->bindValue(':chef','Sylwia');

$stmt->bindValue(':category_id', 1);
$stmt->execute();
$przystawki = $stmt->fetch();

$stmt->bindValue(':category_id', 3);
$stmt->execute();
$desery = $stmt->fetch();