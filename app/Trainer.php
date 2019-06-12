<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['avatar','name','description']; 
    /**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'slugs';
}
}
