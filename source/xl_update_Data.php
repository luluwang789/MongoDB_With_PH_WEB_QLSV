<?php
require "vendor/autoload.php";
$connection = new MongoDB\Client("mongodb://localhost:27017");
$database = $connection->hocsinh;
$collection = $database->quanlySV;
// echo "connect";
$id = $_POST['id'];
$name = $_POST['ten'];
$mssv = $_POST['mssv'];
$phone = $_POST['sdt'];
$email = $_POST['email'];
$class = $_POST['lop'];
$address = $_POST['quequan'];


$updatedResult = $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectId($id)],
    ['$set' => [
            'name'    => $name,
            'mssv'  => $mssv,
            'phone' => $phone,
            'email' =>  $email,
            'class' => $class,
            'address' => $address
        ],
    ]
);


if($updatedResult){
    header("location: loadData.php");
}


?>