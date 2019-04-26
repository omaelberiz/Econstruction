<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    //

    public $fillable = [
        'libellePro',
        'idLocalisation'
    ];
}
