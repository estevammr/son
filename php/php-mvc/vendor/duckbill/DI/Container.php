<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 19/10/2016
 * Time: 13:44
 */

namespace duckbill\DI;


use App\Conn;

class Container
{
    public static function getModel($model)
    {
        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Conn::getDb());
    }
}