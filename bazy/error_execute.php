<?php

try{
    $db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');
} catch (PDOException $e) {
    echo "Nie można połączyć się z bazą danych";
    exit;
}

$sql = 'SELECT name,description, chef FROM recipes WHERE id = :recipe_id';

$stmt = $db_conn->prepare($sql);

if($stmt){
     //wykonanie
     $result = $stmt->execute(array(':recipe_id' => 1));

if($result){
    $recipe = $stmt->fetch();
    print_r($recipe);
} else {
    $error = $stmt->errorInfo();
    echo 'Wykonanie zapytania nie powiodło się' . $error[2];
}
}