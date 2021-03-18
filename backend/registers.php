<?php

include("../connection/connection.php");

// echo "im here";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO admin (username,email,password) values( '$name','$email','$password')";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 400));
    }
} else {
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "select * from admin WHERE email='$email' && password ='$password'";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($data);
    // echo $row['password'];

    if ($row['email']) {
        $_SESSION['user'] = $_POST['username'];
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 400));
    }
}
