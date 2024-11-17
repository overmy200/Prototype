<?php

    $open_connect = 1;
    require("connect.php");

    session_start();

    if(isset($_POST["email_account"]) && isset($_POST["password_account"])){
        $email_account = htmlspecialchars(mysqli_real_escape_string($connect , $_POST["email_account"]));
        $password_account = htmlspecialchars(mysqli_real_escape_string($connect , $_POST["password_account"]));
        $check_account = "SELECT * FROM account WHERE email_account = '$email_account'";
        $call_back_email = mysqli_query($connect , $check_account);

        if(mysqli_num_rows($call_back_email) == 1){
            $find_account = mysqli_fetch_assoc($call_back_email);
            $hash = $find_account["password_account"];
            $password_account = $password_account . $find_account["salt_account"];

            if (password_verify($password_account , $hash)){
                die(header("Location: index.php"));
            }
            else{
                $_SESSION['error_message'] = "Password ผิด";
                die(header("Location: index.php"));

            }

        }
        else{
            $_SESSION['error_message'] = "ไม่พบ Email";
            die(header("Location: index.php"));

        }

    }
    else{
        $_SESSION['error_message'] = "ไม่พบ Email หรือ Password ผิด";
        die(header("Location: index.php"));
    }
    
?>