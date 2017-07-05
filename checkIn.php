<?php

    require_once "dbconnect.php";

    $connect = new mysqli($host, $user, $password, $database);

    if ($connect->connect_errno!=0)
    {
        echo "Error: ".$connect->connect_errno."Ops..".$connect->connect_errno;
    }
    else
    {

    $login = $_POST['login'];
    $passw = $_POST['password'];

    echo "it works!";

    echo $login."<br />";
    echo $passw."<br />";

    $connect->close();

    }






?>