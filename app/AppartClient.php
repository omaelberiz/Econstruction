<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppartClient extends Model
{
    //
    public  $fillable = [
        'idAppartement',
        'etapes',
        'IdClient'

    ];
}
