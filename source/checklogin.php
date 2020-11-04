<?php
require "vendor/autoload.php";
$connect = new MongoDB\Client();
$data = $connect->admin;
$collecion = $data->tkquanly;

session_start();

if(!isset($_POST['login_ok'])){
    exit;
}

$findRs = $collecion->findOne(["_id" => "1"]);

if($_POST['username'] == $findRs->username and $_POST['password'] == $findRs->password){
        $_SESSION['login'] = 1;
        header('location: loadData.php');
}
else{
    header('location: login.php');
}
?>