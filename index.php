<?php

require 'functions.php';
require 'router.php';
// whenever you have a .php file that only contains a class, it starts with a Capital
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);