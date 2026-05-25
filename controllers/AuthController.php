<?php

session_start();

include_once '../models/User.php';

$user = new User();


// REGISTER

if(isset($_POST['register_btn'])){

    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(
        empty($name) ||
        empty($username) ||
        empty($email) ||
        empty($password)
    ){

        die("All fields are required");

    }

    $register = $user->register(
        $name,
        $username,
        $email,
        $password
    );

    if($register){

        header("Location: ../views/auth/login.php");

    }else{

        echo "Registration Failed";

    }

}



// LOGIN

if(isset($_POST['login_btn'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $loggedInUser = $user->login(
        $email,
        $password
    );

    if($loggedInUser){

        $_SESSION['user_id'] =
        $loggedInUser['id'];

        $_SESSION['user_name'] =
        $loggedInUser['name'];

        $_SESSION['user_role'] =
        $loggedInUser['role'];

        header("Location: ../index.php");

    }else{

        echo "Invalid Email or Password";

    }

}