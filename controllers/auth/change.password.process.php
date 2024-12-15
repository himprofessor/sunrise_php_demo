<?php

    require("models/auth/auth.model.php");
    if (isset($_SESSION["username"])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $newPwd = $_POST["new-pwd"];
            $oldPwd = $_POST["old-pwd"];
            $confirmPwd = $_POST["comfirm-pwd"];

            if(password_verify($oldPwd, $_SESSION["password"])){
                if($newPwd == $confirmPwd){
                    $newPwdHash = password_hash($newPwd, PASSWORD_DEFAULT);
                    if (changePwd($newPwdHash)){
                        $_SESSION["password"] = $newPwdHash;
                        header("Location: /");
                    }
                }else{
                    $pwdNotMatch = "Password doesn't match.";
                    require("views/pages/auth/change.password.view.php");
                }
            }else{
                $wrongPwd = "Password is invalid.";
                require("views/pages/auth/change.password.view.php");
            }
        }
    }else {
        header("Location: /login");
    }
?>