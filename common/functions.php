<?php

class UI
{
    static function getBodyStart(string $additionalClasses)
    {
        require("common/body-start.php");
    }

    static function getHeader()
    {
        require("common/header.php");
    }

    static function getExternalDependencies()
    {
        require("common/external-dependencies.php");
    }
}
