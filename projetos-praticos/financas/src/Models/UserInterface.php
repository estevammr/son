<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 03/09/2017
 * Time: 16:45
 */

namespace EstevamFin\Models;


interface UserInterface
{
    public function getId():int;
    public function getFullname():string;
    public function getEmail():string;
    public function getPassword():string;
}