<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 19/10/2016
 * Time: 11:03
 */

namespace App;


class Conn
{
    public static function getDb()
    {
        return new \PDO("mysql:host=localhost;dbname=mvc","root", "1234");
    }
}