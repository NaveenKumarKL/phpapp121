<?php

require("connection/connection.php");
require_once("cache.php");
// if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
//     ob_start("ob_gzhandler");
// else ob_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" media="print" onload="this.media='all'" crossorigin>
    <!-- Bootstrap CSS -->
    <link rel="preload" href="./css/bootstrap/css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="preload" href="./css/bootstrap/js/bootstrap.min.js" as="script">

    <!--google fonts-->
    <link rel="preload" href="./css/font.css" as="style">
    <link rel="stylesheet" href="./css/font.css">
    <!-- css link -->
    <link rel="preload" href="./css/style.css" as="style">
    <link rel="stylesheet" href="./css/style.css">


    <title>testapp</title>
</head>

<body>