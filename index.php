<?php

require 'functions.php';
//require 'router.php';

//connect to MySQL database.

$dsn = "mysql:host=127.0.0.1;dbname=demo;port=3306;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM myapp WHERE id = 1");
$statement->execute();

$myapp = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($myapp as $post) {
    echo "<li>" . $post['title'] . "</li>";
}