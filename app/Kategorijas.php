<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorijas extends Model
{
    protected $fillable = ['Naziv_cat'];
    protected $dates = ['created_at','updated_at'];
}
