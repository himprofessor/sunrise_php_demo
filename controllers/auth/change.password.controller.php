<?php
    if (isset($_SESSION["username"])){
        require("views/pages/auth/change.password.view.php");
    }else{
        header("Location: /login");
        die();
    }
?>