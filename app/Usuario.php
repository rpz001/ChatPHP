<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    use Notifiable;

    protected $fillable = [
        'nick', 'email', 'clave',
    ];

}
