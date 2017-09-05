
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/dbConnect.php';
try {
    $sql = 'DELETE FROM author WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error delete category.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
    exit();
}
?>