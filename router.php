<?php
    $URI = parse_url($_SERVER['REQUEST_URI'])["path"];

    $routes = [
        "/" => "controllers/home.controller.php",
        "/register" => "controllers/auth/register.controller.php",
        "/register/process" => "controllers/auth/register.process.controller.php",
        "/logout" => "controllers/auth/logout.controller.php",
        "/login" => "controllers/auth/login.controller.php",
        "/login/process" => "controllers/auth/login.process.controller.php"
    ];


    if(array_key_exists($URI, $routes)){
        require($routes[$URI]);
    }
?>