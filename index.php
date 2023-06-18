<?php
require_once("router.php");

$request = $_SERVER['REQUEST_URI'];

$router = new Router($request);
$router->direct();
