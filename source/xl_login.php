<?php
require "vendor/autoload.php";

$connect = new MongoDB\Client("mongodb://localhost:27017");
$db = $connect->admin;
$collec = $db->tkquanly;

echo "connect";
?>