<?php
// Base Url for site
$base_url = "http://localhost:8000/cosmos";
// Use Composer here
require 'vendor/autoload.php';
include "library/bootstrap4.php";
// Using Medoo namespace
use Medoo\Medoo;
// Initialize Your Database
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'cosmos',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);

function anchor($content, $attributes = array())
{
    $attr = parse_html($attributes);
    echo '<a '.$attr.'>';
    echo $content;
    echo '</a>';
}
// for css
function css($css)
{
    $base_url = '';
    echo "<link href=".$base_url."assets/css/".$css." rel='stylesheet' >";
}
// for javascript
function js($js)
{
    $base_url = '';
    echo "<script type='text/javascript' src='".$base_url."assets/js/".$js."'></script>";
}

?>
