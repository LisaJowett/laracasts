<?php

require 'functions.php';
//require 'router.php';

$dsn = "mysql:host=127.0.0.1;dbname=myapp;port3306;user=root;password=password;charset=utf8mb4";

$pdo = new PDO($dsn, 'root', 'password');

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

dd($posts);