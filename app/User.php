<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    public $fillable = [
        'nom',
        'prenom',
        'contact',
        'adresse',
        'email',
        'password',
        'typeProfile',
    ];

}
