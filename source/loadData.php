<?php
session_start();
if($_SESSION['login'] <> 1) {echo "bạn chưa đăng nhập"; exit;}
echo "<a href='logout.php'><button class='btn'>Đăng xuất</button></a>";
?>
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
<title>Load Student - MongoDB & PHP</title>
</head>
<body>
    <script>
        // alert('hello, welcome to my website ^^');
    </script>
    <div class="container">
        <center>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Danh Sách Sinh Viên</h4>
                </div>
                <div class="panel-body">
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
                            foreach ($connection->fetchData() as $item) {
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
                        ?>
                    </table>
                </div>
            </div>
        </center>
        <div class="form-group">
            <a href="insertData.php"><input type="submit" name="insert" value="Thêm sinh viên" class="btn btn-primary"></a>
            <a href="findManyDT.php"><input type="submit" name="find_class" value="Tìm danh sách lớp" class="btn btn-default"></a>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>