<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $rschoose = $_POST['result'];
    $cl ="";
    if($rschoose == "0"){$cl = "";}
    if($rschoose == "A"){$cl = "K44CNTTA";}
    if($rschoose == "B"){$cl = "K44CNTTB";}
    if($rschoose == "C"){$cl = "K44CNTTC";}
    if($rschoose == "D"){$cl = "K44CNTTD";}
}
?>

<?php
require "vendor/autoload.php";
$connect = new MongoDB\Client;
$db = $connect->hocsinh;
$collec = $db->quanlySV;


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
<title>Danh sách sinh viên lớp</title>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Tìm kiếm danh sách lớp</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post">
                    <select name="result" class="form-control">
                        <option value="0" select="selected">----Chọn lớp----</option>
                        <option value="A">K44CNTTA</option>
                        <option value="B">K44CNTTB</option>
                        <option value="C">K44CNTTC</option>
                        <option value="D">K44CNTTD</option>
                    </select>
                    <br>
                    <input type="submit" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>   
        </div>
        
        <div class="panel-body">
            <h3>Lớp <?php echo $cl;?></h3>
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>ID SV</th>
                        <th>Name</th>
                        <th>MSSV</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Address</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <?php
                if($rschoose == "0"){
                    foreach($collec->find() as $item){
                        echo '<tr>
                                        <td>'.$item->_id.'</td>
                                        <td>'.$item->name.'</td>
                                        <td>'.$item->mssv.'</td>
                                        <td>'.$item->phone.'</td>
                                        <td>'.$item->email.'</td>
                                        <td>'.$item->class.'</td>
                                        <td>'.$item->address.'</td>
                                        <td><a href="deleteData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="delete" id="delete" class="btn btn-danger" value="Xóa"></a> 
                                            <a href="updateData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="edit" id="edit" class="btn btn-primary" value="Sửa"></a>
                                        </td> 
                                    </tr>
                                    ';
                    }
                }
                if($rschoose == "A"){
                    foreach($collec->find(['class' => 'K44CNTTA']) as $item){
                        echo '<tr>
                                        <td>'.$item->_id.'</td>
                                        <td>'.$item->name.'</td>
                                        <td>'.$item->mssv.'</td>
                                        <td>'.$item->phone.'</td>
                                        <td>'.$item->email.'</td>
                                        <td>'.$item->class.'</td>
                                        <td>'.$item->address.'</td>
                                        <td><a href="deleteData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="delete" id="delete" class="btn btn-danger" value="Xóa"></a> 
                                            <a href="updateData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="edit" id="edit" class="btn btn-primary" value="Sửa"></a>
                                        </td> 
                                    </tr>
                                    ';
                    }
                }
                if($rschoose == "B"){
                    foreach($collec->find(['class' => 'K44CNTTB']) as $item){
                        echo '<tr>
                                        <td>'.$item->_id.'</td>
                                        <td>'.$item->name.'</td>
                                        <td>'.$item->mssv.'</td>
                                        <td>'.$item->phone.'</td>
                                        <td>'.$item->email.'</td>
                                        <td>'.$item->class.'</td>
                                        <td>'.$item->address.'</td>
                                        <td><a href="deleteData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="delete" id="delete" class="btn btn-danger" value="Xóa"></a> 
                                            <a href="updateData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="edit" id="edit" class="btn btn-primary" value="Sửa"></a>
                                        </td> 
                                    </tr>
                                    ';
                    }
                }
                if($rschoose == "C"){
                    foreach($collec->find(['class' => 'K44CNTTC']) as $item){
                        echo '<tr>
                                        <td>'.$item->_id.'</td>
                                        <td>'.$item->name.'</td>
                                        <td>'.$item->mssv.'</td>
                                        <td>'.$item->phone.'</td>
                                        <td>'.$item->email.'</td>
                                        <td>'.$item->class.'</td>
                                        <td>'.$item->address.'</td>
                                        <td><a href="deleteData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="delete" id="delete" class="btn btn-danger" value="Xóa"></a> 
                                            <a href="updateData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="edit" id="edit" class="btn btn-primary" value="Sửa"></a>
                                        </td> 
                                    </tr>
                                    ';
                    }
                }
                if($rschoose == "D"){
                    foreach($collec->find(['class' => 'K44CNTTD']) as $item){
                        echo '<tr>
                                        <td>'.$item->_id.'</td>
                                        <td>'.$item->name.'</td>
                                        <td>'.$item->mssv.'</td>
                                        <td>'.$item->phone.'</td>
                                        <td>'.$item->email.'</td>
                                        <td>'.$item->class.'</td>
                                        <td>'.$item->address.'</td>
                                        <td><a href="deleteData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="delete" id="delete" class="btn btn-danger" value="Xóa"></a> 
                                            <a href="updateData.php?id='.$item['_id'].'"><input type="submit" style="width: 60px;" name="edit" id="edit" class="btn btn-primary" value="Sửa"></a>
                                        </td> 
                                    </tr>
                                    ';
                    }
                }
                ?>
            </table>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>