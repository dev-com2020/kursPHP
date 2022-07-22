<?php

$db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');

// $sql = 'SELECT name,description, chef FROM recipes WHERE id = :recipe_id';
$sql = 'SELECT recipes.name, recipes.description, categories.name as category FROM recipes
        INNER JOIN categories ON categories.id = recipes.category_id WHERE recipes.chef = :chef AND categories.name = :category_name';

$sql2 = 'INSERT INTO recipes (name,description,chef,created) VALUES (:name, :description, :chef, NOW())';        


// $stmt = $db_conn->prepare($sql);
$stmt = $db_conn->prepare($sql2);

$stmt->execute(array(
    ':name' => 'Pizza',
    ':description' => 'Bardzo dobra pizza...',
    ':chef' => 'Sylwia'
));

echo "ID nowego przepisu: " . $db_conn->lastInsertId();


// $stmt->bindValue(':chef','Sylwia');
// $stmt->bindParam(':category_name',$category);

// // $stmt->bindValue(':category_id', 1);
// $category = "Przystawka";
// $stmt->execute();
// $przystawki = $stmt->fetchAll();

// // $stmt->bindValue(':category_id', 3);
// $category = 'Deser';
// $stmt->execute();
// $desery = $stmt->fetchAll();

