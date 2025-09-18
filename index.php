<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$db->query("SELECT * FROM posts");
$posts = $db->query("SELECT * FROM posts")->fetchAll();


foreach($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
} 

