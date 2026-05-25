<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "blog_news_platform";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){

    die("Database Connection Failed");

}

?>