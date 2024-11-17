<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Start inclue to php นะจ๊ะ -->
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- End inclue to php นะจ๊ะ -->
    <meta charset="UTF-8">
    <meta
        name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '
    <script src="script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>';
    ?>
    <header id="the_sidebar"></header>
    <script>
        $(function() {
            $('#the_sidebar').load('component/sidebar&hamburger.php');
            $('#the_sidebar').addClass('sticky-top');
        })
    </script>
    <main>
        <section>
            <div class="container mt-5">
                <h2 class="display-5 text-center">Welcome to my restaurant.</h2>
            </div>
        </section>
        <?php
        include 'component/carousel.php';
        ?>
    </main>

    <button data-bs-toggle="modal" data-bs-target="loginModal"></button>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="logo d-flex justify-content-center">
                    <img class="rounded-5" src="img/Logo.jpg" alt="">
                </div>
                    <form class="form-group mt-5 d-flex flex-column gap-3" action="process_login.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Email</label>
                            <input class="form-control p-2" name="email_account" , type="email" , placeholder="Email enter" , required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input class="form-control p-2" name="password_account" , type="password" , placeholder="Password" , required>
                        </div>
                        <?php
                        include 'check.php';
                        ?>
                        <button class="btn btn-success py-3" type="submit">Login</button>
                        <div class="form-group">
                            <input type="checkbox" class='me-2'>Remember me
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <p>Forgot: <a href="#">password?</a></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>