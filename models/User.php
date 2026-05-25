<?php

include_once __DIR__ . '/../config/database.php';

class User{

    private $conn;

    public function __construct(){

        global $conn;

        $this->conn = $conn;

    }

    // REGISTER USER

    public function register(
        $name,
        $username,
        $email,
        $password
    ){

        $hashedPassword = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        $query = "INSERT INTO users
        (name, username, email, password_hash)
        VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare(
            $this->conn,
            $query
        );

        mysqli_stmt_bind_param(
            $stmt,
            "ssss",
            $name,
            $username,
            $email,
            $hashedPassword
        );

        return mysqli_stmt_execute($stmt);

    }

    // LOGIN USER

    public function login(
        $email,
        $password
    ){

        $query = "SELECT * FROM users
        WHERE email = ?";

        $stmt = mysqli_prepare(
            $this->conn,
            $query
        );

        mysqli_stmt_bind_param(
            $stmt,
            "s",
            $email
        );

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){

            $user = mysqli_fetch_assoc($result);

            if(password_verify(
                $password,
                $user['password_hash']
            )){

                return $user;

            }

        }

        return false;

    }

}

?>