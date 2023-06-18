<?php
function getConnection()
{
    $dsn = 'mysql:dbname=test;host=127.0.0.1';
    $user = 'root';
    $password = 'rootpassword';

    $pdo = new PDO($dsn, $user, $password);


    return $pdo;
}
