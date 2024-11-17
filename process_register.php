<?php

$open_connect = 1;
require("connect.php");

session_start();

if (isset($_POST["username_account"]) && isset($_POST["email_account"]) && isset($_POST["password_account1"]) && isset($_POST["password_account2"])){
    
    $username_account = htmlspecialchars( mysqli_real_escape_string( $connect , $_POST["username_account"] ));
    $email_account = htmlspecialchars( mysqli_real_escape_string( $connect , $_POST["email_account"] ));
    $password_account1 = htmlspecialchars( mysqli_real_escape_string( $connect , $_POST["password_account1"] ));
    $password_account2 = htmlspecialchars( mysqli_real_escape_string( $connect , $_POST["password_account2"] ));

    if(empty($username_account)){
        die(header("Location: form_register.php"));
    }
    elseif(empty($username_account)){
        die(header("Location: form_register.php"));
    }
    elseif(empty($password_account1)){
        die(header("Location: form_register.php"));
    }
    elseif(empty($password_account2)){
        die(header("Location: form_register.php"));
    }
    elseif($password_account1 != $password_account2 or $password_account2 != $password_account1){
        $_SESSION['error_message'] = "Password ไม่ตรงกัน";
         die(header("Location: form_register.php"));
    }
    else{
        $check_email_account = " SELECT email_account FROM account WHERE email_account = '$email_account' ";
        $call_back_email = mysqli_query($connect , $check_email_account);
        if(mysqli_num_rows($call_back_email) > 0){
            $_SESSION['error_message'] = "Email นี้ถูกใช้แล้ว";
            die(header("Location: form_register.php")); // mysqli_num_rows , call_back_email มีมากกว่า 0
        }
        else{
            $length = random_int(97 , 128);
            $salt_account = bin2hex(random_bytes($length));
            $password_account1 = $password_account1 . $salt_account; // รวมรหัสกับค่าเกลือ
            $algo = PASSWORD_ARGON2ID;
            $options = [
                'cost' => PASSWORD_ARGON2_DEFAULT_MEMORY_COST ,
                'time_cost' >= PASSWORD_ARGON2_DEFAULT_TIME_COST ,
                'threads' >= PASSWORD_ARGON2_DEFAULT_THREADS ,
            ];

            $password_account = password_hash($password_account1 , $algo , $options);
            $primary_key = bin2hex(random_bytes(6));
            $query_create_account = "INSERT INTO account VALUES ('$primary_key' , '$username_account' , '$email_account' , '$password_account' ,'$salt_account' ,'member' , 'default_image_account.jpg' , '' , '' , '' )";
            $call_back_create_account = mysqli_query($connect , $query_create_account);

            if ($call_back_create_account){
                die(header("Location: index.php"));
            }
            else{
               // die("Error: " . mysqli_error($connect));
                die(header("Location: form_register.php")); 
            }

        }
    }

}
else{
    die(header("Location: form_register.php"));
}

?>