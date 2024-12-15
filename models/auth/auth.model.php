<?php
    function register($username, $email, $password){
        
        global $conn;

        $state = $conn->prepare("INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd)");
        $state->execute([
            ':username' => $username,
            ':email' => $email,
            ':pwd' =>  $password,
        ]);

        return $state->rowCount() > 0;
    }

    function login($email) {
        global $conn;
        $state = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $state->execute([
            ":email" => $email
        ]);

        return $state->fetch();
    }

    function changePwd($pwd){
        global $conn;
        $state = $conn->prepare("UPDATE users SET users.pwd = :pwd WHERE users.username = :username");
        $state ->execute([
            ":pwd" => $pwd,
            ":username" => $_SESSION["username"]
        ]);

        return $state->rowCount() > 0;
    }
?>