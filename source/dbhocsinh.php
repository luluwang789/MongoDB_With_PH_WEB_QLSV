<?php
require "vendor/autoload.php";

class qlSinhVien{
    function __construct(){
        $this->connect = (new MongoDB\Client)->hocsinh->quanlySV;
    }
    // loadDataMongoDB
    public function fetchData(){
        return $this->connect->find();
    } 
    // insertDataMongoDB
    public function insertData($insertItem = []){
        if(empty($insertItem)){
            return false;
        }
        //we have some data, so insert them all
        $insertItem = $this->connect->insertOne([
            'name' => $insertItem['name'],
            'mssv' => $insertItem['mssv'],
            'phone' => $insertItem['phone'],
            'email' => $insertItem['email'],
            'class' => $insertItem['class'],
            'address' => $insertItem['address']
        ]);
        // return this inserted documents mongodb id
        return $insertItem->getInsertedId();
    }

    
}

?>