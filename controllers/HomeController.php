<?php
require_once("models/user.php");

class HomeController
{
    public function index()
    {
        $users = User::getUsers();
        require("views/home.php");
    }
    public function NotFound()
    {
        require("views/404.php");
    }
}
