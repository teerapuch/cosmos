<?php
// Use Composer here
require 'vendor/autoload.php';
include "library/bootstrap4.php";
$base_url = "http://localhost:8000/cosmos";
// Using Medoo namespace
use Medoo\Medoo;
// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'zendtut',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);
?>
