<?php

namespace Aplication\helpers\server;

class RequestServer
{
    public static function server(): array
    {
        return $_SERVER;
    }
    
    public static function reqType() : string
    {
        return self::server()['REQUEST_METHOD'];
    }

    public static function reqPath() : string
    {
        return self::server()["PATH_INFO"];
    }
}
