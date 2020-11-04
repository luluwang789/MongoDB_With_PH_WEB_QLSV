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
<title>Login My Website</title>
</head>
<body>
        <div class="container">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Đăng Nhập</h2>
                    </div> 
                    <div class="panel-body">
                        <form action="checklogin.php"  method="post">
                            <div class="form-group">
                                <h4>Username</h4>
                                <input type="text" name="username" id="" class="form-control" placeholder="Tài khoảng">
                            </div>
                            <div class="form-group">
                                <h4>Password</h4>
                                <input type="text" name="password" id="" class="form-control" placeholder="Mật khẩu">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="ĐĂNG NHẬP" name="login_ok" class="btn btn-primary">
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