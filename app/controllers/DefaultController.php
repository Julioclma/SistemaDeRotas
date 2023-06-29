<?php

namespace Aplication\controllers;

use Aplication\exceptions\ViewNotFound;
use Aplication\helpers\server\RequestServer;
use Aplication\routes\Routes;

class DefaultController
{
    public function index(): void
    {
        include($this->findViewPath());
    }
    protected function findViewPath(): string
    {
        foreach (Routes::routes() as $key => $route) {
            if ($key === RequestServer::reqPath()) {
                if (array_key_exists('view', $route) && strlen($route['view']) > 0) {
                    return $route['view'];
                }
            }
        }

        throw new ViewNotFound("Caminho para View não encontrado");
    }
}
