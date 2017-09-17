<?php

/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 03/09/2017
 * Time: 10:03
 */

namespace EstevamFin\Models;

use Illuminate\Database\Eloquent\Model;

class BillReceive extends Model
{
    protected $fillable = [
        'date_launch',
        'name',
        'value',
        'user_id'
    ];
}
