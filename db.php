<?php
function DBConnect()
{
    $dsn = "mysql:host=localhost;dbname=trains";
    $user = "root";
    $passwd = "";

    $pdo = new PDO($dsn, $user, $passwd);
    return $pdo;
}

$pdo = DBConnect();

session_start();