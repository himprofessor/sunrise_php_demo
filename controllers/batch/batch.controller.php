<?php
    if (isset($_SESSION["username"])){
        require("views/pages/batchView/batchList.view.php");
    }else{
        header("Location: /login");
        die();
    }
?>