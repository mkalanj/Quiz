<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pitanjas extends Model
{
    protected $primaryKey = 'id_pitanja';
    protected $fillable = ['kategorijas_id', 'Naziv_pit',];
    protected $dates = ['created_at','updated_at'];
}
