<?php
// Base Url for site
$base_url = "http://localhost:8000/cosmos";
// Use Composer here
require 'vendor/autoload.php';
include "library/bootstrap4.php";
include "library/css.php";
// Using Medoo namespace
use Medoo\Medoo;
// Initialize Your Database
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'zendtut',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);
?>
