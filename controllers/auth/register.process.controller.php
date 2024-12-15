<?php
    require("models/auth/auth.model.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $confirmPwd = $_POST['comfirm-pwd'];
        $pwdHash = password_hash($pwd,  PASSWORD_DEFAULT);


        if ($pwd !== $confirmPwd){
            $_SESSION["wrong-pwd"] = "Password doesn't match, please try again.";
            header("Location: /register");
        }else{
            unset($_SESSION["wrong-pwd"]);
            if(register($username, $email, $pwdHash)){
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $pwdHash;
                header("Location: /");
            }
        }
    }
?>