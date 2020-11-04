<?php
$id = $_GET['id'];
require "vendor/autoload.php";
$collection = (new MongoDB\Client)->hocsinh->quanlySV;

$findResult = $collection->findOne(
    [ '_id' => new MongoDB\BSON\ObjectID($id) ]
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Update Student - MongoDB&PHP</title>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Update stundent</b>
                </div>
                <div class="panel-body">
                    <form action="xl_update_Data.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" id="" class="form-control" value="<?php echo $findResult['_id']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ten" id="" class="form-control" value="<?php echo $findResult['name']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mssv" id="" class="form-control" value="<?php echo $findResult['mssv']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sdt" id="" class="form-control" value="<?php echo $findResult['phone']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="" class="form-control" value="<?php echo $findResult['email']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lop" id="" class="form-control" value="<?php echo $findResult['class']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="quequan" id="" class="form-control" value="<?php echo $findResult['address']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>