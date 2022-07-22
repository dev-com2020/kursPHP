<?php

try{
    $db_conn = new PDO('mysql:host=localhost;dbname=recipes','root','');
} catch (PDOException $e) {
    echo "Nie można połączyć się z bazą danych";
    exit;
}

$sql = 'SELECT name,description, chef FROM recipes WHERE id = :recipe_id';


try {
    $stmt = $db_conn->prepare($sql);

    if($stmt){
        //wykonanie
        $stmt->execute(array(':recipe_id' => 1));
    $recipe = $stmt->fetch();
    }
} catch (PDOException $e) {
    echo "Wystąpił błąd z bazą danych: " . $e->getMessage();
}