<?php
   session_start();

    /*
    if(isset($_SESSION['admin_login'])) {
        header("location: admin/admin_home.php");
    }

    if(isset($_SESSION['employee_login'])) {
        header("location: employee/employee_home.php");
    }

    if(isset($_SESSION['user_login'])) {
        header("location: user/user_home.php");
    }
    */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Login PHP & pdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h1 class="mt-5">Login Page</h1>
    <hr>
    <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <h3>
                        <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    <h3>
                </div>    
            <?php endif ?>

            <?php if(isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger">
                    <h3>
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    <h3>
                </div>    
            <?php endif ?>
            
        <form action="login_db.php" method="post" class="form-horizontal my-5">
        
        <label for="email" class="col-sm-3 control-lable">Email</label>
        <div class="col-sm-12">
            <input type="text" name="txt_email" class="form-control" required placeholder="Enter email">
        </div>

        <label for="password" class="col-sm-3 control-lable">Password</label>
        <div class="col-sm-12">
            <input type="password" name="txt_password" class="form-control" required placeholder="Enter password">
        </div>

        <div class="form-group">
            <lable for="type" class="col-sm-3 coltrol-label">Select Type</label>
            <div class="col-sm-12">
                <select name="txt_role" class="form-control">
                    <option value="" selected="selected">- Select Role - </option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="user">User</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12 mt-3">
                <input type="submit" name="btn_login" class="btn btn-success" style="width: 100%;" value="Login">
            </div>
        </div>
    
        <div class="form-group text-center">
            <div class="col-sm-12 mt-3">
                You don't have a account register here? 
                <p><a href="register.php">Register!</a></p>
            </div>
        </div>


        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>