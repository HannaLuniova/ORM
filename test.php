<?php
include 'vendor/autoload.php';

use W1020\Db;
use W1020\Crud;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guest_book"
];

$db = new Db($config);

$gb = $db->query("SELECT * FROM `gb`");
//print_r($gb);

$crud = new Crud($config);
$crud->setTableName("gb");
$table = $crud->delete()->get();
print_r($table);

//$crud->setTableName("opros");
//$table = $crud->get();
//print_r($table);
