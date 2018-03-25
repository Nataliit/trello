<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    protected $fillable = ['name', 'description'];

    public function shelves()
    {
        return $this->hasMany('App\Shelf');
    }
}
