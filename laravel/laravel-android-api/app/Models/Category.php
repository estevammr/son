<?php

namespace LaravelAndroid\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use HipsterJazzbo\Landlord\BelongsToTenants;

class Category extends Model implements Transformable
{
    use TransformableTrait;
	use BelongsToTenants;
	
    protected $fillable = [
    		'name'
    ];
}
