<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="mt-3">Register Form</h1>
        <hr>

        <form action="register_db.php" method="post" class="form-horizontal my-5">

        <div class="form-group"> 
            <label for="username" class="col-sm-3 control-label">Username</label>
            <div class="col-sm-12">
                <input type="text" name="txt_username" class="form-control" required placeholder="Enter username">
            </div>   
        </div>

       <div class="form-group">
       <label for="email" class="col-sm-3 control-lable">Email</label>
            <div class="col-sm-12">
            <input type="text" name="txt_email" class="form-control" required placeholder="Enter email">
            </div>
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
                <input type="submit" name="btn_register" class="btn btn-primary" style="width: 100%;" value="Register">
            </div>
        </div>
    
        <div class="form-group text-center">
            <div class="col-sm-12 mt-3">
                Already have an account ? 
                <p><a href="index.php">Login!</a></p>
            </div>
        </div>


        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>