<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odgovoris extends Model
{
    protected $fillable = ['pitanja_id', 'odgovor_a', 'odgovor_b', 'odgovor_c','odgovor_d'];
    protected $dates = ['created_at','updated_at'];
}
