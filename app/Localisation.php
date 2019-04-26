<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    //

    public  $fillable = [
        'libelle',
        'ville',
        'region'
    ];
}
