<?php

/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 03/09/2017
 * Time: 10:03
 */

namespace EstevamFin\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryCost extends Model
{
    protected $fillable = [
        "name",
        "user_id"
    ];
}