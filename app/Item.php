<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $attribute)
 */
class Item extends Model
{
    protected $fillable = ['name'];
}
