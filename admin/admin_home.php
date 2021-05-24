<?php
    session_start();

    if (!isset($_SESSION['admin_login'])) {
        header("location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="text-center mt-5">
        <div class="container">

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

            <h1>Admin page</h1>
            <hr>

            <h3>    
                <?php if(isset($_SESSION['admin_login'])) { ?>
                Welcome, <?php echo $_SESSION['admin_login']; } ?>
            </h3>
             <a href="../logout.php" class="btn btn-danger">Logout</a>       
        </div>
    </div>
    
</body>
</html>