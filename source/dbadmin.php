<?php
include "vendor/autoload.php";

class admin{
    function __construct(){
        $this->connectadmin = (new MongoDB\Client)->admin->tkquanly;
    }
    //check account
}
?>