<?php

require 'functions.php';
// whenever you have a .php file that only contains a class, it starts with a Capital
require 'Database.php'; 
// require 'router.php';

$config = require('config.php');
$db = new Database($config['database']);

$id = ($_GET['id']);
// never inline user data into a query string 
// "select * from myapp where id = {$id}", either use ? or key-d wildcard parameter
$query = "select * from myapp where id = :id";


$myapp = $db->query($query, [':id' => $id])->fetch();

dd($myapp);