<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    protected $fillable = ['name'];

    protected $table = 'fotos';
}
