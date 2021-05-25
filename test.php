<?php
include 'vendor/autoload.php';

use W1020\Db;
use W1020\CRUD;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook"
];

$crud = new CRUD($config);
$crud->setTableName("ved");
$crud->setIdName("nomer");
$table = $crud->get();
print_r($table);

$crud->del(4);
$crud->ins(["fio" => "Vova", "zp" => 600]);
$crud->ins(["fio" => "Ania", "zp" => 350]);

$crud->upd(3,["fio" => "Olia", "zp" => 150]);



