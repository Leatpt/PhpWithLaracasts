<?php

require 'functions.php';
//whenever you have a .php file that only contains a class, it starts with a Capital
require 'Database.php'; 
//require 'router.php';

$config = require('config.php');

$db = new Database($config);
$myapp = $db->query("select * from myapp")->fetchAll();

dd($myapp);