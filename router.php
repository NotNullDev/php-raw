<?php

require_once("controllers/HomeController.php");

class Router
{
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }


    public function direct()
    {
        $controller = new HomeController();
        if (explode("?", $this->request)[0] == "/") {
            $controller->index();
        } else {
            $controller->NotFound();
        }
    }
}
