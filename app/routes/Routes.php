<?php

namespace Aplication\routes;

use Aplication\controllers\filmes\FilmesController;
use Aplication\controllers\home\HomeController;
use Aplication\helpers\path\FilesPath;

class Routes
{
    public static function routes(): array
    {
        return [
            "/home" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => HomeController::class,
                "view" => FilesPath::view() . "index.php"
            ]
        ];
    }
}
