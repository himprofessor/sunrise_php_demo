<?php
    function register($username, $email, $password){
        $pwdHash = password_hash($password,  PASSWORD_DEFAULT);
        global $conn;

        $state = $conn->prepare("INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd)");
        $state->execute([
            ':username' => $username,
            ':email' => $email,
            ':pwd' => $pwdHash,
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
?>