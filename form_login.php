<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    echo '<script src="jquery.js"></script>
    <script src="script.js"></script>';
    include 'component/sidebar&hamburger.php';
    '<script src="js/bootstrap.bundle.min.js"></script>';
    ?>
    <div class="container mt-5 d-flex flex-column align-items-center justify-content-center">
        <h1>Login</h1>

        <form class="form-group mt-5 d-flex flex-column gap-3 w-50" action="process_login.php" method="POST">
            <div>
                <input class="form-control p-2" name="email_account" , type="email" , placeholder="Email" , required>
                
            </div>
            <div>
                <input class="form-control p-2" name="password_account" , type="password" , placeholder="Password" , required>
            </div>
            <?php
                    include 'check.php';
                ?>
            <button class="btn btn-success py-3" type="submit">Login</button>
        </form>
        <div class="d-flex justify-content-start col-6">
            <a class="nav-link" href="form_register.php">สร้างบัญชีใหม่</a>
        </div>
    </div>
</body>

</html>