<?php
require "vendor/autoload.php";
$connection = new MongoDB\Client("mongodb://localhost:27017");
$database = $connection->hocsinh;
$collection = $database->quanlySV;
// echo "connect!";
$id = $_GET['id'];
// echo $id;

$rs = $collection->deleteOne( ['_id' =>new MongoDB\BSON\ObjectID($id)] );
echo $rs->getDeletedCount();
if($rs){
    header("location:loadData.php");
}

?>