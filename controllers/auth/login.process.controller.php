<?php
    require("models/auth/auth.model.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $user = login($email);
        if(! empty($user)){
            if(password_verify($pwd, $user["pwd"])){
                unset($_SESSION["user-not-found"]);
                $_SESSION["username"] = $user["username"];
                header("Location: /");
            }else{
                $_SESSION["wrong-pwd"] = "Password is incorrect, Please try again.";
                header("Location: /login");
            }
        }else{
            $_SESSION["user-not-found"] = "User not found!";
            header("Location: /login");
        }
    }
?>