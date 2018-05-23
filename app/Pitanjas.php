<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pitanjas extends Model
{
    protected $fillable = ['Naziv_pit', 'kategorijas_id'];
    protected $dates = ['created_at','updated_at'];
}
