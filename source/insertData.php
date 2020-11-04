<?php
include "dbhocsinh.php";
$connection = new qlSinhVien;
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
<title>Insert Student - MongoDB&PHP</title>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Add new stundent</b>
                </div>
                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="ten" id="" class="form-control" placeholder="Dien ho va ten o day">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mssv" id="" class="form-control" placeholder="Dien ma so sinh vien o day">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sdt" id="" class="form-control" placeholder="Dien so dien thoai o day">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="" class="form-control" placeholder="Dien email o day">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lop" id="" class="form-control" placeholder="Dien lop o day">
                        </div>
                        <div class="form-group">
                            <input type="text" name="quequan" id="" class="form-control" placeholder="Dien que quan o day">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Thêm" name="insert" class="btn btn-primary">
                        </div>
                        <?php
                        if(isset($_POST['ten'])){
                            if(!empty($_POST['ten']) && !empty($_POST['mssv']) && !empty($_POST['sdt'])
                            && !empty($_POST['email']) && !empty($_POST['lop']) && !empty($_POST['quequan'])){
                                $insertTable = $connection->insertData([
                                    'name' => $_POST['ten'],
                                    'mssv' => $_POST['mssv'],
                                    'phone' => $_POST['sdt'],
                                    'email' => $_POST['email'],
                                    'class' => $_POST['lop'],
                                    'address' => $_POST['quequan']
                                ]);
                                if($insertTable){
                                    ?>
                                            <div class="panel">
                                                <h3>The student has inserted</h3>
                                            </div>
                                    <?php      
                                }
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
        <?php

        ?>
        </div>    
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>