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
    <title>Register</title>
</head>

<body>
    <?php
    echo '<script src="jquery.js"></script>';
    include 'component/sidebar&hamburger.php';
    '<script src="js/bootstrap.bundle.min.js"></script>';
    ?>
    <div class="container mt-5 d-flex flex-column align-items-center justify-content-center">
        <h1>Register</h1>
        <form class="form-group mt-5 d-flex flex-column gap-3 w-50" action="process_register.php" method="POST">
            <div>
                <input class="form-control p-2" name="username_account" , type="text" , placeholder="Username" , required>
            </div>
            <div>
                <input class="form-control p-2" name="email_account" , type="email" , placeholder="Email" , required>
            </div>
            <div>
                <input class="form-control p-2" name="password_account1" , type="password" , placeholder="Password" , required>
            </div>
            <div>
                <input class="form-control p-2" name="password_account2" , type="password" , placeholder="Confirm Password" , required>
                <?php
                    include 'check.php';
                ?>
            </div>
            <button class="btn btn-success py-3" type="submit">Sign-In</button>
        </form>
        <div class="d-flex col-6 text-start">
            <a class="nav-link" href="form_login.php">มีบัญชีแล้วใช่ไหม?</a>
        </div>
        <?php
            '<script src="script.js"></script>';
            include 'component/select_role.php';
        ?>
    </div>
</body>

</html>