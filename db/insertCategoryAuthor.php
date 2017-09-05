<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/db/dbConnect.php';
    try{
        $sql = 'INSERT INTO author SET name = :name';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error adding submitted author.';
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/error/error.php';
        exit();
    }
?>