<?php

require 'functions.php';
//whenever you have a .php file that only contains a class, it starts with a Capital
require 'Database.php'; 


//require 'router.php';


$db = new Database();
$myapp = $db->query("select * from myapp")->fetchAll(PDO::FETCH_ASSOC);

dd($myapp);