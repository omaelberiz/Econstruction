<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    //

    public $fillable = [
        'libelle',
        'superficie',
        'piece',
        'idPrograme',
        'idAppartement',
        'image',
        'prix'

    ];
}
