<?php
    $host = 'localhost:3307';
    $db = 'attendence_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset"; //data server name

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo '<h1 class="text-danger">No database found!</h1>';
        // throw new PDOException($e->getMessage());
    }

    require_once('crud.php');
    $crud = new crud($pdo);
?>