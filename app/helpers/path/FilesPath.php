<?php

namespace Aplication\helpers\path;

class FilesPath
{
    public static function css(): string
    {
        return "src/css/style.css";
    }
 
    public static function view() : string
    {
       return __DIR__."/../../views/";
    }
}
